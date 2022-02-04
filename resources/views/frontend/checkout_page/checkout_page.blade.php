@extends('frontend.frontend_master')

@section('title')
    {{ env('SHOP_NAME') }} 结帐页面
@endsection

@section('frontend_content')
    <div class="checkout-box ">
        <div class="row">
            <div class="col-md-8">
                <div class="panel-group checkout-steps" id="accordion">
                    <!-- checkout-step-01  -->
                    <div class="panel panel-default checkout-step-01">

                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- panel-body  -->
                            <div class="panel-body">
                                <div class="row">

                                    <!-- guest-login -->
                                    <div class="col-md-6 col-sm-6 already-registered-login">
                                        <h4 class="checkout-subtitle"><b>收件地址</b></h4>

                                        <form class="shipping-form" method="POST" action="{{ route('checkout.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label class="info-title" for="shippingName">收货人姓名<span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="shippingName" placeholder="输入你的名字"
                                                    name="shipping_name" value="{{ Auth::user()->name }}">
                                                    @error('shipping_name')
                                                        <span class="alert text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingEmail">收货人邮件
                                                    <span>*</span></label>
                                                <input type="email" class="form-control unicase-form-control text-input"
                                                    id="shippingEmail" placeholder="输入你的电子邮箱"
                                                    name="shipping_email" value="{{ Auth::user()->email }}">
                                                    @error('shipping_email')
                                                        <span class="alert text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingPhone">收货人电话号码<span>*</span></label>
                                                <input type="phone" class="form-control unicase-form-control text-input"
                                                    id="shippingPhone" placeholder="输入你的电话号码"
                                                    name="shipping_phone" value="{{ Auth::user()->phone_number }}">
                                                    @error('shipping_phone')
                                                        <span class="alert text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="info-title" for="shippingPostCode">航运邮政编码<span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="shippingPostCode" placeholder="输入您的帖子编号"
                                                    name="shipping_postCode">
                                                    @error('shipping_postCode')
                                                        <span class="alert text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                    </div>
                                    <!-- guest-login -->

                                    <!-- already-registered-login -->
                                    <div class="col-md-6 col-sm-6 already-registered-login">
                                        <h4 class="checkout-subtitle"><b>地址栏</b></h4>

                                        <div class="form-group">
                                            <h5>分区选择 <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select class="custom-select form-control unicase-form-control" aria-label="选择部门" name="division_id">
                                                    <option selected>选择部门名称</option>
                                                    @foreach ($divisions as $division)
                                                        <option value="{{ $division->id }}">
                                                            {{ $division->division_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('division_id')
                                                <span class="alert text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <h5>选区 <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select class="custom-select form-control unicase-form-control" aria-label="District Select" name="district_id">
                                                    <option selected="" disabled="">选择地区名称</option>
                                                </select>
                                            </div>
                                            @error('district_id')
                                                <span class="alert text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <h5>选择州 <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select class="custom-select form-control unicase-form-control" aria-label="State Select" name="state_id">
                                                    <option selected="" disabled="">选择州名</option>
                                                </select>
                                            </div>
                                            @error('state_id')
                                                <span class="alert text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <label class="info-title" for="shippingAddrees">收件地址<span class="text-danger">*</span></label>
                                        <textarea name="shipping_address" id="" cols="30" rows="10"
                                            class="form-control unicase-form-control text-input" id="shippingAddrees"
                                            placeholder="示例：北京市朝阳区力鸿花园 1号楼 18A"></textarea>
                                            @error('shipping_address')
                                                <span class="alert text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group mt-2">
                                                <label class="info-title" for="shippingNotes">运输说明<span></span></label>
                                                <textarea name="shipping_notes" id="" cols="30" rows="10" class="form-control unicase-form-control text-input" id="shippingNotes" placeholder="装运单"></textarea>
                                            </div>
                                    </div>
                                    <!-- already-registered-login -->

                                </div>
                            </div>
                            <!-- panel-body  -->

                        </div><!-- row -->
                    </div>
                    <!-- checkout-step-01  -->

                </div><!-- /.checkout-steps -->
            </div>
            <div class="col-md-4">
                <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">您的结帐进度</h4>
                            </div>
                            <div class="___class_+?71___">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    @foreach ($carts as $item)
                                        <li>
                                            <strong>图片: </strong>
                                            <img src="{{ asset($item->options->image) }}"
                                                style="height: 50px; width: 50px;" alt="">
                                        </li>
                                        <li>
                                            <strong>数量:</strong>
                                            {{ $item->qty }}
                                            <strong>颜色:</strong>
                                            {{ $item->options->color }}
                                            <strong>尺寸:</strong>
                                            {{ $item->options->size }}
                                        </li>
                                    @endforeach
                                    <hr>
                                    <li>
                                        @if (Session::has('coupon'))
                                            <strong>小计: </strong> ${{ $cart_total }}
                                            <hr>
                                            <strong>优惠券名称: </strong> {{ session()->get('coupon')['coupon_name'] }}
                                            ( {{ session()->get('coupon')['coupon_discount'] }} %)
                                            <hr>
                                            <strong>优惠券折扣:
                                            </strong>(-)${{ session()->get('coupon')['discount_amount'] }}
                                            <hr>
                                            <strong>总计: </strong>${{ session()->get('coupon')['total_amount'] }}
                                            <hr>
                                        @else
                                            <strong>小计: </strong> ${{ $cart_total }}
                                            <hr>
                                            <strong>总计: </strong> ${{ $cart_total }}
                                            <hr>
                                        @endif

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- checkout-progress-sidebar -->

                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">选择支付方式</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Stripe</label>
                                    <input type="radio" name="payment_method" id="" value="stripe">
                                    <img src="{{ asset('frontend/assets/images/payments/4.png') }}" alt="">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Paypal</label>
                                    <input type="radio" name="payment_method" id="" value="card">
                                    <img src="{{ asset('frontend/assets/images/payments/1.png') }}" alt="">
                                </div>
                                <div class="col-md-4 hidden">
                                    <label for="">COD</label>
                                    <input type="radio" name="payment_method" id="" value="cod">
                                    <img src="{{ asset('frontend/assets/images/payments/6.png') }}" alt="">
                                </div>
                                @error('payment_method')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary checkout-page-button">确认订单</button>
            </form>
        </div><!-- /.row -->
    </div>
@section('frontend_script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>

    <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="division_id"]').on('change', function(){
                    var division_id = $(this).val();
                    if(division_id) {
                        $.ajax({
                            url: "{{  url('/division/district/ajax') }}/"+division_id,
                            type:"GET",
                            dataType:"json",
                            success:function(data) {
                                $('select[name="state_id"]').html('');
                                var d =$('select[name="district_id"]').empty();
                                    $.each(data, function(key, value){
                                        $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                                    });
                            },
                        });
                    } else {
                        alert('danger');
                    }
                });
            });
        $(document).ready(function() {
            $('select[name="district_id"]').on('change', function(){
                var district_id = $(this).val();
                if(district_id) {
                    $.ajax({
                        url: "{{  url('/district/state/ajax') }}/"+district_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="state_id"]').empty();
                                $.each(data, function(key, value){
                                    $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                                });
                        },
                    });
                } else {
                    alert('错误');
                }
            });
        });

    </script>
@endsection
@endsection
