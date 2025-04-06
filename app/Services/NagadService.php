<?php
namespace App\Services;

class NagadService
{
    public function initiate($invoice, $amount)
    {
        // এইখানে তোমার encrypted payload, token, signature তৈরি করতে হবে
        // এবং Nagad এর sandbox URL-এ request পাঠাতে হবে

        // সফল হলে Nagad payment URL return করবে, তুমি ইউজারকে সেখানে redirect করবে
        return "https://sandbox.mynagad.com/remote-payment-gateway-url";
    }

    public function verify($paymentData)
    {
        // callback এ পাওয়া ট্রান্সাকশন ডেটা verify করে return করবে
        return true;
    }
}
