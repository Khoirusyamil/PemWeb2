<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title"></x-slot> 
<x-slot name="card_title">Tambah Data Peminjaman</x-slot> 
<x-slot name="breadcrumb">Tambah Data</x-slot>
<form action="{{ route('peminjaman.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_peminjam" class="col-md-2">Nama Peminjam</label>
        <input type="text" name="nama_peminjam" id="nama_peminjam" value="{{ $peminjaman->nama_peminjam }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="ktp_peminjam" class="col-md-2">KTP Peminjam</label>
        <input type="text" name="ktp_peminjam" id="ktp_peminjam" value="{{ $peminjaman->ktp_peminjam}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="keperluan_pinjam" class="col-md-2">Keperluan</label>
        <input type="text" name="keperluan_pinjam" id="keperluan_pinjam" value="{{ $peminjaman->keperluan_pinjam}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="mulai" class="col-md-2">Tanggal Mulai</label>
        <input type="date" name="mulai" id="mulai" value="{{ $peminjaman->mulai}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="selesai" class="col-md-2">Tanggal Selesai</label>
        <input type="date" name="selesai" id="selesai" value="{{ $peminjaman->selesai}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="biaya" class="col-md-2">Biaya</label>
        <input type="number" step="0.01" min="0" max="10000000" placeholder="Rp 0,00" name="biaya" id="biaya" value="{{ $peminjaman->biaya }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="komentar_peminjam" class="col-md-2">Komentar</label>
        <input type="text" name="komentar_peminjam" id="komentar_peminjam" value="{{ $peminjaman->komentar_peminjam}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="status_peminjam" class="col-md-2">Status</label>
        <input type="text" name="status_peminjam" id="status_peminjam" value="{{ $peminjaman->status_peminjam}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="armada" class="col-md-2">Mobil yang Disewakan</label>
        <select name="armada_id" class="form-control">
            <option>--Pilih--</option>
            @foreach($list_armada as $armada)
            <option value="{{ $armada->id }}" {{ $peminjaman->armada_id==$armada->id ? 'selected': ''}}>
                {{ $armada->merk }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $peminjaman->id }}">
    <a href="{{ route('peminjaman.index') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>