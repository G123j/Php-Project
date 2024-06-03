<?php include "header.php";?>
<?php include "db.php";?>

<?php  
if (isset($_GET['add_admin'])){
   ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class=".card-title">Add Admin</h4>
                                    <p class="text-muted mb-0">
                                        By adding <code>.row</code> & <code>.g-2</code>, you can have control over the
                                        gutter width in as well the inline as block direction.
                                    </p>
                                </div>
                                <div class="card-body">
                                <form action="include.php" method="POST" enctype="multipart/form-data">
                                <?php
                                $sql = "SELECT COUNT(*) AS data from admin";
                                $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                ?>
                                        <div class="row g-2">
                                              <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">EmployeCount</label>
                                                <input type="number" class="form-control" id="inputEmail4"
                                                    placeholder="EmployeeCount" value="<?php echo $row['data']; ?>"readonly>
                                            </div>

                                            <?php
                                                $data = "select count(*) as count from employees";
                                                $result = $conn->query($data);
                                                $row = $result->fetch_assoc();
                                                $count = $row['count'];
                                                $max = $count + 1;
                                                $add = 'VDPL-' . $max;
                                                ?>
                                                <div class="mb-3 col-md-4">
                                                    <label for="inputEmail4" class="form-label">Employee ID</label>
                                                    <input type="text" class="form-control" name="employee_id" value="<?php echo $add; ?>" id="inputEmail4"
                                                        placeholder="Employee ID" readonly>
                                                </div>

                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type="text" class="form-control" name="employeName"id="inputEmail4"
                                                    placeholder="EmployeeName">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type="text" class="form-control" name="designation" id="inputEmail4"
                                                    placeholder="EmployeeDesignation">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="address" id="inputAddress"
                                                placeholder="Full Address">
                                        </div>

                                        
                                        <div class="mb-3">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2"
                                                placeholder="Apartment, studio, or floor">
                                        </div>


                                        <div class="row g-2">
                                            <div class="mb-3 col-md-4">
                                                <label for="inputCity" class="form-label">Experince</label>
                                                <input type="text" class="form-control" name="experience" id="inputCity">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="inputCity" class="form-label">Experince Letter</label>
                                                <input type="file" class="form-control" name="experince_letter" id="inputCity">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="inputCity" class="form-label">IdProof[ AadharCard ]</label>
                                                <input type="file" class="form-control" name="profile_photo" id="inputCity" accept=".pdf">

                                            </div>
                                        </div>
                                        <button type="submit" name="save_employee"class="btn btn-primary">Save Employee</button>
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> 
       
 <?php       
}
?>


<!-- ---------------------------------------------------------------------------------Add Holiday-------------------------------------------------------------------------------------------------------------------------- -->

<?php  
if (isset($_GET['add_holiday'])){
   ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class=".card-title">HoliDay Management</h4>
                                    <p class="text-muted mb-0">
                                        By adding <code>.row</code> & <code>.g-2</code>, you can have control over the
                                        gutter width in as well the inline as block direction.
                                    </p>
                                </div>
                                <div class="card-body">
                                <form action="include.php" method="POST" enctype="multipart/form-data">
                                        <div class="row g-2">
                                              <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Holiday Count</label>
                                                <input type="number" class="form-control" id="inputEmail4"
                                                    placeholder="EmployeeCount" readonly>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Occasion</label>
                                                <input type="text" class="form-control" name="holiday_name" id="inputEmail4"
                                                    placeholder="Enter Occasions Name"  required>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Days</label>
                                                <input type="email" class="form-control" name="days" id="inputEmail4"
                                                    placeholder="Enter How Many Days ?" required>
                                            </div>
                                          
                                        </div>

                                        <button type="submit" name="save_employee"class="btn btn-primary">Post Holiday</button>
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> 
       
 <?php       
}
?>
<!----------------------------------------------------------------------------------Register Company Details-------------------------------------------------------------------------------------------------------------------------- -->

<?php  
if (isset($_GET['register_company'])) {
?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Row</h4>
                                <p class="text-muted mb-0">
                                    By adding <code>.row</code> & <code>.g-2</code>, you can have control over the
                                    gutter width in as well the inline as block direction.
                                </p>
                            </div>
                            <div class="card-body">
                                <form action="include.php" method="POST" enctype="multipart/form-data">
                                    <div class="row g-2">
                                        <div class="mb-3 col-md-4">
                                            <label for="company_name" class="form-label">CompanyName</label>
                                            <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Your Company Name" required>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label for="company_type" class="form-label">CompanyType</label>
                                            <input type="text" class="form-control" name="company_type" id="company_type" placeholder="CompanyType" required>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label for="company_category" class="form-label">CompanyCategory</label>
                                            <input type="text" class="form-control" name="company_category" id="company_category" placeholder="Enter Your Company Category" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <input type="text" class="form-control" name="ceo_name" id="ceo_name" placeholder="Who Owns This Company" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <input type="file" class="form-control" name="companyLogo" id="company_logo" placeholder=""  required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Full Address" required>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <input type="text" class="form-control" name="phoneNo" id="phoneNo" placeholder="Enter phoneNo" required>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <input type="text" class="form-control" name="another_phoneNo" id="another_phoneNo" placeholder="Enter another_phoneNo" required>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <input type="text" class="form-control" name="email" id="company_email" placeholder="Enter email" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <input type="text" class="form-control" name="instagramLink" id="instagramLink" placeholder="Enter instagramLink" required>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <input type="text" class="form-control" name="linkedInLink" id="linkedInLink" placeholder="Enter linkedInLink" required>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <input type="text" class="form-control" name="twitterLink" id="twitterLink" placeholder="Enter twitterLink" required>
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <input type="text" class="form-control" name="websiteLink" id="websiteLink" placeholder="Enter WebsiteLink" required>
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <input type="text" class="form-control" name="dashboard_Link" id="dashboard_Link" placeholder="Enter dashboard_Link" required>
                                        </div>

                                        
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label for="experience" class="form-label">Description</label>
                                            <textarea class="form-control" rows="12"  name="Description" id="description"  required></textarea> 
                                        </div>
                                    </div>
                                    <button type="submit" name="save_company" class="btn btn-primary">Register Company</button>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </div>
<?php       
}
?>

