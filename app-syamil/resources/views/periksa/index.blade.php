<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Data Periksa</x-slot> 
<x-slot name="card_title">Daftar Periksa Aktif</x-slot> 
<x-slot name="card_footer">@RumahSakit NF</x-slot>
<x-slot name="breadcrumb">Periksa</x-slot>

<h2 class="text-center">Data Periksa</h2>
<a href="{{ route('periksa.create') }}"><button class="btn btn-primary mb-1">Tambah Data</button></a>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Berat</th>  
            <th>Tinggi</th>
            <th>Tensi</th>
            <th>Keterangan</th>
            <th>Pasien</th>
            <th>Paramedik</th> 
            <th>Aksi</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($list_periksa as $periksa)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $periksa->tanggal }}</td>
            <td>{{ $periksa->berat }}</td>
            <td>{{ $periksa->tinggi }}</td>
            <td>{{ $periksa->tensi }}</td>
            <td>{{ $periksa->keterangan }}</td>
            <td>{{ $periksa->pasien->nama }}</td>
            <td>{{ $periksa->paramedik->nama }}</td>
            <td>
               <form action="{{ route('periksa.destroy', $periksa->id) }}" method="post">
               <a href="{{ route('periksa.view', $periksa->id) }}" class="btn btn-transparant"><i class="fas fa-eye text-info"></i></a>
               <a href="{{ route('periksa.edit', $periksa->id) }}" class="btn btn-transparant"><i class="fas fa-edit text-warning"></i></a>
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