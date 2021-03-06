@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => '订单详细信息',
    'url' => "orders.index",
    'section_name' => '查看订单'
    ])
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">运输详情</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table">
                            <tr>
                                <th> 发货名称 : </th>
                                <th> {{ $order->name }} </th>
                            </tr>
                            <tr>
                                <th> 送货电话 : </th>
                                <th> {{ $order->phone }} </th>
                            </tr>
                            <tr>
                                <th> 运送电子邮件 : </th>
                                <th> {{ $order->email }} </th>
                            </tr>
                            <tr>
                                <th> 省 : </th>
                                <th> {{ $order->division->division_name }} </th>
                            </tr>
                            <tr>
                                <th> 市 : </th>
                                <th> {{ $order->district->district_name }} </th>
                            </tr>
                            <tr>
                                <th> 区 : </th>
                                <th>{{ $order->state->state_name }} </th>
                            </tr>
                            <tr>
                                <th> 邮政编码 : </th>
                                <th> {{ $order->post_code }} </th>
                            </tr>
                            <tr>
                                <th> 订购日期 : </th>
                                <th> {{ $order->order_date }} </th>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-lg-6">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">订单详细信息</h3>
                        <span class="text-danger"> 发票 : {{ $order->invoice_number }}</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table">
                            <tr>
                                <th> 名称 : </th>
                                <th> {{ $order->user->name }} </th>
                            </tr>
                            <tr>
                                <th> 电话 : </th>
                                <th> {{ $order->user->phone }} </th>
                            </tr>
                            <tr>
                                <th> 支付方式 : </th>
                                <th> {{ $order->payment_method }} </th>
                            </tr>
                            <tr>
                                <th> 交易 ID : </th>
                                <th> {{ $order->transaction_id }} </th>
                            </tr>
                            <tr>
                                <th> 发票 : </th>
                                <th class="text-danger"> {{ $order->invoice_number }} </th>
                            </tr>
                            <tr>
                                <th> 订单合计 : </th>
                                <th>{{ $order->amount }}元</th>
                            </tr>
                            <tr>
                                <th> 状态 : </th>
                                <th>
                                    <span class="badge badge-success">{{ shipping_status_name($order->status) }}
                                    </span>
                                </th>
                            </tr>
                            <tr>
                                <th>退货原因: <p>{{ $order->return_reason }}</p></th>
                                <th>
                                    @if ($order->status == 'pending')
                                    <a href="{{ route('order-status.update', [
                                            'order_id' => $order->id,
                                            'status' => 'confirmed'
                                        ]) }}" class="btn btn-block btn-success">确认订单</a>
                                    @elseif ($order->status == 'confirmed')
                                    <a href="{{ route('order-status.update', [
                                            'order_id' => $order->id,
                                            'status' => 'processing'
                                        ]) }}" class="btn btn-block btn-success">处理订单</a>
                                    @elseif ($order->status == 'processing')
                                    <a href="{{ route('order-status.update', [
                                            'order_id' => $order->id,
                                            'status' => 'picked'
                                        ]) }}" class="btn btn-block btn-success">拣货</a>
                                    @elseif ($order->status == 'picked')
                                    <a href="{{ route('order-status.update', [
                                            'order_id' => $order->id,
                                            'status' => 'shipped'
                                        ]) }}" class="btn btn-block btn-success">发货</a>
                                    @elseif ($order->status == 'shipped')
                                    <a href="{{ route('order-status.update', [
                                            'order_id' => $order->id,
                                            'status' => 'delivered'
                                        ]) }}" class="btn btn-block btn-success">运输完成</a>
                                    @elseif ($order->status == 'cancel')
                                    <a href="{{ route('order-status.update', [
                                            'order_id' => $order->id,
                                            'status' => 'return'
                                        ]) }}" class="btn btn-block btn-danger">返回</a>
                                    @endif
                                </th>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-12 col-lg-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">订单查看</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr style="background: #e3e3e3;">
                                        <td class="text-dark">
                                            <label for=""> 图片</label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> 产品名称 </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> 产品代码</label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> 颜色 </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> 尺寸 </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> 数量 </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> 价格 </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> 下载 </label>
                                        </td>
                                    </tr>
                                    @foreach ($orderItems as $item)
                                        <tr>
                                            <td class="col-md-1">
                                                <label for=""><img src="{{ asset( $item->product->product_thumbnail ) }}"
                                                        height="50px;" width="50px;"> </label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for=""> {{ $item->product->product_name_bn }}</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for=""> {{ $item->product->product_code }}</label>
                                            </td>
                                            <td class="col-md-22">
                                                <label for=""> {{ $item->color }}</label>
                                            </td>
                                            <td class="col-md-22">
                                                <label for=""> {{ $item->size }}</label>
                                            </td>
                                            <td class="col-md-1">
                                                <label for="">{{ $item->qty }}</label>
                                            </td>

                                            <td class="col-md-2">
                                                <label for="">{{ $item->unit_price }}元 ( {{ $item->unit_price * $item->qty }}元 )</label>
                                            </td>
                                            @php
                                                $file = App\Models\Product::where('id', $item->product_id)->first();
                                            @endphp

                                            <td class="col-md-22">
                                                @if ($order->status == 'pending')
                                                    <strong>
                                                        <span class="badge badge-pill badge-success" style="background: #418DB9;"> 
                                                        没有文件</span> </strong>

                                                @elseif($order->status == 'confirm')

                                                    <a target="_blank" href="{{ asset('upload/pdf/' . $file->digital_file) }}">
                                                        <strong>
                                                            <span class="badge badge-pill badge-success" style="background: #FF0000;">
                                                                下载准备好了</span> </strong> </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
