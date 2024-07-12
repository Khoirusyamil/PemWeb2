<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Unit Kerja</x-slot> 
<x-slot name="card_title">Daftar Unit Kerja Aktif</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Unit Kerja</x-slot>

<h2 class="text-center">Data Unit Kerja</h2>
<a href="{{ route('unit_kerja.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_unit_kerja as $unit_kerja)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $unit_kerja->nama }}</td>
            <td>
               <form action="{{ route('unit_kerja.destroy', $unit_kerja->id) }}" method="post">
               <a href="{{ route('unit_kerja.view', $unit_kerja->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               <a href="{{ route('unit_kerja.edit', $unit_kerja->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
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