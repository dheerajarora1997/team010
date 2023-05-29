<?php include 'main_header.php';?>
<body id="category" class="category-col-5">
<?php include 'header.php'; ?>     
<nav aria-label="breadcrumb" class="w-100 float-left">
    <ol class="breadcrumb parallax justify-content-center" data-source-url="img/banner/parallax.jpg" style="background-image: url(&quot;img/banner/parallax.jpg&quot;); background-position: 50% 0.809717%;">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">category</li>
    </ol>
</nav>
<div class="main-content w-100 float-left">
    <div class="container">
        <div class="row">
            <div class="content-wrapper col-xl-12 col-lg-12 order-lg-2">
                <div class="block-category mb-30 w-100 float-left">
                    <div class="category-cover text-center">
                        <img src="<?= assets ;?>img/banner/category-banner.png" alt="category-banner"/>
                    </div>
                    <div class="title-category text-capitalize">women</div>
                    <div class="category-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis, magna et euismod auctor, mauris ipsum interdum risus, a varius augue lacus id diam. Mauris maximus, ipsum at gravida sodales, purus tellus tempor eros, a feugiat elit odio in nunc.</div>
                </div>
                <header class="product-grid-header d-flex d-xs-block d-sm-flex d-lg-flex w-100 float-left">
                    <div class="hidden-sm-down total-products d-flex d-xs-block d-lg-flex col-md-3 col-sm-3 col-xs-12 align-items-center">
                        <div class="row">
                            <div class="nav" role="tablist">
                                <a class="grid active" href="#grid" data-toggle="tab" role="tab" aria-selected="true" aria-controls="grid"><i class="material-icons align-middle">grid_on</i></a>
                                <a class="list" href="#list" data-toggle="tab" role="tab" aria-selected="false" aria-controls="list"><i class="material-icons align-middle">format_list_bulleted</i></a>
                                <a class="sort" href="#sort-view" data-toggle="tab" role="tab" aria-selected="false" aria-controls="sort-view"><i class="material-icons align-middle">reorder</i></a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-results-wrapper d-flex d-sm-flex d-xs-block d-lg-flex justify-content-end col-md-9 col-sm-9 col-xs-12">
                        <div class="shop-results d-flex align-items-center">
                            <span>Show</span>
                            <div class="shop-select">
                                <select name="number" id="number">
                                    <option value="9">9</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="shop-results d-flex align-items-center">
                            <span>Sort By</span>
                            <div class="shop-select">
                                <select name="sort" id="sort">
                                    <option value="position">Default sorting</option>
                                    <option value="p-name">Sort Popularity</option>
                                    <option value="p-price">Sort Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="tab-content text-center products w-100 float-left category-col-6">
                    <div class="tab-pane grid fade active" id="grid" role="tabpanel">
                        <div class="row">
                            <div class="product-layouts col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image zoom">
                                        <a href="product-details.html">
                                        <img src="<?= assets ;?>img/products/01.jpg" alt="01"/>
                                        <img src="<?= assets ;?>img/products/02.jpg" alt="02" class="second_image img-responsive"/>							</a>
                                        <ul class="countdown countdown1">
                                            <li>
                                                <span class="days">00</span>
                                                <p class="days_text">Days</p>
                                            </li>
                                            <li>
                                                <span class="hours">00</span>
                                                <p class="hours_text">Hours</p>
                                            </li>
                                            <li>
                                                <span class="minutes">00</span>
                                                <p class="minutes_text">Minutes</p>
                                            </li>
                                            <li>
                                                <span class="seconds">00</span>
                                                <p class="seconds_text">Seconds</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quaerat voluptatem</a></h4>
                                        </div>
                                        <div class="rating">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>							
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled><i class="material-icons">shopping_cart</i><span>Out of stock</span></button>
                                                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                                <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                                <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layouts col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image zoom">
                                        <a href="product-details.html">
                                        <img src="<?= assets ;?>img/products/02.jpg" alt="02"/>
                                        <img src="<?= assets ;?>img/products/03.jpg" alt="03" class="second_image img-responsive"/>											</a>
                                        <ul class="countdown countdown2">
                                            <li>
                                                <span class="days">00</span>
                                                <p class="days_text">Days</p>
                                            </li>
                                            <li>
                                                <span class="hours">00</span>
                                                <p class="hours_text">Hours</p>
                                            </li>
                                            <li>
                                                <span class="minutes">00</span>
                                                <p class="minutes_text">Minutes</p>
                                            </li>
                                            <li>
                                                <span class="seconds">00</span>
                                                <p class="seconds_text">Seconds</p>
                                            </li>
                                        </ul>
                                        <div class="flags">
                                            <div class="sale">sale</div>
                                            <div class="new">new</div>
                                        </div>
                                    </div>
                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize w-100 float-left"><a href="product-details.html"></a></h4>
                                        </div>
                                        <div class="rating">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                                <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                                <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layouts col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image zoom">
                                        <a href="product-details.html">
                                        <img src="<?= assets ;?>img/products/03.jpg" alt="03"/>
                                        <img src="<?= assets ;?>img/products/04.jpg" alt="04" class="second_image img-responsive"/>											</a>										
                                    </div>
                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">magni dolores eosquies</a></h4>
                                        </div>
                                        <div class="rating">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                                <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                                <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layouts col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image zoom">
                                        <a href="product-details.html">
                                        <img src="<?= assets ;?>img/products/04.jpg" alt="04"/>
                                        <img src="<?= assets ;?>img/products/05.jpg" alt="05" class="second_image img-responsive"/>											</a>										
                                    </div>
                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize w-100 float-left"><a href="product-details.html">voluptas nulla pariatur</a></h4>
                                        </div>
                                        <div class="rating">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                                <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                                <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layouts col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image zoom">
                                        <a href="product-details.html">
                                        <img src="<?= assets ;?>img/products/05.jpg" alt="05"/>
                                        <img src="<?= assets ;?>img/products/06.jpg" alt="06" class="second_image img-responsive"/>											</a>										
                                    </div>
                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quat voluptatem</a></h4>
                                        </div>
                                        <div class="rating">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                                <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                                <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layouts col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image zoom">
                                        <a href="product-details.html">
                                        <img src="<?= assets ;?>img/products/06.jpg" alt="06"/>
                                        <img src="<?= assets ;?>img/products/07.jpg" alt="07" class="second_image img-responsive"/>											</a>										
                                    </div>
                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">voluptas sit aspernatur</a></h4>
                                        </div>
                                        <div class="rating">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                                <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                                <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layouts col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image zoom">
                                        <a href="product-details.html">
                                        <img src="<?= assets ;?>img/products/07.jpg" alt="03"/>
                                        <img src="<?= assets ;?>img/products/08.jpg" alt="08" class="second_image img-responsive"/>											</a>										
                                    </div>
                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">similique suntin culpaqui</a></h4>
                                        </div>
                                        <div class="rating">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>out of stock</span></button>
                                                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                                <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                                <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-layouts col-lg-2 col-md-2 col-sm-6 col-xs-6">
                                <div class="product-thumb">
                                    <div class="image zoom">
                                        <a href="product-details.html">
                                        <img src="<?= assets ;?>img/products/08.jpg" alt="08"/>
                                        <img src="<?= assets ;?>img/products/09.jpg" alt="09" class="second_image img-responsive"/>											</a>										
                                    </div>
                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">suscipit laboriosam nisi</a></h4>
                                        </div>
                                        <div class="rating">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                        <div class="button-wrapper">
                                            <div class="button-group text-center">
                                                <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                                <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                                <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                                <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade list text-left" id="list" role="tabpanel">
                        <div class="product-layouts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/01.jpg" alt="01"/>
                                    <img src="<?= assets ;?>img/products/02.jpg" alt="02" class="second_image img-responsive"/>											
                                    </a>
                                    <ul class="countdown countdown4 text-center">
                                        <li>
                                            <span class="days">00</span>
                                            <p class="days_text">Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p class="hours_text">Hours</p>
                                        </li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p class="minutes_text">Minutes</p>
                                        </li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p class="seconds_text">Seconds</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-7 col-md-8 position-static text-left">
                                    <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quaerat voluptatem</a></h4>
                                    </div>
                                    <div class="rating mb-10">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>											
                                        </div>
                                    </div>
                                    <div class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus arcu turpis, quis sagittis orci dictum non. Etiam id eleifend erat. Donec sit amet nisl id nisi laoreet viverra in ac nibh.											
                                    </div>
                                    <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                    </div>
                                    <div class="color-option d-flex align-items-center float-left w-100">
                                        <ul class="color-categories">
                                            <li>
                                                <a class="tt-pink" href="#" title="Pink"></a>                                            
                                            </li>
                                            <li>
                                                <a class="tt-blue" href="#" title="Blue"></a>                                            
                                            </li>
                                            <li>
                                                <a class="tt-yellow" href="#" title="Yellow"></a>                                            
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>out of stock</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/02.jpg" alt="02"/>
                                    <img src="<?= assets ;?>img/products/03.jpg" alt="03" class="second_image img-responsive"/></a>	
                                    <ul class="countdown countdown5 text-center">
                                        <li>
                                            <span class="days">00</span>
                                            <p class="days_text">Days</p>
                                        </li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p class="hours_text">Hours</p>
                                        </li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p class="minutes_text">Minutes</p>
                                        </li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p class="seconds_text">Seconds</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                    <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html"></a></h4>
                                    </div>
                                    <div class="rating mb-10">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>											
                                        </div>
                                    </div>
                                    <div class="description">
                                        Integer erat purus, semper pharetra leo tincidunt, commodo vestibulum nulla. Nam ultricies nisl sed maximus rhoncus. Aliquam et ipsum pulvinar, rutrum erat nec, aliquet nisl.											
                                    </div>
                                    <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                    </div>
                                    <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/03.jpg" alt="03"/>
                                    <img src="<?= assets ;?>img/products/04.jpg" alt="04" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                    <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">magni dolores eosquies</a></h4>
                                    </div>
                                    <div class="rating mb-10">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                        </div>
                                    </div>
                                    <div class="description">
                                        Suspendisse eu mi ullamcorper, volutpat leo at, consectetur arcu. Morbi eget tempor sem, sed auctor sem. Nullam sodales scelerisque nisi, eu pellentesque felis euismod malesuada.											
                                    </div>
                                    <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                    </div>
                                    <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/04.jpg" alt="04"/>
                                    <img src="<?= assets ;?>img/products/05.jpg" alt="05" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                    <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">voluptas nulla pariatur</a></h4>
                                    </div>
                                    <div class="rating mb-10">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                        </div>
                                    </div>
                                    <div class="description">
                                        Phasellus euismod nulla nulla, sit amet tristique tellus condimentum ut. Aenean posuere lacus eu ultrices lobortis. Duis eget est arcu. Praesent rhoncus efficitur augue nec porttitor.											
                                    </div>
                                    <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                    </div>
                                    <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/05.jpg" alt="05"/>
                                    <img src="<?= assets ;?>img/products/06.jpg" alt="06" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                    <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quat voluptatem</a></h4>
                                    </div>
                                    <div class="rating mb-10">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                        </div>
                                    </div>
                                    <div class="description">
                                        Sed nisi elit, gravida eu risus sit amet, hendrerit tristique sapien. Proin consequat augue lectus, eu tempor orci congue quis. Sed dapibus non enim sed tristique. Donec commodo velit at odio gravida.											
                                    </div>
                                    <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                    </div>
                                    <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/06.jpg" alt="06"/>
                                    <img src="<?= assets ;?>img/products/07.jpg" alt="07" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                    <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">voluptas sit aspernatur</a></h4>
                                    </div>
                                    <div class="rating mb-10">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                        </div>
                                    </div>
                                    <div class="description">
                                        Vestibulum semper tincidunt eros, ut pulvinar felis. Maecenas tincidunt mi et dui dignissim, in feugiat nisl scelerisque. Aenean et nisi turpis. Cras in nisi vitae magna feugiat placerat id sit amet mauris.											
                                    </div>
                                    <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                    </div>
                                    <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/07.jpg" alt="07"/>
                                    <img src="<?= assets ;?>img/products/08.jpg" alt="08" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                    <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">similique suntin culpaqui</a></h4>
                                    </div>
                                    <div class="rating mb-10">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                        </div>
                                    </div>
                                    <div class="description">
                                        Phasellus ut felis eu libero semper elementum. Maecenas sit amet scelerisque ante. Nam ultrices enim sed lacus gravida condimentum. Proin at malesuada nibh.											
                                    </div>
                                    <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                    </div>
                                    <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>out of stock</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-5 col-md-4">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/08.jpg" alt="08"/>
                                    <img src="<?= assets ;?>img/products/09.jpg" alt="09" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12  col-sm-7 col-md-8 position-static text-left">
                                    <div class="caption">
                                        <h4 class="product-title text-capitalize"><a href="product-details.html">suscipit laboriosam nisi</a></h4>
                                    </div>
                                    <div class="rating mb-10">
                                        <div class="product-ratings d-inline-block align-middle">
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                            <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                        </div>
                                    </div>
                                    <div class="description">
                                        Duis tincidunt ante urna, sit amet vestibulum felis placerat in. Duis a tortor et odio consequat congue. Mauris euismod augue tempor, sagittis nisl sed, pretium purus.											
                                    </div>
                                    <div class="price">
                                        <div class="regular-price">$100.00</div>
                                        <div class="old-price">$150.00</div>
                                    </div>
                                    <div class="button-wrapper">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade sort text-left" id="sort-view" role="tabpanel">
                        <div class="product-layouts">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/01.jpg" alt="01"/>
                                    <img src="<?= assets ;?>img/products/02.jpg" alt="02" class="second_image img-responsive"/>											
                                    </a>
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                    <div class="sort-title col-md-5 col-sm-7 float-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quaerat voluptatem</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											
                                            </div>
                                        </div>
                                        <div class="description mb-10">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus arcu turpis, quis sagittis orci dictum non. Etiam id eleifend erat. Donec sit amet nisl id nisi laoreet viverra in ac nibh.											
                                        </div>
                                        <div class="color-option d-flex align-items-center float-left w-100">
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="tt-pink" href="#" title="Pink"></a>                                            
                                                </li>
                                                <li>
                                                    <a class="tt-blue" href="#" title="Blue"></a>                                            
                                                </li>
                                                <li>
                                                    <a class="tt-yellow" href="#" title="Yellow"></a>                                            
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>out of stock</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/02.jpg" alt="02"/>
                                    <img src="<?= assets ;?>img/products/03.jpg" alt="03" class="second_image img-responsive"/></a>	
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                    <div class="sort-title col-md-5 col-sm-7 float-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html"></a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											
                                            </div>
                                        </div>
                                        <div class="description mb-10">
                                            Integer erat purus, semper pharetra leo tincidunt, commodo vestibulum nulla. Nam ultricies nisl sed maximus rhoncus. Aliquam et ipsum pulvinar, rutrum erat nec, aliquet nisl.											
                                        </div>
                                    </div>
                                    <div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/03.jpg" alt="03"/>
                                    <img src="<?= assets ;?>img/products/04.jpg" alt="04" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                    <div class="sort-title col-md-5 col-sm-7 float-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">magni dolores eosquies</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="description mb-10">
                                            Suspendisse eu mi ullamcorper, volutpat leo at, consectetur arcu. Morbi eget tempor sem, sed auctor sem. Nullam sodales scelerisque nisi, eu pellentesque felis euismod malesuada.											
                                        </div>
                                    </div>
                                    <div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/04.jpg" alt="04"/>
                                    <img src="<?= assets ;?>img/products/05.jpg" alt="05" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                    <div class="sort-title col-md-5 col-sm-7 float-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">voluptas nulla pariatur</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="description mb-10">
                                            Phasellus euismod nulla nulla, sit amet tristique tellus condimentum ut. Aenean posuere lacus eu ultrices lobortis. Duis eget est arcu. Praesent rhoncus efficitur augue nec porttitor.											
                                        </div>
                                    </div>
                                    <div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/05.jpg" alt="05"/>
                                    <img src="<?= assets ;?>img/products/06.jpg" alt="06" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                    <div class="sort-title col-md-5 col-sm-7 float-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">aliquam quat voluptatem</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="description mb-10">
                                            Sed nisi elit, gravida eu risus sit amet, hendrerit tristique sapien. Proin consequat augue lectus, eu tempor orci congue quis. Sed dapibus non enim sed tristique. Donec commodo velit at odio gravida.											
                                        </div>
                                    </div>
                                    <div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/06.jpg" alt="06"/>
                                    <img src="<?= assets ;?>img/products/07.jpg" alt="07" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                    <div class="sort-title col-md-5 col-sm-7 float-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">voluptas sit aspernatur</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="description mb-10">
                                            Vestibulum semper tincidunt eros, ut pulvinar felis. Maecenas tincidunt mi et dui dignissim, in feugiat nisl scelerisque. Aenean et nisi turpis. Cras in nisi vitae magna feugiat placerat id sit amet mauris.											
                                        </div>
                                    </div>
                                    <div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/07.jpg" alt="07"/>
                                    <img src="<?= assets ;?>img/products/08.jpg" alt="08" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                    <div class="sort-title col-md-5 col-sm-7 float-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">similique suntin culpaqui</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="description mb-10">
                                            Phasellus ut felis eu libero semper elementum. Maecenas sit amet scelerisque ante. Nam ultrices enim sed lacus gravida condimentum. Proin at malesuada nibh.											
                                        </div>
                                    </div>
                                    <div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal" disabled="disabled"><i class="material-icons">shopping_cart</i><span>out of stock</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layouts">
                            <div class="product-thumb row">
                                <div class="image zoom col-xs-12 col-sm-3 col-md-2">
                                    <a href="product-details.html" class="d-block position-relative">
                                    <img src="<?= assets ;?>img/products/08.jpg" alt="08"/>
                                    <img src="<?= assets ;?>img/products/09.jpg" alt="09" class="second_image img-responsive"/>											</a>										
                                </div>
                                <div class="thumb-description col-xs-12 col-sm-9 col-md-10 position-static text-left">
                                    <div class="sort-title col-md-5 col-sm-7 float-left">
                                        <div class="caption">
                                            <h4 class="product-title text-capitalize"><a href="product-details.html">suscipit laboriosam nisi</a></h4>
                                        </div>
                                        <div class="rating mb-10">
                                            <div class="product-ratings d-inline-block align-middle">
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>											   
                                            </div>
                                        </div>
                                        <div class="description mb-10">
                                            Duis tincidunt ante urna, sit amet vestibulum felis placerat in. Duis a tortor et odio consequat congue. Mauris euismod augue tempor, sagittis nisl sed, pretium purus.											
                                        </div>
                                    </div>
                                    <div class="price-main col-md-3 col-sm-5 float-left text-center text-sm-center text-xs-left">
                                        <div class="price">
                                            <div class="regular-price">$100.00</div>
                                            <div class="old-price">$150.00</div>
                                        </div>
                                    </div>
                                    <div class="button-wrapper col-md-4 col-sm-5 float-left text-center text-md-center text-sm-center text-xs-left">
                                        <div class="button-group text-center">
                                            <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                            <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                            <button type="button" class="btn btn-primary btn-compare"><i class="material-icons">equalizer</i><span>Compare</span></button>
                                            <button type="button" class="btn btn-primary btn-quickview"  data-toggle="modal" data-target="#product_view"><i class="material-icons">visibility</i><span>Quick View</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper float-left w-100">
                    <p>Showing 1 to 9 of 11 (2 Pages)</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<div class="block-newsletter">
