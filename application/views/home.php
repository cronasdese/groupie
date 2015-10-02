<!DOCTYPE html>
<html>
	<head>
		<title>Groupie</title>
		<?php $this->load->helper('url') ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css');?>"  >
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>	
	</head>
	<body>

		<!-- NAVIGATION BAR -->

		<nav class="navbar navbar-fixed-top navbar-default">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Groupie</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Events</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grades<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Group 1</a></li>
		            <li><a href="#">Group 2</a></li>
		            <li><a href="#">Group 3</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Help</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<!-- CONTENTS -->

		<div class="container">
			<div class="col-sm-2">

				<!-- GROUPS -->

				<ul class="list-group">
				  <li class="list-group-item">
				    <span class="badge">14</span>
				    Group 1
				  </li>
				  <li class="list-group-item">
				    <span class="badge">2</span>
				    Group 2
				  </li>
				  <li class="list-group-item">
				    <span class="badge">1</span>
				    Group 3
				  </li>
				  <li class="list-group-item">
				    <span class="badge">29</span>
				    Group 4
				  </li>
				</ul>
			</div>

			<!-- NEWS FEED -->

			<div class="col-sm-offset-2">
				<blockquote>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				  <small>Marco Polo Bustillo in <cite title="Source Title">Group 1<br/><br/></cite></small>
				  <button type="button" class="btn btn-default" data-toggle="button" aria-pressed="false" autocomplete="off"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Comment</button>
				</blockquote>
			</div>
			<div class="col-sm-offset-2">
				<blockquote>
				  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
				  <small>Joshua Paolo Badillo in <cite title="Source Title">Group 2<br/><br/></cite></small>
				  <button type="button" class="btn btn-default" data-toggle="button" aria-pressed="false" autocomplete="off"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Comment</button>
				</blockquote>
			</div>
			<div class="col-sm-offset-2">
				<blockquote>
				  <p>Lorem ipsum dolor sit amet, consectetur.</p>
				  <small>Jan Patrick Claro in <cite title="Source Title">Group 2<br/><br/></cite></small>
				  <button type="button" class="btn btn-default" data-toggle="button" aria-pressed="false" autocomplete="off"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Comment</button>
				</blockquote>
			</div>
			<div class="col-sm-offset-2">
				<blockquote>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
				  <small>Alexander Pascual in <cite title="Source Title">Group 4<br/><br/></cite></small>
				  <button type="button" class="btn btn-default" data-toggle="button" aria-pressed="false" autocomplete="off"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Comment</button>
				</blockquote>
			</div>
			<div class="col-sm-offset-2">
				<blockquote>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer suscipit.</p>
				  <small>Ross Benedict Decena in <cite title="Source Title">Group 3<br/><br/></cite></small>
				  <button type="button" class="btn btn-default" data-toggle="button" aria-pressed="false" autocomplete="off"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Comment</button>
				</blockquote>
			</div>
		</div>
	</body>
</html>