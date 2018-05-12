
<!DOCTYPE html>

<?php
include 'conn.php';



?>


<html lang="en">
    <head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tambahan.css">
    <link rel="icon" type="image/png" href="logobar.png"/>
		<title>PRK 1439 H</title>
	</head>
	<body>



    <div class="container">
          <form id="contact" action="fungsi_grandopening.php" method="POST">
            <center>
            <img src="logo.png" class="img-responsive" width="300" />
            <h3><br>Daftar Hadir <br> Grand Opening </h3>
            <h4>PRK1439<br>
              Masjid Syamsul Ulum</h4>
          </center>
            <fieldset>
              <input placeholder="Nama" type="text" tabRindex="1" required autofocus name="nama">
            </fieldset>
            <fieldset>
              <input placeholder="Organisasi/Komunitas" type="text" name="organisasi">
            </fieldset>
            <fieldset>
              <input placeholder="No. HP" type="tel" tabindex="2"  name="nohp">
            </fieldset>
            <fieldset>
              <textarea class="stextarea" placeholder="Kritik dan Saran Untuk Panitia PRK1439
      Example :
      -  Menu Bukber Yang Enak
      -  Undang Pemateri Kajian Yang Keren, etc" type="text" tabindex="3"  name="kritik"></textarea>
            </fieldset>
            <fieldset>
              <input placeholder="Jumlah Donasi (tidak wajib)" type="text" tabindex="3" name="donasi">
            </fieldset>
            <fieldset>
              <center><h4>Apakah saudara berkenan jika dimasukkan ke dalam grup WA/LINE Info Pejuang Ramadhan Kampus 1439 H ? </h4>
              <label class="radio-inline"><input type="radio" name="masukgrup" value="iya" required> Ya &nbsp;  &nbsp;</label> &nbsp;  &nbsp;
              <label class="radio-inline"><input type="radio" name="masukgrup" value="tidak" required> &nbsp;  &nbsp; Tidak </label>
              </center>
            </fieldset>
            <fieldset>
              <button name="submit" type="submit" id="contact-submit" href="fungsi_grandopening.php">Submit</button>
            </fieldset>
          </form>
      </div>
	</body>
</html>
