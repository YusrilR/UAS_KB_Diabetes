<?php
include "connect.php";

// Query diganti
$q = "SELECT * FROM diabetes";
$r = mysqli_query($conn, $q);

// parameter fungsi dari loadHtml-nya Dompdf adalah sebuah STRING
$content = "
    <table border='1' style='border-collapse:collapse'>
        <tr>

        <td>Pregnancies</td>
        <td>PlasmaGlucose</td>
        <td>DiastolicBlood</td>
        <td>Tricep</td>
        <td>SerumInsulin</td>
        <td>BMI</td>
        <td>DiabetesPedigre</td>
        <td>AGE</td>
        <td>Diabetic</td>
        </tr>";
$no = 1;
while ($d = mysqli_fetch_array($r)) {
    $content .= "
        <tr>

            <td>" . $d['Pregnancies'] . "</td>
            <td>" . $d['PlasmaG'] . "</td>
            <td>" . $d['DiastolicBloodPressure'] . "</td>
            <td>" . $d['TricepsThickness'] . "</td>
            <td>" . $d['SerumInsulin'] . "</td>
            <td>" . $d['BMI'] . "</td>
            <td>" . $d['DiabetesPedigree'] . "</td>
            <td>" . $d['Age'] . "</td>
            <td>" . $d['Diabetes'] . "</td>
        </tr>";
    $no++;
}
$content .= "</table>";

if ($_POST['format'] == '1') {
    header("Content-type: application/x-msdownload");
    header("Content-Disposition: attachment; filename=data_diabetes.doc");
    header("Pragma: no-cache");
    header("Expires: 0");
    echo $content;
} elseif ($_POST['format'] == '2') {
    header("Content-type: application/x-msdownload");
    header("Content-Disposition: attachment; filename=data_diabetes.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    echo $content;
} elseif ($_POST['format'] == '3') {
    require_once('dompdf/autoload.inc.php');

    // instantiate and use the dompdf class
    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($content);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream('DataDiabetes-' . date('YmdHis') . '.pdf');
}
