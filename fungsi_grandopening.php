<?php

include 'conn.php';



$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$organisasi = $_POST['organisasi'];
$kritik = $_POST['kritik'];
$masukgrup = $_POST['masukgrup'];
$donasi = $_POST['donasi'];


if ($_POST['donasi'] == true) {
  $sql = "INSERT INTO go_prk VALUES ('$nama','$organisasi','$nohp','$kritik','$donasi','$masukgrup')";

}else {
  $sql = "INSERT INTO go_prk VALUES ('$nama','$organisasi','$nohp','$kritik','0','$masukgrup')";

}


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('Location: grand_opening.php');
exit;


?>
