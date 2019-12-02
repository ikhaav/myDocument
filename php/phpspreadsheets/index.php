<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$inputFileName = 'file/TestExcel.xlsx'; //ชื่อไฟล์ Excel ที่ต้องการอ่านข้อมูล
    echo $inputFileName;
    echo '<hr>';
$spreadsheet = IOFactory::load($inputFileName);
$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);


echo "<table style='width: 50%;'>";
foreach ($sheetData as $row) {
    if ($row['B'] !='') {
        echo "<tr>";
        echo "<td style='border: 1px solid black;text-align: center;'>".$row['B']."</td>";
        echo "<td style='border: 1px solid black;text-align: center;'>".$row['C']."</td>";
        echo "<td style='border: 1px solid black;text-align: center;'>".$row['D']."</td>";
        echo "</tr>";
    }
}
echo "</table>";