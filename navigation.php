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
              <img src="images/vizer_logo.png" alt="Vizer Logo" style="width:60;height:30px;border:0;"></img>
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

<!--  <li role="menuitem" aria-haspopup="true" class="nav-item nav-link-item has-children " aria-hidden="true" tabindex="-1">
    <a href="#0" tabindex="-1">Industries</a>
    <div class="sub-nav">
      <header class="sub-nav-header">
        <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
        <span class="sub-nav-title" id="nav-group-title-Industries">
          Industries
        </span>
      </header>
      <div class="sub-nav-links">
        <div class="column">
          <ul class="nav-list" aria-labelledby="nav-group-title-Industries">

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Advanced Electronics</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Advanced-Electronics">
                    Advanced Electronics
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Advanced-Electronics">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/advanced-electronics/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/advanced-electronics/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/advanced-electronics/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/advanced-electronics/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Aerospace &amp; Defense</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Aerospace-&amp;-Defense">
                    Aerospace &amp; Defense
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Aerospace-&amp;-Defense">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/aerospace-and-defense/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/aerospace-and-defense/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/aerospace-and-defense/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/aerospace-and-defense/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Automotive &amp; Assembly</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Automotive-&amp;-Assembly">
                    Automotive &amp; Assembly
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Automotive-&amp;-Assembly">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/automotive-and-assembly/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/automotive-and-assembly/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/automotive-and-assembly/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/automotive-and-assembly/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Capital Projects &amp; Infrastructure</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Capital-Projects-&amp;-Infrastructure">
                    Capital Projects &amp; Infrastructure
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Capital-Projects-&amp;-Infrastructure">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/capital-projects-and-infrastructure/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/capital-projects-and-infrastructure/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/capital-projects-and-infrastructure/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/capital-projects-and-infrastructure/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Chemicals</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Chemicals">
                    Chemicals
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Chemicals">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/chemicals/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/chemicals/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/chemicals/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/chemicals/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Consumer Packaged Goods</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Consumer-Packaged-Goods">
                    Consumer Packaged Goods
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Consumer-Packaged-Goods">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/consumer-packaged-goods/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/consumer-packaged-goods/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/consumer-packaged-goods/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/consumer-packaged-goods/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Electric Power &amp; Natural Gas</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Electric-Power-&amp;-Natural-Gas">
                    Electric Power &amp; Natural Gas
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Electric-Power-&amp;-Natural-Gas">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/electric-power-and-natural-gas/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/electric-power-and-natural-gas/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/electric-power-and-natural-gas/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/electric-power-and-natural-gas/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Financial Services</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Financial-Services">
                    Financial Services
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Financial-Services">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/financial-services/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/financial-services/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/financial-services/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/financial-services/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Healthcare Systems &amp; Services</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Healthcare-Systems-&amp;-Services">
                    Healthcare Systems &amp; Services
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Healthcare-Systems-&amp;-Services">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/healthcare-systems-and-services/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/healthcare-systems-and-services/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/healthcare-systems-and-services/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/healthcare-systems-and-services/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">High Tech</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-High-Tech">
                    High Tech
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-High-Tech">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/high-tech/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/high-tech/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/high-tech/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/high-tech/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Media &amp; Entertainment</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Media-&amp;-Entertainment">
                    Media &amp; Entertainment
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Media-&amp;-Entertainment">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/media-and-entertainment/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/media-and-entertainment/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/media-and-entertainment/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/media-and-entertainment/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Metals &amp; Mining</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Metals-&amp;-Mining">
                    Metals &amp; Mining
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Metals-&amp;-Mining">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/metals-and-mining/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/metals-and-mining/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/metals-and-mining/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/metals-and-mining/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Oil &amp; Gas</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Oil-&amp;-Gas">
                    Oil &amp; Gas
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Oil-&amp;-Gas">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/oil-and-gas/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/oil-and-gas/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/oil-and-gas/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/oil-and-gas/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Paper &amp; Forest Products</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Paper-&amp;-Forest-Products">
                    Paper &amp; Forest Products
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Paper-&amp;-Forest-Products">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/paper-and-forest-products/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/paper-and-forest-products/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/paper-and-forest-products/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/paper-and-forest-products/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Pharmaceuticals &amp; Medical Products</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Pharmaceuticals-&amp;-Medical-Products">
                    Pharmaceuticals &amp; Medical Products
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Pharmaceuticals-&amp;-Medical-Products">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/pharmaceuticals-and-medical-products/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/pharmaceuticals-and-medical-products/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/pharmaceuticals-and-medical-products/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/pharmaceuticals-and-medical-products/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Private Equity &amp; Principal Investors</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Private-Equity-&amp;-Principal-Investors">
                    Private Equity &amp; Principal Investors
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Private-Equity-&amp;-Principal-Investors">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/private-equity-and-principal-investors/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/private-equity-and-principal-investors/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/private-equity-and-principal-investors/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/private-equity-and-principal-investors/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Public Sector</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Public-Sector">
                    Public Sector
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Public-Sector">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/public-sector/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/public-sector/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/public-sector/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/public-sector/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Retail</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Retail">
                    Retail
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Retail">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/retail/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/retail/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/retail/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/retail/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Semiconductors</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Semiconductors">
                    Semiconductors
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Semiconductors">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/semiconductors/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/semiconductors/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/semiconductors/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/semiconductors/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Social Sector</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Social-Sector">
                    Social Sector
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Social-Sector">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/social-sector/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/social-sector/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/social-sector/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/social-sector/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Telecommunications</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Telecommunications">
                    Telecommunications
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Telecommunications">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/telecommunications/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/telecommunications/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/telecommunications/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/telecommunications/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Travel, Transport &amp; Logistics</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Travel,-Transport-&amp;-Logistics">
                    Travel, Transport &amp; Logistics
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Travel,-Transport-&amp;-Logistics">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/travel-transport-and-logistics/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/travel-transport-and-logistics/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/travel-transport-and-logistics/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/industries/travel-transport-and-logistics/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

          </ul>
        </div>
      </div>
      <footer class="sub-nav-footer">
        <a class="view-all-link -arrow" href="/featured-insights" tabindex="-1" aria-hidden="true">Read our featured insights</a>
      </footer>
    </div>
  </li>

  <li role="menuitem" aria-haspopup="true" class="nav-item nav-link-item has-children " aria-hidden="true" tabindex="-1">
    <a href="#0" tabindex="-1">Business Functions</a>
    <div class="sub-nav">
      <header class="sub-nav-header">
        <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
        <span class="sub-nav-title" id="nav-group-title-Business-Functions">
          Business Functions
        </span>
      </header>
      <div class="sub-nav-links">
        <div class="column">
          <ul class="nav-list" aria-labelledby="nav-group-title-Business-Functions">

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Design</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Design">
                    Design
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Design">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-design/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-design/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-design/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-design/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Digital McKinsey</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Digital-McKinsey">
                    Digital McKinsey
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Digital-McKinsey">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/digital-mckinsey/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/digital-mckinsey/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/digital-mckinsey/careers" tabindex="-1">Careers</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/digital-mckinsey/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/digital-mckinsey/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Implementation</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Implementation">
                    Implementation
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Implementation">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-implementation/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-implementation/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-implementation/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-implementation/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" class="sub-nav-item  nav-link-item   " aria-hidden="true" tabindex="-1"><a href="/business-functions/learning-programs-for-clients" tabindex="-1">Learning Programs for Clients</a>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Marketing &amp;  Sales</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Marketing-&amp;--Sales">
                    Marketing &amp;  Sales
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Marketing-&amp;--Sales">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/marketing-and-sales/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/marketing-and-sales/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/marketing-and-sales/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/marketing-and-sales/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">McKinsey Analytics</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-McKinsey-Analytics">
                    McKinsey Analytics
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-McKinsey-Analytics">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-analytics/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-analytics/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-analytics/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-analytics/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Operations</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Operations">
                    Operations
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Operations">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/operations/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/operations/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/operations/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/operations/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Organization</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Organization">
                    Organization
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Organization">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/organization/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/organization/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/organization/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/organization/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Recovery &amp; Transformation Services</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Recovery-&amp;-Transformation-Services">
                    Recovery &amp; Transformation Services
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Recovery-&amp;-Transformation-Services">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-recovery-and-transformation-services/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-recovery-and-transformation-services/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-recovery-and-transformation-services/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/mckinsey-recovery-and-transformation-services/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Risk</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Risk">
                    Risk
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Risk">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/risk/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/risk/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/risk/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/risk/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Strategy &amp; Corporate Finance</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Strategy-&amp;-Corporate-Finance">
                    Strategy &amp; Corporate Finance
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Strategy-&amp;-Corporate-Finance">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/strategy-and-corporate-finance/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/strategy-and-corporate-finance/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/strategy-and-corporate-finance/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/strategy-and-corporate-finance/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

            <li role="menuitem" aria-haspopup="true" class="sub-nav-item  nav-link-item  has-children " aria-hidden="true" tabindex="-1"><a href="#" tabindex="-1">Sustainability &amp; Resource Productivity</a>

              <div class="sub-nav">
                <header class="sub-nav-header">
                  <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
                  <span class="sub-nav-title" id="nav-group-title-Sustainability-&amp;-Resource-Productivity">
                    Sustainability &amp; Resource Productivity
                  </span>
                </header>
                <div class="sub-nav-links">
                  <div class="column">
                    <ul class="nav-list" aria-labelledby="nav-group-title-Sustainability-&amp;-Resource-Productivity">

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/sustainability-and-resource-productivity/our-insights" tabindex="-1">Our Insights</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/sustainability-and-resource-productivity/how-we-help-clients" tabindex="-1">How We Help Clients</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/sustainability-and-resource-productivity/our-people" tabindex="-1">Our People</a>

                      </li>

                      <li role="menuitem" class="sub-nav-item nav-link-item " aria-hidden="true" tabindex="-1">
                        <a href="/business-functions/sustainability-and-resource-productivity/contact-us" tabindex="-1">Contact Us</a>

                      </li>

                    </ul>
                  </div>
                </div>
              </div>

            </li>

          </ul>
        </div>
      </div>
      <footer class="sub-nav-footer">
        <a class="view-all-link -arrow" href="/featured-insights" tabindex="-1" aria-hidden="true">Read our featured insights</a>
      </footer>
    </div>
  </li>
  <li id="universal_header_section_0_ctl00_ctl00_ctl00_ctl00_parentLitag" class="nav-item nav-link-item has-children" aria-hidden="true" tabindex="-1" aria-haspopup="true" role="menuitem">
    <a href="#0" tabindex="-1">Digital</a>
    <div class="sub-nav">
      <header id="universal_header_section_0_ctl00_ctl00_ctl00_ctl00_hamburgerHeaderTag" class="sub-nav-header">
        <a href="#" class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
        <span class="sub-nav-title">
          Digital
        </span>
      </header>
      <div class="sub-nav-links">
        <div class="column">
          <ul id="universal_header_section_0_ctl00_ctl00_ctl00_ctl00_ChildUlTag" class="nav-list" aria-labelledby="nav-group-title-Careers">

            <li class="sub-nav-item nav-link-item" role="menuitem" aria-hidden="true" tabindex="-1"><a href="/business-functions/digital-mckinsey/how-we-help-clients" tabindex="-1">Digital McKinsey</a></li><li class="sub-nav-item nav-link-item" role="menuitem" aria-hidden="true" tabindex="-1"><a href="/global-themes/internet-of-things/our-insights" tabindex="-1">Internet of Things</a></li><li class="sub-nav-item nav-link-item" role="menuitem" aria-hidden="true" tabindex="-1"><a href="/business-functions/mckinsey-analytics/our-insights" tabindex="-1">McKinsey Analytics</a></li><li class="sub-nav-item nav-link-item" role="menuitem" aria-hidden="true" tabindex="-1"><a href="/solutions" tabindex="-1">Solutions</a></li></ul>
        </div>
      </div>
    </div>
  </li>

  <li role="menuitem" aria-haspopup="true" class="nav-item nav-link-item global-themes has-children " aria-hidden="true" tabindex="-1">
    <a href="#0" id="global-themes-subnav" tabindex="-1">Global Themes</a>
    <div class="sub-nav" aria-labelledby="global-themes-subnav">
      <header class="sub-nav-header">
        <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
        <span class="sub-nav-title">Global Themes</span>
      </header>
      <div class="sub-nav-links">
        <span class="column-header double-column" id="topic-title-Trending-topics">Trending topics</span>
        <span class="column-header single-column" id="topic-title-Featured">Featured</span>
        <div class="column">
          <!-- original nav header --
          <ul class="nav-list" aria-labelledby="topic-title-Trending-topics global-themes-subnav">

            <li class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/global-themes/artificial-intelligence" tabindex="-1">Artificial Intelligence</a></li>

            <li class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/global-themes/future-of-organizations-and-work" tabindex="-1">Future of Organizations &amp; Work</a></li>

            <li class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/global-themes/gender-equality" tabindex="-1">Gender Equality</a></li>

            <li class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/global-themes/innovation-and-growth" tabindex="-1">Innovation &amp; Growth</a></li>

            <li class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/global-themes/leadership" tabindex="-1">Leadership</a></li>

            <li class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/global-themes/meeting-societys-expectations" tabindex="-1">Meeting Society’s Expectations</a></li>

            <li class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/global-themes/performance-transformation" tabindex="-1">Performance Transformation</a></li>

            <li class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/global-themes/regions-in-focus" tabindex="-1">Regions in Focus</a></li>

          </ul>
        </div>
        <div class="column">
          <ul class="nav-list" aria-labelledby="about-us-featured sub-nav-title-about-us">

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1">
              <a href="/mgi/overview" tabindex="-1">
                McKinsey Global Institute
                <p>Our mission is to help leaders in multiple sectors develop a deeper understanding of the global economy.</p>
              </a>
            </li>

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1">
              <a href="/quarterly/overview" tabindex="-1">
                <em>McKinsey Quarterly</em>
                <p>Our flagship business publication has been defining and informing the senior-management agenda since 1964.</p>
              </a>
            </li>

          </ul>
        </div>
      </div>
      <footer class="sub-nav-footer">
        <a class="view-all-link -arrow" href="/featured-insights" tabindex="-1" aria-hidden="true">Read our featured insights</a>
      </footer>
    </div>
  </li>

  <li role="menuitem" class="nav-item nav-link-item nav-item-location" aria-hidden="true" tabindex="-1">
    <a href="/locations" tabindex="-1">Locations</a>
  </li>


  <li role="menuitem" aria-haspopup="true" class="nav-item nav-link-item has-children " aria-hidden="true" tabindex="-1">
    <a href="#0" tabindex="-1">Careers</a>
    <div class="sub-nav">
      <header class="sub-nav-header">
        <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
        <span class="sub-nav-title" id="nav-group-title-Careers">
          Careers
        </span>
      </header>
      <div class="sub-nav-links">
        <div class="column">
          <ul class="nav-list" aria-labelledby="nav-group-title-Careers">

            <li role="menuitem" class="sub-nav-item  nav-link-item  " aria-hidden="true" tabindex="-1">
              <a href="/careers/home" tabindex="-1">Home</a>

            </li>

            <li role="menuitem" class="sub-nav-item  nav-link-item  " aria-hidden="true" tabindex="-1">
              <a href="/careers/search-jobs" tabindex="-1">Search Jobs</a>

            </li>

            <li role="menuitem" class="sub-nav-item  nav-link-item  " aria-hidden="true" tabindex="-1">
              <a href="/careers/explore" tabindex="-1">Explore</a>

            </li>

            <li role="menuitem" class="sub-nav-item  nav-link-item  " aria-hidden="true" tabindex="-1">
              <a href="/careers/meet-our-people" tabindex="-1">Our People</a>

            </li>

            <li role="menuitem" class="sub-nav-item  nav-link-item  " aria-hidden="true" tabindex="-1">
              <a href="/careers/interviewing" tabindex="-1">Interviewing</a>

            </li>

            <li role="menuitem" class="sub-nav-item  nav-link-item  " aria-hidden="true" tabindex="-1">
              <a href="/careers/students" tabindex="-1">Students</a>

            </li>

            <li role="menuitem" class="sub-nav-item  nav-link-item  " aria-hidden="true" tabindex="-1">
              <a href="/careers/experienced-professionals" tabindex="-1">Experienced Professionals</a>

            </li>

          </ul>
        </div>
      </div>
    </div>
  </li>


  <li role="menuitem" aria-haspopup="true" class="nav-item nav-link-item has-children " aria-hidden="true" tabindex="-1">
    <a href="#0" id="about-us-subnav" tabindex="-1">About Us</a>
    <div class="sub-nav about-us" aria-labelledby="about-us-subnav">
      <header class="sub-nav-header">
        <a href="#0 " class="close-sub-nav" aria-hidden="true" tabindex="-1"></a>
        <span class="sub-nav-title" id="sub-nav-title-about-us">About Us</span>
      </header>
      <div class="sub-nav-links">
        <div class="column column-main-links">
          <ul class="nav-list" aria-labelledby="sub-nav-title-about-us">

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/about-us/overview" tabindex="-1">Overview</a></li>

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/about-us/social-impact" tabindex="-1">Social impact</a></li>

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/about-us/media-center" tabindex="-1">Media Center</a></li>

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/about-us/alumni" tabindex="-1">Alumni</a></li>

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1"><a href="/about-us/new-at-mckinsey-blog" tabindex="-1">New at McKinsey Blog</a></li>

          </ul>
        </div>
        <div class="column column-featured">
          <span class="column-header full-width" id="about-us-featured">Featured</span>
          <ul class="nav-list" aria-labelledby="about-us-featured sub-nav-title-about-us">

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1">
              <a href="/about-us/new-ventures" tabindex="-1">
                New Ventures
                <p>Our team of 2000+ innovators bring new ideas, solutions, and services to our clients.</p>
              </a>
            </li>

            <li role="menuitem" class="sub-nav-item nav-link-item" aria-hidden="true" tabindex="-1">
              <a href="/business-functions/learning-programs-for-clients/overview/mckinsey-academy/how-we-help-clients" tabindex="-1">
                McKinsey Academy
                <p>Our learning programs help organizations accelerate growth by unlocking their people's potential.</p>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </li>
