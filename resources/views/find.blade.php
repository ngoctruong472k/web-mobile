<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>chamb</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="{{asset('css1/font-awesome.min.css')}}">
      <!--bootstrap css-->
      <link rel="stylesheet" href="{{asset('css1/bootstrap.min.css')}}">
      <!--animate css-->
      <link rel="stylesheet" href="{{asset('css1/animate-wow.css')}}">
      <!--main css-->
      <link rel="stylesheet" href="{{asset('css1/style.css')}}">
      <link rel="stylesheet" href="{{asset('css1/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href="{{asset('css1/slick.min.css')}}">
      <!--responsive css-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   </head>
   <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('images/nhalogo.jpg')}}" width="32px"  /></a>
                     </div>
                     <form class="navbar-form navbar-left web-sh"  method="post" action="find">
                        <div class="form">
                        @csrf
                           <input type="text" class="form-control" placeholder="Search for products " name="keyf">
                        </div>
                     </form>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                           
                              <ul>
                              <li><a href="{{ url('/') }}">Home</a></li>
                                 <li><a href="http://localhost:82/nhom3/public/admin/product">Login</a></li>
                                 <li><a class="custom-b" href="#">Shop cart</a></li>
                                
                              </ul>
                           
                           </div>
                        </div>
                        
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                             
                              <?php foreach($protypes as $value) { ?>
                                 <li><a href="{{ asset('type/'.$value->type_ID) }}"><?php echo $value->type_name ?></a></li>
						<?php } ?>
                
			</ul>
			</ul>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
   <body>
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="howitworks.html">How it works</a></li>
            <li><a href="#">chamb for Business</a></li>
         </ul>
      </div>
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Welcome to our website.</h1>
                     <h4>I bet it's very interesting and suitable for you.</h4>
                     
                  </div>
               </div>
               
               <div class="row clearfix">
               <?php foreach($keyfind as $value) { ?>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  
                  <a href="{{url('product')}}/<?php echo $value->ID ?>">
                     
                        <div class="box-img">
                       
                           <h4><?php echo $value->name ?></h4>
                           <img class="card-img-top" src="{{ asset('img/'.$value->image) }}">
                           <h4>$<?php echo $value->price ?></h4> 
                           <h3><a href="{{url('product')}}/<?php echo $value->ID ?>"><button>add to cart</button> </a></h3>                                                                     
                        </div>   

                     </a>      
                                            
                  </div>   
                  <?php } ?>      

               </div>
               
            </div>
         </div>
      </div>
      <div class="cat-main-box">
         <div class="container">
            <div class="row panel-row">
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/xpann-icon.jpg" class="icon-small" alt="">
                        <h4>???Chamb??? Your Business</h4>
                        <p>Grow easily with chamb. Create free account.
                           We help expanding your business easily.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/create-icon.jpg" class="icon-small" alt="">
                        <h4>Create and add</h4>
                        <p>Grow easily with chamb. Create free account.
                           We help expanding your business easily.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/get-icon.jpg" class="icon-small" alt="">
                        <h4>Get inspired</h4>
                        <p>Grow easily with chamb. Create free account.
                           We help expanding your business easily.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products_exciting_box">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="exciting_box f_pd">
                     <img src="images/exciting_img-01.jpg" class="icon-small" alt="" />
                     <h4>Explore <strong>exciting</strong> and exotic products
                        tailored to you.
                     </h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris..
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                  <div class="exciting_box l_pd">
                     <img src="images/exciting_img-02.jpg" class="icon-small" alt="" />
                     <h4><strong>List your products on</strong> chamb and grow connections.</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris..
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="start-free-box">
         <div class="container">
            <div class="row">
               <div class="container">
                  <div class="main-start-box">
                     <div class="free-box-a clearfix">
                        <div class="col-md-6 col-sm-6">
                           <div class="left-a-f">
                              <h3>A platform built for scale & expansion. Start for free.</h3>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="right-a-f">
                              <p>Over the comming years, way thet business through the web
                                 works will change at agreat - and chamb is the
                                 gamebreaker.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="main-start-box">
                  <div class="bg_img_left"><img src="images/bg_img1.png" alt="#" /></div>
                  <div class="container">
                     <div class="buyer-box clearfix">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                           <div class="left-buyer">
                              <img class="img-responsive" src="images/creat_pro.png" alt="#" />
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                           <div class="right-buyer">
                              <h4>buyer</h4>
                              <h2>Empower your factory<br>
                                 <span>With a new lead Channel</span>
                              </h2>
                              <p>Never worry about sales or income ftom outbound
                                 channels. with chamb your store is directly
                                 connected to thousands of interested in your
                                 products.
                              </p>
                              <a href="#">Create a buyer account</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="bg_img_right"><img src="images/bg_img1.png" alt="#" /></div>
               <div class="main-start-box">
                  <div class="container">
                     <div class="supplier clearfix">
                        <div class="col-md-5 col-sm-6">
                           <div class="left-supplier">
                              <h4>supplier</h4>
                              <h2>Grow your store <br><span>With a new sales channel</span></h2>
                              <p>Never worry about sales or income ftom outbound
                                 channels. with chamb your store is directly
                                 connected to thousands of interested in your
                                 products.
                              </p>
                              .
                              <a href="#">Create a supplier account</a>
                           </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                           <div class="right-supplier">
                              <img class="img-responsive" src="images/supplier-pc-img.png" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products">
         <div class="main-products">
            <h2>TRENDING PRODUCTS ON CHAMB</h2>
            <div class="product-slidr">
               <div class="slider">
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr1.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Table with Lights</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr2.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr3.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Wood Sofaplatform</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr4.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Wall Sticker</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr1.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr2.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr3.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="main-footer">
            <div class="container">
               <div class="row">
                  <div class="footer-top clearfix">
                     <div class="col-md-2 col-sm-6">
                        <h2>Start a free
                           account today
                        </h2>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="form-box">
                           <input type="text" placeholder="Enter yopur e-mail" />
                           <button>Continue</button>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="help-box-f">
                           <h4>Question? Call us on 12 34 56 78 for help</h4>
                           <p>Easy setup - no payment fees - up to 100 products for free</p>
                        </div>
                     </div>
                  </div>
                  <div class="footer-link-box clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-f-box">
                           <div class="col-sm-4">
                              <h2>SELL ON chamb</h2>
                              <ul>
                                 <li><a href="#">Create account</a></li>
                                 <li><a href="howitworks.html">How it works suppliers</a></li>
                                 <li><a href="pricing.html">Pricing</a></li>
                                 <li><a href="#">FAQ for Suppliers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>BUY ON chamb</h2>
                              <ul>
                                 <li><a href="#">Create account</a></li>
                                 <li><a href="#">How it works buyers</a></li>
                                 <li><a href="#">Categories</a></li>
                                 <li><a href="#">FAQ for buyers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>COMPANY</h2>
                              <ul>
                                 <li><a href="about-us.html">About chamb</a></li>
                                 <li><a href="#">Contact us</a></li>
                                 <li><a href="#">Press</a></li>
                                 <li><a href="#">Careers</a></li>
                                 <li><a href="#">Terms of use</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="right-f-box">
                           <h2>INDUSTRIES</h2>
                           <ul class="col-sm-4">
                              <li><a href="#">Textiles</a></li>
                              <li><a href="#">Furniture</a></li>
                              <li><a href="#">Leather</a></li>
                              <li><a href="#">Agriculture</a></li>
                              <li><a href="#">Food & drinks</a></li>
                           </ul>
                           <ul class="col-sm-4">
                              <li><a href="#">Office</a></li>
                              <li><a href="#">Decoratives</a></li>
                              <li><a href="#">Electronics</a></li>
                              <li><a href="#">Machines</a></li>
                              <li><a href="#">Building</a></li>
                           </ul>
                           <ul class="col-sm-4">
                              <li><a href="#">Cosmetics</a></li>
                              <li><a href="#">Health</a></li>
                              <li><a href="#">Jewelry</a></li>
                              <li><a href="#">See all here</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <p><img width="90" src="images/logo.png" alt="#" style="margin-top: -5px;" /> All Rights Reserved. Company Name ?? 2018</p>
                  </div>
                  <div class="col-md-4">
                     <ul class="list-inline socials">
                        <li>
                           <a href="">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-linkedin" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                     <ul class="right-flag">
                        <li><a href="#"><img src="images/flag.png" alt="" /> <span>Change</span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
<!--main js--> 
<script src="{{asset('js1/jquery-1.12.4.min.js')}}"></script> 
      <!--bootstrap js--> 
      <script src="{{asset('js1/bootstrap.min.js')}}"></script> 
      <script src="{{asset('js1/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('js1/slick.min.js')}}"></script> 
      <script src="{{asset('js1/wow.min.js')}}"></script>
      <!--custom js--> 
      <script src="{{asset('js1/custom.js')}}"></script>
   </body>
</html>