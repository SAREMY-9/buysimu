<x-app-layout>	
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('Buy Simu','Buy Simu')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>


         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


	</head>
	<body>


		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="/back/vendors/images/buysimulogo.png" alt="" />
				</div>

				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Buy Simu</div>
			</div>
		</div>



		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Buy Simu</h4> 
								</div>

								
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item active" aria-current="page">
											<a href="">Home</a>
										</li>

										<li class="breadcrumb-item " >
											
											Click My Simu KIT
											
										<i class="fas fa-chevron-right"></i>
												
										</li>
									
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-danger dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										My Simu KIT
									</a>
									<div class="dropdown-menu dropdown-menu-right">

										<a class="dropdown-item" href="{{route('contractandterms')}}">Step 1.Contract</a>
										<a class="dropdown-item" href="{{route('contractandterms')}}">Step 2.Product Specification</a>
										<a class="dropdown-item" href="{{route('userResults')}}">My Loan</a>
										
										

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30"></div>
				</div>



				@if(session('success'))

							<div class="alert alert-success">

								{{session('success')}}
								
							</div>

							@endif



				<div class="footer-wrap pd-20 mb-20 card-box ">
					
					<a href="https://x.com/JnrVitalis" target="_blank"   style="text-decoration: none;"

						> <p class="bg-light text-danger "> BUY SIMU By SaremyInc </p></a
					>

				</div>

			</div>
		</div>		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>

</x-app-layout>
