<img src="images/home_about_us.png" alt="Home Banner" width=100%>
<img src="images/vizer_vision.png" alt="The Vizer Vision" width=100%>

<div class="jumbotron" height=40%>
      <div class="container">

      <link rel="stylesheet" href="css/styles.css">

      <script>
      $(document).ready(function () {

      $("#sidebar").mCustomScrollbar({
          theme: "minimal"
          });

          // when opening the sidebar
          $('#sidebarCollapse').on('click', function () {
          // open sidebar
          $('#sidebar').addClass('active');
          // fade in the overlay
          $('.overlay').fadeIn();
          $('.collapse.in').toggleClass('in');
          $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          });

   
        // if dismiss or overlay was clicked
        $('#dismiss, .overlay').on('click', function () {
        // hide the sidebar
        $('#sidebar').removeClass('active');
        // fade out the overlay
        $('.overlay').fadeOut();
        });
        });
        </script>

        <div class="text-center">
              <h1>Why Vizer?</h1>
        </div>

<ul>
<li display="inline">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/learning_driven.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Learning Driven.</h1>
              <p>At Vizer, we believe that all students with an interest in consulting should have access to strategy coaching. Through our collective efforts, we aim to educate the next generation of business leaders. It is our mission to develop talented individuals and aid them in their path towards a career in consulting.</p> 
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/nationwide_network.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Nationwide Network.</h1>
              <p>Vizer has a national presence with locations in multiple esteemed universities. Our intercollegiate status allows us to establish a wide network through which talented students can connect and interact.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/all-encompassing_viewpoint.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>All-Encompassing Viewpoint.</h1>
              <p>We seek talented problem solvers from all academic backgrounds, such as finance, engineering, and computer science, to work on real-world projects. A diverse team fosters diversity of thought. Our comprehensive background gives our teams the ability to determine the best solutions to present to our clients.</p> 
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fourth-slide" src="images/community_building.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Community Building.</h1>
              <p>A primary initiative of Vizer is to support grassroots based, client-driven efforts to improve our local communities through the services we provide. We aim to further professionalism on the college campuses in which we reside by hosting educational seminars dedicated to resume building, LinkedIn development, interview preparation, etc. In addition to making an impact on our college campuses, we wish to extend our efforts to helping local businesses and organizations achieve their business goals via pro-bono consulting.</p> 
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="images/flexibility_and_affordability.jpg" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Flexability and Affordablity.</h1>
              <p>Vizer is a flexible, affordable, and responsive organization that is dedicated to accommodating your needs and goals. For students who want to improve a skill or learn about a particular industry, we leverage our nationwide network to connect you with a peer who is an expert in that area. For clients, we strategically assemble your project teams that are best tailored to your business and preferences.</p> 
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
        </li>


        <li display="inline">
        <div class="container marketing">

      <!-- Five columns of text below the carousel -->
      <div class="row text-center">
        <div class="col-lg-2">
          <h3>Learning Driven</h3>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <h3>Nationwide Network</h3>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-3">
          <h3>All-Encompassing Viewpoint</h3>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-2">
          <h3>Community Building</h3>
        </div><!-- /.col-lg-2 -->
        <div class="col-lg-2">
          <h3>Flexibility & Affordability</h3>
        </div><!-- /.col-lg-2 -->
      </div><!-- /.row -->
              <!-- START THE FEATURETTES -->

        </div>
      </div>
      </div>
</li>
</ul>

</div>
    </div>B