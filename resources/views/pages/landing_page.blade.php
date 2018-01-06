@extends('layouts.landing')

@section('content')

<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-left">
				<div class="logo">
					<a href="index.html">Universitas Airlangga<span>Excellent With Morality</span></a>
				</div>
				<div class="logo-bottom">
					<h1>Mahasiswa Berprestasi</h1>
					<p>Pemilihan Mahasiswa Berprestasi Program Diploma</p>
					<div class="view">
						<a href="single.html">Daftar Sekarang</a>
					</div>
				</div>
			</div>
			<div class="banner-right">
				<div class="header-nav">
					<span class="menu"><img src="{{asset('images/menu.png')}}" alt=" "></span>
					<ul class="nav1">
						<li class="active"><a href="/">Home</a></li>
						<li><a href="/login_mawapres">Login</a></li>
					</ul>
				</div>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
			</div>
			<div class="banner-info-fig">
				<span> </span>
			</div>
		</div>
	</div>
<!-- //banner -->



@stop