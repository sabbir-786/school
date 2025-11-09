<?php
/**
 * Simple Admission Form Page
 * Basic admission form with essential fields only
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form - Manaj School</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #f59e0b;
            --success-color: #10b981;
            --dark-color: #1e293b;
            --light-color: #f8fafc;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 0;
        }

        .admission-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .form-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .form-header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            margin: 0;
            opacity: 0.95;
        }

        .form-body {
            padding: 40px 30px;
        }

        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .required {
            color: #ef4444;
            margin-left: 3px;
        }

        .form-control, .form-select {
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.15);
        }

        .form-control.is-invalid, .form-select.is-invalid {
            border-color: #ef4444;
        }

        .invalid-feedback {
            display: block;
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s;
            margin-top: 1.5rem;
        }

        .btn-submit:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.4);
        }

        .success-message {
            display: none;
            text-align: center;
            padding: 3rem 2rem;
        }

        .success-message.show {
            display: block;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .success-icon {
            width: 80px;
            height: 80px;
            background: var(--success-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            animation: scaleIn 0.5s;
        }

        @keyframes scaleIn {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }

        .success-icon i {
            color: white;
            font-size: 2.5rem;
        }

        .success-message h3 {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .success-message p {
            color: #64748b;
            margin-bottom: 1.5rem;
        }

        .application-id {
            background: var(--light-color);
            padding: 1rem;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        @media (max-width: 768px) {
            body {
                padding: 20px 15px;
            }

            .form-header {
                padding: 30px 20px;
            }

            .form-header h1 {
                font-size: 1.5rem;
            }

            .form-body {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="admission-container">
            
            <!-- Form Header -->
            <div class="form-header">
                <h1><i class="fas fa-graduation-cap"></i> Admission Form</h1>
                <p>Fill in the details below to apply</p>
            </div>

            <!-- Form Body -->
            <div class="form-body">
                <form id="admissionForm" novalidate>
                    
                    <!-- Student Name -->
                    <div class="mb-4">
                        <label for="studentName" class="form-label">
                            Student Name <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Enter student's full name" required>
                        <div class="invalid-feedback">Please enter student name</div>
                    </div>

                    <!-- Father's Name -->
                    <div class="mb-4">
                        <label for="fatherName" class="form-label">
                            Father's Name <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control" id="fatherName" name="fatherName" placeholder="Enter father's name" required>
                        <div class="invalid-feedback">Please enter father's name</div>
                    </div>

                    <!-- Mother's Name -->
                    <div class="mb-4">
                        <label for="motherName" class="form-label">
                            Mother's Name <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control" id="motherName" name="motherName" placeholder="Enter mother's name" required>
                        <div class="invalid-feedback">Please enter mother's name</div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label">
                            Email Address <span class="required">*</span>
                        </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" required>
                        <div class="invalid-feedback">Please enter a valid email address</div>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label for="phone" class="form-label">
                            Phone Number <span class="required">*</span>
                        </label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                        <div class="invalid-feedback">Please enter a valid 10-digit phone number</div>
                    </div>

                    <!-- Class -->
                    <div class="mb-4">
                        <label for="class" class="form-label">
                            Class Applying For <span class="required">*</span>
                        </label>
                        <select class="form-select" id="class" name="class" required>
                            <option value="">Select Class</option>
                            <option value="Nursery">Nursery</option>
                            <option value="LKG">LKG</option>
                            <option value="UKG">UKG</option>
                            <option value="Class 1">Class 1</option>
                            <option value="Class 2">Class 2</option>
                            <option value="Class 3">Class 3</option>
                            <option value="Class 4">Class 4</option>
                            <option value="Class 5">Class 5</option>
                            <option value="Class 6">Class 6</option>
                            <option value="Class 7">Class 7</option>
                            <option value="Class 8">Class 8</option>
                            <option value="Class 9">Class 9</option>
                            <option value="Class 10">Class 10</option>
                            <option value="Class 11">Class 11</option>
                            <option value="Class 12">Class 12</option>
                        </select>
                        <div class="invalid-feedback">Please select a class</div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane me-2"></i> Submit Application
                    </button>

                </form>

                <!-- Success Message (Hidden Initially) -->
                <div class="success-message" id="successMessage">
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <h3>Application Submitted!</h3>
                    <p>Thank you for applying to Manaj School</p>
                    <div class="application-id">
                        Application ID: <span id="applicationId"></span>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="resetForm()">
                        <i class="fas fa-plus me-2"></i> Submit Another Application
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const form = document.getElementById('admissionForm');
        const successMessage = document.getElementById('successMessage');

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validate form
            if (!validateForm()) {
                return;
            }

            // Generate Application ID
            const applicationId = 'MNJ' + new Date().getFullYear() + Math.floor(Math.random() * 100000);
            document.getElementById('applicationId').textContent = applicationId;

            // Hide form and show success message
            form.style.display = 'none';
            successMessage.classList.add('show');

            // Here you would send data to server
            // const formData = new FormData(form);
            // fetch('submit_admission.php', {
            //     method: 'POST',
            //     body: formData
            // }).then(response => response.json())
            //   .then(data => console.log('Success:', data));
        });

        // Validate form
        function validateForm() {
            let isValid = true;
            const inputs = form.querySelectorAll('input[required], select[required]');

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('is-invalid');
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');

                    // Email validation
                    if (input.type === 'email') {
                        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailPattern.test(input.value)) {
                            input.classList.add('is-invalid');
                            isValid = false;
                        }
                    }

                    // Phone validation
                    if (input.type === 'tel') {
                        const phonePattern = /^[0-9]{10}$/;
                        if (!phonePattern.test(input.value)) {
                            input.classList.add('is-invalid');
                            isValid = false;
                        }
                    }
                }
            });

            return isValid;
        }

        // Reset form
        function resetForm() {
            form.reset();
            form.style.display = 'block';
            successMessage.classList.remove('show');
            document.querySelectorAll('.is-invalid').forEach(el => {
                el.classList.remove('is-invalid');
            });
        }

        // Real-time validation
        form.querySelectorAll('input, select').forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                }
            });

            input.addEventListener('input', function() {
                if (this.classList.contains('is-invalid') && this.value.trim()) {
                    this.classList.remove('is-invalid');
                }
            });
        });

        // Auto-capitalize names
        ['studentName', 'fatherName', 'motherName'].forEach(id => {
            const input = document.getElementById(id);
            input.addEventListener('input', function() {
                this.value = this.value.replace(/\b\w/g, l => l.toUpperCase());
            });
        });

        // Phone number formatting (only digits)
        const phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('input', function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
        });
    </script>

</body>
</html>