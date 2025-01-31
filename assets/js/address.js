// Load existing addresses when the modal opens
$('#addressModal').on('show.bs.modal', function () {
    $.ajax({
        url: "<?php echo base_url('address/get_addresses'); ?>",
        method: "GET",
        success: function (response) {
            let addresses = JSON.parse(response);
            let addressHtml = '';

            if (addresses.length > 0) {
                addresses.forEach(function (address) {
                    addressHtml += `
                        <div class="address-item border p-2 mb-2">
                            <p>${address.address_line_1}, ${address.address_line_2}</p>
                            <p>${address.city}, ${address.state} - ${address.pincode}</p>
                            <p>Phone: ${address.phone}</p>
                            <button class="btn btn-primary btn-sm select-address" data-address-id="${address.id}">Select</button>
                        </div>
                    `;
                });
            } else {
                addressHtml = '<p>No saved addresses found.</p>';
            }

            $('#savedAddresses').html(addressHtml);
        }
    });
});

$('#addressForm').submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url('address/save'); ?>",
        method: "POST",
        data: $(this).serialize(),
        success: function (response) {
            let result = JSON.parse(response);

            if (result.status === 'success') {
                alert('Address saved successfully!');
                $('#addressForm')[0].reset();
                $('#addressModal').modal('hide'); // Close the modal
                location.reload(); // Reload the page to reflect changes (optional)
            } else {
                alert('Failed to save address. Please try again.');
            }
        }
    });
});

$(document).on('click', '.select-address', function () {
    let addressId = $(this).data('address-id');
    
    // Save the selected address to the session or use it directly
    $.ajax({
        url: "<?php echo base_url('address/select_address'); ?>",
        method: "POST",
        data: { address_id: addressId },
        success: function (response) {
            let result = JSON.parse(response);

            if (result.status === 'success') {
                alert('Address selected successfully!');
                $('#addressModal').modal('hide');
                // Proceed to checkout or redirect
            } else {
                alert('Failed to select address. Please try again.');
            }
        }
    });
});
