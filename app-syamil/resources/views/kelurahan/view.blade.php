<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Kelurahan</x-slot> 
<x-slot name="card_title">Detail Kelurahan : {{ $kelurahan->nama }}</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Kelurahan / View</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Nama Kelurahan</th><td>{{ $kelurahan->nama }}</td></tr> 
</table>
<div>
    <a href="{{ route('kelurahan.index') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
