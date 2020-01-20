<div class="container main-content">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <p class="woocommerce-result-count">Showing 1-10 of 23 results</p>
                </div>
                <div class="col-md-6">
                    <form class="woocommerce-ordering pull-right" method="get">
                        <select name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                </div>
            </div>
            <ul class="products">
                @if(count($store_items) > 0)
                @foreach($store_items as $item)
                <li class="product">
                    <div class="product-wrap">
                        <a href="./shop_single.html">
                        <span class="onsale">Sale!</span>
                        <img src="{{$item->ItemIcon}}" alt="" class="img-responsive">
                        </a>
                        <a href="./shop_single.html" class="button add_to_cart_button">Add to cart</a>
                    </div>
                    <a href="./shop_single.html">
                        <h3>{{$item->ItemName}}</h3>
                        <span class="price"><del><span class="amount">&pound;15.00</span></del> <ins><span class="amount">&pound;12.00</span></ins></span>
                    </a>
                </li>
                @endforeach
                @else
                    <p>No Items Found</p>
                @endif
            </ul>
            <div class="woocommerce-pagination">
                <ul>
                    <li><span class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="./shop.html">2</a></li>
                    <li><a class="page-numbers" href="./shop.html">3</a></li>
                    <li><a class="next page-numbers" href="./shop.html">&rarr;</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="space30"></div>
        </div>
        <div class="col-md-4 shop-aside">
            <div class="side-widget space25">
                <div class="heading">
                    <h3>Filter by price</h3>
                </div>
                <div class="g-content price-range-slider">
                    <div class="s_range">
                        <div id="sliderRange"></div>
                        <div class="range_v">
                            <span>Price:</span>
                            <input type="text" id="price1" name="price1" title="" value="&pound;75" class="input" /> 
                            <div class="range_sep">-</div>
                            <input type="text" id="price2" name="price2" title="" value="&pound;300" class="input" /> 
                        </div>
                        <button type="submit" class="button">Filter</button>
                    </div>
                </div>
            </div>
            <div class="cleafix"></div>
            <div class="side-widget space20">
                <div class="heading">
                    <h3>Products</h3>
                </div>
                <ul class="product_list_widget g-content no-padding">
                    <li>
                        <a href="./shop_single.html">
                        <img src="images/shop/1.jpg" alt="" class="img-responsive">
                        <span class="product-title">Woo Single #2</span>
                        </a>
                        <del><span class="amount">&pound;3.00</span></del> <ins><span class="amount">&pound;2.00</span></ins>
                    </li>
                    <li>
                        <a href="./shop_single.html">
                        <img src="images/shop/2.jpg" alt="" class="img-responsive">
                        <span class="product-title">Woo Album #4</span>
                        </a>
                        <span class="amount">&pound;9.00</span>
                    </li>
                    <li>
                        <a href="./shop_single.html">
                        <img src="images/shop/3.jpg" alt="" class="img-responsive">
                        <span class="product-title">Woo Single #1</span>
                        </a>
                        <span class="amount">&pound;3.00</span>
                    </li>
                </ul>
            </div>
            <div class="side-widget space25">
                <div class="heading">
                    <h3>Product Categories</h3>
                </div>
                <ul class="product-cat g-content no-padding">
                    <li><a href="./shop.html">Albums</a></li>
                    <li><a href="./shop.html">Clothing</a></li>
                    <li><a href="./shop.html">Hoodles</a></li>
                    <li><a href="./shop.html">Music</a></li>
                    <li><a href="./shop.html">Posters</a></li>
                    <li><a href="./shop.html">Singles</a></li>
                    <li><a href="./shop.html">Singles</a></li>
                </ul>
            </div>
            <div class="side-widget space25">
                <div class="heading">
                    <h3>Recent Reviews</h3>
                </div>
                <ul class="product_list_widget g-content no-padding">
                    <li>
                        <a href="./shop_single.html"><img src="images/shop/1.jpg" alt=""/>Woo Ninja</a>
                        <div class="star-rating-gray"><span><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star-o"></i></span></div>
                        <span class="reviewer">by Maria</span>
                    </li>
                    <li>
                        <a href="./shop_single.html"><img src="images/shop/4.jpg" alt="">Premium Quality</a>
                        <div class="star-rating-gray"><span><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star-o"></i></span></div>
                        <span class="reviewer">by Maria</span>
                    </li>
                    <li>
                        <a href="./shop_single.html"><img src="images/shop/7.jpg" alt="">Woo Logo</a>
                        <div class="star-rating-gray"><span><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star act"></i><i class="fa fa-star-o"></i></span></div>
                        <span class="reviewer">by Maria</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
