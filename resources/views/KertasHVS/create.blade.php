@extends('template')
@section('title', 'Data Kertas HVS')
@section('konten')

    <a href="/kertashvs" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Kertas HVS
        </div>

        <div class="card-body">
            <form action="/kertashvs/store" method="post">
                {{ csrf_field() }}

                <div class="form-group mb-3">
                    <label for="merkkertashvs" class="col-sm-2 col-form-label">Merek Kertas</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkkertashvs" class="form-control" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="stockkertashvs" class="col-sm-2 col-form-label">Stok Kertas</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockkertashvs" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection
