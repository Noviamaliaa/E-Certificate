<?php 
include '../DB/connect-db.php';
$nim = $_GET['id']; 
$query = $connect->query("SELECT * FROM mahasiswa WHERE nim = $nim");
$result = $query->fetch_row();
$sertifikat = mysqli_query($connect, "select * from sertifikat where mahasiswa = $nim");
$sertifikat = mysqli_fetch_row($sertifikat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
	<script type="text/javascript">
		function myFunction() {
			alert('test');
		}
	</script>
</head>
<body onload="HTMLtoPDF()">
	<div id="HTMLtoPDF">
		<div class="container">
			
				<div class="row" style="margin-bottom: 150px; margin-top: 50px">
					<div class="col-sm-6" style="">Number : Un.05/<?=$result[0]?></div>
					<div class="col-sm-6" style="text-align: right;">Number : FST/SI/<?=$result[2]?></div>
				</div>
				<div class="row">
					<div class="col-sm-12" style="text-align: center;">
						<STRONG>
							MINISTRY OF RELIGIOUS AFFAIRS<br>
							STATE OF ISLAMIC UNIVERSITY<br>
							SUNAN GUNUNG DJATI BANDUNG<br>
						</STRONG>
						herewith has declared that : <br>
						<strong> <?=$result[3]?></strong> <br>
						student ID Number : <?=$result[1]?>
					</div>
				</div>
				<div>Born in <?=$result[5]?><?=$result[6]?>		has finished and fulfilled all the requirements at Study of	<?=$result[4]?>	, therefore the University has conferred upon his the degree of:
					<center><strong>GELAR<!-- <?php echo $_POST['gelar']?> --></strong></center>
				</div>
				along with rights and obligations attached to the degree
				Given in Bandung, 

				<div></div>
				<div class="row">
					<div class="col-sm-4" style="text-align: center;">
						Dean, <br>
						Faculty of Scinece and Technology <br>
						<br><br>
						<strong>Dr. H. Opik Taupik Kurahman</strong><br>
						NIP. 19681241996031001
					</div>
					
					<div class="col-sm-4" style="align-content: center;">
						<!-- photo -->
					</div>
					<div class="col-sm-4" style="text-align: center;">
						RECTOR<br>
						<br>
						signed<br>
						<strong>Prof. Dr. H.Mahmud, M.Si</strong><br>
						NIP. 196204101988031001
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4" style="text-align: center">
						Date <?=date('d-m-Y')?><br>
						This is an authorized English Translation of the <br>
						original diploma issued by Islamic State<br>
						 University Sunan Gunung Djati Bandung<br>
						 <br>
						Faculty of Scinece and Technology <br>
						Dean<br>
						<br><br><br>
						<strong>Dr. H. Opik Taupik Kurahman</strong><br>
						NIP. 19681241996031001
					</div>
					<div class="col-sm-4"></div>
				</div>	
			</div>
	</div>
		
</body>
</html>