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
                    <h3 class="box-title">Laporan</h3>
                </div>

                <div class="box-header">
                    <a href="{{ route('order_lunas.pdf') }}" class="btn btn-dropbox" target="_blank"> Export PDF </a>
                    <a href="{{ route('order_lunas.excel') }}" class="btn btn-dropbox"> Export Excel </a>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                <h4><center>LAPORAN PENDAPATAN KEUANGAN</center></h4>
<h4><center>BULAN JUNI 2021</center></h4>
                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Total Bayar</th>
                        </tr>
                        </thead>

                        @php
                            $no = 1;
                        @endphp

                        @foreach($orders as $order)
                        <tbody>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $order->date }}</td>
                            <td>Rp. {{ number_format($order->total,0) }}</td>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach

                        @foreach($totals as $total)
                        <tr>
                            <th></th>
                            <th>TOTAL PENDAPATAN</th>
                            <th>Rp. {{ number_format($total->total,0) }}</th>
                        </tr>
                        @endforeach

                    </table>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

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





