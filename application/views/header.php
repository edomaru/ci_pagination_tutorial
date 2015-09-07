<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Codeigniter 3 Tutorial - Pagination & Ajax pagination</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body { padding-top: 70px; }
	</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
    	<div class="container">
    		<div class="navbar-header">
    			<a href="#" class="navbar-brand">CI3 Tutorial</a>
    		</div>
    		<ul class="nav navbar-nav navbar-right">
    			<li class="active"><a href="<?php echo site_url("contacts/index") ?>">Basic Pagination</a></li>
    			<li><a href="<?php echo site_url("contacts/ajax") ?>">Ajax Pagination</a></li>
    		</ul>
    	</div>
    </nav>

    <div class="container">
    	<div class="page-header">
    		<h1>Basic Pagination</h1>
    	</div>
        <div class="table-responsive" id="the-content">