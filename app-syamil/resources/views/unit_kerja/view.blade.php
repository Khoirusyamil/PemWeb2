<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Detail Unit Kerja</x-slot> 
<x-slot name="card_title">Detail Unit Kerja : {{ $unit_kerja->nama }}</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Unit Kerja / View</x-slot>
<table class="table table-striped table-sm">
    <tr><th>Nama Unit Kerja</th><td>{{ $unit_kerja->nama }}</td></tr> 
</table>
<div>
    <a href="{{ route('unit_kerja.index') }}" class="btn btn-success mt-2">Kembali</a>
</div>
</x-layout>
