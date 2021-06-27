@extends('layouts.master')

@section('top')
    <script>
        $(document).ready(function () {
            var flash = "{{ Session::has('status') }}";
            if (flash) {
                var status = "{{ Session::get('status') }}";
                swal('success', status, 'success');
            }
        });
    </script>

    <script>
        $(document).ready(function(){
            $(".preloader").delay(800).fadeOut();
        })
    </script>
@endsection

@section('content')

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box">
                    <div class="box-body box-profile">
                        <img class="img-responsive" src="{{ url($product->image) }}" >

                        <h4 class="text-center"><strong>{{ $product->name }}</strong></h4>

                        <h3><p class="text-muted text-center">Rp. {{ number_format($product->price, 0) }}</p></h3>

                        <a href="#" class="btn bg-maroon-active btn-block"><b><i class="fa fa-cube"></i> &nbsp; Stock : {{ $product->stock }}</b></a>
                        <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-success btn-block"><b><i class="fa fa-shopping-cart"></i> &nbsp;Add To Cart</b></a>
                        <a href="{{ url('product/detail', $product->id) }}" class="btn btn-dropbox btn-block"><b><i class="fa fa-share-square"></i> Detail</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        @endforeach
    </div>
@endsection


@section('bot')
    <script>
        $(document).ready(function () {
           var flash = "{{ Session::has('status') }}";
           if (flash) {
               var status = "{{ Session::get('status') }}";
               swal('success', status, 'success');
           }
        });
    </script>


@endsection





