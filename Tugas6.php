<?php
$nilai_mufthihah = 87;


if ($nilai_mufthihah >= 85) {
    echo "sangat memuaskan";
}
elseif ($nilai_mufthihah >= 80) {
    echo "baik";
}
elseif ($nilai_mufthihah <= 75) {
    echo "cukup";
}
else {
    echo "tidak cukup";
}