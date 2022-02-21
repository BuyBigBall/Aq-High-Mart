@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp
<div class="col-md-2">
    <img class="rounded-circle" 
        src="{{ !empty($user->profile_photo_path) ? url('storage/profile-photos/'.$user->profile_photo_path) : url('storage/profile-photos/blank_profile_photo.jpg') }}" 
        alt="用户头像" height="95%" width="95%"
        style="margin: 0.6rem;"
        >
    <ul class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block {{ ($route == 'dashboard') ? 'active' : '' }}">首页</a>
        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block {{ ($route == 'user.profile') ? 'active' : '' }}">资料更新</a>
        <a href="{{ route('user.change.password') }}" class="btn btn-primary btn-sm btn-block {{ ($route == 'user.change.password') ? 'active' : '' }}">更改密码</a>
        <a href="{{ route('user.orders') }}" class="btn btn-primary btn-sm btn-block {{ ($route == 'user.orders') ? 'active' : '' }}">订单历史</a>
        <a href="{{ route('user.moneys') }}" class="btn btn-primary btn-sm btn-block {{ ($route == 'user.moneys') ? 'active' : '' }}">余额历史</a>
        <a href="{{ route('user.points') }}" class="btn btn-primary btn-sm btn-block {{ ($route == 'user.points') ? 'active' : '' }}">积分历史</a>
        <a href="{{ route('user.return-orders') }}" class="btn btn-primary btn-sm btn-block {{ ($route == 'user.return-orders') ? 'active' : '' }}">退货单</a>
        <a href="{{ route('user.cancel-orders') }}" class="btn btn-primary btn-sm btn-block {{ ($route == 'user.cancel-orders') ? 'active' : '' }}">取消订单</a>
        <a href="{{ route('user.logout') }}" class="btn btn-primary btn-sm btn-block">登出</a>
    </ul>
</div>
