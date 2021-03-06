@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '产品',
    'url' => "products.index",
    'section_name' => '所有产品'
    ])
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">所有产品数据表</h3>
                        <a href="{{ route('products.create') }}" class="btn btn-primary">创建新产品</a>
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
                                                    <th>图片</th>
                                                    <th>产品名称</th>
                                                    <th>产品数量</th>
                                                    <th>购买价格</th>
                                                    <th>售价</th>
                                                    <th>状态</th>
                                                    <th>动作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $item)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>
                                                        <img src="{{ asset($item->product_thumbnail) }}" alt=""  style="width: 70px; height:70px;">
                                                    </td>
                                                    <td class="sorting_1">{{ $item->product_name_bn }}</td>
                                                    <td>{{ $item->product_qty }}</td>
                                                    <td>{{ $item->purchase_price }}</td>
                                                    <td>{{ $item->selling_price }}</td>
                                                    <td>
                                                        {{-- @if ($item->status == 1)
                                                            <span class="badge rounded-pill badge bg-success">活动</span>
                                                        @else
                                                            <span class="badge rounded-pill bg-danger">不活动</span>
                                                        @endif --}}
                                                        <input data-id="{{$item->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="活动" data-off="不活动" {{ $item->status ? 'checked' : '' }}>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="{{ route('products.edit', $item) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="{{ route('products.destroy', $item) }}" method="post">
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
    @section('dashboard_script')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var product_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/changestatus',
                    data: {'status': status, 'product_id': product_id},
                    success: function(data){
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
    @endsection
@endsection
