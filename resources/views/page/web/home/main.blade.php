<x-web-layout title="Home">
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Home</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<!-- Shop
					============================================= -->
					<div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">
						@foreach($product as $item)
						<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="grid-inner">
								<div class="product-image">
									<a href="#"><img src="http://192.168.137.1:8081/images/{{$item->gambar}}" alt="pesawat "></a>
									<div class="sale-flash badge bg-secondary p-2">{{$item->jenis_tiket}}</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="{{route('detail',$item->id)}}">{{$item->nama}} / Destinasi : {{$item->destinasi}}</a></h3></div>
									<div class="product-price"><ins>Rp {{$item->harga}}</ins></div>
								</div>
							</div>
						</div>
						@endforeach
					</div><!-- #shop end -->

				</div>
			</div>
		</section><!-- #content end -->

</x-web-layout>