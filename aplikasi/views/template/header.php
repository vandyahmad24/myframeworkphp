<!DOCTYPE html>
<html>
<head>
	<title>Belajar <?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="<?= BASE_URL ?>">PHP MVC</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="<?= BASE_URL ?>">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL ?>/about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= BASE_URL ?>/mahasiswa">Mahasiswa</a>
  </li>
</ul>
</div>
</div>
</nav>