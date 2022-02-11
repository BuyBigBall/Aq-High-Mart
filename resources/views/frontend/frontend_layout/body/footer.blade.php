<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
                <h4 class="module-title">联系咨询信息</h4>
            </div>
            <!-- /.module-heading -->
            
            <div class="module-body">
                <ul class="toggle-footer" style="">
                <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                    <p><a href="https://map.baidu.com" style="line-height:1.75rem;">ThemesGround, 789 Main rd, Anytown, CA 12345 USA</a></p>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                    <p> <a href="tel:888-123-4567" style="line-height:1.85rem;">+(888) 123-4567</a>
                        <a href="tel:888-456-7890" style="line-height:1.85rem;">+(888) 456-7890</a></p>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body"> <span><a href="email:flipmart@themesground.com">flipmart@themesground.com</a></span> </div>
                </li>
                </ul>
            </div>
            <!-- /.module-body --> 
            </div>
            <!-- /.col -->
            
            <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
                <h4 class="module-title">帮助中心</h4>
            </div>
            <!-- /.module-heading -->
            
            <div class="module-body">
                <ul class='list-unstyled'>
                <li class="first"><a href="{{ route('contactus') }}" title="联系我们">我的帐户</a></li>
                <li><a href="{{ route('user.orders') }}" title="关于我们">订单历史</a></li>
                <li><a href="{{ route('faq') }}" title="常问问题">常问问题</a></li>
                <li><a href="{{ route('specials') }}" title="热门搜索">特价商品</a></li>
                <li class="last"><a href="{{ route('help') }}" title="我的订单在哪里?">帮助中心</a></li>
                </ul>
            </div>
            <!-- /.module-body --> 
            </div>
            <!-- /.col -->
            
            <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
                <h4 class="module-title">公司信息</h4>
            </div>
            <!-- /.module-heading -->
            
            <div class="module-body">
                <ul class='list-unstyled'>
                <li class="first" ><a title="您的帐户"   href="{{ route('aboutus') }}" >关于我们</a></li>
                <li               ><a title="客户服务"   href="{{ route('services') }}">客户服务</a></li>
                <li               ><a title="公司地址"   href="{{ route('company') }}" >公司地址</a></li>
                <li               ><a title="投资者关系" href="{{ route('invester') }}">投资者关系</a></li>
                <li class="last"  ><a title="订单历史"   href="{{ route('advanced') }}">高级搜索</a></li>
                </ul>
            </div>
            <!-- /.module-body --> 
            </div>
            <!-- /.col -->
            
            <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
                <h4 class="module-title">为什么选择我们</h4>
            </div>
            <!-- /.module-heading -->
            
            <div class="module-body">
                <ul class='list-unstyled'>
                <li class="first"><a href="{{ route('howtouse') }}" title="关于我们">购物指南</a></li>
                <li             ><a  href="{{ route('blog') }}" title="博客">博客</a></li>
                <li             ><a  href="{{ route('company') }}" title="公司">公司</a></li>
                <li             ><a  href="{{ route('invester') }}" title="投资者关系">投资者关系</a></li>
                <li class="last"><a  href="{{ route('consultation') }}" title="供应商">联系咨询信息</a></li>
                </ul>
            </div>
            <!-- /.module-body --> 
            </div>
        </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
        <div class="col-xs-12 col-sm-6 no-padding social">
            <ul class="link">
            <li class="fb pull-left"><a target="_blank" rel="nofollow" href="//facebook.com" title="Facebook"></a></li>
            <li class="tw pull-left"><a target="_blank" rel="nofollow" href="//twitter.com" title="Twitter"></a></li>
            <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="//google.com" title="GooglePlus"></a></li>
            <li class="rss pull-left"><a target="_blank" rel="nofollow" href="//rss.com/" title="RSS"></a></li>
            <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="//pinterest.com" title="PInterest"></a></li>
            <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="//www.linkedin.com" title="Linkedin"></a></li>
            <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="//youtube.com" title="Youtube"></a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 no-padding">
            <div class="clearfix payment-methods">
            <ul>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/1.png" alt=""></li>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/2.png" alt=""></li>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/3.png" alt=""></li>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/4.png" alt=""></li>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/5.png" alt=""></li>
            </ul>
            </div>
            <!-- /.payment-methods --> 
        </div>
        </div>
    </div>
</footer>