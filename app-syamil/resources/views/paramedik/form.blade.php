<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title"></x-slot> 
<x-slot name="card_title">Form Tambah Paramedik</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">paramedik / Tambah Data</x-slot>
<form action="{{ route('paramedik.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama" class="col-md-2">Nama Paramedik</label>
        <input type="text" name="nama" id="nama" value="{{ $paramedik->nama }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="gender" class="col-md-12">Jenis Kelamin</label>
        <div class="form-check form-check-inline col-md-2">
            <input class="form-check-input col-md-3" type="radio" name="gender" id="gender1" value="L" {{ $paramedik->gender=='L' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline col-md-2">
            <input class="form-check-input col-md-3" type="radio" name="gender" id="gender2" value="P" {{ $paramedik->gender=='P' ? 'checked' :''}}>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        <label for="tmp_lahir" class="col-md-2">Tempat Lahir</label>
        <input type="text" name="tmp_lahir" id="tmp_lahir" value="{{ $paramedik->tmp_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tgl_lahir" class="col-md-2">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ $paramedik->tgl_lahir}}" class="form-control" required>
    </div>
    <div class="form-group">
            <label for="kategori" class="col-md-2">Kategori</label>
                <select id="kategori" name="kategori" class="form-control">
                    <option value="umum">Umum</option>
                    <option value="spesialis">Spesialis</option>
                    <option value="bidan">Bidan</option>
                    <option value="dokter gigi">Dokter Gigi</option>
                    <option value="psikolog">Psikolog</option>
                </select>
    </div>
    <div class="form-group">
        <label for="telpon" class="col-md-2">No.Telpon</label>
        <input type="number" name="telpon" id="telpon" value="{{ $paramedik->telpon}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat" class="col-md-2">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" required>{{ $paramedik->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label for="unit_kerja" class="col-md-2">Unit Kerja</label>
        <select name="unit_kerja_id" class="form-select form-select-lg mb-3 col-md-6">
            <option>--Pilih--</option>
            @foreach($list_unit_kerja as $unit_kerja)
            <option value="{{ $unit_kerja->id }}" {{ $paramedik->unit_kerja_id==$unit_kerja->id ? 'selected': ''}}>
                {{ $unit_kerja->nama }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $paramedik->id }}">
    <a href="{{ route('paramedik.index') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>