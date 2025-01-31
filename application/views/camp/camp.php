<style>
    body {
        background: #f7f9fc;
        color: #333;
        font-family: 'Poppins', sans-serif;
    }

    .card {
        background-color: white;
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .badge {
        font-size: 1rem;
        margin: 0.2rem;
    }

    .cta-button {
        background-color: #ffcc00;
        color: #000;
        font-weight: bold;
        border: none;
        padding: 0.8rem 1.5rem;
        border-radius: 0.5rem;
        text-transform: uppercase;
    }

    .cta-button:hover {
        background-color: #e6b800;
        color: white;
    }

    .header-section {
        background: #4c86f5;
        color: white;
        padding: 2rem;
        border-radius: 1rem;
    }

    .register-button {
        background-color: #28a745;
        color: white;
        font-weight: bold;
        padding: 1rem 2rem;
        border-radius: 0.5rem;
        font-size: 1.25rem;
        text-transform: uppercase;
    }

    .register-button:hover {
        background-color: #218838;
        color: white;
    }
</style>

<div class="container my-5">
    <div class="header-section text-center mb-5">
        <h1 class="fw-bold">🚀 Launch Your Career with <span class="text-warning">Bnei Ra'am Tech Solution Pvt Ltd!</span></h1>
        <p class="lead">Are you a fresher with a passion for coding? Here’s your opportunity to showcase your skills and make your mark in the software development industry.</p>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="text-success">🎯 Why Join Us?</h2>
                    <p>Explore the benefits of joining our training program:</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><strong>⚙️ Hands-On Training:</strong> Work on live projects and gain real-world experience.</li>
                        <li class="mb-3"><strong>📄 Experience Certificate:</strong> Receive a one-year job experience certificate as a software developer.</li>
                        <li class="mb-3"><strong>💰 Stipend Provided:</strong> Earn while you learn with a stipend during the training.</li>
                        <li class="mb-3"><strong>🎯 Placement Assistance:</strong> Get support to secure your dream job after completing the program.</li>
                        <li class="mb-3"><strong>🎓 Free Add-On Courses:</strong> Enhance your skillset with bonus courses at no extra cost.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class=" d-flex align-items-center justify-content-center mb-4">
                <a href="<?php echo base_url(); ?>index.php/FormController" class="register-button">Register Now</a>
            </div>
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="text-info">💻 Technologies Covered</h2>
                    <p>Master the following technologies during your training:</p>
                    <ul class="list-inline">
                        <li class="list-inline-item badge bg-primary text-white">MERN Stack</li>
                        <li class="list-inline-item badge bg-success text-white">Flutter</li>
                        <li class="list-inline-item badge bg-info text-white">PHP</li>
                        <li class="list-inline-item badge bg-warning text-dark">HTML, CSS, and JavaScript</li>
                        <li class="list-inline-item badge bg-secondary text-white">Bootstrap</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="text-danger">📅 Important Details</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-3"><strong>📅 Aptitude Test:</strong> As part of the selection process, an aptitude test will be conducted.</li>
                                <li class="mb-3"><strong>🗓️ Test Date:</strong> May 20th</li>
                                <li class="mb-3"><strong>💵 Test Fee:</strong> ₹1499/-</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p><strong>✨ Exclusive Benefit:</strong> Candidates who attend the exam will receive an additional free add-on course to boost their skills even further.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-5">
        <a href="mailto:info@bneiraam.com" class="cta-button">Contact Us Now</a>
    </div>

    <footer class="text-center">
        <p>📧 <strong>Email:</strong> <a href="mailto:info@bneiraam.com" class="text-warning">info@bneiraam.com</a></p>
        <p>📞 <strong>Phone:</strong> <a href="tel:+916360009348" class="text-warning">+91 6360009348</a> / <a href="tel:+917909228556" class="text-warning">+91 7909228556</a></p>
        <p>📍 <strong>Address:</strong> #28/A Michael Palya, Indiranagar, Bangalore - 38</p>
        <div class=" d-flex align-items-center justify-content-center mt-4">
                <a href="<?php echo base_url(); ?>index.php/FormController" class="register-button">Register Now</a>
            </div>
    </footer>
</div>