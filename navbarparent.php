<?php

	require("connection.php");
    session_start();
    $passing_id = $_SESSION['passing_id'];
	$passing_nama = $_SESSION['first_name'];

	//$kategori_sebelumnya = $_SESSION['kategori_sebelumnya'];
	//$passing_pilihan_kategori = $_SESSION['passing_pilihan_kategori'];

	function displayNavbar(){
		?><nav class="navbar border-bottom navbar-dark bg-white navbar-fixed-top" id="navbar_user">
		<div class="col-md-1 col-sm-2 col-xs-8">
			<a style="margin:0; text-decoration: none;" href="dashboard.php?ctg=<?php echo $_SESSION['passing_kategori_awal']?>">
				<font size="6"><span class="text-primary">N</span><span class="text-danger">o</span><span class="text-warning">t</span><span class="text-success">y</span></font>
			</a>
		</div>

		<!-- <div class="col-md-1 col-sm-2 col-xs-4">
			<a href="" class="glyphicon glyphicon-arrow-left white"></a>
		</div> -->

		<div class="col-md-6 col-sm-10 col-xs-16">
			<form action="search.php" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="q_search">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>

		<span class="col-md-2">
			<a href="profile.php" class="white">Hi <?php global $passing_nama; echo $passing_nama?></a>
		</span>
		<span class="col-md-1">
			<a href="profiledit.php" class="white"><span class="glyphicon glyphicon-user white"></span></a>
		</span>
		
		<span style="text-align: end;" class="col-md-2" id="logout_icon">
			<a href="main.php?eType=out" class="white"><span class="glyphicon glyphicon-log-out white"></span> Logout</a>
		</span>
	</nav>	
	<?php 
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function displaySideNavbar($kategori_pilihan){
		?>
		<div class="sidenav bg-info col-md-4" >
			<p class="text-dark tengah turun">Note Categories</p>

			<?php
			include("connection.php");
			global $passing_id;
			
			$list_category = $koneksi->query("select category_name, id_category from mscategory where id_user = $passing_id");
			//global $kategory_pilihan;
			if($kategori_pilihan == "all"){
				echo "<a href='dashboard.php?ctg=all' class='text-dark' style='color:crimson;'>All</a>";
			} else {
				echo "<a href='dashboard.php?ctg=all' class='text-dark'>All</a>";
			}

			while($tampung = $list_category->fetch()){
				$a = $tampung['category_name'];
				$b = $tampung['id_category'];
				
				if($b == $kategori_pilihan){
					echo "<a href='dashboard.php?ctg=$b' class='text-dark' style='color:crimson;'>".$a.'</a>';
				} else {
					echo "<a href='dashboard.php?ctg=$b' class='text-dark'>".$a.'</a>';
				}
				
			}
			?>

			<div>
			<?php if($kategori_pilihan != null){?>
				<button type="button" onclick="editCategory('<?php echo $kategori_pilihan;?>');" class="btn btn-lg btn-primary addnew" style="margin: 10px; width: 100px;">Edit</button>
			<?php }?>
				
				<button type="button" onclick="addCategoryPage();" class="btn btn-lg btn-primary addnew" style="margin: 10px;width:100px;">New</button>
			</div>
			
		</div>
		<?php
	}

?>
