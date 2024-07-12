<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title"></x-slot> 
<x-slot name="card_title">Tambah Data Jenis Kendaraan</x-slot> 
<x-slot name="breadcrumb">Tambah Data</x-slot>
<form action="{{ route('jenis_kendaraan.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama" class="col-md-2">Nama Kendaraan</label>
        <input type="text" name="nama" id="nama" value="{{ $jenis_kendaraan->nama }}" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="{{ $jenis_kendaraan->id }}">
    <a href="{{ route('jenis_kendaraan.index') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>