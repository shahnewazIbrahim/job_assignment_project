<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function scopeWithProduct($query)
    {
        return $query->with('product');
    }
    public function scopeWithProductAndQuantity($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }]);
    }
    public function scopeWithProductAndQuantityAndTotal($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }])->selectRaw('*, (quantity * product.price) as total');
    }
    public function scopeWithProductAndQuantityAndTotalAndOrder($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }])->selectRaw('*, (quantity * product.price) as total')->with('order');
    }
    public function scopeWithProductAndQuantityAndTotalAndOrderAndUser($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }])->selectRaw('*, (quantity * product.price) as total')->with(['order' => function ($q) {
            $q->with('user');
        }]);
    }
    public function scopeWithProductAndQuantityAndTotalAndOrderAndUserAndPayment($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }])->selectRaw('*, (quantity * product.price) as total')->with(['order' => function ($q) {
            $q->with(['user', 'payment']);
        }]);
    }
    public function scopeWithProductAndQuantityAndTotalAndOrderAndUserAndPaymentAndShipping($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }])->selectRaw('*, (quantity * product.price) as total')->with(['order' => function ($q) {
            $q->with(['user', 'payment', 'shipping']);
        }]);
    }
    public function scopeWithProductAndQuantityAndTotalAndOrderAndUserAndPaymentAndShippingAndAddress($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }])->selectRaw('*, (quantity * product.price) as total')->with(['order' => function ($q) {
            $q->with(['user', 'payment', 'shipping', 'address']);
        }]);
    }
    public function scopeWithProductAndQuantityAndTotalAndOrderAndUserAndPaymentAndShippingAndAddressAndStatus($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }])->selectRaw('*, (quantity * product.price) as total')->with(['order' => function ($q) {
            $q->with(['user', 'payment', 'shipping', 'address', 'status']);
        }]);
    }
    public function scopeWithProductAndQuantityAndTotalAndOrderAndUserAndPaymentAndShippingAndAddressAndStatusAndTracking($query)
    {
        return $query->with(['product' => function ($q) {
            $q->select('id', 'name', 'price');
        }])->selectRaw('*, (quantity * product.price) as total')->with(['order' => function ($q) {
            $q->with(['user', 'payment', 'shipping', 'address', 'status', 'tracking']);
        }]);
    }
}
