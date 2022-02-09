@extends('dashboard')

@section('userdashboard_content')
<div class="card-body">
    <form action="{{ route('user.update.password') }}" method="post" onsubmit="return checkValid()">
        @csrf
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
    </form>
</div>
<script>
    function checkValid()
    {
        if( $("input[name='password_confirmation']").val() != $("input[name='password']").val() )
        {
            alert('确认密码不匹配');
            return false;
        }
        return true;
    }
</script>
@endsection