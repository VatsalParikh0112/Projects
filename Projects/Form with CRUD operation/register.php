<?php include('header.php')?>
<?php include('code.php') ?>

<?php
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $Email = $_POST['Email'];
  $PhoneNumber = $_POST['PhoneNumber'];
  $Password = $_POST['Password'];
  $Gender = $_POST['Gender'];
  $Address = $_POST['Address'];
  $Address2 = $_POST['Address2'];
  $City = $_POST['City'];
  $State = $_POST['State'];
  $Zip = $_POST['Zip'];
  $Refrence = $_POST['Refrence'];
  $Feedback = $_POST['Feedback'];
  
  $sql = "INSERT INTO details (FirstName, LastName, Email, PhoneNumber, Password, Gender, Address, Address2, City, State, Zip, Refrence, Feedback) VALUES ('$FirstName', '$LastName', '$Email', '$PhoneNumber', '$Password', '$Gender', '$Address', '$Address2', '$City', '$State', '$Zip', '$Refrence', '$Feedback')";

  if ($conn->query($sql) === TRUE) {
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<body>
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h1>Register/Add</h1>
        </div>
        <div class="card-body">
          <form method="POST" action="register.php">
            <div class="row">
              <div class="form-group col-md-6">
                <label>First Name</label>
                <input type="text" class="form-control" name="FirstName">
              </div>
              <div class="form-group col-md-6">
                <label>Last Name</label>
                <input type="text" class="form-control" name="LastName">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label>Email</label>
                <input type="text" class="form-control" name="Email">
              </div>
              <div class="form-group col-md-6">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="PhoneNumber">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-9">
                <label>Password</label>
                <input type="text" class="form-control" name="Password">
              </div>
              <div class="form-group col-md-3">
                <label>Gender</label>
                <select class="form-control" name="Gender">
                  <option selected>Choose...</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Transgender</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="Address">
            </div>
            <div class="form-group">
              <label>Address 2</label>
              <input type="text" class="form-control" name="Address2">
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label>City</label>
                <input type="text" class="form-control" name="City">
              </div>
              <div class="form-group col-md-4">
                <label>State</label>
                <select class="form-control" name="State">
                  <option selected>Choose...</option>
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
                <input type="text" class="form-control" name="Zip">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                <label>Reference</label>
                <select class="form-control" name="Refrence">
                  <option selected>Choose...</option>
                  <option>Social Media</option>
                  <option>Website</option>
                  <option>Newspaper</option>
                  <option>Television</option>
                </select>
              </div>
              <div class="form-group col-md-9">
                <label>Feedback</label>
                <input type="text" class="form-control" name="Feedback">
              </div>
            </div>
            <a href="index.php" class="btn btn-danger">Cancle</a>
            <a type="submit" class="btn btn-primary" name="Submit" href="index.php">Submit</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include('footer.php')?>