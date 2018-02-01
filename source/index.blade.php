@extends('_layouts.home_master')

@section('title') 
  Brandon Paul - IT Graduate
@endsection 

@section('description')
Brandon Paul's IT resume website. Brandon is an IT graduate looking primarily for web dev work.
@endsection

@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-dark fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"><i class="fa fa-code"></i> Brandon Paul</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile image-rounded mx-auto mb-2 rounded" src="img/profile.jpg" alt="">
        </span>
      </a>
      {{--  <a href="mailto:{{ $page['email'] }}"><i class="fa fa-envelope-o "></i> </a>  --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About &amp; Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
            </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <div class="jumbotron bg-dark text-left">
          <h1 class="mb-0"><i class="fa fa-code"></i> Brandon
            <span class="">Paul</span>
          </h1>
          <p class="mb-4">High achieving Bachelor of IT Graduate (major in Systems Development) with years of non-IT work experience.<br> Interested in full stack web and object oriented software development.</p>
          <a href="docs/B Paul CV.pdf" target="blank" class="btn btn-lg btn-outline-danger text-white">Download CV (.pdf)</a>
        </div>

        <div class="ml-4">
          <div class="subheading mb-5"><i class="fa fa-home"></i> Golden Bay, South Island; Moving to Wellington soon!<br>
            <a href="mailto:{{ $page['email'] }}"><i class="fa fa-envelope-o"></i> {{ $page['email']}} </a><br>
            <a href="tel:{{ $page['phone'] }}"><i class="fa fa-phone"></i> {{ $page['phone'] }}</a><br>
            <a href="https://github.com/paoramati"><i class="fa fa-github"></i> https://github.com/paoramati</a>
          </div>
        </div>
        
          {{--  <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              
            </li>
          </ul>  --}}
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-3">Education</h2>
          <p class="mb-1">
            My formal IT education began with a BICT course in Sydney which was transferred into a BIT degree at NMIT.
          </p>
          <br>
          <div class="resume-item d-flex flex-column flex-md-row mb-3">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Bachelor of Information Technology <span class="text-primary">Feb 2017 - Dec 2017</span></h3>              

              <div class="subheading mb-3">Nelson Marlborough Institute of Technology</div>
              <div></div>
              <ul class="bullets">
                <li>Major in Systems Development</li>
                <li>A/A+ Average</li>
              </ul>
            </div>
            <div class="resume-date text-md-right">
              <a href="docs/B_NMIT_Transcript.pdf" target="blank" class="btn btn-md btn-danger text-white">Download NMIT Transcript (.pdf)</a>

            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-3">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Bachelor of Information Communication Technology <span class="text-primary">June 2014 - Dec 2016</span>
              </h3>
              <div class="subheading mb-3">University of Western Sydney, Australia</div>
              <ul class="bullets">
                <li>GPA: 6.0/7.0</li>
                <li>Transferred to BIT degree</li>
              </ul>

            </div>
            <div class="resume-date text-md-right">
              <a href="docs/B_UWS_Transcript.pdf" target="blank" class="btn btn-md btn-danger text-white">Download UWS Transcript (.pdf)</a>

            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Diploma of Screen &amp; Media <span class="text-primary">Feb 2012 - Dec 2012</span>
              </h3>
              <div class="subheading mb-3">Sydney Film School, Australia</div>
              <ul class="bullets">
                <li>Focus on Video Editing</li>
                
              </ul>

              {{--  <a href="docs/B_UWS_Transcript.pdf" target="blank" class="btn btn-md btn-danger text-white">Download UWS Transcript (.pdf)</a>  --}}
            </div>
            <div class="resume-date text-md-right">
            </div>
          </div>


        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="projects">
        <div class="my-auto">
          <h2 class="mb-3">My Projects</h2>
          <p>Here are some of my commercial projects. Examples of some personal &amp; school projects can be found on <a href="tps://github.com/paoramati">my GitHub repo</a>.</p>

          <h3>Flora By Laura - wedding and event floristry</h3>

          <div class="mb-2 row">

            <div class="col-md-4">              
              <a href="http://florabylaura.com.au" >
                <img src="img/screen_fbl.png" class="img-fluid" width="400" alt="Flora By Laura Screen">
              </a>
            </div>

            <div class="col-md-4">

            <ul class="bullets"></p>
              <li>Built with Laravel.</li>
              <li>Collaborating with the owner to add new features with each iteration; an informal AGILE process!</li>
            </ul>

          </div>
          </div>
          
          <br>
          
          <h3>Kakariki Kids - Golden Bay early learning centre</h3>
          <div class="mb-2 row">

            <div class="col-md-4">
              <a href="http://kakarikikids.co.nz">
                <img src="img/screen_kk.png" class="img-fluid" width="400" alt="Kakariki Kids Screen">
              </a>
            </div>

            <div class="col-md-4">
              <ul class="bullets">
                <li>Built with the static site generator, Jigsaw</li>  
                <li>Important for learning &amp; implementing SEO and other "behind the scenes" aspects of web dev related to traffic</li>
              </ul>  

            </div>
          </div>       
          
        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-3">Skills</h2>

          {{--  <div class="subheading mb-3">  --}}
            <h3>Programming Languages &amp; Tools</h3>
          
            <div class="subheading mb-3">Web Dev</div>

            <ul class="list-inline list-icons">
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="HTML-5">
                <i class="devicon-html5-plain-wordmark"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="CSS3">
                <i class="devicon-css3-plain-wordmark"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="JavaScript">
                <i class="devicon-javascript-plain"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="jQuery">
                <i class="devicon-jquery-plain-wordmark"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="PHP">
                <i class="devicon-php-plain"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Laravel">
                <i class="devicon-laravel-plain-wordmark"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Bootstrap">
                <i class="devicon-bootstrap-plain-wordmark"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Wordpress">
                <i class="devicon-wordpress-plain-wordmark"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="nodejs/npm">
                <i class="devicon-nodejs-plain-wordmark"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Gulp">
                <i class="devicon-gulp-plain"></i>
              </li>


              <div class="subheading mb-3">Object Oriented Languages</div>

              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Java">
                <i class="devicon-java-plain-wordmark"></i>
              </li>
              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="C#">
                <i class="devicon-csharp-plain-wordmark"></i>
              </li>
              
              <div class="subheading mb-3">Database</div>

              <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="MySQL">
                <i class="devicon-mysql-plain-wordmark"></i>
              </li>
            </ul>
        
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
          <div class="my-auto">
            <h2 class="mb-3">Experience</h2>
  
            <div class="resume-item d-flex flex-column flex-md-row mb-3">
              <div class="resume-content mr-auto">
                <h3 class="mb-0">International Student Tutor (IT)</h3>
                <div class="subheading mb-3">Nelson Marlborough Institute of Technology</div>
                <ul class="bullets">
                  <li>Mentored international students to help them achieve high marks in IT subjects</li>
                  <li>Provided technical guidance (software analysis/coding/deployment)</li>
                  <li>Provided communication guidance (writing, reading, comprehension)</li>
                </ul>
                {{--  <p>Tutored in various IT subjects with students of varying levels of English competence</p>  --}}
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary">Feb 2017 - Dec 2017</span>
              </div>
            </div>
  
            <div class="resume-item d-flex flex-column flex-md-row mb-3">
              <div class="resume-content mr-auto">
                <h3 class="mb-0">Admin Assistant</h3>
                <div class="subheading mb-3">Henry Davis York Lawyers</div>
                {{--  <ul class="bullets">
                  <li></li>
                </ul>  --}}
                </div>
              <div class="resume-date text-md-right">
                <span class="text-primary">September 2013 - June 2014</span>
              </div>
            </div>
  
            <div class="resume-item d-flex flex-column flex-md-row mb-3">
              <div class="resume-content mr-auto">
                <h3 class="mb-0">Admin Assistant</h3>
                <div class="subheading mb-3">Minter Ellison Lawyers</div>
                {{--  <ul class="bullets">
                </ul>  --}}
                </div>
              <div class="resume-date text-md-right">
                <span class="text-primary">January 2010 - February 2012</span>
              </div>
            </div>
  
            <div class="resume-item d-flex flex-column flex-md-row mb-3">
              <div class="resume-content mr-auto">
                <h3 class="mb-0">Bartender</h3>
                <div class="subheading mb-3">Arq Nightclub</div>
                {{--  <ul class="bullets">
                </ul>  --}}
                </div>
              <div class="resume-date text-md-right">
                <span class="text-primary">April 2008 - August 2009</span>
              </div>
            </div>
  
          </div>
  
        </section>      

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-2">Interests</h2>
          <p>I love hanging with my family, anywhere, but particularly at the beach and in kayaks, reading, learning &amp; implementing coding, politics, watching shows and movies. <br>Here is a show reel of movies I've directed and/or edited</p>
          <iframe src="https://player.vimeo.com/video/86812695" width="640" height="427" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          <p>Feat. <em>Everything in Its Right Place</em> by Radiohead</p>
        </div>
      </section>


    </div>

@endsection