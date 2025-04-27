<x-agent.app>

    <style>
        .container {
            padding: 15px 20px 15px 20px;
            height: 164px;
        }


        .container2 {
            display: flex;
            flex-direction: column;
            gap: 0.5px;
            align-items: flex-start;
            justify-content: flex-start;
            position: absolute;
            left: 136px;
            top: calc(50% - 3.5px);
        }

        .container4 {
            display: flex;
            flex-direction: column;
            gap: 0px;
            align-items: flex-end;
            justify-content: center;
            position: absolute;
            left: 20px;
            top: calc(50% - 29px);
        }

        .avatar-2-jpg {
            border-radius: 48px;
            border-style: solid;
            border-color: #eaedf1;
            border-width: 1px;
            flex-shrink: 0;
            width: 96px;
            height: 96px;
            max-width: 96px;
            position: relative;
            overflow: hidden;
            object-fit: cover;
        }

        .background {
            background: #0666eb;
            border-radius: 5.6px;
            padding: 3px 6px 3px 6px;
            display: flex;
            flex-direction: column;
            gap: 0px;
            align-items: center;
            justify-content: flex-start;
            flex-shrink: 0;
            width: 27.29%;
            position: absolute;
            right: 36.36%;
            left: 36.35%;
            bottom: -5px;
        }

        ._1 {
            color: #ffffff;
            text-align: center;
            font-family: "Figtree-SemiBold", sans-serif;
            font-size: 11px;
            line-height: 11px;
            font-weight: 600;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <div class="d-md-flex justify-content-between align-items-center p-4">
        <h4 class="m-0" style="font-size: 20px; color: #0666EB;">
            Add New Property - Step 1/3
        </h4>

        <div class="d-none d-md-flex align-items-center gap-2">
            <a href="#" class="text-decoration-none fw-bold"
                style="color: #0666EB; font-size: 14px; border-bottom: 1px solid #0666EB;">
                Dashboard
            </a>
            <img src="{{ asset('agent-assets/img/Icon.svg') }}" alt="Icon" class="mx-2">
            <span style="font-size: 14px;">Add New Property</span>
        </div>
    </div>
    <form action="{{ route('agent.dashboard.team_management.update', $team_management) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card mx-4">
            <div class="card-body">
                <div class="">
                    <div class="fs-4 mb- mb-sm-0 text-bold">Agent Information</div>
                </div>

                <div class="d-flex mt-2 position-relative">
                    <!-- Avatar Image -->
                    <img id="avatarImage" class="rounded-circle border border-1 border-light"
                        src="{{ Storage::url($team_management->image) }}" alt="Avatar"
                        style="height:96px; width:96px; object-fit: cover;">

                    <!-- Upload Button -->
                    <div class="bg-primary text-white rounded text-center position-absolute"
                        style="bottom: 1px; left: 37px; width: 26px; height: 17px; font-size: 11px; cursor: pointer;"
                        onclick="document.getElementById('avatarInput').click();">
                        #
                    </div>

                    <!-- Hidden File Input -->
                    <input type="file" id="avatarInput" name="image" accept="" style="display: none;"
                        onchange="previewAvatar(event)">

                    <div class="mx-4 my-4">
                        <div class="fw-semibold text-bold">Michael A. Miner</div>
                        <div class="text-muted">michaelminer@dayrep.com</div>
                    </div>
                </div>

                <!-- JavaScript to Preview Image -->


                <div class="row my-4">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="name" class="form-lable"> Fast Name</label>
                            <input type="text" class="form-control" name="first_name" id="name" value="{{ $team_management->first_name }}" placeholder="Fast Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="name" class="form-lable">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="name" value="{{ $team_management->last_name }}" placeholder=" Name">
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="phone" class="form-lable"> Phone Number</label>
                            <input type="tel" class="form-control" name="phone" value="{{ $team_management->phone }}" id="phone"
                                placeholder="Enter Number">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="email" class="form-lable"> Email Address</label>
                            <input type="email" class="form-control" value="{{ $team_management->email }}" name="email" id="email"
                                placeholder="Email Address">
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label for="details" class="form-lable">Agent Address</label>
                            <textarea class="form-control" name="address" id="details" rows="4"
                                placeholder="Enter address">{{ $team_management->address }}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <button class="btn btn-primary py-2 px-4" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        function previewAvatar(event) {
            const input = event.target;
            const avatarImage = document.getElementById('avatarImage');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    avatarImage.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-agent.app>