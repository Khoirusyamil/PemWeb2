<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Table Peminjaman</x-slot> 
<x-slot name="breadcrumb">Peminjaman</x-slot>

<h2 class="text-center">Data Peminjaman</h2>
@if (Auth::user()->role == 'admin')
<a href="{{ route('peminjaman.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>KTP Peminjam</th>
            <th>Keperluan</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Biaya</th>
            <th>Komentar</th>
            <th>Status Peminjam</th>
            <th>Mobil yang Disewakan</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_peminjaman as $peminjaman)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $peminjaman->nama_peminjam }}</td>
            <td>{{ $peminjaman->ktp_peminjam }}</td>
            <td>{{ $peminjaman->keperluan_pinjam }}</td>
            <td>{{ $peminjaman->mulai }}</td>
            <td>{{ $peminjaman->selesai }}</td>
            <td>{{ $peminjaman->biaya }}</td>
            <td>{{ $peminjaman->komentar_peminjam }}</td>
            <td>{{ $peminjaman->status_peminjam }}</td>
            <td>{{ $peminjaman->armada->merk }}</td>
            <td>
                <a href="{{ route('peminjaman.view', $peminjaman->id) }}" class="btn btn-block btn-success m-2">View</a>
                @if (Auth::user()->role == 'admin')
               <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="post">
               <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-block btn-warning m-2">Edit</a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-block btn-danger m-2">Delete</button>
               @endif
               </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>