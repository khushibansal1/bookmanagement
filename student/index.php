<?php

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
                                <div class="panel  project-detail">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-sm-12 p-project">
                                    <div class="p-progress"><span class="donut" style="display: none;">63/100</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 12.19641176603649 75.804619766791 L 26.775784314464715 62.11367764821722 A 25 25 0 1 0 45 20" fill="#88b93c"></path><path d="M 12.19641176603649 75.804619766791 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 20 A 25 25 0 0 0 26.775784314464715 62.11367764821722" fill="#ececec"></path></svg><span class="value"> 63%</span></div>
                                    <div class="p-data">
                                        <h5 class="p-name">Update the Profile System, The Great Expreance</h5>
                                        <div class="p-update">Last update: <span class="highlight">3 days ago</span></div>
                                        <div class="p-status"><small>Status:</small> <span class="badge x-warning">Puased</span></div>
                                        <div class="p-deadline"><small>Deadline: </small><b>1 week</b></div>
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
                                        <h3 class="panel-title">Message for Admin</h3>
                                            <div class="panel-actions">
                                                <ul>
                                                    <li class="action toggle-panel panel-expand"><span></span></li>
                                                    <li class="action"><span class="fa fa-bars action" aria-hidden="true"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    <div class="panel-content">
                                    <div class="panel-content">
                                <h4 class="mb-md">Please enter this importent Massage</h4>
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="question" class="control-label">Question</label>
                                        <textarea class="form-control" rows="3" id="question" placeholder="Write your question ?"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                
                </div>
            </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    
<?php
require_once 'footer.php';
?>