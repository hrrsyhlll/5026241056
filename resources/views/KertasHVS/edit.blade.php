@extends('template')
@section('title', 'Data Kertas HVS')
@section('konten')

    <br>
    <a href="/kertashvs" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Edit Data Kertas HVS
        </div>

        <div class="card-body">
            @foreach ($kertashvs as $krow)

            <form action="/kertashvs/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="kodekertashvs" value="{{ $krow->kodekertashvs }}"> <br/>

                <div class="form-group mb-3">
                    <label for="merkkertashvs" class="col-sm-2 col-form-label">Merek Kertas</label>
                    <div class="col-sm-12">
                        <input
                        type="text"
                        name="merkkertashvs"
                        class="form-control"
                        value="{{ $krow->merkkertashvs }}"
                        required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="stockkertashvs" class="col-sm-2 col-form-label">Stok Kertas</label>
                    <div class="col-sm-12">
                        <input
                        type="number"
                        name="stockkertashvs"
                        class="form-control"
                        value="{{ $krow->stockkertashvs }}"
                        required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-5 col-sm-12">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>


            </form>

            @endforeach

        </div>
    </div>

@endsection
