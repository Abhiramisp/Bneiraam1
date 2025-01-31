
<div class="container mt-5">
    <h3 class="text-center mb-4">Form Submissions</h3>

    <!-- Display success message (if any) -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
    <?php endif; ?>

    <!-- Table to display form submissions -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course Last Studied</th>
                <th>Pass Out Year</th>
                <th>GitHub Link</th>
                <th>Terms and Conditions</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($submissions as $submission): ?>
                <tr>
                    <td><?php echo $submission->id; ?></td>
                    <td><?php echo $submission->name; ?></td>
                    <td><?php echo $submission->email; ?></td>
                    <td><?php echo $submission->phone; ?></td>
                    <td><?php echo $submission->course_last_studied; ?></td>
                    <td><?php echo $submission->pass_out_year; ?></td>
                    <td><?php echo $submission->github_link ? $submission->github_link : 'N/A'; ?></td>
                    <td>
                        <?php echo $submission->terms_conditions ? 'Agreed' : 'Not Agreed'; ?>
                    </td>
                    <td><?php echo date('Y-m-d H:i:s', strtotime($submission->submitted_at)); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
