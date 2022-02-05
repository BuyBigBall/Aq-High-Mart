<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
<div class="more-info-tab clearfix ">
    <h3 class="new-product-title pull-left">
        @if (session()->get('language') == 'english')
            New Products
        @else
            新产品
        @endif
    </h3>
    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
        <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">
            @if (session()->get('language') == 'english') All @else 全部 @endif
        </a></li>

        @foreach ($categories as $category)
        @if ($loop->index>3)
            @php
                continue;
            @endphp
        @endif
        <li><a data-transition-type="backSlide" href="#category{{ $category->id }}" data-toggle="tab">
            @if (session()->get('language') == 'english') {{ $category->category_name_en }} @else {{ $category->category_name_bn }} @endif
        </a></li>
        @endforeach
        {{-- <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
        <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li> --}}
    </ul>
    <!-- /.nav-tabs -->
</div>
<div class="tab-content outer-top-xs">
    <div class="tab-pane in active" id="all">
        <div class="product-slider">
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="6">
            @forelse ($new_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                        <div class="image">
                            <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                            </a>
                        </div>
                        <!-- /.image -->
                        @php
                            $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                        @endphp
                        @if ($product->discount_price == NULL)
                            <div class="tag new"><span>New</span></div>
                        @else
                            <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>
                        @endif
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                        <h3 class="name">
                            <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">
                            @if (session()->get('language') == 'english')
                                {{ $product->product_name_en }}
                            @else
                                {{ $product->product_name_bn }}
                            @endif
                        </a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        @if ($product->discount_price == NULL)
                            <div class="product-price"><span class="price">{{ $product->selling_price }}元</span>
                            </div>
                        @else
                            <div class="product-price"> <span class="price"> {{ $product->discount_price }}元</span> <span class="price-before-discount">{{ $product->selling_price }}元 </span> </div>
                        @endif
                        <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                        <div class="action">
                            <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">添加到购物车</button>
                            </li>
                            <li class="lnk wishlist">
                                <a data-toggle="tooltip" class="add-to-cart" href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
                            </li>
                            <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
            @empty
            <h5 class="text-danger">未找到产品</h5>
            @endforelse
        <!-- /.item -->
        </div>
        <!-- /.home-owl-carousel -->
        </div>
    <!-- /.product-slider -->
    </div>
    <!-- /.tab-pane -->
    @foreach ($categories as $category)
    <div class="tab-pane" id="category{{ $category->id }}">
        <div class="product-slider">
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="6">
            @forelse ($category->products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                        <div class="image">
                            <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">
                            <img  src="{{ asset($product->product_thumbnail) }}" alt="">
                            </a>
                        </div>
                        <!-- /.image -->
                            @php
                                $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                            @endphp
                            @if ($product->discount_price == NULL)
                                <div class="tag new"><span>New</span></div>
                            @else
                                <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>
                            @endif

                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                        <h3 class="name">
                            <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">
                            @if (session()->get('language') == 'english')
                                {{ $product->product_name_en }}
                            @else
                                {{ $product->product_name_bn }}
                            @endif
                        </a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        @if ($product->discount_price == NULL)
                            <div class="product-price"><span class="price">{{ $product->selling_price }}元</span>
                            </div>
                        @else
                            <div class="product-price"> <span class="price"> {{ $product->discount_price }}元</span> <span class="price-before-discount">{{ $product->selling_price }}元 </span> </div>
                        @endif
                        <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                        <div class="action">
                            <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">添加到购物车</button>
                            </li>
                            <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
            @empty
                <h5 class="text-danger">未找到产品</h5>
            @endforelse
        <!-- /.item -->
        </div>
        <!-- /.home-owl-carousel -->
        </div>
    <!-- /.product-slider -->
    </div>
    @endforeach
    <!-- /.tab-pane -->
</div>
<!-- /.tab-content -->
</div>
