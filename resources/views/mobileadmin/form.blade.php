<?php 
// $user = Request::session()->get('user');
// if($user == "" || substr($user,0,2) != "ad"){
// 	header('location:/nhom22/public/login');
// 	exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Admin</title>

		<!-- Google font -->
		<link href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,500,700')}}" rel="stylesheet">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}" />

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{ url('.css/slick.css') }}"/>
		<link type="text/css" rel="stylesheet" href="{{ url('.css/slick-theme.css') }}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{ url('.css/nouislider.min.css') }}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{ url('.css/font-awesome.min.css') }}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{ url('.css/style.css') }}"/>
		<link type="text/css" rel="stylesheet" href="{{ url('.css/style1.css') }}"/>
		<link type="text/css" rel="stylesheet" href="{{ url('.css/app.css') }}"/>
		<link type="text/css" rel="stylesheet" href="{{ url('.css/flexslider.css') }}"/>
		<link type="text/css" rel="stylesheet" href="{{ url('.css/responsiveslides.css') }}"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="{{url('public/css/bootstrap-responsive.min.css')}}" />
		<link rel="stylesheet" href="{{url('public/css/uniform.css')}}" />
		<link rel="stylesheet" href="{{url('public/css/select2.css')}}" />
		<link rel="stylesheet" href="{{url('public/css/matrix-style.css')}}" />
		<link rel="stylesheet" href="{{url('public/css/matrix-media.css')}}" />
		<link href="{{ url('.css/font-awesome.css') }}" rel="stylesheet" />
		<link href="{{ url('http://fonts.googleapis.com/css?family=Open+Sans:400,700,800')}}" rel='stylesheet' type='text/css'>
		<style type="text/css">
			ul.pagination{
				list-style: none;
				float: right;
			}
			ul.pagination li.active{
				font-weight: bold
			}
			ul.pagination li{
			float: left;
			display: inline-block;
			padding: 10px
			}
		</style>
    </head>
	<body>
		<!--Header-part-->
<div id="header">
	<h1><a href="/nhom3/public/mobileadmin/adminindex">Dashboard</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
	<ul class="nav">
		<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">
		
		</span><b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
				<li class="divider"></li>
				<li>
				<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
				</li>
				<!-- <li><a href="/nhom22/public/logout/out"><i class="icon-key"></i> Log Out</a></li> -->
			</ul>
		</li>
		<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
				<li class="divider"></li>
				<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
				<li class="divider"></li>
				<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
				<li class="divider"></li>
				<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
			</ul>
		</li>
		<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
		<li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
		<!-- <li class=""><a title="" href="/nhom22/public/logout/out"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li> -->
	</ul>
</div>

<!--start-top-serch-->
<div id="search">
	<form action="result" method="get">
	<input type="text" placeholder="Search here..." name="key"/>
	<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</form>
</div>
<!--close-top-serch-->

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
	<ul>
		<li><a href="/nhom3/public/admin/product"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

		<li> <a href="/nhom3/public/admin/product/create"><i class="icon icon-th-list"></i> <span>Add New Product</span></a></li>
		<li> <a href="/nhom3/public/admin/manufacture"><i class="icon icon-th-list"></i> <span>Manufactures</span></a></li>
		<li> <a href="/nhom3/public/admin/manufacture/create"><i class="icon icon-th-list"></i> <span>Add New Manufactures</span></a></li>
		<li> <a href="/nhom3/public/admin/protype"><i class="icon icon-th-list"></i> <span>Protypes</span></a></li>
		<li> <a href="/nhom3/public/admin/protype/create"><i class="icon icon-th-list"></i> <span>Add New Protypes</span></a></li>

	</ul>
</div>
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Add New Product</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Product Detail</h5>
					</div>
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						<form action="{{url('/admin/product')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
						@csrf
							<div class="control-group">
								<label class="control-label">Name :</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Product name" name="name" /> *
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Choose a product type :</label>
								<div class="controls">
									<select name="type_id">
										<?php foreach($protypes as $value) { ?>
										<option value="<?php echo $value->type_ID ?>"><?php echo $value->type_name ?></option>
										<?php } ?>
									</select> *
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Choose a manufacture :</label>
								<div class="controls">
									<select name="manu_id">
									<?php foreach($manufacture as $value) { ?>
										<option value="<?php echo $value->manu_ID ?>"><?php echo $value->manu_name ?></option>
									<?php } ?>
									</select> *
								</div>
								<div class="control-group">
									<label class="control-label">Choose an image :</label>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload">
										<input type="file" name="fileUpload2" id="fileUpload2">
										<input type="file" name="fileUpload3" id="fileUpload3">
										<input type="file" name="fileUpload4" id="fileUpload4">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"  >Description</label>
									<div class="controls">
										<textarea class="span11" placeholder="Description" name = "description"></textarea>
									</div>
									<div class="control-group">
										<label class="control-label">Price :</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="price" name = "price" /> *
										</div>

									</div>

									<div class="form-actions">
										<button type="submit" class="btn btn-success">Add</button>
									</div>
								</div>

						</form>
						<!-- END USER FORM -->


					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END CONTENT -->

<!--Footer-part-->
<div class="row-fluid">
	<div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
</div>
<!--end-Footer-part-->
<script src="{{ url('js/jquery.min.js') }}"></script>
		<script src="{{ url('js/bootstrap.min.js') }}"></script>
		<script src="{{ url('js/slick.min.js') }}"></script>
		<script src="{{ url('js/nouislider.min.js') }}"></script>
		<script src="{{ url('js/jquery.zoom.min.js') }}"></script>
		<script src="{{ url('js/main.js') }}"></script>

		<script src="{{ url('js/jquery.ui.custom.js') }}"></script>
		<script src="{{ url('js/jquery.uniform.js') }}"></script>
		<script src="{{ url('js/select2.min.js') }}"></script>
		<script src="{{ url('js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ url('js/matrix.js') }}"></script>
		<script src="{{ url('js/matrix.tables.js') }}"></script>
</body>
</html>
