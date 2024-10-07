<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #222;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input,
        select {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
            background-color: #333;
            color: #fff;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Page</h1>
        <form id="payment-form" action="pay.php" method="post" onsubmit="submitForm()">
            <label for="uid">User ID:</label>
            <input type="text" id="uid" name="uid" placeholder="123" required>

            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card" placeholder="1234 5678 9012 3456" required>
            
            <label for="expiry-date">Expiry Date:</label>
            <input type="text" id="expiry-date" name="exp" placeholder="MM/YY" required>
            
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" required>
            
            <label for="name">Name on Card:</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>

            <label for="payment-method">Membership plan:</label>
            <select id="payment-method" name="meth">
                <option value="null">select your plan</option>
                <option value="online">Online one-one</option>
                <option value="offline">Offline one-one</option>
            </select>

            <button type="button">Pay Now</button>
        </form>
        <p>By clicking "Pay Now", you agree to our terms and conditions.</p>
    </div>

    <script>
        function submitForm() {
            var cardNumber = document.getElementById("card-number").value;
            var expiryDate = document.getElementById("expiry-date").value;
            var cvv = document.getElementById("cvv").value;
            var name = document.getElementById("name").value;
            var paymentMethod = document.getElementById("payment-method").value;
            
            if(cardNumber && expiryDate && cvv && name && paymentMethod) {
                if (paymentMethod === 'online') {
                    alert('Payment Successful! You now have instant access to our gym services.');
                } else {
                    alert('Thank you for your payment. Please visit our gym for access to our services.');
                }
            } else {
                alert("Please fill out all fields.");
            }
        }
    </script>
</body>
</html>
