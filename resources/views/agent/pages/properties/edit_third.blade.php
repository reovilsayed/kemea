<x-agent.app>
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
            <img src="{{ asset('agent-assets/img/Group 427321418.svg') }}" alt=""> Edit Property - Step 3/3
        </h4>

        <div class="d-none d-md-flex align-items-center gap-2">
            <a href="#" class="text-decoration-none fw-bold"
                style="color: #0666EB; font-size: 14px; border-bottom: 1px solid #0666EB;">
                Dashboard
            </a>
            <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="Icon" class="mx-2">
            <span style="font-size: 14px;">Edit Property</span>
        </div>
    </div>

    <form action="{{ route('agent.dashboard.propertie_update_page_third', $property) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        
        @include('agent.pages.properties.partials.form_third', ['property' => $property])

       

        <div class="row mx-3 my-4">
            <div class="col-md-6 col-12 align-content-around">
                <a href="{{ route('agent.dashboard.property_edit_page_two', ['property' => $property->id]) }}"
                    class="btn px-4 text-dark-light py-2"
                    style="font-size: 14px; color: #0666EB; background-color: #0666eb47;"> <- Previous</a>
            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex justify-content-md-end align-items-center">

                    <button type="submit" name="action" value="draft" class="btn btn-outline-primary px-4 me-4"
                        style="font-size: 14px;"><img src="{{ asset('agent-assets/img/save.svg') }}" alt="">
                        Save Draft</button>
                    <button type="submit" name="action" value="publish" class="btn btn-primary px-4 py-2"
                        style="font-size: 14px;"><img src="{{ asset('agent-assets/img/publish1.svg') }}"
                            alt="Icon" class="me-3">Publish</button>
                </div>
            </div>
        </div>
    </form>
</x-agent.app>
