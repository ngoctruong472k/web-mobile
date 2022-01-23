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
                        <a href="{{ url('/') }}" class="navbar-brand"><img src="images/nhalogo.jpg" width="32px"  /></a>
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
       @yield('content2')
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