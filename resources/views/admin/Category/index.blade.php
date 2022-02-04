@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '类别',
    'url' => "categories.index",
    'section_name' => '所有类别'
    ])
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">所有类别数据表</h3>
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">创建新类别</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>#</th>
                                                    <th>类别图标</th>
                                                    <th class="hidden">Category Name EN</th>
                                                    <th>分类名称</th>
                                                    <th>类别图像</th>
                                                    <th>动作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $item)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{ $item->category_icon }}</td>
                                                    <td class="sorting_1 hidden">{{ $item->category_name_en }}</td>
                                                    <td>{{ $item->category_name_bn }}</td>
                                                    <td>
                                                        <img src="{{ asset($item->category_image) }}" alt="" style="width: 70px; height:40px;">
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="{{ route('categories.edit', $item) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="{{ route('categories.destroy', $item) }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a href="" class="btn btn-danger" title="Delete Data" id="delete" onclick="event.preventDefault();
                                                                "><i class="fa fa-trash"></i></a>
                                                                <!-- this.closest('form').submit(); -->
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
