@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '子类别',
    'url' => "subcategories.index",
    'section_name' => '创建子类别'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Category Page --}}
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">添加新的子类别</h3>
                        <a href="{{ route('subcategories.index') }}" class="btn btn-primary">返回列表子类别</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('subcategories.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h5>子类别名称<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="subcategory_name_bn" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('subcategory_name_bn')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>类别名称 <span class="text-danger">*</span></h5>
                                {{-- <div class="controls">
                                    <input type="file" name="category_image" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div> --}}
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
                            <div class="form-group">
                                <h5>子类蛞蝓<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="subcategory_slug_bn" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('subcategory_slug_bn')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
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
@endsection
