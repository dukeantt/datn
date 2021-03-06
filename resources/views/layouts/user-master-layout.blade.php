<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <link rel="stylesheet" href="{{asset('font/font-awesome/css/font-awesome.min.css')}}"/>
    <title>@yield('page-title')</title>
    <link rel="icon" type="image/png" href="{{asset('img/1644871.svg')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('font/user-master-layout-font/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/product.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/checkout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/receipt.css')}}">
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/js/jquery.paginate.css')}}">

    <link rel="stylesheet" media="all"
          href="https://public-assets.envato-static.com/assets/market/core/index-cb5c44b557e4ceb7c7adf6eba6cc70a611179c36cae2ba3e99313802bbae5400.css">
    <link rel="stylesheet" media="all"
          href="https://public-assets.envato-static.com/assets/market/pages/preview/index-004d35cdd5d555cdd3e956d1b916825642de06529f0fe91fd9f390813761d2fc.css">


    <link rel="preload" as="font"
          href="https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Regular.woff2"
          type="font/woff2" crossorigin="">
    <link rel="preload" as="font"
          href="https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Bold.woff2"
          type="font/woff2" crossorigin="">
    <link rel="preload" as="font"
          href="https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Regular.woff2"
          type="font/woff2" crossorigin="">
    <link rel="preload" as="font"
          href="https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Bold.woff2"
          type="font/woff2" crossorigin="">

    <script type="text/javascript" src="https://beacon-v2.helpscout.net/static/js/main.4d1cb2cd.js"></script>
    <script type="text/javascript" src="https://beacon-v2.helpscout.net/static/js/vendor.0980e29f.js"></script>
    <script type="text/javascript" async="" src="https://beacon-v2.helpscout.net"></script>
    <script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script>
    <script type="text/javascript" async=""
            src="https://www.googletagmanager.com/gtag/js?id=AW-987271526&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" id="www-widgetapi-script"
            src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflgkj_Yq/www-widgetapi.js" async=""></script>
    <script async="" src="//www.googletagmanager.com/gtag/js?id=UA-34525675-8"></script>
    <script src="https://connect.facebook.net/signals/config/734492269948266?v=2.9.21&amp;r=stable" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script src="//www.youtube.com/iframe_api"></script>
    <script async="" crossorigin="anonymous" src="https://edge.fullstory.com/s/fs.js"></script>
    <script type="text/javascript" async=""
            src="https://tag.perfectaudience.com/serve/5e42e62f0ae85d78250000b1.js"></script>
    <script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>

    <link media="all"
          href="https://shopkeeper.wp-theme.design/wp-content/cache/autoptimize/css/autoptimize_a973c5732445b5ebac4e049e7fd53e47.css"
          rel="stylesheet">
    <link media="only screen and (max-width: 768px)"
          href="https://shopkeeper.wp-theme.design/wp-content/cache/autoptimize/css/autoptimize_dcb2de333eec7ab4ae31385ed8d6a393.css"
          rel="stylesheet">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <style id="shopkeeper-styles-inline-css" type="text/css">
        @font-face {
            font-family: Radnika;
            font-display: swap;
            font-style: normal;
            font-weight: 500;
            src: url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Regular.eot");
            src: url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Regular.eot?#iefix") format("embedded-opentype"), url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Regular.woff2") format("woff2"), url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Regular.woff") format("woff")
        }

        @font-face {
            font-family: Radnika;
            font-display: swap;
            font-style: normal;
            font-weight: 700;
            src: url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Bold.eot");
            src: url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Bold.eot?#iefix") format("embedded-opentype"), url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Bold.woff2") format("woff2"), url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/Radnika-Bold.woff") format("woff")
        }

        @font-face {
            font-family: NeueEinstellung;
            font-display: swap;
            font-style: normal;
            font-weight: 500;
            src: url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Regular.eot");
            src: url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Regular.eot?#iefix") format("embedded-opentype"), url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Regular.woff2") format("woff2"), url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Regular.woff") format("woff")
        }

        @font-face {
            font-family: NeueEinstellung;
            font-display: swap;
            font-style: normal;
            font-weight: 700;
            src: url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Bold.eot");
            src: url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Bold.eot?#iefix") format("embedded-opentype"), url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Bold.woff2") format("woff2"), url("https://shopkeeper.wp-theme.design/wp-content/themes/shopkeeper/inc/fonts/theme/NeueEinstellung-Bold.woff") format("woff")
        }

        .st-content, .categories_grid .category_name, .cd-top {
            background-color: #ffffff
        }

        .categories_grid .category_item:hover .category_name {
            color: #ffffff
        }

        h1, h2, h3, h4, h5, h6, .comments-title, .comment-author, #reply-title, #site-footer .widget-title, .accordion_title, .ui-tabs-anchor, .products .button, .site-title a, .post_meta_archive a, .post_meta a, .post_tags a, #nav-below a, .list_categories a, .list_shop_categories a, .main-navigation > ul > li > a, .main-navigation .mega-menu > ul > li > a, .more-link, .top-page-excerpt, .select2-search input, .product_after_shop_loop_buttons a, .woocommerce .products-grid a.button, .page-numbers, input.qty, .button, button, .button_text, input[type="button"], input[type="reset"], input[type="submit"], button[type="submit"], .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page #content input.button.alt, .yith-wcwl-wishlistexistsbrowse.show a, .share-product-text, .tabs > li > a, label, .comment-respond label, .product_meta_title, .woocommerce table.shop_table th, .woocommerce-page table.shop_table th, #map_button, .woocommerce .cart-collaterals .cart_totals tr.order-total td strong, .woocommerce-page .cart-collaterals .cart_totals tr.order-total td strong, .cart-wishlist-empty, .wishlist-empty, .cart-empty, .return-to-shop .wc-backward, .order-number a, .post-edit-link, .from_the_blog_title, .icon_box_read_more, .vc_pie_chart_value, .shortcode_banner_simple_bullet, .shortcode_banner_simple_height_bullet, .product-category .woocommerce-loop-category__title, .categories_grid .category_name, .woocommerce span.onsale, .woocommerce-page span.onsale, .out_of_stock_badge_single, .out_of_stock_badge_loop, .page-numbers, .post-nav-links span, .post-nav-links a, .add_to_wishlist, .yith-wcwl-wishlistaddedbrowse, .yith-wcwl-wishlistexistsbrowse, .filters-group, .product-name, .product-quantity, .product-total, .download-product a, .woocommerce-order-details table tfoot th, .woocommerce-order-details table tfoot td, .woocommerce .woocommerce-order-downloads table tbody td:before, .woocommerce table.woocommerce-MyAccount-orders td:before, .widget h3, .widget .total .amount, .wishlist-in-stock, .wishlist-out-of-stock, .comment-reply-link, .comment-edit-link, .widget_calendar table thead tr th, .page-type, .mobile-navigation a, table thead tr th, .portfolio_single_list_cat, .portfolio-categories, .shipping-calculator-button, .vc_btn, .vc_btn2, .vc_btn3, .account-tab-item .account-tab-link, .account-tab-list .sep, ul.order_details li, ul.order_details.bacs_details li, .widget_calendar caption, .widget_recent_comments li a, .edit-account legend, .widget_shopping_cart li.empty, .cart-collaterals .cart_totals .shop_table .order-total .woocommerce-Price-amount, .woocommerce table.cart .cart_item td a, .woocommerce #content table.cart .cart_item td a, .woocommerce-page table.cart .cart_item td a, .woocommerce-page #content table.cart .cart_item td a, .woocommerce table.cart .cart_item td span, .woocommerce #content table.cart .cart_item td span, .woocommerce-page table.cart .cart_item td span, .woocommerce-page #content table.cart .cart_item td span, .woocommerce-MyAccount-navigation ul li, .cd-quick-view .cd-item-info .product_infos .quickview-badges .onsale, .woocommerce-info.wc_points_rewards_earn_points, .woocommerce-info, .woocommerce-error, .woocommerce-message, .woocommerce .cart-collaterals .cart_totals .cart-subtotal th, .woocommerce-page .cart-collaterals .cart_totals .cart-subtotal th, .woocommerce .cart-collaterals .cart_totals tr.shipping th, .woocommerce-page .cart-collaterals .cart_totals tr.shipping th, .woocommerce .cart-collaterals .cart_totals tr.order-total th, .woocommerce-page .cart-collaterals .cart_totals tr.order-total th, .woocommerce .cart-collaterals .cart_totals h2, .woocommerce .cart-collaterals .cross-sells h2, .woocommerce-cart #content table.cart td.actions .coupon #coupon_code, form.checkout_coupon #coupon_code, .woocommerce-checkout .woocommerce-info, .shopkeeper_checkout_coupon, .shopkeeper_checkout_login, .minicart-message, .woocommerce .woocommerce-checkout-review-order table.shop_table tfoot td, .woocommerce .woocommerce-checkout-review-order table.shop_table tfoot th, .woocommerce-page .woocommerce-checkout-review-order table.shop_table tfoot td, .woocommerce-page .woocommerce-checkout-review-order table.shop_table tfoot th, .no-products-info p, .getbowtied_blog_ajax_load_button a, .getbowtied_ajax_load_button a, .index-layout-2 ul.blog-posts .blog-post article .post-categories li a, .index-layout-3 .blog-posts_container ul.blog-posts .blog-post article .post-categories li a, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more, .index-layout-3 .blog-posts_container ul.blog-posts .blog-post article .post_content_wrapper .post_content .read_more, .woocommerce .woocommerce-breadcrumb, .woocommerce-page .woocommerce-breadcrumb, .woocommerce .woocommerce-breadcrumb a, .woocommerce-page .woocommerce-breadcrumb a, .product_meta, .product_meta span, .product_meta a, .product_layout_classic div.product span.price, .product_layout_classic div.product p.price, .product_layout_2 div.product span.price, .product_layout_2 div.product p.price, .product_layout_3 div.product span.price, .product_layout_3 div.product p.price, .product_layout_4 div.product span.price, .product_layout_4 div.product p.price, .related-products-title, .product_socials_wrapper .share-product-text, #button_offcanvas_sidebar_left .filters-text, .woocommerce-ordering select.orderby, .fr-position-text, .woocommerce-checkout-review-order .woocommerce-checkout-review-order-table tr td, .catalog-ordering .select2-container.orderby a, .catalog-ordering .select2-container span, .widget_product_categories ul li .count, .widget_layered_nav ul li .count, .woocommerce-mini-cart__empty-message, .woocommerce-ordering select.orderby, .woocommerce .cart-collaterals .cart_totals table.shop_table_responsive tr td::before, .woocommerce-page .cart-collaterals .cart_totals table.shop_table_responsive tr td::before, .login-register-container .lost-pass-link, .woocommerce-cart .cart-collaterals .cart_totals table td .amount, .wpb_wrapper .add_to_cart_inline .woocommerce-Price-amount.amount, .woocommerce-page .cart-collaterals .cart_totals tr.shipping td, .woocommerce-page .cart-collaterals .cart_totals tr.shipping td, .woocommerce .cart-collaterals .cart_totals tr.cart-discount th, .woocommerce-page .cart-collaterals .cart_totals tr.cart-discount th, .woocommerce-thankyou-order-received, .woocommerce-order-received .woocommerce table.shop_table tfoot th, .woocommerce-order-received .woocommerce-page table.shop_table tfoot th, .woocommerce-view-order .woocommerce table.shop_table tfoot th, .woocommerce-view-order .woocommerce-page table.shop_table tfoot th, .woocommerce-order-received .woocommerce table.shop_table tfoot td, .woocommerce-order-received .woocommerce-page table.shop_table tfoot td, .woocommerce-view-order .woocommerce table.shop_table tfoot td, .woocommerce-view-order .woocommerce-page table.shop_table tfoot td, .language-and-currency #top_bar_language_list > ul > li, .language-and-currency .wcml_currency_switcher > ul > li.wcml-cs-active-currency, .language-and-currency-offcanvas #top_bar_language_list > ul > li, .language-and-currency-offcanvas .wcml_currency_switcher > ul > li.wcml-cs-active-currency, .woocommerce-order-pay .woocommerce .woocommerce-form-login p.lost_password a, .woocommerce-MyAccount-content .woocommerce-orders-table__cell-order-number a, .woocommerce form.login .lost_password, .comment-reply-title, .product_content_wrapper .product_infos .out_of_stock_wrapper .out_of_stock_badge_single, .product_content_wrapper .product_infos .woocommerce-variation-availability p.stock.out-of-stock, .site-search .widget_product_search .search-field, .site-search .widget_search .search-field, .site-search .search-form .search-field, .site-search .search-text, .site-search .search-no-suggestions, .latest_posts_grid_wrapper .latest_posts_grid_title, p.has-drop-cap:not(:focus):first-letter, .paypal-button-tagline .paypal-button-text, .tinvwl_add_to_wishlist_button, .product-addon-totals, body.gbt_custom_notif .page-notifications .gbt-custom-notification-message, body.gbt_custom_notif .page-notifications .gbt-custom-notification-message *, body.gbt_custom_notif .page-notifications .product_notification_text, body.gbt_custom_notif .page-notifications .product_notification_text *, body.gbt_classic_notif .woocommerce-error a, body.gbt_classic_notif .woocommerce-info a, body.gbt_classic_notif .woocommerce-message a, body.gbt_classic_notif .woocommerce-notice a, .shop_table.cart .product-price .amount, p.has-drop-cap:first-letter, .woocommerce-result-count, .widget_price_filter .price_slider_amount, .woocommerce ul.products li.product .price, .product_content_wrapper .product_infos table.variations td.label, .woocommerce div.product form.cart .reset_variations, .cd-quick-view .cd-item-info .product_infos .product_price .price, #powerTip, div.wcva_shop_textblock, .wcva_filter_textblock, .wcva_single_textblock, .cd-quick-view .swatchtitlelabel, .cd-quick-view .wcva_attribute_sep, .cd-quick-view .wcva_selected_attribute, .added_to_cart, .upper a, .wp-block-woocommerce-active-filters ul.wc-block-active-filters-list li *, .wp-block-woocommerce-active-filters .wc-block-active-filters__clear-all, .product_navigation #nav-below span, .order-info mark {
            font-family: "NeueEinstellung", -apple-system, BlinkMacSystemFont, Arial, Helvetica, 'Helvetica Neue', Verdana, sans-serif
        }

        body, p, #site-navigation-top-bar, .site-title, .widget_product_search #searchsubmit, .widget_search #searchsubmit, .widget_product_search .search-submit, .widget_search .search-submit, #site-menu, .copyright_text, blockquote cite, table thead th, .recently_viewed_in_single h2, .woocommerce .cart-collaterals .cart_totals table th, .woocommerce-page .cart-collaterals .cart_totals table th, .woocommerce .cart-collaterals .shipping_calculator h2, .woocommerce-page .cart-collaterals .shipping_calculator h2, .woocommerce table.woocommerce-checkout-review-order-table tfoot th, .woocommerce-page table.woocommerce-checkout-review-order-table tfoot th, .qty, .shortcode_banner_simple_inside h4, .shortcode_banner_simple_height h4, .fr-caption, .post_meta_archive, .post_meta, .yith-wcwl-wishlistaddedbrowse .feedback, .yith-wcwl-wishlistexistsbrowse .feedback, .product-name span, .widget_calendar table tbody a, .fr-touch-caption-wrapper, .woocommerce .checkout_login p.form-row label[for="rememberme"], .wpb_widgetised_column aside ul li span.count, .woocommerce td.product-name dl.variation dt, .woocommerce td.product-name dl.variation dd, .woocommerce td.product-name dl.variation dt p, .woocommerce td.product-name dl.variation dd p, .woocommerce-page td.product-name dl.variation dt, .woocommerce-page td.product-name dl.variation dd p, .woocommerce-page td.product-name dl.variation dt p, .woocommerce .select2-container, .check_label, .woocommerce-page #payment .terms label, ul.order_details li strong, .widget_recent_comments li, .widget_shopping_cart p.total, .widget_shopping_cart p.total .amount, .mobile-navigation li ul li a, .woocommerce #payment div.payment_box p, .woocommerce-page #payment div.payment_box p, .woocommerce table.cart .cart_item td:before, .woocommerce #content table.cart .cart_item td:before, .woocommerce-page table.cart .cart_item td:before, .woocommerce-page #content table.cart .cart_item td:before, .language-and-currency #top_bar_language_list > ul > li > ul > li > a, .language-and-currency .wcml_currency_switcher > ul > li.wcml-cs-active-currency > ul.wcml-cs-submenu li a, .language-and-currency #top_bar_language_list > ul > li.menu-item-first > ul.sub-menu li.sub-menu-item span.icl_lang_sel_current, .language-and-currency-offcanvas #top_bar_language_list > ul > li > ul > li > a, .language-and-currency-offcanvas .wcml_currency_switcher > ul > li.wcml-cs-active-currency > ul.wcml-cs-submenu li a, .language-and-currency-offcanvas #top_bar_language_list > ul > li.menu-item-first > ul.sub-menu li.sub-menu-item span.icl_lang_sel_current, .woocommerce-order-pay .woocommerce .woocommerce-info, .select2-results__option, body.gbt_classic_notif .woocommerce-error, body.gbt_classic_notif .woocommerce-info, body.gbt_classic_notif .woocommerce-message, body.gbt_classic_notif .woocommerce-notice, .gbt_18_sk_editor_banner_subtitle, .gbt_18_sk_editor_slide_description_input, .woocommerce td.product-name .wc-item-meta li, .woocommerce ul.products li.product .woocommerce-loop-product__title, .product_content_wrapper .product_infos span.belowtext, .wc-block-grid__product-title, .wp-block-woocommerce-attribute-filter ul.wc-block-checkbox-list li label, .wp-block-woocommerce-active-filters ul.wc-block-active-filters-list li .wc-block-active-filters-list-item__name {
            font-family: "Radnika", -apple-system, BlinkMacSystemFont, Arial, Helvetica, 'Helvetica Neue', Verdana, sans-serif
        }

        .call-to-action-canvas .call-to-action-purchase-link, .call-to-action-canvas .call-to-action-bottom-purchase-link .call-to-action-canvas .call-to-action-testimonial-text, .call-to-action-canvas .call-to-action-links a, .call-to-action-canvas .call-to-action-layout-badge, .call-to-action-canvas .call-to-action-refund-text, .call-to-action-canvas .call-to-action-testimonial-author a, .call-to-action-canvas a.call-to-action-bottom-purchase-link {
            font-family: "NeueEinstellung", -apple-system, BlinkMacSystemFont, Arial, Helvetica, 'Helvetica Neue', Verdana, sans-serif
        }

        .call-to-action-canvas .call-to-action-testimonial-author {
            font-family: "Radnika", -apple-system, BlinkMacSystemFont, Arial, Helvetica, 'Helvetica Neue', Verdana, sans-serif
        }

        h1, .woocommerce h1, .woocommerce-page h1 {
            font-size: 30.797px
        }

        h2, .woocommerce h2, .woocommerce-page h2 {
            font-size: 23.101px
        }

        h3, .woocommerce h3, .woocommerce-page h3 {
            font-size: 17.329px
        }

        h4, .woocommerce h4, .woocommerce-page h4 {
            font-size: 13px
        }

        h5, .woocommerce h5, .woocommerce-page h5 {
            font-size: 9.75px
        }

        .woocommerce-account .account-tab-list .account-tab-item .account-tab-link {
            font-size: 54.487px
        }

        .page-title.blog-listing, .woocommerce .page-title, .page-title, .single .entry-title, .woocommerce-cart .page-title, .woocommerce-checkout .page-title, .woocommerce-account .page-title {
            font-size: 41.041px
        }

        p.has-drop-cap:first-letter {
            font-size: 41.041px !important
        }

        .entry-title-archive, .wp-block-latest-posts li > a {
            font-size: 30.659px
        }

        .woocommerce #content div.product .product_title, .woocommerce div.product .product_title, .woocommerce-page #content div.product .product_title, .woocommerce-page div.product .product_title {
            font-size: 23.101px
        }

        h2.woocommerce-order-details__title, h2.woocommerce-column__title, h2.woocommerce-order-downloads__title {
            font-size: 17.329px
        }

        .woocommerce-checkout .content-area h3, .woocommerce-edit-address h3, .woocommerce-edit-account legend {
            font-size: 13px
        }

        @media only screen and (max-width: 768px) {
            .woocommerce-account .account-tab-list .account-tab-item .account-tab-link {
                font-size: 30.797px
            }

            .shortcode_getbowtied_slider .swiper-slide h2 {
                font-size: 30.797px !important
            }
        }

        @media only screen and (min-width: 768px) {
            h1, .woocommerce h1, .woocommerce-page h1 {
                font-size: 54.487px
            }

            h2, .woocommerce h2, .woocommerce-page h2 {
                font-size: 40.871px
            }

            h3, .woocommerce h3, .woocommerce-page h3 {
                font-size: 30.659px
            }

            h4, .woocommerce h4, .woocommerce-page h4 {
                font-size: 23px
            }

            h5, .woocommerce h5, .woocommerce-page h5 {
                font-size: 17.25px
            }

            .page-title.blog-listing, .woocommerce .page-title, .page-title, .single .entry-title, .woocommerce-cart .page-title, .woocommerce-checkout .page-title, .woocommerce-account .page-title {
                font-size: 72.611px
            }

            p.has-drop-cap:first-letter {
                font-size: 72.611px !important
            }

            .entry-title-archive, .wp-block-latest-posts li > a {
                font-size: 30.659px
            }

            .woocommerce-checkout .content-area h3, h2.woocommerce-order-details__title, h2.woocommerce-column__title, h2.woocommerce-order-downloads__title, .woocommerce-edit-address h3, .woocommerce-edit-account legend, .woocommerce-order-received h2, .fr-position-text {
                font-size: 23px
            }
        }

        @media only screen and (min-width: 1024px) {
            .woocommerce #content div.product .product_title, .woocommerce div.product .product_title, .woocommerce-page #content div.product .product_title, .woocommerce-page div.product .product_title {
                font-size: 40.871px
            }
        }

        @media only screen and (max-width: 1023px) {
            .woocommerce #content div.product .product_title, .woocommerce div.product .product_title, .woocommerce-page #content div.product .product_title, .woocommerce-page div.product .product_title {
                font-size: 23.101px
            }
        }

        @media only screen and (min-width: 1024px) {
            p, .woocommerce table.shop_attributes th, .woocommerce-page table.shop_attributes th, .woocommerce table.shop_attributes td, .woocommerce-page table.shop_attributes td, .woocommerce-review-link, .blog-isotope .entry-content-archive, .blog-isotope .entry-content-archive *, body.gbt_classic_notif .woocommerce-message, body.gbt_classic_notif .woocommerce-error, body.gbt_classic_notif .woocommerce-info, body.gbt_classic_notif .woocommerce-notice, .woocommerce-store-notice, p.demo_store, .woocommerce-account .woocommerce-MyAccount-content table.woocommerce-MyAccount-orders td, ul li ul, ul li ol, ul, ol, dl {
                font-size: 16px
            }
        }

        .woocommerce ul.order_details li strong, .fr-caption, .woocommerce-order-pay .woocommerce .woocommerce-info {
            font-size: 16px !important
        }

        @media only screen and (min-width: 768px) {
            .woocommerce ul.products li.product .woocommerce-loop-product__title, .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-link .wc-block-grid__product-title {
                font-size: 13px !important
            }
        }

        body, table tr th, table tr td, table thead tr th, blockquote p, pre, del, label, .select2-dropdown-open.select2-drop-above .select2-choice, .select2-dropdown-open.select2-drop-above .select2-choices, .select2-container, .big-select, .select.big-select, .post_meta_archive a, .post_meta a, .nav-next a, .nav-previous a, .blog-single h6, .page-description, .woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li span.current, .posts-navigation .page-numbers a:hover, .woocommerce table.shop_table th, .woocommerce-page table.shop_table th, .woocommerce-checkout .woocommerce-info, .wpb_widgetised_column .widget.widget_product_categories a:hover, .wpb_widgetised_column .widget.widget_layered_nav a:hover, .wpb_widgetised_column .widget.widget_layered_nav li, .portfolio_single_list_cat a, .gallery-caption-trigger, .widget_shopping_cart p.total, .widget_shopping_cart p.total .amount, .wpb_widgetised_column .widget_shopping_cart li.empty, .index-layout-2 ul.blog-posts .blog-post article .post-date, .cd-quick-view .cd-close:after, form.checkout_coupon #coupon_code, .woocommerce .product_infos .quantity input.qty, .woocommerce #content .product_infos .quantity input.qty, .woocommerce-page .product_infos .quantity input.qty, .woocommerce-page #content .product_infos .quantity input.qty, #button_offcanvas_sidebar_left, .fr-position-text, .quantity.custom input.custom-qty, .add_to_wishlist, .product_infos .add_to_wishlist:before, .product_infos .yith-wcwl-wishlistaddedbrowse:before, .product_infos .yith-wcwl-wishlistexistsbrowse:before, #add_payment_method #payment .payment_method_paypal .about_paypal, .woocommerce-cart #payment .payment_method_paypal .about_paypal, .woocommerce-checkout #payment .payment_method_paypal .about_paypal, #stripe-payment-data > p > a, .product-name .product-quantity, .woocommerce #payment div.payment_box, .woocommerce-order-pay #order_review .shop_table tr.order_item td.product-quantity strong, .tinvwl_add_to_wishlist_button:before, body.gbt_classic_notif .woocommerce-info, .select2-search--dropdown:after, body.gbt_classic_notif .woocommerce-notice, .woocommerce-cart #content table.cart td.actions .coupon #coupon_code, .woocommerce ul.products li.product .price del, .off-canvas .woocommerce .price del, .select2-container--default .select2-selection--multiple .select2-selection__choice__remove, .wc-block-grid__product-price.price del {
            color: #545454
        }

        a.woocommerce-remove-coupon:after, .fr-caption, .woocommerce-order-pay .woocommerce .woocommerce-info, body.gbt_classic_notif .woocommerce-info::before, table.shop_attributes td {
            color: #545454 !important
        }

        .nav-previous-title, .nav-next-title {
            color: rgba(84, 84, 84, 0.4)
        }

        .required {
            color: rgba(84, 84, 84, 0.4) !important
        }

        .yith-wcwl-add-button, .share-product-text, .product_meta, .product_meta a, .product_meta_separator, .tob_bar_shop, .post_meta_archive, .post_meta, .wpb_widgetised_column .widget li, .wpb_widgetised_column .widget_calendar table thead tr th, .wpb_widgetised_column .widget_calendar table thead tr td, .wpb_widgetised_column .widget .post-date, .wpb_widgetised_column .recentcomments, .wpb_widgetised_column .amount, .wpb_widgetised_column .quantity, .wpb_widgetised_column .widget_price_filter .price_slider_amount, .woocommerce .woocommerce-breadcrumb, .woocommerce-page .woocommerce-breadcrumb, .woocommerce .woocommerce-breadcrumb a, .woocommerce-page .woocommerce-breadcrumb a, .archive .products-grid li .product_thumbnail_wrapper > .price .woocommerce-Price-amount, .site-search .search-text, .site-search .site-search-close .close-button:hover, .menu-close .close-button:hover, .site-search .woocommerce-product-search:after, .site-search .widget_search .search-form:after, .product_navigation #nav-below .product-nav-previous *, .product_navigation #nav-below .product-nav-next * {
            color: rgba(84, 84, 84, 0.55)
        }

        .woocommerce-account .woocommerce-MyAccount-content table.woocommerce-MyAccount-orders td.woocommerce-orders-table__cell-order-actions .button:after, .woocommerce-account .woocommerce-MyAccount-content table.account-payment-methods-table td.payment-method-actions .button:after {
            color: rgba(84, 84, 84, 0.15)
        }

        .products a.button.add_to_cart_button.loading, .woocommerce ul.products li.product .price, .off-canvas .woocommerce .price, .wc-block-grid__product-price span, .wpb_wrapper .add_to_cart_inline del .woocommerce-Price-amount.amount, .wp-block-getbowtied-scattered-product-list .gbt_18_product_price {
            color: rgba(84, 84, 84, 0.8) !important
        }

        .yith-wcwl-add-to-wishlist:after, .bg-image-wrapper.no-image, .site-search .spin:before, .site-search .spin:after {
            background-color: rgba(84, 84, 84, 0.55)
        }

        .product_layout_2 .product_content_wrapper .product-images-wrapper .product-images-style-2 .product_images .product-image .caption:before, .product_layout_3 .product_content_wrapper .product-images-wrapper .product-images-style-3 .product_images .product-image .caption:before, .fr-caption:before, .product_content_wrapper .product-images-wrapper .product_images .product-images-controller .dot.current {
            background-color: #545454
        }

        .product_content_wrapper .product-images-wrapper .product_images .product-images-controller .dot {
            background-color: rgba(84, 84, 84, 0.55)
        }

        #add_payment_method #payment div.payment_box .wc-credit-card-form, .woocommerce-account.woocommerce-add-payment-method #add_payment_method #payment div.payment_box .wc-payment-form, .woocommerce-cart #payment div.payment_box .wc-credit-card-form, .woocommerce-checkout #payment div.payment_box .wc-credit-card-form, .cd-quick-view .cd-item-info .product_infos .out_of_stock_wrapper .out_of_stock_badge_single, .product_content_wrapper .product_infos .woocommerce-variation-availability p.stock.out-of-stock, .product_layout_classic .product_infos .out_of_stock_wrapper .out_of_stock_badge_single, .product_layout_2 .product_content_wrapper .product_infos .out_of_stock_wrapper .out_of_stock_badge_single, .product_layout_3 .product_content_wrapper .product_infos .out_of_stock_wrapper .out_of_stock_badge_single, .product_layout_4 .product_content_wrapper .product_infos .out_of_stock_wrapper .out_of_stock_badge_single {
            border-color: rgba(84, 84, 84, 0.55)
        }

        .add_to_cart_inline .amount, .wpb_widgetised_column .widget, .widget_layered_nav, .wpb_widgetised_column aside ul li span.count, .shop_table.cart .product-price .amount, .quantity.custom .minus-btn, .quantity.custom .plus-btn, .woocommerce td.product-name dl.variation dt, .woocommerce td.product-name dl.variation dd, .woocommerce td.product-name dl.variation dt p, .woocommerce td.product-name dl.variation dd p, .woocommerce-page td.product-name dl.variation dt, .woocommerce-page td.product-name dl.variation dd p, .woocommerce-page td.product-name dl.variation dt p, .woocommerce-page td.product-name dl.variation dd p, .woocommerce a.remove, .woocommerce a.remove:after, .woocommerce td.product-name .wc-item-meta li, .wpb_widgetised_column .tagcloud a, .post_tags a, .select2-container--default .select2-selection--multiple .select2-selection__choice, .wpb_widgetised_column .widget.widget_layered_nav li.select2-selection__choice, .woocommerce .products .product_thumbnail_icons .product_quickview_button, .products .add_to_wishlist:before {
            color: rgba(84, 84, 84, 0.8)
        }

        #coupon_code::-webkit-input-placeholder {
            color: rgba(84, 84, 84, 0.8)
        }

        #coupon_code::-moz-placeholder {
            color: rgba(84, 84, 84, 0.8)
        }

        #coupon_code:-ms-input-placeholder {
            color: rgba(84, 84, 84, 0.8)
        }

        .woocommerce #content table.wishlist_table.cart a.remove, .woocommerce.widget_shopping_cart .cart_list li a.remove {
            color: rgba(84, 84, 84, 0.8) !important
        }

        input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], textarea, select, .woocommerce-checkout .select2-container--default .select2-selection--single, .country_select.select2-container, #billing_country_field .select2-container, #billing_state_field .select2-container, #calc_shipping_country_field .select2-container, #calc_shipping_state_field .select2-container, .woocommerce-widget-layered-nav-dropdown .select2-container .select2-selection--single, .woocommerce-widget-layered-nav-dropdown .select2-container .select2-selection--multiple, #shipping_country_field .select2-container, #shipping_state_field .select2-container, .woocommerce-address-fields .select2-container--default .select2-selection--single, .woocommerce-shipping-calculator .select2-container--default .select2-selection--single, .select2-container--default .select2-search--dropdown .select2-search__field, .woocommerce form .form-row.woocommerce-validated .select2-container .select2-selection, .woocommerce form .form-row.woocommerce-validated .select2-container, .woocommerce form .form-row.woocommerce-validated input.input-text, .woocommerce form .form-row.woocommerce-validated select, .woocommerce form .form-row.woocommerce-invalid .select2-container, .woocommerce form .form-row.woocommerce-invalid input.input-text, .woocommerce form .form-row.woocommerce-invalid select, .country_select.select2-container, .state_select.select2-container, .widget form.search-form .search-field {
            border-color: rgba(84, 84, 84, 0.1) !important
        }

        input[type="radio"]:after, .input-radio:after, input[type="checkbox"]:after, .input-checkbox:after, .widget_product_categories ul li a:before, .widget_layered_nav ul li a:before, .post_tags a, .wpb_widgetised_column .tagcloud a, .select2-container--default .select2-selection--multiple .select2-selection__choice {
            border-color: rgba(84, 84, 84, 0.8)
        }

        input[type="text"]:focus, input[type="password"]:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="email"]:focus, input[type="number"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="time"]:focus, input[type="url"]:focus, textarea:focus, select:focus, .select2-dropdown, .woocommerce .product_infos .quantity input.qty, .woocommerce #content .product_infos .quantity input.qty, .woocommerce-page .product_infos .quantity input.qty, .woocommerce-page #content .product_infos .quantity input.qty, .woocommerce ul.digital-downloads:before, .woocommerce-page ul.digital-downloads:before, .woocommerce ul.digital-downloads li:after, .woocommerce-page ul.digital-downloads li:after, .widget_search .search-form, .woocommerce-cart.woocommerce-page #content .quantity input.qty, .cd-quick-view .cd-item-info .product_infos .cart .quantity input.qty, .cd-quick-view .cd-item-info .product_infos .cart .woocommerce .quantity .qty, .select2-container .select2-dropdown--below, .wcva_layered_nav div.wcva_filter_textblock, ul.products li.product div.wcva_shop_textblock {
            border-color: rgba(84, 84, 84, 0.15) !important
        }

        .product_content_wrapper .product_infos table.variations .wcvaswatchlabel.wcva_single_textblock {
            border-color: rgba(84, 84, 84, 0.15) !important
        }

        input#coupon_code, .site-search .spin {
            border-color: rgba(84, 84, 84, 0.55) !important
        }

        .list-centered li a, .woocommerce-account .woocommerce-MyAccount-navigation ul li a, .woocommerce .shop_table.order_details tbody tr:last-child td, .woocommerce-page .shop_table.order_details tbody tr:last-child td, .woocommerce #payment ul.payment_methods li, .woocommerce-page #payment ul.payment_methods li, .comment-separator, .comment-list .pingback, .wpb_widgetised_column .widget, .search_result_item, .woocommerce div.product .woocommerce-tabs ul.tabs li:after, .woocommerce #content div.product .woocommerce-tabs ul.tabs li:after, .woocommerce-page div.product .woocommerce-tabs ul.tabs li:after, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:after, .woocommerce-checkout .woocommerce-customer-details h2, .off-canvas .menu-close {
            border-bottom-color: rgba(84, 84, 84, 0.15)
        }

        table tr td, .woocommerce table.shop_table td, .woocommerce-page table.shop_table td, .product_socials_wrapper, .woocommerce-tabs, .comments_section, .portfolio_content_nav #nav-below, .product_meta, .woocommerce-checkout form.checkout .woocommerce-checkout-review-order table.woocommerce-checkout-review-order-table .cart-subtotal th, .woocommerce-checkout form.checkout .woocommerce-checkout-review-order table.woocommerce-checkout-review-order-table .cart-subtotal td, .product_navigation, .product_meta, .woocommerce-cart .cart-collaterals .cart_totals table.shop_table tr.order-total th, .woocommerce-cart .cart-collaterals .cart_totals table.shop_table tr.order-total td {
            border-top-color: rgba(84, 84, 84, 0.15)
        }

        .woocommerce .woocommerce-order-details tfoot tr:first-child td, .woocommerce .woocommerce-order-details tfoot tr:first-child th {
            border-top-color: #545454
        }

        .woocommerce-cart .woocommerce table.shop_table.cart tr, .woocommerce-page table.cart tr, .woocommerce-page #content table.cart tr, .widget_shopping_cart .widget_shopping_cart_content ul.cart_list li, .woocommerce-cart .woocommerce-cart-form .shop_table.cart tbody tr td.actions .coupon {
            border-bottom-color: rgba(84, 84, 84, 0.05)
        }

        .woocommerce .cart-collaterals .cart_totals tr.shipping th, .woocommerce-page .cart-collaterals .cart_totals tr.shipping th, .woocommerce .cart-collaterals .cart_totals tr.order-total th, .woocommerce-page .cart-collaterals .cart_totals h2 {
            border-top-color: rgba(84, 84, 84, 0.05)
        }

        .woocommerce .cart-collaterals .cart_totals .order-total td, .woocommerce .cart-collaterals .cart_totals .order-total th, .woocommerce-page .cart-collaterals .cart_totals .order-total td, .woocommerce-page .cart-collaterals .cart_totals .order-total th, .woocommerce .cart-collaterals .cart_totals h2, .woocommerce .cart-collaterals .cross-sells h2, .woocommerce-page .cart-collaterals .cart_totals h2 {
            border-bottom-color: rgba(84, 84, 84, 0.15)
        }

        table.shop_attributes tr td, .wishlist_table tr td, .shop_table.cart tr td {
            border-bottom-color: rgba(84, 84, 84, 0.1)
        }

        .woocommerce .cart-collaterals, .woocommerce-page .cart-collaterals, .woocommerce-form-track-order, .woocommerce-thankyou-order-details, .order-info {
            background: rgba(84, 84, 84, 0.05)
        }

        .woocommerce-cart .cart-collaterals:before, .woocommerce-cart .cart-collaterals:after, .custom_border:before, .custom_border:after, .woocommerce-order-pay #order_review:before, .woocommerce-order-pay #order_review:after {
            background-image: radial-gradient(closest-side, transparent 9px, rgba(84, 84, 84, 0.05) 100%)
        }

        .wpb_widgetised_column aside ul li span.count, .product-video-icon {
            background: rgba(84, 84, 84, 0.05)
        }

        .comments_section {
            background-color: rgba(84, 84, 84, 0.01) !important
        }

        h1, h2, h3, h4, h5, h6, .entry-title-archive a, .shop_table.woocommerce-checkout-review-order-table tr td, .shop_table.woocommerce-checkout-review-order-table tr th, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content h3.entry-title a, .index-layout-3 .blog-posts_container ul.blog-posts .blog-post article .post_content_wrapper .post_content .entry-title > a, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:hover, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a:hover, .woocommerce ul.products li.product .woocommerce-loop-product__title, .wpb_widgetised_column .widget .product_list_widget a, .woocommerce .cart-collaterals .cart_totals .cart-subtotal th, .woocommerce-page .cart-collaterals .cart_totals .cart-subtotal th, .woocommerce .cart-collaterals .cart_totals tr.shipping th, .woocommerce-page .cart-collaterals .cart_totals tr.shipping th, .woocommerce-page .cart-collaterals .cart_totals tr.shipping th, .woocommerce-page .cart-collaterals .cart_totals tr.shipping td, .woocommerce-page .cart-collaterals .cart_totals tr.shipping td, .woocommerce .cart-collaterals .cart_totals tr.cart-discount th, .woocommerce-page .cart-collaterals .cart_totals tr.cart-discount th, .woocommerce .cart-collaterals .cart_totals tr.order-total th, .woocommerce-page .cart-collaterals .cart_totals tr.order-total th, .woocommerce .cart-collaterals .cart_totals h2, .woocommerce .cart-collaterals .cross-sells h2, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more, .index-layout-2 .with-sidebar ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more, .index-layout-3 .blog-posts_container ul.blog-posts .blog-post article .post_content_wrapper .post_content .read_more, .fr-window-skin-fresco.fr-svg .fr-side-next .fr-side-button-icon:before, .fr-window-skin-fresco.fr-svg .fr-side-previous .fr-side-button-icon:before, .fr-window-skin-fresco.fr-svg .fr-close .fr-close-icon:before, #button_offcanvas_sidebar_left .filters-icon, #button_offcanvas_sidebar_left .filters-text, .select2-container .select2-choice, .shop_header .list_shop_categories li.category_item > a, .shortcode_getbowtied_slider .swiper-button-prev, .shortcode_getbowtied_slider .swiper-button-next, .shortcode_getbowtied_slider .shortcode-slider-pagination, .yith-wcwl-wishlistexistsbrowse.show a, .product_socials_wrapper .product_socials_wrapper_inner a, .cd-top, .fr-position-outside .fr-position-text, .fr-position-inside .fr-position-text, .cart-collaterals .cart_totals .shop_table tr.cart-subtotal td, .cart-collaterals .cart_totals .shop_table tr.shipping td label, .cart-collaterals .cart_totals .shop_table tr.order-total td, .woocommerce-checkout .woocommerce-checkout-review-order-table ul#shipping_method li label, .catalog-ordering select.orderby, .woocommerce .cart-collaterals .cart_totals table.shop_table_responsive tr td::before, .woocommerce .cart-collaterals .cart_totals table.shop_table_responsive tr td .woocommerce-page .cart-collaterals .cart_totals table.shop_table_responsive tr td::before, .shopkeeper_checkout_coupon, .shopkeeper_checkout_login, .wpb_wrapper .add_to_cart_inline .woocommerce-Price-amount.amount, .list-centered li a, .woocommerce-account .woocommerce-MyAccount-navigation ul li a, tr.cart-discount td, section.woocommerce-customer-details table.woocommerce-table--customer-details th, .woocommerce-checkout-review-order table.woocommerce-checkout-review-order-table tfoot tr.order-total .amount, ul.payment_methods li > label, #reply-title, .product_infos .out_of_stock_wrapper .out_of_stock_badge_single, .product_content_wrapper .product_infos .woocommerce-variation-availability p.stock.out-of-stock, .tinvwl_add_to_wishlist_button, .woocommerce-cart table.shop_table td.product-subtotal *, .woocommerce-cart.woocommerce-page #content .quantity input.qty, .woocommerce-cart .entry-content .woocommerce .actions > .button, .woocommerce-cart #content table.cart td.actions .coupon:before, form .coupon.focus:after, .checkout_coupon_inner.focus:after, .checkout_coupon_inner:before, .widget_product_categories ul li .count, .widget_layered_nav ul li .count, .error-banner:before, .cart-empty, .cart-empty:before, .wishlist-empty, .wishlist-empty:before, .from_the_blog_title, .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-title, .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-title a, .wpb_widgetised_column .widget.widget_product_categories a, .wpb_widgetised_column .widget.widget_layered_nav a, .widget_layered_nav ul li.chosen a, .widget_product_categories ul li.current-cat > a, .widget_layered_nav_filters a, .reset_variations:hover, .wc-block-review-list-item__product a, .woocommerce-loop-product__title a, label.wcva_single_textblock, .wp-block-woocommerce-reviews-by-product .wc-block-review-list-item__text__read_more:hover, .woocommerce ul.products h3 a, .wpb_widgetised_column .widget a, table.shop_attributes th, #masonry_grid a.more-link, .gbt_18_sk_posts_grid a.more-link, .woocommerce-page #content table.cart.wishlist_table .product-name a, .wc-block-grid .wc-block-pagination button:hover, .wc-block-grid .wc-block-pagination button.wc-block-pagination-page--active, .wc-block-sort-select__select, .wp-block-woocommerce-attribute-filter ul.wc-block-checkbox-list li label, .wp-block-woocommerce-attribute-filter ul.wc-block-checkbox-list li.show-more button:hover, .wp-block-woocommerce-attribute-filter ul.wc-block-checkbox-list li.show-less button:hover, .wp-block-woocommerce-active-filters .wc-block-active-filters__clear-all:hover, .product_infos .group_table label a, .woocommerce-account .account-tab-list .account-tab-item .account-tab-link, .woocommerce-account .account-tab-list .sep, .categories_grid .category_name, .woocommerce-cart .cart-collaterals .cart_totals table small, .woocommerce table.cart .product-name a, .shopkeeper-continue-shopping a.button, .woocommerce-cart td.actions .coupon button[name=apply_coupon] {
            color: #000000
        }

        .cd-top {
            box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.2)
        }

        .cd-top svg.progress-circle path {
            stroke: #000000
        }

        .product_content_wrapper .product_infos label.selectedswatch.wcvaround, ul.products li.product div.wcva_shop_textblock:hover {
            border-color: #000000 !important
        }

        #powerTip:before {
            border-top-color: #000000 !important
        }

        ul.sk_social_icons_list li svg:not(.has-color) {
            fill: #000000
        }

        @media all and (min-width: 75.0625em) {
            .product_navigation #nav-below .product-nav-previous a i, .product_navigation #nav-below .product-nav-next a i {
                color: #000000
            }
        }

        .account-tab-link:hover, .account-tab-link:active, .account-tab-link:focus, .catalog-ordering span.select2-container span, .catalog-ordering .select2-container .selection .select2-selection__arrow:before, .latest_posts_grid_wrapper .latest_posts_grid_title, .wcva_layered_nav div.wcvashopswatchlabel, ul.products li.product div.wcvashopswatchlabel, .product_infos .yith-wcwl-add-button a.add_to_wishlist {
            color: #000000 !important
        }

        .product_content_wrapper .product_infos table.variations .wcvaswatchlabel:hover, label.wcvaswatchlabel, .product_content_wrapper .product_infos label.selectedswatch, div.wcvashopswatchlabel.wcva-selected-filter, div.wcvashopswatchlabel:hover, div.wcvashopswatchlabel.wcvasquare:hover, .wcvaswatchinput div.wcva-selected-filter.wcvasquare:hover {
            outline-color: #000000 !important
        }

        .product_content_wrapper .product_infos table.variations .wcvaswatchlabel.wcva_single_textblock:hover, .product_content_wrapper .product_infos table.variations .wcvaswatchlabel.wcvaround:hover, div.wcvashopswatchlabel.wcvaround:hover, .wcvaswatchinput div.wcva-selected-filter.wcvaround {
            border-color: #000000 !important
        }

        div.wcvaround:hover, .wcvaswatchinput div.wcva-selected-filter.wcvaround, .product_content_wrapper .product_infos table.variations .wcvaswatchlabel.wcvaround:hover {
            box-shadow: 0px 0px 0px 2px #ffffff inset
        }

        #powerTip, .product_content_wrapper .product_infos table.variations .wcva_single_textblock.selectedswatch, .wcvashopswatchlabel.wcvasquare.wcva-selected-filter.wcva_filter_textblock {
            color: #ffffff !important
        }

        label.wcvaswatchlabel, .product_content_wrapper .product_infos label.selectedswatch.wcvasquare, div.wcvashopswatchlabel, div.wcvashopswatchlabel:hover, div.wcvashopswatchlabel.wcvasquare:hover, .wcvaswatchinput div.wcva-selected-filter.wcvasquare:hover {
            border-color: #ffffff !important
        }

        .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more:before, .index-layout-3 .blog-posts_container ul.blog-posts .blog-post article .post_content_wrapper .post_content .read_more:before, #masonry_grid a.more-link:before, .gbt_18_sk_posts_grid a.more-link:before, .product_content_wrapper .product_infos label.selectedswatch.wcva_single_textblock, #powerTip, .product_content_wrapper .product_infos table.variations .wcva_single_textblock.selectedswatch, .wcvashopswatchlabel.wcvasquare.wcva-selected-filter.wcva_filter_textblock, .categories_grid .category_item:hover .category_name {
            background-color: #000000
        }

        #masonry_grid a.more-link:hover:before, .gbt_18_sk_posts_grid a.more-link:hover:before {
            background-color: #EC7A5C
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li a, .woocommerce #content div.product .woocommerce-tabs ul.tabs li a, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a {
            color: rgba(0, 0, 0, 0.35)
        }

        .woocommerce #content div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover {
            color: rgba(0, 0, 0, 0.45)
        }

        .fr-thumbnail-loading-background, .fr-loading-background, .blockUI.blockOverlay:before, .yith-wcwl-add-button.show_overlay.show:after, .fr-spinner:after, .fr-overlay-background:after, .search-preloader-wrapp:after, .product_thumbnail .overlay:after, .easyzoom.is-loading:after, .wc-block-grid .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-add-to-cart .wp-block-button__link.loading:after {
            border-color: rgba(0, 0, 0, 0.35) !important;
            border-right-color: #000000 !important
        }

        .index-layout-2 ul.blog-posts .blog-post:first-child .post_content_wrapper, .index-layout-2 ul.blog-posts .blog-post:nth-child(5n+5) .post_content_wrapper, .cd-quick-view.animate-width, .fr-ui-outside .fr-info-background, .fr-info-background, .fr-overlay-background {
            background-color: #ffffff !important
        }

        .wc-block-featured-product h2.wc-block-featured-category__title, .wc-block-featured-category h2.wc-block-featured-category__title, .wc-block-featured-product * {
            color: #ffffff
        }

        .product_content_wrapper .product-images-wrapper .product_images .product-images-controller .dot:not(.current), .product_content_wrapper .product-images-wrapper .product_images .product-images-controller li.video-icon .dot:not(.current) {
            border-color: #ffffff !important
        }

        .blockUI.blockOverlay {
            background: rgba(255, 255, 255, 0.5) !important;
        }

        a, a:hover, a:focus, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce input.button:hover, .comments-area a, .edit-link, .post_meta_archive a:hover, .post_meta a:hover, .entry-title-archive a:hover, .no-results-text:before, .list-centered a:hover, .comment-edit-link, .filters-group li:hover, #map_button, .widget_shopkeeper_social_media a, .lost-reset-pass-text:before, .list_shop_categories a:hover, .add_to_wishlist:hover, .woocommerce div.product span.price, .woocommerce-page div.product span.price, .woocommerce #content div.product span.price, .woocommerce-page #content div.product span.price, .woocommerce div.product p.price, .woocommerce-page div.product p.price, .product_infos p.price, .woocommerce #content div.product p.price, .woocommerce-page #content div.product p.price, .comment-metadata time, .woocommerce p.stars a.star-1.active:after, .woocommerce p.stars a.star-1:hover:after, .woocommerce-page p.stars a.star-1.active:after, .woocommerce-page p.stars a.star-1:hover:after, .woocommerce p.stars a.star-2.active:after, .woocommerce p.stars a.star-2:hover:after, .woocommerce-page p.stars a.star-2.active:after, .woocommerce-page p.stars a.star-2:hover:after, .woocommerce p.stars a.star-3.active:after, .woocommerce p.stars a.star-3:hover:after, .woocommerce-page p.stars a.star-3.active:after, .woocommerce-page p.stars a.star-3:hover:after, .woocommerce p.stars a.star-4.active:after, .woocommerce p.stars a.star-4:hover:after, .woocommerce-page p.stars a.star-4.active:after, .woocommerce-page p.stars a.star-4:hover:after, .woocommerce p.stars a.star-5.active:after, .woocommerce p.stars a.star-5:hover:after, .woocommerce-page p.stars a.star-5.active:after, .woocommerce-page p.stars a.star-5:hover:after, .yith-wcwl-add-button:before, .yith-wcwl-wishlistaddedbrowse .feedback:before, .yith-wcwl-wishlistexistsbrowse .feedback:before, .woocommerce .star-rating span:before, .woocommerce-page .star-rating span:before, .product_meta a:hover, .woocommerce .shop-has-sidebar .no-products-info .woocommerce-info:before, .woocommerce-page .shop-has-sidebar .no-products-info .woocommerce-info:before, .woocommerce .woocommerce-breadcrumb a:hover, .woocommerce-page .woocommerce-breadcrumb a:hover, .intro-effect-fadeout.modify .post_meta a:hover, .from_the_blog_link:hover .from_the_blog_title, .portfolio_single_list_cat a:hover, .widget .recentcomments:before, .widget.widget_recent_entries ul li:before, #placeholder_product_quick_view .product_title:hover, .wpb_widgetised_column aside ul li.current-cat > span.count, .shopkeeper-mini-cart .widget.woocommerce.widget_shopping_cart .widget_shopping_cart_content p.buttons a.button.checkout.wc-forward, .getbowtied_blog_ajax_load_button:before, .getbowtied_blog_ajax_load_more_loader:before, .getbowtied_ajax_load_button:before, .getbowtied_ajax_load_more_loader:before, .list-centered li.current-cat > a:hover, #button_offcanvas_sidebar_left:hover, .shop_header .list_shop_categories li.category_item > a:hover, #button_offcanvas_sidebar_left .filters-text:hover, .products .yith-wcwl-wishlistaddedbrowse a:before, .products .yith-wcwl-wishlistexistsbrowse a:before, .product_infos .yith-wcwl-wishlistaddedbrowse:before, .product_infos .yith-wcwl-wishlistexistsbrowse:before, .shopkeeper_checkout_coupon a.showcoupon, .woocommerce-checkout .showcoupon, .woocommerce-checkout .showlogin, .woocommerce table.my_account_orders .woocommerce-orders-table__cell-order-actions .button, .woocommerce-account table.account-payment-methods-table td.payment-method-actions .button, .woocommerce-MyAccount-content .woocommerce-pagination .woocommerce-button, body.gbt_classic_notif .woocommerce-message, body.gbt_classic_notif .woocommerce-error, body.gbt_classic_notif .wc-forward, body.gbt_classic_notif .woocommerce-error::before, body.gbt_classic_notif .woocommerce-message::before, body.gbt_classic_notif .woocommerce-info::before, .tinvwl_add_to_wishlist_button:hover, .tinvwl_add_to_wishlist_button.tinvwl-product-in-list:before, .return-to-shop .button.wc-backward, .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-rating .star-rating span::before, .wpb_widgetised_column .widget.widget_product_categories a:hover, .wpb_widgetised_column .widget.widget_layered_nav a:hover, .wpb_widgetised_column .widget a:hover, .wc-block-review-list-item__rating > .wc-block-review-list-item__rating__stars span:before, .woocommerce .products .product_thumbnail_icons .product_quickview_button:hover, #masonry_grid a.more-link:hover, .gbt_18_sk_posts_grid a.more-link:hover, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content h3.entry-title a:hover, .index-layout-3 .blog-posts_container ul.blog-posts .blog-post article .post_content_wrapper .post_content .entry-title > a:hover, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more:hover, .index-layout-2 .with-sidebar ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more:hover, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more:hover, .index-layout-3 .blog-posts_container ul.blog-posts .blog-post article .post_content_wrapper .post_content .read_more:hover, .wc-block-grid .wc-block-pagination button, .wc-block-grid__product-rating .wc-block-grid__product-rating__stars span:before, .wp-block-woocommerce-attribute-filter ul.wc-block-checkbox-list li.show-more button, .wp-block-woocommerce-attribute-filter ul.wc-block-checkbox-list li.show-less button, .wp-block-woocommerce-attribute-filter ul.wc-block-checkbox-list li label:hover, .wp-block-woocommerce-active-filters .wc-block-active-filters__clear-all, .product_navigation #nav-below a:hover *, .woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover, .woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a, .shopkeeper-continue-shopping a.button:hover, .woocommerce-cart td.actions .coupon button[name=apply_coupon]:hover, .woocommerce-cart td.actions .button[name=update_cart]:hover {
            color: #EC7A5C
        }

        @media only screen and (min-width: 40.063em) {
            .nav-next a:hover, .nav-previous a:hover {
                color: #EC7A5C
            }
        }

        .widget_shopping_cart .buttons a.view_cart, .widget.widget_price_filter .price_slider_amount .button, .products a.button, .woocommerce .products .added_to_cart.wc-forward, .woocommerce-page .products .added_to_cart.wc-forward, body.gbt_classic_notif .woocommerce-info .button, .url:hover, .product_infos .yith-wcwl-wishlistexistsbrowse a:hover, .wc-block-grid__product-add-to-cart .wp-block-button__link, .products .yith-wcwl-add-to-wishlist:hover .add_to_wishlist:before, .catalog-ordering span.select2-container .selection:hover .select2-selection__rendered, .catalog-ordering .select2-container .selection:hover .select2-selection__arrow:before, .woocommerce-account .woocommerce-MyAccount-content table.woocommerce-MyAccount-orders td.woocommerce-orders-table__cell-order-actions .button:hover, .woocommerce-account .woocommerce-MyAccount-content table.account-payment-methods-table td.payment-method-actions .button:hover, .woocommerce-account .woocommerce-MyAccount-content .woocommerce-pagination .woocommerce-button:hover {
            color: #EC7A5C !important
        }

        .post_tags a:hover, .with_thumb_icon, .wpb_wrapper .wpb_toggle:before, #content .wpb_wrapper h4.wpb_toggle:before, .wpb_wrapper .wpb_accordion .wpb_accordion_wrapper .ui-state-default .ui-icon, .wpb_wrapper .wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon, .widget .tagcloud a:hover, section.related h2:after, .single_product_summary_upsell h2:after, .page-title.portfolio_item_title:after, .thumbnail_archive_container:before, .from_the_blog_overlay, .select2-results .select2-highlighted, .wpb_widgetised_column aside ul li.chosen span.count, .woocommerce .widget_product_categories ul li.current-cat > a:before, .woocommerce-page .widget_product_categories ul li.current-cat > a:before, .widget_product_categories ul li.current-cat > a:before, #header-loader .bar, .index-layout-2 ul.blog_posts .blog_post .post_content_wrapper .post_content .read_more:before, .index-layout-3 .blog_posts_container ul.blog_posts .blog_post article .post_content_wrapper .post_content .read_more:before, .page-notifications .gbt-custom-notification-notice, input[type="radio"]:before, .input-radio:before, .wc-block-featured-product .wp-block-button__link, .wc-block-featured-category .wp-block-button__link {
            background: #EC7A5C
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected], .select2-container--default .select2-results__option--highlighted[data-selected] {
            background-color: #EC7A5C !important
        }

        @media only screen and (max-width: 40.063em) {
            .nav-next a:hover, .nav-previous a:hover {
                background: #EC7A5C
            }
        }

        .woocommerce .widget_layered_nav ul li.chosen a:before, .woocommerce-page .widget_layered_nav ul li.chosen a:before, .widget_layered_nav ul li.chosen a:before, .woocommerce .widget_layered_nav ul li.chosen:hover a:before, .woocommerce-page .widget_layered_nav ul li.chosen:hover a:before, .widget_layered_nav ul li.chosen:hover a:before, .woocommerce .widget_layered_nav_filters ul li a:before, .woocommerce-page .widget_layered_nav_filters ul li a:before, .widget_layered_nav_filters ul li a:before, .woocommerce .widget_layered_nav_filters ul li a:hover:before, .woocommerce-page .widget_layered_nav_filters ul li a:hover:before, .widget_layered_nav_filters ul li a:hover:before, .woocommerce .widget_rating_filter ul li.chosen a:before, .shopkeeper-mini-cart, .minicart-message, .woocommerce-message, .woocommerce-store-notice, p.demo_store, input[type="checkbox"]:checked:after, .input-checkbox:checked:after, .wp-block-woocommerce-active-filters .wc-block-active-filters-list button:before {
            background-color: #EC7A5C
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .quantity .plus, .woocommerce .quantity .minus, .woocommerce #content .quantity .plus, .woocommerce #content .quantity .minus, .woocommerce-page .quantity .plus, .woocommerce-page .quantity .minus, .woocommerce-page #content .quantity .plus, .woocommerce-page #content .quantity .minus, .widget_shopping_cart .buttons .button.wc-forward.checkout {
            background: #EC7A5C !important
        }

        .button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce-widget-layered-nav-dropdown__submit, .wc-stripe-checkout-button, .wp-block-search .wp-block-search__button, .wpb_wrapper .add_to_cart_inline .added_to_cart, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover, .widget_shopping_cart .buttons .button, .wpb_wrapper .add_to_cart_inline .add_to_cart_button, .woocommerce .wishlist_table td.product-add-to-cart a, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more:hover:before, .index-layout-2 .with-sidebar ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more:hover:before, .index-layout-2 ul.blog-posts .blog-post .post_content_wrapper .post_content .read_more:hover:before, .index-layout-3 .blog-posts_container ul.blog-posts .blog-post article .post_content_wrapper .post_content .read_more:hover:before {
            background-color: #EC7A5C
        }

        .product_infos .yith-wcwl-wishlistaddedbrowse a:hover, .shipping-calculator-button:hover, .products a.button:hover, .woocommerce .products .added_to_cart.wc-forward:hover, .woocommerce-page .products .added_to_cart.wc-forward:hover, .products .yith-wcwl-wishlistexistsbrowse:hover a, .products .yith-wcwl-wishlistaddedbrowse:hover a, .order-number a:hover, .post-edit-link:hover, .getbowtied_ajax_load_button a:not(.disabled):hover, .getbowtied_blog_ajax_load_button a:not(.disabled):hover {
            color: rgba(236, 122, 92, 0.8) !important
        }

        .woocommerce ul.products li.product .woocommerce-loop-product__title:hover, .woocommerce-loop-product__title a:hover {
            color: rgba(0, 0, 0, 0.8)
        }

        .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .widget_shopping_cart .buttons .button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .woocommerce .product_infos .quantity .minus:hover, .woocommerce #content .product_infos .quantity .minus:hover, .woocommerce-page .product_infos .quantity .minus:hover, .woocommerce-page #content .product_infos .quantity .minus:hover, .woocommerce .quantity .plus:hover, .woocommerce #content .quantity .plus:hover, .woocommerce-page .quantity .plus:hover, .woocommerce-page #content .quantity .plus:hover, .wpb_wrapper .add_to_cart_inline .add_to_cart_button:hover, .woocommerce-widget-layered-nav-dropdown__submit:hover, .woocommerce-checkout a.button.wc-backward:hover {
            background: rgba(236, 122, 92, 0.7)
        }

        .post_tags a:hover, .widget .tagcloud a:hover, .widget_shopping_cart .buttons a.view_cart, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .widget_product_categories ul li.current-cat > a:before, .woocommerce-page .widget_product_categories ul li.current-cat > a:before, .widget_product_categories ul li.current-cat > a:before, .widget_product_categories ul li a:hover:before, .widget_layered_nav ul li a:hover:before, input[type="radio"]:checked:after, .input-radio:checked:after, input[type="checkbox"]:checked:after, .input-checkbox:checked:after, .return-to-shop .button.wc-backward {
            border-color: #EC7A5C
        }

        .wpb_tour.wpb_content_element .wpb_tabs_nav li.ui-tabs-active a, .wpb_tabs.wpb_content_element .wpb_tabs_nav li.ui-tabs-active a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a, .main-navigation ul ul li a:hover, .language-and-currency #top_bar_language_list > ul > li.menu-item-first > ul.sub-menu li a:hover, .language-and-currency .wcml_currency_switcher > ul > li.wcml-cs-active-currency ul.wcml-cs-submenu li a:hover {
            border-bottom-color: #EC7A5C
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active {
            border-top-color: #EC7A5C !important
        }

        .off-canvas, .offcanvas_content_left, .offcanvas_content_right {
            background-color: #ffffff;
            color: #545454
        }

        .off-canvas table tr th, .off-canvas table tr td, .off-canvas table thead tr th, .off-canvas blockquote p, .off-canvas label, .off-canvas .widget_search .search-form:after, .off-canvas .woocommerce-product-search:after, .off-canvas .submit_icon, .off-canvas .widget_search #searchsubmit, .off-canvas .widget_product_search .search-submit, .off-canvas .widget_search .search-submit, .off-canvas .woocommerce-product-search button[type="submit"], .off-canvas .wpb_widgetised_column .widget_calendar table thead tr th, .off-canvas .add_to_cart_inline .amount, .off-canvas .wpb_widgetised_column .widget, .off-canvas .wpb_widgetised_column .widget.widget_layered_nav a, .off-canvas .widget_layered_nav ul li a, .widget_layered_nav, .off-canvas .shop_table.cart .product-price .amount, .off-canvas .menu-close .close-button, .off-canvas .site-search-close .close-button {
            color: #545454 !important
        }

        .off-canvas .wpb_widgetised_column .widget a:not(.button):hover, .product_infos .yith-wcwl-add-button a.add_to_wishlist:hover {
            color: #EC7A5C !important
        }

        .off-canvas .widget-title, .off-canvas .mobile-navigation a, .off-canvas .mobile-navigation ul li .spk-icon-down-small:before, .off-canvas .mobile-navigation ul li .spk-icon-up-small:before, .off-canvas.site-search .widget_product_search .search-field, .off-canvas.site-search .widget_search .search-field, .off-canvas.site-search input[type="search"], .off-canvas .widget_product_search input[type="submit"], .off-canvas.site-search .search-form .search-field, .off-canvas .woocommerce ul.products li.product .woocommerce-loop-product__title, .off-canvas .wpb_widgetised_column .widget.widget_product_categories a, .off-canvas .wpb_widgetised_column .widget a:not(.button) {
            color: #000000 !important
        }

        .off-canvas ul.sk_social_icons_list li svg {
            fill: #000000
        }

        .off-canvas .site-search-close .close-button:hover, .off-canvas .search-text, .off-canvas .widget_search .search-form:after, .off-canvas .woocommerce-product-search:after, .off-canvas .submit_icon, .off-canvas .widget_search #searchsubmit, .off-canvas .widget_product_search .search-submit, .off-canvas .widget_search .search-submit, .off-canvas .woocommerce-product-search button[type="submit"], .off-canvas .wpb_widgetised_column .widget_price_filter .price_slider_amount {
            color: rgba(84, 84, 84, 0.55) !important
        }

        .off-canvas.site-search input[type="search"], .off-canvas .menu-close, .off-canvas .mobile-navigation, .off-canvas .wpb_widgetised_column .widget, .wcva-filter-widget {
            border-color: rgba(84, 84, 84, 0.1) !important
        }

        .off-canvas.site-search input[type="search"]::-webkit-input-placeholder {
            color: rgba(84, 84, 84, 0.55) !important
        }

        .off-canvas.site-search input[type="search"]::-moz-placeholder {
            color: rgba(84, 84, 84, 0.55) !important
        }

        .off-canvas.site-search input[type="search"]:-ms-input-placeholder {
            color: rgba(84, 84, 84, 0.55) !important
        }

        .off-canvas.site-search input[type="search"]:-moz-placeholder {
            color: rgba(84, 84, 84, 0.55) !important
        }

        .call-to-action-canvas .call-to-action-testimonial-author a:hover {
            color: #000000
        }

        .call-to-action-canvas .call-to-action-links a:hover {
            color: #EC7A5C !important
        }

        body .call-to-action-canvas .call-to-action-canvas-content .call-to-action-links .call-to-action-documentation-link:hover:before {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2024%2024'%3E%3Cpath%20d%3D'M 2 4 L 2 18 C 2 19.093063 2.9069372 20 4 20 L 10.587891 20 A 1.5 1.5 0 0 0 12 21 A 1.5 1.5 0 0 0 13.412109 20 L 20 20 C 21.093063 20 22 19.093063 22 18 L 22 4 L 15 4 C 13.789062 4 12.735556 4.5762461 12 5.4355469 C 11.264444 4.5762461 10.210938 4 9 4 L 2 4 z M 4 6 L 9 6 C 10.116666 6 11 6.8833339 11 8 L 13 8 C 13 6.8833339 13.883334 6 15 6 L 20 6 L 20 18 L 4 18 L 4 6 z M 15 9 L 15 11 L 17 11 L 17 9 L 15 9 z M 15 12 L 15 16 L 17 16 L 17 12 L 15 12 z'%20fill%3D'%23EC7A5C'%2F%3E%3C%2Fsvg%3E")
        }

        body .call-to-action-canvas .call-to-action-canvas-content .call-to-action-links .call-to-action-support-link:hover:before {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2024%2024'%3E%3Cpath%20d%3D'M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.430123 16.430123 20 12 20 C 7.5698774 20 4 16.430123 4 12 C 4 7.5698774 7.5698774 4 12 4 z M 12 6 C 9.79 6 8 7.79 8 10 L 10 10 C 10 8.9 10.9 8 12 8 C 13.1 8 14 8.9 14 10 C 14 12 11 12.367 11 15 L 13 15 C 13 13.349 16 12.5 16 10 C 16 7.79 14.21 6 12 6 z M 11 16 L 11 18 L 13 18 L 13 16 L 11 16 z'%20fill%3D'%23EC7A5C'%2F%3E%3C%2Fsvg%3E")
        }

        body .call-to-action-canvas .call-to-action-canvas-content .call-to-action-links .call-to-action-facebook-link:hover:before {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2024%2024'%3E%3Cpath%20d%3D'M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.014467 17.065322 19.313017 13.21875 19.898438 L 13.21875 14.384766 L 15.546875 14.384766 L 15.912109 12.019531 L 13.21875 12.019531 L 13.21875 10.726562 C 13.21875 9.7435625 13.538984 8.8710938 14.458984 8.8710938 L 15.935547 8.8710938 L 15.935547 6.8066406 C 15.675547 6.7716406 15.126844 6.6953125 14.089844 6.6953125 C 11.923844 6.6953125 10.654297 7.8393125 10.654297 10.445312 L 10.654297 12.019531 L 8.4277344 12.019531 L 8.4277344 14.384766 L 10.654297 14.384766 L 10.654297 19.878906 C 6.8702905 19.240845 4 15.970237 4 12 C 4 7.5698774 7.5698774 4 12 4 z'%20fill%3D'%23EC7A5C'%2F%3E%3C%2Fsvg%3E")
        }

        #site-top-bar, #site-navigation-top-bar .sf-menu ul {
            background: #333333
        }

        #site-top-bar, #site-top-bar a, .language-and-currency .wcml_currency_switcher > ul > li.wcml-cs-active-currency > a {
            color: #ffffff
        }

        #site-top-bar ul.sk_social_icons_list li svg {
            fill: #ffffff
        }

        .top-headers-wrapper.sticky .site-header {
            background: #ffffff
        }

        .site-header, .default-navigation, .main-navigation .mega-menu > ul > li > a {
            font-size: 13px
        }

        .site-header, .main-navigation a, .site-tools ul li a, .shopping_bag_items_number, .wishlist_items_number, .site-title a, .widget_product_search .search-but-added, .widget_search .search-but-added {
            color: #000000
        }

        .site-header-sticky.sticky .site-header, .site-header-sticky.sticky .main-navigation a, .site-header-sticky.sticky .site-tools ul li a, .site-header-sticky.sticky .shopping_bag_items_number, .site-header-sticky.sticky .wishlist_items_number, .site-header-sticky.sticky .site-title a, .site-header-sticky.sticky .widget_product_search .search-but-added, .site-header-sticky.sticky .widget_search .search-but-added {
            color: #0a0a0a
        }

        .site-branding {
            border-color: #000000
        }

        .site-header {
            background-color: #ffffff
        }

        @media only screen and (min-width: 1024px) {
            .top-headers-wrapper .site-header {
                padding-top: 20px;
                padding-bottom: 20px
            }

            .site-header, .main-navigation a, .site-tools ul li a, .shopping_bag_items_number, .wishlist_items_number, .site-title a, .widget_product_search .search-but-added, .widget_search .search-but-added {
                color: #000000
            }

            .site-branding {
                border-color: #000000
            }

            #page_wrapper.transparent_header.transparency_light .top-headers-wrapper:not(.sticky) .site-header, #page_wrapper.transparent_header.transparency_light .top-headers-wrapper:not(.sticky) .site-header .main-navigation a, #page_wrapper.transparent_header.transparency_light .top-headers-wrapper:not(.sticky) .site-header .site-tools ul li a, #page_wrapper.transparent_header.transparency_light .top-headers-wrapper:not(.sticky) .site-header .shopping_bag_items_number, #page_wrapper.transparent_header.transparency_light .top-headers-wrapper:not(.sticky) .site-header .wishlist_items_number, #page_wrapper.transparent_header.transparency_light .top-headers-wrapper:not(.sticky) .site-header .site-title a, #page_wrapper.transparent_header.transparency_light .top-headers-wrapper:not(.sticky) .site-header .widget_product_search .search-but-added, #page_wrapper.transparent_header.transparency_light .top-headers-wrapper:not(.sticky) .site-header .widget_search .search-but-added {
                color: #ffffff
            }

            #page_wrapper.transparent_header.transparency_dark .top-headers-wrapper:not(.sticky) .site-header, #page_wrapper.transparent_header.transparency_dark .top-headers-wrapper:not(.sticky) .site-header .main-navigation a, #page_wrapper.transparent_header.transparency_dark .top-headers-wrapper:not(.sticky) .site-header .site-tools ul li a, #page_wrapper.transparent_header.transparency_dark .top-headers-wrapper:not(.sticky) .site-header .shopping_bag_items_number, #page_wrapper.transparent_header.transparency_dark .top-headers-wrapper:not(.sticky) .site-header .wishlist_items_number, #page_wrapper.transparent_header.transparency_dark .top-headers-wrapper:not(.sticky) .site-header .site-title a, #page_wrapper.transparent_header.transparency_dark .top-headers-wrapper:not(.sticky) .site-header .widget_product_search .search-but-added, #page_wrapper.transparent_header.transparency_dark .top-headers-wrapper:not(.sticky) .site-header .widget_search .search-but-added {
                color: #000000
            }

            .site-header.sticky, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header {
                background: #ffffff
            }

            .site-header.sticky, .site-header.sticky .main-navigation a, .site-header.sticky .site-tools ul li a, .site-header.sticky .shopping_bag_items_number, .site-header.sticky .wishlist_items_number, .site-header.sticky .site-title a, .site-header.sticky .widget_product_search .search-but-added, .site-header.sticky .widget_search .search-but-added, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header .main-navigation a, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header .site-tools ul li a, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header .shopping_bag_items_number, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header .wishlist_items_number, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header .site-title a, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header .widget_product_search .search-but-added, #page_wrapper.transparent_header .top-headers-wrapper.sticky .site-header .widget_search .search-but-added {
                color: #0a0a0a
            }

            .top-headers-wrapper.sticky .site-header .site-branding {
                border-color: #0a0a0a
            }

            .transparent_header .content-area {
                padding-top: 175px
            }

            .transparent_header .single-post-header.with-thumb, .transparent_header .page-title-hidden:not(.boxed-page), .transparent_header .entry-header-page.with-featured-img, .transparent_header .shop_header.with_featured_img {
                margin-top: -175px
            }
        }

        @media only screen and (min-width: 1024px) {
            .site-branding img {
                height: 50px;
                width: auto;
                transition: all 0.3s
            }

            .site-header .main-navigation, .site-header .site-tools {
                height: 50px;
                line-height: 50px
            }
        }

        #site-footer {
            background: transparent
        }

        @media only screen and (max-width: 641px) {
            #site-footer {
                padding-top: 0
            }
        }

        #site-footer, #site-footer .copyright_text a {
            color: #868686
        }

        #site-footer a, #site-footer .widget-title, .footer-navigation-wrapper ul li:after {
            color: #000000
        }

        .footer_socials_wrapper ul.sk_social_icons_list li svg, .site-footer-widget-area ul.sk_social_icons_list li svg {
            fill: #000000
        }

        .trigger-footer-widget-area {
            display: none
        }

        .site-footer-widget-area {
            display: block
        }

        .wp-block-latest-posts a, .wp-block-button, .wp-block-cover .wp-block-cover-text, .wp-block-subhead, .wp-block-image figcaption, .wp-block-quote p, .wp-block-quote cite, .wp-block-quote .editor-rich-text, .wp-block-pullquote p, .wp-block-pullquote cite, .wp-block-pullquote .editor-rich-text, .gbt_18_sk_latest_posts_title, .gbt_18_sk_editor_banner_title, .gbt_18_sk_editor_slide_title_input, .gbt_18_sk_editor_slide_button_input, .wp-block-media-text .wp-block-media-text__content p, .wp-block-getbowtied-vertical-slider .gbt_18_current_slide, .wp-block-getbowtied-vertical-slider .gbt_18_number_of_items, .wp-block-woocommerce-all-reviews .wc-block-review-list-item__product a, .wc-block-grid__product-price, .wc-block-order-select__select, .gbt_18_sk_slider_wrapper .gbt_18_sk_slide_button, .gbt_18_sk_posts_grid .gbt_18_sk_posts_grid_title, .gbt_18_sk_editor_portfolio_item_title, .editor-post-title .editor-post-title__input, .wc-products-block-preview .product-title, .wc-products-block-preview .product-add-to-cart, .wc-block-products-category .wc-product-preview__title, .wc-block-products-category .wc-product-preview__add-to-cart, .wc-block-grid__product-onsale, .wc-block-featured-product__price .woocommerce-Price-amount, .wp-block-getbowtied-vertical-slider a.added_to_cart, .wp-block-getbowtied-vertical-slider .gbt_18_slide_link a, .wp-block-getbowtied-vertical-slider .price, .wp-block-getbowtied-lookbook-reveal .gbt_18_product_price *, .gbt_18_pagination a, .gbt_18_snap_look_book .gbt_18_hero_section_content .gbt_18_hero_subtitle, .gbt_18_snap_look_book .gbt_18_look_book_item .gbt_18_shop_this_book .gbt_18_current_book, .wp-block-getbowtied-scattered-product-list .gbt_18_product_price, .wc-block-grid__product-price span {
            font-family: "NeueEinstellung", -apple-system, BlinkMacSystemFont, Arial, Helvetica, 'Helvetica Neue', Verdana, sans-serif
        }

        .gbt_18_sk_latest_posts_title, .wp-block-quote p, .wp-block-pullquote p, .wp-block-quote cite, .wp-block-pullquote cite, .wp-block-media-text p, .wc-block-order-select__select, .wp-block-getbowtied-vertical-slider .gbt_18_slide_title a, .wp-block-getbowtied-vertical-slider .gbt_18_slide_link a, .gbt_18_sk_posts_grid_title {
            color: #000000
        }

        .gbt_18_sk_latest_posts_title:hover, .gbt_18_sk_posts_grid_title:hover, .wp-block-getbowtied-vertical-slider .price, .wp-block-getbowtied-scattered-product-list a:hover .gbt_18_product_title {
            color: #EC7A5C
        }

        .wp-block-latest-posts__post-date, .wp-block-audio figcaption, .wp-block-video figcaption {
            color: #545454
        }

        .wp-block-getbowtied-vertical-slider .gbt_18_slide_link {
            border-top-color: rgba(84, 84, 84, 0.1) !important
        }

        .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-quote {
            border-left-color: #000000
        }

        .gbt_18_default_slider .gbt_18_content .gbt_18_content_wrapper .gbt_18_next_slide, .gbt_18_default_slider .gbt_18_content .gbt_18_content_wrapper .gbt_18_prev_slide {
            border: 2px solid #000000 !important
        }

        .wp-block-pullquote {
            border-top-color: #000000;
            border-bottom-color: #000000
        }

        .gbt_18_sk_latest_posts_item_link:hover .gbt_18_sk_latest_posts_img_overlay, .wp-block-getbowtied-vertical-slider a.added_to_cart {
            background: #EC7A5C
        }

        p.has-drop-cap:first-letter {
            font-size: 41.041px !important
        }

        @media only screen and (min-width: 768px) {
            p.has-drop-cap:first-letter {
                font-size: 72.611px !important
            }
        }

        .gbt_18_snap_look_book .gbt_18_hero_section_content .gbt_18_hero_title {
            font-size: 41.041px
        }

        @media only screen and (min-width: 768px) {
            .gbt_18_snap_look_book .gbt_18_hero_section_content .gbt_18_hero_title {
                font-size: 72.611px
            }
        }

        .wp-block-getbowtied-vertical-slider .gbt_18_slide_title a {
            font-size: 40.871px
        }

        @media only screen and (max-width: 1024px) {
            .wp-block-getbowtied-vertical-slider .gbt_18_slide_title a {
                font-size: 23.101px
            }
        }

        @media only screen and (min-width: 1024px) {
            .gbt_18_lookbook_reveal_wrapper .gbt_18_distorsion_lookbook_content .gbt_18_text_wrapper .gbt_18_description, .gbt_18_lookbook_reveal_wrapper .gbt_18_distorsion_lookbook_content .gbt_18_text_wrapper .gbt_18_description * {
                font-size: 16px
            }
        }

        @media only screen and (max-width: 767px) {
            body.single-product .product_content_wrapper .product_infos form.cart .button:hover {
                background: #EC7A5C !important
            }
        }

        .woocommerce ul.products li.product .onsale, .woocommerce .products span.onsale, .woocommerce-page .products span.onsale, .woocommerce span.onsale, .quickview-badges span.onsale, .wp-block-getbowtied-carousel ul.products li.product .onsale, .wc-block-grid .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-onsale {
            background: #93af76
        }

        .cd-quick-view .cd-item-info .product_infos:after {
            background: linear-gradient(to bottom, rgba(205, 255, 255, 0) 0%, #ffffff 70%)
        }
    </style>
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <style type="text/css" id="wp-custom-css">
        .vc-box-shadow {
            -moz-box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.29);
            -webkit-box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.29);
            box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.29);
        }

        @media only screen and (min-width: 1024px) {
            .getbowtied_get_this_theme {
                right: 60px;
            }

            #fbmsg.gbt_plugin_installed .fbmsg-badge {
                right: 210px !important;
            }
        }

        .call_to_action_button.purchase_button {
            background-color: #f57e60;
        }

        .woocommerce-store-notice__dismiss-link {
            padding-left: 20px;
        }

        p.demo_store {
            font-family: Neue Einstellung;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
        }

        .spk-spin {
            border-radius: 50%;
            -webkit-transition: -webkit-transform .8s ease-in-out;
            transition: transform .8s ease-in-out;
        }

        .spk-spin:hover {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }

        .wp-block-button__link {
            padding: 20px 40px;
        }

        .spk-xtra-margin {
            margin-bottom: 25px;
        }

    </style>
    <noscript>
        <style> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
    <script async="" src="https://static.hotjar.com/c/hotjar-1758094.js?sv=6"></script>
    <meta class="foundation-mq">
    <style data-emotion="fcy"></style>
    <style id="beacon-stylesheet" type="text/css">

        #beacon-container {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5
        }

        #beacon-container, #beacon-container * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        #beacon-container * {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        #BeaconContainer-root.is-mobile {
            --BlueConfigGlobalFontSize: 14px
        }

        @media (min-width: 330px) {
            #BeaconContainer-root.is-mobile {
                --BlueConfigGlobalFontSize: 15px
            }
        }

        @media (min-width: 410px) {
            #BeaconContainer-root.is-mobile {
                --BlueConfigGlobalFontSize: 16px
            }
        }

        #BeaconContainer-root.is-mobile input, #BeaconContainer-root.is-mobile select, #BeaconContainer-root.is-mobile textarea {
            font-size: 16px !important
        }

        #beacon-container a {
            color: _color(link, base);
            text-decoration: none
        }

        #beacon-container a:hover {
            color: _color(link, hover)
        }

        #beacon-container a.disabled {
            color: _color(text, muted);
            cursor: not-allowed
        }

        #beacon-container a.disabled:hover {
            color: _color(text, muted);
            text-decoration: none
        }

        #beacon-container-body {
            margin: 0;
            overflow: hidden
        }</style>
