<!-- admission.php -->
<style>
  :root {
    --primary-color: #EC3237;
    --secondary-color: #FBBB71;
    --dark-color: #363435;
    --light-color: #FEFEFE;
    --gradient-primary: linear-gradient(135deg, #EC3237 0%, #C72C31 100%);
    --gradient-secondary: linear-gradient(135deg, #FBBB71 0%, #F9A952 100%);
  }

  /* Modal styling */
  #admissionModal .modal-content {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    background: var(--light-color);
    border: none;
  }

  #admissionModal .modal-header {
    background: var(--gradient-primary);
    color: var(--light-color);
    border: none;
  }

  #admissionModal .modal-title {
    font-weight: 700;
    font-size: 1.25rem;
  }

  #admissionModal .form-label {
    font-weight: 600;
    color: var(--dark-color);
  }

  #admissionModal .form-control,
  #admissionModal .form-select {
    border-radius: 10px;
    border: 2px solid #eee;
    transition: all 0.3s;
  }

  #admissionModal .form-control:focus,
  #admissionModal .form-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(236, 50, 55, 0.25);
  }

  #admissionModal .btn-primary {
    background: var(--primary-color);
    border: none;
    border-radius: 10px;
    font-weight: 600;
    padding: 12px;
    transition: all 0.3s ease;
  }

  #admissionModal .btn-primary:hover {
    background: var(--secondary-color);
    color: var(--dark-color);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
  }

  #admissionModal .form-note {
    font-size: 0.9rem;
    text-align: center;
    margin-top: 15px;
    color: #777;
  }

  /* Responsive */
  @media (max-width: 576px) {
    #admissionModal .modal-body {
      padding: 20px;
    }
  }
</style>

<div class="modal fade" id="admissionModal" tabindex="-1" aria-labelledby="admissionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="admissionModalLabel">
          <i class="fa-solid fa-user-graduate me-2"></i> Student Admission Form
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-4">
        <form action="#" method="POST">
          <div class="mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" name="student_name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" name="dob" class="form-control" required>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Father's Name</label>
              <input type="text" name="father_name" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Mother's Name</label>
              <input type="text" name="mother_name" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Phone</label>
              <input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control" rows="2" required></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Class</label>
            <select name="class" class="form-select" required>
              <option value="">Select Class</option>
              <?php for($i=1;$i<=10;$i++): ?>
                <option value="Class <?php echo $i; ?>">Class <?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary w-100">
            Submit Application
          </button>
          <p class="form-note">Our team will contact you after reviewing your application.</p>
        </form>
      </div>
    </div>
  </div>
</div>
