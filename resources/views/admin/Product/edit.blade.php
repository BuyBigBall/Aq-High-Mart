@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '产品',
    'url' => "products.index",
    'section_name' => '编辑产品'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Category Page --}}
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">更新产品</h3>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">返回列表产品</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('products.update', $product) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            {{-- First row start--}}
                            <h5 class="text-warning">产品相关类别和品牌选择区</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>品牌 <span class="text-danger">*</span></h5>
                                        <select class="custom-select" aria-label="Default select example" name="brand_id">
                                            <option selected>选择品牌名称</option>
                                            @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected': '' }} >{{ $brand->brand_name_en }}</option>
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
                                                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->category_name_en }}</option>
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
                                            @foreach($subcategories as $sub)
                                                <option value="{{ $sub->id }}" {{ $sub->id == $product->subcategory_id ? 'selected': '' }} >{{ $sub->subcategory_name_en }}</option>
			                                @endforeach
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
                                            <option value="" selected="" disabled="">选择 子子类别名称</option>
                                            @foreach($subsubcategories as $subsub)
                                            <option value="{{ $subsub->id }}" {{ $subsub->id == $product->sub_subcategory_id ? 'selected': '' }} >{{ $subsub->subsubcategory_name_en }}</option>
                                            @endforeach
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
                                <div class="col-md-12 hidden">
                                    <div class="form-group">
                                        <h5>产品名称 EN <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_name_en" value="{{ old('product_name_en', $product->product_name_en) }}"
                                            class="form-control" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('product_name_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>产品名称<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_name_bn" value="{{ old('product_name_bn', $product->product_name_bn) }}"
                                            class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('product_name_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>产品 SKU 代码 # <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_code" class="form-control"
                                            value="{{ old('product_code', $product->product_code) }}"> <div class="help-block"></div>
                                        </div>
                                        @error('product_code')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>产品数量 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="number" name="product_qty" value="{{ old('product_qty', $product->product_qty) }}"
                                            class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
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
                                            <input type="text" name="product_tags_en" value="{{ old('product_tags_en', $product->product_tags_en) }}"
                                            class="form-control" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        @error('product_tags_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>产品标签 <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_tags_bn" value="{{ old('product_tags_bn', $product->product_tags_bn) }}"
                                            class="form-control" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        @error('product_tags_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2 hidden">
                                    <div class="form-group">
                                        <h5>Product Size EN <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_size_en" value="{{ old('product_size_en', $product->product_size_en) }}"
                                            class="form-control" data-role="tagsinput"> <div class="help-block"></div>
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
                                            <input type="text" name="product_size_bn" value="{{ old('product_size_bn', $product->product_size_bn) }}"
                                            class="form-control" data-role="tagsinput">
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
                                            <input type="text" name="product_color_en" value="{{ old('product_color_en', $product->product_color_en) }}"
                                            class="form-control" data-role="tagsinput">
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
                                            <input type="text" name="product_color_bn" value="{{ old('product_color_bn', $product->product_color_bn) }}"
                                            class="form-control" data-role="tagsinput"><div class="help-block"></div>
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
                                        <h5>购买价格 <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="number" name="purchase_price" value="{{ old('purchase_price', $product->purchase_price) }}"
                                            class="form-control"> <div class="help-block"></div>
                                        </div>
                                        @error('purchase_price')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>售价 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <span class="input-group-text hidden">$0.00</span>
                                            <input type="number" name="selling_price" value="{{ old('selling_price', $product->selling_price) }}"
                                            class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                        </div>
                                        @error('selling_price')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>折扣价 <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="number" name="discount_price"  value="{{ old('discount_price', $product->discount_price) }}"
                                            class="form-control"
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
                                            <textarea name="short_description_en" id="editor1" cols="30" rows="5" class="form-control">
                                                {{ old('short_description_en', $product->short_description_en) }}
                                            </textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        @error('short_description_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>简短描述 <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="short_description_bn" id="editor2" cols="30" rows="5" class="form-control">
                                                {{ old('short_description_bn', $product->short_description_bn) }}
                                            </textarea>
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
                                            <textarea name="long_description_en" id="editor3" cols="30" rows="5" class="form-control">
                                                {{ old('long_description_en', $product->long_description_en) }}
                                            </textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        @error('long_description_en')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>详细描述 <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="long_description_bn" id="editor4" cols="30" rows="5" class="form-control">
                                                {{ old('long_description_bn', $product->long_description_bn) }}
                                            </textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        @error('long_description_bn')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Sixth row end --}}
                            <h5 class="text-warning mt-4">产品图片上传</h5>
                            <hr>
                            {{-- Seventh row start --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>产品缩略图 <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="product_thumbnail" class="form-control"
                                            onChange="mainThumbnailShow(this)"> <div class="help-block"></div>
                                        </div>
                                        @error('product_thumbnail')
                                            <span class="alert text-danger">{{ $message }}</span>
                                        @enderror
                                        <img src="{{ asset($product->product_thumbnail) }}" id="mainThumbnail" alt="">
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
                                        <input class="form-check-input" type="checkbox"
                                        id="new_arrival" name="new_arrival" {{ $product->new_arrival == 1 ? 'checked': '' }} value="1">
                                        <label class="form-check-label" for="new_arrival">新品</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="hot_deals" name="hot_deals" value="1" {{ $product->hot_deals == 1 ? 'checked': '' }}>
                                        <label class="form-check-label" for="hot_deals">热销</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="featured" name="featured" value="1" {{ $product->featured == 1 ? 'checked': '' }}>
                                        <label class="form-check-label" for="featured">精选</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="special_offer" name="special_offer" value="1" {{ $product->special_offer == 1 ? 'checked': '' }}>
                                        <label class="form-check-label" for="special_offer">特价</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="special_deals" name="special_deals" value="1" {{ $product->special_deals == 1 ? 'checked': '' }}>
                                        <label class="form-check-label" for="special_deals">特别优惠</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="status" name="status" checked value="1" {{ $product->status == 1 ? 'checked': '' }}>
                                        <label class="form-check-label" for="status">活动状态</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">更新产品</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">更新产品多图</h3>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">返回列表产品</a>
                    </div>
                    <div class="box-body">
                        <form method="POST" action="{{ route('update-product-image') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row row-sm">
                                @foreach($product->images as $img)
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset($img->photo_name) }}" class="card-img-top" style="height: 100px; width: 100px;">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                            <a href="{{ route('delete-multiimage', $img->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i> </a>
                                            </h5>
                                        <p class="card-text">
                                            <div class="form-group">
                                                <label class="form-control-label">Change Image 
                                                    <!-- <span class="tx-danger" style="color:red;">*</span> -->
                                            </label>
                                                <input class="form-control" type="file"
                                            name="multi_img[ {{ $img->id }} ]">
                                            </div>
                                        </p>
                                        </div>
                                    </div>
                                </div><!--  end col md 3		 -->
                                @endforeach
                                <div class="col-md-12">
                                    <div class="card">
                                        <img src="" class="card-img-top hidden" style="height: 100px; width: 100px;">
                                        <div class="card-body">
                                            <h5 class="card-title hidden">
                                                <a href="" class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i> </a>
                                            </h5>
                                        <p class="card-text">
                                            <div class="form-group">
                                                <label class="form-control-label">添加图片 <span class="tx-danger" style="color:red;">*</span></label>
                                                <input class="form-control" type="file" name="multi_img[0]">
                                            </div>
                                        </p>
                                        </div>
                                    </div>
                                </div><!--  end col md 3		 -->                                
                            </div>
                            <div class="text-xs-right">
                                <input type="hidden" value="{{ $product->id }}" id="hProduct_Id" name="product_id" />
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="更新图像">
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
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
                            $('select[name="sub_subcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
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
