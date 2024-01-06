<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni project Funding</title>
    <link rel="stylesheet" href="/Registration/Payment/style.css">
</head>
<body>
<br>
    <br>
<a class="nav nav-item text-decoration-none  text-muted" href="#"  onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back 
        </a>
    <form action="pay.inc.php" method="post" >
        <div class="container">
            <h1>You Are investing Into this Project</h1>
            <div class="payment-form">
                <label for="card-holder">Card Holder's Name</label>
                <input type="text" id="card-holder"name="card_holder" placeholder="John Doe" required>
                
                <label for="card-number">Card Number</label>
                <input type="Number" id="card-number" name="card_number" placeholder="1234 5678 9012 3456" maxlength="16" required>

                <label for="card-number">Amount</label>
                <input type="Number" id="amount" name="amount" placeholder="Amount investing" maxlength="16" required>
                
                <label for="expiry-date">Expiry Date</label>
                <input type="Date" id="expiry-date" name="expiry_date" placeholder="DD/MM/YY"  required>
                
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123" maxlength="3" required>
                
                <button id="submit">Pay Now</button>
            </div>
        </div>
    </form>

    <script src="/Registration/Payment/script.js"></script>
    <footer>
        <div style="text-align:center">
            <p>&copy; 2023 Uni Project Funding. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
