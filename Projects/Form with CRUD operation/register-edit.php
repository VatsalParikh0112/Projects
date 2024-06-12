<?php include('header.php') ?>

<?php
  $servername = "localhost"; 
  $username = "root"; 
  $password = "";
  $dbname = "form_db";
  
  $conn = new mysqli($servername, $username, $password, $dbname);

  $ID = $_GET['ID'];
  $register_query = "SELECT * FROM details WHERE ID='$ID' ";
  $register_query_run = mysqli_query($conn, $register_query);

  if (mysqli_num_rows($register_query_run) > 0)
  {
    while($row = mysqli_fetch_array($register_query_run))
    {
  
  ?>

<body>
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h1>Edit</h1>
        </div>
        <div class="card-body">
          <form method="POST" action="code.php">
            <div class="row">
              <div class="form-group col-md-1">
                  <label>ID</label>
                  <input type="text" name="edit_ID" class="form-control" value="<?php echo $row['ID']; ?>">
              </div>
              <div class="form-group col-md-5">
                <label>First Name</label>
                <input type="text" class="form-control" name="FirstName" value = "<?php echo $row['FirstName']; ?>">
              </div>
              <div class="form-group col-md-5">
                <label>Last Name</label>
                <input type="text" class="form-control" name="LastName" value = "<?php echo $row['LastName']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label>Email</label>
                <input type="text" class="form-control" name="Email" value = "<?php echo $row['Email']; ?>">
              </div>
              <div class="form-group col-md-6">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="PhoneNumber" value = "<?php echo $row['PhoneNumber']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-9">
                <label>Password</label>
                <input type="text" class="form-control" name="Password" value = "<?php echo $row['Password']; ?>">
              </div>
              <div class="form-group col-md-3">
                <label>Gender</label>
                <select class="form-control" name="Gender" value = "<?php echo $row['Gender']; ?>">
                  <option>Male</option>
                  <option>Female</option>
                  <option>Transgender</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="Address" value = "<?php echo $row['Address']; ?>">
            </div>
            <div class="form-group">
              <label>Address 2</label>
              <input type="text" class="form-control" name="Address2" value = "<?php echo $row['Address2']; ?>">
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label>City</label>
                <input type="text" class="form-control" name="City" value = "<?php echo $row['City']; ?>">
              </div>
              <div class="form-group col-md-4">
                <label>State</label>
                <select class="form-control" name="State" value = "<?php echo $row['State']; ?>">
                  <option>Andhra Pradesh</option>
                  <option>Haryana</option>
                  <option>Manipur</option>
                  <option>Sikkim</option>
                  <option>Arunachal Pradesh</option>
                  <option>Himachal Pradesh</option>
                  <option>Meghalaya</option>
                  <option>Tamil Nadu</option>
                  <option>Assam</option>
                  <option>Jharkhand</option>
                  <option>Mizoram</option>
                  <option>Telangana</option>
                  <option>Bihar</option>
                  <option>Karnataka</option>
                  <option>Nagaland</option>
                  <option>Tripura</option>
                  <option>Chhattisgarh</option>
                  <option>Kerala</option>
                  <option>Odisha</option>
                  <option>Uttarakhand</option>
                  <option>Goa</option>
                  <option>Madhya Pradesh</option>
                  <option>Punjab</option>
                  <option>Uttar Pradesh</option>
                  <option>Gujarat</option>
                  <option>Maharashtra</option>
                  <option>Rajasthan</option>
                  <option>West Bengal</option>
                  <option>Andaman and Nicobar Islands</option>
                  <option>Dadra and Nagar Haveli</option>
                  <option>Daman and Diu</option>
                  <option>Jammu and Kashmir</option>
                  <option>Lakshadweep</option>
                  <option>Chandigarh</option>
                  <option>The Government of NCT Delhi</option>
                  <option>Ladakh</option>
                  <option>Puducherry</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label>Zip</label>
                <input type="text" class="form-control" name="Zip" value = "<?php echo $row['Zip']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                <label>Reference</label>
                <select class="form-control" name="Refrence" value = "<?php echo $row['Refrence']; ?>">
                  <option>Social Media</option>
                  <option>Website</option>
                  <option>Newspaper</option>
                  <option>Television</option>
                </select>
              </div>
              <div class="form-group col-md-9">
                <label>Feedback</label>
                <input type="text" class="form-control" name="Feedback" value = "<?php echo $row['Feedback']; ?>">
              </div>
            </div>
            <a href="index.php" class="btn btn-danger">Cancle</a>
            <a type="submit" class="btn btn-primary" name="Submit_edit">Update</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  }
  }
  else
  {
    echo "no data found bt this ID";
  }
?>
</body>

<?php include('footer.php')?>