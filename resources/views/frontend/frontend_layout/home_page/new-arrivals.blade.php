<section class="section wow fadeInUp new-arriavls">
    <h3 class="section-title">
        @if (session()->get('language') == 'english')
            New Arrivals
        @else
            新到货
        @endif
    </h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        {{-- @php
            $new_arrival_products = App\Models\Product::where('new_arrival',1)->latest()->limit(20)->get();
        @endphp --}}
        @foreach ($new_products as $product)
        <div class="item item-carousel">
            <div class="products">
                <div class="product">
                    <div class="product-image">
                        <div class="image">
                            <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">
                                <img src="{{ asset($product->product_thumbnail) }}" alt="">
                            </a>
                        </div>
                        <!-- /.image -->
                        @php
                        $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                        @endphp
                        @if ($product->discount_price == NULL)
                            <div class="tag new"><span>新的</span></div>
                        @else
                            <div class="tag new"><span>{{ round($discount_amount) }}%</span></div>
                        @endif
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                        <h3 class="name"><a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">
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
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                            class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">添加到购物车</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}" title="Wishlist"> <i
                                            class="icon fa fa-heart"></i> </a> </li>
                                <!-- <li class="lnk"> <a class="add-to-cart" href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}" title="Compare"> <i
                                            class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
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
    <!-- /.home-owl-carousel -->
</section>
<!-- /.section -->
