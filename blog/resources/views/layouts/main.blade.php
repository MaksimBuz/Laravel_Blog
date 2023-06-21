<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Блог</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="https://www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="{{asset('css/zerogrid.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	
</head>
<body class="gallery-page">
	<div class="wrap-body">
		<header class="">
			<div class="logo">
				<a href="#">zVintauge</a>
			</div>
			<div id="cssmenu" class="align-center">
				<ul>
					<li><a href="{{route('main.index')}}"><span>Home</span></a></li>
					<li class=""><a href="{{route('main.blog')}}"><span>Blog</span></a>
					</li>
					<li><a href="{{route('main.about')}}"><span>About</span></a></li>
					<li class="last"><a href="{{route('main.contact')}}"><span>Contact</span></a></li>
					<li class="last"><a href="{{route('admin.main.index')}}"><span>Admin Panel</span></a></li>
				</ul>
			</div>
		</header>
@yield('content');
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-4 col-footer-1">
						<div class="wrap-col">
							<h3 class="widget-title">About Us</h3>
							<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
						</div>
					</div>
					<div class="col-1-4 col-footer-2">
						<div class="wrap-col">
							<h3 class="widget-title">Последние посты</h3>
							<ul>
                                @foreach ($PostData as $item)
                                    <li>{{$item->title}}</li>
                                @endforeach
							</ul>
						</div>
					</div>
					<div class="col-1-4 col-footer-3">
						<div class="wrap-col">
							<h3 class="widget-title">Тэги</h3>
                            @foreach ($Tag as $item)
                            <a href="#">{{$item->title}}</a>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="zerogrid bottom-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-vimeo"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="copyright">
					Copyright @ - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>