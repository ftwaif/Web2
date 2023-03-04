<?php
    $nama_siswa = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_praktikum = $_POST['praktikum'];
    $rata_rata = ((30/100 * $nilai_uts) + (35/100 * $nilai_uas) + (35/100 * $nilai_praktikum));
    
    #keterangan
    if ($rata_rata > 55) {
      $keterangan = "Lulus";
    }else {
      $keterangan = "Tidak Lulus";
    }

    #grade
    if ($rata_rata >= 85 && $rata_rata < 100) {
      $grade = "A";
    }elseif ($rata_rata >= 70 && $rata_rata < 85) {
      $grade = "B";
    }elseif ($rata_rata >= 56 && $rata_rata < 70) {
      $grade = "C";
    }elseif ($rata_rata >= 36 && $rata_rata < 56) {
      $grade = "D";
    }elseif ($rata_rata >= 0 && $rata_rata < 36) {
      $grade = "E";
    }else {
      $grade = "I";
    }
    
    #keterangan grade
    switch ($grade) {
      case 'A':
        $keterangan_grade = "Sangat Memuaskan";
        break;
      
      case 'B':
        $keterangan_grade = "Memuaskan";
        break;

      case 'C':
        $keterangan_grade = "Cukup";
        break;

      case 'D':
        $keterangan_grade = "Kurang";
        break;

      case 'E':
        $keterangan_grade = "Sangat Kurang";
        break;

      default:
        $keterangan_grade = "Tidak Ada";
        break;
    }

    echo "Nama: $nama_siswa <br>
         Mata Kuliah: $matkul <br>
          Nilai UTS: $nilai_uts <br>
          Nilai UAS: $nilai_uas <br>
         Praktikum: $nilai_praktikum <br>
         Rata: " . round($rata_rata) .  "<br>
         Grade: $grade ($keterangan_grade) <br>
         Predikat: $keterangan <br>"

?>