<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

function kelulusan($uts, $uas, $tugas) {
  /**
  * Function kelulusan, jika:
  * total nilai lebih dari 55 maka lulus
  * total nilai kurang dari 55 maka tidak lulus
  */
  $total_nilai = ($uts + $uas + $tugas) / 3;
  if ($total_nilai >= 55) {
    return "Lulus";
  } else {
    return "Tidak Lulus";
  }
}

function grade($uts, $uas, $tugas) {
  /**
  * Function grade, jika:
  * total nilai <= 100 maka A
  * total nilai <= 84 maka B
  * total nilai <= 69 maka C
  * total nilai <= 55 maka D
  * total nilai <= 35 maka E
  * selain itu maka I
  */ 
  $total_nilai = ($uts + $uas + $tugas) / 3;
  if ($total_nilai <= 35) {
    return "E";
  } elseif ($total_nilai <= 55) {
    return "D";
  } elseif ($total_nilai <= 69) {
    return "C";
  } elseif ($total_nilai <= 84) {
    return "B";
  } elseif ($total_nilai <= 100) {
    return "A";
  } else {
    return "I";
  }
}

function predikat($uts, $uas, $tugas) {
  /**
  * Function predikat, jika:
  * grade A maka Sangat Memuaskan
  * grade B maka Memuaskan
  * grade C maka Cukup
  * grade D maka Kurang
  * grade E maka Sangat Kurang
  * selain itu maka Tidak Ada
  *
  * Tips: Gunakan switch untuk mempermudah 
  * melakukan pengecekan kondisi berdasarkan function grade
  */ 
  $nilai_grade = grade($uts, $uas, $tugas);
  switch ($nilai_grade) {
    case "A":
      return "Sangat Memuaskan";
      break;
    case "B":
      return "Memuaskan";
      break;
    case "C":
      return "Cukup";
      break;
    case "D":
      return "Kurang";
      break;
    case "E":
      return "Sangat Kurang";
      break;
    default:
      return "Tidak Ada";
  }
}
?>


