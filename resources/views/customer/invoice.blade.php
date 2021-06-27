@extends('layouts.master')


@section('top')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Invoice</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th width="30%">Nama Produk</th>
                            <th width="20%">Jumlah</th>
                            <th width="30%">Subtotal</th>
                        </tr>

                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->qty }}</td>
                                <td>
                                    Rp. {{ $product->subtotal() }}
                                </td>
                                {{--<td>--}}
                                    {{--RP. {{ number_format($product->subtotal,0) }}--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach

                        <tr class="btn-success">
                            <td colspan="2">Total</td>
                            <td>{{ $total }}</td>
                        </tr>

                        <tr class="btn-light">
                            <td colspan="3">
                                Silahkan Anda Transfer Ke :<br>
                                <h3 class="mt-0"> <strong>BANK BRI</strong> </h3>
                    No. Rekening 6417-01-011878-50-2 atas nama <strong>Valentino Febrian Saputra</strong> <br> <br>
                    <h5 class="mt-0"> <strong>Apabila Sudah Transfer Silahkan Foto Bukti Transfer dan Konfirmasi!</strong> </h5>
                    
                    <a href="/invoice/list" class="btn btn-bitbucket">Konfirmasi Pembayaran</a>
                            </td>
                            
                        </tr>
                        
                    </table>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection


@section('bot')
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





