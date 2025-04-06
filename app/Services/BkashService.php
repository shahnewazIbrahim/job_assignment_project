<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class BkashService
{
    protected $base;

    public function __construct()
    {
        $this->base = config('services.bkash.base_url');
    }

    public function getToken()
    {
        if (Cache::has('bkash_token')) return Cache::get('bkash_token');

        $response = Http::withHeaders([
            'username' => config('services.bkash.username'),
            'password' => config('services.bkash.password'),
        ])->post($this->base . '/tokenized/checkout/token/grant', [
            'app_key' => config('services.bkash.app_key'),
            'app_secret' => config('services.bkash.app_secret'),
        ]);

        $data = $response->json();
        Cache::put('bkash_token', $data['id_token'], now()->addMinutes(55));

        return $data['id_token'];
    }

    public function createPayment($amount, $invoice)
    {
        $token = $this->getToken();

        $response = Http::withHeaders([
            'Authorization' => $token,
            'X-APP-Key' => config('services.bkash.app_key')
        ])->post($this->base . '/tokenized/checkout/create', [
            'amount' => $amount,
            'currency' => 'BDT',
            'intent' => 'sale',
            'merchantInvoiceNumber' => $invoice,
            'callbackURL' => config('services.bkash.callback_url'),
        ]);

        return $response->json();
    }

    public function executePayment($paymentID)
    {
        $token = $this->getToken();

        $response = Http::withHeaders([
            'Authorization' => $token,
            'X-APP-Key' => config('services.bkash.app_key')
        ])->post($this->base . '/tokenized/checkout/execute', [
            'paymentID' => $paymentID
        ]);

        return $response->json();
    }
}
