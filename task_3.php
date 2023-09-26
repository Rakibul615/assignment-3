<?php
$grades = [85, 92, 78, 88, 95];
function sortAndPrintGrades($arr) {

    arsort($arr);
    print_r($arr);
}
sortAndPrintGrades($grades);

