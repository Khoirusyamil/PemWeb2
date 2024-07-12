<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Detail Pembayaran : {{ $pembayaran->peminjaman->nama_peminjam }} -  {{ $pembayaran->tanggal }}</x-slot> 
<x-slot name="breadcrumb">Data Pembayaran</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Merk</th><td>{{ $pembayaran->tanggal }}</td></tr>
    <tr><th>Tahun Beli</th><td>{{ $pembayaran->jumlah_bayar}}</td></tr>
    <tr><th>Jenis Kendaraan</th><td>{{ $pembayaran->peminjaman->nama_peminjam }}</td></tr> 
</table>
<div>
    <a href="{{ route('pembayaran.index') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
