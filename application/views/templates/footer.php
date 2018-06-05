
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?=base_url(); ?>assets/js/core/jquery.min.js"></script>
<script src="<?=base_url(); ?>assets/js/core/popper.min.js"></script>
<script src="<?=base_url(); ?>assets/js/bootstrap-material-design.js"></script>
<script src="<?=base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="<?=base_url(); ?>assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?=base_url(); ?>assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="<?=base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="<?=base_url(); ?>assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="<?=base_url(); ?>assets/js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });
</script>

</html>