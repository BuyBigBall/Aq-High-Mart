@extends('frontend.frontend_master')

@section('title')
    {{ env('SHOP_NAME') }}  Fashion - Cart Page
@endsection

@section('frontend_content')
    <div class="body-content">
        <div class="container">
            <div class="my-wishlist-page">
                <div class="row">
                    <div class="col-md-12 shopping-cart-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>图片</th>
                                         <th>产品名称</th>
                                         <th>颜色</th>
                                         <th>尺寸</th>
                                         <th>数量</th>
                                         <th>小计</th>
                                         <th>移除</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="#" class="btn btn-upper btn-primary outer-left-xs">继续购物</a>
                                                    <a  onclick="window.location.reload()"
                                                        class="btn btn-upper btn-primary pull-right outer-right-xs">更新购物车</a>
                                                </span>
                                            </div><!-- /.shopping-cart-btn -->
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody id="cartPage">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">估计运费和税</span>
                                        <p>输入您的目的地以获取运费和税金。</p>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="info-title control-label">省 <span class="text-danger">*</span></label>
                                            <select class="form-control unicase-form-control selectpicker"
                                                style="display: none;">
                                                <option>--选择选项--</option>
                                                <option>China</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title control-label">市 <span class="text-danger">*</span></label>
                                            <select class="form-control unicase-form-control selectpicker"
                                                style="display: none;">
                                                <option>--选择选项--</option>
                                                <option>北京</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title control-label">邮编/邮政编码</label>
                                            <input type="text" class="form-control unicase-form-control text-input"
                                                placeholder="">
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn-upper btn btn-primary">获取报价</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        @if (Session::has('coupon'))

                        @else
                        <table class="table" id="applyCouponField">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">折扣码</span>
                                        <p>如果您有优惠券代码，请输入您的优惠券代码。</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control unicase-form-control text-input"
                                                placeholder="您的优惠券" id="coupon_name">
                                        </div>
                                        <div class="clearfix pull-right">
                                            <button type="submit" class="btn-upper btn btn-primary"
                                            onclick="applyCoupon()">申请优惠券</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                        @endif
                    </div>
                    <div class="col-md-4 col-sm-12 cart-shopping-total">
                        <table class="table">
                            <thead id="couponCalField">

                            </thead><!-- /thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                            <a href="{{ route('checkout-page') }}" type="submit" class="btn btn-primary checkout-btn">进行结算</a>
                                            {{-- <span class="">使用多个地址结帐！</span> --}}
                                        </div>
                                    </td>
                                </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </div>
@endsection

@section('frontend_script')
    <script type="text/javascript">
        // START my cart page view
        function cart() {
            $.ajax({
                type: 'GET',
                url: '/my-cart/list',
                dataType: 'json',
                success: function(response) {
                    var rows = ""
                    $.each(response.carts, function(key, value) {

                        var option_color = "--Select Color--";
                        var option_size = "--Select Size--";
                        option_color = value.options.color==null ? '' : value.options.color.replace("--Select Color--", '');
                        option_size = value.options.size==null ? '' : value.options.size.replace("--Select Size--", '');

                        rows += `<tr>
                                <td class="col-md-2"><img src="/${value.options.image} " alt="imga" style="width:60px; height:60px;"></td>
                                <td class="col-md-2">
                                    <div class="product-name"><a href="#">${value.name}</a></div>
                                    <div class="price">${value.price} 元</div>
                                </td>
                                <td class="col-md-2">${option_color}</td>

                                <td class="col-md-2">${option_size}</td>

                                <td class="col-md-2">
                                ${value.qty > 1
                                ? `<button type="submit" class="btn btn-danger btn-sm" id="${value.rowId}" onclick="cartDecrement(this.id)">-</button>`
                                :
                                `<button type="submit" class="btn btn-danger btn-sm" disabled>-</button>`
                                }
                                <input type="text" value="${value.qty}" min="1" max="100" disabled="" style="width:25px;">
                                <button type="submit" class="btn btn-success btn-sm" id="${value.rowId}" onclick="cartIncrement(this.id)">+</button>
                                </td>

                                <td class="col-md-2"><strong>${value.subtotal} 元</strong></td>

                                <td class="col-md-1 close-btn">
                                    <button type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            `
                    });
                    $('#cartPage').html(rows);
                    $('#total_bill').text(response.cart_total)
                }
            });
        }
        cart();
        // END my cart page view

        // START product remove from my cart
        function cartRemove(id) {
            $.ajax({
                type: 'GET',
                url: '/remove/from-cart/' + id,
                dataType: 'json',
                success: function(data) {
                    cart();
                    miniCart();
                    couponCalField();
                    $('#applyCouponField').show();
                    $('#coupon_name').val('');
                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }
        // END product remove from my cart

        // START product qty increment from my cart
        function cartIncrement(id) {
            $.ajax({
                type: 'GET',
                url: '/add/in-cart/' + id,
                dataType: 'json',
                success: function(data) {
                    cart();
                    miniCart();
                    couponCalField();
                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }
        //End product qty increment from my cart

        // START product qty Decrement from my cart
        function cartDecrement(id) {
            $.ajax({
                type: 'GET',
                url: '/reduce/from-cart/' + id,
                dataType: 'json',
                success: function(data) {
                    cart();
                    miniCart();
                    couponCalField();
                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }
        //End product qty Decrement from my cart

        //START applyCoupon
        function applyCoupon(){
            var coupon_name = $('#coupon_name').val();
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: {coupon_name: coupon_name},
                url: '/coupon/apply/',
                success: function(recv_data) {
                    if(data.validity == true){
                        $('#applyCouponField').hide();
                    }
                    couponCalField();
                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(recv_data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: recv_data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: recv_data.error
                        })
                    }
                    // End Message
                }
            });
        }
        //END applyCoupon

        //START coupon Calcluation
        function couponCalField(){
            $.ajax({
                type: 'GET',
                url: "{{ url('/coupon-calculation') }}",
                dataType: 'json',
                success: function(data){
                    miniCart();
                    cart();
                    if(data.total){
                        $('#couponCalField').html(
                            `<tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            小计<span class="inner-left-md">${data.total}元</span>
                                        </div>
                                        <div class="cart-grand-total">
                                            合计<span class="inner-left-md">${data.total}元</span>
                                        </div>
                                    </th>
                            </tr>`
                        )
                    }else{
                        $('#couponCalField').html(
                            `<tr>
                                    <th>
                                        <div class="cart-sub-total">小计金额<span class="inner-left-md">${data.subtotal} 元</span>
                                        </div>
                                        <div class="cart-sub-total">优惠券名称<span class="inner-left-md">${data.coupon_name}</span>
                                            <button type="submit" onclick="couponRemove()"><i class="fa fa-times"></i></button>
                                        </div>
                                        <div class="cart-sub-total">折扣金额<span class="inner-left-md">${data.discount_amount} 元</span>
                                        </div>
                                        <div class="cart-grand-total">
                                            总金额<span class="inner-left-md">${data.total_amount} 元</span>
                                        </div>
                                    </th>
                            </tr>`
                        )
                    }
                }
            });
        }
        couponCalField();
        //END coupon Calcluation

        // Start coupon remove
        // End coupon remove
        function couponRemove(){
            $.ajax({
                type: 'GET',
                url: "{{ url('/coupon-remove') }}",
                dataType: 'json',
                success: function(data){
                    couponCalField();
                    $('#applyCouponField').show();
                    $('#coupon_name').val('');
                    //location.reload();
                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    } else {
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }
    </script>
@endsection
