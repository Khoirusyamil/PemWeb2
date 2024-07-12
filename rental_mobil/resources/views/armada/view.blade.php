<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Detail Mobil : {{ $armada->jenis_kendaraan->nama }} -  {{ $armada->merk }}</x-slot> 
<x-slot name="breadcrumb">Data Mobil</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Merk</th><td>{{ $armada->merk }}</td></tr>
    <tr><th>Tahun Beli</th><td>{{ $armada->tahun_beli}}</td></tr>
    <tr><th>Deskripsi</th><td>{{ $armada->deskripsi }}</td></tr>
    <tr><th>Kapasitas Kursi</th><td>{{ $armada->kapasitas_kursi }}</td></tr>
    <tr><th>Rating</th><td>{{ $armada->rating }}</td></tr>
    <tr><th>Jenis Kendaraan</th><td>{{ $armada->jenis_kendaraan->nama }}</td></tr> 
</table>
<div>
    <a href="{{ route('armada.index') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
