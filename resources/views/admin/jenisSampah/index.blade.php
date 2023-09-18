@extends('admin.layout.content')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data /</span> Jenis Sampah</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="card-header">Daftar Jenis Sampah</h5>
                </div>
                <div class="card-header col-md-8">
                    <a href="{{ route('jenisSampah.create')}}"><button class="btn btn-primary btn-md float-end" type="button">Tambah Jenis Sampah</button></a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Foto - Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($jeniSampah as $item)
                        <tr>
                            <td>
                                <img src="{{$item['foto']}}" style="height: 10%; width:10%"> <strong>{{$item['nama']}}</strong>
                            </td>
                            <td>{{$item['deskripsi']}}</td>
                            <td>{{$item['harga'].'/'.$item['satuan']}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="ti ti-pencil me-2"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="ti ti-trash me-2"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@stop
