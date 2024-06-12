
<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "form_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['Submit_edit']))
{
    $edit_ID = $_POST['edit_ID'];
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

    $query_update = "UPDATE details SET FirstName='$FirstName', LastName='$LastName', Email='$Email', PhoneNumber='$PhoneNumber', Password='$Password', Gender='$Gender', Address='$Address', Address2='$Address2', City='$City', State='$State', Zip='$Zip', Refrence='$Refrence', Feedback='$Feedback' WHERE ID='$edit_ID' ";

    $query_update_run = mysqli_query($conn, $query_update);

    if($query_update_run)
    {
        header("Location : index.php");
    }
    else
    {
        header("Location : index.php");
    }
}

if(isset($_POST['register_delete_btn']))
{
    $delete_id = $_POST['delete_id'];

    $reg_query = "DELETE FROM details WHERE id=' $delete_id' ";
    $reg_query_run = mysqli_query($conn, $reg_query);

    if($reg_query_run)
    {
        header("Location: index.php");
    }
    else
    {
        header("Location: index.php");
    }
}
?>