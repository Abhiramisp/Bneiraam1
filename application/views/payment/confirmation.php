
<div class="container mt-5 text-center mb-5">
    <h2 class="text-success">Payment Successful!</h2>
    <p>Your payment has been confirmed. You can now download your confirmation slip.</p>
    
    <a href="<?php echo site_url('payment/download_pdf'); ?>" class="btn btn-primary" onclick="downloadSlip();">Download Confirmation Slip</a>
</div>


<script>
    function downloadSlip() {
        window.location.href = "<?php echo site_url('payment/download_pdf'); ?>";
        setTimeout(function() {
            window.location.href = "<?php echo base_url(); ?>";
        }, 5000); // Redirects after 5 seconds
    }
</script>

