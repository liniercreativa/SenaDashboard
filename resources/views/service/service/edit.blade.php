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
                                action="{{ url('') }}/service/update/{{ $service->id }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ old('title', $service->title) }}">

                                    @error('title')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Description</label>
                                    <textarea id="editor" name="description" class="form-control" value="{{ old('description') }}">{{ $service->description }}</textarea>
                                    @error('description')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Short Description</label>
                                    <textarea id="editor2" name="short_description" class="form-control">{{ old('short_description', $service->short_description) }}</textarea>
                                    @error('short_description')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        value="{{ old('image') }}">
                                    <label for="validationDefault01" class="form-label"
                                        style="color: rgb(22, 150, 54);font-size:13px;">Image Dimensions : 800 x 800
                                        pixels, Max size : 5 MB </label>

                                    <br>

                                    @if (!empty($service->image))
                                        <img src="{{ asset('upload/image/' . $service->image) }}" alt="image1"
                                            height="150px" style="margin-top:15px;">
                                    @endif
                                    @error('image')
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
                                                            class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title_eng"
                                                            value="{{ old('title_eng', $service->title_eng) }}">

                                                        @error('title_eng')
                                                            <div class="error-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="validationDefault01"
                                                            class="form-label">Description</label>
                                                        <textarea id="editor3" name="description_eng" class="form-control">{{ old('description_eng', $service->description_eng) }}</textarea>
                                                        @error('description_eng')
                                                            <div class="error-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="validationDefault01" class="form-label">Short
                                                            Description</label>
                                                        <textarea id="editor4" name="short_description_eng" class="form-control">{{ old('short_description_eng', $service->short_description_eng) }}</textarea>
                                                        @error('short_description_eng')
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


                                {{-- <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">List</label>
                                    <button id="add-btn" class="btn btn-primary" type="button">Add</button>
                                    <div id="dynamic-list" style="margin-top:15px;">
                                        @foreach ($service->list as $item)
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="list[]"
                                                    value="{{ $item }}">
                                                <button class="btn btn-outline-secondary remove-btn"
                                                    type="button">Remove</button>
                                            </div>
                                        @endforeach
                                    </div>

                                    @error('list')
                                        <div class="error-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}

                                {{-- <div class="engversion">
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
                                                        <label for="validationDefault01" class="form-label">Sub Text
                                                            (English)</label>
                                                        <input type="text" class="form-control" id="sub_text_eng"
                                                            name="sub_text_eng" value="{{ old('sub_text_eng') }}">

                                                        @error('sub_text_eng')
                                                            <div class="error-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="validationDefault01" class="form-label">Primary Text
                                                            (English)</label>
                                                        <input type="text" class="form-control" id="primary_text_eng"
                                                            name="primary_text_eng"
                                                            value="{{ old('primary_text_eng') }}">
                                                        @error('primary_text_eng')
                                                            <div class="error-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="validationDefault01" class="form-label">Button
                                                            Text
                                                            (English)</label>
                                                        <input type="text" class="form-control" id="button_text_eng"
                                                            name="button_text_eng"
                                                            value="{{ old('button_text_eng') }}">
                                                        @error('button_text_eng')
                                                            <div class="error-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div> --}}






                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>


        </div>
    </div>

    <script>
        document.getElementById('add-btn').addEventListener('click', function() {
            var container = document.getElementById('dynamic-list');
            var newInput = document.createElement('div');
            newInput.className = 'input-group mb-3';
            newInput.innerHTML = `
            <input type="text" class="form-control" name="list[]">
            <button class="btn btn-outline-secondary remove-btn" type="button">Remove</button>
        `;
            container.appendChild(newInput);
        });

        document.getElementById('dynamic-list').addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-btn')) {
                e.target.parentElement.remove();
            }
        });
    </script>
</x-template.layout>
