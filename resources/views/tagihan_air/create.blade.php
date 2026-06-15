@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Input Tagihan Baru
        </div>

        <div class="card-body">
            <form action="/eas/store" method="post" onsubmit="return validasiForm()">
                @csrf

                <div class="form-group mb-3">
                    <label for="nometeran" class="col-sm-2 col-form-label">No Meteran</label>
                    <div class="col-sm-10">
                        <input type="text" id="nometeran" name="nometeran" class="form-control" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="meterawal" class="col-sm-2 col-form-label">Meter Awal</label>
                    <div class="col-sm-10">
                        <input type="number" id="meterawal" name="meterawal" class="form-control" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="meterakhir" class="col-sm-2 col-form-label">Meter Akhir</label>
                    <div class="col-sm-10">
                        <input type="number" id="meterakhir" name="meterakhir" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>


            </form>
            <script>
                function validasiForm() {
                    let nometeran = document.getElementById('nometeran').value;
                    let meterawal = parseInt(document.getElementById('meterawal').value);
                    let meterakhir = parseInt(document.getElementById('meterakhir').value);

                    if (meterakhir < meterawal + 20) {
                        Swal.fire({
                            title: "Kesalahan Input Data!",
                            text: "Meter Akhir Harus Lebih 20 dari Meter Awal",
                            icon: "error"
                        });
                        return false;
                    }

                    return true;
                }
            </script>
        </div>
    </div>


@endsection
