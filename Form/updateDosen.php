<!-- header -->
<?php 
include 'layout/header.php';
include 'DB/connect-db.php';

$nim = $_GET['id'];
$result = mysqli_query($connect,"select * FROM dosen where nip=$nim")->fetch_object();
?>

<!-- page -->
	<div class='content-main'>
		<!--banner-->	
		<div class='banner'>
			<h2>
				<a href='index.php'>Beranda</a>
				<i class='fa fa-angle-right'></i>
				<a href='Mahasiswa.php'>Dosen</a>
				<i class='fa fa-angle-right'></i>
				<span>Update Data</span>
			</h2>
		</div>
		<div class='blank'>
			<div class='blank-page'>
				<div class='grid-form1'>
					<h3 id='forms-example' class=''>Update Data Dosen</h3>
					<form method='POST' action='DB/UpdateDosen.php'>
						<div class='form-group'>
							<label for='exampleInputEmail1'>NIP</label>
							<?php
							echo "<input type='text' class='form-control' name='nip' placeholder='' value='$result->nip'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Nama</label>
							<?php
							echo "<input type='text' class='form-control' name='nama' placeholder='' value='$result->namadosen'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Gelar</label>
							<?php
							echo "<input type='text' class='form-control' name='gelar' placeholder='' value='$result->gelar'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Prodi</label>
							<?php
							echo "<input type='text' class='form-control' name='prodi' placeholder='' value='$result->prodi'>	";
							?>
							
						</div>
						<div class='form-group'>
							<label for='exampleInputEmail1'>Status</label>
							<?php
							echo "<input type='text' class='form-control' name='status' placeholder='' value='$result->status'>	";
							?>
							
						</div>
						<button type='submit' class='btn btn-default'><i class='fa fa-file'></i> Simpan Perubahan</button>
						</div>

					</form>
				</div>
			</div>
		</div>

	</div>	
</div>

<!-- footer -->
<?php include 'layout/footer.php';?>

