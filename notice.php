
<?php include('header.php'); ?>


<body bgcolor="#3399cc">
<center><h1>Notice</h1></center>
<?php

$query = "SELECT* FROM notice ORDER BY id DESC";

$result = mysql_query($query);
?>
<div class="container">
<div class="row-fluid"> 
<div class="col-md-12">



	<div class="table-responsive" >
		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>ID</th>
					<th>Subject</th>
					<th>Detail</th>
					<th>Date/Time</th>
				</tr>
			</thead>

		<tbody>
			<?php while($rows=mysql_fetch_array($result)){ ?>
			<tr>
				<td ><?php echo $rows['id']; ?></td>
				<td><?php echo $rows['subject']; ?></td>
				<td><?php echo $rows['detail']; ?></td>
				<td><?php echo $rows['datetime']; ?></td>

			</tr>
			<?php 
			}
			mysql_close(); ?>
		</tbody>
	</table>
	</div>


	</div>
	</div>
	</div>






<br/>
<div class="row-fluid"> 

<?php include('footer.php'); ?>

</div>
</body>
