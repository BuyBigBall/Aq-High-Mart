{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

 	<form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="电子邮件" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="密码" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">记得我</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
						忘记密码了吗?
                    </a>
                @endif

                <x-jet-button class="ml-4">
					登录
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('frontend.frontend_master')

@section('frontend_content')
<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">登入</h4>
	<p class="">您好，欢迎使用您的帐户。</p>
	<div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> 使用 Facebook 登录</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> 使用推特登录</a>
	</div>
	<form class="register-form outer-top-xs" role="form" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}" method="POST">
        @csrf
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">电子邮件地址 <span>*</span></label>
		    <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
		@if( ! \Illuminate\Support\Facades\Session::has('register_flag')  )	
        @error('email')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
		@endif
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">密码 <span>*</span></label>
		    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
		</div>
		@if( ! \Illuminate\Support\Facades\Session::has('register_flag')  )	
        @error('password')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
		@endif
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="remember" id="optionsRadios2" value="option2">记得我！
		  	</label>
              @if (Route::has('password.request'))
		  	    <a href="{{ route('password.request') }}" class="forgot-password pull-right">忘记密码了吗？</a>
              @endif
            </div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">登录</button>
	</form>
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">创建一个新账户</h4>
	<p class="text title-tag-line">创建您的新帐户。</p>
	<form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('register') }}">
        @csrf
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2-email">电子邮件地址 <span>*</span></label>
	    	<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2-email">
	  	</div>
		  @if(\Illuminate\Support\Facades\Session::has('register_flag'))
          @error('email')
            <span class="alert text-danger">{{ $message }}</span>
          @enderror
		  @endif
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1-name">名称 <span>*</span></label>
		    <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1-name">
		</div>
        @error('name')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1-phone">电话号码 <span>*</span></label>
		    <input type="text" name="phone_number" class="form-control unicase-form-control text-input" id="exampleInputEmail1-phone">
		</div>
        @error('phone_number')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1-pwd">密码 <span>*</span></label>
		    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1-pwd">
		</div>
		@if(\Illuminate\Support\Facades\Session::has('register_flag')  )	
        @error('password')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
		@endif
		
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1-confirm">确认密码 <span>*</span></label>
		    <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="exampleInputEmail1-confirm">
		</div>
        @error('password_confirmation')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">注册</button>
	</form>

	<?php \Illuminate\Support\Facades\Session::forget('register_flag'); ?>
</div>
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!--  BRANDS CAROUSEL  -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{ asset('frontend') }}/assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->

</div><!-- /.logo-slider -->
<!--  BRANDS CAROUSEL : END  -->	</div><!-- /.container -->
</div>
@endsection
