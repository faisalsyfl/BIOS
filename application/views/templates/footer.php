            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Services
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?=base_url(); ?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?=base_url(); ?>assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?=base_url(); ?>assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?=base_url(); ?>assets/js/chartist.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartist-plugin-legend/0.6.1/chartist-plugin-legend.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?=base_url(); ?>assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?=base_url(); ?>assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?=base_url(); ?>assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?=base_url(); ?>assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?=base_url(); ?>assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?=base_url(); ?>assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="<?=base_url(); ?>assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?=base_url(); ?>assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?=base_url(); ?>assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?=base_url(); ?>assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?=base_url(); ?>assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?=base_url(); ?>assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?=base_url(); ?>assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=base_url(); ?>assets/js/demo.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        demo.initCharts();

        /*------- Daily Orders SIPEJA -----------*/
        dataDailySalesChart = {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            series: [
                [12, 17, 7, 17, 23, 18, 38]
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);



        /* ----------==========     Completed Certification   ==========---------- */

        dataCertificateTasksChart = {
            labels: ['PC','LSPRO','SMML','LSIH'],
            series: [
                <?php echo $certificates; ?>
            ]
        };

        optionsCertificateTasksChart = {
            axisX: {
                showGrid: false
            },
            low: 0,
            high: <?php echo (($cmax*2)+($cmax/1.5))/2; ?>,
            chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
        }
        var responsiveOptions = [
          ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value[0];
              }
            }
          }]
        ];
        var CertificateTasksChart = new Chartist.Bar('#certificateTasksChart', dataCertificateTasksChart, optionsCertificateTasksChart, responsiveOptions);


        // start animation for the Certificate Tasks Chart - Line Chart
        md.startAnimationForBarChart(CertificateTasksChart);


        /* ----------==========     Sample Dashboard    ==========---------- */

        var dataSampleViewsChart = {
          labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
          series: [
            [542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]

          ]
        };
        var optionsSampleViewsChart = {
            axisX: {
                showGrid: false
            },
            low: 0,
            high: 1000,
            chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
        };
        var responsiveOptions = [
          ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value[0];
              }
            }
          }]
        ];
        var SampleViewsChart = Chartist.Bar('#sampleViewsChart', dataSampleViewsChart, optionsSampleViewsChart, responsiveOptions);
        //start animation for the Emails Subscription Chart
        md.startAnimationForBarChart(SampleViewsChart);

        /*============================================================================================================*/
        /*Certification Page*/

        dataMainCertificateChart = {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Okt','Nov','Des'],
            series: 
                <?=$certificates; ?>
            
        };

        optionsMainCertificateChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: <?php echo (($cmax*2)+($cmax/1.5))/2; ?>, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
            plugins:[Chartist.plugins.legend({})]
        }

        var mainCertificateChart = new Chartist.Line('#mainCertificateChart', dataMainCertificateChart, optionsMainCertificateChart);

        md.startAnimationForLineChart(mainCertificateChart);







        
        $('table.dataTables').DataTable({
            "pagingType": "simple",
            "lengthMenu": [
                [100, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });
        var table = $('table.dataTables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:34:01 GMT -->
</html>