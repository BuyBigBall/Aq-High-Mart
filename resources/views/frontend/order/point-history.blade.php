@extends('dashboard')

@section('frontend_style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('userdashboard_content')

    <div class="table-responsive">
        <table id="myOrder" class="table table-hover table-bordered display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>日期</th>
                    <th>交易类型</th>
                    <th>内容</th>
                    <th>增加点数</th>
                    <th>减少点数</th>
                    <th>剩余积分</th>
                    <!-- <th>动作</th> -->
                </tr>
            </thead>
            <tbody>
            <?php $balance = $user->point; ?>
                @forelse ($points as $money_trans)
                <tr>
                    <td scope="row">{{ $loop->index+1 }}</td>
                    <td>{{ ($money_trans->created_at) }}</td>
                    <td>{{ GetTransactionName( $money_trans->deal_type) }}</td>
                    <td>{{ $money_trans->content }}</td>
                    <td>{{ GetHistMoneyL($money_trans) }}</td>
                    <td>{{ GetHistMoneyR($money_trans) }}</td>
                    <td>{{ $balance }}</td>
                    <?php $balance = CalcNewBalance($balance, $money_trans); ?>
                    <!-- <td><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-download"></i>删除</a></td> -->
                </tr>
                @empty
                <tr>
                    <td>还没有历史。</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

@section('frontend_script')
<!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
<script src="/frontend/assets/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myOrder').DataTable();
} );
</script>
@endsection
