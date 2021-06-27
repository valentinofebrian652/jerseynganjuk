@extends('layouts.master')


@section('top')
@endsection

@section('content')
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Konfirmasi Pembayaran</h3>
            </div>

        <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('confirm.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                <tr class="btn-light">
                            <td colspan="3">
                            Silahkan Anda Transfer Ke :<br>
                                <h3 class="mt-0"> <strong>BANK BRI</strong> </h3>
                    No. Rekening 6417-01-011878-50-2 atas nama <strong>Valentino Febrian Saputra</strong> <br> <br>
                    <h5 class="mt-0"> <strong>Apabila Sudah Transfer Silahkan Foto Bukti Transfer dan Konfirmasi!</strong> </h5>
                            </td>
                        </tr>
                    <div class="form-group">
                        <label>Kode Pesanan</label>
                        <input type="text"  class="form-control" readonly value="{{ $order->id }}" id="order_id" name="order_id" placeholder="Masukan Kode Pesanan"  autofocus required >
                    </div>

                    <div class="form-group">
                        <label>Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <!-- /.box-body -->
                    {{--<input type="text" value="{{ $order->status }}" name="status_order" id="status_order">--}}
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- /.box -->
    </div>
@endsection


@section('bot')
@endsection





