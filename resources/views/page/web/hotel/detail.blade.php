<x-web-layout title="Home">
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="single-product">
                <div class="product">
                    <div class="row gutter-40">

                        <div class="col-md-5">

                            <!-- Product Single - Gallery
                            ============================================= -->
                            <div class="product-image">
                                <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                    <div class="flexslider">
                                        <div class="slider-wrap" data-lightbox="gallery">
                                            <div class="slide" data-thumb="{{asset('assets/shop/hotel/1.jpg')}}"><a href="{{asset('assets/shop/hotel/1.jpg')}}" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="{{asset('assets/shop/hotel/1.jpg')}}" alt="Pink Printed Dress"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale-flash badge bg-danger p-2">Sale!</div>
                            </div><!-- Product Single - Gallery End -->

                        </div>

                        <div class="col-md-5 product-desc">

                            <div class="d-flex align-items-center justify-content-between">

                                <!-- Product Single - Price
                                ============================================= -->
                                <div class="product-price"> <ins>Rp 855.000</ins></div><!-- Product Single - Price End -->

                            </div>

                            <div class="line"></div>

                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                            {{-- <form class="cart mb-0 d-flex justify-content-between align-items-center" method="post" action="{{route('order')}}">
                                <button type="submit" class="add-to-cart button m-0">Pesan</button>
                            </form><!-- Product Single - Quantity & Cart Button End --> --}}
                            
                            <a href="{{route('order')}}" class="cadd-to-cart button m-0">Pesan</a>
                            <div class="line"></div>

                            <!-- Product Single - Short Description
                            ============================================= -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
                            <p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>

                        </div>
                        <div class="w-100"></div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
</x-web-layout>