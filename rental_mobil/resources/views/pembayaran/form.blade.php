<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title"></x-slot> 
<x-slot name="card_title">Tambah Data Pembayaran</x-slot> 
<x-slot name="breadcrumb">Tambah Data</x-slot>
<form action="{{ route('pembayaran.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="tanggal" class="col-md-2">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $pembayaran->tanggal }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jumlah_bayar" class="col-md-2">Jumlah Bayar</label>
        <input type="number" name="jumlah_bayar" id="jumlah_bayar" step="0.01" min="0" max="10000000" placeholder="Rp 0,00" value="{{ $pembayaran->jumlah_bayar }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="peminjaman" class="col-md-2">Peminjaman</label>
        <select name="peminjaman_id" class="form-control">
            <option>--Pilih--</option>
            @foreach($list_peminjaman as $peminjaman)
            <option value="{{ $peminjaman->id }}" {{ $pembayaran->peminjaman_id==$peminjaman->id ? 'selected': ''}}>
                {{ $peminjaman->nama_peminjam }}
            </option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="id" value="{{ $pembayaran->id }}">
    <a href="{{ route('pembayaran.index') }}" class="btn btn-success mr-2">Batal</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</x-layout>