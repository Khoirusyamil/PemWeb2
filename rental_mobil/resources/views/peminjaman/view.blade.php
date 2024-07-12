<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Detail Peminjam : {{ $peminjaman->armada->merk }} -  {{ $peminjaman->nama_peminjam }}</x-slot> 
<x-slot name="breadcrumb">Data Peminjam</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Nama Peminjam</th><td>{{ $peminjaman->nama_peminjam }}</td></tr>
    <tr><th>KTP Peminjam</th><td>{{ $peminjaman->ktp_peminjam}}</td></tr>
    <tr><th>Keperluan</th><td>{{ $peminjaman->keperluan_pinjam }}</td></tr>
    <tr><th>Tanggal Mulai</th><td>{{ $peminjaman->mulai }}</td></tr>
    <tr><th>Tanggal Selesai</th><td>{{ $peminjaman->selesai }}</td></tr>
    <tr><th>Biaya</th><td>{{ $peminjaman->biaya }}</td></tr> 
    <tr><th>Komentar</th><td>{{ $peminjaman->komentar_peminjam }}</td></tr> 
    <tr><th>Status</th><td>{{ $peminjaman->status_peminjam }}</td></tr> 
    <tr><th>Mobil yang Disewakan</th><td>{{ $peminjaman->armada->merk }}</td></tr> 
</table>
<div>
    <a href="{{ route('peminjaman.index') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
