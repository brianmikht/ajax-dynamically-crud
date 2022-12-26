<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Object</title>
</head>
<body>
<?php
	$edit_id = $_GET['edit_id'];
	//get json data
	$data = file_get_contents('file.json');
	$data_array = json_decode($data);
    
?>
<?php
require_once("config.php");
if(isset($_POST['btnUpdate']))
{		
		// // Update file json
		// foreach ($data_array as $row) {
		// 	// Perbarui data kedua
		// 	if ($row->id === $edit_id) {
		// 		$row->nama_lantai = $_POST['nama'];
		// 		$row->luas = $_POST['luas'];
		// 	}
		// }
 
		// $data = json_encode($data_array, JSON_PRETTY_PRINT);
		// file_put_contents('file.json', $data);
		$conn = $db->connection;
		$sql = "UPDATE objek SET nama_lantai='".$_POST['nama']."',luas='".$_POST['luas']."' WHERE id=$edit_id";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		header('location: manage.php');
}
?>

<form method="post" name="frmUpdate">
    <table align="center">
        <?php
            foreach($data_array as $row){
                if($row->id == $edit_id){
		?>
		<tr>
            <td colspan="2" align="center">Update Record</td>
        </tr>

        <tr>
            <td>Nama Lantai</td>
            <td><input type="text" name="nama" value='<?php echo $row->nama_lantai;?>'> </td>
        </tr>
        <tr>
            <td>Luas</td>
            <td><input type="text" name="luas" value='<?php echo $row->luas;?>'> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Update" name="btnUpdate"> </td>
        </tr>
		<?php
		}}?>
        
    </table>
</form>
</body>
</html>