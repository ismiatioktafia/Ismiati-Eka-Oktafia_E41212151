<b>DATA KECANTIKAN</b>
<hr>
@foreach ($brg as $index => $isi)
<table>
    <tr>
        <td>ID</td>
        <td>:</td>
        <td>{{ $isi->id }}</td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td>:</td>
        <td>{{ $isi->nama }}</td>
    </tr>  
    <tr>
        <td>PAKET KECANTIKAN</td>
        <td>:</td>
        <td>{{ $isi->paket_kecantikan }}</td>
    </tr>
    <tr>
        <td>PEMBAYARAN AWAL</td>
        <td>:</td>
        <td>{{ $isi->pembayaran_awal }}</td>
    </tr>
    <tr>
        <td>TANGGAL TRANSAKSI</td>
        <td>:</td>
        <td>{{ $isi->tanggal_transaksi }}</td>
    </tr>  
</table>
<a href="{{ route('kecantikan.index') }}">BACK</a>
@endforeach