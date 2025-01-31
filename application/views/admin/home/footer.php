<!-- Footer Start -->
<footer class=" bg-light mt-auto">
        <div class="bg-light rounded-top p-4 pt-5 mt-5">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#" style="color : #009CFF">Bnei Ra'am</a>, All Right Reserved.
                </div>

        </div>
    </div>
</footer>
<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Show/hide fields based on category
    $('#category').change(function() {
        const category = $(this).val();
        $('#laptopFields, #mobileFields, #accessoryFields').addClass('d-none');
        
        if (category === 'laptop') {
            $('#laptopFields').removeClass('d-none');
        } else if (category === 'mobile') {
            $('#mobileFields').removeClass('d-none');
        } else if (category === 'accessory') {
            $('#accessoryFields').removeClass('d-none');
        }
    }).trigger('change');
</script>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/admin/lib/chart/chart.min.js"></script>
<script src="../assets/admin/lib/easing/easing.min.js"></script>
<script src="../assets/admin/lib/waypoints/waypoints.min.js"></script>
<script src="../assets/admin/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../assets/admin/lib/tempusdominus/js/moment.min.js"></script>
<script src="../assets/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="../assets/admin/js/main.js"></script>
</body>

</html>