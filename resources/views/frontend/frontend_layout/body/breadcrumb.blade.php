<div class="breadcrumb">
<div class="container">
    <div class="breadcrumb-inner">
    <ul class="list-inline list-unstyled">
        <li style="min-width:6rem;"><a href="{{ route('home') }}"> 首页</a></li>
        @if (request()->routeIs('category'))
        <li class="request()->routeIs('category')? 'active': ''">类别</li>
        @elseif (request()->routeIs('login'))
        <li class="request()->routeIs('login')? 'active': ''">登录</li>
        @else
        {{-- <li class="request()->routeIs('')? 'active': ''">{{ request()->route() }}</li> --}}
        @endif
    </ul>
    </div>
    <!-- /.breadcrumb-inner -->
</div>
<!-- /.container -->
</div>
<!-- /.breadcrumb -->
