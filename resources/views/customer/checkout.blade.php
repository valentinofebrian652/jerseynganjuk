@extends('layouts.master')


@section('top')
@endsection

@section('content')
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Checkout</h3>
            </div>

            {{--<div class="box-header with-border">--}}
                {{--@if(session('status'))--}}
                    {{--<div class="alert alert-success alert-dismissible">--}}
                        {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                        {{--<i class="icon fa fa-check"></i> Success! &nbsp;--}}
                        {{--{{ session('status') }}--}}
                    {{--</div>--}}
                {{--@endif--}}
            {{--</div>--}}

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ url('shopping-cart/bayar')  }}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">

                    <div class="form-group">
                        <label>Penerima</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama penerima" value="{{ old('name') }}" autofocus required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" class="form-control"  cols="26" rows="5" required></textarea>
                    </div>
                <!-- /.box-body -->

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





