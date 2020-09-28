<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	
<div id="container">
	<h1>Data Mahasiswa</h1>

	<div id="body">
	
      <a class="nav-item nav-link active" href="/penerimaanmahasiswabarustmikpelitanusantara/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="/penerimaanmahasiswabarustmikpelitanusantara/about">about</a>
      <a class="nav-item nav-link active" href="/penerimaanmahasiswabarustmikpelitanusantara/contact">contact</a>
    </div>
  </div>

  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Selamat Datang Mahasiswa Baru</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
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

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>

<body>

<div id="container">
	<h1>Input Data Mahasiswa</h1>
	<table>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_update"; ?>">
	<tr>
		<td>
		id
</td>
<td>
	<input type="text" name="id" />
</td>
</tr>
</td>
<tr>
		<td>
		Nama
</td>
<td>
	<input type="text" name="Nama" />
</td>
</tr>
</td>
<tr>
		<td>
		TTL
</td>
<td>
	<input type="text" name="TTL" />
</td>
</tr>
</td>
<tr>
		<td>
		Prodi
</td>
<td>
<input type="text" name="Prodi" />
</td>
</tr>
</td>
</tr>
<tr>
	<td>
</td><td>
<input type="submit" name="btnSubmit" value="simpan" />
		
	
</table>
</form>
			 
				



	<p class="footer"></p>
</div>

</body>
</html>