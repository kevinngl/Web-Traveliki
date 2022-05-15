<x-web-layout title="Home">
    
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row col-mb-50 gutter-50">

                <div class="col-lg-6">
                    <h4>Your Orders</h4>

                    <div class="table-responsive">
                        <table class="table cart">
                            <thead>
                                <tr>
                                    <th class="cart-product-thumbnail">&nbsp;</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-thumbnail">
                                        <a href="#"><img width="64" height="64" src="{{asset('assets/shop/hotel/1.jpg')}}" alt="Pink Printed Dress"></a>
                                    </td>

                                    <td class="cart-product-name">
                                        <a href="#">Hotel Royale Bandung</a>
                                    </td>

                                    <td class="cart-product-subtotal">
                                        <span class="amount">Rp 855.000</span>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4>Cart Totals</h4>

                    <div class="table-responsive">
                        <table class="table cart">
                            <tbody>
                                <tr class="cart_item">
                                    <td class="border-top-0 cart-product-name">
                                        <strong>Cart Subtotal</strong>
                                    </td>

                                    <td class="border-top-0 cart-product-name">
                                        <span class="amount">$106.94</span>
                                    </td>
                                </tr>

                                <tr class="cart_item">
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>$106.94</strong></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="accordion clearfix">
                        <div class="accordion-header">
                            <div class="accordion-title">
                                Transfer Bank
                            </div>
                        </div>
                        <div class="accordion-content clearfix">
                            No. Rekening : 12148125011902 <br>
                            Nama : James Bond
                            No.telp : 08812481355
                        </div>
                    </div>
                    <a href="#" class="button button-3d float-end">Buat Pesanan</a>
                </div>
            </div>
        </div>
    </div>
</section>
</x-web-layout>
