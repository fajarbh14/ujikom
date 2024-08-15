<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<title>Kontak - Sekolah Lingkungan</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon" />
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com" rel="preconnect" />
		<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
			rel="stylesheet"
		/>

		<!-- CSS Files -->
		<link
			href="assets/vendor/bootstrap/css/bootstrap.min.css"
			rel="stylesheet"
		/>
		<link
			href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
			rel="stylesheet"
		/>
		<link href="assets/vendor/aos/aos.css" rel="stylesheet" />
		<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
		<link
			href="assets/vendor/glightbox/css/glightbox.min.css"
			rel="stylesheet"
		/>
		<link href="assets/css/main.css" rel="stylesheet" />
	</head>

	<body class="contact-page">
		<header id="header" class="header d-flex align-items-center sticky-top">
			<div
				class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between"
			>
				<a href="index.html" class="logo d-flex align-items-center">
					<!-- Uncomment the line below if you also wish to use an image logo -->
					<!-- <img src="assets/img/logo.png" alt=""> -->
					<h1 class="sitename">Sekolah Lingkungan</h1>
				</a>

				<nav id="navmenu" class="navmenu">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">Tentang Kami</a></li>
						<li><a href="activities.html">Kegiatan</a></li>
						<li><a href="news.html">Berita</a></li>
						<li><a href="contact.html" class="active">Kontak</a></li>
						<li><a href="admin.php">Admin</a></li>
					</ul>
					<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
				</nav>
			</div>
		</header>

		<main class="main">
			<!-- Page Title -->
			<div class="page-title light-background">
				<div class="container">
					<h1>Admin</h1>
					<nav class="breadcrumbs">
						<ol>
							<li><a href="index.html">Home</a></li>
							<li class="current">Admin</li>
						</ol>
					</nav>
				</div>
			</div>
			<!-- End Page Title -->

			<!-- Contact Section -->
			<section id="contact" class="contact section">
				<div class="container">
				<table class="table table-bordered">
								<thead class="table-dark">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Subjek</th>
										<th>Pesan</th>
										<th colspan=2>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include 'config/db.php';

										$sql = "SELECT * FROM kontak";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												$no = 1;
												echo "<tr>";
												echo "<td>" . $no++ . "</td>"; 
												echo "<td>" . $row["nama"] . "</td>";
												echo "<td>" . $row["subjek"] . "</td>";
												echo "<td>" . $row["konten"] . "</td>";
												echo "<td><a href='forms/contact-delete.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
												echo "<td><a href='contact-update.php?id=".$row["id"]."' class='btn btn-warning btn-sm'>Edit</a></td>";
												echo "</tr>";
											}
										} else {
											echo "<tr><td colspan='5' class='text-center'>Tidak ada data</td></tr>";
										}
									?>
								</tbody>
							</table>
				</div>
			</section>
			<!-- /Contact Section -->
		</main>

		<footer id="footer" class="footer light-background">
			<div class="container">
				<div class="row g-4">
					<div class="col-md-6 col-lg-3 mb-3 mb-md-0">
						<div class="widget">
							<h3 class="widget-heading">Sekolah Lingkungan</h3>
							<p class="mb-4">
								Tempat dimana anak anda akan didik bersama alam, mencitai alam,
								cerdas, dan berkarakter.
							</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
						<div class="widget">
							<h3 class="widget-heading">Navigation</h3>
							<ul class="list-unstyled float-start me-5">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">Tentang Kami</a></li>
								<li><a href="activities.html">Kegiatan</a></li>
							</ul>
							<ul class="list-unstyled float-start">
								<li><a href="news.html">Berita</a></li>
								<li><a href="contact.html">Kontak</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 pl-lg-5">
						<div class="widget">
							<h3 class="widget-heading">Berita Terbaru</h3>
							<ul class="list-unstyled footer-blog-entry">
								<li>
									<span class="d-block date">Agustus 15, 2024</span>
									<a href="#">Penerimaan Siswa Baru</a>
								</li>
								<li>
									<span class="d-block date">Agustus 14, 2024</span>
									<a href="#">Pentas Seni Tahun Ajaran 2023/2024</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 pl-lg-5">
						<div class="widget">
							<h3 class="widget-heading">Sosial Media</h3>
							<ul class="list-unstyled social-icons light mb-3">
								<li>
									<a href="#"><span class="bi bi-facebook"></span></a>
								</li>
								<li>
									<a href="#"><span class="bi bi-twitter"></span></a>
								</li>
								<li>
									<a href="#"><span class="bi bi-linkedin"></span></a>
								</li>
								<li>
									<a href="#"><span class="bi bi-google"></span></a>
								</li>
								<li>
									<a href="#"><span class="bi bi-google-play"></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div
					class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between"
				>
					<p>
						© <span>Copyright</span>
						<strong class="px-1 sitename">Sekolah Lingkungan</strong>
						<span>All Rights Reserved</span>
					</p>
					<div class="credits">
						<!-- All the links in the footer should remain intact. -->
						Designed by <a href="https://bootstrapmade.com/">Fajar Buana</a>
					</div>
				</div>
			</div>
		</footer>

		<!-- Scroll Top -->
		<a
