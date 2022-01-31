<footer class="main-footer">
<div class="pull-right d-none d-sm-inline-block">
    <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
        <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">FAQ</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Purchase Now</a>
        </li>
    </ul>
</div>
    &copy; <span id="copy-year">2020</span> <a href="#">{{ env('SHOP_NAME') }} </a>. 版权所有。
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>