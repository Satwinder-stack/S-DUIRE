<!DOCTYPE html>
<!-- // Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202 -->

<!-- This is entirely to make sure the payment works -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Choose Payment Method</h2>
    <form id="paymentForm" action="process_payment.php" method="post">
        <label>
            <input type="radio" name="payment_method" value="card" required onclick="toggleCardDetails(true)"> Pay with Card
        </label>
        <label>
            <input type="radio" name="payment_method" value="cash" required onclick="toggleCardDetails(false)"> Pay with Cash
        </label>
        
        <div id="cardDetails" style="display: none;">
            <h3>Enter Card Details</h3>
            <label>Card Number:
                <input type="text" name="card_number" pattern="\d{16}" placeholder="1234 5678 9012 3456">
            </label>
            <label>Expiry Date:
                <input type="month" name="expiry_date">
            </label>
            <label>CVV:
                <input type="text" name="cvv" pattern="\d{3}" placeholder="123">
            </label>
        </div>
        
        <button type="submit">Proceed</button>
    </form>

    <script>
        function toggleCardDetails(show) {
            document.getElementById('cardDetails').style.display = show ? 'block' : 'none';
        }
    </script>
</body>
</html>