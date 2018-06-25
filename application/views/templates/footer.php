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
<script src="<?=base_url(); ?>assets/js/chartjs.min.js"></script>
<script src="<?=base_url(); ?>assets/js/highcharts.js"></script>
<script src="<?=base_url(); ?>assets/js/highcharts-more.js"></script>
<script src="<?=base_url(); ?>assets/js/exporting.js"></script>

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
        $('#graphYear').on('change',function(){
            
        })
        demo.initCharts();
        <?php if ($this->uri->segment(1) == ''){ ?>
        /*------- Daily Orders SIPEJA -----------*/
        dataDailySalesChart = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            series: [
                <?=$orders; ?>
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
          labels: ['NDT', 'M', 'B', 'Ka', 'Lo', 'BT', 'O', 'Lt', 'EMC', 'S','Ki'],
          series: [
            <?=$sampels; ?>
          ]
        };
        var optionsSampleViewsChart = {
            axisX: {
                showGrid: false
            },
            low: 0,
            high: <?php echo (($smax*2)+($smax/10))/2; ?>,
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
        <?php } ?>

        /*============================================================================================================*/
        /*Certification Page*/
        <?php if($this->uri->segment(1) == 'Certification'){ ?>
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
        <?php } ?>

        /*============================================================================================================*/
        /*Testing Page*/
        <?php if($this->uri->segment(1) == 'Testing'){ ?>
          <?php $labs =[6=>'NDT',7=>'Metalografi',8=>'Beton',9=>'Kalibrasi',10=>'Logam',11=>'Barang Teknik',12=>'Otomotif',13=>'Listrik',14=>'Elektronika dan EMC',15=>'Semen',16=>'Kimia'];foreach($datasets as $key=> $dataset){ ?>

          Highcharts.chart('chart<?=$key; ?>', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Laboratorium <?=$labs[$key]; ?>'
            },
            subtitle: {
                text: 'Year 2018'
            },
            xAxis: {
                categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 5,
                title: {
                    text: 'Income',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valuePrefix: 'Rp.'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Reality',
                data: <?=$datasets[$key];  ?>,
                color: 'black'
            }, {
                name: 'Target',
                data: [90000000,90000000,90000000,90000000,90000000,90000000],
                color: 'red'
            }]
          });
        <?php } ?>
        <?php foreach($lingkups as $key=> $lingkup){ ?>

          Highcharts.chart('lingkup<?=$key; ?>', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Laboratorium <?=$labs[$key]; ?>'
            },
            subtitle: {
                text: 'Year 2018'
            },
            xAxis: {
                categories: <?=$lingkup->label; ?>,
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 5,
                title: {
                    text: 'Income',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valuePrefix: ''
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Samples',
                data: <?=$lingkup->data; ?>,
                color: '#43a047'
            }]
          });
        <?php } ?>
        <?php } ?>


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