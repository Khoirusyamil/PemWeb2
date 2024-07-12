<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title"></x-slot> 
<x-slot name="card_title">Tambah Data Armada</x-slot> 
<x-slot name="breadcrumb">Tambah Data</x-slot>
<form action="{{ route('armada.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="merk" class="col-md-2">Merk Mobil</label>
        <input type="text" name="merk" id="merk" value="{{ $armada->merk }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tahun_beli" class="col-md-2">Tahun Beli</label>
        <input type="number" min="1900" max="2100" value="2022" name="tahun_beli" id="tahun_beli" value="{{ $armada->tahun_beli }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="deskripsi" class="col-md-2">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" value="{{ $armada->deskripsi}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="kapasitas_kursi" class="col-md-2">Kapasitas Kursi</label>
        <input type="number" name="kapasitas_kursi" id="kapasitas_kursi" value="{{ $armada->kapasitas_kursi}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="rating" class="col-md-2">Rating</label>
        <input type="number" name="rating" id="rating" value="{{ $armada->rating}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jenis_kendaraan" class="col-md-2">Jenis Kendaraan</label>
        <select name="jenis_kendaraan_id" class="form-control">
            <option>--Pilih--</option>
            @foreach($list_jenis_kendaraan as $jenis_kendaraan)
            <option value="{{ $jenis_kendaraan->id }}" {{ $armada->jenis_kendaraan_id==$jenis_kendaraan->id ? 'selected': ''}}>
                {{ $jenis_kendaraan->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $armada->id }}">
    <a href="{{ route('armada.index') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>