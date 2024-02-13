<?php


// $mahasiswa = [
//     [
//         "nama" => "Putra",
//         "nim" => 220030223,
//         "alamat" => "pekuwudan"
//     ],
//     [
//         "nama" => "Putra",
//         "nim" => 220030223,
//         "alamat" => "pekuwudan"
//     ],
//     [
//         "nama" => "Putra",
//         "nim" => 220030223,
//         "alamat" => "pekuwudan"
//     ],
//     [
//         "nama" => "Putra",
//         "nim" => 220030223,
//         "alamat" => "pekuwudan"
//     ],
//     [
//         "nama" => "Putra",
//         "nim" => 220030223,
//         "alamat" => "pekuwudan"
//     ],
//     [
//         "nama" => "Putra",
//         "nim" => 220030223,
//         "alamat" => "pekuwudan"
//     ],
//     [
//         "nama" => "Putra",
//         "nim" => 220030223,
//         "alamat" => "pekuwudan"
//     ],
//     [
//         "nama" => "Putra",
//         "nim" => 220030223,
//         "alamat" => "pekuwudan"
//     ],
 
// ];


$dbh = new PDO('mysql:host=localhost;dbname=coffeeshop','root',);


$db = $dbh->prepare('SELECT * FROM binatang');

$db-> execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);






$data = json_encode($mahasiswa);

echo($data);
?>