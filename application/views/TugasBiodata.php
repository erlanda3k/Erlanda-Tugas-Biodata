<?php   
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 70px;
		font: 20px/27px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		background: url("assets/11.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: #DCDCDC;
		border-bottom: 1px solid #D0D0D0;
		font-size: 25px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
		text-align: center;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}
	#body img {
		width: 30%;
	}

	p {
		text-align: left;
		font-size: 23px;
		border-top: 0px solid #D0D0D0;
		line-height: 32px;
		padding: 10px 10px 10px 10px;
		margin: 2px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		background-color: white;
		
	}

	</style>
</head>
<body>
<div id="container">
	<h1><b>BIODATA</b></h1>

	

	<center><img src="<?= base_url('assets/12.jpg'); ?>" width="225px" height="300px"></center>
		<p>Nama						: Erlanda Kurniawan</p>
		<p>NIM						: 19510008</p>
		<p>Jenis Kelamin			: Laki-Laki</p>
		<p>Tempat, Tanggal Lahir	: Magelang, 13 Desember 1997</p>
		<p>Alamat					: Jl. Nitijayin no. 3</p>
		<p>Agama					: Islam </p>
		<p>No. Telepon/HP			: 082245328794</p>

	</div>
	
</div>

</body>
</html>