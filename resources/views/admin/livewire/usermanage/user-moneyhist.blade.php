<div class="content">
    @include('admin.dashboard_layout.breadcrumb', [
                        'name' => '会员金额',
                        'url' => "users.index",
                        'section_name' => '会员金额历史'
                    ])

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="box">
                <div
                    class="box-header with-border d-flex justify-content-between align-items-center">
                    <h3 class="box-title">会员金额历史</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div
                            id="example1_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table
                                        id="example1"
                                        class="table table-bordered table-striped dataTable"
                                        role="grid"
                                        aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    #</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    名称</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    日期</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    交易类型</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    内容</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    增加金额</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    减少金额</th>
                                                <th
                                                    class="hidden text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                    style="min-width:80px;">
                                                    余额</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pagination as $hist_item )
                                            <tr>
                                            <td class="text-center pe-1">
                                                    <p class="text-xs font-weight-bold mb-0">{{$hist_item->id}}</p>
                                                </td>
                                                <td class="text-center pe-1 ">
                                                    <a
                                                        href="{{ route('users.edit', $hist_item->user_id) }}"
                                                        class="mx-1 font-weight-bold"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="编辑用户"
                                                        >
                                                        {{$hist_item->user->name}}<br>{{$hist_item->user->email}}
                                                    </a>
                                                </td>
                                                <td class="text-center pe-1" style="overflow-wrap: anywhere;">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $hist_item->created_at }}</p>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <p class="text-xs font-weight-bold mb-0">{{ GetTransactionName($hist_item->deal_type) }}</p>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <p class="text-xs font-weight-bold mb-0">{{ $hist_item->content }}</p>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <span class="text-secondary text-xs font-weight-bold">{{ GetHistMoneyL( $hist_item) }}</span>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <span class="text-secondary text-xs font-weight-bold">{{ GetHistMoneyR( $hist_item) }}</span>
                                                </td>
                                                <td class="hidden text-center pe-1">
                                                    <span class="text-secondary text-xs font-weight-bold">{{ $hist_item->user->money }}</span>
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

    <script>
        
    </script>
</div>
