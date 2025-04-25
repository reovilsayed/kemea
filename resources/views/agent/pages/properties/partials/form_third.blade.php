<div class="card mx-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="">
                    <h5 class="mb-4">Property Description</h5>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"
                        placeholder="Enter Description">{{ $property->property_meta->description ?? ''}}</textarea>

                    <input type="text" class="form-control mt-3" name="keywords" value="{{ $property->keywords ?? ''}}"
                        id="exampleFormControlInput1" placeholder="Add Keywords" aria-label="Property Name">
                </div>
                <div class="text-end mt-3">
                    <button class="btn btn-primary px-4 py-2 fw-bold"><img
                            src="{{ asset('agent-assets/img/Group427321125.svg') }}" alt="Icon"
                            class="pe-3">Generate With AI</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mx-4 mt-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-12">
                <h5 class="mb-4">Media Management</h5>
                <!-- Property Photo Section -->
                <div class="mb-4">
                    <h6 class="upload-title">Add Property Photo</h6>
                    <label for="propertyPhoto" class="upload-container w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#6C757D"
                            viewBox="0 0 16 16">
                            <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                            <path
                                d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                        </svg>
                        <p class="fs-5 text-dark fw-bolder">Drop your images here, or <span
                                class="text-primary">click to browse</span></p>
                        <p>1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed</p>
                        <input type="file" id="propertyPhoto" name="property_photo" class="hidden-input"
                            accept="image/png, image/jpeg, image/gif">
                    </label>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary px-4 py-2 fw-bold"><img
                            src="{{ asset('agent-assets/img/download.svg') }}" alt="Icon"
                            class="pe-3">Download</button>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <!-- Home Staging Section -->
                <div class="mb-4">
                    <h6 class="upload-title">Home Staging</h6>

                    <input type="checkbox" class="form-check-input" name="virtual_home_staging" value="1"
                        id="">
                    <label class="upload-title form-label">Add Virtual Home Staging</label>
                    <label for="homeStaging" class="upload-container w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#6C757D"
                            viewBox="0 0 16 16">
                            <path
                                d="M8.5 5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm3 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                            <path
                                d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.5l-7 3.5L1 3.5V3zm0 1v.5l7 3.5 7-3.5V4H1zm0 1v6.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V5H1z" />
                        </svg>
                        <p class="fs-5 text-dark fw-bolder">Drop your images here, or <span
                                class="text-primary">click to browse</span></p>
                        <p>1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed</p>
                        <input type="file" id="homeStaging" name="home_staging_photo" class="hidden-input"
                            accept="image/png, image/jpeg, image/gif">
                    </label>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <!-- Video Upload Section -->
                <div class="mb-4">
                    <h6 class="upload-title">Video Upload</h6>
                    <label for="videoUpload" class="upload-container w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#6C757D"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                        </svg>
                        <p class="fs-5 text-dark fw-bolder">Drop your Video here, or <span
                                class="text-primary">click to browse</span></p>
                        <p>1600 x 1200 (4:3) recommended. MP4, MOV files are allowed</p>
                        <input type="file" id="videoUpload" name="video" class="hidden-input"
                            accept="video/mp4, video/quicktime">
                    </label>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <!-- 3D Tour Embed Section -->
                <div class="mb-4">
                    <h6 class="upload-title">3D Tour Embed (Optional Field)</h6>
                    <label for="tourEmbed" class="upload-container w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#6C757D"
                            viewBox="0 0 16 16">
                            <path
                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                        </svg>
                        <p class="fs-5 text-dark fw-bolder">Drop your Video here, or <span
                                class="text-primary">click to browse</span></p>
                        <p>1600 x 1200 (4:3) recommended. MP4, MOV files are allowed</p>
                        <input type="file" id="tourEmbed" name="tour_embed" class="hidden-input"
                            accept="video/mp4, video/quicktime">
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>