<?php
    $nama = "Fernando Agracio";
    $kelas = "XI PPLG B";
    $nilai_uts = 96;
    $nilai_uas = 90;
    $rata_rata = $nilai_uts + $nilai_uas / 2;
    $lulus = $rata_rata >= 75;

    echo "Nama: $nama <br>"; 
    echo "Kelas: $kelas <br>"; 
    echo "Rata-rata Nilai: $rata_rata <br>"; 
    echo "Status Kelulusan: "; 
    echo $lulus ? "LULUS" : "TIDAK LULUS";
?>