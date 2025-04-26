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
            Edit Property - Step 1/3
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


    <form action="{{ route('agent.dashboard.properties.update', $property) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('agent.pages.properties.partials.from', ['property' => $property])

        <div class="row">
            <div class="col-md-12 col-12">
                <div class="d-flex justify-content-end align-items-center p-4">
                    <button type="submit" name="action" value="draft" class="btn btn-outline-primary px-4 me-4"
                        style="font-size: 14px;"><img src="{{ asset('agent-assets/img/save.svg') }}" alt="">
                        Save Draft</button>
                    <button type="submit" name="action" value="next" class="btn btn-primary px-4 py-2"
                        style="font-size: 14px;">Next -></button>
                </div>
            </div>
        </div>
    </form>
    @push('scripts')
        <script>
            document.querySelectorAll('.single-select').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.single-select').forEach(function(box) {
                            if (box !== checkbox) box.checked = false;
                        });
                    }
                });
            });
        </script>

        <script>
            document.querySelectorAll('.area-select').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    if (this.checked) {
                        document.querySelectorAll('.area-select').forEach(function(box) {
                            if (box !== checkbox) box.checked = false;
                        });
                    }
                });
            });
        </script>
    @endpush

</x-agent.app>
