<?php 
//     $mahasiswa =  [
//     [
//         "nama" => "Ardy Wirasaputra",
//         "nim" => "181011450168",
//         "email"  => "ardywirasaputra@gmail.com"
//     ],
//     [
//     "nama" => "Cici Awalia",
//     "nim" => "181011542122",
//     "email" => "ciciawalia@gmail.com"
//     ]
// ];

//! json_encode() -> untuk request
$dbh = new PDO("mysql:host=localhost;dbname=phpdasar", "root", "");
$db = $dbh->prepare("SELECT * FROM mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;


?>