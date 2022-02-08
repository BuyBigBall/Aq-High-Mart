<div>
    <style>
        .presentation a
        {
            cursor:pointer;
        }
        .product-image .image
        {
            max-height: 260px;
            overflow-y: hidden;
        }

        .prev, .next{
            cursor:pointer;
        }

        .list-inline li a {
            cursor:pointer;
        }
    </style>
    <div class="body-content outer-top-xs">
    <div class="container">
        <div class="row">
        <div class="col-md-3 sidebar"> 
            <!-- ================================== TOP NAVIGATION ================================== -->
            @include('frontend.frontend_layout.body.side-menu')
            <!-- /.side-menu --> 
            <!-- ================================== TOP NAVIGATION : END ================================== -->
            @include('frontend.frontend_layout.category_page.shop-by-widget')
            <!-- /.sidebar-module-container --> 
        </div>
        <!-- /.sidebar -->
        <div class="col-md-9"> 
            <!-- ========================================== SECTION – HERO ========================================= -->
            
            <div id="category" class="category-carousel hidden-xs">
            <div class="item">
                <div class="image"> <img src="{{ asset('frontend') }}/assets/images/banners/cat-banner-1.jpg" alt="" class="img-responsive"> </div>
                <div class="container-fluid">
                <div class="caption vertical-top text-left">
                    <div class="big-text"> 大热卖 </div>
                    <div class="excerpt hidden-sm hidden-md"> 节省高达 49% 的折扣 </div>
                    <div class="excerpt-normal hidden-sm hidden-md"> 痛苦本身就是爱，主要客户 </div>
                </div>
                <!-- /.caption --> 
                </div>
                <!-- /.container-fluid --> 
            </div>
            </div>
            
        
            <div class="clearfix filters-container m-t-10">
            <div class="row">
                <div class="col col-sm-6 col-md-2">
                <div class="filter-tabs">
                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                    <li @if($view_mode=='gridview') class="active" @endif wire:click="setviewmode('gridview')"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>网格</a> </li>
                    <li @if($view_mode!='gridview') class="active" @endif wire:click="setviewmode('listview')"> <a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list "></i>列表</a> </li>
                    </ul>
                </div>
                <!-- /.filter-tabs --> 
                </div>
                <!-- /.col -->
                <div class="col col-sm-12 col-md-6">
                <div class="col col-sm-4 col-md-8 no-padding">
                    <div class="lbl-cnt"> <span class="lbl-order">排序</span>
                    <div class="fld inline">
                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle order-text"> 登记顺序 <span class="caret"></span> </button>
                            <ul role="menu" class="dropdown-menu" wire:model="SortOrder">
                                <li class="presentation"><a wire:click="setOrder(1)">登记顺序</a></li>
                                <li class="presentation"><a wire:click="setOrder(2)">价格顺：最低优先</a></li>
                                <li class="presentation"><a wire:click="setOrder(3)">价格顺：最高优先</a></li>
                                <li class="presentation"><a wire:click="setOrder(4)">名称顺序</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.fld --> 
                    </div>
                    <!-- /.lbl-cnt --> 
                </div>
                <!-- /.col -->
                <input type="hidden" wire:model="curPage"  id="curPage"/>
                <input type="hidden" wire:model="lastPage" id="lastPage"/>
                <div class="col col-sm-2 col-md-4 no-padding @if( $pagination->lastPage()<=1) hidden @endif">
                    <div class="lbl-cnt"> <span class="lbl">显示</span>
                    <div class="fld inline">
                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                        <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> {{ $pagination->currentPage() }} <span class="caret"></span> </button>
                        <ul role="menu" class="dropdown-menu">
                            @for($i=0; $i<$pagination->lastPage(); $i++)
                            <li class="presentation"><a 
                                wire:click="gotoPage({{$i+1}}, 'page')" 
                                >{{ $i+1 }}</a></li>
                            @endfor
                        </ul>
                        </div>
                    </div>
                    <!-- /.fld --> 
                    </div>
                    <!-- /.lbl-cnt --> 
                </div>
                <!-- /.col --> 
                </div>
                <!-- /.col -->
                <div class="col col-sm-6 col-md-4 text-right">
                <div class="pagination-container @if( $pagination->lastPage()<=1) hidden @endif">
                    <ul class="list-inline list-unstyled">
                    <li class="prev"><a onclick="previousPage()" ><i class="fa fa-angle-left"></i></a></li>
                    <?php if($pagination->currentPage()<=2) $i=0;
                          else $i=$pagination->currentPage()-2;  ?>
                    @for(; $i< $pagination->lastPage(); $i++)
                        @if($i<$pagination->currentPage()+3)
                            <li @if($i+1==$pagination->currentPage()) class="active" @endif><a 
                                wire:click="gotoPage({{$i+1}}, 'page')" 
                            >{{ $i+1 }}</a></li>
                        @endif
                    @endfor
                    
                    <li class="next"><a onclick="nextPage()"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <!-- /.list-inline --> 
                </div>
                <!-- /.pagination-container --> </div>
                <!-- /.col --> 
            </div>
            <!-- /.row --> 
            <span style="display:none;">{{ $pagination->links() }}</span>
            </div>
            <div class="search-result-container ">
            <div id="myTabContent" class="tab-content category-list">
                <div class="tab-pane @if($view_mode=='gridview') active @endif" id="grid-container">
                <div class="category-product">
                    <div class="row">

                    @foreach($pagination as $product)
                    <?php $mark = product_tag_name($product); ?>
                    <div class="col-sm-6 col-md-4 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="products">
                        <div class="product">
                            <div class="product-image">
                            <div class="image"> <a href="detail.html"><img src="{{ $product->product_thumbnail }}" alt=""></a> </div>
                            <!-- /.image -->
                            @if( !empty($mark) )
                            <div class="tag new"><span>{{ $mark }}</span></div>
                            @endif
                            </div>
                            <!-- /.product-image -->
                            
                            <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">{{ $product->product_name_bn }}</a></h3>
                            <div class="rating rateit-small rateit"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> {{ $product->selling_price }}元 </span> <span class="price-before-discount">{{ $product->selling_price }}元</span> </div>
                            <!-- /.product-price --> 
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">添加到购物车</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li> -->
                                </ul>
                            </div>
                            <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                        </div>
                        <!-- /.products --> 
                    </div>
                    <!-- /.item -->
                    @endforeach

                    </div>
                    <!-- /.row --> 
                </div>
                <!-- /.category-product --> 
                
                </div>
                <!-- /.tab-pane -->
                
                <div class="tab-pane @if($view_mode!='gridview') active @endif" id="list-container">
                <div class="category-product">
                    @foreach($pagination as $product)
                    <?php $mark = product_tag_name($product); ?>
                    <div class="category-product-inner wow fadeInUp animated" 
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="products">
                        <div class="product-list product">
                            <div class="row product-list-row">
                            <div class="col col-sm-4 col-lg-4">
                                <div class="product-image">
                                <div class="image"> <img src="{{ $product->product_thumbnail }}" alt=""> </div>
                                </div>
                                <!-- /.product-image --> 
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-8 col-lg-8">
                                <div class="product-info">
                                <h3 class="name"><a href="detail.html">{{ $product->product_name_bn }}</a></h3>
                                <div class="rating rateit-small rateit"></div>
                                <div class="product-price"> <span class="price"> {{ $product->selling_price }}元 </span> <span class="price-before-discount">{{ $product->discount_price }}元</span> </div>
                                <!-- /.product-price -->
                                <div class="description m-t-10">{{ $product->short_description_bn }}</div>
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                        <button class="btn btn-primary cart-btn" type="button">添加到购物车</button>
                                        </li>
                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                        <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li> -->
                                    </ul>
                                    </div>
                                    <!-- /.action --> 
                                </div>
                                <!-- /.cart --> 
                                
                                </div>
                                <!-- /.product-info --> 
                            </div>
                            <!-- /.col --> 
                            </div>
                            <!-- /.product-list-row -->
                            @if( !empty($mark) )
                            <div class="tag new"><span>{{ $mark }}</span></div>
                            @endif
                        </div>
                        <!-- /.product-list --> 
                        </div>
                        <!-- /.products --> 
                    </div>
                    @endforeach
                    <!-- /.category-product-inner -->
                </div>
                <!-- /.category-product --> 
                </div>
                <!-- /.tab-pane #list-container --> 
            </div>
            <!-- /.tab-content -->

            <div class="clearfix filters-container">
                <div class="text-right">
                <div class="pagination-container @if( $pagination->lastPage()<=1) hidden @endif">
                    <ul class="list-inline list-unstyled">
                    <li class="prev"><a onclick="previousPage()" ><i class="fa fa-angle-left"></i></a></li>
                    <?php if($pagination->currentPage()<=2) $i=0;
                          else $i=$pagination->currentPage()-2;  ?>
                    @for(; $i< $pagination->lastPage(); $i++)
                        @if($i<$pagination->currentPage()+3)
                            <li @if($i+1==$pagination->currentPage()) class="active" @endif><a 
                                wire:click="gotoPage({{$i+1}}, 'page')" 
                            >{{ $i+1 }}</a></li>
                        @endif
                    @endfor
                    
                    <li class="next"><a onclick="nextPage()"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <!-- /.list-inline --> 
                </div>
                <!-- /.pagination-container --> </div>
                <!-- /.text-right --> 
                
            </div>
            <!-- /.filters-container --> 
            
            </div>
            <!-- /.search-result-container --> 
            
        </div>
        <!-- /.col --> 
        </div>
        <!-- /.row --> 
        <!--  BRANDS CAROUSEL  -->
        @include('frontend.frontend_layout.home_page.brands-carousel')
        <!-- /.logo-slider --> 
        <!--  BRANDS CAROUSEL : END  --> 
    </div>
    <!-- /.container --> 
    
    </div>
    <script>
        function setOrder(evt, obj, orderNum)
        {
            window.livewire.emit('setOrder', orderNum)
            $('.order-text').html( $(obj).text() + ' <span class="caret"></span> ' );
        }
        function previousPage()
        {
            $("button[dusk='previousPage.before']").trigger('click');
        }
        function nextPage()
        {
            $("button[dusk='nextPage.before']").trigger('click');
        }
    </script>
</div>
