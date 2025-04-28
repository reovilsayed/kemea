<x-agent.app>
    <style>
        .VirtualText {
            font-size: 18px;
            line-height: 24.8px;
        }

        .pack-card {
            position: relative;
        }

        .pack-card button {
            height: 40px;

        }

        .castom-current-plan {
            position: absolute;
            top: 25px;
            right: 3px;
            width: 98px;
            height: 35px;
            text-align: center;
            font-size: 14px;
            padding: 5px;
            border-radius: 5px 5px 0px 5px;
            background-color: #0666eb;
            color: white;


        }

        .corner-triangle {
            position: absolute;
            top: 60px;
            right: 2.50px;
            ;
            width: 10px;
            height: 10px;
            background: #0666eb;
            clip-path: polygon(0 0, 100% 0, 0 100%);
        }

        .pack-header {
            background-color: #0666EB1A;

        }

        .pack-header-price {
            font-size: 40px;
        }

        .pack-name-header {
            font-size: 18px;

        }
    </style>
    <div class="container padding-xxl">
        <div class="d-flex justify-content-between">
            <h4 class="greading">Plan management</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class=" text-primary fw-bold text-decoration-underline"
                            href="{{ route('agent.dashboard.properties.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Invoices & Billing</li>
                </ol>
            </nav>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card my-4 px-4">

                    <div class="card-body px-0 pb-2 pt-0">
                        <p class="text-bolder text-dark mt-5">Plan management</p>
                        <p class="text-dark VirtualText mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Libero minus
                            consectetur odio, magnam atque earum
                            ducimus nemo neque! Sed, rerum. Natus optio sint labore at ullam rerum laboriosam ratione
                            asperiores
                            eaque,
                            commodi sapiente! Impedit, et doloribus! Delectus quos omnis suscipit possimus alias maxime
                            odit fugiat
                            rem
                            assumenda veritatis quaerat esse in impedit! Qui adipisci et reprehenderit eius. Totam modi
                            sapiente
                            cupiditate culpa iure quo, voluptatem temporibus! Impedit eum cum odio harum esse quam iste
                            soluta velit
                            magni
                            voluptate dolores maiores pariatur enim aliquam,</p>

                        <div class="row mb-4">
                            @foreach ($plans as $plan)
                                <div class="col-md-4 col-12 pack-card mb-2">

                                    <form action="{{ route('agent.dashboard.subscribe', $plan) }}" method="post">
                                        @csrf
                                        <div class="border border-secondary rounded-3 ">
                                            <div class="pack-header p-2">
                                                @if (auth()->user()->plan_id == $plan->id)
                                                    <div class="castom-current-plan">Current Plan</div>
                                                    <div class="corner-triangle"></div>
                                                @endif
                                                <h6 class="pack-name-header text-primary pt-4 mt-2 ps-2">
                                                    {{ $plan->name }}
                                                </h6>
                                                <div class=" d-flex pack-header-text ps-2">
                                                    <h2 class="pack-header-price">{{ Sohoj::price($plan->price) }}</h2>
                                                    <p class="d-flex align-items-end ps-1 ms-1">/ {{ $plan->type }}
                                                    </p>
                                                </div>
                                            </div>
                                            @foreach ($plan->permissions as $key => $value)
                                                <div class="card-body">

                                                    <div class="card-item p-3 ps-0">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id=" " checked>
                                                        <label for="Exclusivity" class="form-label text-bolder"
                                                            style="color: #191C1F; font-size:16px; font-weight: 400;">
                                                            {{ str_replace('_', ' ', $key) }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="p-2">




                                                <button type="button" class="btn btn-primary w-100"
                                                    data-bs-toggle="modal" data-bs-target="#paypalModal"
                                                    data-plan-id="{{ $plan->id }}">
                                                    {{ auth()->user()->plan_id ? 'Renew' : 'Subscribe'}}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach

                        </div>



                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="paypalModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> {{ auth()->user()->plan_id ? 'Renew' : 'Subscribe'}} <span id="modal-plan-name"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form action="" method="post" id="payment">
                        @csrf
                        <input type="hidden" name="payment_id" id="payment_id">

                        <div id="paypal-button-container"></div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- @push('scripts') --}}

    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency=EUR"></script>
    <script>
        let planId;

        const paymentForm = document.getElementById('payment');
        const modal = document.getElementById('paypalModal');
        modal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            planId = button.getAttribute('data-plan-id');
            paymentForm.action = `{{ route('agent.dashboard.subscribe', ':plan') }}`.replace(':plan', planId);
        });
        paypal.Buttons({

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            currency_code: 'EUR',
                            value: 120
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {

                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.


                    var form = document.getElementById('payment');

                    var paymentId = document.getElementById('payment_id').value = details.id;
                    console.log(paymentId);
                    form.submit();


                });
            },

        }).render('#paypal-button-container');
    </script>

    {{-- @endpush --}}




</x-agent.app>
