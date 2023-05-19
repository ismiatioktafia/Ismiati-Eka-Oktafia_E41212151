<b>DATA KECANTIKAN</b>
<hr>
<a href="{{ route('kecantikan.create') }}">Tambah</a>
<hr>
    <table border="1" align="center">
        <tr>
            <td>ID</td>
            <td>NAMA</td>
            <td>PAKET KECANTIKAN</td>
            <td>PEMBAYARAN AWAL</td>
            <td>TANGGAL TRANSAKSI</td>
        </tr>
        @foreach ($brg as $index => $isi)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $isi->id }}</td>
                <td>{{ $isi->nama }}</td>
                <td>{{ $isi->paket_kecantikan }}</td>
                <td>{{ $isi->pembayaran_awal }}</td>
                <td>{{ $isi->tanggal_transaksi }}</td>
                <td>
                    <a href="{{ route('kecantikan.show', $isi->id) }}">Detail</a>
                </td>
                <td>
                    <a href="{{ route('kecantikan.edit', $isi->id) }}">UBAH</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('kecantikan.destroy', $isi->id) }}" style="margin: 0%">
                       @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>