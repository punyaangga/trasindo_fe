@extends('admin.layout.content')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @php
            $response = Http::get('https://api.example.com/api/resource');
            $data = $response->json();
        @endphp

        <ul>
            @foreach ($data as $item)
                <li>{{ $item['name'] }}</li>
            @endforeach
        </ul>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Data /</span> Edit Jenis Sampah</h4>
        <div class="row">
            <!-- FormValidation -->
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Edit Jenis Sampah</h5>
                    <div class="card-body">
                        <form id="formValidationExamples" class="row g-3">
                            <!-- Account Details -->
                            <div class="col-md-12">
                                <label for="formValidationFile" class="form-label">Foto Sampah </label>
                                <input class="form-control" type="file" id="formValidationFile"
                                    name="formValidationFile" />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="formValidationName">Nama</label>
                                <input type="text" id="formValidationName" class="form-control"
                                    placeholder="Ex : Plastik" name="formValidationName" />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="formValidationBio">Deskripsi</label>
                                <textarea class="form-control" id="formValidationBio" name="formValidationBio" rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="formValidationEmail">Harga</label>
                                <input class="form-control" type="email" id="formValidationEmail"
                                    name="formValidationEmail" placeholder="Ex : 1000" />
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /FormValidation -->
        </div>
    </div>
@stop
