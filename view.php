<?php include "header.php";?>
<?php include "dbgaurav.php";?>



<?php  
if (isset($_GET['viewemployee'])) {
    $stmt = $conn->prepare("SELECT * FROM employees");
    $stmt->execute();
    $result = $stmt->get_result();
    ?>

    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class=".card-title">Basic Data Table</h4>
                                <p class="text-muted mb-0">
                                    DataTables has most features enabled by default, so all you need to do to use it
                                    with your own tables is to call the construction function:
                                    <code>$().DataTable();</code>. KeyTable provides Excel like cell navigation on
                                    any table. Events (focus, blur, action etc) can be assigned to individual
                                    cells, columns, rows or all cells.
                                </p>
                            </div>
                            <div class="card-body">
                            <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>EmployeeID</th>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Address</th>
                                            <th>Experience</th>
                                            <th>ProfilePhoto</th>
                                            <th>Experience Letter</th>
                                            <th>Timestamp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $i = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>". $i .  "</td>";
                                            echo "<td>" . $row['employee_id'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>"; // Displaying email
                                            echo "<td>" . $row['employeName'] . "</td>"; // Correcting field name
                                            echo "<td>" . $row['designation'] . "</td>";
                                            echo "<td>" . $row['address'] . "</td>";
                                            echo "<td>" . $row['experience'] . "</td>";
                                            echo "<td><img src='./uploads/Employe_profile/" . $row['profile_photo'] . "' style='border-radius: 50%; height: 70px; width: 70px;'></td>";
                                            echo "<td><a href='./uploads/Experience_letters/" . $row['experience_letter'] . "' download>Download</a></td>";

                                            echo "<td>" . $row['timestamp'] . "</td>";
                                            echo "</tr>";
                                            $i++; // Incrementing $i to keep track of row numbers
                                        }
                                    ?>

                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
            </div> <!-- container -->
        </div> <!-- content -->
    </div>

    <?php  

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>

<!-----------------------------------------------------------------------Employes Laves Mangement------------------------------------------------------------------------------------------------------------------->

<?php  
if (isset($_GET['employee_leaves'])) {
    $stmt = $conn->prepare("SELECT * FROM employeleaves_count");
    $stmt->execute();
    $result = $stmt->get_result();
    ?>

    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class=".card-title">Basic Data Table</h4>
                                <p class="text-muted mb-0">
                                    DataTables has most features enabled by default, so all you need to do to use it
                                    with your own tables is to call the construction function:
                                    <code>$().DataTable();</code>. KeyTable provides Excel like cell navigation on
                                    any table. Events (focus, blur, action etc) can be assigned to individual
                                    cells, columns, rows or all cells.
                                </p>
                            </div>
                            <div class="card-body">
                            <table id="scroll-horizontal-datatable" class="table table-striped w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>EmployeeID</th>
                                            <th>Allowted Leaves</th>
                                            <th>Total Leaves</th>
                                            <th>Remaning Leaves</th>
                                       
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $i = 1;
                                        
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>". $i .  "</td>";
                                            echo "<td>" . $row['employee_id'] . "</td>";
                                            echo "<td>" . $row['Leaves_allot'] . "</td>"; // Displaying email
                                            echo "<td>" . $row['total_leaves'] . "</td>"; // Correcting field name
                                            echo "<td>" . $row['remaning_leaves'] . "</td>";
                                            echo "</tr>";
                                            $i++; 
                                        }
                                    ?>

                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
            </div> <!-- container -->
        </div> <!-- content -->
    </div>

    <?php  

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>


<!-----------------------------------------------------------------------Company Details------------------------------------------------------------------------------------------------------------------->

<?php
if (isset($_GET['company_details'])) {
    $id = 1; // Assuming you want to fetch data for ID 1
    $stmt = $conn->prepare('SELECT * FROM `companydetails` WHERE company_id = ?');
    $stmt->bind_param('i', $id); // 'i' denotes integer type
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
?>
<div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="profile-bg-picture" style="background-image: url(assets/images/bg-profile.jpg); background-position: bottom;"></div>
                            <div class="p-sm-3 p-0 profile-user">
                                <div class="row g-2">
                                    <div class="col-lg-3  d-none d-lg-block">
                                        <div class="profile-user-img p-2 text-start">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail avatar-lg rounded">
                                        </div>
                                        <div class="text-start p-1 pt-2">
                                            <h4 class=" fs-17 ellipsis"><?php echo $row['company_name'];?></h4>
                                            <p class="font-13"><?php echo $row['company_type'];?></p>
                                            <p class="text-muted mb-0"><small><?php echo $row['company_category'];?></small></p>

                                            <div class="d-flex pt-3 align-items-center justify-content-center flex-xl-nowrap flex-lg-wrap justify-content-md-start">
                                                <button type="button" class="btn btn-soft-danger me-sm-2 mt-1">
                                                    <i class="mdi mdi-cog align-text-bottom me-1 fs-16 lh-1"></i>
                                                    Edit Profile
                                                </button>
                                                <button class="btn btn-soft-info mt-1" href="#"> <i class="mdi mdi-check-all fs-18 me-1 lh-1"></i>Following</button>
                                            </div>


                                        </div>
                                        <div class="pt-3 ps-2">
                                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2"><?php echo $row['company_name'];?></span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2"><?php echo $row['phoneNo'];?></span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2"><?php echo $row['email'];?></span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2"><?php echo $row['address'];?></span></p>
                                        </div>

                                        <div class="text-start mt-4">
                                            <h4 class="">Follow On:</h4>
                                            <div class="d-flex gap-2 mt-3">
                                                <a href="<?php echo $row['instagramLink'];?>" class="btn px-2 py-1 btn-soft-primary"><i class="mdi mdi-facebook"></i></a>
                                                <a href="<?php echo $row['instagramLink'];?>" class="btn px-2 py-1 btn-soft-danger"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="<?php echo $row['instagramLink'];?>" class="btn px-2 py-1 btn-soft-info"><i class="mdi mdi-twitter"></i></a>
                                                <a href="<?php echo $row['instagramLink'];?>" class="btn px-2 py-1 btn-soft-dark"><i class="mdi mdi-github"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 bg-light-subtle">
                                        <div class="profile-content">
                                            <div class="nav nav-pills nav-justified gap-0 p-3 text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                </li>
                                                <li class="nav-item mt-2"><a class="nav-link fs-5 p-2 active" data-bs-toggle="tab" data-bs-target="#aboutme" type="button" role="tab" aria-controls="home" aria-selected="true" href="#aboutme">About</a>
                                                </li>
                                                <li class="nav-item mt-2"><a class="nav-link fs-5 p-2" data-bs-toggle="tab" data-bs-target="#user-activities" type="button" role="tab" aria-controls="home" aria-selected="true" href="#user-activities">Activities</a></li>
                                                <li class="nav-item mt-2"><a class="nav-link fs-5 p-2" data-bs-toggle="tab" data-bs-target="#edit-profile" type="button" role="tab" aria-controls="home" aria-selected="true" href="#edit-profile">Settings</a></li>
                                                <li class="nav-item mt-2"><a class="nav-link fs-5 p-2" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="home" aria-selected="true" href="#projects">Projects</a></li>

                                            </div>

                                            <div class="tab-content m-0 p-2 p-sm-4 " id="v-pills-tabContent">

                                                <div class="tab-pane active" id="aboutme" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                    <div class="profile-desk">
                                                        <h5 class="text-uppercase fs-17 text-dark"><?php echo $row['ceo_name'];?></h5>
                                                        <div class="designation mb-3">PRODUCT DESIGNER (UX / UI / Visual
                                                            Interaction)</div>
                                                        <p class="text-muted fs-16">
                                                        <?php echo $row['Description'];?>
                                                        </p>

                                                        <h5 class="mt-4 fs-17 text-dark">Contact Information</h5>
                                                        <table class="table table-condensed table-bordered mb-0 border-top table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Url</th>
                                                                    <td>
                                                                        <a href="#" class="ng-binding">
                                                                            www.example.com
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td>
                                                                        <a href="#" class="ng-binding">
                                                                            jonathandeo@example.com
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <th scope="row">Phone</th>
                                                                    <td class="ng-binding">(123)-456-7890</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Skype</th>
                                                                    <td>
                                                                        <a href="#" class="ng-binding">
                                                                            jonathandeo123
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div> <!-- end profile-desk -->
                                                </div> <!-- about-me -->
                                                <!-- Activities -->
                                                <div id="user-activities" class="tab-pane">
                                                    <div class="timeline-2">
                                                        <div class="time-item">
                                                            <div class="item-info ms-3 mb-3">
                                                                <div class="text-muted">5 minutes ago</div>
                                                                <p><strong><a href="#" class="text-info">John
                                                                            Doe</a></strong>Uploaded a photo</p>
                                                                <img src="assets/images/small/small-3.jpg" alt="" height="40" width="60" class="rounded-1">
                                                                <img src="assets/images/small/small-4.jpg" alt="" height="40" width="60" class="rounded-1">
                                                            </div>
                                                        </div>

                                                        <div class="time-item">
                                                            <div class="item-info ms-3 mb-3">
                                                                <div class="text-muted">30 minutes ago</div>
                                                                <p><a href="#" class="text-info">Lorem</a> commented your
                                                                    post.
                                                                </p>
                                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                        elit.
                                                                        Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                                </p>
                                                            </div>
                                                        </div>

                                                           <div class="time-item">
                                                            <div class="item-info ms-3 mb-3">
                                                                <div class="text-muted">59 minutes ago</div>
                                                                <p><a href="#" class="text-info">Jessi</a> attended a meeting
                                                                    with<a href="#" class="text-success">John Doe</a>.</p>
                                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                        elit.
                                                                        Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="time-item">
                                                            <div class="item-info ms-3 mb-3">
                                                                <div class="text-muted">5 minutes ago</div>
                                                                <p><strong><a href="#" class="text-info">John
                                                                            Doe</a></strong> Uploaded 2 new photos</p>
                                                                <img src="assets/images/small/small-2.jpg" alt="" height="40" width="60" class="rounded-1">
                                                                <img src="assets/images/small/small-1.jpg" alt="" height="40" width="60" class="rounded-1">
                                                            </div>
                                                        </div>

                                                        <div class="time-item">
                                                            <div class="item-info ms-3 mb-3">
                                                                <div class="text-muted">30 minutes ago</div>
                                                                <p><a href="#" class="text-info">Lorem</a> commented your
                                                                    post.
                                                                </p>
                                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                        elit.
                                                                        Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="time-item">
                                                            <div class="item-info ms-3 mb-3">
                                                                <div class="text-muted">59 minutes ago</div>
                                                                <p><a href="#" class="text-info">Jessi</a> attended a meeting
                                                                    with<a href="#" class="text-success">John Doe</a>.</p>
                                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                        elit.
                                                                        Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- settings -->
                                                <div id="edit-profile" class="tab-pane">
                                                    <div class="user-profile-content">
                                                        <form>
                                                            <div class="row row-cols-sm-2 row-cols-1">
                                                                <div class="mb-2">
                                                                    <label class="form-label" for="FullName">Full
                                                                        Name</label>
                                                                    <input type="text" value="John Doe" id="FullName" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="Email">Email</label>
                                                                    <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="web-url">Website</label>
                                                                    <input type="text" value="Enter website url" id="web-url" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="Username">Username</label>
                                                                    <input type="text" value="john" id="Username" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="Password">Password</label>
                                                                    <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="RePassword">Re-Password</label>
                                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                                </div>
                                                                <div class="col-sm-12 mb-3">
                                                                    <label class="form-label" for="AboutMe">About Me</label>
                                                                    <textarea style="height: 125px;" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-content-save-outline me-1 fs-16 lh-1"></i> Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="projects" class="tab-pane">
                                                    <div class="row m-t-10">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive ">
                                                                <table class="table table-bordered mb-0 table-striped table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Project Name</th>
                                                                            <th>Start Date</th>
                                                                            <th>Due Date</th>
                                                                            <th>Status</th>
                                                                            <th>Assign</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="table-group-divider">
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Techmin Admin</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-info">Work
                                                                                    in Progress</span></td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Techmin Frontend</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-success">Pending</span>
                                                                            </td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Techmin Admin</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-pink">Done</span>
                                                                            </td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>Techmin Frontend</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-purple">Work
                                                                                    in Progress</span></td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>Techmin Admin</td>
                                                                            <td>01/01/2015</td>
                                                                            <td>07/05/2015</td>
                                                                            <td><span class="badge bg-warning">Coming
                                                                                    soon</span></td>
                                                                            <td>Techzaa</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php } ?>


<?php include "footer.php";?>