@extends('admin.admin_master')

@section('title', 'Admin Password Update')

@section('dashboard_content')
<section class="content">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Admin Password Update Form</h4>
                </div>
                <div class="box-body">
                            <form action="{{ route('admin.password.update') }}" method="POST">
                                {{-- @method('PUT') --}}
                                @csrf
                            <div class="row">
                                <div class="col-12">

                                    <div class="form-group">
                                        <h5>当前密码字段 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="current_password" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('current_password')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <h5>新密码输入字段 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('password')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <h5>确认密码输入字段 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password_confirmation" data-validation-match-match="password" class="form-control" required=""> <div class="help-block"></div>
                                        </div>
                                        @error('password_confirmation')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-rounded btn-primary mb-5">更新</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
</section>
@endsection
