<x-template.layout>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ $title }}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        {{-- <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Browser defaults</h4>
                        </div>  --}}
                        @if (session('message'))
                            <div class="alert alert-success" role="alert" style="margin-bottom:15px;">
                                <strong> Sukses! </strong> {{ session('message') }}.
                            </div>
                        @endif

                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ route('header.capability_update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="header_capability_image"
                                        name="header_capability_image"
                                        value="{{ old('header_capability_image', $header->header_capability_image) }}">
                                    <label for="validationDefault01" class="form-label"
                                        style="color: rgb(22, 150, 54);font-size:13px;">Image Dimensions : 1600 x 1200
                                        pixels, Max size : 5 MB </label>
                                    <br>
                                    @error('header_capability_image')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <br>
                                    @if ($header->header_capability_image)
                                        <img src="{{ asset('upload/image/' . $header->header_capability_image) }}"
                                            alt="" style="height: 150px; ">
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Text</label>
                                    <input type="text" class="form-control" id="header_capability_text"
                                        name="header_capability_text"
                                        value="{{ old('header_capability_text', $header->header_capability_text) }}">
                                    @error('header_capability_text')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Text - English</label>
                                    <input type="text" class="form-control" id="header_capability_text_eng"
                                        name="header_capability_text_eng"
                                        value="{{ old('header_capability_text_eng', $header->header_capability_text_eng) }}">
                                    @error('header_capability_text_eng')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>












                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>


        </div>
    </div>
</x-template.layout>
