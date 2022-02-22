<section class="content">
    @include('admin.dashboard_layout.breadcrumb', [
                        'name' => '用户',
                        'url' => "users.index",
                        'section_name' => '所有用户'
                    ])

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="box">
                <div
                    class="box-header with-border d-flex justify-content-between align-items-center">
                    <h3 class="box-title">全部用户</h3>
                    <a href="{{ route('users.create') }}" class="btn btn-primary">创建新用户</a>
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
                                                    电子邮件</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    电话号码</th>
                                                <th
                                                    class="hidden text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    用户类型</th>
                                                    <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    创建日期</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    会员余额</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    会员积分</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    状态</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                    style="min-width:80px;">
                                                    作用</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pagination as $user)
                                            <tr>
                                                <td class="text-center pe-1">
                                                    <p class="text-xs font-weight-bold mb-0">{{$user->id}}</p>
                                                </td>
                                                <td class="text-center pe-1 ">
                                                    <a href="" class="text-dark font-weight-bold">
                                                        <p class="text-xs font-weight-bold mb-0">{{$user->name}}</p>
                                                    </a>
                                                </td>
                                                <td class="text-center pe-1" style="overflow-wrap: anywhere;">
                                                    <p class="text-xs font-weight-bold mb-0">{{$user->email}}</p>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <?php /* !empty($user->university) ? $user->university->id : '' */?>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $user->phone_number }}</p>
                                                </td>
                                                <td class="text-center pe-1 hidden">
                                                    <p class="text-xs font-weight-bold mb-0">{{$user->role}}</p>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$user->created_at}}</span>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <span class="text-secondary text-xs font-weight-bold">{{ ($user->money) }}</span>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <span class="text-secondary text-xs font-weight-bold">{{ ($user->point) }}</span>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <span class="text-secondary text-xs font-weight-bold">{{ userstatus($user->status) }}</span>
                                                </td>
                                                <td class="text-center pe-1">
                                                    <a
                                                        href="{{ route('users.edit', $user->id) }}"
                                                        class="mx-1"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="编辑用户"
                                                        >
                                                        <i class="fa fa-edit text-secondary"></i>
                                                    </a>
                                                    <span onclick="confirm('你确定要删除这个用户吗?') ? deleteUser('{{$user->id}}') : ''">
                                                        <i class="cursor-pointer fa fa-trash text-secondary"></i>
                                                    </span>
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
        function deleteUser(del_id)
        {
            window.livewire.emit('deleteUser', del_id);
        }
    </script>

</section>