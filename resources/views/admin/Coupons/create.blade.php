@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '优惠券',
    'url' => "coupons.index",
    'section_name' => '所有优惠券'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Coupon Page --}}
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">添加新优惠券</h3>
                        <a href="{{ route('coupons.index') }}" class="btn btn-primary">返回列表优惠券</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('coupons.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <h5>优惠券名称 <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="coupon_name" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('coupon_name')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>优惠券折扣 (%) <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="coupon_discount" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('coupon_discount')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>优惠券有效期 <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="coupon_validity" class="form-control" required="" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('coupon_validity')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>优惠券状态 <span class="text-danger"></span></h5>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"
                                    id="coupon_status" name="coupon_status" checked value="1">
                                    <label class="form-check-label" for="coupon_status">活动状态</label>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
