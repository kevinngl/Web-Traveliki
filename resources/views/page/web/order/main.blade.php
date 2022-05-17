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
                                    <th class="cart-product-name">Nama</th>
                                    <th class="cart-product-name">Harga</th>
                                    <th class="cart-product-name">Jenis Tiket</th>
                                    <th class="cart-product-name">Destinasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form id="form_input" action="{{ route('order.store',$product->id)}}" method="POST" enctype="multipart/form-data">
                                    <tr class="cart_item">
                                    <td></td>
                                    <td class="cart-product-name">
                                        <input type="text" name="nama" value="{{$product->nama}}">
                                    </td>
                                    <td class="cart-product-name">
                                        <input type="text" name="harga" value="{{$product->harga}}">
                                    </td>
                                    <td class="cart-product-name">
                                        <input type="text" name="jenis_tiket" value="{{$product->jenis_tiket}}">
                                    </td>
                                    <td class="cart-product-name">
                                        <input type="text" name="destinasi" value="{{$product->destinasi}}">
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
                                    <td class="cart-product-name">
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name">
                                        <span class="amount color lead"><strong>Rp{{$product->harga}}</strong></span>
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
                    <input type="submit" value="Buat Pesanan" class="button button-3d float-end">
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
</x-web-layout>
