<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* Styling dasar untuk semua link navigasi */
        .navbar-nav .nav-link {
            position: relative;
            padding-bottom: 0.5rem; /* Memberi sedikit ruang di bawah untuk garis */
            transition: all 0.3s ease; /* Transisi halus untuk efek hover dan aktif */
            color: rgba(255, 255, 255, 0.75); /* Warna default untuk teks link (putih sedikit transparan) */
        }

        /* Efek hover untuk link yang tidak aktif */
        .navbar-nav .nav-link:hover:not(.active) {
            color: #ffffff; /* Warna teks menjadi putih penuh saat di-hover */
        }

        /* Styling untuk link navigasi yang aktif */
        .navbar-nav .nav-link.active {
            color: #ffcc00 !important; /* Warna kuning terang untuk teks link aktif */
            border-bottom: 2px solid #ffcc00; /* Garis bawah kuning */
            padding-bottom: calc(0.5rem - 2px); /* Menyesuaikan padding agar tinggi item tetap konsisten setelah border ditambahkan */
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="50" style="position: relative;">

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm fixed-top py-3">
      <div class="container">
        <a class="navbar-brand fw-bold text-uppercase text-warning" href="#home">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link px-3" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#certificates">Certificates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>