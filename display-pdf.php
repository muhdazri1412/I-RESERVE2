<?php
    require_once "connect-db.php";
    if(isset($_GET['id'])) {
        $sql = "SELECT mime,data FROM pdf_file WHERE id=" . $_GET['id'];
		$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($con));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["mime"]);
        echo $row["data"];
	}
	mysqli_close($con);
?>
