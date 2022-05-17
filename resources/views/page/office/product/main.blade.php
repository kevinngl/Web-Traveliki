<x-office-layout title="Users">
    <div id="content_list">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card">
                    <form id="content_filter">
                        <div class="card-header border-0 pt-6">
                            <div class="card-title">
                               <p>Data Tiket Pesawat</p>
                            </div>
                            <div class="card-toolbar">
                                <div class="d-flex justify-content-end">
                                    <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                        {{-- <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                            </div>
                                        </th> --}}
                                        <th class="min-w-125px">Nama</th>
                                        <th class="min-w-125px">Harga</th>
                                        <th class="min-w-125px">Jenis Tiket</th>
                                        <th class="min-w-125px">Destinasi</th>
                                        <th class="min-w-125px">Gambar</th>
                                        <th class="text-end min-w-100px">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                @foreach ($product as $item)
                                <tbody>
                                    <td>
                                        <p class="text-gray-800 text-hover-primary mb-1">{{$item->nama}}</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-800 text-hover-primary mb-1">{{$item->harga}}</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-800 text-hover-primary mb-1">{{$item->jenis_tiket}}</p>
                                    </td>
                                    <td>
                                        <p class="text-gray-800 text-hover-primary mb-1">{{$item->destinasi}}</p>
                                    </td>
                                    <td>
                                        <img src="http://192.168.137.1:8081/images/{{$item->gambar}}" class="w-35px me-3" alt="" />
                                    </td>
                                    <td class="text-end">
                                        <div class="btn-group" role="group">
                                            {{-- <a href="{{route('product.edit',$item->id)}}" class="btn btn-sm btn-light btn-active-light-primary">Ubah</a> --}}
                                            <a href="{{route('product.edit',$item->id)}}" class="btn btn-sm btn-light btn-active-light-primary">Ubah</a>
                                            {{-- <a href="{{route('product.destroy',$item->id)}}"  class="btn btn-sm btn-light btn-active-light-primary">Hapus</a> --}}
                                            <a href="{{route('product.destroy',$item->id)}}"  class="btn btn-sm btn-light btn-active-light-primary">Hapus</a>
                                        </div>
                                    </td>
                                </tbody>
                                @endforeach

                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>
    @section('custom_js')
        <script>
            // load_list(1);
        </script>
    @endsection
</x-office-layout>
