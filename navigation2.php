<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--  <link rel="stylesheet" href="styles.css">-->
<style>
  a {
  text-align: center;
  text-color: blue;
  }
  
  .dropdown-submenu {
  position: relative;
  }
  
  .dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
  }
  </style>
</head>
<body>
  
  <div class="container">
    <br>
    <nav class="navbar navbar-default navbar-fixed-top">  
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">                                                                                                                                                                      
            <a class="navbar-brand" href="#">                                                                                                                                                              
              <img src="VizerLogo.png" alt="Vizer Logo" style="width:60;height:30px;border:0;"></img>
            </a>
          </ul> 
          <ul class="nav navbar-nav">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">About Us<span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Overview</a></li>
                <li><a tabindex="-1" href="#">The Vizer Vision</a></li>
                <li class="dropdown-submenu">
                  <a class="test" tabindex="-1" href="#">Why Vizer?<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">Learning Driven</a></li>
                    <li><a tabindex="-1" href="#">Nationwide Network</a></li>
                    <li><a tabindex="-1" href="#">All-encompassing Viewpoint</a></li>
                    <li><a tabindex="-1" href="#">Community Building</a></li>
                    <li><a tabindex="-1" href="#">Flexibility and Affordability</a></li>  
                  </ul>
                </li>
              </ul>
            </div>
          </ul>
          <ul class="nav navbar-nav">                                                                                                                                                             
            <div class="dropdown">                                                                                                                                                                         
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">What is Consulting?<span class="caret"></span></button>                                                
              <ul class="dropdown-menu">                                                                                                                                                                   
                <li><a tabindex="-1" href="#">Definition</a></li>
                <li><a tabindex="-1" href="#">Analyst Program</a></li>
                <li><a tabindex="-1" href="#">Client Expectations</a></li>
              </ul>                                                                                                                                                                                        
            </div>                                                                                                                                                                                         
          </ul>    
          <ul class="nav navbar-nav">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
              <div class="dropdown">                                                                   
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Meet Vizer<span class="caret"></span></button>
                <ul class="dropdown-menu">                                                             
                  <li><a tabindex="-1" href="#">Leadership</a></li>                                          
                  <li><a tabindex="-1" href="#">Advisors</a></li>                                            
                  <li><a tabindex="-1" href="#">Our Team</a></li>
                </ul>                                                                                   
              </div>
            </div>
          </ul>
          <ul class="nav navbar-nav"> 
            <div class="dropdown">                                                                    
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Infrastructure<span class="caret"></span></button>                                                      
              <ul class="dropdown-menu">                                                              
                <li><a tabindex="-1" href="#">Overall Structure</a></li>                                                                                                                               
                <li><a tabindex="-1" href="#">Managing Director</a></li>
                <li><a tabindex="-1" href="#">Director of Consulting</a></li>
                <li><a tabindex="-1" href="#">Director of Membership Developement</a></li>
                <li><a tabindex="-1" href="#">Engagement Manager</a></li>
                <li><a tabindex="-1" href="#">Consultant</a></li>
                <li><a tabindex="-1" href="#">Associate</a></li>
                <li><a tabindex="-1" href="#">Business Analyst</a></li> 
              </ul>                                                                                   
            </div>
          </ul>                                                                                                                                                                                            
          <ul class="nav navbar-nav"> 
            <div class="dropdown">                                                                    
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Professional Services</button>                                               
            </div>
          </ul>                                                                                                                                                                                            
          <ul class="nav navbar-nav"> 
            <div class="dropdown">                                                                    
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Vizer Education<span class="caret"></span></button>                                                     
              <ul class="dropdown-menu">                                                              
                <li><a tabindex="-1" href="#">Core Education</a></li>                                           
                <li><a tabindex="-1" href="#">Other Education</a></li>                                            
              </ul>                                                                                   
            </div>
          </ul>
          <ul class="nav navbar-nav">                                                                                                                                                            
            <div class="dropdown">                                                                                                                                                                         
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Join Vizer</button>
            </div>
          </ul>
          <ul class="nav navbar-nav">                                                                                                                                                             
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Contact Us</button> 
          </ul>
        </div>
      </div>
    </nav>
  </div>
  
  
  <script>
  $(document).ready(function(){
    $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
    });
  });
  </script>

</body>
</html>
