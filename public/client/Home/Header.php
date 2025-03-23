<?php
require_once(__DIR__ . "../../../../config/config.php");
require_once(__DIR__ . "../../../../config/function.php");
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <title><?= $BNZ->site('description'); ?></title>
    <link rel="icon" type="image/png" href="<?= $BNZ->site('favicon'); ?>">
    <link rel="icon" type="image/x-icon" href="<?= $BNZ->site('favicon'); ?>">
    <meta name="description" content="<?= $BNZ->site('description'); ?>">
    <meta name="keywords" content="<?= $BNZ->site('keywords'); ?>">
    <!-- Open Graph data -->
    <meta property="og:title" content="<?= $BNZ->site('description'); ?>">
    <meta property="og:type" content="Website">
    <meta property="og:url" content="<?= $url ?>">
    <meta property="og:image" content="<?= $BNZ->site('image'); ?>">
    <meta property="og:description" content="<?= $BNZ->site('description'); ?>">
    <meta property="og:site_name" content="<?= $BNZ->site('webname'); ?>">
    <meta property="article:section" content="<?= $BNZ->site('description'); ?>">
    <meta property="article:tag" content="<?= $BNZ->site('keywords'); ?>">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="<?= $BNZ->site('image'); ?>">
    <meta name="twitter:site" content="@wmt24h">
    <meta name="twitter:title" content="<?= $BNZ->site('webname'); ?>">
    <meta name="twitter:description" content="<?= $BNZ->site('description'); ?>">
    <meta name="twitter:creator" content="@wmt24h">
    <meta name="twitter:image:src" content="<?= $BNZ->site('image'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wc-blocks-style-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-active-filters-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/active-filters.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-add-to-cart-form-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/add-to-cart-form.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-packages-style-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/packages-style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-all-products-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-products.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-all-reviews-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/all-reviews.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-attribute-filter-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/attribute-filter.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-breadcrumbs-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/breadcrumbs.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-catalog-sorting-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/catalog-sorting.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-customer-account-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/customer-account.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-featured-category-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/featured-category.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-featured-product-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/featured-product.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-mini-cart-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/mini-cart.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-price-filter-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/price-filter.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-add-to-cart-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-add-to-cart.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-button-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-button.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-categories-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-categories.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-image-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-image.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-image-gallery-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-image-gallery.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-query-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-query.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-results-count-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-results-count.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-reviews-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-reviews.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-sale-badge-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-sale-badge.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-search-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-search.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-sku-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-sku.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-stock-indicator-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-stock-indicator.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-summary-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-summary.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-title-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-title.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-rating-filter-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/rating-filter.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-reviews-by-category-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/reviews-by-category.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-reviews-by-product-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/reviews-by-product.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-product-details-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/product-details.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-single-product-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/single-product.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-stock-filter-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/stock-filter.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-cart-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/cart.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-checkout-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/checkout.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-mini-cart-contents-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/mini-cart-contents.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='euis-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/unlimited-elementor-inner-sections-by-taspristudio/public/css/euis-public.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='<?= $url ?>theme_home/asset/wp-content/themes/toka/assets/css/bootstrap.css' type='text/css' media='all' />
    <link rel='stylesheet' id='toka-css' href='<?= $url ?>theme_home/asset/wp-content/themes/toka/style.css' type='text/css' media='all' />
    <style id='toka-inline-css' type='text/css'>
        :root {
            --primary-color: #36bb91;
            --primary-links-hover-color: #36bb91;
            --primary-bg-color: #1c222b;
            --header-bg-color: #1c222b;
            --footer-bg-color: #f8f8f8;
            --primary-dark-color: #b6bdc5;
            --title-color: #ffffff;
            --fw-title-color: #1a1a1a;
            --btn-bg-color: #36bb91;
            --btn-hover-color: #1a5e49;
            --txt-select-bg-color: #f3d7f463;
            --logo-height: 40px;
        }

        #main-header,
        #site-footer {
            position: relative;
        }

        @media (min-width: 1200px) {

            #main-header+#site-content,
            #main-header+#site-content-wrap-grow,
            #main-header+#primary,
            #main-header+main {
                padding-top: 50px;
            }
        }

        @media (max-width: 1199px) {

            #main-header+#site-content,
            #main-header+#site-content-wrap-grow,
            #main-header+#primary,
            #main-header+main {
                padding-top: 32px;
            }
        }

        #header-wave {
            margin-bottom: -1px;
            width: 100%;
        }

        #magic-search .search-submit {
            display: none;
        }

        .onsale .onsale-svg {
            height: 100%;
        }

        #header-wave * {
            fill: transparent;
        }

        @media (max-width: 1199px) {
            #header-wave {
                height: 20px;
            }
        }

        @media (min-width: 1200px) {
            #header-wave {
                height: 45px;
            }

            :root #main-header {
                padding-top: 50px;
            }
        }

        .header-icons {
            display: none;
        }

        @media (max-width: 1199px) {
            .header-info {
                margin-top: 1rem;
            }
        }
    </style>
    <link rel='stylesheet' id='elementor-icons-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/elementor/assets/css/frontend-lite.min.css' type='text/css' media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-kit-11 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .e-con {
            --container-max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-con {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-con {
                --container-max-width: 767px;
            }
        }

        .elementor-widget-heading .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-image .widget-image-caption {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-text-editor {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap,
        .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap {
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-button .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-divider {
            --divider-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider .elementor-divider__text {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-divider.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider.elementor-view-framed .elementor-icon,
        .elementor-widget-divider.elementor-view-default .elementor-icon {
            color: var(--e-global-color-secondary);
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider.elementor-view-framed .elementor-icon,
        .elementor-widget-divider.elementor-view-default .elementor-icon svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-image-box .elementor-image-box-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-image-box .elementor-image-box-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-icon.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon.elementor-view-framed .elementor-icon,
        .elementor-widget-icon.elementor-view-default .elementor-icon {
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon.elementor-view-framed .elementor-icon,
        .elementor-widget-icon.elementor-view-default .elementor-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box.elementor-view-framed .elementor-icon,
        .elementor-widget-icon-box.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box .elementor-icon-box-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box .elementor-icon-box-title,
        .elementor-widget-icon-box .elementor-icon-box-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-icon-box .elementor-icon-box-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-star-rating .elementor-star-rating__title {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-image-gallery .gallery-item .gallery-caption {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after {
            border-color: var(--e-global-color-text);
        }

        .elementor-widget-icon-list .elementor-icon-list-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-list .elementor-icon-list-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-icon-list .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-widget-icon-list .elementor-icon-list-item>a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-icon-list .elementor-icon-list-text {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-counter .elementor-counter-number-wrapper {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-counter .elementor-counter-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-progress .elementor-progress-wrapper .elementor-progress-bar {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-progress .elementor-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-name {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-job {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-tabs .elementor-tab-title,
        .elementor-widget-tabs .elementor-tab-title a {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-tabs .elementor-tab-title.elementor-active,
        .elementor-widget-tabs .elementor-tab-title.elementor-active a {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-tabs .elementor-tab-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-tabs .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-accordion .elementor-accordion-icon,
        .elementor-widget-accordion .elementor-accordion-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-accordion .elementor-accordion-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-accordion .elementor-active .elementor-accordion-icon,
        .elementor-widget-accordion .elementor-active .elementor-accordion-title {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-accordion .elementor-active .elementor-accordion-icon svg {
            fill: var(--e-global-color-accent);
        }

        .elementor-widget-accordion .elementor-accordion-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-accordion .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-toggle .elementor-toggle-title,
        .elementor-widget-toggle .elementor-toggle-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-toggle .elementor-toggle-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-toggle .elementor-tab-title.elementor-active a,
        .elementor-widget-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-toggle .elementor-toggle-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-toggle .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-alert .elementor-alert-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-alert .elementor-alert-description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-caldera-form .eael-contact-form-description {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .eael-contact-form-7-title {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .eael-contact-form-7-description {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-text,
        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-quiz,
        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-quiz,
        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-textarea,
        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control.wpcf7-select {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form label,
        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form .wpcf7-quiz-label {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form-control::-webkit-input-placeholder {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-form input[type="submit"] {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-contact-form-7 .eael-contact-form-7 .wpcf7-not-valid-tip {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-countdown .eael-countdown-digits::after {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-countdown .eael-countdown-digits {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-countdown .eael-countdown-label {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-countdown .eael-countdown-finish-message .expiry-title {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .eael-countdown-finish-text {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-creative-button .eael-creative-button .cretive-button-text,
        .elementor-widget-eael-creative-button .eael-creative-button--winona::after,
        .elementor-widget-eael-creative-button .eael-creative-button--rayen::before,
        .elementor-widget-eael-creative-button .eael-creative-button--tamaya::after,
        .elementor-widget-eael-creative-button .eael-creative-button--tamaya::before {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-dual-color-header .eael-dch-separator-wrap i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-header .eael-facebook-feed-item-user .eael-facebook-feed-username {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-header .eael-facebook-feed-post-time {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-content .eael-facebook-feed-message {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-host {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-description {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-overlay .eael-facebook-feed-item .eael-facebook-feed-item-overlay,
        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-footer {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-fancy-text .eael-fancy-text-prefix {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-fancy-text .eael-fancy-text-strings,
        .elementor-widget-eael-fancy-text .typed-cursor {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-fancy-text .eael-fancy-text-suffix {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-feature-list .connector-type-classic .connector {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-feature-list .connector-type-modern .eael-feature-list-item:before,
        .elementor-widget-eael-feature-list .connector-type-modern .eael-feature-list-item:after {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title,
        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title>a,
        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title:visited {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title,
        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-caption-head .fg-item-price {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-caption-head .fg-item-ratings {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-item-category span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-filter-trigger>span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-layout-3-filter-controls li.control {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .eael-gallery-load-more .eael-filterable-gallery-load-more-text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-fluentform .eael-fluentform-description {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-gravity-form .eael-gravity-form .gform_wrapper .gform_title,
        .elementor-widget-eael-gravity-form .eael-gravity-form .eael-gravity-form-title {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-gravity-form .eael-gravity-form .gform_wrapper .gform_description,
        .elementor-widget-eael-gravity-form .eael-gravity-form .eael-gravity-form-description {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-gravity-form .eael-gravity-form .gfield.gsection .gsection_title {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-gravity-form .eael-gravity-form .ginput_container_fileupload input[type="file"]::file-selector-button,
        .elementor-widget-eael-gravity-form .eael-gravity-form .ginput_container_fileupload input[type="file"]::-webkit-file-upload-button,
        .elementor-widget-eael-gravity-form .eael-gravity-form .ginput_container_fileupload .button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-gravity-form .eael-gravity-form .gform_footer input[type="submit"],
        .elementor-widget-eael-gravity-form .eael-gravity-form .gform_body .gform_page_footer input[type="submit"],
        .elementor-widget-eael-gravity-form .eael-gravity-form .gform_body input[type="submit"].gform-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-gravity-form .eael-gravity-form .gform_body .gform_page_footer input[type="button"] {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-gravity-form .eael-gravity-form .gform_confirmation_wrapper .gform_confirmation_message {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-nft-gallery .eael-nft-gallery-load-more .eael-nft-gallery-load-more-text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-ninja .eael-ninja-form .eael-contact-form-description {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-ninja .eael-ninja-form .submit-container input[type="button"],
        .elementor-widget-eael-ninja .eael-ninja-form .submit-container input[type="submit"] {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-ninja .eael-ninja-form .nf-form-fields-required {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-post-grid .eael-meta-posted-on {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-grid .eael-entry-meta>span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-grid .eael-entry-title,
        .elementor-widget-eael-post-grid .eael-entry-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-post-grid .eael-grid-post-excerpt p {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-grid .post-meta-categories li,
        .elementor-widget-eael-post-grid .post-meta-categories li a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-timeline .eael-timeline-post-title .eael-timeline-post-title-text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-post-timeline .eael-timeline-post-excerpt p {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-progress-bar .eael-progressbar-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-progress-bar .eael-progressbar-line-fill.eael-has-inner-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-progress-bar .eael-progressbar-count-wrap {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-progress-bar .eael-progressbar-half-circle-after span {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-simple-menu .eael-simple-menu>li>a,
        .eael-simple-menu-container .eael-simple-menu-toggle-text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-simple-menu .eael-simple-menu li ul li>a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-twitter-feed .eael-twitter-feed-item .eael-twitter-feed-item-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-twitter-feed .eael-twitter-feed-load-more .eael-twitter-feed-load-more-text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-weform .eael-weform-container ul.wpuf-form .wpuf-submit input[type="submit"] {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-wpforms .eael-contact-form-description,
        .elementor-widget-eael-wpforms .wpforms-description {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field label {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]),
        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field textarea,
        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field select {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-submit-container .wpforms-submit {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-ucaddon_logo_card_testimonial .ue-text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_logo_card_testimonial .ue-title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_logo_card_testimonial .ue-subtitle {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_underline_animated_button .underline_animated_button a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_gradient_underline_text_effect .gradient_underline_text_effect {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_gradient_underline_text_effect .beginning_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_gradient_underline_text_effect .underline--magical {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_gradient_underline_text_effect .ending_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_text_rotator .beginning_text_typography {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_text_rotator .middle_text_typography {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_text_rotator .ending_text_typography {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_gradient_text_effect .uc_style_gradient_text_effect_elementor_beginning_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_gradient_text_effect .uc_style_gradient_text_effect_elementor_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_gradient_text_effect .uc_style_gradient_text_effect_elementor_ending_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_simple_slider .ue_simple_slider_title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_simple_slider .ue_simple_slider_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_hover_text_reveal_content_box .uc_title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_hover_text_reveal_content_box .uc_description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_split_hero .uc_title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_split_hero .uc_subtitle {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_split_hero .uc_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_split_hero .uc_btn {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_border_hero .uc_style_border_hero_elementor_title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_border_hero .uc_style_border_hero_elementor_big_title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_border_hero .uc_style_border_hero_elementor_sub_title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_border_hero .uc_style_border_hero_elementor_button_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_woocommerce_product_list .product-text-name {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_woocommerce_product_list .ue-product-category {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_woocommerce_product_list .product-short-description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_woocommerce_product_list .uc_regular_price {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_woocommerce_product_list .uc_sale_price {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_woocommerce_product_list .uc-buttons a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_woocommerce_product_list .product-img-overlay .uc-buttons a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_woocommerce_product_list .ue_woocommerce_product_list_badge {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_content_tabs .uc_bold_tabs ul li a,
        .r-tabs-accordion-title a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_content_tabs .tab-container {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_card_carousel .card_carousel_title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_card_carousel .card_carousel_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_card_carousel .uc_more_btn {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_timeline_bullets .ue_item_title {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_timeline_bullets .ue_item_text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-ucaddon_arrow_navigation .ue-remote-arrow {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-text-path {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-addon-banner .premium-banner-ib-desc .premium_banner_title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-banner .premium_banner_content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-addon-banner .premium-banner-link {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-addon-banner .premium-banner-link:hover {
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-blog .premium-blog-filters-container li a.category {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-filters-container li a.active {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-post-link:before,
        .elementor-widget-premium-addon-blog .premium-blog-post-link:after {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-entry-title,
        .elementor-widget-premium-addon-blog .premium-blog-entry-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-blog .premium-blog-entry-title a {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-entry-title:hover a {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-cats-container a {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-addon-blog .premium-blog-meta-data {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-addon-blog .premium-blog-post-content {
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-blog .premium-blog-post-tags-container {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-pagination-container .page-numbers {
            color: var(--e-global-color-secondary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-pagination-container .page-numbers:hover {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-pagination-container span.current {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog ul.slick-dots li {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog ul.slick-dots li.slick-active {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-wrap .slick-arrow {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-button .premium-button .premium-button-text-icon-wrapper span {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button-text-icon-wrapper i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-drawable-icon *,
        .elementor-widget-premium-addon-button .premium-button-text-icon-wrapper svg:not([class*="premium-"]) {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button,
        .elementor-widget-premium-addon-button .premium-button.premium-button-style2-shutinhor:before,
        .elementor-widget-premium-addon-button .premium-button.premium-button-style2-shutinver:before,
        .elementor-widget-premium-addon-button .premium-button-style5-radialin:before,
        .elementor-widget-premium-addon-button .premium-button-style5-rectin:before {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button:hover .premium-button-text-icon-wrapper span {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button:hover .premium-button-text-icon-wrapper i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button:hover .premium-drawable-icon *,
        .elementor-widget-premium-addon-button .premium-button:hover svg:not([class*="premium-"]) {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button-none:hover,
        .elementor-widget-premium-addon-button .premium-button-style1:before,
        .elementor-widget-premium-addon-button .premium-button-style2-shutouthor:before,
        .elementor-widget-premium-addon-button .premium-button-style2-shutoutver:before,
        .elementor-widget-premium-addon-button .premium-button-style2-shutinhor,
        .elementor-widget-premium-addon-button .premium-button-style2-shutinver,
        .elementor-widget-premium-addon-button .premium-button-style2-dshutinhor:before,
        .elementor-widget-premium-addon-button .premium-button-style2-dshutinver:before,
        .elementor-widget-premium-addon-button .premium-button-style2-scshutouthor:before,
        .elementor-widget-premium-addon-button .premium-button-style2-scshutoutver:before,
        .elementor-widget-premium-addon-button .premium-button-style3-after:hover,
        .elementor-widget-premium-addon-button .premium-button-style3-before:hover,
        .elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper,
        .elementor-widget-premium-addon-button .premium-button-style5-radialin,
        .elementor-widget-premium-addon-button .premium-button-style5-radialout:before,
        .elementor-widget-premium-addon-button .premium-button-style5-rectin,
        .elementor-widget-premium-addon-button .premium-button-style5-rectout:before,
        .elementor-widget-premium-addon-button .premium-button-style6-bg,
        .elementor-widget-premium-addon-button .premium-button-style6:before {
            background-color: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-button .premium-button-style7 .premium-button-text-icon-wrapper:before {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button-style7 .premium-button-text-icon-wrapper:after {
            background-color: var(--e-global-color-text);
        }

        .elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow:hover {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow:hover svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget ul.slick-dots li {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget ul.slick-dots li svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget ul.slick-dots li.slick-active {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-carousel-widget ul.slick-dots li.slick-active svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-contact-form .premium-cf7-container,
        .elementor-widget-premium-contact-form .premium-cf7-container label {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-contact-form .premium-cf7-container {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-contact-form .premium-cf7-container select.wpcf7-select,
        .elementor-widget-premium-contact-form .premium-cf7-container input.wpcf7-text,
        .elementor-widget-premium-contact-form .premium-cf7-container textarea.wpcf7-textarea {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-contact-form .premium-cf7-container select.wpcf7-select option {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-contact-form .premium-cf7-container input.wpcf7-submit {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-amount,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure span {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-amount,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .top,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .top-back,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .bottom-back {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-period,
        .elementor-widget-premium-countdown-timer .premium-countdown-label {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-countdown-timer .countdown_separator {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-countdown-timer .premium-countdown-exp-message {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-area .premium-counter-icon .icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-counter .premium-drawable-icon *,
        .elementor-widget-premium-counter .premium-counter-icon svg:not([class*="premium-"]) {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-counter .premium-counter-area .premium-counter-icon .icon-bg {
            background: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-counter .premium-counter-title .premium-counter-title-val {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-desc {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-area .premium-counter-init {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-area span#prefix {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-area span#suffix {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-dual-header .premium-dual-header-first-span {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-dual-header .premium-dual-header-second-header {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-dual-header.premium-bg-text-yes .elementor-widget-container:before {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-fancy-text .premium-fancy-text {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-fancy-text .premium-fancy-svg-text .premium-fancy-list-items {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-fancy-text .premium-fancy-text-wrapper:not(.auto-fade) .premium-fancy-text,
        .elementor-widget-premium-addon-fancy-text .premium-fancy-text svg g>text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-fancy-text .typed-cursor {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-fancy-text .premium-prefix-text,
        .elementor-widget-premium-addon-fancy-text .premium-suffix-text {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-fancy-text .loading .premium-loading-bar {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-img-name,
        .elementor-widget-premium-img-gallery .premium-gallery-img-name a {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-img-desc,
        .elementor-widget-premium-img-gallery .premium-gallery-img-desc a {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image i,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image svg,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link svg {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image span,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link span {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover i,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover svg,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover svg {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover span,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover span {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-cats-container li a.category {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-cats-container li a.active {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-load-more-btn {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-load-more-btn .premium-loader {
            border-color: var(--e-global-color-secondary);
            border-top-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-load-more-btn:hover {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-wrapper i,
        .elementor-widget-premium-icon-list .premium-bullet-list-icon-text p {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list svg:not([class*="premium-"]) {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper i,
        .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper svg,
        .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper .premium-bullet-list-icon-text p {
            text-shadow: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-wrapper i,
        .elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-icon-text p {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover .premium-bullet-list-wrapper i,
        .elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover .premium-bullet-list-icon-text p {
            text-shadow: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-content:hover svg:not([class*="premium-"]) {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-icon-text p {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-text span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-text span {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-text span {
            text-shadow: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-text span {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover .premium-bullet-list-text span {
            text-shadow: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-badge span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-badge span {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-divider:not(:last-child):after {
            border-top-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-divider-inline:not(:last-child):after {
            border-left-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-icon-list li.premium-bullet-list-content:not(:last-of-type) .premium-bullet-list-connector .premium-icon-connector-content:after {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button .premium-image-button-text-icon-wrapper span {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-text-icon-wrapper i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-drawable-icon,
        .elementor-widget-premium-addon-image-button svg:not([class*="premium-"]) {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-image-button-text-icon-wrapper span {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-image-button-text-icon-wrapper i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-drawable-icon,
        .elementor-widget-premium-addon-image-button .premium-image-button:hover svg:not([class*="premium-"]) {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-style3:before {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-horizontal:before,
        .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-vertical:before {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-none:hover,
        .elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper,
        .elementor-widget-premium-addon-image-button .premium-image-button-style1:before,
        .elementor-widget-premium-addon-image-button .premium-image-button-style3:hover,
        .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-horizontal:hover,
        .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-vertical:hover,
        .elementor-widget-premium-addon-image-button .premium-button-style6-bg,
        .elementor-widget-premium-addon-image-button .premium-button-style6:before {
            background-color: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-squares-effect:before,
        .elementor-widget-premium-addon-image-button .premium-image-button-squares-effect:after,
        .elementor-widget-premium-addon-image-button .premium-image-button-squares-square-container:before,
        .elementor-widget-premium-addon-image-button .premium-image-button-squares-square-container:after {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-image-separator-container i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-drawable-icon *,
        .elementor-widget-premium-addon-image-separator svg:not([class*="premium-"]) {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-image-separator-container i:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-drawable-icon:hover *,
        .elementor-widget-premium-addon-image-separator svg:not([class*="premium-"]):hover {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-image-separator-container i,
        .elementor-widget-premium-addon-image-separator .premium-image-separator-container>svg {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-separator .premium-image-separator-container i:hover,
        .elementor-widget-premium-addon-image-separator .premium-image-separator-container>svg:hover {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-maps .premium-maps-info-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-maps .premium-maps-info-desc {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn,
        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn svg,
        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn svg * {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover,
        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-text:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover svg,
        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover svg * {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover {
            background: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-box-modal-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-box-modal-lower-close {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-box-modal-lower-close:hover {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item>.premium-menu-link {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item>.premium-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item:hover>.premium-menu-link {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item:hover>.premium-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-nav-widget-container:not(.premium-nav-pointer-framed) .premium-menu-link-parent:before,
        .elementor-widget-premium-nav-menu .premium-nav-widget-container:not(.premium-nav-pointer-framed) .premium-menu-link-parent:after {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-nav-pointer-framed .premium-menu-link-parent:before,
        .elementor-widget-premium-nav-menu .premium-nav-pointer-framed .premium-menu-link-parent:after {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-active-item>.premium-menu-link {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-active-item>.premium-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-premium-nav-menu .premium-nav-menu-item>.premium-menu-link>.premium-item-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu:not(.premium-hamburger-menu):not(.premium-nav-slide):not(.premium-nav-dropdown) .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-item:hover,
        .elementor-widget-premium-nav-menu.premium-hamburger-menu .premium-main-nav-menu .premium-sub-menu>.premium-sub-menu-item:hover>.premium-sub-menu-link,
        .elementor-widget-premium-nav-menu.premium-nav-slide .premium-main-nav-menu .premium-sub-menu>.premium-sub-menu-item:hover>.premium-sub-menu-link,
        .elementor-widget-premium-nav-menu.premium-nav-dropdown .premium-main-nav-menu .premium-sub-menu>.premium-sub-menu-item:hover>.premium-sub-menu-link {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-active-item .premium-sub-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-nav-menu .premium-sub-menu-item .premium-sub-menu-link .premium-sub-item-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-notifications .premium-blog-post-link:before,
        .elementor-widget-premium-notifications .premium-blog-post-link:after {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-notifications .premium-blog-entry-title,
        .elementor-widget-premium-notifications .premium-blog-entry-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-notifications .premium-blog-entry-title a {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-notifications .premium-blog-entry-title:hover a {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-notifications .premium-blog-meta-data {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-notifications .premium-blog-post-content {
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-notifications .premium-blog-post-tags-container {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-person .premium-person-name {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-person .premium-person-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-person .premium-person-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-person .premium-person-list-item i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-person .premium-person-list-item:hover i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-person .premium-persons-container .slick-arrow {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-person .premium-persons-container .slick-arrow:hover {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-pinterest-feed .premium-pinterest-feed__pin-creator a {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-pinterest-feed .premium-pinterest-feed__created-at {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-pinterest-feed .premium-pinterest-feed__board-trigger,
        .elementor-widget-premium-pinterest-feed .premium-pinterest-feed__load-more-btn {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-premium-pinterest-feed ul.slick-dots li {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-pinterest-feed ul.slick-dots li.slick-active {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-pinterest-feed .premium-pinterest-feed__pins-wrapper .slick-arrow {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-pinterest-feed .premium-pinterest-sharer {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-pinterest-feed .premium-pinterest-share-text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-post-ticker.premium-ticker-pointer-yes:not(.premium-reversed-yes) .premium-post-ticker__content>div:first-child::after {
            border-left-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-post-ticker.premium-ticker-pointer-yes.premium-reversed-yes .premium-post-ticker__content>div:first-child::after {
            border-right-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-post-ticker.premium-post-ticker__layout-3 .premium-post-ticker__header-wrapper::after {
            background-color: var(--e-global-color-text);
        }

        .elementor-widget-premium-post-ticker .premium-post-ticker__title-wrapper,
        .elementor-widget-premium-post-ticker.premium-post-ticker__layout-2 .premium-post-ticker__title-wrapper::after,
        .elementor-widget-premium-post-ticker.premium-post-ticker__layout-3 .premium-post-ticker__header-wrapper::after {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-post-ticker .premium-post-ticker__post-date span {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-post-ticker .premium-post-ticker__post-author a {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-post-ticker .premium-post-ticker__arrows a {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-post-ticker .premium-post-ticker__arrows a:hover {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container .premium-drawable-icon *,
        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container svg:not([class*="premium-"]) {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container i,
        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon,
        .elementor-widget-premium-addon-pricing-table .premium-pricing-image {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-table-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-slashed-price-value {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-currency {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-value {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-separator {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-duration {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-list-span {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-list .premium-pricing-list-span {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-feature-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-list-item .premium-drawable-icon *,
        .elementor-widget-premium-addon-pricing-table .premium-pricing-list-item svg:not([class*="premium-"]) {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-list-tooltip {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-description-container {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-button {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-button:hover {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-badge-container .corner span {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-triangle.premium-badge-left .corner {
            border-top-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-triangle.premium-badge-right .corner {
            border-right-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-circle,
        .elementor-widget-premium-addon-pricing-table .premium-badge-stripe .corner,
        .elementor-widget-premium-addon-pricing-table .premium-badge-flag .corner {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-flag.premium-badge-right .corner::before {
            border-left: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-flag.premium-badge-left .corner::after {
            border-right: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-base,
        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-inner {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle div,
        .elementor-widget-premium-addon-progressbar .premium-progressbar-hf-circle-progress {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-left-label {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-right-label {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-drawable-icon *,
        .elementor-widget-premium-addon-progressbar svg:not([class*="premium-"]) {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-center-label {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-percentage {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-arrow {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-pin {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-hf-label-left {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-hf-label-right {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-img-wrapper {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-person-name {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-separator {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-company-link {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-text-wrapper {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-title .premium-title-header,
        .elementor-widget-premium-addon-title.premium-title-noise-yes .premium-title-text::before,
        .elementor-widget-premium-addon-title.premium-title-noise-yes .premium-title-text::after {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title.premium-title-stroke-yes .premium-title-text {
            -webkit-text-fill-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style8 .premium-title-text[data-animation="shiny"] {
            --base-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-header {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-title:not(.premium-title-clipped) .premium-title-style2,
        .elementor-widget-premium-addon-title.premium-title-clipped .premium-title-text {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-title:not(.premium-title-clipped) .premium-title-style3,
        .elementor-widget-premium-addon-title.premium-title-clipped .premium-title-text {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-title .premium-title-style5 {
            border-bottom: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style6 {
            border-bottom: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style6:before {
            border-bottom-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style7-stripe {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-drawable-icon *,
        .elementor-widget-premium-addon-title svg:not([class*="premium-"]) {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-bg-text:before {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-play-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-play-icon-container:hover .premium-video-box-play-icon {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-text {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-description-container:hover .premium-video-box-text {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-description-container {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-sticky-close i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-sticky-infobar {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-video-box .premium-youtube-vid-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-tooltip {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-tooltip span {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-inner .premium-vscroll-dots.right .premium-vscroll-tooltip::after {
            border-left-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-inner .premium-vscroll-dots.left .premium-vscroll-tooltip::after {
            border-right-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-dots .premium-vscroll-nav-link span {
            background-color: var(--e-global-color-primary);
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-dots li.active .premium-vscroll-nav-link span {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-dots {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item .premium-vscroll-nav-link {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item .premium-vscroll-nav-link:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active .premium-vscroll-nav-link {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active .premium-vscroll-nav-link:hover {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-weather .premium-weather__city-name {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-weather:not(.premium-weather__layout-3) .premium-weather__basic-weather .premium-weather__temp-wrapper,
        .elementor-widget-premium-weather.premium-weather__layout-3 .premium-weather__extra-outer-wrapper .premium-weather__temp-wrapper {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-weather .premium-weather__feels-like {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-world-clock .premium-world-clock__clock-title {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-world-clock .premium-world-clock__date,
        .elementor-widget-premium-world-clock .premium-world-clock__month-wrapper,
        .elementor-widget-premium-world-clock .premium-world-clock__day-wrapper,
        .elementor-widget-premium-world-clock .premium-world-clock__date-segment {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-world-clock .premium-world-clock__date-segment {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-world-clock .premium-world-clock__gmt-offset {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-product-desc {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woo-products-details-wrap .premium-woo-atc-button .button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce li.product .price {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce li.product .price del {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce .woocommerce-loop-product__title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce .woocommerce-loop-product__title:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce:not(.premium-woo-skin-grid-10) .premium-woo-product-sale-wrap .premium-woo-product-onsale,
        .elementor-widget-premium-woo-products .premium-woocommerce.premium-woo-skin-grid-10 .premium-woo-product-sale-wrap {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce.premium-woo-skin-grid-10 .premium-woo-product-sale-wrap::after {
            border-left-color: var(--e-global-color-secondary);
            border-right-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-woo-products .premium-woo-product-sale-wrap .premium-woo-product-onsale {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-woo-products:not([data-widget_type="premium-woo-products.grid-10"]) .premium-woo-product-featured-wrap .premium-woo-product-featured,
        .elementor-widget-premium-woo-products[data-widget_type="premium-woo-products.grid-10"] .premium-woo-product-featured-wrap {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce.premium-woo-skin-grid-10 .premium-woo-product-featured-wrap::after {
            border-left-color: var(--e-global-color-primary);
            border-right-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-woo-products .premium-woo-product-featured-wrap .premium-woo-product-featured {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-product-category {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-products-details-wrap .premium-woo-atc-button .button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-qv-btn {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce .premium-woo-products-details-wrap .premium-woo-qv-btn {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woo-products-pagination ul li>.page-numbers {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-premium-woo-products .premium-woo-load-more-btn {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-woo-products .premium-woo-load-more-btn .premium-loader {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce .slick-arrow {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-woo-products ul.slick-dots li {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-woo-products .premium-woocommerce ul.slick-dots li.slick-active {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-woo-products .pa-out-of-stock {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
            background-color: var(--e-global-color-secondary);
        }

        @media(max-width:1024px) {
            .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item>.premium-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-text);
            }

            .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item:hover>.premium-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-secondary);
            }

            .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-active-item>.premium-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-accent);
            }

            .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-secondary);
            }

            .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-active-item .premium-sub-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-primary);
            }
        }

        @media(max-width:767px) {
            .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item>.premium-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-text);
            }

            .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item:hover>.premium-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-secondary);
            }

            .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-active-item>.premium-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-accent);
            }

            .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-secondary);
            }

            .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-active-item .premium-sub-menu-link .premium-dropdown-icon {
                color: var(--e-global-color-primary);
            }
        }

        .elementor-23310 .elementor-element.elementor-element-aa23c9b>.elementor-container {
            max-width: 1440px;
        }

        .elementor-23310 .elementor-element.elementor-element-aa23c9b .elementor-column-gap-custom .elementor-column>.elementor-element-populated {
            padding: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-aa23c9b:not(.elementor-motion-effects-element-type-background),
        .elementor-23310 .elementor-element.elementor-element-aa23c9b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #020710;
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
            background-position: center right;
            background-repeat: no-repeat;
            background-size: 55% auto;
        }

        .elementor-23310 .elementor-element.elementor-element-aa23c9b>.elementor-background-overlay {
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-aa23c9b {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 180px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-23310 .elementor-element.elementor-element-7cfe8d4.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-7cfe8d4.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-7cfe8d4>.elementor-element-populated {
            margin: 0% 10% 0% 20%;
            --e-column-margin-right: 10%;
            --e-column-margin-left: 20%;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-e8c8ece {
            text-align: left;
            color: #A2A3A2;
            font-family: "Inter", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: 1px;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-e8c8ece>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
            padding: 8px 15px 8px 15px;
            background-color: #1A1A1A;
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-23310 .elementor-element.elementor-element-b53c240 {
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 62px;
            font-weight: 600;
            line-height: 1.2em;
            letter-spacing: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-bcb0398 {
            color: #A2A3A2;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-2dcc85d .elementor-button .elementor-align-icon-right {
            margin-left: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-2dcc85d .elementor-button .elementor-align-icon-left {
            margin-right: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-2dcc85d .elementor-button {
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0px;
            fill: #020710;
            color: #020710;
            background-color: transparent;
            background-image: linear-gradient(90deg, #BC35BC 0%, #124EE8 100%);
            border-radius: 60px 60px 60px 60px;
            box-shadow: 0px 0px 0px 0px rgba(148, 214.6569293478261, 255, 0.26);
            padding: 15px 35px 15px 35px;
        }

        .elementor-23310 .elementor-element.elementor-element-2dcc85d>.elementor-widget-container {
            margin: 10px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-2944cb3 {
            margin-top: 20px;
            margin-bottom: 100px;
        }

        .elementor-23310 .elementor-element.elementor-element-bbcb8ee {
            text-align: left;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-bbcb8ee img {
            width: 130px;
            height: 60px;
            object-fit: contain;
            opacity: 0.8;
            transition-duration: 2s;
        }

        .elementor-23310 .elementor-element.elementor-element-bbcb8ee:hover img {
            opacity: 1;
        }

        .elementor-23310 .elementor-element.elementor-element-bbcb8ee>.elementor-widget-container {
            margin: 0px 60px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-9cf69f8 {
            text-align: left;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-9cf69f8 img {
            width: 130px;
            height: 60px;
            object-fit: contain;
            opacity: 0.8;
            transition-duration: 2s;
        }

        .elementor-23310 .elementor-element.elementor-element-9cf69f8:hover img {
            opacity: 1;
        }

        .elementor-23310 .elementor-element.elementor-element-9cf69f8>.elementor-widget-container {
            margin: 0px 60px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-23310 .elementor-element.elementor-element-1f98f87.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-1f98f87.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-1f98f87>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-1f98f87>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 0px 0px 80px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-1f98f87>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-5301810 img {
            width: 80%;
            max-width: 280px;
        }

        .elementor-23310 .elementor-element.elementor-element-5301810 {
            z-index: 5;
        }

        .elementor-23310 .elementor-element.elementor-element-8e3fa3e {
            --alignment: center;
            --width: 100px;
            font-family: "Inter", Sans-serif;
            font-size: 27px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1em;
            --word-spacing: 20px;
            --text-color: #FFFFFF;
            --transition: 0.3s;
            width: auto;
            max-width: auto;
            top: -32px;
        }

        .elementor-23310 .elementor-element.elementor-element-8e3fa3e>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/tgbtg.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 25px auto;
            border-radius: 100% 100% 100% 100%;
        }

        body:not(.rtl) .elementor-23310 .elementor-element.elementor-element-8e3fa3e {
            left: 0%;
        }

        body.rtl .elementor-23310 .elementor-element.elementor-element-8e3fa3e {
            right: 0%;
        }

        .elementor-23310 .elementor-element.elementor-element-a558b12:not(.elementor-motion-effects-element-type-background),
        .elementor-23310 .elementor-element.elementor-element-a558b12>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
            background-position: 0% -10%;
            background-repeat: no-repeat;
            background-size: 56% auto;
        }

        .elementor-23310 .elementor-element.elementor-element-a558b12>.elementor-background-overlay {
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
            background-position: 95% 120%;
            background-repeat: no-repeat;
            background-size: 55% auto;
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-a558b12 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 100px 0px 100px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-bb7c5ff>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-40b2f2a>.elementor-container {
            max-width: 1140px;
        }

        .elementor-23310 .elementor-element.elementor-element-7bae0be {
            text-align: center;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-7bae0be img {
            width: 80%;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-7bae0be>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-23310 .elementor-element.elementor-element-8b50d79.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-8b50d79.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-8b50d79>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-8b50d79>.elementor-element-populated {
            margin: 0px 0px 0px 60px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 60px;
        }

        .elementor-23310 .elementor-element.elementor-element-eeeaa9b {
            text-align: left;
            color: #124EE8;
            font-family: "Inter", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: 1px;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-eeeaa9b>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
            padding: 8px 15px 8px 15px;
            background-color: #124EE852;
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-23310 .elementor-element.elementor-element-cbf5029 {
            text-align: left;
            color: #020710;
            font-family: "Inter", Sans-serif;
            font-size: 44px;
            font-weight: 600;
            line-height: 1.3em;
            letter-spacing: -0.8px;
        }

        .elementor-23310 .elementor-element.elementor-element-cbf5029>.elementor-widget-container {
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-2304308 {
            color: #4F4F4F;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.9em;
        }

        .elementor-23310 .elementor-element.elementor-element-2304308>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-e7268fe .elementor-button .elementor-align-icon-right {
            margin-left: 8px;
        }

        .elementor-23310 .elementor-element.elementor-element-e7268fe .elementor-button .elementor-align-icon-left {
            margin-right: 8px;
        }

        .elementor-23310 .elementor-element.elementor-element-e7268fe .elementor-button {
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0px;
            fill: #020710;
            color: #020710;
            background-color: #FA4F0900;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #999FB7;
            border-radius: 30px 30px 30px 30px;
            box-shadow: 0px 10px 20px 0px rgba(255, 255, 255, 0);
            padding: 15px 35px 15px 35px;
        }

        .elementor-23310 .elementor-element.elementor-element-e7268fe .elementor-button:hover,
        .elementor-23310 .elementor-element.elementor-element-e7268fe .elementor-button:focus {
            color: #A2A3A2;
            background-color: #1A1A1A;
            border-color: #1A1A1A;
        }

        .elementor-23310 .elementor-element.elementor-element-e7268fe .elementor-button:hover svg,
        .elementor-23310 .elementor-element.elementor-element-e7268fe .elementor-button:focus svg {
            fill: #A2A3A2;
        }

        .elementor-23310 .elementor-element.elementor-element-e7268fe>.elementor-widget-container {
            margin: 10px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-2822b86>.elementor-container {
            max-width: 1140px;
        }

        .elementor-23310 .elementor-element.elementor-element-2822b86 {
            padding: 100px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-23310 .elementor-element.elementor-element-a2a185f.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-a2a185f.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-a2a185f>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-509a20d {
            text-align: left;
            color: #BC35BC;
            font-family: "Inter", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: 1px;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-509a20d>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
            padding: 8px 15px 8px 15px;
            background-color: #BC35BC47;
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-23310 .elementor-element.elementor-element-98160a8 {
            text-align: left;
            color: #020710;
            font-family: "Inter", Sans-serif;
            font-size: 44px;
            font-weight: 600;
            line-height: 1.3em;
            letter-spacing: -0.8px;
        }

        .elementor-23310 .elementor-element.elementor-element-98160a8>.elementor-widget-container {
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-938b44e {
            color: #4F4F4F;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.9em;
        }

        .elementor-23310 .elementor-element.elementor-element-938b44e>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c22a729 .elementor-button .elementor-align-icon-right {
            margin-left: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c22a729 .elementor-button .elementor-align-icon-left {
            margin-right: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c22a729 .elementor-button {
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0px;
            fill: #FFFFFF;
            color: #FFFFFF;
            background-color: transparent;
            background-image: linear-gradient(90deg, #BC35BC 0%, #124EE8 100%);
            border-radius: 60px 60px 60px 60px;
            box-shadow: 0px 0px 0px 0px rgba(148, 214.6569293478261, 255, 0.26);
            padding: 15px 35px 15px 35px;
        }

        .elementor-23310 .elementor-element.elementor-element-c22a729>.elementor-widget-container {
            margin: 10px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-23310 .elementor-element.elementor-element-6471cde.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-6471cde.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-6471cde.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-23310 .elementor-element.elementor-element-6471cde>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 10px 10px 0px 10px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-6471cde>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-386ebce {
            text-align: center;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-386ebce img {
            width: 71%;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-386ebce>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-d8647f7>.elementor-container {
            max-width: 1140px;
        }

        .elementor-23310 .elementor-element.elementor-element-d8647f7 {
            overflow: hidden;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 120px 0px 120px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-d8647f7:not(.elementor-motion-effects-element-type-background),
        .elementor-23310 .elementor-element.elementor-element-d8647f7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #020710;
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
            background-position: 50% 40px;
            background-repeat: no-repeat;
            background-size: 1200px auto;
        }

        .elementor-23310 .elementor-element.elementor-element-d8647f7>.elementor-background-overlay {
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-84fb7ba>.elementor-element-populated,
        .elementor-23310 .elementor-element.elementor-element-84fb7ba>.elementor-element-populated>.elementor-background-overlay,
        .elementor-23310 .elementor-element.elementor-element-84fb7ba>.elementor-background-slideshow {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-84fb7ba>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-51fcf7f>.elementor-container {
            max-width: 560px;
        }

        .elementor-23310 .elementor-element.elementor-element-51fcf7f {
            padding: 0px 0px 40px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-ced4232.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-23310 .elementor-element.elementor-element-ced4232>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-965343f {
            text-align: left;
            color: #A2A3A2;
            font-family: "Inter", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: 1px;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-965343f>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
            padding: 8px 15px 8px 15px;
            background-color: #1A1A1A;
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-23310 .elementor-element.elementor-element-0c882c7 {
            text-align: center;
        }

        .elementor-23310 .elementor-element.elementor-element-0c882c7 .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 44px;
            font-weight: 600;
            line-height: 1.3em;
            letter-spacing: -0.8px;
        }

        .elementor-23310 .elementor-element.elementor-element-0c882c7>.elementor-widget-container {
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-270179f {
            text-align: center;
            color: #A2A3A2;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-1eb3ef6:not(.elementor-motion-effects-element-type-background),
        .elementor-23310 .elementor-element.elementor-element-1eb3ef6>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: radial-gradient(at top left, #1A1A1A85 0%, #1A1A1ACF 100%);
        }

        .elementor-23310 .elementor-element.elementor-element-1eb3ef6,
        .elementor-23310 .elementor-element.elementor-element-1eb3ef6>.elementor-background-overlay {
            border-radius: 20px 20px 20px 20px;
        }

        .elementor-23310 .elementor-element.elementor-element-1eb3ef6 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 60px 60px 60px 60px;
        }

        .elementor-23310 .elementor-element.elementor-element-1eb3ef6>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-c496e1d>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-e464b44 {
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-ef5e75a>.elementor-element-populated {
            padding: 20px 20px 20px 20px;
        }

        .elementor-23310 .elementor-element.elementor-element-dcb275e.elementor-position-right .elementor-image-box-img {
            margin-left: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-dcb275e.elementor-position-left .elementor-image-box-img {
            margin-right: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-dcb275e.elementor-position-top .elementor-image-box-img {
            margin-bottom: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-dcb275e .elementor-image-box-wrapper .elementor-image-box-img {
            width: 12%;
        }

        .elementor-23310 .elementor-element.elementor-element-dcb275e .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-dcb275e .elementor-image-box-title {
            margin-bottom: 0px;
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-dcb275e .elementor-image-box-description {
            color: #D3D3D4A1;
            font-family: "Inter", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-23310 .elementor-element.elementor-element-dcb275e>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c7b39fd>.elementor-element-populated {
            padding: 20px 20px 20px 20px;
        }

        .elementor-23310 .elementor-element.elementor-element-4289a80.elementor-position-right .elementor-image-box-img {
            margin-left: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-4289a80.elementor-position-left .elementor-image-box-img {
            margin-right: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-4289a80.elementor-position-top .elementor-image-box-img {
            margin-bottom: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-4289a80 .elementor-image-box-wrapper .elementor-image-box-img {
            width: 12%;
        }

        .elementor-23310 .elementor-element.elementor-element-4289a80 .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-4289a80 .elementor-image-box-title {
            margin-bottom: 0px;
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-4289a80 .elementor-image-box-description {
            color: #D3D3D4A1;
            font-family: "Inter", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-23310 .elementor-element.elementor-element-4289a80>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c806738>.elementor-element-populated {
            padding: 20px 20px 20px 20px;
        }

        .elementor-23310 .elementor-element.elementor-element-d1347bb.elementor-position-right .elementor-image-box-img {
            margin-left: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-d1347bb.elementor-position-left .elementor-image-box-img {
            margin-right: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-d1347bb.elementor-position-top .elementor-image-box-img {
            margin-bottom: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-d1347bb .elementor-image-box-wrapper .elementor-image-box-img {
            width: 12%;
        }

        .elementor-23310 .elementor-element.elementor-element-d1347bb .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-d1347bb .elementor-image-box-title {
            margin-bottom: 0px;
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-d1347bb .elementor-image-box-description {
            color: #D3D3D4A1;
            font-family: "Inter", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-23310 .elementor-element.elementor-element-d1347bb>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-1b5e8d8 {
            padding: 20px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c1a0b28>.elementor-element-populated {
            padding: 20px 20px 20px 20px;
        }

        .elementor-23310 .elementor-element.elementor-element-1d9315d.elementor-position-right .elementor-image-box-img {
            margin-left: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-1d9315d.elementor-position-left .elementor-image-box-img {
            margin-right: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-1d9315d.elementor-position-top .elementor-image-box-img {
            margin-bottom: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-1d9315d .elementor-image-box-wrapper .elementor-image-box-img {
            width: 12%;
        }

        .elementor-23310 .elementor-element.elementor-element-1d9315d .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-1d9315d .elementor-image-box-title {
            margin-bottom: 0px;
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-1d9315d .elementor-image-box-description {
            color: #D3D3D4A1;
            font-family: "Inter", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-23310 .elementor-element.elementor-element-1d9315d>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-d0a9de6>.elementor-element-populated {
            padding: 20px 20px 20px 20px;
        }

        .elementor-23310 .elementor-element.elementor-element-5e983ee.elementor-position-right .elementor-image-box-img {
            margin-left: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-5e983ee.elementor-position-left .elementor-image-box-img {
            margin-right: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-5e983ee.elementor-position-top .elementor-image-box-img {
            margin-bottom: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-5e983ee .elementor-image-box-wrapper .elementor-image-box-img {
            width: 12%;
        }

        .elementor-23310 .elementor-element.elementor-element-5e983ee .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-5e983ee .elementor-image-box-title {
            margin-bottom: 0px;
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-5e983ee .elementor-image-box-description {
            color: #D3D3D4A1;
            font-family: "Inter", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-23310 .elementor-element.elementor-element-5e983ee>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-e47aa9c>.elementor-element-populated {
            padding: 20px 20px 20px 20px;
        }

        .elementor-23310 .elementor-element.elementor-element-4c457de.elementor-position-right .elementor-image-box-img {
            margin-left: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-4c457de.elementor-position-left .elementor-image-box-img {
            margin-right: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-4c457de.elementor-position-top .elementor-image-box-img {
            margin-bottom: 30px;
        }

        .elementor-23310 .elementor-element.elementor-element-4c457de .elementor-image-box-wrapper .elementor-image-box-img {
            width: 12%;
        }

        .elementor-23310 .elementor-element.elementor-element-4c457de .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-4c457de .elementor-image-box-title {
            margin-bottom: 0px;
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-4c457de .elementor-image-box-description {
            color: #D3D3D4A1;
            font-family: "Inter", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-23310 .elementor-element.elementor-element-4c457de>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-01dd347:not(.elementor-motion-effects-element-type-background),
        .elementor-23310 .elementor-element.elementor-element-01dd347>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
            background-position: 0% 0%;
            background-repeat: no-repeat;
            background-size: 48% auto;
        }

        .elementor-23310 .elementor-element.elementor-element-01dd347>.elementor-background-overlay {
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
            background-position: 95% 130%;
            background-repeat: no-repeat;
            background-size: 55% auto;
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-01dd347 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 100px 0px 100px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-d3dea06>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-d862441>.elementor-container {
            max-width: 1140px;
        }

        .elementor-23310 .elementor-element.elementor-element-4bde5b0 img {
            width: 70%;
        }

        .elementor-bc-flex-widget .elementor-23310 .elementor-element.elementor-element-d32966a.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-d32966a.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-d32966a>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-d32966a>.elementor-element-populated {
            margin: 0px 0px 0px 60px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 60px;
        }

        .elementor-23310 .elementor-element.elementor-element-fad5859 {
            text-align: left;
            color: #124EE8;
            font-family: "Inter", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: 1px;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-fad5859>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
            padding: 8px 15px 8px 15px;
            background-color: #124EE852;
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-23310 .elementor-element.elementor-element-49f092c {
            text-align: left;
            color: #020710;
            font-family: "Inter", Sans-serif;
            font-size: 44px;
            font-weight: 600;
            line-height: 1.3em;
            letter-spacing: -0.8px;
        }

        .elementor-23310 .elementor-element.elementor-element-49f092c>.elementor-widget-container {
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-1e475b5 {
            color: #4F4F4F;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.9em;
        }

        .elementor-23310 .elementor-element.elementor-element-1e475b5>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-0b44de9 .elementor-button .elementor-align-icon-right {
            margin-left: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-0b44de9 .elementor-button .elementor-align-icon-left {
            margin-right: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-0b44de9 .elementor-button {
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0px;
            fill: #FFFFFF;
            color: #FFFFFF;
            background-color: transparent;
            background-image: linear-gradient(90deg, #BC35BC 0%, #124EE8 100%);
            border-radius: 60px 60px 60px 60px;
            box-shadow: 0px 0px 0px 0px rgba(148, 214.6569293478261, 255, 0.26);
            padding: 15px 35px 15px 35px;
        }

        .elementor-23310 .elementor-element.elementor-element-0b44de9>.elementor-widget-container {
            margin: 10px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-78582c5>.elementor-container {
            max-width: 1140px;
        }

        .elementor-23310 .elementor-element.elementor-element-78582c5 {
            padding: 100px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-23310 .elementor-element.elementor-element-6a64521.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-6a64521.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-6a64521>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-6a64521>.elementor-element-populated {
            margin: 0px 40px 0px 0px;
            --e-column-margin-right: 40px;
            --e-column-margin-left: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-5d8c7ca {
            text-align: left;
            color: #BC35BC;
            font-family: "Inter", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: 1px;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-5d8c7ca>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
            padding: 8px 15px 8px 15px;
            background-color: #BC35BC47;
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-23310 .elementor-element.elementor-element-b44c8e9 {
            text-align: left;
            color: #020710;
            font-family: "Inter", Sans-serif;
            font-size: 44px;
            font-weight: 600;
            line-height: 1.3em;
            letter-spacing: -0.8px;
        }

        .elementor-23310 .elementor-element.elementor-element-b44c8e9>.elementor-widget-container {
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-1130466 {
            color: #4F4F4F;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.9em;
        }

        .elementor-23310 .elementor-element.elementor-element-1130466>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c50aa89 .elementor-button .elementor-align-icon-right {
            margin-left: 8px;
        }

        .elementor-23310 .elementor-element.elementor-element-c50aa89 .elementor-button .elementor-align-icon-left {
            margin-right: 8px;
        }

        .elementor-23310 .elementor-element.elementor-element-c50aa89 .elementor-button {
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0px;
            fill: #020710;
            color: #020710;
            background-color: #FA4F0900;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
            border-color: #999FB7;
            border-radius: 30px 30px 30px 30px;
            box-shadow: 0px 10px 20px 0px rgba(255, 255, 255, 0);
            padding: 15px 35px 15px 35px;
        }

        .elementor-23310 .elementor-element.elementor-element-c50aa89 .elementor-button:hover,
        .elementor-23310 .elementor-element.elementor-element-c50aa89 .elementor-button:focus {
            color: #A2A3A2;
            background-color: #1A1A1A;
            border-color: #1A1A1A;
        }

        .elementor-23310 .elementor-element.elementor-element-c50aa89 .elementor-button:hover svg,
        .elementor-23310 .elementor-element.elementor-element-c50aa89 .elementor-button:focus svg {
            fill: #A2A3A2;
        }

        .elementor-23310 .elementor-element.elementor-element-c50aa89>.elementor-widget-container {
            margin: 10px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-23310 .elementor-element.elementor-element-191c4f9.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-191c4f9.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-23310 .elementor-element.elementor-element-191c4f9.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-23310 .elementor-element.elementor-element-191c4f9>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 10px 10px 0px 10px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-191c4f9>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-9ed58fe>.elementor-container {
            max-width: 1040px;
        }

        .elementor-23310 .elementor-element.elementor-element-9ed58fe {
            overflow: hidden;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 120px 0px 120px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-9ed58fe:not(.elementor-motion-effects-element-type-background),
        .elementor-23310 .elementor-element.elementor-element-9ed58fe>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #020710;
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
            background-position: 50% 40px;
            background-repeat: no-repeat;
            background-size: 1200px auto;
        }

        .elementor-23310 .elementor-element.elementor-element-9ed58fe>.elementor-background-overlay {
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-2530493>.elementor-element-populated,
        .elementor-23310 .elementor-element.elementor-element-2530493>.elementor-element-populated>.elementor-background-overlay,
        .elementor-23310 .elementor-element.elementor-element-2530493>.elementor-background-slideshow {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-2530493>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-cfbacae>.elementor-container {
            max-width: 589px;
        }

        .elementor-23310 .elementor-element.elementor-element-cfbacae {
            padding: 0px 0px 40px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-972db4f.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-23310 .elementor-element.elementor-element-972db4f>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-57d7e81 {
            text-align: left;
            color: #A2A3A2;
            font-family: "Inter", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 1.3em;
            letter-spacing: 1px;
            width: auto;
            max-width: auto;
        }

        .elementor-23310 .elementor-element.elementor-element-57d7e81>.elementor-widget-container {
            margin: 0px 0px 15px 0px;
            padding: 8px 15px 8px 15px;
            background-color: #1A1A1A;
            border-radius: 100px 100px 100px 100px;
        }

        .elementor-23310 .elementor-element.elementor-element-bac89af {
            text-align: center;
        }

        .elementor-23310 .elementor-element.elementor-element-bac89af .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 44px;
            font-weight: 600;
            line-height: 1.3em;
            letter-spacing: -0.8px;
        }

        .elementor-23310 .elementor-element.elementor-element-bac89af>.elementor-widget-container {
            padding: 0px 0px 20px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-101d19f {
            text-align: center;
            color: #A2A3A2;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-2c660bf>.elementor-container {
            max-width: 860px;
        }

        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-tab-content {
            border-bottom-color: #ABABB51C;
            color: #B8BBBFB3;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            padding: 0px 0px 30px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-tab-title {
            border-color: #ABABB51C;
            padding: 0px 0px 15px 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-toggle-item:not(:last-child) {
            margin-bottom: 25px;
        }

        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-toggle-title,
        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-toggle-icon {
            color: #FFFFFF;
        }

        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-toggle-icon svg {
            fill: #FFFFFF;
        }

        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-tab-title.elementor-active a,
        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-tab-title.elementor-active .elementor-toggle-icon {
            color: #824DFF;
        }

        .elementor-23310 .elementor-element.elementor-element-615039f .elementor-toggle-title {
            font-family: "Inter", Sans-serif;
            font-size: 20px;
            font-weight: 600;
            line-height: 1.5em;
        }

        .elementor-23310 .elementor-element.elementor-element-f0db96b>.elementor-container {
            max-width: 657px;
        }

        .elementor-23310 .elementor-element.elementor-element-f0db96b:not(.elementor-motion-effects-element-type-background),
        .elementor-23310 .elementor-element.elementor-element-f0db96b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: radial-gradient(at top left, #1A1A1A85 0%, #1A1A1ACF 100%);
        }

        .elementor-23310 .elementor-element.elementor-element-f0db96b>.elementor-background-overlay {
            background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: 100% auto;
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-23310 .elementor-element.elementor-element-f0db96b,
        .elementor-23310 .elementor-element.elementor-element-f0db96b>.elementor-background-overlay {
            border-radius: 20px 20px 20px 20px;
        }

        .elementor-23310 .elementor-element.elementor-element-f0db96b {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 100px;
            margin-bottom: 0px;
            padding: 60px 60px 60px 60px;
        }

        .elementor-23310 .elementor-element.elementor-element-774b677 {
            text-align: center;
            color: #FFFFFF;
            font-family: "Inter", Sans-serif;
            font-size: 56px;
            font-weight: 600;
            line-height: 1.2em;
            letter-spacing: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-9db2b7c {
            text-align: center;
            color: #A2A3A2;
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.7em;
        }

        .elementor-23310 .elementor-element.elementor-element-c92040a .elementor-button .elementor-align-icon-right {
            margin-left: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c92040a .elementor-button .elementor-align-icon-left {
            margin-right: 0px;
        }

        .elementor-23310 .elementor-element.elementor-element-c92040a .elementor-button {
            font-family: "Inter", Sans-serif;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0px;
            fill: #020710;
            color: #020710;
            background-color: transparent;
            background-image: linear-gradient(90deg, #BC35BC 0%, #124EE8 100%);
            border-radius: 60px 60px 60px 60px;
            box-shadow: 0px 0px 0px 0px rgba(148, 214.6569293478261, 255, 0.26);
            padding: 15px 35px 15px 35px;
        }

        .elementor-23310 .elementor-element.elementor-element-c92040a>.elementor-widget-container {
            margin: 10px 0px 0px 0px;
        }

        @media(max-width:1024px) {
            .elementor-23310 .elementor-element.elementor-element-aa23c9b>.elementor-container {
                max-width: 562px;
            }

            .elementor-23310 .elementor-element.elementor-element-aa23c9b:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-aa23c9b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: 0% -85px;
                background-repeat: no-repeat;
                background-size: contain;
            }

            .elementor-23310 .elementor-element.elementor-element-aa23c9b {
                margin-top: -75px;
                margin-bottom: 0px;
                padding: 115px 20px 0px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-7cfe8d4.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-23310 .elementor-element.elementor-element-7cfe8d4>.elementor-element-populated {
                margin: 40px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-e8c8ece {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-b53c240 {
                text-align: center;
                font-size: 52px;
            }

            .elementor-23310 .elementor-element.elementor-element-bcb0398 {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-e26ef82.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-23310 .elementor-element.elementor-element-bbcb8ee>.elementor-widget-container {
                margin: 0px 30px 0px 30px;
            }

            .elementor-23310 .elementor-element.elementor-element-9cf69f8>.elementor-widget-container {
                margin: 0px 30px 0px 30px;
            }

            .elementor-23310 .elementor-element.elementor-element-1f98f87.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-23310 .elementor-element.elementor-element-1f98f87>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-5301810 img {
                width: 33%;
            }

            body:not(.rtl) .elementor-23310 .elementor-element.elementor-element-8e3fa3e {
                left: 21%;
            }

            body.rtl .elementor-23310 .elementor-element.elementor-element-8e3fa3e {
                right: 21%;
            }

            .elementor-23310 .elementor-element.elementor-element-8e3fa3e {
                top: 0%;
            }

            .elementor-23310 .elementor-element.elementor-element-a558b12>.elementor-container {
                max-width: 562px;
            }

            .elementor-23310 .elementor-element.elementor-element-a558b12:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-a558b12>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: 0px -166px;
                background-size: 100% auto;
            }

            .elementor-23310 .elementor-element.elementor-element-a558b12>.elementor-background-overlay {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: 50% 72%;
                background-size: 100% auto;
            }

            .elementor-23310 .elementor-element.elementor-element-a558b12 {
                padding: 80px 0px 100px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-7bae0be img {
                max-width: 320px;
            }

            .elementor-23310 .elementor-element.elementor-element-7bae0be>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-8b50d79.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-23310 .elementor-element.elementor-element-8b50d79>.elementor-element-populated {
                margin: 40px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-eeeaa9b {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-cbf5029 {
                text-align: center;
                font-size: 40px;
            }

            .elementor-23310 .elementor-element.elementor-element-2304308 {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-2822b86>.elementor-container {
                max-width: 562px;
            }

            .elementor-23310 .elementor-element.elementor-element-2822b86 {
                padding: 100px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-a2a185f.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-23310 .elementor-element.elementor-element-a2a185f>.elementor-element-populated {
                padding: 40px 20px 20px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-509a20d {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-98160a8 {
                text-align: center;
                font-size: 40px;
            }

            .elementor-23310 .elementor-element.elementor-element-938b44e {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-6471cde>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-386ebce img {
                max-width: 320px;
            }

            .elementor-23310 .elementor-element.elementor-element-386ebce>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-d8647f7>.elementor-container {
                max-width: 562px;
            }

            .elementor-23310 .elementor-element.elementor-element-d8647f7:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-d8647f7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: center center;
                background-size: cover;
            }

            .elementor-23310 .elementor-element.elementor-element-d8647f7 {
                padding: 80px 0px 80px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-51fcf7f {
                padding: 20px 0px 40px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-965343f {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-0c882c7 {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-0c882c7 .elementor-heading-title {
                font-size: 40px;
            }

            .elementor-23310 .elementor-element.elementor-element-270179f {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-1eb3ef6 {
                padding: 40px 40px 40px 40px;
            }

            .elementor-23310 .elementor-element.elementor-element-c496e1d>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-e464b44 {
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-1b5e8d8 {
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-01dd347>.elementor-container {
                max-width: 562px;
            }

            .elementor-23310 .elementor-element.elementor-element-01dd347:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-01dd347>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-position: 50% 20px;
                background-size: 350px auto;
            }

            .elementor-23310 .elementor-element.elementor-element-01dd347>.elementor-background-overlay {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: 40% 70%;
                background-size: 100% auto;
            }

            .elementor-23310 .elementor-element.elementor-element-01dd347 {
                padding: 100px 0px 100px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-4bde5b0 img {
                width: 60%;
            }

            .elementor-23310 .elementor-element.elementor-element-d32966a.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-23310 .elementor-element.elementor-element-d32966a>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-fad5859 {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-49f092c {
                text-align: center;
                font-size: 40px;
            }

            .elementor-23310 .elementor-element.elementor-element-1e475b5 {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-78582c5>.elementor-container {
                max-width: 562px;
            }

            .elementor-23310 .elementor-element.elementor-element-6a64521.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-23310 .elementor-element.elementor-element-6a64521>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 40px 20px 20px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-5d8c7ca {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-b44c8e9 {
                text-align: center;
                font-size: 40px;
            }

            .elementor-23310 .elementor-element.elementor-element-1130466 {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-191c4f9>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-9ed58fe>.elementor-container {
                max-width: 562px;
            }

            .elementor-23310 .elementor-element.elementor-element-9ed58fe:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-9ed58fe>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-position: top center;
                background-size: contain;
            }

            .elementor-23310 .elementor-element.elementor-element-9ed58fe {
                padding: 80px 0px 80px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-cfbacae {
                padding: 20px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-57d7e81 {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-bac89af {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-bac89af .elementor-heading-title {
                font-size: 40px;
            }

            .elementor-23310 .elementor-element.elementor-element-101d19f {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-2c660bf {
                padding: 40px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-f0db96b>.elementor-background-overlay {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: 0px -263px;
                background-size: cover;
            }

            .elementor-23310 .elementor-element.elementor-element-f0db96b {
                padding: 40px 40px 40px 40px;
            }

            .elementor-23310 .elementor-element.elementor-element-774b677 {
                text-align: center;
                font-size: 46px;
            }

            .elementor-23310 .elementor-element.elementor-element-9db2b7c {
                text-align: center;
            }
        }

        @media(max-width:767px) {
            .elementor-23310 .elementor-element.elementor-element-aa23c9b .elementor-column-gap-custom .elementor-column>.elementor-element-populated {
                padding: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-aa23c9b:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-aa23c9b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: top center;
                background-size: contain;
            }

            .elementor-23310 .elementor-element.elementor-element-aa23c9b {
                margin-top: -54px;
                margin-bottom: 0px;
                padding: 94px 20px 60px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-7cfe8d4>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-7cfe8d4>.elementor-element-populated {
                margin: 40px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-e8c8ece {
                font-size: 14px;
                letter-spacing: 1px;
            }

            .elementor-23310 .elementor-element.elementor-element-b53c240 {
                font-size: 40px;
                line-height: 1.2em;
            }

            .elementor-23310 .elementor-element.elementor-element-b53c240>.elementor-widget-container {
                padding: 0px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-bcb0398 {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-bcb0398>.elementor-widget-container {
                padding: 0px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-2944cb3 {
                margin-top: 60px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-bbcb8ee img {
                width: 100px;
            }

            .elementor-23310 .elementor-element.elementor-element-bbcb8ee>.elementor-widget-container {
                margin: 0px 20px 0px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-9cf69f8 img {
                width: 100px;
            }

            .elementor-23310 .elementor-element.elementor-element-9cf69f8>.elementor-widget-container {
                margin: 0px 20px 0px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-5301810 img {
                width: 40%;
            }

            .elementor-23310 .elementor-element.elementor-element-8e3fa3e {
                --width: 60px;
            }

            .elementor-23310 .elementor-element.elementor-element-8e3fa3e>.elementor-widget-container {
                background-size: 18px auto;
            }

            .elementor-23310 .elementor-element.elementor-element-a558b12:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-a558b12>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: top center;
                background-size: contain;
            }

            .elementor-23310 .elementor-element.elementor-element-a558b12>.elementor-background-overlay {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: 0% 65%;
                background-size: contain;
            }

            .elementor-23310 .elementor-element.elementor-element-a558b12 {
                padding: 0px 10px 80px 10px;
            }

            .elementor-23310 .elementor-element.elementor-element-40b2f2a {
                padding: 80px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-7bae0be {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-7bae0be img {
                width: 65%;
            }

            .elementor-23310 .elementor-element.elementor-element-7bae0be>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-8b50d79>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-eeeaa9b {
                font-size: 14px;
                letter-spacing: 1px;
            }

            .elementor-23310 .elementor-element.elementor-element-cbf5029 {
                text-align: center;
                font-size: 32px;
                line-height: 1.2em;
                letter-spacing: 0px;
                width: 100%;
                max-width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-cbf5029>.elementor-widget-container {
                padding: 0px 0px 15px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-2304308 {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-2304308>.elementor-widget-container {
                padding: 0px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-e7268fe>.elementor-widget-container {
                margin: 10px 0px 10px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-2822b86 {
                padding: 80px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-a2a185f>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 10px 0px 10px;
            }

            .elementor-23310 .elementor-element.elementor-element-509a20d {
                font-size: 14px;
                letter-spacing: 1px;
            }

            .elementor-23310 .elementor-element.elementor-element-98160a8 {
                text-align: center;
                font-size: 32px;
                line-height: 1.2em;
                letter-spacing: 0px;
                width: 100%;
                max-width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-98160a8>.elementor-widget-container {
                padding: 0px 0px 15px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-938b44e {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-6471cde>.elementor-element-populated {
                margin: 10px 10px 10px 10px;
                --e-column-margin-right: 10px;
                --e-column-margin-left: 10px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-386ebce {
                text-align: center;
            }

            .elementor-23310 .elementor-element.elementor-element-386ebce img {
                width: 65%;
            }

            .elementor-23310 .elementor-element.elementor-element-386ebce>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-d8647f7:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-d8647f7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: bottom center;
                background-size: cover;
            }

            .elementor-23310 .elementor-element.elementor-element-d8647f7 {
                padding: 60px 20px 60px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-84fb7ba>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-51fcf7f {
                padding: 0px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-ced4232>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-965343f {
                font-size: 14px;
                letter-spacing: 1px;
            }

            .elementor-23310 .elementor-element.elementor-element-0c882c7 {
                text-align: center;
                width: 100%;
                max-width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-0c882c7 .elementor-heading-title {
                font-size: 32px;
                line-height: 1.2em;
                letter-spacing: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-0c882c7>.elementor-widget-container {
                padding: 0px 0px 15px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-270179f {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-270179f>.elementor-widget-container {
                padding: 0px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-1eb3ef6 {
                padding: 40px 20px 40px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-dcb275e .elementor-image-box-img {
                margin-bottom: 30px;
            }

            .elementor-23310 .elementor-element.elementor-element-dcb275e .elementor-image-box-wrapper .elementor-image-box-img {
                width: 16%;
            }

            .elementor-23310 .elementor-element.elementor-element-dcb275e .elementor-image-box-title {
                margin-bottom: 0px;
                line-height: 2em;
            }

            .elementor-23310 .elementor-element.elementor-element-4289a80 .elementor-image-box-img {
                margin-bottom: 30px;
            }

            .elementor-23310 .elementor-element.elementor-element-4289a80 .elementor-image-box-wrapper .elementor-image-box-img {
                width: 16%;
            }

            .elementor-23310 .elementor-element.elementor-element-4289a80 .elementor-image-box-title {
                margin-bottom: 0px;
                line-height: 2em;
            }

            .elementor-23310 .elementor-element.elementor-element-d1347bb .elementor-image-box-img {
                margin-bottom: 30px;
            }

            .elementor-23310 .elementor-element.elementor-element-d1347bb .elementor-image-box-wrapper .elementor-image-box-img {
                width: 16%;
            }

            .elementor-23310 .elementor-element.elementor-element-d1347bb .elementor-image-box-title {
                margin-bottom: 0px;
                line-height: 2em;
            }

            .elementor-23310 .elementor-element.elementor-element-1d9315d .elementor-image-box-img {
                margin-bottom: 30px;
            }

            .elementor-23310 .elementor-element.elementor-element-1d9315d .elementor-image-box-wrapper .elementor-image-box-img {
                width: 16%;
            }

            .elementor-23310 .elementor-element.elementor-element-1d9315d .elementor-image-box-title {
                margin-bottom: 0px;
                line-height: 2em;
            }

            .elementor-23310 .elementor-element.elementor-element-5e983ee .elementor-image-box-img {
                margin-bottom: 30px;
            }

            .elementor-23310 .elementor-element.elementor-element-5e983ee .elementor-image-box-wrapper .elementor-image-box-img {
                width: 16%;
            }

            .elementor-23310 .elementor-element.elementor-element-5e983ee .elementor-image-box-title {
                margin-bottom: 0px;
                line-height: 2em;
            }

            .elementor-23310 .elementor-element.elementor-element-4c457de .elementor-image-box-img {
                margin-bottom: 30px;
            }

            .elementor-23310 .elementor-element.elementor-element-4c457de .elementor-image-box-wrapper .elementor-image-box-img {
                width: 16%;
            }

            .elementor-23310 .elementor-element.elementor-element-4c457de .elementor-image-box-title {
                margin-bottom: 0px;
                line-height: 2em;
            }

            .elementor-23310 .elementor-element.elementor-element-01dd347:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-01dd347>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: 0% -50px;
                background-size: contain;
            }

            .elementor-23310 .elementor-element.elementor-element-01dd347>.elementor-background-overlay {
                background-position: 0% 60%;
                background-size: contain;
            }

            .elementor-23310 .elementor-element.elementor-element-01dd347 {
                padding: 60px 10px 50px 10px;
            }

            .elementor-23310 .elementor-element.elementor-element-fad5859 {
                font-size: 14px;
                letter-spacing: 1px;
            }

            .elementor-23310 .elementor-element.elementor-element-49f092c {
                text-align: center;
                font-size: 32px;
                line-height: 1.2em;
                letter-spacing: 0px;
                width: 100%;
                max-width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-49f092c>.elementor-widget-container {
                padding: 0px 0px 15px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-1e475b5 {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-78582c5 {
                padding: 60px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-6a64521>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 10px 0px 10px;
            }

            .elementor-23310 .elementor-element.elementor-element-5d8c7ca {
                font-size: 14px;
                letter-spacing: 1px;
            }

            .elementor-23310 .elementor-element.elementor-element-b44c8e9 {
                text-align: center;
                font-size: 32px;
                line-height: 1.2em;
                letter-spacing: 0px;
                width: 100%;
                max-width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-b44c8e9>.elementor-widget-container {
                padding: 0px 0px 15px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-1130466 {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-c50aa89>.elementor-widget-container {
                margin: 10px 0px 10px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-191c4f9>.elementor-element-populated {
                margin: 10px 10px 10px 10px;
                --e-column-margin-right: 10px;
                --e-column-margin-left: 10px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-9ed58fe:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-9ed58fe>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: center center;
                background-size: cover;
            }

            .elementor-23310 .elementor-element.elementor-element-9ed58fe {
                padding: 60px 20px 20px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-2530493>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-cfbacae {
                padding: 0px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-972db4f>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-57d7e81 {
                font-size: 14px;
                letter-spacing: 1px;
            }

            .elementor-23310 .elementor-element.elementor-element-bac89af {
                text-align: center;
                width: 100%;
                max-width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-bac89af .elementor-heading-title {
                font-size: 32px;
                line-height: 1.2em;
                letter-spacing: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-bac89af>.elementor-widget-container {
                padding: 0px 0px 15px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-101d19f {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-101d19f>.elementor-widget-container {
                padding: 0px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-2c660bf {
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-615039f .elementor-toggle-title {
                font-size: 18px;
            }

            .elementor-23310 .elementor-element.elementor-element-615039f .elementor-tab-content {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-f0db96b>.elementor-background-overlay {
                background-image: url("https://toka.peerduck.com/wp-content/uploads/2022/11/rfvrfv.png");
                background-position: 50% -165px;
                background-size: cover;
            }

            .elementor-23310 .elementor-element.elementor-element-f0db96b {
                margin-top: 60px;
                margin-bottom: 0px;
                padding: 40px 20px 40px 20px;
            }

            .elementor-23310 .elementor-element.elementor-element-9bb5d4f>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-9bb5d4f>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-774b677 {
                font-size: 38px;
                line-height: 1.2em;
            }

            .elementor-23310 .elementor-element.elementor-element-774b677>.elementor-widget-container {
                padding: 0px 0px 20px 0px;
            }

            .elementor-23310 .elementor-element.elementor-element-9db2b7c {
                font-size: 16px;
            }

            .elementor-23310 .elementor-element.elementor-element-9db2b7c>.elementor-widget-container {
                padding: 0px 0px 20px 0px;
            }
        }

        @media(min-width:768px) {
            .elementor-23310 .elementor-element.elementor-element-7cfe8d4 {
                width: 48.508%;
            }

            .elementor-23310 .elementor-element.elementor-element-1f98f87 {
                width: 51.492%;
            }

            .elementor-23310 .elementor-element.elementor-element-a2a185f {
                width: 42.719%;
            }

            .elementor-23310 .elementor-element.elementor-element-6471cde {
                width: 57.281%;
            }

            .elementor-23310 .elementor-element.elementor-element-678334d {
                width: 54.912%;
            }

            .elementor-23310 .elementor-element.elementor-element-d32966a {
                width: 44.957%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-23310 .elementor-element.elementor-element-7cfe8d4 {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-1f98f87 {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-a6aec6c {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-8b50d79 {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-a2a185f {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-6471cde {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-ef5e75a {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-c7b39fd {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-c806738 {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-c1a0b28 {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-d0a9de6 {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-e47aa9c {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-678334d {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-d32966a {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-6a64521 {
                width: 100%;
            }

            .elementor-23310 .elementor-element.elementor-element-191c4f9 {
                width: 100%;
            }
        }

        @media (max-width: 767px) {
            .elementor-23310 .elementor-element.elementor-element-aa23c9b {

                padding: 94px 0 60px 0;
            }
        }

        .elementor-23310 .elementor-element.elementor-element-aa23c9b {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 100px 0px 0px 0px !important;
        }

        @media (max-width: 767px) {

            .elementor-23310 .elementor-element.elementor-element-aa23c9b:not(.elementor-motion-effects-element-type-background),
            .elementor-23310 .elementor-element.elementor-element-aa23c9b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
               
                padding-top: 40px !important;
            }
    </style>
    <link rel='stylesheet' id='swiper-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='eael-general-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='<?= $url ?>theme_home/asset/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type='text/javascript' src='<?= $url ?>theme_home/asset/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' src='<?= $url ?>theme_home/asset/wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='<?= $url ?>theme_home/asset/wp-content/plugins/unlimited-elementor-inner-sections-by-taspristudio/public/js/euis-public.js' id='euis-js'></script>
    <script type='text/javascript' src='<?= $url ?>theme_home/asset/wp-content/themes/toka/assets/js/bootstrap.bundle.min.js' id='bootstrap-js'></script>
    <script id="toka-js-before" type="text/javascript">
        if (screen.width >= 1535 && screen.width < 2561) {
            let mvp = document.getElementById('siteViewport');
            mvp.setAttribute('content', 'width=1920');
        }
        if (screen.width > 767 && screen.width < 1535) {
            let mvp = document.getElementById('siteViewport');
            mvp.setAttribute('content', 'width=1700');
        }
    </script>
    <script type='text/javascript' src='<?= $url ?>theme_home/asset/wp-content/themes/toka/assets/js/index.js' id='toka-js'></script>
    <script type='text/javascript' src='<?= $url ?>theme_home/asset/wp-content/themes/toka/assets/js/sticky-header.js' id='sticky-header-js'></script>
    <link rel="edituri" type="application/rsd+xml" title="RSD" href="https://toka.peerduck.com/xmlrpc.php?rsd" />
    <link rel="canonical" href="https://toka.peerduck.com/crypto-wallet-app/" />
    <link rel='shortlink' href='https://toka.peerduck.com/?p=23310' />
    <link rel="alternate" type="application/json+oembed" href="https://toka.peerduck.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftoka.peerduck.com%2Fcrypto-wallet-app%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://toka.peerduck.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftoka.peerduck.com%2Fcrypto-wallet-app%2F&#038;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>

</head>

<body class="page-template page-template-page-templates page-template-template-full-width-page-without-header-title-white page-template-page-templatestemplate-full-width-page-without-header-title-white-php page page-id-23310 theme-toka woocommerce-no-js elementor-default elementor-kit-11 elementor-page elementor-page-23310">
    <nav id="pr-nav" class="primary-menu navbar navbar-expand-lg navbar-dark nav-white-desktop">
        <div class="container-fluid primary-menu-inner px-0">
            <div class="top-wrap">
                <a class="custom-logo-link" href="<?= $url ?>">
                    <h5 class="m-0"><img style="width: 150px;" src="<?= $BNZ->site('logo') ?>"></h5>
                </a>

                <button id="mobile-toggle" class="navbar-toggler animate-button collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span id="m-tgl-icon" class="animated-icon1"><span></span><span></span></span>
                </button>
            </div>
            <style>
                @media (max-width: 1199px) {
                    ul#primary-menu {
                        padding-bottom: 100px !important;
                    }
                }
            </style>
            <div class="collapse navbar-collapse justify-content-end" id="navbarColor01">
                <ul id="primary-menu" class="navbar-nav pl-3" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                    <li id="menu-item-22540" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-22540 nav-item">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-22540"><span itemprop="name">Features</span></a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-22540">
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Zen Wallet Portfolio</span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Swaps</span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Buy Crypto</span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">EIP-1559</span></a>
                            </li>

                        </ul>
                    </li>

                    <li id="menu-item-22540" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-22540 nav-item">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-22540"><span itemprop="name">Build</span></a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-22540">


                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Build
                                        Developer Docs
                                    </span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Institutions</span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Snaps</span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Flask</span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">SDK</span></a>
                            </li>

                        </ul>
                    </li>

                    <li id="menu-item-22540" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-22540 nav-item">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-22540"><span itemprop="name">Resources</span></a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-22540">


                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Blog
                                    </span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Support</span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">FAQs</span></a>
                            </li>
                            <li id="menu-item-16387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16387 nav-item">
                                <a itemprop="url" href="<?= $url ?>Login" class="dropdown-item"><span itemprop="name">Community</span></a>
                            </li>

                        </ul>
                    </li>

                </ul>
                <div class="header-icons">
                    <div id="magic-search" class="magic-search">
                        <form role="search" method="get" class="search-form" action="https://toka.peerduck.com/">
                            <div class="inner-form">
                                <div class="row justify-content-end">
                                    <div class="input-field first justify-content-end" id="first">
                                        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="612.01px" height="612.01px" viewbox="0 0 612.01 612.01" xml:space="preserve">
                                            <g>
                                                <path d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0				C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586				l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8				c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407				S377.82,467.8,257.493,467.8z">
                                                </path>
                                            </g>
                                        </svg>
                                        <input autocomplete="off" type="search" class="input" id="inputFocus" placeholder="Search" value="" name="s" required>
                                        <input type="submit" value="Search" class="search-submit" />
                                        <input type="hidden" name="post_type" value="product">
                                        <div class="clear" id="clear">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="#6e6e73" width="24" height="24" viewbox="0 0 24 24">
                                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="header-cart-icon">
                        <a class="menu-item cart-contents" href="https://toka.peerduck.com/cart/" title="My Basket">
                            <svg viewbox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.79942 11.6369H5.80024C5.80093 11.6369 5.80161 11.6367 5.8023 11.6367H15.3633C15.5987 11.6367 15.8056 11.4806 15.8703 11.2543L17.9797 3.87144C18.0251 3.71228 17.9933 3.54117 17.8937 3.40906C17.794 3.27695 17.6381 3.19922 17.4727 3.19922H4.58323L4.20626 1.50279C4.15257 1.26151 3.93861 1.08984 3.69141 1.08984H0.527351C0.236076 1.08984 7.62939e-06 1.32591 7.62939e-06 1.61719C7.62939e-06 1.90846 0.236076 2.14453 0.527351 2.14453H3.26844C3.33518 2.44514 5.0724 10.2627 5.17237 10.7125C4.61193 10.9561 4.21876 11.5149 4.21876 12.1641C4.21876 13.0364 4.92847 13.7461 5.80079 13.7461H15.3633C15.6546 13.7461 15.8906 13.51 15.8906 13.2188C15.8906 12.9275 15.6546 12.6914 15.3633 12.6914H5.80079C5.51006 12.6914 5.27345 12.4548 5.27345 12.1641C5.27345 11.8737 5.50924 11.6375 5.79942 11.6369ZM16.7735 4.25391L14.9654 10.582H6.22376L4.81751 4.25391H16.7735Z">
                                </path>
                                <path d="M5.27342 15.3281C5.27342 16.2004 5.98314 16.9102 6.85545 16.9102C7.72777 16.9102 8.43749 16.2004 8.43749 15.3281C8.43749 14.4558 7.72777 13.7461 6.85545 13.7461C5.98314 13.7461 5.27342 14.4558 5.27342 15.3281ZM6.85545 14.8008C7.14618 14.8008 7.3828 15.0374 7.3828 15.3281C7.3828 15.6189 7.14618 15.8555 6.85545 15.8555C6.56473 15.8555 6.32811 15.6189 6.32811 15.3281C6.32811 15.0374 6.56473 14.8008 6.85545 14.8008Z">
                                </path>
                                <path d="M12.7266 15.3281C12.7266 16.2004 13.4363 16.9102 14.3086 16.9102C15.1809 16.9102 15.8906 16.2004 15.8906 15.3281C15.8906 14.4558 15.1809 13.7461 14.3086 13.7461C13.4363 13.7461 12.7266 14.4558 12.7266 15.3281ZM14.3086 14.8008C14.5993 14.8008 14.8359 15.0374 14.8359 15.3281C14.8359 15.6189 14.5993 15.8555 14.3086 15.8555C14.0179 15.8555 13.7812 15.6189 13.7812 15.3281C13.7812 15.0374 14.0179 14.8008 14.3086 14.8008Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="header-cta">
                    <a href="<?= $url ?>Login">
                        <div class="d-inline-block elementor-button-link elementor-button elementor-size-md">LOGIN
                        </div>
                    </a>
                </div>
                <div class="header-cta">
                    <a href="<?= $url ?>Register">
                        <div class="d-inline-block elementor-button-link elementor-button elementor-size-md">REGISTER
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <main id="site-content" class="flex-grow-1 nav-white-desktop" role="main">

        <article class="post-23310 page type-page status-publish hentry" id="post-23310">

            <div class="post-inner">

                <header class="entry-header header-group">

                    <div class="entry-header-inner">


                    </div>
                    <!-- .entry-header-inner -->
                </header>
                <!-- .entry-header -->

                <div class="entry-content clearfix">
                    <div data-elementor-type="wp-page" data-elementor-id="23310" class="elementor elementor-23310">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-aa23c9b elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="aa23c9b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="container">