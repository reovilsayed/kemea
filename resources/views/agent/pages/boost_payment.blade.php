<x-agent.app>
    <div class="container padding-xxl">
        <div class="card">
            <div class="card-body ">
               
              
                        <form action="{{route('agent.dashboard.boost.payment.store',$boost)}}" method="post" id="payment">
                            @csrf
                            <input type="hidden" name="payment_id" id="payment_id">
    
                            <div id="paypal-button-container" class="w-100"></div>
    
                        </form>
                   
                    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency=ILS"></script>
                    <script>
                      
                
            
                        paypal.Buttons({
                
                            createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            currency_code: 'ILS',
                                            value: "{{$boost->price * 100}}"
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
                                
                                    form.submit();
                
                
                                });
                            },
                
                        }).render('#paypal-button-container');
                    </script>
            </div>
        </div>
    </div>

</x-agent.app>