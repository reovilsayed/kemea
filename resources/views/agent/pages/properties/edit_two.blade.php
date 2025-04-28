<x-agent.app>
    @push('css')
        <style>
            .custom-select {
                padding: 0.5rem 1rem 0.5rem 14px !important;
            }

            .custom-select:focus {
                box-shadow: none !important;
                border: 1px solid #404040 !important;
            }
        </style>
    @endpush

    <div class="d-md-flex justify-content-between align-items-center p-4">
        <h4 class="m-0" style="font-size: 20px; color: #0666EB;">
            <img src="{{ asset('agent-assets/img/Group 427321418.svg') }}" alt=""> Edit Property - Step 2/3
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


    <form action="{{ route('agent.dashboard.propertie_update_page_two', $property) }}" method="POST" enctype="multipart/form-data">
        {{-- @dd($property->property_meta) --}}
        @csrf
        
        @include('agent.pages.properties.partials.form_two', ['property' => $property])

        <div class="row mx-3">
            <div class="col-md-6 col-12 align-content-around">
                <a href="{{ route('agent.dashboard.properties.create') }}" class="btn px-5 text-dark-light py-2"
                    style="font-size: 14px; color: #0666EB; background-color: #0666eb47;"> <- Previous</a>
            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex justify-content-md-end align-items-center">
                    <!-- <button type="submit" name="action" value="draft" class="btn btn-outline-primary px-4 me-4"
                        style="font-size: 14px;"><img src="{{ asset('agent-assets/img/save.svg') }}" alt="">
                        Save Draft</button> -->
                    <button type="submit" name="action" value="next" class="btn btn-primary px-4 py-2"
                        style="font-size: 14px;">Next -></button>
                </div>
            </div>
        </div>
    </form>


    @push('scripts')
        <script>
            document.querySelectorAll('.rooms').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.rooms').forEach(function(box) {
                            if (box !== checkbox) box.checked = false;
                        });
                    }
                });
            });
        </script>

        <script>
            document.querySelectorAll('.bed_rooms').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.bed_rooms').forEach(function(box) {
                            if (box !== checkbox) box.checked = false;
                        });
                    }
                });
            });
        </script>
        <script>
            document.querySelectorAll('.bath_rooms').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.bath_rooms').forEach(function(box) {
                            if (box !== checkbox) box.checked = false;
                        });
                    }
                });
            });
        </script>
        <script>
            document.querySelectorAll('.toilet').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.toilet').forEach(function(box) {
                            if (box !== checkbox) box.checked = false;
                        });
                    }
                });
            });
        </script>
        <script>
            document.querySelectorAll('.exposer').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.exposer').forEach(function(box) {
                            if (box !== checkbox) box.checked = false;
                        });
                    }
                });
            });
        </script>
        <script>
            document.querySelectorAll('.condition').forEach((checkbox) => {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.condition').forEach((cb) => {
                            if (cb !== this) cb.checked = false;
                        });
                    }
                });
            });
        </script>
        <script>
            document.querySelectorAll('.entry-date').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.entry-date').forEach(function(cb) {
                            if (cb !== checkbox) cb.checked = false;
                        });
                    }
                });
            });
        </script>
        
    @endpush
</x-agent.app>
