@extends('frontend.frontend_master')

@section('frontend_content')
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row single-product">
                <div class="col-md-3 sidebar">
                    <div class="sidebar-module-container">
                        <div class="home-banner outer-top-n">
                            <img src="{{ asset('frontend') }}/assets/images/banners/LHS-banner.jpg" alt="Image">
                        </div>
                        <!--  HOT DEALS  -->
                        @include('frontend.frontend_layout.widgets.hot-deals-widget')
                        <!--  HOT DEALS: END  -->

                        <!--  NEWSLETTER  -->
                        @include('frontend.frontend_layout.widgets.newsletter-widget')
                        <!--  NEWSLETTER: END  -->

                        <!--  Testimonials -->
                        @include('frontend.frontend_layout.widgets.testimonial-widget')
                        <!--  Testimonials: END  -->

                    </div>
                </div><!-- /.sidebar -->
                <div class="col-md-9">
                    <div class="detail-block">
                        <div class="row  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">
{{--
                                    <div id="owl-single-product" class="owl-carousel owl-theme"
                                        style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper" style="width: 5742px; left: 0px; display: block;">
                                                @foreach ($product->images as $single_image)
                                                <div class="owl-item" style="width: 319px;">
                                                    <div class="single-product-gallery-item" id="slide{{ $single_image->id }}">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="{{ asset($single_image->photo_name) }}">
                                                            <img class="img-responsive" alt=""
                                                                src="{{ asset($single_image->photo_name) }}">
                                                        </a>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- /.single-product-gallery-item -->
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                            </div>
                                        </div>
                                    </div><!-- /.single-product-slider --> 
--}}

                                    <div id="owl-single-product">
                                        @foreach($product->images as $img)
                                        <div class="single-product-gallery-item" id="slide{{ $img->id }}">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{{ asset($img->photo_name ) }} ">
                                            <img class="img-responsive" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->
                                        @endforeach
                                    </div><!-- /.single-product-slider -->

                                    {{-- <div class="single-product-gallery-thumbs gallery-thumbs">
                                        <div id="owl-single-product-thumbnails" class="owl-carousel owl-theme"
                                            style="opacity: 1; display: block;">
                                            <div class="owl-wrapper-outer">
                                                <div class="owl-wrapper" style="width: 1440px; left: 0px; display: block;">
                                                    @foreach ($product->images as $single_image)
                                                    <div class="owl-item" style="width: 80px;">
                                                        <div class="item">
                                                            <a class="horizontal-thumb active"
                                                                data-target="#owl-single-product" data-slide="1"
                                                                href="#slide{{ $single_image->id }}">
                                                                <img class="img-responsive" width="85" alt=""
                                                                    src="{{ asset($single_image->photo_name) }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="owl-controls clickable">
                                                <div class="owl-pagination">
                                                    <div class="owl-page active"><span class=""></span></div>
                                                    <div class="owl-page"><span class=""></span></div>
                                                    <div class="owl-page"><span class=""></span></div>
                                                </div>
                                            </div>
                                        </div><!-- /#owl-single-product-thumbnails -->
                                    </div><!-- /.gallery-thumbs --> --}}
                                    <div class="single-product-gallery-thumbs gallery-thumbs">
                                        <div id="owl-single-product-thumbnails">
                                        @foreach($product->images as $img)
                                            <div class="item">
                                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide{{ $img->id }}">
                                                    <img class="img-responsive" width="85" alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " />
                                                </a>
                                            </div>
                                            @endforeach
                                        </div><!-- /#owl-single-product-thumbnails -->
                                    </div><!-- /.gallery-thumbs -->

                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            <div class="col-sm-6 col-md-7 product-info-block">
                                <div class="product-info">
                                    <h1 class="name" id="pname">
                                        
                                        {{ $product->product_name_bn }}
                                        
                                    </h1>
                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="rating rateit-small rateit">
                                                    <!-- <button id="rateit-reset-5"
                                                        data-role="none" class="rateit-reset" aria-label="reset rating"
                                                        aria-controls="rateit-range-5" style="display: none;"></button>
                                                    <div id="rateit-range-5" class="rateit-range" tabindex="0" role="slider"
                                                        aria-label="rating" aria-owns="rateit-reset-5" aria-valuemin="0"
                                                        aria-valuemax="5" aria-valuenow="4" aria-readonly="true"
                                                        style="width: 70px; height: 14px;">
                                                        <div class="rateit-selected" style="height: 14px; width: 56px;">
                                                        </div>
                                                        <div class="rateit-hover" style="height:14px"></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="reviews">
                                                    @if ( ! empty($review_count) )
                                                    <a href="#" class="lnk">({{ $review_count }} Reviews)</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="stock-box">
                                                    <span class="label">可用性 :</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    @if ($product->product_qty<1)
                                                    <span class="value">缺货</span>
                                                    @else
                                                    <span class="value">有现货</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        @if (session()->get('language') == 'english')
                                            {!! $product->short_description_en !!}
                                        @else
                                            {!! $product->short_description_bn !!}
                                        @endif
                                    </div><!-- /.description-container -->

                                    <div class="price-container info-container m-t-20">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="price-box">
                                                    @if ($product->discount_price == NULL)
                                                        <span class="price">{{ $product->selling_price }}元</span>
                                                    @else
                                                    <span class="price">{{ $product->discount_price }}元</span>
                                                    <span class="price-strike">{{ $product->selling_price }}元</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="favorite-button m-t-10">
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                        title="" href="#" data-original-title="Wishlist">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <!-- <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                        title="" href="#" data-original-title="Add to Compare">
                                                        <i class="fa fa-signal"></i>
                                                    </a> -->
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                                        title="" href="#" data-original-title="E-mail" href="email:">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    {{-- Add product color and size --}}

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                @if ($product->product_color_en == NULL)
                                                @else
                                                <label class="info-title control-label">选择颜色 <span>*</span></label>
                                                <select class="form-control unicase-form-control selectpicker" style="display: none;"
                                                id="color">
                                                    <option selected="" disabled="">--选择颜色--</option>
                                                    @if (session()->get('langiage') == 'chinese')
                                                    @foreach ($colors_bn as $item)
                                                        <option value="{{ $item }}">{{ ucwords($item) }}</option>
                                                    @endforeach
                                                    @else
                                                    @foreach ($colors_en as $item)
                                                        <option value="{{ $item }}">{{ ucwords($item)}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                @if ($product->product_size_en == NULL)
                                                @else
                                                <label class="info-title control-label">选择大小 <span>*</span></label>
                                                <select class="form-control unicase-form-control selectpicker" style="display: none;"
                                                id="size">
                                                    <option selected="" disabled="">--选择大小--</option>
                                                    @if (session()->get('langiage') == 'chinese')
                                                    @foreach ($size_bn as $item)
                                                        <option value="{{ $item }}">{{ ucwords($item) }}</option>
                                                    @endforeach
                                                    @else
                                                    @foreach ($size_en as $item)
                                                        <option value="{{ $item }}"> {{ ucwords($item) }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                @endif
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    {{-- End product color and size --}}

                                    <div class="quantity-container info-container">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="label">数量 :</span>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <!-- <div class="arrows">
                                                            <div class="arrow plus gradient"><span class="ir"><i
                                                                        class="icon fa fa-sort-asc"></i></span></div>
                                                            <div class="arrow minus gradient"><span class="ir"><i
                                                                        class="icon fa fa-sort-desc"></i></span></div>
                                                        </div> -->
                                                        <input type="number" id="qty" value="1" min="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-7">
                                                <input type="hidden" name="" id="product_id" value="{{ $product->id }}" min="1">
                                                <button type="submit" class="btn btn-primary" onclick="addToCart()">
                                                    <i class="fa fa-shopping-cart inner-right-vs"></i> 添加到购物车</button>
                                            </div>


                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>
                    <div class="product-tabs inner-bottom-xs  wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">描述</a></li>
                                    <li><a data-toggle="tab" href="#review">评论</a></li>
                                    <li><a data-toggle="tab" href="#tags">标签</a></li>
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">
                                                @if (session()->get('language') == 'english')
                                                    {!! $product->long_description_en !!}
                                                @else
                                                    {!! $product->long_description_bn !!}
                                                @endif
                                            </p>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">顾客评论</h4>

                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="review-title"><span class="summary">We love this
                                                                product</span><span class="date"><i
                                                                    class="fa fa-calendar"></i><span>1 days
                                                                    ago</span></span></div>
                                                        <div class="text">"Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.Aliquam suscipit."</div>
                                                    </div>

                                                </div><!-- /.reviews -->
                                            </div><!-- /.product-reviews -->



                                            <div class="product-add-review">
                                                <h4 class="title">写你自己的评论</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cell-label">&nbsp;</th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="cell-label">Quality</td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Price</td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Value</td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.review-table -->

                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <form role="form" class="cnt-form">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">你的名字 <span
                                                                                class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt"
                                                                            id="exampleInputName" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <label for="exampleInputSummary">概要 <span
                                                                                class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt"
                                                                            id="exampleInputSummary" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputReview">评论 <span
                                                                                class="astk">*</span></label>
                                                                        <textarea class="form-control txt txt-review"
                                                                            id="exampleInputReview" rows="4"
                                                                            placeholder=""></textarea>
                                                                    </div><!-- /.form-group -->
                                                                </div>
                                                            </div><!-- /.row -->

                                                            <div class="action text-right">
                                                                <button class="btn btn-primary btn-upper">提交评论</button>
                                                            </div><!-- /.action -->

                                                        </form><!-- /.cnt-form -->
                                                    </div><!-- /.form-container -->
                                                </div><!-- /.review-form -->

                                            </div><!-- /.product-add-review -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                    <div id="tags" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">产品标签</h4>
                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-container">

                                                    <div class="form-group">
                                                        <label for="exampleInputTag">添加您的标签: </label>
                                                        <input type="email" id="exampleInputTag" class="form-control txt">


                                                    </div>

                                                    <button class="btn btn-upper btn-primary" type="submit">添加标签</button>
                                                </div><!-- /.form-container -->
                                            </form><!-- /.form-cnt -->

                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <span class="text col-md-offset-3">用空格分开标签。 对短语使用单引号 (')。</span>
                                                </div>
                                            </form><!-- /.form-cnt -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->

                    <!--  UPSELL PRODUCTS  -->
                    @include('frontend.frontend_layout.product_page.up-sell-products')
                    <!--  UPSELL PRODUCTS : END  -->
                </div><!-- /.col -->
                <div class="clearfix"></div>
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
