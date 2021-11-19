<?php
include('includes/header.php');
include 'includes/auth.php';
?>

<div class="container-fluid px-4">
<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Dashboard</li> 
</ol>

<div class="row">

<div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Summary of Scholars</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#data">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

   
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Scholars per municipality</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#hi">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Expected graduates</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Number of Disqualified Scholars</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<div id="data">
<div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-body">
                              <h4>  DATA SUMMARY </h4>
                            </div>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>City/ Municipality</th>
                                <th>School Name</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>City/ Municipality</th>
                                <th>School Name</th>

                                </tr>
                                </tfoot>
            <?php

            include 'includes/db_user.php';

            $sql = "SELECT * from userinfo";
            if (mysqli_query($conn, $sql)) {
            echo "";
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            $count=1;
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
                while($row = mysqli_fetch_assoc($result)) { ?>
                <tbody>
                <tr>
                <th>
                <?php echo $row['userID']; ?>
                </th>
                <td>
                <?php echo $row['first_name']; ?>
                </td>
                <td>
                <?php echo $row['middle_name']; ?>
                </td>
                <td>
                <?php echo $row['last_name']; ?>
                </td>
                <td>
                <?php echo $row['city']; ?>
                </td>
                <td>
                <?php echo $row['sch_name']; ?>
                </td>
                </tr>
                </tbody>
                <?php
                $count++;
                }
                } else {
                echo '0 results';
                }
            ?>

            </table>
</div>
            </div>
            </div>
            <div id="hi">
               <?php echo "hello world"; ?>
               <div>

<?php
include('includes/footer.php');
include('includes/scripts.php');

?>