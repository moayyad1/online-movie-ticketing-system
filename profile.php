<?php 
if (!session_id()) {
	# code...
	session_start();
}
include 'db.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/customerPanel.css">
	<link href="js/bootstrap.min.css" rel='stylesheet' type='text/css' />
<style type="text/css">







</style>




</head>
<body   >
	<div class="container" >
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 		col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<?php 

							$userId=$_SESSION['user'];
							$res=$conn->query("select * from user where userId='$userId';");
							$row=$res->fetch_object();

							echo "".$row->userName;
							?>

						</h3>
					</div>
					<div class="panel-body">
					

							<div class=" col-md-9 col-lg-9 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td>Name:</td>
											<td><?php
												echo "".$row->userName;
												?> 
											</td>
										</tr>
			
											</tbody>
										</table>


									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
 <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>


		</body>
		</html>