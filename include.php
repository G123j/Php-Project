<?php include 'db.php';?>


<?php
if(isset($_POST['save_employee'])) {
    $employee_id = filter_input(INPUT_POST, 'employee_id', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $employeName = filter_input(INPUT_POST, 'employeName', FILTER_SANITIZE_STRING);
    $designation = filter_input(INPUT_POST, 'designation', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $experience = filter_input(INPUT_POST, 'experience', FILTER_SANITIZE_STRING);

    // Image upload handling
    $profile_photo = $_FILES['profile_photo'];
    $pdf = $_FILES['experince_letter'];

    // Validate image uploads
    $allowed_image_types = array('image/jpeg', 'image/png', 'image/gif');
    $allowed_pdf_types = array('application/pdf');
    $max_file_size = 5 * 1024 * 1024; // 5 MB

    // Check profile photo
    $profile_photo_name = '';
    if ($profile_photo['size'] > 0 && in_array($profile_photo['type'], $allowed_image_types) && $profile_photo['size'] <= $max_file_size) {
        $profile_photo_name = uniqid() . '_' . $profile_photo['name'];
        move_uploaded_file($profile_photo['tmp_name'], 'uploads/Employe_profile/' . $profile_photo_name);
    }

    // Check PDF
    $pdf_name = '';
    if ($pdf['size'] > 0 && in_array($pdf['type'], $allowed_pdf_types) && $pdf['size'] <= $max_file_size) {
        $pdf_name = uniqid() . '_' . $pdf['name'];
        move_uploaded_file($pdf['tmp_name'], 'uploads/Pdf/' . $pdf_name);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO employees (employee_id, email, employeName, designation, address, experience, profile_photo, experience_letter) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("isssssss", $employee_id, $email, $employeName, $designation, $address, $experience, $profile_photo_name, $pdf_name);
    
    // Execute SQL statement
    if ($stmt->execute()) {
        echo "<script>alert('New record created successfully');</script>";
        echo "<script>window.location.href = 'add.php?addemployee=true';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!------------------------------------------registcompany-------------------------------------------------->

<?php
if(isset($_POST['save_company'])) {
    // Establish database connection (assuming $conn is already defined)
    

    $company_name = filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_STRING);
    $company_type = filter_input(INPUT_POST, 'company_type', FILTER_SANITIZE_STRING);
    $company_category = filter_input(INPUT_POST, 'company_category', FILTER_SANITIZE_STRING);
    $ceo_name = filter_input(INPUT_POST, 'ceo_name', FILTER_SANITIZE_STRING);
    $cover_image = filter_input(INPUT_POST, 'cover_image', FILTER_SANITIZE_STRING);
    $dashboard_Link = filter_input(INPUT_POST, 'dashboard_Link', FILTER_SANITIZE_URL);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phoneNo = filter_input(INPUT_POST, 'phoneNo', FILTER_SANITIZE_STRING);
    $another_phoneNo = filter_input(INPUT_POST, 'another_phoneNo', FILTER_SANITIZE_STRING);
    $instagramLink = filter_input(INPUT_POST, 'instagramLink', FILTER_SANITIZE_URL);
    $linkedInLink = filter_input(INPUT_POST, 'linkedInLink', FILTER_SANITIZE_URL);
    $twitterLink = filter_input(INPUT_POST, 'twitterLink', FILTER_SANITIZE_URL);
    $websiteLink = filter_input(INPUT_POST, 'websiteLink', FILTER_SANITIZE_URL);
    $Description = filter_input(INPUT_POST, 'Description', FILTER_SANITIZE_STRING);

    // Image upload handling
    $profile_photo = $_FILES['companyLogo'];

    // Validate image uploads
    $allowed_image_types = array('image/jpeg', 'image/png', 'image/gif');
    $max_file_size = 5 * 1024 * 1024; // 5 MB

    // Check profile photo
    $profile_photo_name = '';
    if ($profile_photo['size'] > 0 && in_array($profile_photo['type'], $allowed_image_types) && $profile_photo['size'] <= $max_file_size) {
        $profile_photo_name = uniqid() . '_' . $profile_photo['name'];
        move_uploaded_file($profile_photo['tmp_name'], 'uploads/Profile_photo/' . $profile_photo_name);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO companydetails (company_name, company_type, company_category, ceo_name, companyLogo, dashboard_Link, address, email, phoneNo, another_phoneNo, instagramLink, linkedInLink, twitterLink, websiteLink, Description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    

    
    // Bind parameters
   $stmt->bind_param("sssssssssssssss", $company_name, $company_type, $company_category, $ceo_name, $profile_photo_name, $dashboard_Link, $address, $email, $phoneNo, $another_phoneNo, $instagramLink, $linkedInLink, $twitterLink, $websiteLink, $Description);
    
    // Execute SQL statement
    if ($stmt->execute()) {
        echo "<script>alert('New record created successfully');</script>";
        echo "<script>window.location.href = 'add.php?addemployee=true';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
