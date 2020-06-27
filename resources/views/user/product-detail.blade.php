@extends('layouts.user-master-layout')
@section('page-title','Product')
@section('content')

    <div
        class="product-template-default single single-product postid-5124 wp-embed-responsive theme-shopkeeper woocommerce woocommerce-page woocommerce-js gbt_custom_notif product-layout-default wpb-js-composer js-comp-ver-6.2.0 vc_responsive">
        <div id="yith-wcwl-popup-message" style="display: none;">
            <div id="yith-wcwl-message"></div>
        </div>

        <div id="st-container" class="st-container">
            <div class="st-content" style="padding-top: 96px;">
                <div id="page_wrapper" class=" transparency_light">
                    <div class="top-headers-wrapper site-header-sticky sticky" style="display: block;">
                        <div class="top-clear"></div>
                    </div>
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
                            <div class="product_layout_classic default-layout">
                                <div class="row">
                                    <div class="xlarge-9 xlarge-centered columns">
                                        <div class="woocommerce-notices-wrapper"></div>
                                    </div>
                                </div>
                                <div id="product-5124"
                                     class="product type-product post-5124 status-publish first instock product_cat-stayhome product_cat-hoodies product_cat-jackets has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                    <div class="row">
                                        <div class="large-12 xlarge-10 xxlarge-9 large-centered columns">
                                            <div class="product_content_wrapper">
                                                <div class="row">
                                                    <div class="large-6 medium-12 columns">
                                                        <div class="product-images-wrapper">
                                                            <button class="mobile_gallery-zoom-button"></button>
                                                            <div
                                                                class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                                                data-columns="4"
                                                                style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                                                                <div class="flex-viewport"
                                                                     style="overflow: hidden; position: relative; height: 508px;">
                                                                    <figure class="woocommerce-product-gallery__wrapper"
                                                                            style="width: 800%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                                        <div
                                                                            data-thumb="https://shopkeeper.wp-theme.design/wp-content/uploads/Beck-Coat-01-150x150.jpg"
                                                                            data-thumb-alt=""
                                                                            class="woocommerce-product-gallery__image flex-active-slide"
                                                                            id="product-gallery"
                                                                            style="width: 411px; float: left; display: block; position: relative; overflow: hidden;">
                                                                            <img
                                                                                role="presentation" alt=""
                                                                                src="https://shopkeeper.wp-theme.design/wp-content/uploads/Beck-Coat-01.jpg"
                                                                                class="zoomImg"
                                                                                style="position: absolute; top: -215.15px; left: -567.691px; opacity: 0; width: 1049px; height: 1300px; border: none; max-width: none; max-height: none;">
                                                                        </div>
                                                                        <div
                                                                            data-thumb="https://shopkeeper.wp-theme.design/wp-content/uploads/Beck-Coat-04-150x150.jpg"
                                                                            data-thumb-alt=""
                                                                            class="woocommerce-product-gallery__image"
                                                                            id="product-gallery"
                                                                            style="width: 411px; float: left; display: block;">
                                                                        </div>
                                                                        <div
                                                                            class="woocommerce-product-gallery__image"
                                                                            id="product-gallery"
                                                                            style="width: 411px; float: left; display: block;">
                                                                        </div>
                                                                        <div
                                                                            class="woocommerce-product-gallery__image"
                                                                            id="product-gallery"
                                                                            style="width: 411px; float: left; display: block;">
                                                                            <a class="fresco"
                                                                               data-fresco-group="product-gallery"
                                                                               data-fresco-group-options="overflow: true, thumbnails: 'vertical', onClick: 'close'"><img
                                                                                    width="920" height="1140"
                                                                                    src="{{$obj->images}}"
                                                                                    class="fresco-img"
                                                                                    data-large_image_width="1049"
                                                                                    data-large_image_height="1300"
                                                                                    draggable="false">
                                                                            </a>
                                                                        </div>
                                                                    </figure>
                                                                </div>
{{--                                                                <ol class="flex-control-nav flex-control-thumbs">--}}
{{--                                                                    <li><img--}}
{{--                                                                            src="https://shopkeeper.wp-theme.design/wp-content/uploads/Beck-Coat-01-150x150.jpg"--}}
{{--                                                                            class="flex-active" draggable="false"></li>--}}
{{--                                                                    <li><img--}}
{{--                                                                            src="https://shopkeeper.wp-theme.design/wp-content/uploads/Beck-Coat-04-150x150.jpg"--}}
{{--                                                                            draggable="false"></li>--}}
{{--                                                                    <li><img--}}
{{--                                                                            src="https://shopkeeper.wp-theme.design/wp-content/uploads/Beck-Coat-03-150x150.jpg"--}}
{{--                                                                            draggable="false"></li>--}}
{{--                                                                    <li><img--}}
{{--                                                                            src="https://shopkeeper.wp-theme.design/wp-content/uploads/Beck-Coat-02-150x150.jpg"--}}
{{--                                                                            draggable="false"></li>--}}
{{--                                                                </ol>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="large-1 xlarge-1 xxlarge-1 columns">&nbsp;</div>
                                                    <div class="large-4 xlarge-5 xxlarge-5 large-push-0 columns">
                                                        <div class="product_infos">
                                                            <div class="product_summary_top">
                                                                <nav class="woocommerce-breadcrumb"><a
                                                                        href="https://shopkeeper.wp-theme.design">Home</a>
                                                                    <span class="breadcrump_sep">/</span> <a
                                                                        href="https://shopkeeper.wp-theme.design/shop/">
                                                                        Shop</a> <span class="breadcrump_sep">/</span>
                                                                    <a href="https://shopkeeper.wp-theme.design/product-category/hoodies/">{{$obj_category[0]->name}}</a>
                                                                    <span class="breadcrump_sep">/</span>{{$obj->name}}
                                                                </nav>
                                                                <div class="woocommerce-product-rating">
                                                                    <div class="star-rating" role="img"
                                                                         aria-label="Rated 4.00 out of 5"><span
                                                                            style="width:80%">Rated <strong
                                                                                class="rating">4.00</strong> out of 5 based on <span
                                                                                class="rating">6</span> customer ratings</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product_summary_middle">
                                                                <h1 class="product_title entry-title">{{$obj->name}}</h1>
                                                            </div>
                                                            <p class="price">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    {{$obj->price}}<span
                                                                        class="woocommerce-Price-currencySymbol">đ</span>
                                                                </span>
                                                            </p>
                                                            <div class="woocommerce-product-details__short-description">
                                                                <p>{{$obj->description}}</p>
                                                            </div>
                                                            <form class="variations_form cart" method="post"
                                                                  enctype="multipart/form-data" data-product_id="5124"
                                                                  data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;red&quot;,&quot;attribute_pa_size&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:259,&quot;display_regular_price&quot;:259,&quot;image&quot;:{&quot;title&quot;:&quot;Beck-Coat-01&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01-920x1140.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01-920x1140.jpg 920w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01-350x435.jpg 350w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01-242x300.jpg 242w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01-768x951.jpg 768w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01-827x1024.jpg 827w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01.jpg 1049w&quot;,&quot;sizes&quot;:&quot;(max-width: 920px) 100vw, 920px&quot;,&quot;full_src&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01.jpg&quot;,&quot;full_src_w&quot;:1049,&quot;full_src_h&quot;:1300,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01-150x150.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:150,&quot;gallery_thumbnail_src_h&quot;:150,&quot;thumb_src&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-01-350x435.jpg&quot;,&quot;thumb_src_w&quot;:350,&quot;thumb_src_h&quot;:435,&quot;src_w&quot;:920,&quot;src_h&quot;:1140},&quot;image_id&quot;:5127,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:5126,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;blue&quot;,&quot;attribute_pa_size&quot;:&quot;&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:259,&quot;display_regular_price&quot;:259,&quot;image&quot;:{&quot;title&quot;:&quot;Beck-Coat-05&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05-920x1140.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05-920x1140.jpg 920w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05-350x435.jpg 350w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05-242x300.jpg 242w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05-768x951.jpg 768w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05-827x1024.jpg 827w, https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05.jpg 1049w&quot;,&quot;sizes&quot;:&quot;(max-width: 920px) 100vw, 920px&quot;,&quot;full_src&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05.jpg&quot;,&quot;full_src_w&quot;:1049,&quot;full_src_h&quot;:1300,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05-150x150.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:150,&quot;gallery_thumbnail_src_h&quot;:150,&quot;thumb_src&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wp-content\/uploads\/Beck-Coat-05-350x435.jpg&quot;,&quot;thumb_src_w&quot;:350,&quot;thumb_src_h&quot;:435,&quot;src_w&quot;:920,&quot;src_h&quot;:1140},&quot;image_id&quot;:5131,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:5125,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;}]"
                                                                  current-image="5127">
                                                                <div class="single_variation_wrap">
                                                                    <div class="woocommerce-variation single_variation">
                                                                        <div
                                                                            class="woocommerce-variation-description"></div>
                                                                        <div class="woocommerce-variation-price"></div>
                                                                        <div
                                                                            class="woocommerce-variation-availability"></div>
                                                                    </div>
                                                                    <div
                                                                        class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-enabled">
                                                                        <div class="quantity custom">
                                                                            <label class="screen-reader-text"
                                                                                   for="quantity_5ef69cf230be1">Quantity</label>
                                                                            <a class="minus-btn" onclick="$('.num-product').val(Math.max(parseInt($('.num-product').val()) - 1,1))">
                                                                                <i class="spk-icon spk-icon-minus"></i>
                                                                            </a>
                                                                            <input type="number"
                                                                                   id="quantity_5ef69cf230be1"
                                                                                   class="input-text custom-qty qty text num-product"
                                                                                   onkeyup="this.value=this.value.replace(/[^\d]/,'')"
                                                                                   step="1" min="1" max=""
                                                                                   name="quantity" value="1" title="Qty"
                                                                                   size="4" inputmode="numeric"
                                                                                   placeholder=""
                                                                                   aria-labelledby="Rag &amp; Bone Beck Coat quantity">
                                                                            <a class="plus-btn" onclick="$('.num-product').val(parseInt($('.num-product').val()) + 1)">
                                                                                <i class="spk-icon spk-icon-plus"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="btn-addcart-product-detail" id="add-cart-{{$obj->id}}">
                                                                            <button type="submit"
                                                                                    class="single_add_to_cart_button button alt">
                                                                                Add to cart
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <div
                                                                class="yith-wcwl-add-to-wishlist  wishlist-fragment on-first-load add-to-wishlist-5126"
                                                                data-fragment-ref="5126"
                                                                data-fragment-options="{&quot;base_url&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/shop\/hoodies\/rag-bone-beck-coat?page&amp;product_cat=hoodies&amp;product=rag-bone-beck-coat&amp;post_type=product&amp;name=rag-bone-beck-coat&quot;,&quot;wishlist_url&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wishlist\/&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:true,&quot;show_exists&quot;:false,&quot;product_id&quot;:5124,&quot;parent_product_id&quot;:5124,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;You love this!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                            </div>
                                                            <div class="product_meta">
                                                                <span class="sku_wrapper">SKU: <span
                                                                        class="sku">N/A</span></span>
                                                                <span class="posted_in">Categories: <a
                                                                        href="https://shopkeeper.wp-theme.design/product-category/hoodies/"
                                                                        rel="tag">{{$obj_category[0]->name}}</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="large-1 columns show-for-large-only">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="large-9 large-centered columns">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="xlarge-9 xlarge-centered columns">
                                    </div>
                                </div>
                                <div class="single_product_summary_related">
                                    <div class="row">
                                        <div class="xlarge-9 xlarge-centered columns">
                                            <div class="row">
                                                <div class="large-12 large-centered columns">
                                                    <section class="related products mobile-columns-2">
                                                        <h2>Related products</h2>
                                                        <ul class="products columns-4">
                                                            @foreach($list_obj as $productItem)
                                                                @if($loop->index > 3)
                                                                    @break
                                                                @endif
                                                                @if ($loop->index == 0)
                                                                    <?php $class = "first"?>
                                                                @elseif( $loop->index % 3 == 0)
                                                                    <?php $class = "last"?>
                                                                @else
                                                                    <?php $class = ""?>
                                                                @endif
                                                                <li class="product type-product post-5110 status-publish {{$class}} instock product_cat-jackets product_cat-hoodies product_cat-trousers has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes animate">
                                                                    <div class="product_thumbnail_wrapper ">
                                                                        <a href="https://shopkeeper.wp-theme.design/shop/hoodies/oversize-drawstring-sweatshirt/"
                                                                           class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                            <div
                                                                                class="product_thumbnail with_second_image second_image_loaded"
                                                                                style="background-size: cover;">
                                                                            <span class="product_thumbnail_background"
                                                                                  style="background-image:url(https://shopkeeper.wp-theme.design/wp-content/uploads/9596322500_2_1_8_6-350x435.jpg)"></span>
                                                                                <img width="350" height="435"
                                                                                     src="https://shopkeeper.wp-theme.design/wp-content/uploads/9596322500_2_1_8_1-350x435.jpg"
                                                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                     alt=""
                                                                                     srcset="https://shopkeeper.wp-theme.design/wp-content/uploads/9596322500_2_1_8_1-350x435.jpg 350w, https://shopkeeper.wp-theme.design/wp-content/uploads/9596322500_2_1_8_1-920x1140.jpg 920w, https://shopkeeper.wp-theme.design/wp-content/uploads/9596322500_2_1_8_1-242x300.jpg 242w, https://shopkeeper.wp-theme.design/wp-content/uploads/9596322500_2_1_8_1.jpg 1049w"
                                                                                     sizes="(max-width: 350px) 100vw, 350px"
                                                                                     style="opacity: 1;"></div>
                                                                        </a>
                                                                        <div class="product_thumbnail_icons">
                                                                            <a href="#" id="product_id_5110"
                                                                               class="product_quickview_button"
                                                                               data-product_id="5110"></a>
                                                                            <div class="icons-separator"></div>
                                                                            <div
                                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-5110  wishlist-fragment on-first-load"
                                                                                data-fragment-ref="5110"
                                                                                data-fragment-options="{&quot;base_url&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/shop\/hoodies\/rag-bone-beck-coat?page&amp;product_cat=hoodies&amp;product=rag-bone-beck-coat&amp;post_type=product&amp;name=rag-bone-beck-coat&quot;,&quot;wishlist_url&quot;:&quot;https:\/\/shopkeeper.wp-theme.design\/wishlist\/&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5110,&quot;parent_product_id&quot;:5110,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;You love this!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <h2 class="woocommerce-loop-product__title">
                                                                        <a href="https://shopkeeper.wp-theme.design/shop/hoodies/oversize-drawstring-sweatshirt/">{{$productItem->name}}</a>
                                                                    </h2>
                                                                    <div class="star-rating" role="img"
                                                                         aria-label="Rated 4.67 out of 5"><span
                                                                            style="width:93.4%">Rated <strong
                                                                                class="rating">4.67</strong> out of 5</span>
                                                                    </div>
                                                                    <div class="product_after_shop_loop">
                                                                        <div class="product_after_shop_loop_switcher">
                                                                        <span class="price">
                                                                            <span
                                                                                class="woocommerce-Price-amount amount">
                                                                                {{$productItem->price}}<span class="woocommerce-Price-currencySymbol">đ</span>
                                                                            </span>
                                                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
