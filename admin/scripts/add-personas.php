<?php
// Include the database connection file
include '../../component/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $heading = $_POST['heading'];
    $message = $_POST['message'];

    // Check if image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Handle image upload
        $image = $_FILES['image']['name'];
        $temp_image = $_FILES['image']['tmp_name'];
        $upload_dir = "../../uploads/personas/";
        $target_image = $upload_dir . basename($image);

        // Move uploaded image to the specified directory
        if (move_uploaded_file($temp_image, $target_image)) {

            $MySqlCommand = "SELECT MAX(id) FROM persona";
            $Result = mysqli_query($conn, $MySqlCommand);
            $MaxID = mysqli_fetch_array($Result);
            $UserID = $MaxID['0'];
            $UserID = $UserID + 1; //2
            $Status = 1;

            // Insert data into database
            $sql = "INSERT INTO persona (id, name, heading, message, image, status) VALUES ('$UserID', '$name', '$heading', '$message', '$image', '$Status')";
            if ($conn->query($sql) === TRUE) {
                // echo "New member added successfully.";
                ?>
<script>alert("New member added successfully.")</script>
                <?php
                header('location:../personas-list.php');
                // echo  "<script>window.location='add-team-member.php'</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        // echo ($_FILES['image']['error']);
        echo "No image uploaded.";
    }
}

// Close the database connection
$conn->close();