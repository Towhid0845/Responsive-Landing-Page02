<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            /* width:80%; */
            /* text-align: center */
        }
        .config{
            float: left;
            width: 400px;
        }
        .main form label{
            width:150px;
            display: inline-block;
        }
        .form{
            display: inline-block;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="config">
            <h2>Configuration</h2>
            <div class="product-info">
                <h3 class="product-title">10 GB Email Box Packages</h3>
                <p><strong>Processor:</strong> 4 vCore<br></p>
                <li><strong>RAM:</strong> 8GB</li><br>
                <li><strong>Storage:</strong> 10GB</li><br>
                <li><strong>Zimbra OS Platform</strong></li><br>
                <li><strong>Full Administration/Root Access</strong></li><br>
                <li><strong>Mail Domains: </strong> Unlimited</li><br>
                <li><strong>Email Accounts: </strong> Unlimited</li><br>
                <li><strong>Bandwidth: 250 GB</strong></li><br>
                <li><strong>Email Support 24/7</strong></li>
            </div>
        </div>
        
       <div class="form">
        <form action="payment.php">
            <h2>Configure Server</h2>
            <label for="">Host Name</label> 
            <input type="text" ><br/>
            <label for="">Root Password </label> 
            <input type="password"><br/>
            <label for="">NS1 </label> 
            <input type="text" placeholder="nameserver"><br/>
            <label for="">NS2 </label> 
            <input type="text" placeholder="nameserver"> <br/>

            <h2>Personal Information</h2>
            <label for="">First Name</label> 
            <input type="text" ><br/>
            <label for="">Last Name</label> 
            <input type="text" ><br/>
            <label for="">Email Address</label> 
            <input type="email" ><br/>
            <label for="">Phone Number</label> 
            <input type="text" ><br/>

            <h2>Billing Address</h2>
            <label for="">Company Name</label> 
            <input type="text" ><br/>
            <label for="">Address</label> 
            <input type="text" ><br/>
            <label for="">Country</label> 
            <input type="text" ><br/>
            <label for="">City</label> 
            <input type="text" ><br/>
            <label for="">Postcode</label> 
            <input type="text" ><br/>

            <h2>Payment Details</h2>
            <div style="background-color: #c7f1d7;padding: 20px;text-align: center;">Total due $10 USD</div>
            <p>Please choose your preferred method of payment</p>
            <input type="radio" id="Mobile_Banking" name="payment" value="Mobile Banking">
            <label for="Mobile_Banking">Mobile Banking</label>
            <input type="radio" id="cash" name="payment" value="Cash">
            <label for="cash">Cash</label>
            <input type="radio" id="card" name="payment" value="Card">
            <label for="card">Debit / Credit Card</label>
            <input type="radio" id="bank" name="payment" value="Bank">
            <label for="bank">Bank Transfer</label><br/>

            <br/><button type="button"><a href="index.php">Cancel</a></button>
            <input type="submit" value="Complete Order"><br/>
        </form>
       </div>
        
    </div>
</body>
</html>