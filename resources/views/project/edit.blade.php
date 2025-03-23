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
                            <div class="alert alert-success" role="alert">
                                <strong> Sukses! </strong> {{ session('message') }}.
                            </div>
                        @endif

                        <div class="card-body">
                            <form class="row g-3" method="POST"
                                action="{{ url('') }}/project/update/{{ $project->id }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Nama Project</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $project->name) }}">

                                    @error('name')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        value="{{ old('image') }}">
                                    @if (!empty($project->image))
                                        <img src="{{ asset('upload/image/' . $project->image) }}" alt="image"
                                            width="200px" style="margin-top:15px;">
                                    @endif
                                    @error('image')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Description</label>
                                    <textarea id="editor" name="description">{{ $project->description }}</textarea>
                                    @error('description')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Tahun</label>
                                    <input type="text" class="form-control" name="year"
                                        value="{{ old('year', $project->year) }}">

                                    @error('year')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>




                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Type</label>
                                    <select class="form-select" name="type">
                                        <option value=""> -- Silahkan Pilih -- </option>

                                        <option value="engineering" @if ($project->type == 'engineering') selected @endif>
                                            Engineering</option>
                                        <option value="konsultan" @if ($project->type == 'konsultan') selected @endif>
                                            Konsultan</option>
                                        <option value="inspeksi" @if ($project->type == 'inspeksi') selected @endif>
                                            Inspeksi</option>
                                        <option value="survey" @if ($project->type == 'survey') selected @endif>
                                            Survey</option>


                                    </select>
                                    @error('type')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Latitude</label>
                                    <input type="text" class="form-control" name="lat"
                                        value="{{ old('lat', $project->lat) }}">

                                    @error('lat')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Longtitude</label>
                                    <input type="text" class="form-control" name="lng"
                                        value="{{ old('lng', $project->lng) }}">

                                    @error('lng')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Turunan Bisnis</label>
                                    <input type="text" class="form-control" name="turunanbisnis"
                                        value="{{ old('turunanbisnis', $project->turunanbisnis) }}">

                                    @error('turunanbisnis')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Software</label>
                                    <input type="text" class="form-control" name="software"
                                        value="{{ old('software', $project->software) }}">

                                    @error('software')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>



                                <div class="engversion">
                                    <!-- Base Example -->
                                    <div class="accordion" id="default-accordion-example">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    English Version
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne"
                                                data-bs-parent="#default-accordion-example">
                                                <div class="accordion-body">

                                                    <div class="col-md-12">
                                                        <label for="validationDefault01"
                                                            class="form-label">Description</label>
                                                        <textarea id="editor2" name="description_eng">{{ old('description_eng', $project->description_eng) }} </textarea>
                                                        @error('description_eng')
                                                            <div class="error-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
