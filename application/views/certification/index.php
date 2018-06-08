            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-text" data-background-color="green">
                                    <h4 class="card-title">BIOS Sertification Recap</h4>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Kode Satker &nbsp;: 247140 <br> Indicator &nbsp;&nbsp;: 0062 <br>Uraian &nbsp;: Sertifikasi (Sertifikat)</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="toolbar text-right">
                                                <button class="btn btn-success" data-toggle="modal" data-target="#noticeModal">
                                                    <span class="btn-label">
                                                        <i class="material-icons">add</i>
                                                    </span>
                                                        New Data
                                                    <div class="ripple-container"></div>
                                                </button>
                                                <!-- notice modal -->
                                                <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-notice">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                                <h5 class="modal-title" id="myModalLabel">New Sertification Data</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?=form_open('Certification/add'); ?>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group label-floating">
<!--                                                                                 <label class="control-label">Year *</label>
 -->                                                                                <select name="data_type" class="form-control">
                                                                                    <option disabled selected>Choose Scope</option>
                                                                                    <option value="1">Personil</option>
                                                                                    <option value="2">Produk</option>
                                                                                    <option value="3">MM Lingkungan</option>
                                                                                    <option value="4">Industri hijau</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group label-floating">
                                                                                <label class="control-label">Year *</label>
                                                                                <input name="data_year" type="number" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group label-floating">
                                                                                <label class="control-label">Month (1-12) *</label>
                                                                                <input name="data_month" type="number" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">Number of Published Certificate *</label>
                                                                        <input type="number" name="data_total" class="form-control" value="0">
                                                                    </div>
                                                                    <!-- STATIC ID SERVICE RIGHT HERE -->
                                                                    <input type="hidden" name="service_id" value="6">
                                                                    <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3><i class="material-icons">insert_chart</i> Published Certificates
                                            <small>Per-Month</small>
                                            </h3>
                                            <div id="mainCertificateChart" class="ct-chart" style="height:250px;"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="material-datatables">
                                                <table class="table dataTables table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Year/Month</th>
                                                            <th>Scope</th>
                                                            <th>Total</th>
                                                            <th class="disabled-sorting text-right">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no=1;foreach($datas as $data){ ?>
                                                            <tr class="">
                                                                <td><?=$no++; ?></td>
                                                                <td><?=$data['data_year'].' / '.$data['data_month']; ?></td>
                                                                <td><?php if($data['data_type']=="1") echo "Personil"; else if($data['data_type'] == "2") echo "Produk"; else if($data['data_type'] == "3") echo "SMML"; else echo "Industri Hijau";?></td>
                                                                <td><?=$data['data_total']; ?></td>
                                                                <td class="text-right">
                                                                    <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                                                 </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <div class="instructions text-warning">
                                                    *The operator must input the number of certificates published each month.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   

                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
            </div>