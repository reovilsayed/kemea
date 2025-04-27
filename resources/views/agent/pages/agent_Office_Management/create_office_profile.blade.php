<x-agent.app>
  @php
      $images=auth()->user()->officeProfile && auth()->user()->officeProfile->images ? json_decode(auth()->user()->officeProfile->images):[]
  @endphp
    @push('css')
        <style>
            .upload-container {
                border: 2px dashed #D1D7DC;
                border-radius: 8px;
                padding: 20px;
                text-align: center;
                margin-bottom: 20px;
                background-color: #F8F9FA;
                transition: all 0.3s ease;
            }

            .upload-container:hover {
                border-color: #6C757D;
                background-color: #F1F3F5;
            }

            .upload-container p {
                color: #6C757D;
                margin-top: 10px;
                margin-bottom: 0;
                font-size: 14px;
            }

            .upload-title {
                font-weight: 600;
                color: #191C1F;
                margin-bottom: 15px;
                text-align: left;
            }

            .form-label {
                font-weight: 500;
                margin-bottom: 8px;
            }

            .hidden-input {
                display: none;
            }
        </style>
    @endpush
    <div class="d-md-flex justify-content-between align-items-center p-4">
        <h4 class="m-0" style="font-size: 20px; color: #0666EB;">
            Create Office Profile
        </h4>

        <div class="d-none d-md-flex align-items-center gap-2">
            <a href="#" class="text-decoration-none fw-bold"
                style="color: #0666EB; font-size: 14px; border-bottom: 1px solid #0666EB;">
                Dashboard
            </a>
            <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="Icon" class="mx-2">
            <span style="font-size: 14px;">Office Profile</span>
        </div>
    </div>

    <form action="{{ route('agent.dashboard.officeProfile_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
     
        <div class="card mx-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="name" class="form-lable"> Office Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('officeProfile', auth()->user()->officeProfile?->name) }}"
                                placeholder="Office Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="email" class="form-lable"> Office Email</label>
                            <input type="email" class="form-control"
                                value="{{ old('officeProfile', auth()->user()->officeProfile?->email) }}" name="email"
                                id="email" placeholder="Office Email">
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="phone" class="form-lable"> Office Phone</label>
                            <input type="tel" class="form-control" name="phone"
                                value="{{ old('officeProfile', auth()->user()->officeProfile?->phone) }}" id="phone"
                                placeholder="Office phone">
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="Address" class="form-lable"> Office Address</label>
                            <input type="text" class="form-control" name="address"
                                value="{{ old('officeProfile', auth()->user()->officeProfile?->address) }}"
                                id="Address" placeholder="Office Address">
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label for="details" class="form-lable">Overview/Details</label>
                            <textarea class="form-control" name="details" id="details" rows="4" placeholder="Overview/Details">{{ old('officeProfile', auth()->user()->officeProfile?->details) }}</textarea>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                        <!-- Property Photo Section -->
                        <div class="mb-4">
                            <label for="" class="form-lable">Add Office Logo</label>
                            <label for="logo" class="upload-container w-100">
                                @if (auth()->user()->officeProfile?->logo)
                                    <img height="48" width="48"
                                        src="{{ Storage::url(auth()->user()->officeProfile?->logo) }}" alt="">
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#6C757D"
                                        viewBox="0 0 16 16">
                                        <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        <path
                                            d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                    </svg>
                                @endif
                                <p class="fs-5 text-dark fw-bolder">Drop your images here, or <span
                                        class="text-primary">click to
                                        browse</span></p>
                                <p>1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed</p>
                                <input type="file" id="logo" name="logo" class="hidden-input"
                                    accept="image/png, image/jpeg, image/gif">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <!-- Property Photo Section -->
                        <div class="mb-4">
                            <label for="" class="form-lable">Add Office Images</label>
                            <label for="image" class="upload-container w-100">

                                @if (count($images))
                                @foreach($images as $image)
                                    <img height="48" width="48"
                                        src="{{ Storage::url($image) }}" alt="">
                                @endforeach
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                        fill="#6C757D" viewBox="0 0 16 16">
                                        <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        <path
                                            d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                    </svg>
                                @endif
                                <p class="fs-5 text-dark fw-bolder">Drop your images here, or <span
                                        class="text-primary">click to
                                        browse</span></p>
                                <p>1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed</p>
                                <input type="file" id="image" name="images[]" class="hidden-input"
                                    accept="image/png, image/jpeg, image/gif" multiple>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end align-items-center gap-3 my-4 mx-4">
            <button class="btn btn-primary px-4 py-2"
                style="font-size: 14px; color: #0666EB; background-color: #0666eb47;">Copy Office Page Link</button>
            <button class="btn btn-primary px-4 py-2"
                style="font-size: 14px; color: #0666EB; background-color: #0666eb47;">Preview Office Profile</button>
            <button class="btn btn-primary px-4 py-2" type="submit">Save details</button>
        </div>
    </form>
</x-agent.app>
