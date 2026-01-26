@extends('website.layout.main')

@push('styles')
<style>
    :root {
        --primary-teal: #00898a;
        --input-bg: #f7f8f9;
        --text-dark: #253D4E;
        --text-muted: #7e7e7e;
        --border-color: #ececec;
    }

    .apply-page-container {
        padding: 60px 0;
        color: var(--text-dark);
    }

    /* --- Left Side: Job Content --- */
    .job-header h2 {
        font-weight: 700;
        font-size: 28px;
        margin-bottom: 5px;
    }
    .job-subtext {
        color: var(--text-muted);
        font-size: 14px;
        margin-bottom: 30px;
    }
    .content-section {
        margin-bottom: 25px;
    }
    .content-section h6 {
        font-weight: 700;
        font-size: 16px;
        margin-bottom: 12px;
    }
    .content-list {
        list-style: none;
        padding-left: 0;
        font-size: 14px;
        color: #555;
    }
    .content-list li {
        margin-bottom: 8px;
        line-height: 1.6;
    }
    .summary-item {
        font-size: 14px;
        margin-bottom: 5px;
    }

    /* --- Right Side: Form --- */
    .form-label {
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 8px;
    }
    .form-label .text-danger {
        font-size: 16px;
    }
    .custom-input {
        background-color: var(--input-bg);
        border: 1px solid transparent;
        height: 50px;
        border-radius: 8px;
        font-size: 14px;
    }
    .custom-input:focus {
        background-color: #fff;
        border-color: var(--primary-teal);
        box-shadow: none;
    }
    .custom-textarea {
        height: 120px !important;
        padding-top: 15px;
    }

    /* --- Upload Zone --- */
    .upload-zone {
        border: 2px dashed #b5e2e1;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        background: #fff;
        margin: 20px 0;
        cursor: pointer;
        transition: 0.3s;
    }
    .upload-zone:hover {
        background-color: #f0fafa;
    }
    .upload-icon {
        background: var(--primary-teal);
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
    }
    .upload-text {
        font-size: 13px;
        color: var(--text-muted);
    }
    .upload-text span {
        color: var(--primary-teal);
        font-weight: 700;
    }

    .btn-apply-submit {
        background-color: var(--primary-teal);
        color: white;
        border: none;
        padding: 10px 40px;
        border-radius: 6px;
        font-weight: 600;
        transition: 0.3s;
    }
    .btn-apply-submit:hover {
        background-color: #007374;
        color: white;
    }
</style>
@endpush

@section('content')
<div class="container apply-page-container">
    <div class="row">
        <div class="col-lg-7 pe-lg-5">
            <div class="job-header">
                <h2>Asst. Manager? Deputy Manager</h2>
                <p class="job-subtext">Accounts Shipping Line NVOCC Related</p>
            </div>

            <div class="content-section">
                <h6>Summary</h6>
                <div class="summary-item">Vacancy : 2</div>
                <div class="summary-item">Location: Dhaka (Gulshan)</div>
                <div class="summary-item">Minimum salary: Negotiable</div>
                <div class="summary-item">Experience: At Least 4 Years</div>
                <div class="summary-item">Published: 1 Jun 2025</div>
            </div>

            <div class="content-section">
                <h6>Requirements</h6>
                <p class="small">Education: Bachelors degree in fashion design, apparel manufacturing and technology or a related field.</p>
            </div>

            <div class="content-section">
                <h6>Key Qualification</h6>
                <ul class="content-list">
                    <li>Proficiency in design software (e.g. Adobe creative suits, Illustrator, Photoshop)</li>
                    <li>Strong creative and artistic skills with a keen eye for detail.</li>
                    <li>Excellent communication and presentation abilities.</li>
                    <li>In-depth knowledge in graphic design and product development.</li>
                </ul>
            </div>

            <div class="content-section">
                <h6>Responsibilities & Content:</h6>
                <p class="small">We are looking a highly skilled, motivated and creative senior fashion designer to join our team. The ideal candidate will have a strong background in apparel design exceptional design skills, and ability to contribute to the development of innovative and market-leading apparel products.</p>
            </div>

            <div class="content-section">
                <h6>Job Responsibilities</h6>
                <ul class="content-list">
                    <li>Proficiency in design software (e.g. Adobe creative suits, Illustrator, Photoshop)</li>
                    <li>Strong creative and artistic skills with a keen eye for detail.</li>
                    <li>Excellent communication and presentation abilities.</li>
                    <li>In-depth knowledge in graphic design and product development.</li>
                    <li>Proficiency in design software (e.g. Adobe creative suits, Illustrator, Photoshop)</li>
                    <li>Strong creative and artistic skills with a keen eye for detail.</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-5">
            <form id="applyForm">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control custom-input" placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control custom-input" placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control custom-input" placeholder="Enter your number" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Expected Salary <span class="text-danger">*</span></label>
                        <input type="text" class="form-control custom-input" placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea class="form-control custom-input custom-textarea" placeholder="Enter your number"></textarea>
                </div>

                <div class="upload-zone" onclick="document.getElementById('resumeUpload').click()">
                    <input type="file" id="resumeUpload" hidden accept=".doc,.pdf,.jpg,.png">
                    <div class="upload-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <p class="upload-text">
                        <span>Click to upload your resume</span> or drag and drop<br>
                        <small class="text-muted">Doc, PNG, JPG or Exel</small>
                    </p>
                </div>

                <button type="submit" class="btn btn-apply-submit mt-2">Apply</button>
            </form>
        </div>
    </div>
</div>

<section class="newsletter">
    @include('website.component.newsletter')
</section>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<script>
    $(document).ready(function() {
        // Simple file selection feedback
        $('#resumeUpload').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            if (fileName) {
                $('.upload-text').html('Selected: <strong>' + fileName + '</strong>');
            }
        });

        $('#applyForm').on('submit', function(e) {
            e.preventDefault();
            alert('Application submitted successfully!');
        });
    });
</script>
@endpush