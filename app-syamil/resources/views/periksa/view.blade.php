<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Periksa</x-slot> 
<x-slot name="card_title">Detail Periksa :: {{ $periksa->kode }} -  {{ $periksa->nama }}</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Periksa / View</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Tanggal</th><td>{{ $periksa->tanggal }}</td></tr>
    <tr><th>Nama Pasien</th><td>{{ $periksa->pasien->nama }}</td></tr> 
    <tr><th>Berat</th><td>{{ $periksa->berat }}</td></tr>
    <tr><th>Tinggi</th><td>{{ $periksa->tinggi }}</td></tr>
    <tr><th>Tensi</th><td>{{ $periksa->tensi }}</td></tr>
    <tr><th>Keterangan</th><td>{{ $periksa->keterangan }}</td></tr>
    <tr><th>Nama Dokter</th><td>{{ $periksa->paramedik->nama }}</td></tr>
</table>
<div>
    <a href="{{ route('paramedik.index') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
