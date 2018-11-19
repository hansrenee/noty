<?php

    require("connection.php");
    session_start();
    $passing_id = $_SESSION['passing_id'];
    $passing_nama = $_SESSION['first_name'];



?>

<nav class="navbar border-bottom navbar-dark bg-white navbar-fixed-top" id="navbar_user">
			<div class="col-md-1 col-sm-2 col-xs-8">
				<font size="6"><span class="text-primary">N</span><span class="text-danger">o</span><span class="text-warning">t</span><span class="text-success">y</span></font>
			</div>

			<!-- <div class="col-md-1 col-sm-2 col-xs-4">
				<a href="" class="glyphicon glyphicon-arrow-left white"></a>
			</div> -->

			<div class="col-md-5 col-sm-8 col-xs-12">
				<form action="/action_page.php">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="search" value="">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>

			<span class="col-md-2">
				<a href="#" class="white">Hi <?php echo $passing_nama?></a>
			</span>
			<span class="col-md-1">
				<a href="#" class="white"><span class="glyphicon glyphicon-user white"></span></a>
			</span>
			
			<span class="col-md1" id="logout_icon">
				<a href="#" class="white"><span class="glyphicon glyphicon-log-out white"></span> Logout</a>
			</span>
		</nav>
		
		<div class="sidenav border-right bg-white col-md-4">
			<p class="text-dark tengah turun">Manage Category</p>
			<a href="#about" class="text-dark">All</a>
			<a href="#services" class="text-dark">Kampus</a>
			<a href="#clients" class="text-dark">Kerja</a>
			<a href="#contact" class="text-dark">Others</a>
			<button type="button" class="btn btn-lg btn-primary addnew" style="margin: 10px;">Add new</button>
		</div>