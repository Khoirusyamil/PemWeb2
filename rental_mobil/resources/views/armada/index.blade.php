<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Table Armada</x-slot> 
<x-slot name="breadcrumb">Armada</x-slot>

<h2 class="text-center">Data Armada</h2>
@if (Auth::user()->role == 'admin')
<a href="{{ route('armada.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
@endif
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Tahun Beli</th>
            <th>Deskripsi</th>
            <th>Kapasitas Kursi</th>
            <th>Rating</th>
            <th>Jenis Kendaraan</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_armada as $armada)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $armada->merk }}</td>
            <td>{{ $armada->tahun_beli }}</td>
            <td>{{ $armada->deskripsi }}</td>
            <td>{{ $armada->kapasitas_kursi }}</td>
            <td>{{ $armada->rating }}</td>
            <td>{{ $armada->jenis_kendaraan->nama }}</td>
            <td>
               <a href="{{ route('armada.view', $armada->id) }}" class="btn btn-block btn-success m-2">View</a>
               @if (Auth::user()->role == 'admin')
               <form action="{{ route('armada.destroy', $armada->id) }}" method="post">
               <a href="{{ route('armada.edit', $armada->id) }}" class="btn btn-block btn-warning m-2">Edit</a>
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