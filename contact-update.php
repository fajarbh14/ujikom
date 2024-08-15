<?php 

# get contact by id html

include 'config/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM kontak WHERE id = $id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nama = $row['nama'];
    $email = $row['email'];
    $subjek = $row['subjek'];
    $konten = $row['konten'];
  }
}?>

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
					<h1>Kontak</h1>
					<nav class="breadcrumbs">
						<ol>
							<li><a href="index.html">Home</a></li>
							<li class="current">Kontak</li>
						</ol>
					</nav>
				</div>
			</div>
			<!-- End Page Title -->

			<!-- Contact Section -->
			<section id="contact" class="contact section">
				<div class="container" data-aos="fade">
					<div class="row gy-5 gx-lg-5">
						<div class="col-lg-4">
							<div class="info">
								<h3>Hubungi Kami</h3>
								<p>
									Jika Anda memiliki pertanyaan atau ingin mengetahui lebih
									lanjut tentang Sekolah Lingkungan, jangan ragu untuk
									menghubungi kami.
								</p>

								<div class="info-item d-flex">
									<i class="bi bi-geo-alt flex-shrink-0"></i>
									<div>
										<h4>Lokasi:</h4>
										<p>
											Jl. Hijau Lestari No. 123, Desa Mandiri, Kabupaten Asri,
											67890
										</p>
									</div>
								</div>
								<!-- End Info Item -->

								<div class="info-item d-flex">
									<i class="bi bi-envelope flex-shrink-0"></i>
									<div>
										<h4>Email:</h4>
										<p>info@sekolahalam.com</p>
									</div>
								</div>
								<!-- End Info Item -->

								<div class="info-item d-flex">
									<i class="bi bi-phone flex-shrink-0"></i>
									<div>
										<h4>Telpon/WA:</h4>
										<p>+62 812 3456 7890</p>
									</div>
								</div>
								<!-- End Info Item -->
							</div>
						</div>

						<div class="col-lg-8">
							<form
								action="forms/contact-update.php"
								method="post"
							>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="row">
									<div class="col-md-6 form-group">
										<input
											type="text"
											name="nama"
											class="form-control"
											id="nama"
											placeholder="Nama Anda"
											required=""
                      value="<?php echo $nama; ?>"
										/>
									</div>
									<div class="col-md-6 form-group mt-3 mt-md-0">
										<input
											type="email"
											class="form-control"
											name="email"
											id="email"
											placeholder="Email Anda"
											required=""
                      value="<?php echo $email; ?>"
										/>
									</div>
								</div>
								<div class="form-group mt-3">
									<input
										type="text"
										class="form-control"
										name="subjek"
										id="subjek"
										placeholder="Subjek"
										required=""
                    value="<?php echo $subjek; ?>"
									/>
								</div>
								<div class="form-group mt-3">
									<textarea
										class="form-control"
										name="konten"
										id="konten"
										placeholder="Pesan yang ingin ditanyakan"
										required=""
                    value="<?php echo $konten; ?>"
									>
                  <?php echo $konten; ?>
                </textarea>
                </div>
								<div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
								</div>
							</form>
						</div>
						<!-- End Contact Form -->
					</div>
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
									<a href="#">Pentas Peni Tahun Ajaran 2023/2024</a>
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
									<a href="#"><span class="bi bi-twitter-x"></span></a>
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
			href="#"
			id="scroll-top"
			class="scroll-top d-flex align-items-center justify-content-center"
			><i class="bi bi-arrow-up-short"></i
		></a>

		<!-- Preloader -->
		<div id="preloader"></div>

		<!-- Vendor JS Files -->
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/vendor/php-email-form/validate.js"></script>
		<script src="assets/vendor/aos/aos.js"></script>
		<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
		<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
		<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
		<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

		<!-- Main JS File -->
		<script src="assets/js/main.js"></script>
	</body>
</html>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Update Contact</h1>
        <form action="contact-update.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="form-group

          ">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $nama; ?>">

          </div>

                    <div class="form-group">
            <label for="subjek">Subjek</label>
            <input type="text" name="subjek" id="subjek" class="form-control" value="<?php echo $subjek; ?>">
          </div>

          <div class="form-group">
            <label for="konten">Pesan</label>
            <textarea name="konten" id="konten" class="form-control"><?php echo $konten; ?></textarea>
          </div>

          <div class="form-group