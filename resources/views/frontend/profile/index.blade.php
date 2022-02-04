@extends('dashboard')

@section('userdashboard_content')
<div class="card-body">
    <form action="{{ route('user.profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="form-group">
            <label class="info-title" for="username">名称 <span class="text-danger">*</span></label>
            <input type="name" name="name" class="form-control unicase-form-control text-input" id="username" value="{{ $user->name }}">
        </div>
        @error('name')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label class="info-title" for="useremail">电子邮件地址<span class='text-danger'>*</span></label>
            <input type="email" name="email" class="form-control unicase-form-control text-input" id="useremail" value="{{ $user->email }}">
        </div>
        @error('email')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label class="info-title" for="userphone">电话号码 <span class='text-danger'>*</span></label>
            <input type="text" name="phone_number" class="form-control unicase-form-control text-input" id="userphone" value="{{ $user->phone_number }}">
        </div>
        @error('phone_number')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <h5>头像照片<span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="file" name="image" id="image" class="form-control" required=""> <div class="help-block"></div>
            </div>
        </div>
        <div class="col-md-12 widget-user-image">
            <img  id="show-image" class="rounded-circle" src="{{ !empty($user->profile_photo_path) ? url('storage/profile-photos/'.$user->profile_photo_path) : url('storage/profile-photos/blank_profile_photo.jpg') }}" alt="用户头像" style="float: right" width="100px" height="100px">
        </div>
        <div class="text-xs-right">
            <button type="submit" class="btn btn-rounded btn-primary mb-5">更新个人信息</button>
        </div>
    </form>
</div>
@section('frontend_script')
    <script type="text/javascript">
        $(document).ready(function(){
        $('#image').change(function(e){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#show-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    </script>
    @endsection
@endsection