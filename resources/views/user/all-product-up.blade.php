<div class="large-12 mobile-columns-2">
    <ul class="products columns-6">
        @foreach(\App\Product::productPriceUp() as $productItem)
            @if ($loop->index % 6 == 0 || $loop->index == 0)
                <?php $class = "first"?>
            @elseif( $loop->index % 5 == 0)
                <?php $class = "last"?>
            @else
                <?php $class = ""?>
            @endif
            <li class="product type-product post-5135 status-publish {{$class}} instock product_cat-stayhome product_cat-accessories has-post-thumbnail sale shipping-taxable purchasable product-type-simple animate">
                <div class="product_thumbnail_wrapper ">
                    <a href="{{url()->current().'/'.$productItem->id}}"
                       class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                        <div
                            class="product_thumbnail"
                            style="background-size: cover;">
                            <img width="350" height="435"
                                 src="{{$productItem->images}}"
                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                 alt=""
                                 sizes="(max-width: 350px) 100vw, 350px"></div>
                    </a>
                </div>
                <h2 class="woocommerce-loop-product__title">
                    <a href="{{url()->current().'/'.$productItem->id}}">{{$productItem->name}}</a>
                </h2>
                <div class="star-rating" role="img"
                     aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong
                            class="rating">5.00</strong> out of 5</span></div>
                <div class="product_after_shop_loop">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            {{$productItem->price}}<span class="woocommerce-Price-currencySymbol">đ</span>
                                                                        </span>
                                                                    </ins>
                                                                </span>
                    <div class="product_after_shop_loop_switcher"></div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
