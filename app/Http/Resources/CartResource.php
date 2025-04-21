<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => (int) $this->id,
            'productId' => (int) $this->product->id ?? 0,
            'productName' => (string) $this->product->title ?? '',
            'productImage' => (string) $this->product->image ?? '',
            'price' => (float) $this->product->price ?? 0,
            'oldPrice' => (float) $this->product->old_price ?? 0,
            'discount' => (float) $this->product->discount ?? 0,
            'quantity' => (int) $this->quantity ?? '',
        ];
    }
}
