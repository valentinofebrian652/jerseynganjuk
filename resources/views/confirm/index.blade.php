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
                    <h3 class="box-title">Daftar Konfirmasi Pembayaran</h3>
                </div>


                {{--@if(session('status'))--}}
                    {{--<div class="box-header">--}}
                        {{--<div class="alert alert-success alert-dismissible">--}}
                            {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                            {{--<i class="icon fa fa-check"></i> Success! &nbsp;--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--</div>--}}
            {{--@endif--}}


            <!-- /.box-header -->
                <div class="box-body">
                    <table id="categories" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        @php
                            $no = 1;
                        @endphp

                        @foreach($confirms as $index=>$confirm)
                            <tbody>
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $confirm->user->name }}</td>
                                <td>Rp. {{ number_format($confirm->order->total_price,0) }}</td>
                                <td>{{ $confirm->order->date }}</td>
                                <td>
                                    @if($confirm->status_order == 'belum bayar')
                                        <button type="button" class="btn bg-maroon">{{ ucwords($confirm->status_order) }}</button>
                                    @elseif($confirm->status_order == 'menunggu verifikasi')
                                        <button type="button" class="btn bg-orange">{{ ucwords($confirm->status_order) }}</button>
                                    @elseif($confirm->status_order == 'dibayar')
                                        <button type="button" class="btn btn-success">{{ ucwords($confirm->status_order) }}</button>
                                    @else
                                        <button type="button" class="btn bg-danger">{{ ucwords($confirm->status_order) }}</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('upload/confirm/'.$confirm->image) }}" class="btn bg-maroon-active" download>Download Lampiran</a>
                                </td>
                                <td>
                                    <a href="{{ url('/confirmAdmin/detail/'.$confirm->order_id) }}" class="btn btn-info">Detail</a>
                                    <a href="{{ url('confirmAdmin/terima/'.$confirm->order_id) }}" class="btn bg-navy">Terima</a>
                                    <a href="{{ url('confirmAdmin/tolak/'.$confirm->order_id)}}" class="btn bg-red-active">Tolak</a>
                                </td>
                            </tr>
                            </tbody>
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
        $(function () {
            $('#categories').DataTable()
        })
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





