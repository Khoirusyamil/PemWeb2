<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Table Jenis Kendaraan</x-slot> 
<x-slot name="breadcrumb">Jenis Kendaraan</x-slot>

<h2 class="text-center">Data Jenis Kendaraan</h2>
@if (Auth::user()->role == 'admin')
<a href="{{ route('jenis_kendaraan.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kendaraan</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_jenis_kendaraan as $jenis_kendaraan)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $jenis_kendaraan->nama }}</td>
            <td>
               <a href="{{ route('jenis_kendaraan.view', $jenis_kendaraan->id) }}" class="btn btn-block btn-success m-2">View</a>
               @if (Auth::user()->role == 'admin')
               <form action="{{ route('jenis_kendaraan.destroy', $jenis_kendaraan->id) }}" method="post">
               <a href="{{ route('jenis_kendaraan.edit', $jenis_kendaraan->id) }}" class="btn btn-block btn-warning m-2">Edit</a>
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