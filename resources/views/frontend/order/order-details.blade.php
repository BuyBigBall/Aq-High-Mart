@extends('dashboard')

@section('frontend_style')

@endsection

@section('userdashboard_content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>运输详情</h4>
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
                    <table class="table">
                        <tr>
                            <th> 送货名称： </th>
                            <th> {{ $order->name }} </th>
                        </tr>

                        <tr>
                            <th> 送货电话： </th>
                            <th> {{ $order->phone }} </th>
                        </tr>

                        <tr>
                            <th> 送货电子邮件: </th>
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

            </div>

        </div> <!-- // end col md -6 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>订单详细信息
                        <span class="text-danger"> 发票 : {{ $order->invoice_number }}</span>
                    </h4>
                    @if ($order->status == 'pending')

                    @else
                    <ul>
                        <li> 确认日期: {{ chdate( $order->confirmed_date ) }}</li>
                        <li> 处理日期: {{ chdate( $order->processing_date ) }}</li>
                        <li> 拣货日期: {{ chdate( $order->picked_date ) }}</li>
                        <li> 运输日期: {{ chdate( $order->shipped_date ) }}</li>
                        <li> 完成日期: {{ chdate( $order->delivered_date ) }}</li>
                        <li> 取消日期: {{ chdate( $order->cancel_date ) }}</li>
                        <li> 退货日期: {{ chdate( $order->return_date ) }}</li>
                    </ul>
                    @endif
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
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
                            <th> 交易ID : </th>
                            <th> {{ $order->transaction_id }} </th>
                        </tr>

                        <tr>
                            <th> 发票 : </th>
                            <th class="text-danger"> {{ $order->invoice_number }} </th>
                        </tr>

                        <tr>
                            <th> 订单总金额 :  </th>
                            <th>{{ $order->amount }}元 </th>
                        </tr>

                        <tr>
                            <th> 状态 : </th>
                            <th>
                                <span class="badge badge-pill badge-warning"
                                    style="background: #418DB9;">{{ shipping_status_name( $order->status ) }} </span>
                            </th>
                        </tr>

                    </table>
                </div>
            </div>
        </div> <!-- // 2ND end col md -5 -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr style="background: #e2e2e2;">
                            <td >
                                <label for=""> 图片</label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> 产品名称 </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> 产品代码</label>
                            </td>
                            <td class="col-md-1">
                                <label for=""> 颜色 </label>
                            </td>
                            <td class="col-md-1">
                                <label for=""> 尺寸 </label>
                            </td>
                            <td >
                                <label for=""> 数量 </label>
                            </td>
                            <td class="col-md-3">
                                <label for=""> 价格 </label>
                            </td>
                            <td >
                                <label for=""> 动作 </label>
                            </td>
                        </tr>
                        @foreach ($orderItems as $item)
                            <tr>
                                <td>
                                    <label for=""><img src="{{ asset( $item->product->product_thumbnail ) }}"
                                            height="50px;" width="50px;"> </label>
                                </td>
                                <td >
                                    <label for=""> {{ $item->product->product_name_bn }}</label>
                                </td>
                                <td >
                                    <label for=""> {{ $item->product->product_code }}</label>
                                </td>
                                <td >
                                    <label for=""> {{ $item->color }}</label>
                                </td>
                                <td >
                                    <label for=""> {{ $item->size }}</label>
                                </td>
                                <td >
                                    <label for=""> {{ $item->qty }}</label>
                                </td>

                                <td class="col-md-3">
                                    <label for="">{{ $item->unit_price }}元 ( {{ $item->unit_price * $item->qty }}元 )</label>
                                </td>
                                @php
                                    $file = App\Models\Product::where('id', $item->product_id)->first();
                                @endphp

                                <td >
                                    @if ($order->status == 'pending')
                                        <strong>
                                            <span class="badge badge-pill badge-success" style="background: #418DB9;"> 没有文件</span>
                                        </strong>

                                    @elseif($order->status != 'pending')

                                        <a target="_blank" class="btn btn-danger" href="{{ asset('upload/pdf/' . $file->digital_file) }}">
                                            <i class="fa fa-download"></i>开发票
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- / end col md 8 -->
    </div> <!-- // END ORDER ITEM ROW -->
    @if ($order->status == 'delivered')
        运输完成
    @else
        @php
            $order = App\Models\Order::where('id', $order->id)
                ->where('return_reason', '=', null)
                ->first();
        @endphp
        @if ($order)
            <form action="{{ route('return.order', $order->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="label"> 订单退货原因:</label>
                    <textarea name="return_reason" id="" class="form-control" cols="30" rows="05" placeholder="退货原因"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">订单退货</button>
            </form>
        @else
            <span class="badge badge-pill badge-warning" style="background: red">您已发送此产品的退货请求</span>
        @endif
    @endif
    <br><br>
@endsection

@section('frontend_script')

@endsection
