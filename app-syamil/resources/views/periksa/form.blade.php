<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title"></x-slot> 
<x-slot name="card_title">Form Tambah Periksa</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Periksa / Tambah Data</x-slot>
<form action="{{ route('periksa.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="tanggal" class="col-md-2">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $periksa->tanggal }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="berat" class="col-md-2">Berat</label>
        <input type="numberr" step = "0.01" name="berat" id="berat" value="{{ $periksa->berat}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tinggi" class="col-md-2">Tinggi</label>
        <input type="number" name="tinggi" id="tinggi" value="{{ $periksa->tinggi}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tensi" class="col-md-2">Tensi</label>
        <input type="text" name="tensi" id="tensi" value="{{ $periksa->tensi}}" class="form-control" required>
    </div>
    <div class="form-group">
            <label for="keterangan" class="col-md-2">Keterangan</label>
                <select id="keterangan" name="keterangan" class="form-control">
                    <option value="normal">Normal</option>
                    <option value="pemantauan lebih lanjut">Pemantauan lebih lanjut</option>
                    <option value="tindakan medis">Tindakan medis</option>
                </select>
    </div>
    <div class="form-group">
        <label for="pasien" class="col-md-2">Nama Pasien</label>
        <select name="pasien_id" class="form-select form-select-lg mb-3 col-md-6">
            <option>--Pilih--</option>
            @foreach($list_pasien as $pasien)
            <option value="{{ $pasien->id }}" {{ $periksa->pasien_id==$pasien->id ? 'selected': ''}}>
                {{ $pasien->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="paramedik" class="col-md-2">Nama Paramedik</label>
        <select name="paramedik_id" class="form-select form-select-lg mb-3 col-md-6">
            <option>--Pilih--</option>
            @foreach($list_paramedik as $paramedik)
            <option value="{{ $paramedik->id }}" {{ $periksa->paramedik_id==$paramedik->id ? 'selected': ''}}>
                {{ $paramedik->nama }}
            </option>
            @endforeach
        </select>
    </div>

    <input type="hidden" name="id" value="{{ $periksa->id }}">
    <a href="{{ route('periksa.index') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>