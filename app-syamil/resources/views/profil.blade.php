<x-layout>
<!-- Cara 2 - Kirimnya/Desainya Melalui View(untuk BlankPage & Card_Title): -->
<x-slot name="title">Halaman profil</x-slot> 
<x-slot name="card_title">Profilku</x-slot> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilku</title>
</head>
<body>
    <h1>Selamat Datang di Profile Saya</h1>
    <h2>Nama: Dono</h2>
    <h2>Prodi: SI</h2>
    <h2>Matkul: Pemweb2</h2>
    <hr>
    @php
        $nama = 'Kasino';
        $nilai = 50;
        //echo 'Apa Kabar '. $nama . '?';        
    @endphp
    @if ($nilai >=60)
        @php $ket = "LULUS"; @endphp
    @else
        @php
        $ket = "GAGAL";
        @endphp
    @endif        
    <h2> Nama Saya: {{ $nama }} dengan Nilai: {{ $nilai }} dinyatakan: {{ $ket }}</h2>
</body>
</html>
</x-layout>