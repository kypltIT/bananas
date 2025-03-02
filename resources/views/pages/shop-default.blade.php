@extends('layouts.app')

@section('title', 'Shop')

@section('content')
        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">New Arrival</div>
                        <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p> 
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <section class="flat-spacing-1">
            <div class="container">
                <div class="tf-shop-control grid-3 align-items-center">
                    <div></div>
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
                <div class="tf-row-flex">
                    <div class="tf-shop-sidebar sidebar-filter canvas-filter left">
                        <div class="canvas-wrapper">
                            <div class="canvas-header d-flex d-xl-none">
                                <div class="filter-icon">
                                    <span class="icon icon-filter"></span>
                                    <span>Filter</span>
                                </div>
                                <span class="icon-close icon-close-popup close-filter"></span>
                            </div>
                            <div class="canvas-body">
                                <div class="widget-facet wd-categories">
                                    <div class="facet-title" data-bs-target="#categories" data-bs-toggle="collapse" aria-expanded="true" aria-controls="categories">
                                        <span>Product categories</span>
                                        <span class="icon icon-arrow-up"></span>
                                    </div>
                                    <div id="categories" class="collapse show">
                                        <ul class="list-categoris current-scrollbar mb_36">
                                            <li class="cate-item current"><a href="shop-filter-sidebar.html#"><span>Fashion</span></a></li>
                                            <li class="cate-item"><a href="shop-filter-sidebar.html#"><span>Men</span></a></li>
                                            <li class="cate-item"><a href="shop-filter-sidebar.html#"><span>Women</span></a></li>
                                            <li class="cate-item"><a href="shop-filter-sidebar.html#"><span>Denim</span></a></li>
                                            <li class="cate-item"><a href="shop-filter-sidebar.html#"><span>Dress</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <form action="shop-filter-sidebar.html#" id="facet-filter-form" class="facet-filter-form">
                                    <div class="widget-facet">
                                        <div class="facet-title" data-bs-target="#availability" data-bs-toggle="collapse" aria-expanded="true" aria-controls="availability">
                                            <span>Availability</span>
                                            <span class="icon icon-arrow-up"></span>
                                        </div>
                                        <div id="availability" class="collapse show">
                                            <ul class="tf-filter-group current-scrollbar mb_36">
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="availability" class="tf-check" id="inStock">
                                                    <label for="inStock" class="label"><span>In stock</span>&nbsp;<span>(14)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="availability" class="tf-check" id="outStock">
                                                    <label for="outStock" class="label"><span>Out of stock</span>&nbsp;<span>(2)</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-facet wrap-price">
                                        <div class="facet-title" data-bs-target="#price" data-bs-toggle="collapse" aria-expanded="true" aria-controls="price">
                                            <span>Price</span>
                                            <span class="icon icon-arrow-up"></span>
                                        </div>
                                        <div id="price" class="collapse show">
                                            <div class="widget-price filter-price">
                                                <div class="price-val-range" id="price-value-range" data-min="0" data-max="500"></div>
                                                <div class="box-title-price">
                                                    <span class="title-price">Price :</span>
                                                    <div class="caption-price">
                                                        <div class="price-val" id="price-min-value" data-currency="$"></div>
                                                        <span>-</span>
                                                        <div class="price-val" id="price-max-value" data-currency="$"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-facet">
                                        <div class="facet-title" data-bs-target="#brand" data-bs-toggle="collapse" aria-expanded="true" aria-controls="brand">
                                            <span>Brand</span>
                                            <span class="icon icon-arrow-up"></span>
                                        </div>
                                        <div id="brand" class="collapse show">
                                            <ul class="tf-filter-group current-scrollbar mb_36">
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="brand" class="tf-check" id="Ecomus">
                                                    <label for="Ecomus" class="label"><span>Ecomus</span>&nbsp;<span>(8)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="brand" class="tf-check" id="M&H">
                                                    <label for="M&H" class="label"><span>M&H</span>&nbsp;<span>(8)</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-facet">
                                        <div class="facet-title" data-bs-target="#color" data-bs-toggle="collapse" aria-expanded="true" aria-controls="color">
                                            <span>Color</span>
                                            <span class="icon icon-arrow-up"></span>
                                        </div>
                                        <div id="color" class="collapse show">
                                            <ul class="tf-filter-group filter-color current-scrollbar mb_36">
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_beige" id="Beige" value="Beige">
                                                    <label for="Beige" class="label"><span>Beige</span>&nbsp;<span>(3)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_dark" id="Black" value="Black">
                                                    <label for="Black" class="label"><span>Black</span>&nbsp;<span>(18)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_blue-2" id="Blue" value="Blue">
                                                    <label for="Blue" class="label"><span>Blue</span>&nbsp;<span>(3)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_brown" id="Brown" value="Brown">
                                                    <label for="Brown" class="label"><span>Brown</span>&nbsp;<span>(3)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_cream" id="Cream" value="Cream">
                                                    <label for="Cream" class="label"><span>Cream</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_dark-beige" id="Dark Beige" value="Dark Beige">
                                                    <label for="Dark Beige" class="label"><span>Dark Beige</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_dark-blue" id="Dark Blue" value="Dark Blue">
                                                    <label for="Dark Blue" class="label"><span>Dark Blue</span>&nbsp;<span>(3)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_dark-green" id="Dark Green" value="Dark Green">
                                                    <label for="Dark Green" class="label"><span>Dark Green</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_dark-grey" id="Dark Grey" value="Dark Grey">
                                                    <label for="Dark Grey" class="label"><span>Dark Grey</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_grey" id="Grey" value="Grey">
                                                    <label for="Grey" class="label"><span>Grey</span>&nbsp;<span>(2)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_light-blue" id="Light Blue" value="Light Blue">
                                                    <label for="Light Blue" class="label"><span>Light Blue</span>&nbsp;<span>(5)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_light-green" id="Light Green" value="Light Green">
                                                    <label for="Light Green" class="label"><span>Light Green</span>&nbsp;<span>(3)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_light-grey" id="Light Grey" value="Light Grey">
                                                    <label for="Light Grey" class="label"><span>Light Grey</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_light-pink" id="Light Pink" value="Light Pink">
                                                    <label for="Light Pink" class="label"><span>Light Pink</span>&nbsp;<span>(2)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_purple" id="Light Purple" value="Light Purple">
                                                    <label for="Light Purple" class="label"><span>Light Purple</span>&nbsp;<span>(2)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_light-yellow" id="Light Yellow" value="Light Yellow">
                                                    <label for="Light Yellow" class="label"><span>Light Yellow</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_orange" id="Orange" value="Orange">
                                                    <label for="Orange" class="label"><span>Orange</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_pink" id="Pink" value="Pink">
                                                    <label for="Pink" class="label"><span>Pink</span>&nbsp;<span>(2)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_taupe" id="Taupe" value="Taupe">
                                                    <label for="Taupe" class="label"><span>Taupe</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_white" id="White" value="White">
                                                    <label for="White" class="label"><span>White</span>&nbsp;<span>(14)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="color" class="tf-check-color bg_yellow" id="Yellow" value="Yellow">
                                                    <label for="Yellow" class="label"><span>Yellow</span>&nbsp;<span>(1)</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-facet">
                                        <div class="facet-title" data-bs-target="#size" data-bs-toggle="collapse" aria-expanded="true" aria-controls="size">
                                            <span>Size</span>
                                            <span class="icon icon-arrow-up"></span>
                                        </div>
                                        <div id="size" class="collapse show">
                                            <ul class="tf-filter-group current-scrollbar">
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="size" class="tf-check tf-check-size" value="S" id="S">
                                                    <label for="S" class="label"><span>S</span>&nbsp;<span>(7)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="size" class="tf-check tf-check-size" value="M" id="M">
                                                    <label for="M" class="label"><span>M</span>&nbsp;<span>(8)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="size" class="tf-check tf-check-size" value="L" id="L">
                                                    <label for="L" class="label"><span>L</span>&nbsp;<span>(8)</span></label>
                                                </li>
                                                <li class="list-item d-flex gap-12 align-items-center">
                                                    <input type="radio" name="size" class="tf-check tf-check-size" value="XL" id="XL">
                                                    <label for="XL" class="label"><span>XL</span>&nbsp;<span>(6)</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="tf-shop-content wrapper-control-shop">
                        <div class="meta-filter-shop">
                            <div id="product-count-grid" class="count-text"></div>
                            <div id="product-count-list" class="count-text"></div>
                            <div id="applied-filters"></div>
                            <button id="remove-all" class="remove-all-filters" style="display: none;">Remove All <i class="icon icon-close"></i></button>
                        </div>

                        <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                            <!-- card product 1 -->
                            <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/white-3.jpg" src="images/products/white-3.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/white-4.jpg" src="images/products/white-4.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="shop-filter-sidebar.html#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Add to cart</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn">
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
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
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                        <img class="lazyload img-hover" data-src="images/products/light-green-2.jpg" src="images/products/light-green-2.jpg" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
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
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="M&H">
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
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="M&H">
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
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="In stock" data-brand="M&H">
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
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="Out of stock" data-brand="M&H">
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
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <div class="card-product grid" data-availability="Out of stock" data-brand="M&H">
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
                                        <a href="shop-filter-sidebar.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <a href="shop-filter-sidebar.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
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
                            <!-- pagination -->
                            <ul class="wg-pagination tf-pagination-list">
                                <li class="active">
                                    <a href="shop-filter-sidebar.html#" class="pagination-link">1</a>
                                </li>
                                <li>
                                    <a href="shop-filter-sidebar.html#" class="pagination-link animate-hover-btn">2</a>
                                </li>
                                <li>
                                    <a href="shop-filter-sidebar.html#" class="pagination-link animate-hover-btn">3</a>
                                </li>
                                <li>
                                    <a href="shop-filter-sidebar.html#" class="pagination-link animate-hover-btn">4</a>
                                </li>
                                <li>
                                    <a href="shop-filter-sidebar.html#" class="pagination-link animate-hover-btn">
                                        <span class="icon icon-arrow-right"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="btn-sidebar-mobile start-0 filterShop">
            <button class="type-hover">
                <i class="icon-open"></i>
                <span class="fw-5">Open Filter</span>
            </button>
        </div>
        <div class="overlay-filter" id="overlay-filter"></div>
@endsection
