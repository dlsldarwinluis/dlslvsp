<head>
	<style>
		.table{
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    		font-size: 12pt;
		}
	</style>
</head>
<?php

$connect = mysqli_connect("localhost", "root", "", "videostreamingportal");
error_reporting("E-NOTICE");
$output = '';
$sql = "SELECT * FROM videos WHERE deleted='0' AND disapproved='0' AND disabled='0' ORDER BY id DESC";
$result = mysqli_query($connect, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		$output .= '
			<table class="table" bordered="1">
			<tr>
			<th colspan="10">Inventory of Contributed Videos</th>
			</tr>
			<tr>
			<th>Title</th>
			<th>File Name</th>
			<th>New File Name</th>
			<th>File Type</th>
			<th>Category</th>
			<th>Uploaded by</th>
			<th>Source</th>
			<th>Date Uploaded</th>
			<th>Views</th>
			<th>Age Restriction</th>			
			</tr>
		';
		$subtotal = 0;
		while($row = mysqli_fetch_array($result))
		{
			$output .='
				<tr>
					<td>' .$row["title"].'</td>
					<td>' .$row["filename"].'</td>
					<td>' .$row["newfilename"].'</td>
					<td>' .$row["filetype"].'</td>
					<td>' .$row["category"].'</td>
					<td>' .$row["uploadedby"].'</td>
					<td>' .$row["source"].'</td>
					<td>' .$row["dateuploaded"].'</td>
					<td>' .$row["views"].'</td>
					<td>' .$row["agerestriction"].'</td>
				</tr>';
		}
		header("Content-Type: application/xls");
		header("Content-Disposition:attachment; filename=Inventory-AvailableVideos.xls");
		echo $output;
	}
	else{
		?>
		<script>
			alert('No data read for the selected report! Please try again!');
			window.location.href = "/videostreamingportal/admin/super/";
		</script>
		<?php
	}
?>