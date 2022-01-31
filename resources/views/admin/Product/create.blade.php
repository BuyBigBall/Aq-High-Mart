@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '产品',
    'url' => "products.index",
    'section_name' => '创建产品'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Category Page --}}
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">添加新产品</h3>
                        <a href="{{ route('subsubcategories.index') }}" class="btn btn-primary">返回列表产品</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- First row start--}}
                            <h5 class="text-warning">产品相关类别和品牌选择区</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>品牌 <span class="text-danger">*</span></h5>
                                        <select class="custom-select" aria-label="默认选择示例" name="brand_id">
                                            <option selected>选择品牌名称</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->brand_name_bn }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>分类名称 <span class="text-danger">*</span></h5>
                                        <select class="custom-select" aria-label="Default select example" name="category_id">
                                            <option selected>选择类别名称</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name_bn }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>子类别名称 <span class="text-danger">*</span></h5>
                                        <select class="custom-select" name="subcategory_id" aria-label="Default select example">
                                            <option value="" selected="" disabled="">选择子类别名称</option>
                                        </select>
                                        @error('subcategory_id')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>子子类别名称 <span class="text-danger">*</span></h5>
                                        <select class="custom-select" name="sub_subcategory_id" aria-label="Default select example">
                                            <option value="" selected="" disabled="">选择子子类别名称</option>
                                        </select>
                                        @error('sub_subcategory_id')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- First row end --}}
                            <h5 class="text-warning mt-4">产品基本信息区</h5>
                            <hr>
                            {{-- Second row start --}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>产品名称<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_name_bn" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('product_name_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>产品 SKU 代码 # <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_code" class="form-control"> <div class="help-block"></div>
                                        </div>
                                        @error('product_code')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>产品蛞蝓 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_slug_bn" class="form-control" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('product_slug_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>产品数量 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="number" name="product_qty" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('product_qty')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Second row end --}}
                            <h5 class="text-warning mt-4">产品标签、尺寸、颜色信息区</h5>
                            <hr>
                            {{-- Third row start --}}
                            <div class="row">
                                <div class="col-md-2 hidden">
                                    <div class="form-group">
                                        <h5>Product Tag EN <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_tags_en" class="form-control" value="lorem, Ipsum, Amet" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        @error('product_tags_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>产品标签<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_tags_bn" class="form-control" value="lorem, Ipsum, Amet" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        @error('product_tags_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group hidden">
                                        <h5>Product Size EN <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_size_en" class="form-control" value="small,medium,large" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        @error('product_size_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>产品尺寸<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_size_bn" class="form-control" value="small,medium,large" data-role="tagsinput">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('product_size_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2 hidden">
                                    <div class="form-group">
                                        <h5>Product Color EN <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_color_en" class="form-control" value="red,green,blue" data-role="tagsinput">
                                            <div class="help-block"></div>
                                        </div>
                                        @error('product_color_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>产品颜色 <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_color_bn" class="form-control" value="red,green,blue" data-role="tagsinput"><div class="help-block"></div>
                                        </div>
                                        @error('product_color_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Third row end --}}
                            <h5 class="text-warning mt-4">产品定价信息区</h5>
                            <hr>
                            {{-- Fourth row start --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>购买价格<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="number" name="purchase_price" class="form-control"> <div class="help-block"></div>
                                        </div>
                                        @error('purchase_price')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>售价 <span class="text-danger">*</span></h5>
                                        <div class="controls input-group mb-3">
                                            <span class="input-group-text hidden">$0.00</span>
                                            <input type="number" name="selling_price" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('selling_price')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>折扣价<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="number" name="discount_price" class="form-control"
                                            > <div class="help-block"></div>
                                        </div>
                                        @error('discount_price')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Fourth row end --}}
                            <h5 class="text-warning mt-4">产品描述区</h5>
                            <hr>
                            {{-- Fifth row start --}}
                            <div class="row">
                                <div class="col-md-12 hidden">
                                    <div class="form-group">
                                        <h5>Short Description EN <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="short_description_en" id="editor1" cols="30" rows="5" class="form-control"></textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        @error('short_description_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>简短描述<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="short_description_bn" id="editor2" cols="30" rows="5" class="form-control"></textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        @error('short_description_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Fifth row end --}}
                            {{-- Sixth row start --}}
                            <div class="row">
                                <div class="col-md-12 hidden">
                                    <div class="form-group">
                                        <h5>Long Description EN <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="long_description_en" id="editor3" cols="30" rows="5" class="form-control"></textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        @error('long_description_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>详细说明<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="long_description_bn" id="editor4" cols="30" rows="5" class="form-control"></textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        @error('long_description_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Sixth row end --}}
                            <h5 class="text-warning mt-4">产品图片上传区</h5>
                            <hr>
                            {{-- Seventh row start --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>产品缩略图<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="product_thumbnail" class="form-control" required="" data-validation-required-message="这是必填栏"
                                            onChange="mainThumbnailShow(this)"> <div class="help-block"></div>
                                        </div>
                                        @error('product_thumbnail')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        <img src="" id="mainThumbnail" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>产品多张图片 <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="file" name="product_images[]" class="form-control"  multiple="" id="multiImg" > <div class="help-block"></div>
                                        </div>
                                        @error('product_images')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="row" id="preview_img"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- Seventh row end --}}
                            {{-- Eighth row start --}}
                            <h5 class="text-warning mt-4">产品附加信息区</h5>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="hot_deals" name="hot_deals" value="1">
                                        <label class="form-check-label" for="hot_deals">热卖</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="featured" name="featured" value="1">
                                        <label class="form-check-label" for="featured">精选</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="new_arrival" name="new_arrival" checked value="1">
                                        <label class="form-check-label" for="new_arrival">新品</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="special_offer" name="special_offer" value="1">
                                        <label class="form-check-label" for="special_offer">特价</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="special_deals" name="special_deals" value="1">
                                        <label class="form-check-label" for="special_deals">特别优惠</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="status" name="status" checked value="1">
                                        <label class="form-check-label" for="status">活动状态</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">添加产品</button>
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
    $(document).ready(function() {
      $('select[name="category_id"]').on('change', function(){
          var category_id = $(this).val();
          if(category_id) {
              $.ajax({
                  url: "{{  url('/admin/category/subcategory/ajax') }}/"+category_id,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                    $('select[name="sub_subcategory_id"]').html('');
                     var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_bn + '</option>');
                        });
                  },
              });
          } else {
              alert('danger');
          }
      });
      $('select[name="subcategory_id"]').on('change', function(){
          var subcategory_id = $(this).val();
          if(subcategory_id) {
              $.ajax({
                  url: "{{  url('/admin/category/subsubcategory/ajax') }}/"+subcategory_id,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                     var d =$('select[name="sub_subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="sub_subcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_bn + '</option>');
                        });
                  },
              });
          } else {
              alert('danger');
          }
      });
      $(document).ready(function(){
    $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
    });
  });
</script>
<script type="text/javascript">
    function mainThumbnailShow(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThumbnail').attr('src', e.target.result).width(80).height(80);
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
