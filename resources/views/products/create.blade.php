@extends('layouts.master')

@section('top')
@endsection

@section('content')
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Produk</h3>

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
            <form role="form" method="post" action="{{ route('product.store')  }}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama" value="{{ old('name') }}" autofocus required>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ old('price') }}" autofocus required>
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Enter stock" value="{{ old('stock') }}" autofocus required>
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Enter image" value="{{ old('image') }}"  required>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
@endsection


@section('top')
@endsection
