<?php
$nilaimuftihah = 87;

if ($nilaimuftihah >= 85) {
    echo "Kriteria Sangat Memuaskan";
} elseif ($nilaimuftihah >= 80) {
    echo "Kriteria Baik";
} elseif ($nilaimuftihah >= 75) {
    echo "Kriteria Cukup";
} else {
    echo "Kriteria Tidak Cukup";
}
?>