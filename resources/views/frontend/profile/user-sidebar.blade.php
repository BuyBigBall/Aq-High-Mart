<div class="col-md-2">
    <img class="rounded-circle" src="{{ !empty($user->profile_photo_path) ? url('storage/profile-photos/'.$user->profile_photo_path) : url('storage/profile-photos/blank_profile_photo.jpg') }}" alt="User Avatar" height="100%" width="100%">
    <ul class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">首页</a>
        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">资料更新</a>
        <a href="{{ route('user.change.password') }}" class="btn btn-primary btn-sm btn-block">更改密码</a>
        <a href="{{ route('user.orders') }}" class="btn btn-primary btn-sm btn-block">订单历史</a>
        <a href="{{ route('user.return-orders') }}" class="btn btn-primary btn-sm btn-block">退货单</a>
        <a href="{{ route('user.cancel-orders') }}" class="btn btn-primary btn-sm btn-block">取消订单</a>
        <a href="{{ route('user.logout') }}" class="btn btn-primary btn-sm btn-block">登出</a>
    </ul>
</div>
