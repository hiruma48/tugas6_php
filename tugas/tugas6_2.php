<!DOCTYPE html>
<html>
<head>
    <title>tugas 6</title>
</head>
<body>
    <hr style="border-top: 2px dashed #000;">
    <hr style="border-top: 2px dashed #000;">
    <?php
    $jambu = 15000;
    $kerdus = 2000;

    $JambuTotal = ($jambu*5)*6;
    $DusTotal = $kerdus*2;
    $TotalPenjualan = $JambuTotal+$DusTotal;

    echo "Harga Jambu = Rp $jambu /Kg <br>";
    echo "Harga Kardus = Rp $kerdus/pcs <br>";
    echo "Total Penjualan (Dus dan Jambu) = Rp $TotalPenjualan ";
    
    ?>
    <hr style="border-top: 2px dashed #000;">
    <hr style="border-top: 2px dashed #000;">

</body>
</html>