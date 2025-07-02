@extends('layouts.app')

@section('title', 'CV Hajera Jewa')

@section('content')

  <!-- Home -->
  <section id="home" class="bg-black text-white d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
    <div class="row align-items-center justify-content-between">

      <!-- Teks Perkenalan -->
      <div class="col-lg-6 text-lg-start text-center">
      <h5 class="text-warning mb-3" style="font-size: 2rem;">Hello World!</h5>
      <h1 class="fw-bold mb-4" style="font-size: 4.5rem;">I'm <span class="text-warning">Hajera</span></h1>
      <p class="fs-2 mb-5">And I am an Informatics Engineering Student</p>
      <a href="#about" class="btn fw-bold px-5 py-3 fs-5 rounded-pill" style="
      background-color: #ffd700;
      color: #000;
      box-shadow:
       0 0 10px rgba(255, 215, 0, 0.4),
       0 0 20px rgba(255, 215, 0, 0.3),
       0 0 30px rgba(255, 215, 0, 0.2);
      transition: all 0.3s ease-in-out;" onmouseover="
      this.style.backgroundColor='#ffffff';
      this.style.color='#000000';
      this.style.boxShadow='0 0 15px rgba(255,255,255,0.5), 0 0 25px rgba(255,255,255,0.3)'"
        onmouseout="
      this.style.backgroundColor='#ffd700';
      this.style.color='#000000';
      this.style.boxShadow='0 0 10px rgba(255, 215, 0, 0.4), 0 0 20px rgba(255, 215, 0, 0.3), 0 0 30px rgba(255, 215, 0, 0.2)'">
        More About Me
      </a>
      </div>
      <!-- Foto Profil -->
      <div class="col-lg-6 text-center mt-5 mt-lg-0">
      <img src="{{ asset('img/profil.png') }}" alt="Foto Profil" class="img-fluid rounded-circle shadow-xl"
        style="width: 420px; max-width: 100%;">
      </div>
    </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="text-white d-flex align-items-center"
    style="background: linear-gradient(to bottom, #44423e, #1c1c1c 35%); min-height: 100vh;">

    <div class="container">
    <div class="row align-items-center justify-content-center gy-5">

      <!-- Profile Picture -->
      <div class="col-lg-5 text-center" style="margin-top: 120px;">
      <img src="{{ asset('img/profil.png') }}" alt="Profile Photo" class="img-fluid rounded-circle shadow"
        style="width: 370px; border: 4px solid #ffd700; box-shadow: 0 0 20px rgba(255,215,0,0.5);">
      </div>

      <!-- Description -->
      <div class="col-lg-7 px-lg-5 text-center text-lg-start">
      <h2 class="fw-bold mb-5 text-warning">About Me</h2>
      <h4 class="fw-bold mb-3 fs-4">I'm <span class="text-warning">Hajera Jewa</span>, a Full Stack Developer</h4>

      <p class="text-light mb-3" style="font-size: 1rem;">
        I am an <strong>Informatics Engineering student</strong> with a strong passion for <strong>Full Stack Web
        Development</strong>. I enjoy building responsive, functional, and user-friendly applications that bring
        ideas to life through clean and efficient code.
      </p>

      <p class="text-light mb-3" style="font-size: 1rem;">
        Throughout my academic journey, I have worked on various projects—from simple static websites to fully
        functional dynamic web apps. I love combining frontend creativity with backend logic to deliver complete
        digital experiences.
      </p>

      <p class="text-light mb-4" style="font-size: 1rem;">
        I’m always eager to learn new technologies, collaborate with others, and solve real-world problems through
        innovative web solutions.
      </p>

      <!-- Contact Info -->
      <div class="row g-3 mb-4 justify-content-center justify-content-lg-start">
        <div class="col-md-6">
        <div class="p-2 rounded d-flex align-items-center justify-content-center justify-content-lg-start"
          style="background-color: #806600; font-size: 0.95rem;">
          <i class="bi bi-geo-alt-fill me-2 text-warning"></i> Palu, Central Sulawesi
        </div>
        </div>
        <div class="col-md-6">
        <div class="p-2 rounded d-flex align-items-center justify-content-center justify-content-lg-start"
          style="background-color: #4f1f1f; font-size: 0.95rem;">
          <i class="bi bi-envelope-fill me-2 text-danger"></i> hajerajewa154@gmail.com
        </div>
        </div>
        <div class="col-md-6">
        <div class="p-2 rounded d-flex align-items-center justify-content-center justify-content-lg-start"
          style="background-color: #1e293b; font-size: 0.95rem;">
          <i class="bi bi-phone-fill me-2 text-primary"></i> +62 822 9047 1649
        </div>
        </div>
        <div class="col-md-6">
        <div class="p-2 rounded d-flex align-items-center justify-content-center justify-content-lg-start"
          style="background-color: #1f4f1f; font-size: 0.95rem;">
          <i class="bi bi-mortarboard-fill me-2 text-success"></i> Informatics, Tadulako University
        </div>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="mt-3">
        <a href="{{ asset('cv/CV HAJERA.pdf') }}"
        class="btn fw-bold px-4 py-2 me-3 rounded-pill d-inline-flex align-items-center" style="
     background: linear-gradient(to left, #fff9c4, #ffd700);
     color: #000;
     border: none;
     transition: all 0.3s ease-in-out;
     " onmouseover="
     this.style.background='linear-gradient(to right, #ffffff, #fffbe6)';
     this.style.color='#000000';
     " onmouseout="
     this.style.background='linear-gradient(to right, #fff9c4, #ffd700)';
     this.style.color='#000000';
     ">
        <i class="bi bi-download me-2"></i>Download CV
        </a>



        <a href="#contact"
        class="btn btn-outline-warning fw-bold px-4 py-2 rounded-pill d-inline-flex align-items-center">
        <i class="bi bi-briefcase-fill me-2"></i>Hire Me
        </a>
      </div>
      </div>
    </div>
    </div>
  </section>



  <!-- Projects Section -->
  <section id="projects" class="d-flex align-items-center"
    style="background: linear-gradient(to bottom left, #0f0f0f 0%, #1a1a1a 35%, #fdf6d9 100%); min-height: 100vh;">
    <div class="container py-5">
    <h2 class="text-center fw-bold mb-5" style="color: #ffcc00;">My Projects</h2>
    <div class="row g-4">

      <!-- Project Card 1 -->
      <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-lg border-0 rounded-4 bg-black text-white position-relative">
        <img src="{{ asset('img/siakad.png') }}" class="card-img-top rounded-top-4" alt="WebGIS">
        <span class="badge bg-warning text-black position-absolute top-0 end-0 m-2">Website</span>
        <div class="card-body d-flex flex-column">
        <h5 class="card-title fw-bold">Sistem Infromasi Akademik</h5>
        <p class="card-text small">
          A Laravel-based academic information system that provides features for managing students, lecturers,
          courses, schedules, and grades.
          Designed to streamline academic administration for schools and universities.
        </p>
        <div class="mb-3">
          <span class="badge bg-light text-black">HTML</span>
          <span class="badge bg-light text-black">CSS</span>
          <span class="badge bg-light text-black">Laravel</span>
          <span class="badge bg-light text-black">PHP</span>
          <span class="badge bg-light text-black">Blade</span>
          <span class="badge bg-light text-black">MySQL</span>
        </div>
        <div class="mt-auto">
          <a href="https://siakad-untad-h6fnhzbuf7bvekej.southeastasia-01.azurewebsites.net/"
          class="btn btn-warning btn-sm fw-semibold me-2">
          <i class="bi bi-play-fill me-1"></i>Demo
          </a>
          <a href="https://github.com/baguspria21/siakad-laravel-master" target="_blank"
          class="btn btn-outline-light btn-sm fw-semibold">
          <i class="bi bi-github me-1"></i>Code
          </a>

        </div>
        </div>
      </div>
      </div>

      <!-- Project Card 2 -->
      <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-lg border-0 rounded-4 bg-black text-white position-relative">
        <img src="{{ asset('img/cashmate.png') }}" class="card-img-top rounded-top-4" alt="CashMate">
        <span class="badge bg-warning text-black position-absolute top-0 end-0 m-2">Website</span>
        <div class="card-body d-flex flex-column">
        <h5 class="card-title fw-bold">Aplikasi CashMate</h5>
        <p class="card-text small">
          CashMate is a personal finance management and literacy app built with AdonisJS and React.
          It features smart budgeting tools, financial calculators, and AI-powered literacy modules via Chatbase,
          designed to help users make better financial decisions.
        </p>
        <div class="mb-3">

          <span class="badge bg-light text-black">React JS</span>
          <span class="badge bg-light text-black">Tailwind CSS</span>
          <span class="badge bg-light text-black">Axios</span>
          <span class="badge bg-light text-black">AdonisJS</span>
          <span class="badge bg-light text-black">Chatbase</span>
          <span class="badge bg-light text-black">MySQL</span>
          <span class="badge bg-light text-black">Figma</span>
        </div>
        <div class="mt-auto">
          <a href="https://cashmate-tawny.vercel.app/" class="btn btn-warning btn-sm fw-semibold me-2">
          <i class="bi bi-play-fill me-1"></i>Demo
          </a>
          <a href="https://github.com/jessicaandryani/Frontend-Cashmate21" target="_blank"
          class="btn btn-outline-light btn-sm fw-semibold">
          <i class="bi bi-github me-1"></i>Code
          </a>

        </div>
        </div>
      </div>
      </div>

      <!-- Project Card 3 -->
      <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-lg border-0 rounded-4 bg-black text-white position-relative">
        <img src="{{ asset('img/ecommerce.png') }}" class="card-img-top rounded-top-4" alt="Website Berita">
        <span class="badge bg-warning text-black position-absolute top-0 end-0 m-2">Website</span>
        <div class="card-body d-flex flex-column">
        <h5 class="card-title fw-bold">E-Commerce Platform by Hajera</h5>
        <p class="card-text small">
          A web-based e-commerce platform built with React, JavaScript, HTML, and CSS.
          It fetches real-time product data from the FakeStoreAPI and displays it through a responsive and
          interactive user interface.
        </p>
        <div class="mb-3">
          <span class="badge bg-light text-black">HMTL</span>
          <span class="badge bg-light text-black">CSS</span>
          <span class="badge bg-light text-black">JavaScript</span>
          <span class="badge bg-light text-black">React Native</span>
        </div>
        <div class="mt-auto">
          <a href="https://project-hmc.vercel.app/" class="btn btn-warning btn-sm fw-semibold me-2">
          <i class="bi bi-play-fill me-1"></i>Demo
          </a>
          <a href="https://github.com/HajeraJewa/Project-HMC" target="_blank"
          class="btn btn-outline-light btn-sm fw-semibold">
          <i class="bi bi-github me-1"></i>Code
          </a>

        </div>
        </div>
      </div>
      </div>

    </div>
    </div>
  </section>


  <section id="skills" style="background-color: #2c2c2c; min-height: 100vh;">
    <div class="container py-5">
    <h2 class="text-center fw-bold mb-3" style="color: #ffcc00;">My Skills</h2>
    <p class="text-center mb-5" style="color: #ffffff;">Technical Skills</p>

    <div class="row justify-content-center g-4">
      <!-- Contoh Skill Box -->
      <!-- Kamu bisa menyalin untuk skill lainnya -->
      <!-- HTML -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
        style="height: 40px;" />
        <p>HTML</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- Tailwind -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" style="height: 40px;" />
        <p>Tailwind CSS</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- JavaScript -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
        style="height: 40px;" />
        <p>JavaScript</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- PHP -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" style="height: 40px;" />
        <p>PHP</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- Laravel -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
        style="height: 40px;" />
        <p>Laravel</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- React -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
        style="height: 40px;" />
        <p>React</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- Figma -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
        style="height: 40px;" />
        <p>Figma</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- MySQL -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn-icons-png.freepik.com/512/657/657695.png" style="height: 40px;" />
        <p>MySQL</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- GitHub -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg"
        style="height: 40px; filter: brightness(0) invert(1);" />
        <p>GitHub</p>
        <div class="progress-skill"></div>
      </div>
      </div>


      <!-- Excel -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn-icons-png.flaticon.com/512/732/732220.png" style="height: 40px;" />
        <p>Excel</p>
        <div class="progress-skill"></div>
      </div>
      </div>

      <!-- Word -->
      <div class="col-6 col-md-3 col-lg-2 text-center">
      <div class="skill-box d-flex flex-column align-items-center justify-content-center">
        <img src="https://cdn-icons-png.freepik.com/256/888/888883.png" style="height: 40px;" />
        <p>Word</p>
        <div class="progress-skill"></div>
      </div>
      </div>
    </div>
    </div>

    <style>
    .skill-box {
      background-color: #000;
      border-radius: 20px;
      padding: 30px 15px;
      height: 200px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.05);
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .skill-box:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px rgba(255, 221, 0, 0.5);
      /* Cahaya kuning */
    }

    .skill-box p {
      color: white;
      margin: 10px 0;
      font-weight: 500;
    }

    .progress-skill {
      height: 4px;
      width: 60%;
      margin: 0 auto;
      border-radius: 10px;
      background: linear-gradient(to right, #ffdd00, #ffd700);
      /* Garis kuning */
    }
    </style>
  </section>



  <!-- Certificates -->

  <section id="certificates" style="background-color: #3c3c3c; min-height: 100vh;">
    <div class="container-fluid px-5 py-4">
    <h2 class="text-center fw-bold mb-5" style="color: #ffcc00;">Certificates & Achievements</h2>

    <div class="row g-4 flex-grow-1 align-items-center justify-content-center">

      <div class="col-12 col-md-6 col-lg-3">
      <div class="card h-100 p-3 border-0 rounded-4" style="background-color: white; color: #000;">
        <div class="position-relative mb-3" style="background-color: #ffcc00; padding: 10px; border-radius: 10px;">
        <span class="badge position-absolute top-0 start-0 m-2 text-black fw-bold"
          style="background-color: #ffcc00; z-index: 1;">2024</span>
        <a href="https://drive.google.com/file/d/15alwvLQFcwO6glM0xh53Iq3qkpmvSZlY/view?usp=sharing" target="_blank"
          class="d-block w-100 h-100 position-relative text-decoration-none overflow-hidden rounded-3">
          <img src="{{ asset('img/proxo.png') }}" class="img-fluid rounded-3" alt="Certificate 1"
          style="transition: transform 0.3s ease;">
          <div
          class="card-img-overlay d-flex align-items-center justify-content-center opacity-0 transition-opacity"
          style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; transition: opacity 0.3s ease;">
          <i class="bi bi-link-45deg text-white h3 m-0"></i>
          <span class="text-white ms-2 fw-bold">View Certificate</span>
          </div>
        </a>
        </div>
        <h6 class="fw-bold">Technology for a Sustainable Tomorrow</h6>
        <p class="mb-0" style="font-size: 0.9rem;">PROXOCORIS & Computer Science ORIS </p>
        <p class="mb-0" style="font-size: 0.85rem; color: #6c757d;">This certificate recognizes
        active participation and demonstrated growth throughout PROXOCORIS 2024. Covered topics included technology
        for a sustainable future, highlighting willingness to engage, learn, and challenge oneself in the field of
        innovation and sustainability.</p>
      </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
      <div class="card h-100 p-3 border-0 rounded-4" style="background-color: white; color: #000;">
        <div class="position-relative mb-3" style="background-color: #ffcc00; padding: 10px; border-radius: 10px;">
        <span class="badge position-absolute top-0 start-0 m-2 text-black fw-bold"
          style="background-color: #ffcc00; z-index: 1;">2024</span> <a
          href="https://drive.google.com/file/d/1pe-91QQNgj8hiehaFYfUYwBlysgPdBfn/view?usp=sharing" target="_blank"
          class="d-block w-100 h-100 position-relative text-decoration-none overflow-hidden rounded-3">
          <img src="{{ asset('img/permitech.jpg ') }}" class="img-fluid rounded-3" alt="Certificate 4"
          style="transition: transform 0.3s ease;">
          <div
          class="card-img-overlay d-flex align-items-center justify-content-center opacity-0 transition-opacity"
          style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; transition: opacity 0.3s ease;">
          <i class="bi bi-link-45deg text-white h3 m-0"></i>
          <span class="text-white ms-2 fw-bold">View Certificate</span>
          </div>
        </a>
        </div>
        <h6 class="fw-bold">UI/UX Design Competition (1st Place)</h6>
        <p class="mb-0" style="font-size: 0.9rem;">National Informatics and Computer Students Association
        (PERMIKOMNAS) & Manado State University</p>
        <p class="mb-0" style="font-size: 0.85rem; color: #6c757d;">Awarded First Place in the UI/UX Design
        Competition at Permitech Expo 2024, demonstrating strong skills in UI/UX principles and innovative design
        for "Great Technology Great Society."</p>
      </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
      <div class="card h-100 p-3 border-0 rounded-4" style="background-color: white; color: #000;">
        <div class="position-relative mb-3" style="background-color: #ffcc00; padding: 10px; border-radius: 10px;">
        <span class="badge position-absolute top-0 start-0 m-2 text-black fw-bold"
          style="background-color: #ffcc00; z-index: 1;">2025</span>
        <a href="https://www.dicoding.com/certificates/72ZD5JL7QZYW" target="_blank"
          class="d-block w-100 h-100 position-relative text-decoration-none overflow-hidden rounded-3">
          <img src="{{ asset('img/dicoding.png') }}" class="img-fluid rounded-3" alt="Certificate 2"
          style="transition: transform 0.3s ease;">
          <div
          class="card-img-overlay d-flex align-items-center justify-content-center opacity-0 transition-opacity"
          style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; transition: opacity 0.3s ease;">
          <i class="bi bi-link-45deg text-white h3 m-0"></i>
          <span class="text-white ms-2 fw-bold">View Certificate</span>
          </div>
        </a>
        </div>
        <h6 class="fw-bold">Learning SOLID Programming Principles</h6>
        <p class="mb-0" style="font-size: 0.9rem;">Dicoding</p>
        <p class="mb-0" style="font-size: 0.85rem; color: #6c757d;">Successfully completed this course focusing on
        writing good code with the OOP paradigm and understanding the five SOLID principles for robust and
        maintainable software development. The course covered core OOP concepts and practical application of SOLID
        principles.</p>
      </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
      <div class="card h-100 p-3 border-0 rounded-4" style="background-color: white; color: #000;">
        <div class="position-relative mb-3" style="background-color: #ffcc00; padding: 10px; border-radius: 10px;">
        <span class="badge position-absolute top-0 start-0 m-2 text-black fw-bold"
          style="background-color: #ffcc00; z-index: 1;">2025</span>
        <a href="https://drive.google.com/file/d/1pX9lZPbqs4WZyA_qEG7R8O-mm6XYhAk4/view" target="_blank"
          class="d-block w-100 h-100 position-relative text-decoration-none overflow-hidden rounded-3">
          <img src="{{ asset('img/smkdev.png') }}" class="img-fluid rounded-3" alt="Certificate 3"
          style="transition: transform 0.3s ease;">
          <div
          class="card-img-overlay d-flex align-items-center justify-content-center opacity-0 transition-opacity"
          style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; transition: opacity 0.3s ease;">
          <i class="bi bi-link-45deg text-white h3 m-0"></i>
          <span class="text-white ms-2 fw-bold">View Certificate</span>
          </div>
        </a>
        </div>
        <h6 class="fw-bold">Digital Transformation In Manufacturing</h6>
        <p class="mb-0" style="font-size: 0.9rem;">SMKDEV & Eudeka</p>
        <p class="mb-0" style="font-size: 0.85rem; color: #6c757d;">Awarded for outstanding participation in "Learning
        with Experts," session "Digital Transformation In Manufacturing: Opportunities For IT Talents." This event
        provided valuable insights into evolving manufacturing landscapes driven by digitalization, highlighting IT
        professionals' crucial role.</p>
      </div>
      </div>

    </div>
    </div>
  </section>

  <style>
    /* Custom CSS for the hover effect */
    .card .position-relative:hover img {
    transform: scale(1.05);
    /* Slightly enlarge the image on hover */
    }

    .card .position-relative:hover .card-img-overlay {
    opacity: 1 !important;
    /* Make the overlay visible on hover */
    }
  </style>



  <section class="text-light" id="contact" style="background-color: #fdfdfd; color: #000; min-height: 100vh;">
    <div class="container-lg px-3 px-lg-5 py-5">
    <div class="row align-items-start justify-content-center g-5">

      <div class="col-md-5">
      <h2 class="fw-bold mb-3" style="color: #e6b800; font-size: 2.5rem;">
        Contact Us
      </h2>

      <p class="fs-5 mb-4 text-muted">
        Have any questions or want to work together? Feel free to reach out anytime. I'm always open to discussing new
        ideas, projects, or collaborations.
      </p>

      <p class="fs-5 mb-2">
        <i class="bi bi-send-fill me-2" style="color: #e6b800; font-size: 1.4rem;"></i>
        <span class="text-dark">hajerajewa154@gmail.com</span>
      </p>
      <p class="fs-5">
        <i class="bi bi-telephone-fill me-2" style="color: #e6b800; font-size: 1.4rem;"></i>
        <span class="text-dark">082290471649</span>
      </p>

      <div class="d-flex gap-4 mt-4">
        <a href="#" title="GitHub"><i class="bi bi-github text-dark" style="font-size: 2.2rem;"></i></a>
        <a href="#" title="LinkedIn"><i class="bi bi-linkedin text-dark" style="font-size: 2.2rem;"></i></a>
        <a href="#" title="Instagram"><i class="bi bi-instagram text-dark" style="font-size: 2.2rem;"></i></a>
      </div>
      </div>

      <div class="col-md-6">
      <h4 class="mb-4 fw-bold" style="color: #e6b800; font-size: 1.8rem;">Send Me a Message</h4>
      <form name="submit-to-google-sheet">
        <div id="alert-container" class="mb-3"></div>

        <div class="mb-3">
        <input type="text" class="form-control form-control-lg" placeholder="Your Name"
          style="background-color: #fff; border: 1px solid #ccc; color: #000;" name="name" required>
        </div>
        <div class="mb-3">
        <input type="email" class="form-control form-control-lg" placeholder="Your Email"
          style="background-color: #fff; border: 1px solid #ccc; color: #000;" name="email" required>
        </div>
        <div class="mb-3">
        <input type="text" class="form-control form-control-lg" placeholder="Subject"
          style="background-color: #fff; border: 1px solid #ccc; color: #000;" name="subject" required>
        </div>
        <div class="mb-4">
        <textarea rows="5" class="form-control form-control-lg" placeholder="Your Message"
          style="background-color: #fff; border: 1px solid #ccc; color: #000;" name="message" required></textarea>
        </div>

        <button type="submit" class="btn w-100 fw-bold shadow" id="submitButton"
        style="background-color: #e6b800; color: #000; font-size: 1.1rem; padding: 14px; border-radius: 8px;">
        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"
          id="loadingSpinner"></span>
        <span id="buttonText"><i class="bi bi-send-fill me-2"></i>Send Message</span>
        </button>
      </form>
      </div>

    </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7RzP3S3M" crossorigin="anonymous"></script>

  <script>
    // Your Google Apps Script URL
    const scriptURL = 'https://script.google.com/macros/s/AKfycbz9tZZUhQh0h2eCId-35zmQIRF8nWGe5K7x0jifT7TPyQXDy7CZn1jF9pow9uVMsCm_Lw/exec';

    // Get necessary DOM elements
    const form = document.forms['submit-to-google-sheet'];
    const submitButton = document.getElementById('submitButton');
    const loadingSpinner = document.getElementById('loadingSpinner');
    const buttonText = document.getElementById('buttonText');
    const alertContainer = document.getElementById('alert-container');

    // Add event listener for form submission
    form.addEventListener('submit', async e => {
    e.preventDefault(); // Prevent default form submission

    // --- PHASE 1: Prepare UI when Submission Starts ---
    submitButton.disabled = true; // Disable button to prevent double clicks
    loadingSpinner.classList.remove('d-none'); // Show loading spinner
    buttonText.textContent = 'Sending...'; // Change button text to 'Sending...'
    alertContainer.innerHTML = ''; // Clear any previous alert messages

    try {
      // --- PHASE 2: Send Data to Google Apps Script ---
      const response = await fetch(scriptURL, { method: 'POST', body: new FormData(form) });

      // --- PHASE 3: Handle Response from Google Apps Script ---
      if (response.ok) { // If HTTP response is 2xx (e.g., 200 OK)
      showAlert('Your message has been sent successfully!', 'success'); // Display success alert
      form.reset(); // Clear all form inputs
      } else {
      // If the response is not OK (e.g., 4xx or 5xx status from Apps Script)
      // Note: Google Apps Script often returns a 200 status even for internal script errors.
      // For more accurate error handling, you might need to parse the response content
      // or rely on the 'catch' block for network issues.
      showAlert('An error occurred while sending your message. Please try again.', 'danger');
      console.error('Error! Server responded with:', response.status, response.statusText);
      // Option: You could try reading response.text() if your Apps Script sends error messages
      // const errorText = await response.text();
      // console.error('Server error details:', errorText);
      }
    } catch (error) {
      // --- PHASE 4: Handle Network Errors or Other Issues ---
      // This will catch errors like internet connection problems or incorrect script URL
      showAlert('Failed to send message. Please check your internet connection or try again later.', 'danger');
      console.error('Error!', error.message);
    } finally {
      // --- PHASE 5: Restore UI to Normal State ---
      // Code in the 'finally' block will always execute after 'try' or 'catch' completes
      submitButton.disabled = false; // Re-enable the button
      loadingSpinner.classList.add('d-none'); // Hide the spinner
      buttonText.innerHTML = '<i class="bi bi-send-fill me-2"></i>Send Message'; // Restore original button text and icon
    }
    });

    // Function to display Bootstrap alert messages
    function showAlert(message, type) {
    // Create a div element for the alert
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-dismissible fade show`; // Bootstrap classes for styling and functionality
    alertDiv.setAttribute('role', 'alert'); // Accessibility attribute
    alertDiv.innerHTML = `
      ${message}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      `; // Alert content including the close button

    // Append the alert to the container
    alertContainer.appendChild(alertDiv);

    // (Optional) Set the alert to auto-dismiss after 5 seconds
    setTimeout(() => {
      const bsAlert = bootstrap.Alert.getInstance(alertDiv) || new bootstrap.Alert(alertDiv);
      if (bsAlert) { // Ensure the alert instance exists before trying to close
      bsAlert.close();
      }
    }, 5000); // Alert will close after 5 seconds
    }
  </script>



@endsection