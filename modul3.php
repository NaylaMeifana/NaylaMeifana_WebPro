<?php
$buku = [
    ['judul' => 'ayahku bukan pembohong', 'penulis' => 'tere liye'],
    ['judul' => 'pulang-pergi', 'penulis' => 'tere liye'],
];

function viewbuku($buku) {
    echo "menampilkan data awal";
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr>
            <th>judul</th>
            <th>penulis</th>
          </tr>";
    foreach ($buku as $item){
        echo "<tr>";
        echo "<td>".$item['judul']."</td>";
        echo "<td>".$item['penulis']."</td>";
        echo "<tr>";
    }
    echo "</table>";
}
viewbuku($buku);


?> 