</div>
<?php include 'footer.php';?> 
<!-- Footer -->
<!-- Register modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-medium text-left">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-4">
                    <input type="text" id="RegisterForm-name" class="form-control validate" placeholder="Your name">
                </div>
                <div class="md-form mb-4">
                    <input type="email" id="RegisterForm-email" class="form-control validate" placeholder="Your email">
                </div>
                <div class="md-form mb-4">
                    <input type="password" id="RegisterForm-pass" class="form-control validate" placeholder="Your password">
                </div>
                <div class="checkbox-link d-flex justify-content-between">
                    <div class="left-col">
                        <input id="remember-me" type="checkbox"><label for="remember_me">Remember Me</label>
                    </div>
                    <div class="right-col"><a href="#">Forget Password?</a></div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary">Sign up</button>
            </div>
        </div>
    </div>
</div>
<!-- Login modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-medium text-left">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-4">
                    <input type="text" id="LoginForm-name" class="form-control validate" placeholder="Your name">
                </div>
                <div class="md-form mb-4">
                    <input type="password" id="LoginForm-pass" class="form-control validate" placeholder="Your password">
                </div>
                <div class="checkbox-link d-flex justify-content-between">
                    <div class="left-col">
                        <input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
                    </div>
                    <div class="right-col"><a href="#">Forget Password?</a></div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </div>
