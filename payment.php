<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <h1 class="main">ServerAnywhere Payment Gateway</h1>
        <p>You have to pay <b>BDT 1000.</b></p>
        <p style="display:none;">
            You have to pay <b>BDT 1000</b> for <b>ServerAnywhere - Invoice #111604</b> <br>
            Please Select your Preferred Payment Method &amp; Click Next.
        </p>
        <div class="gtways">
            <input type="radio" id="Mobile_Banking" name="payment" value="Mobile Banking">
            <label for="Mobile_Banking">bikash</label><br/>
            <input type="radio" id="cash" name="payment" value="Cash">
            <label for="cash">Rocket</label><br/>
            <input type="radio" id="card" name="payment" value="Card">
            <label for="card">Nagad</label><br/>
            <input type="radio" id="Mobile_Banking" name="payment" value="Mobile Banking">
            <label for="Mobile_Banking">Visa Card</label><br/>
            <input type="radio" id="cash" name="payment" value="Cash">
            <label for="cash">Credit Card</label><br/>
            <input type="radio" id="card" name="payment" value="Card">
            <label for="card">Master Card</label><br/>
            <input type="radio" id="bank" name="payment" value="Bank">
            <label for="bank">Bank Transfer</label><br/>
        </div><br/>

        <form action="configure.php" id="cancel_form" class="hidden" method="post">
            <input type="hidden" name="payment_code" value="0">
            <input type="submit" name="status" value="Cancel">
        </form>
        <form action="gateways.php" class="hidden gatewayform" method="get">
            <input id="gtname" type="submit" name="gateway" value="Next">
        </form>
	</div>
</body>
</html>