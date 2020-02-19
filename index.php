<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form Validation</h2>

  <form action="/action_page.php" class="needs-validation" novalidate>
    <div class="form-group">
      <!firstname>
      <label for="fname">Firstname:</label>
      <input type="text" class="form-control" id="fname" placeholder="Firstname" name="fname" required>      
      <!Lastname>
      <label for="lname">Lastname:</label>
      <input type="text" class="form-control" id="lname" placeholder="Lastname" name="lname" required>
      <!Middlename>
      <label for="mname">Middlename:</label>
      <input type="text" class="form-control" id="mname" placeholder="Middlename" name="mname" required>
      <!address>
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
      <!Birthday>     
      <label for="address">Birthday:</label>
      <input type="date" class="form-control" id="birthday" name="birthday">
      <!Place of birth>
      <label for="pob">Place of Birth:</label>
      <input type="text" class="form-control" id="pob" placeholder="Place of Birth" name="pob" required>
      <!Gender>
      <label for="gender">Gender:</label>
      <input type="radio"  id="gender"  name="gender" value="male" size="5" required>Male
      <input type="radio"  id="gender"  name="gender" value="Female" size="5" required>Female<br>
      <!Guardian>
      <label for="Guardian">Guardian:</label>
      <input type="text" class="form-control" id="Guardian" placeholder="Guardian" name="Guardian" required>
      <!contactnumber>
      <label for="contactnumber">Contact Number:</label>
      <input type="number" class="form-control" id="contactnumber" placeholder="+63" name="contactnumber" required>
      <!Civil Status>
      <label for="Civil Status">Civil Status:</label>
      <input type="text" class="form-control" id="Civil Status" placeholder="Civil Status" name="Civil Status" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <!Year Level>
      <label for="Year Level">Year Level:</label>
      <select id="cars" class="form-control">
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
      </select>
      <!Course>
      <label for="Year Level">Year Level:</label>
      <select id="cars" class="form-control">
        <option value="Information Technology">Information Technology</option>
        <option value="Civil Engineering">Civil Engineering</option>
        <option value="Psychology">Psychology</option>
        <option value="Chemistry">Chemistry</option>
      </select>
      <!School year>
       <!Guardian>
      <label for="School Year">School Year:</label>
      <input type="School Year" class="form-control" id="School Year" placeholder="School Year" name="School Year" required>

    </div>
   
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
