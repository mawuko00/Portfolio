@extends('Layout')

@section('title','Portfolio')


@section('content')
<body>
    

    <!-- Creating rows -->
    <div class="container navigation pt-3">
      <div class="row">
        <div class="col-6 d-flex justify-content-start align-items-center">
          <i class="fas fa-code fa-2x text-warning pb-3"></i>
          <h5 class="d-inline pl-2 text-white">Portfolio</h5>
        </div>
        <div class="col-6 pt-2">
          <div
            class="row text-center p-0 d-flex justify-content-end align-items-center"
          >
          <!-- Items in row -->
            <div class="col-3">
              <a href="#about" class="text-white navigation-link">About</a>
            </div>
            <div class="col-3">
              <a href="#projects" class="text-white navigation-link"
                >Projects</a
              >
            </div>
            <div class="col-3">
              <a href="#social-media" class="text-white navigation-link"
                >Social Media</a
              >
            </div>
            <div class="col-3">
              <a
                href="https://github.com/mawuko00?tab=repositories"
                target="_blank"
                class="text-white navigation-link"
                >Resume</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Container -->
    <div class="main-container container">
      <div class="row main_row">
        <div class="col-6">
          <h2 class="text-white">Hello, I'm</h2>
          <h1 class="text-warning m-heading">Mawuko Tettey</h1>
          <h2 class="text-white">Web and Mobile Developer</h2>
        </div>
        <div class="col-6">
          <img
            src="./images/about.jpg"
            class="img-fluid"
          />
        </div>
      </div>
    </div>

    <!-- About Section -->
    <div id="about" class="container about p-5">
      <div class="row">
        <div class="col-6">
          <img src="./images/about_img.svg" class="img-fluid" />
        </div>
        <div class="col-6 pl-5 pt-5 pb-5 text-white">
          <h3 class="text-warning">About Me</h3>
          <h1 class="m-heading">A little bit about me</h1>
          <p>
            A Computer engineering student at University of Ghana with
             a strong foundation and experience 
             in C programming, C++ programming, HTML CSS, statistics and probability, object oriented programming with Java,
             Flutter, Python, data structures and algorithms, database systems and software engineering 
             that I use in development of web and mobile apps. I am eager to learn skills and experience that will be beneficial to me in the area of research and development.
          </p>
          <br />
          <p>
            I have portrayed a high sense of commitment to any project I find
             myself doing as well as efficiency in working in groups.I have the knowledge, skills and attitude to take on most jobs and do it satisfactorily
             and for the jobs that require skills outside my skillset
             I readily learn to acquire these skills.
          </p>
          <button class="btn btn-outline-warning">Learn More</button>
        </div>
      </div>
    </div>

    <!-- Projects Section -->
    <div id="projects" class="container mt-5 pt-5">
      <h1 class="text-warning mb-3 pb-2">My Projects</h1>
      <div class="row">
        <div class="col-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img
              src="./images/churchapp.jpg"
              class="card-img-top"
              style="height: 13rem;"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Chruch Mobile App</h5>
              <p class="card-text">
                This app displayed all the events for the year and was used to stream services. Also users 
                get daily devotional and notifications each time a devotional is posted
              </p>
              <a href="#" class="btn btn-warning">See Project</a>
            </div>
          </div>
        </div>
        <div class="col-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img
              src="./images/jobfinder.svg"
              class="card-img-top img-fluid"
              alt="..."
              style="height: 13rem;"
            />
            <div class="card-body">
              <h5 class="card-title">Job Finder Web App</h5>
              <p class="card-text">
                This web app allowed users to receive notifications from 
                companies in search of workers and also apply for these 
                positions where they can be selected.
              </p>
              <a href="#" class="btn btn-warning">See Project</a>
            </div>
          </div>
        </div>
        <div class="col-4 mb-5">
          <div class="card" style="width: 18rem;">
            <img
              src="./images/e_commerce_platform.svg"
              class="card-img-top"
              alt="..."
              style="height: 13rem;"
            />
            <div class="card-body">
              <h5 class="card-title">E-Commerce Platform</h5>
              <p class="card-text">
                A web app that allowed users to purchase any type of 
                grocery they wanted and it gets delivered to their
                to them based on the location they set.
              </p>
              <a href="#" class="btn btn-warning">See Project</a>
            </div>
          </div>
        </div>
       
        
       

    <!-- Social Media Section -->
    <div id="social-media" class="container-fluid">
      <div class="container text-white py-5">
        <h4 class="text-warning">Social Media</h4>
        <h1 class="m-heading">Let's be friends</h1>
        <div class="row pt-5">
          
        <div class="col-3 media_link btn" href="https://www.linkedin.com/in/mawuko-tettey-534ba1197/">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-white">LinkedIn</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fab fa-linkedin-in fa-2x text-secondary"></i>
              </div>
            </div>
          </div>

          <div class="col-3 media_link btn">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-white">Github</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fab fa-github fa-2x text-secondary"></i>
              </div>
            </div>
          </div>
         

          <div class="col-3 media_link bg-warning btn">
            <div class="row">
              <div class="col-6 d-flex justify-content-start">
                <h3 class="m-0 pt-2 text-dark">Email</h3>
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                <i class="fas fa-envelope fa-2x text-secondary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container text-muted text-center py-3 mt-5">
        <h5>
          Copyright &copy; 2020 |
          <a class="text-warning text-decoration-none" href="#about"
            >Mawuko Tettey</a
          >
        </h5>
      </div>
    </footer>
    </body>
    @endsection




