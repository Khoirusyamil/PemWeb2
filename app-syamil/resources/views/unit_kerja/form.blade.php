<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title"></x-slot> 
<x-slot name="card_title">Form Tambah Unit Kerja</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Unit Kerja / Tambah Data</x-slot>
<form action="{{ route('unit_kerja.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama" class="col-md-2">Nama Unit Kerja</label>
        <input type="text" name="nama" id="nama" value="{{ $unit_kerja->nama }}" class="form-control" required>
    </div>
    
    <input type="hidden" name="id" value="{{ $unit_kerja->id }}">
    <a href="{{ route('unit_kerja.index') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>