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
    <div class="card mx-4">
        <div class="card-body">
            <div class="container position-relative">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center mb">
                    <div class="fs-4 mb- mb-sm-0">Agent Information</div>
                </div>
                <div class="d-flex flex-column align-items-start gap-1 position-relative" style="left: 136px; top: calc(50% - 3.5px);">
                    <div class="link">
                        <div class="fw-semibold">Michael A. Miner</div>
                    </div>
                    <div>
                        <div class="text-muted">michaelminer@dayrep.com</div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-end justify-content-center position-absolute" style="left: 20px; top: calc(50% - 29px);">
                    <img class="rounded-circle border border-1 border-light" src="avatar-2-jpg0.png" alt="Avatar" style="width: 110px; height: 110px; object-fit: cover;">
                    <div class="bg-primary rounded-2 px-2 py-1 d-flex flex-column align-items-center justify-content-start position-absolute" style="right: 36.36%; left: 36.35%; bottom: -5px;">
                        <div class="text-white fs-6 fw-semibold text-center"># 1</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-primary">Contact Agent</button>
                </div>
            </div>
        </div>
    </div>
</x-agent.app>