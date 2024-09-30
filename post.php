
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CMS System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
<header class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<a href="index.php" class="navbar-brand">CMS System</a>                                            
		<ul class=" nav navbar-nav navbar-right">
			<li class="active"><a href="#">Home</a></li>    
			<li><a href="#">Articles</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Logout </a></li>
		</ul>
	</div> 
	</header>
	<br>
	<br>
	<!--Header part complete-->
	<div class="container">
		<article class="row"> 
			<section class="col-lg-8 ">
				<div class="panel panel-success">
					<div class="panel-body">
						<div class="panel-header"><br>
							<h3>The First Post</h3>
						</div>
						<img src="download.jpg"width="100%"><br>
						<p><b>This is the First Ever Post I created by some Designing Techniques.</b></p><br>
								<p>• WordPress: WordPress is a free and open-source content management system (CMS) based on PHP & MySQL. It includes a plug-in architecture and template system. It is mostly connected with blogging but supports another kind of web content, containing more traditional mailing lists and forums, media displays, and online stores.<br>
                               • Joomla: Joomla is a free and open-source content management system (CMS) for distributing web content, created by Open Source Matters, Inc. It is based on a model-view-controller web application framework that can be used independently of the CMS.<br>
                               • Magento: Magento is an open source E-trade programming, made by Varien Inc., which is valuable for online business. It has a flexible measured design and is versatile with many control alternatives that are useful for clients. Magento utilizes E-trade stage which offers organization extreme E-business arrangements and extensive support network.<br>
                               Drupal: Drupal is a CMS platform developed in PHP and distributed under the GNU (General Public License).</p>
					</div>
				</div>
			</section>

			<!--img part uploded successfully -->

				<aside class="col-lg-4 ">

					<!--Lec 18 start from here-->

					<form class="panel-group-horizontal" role="form"><br>
						<div class="panel panel-default">
							<div class="panel-body"><br>
								<div class="panel-header">
									<h4>Search Something</h4>
							</div>

							<div class="input-group ">
								<input type="search" class="form-control" placeholder="Search Something....">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</div>
					</div>  
					<!-- lec 18 complete here-->

					</form>
					<form class="panel-group-horizontal" role="form">
						<div class="panel panel-default"><br>
							<div class="panel-heading">Login Area</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="username"class=" control-label col-sm-4">User Name</label>
									<div class="col-sm-7">
										<input type="text" id="username" placeholder="Insert Your Email address" class="form-control">
									</div>
								</div><br><br>
								<div class="form-group">
									<label for="username"class=" control-label col-sm-4">Paswword</label>
									<div class="col-sm-7">
										<input type="text" id="pasword" placeholder=" Insert Your Pasword" class="form-control">
									</div>
								</div><br><br>
								<div class="form-group">
									<label for="username"class=" control-label col-sm-4"></label>
									<div class="col-sm-12">
										<input type="Submit" class="btn- btn-success btn-block">
									</div>
								</div>
							</div>
						</div>
					</form>
					<!--login part successfuly completed:- now watched lec 17 -->
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 list-group-item>WordPress</h4>
							<p class="list-group-item-text">WordPress:- WordPress is a free and open-source content management system (CMS) based on PHP & MySQL. It includes a plug-in architecture and template system.</p>
						</a>
						<a href="#" class="list-group-item active">
							<h4 list-group-item>Drupal</h4>
							<p class="list-group-item-text">Drupal:- Drupal is a CMS platform developed in PHP and distributed under the GNU (General Public License).</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 list-group-item>Joomla</h4>
							<p class="list-group-item-text"> Joomla:- Joomla is a free and open-source content management system (CMS) for distributing web content, created by Open Source Matters, Inc. It is based on a model-view-controller web application framework that can be used independently of the CMS.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 list-group-item>Magento</h4>
							<p class="list-group-item-text">Magento:- Magento is an open source E-trade programming, made by Varien Inc., which is valuable for online business. It has a flexible measured design and is versatile with many control alternatives that are useful for clients.</p>
						</a>

					</div>

				</aside>
			</article>
		</div>

		<!-- Lec 19 start from here-->
		<div style="margin: 50px:width:50px:height:50px;"></div>

		<footer class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text pull-left">Created By Jhon</p>
				<a href="#" class="btn btn-success pull-right navbar-btn">Share</a>
				
			</div>
		</footer>
		<!--Lec 19 complete here -->
	</body>
	</html>
 