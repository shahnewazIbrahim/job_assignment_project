@php
    switch ($product->badge) {
        case 'Sale':
            $badge_color = 'bg-success';
            break;
        case 'Hot':
            $badge_color = 'bg-danger';
            break;
        default:
            $badge_color = '';
    }
@endphp
<div class="product">
    @if ($product->badge)
        <span class="pr_flash {{ $badge_color }}">{{ $product->badge }}</span>
    @endif
    <div class="product_img">
        <a href="shop-product-detail.html">
            <img src="{{ asset($product->image) }}" alt="product_img1" />
        </a>
        <div class="product_action_box">
            <ul class="list_none pr_action_btn">
                <li class="add-to-cart">
                    <a href="javascript:void(0)" onclick="addToCart({{ $product->id }})"><i class="icon-basket-loaded"></i> Add To
                        Cart</a>
                </li>
                <li>
                    <a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a>
                </li>
                <li>
                    <a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-heart"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="product_info">
        <h6 class="product_title">
            <a href="shop-product-detail.html">{{ $product->title }}</a>
        </h6>
        <div class="product_price">
            <span class="price">${{ $product->price }}</span>
            <del>${{ $product->old_price }}</del>
            <div class="on_sale">
                <span>{{ $product->discount }}% Off</span>
            </div>
        </div>
        <div class="rating_wrap">
            <div class="rating">
                <div class="product_rate" style="width: {{ ($product->rating / 5) * 100 }}%"></div>
            </div>
            <span class="rating_num">({{ $product->rating_count }})</span>
        </div>
        <div class="pr_desc">
            <p>
                {{ $product->description }}
            </p>
        </div>
        @php
            $colors = json_decode($product->colors, true);

            if (is_string($colors)) {
                $colors = json_decode($colors, true);
            }

        @endphp
        <div class="pr_switch_wrap">
            <div class="product_color_switch">
                {{-- <span class="active" data-color="#87554B"></span>
                    <span data-color="#333333"></span>
                    <span data-color="#DA323F"></span> --}}
                @foreach ($colors as $color)
                    <span class="{{ $loop->first ? 'active' : '' }}" data-color="{{ $color }}"></span>
                @endforeach
            </div>
        </div>
    </div>
</div>
