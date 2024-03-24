<?php
$mahasiswa = [
    [
        "nama" => "Harry Potter",
        "nrp" => "223040001",
        "email" => "HeriUhuy@gmail.com",
        "jurusan" => "Gryffindor",
        "gambar" => "harry.jpeg"
    ],
    [
        "nama" => "Hermione Granger",
        "nrp" => "223040002",
        "email" => "Hermione10@gmail.com",
        "jurusan" => "Gryffindor",
        "gambar" => "hermione.jpeg"
    ],
    [
        "nama" => "Ron Weasley",
        "nrp" => "223040003",
        "email" => "ronron@gmail.com",
        "jurusan" => "Gryffindor",
        "gambar" => "ron.jpeg"
    ],
    [
        "nama" => "Neville Longbottom",
        "nrp" => "223040004",
        "email" => "NevilNih@gmail.com",
        "jurusan" => "Gryffindor",
        "gambar" => "neville.jpeg"
    ],
    [
        "nama" => "Draco Malfoy",
        "nrp" => "224040001",
        "email" => "DracBang@gmail.com",
        "jurusan" => "Slytherin",
        "gambar" => "malfoy.jpeg"
    ],
    [
        "nama" => "Luna Lovegood",
        "nrp" => "223040005",
        "email" => "Lunch12@gmail.com",
        "jurusan" => "Gryffindor",
        "gambar" => "luna.jpeg"
    ],
    [
        "nama" => "George Weasley",
        "nrp" => "223040006",
        "email" => "Ggeorge@gmail.com",
        "jurusan" => "Gryffindor",
        "gambar" => "george.jpeg"
    ],
    [
        "nama" => "Fred Weasley",
        "nrp" => "223040007",
        "email" => "Ffred@gmail.com",
        "jurusan" => "Gryffindor",
        "gambar" => "fred.jpeg"
    ],
    [
        "nama" => "Cedric Diggory",
        "nrp" => "213040001",
        "email" => "CedBruh@gmail.com",
        "jurusan" => "Gryffindor",
        "gambar" => "Cedric Diggory.jpeg"
    ],
    [
        "nama" => "Cho Chang",
        "nrp" => "223040008",
        "email" => "Chobalagi.com",
        "jurusan" => "Gryffindor",
        "gambar" => "cho.jpeg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>

        </ul>
    <?php endforeach; ?>
</body>

</html>