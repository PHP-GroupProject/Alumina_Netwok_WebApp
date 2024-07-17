<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Bootstrap Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS for additional styles -->
  <style>
    .form-container {
      max-width: 80%;
      margin: 50px auto;
      padding: 20px;
      background-color: none;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      display: flex;
    }
    .form-title {
      margin-bottom: 20px;
      text-align: center;
      color: #007bff;
      font-weight: bold;
      flex: 1;
    }
    .form-image {

  background-image: url('{{ asset('images/logo.png') }}');
     background-size: cover;
  background-position: center;
 
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

    .form-inner-container {
      flex: 2;
      padding: 20px;
    }
    .age-display {
      margin-top: 10px;
      font-weight: bold;
      color: #007bff;
    }
    .btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  font-weight: bold;
  width: 80%; 
  display: block; 
  margin: 0 auto; 
  text-align: center; 
  padding: 10px; 
}

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .form-group label {
      font-weight: bold;
    }
  </style>
</head>
<body>


  <div class="form-container">
    <div class="form-image"></div>
    <div class="form-inner-container">
      <h2 class="form-title">Update Personal Information</h2>
      <form id="personal-info-form" action="{{ route('store.alumni') }}" method="POST">
      @csrf
        <div class="form-group">
          <label for="availability">Availability</label>
          <select class="form-control" id="availability" required>
            <option value="">Choose...</option>
            <option value="FullTime">FullTime</option>
            <option value="Remote">Remote</option>
            <option value="Hybrid">Hybrid</option>
          </select>
        </div>

        <div class="form-group">
          <label for="birthdate">Birthdate</label>
          <input type="date" class="form-control" id="birthdate" required>
          <div id="age" class="age-display"></div>
        </div>

        <div class="form-group">
          <label for="country">Country</label>
          <input type="text" class="form-control" id="country" placeholder="Enter country" list="country-list" required>
          <datalist id="country-list">
              <option value="United States">
              <option value="Canada">
              <option value="United Kingdom">
              <option value="Australia">
              <option value="Sri Lanka">
            </datalist>
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control" id="city" placeholder="Enter city" required>
        </div>

        <div class="form-group">
          <label for="workplace">Workplace</label>
          <input type="text" class="form-control" id="workplace" placeholder="Enter workplace" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Details</button>
      </form>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  document.getElementById('birthdate').addEventListener('change', function() {
    const birthdate = new Date(this.value);
    const today = new Date();
    let age = today.getFullYear() - birthdate.getFullYear();
    const m = today.getMonth() - birthdate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
      age--;
    }
    document.getElementById('age').innerText = `Age: ${age}`;
  });
</script>
<!-- <script>
  document.getElementById('personal-info-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    const availability = document.getElementById('availability').value;
    const birthdate = document.getElementById('birthdate').value;
    const country = document.getElementById('country').value;
    const city = document.getElementById('city').value;
    const workplace = document.getElementById('workplace').value;

  });
</script> -->


</body>
</html>
