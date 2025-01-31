
<style>
        body {
            background-color: #f8f9fa;
        }
        .payment-card {
            max-width: 500px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>


<div class="container mt-5 mb-5">
    <div class="payment-card">
        <h3 class="text-center text-success">Confirm Your Payment</h3>
        <p class="text-center text-muted">Upload your payment receipt to verify your transaction.</p>

        <!-- Payment Confirmation Form -->
        <form action="<?php echo site_url('payment/process_payment'); ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="payment_receipt" class="form-label">Upload Payment Receipt</label>
                <input type="file" class="form-control" id="payment_receipt" name="payment_receipt" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-custom w-100 mt-3">Confirm Payment</button>
            </div>
        </form>
    </div>
</div>