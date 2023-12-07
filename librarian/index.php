<?php
$title = 'Dashboard';
require_once 'header.php';

?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12">
                        <div class="row">
                            <!--BOX Style 2-->
                            <?php
                            $students = mysqli_query($con, "SELECT * FROM `students`");
                            $total_student = mysqli_num_rows($students);
                            ?>

                            <!--BOX Style 3-->
                            <?php
                            $libraian = mysqli_query($con, "SELECT * FROM `libraian`");
                            $total_libraian = mysqli_num_rows($libraian);
                            ?>

                            <!--BOX Style 4-->
                            <?php
                            $books = mysqli_query($con, "SELECT * FROM `books`");
                            $total_books = mysqli_num_rows($books);

                            $books_qty = mysqli_query($con, "SELECT SUM(`book_qty`) as total FROM `books`");
                            $qty = mysqli_fetch_assoc($books_qty);
                            
                            $books_a_qty = mysqli_query($con, "SELECT SUM(`available_qty`) as total FROM `books`");
                            $a_qty = mysqli_fetch_assoc($books_a_qty);
                            ?>

                    <!--BOX Style 1-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-envelope color-lighter-1"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-lighter-1">New Messages</h4>
                                                    <h1 class="title color-light"> 124</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--BOX Style 2-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-darker-2 color-light">
                                    <a href="students.php">
                                        <div class="panel-content">
                                            <h1 class="title color-light-1"> <i class="fa fa-users"></i> <?= $total_student ?> </h1>
                                            <h4 class="subtitle">Total Students</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--BOX Style 3-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="libraian.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-user"></i> <?= $total_libraian ?> </h1>
                                            <h4 class="subtitle color-darker-1">Total libraian</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--BOX Style 4-->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-light color-darker-2">
                                    <a href="manage-books.php">
                                        <div class="panel-content">
                                            <h1 class="title"> <i class="fa fa-book"></i> Total Books</h1>
                                            <h4 class="subtitle"><?= $total_books .' ('. $qty['total'].' - '. $a_qty['total'].')' ?></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="row animated fadeInUp">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 col-lg-6">
                            <div class="panel">
                                <div class="panel-header  panel-info">
                                    <h3 class="panel-title">Student Info</h3>
                                    <div class="panel-actions">
                                        <ul>
                                            <li class="action toggle-panel panel-expand"><span></span></li>
                                            <a href="students.php"><li class="action"><span class="fa fa-bars action" aria-hidden="true"></span></li></a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-content">

                                    <div class="row animated fadeInUp">
                                        <div class="col-sm-12">
                                                
                                                    <div class="clearfix"></div>
                                                        <div class="panel">
                                                            <div class="panel-content">
                                                                <div class="table-responsive">
                                                                    <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Roll</th>
                                                                            <th>Reg. No</th>
                                                                            <th>Phone</th>
                                                                            <th>Date</th>
                                                                        </tr>
                                                                    </thead>
                                                            <tbody>
                                                                <?php
                                                                    $result = mysqli_query($con, "SELECT * FROM `students`");
                                                                    while ($row = mysqli_fetch_assoc($result)){
                                                                ?>
                                                                            <tr>
                                                                                <td><?= ucwords($row['fname'] .' '. $row['lname']) ?></td>
                                                                                <td><?= $row['roll'] ?></td>
                                                                                <td><?= $row['reg'] ?></td>
                                                                                <td><?= $row['phone'] ?></td>
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
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-6">
                            <div class="panel">
                                <div class="panel-header panel-success">
                                    <h3 class="panel-title">Recent Massage </h3>
                                    
                                </div>
                                <div class="panel-content">
                            <div class="row">
                                <!--SINGLE ITEM OPEN-->
                                <div class="col-md-12">
                                    <h5><b>Click Name Show Massage</b></h5>
                                    <div class="panel-group" id="accordion_group">
                                        <div class="panel panel-accordion">
                                            <div class="panel-header bg-scale-0">
                                                <a class="panel-title collapsed" data-toggle="collapse" data-parent="#accordion_group" href="#accordion1" aria-expanded="false">
                                                    Pranto Chandro Braman
                                                </a>
                                            </div>
                                            <div id="accordion1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-content">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-accordion ">
                                            <div class="panel-header bg-scale-0">
                                                <a class="panel-title collapsed" data-toggle="collapse" data-parent="#accordion_group" href="#accordion2" aria-expanded="false">
                                                    Monish Roy
                                                </a>
                                            </div>
                                            <div id="accordion2" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="panel-content">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-accordion">
                                            <div class="panel-header bg-scale-0">
                                                <a class="panel-title collapsed" data-toggle="collapse" data-parent="#accordion_group" href="#accordion3" aria-expanded="false">
                                                    Durjoy Roy
                                                </a>
                                            </div>
                                            <div id="accordion3" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="panel-content">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
            </div>
            <a href="#"><button class="btn btn-primary" onclick="swal('Success','thanks','success')">Click Me</button></a>
               
<?php
require_once 'footer.php';
?>