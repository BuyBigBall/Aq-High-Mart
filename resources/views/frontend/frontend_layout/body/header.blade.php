<header class="header-style-1">
    <!--  TOP MENU  -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        @auth
                            <!-- <li><a href="{{ route('checkout-page') }}"><i class="icon fa fa-check"></i>买单</a></li> -->
                            <!-- <li><a href="{{ route('dashboard') }}"><i class="icon fa fa-user"></i>我的帐户</a></li> -->
                            <li><a href="{{ route('dashboard') }}"><i class="icon fa fa-rmb"></i>我的余额 : {{Auth::user()->money}}元 / {{Auth::user()->point}}点</a></li>
                        @endauth
                        <!-- <li><a href="{{ route('listWishlist') }}"><i class="icon fa fa-heart"></i>收藏夹</a></li> -->
                        <li><a href="{{ route('myCartView') }}"><i class="icon fa fa-shopping-cart"></i>购物车</a></li>

                        <li>
                            @auth
                                <a href="{{ route('user.logout') }}"><i class="icon fa fa-user"></i>登出</a>
                            @else
                                <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i> 登录/免费注册</a>
                            @endauth
                        </li>
                    </ul>
                </div>
                <!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small hidden"> <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">RMB</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-small hidden"> <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                data-toggle="dropdown"><span class="value">
                                    @if (session()->get('language') == 'english')
                                        English
                                    @else
                                        中文
                                    @endif
                                </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                @if (session()->get('language') == 'english')
                                    <li><a href="{{ route('chinese.language') }}">中文</a></li>
                                @else
                                <li><a href="{{ route('english.language') }}">English</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                    <!-- /.list-unstyled -->
                </div>
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!--  TOP MENU : END  -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!--  LOGO  -->
                    <div class="logo"> <a href="{{ route('home') }}"> <img
                                src="{{ asset('frontend') }}/assets/images/logo.png" alt="logo"> </a> </div>
                    <!-- /.logo -->
                    <!--  LOGO : END  -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!--  SEARCH AREA  -->
                    <div class="search-area">
                        <form method="post" id="searchForm" action="{{ route('search') }}">
                            @csrf
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle" 
                                        id="selected_category"
                                        sel_cate_id = '{{ $selcateid ?? 0 }}'
                                        style="cursor:pointer;"
                                        data-toggle="dropdown"
                                            >{{ $selcatename ?? '分类' }} <b class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <!-- <li class="menu-header">Computer</li> -->
                                            <!-- <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Clothing</a></li> -->
                                            <li class="menu-header"><a role="menuitem" tabindex="-1"
                                                    cateid="0"
                                                    style="cursor:pointer;"
                                                    onclick="category_click(this)"
                                                    >分类</a></li>
                                            <?php if(!!empty($categories)) $categories=[]; ?>
                                            @foreach ($categories as $category)
                                                <li role="presentation" 
                                                    style="padding-left:10px;"><a class="menuitem" role="menuitem" tabindex="0"
                                                    cateid="{{ $category->id }}"
                                                    onclick="category_click(this)" > {{ $category->category_name_bn }}</a></li>
                                                    {{-- href=" route('category', $category->id)  " --}}
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" required="" name="word" placeholder="你要买什么..." value="{{ $searchword ?? '' }}" />
                                <input type="hidden" name="cateid" id="hSelCateid" value="{{ $selcateid ?? 0 }}" />
                                <!-- <div class="invalid-feedback">请输入搜索词</div> -->
                                <a class="search-button" href="javascript:search( this );"></a>
                            </div>
                        </form>
                    </div>
                    <!-- /.search-area -->
                    <!--  SEARCH AREA : END  -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!--  SHOPPING CART DROPDOWN  -->

                    <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                            data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                                <div class="basket-item-count"><span class="count" id="cartQty"></span></div>
                                <div class="total-price-basket"> <span class="lbl">购物车 -</span>
                                    <span class="total-price">
                                        <span class="value" id="cartSubTotal"  style="min-width:3rem;">0</span>
                                        <span class="sign">元</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                {{-- mini cart start with AJAX START --}}

                                {{-- @include('frontend.frontend_layout.body.mini_cart') --}}
                                <div id="miniCart">

                                </div>
                                {{-- mini cart start with AJAX END --}}

                                <div class="clearfix cart-total">
                                    <div class="pull-right"> <span class="text">小计 :</span class="sign"><span
                                            class='price' id="cartSubTotal"></span>元 </div>
                                    <div class="clearfix"></div>

                                    <a href="{{ route('checkout-page') }}" class="btn btn-upper btn-primary btn-block m-t-20">结帐</a>

                                </div>
                                <!-- /.cart-total-->

                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!--  SHOPPING CART DROPDOWN : END -->

                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!--  NAVBAR  -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw"> <a href="{{ route('home') }}"
                                        data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                                        @if (session()->get('language') == 'english')
                                            Home
                                        @else
                                            首页
                                        @endif
                                    </a>
                                </li>
                                @php
                                    $categories = \App\Models\Category::with(['subcategory', 'subsubcategory', 'products'])->orderBy('category_name_en', 'ASC')->get();
                                @endphp
                                @foreach ($categories as $category)
                                    @if ($loop->index > 4)
                                        @php
                                            continue;
                                        @endphp
                                    @endif
                                    <li class="dropdown yamm mega-menu"> <a href="" data-hover="dropdown"
                                            class="dropdown-toggle" data-toggle="dropdown">
                                            @if (session()->get('language') == 'english')
                                                {{ $category->category_name_en }}
                                            @else
                                                {{ $category->category_name_bn }}
                                            @endif
                                        </a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row d-flex justify-content-between align-items-center">
                                                        @foreach ($category->subcategory as $subcategory)
                                                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                                <h2 class="title">
                                                                    <a
                                                                        href="{{ route('subcategory.products', ['id' => $subcategory->id, 'slug' => $subcategory->subcategory_slug_bn]) }}">
                                                                        @if (session()->get('language') == 'english')
                                                                            {{ $subcategory->subcategory_name_en }}
                                                                        @else
                                                                            {{ $subcategory->subcategory_name_bn }}
                                                                        @endif
                                                                    </a>
                                                                </h2>
                                                                <ul class="links">
                                                                    @foreach ($subcategory->subsubcategory as $subsubcategory)
                                                                        <li><a
                                                                                href="{{ route('subsubcategory.products', ['id' => $subsubcategory->id, 'slug' => $subsubcategory->subsubcategory_slug_bn]) }}">
                                                                                @if (session()->get('language') == 'english')
                                                                                    {{ $subsubcategory->subsubcategory_name_en }}
                                                                                @else
                                                                                    {{ $subsubcategory->subsubcategory_name_bn }}
                                                                                @endif
                                                                            </a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <!-- /.col -->
                                                        @endforeach
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive"
                                                                src="{{ asset($category->category_image) }}"
                                                                {{-- src="{{ asset('frontend') }}/assets/images/banners/top-menu-banner.jpg" --}} alt="">
                                                        </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @endforeach
                                <!-- <li class="dropdown  navbar-right special-menu"> <a href="#">今日优惠</a> </li> -->
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!--  NAVBAR : END  -->
    <script>
        function category_click(obj)
        {
            $('#selected_category').attr('sel_cate_id', $(obj).attr("cateid") );
            $(obj).parent().parent().parent().children("a.dropdown-toggle")[0].innerHTML = $(obj).html();
            var sel_cate_id = $('#selected_category').attr('sel_cate_id');
        }
        function search( obj )
        {
            //console.log($(obj).closest("form"));
            //$(obj).closest("form").submit();
            var sel_cate_id = $('#selected_category').attr('sel_cate_id');
            if( !$('.search-field').val() && !sel_cate_id )
            {
                alert("请输入搜索词或选择类别。");
                return;
            }
            $('#hSelCateid').val(sel_cate_id);
            $("#searchForm").submit();
        }
        </script>
</header>
