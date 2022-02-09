@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    // $request = Request::is('/orders');
    // dd($route, $prefix, $request);
@endphp

<aside class="main-sidebar">
<!-- sidebar-->
<section class="sidebar">

    <div class="user-profile">
        <div class="ulogo">
                <a href="index.html">
                <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('backend') }}/images/logo-dark.png" alt="">
                        <h3><b>{{ env('SHOP_NAME') }}</b></h3>
                    </div>
            </a>
        </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

    <li class="{{ ($route == 'admin.dashboard') ? 'active':'' }}">
        <a href="{{ route('admin.dashboard') }}">
            <i data-feather="pie-chart"></i>
            <span>仪表板</span>
        </a>
    </li>

    <li class="treeview {{ ($route == 'categories.index') ? 'active' : '' }}">
        <a href="#">
        <i data-feather="message-circle"></i>
        <span>类别</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" {{ ($route == 'categories.index') ? 'active' : '' }}">
                <a href="{{ route('categories.index') }}"><i class="ti-more"></i>所有类别</a>
            </li>
            <li class=" {{ ($route == 'subcategories.index') ? 'active' : '' }}">
                <a href="{{ route('subcategories.index') }}"><i class="ti-more"></i>所有子类别</a>
            </li>
            <li class=" {{ ($route == 'subsubcategories.index') ? 'active' : '' }}">
                <a href="{{ route('subsubcategories.index') }}"><i class="ti-more"></i>所有子子类别</a>
            </li>
        </ul>
    </li>

    <li class="treeview {{ ($route == 'products.index') ? 'active' : '' }}">
        <a href="#">
        <i data-feather="mail"></i> <span>产品管理</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" {{ ($route == 'products.create') ? 'active' : '' }}">
                <a href="{{ route('products.create') }}"><i class="ti-more"></i>添加产品</a>
            </li>
            <li class=" {{ ($route == 'products.index') ? 'active' : '' }}">
                <a href="{{ route('products.index') }}"><i class="ti-more"></i>产品目录</a>
            </li>
        </ul>
    </li>

    <li class="treeview {{ ($route == 'users.index') ? 'active' : '' }}">
        <a href="#">
        <i data-feather="mail"></i> <span>用户管理</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" {{ ($route == 'users.create') ? 'active' : '' }}">
                <a href="{{ route('users.create') }}"><i class="ti-more"></i>添加用户</a>
            </li>
            <li class=" {{ ($route == 'users.index') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}"><i class="ti-more"></i>用户目录</a>
            </li>
        </ul>
    </li>

    <li class="treeview {{ ($route == 'brands.index') ? 'active' : '' }}">
        <a href="#">
        <i data-feather="message-circle"></i>
        <span>商品品牌</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class=" {{ ($route == 'brands.index') ? 'active' : '' }}">
            <a href="{{ route('brands.index') }}"><i class="ti-more"></i>所有品牌</a>
        </li>
        </ul>
    </li>
    
    <li class="treeview {{ Request::is('admin/orders*') ? 'active' : '' }}">
        <a href="#">
        <i data-feather="file"></i> <span>订单</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" {{ Request::is('admin/orders') ? 'active' : '' }}">
                <a href="{{ route('orders.index') }}"><i class="ti-more"></i>所有订单</a>
            </li>
            <li class=" {{ Request::is('admin/orders/pending*') ? 'active' : '' }}">
                <a href="{{ route('pending.orders') }}"><i class="ti-more"></i>待定中</a>
            </li>
            <li class=" {{ Request::is('admin/orders/confirmed*') ? 'active' : '' }}">
                <a href="{{ route('confirmed.orders') }}"><i class="ti-more"></i>已确认</a>
            </li>
            <li class=" {{ Request::is('admin/orders/processing*') ? 'active' : '' }}">
                <a href="{{ route('processing.orders') }}"><i class="ti-more"></i>处理中</a>
            </li>
            <li class=" {{ Request::is('admin/orders/picked/*') ? 'active' : '' }}">
                <a href="{{ route('picked.orders') }}"><i class="ti-more"></i>已拣货</a>
            </li>
            <li class=" {{ Request::is('admin/orders/shipped/*') ? 'active' : '' }}">
                <a href="{{ route('shipped.orders') }}"><i class="ti-more"></i>运输中</a>
            </li>
            <li class=" {{ Request::is('admin/orders/delivered*') ? 'active' : '' }}">
                <a href="{{ route('delivered.orders') }}"><i class="ti-more"></i>已完成</a>
            </li>
            <li class=" {{ Request::is('admin/orders/cancel*') ? 'active' : '' }}">
                <a href="{{ route('cancel.orders') }}"><i class="ti-more"></i>已取消</a>
            </li>
            <li class=" {{ Request::is('admin/orders/return*') ? 'active' : '' }}">
                <a href="{{ route('return.orders') }}"><i class="ti-more"></i>已退回</a>
            </li>
        </ul>
    </li>

    <li class="treeview {{ ($prefix == '/slider') ? 'active' : '' }} hidden">
        <a href="#">
        <i data-feather="file"></i> <span>滑块</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" {{ ($route == '/slider') ? 'active' : '' }}">
                <a href="{{ route('slider.index') }}"><i class="ti-more"></i>管理滑块</a>
            </li>
        </ul>
    </li>

    <li class="treeview {{  (($prefix == '/coupons') ? 'active' : '') }}">
        <a href="#">
        <i data-feather="file"></i> <span>优惠券</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" {{ (Request::is('admin/coupons*')) ? 'active' : '' }}">
                <a href="{{ route('coupons.index') }}"><i class="ti-more"></i>管理优惠券</a>
            </li>
        </ul>
    </li>
    <li class="treeview {{ ($prefix == '/division') ? 'active' : '' }}">
        <a href="#">
        <i data-feather="file"></i> <span>送货地区管理</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" {{ (Request::is('admin/division*')) ? 'active' : '' }}">
                <a href="{{ route('division.index') }}"><i class="ti-more"></i>省级</a>
            </li>
            <li class=" {{ (Request::is('admin/district*')) ? 'active' : '' }}">
                <a href="{{ route('district.index') }}"><i class="ti-more"></i>市级</a>
            </li>
            <li class=" {{ (Request::is('admin/state*')) ? 'active' : '' }}">
                <a href="{{ route('state.index') }}"><i class="ti-more"></i>区级</a>
            </li>
        </ul>
    </li>

    <li class="header nav-small-cap">用户界面</li>

    <li class="treeview">
        <a href="#">
        <i data-feather="grid"></i>
        <span>组件</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="components_alerts.html"><i class="ti-more"></i>警报</a></li>
        <li><a href="components_badges.html"><i class="ti-more"></i>徽章</a></li>
        <li><a href="components_buttons.html"><i class="ti-more"></i>纽扣</a></li>
        <li><a href="components_sliders.html"><i class="ti-more"></i>滑块</a></li>
        <li><a href="components_dropdown.html"><i class="ti-more"></i>落下</a></li>
        <li><a href="components_modals.html"><i class="ti-more"></i>模态</a></li>
        <li><a href="components_nestable.html"><i class="ti-more"></i>可嵌套</a></li>
        <li><a href="components_progress_bars.html"><i class="ti-more"></i>进度条</a></li>
        </ul>
    </li>
    </ul>
</section>

{{-- <div class="sidebar-footer">
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
    <!-- item-->
    <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
    <!-- item-->
    <a href="{{ route('admin.logout') }}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
</div> --}}
</aside>