</div>
<!-- product_view modal -->
<div class="modal fade product_view" id="product_view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100w-100w-100 font-weight-bold d-none">Quick view</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 left-columm">
                        <div class="product-large-image tab-content">
                            <div class="tab-pane active" id="product-1" role="tabpanel" aria-labelledby="product-tab-1">
                                <div class="single-img img-full">
                                    <a href="img/products/01.jpg"><img src="<?= assets ;?>img/products/01.jpg" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-2" role="tabpanel" aria-labelledby="product-tab-2">
                                <div class="single-img">
                                    <a href="img/products/02.jpg"><img src="<?= assets ;?>img/products/02.jpg" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-3" role="tabpanel" aria-labelledby="product-tab-3">
                                <div class="single-img">
                                    <a href="img/products/03.jpg"><img src="<?= assets ;?>img/products/03.jpg" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-4" role="tabpanel" aria-labelledby="product-tab-4">
                                <div class="single-img">
                                    <a href="img/products/04.jpg"><img src="<?= assets ;?>img/products/04.jpg" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-5" role="tabpanel" aria-labelledby="product-tab-5">
                                <div class="single-img">
                                    <a href="img/products/05.jpg"><img src="<?= assets ;?>img/products/05.jpg" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="small-image-list float-left w-100">
                            <div class="nav-add small-image-slider-single-product-tabstyle-3 owl-carousel" role="tablist">
                                <div class="single-small-image img-full">
                                    <a data-toggle="tab" id="product-tab-1" href="#product-1" class="img active"><img src="<?= assets ;?>img/products/01.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="single-small-image img-full">
                                    <a data-toggle="tab" id="product-tab-2" href="#product-2" class="img"><img src="<?= assets ;?>img/products/02.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="single-small-image img-full">
                                    <a data-toggle="tab" id="product-tab-3" href="#product-3" class="img"><img src="<?= assets ;?>img/products/03.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="single-small-image img-full">
                                    <a data-toggle="tab" id="product-tab-4" href="#product-4" class="img"><img src="<?= assets ;?>img/products/04.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="single-small-image img-full">
                                    <a data-toggle="tab" id="product-tab-5" href="#product-5" class="img"><img src="<?= assets ;?>img/products/05.jpg" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 product_content">
                        <h4 class="product-title text-capitalize">aliquam quaerat voluptatem</h4>
                        <div class="rating">
                            <div class="product-ratings d-inline-block align-middle">
                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                <span class="fa fa-stack"><i class="material-icons off">star</i></span>			
                            </div>
                        </div>
                        <span class="description float-left w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
                        <h3 class="price float-left w-100"><span class="regular-price align-middle">$75.00</span><span class="old-price align-middle">$60.00</span></h3>
                        <div class="product-variants float-left w-100">
                            <div class="col-md-4 col-sm-6 col-xs-12 size-options d-flex align-items-center">
                                <h5>Size:</h5>
                                <select class="form-control" name="select">
                                    <option value="" selected="">Size</option>
                                    <option value="black">Medium</option>
                                    <option value="white">Large</option>
                                    <option value="gold">Small</option>
                                    <option value="rose gold">Extra large</option>
                                </select>
                            </div>
                            <div class="color-option d-flex align-items-center">
                                <h5>color :</h5>
                                <ul class="color-categories">
                                    <li class="active">
                                        <a class="tt-pink" href="#" title="Pink"></a>
                                    </li>
                                    <li>
                                        <a class="tt-blue" href="#" title="Blue"></a>
                                    </li>
                                    <li>
                                        <a class="tt-yellow" href="#" title="Yellow"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-cart d-flex align-items-center float-left w-100">
                            <h5>qty:</h5>
                            <input value="1" type="number">
                            <button type="button" class="btn btn-primary"><i class="material-icons">shopping_cart</i> Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-pop modal -->
