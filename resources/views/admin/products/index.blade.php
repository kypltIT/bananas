@extends('layouts.admin')

@section('title', 'Product List')

@section('content')
<div class="flex items-center flex-wrap justify-between gap20 mb-30">
    <h3>All Products</h3>
    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
        <li>
            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <a href="product-list.html#"><div class="text-tiny">Product</div></a>
        </li>
        <li>
            <i class="icon-chevron-right"></i>
        </li>
        <li>
            <div class="text-tiny">All Products</div>
        </li>
    </ul>
</div>
<!-- product-list -->
<div class="wg-box">
    <div class="title-box">
        <i class="icon-coffee"></i>
        <div class="body-text">Tip search by Product ID: Each product is provided with a unique ID, which you can rely on to find the exact product you need.</div>
    </div>
    <div class="flex items-center justify-between gap10 flex-wrap">
        <div class="wg-filter flex-grow">

            <form class="form-search">
                <fieldset class="name">
                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                </fieldset>
                <div class="button-submit">
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <a class="tf-button style-1 w208" href="add-product.html"><i class="icon-plus"></i>Add new</a>
    </div>
    <div class="wg-table table-product-list">
        <ul class="table-title flex gap20 mb-14">
            <li>
                <div class="body-title">Product</div>
            </li>    
            <li>
                <div class="body-title">Product ID</div>
            </li>
            <li>
                <div class="body-title">Price</div>
            </li>
            <li>
                <div class="body-title">Quantity</div>
            </li>
            <li>
                <div class="body-title">Sale</div>
            </li>
            <li>
                <div class="body-title">Stock</div>
            </li>
            <li>
                <div class="body-title">Start date</div>
            </li>
            <li>
                <div class="body-title">Action</div>
            </li>
        </ul>
        <ul class="flex flex-column">
            <li class="wg-product item-row gap20">
                <div class="name">
                    <div class="image">
                        <img src="images/products/product-1.jpg" alt="">
                    </div>
                    <div class="title line-clamp-2 mb-0">
                        <a href="product-list.html#" class="body-text">Dog Food, Chicken & Chicken Liver Recipe...</a>
                    </div>
                </div>
                <div class="body-text text-main-dark mt-4">#7712309</div>
                <div class="body-text text-main-dark mt-4">$1,452.500</div>
                <div class="body-text text-main-dark mt-4">1,638</div>
                <div class="body-text text-main-dark mt-4">20</div>
                <div>
                    <div class="block-stock bg-1 fw-7">Out of stock</div>
                </div>
                <div class="body-text text-main-dark mt-4">08/24/2024</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
            <li class="wg-product item-row gap20">
                <div class="name">
                    <div class="image">
                        <img src="images/products/product-2.jpg" alt="">
                    </div>
                    <div class="title line-clamp-2 mb-0">
                        <a href="product-list.html#" class="body-text">Grain Free Dry Dog Food </a>
                    </div>
                </div>
                <div class="body-text text-main-dark mt-4">#7712309</div>
                <div class="body-text text-main-dark mt-4">$1,452.500</div>
                <div class="body-text text-main-dark mt-4">1,638</div>
                <div class="body-text text-main-dark mt-4">20</div>
                <div>
                    <div class="block-available bg-1 fw-7">In Stock</div>
                </div>
                <div class="body-text text-main-dark mt-4">08/24/2024</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
            <li class="wg-product item-row gap20">
                <div class="name">
                    <div class="image">
                        <img src="images/products/product-3.jpg" alt="">
                    </div>
                    <div class="title line-clamp-2 mb-0">
                        <a href="product-list.html#" class="body-text">Weruva Pumpkin Patch Up! Pumpkin With Ginger... </a>
                    </div>
                </div>
                <div class="body-text text-main-dark mt-4">#7712309</div>
                <div class="body-text text-main-dark mt-4">$1,452.500</div>
                <div class="body-text text-main-dark mt-4">1,638</div>
                <div class="body-text text-main-dark mt-4">20</div>
                <div>
                    <div class="block-available bg-1 fw-7">In Stock</div>
                </div>
                <div class="body-text text-main-dark mt-4">08/24/2024</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
            <li class="wg-product item-row gap20">
                <div class="name">
                    <div class="image">
                        <img src="images/products/product-4.jpg" alt="">
                    </div>
                    <div class="title line-clamp-2 mb-0">
                        <a href="product-list.html#" class="body-text">Milk-Bone Mini's Flavor Snacks Dog Treats, 15 Ounce </a>
                    </div>
                </div>
                <div class="body-text text-main-dark mt-4">#7712309</div>
                <div class="body-text text-main-dark mt-4">$1,452.500</div>
                <div class="body-text text-main-dark mt-4">1,638</div>
                <div class="body-text text-main-dark mt-4">20</div>
                <div>
                    <div class="block-available bg-1 fw-7">In Stock</div>
                </div>
                <div class="body-text text-main-dark mt-4">08/24/2024</div>
                <div class="list-icon-function">
                    <div class="item eye">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="item edit">
                        <i class="icon-edit-3"></i>
                    </div>
                    <div class="item trash">
                        <i class="icon-trash-2"></i>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="divider"></div>
    <div class="flex items-center justify-between flex-wrap gap10">
        <div class="text-tiny"></div>
        <ul class="wg-pagination">
            <li>
                <a href="product-list.html#"><i class="icon-chevron-left"></i></a>
            </li>
            <li>
                <a href="product-list.html#">1</a>
            </li>
            <li class="active">
                <a href="product-list.html#">2</a>
            </li>
            <li>
                <a href="product-list.html#">3</a>
            </li>
            <li>
                <a href="product-list.html#"><i class="icon-chevron-right"></i></a>
            </li>
        </ul>
    </div>
</div>
<!-- /product-list -->
@endsection