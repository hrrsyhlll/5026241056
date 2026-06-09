@extends('template')
@section('title','Data Nilai Kuliah')
@section('konten')


    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Kuliah
        </div>

        <div class="card-body">
            <form action="/nilaikuliah/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="NRP" id="NRP" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiAngka" id="NilaiAngka" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="SKS" id="SKS" class="form-control" required>
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
