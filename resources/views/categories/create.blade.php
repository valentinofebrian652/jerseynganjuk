@extends('layouts.master')

@section('top')
@endsection

@section('content')
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Kategori</h3>
            </div>

            <div class="box-header with-border">
                @if(session('status'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i> Success! &nbsp;
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('category.store')  }}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan kategori" value="{{ old('name') }}" autofocus required>
                    </div>

                </div>

                <div class="box-footer" mt-12>
                    <button type="submit" class="btn btn-primary">Submit</button>
                     &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; &ensp;&ensp; 
                    <a href="/category" class="btn btn-danger">Back</a>
                </div>  
               
            </form>
            
        </div>
        <!-- /.box -->
    </div>
  
@endsection


@section('top')
@endsection