</ul>
<span class="initial-menu-level visibility-hidden" data-level="0"></span>
<!-- END GLOBAL HAMBURGER MENU NAVIGATION --


<div class="location-signin">
  <ul class="nav-list">

    <li><a href="https://www.mckinsey.com/user-registration/signin" rel="nofollow" tabindex="-1" aria-hidden="true">Sign In</a></li>

  </ul>
</div>
</nav>
</div>
</section>
<div class="hamburger-curtain"></div>
<!-- END GLOBAL HAMBURGER NAVIGATION -->



<!--BEGIN NAVIGATION MENU --

<section class="top-bar">
  <div class="top-bar-inner">


    <!--BEGIN NAV/PRIMARY NAVIGATION --

    <!--<header class="global-header global-primary-nav-r3" data-module="GlobalNavigation" role="banner">--
    <div class="global-primary-nav-r3 show-nav" data-module="PrimaryNavigation" role="banner">

      <nav class="primary-navigation" role="navigation">
        <ul class="nav-list nav-group-left" role="menubar" style="padding-left: 230px;">

          <li class="nav-item  has-children" role="menu" aria-haspopup="true">
            <a href="#0">Industries</a>
            <div class="sub-nav">
              <header class="sub-nav-header">
                <a href="#0 " class="close-sub-nav" tabindex="-1"></a>
                <span class="sub-nav-title" id="nav-group-title-Industries">Industries</span>
              </header>
              <div class="sub-nav-links">

                <div class="column">
                  <ul class="nav-list" aria-labelledby="nav-group-title-Industries">

                    <li class="sub-nav-item"><a href="/industries/advanced-electronics/our-insights" role="menuitem" tabindex="0">Advanced Electronics</a></li>

                    <li class="sub-nav-item"><a href="/industries/aerospace-and-defense/our-insights" role="menuitem" tabindex="0">Aerospace &amp; Defense</a></li>

                    <li class="sub-nav-item"><a href="/industries/automotive-and-assembly/our-insights" role="menuitem" tabindex="0">Automotive &amp; Assembly</a></li>

                    <li class="sub-nav-item"><a href="/industries/capital-projects-and-infrastructure/our-insights" role="menuitem" tabindex="0">Capital Projects &amp; Infrastructure</a></li>

                    <li class="sub-nav-item"><a href="/industries/chemicals/our-insights" role="menuitem" tabindex="0">Chemicals</a></li>

                    <li class="sub-nav-item"><a href="/industries/consumer-packaged-goods/our-insights" role="menuitem" tabindex="0">Consumer Packaged Goods</a></li>

                    <li class="sub-nav-item"><a href="/industries/electric-power-and-natural-gas/our-insights" role="menuitem" tabindex="0">Electric Power &amp; Natural Gas</a></li>

                    <li class="sub-nav-item"><a href="/industries/financial-services/our-insights" role="menuitem" tabindex="0">Financial Services</a></li>

                  </ul>
                </div>

                <div class="column">
                  <ul class="nav-list" aria-labelledby="nav-group-title-Industries">

                    <li class="sub-nav-item"><a href="/industries/healthcare-systems-and-services/our-insights" role="menuitem" tabindex="0">Healthcare Systems &amp; Services</a></li>

                    <li class="sub-nav-item"><a href="/industries/high-tech/our-insights" role="menuitem" tabindex="0">High Tech</a></li>

                    <li class="sub-nav-item"><a href="/industries/media-and-entertainment/our-insights" role="menuitem" tabindex="0">Media &amp; Entertainment</a></li>

                    <li class="sub-nav-item"><a href="/industries/metals-and-mining/our-insights" role="menuitem" tabindex="0">Metals &amp; Mining</a></li>

                    <li class="sub-nav-item"><a href="/industries/oil-and-gas/our-insights" role="menuitem" tabindex="0">Oil &amp; Gas</a></li>

                    <li class="sub-nav-item"><a href="/industries/paper-and-forest-products/our-insights" role="menuitem" tabindex="0">Paper &amp; Forest Products</a></li>

                    <li class="sub-nav-item"><a href="/industries/pharmaceuticals-and-medical-products/our-insights" role="menuitem" tabindex="0">Pharmaceuticals &amp; Medical Products</a></li>

                    <li class="sub-nav-item"><a href="/industries/private-equity-and-principal-investors/our-insights" role="menuitem" tabindex="0">Private Equity &amp; Principal Investors</a></li>

                  </ul>
                </div>

                <div class="column">
                  <ul class="nav-list" aria-labelledby="nav-group-title-Industries">

                    <li class="sub-nav-item"><a href="/industries/public-sector/our-insights" role="menuitem" tabindex="0">Public Sector</a></li>

                    <li class="sub-nav-item"><a href="/industries/retail/our-insights" role="menuitem" tabindex="0">Retail</a></li>

                    <li class="sub-nav-item"><a href="/industries/semiconductors/our-insights" role="menuitem" tabindex="0">Semiconductors</a></li>

                    <li class="sub-nav-item"><a href="/industries/social-sector/our-insights" role="menuitem" tabindex="0">Social Sector</a></li>

                    <li class="sub-nav-item"><a href="/industries/telecommunications/our-insights" role="menuitem" tabindex="0">Telecommunications</a></li>

                    <li class="sub-nav-item"><a href="/industries/travel-transport-and-logistics/our-insights" role="menuitem" tabindex="0">Travel, Transport &amp; Logistics</a></li>

                  </ul>
                </div>

              </div>
              <footer class="sub-nav-footer">
                <a class="view-all-link -arrow" href="/featured-insights">Read our featured insights</a>
              </footer>
            </div>
          </li>

          <li class="nav-item  has-children" role="menu" aria-haspopup="true">
            <a href="#0">Business Functions</a>
            <div class="sub-nav">
              <header class="sub-nav-header">
                <a href="#0 " class="close-sub-nav" tabindex="-1"></a>
                <span class="sub-nav-title" id="nav-group-title-Business-Functions">Business Functions</span>
              </header>
              <div class="sub-nav-links">

                <div class="column">
                  <ul class="nav-list" aria-labelledby="nav-group-title-Business-Functions">

                    <li class="sub-nav-item"><a href="/business-functions/mckinsey-design/our-insights" role="menuitem" tabindex="0">Design</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/digital-mckinsey/how-we-help-clients" role="menuitem" tabindex="0">Digital McKinsey</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/mckinsey-implementation/how-we-help-clients" role="menuitem" tabindex="0">Implementation</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/learning-programs-for-clients/overview" role="menuitem" tabindex="0">Learning Programs for Clients</a></li>

                  </ul>
                </div>

                <div class="column">
                  <ul class="nav-list" aria-labelledby="nav-group-title-Business-Functions">

                    <li class="sub-nav-item"><a href="/business-functions/marketing-and-sales/our-insights" role="menuitem" tabindex="0">Marketing &amp;  Sales</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/mckinsey-analytics/our-insights" role="menuitem" tabindex="0">McKinsey Analytics</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/operations/our-insights" role="menuitem" tabindex="0">Operations</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/organization/our-insights" role="menuitem" tabindex="0">Organization</a></li>

                  </ul>
                </div>

                <div class="column">
                  <ul class="nav-list" aria-labelledby="nav-group-title-Business-Functions">

                    <li class="sub-nav-item"><a href="/business-functions/mckinsey-recovery-and-transformation-services/our-insights" role="menuitem" tabindex="0">Recovery &amp; Transformation Services</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/risk/our-insights" role="menuitem" tabindex="0">Risk</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/strategy-and-corporate-finance/our-insights" role="menuitem" tabindex="0">Strategy &amp; Corporate Finance</a></li>

                    <li class="sub-nav-item"><a href="/business-functions/sustainability-and-resource-productivity/our-insights" role="menuitem" tabindex="0">Sustainability &amp; Resource Productivity</a></li>

                  </ul>
                </div>

              </div>
              <footer class="sub-nav-footer">
                <a class="view-all-link -arrow" href="/featured-insights">Read our featured insights</a>
              </footer>
            </div>
          </li>
          <li id="ctl13_ctl00_ctl01_ctl00_ctl00_parentLitag" class="nav-item careers  has-children" aria-hidden="true">
            <a href="#0">Digital</a>
            <div class="sub-nav">

              <div class="sub-nav-links">
                <div class="column">
                  <ul id="ctl13_ctl00_ctl01_ctl00_ctl00_ChildUlTag" class="nav-list" aria-labelledby="sub-nav-title-careers">

                    <li class="sub-nav-item"><a href="/business-functions/digital-mckinsey/how-we-help-clients">Digital McKinsey</a></li><li class="sub-nav-item"><a href="/global-themes/internet-of-things/our-insights">Internet of Things</a></li><li class="sub-nav-item"><a href="/business-functions/mckinsey-analytics/our-insights">McKinsey Analytics</a></li><li class="sub-nav-item"><a href="/solutions">Solutions</a></li></ul>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item global-themes  has-children" role="menu" aria-haspopup="true">
            <a href="#0" id="global-themes-subnav">Global Themes</a>
            <div class="sub-nav" aria-labelledby="global-themes-subnav">
              <header class="sub-nav-header">
                <a href="#0 " class="close-sub-nav" tabindex="-1"></a>
                <span class="sub-nav-title">Global Themes</span>
              </header>
              <div class="sub-nav-links">
                <span class="column-header double-column" id="topic-title-Trending-topics">Trending topics</span>
                <span class="column-header single-column" id="topic-title-Featured">Featured</span>

                <div class="column">
                  <!-- original nav header --
                  <ul class="nav-list" aria-labelledby="topic-title-Trending-topics global-themes-subnav">

                    <li class="sub-nav-item"><a href="/global-themes/artificial-intelligence">Artificial Intelligence</a></li>

                    <li class="sub-nav-item"><a href="/global-themes/future-of-organizations-and-work">Future of Organizations &amp; Work</a></li>

                    <li class="sub-nav-item"><a href="/global-themes/gender-equality">Gender Equality</a></li>

                    <li class="sub-nav-item"><a href="/global-themes/innovation-and-growth">Innovation &amp; Growth</a></li>

                  </ul>
                </div>

                <div class="column">
                  <!-- original nav header --
                  <ul class="nav-list" aria-labelledby="topic-title-Trending-topics global-themes-subnav">

                    <li class="sub-nav-item"><a href="/global-themes/leadership">Leadership</a></li>

                    <li class="sub-nav-item"><a href="/global-themes/meeting-societys-expectations">Meeting Society’s Expectations</a></li>

                    <li class="sub-nav-item"><a href="/global-themes/performance-transformation">Performance Transformation</a></li>

                    <li class="sub-nav-item"><a href="/global-themes/regions-in-focus">Regions in Focus</a></li>

                  </ul>
                </div>

                <div class="column">

                  <ul class="nav-list" aria-labelledby="topic-title-Featured global-themes-subnav">

                    <li class="sub-nav-item">
                      <a href="/mgi/overview" role="menuitem">
                        McKinsey Global Institute
                        <p>Our mission is to help leaders in multiple sectors develop a deeper understanding of the global economy.</p>
                      </a>
                    </li>

                    <li class="sub-nav-item">
                      <a href="/quarterly/overview" role="menuitem">
                        <em>McKinsey Quarterly</em>
                        <p>Our flagship business publication has been defining and informing the senior-management agenda since 1964.</p>
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
              <footer class="sub-nav-footer">
                <a class="view-all-link -arrow" href="/featured-insights">Read our featured insights</a>
              </footer>
            </div>
          </li>
          <li class="nav-item">
            <a href="/locations">Locations</a>
          </li>

          <li class="nav-item careers  has-children" role="menu" aria-haspopup="true">
            <a href="#0">Careers</a>
            <div class="sub-nav">
              <div class="sub-nav-links">
                <div class="column">
                  <ul class="nav-list" aria-labelledby="sub-nav-title-careers">

                    <li class="sub-nav-item"><a href="/careers/home" role="menuitem">Home</a></li>

                    <li class="sub-nav-item"><a href="/careers/search-jobs" role="menuitem">Search Jobs</a></li>

                    <li class="sub-nav-item"><a href="/careers/explore" role="menuitem">Explore</a></li>

                    <li class="sub-nav-item"><a href="/careers/meet-our-people" role="menuitem">Our People</a></li>

                    <li class="sub-nav-item"><a href="/careers/interviewing" role="menuitem">Interviewing</a></li>

                    <li class="sub-nav-item"><a href="/careers/students" role="menuitem">Students</a></li>

                    <li class="sub-nav-item"><a href="/careers/experienced-professionals" role="menuitem">Experienced Professionals</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item about  has-children" role="menu" aria-haspopup="true">
            <a href="#0" id="about-us-subnav">About Us</a>
            <div class="sub-nav about-us" aria-labelledby="about-us-subnav">
              <header class="sub-nav-header">
                <a href="#0 " class="close-sub-nav" tabindex="-1"></a>
                <span class="sub-nav-title" id="sub-nav-title-about-us">About Us</span>
              </header>
              <div class="sub-nav-links">
                <div class="column column-featured">
                  <span class="column-header full-width" id="about-us-featured">Featured</span>
                  <ul class="nav-list" aria-labelledby="about-us-featured sub-nav-title-about-us">

                    <li class="sub-nav-item">
                      <a href="/about-us/new-ventures" role="menuitem">
                        New Ventures
                        <p>Our team of 2000+ innovators bring new ideas, solutions, and services to our clients.</p>
                      </a>
                    </li>

                    <li class="sub-nav-item">
                      <a href="/business-functions/learning-programs-for-clients/overview/mckinsey-academy/how-we-help-clients" role="menuitem">
                        McKinsey Academy
                        <p>Our learning programs help organizations accelerate growth by unlocking their people's potential.</p>
                      </a>
                    </li>

                  </ul>
                </div>
                <div class="column column-main-links">
                  <ul class="nav-list" aria-labelledby="sub-nav-title-about-us">

                    <li class="sub-nav-item"><a href="/about-us/overview" role="menuitem">Overview</a></li>

                    <li class="sub-nav-item"><a href="/about-us/social-impact" role="menuitem">Social Impact</a></li>

                    <li class="sub-nav-item"><a href="/about-us/media-center" role="menuitem">Media Center</a></li>

                    <li class="sub-nav-item"><a href="/about-us/alumni" role="menuitem">Alumni</a></li>

                    <li class="sub-nav-item"><a href="/about-us/new-at-mckinsey-blog" role="menuitem">New at McKinsey Blog</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>

      </nav>

    </div>
    <!--END NAV/PRIMARY NAVIGATION --




    <div class="search-nav" data-module="SearchNav,SearchSuggestions">
      <span class="search-nav-input-icon mck-search-icon"></span>
      <input class="search-nav-input" type="search" title="Search" placeholder="Type to search..." value="" aria-live="polite">
      <button class="search-nav-submit" type="button" name="search" title="Search">Search</button>
      <button type="button" class="search-nav-button-close desktop mck-close-icon">
        <span class="visually-hidden">Toggle search field</span>
      </button>
      <ul class="search-nav-suggestions span-full-width">
      </ul>
    </div>

  </div>
</section>
<div class="logo-container">
  <a href="/" class="names mck-logo-icon alone">
    <span class="visually-hidden">McKinsey &amp; Company Home</span>
  </a>

</div>
<!--END NAVIGATION MENU--

<div class="nav-right">
  <button type="button" class="search-nav-button mck-search-icon" tabindex="0">
    <span class="visually-hidden">Toggle search field</span>
  </button>
  <button type="button" class="search-nav-button-close mobile mck-close-icon" tabindex="0">
    <span class="visually-hidden">Toggle search field</span>
  </button>

</div>


<!-- END NAVIGATION WHITE BAR -->

</header>~

</body>
</html>
