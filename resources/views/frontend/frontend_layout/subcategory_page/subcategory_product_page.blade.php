@extends('frontend.frontend_master')

@section('title')
    {{ env('SHOP_NAME') }}  Fashion - SubCategory Product
@endsection

@section('frontend_content')
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    @include('frontend.frontend_layout.body.side-menu')
                    <!-- /.side-menu -->
                    <!-- ================================== TOP NAVIGATION : END ================================== -->
                    @include('frontend.frontend_layout.category_page.shop-by-widget')
                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class="col-md-9">
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    <div id="category" class="category-carousel hidden-xs">
                        <div class="item">
                            <div class="image"> <img src="{{ asset('frontend') }}/assets/images/banners/cat-banner-1.jpg"
                                    alt="" class="img-responsive"> </div>
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text"> 大热卖 </div>
                                    <div class="excerpt hidden-sm hidden-md"> 节省高达 49% 的折扣 </div>
                                    <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                    </div>


                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-2">
                                <div class="filter-tabs">
                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                        <li class="active"> <a data-toggle="tab" href="#grid-container"><i
                                                    class="icon fa fa-th-large"></i>网格</a> </li>
                                        <li><a data-toggle="tab" href="#list-container"><i
                                                    class="icon fa fa-th-list"></i>列表</a></li>
                                    </ul>
                                </div>
                                <!-- /.filter-tabs -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-12 col-md-6">
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt"> <span class="lbl">排序</span>
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                                    登记顺序 <span class="caret"></span> </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="#">登记顺序</a></li>
                                                    <li role="presentation"><a href="#">价格顺：最低优先</a></li>
                                                    <li role="presentation"><a href="#">价格顺：最高优先</a></li>
                                                    <li role="presentation"><a href="#">名称顺序</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /.fld -->
                                    </div>
                                    <!-- /.lbl-cnt -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-sm-3 col-md-6 no-padding">
                                    <div class="lbl-cnt"> <span class="lbl">显示</span>
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1
                                                    <span class="caret"></span> </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="#">1</a></li>
                                                    <li role="presentation"><a href="#">2</a></li>
                                                    <li role="presentation"><a href="#">3</a></li>
                                                    <li role="presentation"><a href="#">4</a></li>
                                                    <li role="presentation"><a href="#">5</a></li>
                                                    <li role="presentation"><a href="#">6</a></li>
                                                    <li role="presentation"><a href="#">7</a></li>
                                                    <li role="presentation"><a href="#">8</a></li>
                                                    <li role="presentation"><a href="#">9</a></li>
                                                    <li role="presentation"><a href="#">10</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /.fld -->
                                    </div>
                                    <!-- /.lbl-cnt -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-6 col-md-4 text-right">
                                {{-- <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                    <!-- /.list-inline -->
                                </div> --}}
                                <!-- /.pagination-container -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active" id="grid-container">
                                <div class="category-product">
                                    <div class="row">
                                        @foreach ($subcategory_products as $product)
                                        <div class="col-sm-6 col-md-4 wow fadeInUp animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}"><img
                                                                    src="{{ asset($product->product_thumbnail) }}"
                                                                    alt=""></a> </div>
                                                        <!-- /.image -->

                                                    @php
                                                        $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                                                    @endphp
                                                    @if ($product->discount_price == NULL)
                                                        <div class="tag new"><span>新的</span></div>
                                                    @else
                                                        <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>
                                                    @endif
                                                    <!-- /.product-image -->
                                                    </div>
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">
                                                            @if (session()->get('language') == 'english')
                                                                {{ $product->product_name_en }}
                                                            @else
                                                                {{ $product->product_name_bn }}
                                                            @endif
                                                        </a>
                                                        </h3>
                                                        <div class="rating rateit-small rateit"><button id="rateit-reset-2"
                                                                data-role="none" class="rateit-reset"
                                                                aria-label="reset rating" aria-controls="rateit-range-2"
                                                                style="display: none;"></button>
                                                            <div id="rateit-range-2" class="rateit-range" tabindex="0"
                                                                role="slider" aria-label="rating" aria-owns="rateit-reset-2"
                                                                aria-valuemin="0" aria-valuemax="5" aria-valuenow="4"
                                                                aria-readonly="true" style="width: 70px; height: 14px;">
                                                                <div class="rateit-selected"
                                                                    style="height: 14px; width: 56px;"></div>
                                                                <div class="rateit-hover" style="height:14px"></div>
                                                            </div>
                                                        </div>
                                                        <div class="description"></div>
                                                        <div class="product-price">
                                                            @if ($product->discount_price == NULL)
                                                            <span class="price">{{ $product->selling_price }}元</span>
                                                            @else
                                                            <span class="price">{{ $product->discount_price }}元</span>
                                                            <span class="price-before-discount">{{ $product->selling_price }}元</span>
                                                            @endif
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                    <!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button"> <i
                                                                            class="fa fa-shopping-cart"></i> </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">添加到购物车</button>
                                                                </li>
                                                                <li class="lnk wishlist"> <a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist"> <i
                                                                            class="icon fa fa-heart"></i> </a> </li>
                                                                <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html"
                                                                        title="Compare"> <i class="fa fa-signal"></i> </a>
                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                        <!-- /.action -->
                                                    </div>
                                                    <!-- /.cart -->
                                                </div>
                                                <!-- /.product -->

                                            </div>
                                            <!-- /.products -->
                                        </div>
                                        @endforeach
                                        <!-- /.item -->

                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.category-product -->

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="list-container">
                                <div class="category-product">
                                    @foreach ($subcategory_products as $product)
                                    <div class="category-product-inner wow fadeInUp animated"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image"> <img
                                                                    src="{{ asset($product->product_thumbnail) }}"
                                                                    alt=""> </div>
                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">
                                                                @if (session()->get('language') == 'english')
                                                                    {{ $product->product_name_en }}
                                                                @else
                                                                    {{ $product->product_name_bn }}
                                                                @endif
                                                            </a>
                                                            </h3>
                                                            <div class="rating rateit-small rateit"><button
                                                                    id="rateit-reset-14" data-role="none"
                                                                    class="rateit-reset" aria-label="reset rating"
                                                                    aria-controls="rateit-range-14"
                                                                    style="display: none;"></button>
                                                                <div id="rateit-range-14" class="rateit-range" tabindex="0"
                                                                    role="slider" aria-label="rating"
                                                                    aria-owns="rateit-reset-14" aria-valuemin="0"
                                                                    aria-valuemax="5" aria-valuenow="4" aria-readonly="true"
                                                                    style="width: 70px; height: 14px;">
                                                                    <div class="rateit-selected"
                                                                        style="height: 14px; width: 56px;"></div>
                                                                    <div class="rateit-hover" style="height:14px"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-price">
                                                                @if ($product->discount_price == NULL)
                                                                    <span class="price">{{ $product->selling_price }}元</span>
                                                                @else
                                                                    <span class="price">{{ $product->discount_price }}元</span>
                                                                    <span class="price-before-discount">{{ $product->selling_price }}元</span>
                                                                @endif
                                                            </div>
                                                            <!-- /.product-price -->
                                                            <div class="description m-t-10">
                                                                @if (session()->get('language') == 'english')
                                                                    {{ $product->short_description_en }}
                                                                @else
                                                                    {{ $product->short_description_bn }}
                                                                @endif
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button"> <i
                                                                                    class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">添加到购物车</button>
                                                                        </li>
                                                                        <li class="lnk wishlist"> <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist"> <i
                                                                                    class="icon fa fa-heart"></i> </a> </li>
                                                                        <li class="lnk"> <a class="add-to-cart"
                                                                                href="detail.html" title="Compare"> <i
                                                                                    class="fa fa-signal"></i> </a> </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->

                                                        </div>
                                                        <!-- /.product-info -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-list-row -->
                                                @php
                                                $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                                                @endphp
                                                @if ($product->discount_price == NULL)
                                                    <div class="tag new"><span>新的</span></div>
                                                @else
                                                    <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>
                                                @endif
                                            </div>
                                            <!-- /.product-list -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    @endforeach
                                    <!-- /.category-product-inner -->

                                </div>
                                <!-- /.category-product -->
                            </div>
                            <!-- /.tab-pane #list-container -->
                        </div>
                        <!-- /.tab-content -->
                        <div class="clearfix filters-container">
                            <div class="text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        {{ $subcategory_products->links() }}
                                    </ul>
                                    <!-- /.list-inline -->
                                </div>
                                <!-- /.pagination-container -->
                            </div>
                            <!-- /.text-right -->

                        </div>
                        <!-- /.filters-container -->

                    </div>
                    <!-- /.search-result-container -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!--  BRANDS CAROUSEL  -->
            @include('frontend.frontend_layout.home_page.brands-carousel')
            <!-- /.logo-slider -->
            <!--  BRANDS CAROUSEL : END  -->
        </div>
        <!-- /.container -->

    </div>
@endsection
