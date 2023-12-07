<?php
$title = 'Libraian';
require_once 'header.php';

?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                        <li><a href="javascript:avoid(0)">Libraian</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                 <div class="col-sm-12">
                    <div class="pull-left"><h4 class="section-subtitle"><b>All Libraian Data</b></h4></div>
                    <div class="pull-right"><a href="register.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i>Register</a></div>
                    <div class="clearfix"></div>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Date Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $result = mysqli_query($con, "SELECT * FROM `libraian`");
                                            while ($row = mysqli_fetch_assoc($result)){
                                        ?>
                                                    <tr>
                                                        <td><?= ucwords($row['firstname'] .' '. $row['lastname']) ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><?= $row['username'] ?></td>
                                                        <td><?= date('d-M-Y / h:i A', strtotime($row['datetime'])) ?></td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
<?php
require_once 'footer.php';
?>