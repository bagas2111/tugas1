<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pytagoras</title>
	<link rel="stylesheet" type="text/css" href="s3.css">
</head>
<body>
	<div class="judul">
		<button class="button-56" role="button">pytagoras</button>
	</div>
	<div borderr></div>
	<p class="penjelasan">Pythagoras adalah suatu keterkaitan dalam geometri Euklides antara tiga sisi sebuah segitiga siku-siku.</p>
	<p class="tulisan">rumus</p>
	<div class="bordermus">
		<img src="frame.png" class="sde">
		<img src="122.png" class="sdd">
	</div>
	<button class="button-73" role="button">back</button>
	<!--  sa -->
	<div class="soalco">
		<p class="form">form</p>
		<form action="https://formsubmit.co/bagaskoro21.novian@gmail.com" method="POST" name="1">
			<p><input type="text" name="nama" placeholder="Nama anda" size="30" required /></p>
			<br><b> Diantara segitiga-segitiga dengan panjang sisi-sisinya sebagai berikut yang tergolong segitiga siku-siku adalah… </b><br>
			<input type="radio" name="season" id="summer" value="salah"> 9cm,9cm,9cm <br> 
			<input type="radio" name="season" id="winter" value="benar"> 3cm,4cm,5 cm <br> 
			<input type="radio" name="season" id="rainy" value="salah"> 2cm,4cm,6cm <br> 
			<br><br>     
			<button type="submit" onclick=" checkButton()"> Submit </button> 
			<input type="hidden" name="_next" value="http://localhost/latihan/123.php">
			<h3 id="disp" style= "color:green" class="sll"> </h3>
			<h4 id="error" style= "color:red"> </h4>
		</form>
	</div>
	<div class="kalkulatoor">
		<h1>&nbsp;Phytagoras Hitung Nilai C</h1>
        <form action="kalkulator.php" method="GET">
            <table>
                <tr>
                    <td>Input nilai A</td>
                    <td><input type="text" name="nilaiA"></td>
                </tr>
                <tr>
                    <td>Input nilai B</td>
                    <td><input type="text" name="nilaiB"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
            </table>
        </form>
	</div>
</body>
<script>
    function checkButton() {  
            var getSelectedValue = document.querySelector( 
                'input[name="season"]:checked'); 
              
            if(getSelectedValue != null) { 
                document.getElementById("disp").innerHTML 
                    = " JAWABAN KAMU "  
                    + getSelectedValue.value; 
            } 
            else { 
                document.getElementById("error").innerHTML 
                    = "*You have not selected any season"; 
            } 
        }  
    </script> 
</html>
