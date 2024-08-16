<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	<!-- CSS -->
	<style>
	.swiper {
		width: 100%;
		height: 25%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #6b1616;
	  border-radius: 5px;
	  margin-right: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
	.active{
		color: aqua;
	}

    @media (max-width: 760px) {
      .swiper-button-next {
        right: 20px;
        /* transform: rotate(90deg); */
      }
	  .swiper {
		width: 90%;
		height: 20%;
    }

      .swiper-button-prev {
        left: 20px;
        /* transform: rotate(90deg); */
      }
    }
	</style>
	<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/slider-radio.css')}}">
	<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/plyr.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('icon/favicon-32x32.png" sizes="32x32')}}">
	<link rel="apple-touch-icon" href="{{asset('icon/favicon-32x32.png')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	@vite('resources/css/app.css')
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

	<title>FlixTV – Movies & TV Shows, Online cinema HTML Template</title>
</head>

<body>
	<!-- header (relative style) -->
	<div class="navbar">
        <nav class="border-gray-200 px-2 mb-5">
			<div class="row">
				<div class="col-12 col-md-6 flex justify-center">
					<img class="w-60 mt-10" src="{{asset('img/ComicLogo.png')}}" alt="">
				</div>
				<div class="col-12 col-md-6 flex justify-start">
					<div class="flex justify-between items-center w-full md:w-auto" >
						<ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 text-white" >
							<li>
								<a href="#" aria-current="page">연재</a>
							</li>
							<li>
								<a href="#">코믹스</a>
							</li>
							<li>
								<a href="#"  >포토툰</a>
							</li>
							<li>
								<a href="#">웹소설(준비중)</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </nav>
    </div>
    @yield('main')

	<!-- subscriptions -->
	<!-- end subscriptions -->

	<!-- plan -->
	
	<!-- end plan -->

	<!-- videos -->
	<!-- end videos -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<p class="footer__copyright">© 2023-comic-001.kotv-001.com creat by<a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">maytech</a>.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- @include('layout.swiper') --}}
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/slider-radio.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>
	<script src="{{asset('js/smooth-scrollbar.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/plyr.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
	<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
	<script>
		 var swiper = new Swiper('.swiper', {
        slidesPerView: getSlice(),
        direction: 'horizontal',
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            767: {
                slidesPerView: 3,
            },
        },
    });

    window.addEventListener('resize', function() {
        swiper.params.slidesPerView = getSlice();
        swiper.update();
    });

    function getSlice() {
        var sliceNum = window.innerWidth <= 767 ? 3 : 4;
        return sliceNum;
    }

    // function getDirection() {
    //   var windowWidth = window.innerWidth;
    //   var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    //   return direction;
    // }
	</script>
</body>
</html>