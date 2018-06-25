            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header" data-background-color="green" data-header-animation="true">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <div class="card-actions">
                                        <button type="button" class="btn btn-default btn-simple btn-info" rel="tooltip" data-placement="bottom" title="Detail" data-toggle="modal" data-target="#dailyOrders">
                                            <i class="material-icons">remove_red_eye</i>
                                        </button>
                                    </div>
                                    <h4 class="card-title">Daily Orders</h4>
                                    <p class="category">
                                        <?=$percentage; ?> increase in today orders</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">access_time</i> LIVE from SIPEJA!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header" data-background-color="rose" data-header-animation="true">
                                    <div class="ct-chart" id="sampleViewsChart"></div>
                                </div>
                                <div class="card-content">
                                    <div class="card-actions">
                                        <button type="button" class="btn btn-default btn-simple btn-info" rel="tooltip" data-placement="bottom" title="Detail" data-toggle="modal" data-target="#numSample">
                                            <i class="material-icons">remove_red_eye</i>
                                        </button>
                                    </div>                                    
                                    <h4 class="card-title">Number of Samples</h4>
                                    <p class="category">Total Samples from SIPEJA</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">access_time</i> LIVE from SIPEJA
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header" data-background-color="blue">
                                    <div class="ct-chart" id="certificateTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Published Certificates</h4>
                                    <p class="category">Published Certificate from B4T </p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">access_time</i> LIVE!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                     <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">language</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Distribution of B4T Customers</h4>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="table-responsive table-sales">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/US.png">
                                                                </div>
                                                            </td>
                                                            <td>USA</td>
                                                            <td class="text-right">
                                                                2.920
                                                            </td>
                                                            <td class="text-right">
                                                                53.23%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/DE.png">
                                                                </div>
                                                            </td>
                                                            <td>Germany</td>
                                                            <td class="text-right">
                                                                1.300
                                                            </td>
                                                            <td class="text-right">
                                                                20.43%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/AU.png">
                                                                </div>
                                                            </td>
                                                            <td>Australia</td>
                                                            <td class="text-right">
                                                                760
                                                            </td>
                                                            <td class="text-right">
                                                                10.35%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/GB.png">
                                                                </div>
                                                            </td>
                                                            <td>United Kingdom</td>
                                                            <td class="text-right">
                                                                690
                                                            </td>
                                                            <td class="text-right">
                                                                7.87%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/RO.png">
                                                                </div>
                                                            </td>
                                                            <td>Romania</td>
                                                            <td class="text-right">
                                                                600
                                                            </td>
                                                            <td class="text-right">
                                                                5.94%
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="../assets/img/flags/BR.png">
                                                                </div>
                                                            </td>
                                                            <td>Brasil</td>
                                                            <td class="text-right">
                                                                550
                                                            </td>
                                                            <td class="text-right">
                                                                4.34%
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-md-offset-1">
                                            <div id="worldMap" class="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-tabs" data-background-color="orange">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Notification:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">bug_report</i> Warning
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">code</i> Info
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="optionsCheckboxes">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
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
            <!-- small modal -->
            <div class="modal fade" id="dailyOrders" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-small ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                            <h5 class="modal-title">Daily Orders Recap</h5>
                        </div>
                        <div class="modal-body">
                            <?php $order = json_decode($orders); ?>
                            <table class="table table-">
                                <tr>
                                    <td><b>Monday</b></td>
                                    <td>:</td>
                                    <td><?=$order[0]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Tuesday</b></td>
                                    <td>:</td>
                                    <td><?=$order[1]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Wednesday</b></td>
                                    <td>:</td>
                                    <td><?=$order[2]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Thursday</b></td>
                                    <td>:</td>
                                    <td><?=$order[3]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Friday</b></td>
                                    <td>:</td>
                                    <td><?=$order[4]; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer text-center">
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-simple">Got It!</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--    end small modal -->
            <!-- small modal -->
            <div class="modal fade" id="numSample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-small ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                            <h5 class="modal-title">Number of Samples Recap</h5><small>2018</small>
                        </div>
                        <div class="modal-body">
                            <?php $sampel = json_decode($sampels); ?>
                            <table class="table table-">
                                <tr>
                                    <td><b>NDT</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[0]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Metalografi</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[1]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Beton</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[2]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Kalibrasi</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[3]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Logam</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[4]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Bartek</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[5]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Otomotif</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[6]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Listrik</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[7]; ?></td>
                                </tr>                                
                                <tr>
                                    <td><b>EMC</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[8]; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Semen</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[9]; ?></td>
                                </tr>               
                                <tr>
                                    <td><b>Kimia</b></td>
                                    <td>:</td>
                                    <td><?=$sampel[10]; ?></td>
                                </tr>                                                 
                            </table>
                        </div>
                        <div class="modal-footer text-center">
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-simple">Got It!</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--    end small modal -->