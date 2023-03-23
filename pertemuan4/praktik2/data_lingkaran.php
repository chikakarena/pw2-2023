<?php
require_once 'class_lingkaran.php';

echo "Nilai PHI: ".Lingkaran::PHI;
echo '<br> <br>';

$lingkar1 = new Lingkaran(7);
$lingkar2 = new Lingkaran(15);

echo '<br>Luas Lingkaran 1 '.'<u>'.$lingkar1->getLuas().'</u>';
echo '<br>Luas Lingkaran 2 '.'<u>'.$lingkar2->getLuas().'</u>';
echo '<br>';
echo '<br>Kel Lingkaran 1 '.'<u>'.$lingkar1->getKel().'</u>';
echo '<br>Kel Lingkaran 2 '.'<u>'.$lingkar2->getKel().'</u>';
?>