<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">
        @if (session()->get('language') == 'english')
            Hot deals
        @else
            热卖
        @endif
    </h3>
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
        @php
            $hot_deals_products = App\Models\Product::where('hot_deals', 1)
                ->where('discount_price','!=',NULL)->latest()->limit(6)->get();
        @endphp
        @foreach ($hot_deals_products as $product)
        <div class="item">
            <div class="products">
                <div class="hot-deal-wrapper">
                    <div class="image"> <img src="{{ asset($product->product_thumbnail) }}" alt="">
                    </div>
                    @php
                        $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                    @endphp
                    <div class="sale-offer-tag"><span>{{ round($discount_amount) }}%<br>
                        折</span></div>
                    <div class="timing-wrapper">
                        <div class="box-wrapper">
                            <div class="date box"> <span class="key">120</span> <span class="value">天</span> </div>
                        </div>
                        <div class="box-wrapper">
                            <div class="hour box"> <span class="key">20</span> <span class="value">时</span> </div>
                        </div>
                        <div class="box-wrapper">
                            <div class="minutes box"> <span class="key">36</span> <span class="value">分</span> </div>
                        </div>
                        <div class="box-wrapper hidden-md">
                            <div class="seconds box"> <span class="key">60</span> <span class="value">秒</span> </div>
                        </div>
                    </div>
                </div>
                <!-- /.hot-deal-wrapper -->

                <div class="product-info text-left m-t-20">
                    <h3 class="name"><a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_bn]) }}">  @if (session()->get('language') == 'english')
                        {{ $product->product_name_en }}
                        @else
                        {{ $product->product_name_bn }}
                        @endif</a></h3>
                    <div class="rating rateit-small"></div>
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
                        <div class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                    class="fa fa-shopping-cart"></i> </button>
                            <button class="btn btn-primary cart-btn" type="button">添加到购物车</button>
                        </div>
                    </div>
                    <!-- /.action -->
                </div>
                <!-- /.cart -->
            </div>
        </div>
        @endforeach
    </div>
    <!-- /.sidebar-widget -->
</div>
