<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Table Pembayaran</x-slot> 
<x-slot name="breadcrumb">Pembayaran</x-slot>

<h2 class="text-center">Data Pembayaran</h2>
@if (Auth::user()->role == 'admin')
<a href="{{ route('pembayaran.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jumlah Bayar</th>
            <th>Peminjaman</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_pembayaran as $pembayaran)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pembayaran->tanggal }}</td>
            <td>Rp. {{ $pembayaran->jumlah_bayar }}</td>
            <td>{{ $pembayaran->peminjaman->nama_peminjam }}</td>
            <td>
                <a href="{{ route('pembayaran.view', $pembayaran->id) }}" class="btn btn-block btn-success m-2 ">View</a>
                @if (Auth::user()->role == 'admin')
               <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="post">
               <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="btn btn-block btn-warning m-2">Edit</a>
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