<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>mobile</title>
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
      <link rel="stylesheet" href="{{asset('css1/responsive.css')}}">
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
                        <a href="{{ url('/') }}" class="navbar-brand"><img src="{{asset('images/nhalogo.jpg')}}"  alt=""></a>
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
            <li><a href="#">How it works</a></li>
            <li><a href="#">Chamb for Business</a></li>
         </ul>
      </div>
      <div class="terms-conditions product-page">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                   
                     <li class="active"><a href="{{ url('/') }}">Home</a> </li>
                     <li class="active">product</li>
                     <li><a href="#">detail</a></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="product-page-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <h2>Product detail</h2>
                     <p>By <span>Trường</span></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-4">
                  <div class="left-profile-box-m prod-page">
                     <div class="pro-img">
                  
                     </div>
                     <div class="pof-text">
                        <h3>NHÓM III</h3>
                        <div class="check-box"></div>
                     </div>
                     <a href="{{ url('/') }}">back to the store</a>
                  </div>
               </div>
               <div class="col-md-7 col-sm-4">
                  <div class="md-prod-page">
                     <div class="md-prod-page-in">
                        <div class="page-preview">
                           <div class="preview">
                           <?php foreach($productsByID as $value) { ?>
                              <div class="preview-pic tab-content">
                                 <div class="tab-pane active" id="pic-1"><img src="{{ asset('img/'.$value->image) }}" alt="" /></div>
                                 <div class="tab-pane" id="pic-2"><img src="{{ asset('img/'.$value->image2) }}" alt="" /></div>
                                 <div class="tab-pane" id="pic-3"><img src="{{ asset('img/'.$value->image3) }}" alt="" /></div>
                                 <div class="tab-pane" id="pic-4"><img src="{{ asset('img/'.$value->image4) }}" alt="" /></div>
                                
                              </div>
                              
                              <ul class="preview-thumbnail nav nav-tabs">
                                 <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('img/'.$value->image) }}" data-imagezoom="true" class="img-responsive" alt="" /></a></li>
                                 <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('img/'.$value->image2) }}" alt="" /></a></li>
                                 <li><a data-target="#pic-3" data-toggle="tab"><img src="{{ asset('img/'.$value->image3) }}" alt="" /></a></li>
                                 <li><a data-target="#pic-4" data-toggle="tab"><img src="{{ asset('img/'.$value->image4) }}" alt="" /></a></li>
                                 
                                
                              </ul>
                              <?php } ?>
                              	
                              </div>
                        </div>
                        <div class="btn-dit-list clearfix">
                           <div class="left-dit-p">
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                 <p>23 likes</p>
                              </div>
                           </div>
                           <div class="right-dit-p">
                              <div class="like-list">
                                 <ul>
                                    <li>
                                       <div class="im-b"><img class="" src="images/list-img-01.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-02.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-03.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-04.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-05.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="description-box">
                     <?php foreach($productsByID as $value) { ?>
                        <div class="dex-a">
                           <h4>Description</h4>
                           <p>
                           <?php echo $value->description ?>
                           </p>
                           
                        </div>
                        
                     </div>
                     <?php } ?>
                  </div>
                  
               </div>
               <div class="col-md-3 col-sm-12">
               <?php foreach($productsByID as $value) { ?>
                  <div class="price-box-right">
                     <h3>Name: <?php echo $value->name ?></h3>
                     <h3>Price: $<?php echo $value->price ?> </h3>
                     
                     <a href="#">Add to cart</a>
                     
                  </div>
                  <?php } ?>
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
                        <div class="col-sm-4">
                           <h2>INDUSTRIES</h2>
                           <ul >
                              <li><a href="#">Textiles</a></li>
                              <li><a href="#">Furniture</a></li>
                              <li><a href="#">Leather</a></li>
                              <li><a href="#">Agriculture</a></li>
                              <li><a href="#">Food & drinks</a></li>
                           </ul>
                           </div>
                           <div class="col-sm-4">
                           <ul >
                           <h2>COMPANY</h2>
                              <li><a href="#">Office</a></li>
                              <li><a href="#">Decoratives</a></li>
                              <li><a href="#">Electronics</a></li>
                              <li><a href="#">Machines</a></li>
                              <li><a href="#">Building</a></li>
                           </ul>
                           </div>
                           <div class="col-sm-4">
                           <ul >
                           <h2>INDUSTRIES</h2>
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
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
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
   </body>
</html>