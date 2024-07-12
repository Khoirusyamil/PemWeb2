<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Daftar Kelurahan Aktif</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Kelurahan</x-slot>

<h2 class="text-center">Data kelurahan</h2>
<a href="{{ route('kelurahan.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_kelurahan as $kelurahan)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $kelurahan->nama }}</td>
            <td>
               <form action="{{ route('kelurahan.destroy', $kelurahan->id) }}" method="post">
               <a href="{{ route('kelurahan.view', $kelurahan->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               <a href="{{ route('kelurahan.edit', $kelurahan->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-transparant"><i class="fas fa-trash text-danger"></i></button>
               </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>