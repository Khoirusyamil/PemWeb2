<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="card_title">Table Hak Akses</x-slot> 
<x-slot name="breadcrumb">Hak Akses</x-slot>

<h2 class="text-center">Data Hak Akses</h2>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>   
        </tr>
    </thead>
    <tbody>
        @foreach($list_akses as $akses)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $akses->name }}</td>
            <td>{{ $akses->email }}</td>
            <td>{{ $akses->role }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layout>