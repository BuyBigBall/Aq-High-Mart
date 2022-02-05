<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          <h2 style="color: green; font-size: 26px;"><strong>{{ env('APP_NAME') }}</strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
               {{ env('APP_NAME') }}
               Email:{{ env('MAIL_FROM_ADDRESS') }}
               Mob: {{ env('MOBILE_NUMBER') }}
               {{ env('BUSINESS_ADDRESS') }}

            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;""></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>名称:</strong> {{ $order->name }} <br>
           <strong>电邮:</strong> {{ $order->email }} <br>
           <strong>电话:</strong> {{ $order->phone }} <br>
           <strong>地址:</strong> {{ $order->address }} <br>
           <strong>位置:</strong>
                                  {{ $order->state->state_name }},
                                  {{ $order->district->district_name }},
                                  {{ $order->division->division_name }} <br>
           <strong>邮政编码:</strong> {{ $order->post_code }}
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">订单表:</span> #{{ $order->invoice_number }}</h3>
                                          订购日期: {{ $order->created_at }} <br>
                                          交货日期: {{ $order->delivered_date }} <br>
                                          支付类型: {{ $order->payment_type }} <br>
                                          支付方式: {{ $order->payment_method }}
        </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>产品</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
        <tr class="font">
        {{-- <th>图片</th> --}}
        <th>产品名称</th>
        <th>尺寸</th>
        <th>颜色</th>
        <th>代码</th>
        <th>数量</th>
        <th>单价 </th>
        <th>总额 </th>
      </tr>
    </thead>
    <tbody>

        @foreach ($orderItems as $item)
      <tr class="font">
        {{-- <td align="center">
            <img src="{{ asset($item->product->product_thambnail)  }}" height="60px;" width="60px;" alt="">
        </td> --}}
        <td align="center">{{ $item->product->product_name_bn }}</td>
        <td align="center">{{ $item->size }}</td>
        <td align="center">{{ $item->color }}</td>
        <td align="center">{{ $item->product->product_code }}</td>
        <td align="center">{{ $item->qty }}</td>
        <td align="center">{{ $item->unit_price }}</td>
        <td align="center">{{ $order->amount }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">小计：</span>$ {{ $order->amount }}</h2>
            <h2><span style="color: green;">总额：</span> $ {{ $order->amount }}</h2>
            {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>感谢购买产品。</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>授权签字：</h5>
    </div>
</body>
</html>
