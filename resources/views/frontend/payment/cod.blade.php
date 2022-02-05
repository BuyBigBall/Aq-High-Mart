@extends('frontend.frontend_master')

@section('title')
    {{ env('SHOP_NAME') }}  Fashion - COD Page
@endsection

@section('frontend_style')

@endsection

@section('frontend_content')
    <div class="checkout-box ">
        <div class="row">
            <div class="col-md-6">
                <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">您的购物金额</h4>
                            </div>
                            <div class="">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    <hr>
                                    <li>
                                        @if (Session::has('coupon'))
                                            <strong>小计： </strong> {{ $cart_total }}元
                                            <hr>
                                            <strong>优惠券名称: </strong> {{ session()->get('coupon')['coupon_name'] }}
                                            ( {{ session()->get('coupon')['coupon_discount'] }} %)
                                            <hr>
                                            <strong>优惠券折扣:
                                            </strong>(-)${{ session()->get('coupon')['discount_amount'] }}
                                            <hr>
                                            <strong>总计： </strong>{{ session()->get('coupon')['total_amount'] }}元
                                            <hr>
                                        @else
                                            <strong>小计： </strong> {{ $cart_total }}元
                                            <hr>
                                            <strong>总计： </strong> {{ $cart_total }}元
                                            <hr>
                                        @endif

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- checkout-progress-sidebar -->
            </div>
            <div class="col-md-6">
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <form action="{{ route('cod.order') }}" method="post" id="payment-form">
                            @csrf
                            <div class="form-row">
                                <img src="{{ asset('frontend/assets/images/payments/cash.png') }}" alt="">
                              <label for="card-element">

                            <input type="hidden" name="shipping_name" value="{{ $data['shipping_name'] }}">
                            <input type="hidden" name="shipping_email" value="{{ $data['shipping_email'] }}">
                            <input type="hidden" name="shipping_phone" value="{{ $data['shipping_phone'] }}">
                            <input type="hidden" name="shipping_postCode" value="{{ $data['shipping_postCode'] }}">
                            <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
                            <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
                            <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
                            <input type="hidden" name="shipping_address" value="{{ $data['shipping_address'] }}">
                            <input type="hidden" name="shipping_notes" value="{{ $data['shipping_notes'] }}">

                              </label>
                            </div>
                            <br>
                            <button class="btn btn-primary">Confirm Order</button>
                          </form>
                    </div>
                </div>
            </div>
            </div><!-- /.row -->
            <hr>
        </div>
    </div>
@endsection
@section('frontend_script')

@endsection

