<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Nama Jenis Kendaraan : {{ $jenis_kendaraan->nama }}</x-slot> 
<x-slot name="breadcrumb">Data Jenis Kendaraan</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Merk</th><td>{{ $jenis_kendaraan->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('jenis_kendaraan.index') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
