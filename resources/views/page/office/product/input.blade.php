<x-office-layout title="Users">

<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <h6>
                        Create Data Tiket Pesawat
                    </h6>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('product.index')}}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <form id="form_input" action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="required fs-6 fw-bold mb-2">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama...">
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">Harga</label>
                            <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga...">
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">Jenis</label>
                            <input type="text" class="form-control" name="jenis_tiket" placeholder="Masukkan Jenis...">
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">Destinasi</label>
                            <input type="text" class="form-control" name="destinasi" placeholder="Masukkan Destinasi..">
                        </div>
                        <div class="col-lg-4">
                            <label class="fs-6 fw-bold mb-2">Gambar</label>
                            <input type="file" class="form-control" name="gambar" placeholder="Foto....">
                        </div>
                        <div class="min-w-150px mt-10 text-end">
                            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</x-office-layout>