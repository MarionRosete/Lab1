
<div class="container">
  <div class="card-body">
    <h2>Form Validation</h2>

    <form action="records.php" method="POST" class="needs-validation">
      <div class="form-row">
        <div class="form-group col-mid-6">
          <label for="fname">Firstname:</label>
          <input type="text" class="form-control" id="fname" placeholder="Firstname" name="fname" required>      
        </div>
        <div class="form-group col-mid-6">
          <label for="lname">Lastname:</label>
          <input type="text" class="form-control" id="lname" placeholder="Lastname" name="lname" required>
        </div>
        <div class="form-group col-mid-6">
          <label for="mname">Middlename:</label>
          <input type="text" class="form-control" id="mname" placeholder="Middlename" name="mname" required>
        </div>
        <div class="form-group col-mid-6">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
        </div>  
        <div class="form-group col-mid-6">     
          <label for="address">Birthday:</label>
          <input type="date" class="form-control" id="birthday" name="birthday">
        </div>  
        <div class="form group col-mid-6">
          <label for="pob">Place of Birth:</label>
          <input type="text" class="form-control" id="pob" placeholder="Place of Birth" name="pob" required>
        </div>
        <div class="form group col-mid-6">
          <label for="gender">Gender:</label><br>
          <input type="radio"  id="gender"  name="gender" value="male" size="5" required>Male
          <input type="radio"  id="gender"  name="gender" value="Female" size="5" required>Female<br>
        </div>
        <div class="form group col-mid-6">
          <label for="Guardian">Guardian:</label>
          <input type="text" class="form-control" id="Guardian" placeholder="Guardian" name="Guardian" required>
        </div>
        <div class="form group col-mid-6">
          <label for="contactnumber">Contact Number:</label>
          <input type ="number" class="form-control" id="contactnumber" placeholder="+63" name="contactnumber" required>
        </div>
        <div class="form group col-mid-6">
          <label for="Civil Status">Civil Status:</label>
          <input type="text" class="form-control" id="Civil Status" placeholder="Civil Status" name="Civil Status" required>
        </div>
        <div class="form group col-mid-6">
          <label for="yearlevel">Year Level:</label>
          
          <select name="yearlevel[]"  class="form-control">
            <option value="1st Year" >1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
          </select>
          
           
        </div> 
        <div class="form group col-mid-6 ">
          <label for="Year Level">Course:</label> 
          <select name = "course[]" class="form-control ">
            <option value="Information Technology">Information Technology</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Psychology">Psychology</option>
            <option value="Chemistry">Chemistry</option>
          </select>
        </div>
          <div class="form group col-mid-6">
          <label for="School Year">School Year:</label>
          <input type="School Year" class="form-control" id="School Year" placeholder="School Year" name="School Year" required>
        </div>
      </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>