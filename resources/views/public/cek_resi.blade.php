<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Auth::check() ? Auth::user()->role . 'Page' : 'GuestPage' }}</title>
</head>

<body>
    <div class="container">
        <form method="post" action="{{ route('cekResiPublic') }}" class="container">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="kode_resi" placeholder="Masukkan Kode Resi | e.g. : BRG001" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Cek</button>
        </form>

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if ($grupBarang)
        <div class="container mt-4">
            <h2>Detail Grup Barang</h2>
            <p>Nama Grup: {{ $grupBarang->nama_grup }}</p>
            <p>Jumlah Barang Grup: {{ $grupBarang->jumlah_barang }}</p>
            <p>Kode Resi: {{ $grupBarang->kode_resi }}</p>
            <p>Kode Lokasi Asal: {{ $grupBarang->kode_lokasi_asal }}</p>

            <h3>Barang dalam Grup</h3>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Kode Barang</th>
                        <th>Jumlah Barang</th>
                    </tr>
                    @foreach ($grupBarang->barangs as $barang)
                    <tr>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->kode }}</td>
                        <td>{{ $barang->jumlah_barang }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @endif
    </div>
</body>

</html>