<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MyPortfolio</title>
  <link rel="stylesheet" href="{{url('CSS/home.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="body">
  <div id="particles-js">
    <div class="maindiv">
      <!-- <p> navbar section start </p> -->
      <div class="d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-dark" data-aos="fade-down" data-aos-delay="200">
          <img src="{{ URL::asset('/images/navlogo1.png') }}" alt="" height="70" class="navlogo">
          <button class="navbar-toggler px-2 mx-4" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-ul-div" id="navbarNavDropdown">
            <ul class="navbar-nav list-unstyled">
              <li class="nav-item"><a href="#home" class="nav-link scrollitem selected">Home</a></li>
              <li class="nav-item""><a href=" #about" class="nav-link scrollitem">About Me</a></li>
              <li class="nav-item"><a href="#skill" class="nav-link scrollitem" id="skills-link">Skill</a></li>
              <li class="nav-item"><a href="#qualification" class="nav-link scrollitem">Qualification</a></li>

              <li class="nav-item"><a href="#ModalForm" data-bs-toggle="modal" data-bs-target=""
                  class="nav-link">Contact Me</a></li>
              <li class="pt-1"><a download href="{{ url('resume.pdf') }}"><button
                    class="bn632-hover bn18">Resume</button></a></li>
            </ul>
          </div>
        </nav>
      </div>
      <script src="{{ asset('js/navbar-collapse.js') }}"></script>
      <!-- <p> contact form section start </p> -->
      <div class="modal fade" id="ModalForm" tabindex="2" aria-labelledby="ModalFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered d-flex">
          <div class="modal-content bg-transparent">
            <div class="form-container">
              <form class="form" action="{{ route('saverecord') }}" method="POST">
              @csrf
                <div class="form-group">
                  <label for="name" class="form-label">Name</label>
                  <input class="form-input" required="" name="Name" id="name" type="text">
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input class="form-input" required="" name="Email" id="email" type="text">
                </div>
                <div class="form-group">
                  <label for="textarea" class="form-label">How Can We Help You?</label>
                  <textarea class="form-message" required="" cols="50" rows="10" id="textarea"
                    name="Message">          </textarea>
                </div>
                <button type="submit" class="form-submit-btn">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- <p> contact form section end </p> -->
      <!-- <p> navbar section end </p> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <div class="wrapper">
        <div id="home" class="page">
          <!-- <p> Name section start </p> -->
          <div class="bg-section container pt-3">
            <div class="row pt-5">
              <div class="col-lg-8 pt-5">
                <h1 class="typewriter">I'm <span class="Myname">Hussnain Raza</span></h1>
                <h3 class="slide-left passion mb-0 pb-0 mt-2">Full Stack Web Developer</h3>
                <div class="type slide-left pt-0 mt-0">
                  And I’ll help you build fast & visually stunning websites.
                  I'm currently focused on expanding my experience designing and developing high performing websites.
                  I enjoy what I do and I'm always open to new ideas. Feel free to look around or get in touch if you
                  have
                  any proposals or questions!
                </div>
                <div class="d-flex pt-3">
                  <a download href="{{ url('resume.pdf') }}" class="buttona"><button
                      class="bn632-hover bn18">Resume</button></a>
                  <a class="buttona" href="#ModalForm" data-bs-toggle="modal" data-bs-target="">
                    <button class="buttonb">
                      <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                      </svg>
                      Contact Me
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- <p> Name section end </p> -->
        </div>
        <div id="about" class="page">
          <div class="container-fluid about-head" id="AboutMe">
            <div class="about-div">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 d-flex justify-content-center">
                    <img src="{{ URL::asset('/images/profilepic3.png') }}" class="MyPic" alt="">
                  </div>
                  <div class="col-lg-9 pt-5">
                    <div class="about-me text-center">
                      Greetings! I'm Hasnain Raza, a versatile Full Stack Developer based in Karachi, Pakistan. With a
                      strong foundation in front-end technologies such as HTML5, CSS3, and JavaScript (including
                      frameworks like Bootstrap), I specialize in crafting dynamic and visually appealing user
                      interfaces. On the back end, my expertise extends to server-side development using PHP and
                      Laravel, coupled with proficiency in database management (MySQL). I'm well-versed in RESTful API
                      design, ensuring seamless communication between front and back-end components. Leveraging Git for
                      version control, I bring a collaborative approach to development. My toolkit includes Webpack,
                      Babel, npm/yarn for efficient package management, and Docker for streamlined containerization.
                      Additionally, I have experience in deploying applications on platforms like AWS and Heroku.
                      Throughout my career, I've embraced Agile methodologies, employing testing frameworks like Jest
                      and Mocha to ensure robust code quality. Beyond coding, I'm dedicated to effective project
                      management, utilizing tools like Jira and Trello. Let's connect and discuss how my skills can
                      contribute to your next project!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="skill" class="page mb-5">
          <section class="skill-main pt-5">
            <div class="container-fluid">
              <div class="row">
                <div class="skill-main col-lg-6 col-md-6">
                  <h2 class="page-heading">My skills</h2>
                  <div id="skills-section" class="skills hidden">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="htmlProg col-6 mt-3">
                          <div class="skill-content">
                            <p>html</p>
                            <p>95%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar htmlBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="cssProg col-6 mt-3">
                          <div class="skill-content">
                            <p>Css3</p>
                            <p>90%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar cssBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="jsProg col-6 mt-3">
                          <div class="skill-content">
                            <p>JavaScript</p>
                            <p>75%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar jsBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="bootstrapProg col-6 mt-3">
                          <div class="skill-content">
                            <p>bootstrap</p>
                            <p>90%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar bootstrapBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="git/githubProg col-6 mt-3">
                          <div class="skill-content">
                            <p>git/git hub</p>
                            <p>85%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar gitBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="mysqlProg col-6 mt-3">
                          <div class="skill-content">
                            <p>My sql</p>
                            <p>80%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar mysqlBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="phpProg col-6 mt-3">
                          <div class="skill-content">
                            <p>php</p>
                            <p>70%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar phpBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="laravelProg col-6 mt-3">
                          <div class="skill-content">
                            <p>laravel</p>
                            <p>85%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar laravelBar"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="skill-main col-lg-6 col-md-6">
                  <h2 class="page-heading">Soft Skill</h2>
                  <div class="skills">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="blockchainProg col-6 mt-3">
                          <div class="skill-content">
                            <p>block chain</p>
                            <p>90%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar blockchainBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="creativityProg col-6 mt-3">
                          <div class="skill-content">
                            <p>Creativity</p>
                            <p>95%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar creativityBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="teamProg col-6 mt-3">
                          <div class="skill-content">
                            <p>Team work</p>
                            <p>75%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar teamworkBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="leadershipProg col-6 mt-3">
                          <div class="skill-content">
                            <p>leader ship</p>
                            <p>80%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar leadershipBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="problemProg col-6 mt-3">
                          <div class="skill-content">
                            <p>problem solving</p>
                            <p>85%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar problemsolvingBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="projectProg col-6 mt-3">
                          <div class="skill-content">
                            <p>project management</p>
                            <p>75%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar projectBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="researchProg col-6 mt-3">
                          <div class="skill-content">
                            <p>Research skill</p>
                            <p>90%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar researchBar"></span>
                            </div>
                          </div>
                        </div>
                        <div class="timeProg col-6 mt-3">
                          <div class="skill-content">
                            <p>time management</p>
                            <p>65%</p>
                          </div>
                          <div class="pp">
                            <div class="skillDiv">
                              <span class="skillBar timeBar"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div id="qualification" class="page">
          <div class="container">
            <div>
              <h3 class="page-heading mb-0 pb-0">Qualification</h3>
              <h5 class="second-heading text-center pt-0 mt-0">My Personal journey</h5>
            </div>
            <div class="qualification-head pt-2">
              <div>
                <div class="container">
                  <div class="anchar-head">
                    <a href="#" class="qualification-anchar" onclick="showSection(1)" id="link1">
                      <i class="fa-solid fa-book-open"></i> Education</a>
                    <a href="#" class="qualification-anchar" onclick="showSection(2)" id="link2">
                      <i class="fa-solid fa-book-open"></i> Work</a>
                  </div>
                </div>
              </div>
              <div class="qualification-content">
                <div class="quolification-sec mt-4" id="section1">
                  <!-- Content for Section 1 -->
                  <h4>SSC</h4>
                  <hr class="hr mb-2">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-2">
                        <p class="h5">SSC Part 1 :</p>
                      </div>
                      <div class="d-flex">
                        &nbsp From Urooj Pilot School Korangi #3 Karachi
                        <div class="d-flex">
                          <i class="fa-regular fa-calendar-days pt-1 pl-1"> 2022</i>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <p class="h5">SSC Part 2 :</p>
                      </div>
                      <div class="d-flex">
                        &nbsp From Urooj Pilot School Korangi #3 Karachi
                        <div class="d-flex">
                          <i class="fa-regular fa-calendar-days pt-1 pl-1"> 2023</i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="mt-4">HSC</h4>
                  <hr class="hr mb-2">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-2">
                        <p class="h5">HSC Part 1 :</p>
                      </div>
                      <div class="d-flex">
                        &nbsp From SSAT Degree College Crossing Karachi
                        <i class="fa-regular fa-calendar-days pt-1 pl-1"> 2024</i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <p class="h5">HSC Part 2 :</p>
                      </div>
                      <div class="d-flex">
                        &nbsp From SSAT Degree College Crossing Karachi
                        <i class="fa-regular fa-calendar-days pt-1 pl-1"> Current</i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="quolification-sec" id="section2">
                  <!-- Content for Section 2 -->

                  <div class="work-emoji">
                    <div class="emoji">
                      &#128532
                    </div>
                    Not Yet
                  </div>
                </div>
              </div>
              <script src="{{ asset('js/qualification.js') }}"></script>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('js/pageslider.js') }}"></script>
    </div>
  </div>
  <script src="{{ asset('js/particles.js') }}"></script>
  <script src="{{ asset('js/appps.js') }}"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>