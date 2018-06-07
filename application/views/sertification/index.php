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
                                                                        <div class="col-md-6">
                                                                            <div class="form-group label-floating">
                                                                                <label class="control-label">Year *</label>
                                                                                <input name="year" type="number" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group label-floating">
                                                                                <label class="control-label">Month (1-12) *</label>
                                                                                <input name="month" type="number" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label">Number of Published Sertificate *</label>
                                                                        <input type="number" name="total" class="form-control" value="0">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="material-datatables">
                                        <table class="table dataTables table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Year/Month</th>
                                                    <th>Total</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Year/Month</th>
                                                    <th>Total</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>

                                            </tbody>
                                        </table>
                                        <div class="instructions text-warning">
                                            *The operator must input the number of certificates published each month.
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