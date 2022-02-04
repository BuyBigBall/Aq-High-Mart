@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '省',
    'url' => "division.index",
    'section_name' => '所有省'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Brand Page --}}
            <div class="col-md-8 col-lg-8 m-auto">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">编辑省市</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('division.update', $division) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <h5>省市名称 <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="division_name" class="form-control" required=""  value="{{old('division_name',$division->division_name) }}" data-validation-required-message="这是必填栏"> <div class="help-block"></div>
                                </div>
                                @error('division_name')
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
