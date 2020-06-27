@extends('layouts.user-master-layout',['currentPage' => 'Products'])
@section('page-title','Product')
@section('content')
    <body
        class="archive post-type-archive post-type-archive-product wp-embed-responsive theme-shopkeeper woocommerce woocommerce-page woocommerce-js gbt_custom_notif wpb-js-composer js-comp-ver-6.2.0 vc_responsive">
    <div id="yith-wcwl-popup-message" style="display: none;">
        <div id="yith-wcwl-message"></div>
    </div>
    <div id="st-container" class="st-container">
        <div class="st-content" style="padding-top: 54px;">
            <div id="page_wrapper" class=" transparency_light">
                <div id="primary" class="content-area shop-page ">
                    <div class="woocommerce-products-header shop_header ">
                        <div class="shop_header_overlay"></div>
                        <div class="row">
                            <div class="large-12 large-centered columns">
                                <div class="row">
                                    <div class="large-6 large-centered columns">
                                        <div class="term-description">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list_shop_categories list-centered">
                                    <li class="category_item">
                                        <a href="https://shopkeeper.wp-theme.design/product-category/jackets/"
                                           class="category_item_link">
                                            <span class="category_name">Jackets</span>
                                        </a>
                                    </li>
                                    <li class="category_item">
                                        <a href="https://shopkeeper.wp-theme.design/product-category/hoodies/"
                                           class="category_item_link">
                                            <span class="category_name">Hoodies</span>
                                        </a>
                                    </li>
                                    <li class="category_item">
                                        <a href="https://shopkeeper.wp-theme.design/product-category/trousers/"
                                           class="category_item_link">
                                            <span class="category_name">Trousers</span>
                                        </a>
                                    </li>
                                    <li class="category_item">
                                        <a href="https://shopkeeper.wp-theme.design/product-category/accessories/"
                                           class="category_item_link">
                                            <span class="category_name">Accessories</span>
                                        </a>
                                    </li>
                                    <li class="category_item">
                                        <a href="https://shopkeeper.wp-theme.design/product-category/shoes/"
                                           class="category_item_link">
                                            <span class="category_name">Shoes</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="before_main_content">
                            </div>
                            <div id="content" class="site-content" role="main">
                                <div class="row">

                                    <div class="large-12 columns">
                                        <div class="catalog_top">
                                            <div class="woocommerce-notices-wrapper"></div>
                                        </div>
                                    </div>
                                    <div class="large-12 columns">
                                        <div class="tob_bar_shop">
                                            <div class="small-5 medium-7 large-6 xlarge-8 columns text-left">
                                                <div id="button_offcanvas_sidebar_left" data-toggle="offCanvasLeft1"
                                                     aria-expanded="false" aria-controls="offCanvasLeft1">
										<span class="filters-text">
											<i class="spk-icon spk-icon-menu-filters"></i>
											Filter										</span>
                                                </div>
                                                <nav class="woocommerce-breadcrumb"><a
                                                        href="https://shopkeeper.wp-theme.design">Home</a> <span
                                                        class="breadcrump_sep">/</span> The Shop
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="large-12 mobile-columns-2 ">
                                            <ul class="products columns-6">
                                                @foreach($obj as $productItem)
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
                                                                        class="product_thumbnail with_second_image second_image_loaded"
                                                                        style="background-size: cover;">
                                                                <span class="product_thumbnail_background"
                                                                      style="background-image:url(https://shopkeeper.wp-theme.design/wp-content/uploads/5983760398347411_03-350x435.jpg)"></span>
                                                                        <img width="350" height="435"
                                                                             src="https://shopkeeper.wp-theme.design/wp-content/uploads/5983760398347411_01-350x435.jpg"
                                                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                             alt=""
                                                                             srcset="https://shopkeeper.wp-theme.design/wp-content/uploads/5983760398347411_01-350x435.jpg 350w, https://shopkeeper.wp-theme.design/wp-content/uploads/5983760398347411_01-920x1140.jpg 920w, https://shopkeeper.wp-theme.design/wp-content/uploads/5983760398347411_01-242x300.jpg 242w, https://shopkeeper.wp-theme.design/wp-content/uploads/5983760398347411_01.jpg 1049w"
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

                                        <div class="woocommerce-after-shop-loop-wrapper">
                                            <div class="getbowtied_ajax_load_button finished" style="display: block;"><a
                                                    getbowtied_ajax_load_more_processing="0" class="disabled">No more
                                                    items available.</a></div>
                                            <nav class="woocommerce-pagination" style="display: none;">
                                                <ul class="page-numbers">
                                                    <li><a class="prev page-numbers"
                                                           href="https://shopkeeper.wp-theme.design/shop/page/2/">←</a>
                                                    </li>
                                                    <li><a class="page-numbers"
                                                           href="https://shopkeeper.wp-theme.design/shop/page/1/">1</a>
                                                    </li>
                                                    <li><a class="page-numbers"
                                                           href="https://shopkeeper.wp-theme.design/shop/page/2/">2</a>
                                                    </li>
                                                    <li><span aria-current="page" class="page-numbers current">3</span>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <footer id="site-footer" class="">
                    <div class="site-footer-copyright-area">
                        <div class="row">
                        </div>
                    </div>
                </footer>
            </div>
        </div>


        <!-- Mini Cart -->
        <div class="shopkeeper-mini-cart" style="top: 54px;">
            <div class="widget woocommerce widget_shopping_cart"><h2 class="widgettitle">Cart</h2>
                <div class="widget_shopping_cart_content">

                    <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="beacon-container">
        <div data-reactroot="" class="Beacon">
            <div class="fcy-1odx6v5 e1i7t89x0"></div>
            <div class="BeaconContainer is-configDisplayLeft fcy-oe1gfh e1swzdlb0" data-css-with-delay="false"></div>
            <div class="BeaconFabButtonFrame is-configDisplayLeft fcy-154gxqi e1b5xbr10"
                 style="border-radius: 55px; height: 55px; position: fixed; transform: scale(1); width: 136px; z-index: 99998;">
                <iframe id="" title="Help Scout Beacon"></iframe>
            </div>
            <span></span><!-- react-empty: 7 --><span></span></div>
    </div>
    </body>
@endsection
