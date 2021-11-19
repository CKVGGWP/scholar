<?php
include('includes/header.php');
include 'includes/auth.php';

?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
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
                                        <?php
include('includes/scripts.php');

?>