<x-agent.app>
    <style>
        .btn-g-custom {
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 14px !important;
            font-weight: 500
        }

        .badge-light {
            background-color: #ffff;
            color: #8486A7;
            padding: 10px 20px;
            border-radius: 5px;
            border: 1px solid #8486A7 !important;
        }

        .btn-main {
            padding: 8px 10px
        }

        .btn-group {
            display: inline;
        }

        .VirtualText {
            font-size: 18px;
            line-height: 24.8px;
        }
    </style>
    <div class="container padding-xxl">
        <div class="d-flex justify-content-between">
            <h4 class="greading">Affiliate Links</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class=" text-primary fw-bold text-decoration-underline"
                            href="{{ route('agent.dashboard.properties.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Affiliate Links</li>
                </ol>
            </nav>
        </div>
        <div class="row align-items-center">


        </div>

        <div class="row">
            <div class="col-12">
                <div class="card my-4 px-4 pb-5">

                    <div class="card-body px-0 pb-2 pt-0">
                        <div class="d-flex justify-content-between">
                            <p class="text-bolder text-dark mt-5">Affiliate Links</p>
                            <div>
                                <a href="javascript:void(0)" class="btn btn-primary py-2 mt-5 mb-3"
                                    onclick="copyAffiliateLink(this)"
                                    data-link="{{ route('register',['affiliate'=>auth()->user()->officeProfile->slug]) }}">Copy Affiliate Link</a>


                            </div>
                        </div>
                        <p class="text-dark VirtualText mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Libero minus
                            consectetur odio, magnam atque earum
                            ducimus nemo neque! Sed, rerum. Natus optio sint labore at ullam rerum laboriosam ratione
                            asperiores
                            eaque,

                            voluptate dolores maiores pariatur enim aliquam
                            itaque? Autem, sapiente velit excepturi voluptate consequuntur possimus illo facilis quod ad
                            at natus
                            architecto facere quae, maxime debitis sed amet numquam soluta totam. Quo iste sapiente vero
                            nemo porro
                            nesciunt est consectetur eum autem nobis laboriosam, sunt at ducimus dolorum saepe
                            reiciendis a eligendi
                            ipsam
                            assumenda veritatis quaerat esse in impedit! Qui adipisci et reprehenderit eius. Totam modi
                            sapiente
                            cupiditate culpa iure quo, voluptatem temporibus! Impedit eum cum odio harum esse quam iste
                            soluta velit
                            magni
                            voluptate dolores maiores pariatur enim aliquam,</p>


                        <div class="table-responsive p-0">
                            <div class="table-responsive p-0 border border-radius-2xl">
                                <table class="table align-items-center mb-0">
                                    <thead class="t-head">
                                        <tr>
                                            <th class="text-dark custom-text padding-custom ps-4">
                                                Sign-ups</th>

                                            <th class="text-dark custom-text padding-custom">
                                                Commissions Earned ($)</th>

                                            <th class="text-center text-dark custom-text  padding-custom">
                                                Total Used ($)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 text-xs fw-bold px-4 py-4">
                                                25
                                            </td>

                                            <td class="ps-0 text-xs fw-bold">
                                                150.00
                                            </td>
                                            <td class="ps-0 text-xs fw-bold text-center">
                                                75.00
                                            </td>


                                        </tr>

                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 text-xs fw-bold px-4 py-4">
                                                25
                                            </td>

                                            <td class="ps-0 text-xs fw-bold">
                                                150.00
                                            </td>
                                            <td class="ps-0 text-xs fw-bold text-center">
                                                75.00
                                            </td>


                                        </tr>

                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 text-xs fw-bold px-4 py-4">
                                                25
                                            </td>

                                            <td class="ps-0 text-xs fw-bold">
                                                150.00
                                            </td>
                                            <td class="ps-0 text-xs fw-bold text-center">
                                                75.00
                                            </td>


                                        </tr>

                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 text-xs fw-bold px-4 py-4">
                                                25
                                            </td>

                                            <td class="ps-0 text-xs fw-bold">
                                                150.00
                                            </td>
                                            <td class="ps-0 text-xs fw-bold text-center">
                                                75.00
                                            </td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="copyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center p-4" style="border-radius: 12px;">
                <div class="modal-body">
                    <div class="mb-3">
                        <i class="material-symbols-rounded text-primary" style="font-size: 50px;">verified</i>
                    </div>
                    <h3 class="mb-3" style="color:#0d6efd;">Coppied</h3>
                    <p class="mb-4">Affiliate Link Copied successfully</p>
                    <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyAffiliateLink(element) {
            const link = element.getAttribute('data-link');
            const textArea = document.createElement("textarea");
            textArea.value = link;
            textArea.style.position = "fixed";
            textArea.style.top = "0";
            textArea.style.left = "0";

            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();

            try {
                const successful = document.execCommand('copy');
                if (successful) {

                    var modal = new bootstrap.Modal(document.getElementById('copyModal'));
                    modal.show();

                } else {
                    alert('Failed to copy link');
                }
            } catch (err) {
                console.error('Fallback copy failed', err);
            }

            document.body.removeChild(textArea);
        }
    </script>

</x-agent.app>
