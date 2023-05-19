<b>DATA KECANTIKAN</b>
<hr>
@foreach ($brg as $index => $isi)
<form method="POST" action="{{ route('kecantikan.update', $isi->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id" value="{{ $isi->id }}" disabled></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nama" value="{{ $isi->nama }}"></td>
        </tr>
        <tr>
            <td>PAKET KECANTIKAN</td>
            <td>:</td>
            <td><input type="text" name="paket_kecantikan" value="{{ $isi->paket_kecantikan }}"></td>
        </tr>
        <tr>
            <td>PEMBAYARAN AWAL</td>
            <td>:</td>
            <td><input type="text" name="pembayaran_awal" value="{{ $isi->pembayaran_awal }}"></td>
        </tr>
        <tr>
            <td>TANGGAL TRANSAKSI</td>
            <td>:</td>
            <td><input type="text" name="tanggal_transaksi" value="{{ $isi->tanggal_transaksi }}"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>
@endforeach