@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '子子类别',
    'url' => "subsubcategories.index",
    'section_name' => '更新子子类别'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Category Page --}}
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">更新子子类别</h3>
                        <a href="{{ route('subsubcategories.index') }}" class="btn btn-primary">返回列表子子类别</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('subsubcategories.update', $subsubCategory) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <h5>子类别名称<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" value="{{ old('subsubcategory_name_bn', $subsubCategory->subsubcategory_name_bn) }}" name="subsubcategory_name_bn" class="form-control" required="" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('subsubcategory_name_bn')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>分类名称<span class="text-danger">*</span></h5>
                                <select name="category_id" class="form-control"  >
                                    <option value="" selected="" disabled="">选择类别</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $subsubCategory->category_id ? 'selected':'' }} >{{ $category->category_name_en }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h5>子类别选择<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="subcategory_id" class="form-control"  >
                                        <option value="" selected="" disabled="">选择子类别</option>
                                        @foreach($subcategories as $subsub)
                                        <option value="{{ $subsub->id }}" {{ $subsub->id == $subsubCategory->subcategory_id ? 'selected':'' }} >{{ $subsub->subcategory_name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('subcategory_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>子子类别蛞蝓<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" value="{{ old('subsubcategory_slug_bn', $subsubCategory->subsubcategory_slug_bn) }}" name="subsubcategory_slug_bn" class="form-control" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('subsubcategory_slug_bn')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">更新</button>
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