<div class="modal fade" id="cart-pop" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header alert-success">
                <h4 class="modal-title w-100w-100w-100">Product successfully added to your shopping cart</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 divide-right">
                        <div class="row">
                            <div class="col-md-5 col-xs-4 product-img float-left">
                                <img src="<?= assets ;?>img/products/01.jpg" class="img-responsive" alt="01">
                            </div>
                            <div class="col-md-7 col-xs-8 product-desc float-left">
                                <h4 class="product-title text-capitalize">aliquam quaerat voluptatem</h4>
                                <div class="rating">
                                    <div class="product-ratings d-inline-block align-middle">
                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons off">star</i></span>
                                    </div>
                                </div>
                                <h3 class="price float-left w-100"><span class="regular-price align-middle">$75.00</span><span class="old-price align-middle">$60.00</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 divide-left">
                        <p class="cart-products-count">There are 2 items in your cart.</p>
                        <p class="total-products float-left w-100">
                            <strong>Total products:</strong> $150.00
                        </p>
                        <p class="shipping float-left w-100">
                            <strong>Total shipping:</strong> free
                        </p>
                        <p class="total-price float-left w-100">
                            <strong>Total:</strong> $150.00(tax incl.)
                        </p>
                        <div class="cart-content-btn float-left w-100">
                            <form action="#">
                                <input class="btn pull-right mt_10 btn-primary" value="Continue shopping" type="submit">
                            </form>
                            <form action="checkout_page.html">
                                <input class="btn pull-right mt_10 btn-secondary" value="Proceed to checkout" type="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= assets ;?>js/jquery.min.js"></script>]
<script src="<?= assets ;?>js/bootstrap.min.js"></script>
<script src="<?= assets ;?>js/owl.carousel.min.js"></script>
<script src="<?= assets ;?>js/custom.js"></script>
<script src="<?= assets ;?>js/parallax.js"></script>
<script src="<?= assets ;?>js/jquery-ui.min.js"></script>
<script src="<?= assets ;?>js/ResizeSensor.min.js"></script>
<script src="<?= assets ;?>js/theia-sticky-sidebar.min.js"></script>
<script src="<?= assets ;?>js/jquery.countdown.min.js"></script>
<script src="<?= assets ;?>js/masonry.pkgd.min.js"></script>
<script src="<?= assets ;?>js/imagesloaded.pkgd.min.js"></script>
<script src="<?= assets ;?>js/jquery.zoom.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ac1aabb4b401e45400e4197/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->		
</body>
</html>