<!-- ---------------------------------------------------------------------------------Add Project-------------------------------------------------------------------------------------------------------------------------- -->

<?php  
if (isset($_GET['add_service'])){
   ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class=".card-title">Add Your Service</h4>
                                    <p class="text-muted mb-0">
                                        By adding <code>.row</code> & <code>.g-2</code>, you can have control over the
                                        gutter width in as well the inline as block direction.
                                    </p>
                                </div>
                                <div class="card-body">
                                <form action="include.php" method="POST" enctype="multipart/form-data">
                                        <div class="row g-2">
                                              <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">ServiceNo</label>
                                                <input type="number" class="form-control" id="inputEmail4"
                                                    placeholder="Service No." readonly>
                                            </div>


                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Add Your ServiceName</label>
                                                <input type="text" class="form-control" name="service_name" id="inputEmail4"
                                                    placeholder="Enter ServiceName"  required>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Add Your ServiceCharges</label>
                                                <input type="text" class="form-control" name="service_charges" id="inputEmail4"
                                                    placeholder="Enter ServiceName"  required>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">ServiceDuration</label>
                                                <input type="text" class="form-control" name="service_duration" id="inputEmail4"
                                                    placeholder="Enter ServiceDuration"  required>
                                            </div>


                                            <div class="mb-3 col-md-4">
                                            <label for="inputEmail4" class="form-label">ServiceDuration</label>
                                            <textarea type="text" class="form-control" name="service_duration" id="inputEmail4" placeholder="Enter ServicDescription" required></textarea>
                                        </div>



                                        </div>
                                        <button type="submit" name="save_employee"class="btn btn-primary">Save Service</button>
                                    </form>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
 <?php       
}
?>


<!-- ---------------------------------------------------------------------------------Add Leaves [Employe]-------------------------------------------------------------------------------------------------------------------------- -->

<?php  
if (isset($_GET['addleaves'])){
   ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class=".card-title">Leaves Management</h4>
                                    <p class="text-muted mb-0">
                                        By adding <code>.row</code> & <code>.g-2</code>, you can have control over the
                                        gutter width in as well the inline as block direction.
                                    </p>
                                </div>
                                <div class="card-body">
                                <form action="include.php" method="POST" enctype="multipart/form-data">
                                        <div class="row g-2">


                                              <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Allowted Leaves</label>
                                                <input type="number" class="form-control" value="<?php echo $row['']; ?>" id="inputEmail4"
                                                    placeholder="EmployeeCount" >
                                            </div>



                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Leave Subject</label>
                                                <input type="text" class="form-control" name="leave_subject" id="inputEmail4"
                                                    placeholder="Enter Occasions Name"  required>
                                            </div>

                                           


                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Leave Message</label>
                                                <input type="email" class="form-control" name="Leave_message" id="inputEmail4"
                                                    placeholder="Enter How Many Days ?" required>
                                            </div>


                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Leave Day</label>
                                                <input type="number" class="form-control" name="leave_subject" id="leavecount"
                                                    placeholder="Enter Occasions Name" onkeyup="myfun();" required>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Remaining Leave</label>
                                                <input type="text" class="form-control" name="Leave_message" id="remainingleave"
                                                    placeholder="Enter How Many Days ?" required>
                                            </div>

                                            <script>
                                                function myfun() {
                                                    const allowedLeaves = 25; // Assuming a total of 25 allowed leaves
                                                    const getLeaveCount = parseInt(document.getElementById('leavecount').value); // Get the leave count entered by the user
                                                    const remainingLeaves = allowedLeaves - getLeaveCount; // Calculate remaining leaves
                                                    
                                                    if (remainingLeaves < 1) {
                                                    alert('Sorry, no more leave days available.');
                                                    document.getElementById('remainingleave').value = ''; // Clear the input field
                                                    } else {
                                                    document.getElementById('remainingleave').value = remainingLeaves; // Display remaining leaves
                                                    }
                                                }
                                            </script>




                                         

                                             <div class="mb-3 col-md-4">
                                                <label for="inputEmail4" class="form-label">Remaing Leaves</label>
                                                <input type="number" class="form-control" id="inputEmail4"
                                                    placeholder="EmployeeCount" readonly>
                                            </div>
                                          
                                        </div>
                                        <button type="submit" name="save_employee"class="btn btn-primary">Post Holiday</button>
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> 
       
 <?php       
}
?>

<?php include "footer.php";?>