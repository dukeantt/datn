<div class="shopkeeper-mini-cart open" style="top: 8%; display: none" >
    <div class="widget woocommerce widget_shopping_cart"><h2 class="widgettitle">Cart</h2>
        <div class="widget_shopping_cart_content">
            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                <?php $subtotal = 0; ?>

                @if(count(\App\ShoppingCart::getCart()->items)>0)
                    @foreach(\App\ShoppingCart::getCart()->items as $item)
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a>
                                <img width="350" height="435"
                                     src="{{$item->product->images}}"
                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail">
                            <span>{{$item->product->name}}</span>
                            </a>
                            <span class="quantity">{{$item->quantity}} × <span
                                    class="woocommerce-Price-amount amount">
                                                    {{$item->product->price}}<span class="woocommerce-Price-currencySymbol">đ</span></span>
                                            </span>
                        </li>
                        <div style="display:none;">
                            {{$subtotal += $item->quantity * $item->product->price}}
                        </div>
                    @endforeach
                @else
                    <span style="margin-left: 148px;">No product in cart</span>
                @endif

            </ul>
            <p class="woocommerce-mini-cart__total total">
                <strong>Subtotal:</strong>
                <span class="woocommerce-Price-amount amount">
                                            {{$subtotal}}
                                            <span class="woocommerce-Price-currencySymbol">đ</span>
                                        </span>
            </p>
            <p class="woocommerce-mini-cart__buttons buttons">
                <a href="{{ url('view-cart/')}}"
                   class="button wc-forward">View cart</a>
                <a href="{{ url('checkout/')}}"
                   class="button checkout wc-forward">Checkout
                </a>
            </p>
        </div>
    </div>
</div>
