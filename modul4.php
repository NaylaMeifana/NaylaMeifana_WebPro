<?php
$barang = [
    ["nama" => " "]
];

if(isset($_POST['create'])) {
    $barang = $_POST['barang'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $barang[] = ["barang" => $barang, "kategori" => $kategori, "harga" => $harga];
}

if(isset($_POST['delete'])) {
    $index = $_POST['delete'];
    unset ($barang[$index]);
    $barang = array_values($barang);
}
?>
<form action="" method="post">
    <label for="nama">Nama Barang: </label>
    <input type="text" id="nama" name="nama" required><br>

    <label for="kategori">kategori: </label>
    <input type="text" id="kategori" name="kategori" required><br>
    <input type="submit" name="create" value="tambah barang"><br>
</form>