<div class="container mt-5 mb-5 px-5">
    <h4 class="text-center mb-4 text-primary">Register Here</h4>

    <!-- Display success message -->
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
    <?php endif; ?>

    <form method="POST" action="<?php echo base_url('index.php/formcontroller/submit_form'); ?>" class="shadow-lg p-4 rounded bg-light">
        <div class="form-group mb-3">
            <label for="name" class="font-weight-bold">Full Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" placeholder="Enter your full name">
            <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
        </div>

        <div class="form-group mb-3">
            <label for="email" class="font-weight-bold">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Enter your email address">
            <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
        </div>

        <div class="form-group mb-3">
            <label for="phone" class="font-weight-bold">Phone Number</label>
            <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>" placeholder="Enter your phone number">
            <?php echo form_error('phone', '<div class="text-danger">', '</div>'); ?>
        </div>

        <div class="form-group mb-3">
            <label for="course_last_studied" class="font-weight-bold">Course Last Studied</label>
            <input type="text" name="course_last_studied" class="form-control" value="<?php echo set_value('course_last_studied'); ?>" placeholder="Enter the last course you studied">
            <?php echo form_error('course_last_studied', '<div class="text-danger">', '</div>'); ?>
        </div>

        <div class="form-group mb-3">
            <label for="pass_out_year" class="font-weight-bold">Pass Out Year</label>
            <input type="text" name="pass_out_year" class="form-control" value="<?php echo set_value('pass_out_year'); ?>" placeholder="Enter your pass out year">
            <?php echo form_error('pass_out_year', '<div class="text-danger">', '</div>'); ?>
        </div>

        <div class="form-group mb-3">
            <label for="github_link" class="font-weight-bold">GitHub Link (Optional)</label>
            <input type="text" name="github_link" class="form-control" value="<?php echo set_value('github_link'); ?>" placeholder="Enter your GitHub project link (optional)">
        </div>

        <div class="form-group form-check mb-4">
            <input type="checkbox" class="form-check-input" name="terms_conditions" <?php echo set_checkbox('terms_conditions', '1'); ?>>
            <label class="form-check-label" for="terms_conditions" data-bs-toggle="modal" data-bs-target="#termsModal">
                I agree to the <a href="javascript:void(0);" class="text-decoration-none text-primary">terms and conditions</a>
            </label>
            <?php echo form_error('terms_conditions', '<div class="text-danger">', '</div>'); ?>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block py-3">Pay Here</button>
    </form>
</div>

<!-- Terms Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <ol>
                    <li><strong>Eligibility</strong>: Basic knowledge of coding is required. The program is suitable for individuals who just completed their degree or diploma in the software development field.</li>
                    <li><strong>Training Duration</strong>: The training program will span one year. The company will provide necessary placement assistance, and candidates are required to attend interviews as part of the placement process.</li>
                    <li><strong>Certification</strong>: Upon completion of each project, an evaluation will be conducted, and candidates will receive a certification from the company based on their performance.</li>
                    <li><strong>Rewards and Recognition</strong>: The company has a Rewards and Recognition (RnR) policy in place to acknowledge and reward outstanding performance.</li>
                    <li><strong>Test Fee</strong>: The test fee is non-refundable. The exam fee includes the certificate course in different aspects of software development and the GST.</li>
                    <li><strong>Course Selection</strong>: The candidates for the exam are free to attend a course and attend it for free of cost.</li>
                    <li><strong>Experience Letter</strong>: Upon successful completion of the training program, the company will provide a one-year experience letter.</li>
                    <li><strong>Stipend and Salary</strong>: During the training period of one year, all the candidates will be provided with a stipend, and in the last three months, the candidates will be provided with a salary and salary slip clearly mentioning that the candidates are employees in the company.</li>
                    <li><strong>Periodic Updates</strong>: The terms and conditions may be periodically updated, and it is the responsibility of the student to stay informed about any changes.</li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<style>
    .container {
        max-width: 600px;
    }

    .form-group label {
        font-size: 1.1rem;
    }

    .form-control {
        border-radius: 0.5rem;
    }

    .form-check-input {
        margin-top: 0.3rem;
    }

    .btn {
        font-size: 1.2rem;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    .alert {
        font-weight: bold;
    }
</style>

<script>
    // Optional JavaScript for custom handling (if needed)
</script>
