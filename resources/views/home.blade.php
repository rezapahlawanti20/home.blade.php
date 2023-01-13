<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="/dashboard">dashboard</a>
    @auth
    <a href="/profile">profile</a>
    @else
    <a href="/login">login</a>
    @endauth
    
<?php

$mahasiswa = [
    [
        'no' => '1',
        'nama' => 'Reza',
        'nim'  => '12345',
        'jurusan' => 'TI',
        'email' => 'reza@gmail.com',
        'nilai' => 70
    ],

    [
        'no' => '2',
        'nama' => 'Bambang',
        'nim'  => '12345',
        'jurusan' => 'TI',
        'email' => 'bambang@gmail.com',
        'nilai' => 85
    ],

    [
        'no' => '3',
        'nama' => 'Sugiono',
        'nim'  => '12345',
        'jurusan' => 'TI',
        'email' => 'sugiono@gmail.com',
        'nilai' => 80
    ]
];
?>
<table border="1">
<thead>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Jurusan</th>
    <th>Email</th>
    <th>Nilai</th>
    <th>Status</th>
</tr>
</thead>
<tbody>
<?php foreach ($mahasiswa as $data):?>
    <tr>
        <td><?=$data["no"]?></td>
        <td><?php echo $data["nama"]?></td>
        <td><?php echo $data["nim"]?></td>
        <td><?php echo $data["jurusan"]?></td>
        <td><?php echo $data["email"]?></td>
        <td><?php echo $data["nilai"]?></td>
        <td><?php 
        $nilai = $data["nilai"];
        
        if($nilai > 75){
            echo 'Lulus';
        }else{
            echo 'Tidak Lulus';
        }

         ?></td>
    </tr>
<?php endforeach ?>
</tbody>
</table>
</body>
</html>