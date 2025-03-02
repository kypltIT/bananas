@extends('layouts.app')

@section('title', 'Sale Off')

@section('content')
        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">Sale Off</div>
                        <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->
        <section class="flat-spacing-1">
            <div class="container">
                <div class="tf-shop-control grid-3 align-items-center">
                    <div class="tf-control-filter">
                    </div>
                    <ul class="tf-control-layout d-flex justify-content-center">

                    </ul>
                    <div class="tf-control-sorting d-flex justify-content-end">
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Featured</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item active">
                                    <span class="text-value-item">Featured</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item" data-sort-value="a-z">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item" data-sort-value="z-a">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item" data-sort-value="price-low-high">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item" data-sort-value="price-high-low">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, old to new</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, new to old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
                    </div>

                    <div class="tf-grid-layout wrapper-shop tf-col-5" id="gridLayout">
                        <!-- card product 1 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Ribbed Tank Top</a>
                                <span class="price current-price">$16.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Orange</span>
                                        <span class="swatch-value bg_orange-3"></span>
                                        <img class="lazyload" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-1.jpg" src="images/products/black-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 2 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="countdown-box">
                                    <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                                </div>
                                <div class="on-sale-wrap text-end">
                                    <div class="on-sale-item">-33%</div>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Ribbed modal T-shirt</a>
                                <span class="price current-price">$18.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Purple</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="images/products/green.jpg" src="images/products/green.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 3 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/white-3.jpg" src="images/products/white-3.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/white-4.jpg" src="images/products/white-4.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="shop-infinite-scrolling.html#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Add to cart</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Oversized Printed T-shirt</a>
                                <span class="price current-price">$10.00</span>
                            </div>
                        </div>
                        <!-- card product 4 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title">Oversized Printed T-shirt</a>
                                <span class="price current-price">$16.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Pink</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-2.jpg" src="images/products/black-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 5 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/brown-3.jpg" src="images/products/brown-3.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">V-neck linen T-shirt</a>
                                <span class="price current-price">$114.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-5.jpg" src="images/products/white-5.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 6 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/light-green-2.jpg" src="images/products/light-green-2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Loose Fit Sweatshirt</a>
                                <span class="price current-price">$10.00</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-3.jpg" src="images/products/black-3.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="images/products/blue.jpg" src="images/products/blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="images/products/dark-blue.jpg" src="images/products/dark-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-6.jpg" src="images/products/white-6.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Grey</span>
                                        <span class="swatch-value bg_light-grey"></span>
                                        <img class="lazyload" data-src="images/products/light-grey.jpg" src="images/products/light-grey.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 7 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-5.jpg" src="images/products/black-5.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Regular Fit Oxford Shirt</a>
                                <span class="price current-price">$10.00</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="images/products/dark-blue-2.jpg" src="images/products/dark-blue-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Beige</span>
                                        <span class="swatch-value bg_beige"></span>
                                        <img class="lazyload" data-src="images/products/beige.jpg" src="images/products/beige.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Blue</span>
                                        <span class="swatch-value bg_light-blue"></span>
                                        <img class="lazyload" data-src="images/products/light-blue.jpg" src="images/products/light-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-7.jpg" src="images/products/white-7.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 8 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Loose Fit Hoodie</a>
                                <span class="price current-price">$9.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-7.jpg" src="images/products/black-7.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="images/products/blue-2.jpg" src="images/products/blue-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 9 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/brown-4.jpg" src="images/products/brown-4.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-8.jpg" src="images/products/black-8.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Patterned scarf</a>
                                <span class="price current-price">$14.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="images/products/brown-4.jpg" src="images/products/brown-4.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-8.jpg" src="images/products/black-8.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 10 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-10.jpg" src="images/products/black-10.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                <span class="price current-price">$18.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-9.jpg" src="images/products/white-9.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 11 -->
                        <div class="loadItem card-product grid" data-availability="Out of stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/grey-2.jpg" src="images/products/grey-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/grey.jpg" src="images/products/grey.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                <span class="price current-price">$18.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Grey</span>
                                        <span class="swatch-value bg_grey"></span>
                                        <img class="lazyload" data-src="images/products/grey-2.jpg" src="images/products/grey-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Pink</span>
                                        <span class="swatch-value bg_pink"></span>
                                        <img class="lazyload" data-src="images/products/pink-2.jpg" src="images/products/pink-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Pink</span>
                                        <span class="swatch-value bg_light-pink"></span>
                                        <img class="lazyload" data-src="images/products/light-pink.jpg" src="images/products/light-pink.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 12 -->
                        <div class="loadItem card-product grid" data-availability="Out of stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/black-11.jpg" src="images/products/black-11.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-12.jpg" src="images/products/black-12.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                <span class="price current-price">$18.95</span>
                                
                            </div>
                        </div>
                        
                        <!-- card product 13 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/brown-3.jpg" src="images/products/brown-3.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">V-neck linen T-shirt</a>
                                <span class="price current-price">$114.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-5.jpg" src="images/products/white-5.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 14 -->
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/light-green-2.jpg" src="images/products/light-green-2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Loose Fit Sweatshirt</a>
                                <span class="price current-price">$10.00</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-3.jpg" src="images/products/black-3.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="images/products/blue.jpg" src="images/products/blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="images/products/dark-blue.jpg" src="images/products/dark-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-6.jpg" src="images/products/white-6.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Grey</span>
                                        <span class="swatch-value bg_light-grey"></span>
                                        <img class="lazyload" data-src="images/products/light-grey.jpg" src="images/products/light-grey.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 15 -->
                        <div class="loadItem card-product grid" data-availability="Out of stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-5.jpg" src="images/products/black-5.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Regular Fit Oxford Shirt</a>
                                <span class="price current-price">$10.00</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="images/products/dark-blue-2.jpg" src="images/products/dark-blue-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Beige</span>
                                        <span class="swatch-value bg_beige"></span>
                                        <img class="lazyload" data-src="images/products/beige.jpg" src="images/products/beige.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Blue</span>
                                        <span class="swatch-value bg_light-blue"></span>
                                        <img class="lazyload" data-src="images/products/light-blue.jpg" src="images/products/light-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-7.jpg" src="images/products/white-7.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 16 -->
                        <div class="loadItem card-product grid" data-availability="Out of stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                </a>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="shop-infinite-scrolling.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="shop-infinite-scrolling.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Loose Fit Hoodie</a>
                                <span class="price current-price">$9.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-7.jpg" src="images/products/black-7.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="images/products/blue-2.jpg" src="images/products/blue-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Load Item -->
                        <div class="wd-load d-flex justify-content-center">
                            <button id="infiniteScrollGrid" class="tf-loading-default loading tf-loading"></button>
                        </div> 
                    </div>
                </div>
                
            </div>
        </section>
@endsection