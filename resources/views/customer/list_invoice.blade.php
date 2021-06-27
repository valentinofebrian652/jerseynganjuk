@extends('layouts.master')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href=" {{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }} ">
@endsection

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Riwayat Pesanan Anda</h3>
                </div>

            <!-- /.box-header -->
                <div class="box-body">
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Penerima</th>
                            <th>Alamat</th>
                            <th>Total Bayar</th>
                            <th>Tanggal</th>
                            <th>Kode Pesanan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        @foreach($orders as $index=>$order)
                            <tbody>
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $order->receiver }}</td>
                                <td>{{ $order->address }}</td>
                                <td > <button class="btn btn-default"><b>Rp. {{ number_format($order->total_price,0) }}</b></button></td>
                                <td>{{ $order->date }}</td>
                                <td align="center">{{ $order->id }}</td>
                                <td>
                                    @if($order->status == 'belum bayar')
                                        <button type="button" class="btn bg-maroon">{{ ucwords($order->status) }}</button>
                                    @elseif($order->status == 'menunggu verifikasi')
                                        <button type="button" class="btn bg-orange">{{ ucwords($order->status) }}</button>
                                    @elseif($order->status == 'dibayar')
                                        <button type="button" class="btn btn-success">{{ ucwords($order->status) }}</button>
                                    @else
                                        <button type="button" class="btn bg-danger">{{ ucwords($order->status) }}</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('invoice.detail', ['id' => $order->id]) }}" class="btn btn-info">Detail</a>

                                    @if($order->status == 'belum bayar')
                                        <a href="{{ route('confirm.index', ['id' => $order->id]) }}" class="btn btn-bitbucket">Konfirmasi Pembayaran</a>
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('bot')
    <!-- DataTables -->
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>


    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();

            $('body').on('click', '.penerima', function(){
                var id = $(this).attr('order-id');

                $.ajax({
                    type: 'get',
                    dataType: 'json',
                    url: "{{ url('invoice/detail') }}"+'/'+id,
                    success: function(data){

                        $.each(data.hasil, function(i,v){
                            var pesanan = '<tr>';

                            pesanan += '<td>';
                            pesanan += i+1;
                            pesanan += '</td>';

                            pesanan += '<td>';
                            pesanan += v.name_product;
                            pesanan += '</td>';

                            pesanan += '<td>';
                            pesanan += v.qty;
                            pesanan += '</td>';

                            pesanan += '<td>';
                            pesanan += v.subtotal;
                            pesanan += '</td>';

                            pesanan += '</tr>';

                            $('#detail-pesanan').append(pesanan);
                        });
                    }
                });

                $('#myModal').modal();
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            var flash = "{{ Session::has('status') }}";
            if(flash){
                var status = "{{ Session::get('status') }}";
                swal('success', status, 'success');
            }
        });
    </script>
@endsection





