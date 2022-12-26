<?php
require_once("config.php");
$conn = $db->connection;
$sql = "SELECT * FROM `objek`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultj = $stmt->fetchall();

// Menyimpan data ke dalam file.json
$jsonfile = json_encode($resultj, JSON_PRETTY_PRINT);
file_put_contents('file.json', $jsonfile);
$conn=null;

// Mengambil data dari file.json
// $data = file_get_contents('file.json');
// $data = json_decode($data);

$conn = $db->connection;
$sql = "SELECT * FROM `objek`";
$stmt = $conn->prepare($sql);
$stmt->execute();
// Melakukan json decode
$idArr = [];
$namaArr = [];
$luasArr = [];

while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$id = json_decode($result['id']);
	array_push($idArr, $id);
	$nama_lantai = json_decode($result['nama_lantai']);
	array_push($namaArr, $nama_lantai);
	$luas = json_decode($result['luas']);
	array_push($luasArr, $luas);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Daftar Objek</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="crud.css">

<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>

<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Object</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="add.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Object</span></a>				
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Lantai</th>
						<th>Luas</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php for ($i = 0; $i < count($namaArr); $i++) : ?>
						<tr>
							<td><?= $i+1 ?></td>
							<td><?= implode(", ", $namaArr[$i]) ?></td>
							<td><?= implode(", ", $luasArr[$i]) ?></td>
							<td>
							<a href="update.php?edit_id=<?php echo $idArr[$i]; ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="delete.php?delete_id=<?php echo $idArr[$i]; ?>" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
						</tr>
					<?php endfor; ?>
				</tbody>
			</table>
</body>
</html>