</head>
<body>
<div class="animsition">
    <!-- Header -->
    <div class="top-headers-wrapper site-header-sticky sticky" style="display: block;">
        <div class="top-clear"></div>
        <header id="masthead" class="site-header default " role="banner">
            <div class="row">
                <div class="large-12 columns">
                    <div class="site-header-wrapper" style="max-width:1680px">
                        <div class="site-branding">
                            <a href="/" rel="home">
                                <img class="site-logo "
                                     src="/img/1644871.svg"
                                     title="Home" alt="home">
                                <img class="sticky-logo"
                                     src="/img/1644871.svg"
                                     title="Home" alt="home">
                            </a>
                        </div>

                        <div class="site-tools align_left">
                            <ul>
                                <li class="shopping-bag-button">
                                    <a class="tools_button">
                                    <span class="tools_button_icon">
                                        <i class="spk-icon spk-icon-cart-shopkeeper"></i>
                                    </span>
                                        <span class="shopping_bag_items_number header-icons-noti">{{\App\ShoppingCart::getTotalItem()}}</span>
                                    </a>
                                </li>
                                <li class="my_account_icon">
                                    <a class="tools_button"
                                       href="{{url("userprofile/")}}">
                                    <span class="tools_button_icon">
                                        <i class="spk-icon spk-icon-user-account"></i>
                                    </span>
                                    </a>
                                </li>
                                <li class="offcanvas-menu-button hide-for-large">
                                    <a class="tools_button" data-toggle="offCanvasRight1"
                                       aria-expanded="false" aria-controls="offCanvasRight1">
                                <span class="tools_button_icon">
                                    <i class="spk-icon spk-icon-menu"></i>
                                </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="minicart">@include('user.mini-cart')</div>
                        <nav class="show-for-large main-navigation default-navigation align_left"
                             role="navigation">
                            <ul class="menu-main-navigation">
                                <li id="shopkeeper-menu-item-5393"
                                    class="mega-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                                    <a href="/">Trang chủ</a>
                                </li>
                                <li id="shopkeeper-menu-item-17"
                                    class="mega-menu menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item">
                                    <a href="/product">Cửa hàng</a>
                                </li>
                            </ul>
                        </nav>

                        <div style="clear:both"></div>

                    </div><!--.site-header-wrapper-->

                </div><!-- .columns -->
            </div><!-- .row -->

        </header>
    </div>

    <div id="result">
        @section('content')
        @show
    </div>

    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    GIỮ LIÊN LẠC VỚI CHÚNG TÔI
                </h4>

                <div>
                    <p class="s-text7 w-size27">
                        Bạn có câu hỏi gì không? Hãy cho chúng tôi biết tại cửa hàng số 2 Trần Đại Nghĩa, Bách Khoa,
                        Hai Bà Trưng, Hà Nội hoặc gọi cho chúng tôi theo số (+84) 123456789
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="https://www.facebook.com/fashionvietnam.vn/"
                           class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="https://www.youtube.com/channel/UC0pZaNTzixgpaddyXV_9Sjg"
                           class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                    </div>
                </div>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Danh mục sản phẩm
                </h4>

                <ul>
                    @foreach($obj_category as $item)
                        <li class="p-b-9">
                            <a href="{{'/product'.'?categoryId='.$item->id}}" class="s-text7">
                                {{$item -> name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    Trợ giúp
                </h4>
                <ul>
                    <li class="p-b-9">
                        <a href="/about" class="s-text7">
                            Giới thiệu
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="/contact" class="s-text7">
                            Liên hệ
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="/return" class="s-text7">
                            Chính sách đổi trả
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="/faqs" class="s-text7">
                            Những câu hỏi thường gặp
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="t-center p-l-15 p-r-15">
            <div class="t-center s-text8 p-t-20">
                Copyright © 2020 All rights reserved.
            </div>
        </div>
    </footer>
</div>


<!-- JS IMPORT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src={{asset("/js/numeral.js")}}></script>

<!--===============================================================================================-->
<script type="text/javascript" src={{asset("vendor/jquery/jquery-3.2.1.min.js")}}></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset("vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src={{asset("vendor/bootstrap/js/popper.js")}}></script>
<script type="text/javascript" src={{asset("vendor/bootstrap/js/bootstrap.min.js")}}></script>
<!--===============================================================================================-->
<script type="text/javascript" src={{asset("vendor/select2/select2.min.js")}}></script>

<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

</script>
<!--===============================================================================================-->
<script type="text/javascript" src={{asset("vendor/daterangepicker/moment.min.js")}}></script>
<script type="text/javascript" src={{asset("vendor/daterangepicker/daterangepicker.js")}}></script>
<!--===============================================================================================-->
<script type="text/javascript" src={{asset("vendor/slick/slick.min.js")}}></script>
<script type="text/javascript" src={{asset("js/slick-custom.js")}}></script>
<!--===============================================================================================-->
<script type="text/javascript" src={{asset("vendor/sweetalert/sweetalert.min.js")}}></script>

<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('js/master-layout-2-js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/master-layout-2-js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('js/master-layout-2-js/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('js/master-layout-2-js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('js/master-layout-2-js/sweetalert.min.js')}}"></script>

<script type="text/javascript">
    $('.block2-btn-addcart').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

</script>

<!--===============================================================================================-->

<script type="text/javascript" src={{asset("vendor/noui/nouislider.min.js")}}></script>
<script type="text/javascript">
    /*[ No ui ]
    ===========================================================*/
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [50000, 5000000],
        connect: true,
        range: {
            'min': 50000,
            'max': 5000000
        },
        step: 100,
    });

    var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function (values, handle) {
        skipValues[handle].innerHTML = Math.round(values[handle]);
    });
</script>


<script>
    $('.modal').on('hidden.bs.modal', function () {
        $(this).find('form')[0].reset();
    });
</script>

<script>
    $('input[name = "name"]').keypress(function (e) {
        if (e.which == 13) {
            $('form[name = "search-form"]').submit();
        }
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('js/master-layout-2-js/main.js')}}"></script>
<script src={{asset("/js/jquery.paginate.js")}}></script>
<script src="{{asset('/js/product.js')}}"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="{{asset('js/my_script.js')}}"></script>


</body>
</html>
