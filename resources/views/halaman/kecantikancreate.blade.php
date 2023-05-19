<b>DATA KECANTIKAN</b>
<hr>
<form method="POST" action="{{ route('kecantikan.store') }}">
    @csrf
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>PAKET KECANTIKAN</td>
            <td>:</td>
            <td><input type="text" name="paket_kecantikan"></td>
        </tr>
        <tr>
            <td>PEMBAYARAN AWAL</td>
            <td>:</td>
            <td><input type="text" name="pembayaran_awal"></td>
        </tr>
        <tr>
            <td>TANGGAL TRANSAKSI</td>
            <td>:</td>
            <td><input type="text" name="tanggal_transaksi"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>