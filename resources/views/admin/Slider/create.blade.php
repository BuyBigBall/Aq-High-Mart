@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '滑块',
    'url' => "slider.index",
    'section_name' => '添加新滑块'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Slider Page --}}
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">添加新滑块</h3>
                        <a href="{{ route('slider.index') }}" class="btn btn-primary">返回滑块列表</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h4 class="text-warning">滑块图像状态栏</h4>
                            <hr ><hr>
                            <div class="form-group mb-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"
                                    id="status" name="slider_status" value="1" checked>
                                    <label class="form-check-label" for="status">活动状态</label>
                                </div>
                            </div>
                            <h4 class="text-warning">滑块图像信息</h4>
                            <hr><hr>
                            <div class="form-group">
                                <h5>滑块名称 <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="slider_name" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('slider_name')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>滑块标题 <span class="text-danger"></span></h5>
                                <div class="controls">
                                    <input type="text" name="slider_title" class="form-control">
                                    <div class="help-block"></div>
                                </div>
                                @error('slider_title')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                                <div class="form-group">
                                    <h5>滑块说明<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <textarea name="slider_description" id="editor5" cols="30" rows="5" class="form-control"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    @error('slider_description')
                                        <span class="alert text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            <h4 class="text-warning">上传滑块单张图片</h4>
                            <hr><hr>
                            <div class="form-group">
                                <h5>滑块图像 <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="slider_image" class="form-control" required="" data-validation-required-message="这是必填栏"
                                    onchange="sliderShow(this)"> <div class="help-block"></div>
                                </div>
                                @error('slider_image')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                                <img src="" id="sliderImage" alt="">
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    @section('dashboard_script')
    <script type="text/javascript">
        function sliderShow(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#sliderImage').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="{{ asset('') }}assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
    <script src="{{ asset('') }}assets/vendor_components/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('') }}assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
    <script src="{{ asset('backend') }}/js/pages/editor.js"></script>
    @endsection
@endsection
