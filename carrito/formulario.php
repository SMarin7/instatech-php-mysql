<?php
$baseUrl = 'http://localhost/paypal-pdt-php/buy_now_button';
?>


<!-- Para cambiar al entorno de producción usar: https://www.paypal.com/cgi-bin/webscr -->
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="form_pay">

    <!-- Valores requeridos -->
    <input type="hidden" name="business" value="vendedor@business.example.com">
    <input type="hidden" name="cmd" value="_xclick">

    <input type="hidden" name="item_name" id="box" value="box" required=""><br>

    <input type="hidden" name="amount" id="" value="13.00" required=""><br>

    <input type="hidden" name="currency_code" value="EUR">

    <input type="hidden" name="quantity" id="" value="2" required=""><br>


    <div id="paypal-button-container"></div>

 
    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay',
                height: 40
            },
      
        }).render('#paypal-button-container');
    </script>
  </form>