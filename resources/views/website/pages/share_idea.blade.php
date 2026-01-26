@extends('website.layout.main')

@push('styles')
<style>
    /* --- Theme Variables based on Image --- */
    :root {
        --primary-teal: #00898a; /* Precise teal from the image */
        --primary-hover: #007374;
        --input-bg: #f7f8f9;
        --border-color: #ececec;
        --text-dark: #253D4E;
        --text-muted: #7e7e7e;
    }

    .share-idea-container {
        max-width: 900px;
        margin: 60px auto;
        padding: 0 20px;
    }

    .page-title {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 40px;
        text-align: center;
        font-size: 28px;
    }

    /* --- Form Elements --- */
    .form-label {
        font-weight: 600;
        font-size: 15px;
        color: var(--text-dark);
        margin-bottom: 10px;
    }

    .form-label .text-danger {
        color: #ff0000 !important;
        margin-left: 3px;
    }

    .custom-input {
        background-color: var(--input-bg);
        border: 1px solid var(--border-color);
        height: 55px;
        border-radius: 10px;
        font-size: 14px;
        padding: 0 20px;
        color: var(--text-dark);
    }

    .custom-input::placeholder {
        color: #b1b1b1;
    }

    .custom-input:focus {
        background-color: #fff;
        border-color: var(--primary-teal);
        box-shadow: none;
    }

    .custom-textarea {
        height: 180px !important;
        padding-top: 15px;
        resize: none;
    }

    /* --- File Upload Area --- */
    .upload-area {
        border: 2px dashed #b5e2e1;
        background-color: #fff;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        margin: 20px 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .upload-area:hover {
        background-color: #f0fafa;
        border-color: var(--primary-teal);
    }

    .upload-icon-box {
        background-color: var(--primary-teal);
        color: white;
        width: 45px;
        height: 45px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        font-size: 20px;
    }

    .upload-text {
        font-size: 14px;
        color: var(--text-muted);
    }

    .upload-text span {
        color: var(--primary-teal);
        font-weight: 700;
        text-decoration: none;
    }

    .upload-hint {
        font-size: 12px;
        color: #a0a0a0;
        margin-top: 5px;
    }

    /* --- Submit Button --- */
    .btn-submit {
        background-color: var(--primary-teal);
        color: #fff;
        padding: 12px 60px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 16px;
        border: none;
        transition: background 0.3s;
        margin-top: 20px;
    }

    .btn-submit:hover {
        background-color: var(--primary-hover);
        color: #fff;
    }
</style>
@endpush

@section('content')

<div class="share-idea-container">
    <h2 class="page-title">Share Your Idea</h2>

    <form id="ideaForm">
        <div class="row">
            <div class="col-md-6 mb-4">
                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control custom-input" placeholder="Enter your name">
            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control custom-input" placeholder="Enter your email">
            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                <input type="text" class="form-control custom-input" placeholder="Enter your number">
            </div>

            <div class="col-md-6 mb-4">
                <label class="form-label">Topic Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control custom-input" placeholder="Enter your address">
            </div>
        </div>

        <div class="upload-area" id="drop-area">
            <input type="file" id="fileElem" multiple accept="image/*,.doc,.exel" style="display:none">
            <div class="upload-icon-box">
                <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <p class="upload-text">
                <span onclick="document.getElementById('fileElem').click()">Upload File</span> or drag and drop
            </p>
            <p class="upload-hint">Doc, PNG, JPG or Exel</p>
        </div>

        <div class="mb-4">
            <label class="form-label">Share Your Idea</label>
            <textarea class="form-control custom-input custom-textarea"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-submit">Submit</button>
        </div>
    </form>
</div>

<section class="newsletter">
    @include('website.component.newsletter')
</section>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<script>
$(document).ready(function() {
    let dropArea = document.getElementById('drop-area');

    // Prevent default drag behaviors
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults (e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Highlight drop area when item is dragged over it
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => $(dropArea).css('background-color', '#f0fafa'), false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => $(dropArea).css('background-color', '#fff'), false);
    });

    // Handle dropped files
    dropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        let dt = e.dataTransfer;
        let files = dt.files;
        handleFiles(files);
    }

    function handleFiles(files) {
        if(files.length > 0) {
            alert(files.length + " file(s) selected.");
        }
    }

    // Form Submission
    $('#ideaForm').on('submit', function(e) {
        e.preventDefault();
        alert('Thank you for sharing your idea!');
    });
});
</script>
@endpush