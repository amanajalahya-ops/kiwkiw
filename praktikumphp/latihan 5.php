<?php
    $siswa = ["Andi", "Budi", "Citra", "Dewi"];

    echo "<h3>Daftar Nama Siswa</h3>";  
    foreach ($siswa as $index => $nama) {
        $no = $index + 1;
        echo "$no. $nama <br>";
}

$biodata = [
    "nama" => "Nando",
    "kelas" => "XI PPLG B",
    "hobi" => "Tidur"
];
echo "Nama: " . $biodata["nama"]. "<br>";
echo "kelas: " . $biodata["kelas"]. "<br>";
echo "hobi: " . $biodata["hobi"]. "<br>";
?>