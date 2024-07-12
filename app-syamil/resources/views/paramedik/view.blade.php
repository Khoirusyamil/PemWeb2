<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Paramedik</x-slot> 
<x-slot name="card_title">Detail Paramedik : {{ $paramedik->kategori }} -  {{ $paramedik->nama }}</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Paramedik / View</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Nama Paramedik</th><td>{{ $paramedik->nama }}</td></tr>
    <tr><th>Jenis Kelamin</th><td>{{ $paramedik->gender=='L' ? 'Laki-Laki':'Perempuan' }}</td></tr>
    <tr><th>Tempat, Tgl Lahir</th><td>{{ $paramedik->tmp_lahir }}, {{ $paramedik->tgl_lahir }}</td></tr>
    <tr><th>Unit Kerja</th><td>{{ $paramedik->unit_kerja->nama }}</td></tr>
    <tr><th>Kategori</th><td>{{ $paramedik->kategori }}</td></tr>
    <tr><th>Alamat</th><td>{{ $paramedik->alamat }}</td></tr>
    <tr><th>No.Telpon</th><td>{{ $paramedik->telpon }}</td></tr> 
</table>
<div>
    <a href="{{ route('paramedik.index') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
