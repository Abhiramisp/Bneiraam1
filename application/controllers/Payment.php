<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    // Load the necessary views for payment instructions
    public function index() {
        $this->load->view('landing_page/head',);
		$this->load->view('camp/header');
        $this->load->view('payment/payment_instruction');
		$this->load->view('landing_page/footer');

    }

    // Show the payment confirmation page
    public function confirm_payment() {
        $this->load->view('landing_page/head',);
		$this->load->view('camp/header');
        $this->load->view('payment/payment_confirmation');
		$this->load->view('landing_page/footer');

    }

    // Handle the uploaded payment receipt
    public function process_payment() {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Check if the file is uploaded
            if (isset($_FILES['payment_receipt']) && $_FILES['payment_receipt']['error'] == 0) {
                // Define upload directory
                $uploadDir = './uploads/receipts/';
                
                // Check if directory exists, if not, create it
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Define the file path
                $uploadFile = $uploadDir . basename($_FILES['payment_receipt']['name']);

                // Allowed file types (images or PDFs)
                $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
                
                // Validate file type
                if (in_array($_FILES['payment_receipt']['type'], $allowedTypes)) {
                    // Move the uploaded file to the server
                    if (move_uploaded_file($_FILES['payment_receipt']['tmp_name'], $uploadFile)) {
                        // Process the confirmation (save it to database or mark as confirmed)
                        $this->load->model('Payment_model');
                        $this->Payment_model->confirm_payment($uploadFile); // Save the receipt info in DB
                        
                        // Display success message
                        $this->load->view('landing_page/head',);
		$this->load->view('camp/header');
                        $this->load->view('payment/confirmation');
		$this->load->view('landing_page/footer');

                        // echo "Payment confirmed successfully!";
                    } else {
                        echo "Error uploading the receipt.";
                    }
                } else {
                    echo "Invalid file type. Only images or PDFs are allowed.";
                }
            } else {
                echo "No receipt uploaded.";
            }
        }
    }

    public function download_pdf() {
        // Load TCPDF Library
        $this->load->library('pdf');
    
        // Create PDF
        $pdf = new Pdf();
        $pdf->AddPage();
    
        // Company Name and Logo
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0, 10, 'Bneiraam Tech Solution Pvt Ltd', 0, 1, 'C');
    
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 10, 'Confirmation Slip', 0, 1, 'C');
    
        // Content
        $content = "
        Company Name: Bneiraam Tech Solution Pvt Ltd
        Details about Bneicamp
        Course Name: Software Estimation
        Exam Date: May 20th
        Exam Time: 3.00 PM
        Exam Mode: A link will be shared to the candidates through SMS in the first week of May.
        
        Congratulations! You have been awarded add-on courses.
        A list of available courses will be shared soon, and you can choose one of them.
        ";
    
        $pdf->SetFont('helvetica', '', 11);
        $pdf->MultiCell(0, 10, $content, 0, 'L');
    
        // Set headers to force download
        $pdfFileName = 'Confirmation_Slip.pdf';
        $pdf->Output($pdfFileName, 'D'); // 'D' forces download
    
        // Redirect to home page after download
        echo "<script>window.location.href = '".base_url()."';</script>";
        exit;
    }
    
    
    
}
