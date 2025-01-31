
<style>
        body {
            background: #f8f9fa; /* Light gray background */
            font-family: 'Poppins', sans-serif;
        }
        .payment-container {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
        }
        .btn-primary {
            background: #007bff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .text-highlight {
            color: #28a745;
            font-weight: bold;
        }
    </style>


<div class="container mb-5">
    <div class="payment-container col-md-6 mx-auto text-center">
        <h3 class="mb-4">Complete Your Payment</h3>
        <p class="text-muted">Transfer ₹1499 to the following details or use UPI for faster payment.</p>

        <!-- Bank Details -->
        <div class="card">
            <h5 class="text-highlight">Bank Transfer Details</h5>
            <p><strong>Name:</strong> <span class="text-muted">BNEI RAAM TECH SOLUTIONS PVT LTD</span></p>
            <p><strong>Account Number:</strong> <span class="text-muted">50200104327510</span></p>
            <p><strong>IFSC Code:</strong> <span class="text-muted">HDFC0000133</span></p>
            <p><strong>Amount:</strong> ₹1499</p>
        </div>

        <!-- <h5 class="mt-4">OR</h5> -->

        <!-- UPI Details -->
        <!-- <div class="card">
            <h5 class="text-highlight">UPI Payment</h5>
            <p>UPI ID: <strong>example@upi</strong></p>
            <p>Scan the QR code to make the payment:</p>
            <img src="your-upi-qr-code.png" alt="UPI QR Code" class="img-fluid rounded" width="200">
        </div> -->

        <p class="mt-4">Once you’ve completed the payment, click below to confirm:</p>
        <a href="<?php echo site_url('payment/confirm_payment'); ?>" class="btn btn-primary">Confirm Payment</a>
    </div>
</div>
