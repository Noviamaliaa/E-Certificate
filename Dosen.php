<!-- header -->
<?php 
include 'layout/header.php';
include 'DB/connect-db.php';
?>

<!-- page -->
	<div class="content-main">
		<!--banner-->	
		<div class="banner">
			<h2>
				<a href="index.php">Beranda</a>
				<i class="fa fa-angle-right"></i>
				<span>Data Dosen</span>
			</h2>
		</div>
		<div class="blank">
			<div class="blank-page">
				<?php 
				if(isset($_GET['message'])){
					if($_GET['message'] == "success"){
						echo "<div class='alert alert-success' role='alert'>Data disimpan</div>";
					} else if ($_GET['message'] == 'deleted') {
						echo "<div class='alert alert-warning' role='alert'>Data telah dihapus</div>";
					} else {
						echo "<div class='alert alert-danger' role='alert'>Gagal Simpan</div>";
					}
				}
				?>
				<a href="form.php?tambah=dosen" class="btn btn-default">Tambah</a>
				<?php
					if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
					  //we give the value of the starting row to 0 because nothing was found in URL
						$startrow = 0;
					//otherwise we take the value from the URL
					} else {
						$startrow = (int)$_GET['startrow'];
					}
					$result = mysqli_query($connect,"select * FROM dosen order by no LIMIT $startrow,10 ");
					if ($result)
					{
						if ($result->num_rows > 0)
						{
							//Pagination..
							echo " <ul class='pager'>";
							$prev = $startrow - 10;
							if ($prev >= 0)
							    echo '<li class="previous"><a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a></li>';
							if ($result->num_rows >=10) 
								echo '<li class="next"><a href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+10).'">Next</a></li>';
							echo "</ul>";
							echo "<table class='table table-bordered'>";

							echo "<tr><th>no</th><th>NIP</th><th>Nama</th><th>gelar</th><th>status</th><th colspan=2>aksi</th>";

							while ($row = $result->fetch_object())
							{
								echo "<tr>";
								echo "<td>" . $row->no . "</td>";
								echo "<td>" . $row->nip . "</td>";
								echo "<td>" . $row->namadosen . "</td>";
								echo "<td>" . $row->gelar . "</td>";
								echo "<td>" . $row->status . "</td>";
								echo "<td><a href='form.php?update=dosen&id=" . $row->nip . "'>Edit</a></td>";
								// echo "<td><a href='delete.php?id=" . $row->nip . "'>Delete</a></td>";
								echo "</tr>";
							}

							echo "</table>";
						}
						else
						{
							echo "No results to display!";
						}
					}
					else
					{
						echo "Error: " . $connect->error;
					}

					$connect->close();
				?>
			</div>
		</div>

	</div>	
</div>

<!-- footer -->
<?php include 'layout/footer.php';?>

