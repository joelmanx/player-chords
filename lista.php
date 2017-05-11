<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Sistema de Ventas</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
        <link href="<?= base_url() ?>assets/global/css/cssbc32.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!--<link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />-->
        <link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?= base_url() ?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!--<link href="<?= base_url() ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />-->
        <link href="<?= base_url() ?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= base_url() ?>assets/global/css/components.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= base_url() ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?= base_url() ?>assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= base_url() ?>assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/global/img/favicon.png" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <div id="primario" class="modal fade modal-scroll" tabindex="-1" data-backdrop="static" data-keyboard="false"></div>
        <div id="secundario" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false"></div>
        <div id="terciario" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false"></div>
        <div id="todo-task-modal" class="modal fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true"></div>
        <!-- BEGIN HEADER -->
        <?php $this->load->view('header'); ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('menu'); ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" id="contenedor_principal">
                    <?php $this->load->view('tiles'); ?>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('footer'); ?>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
        <script src="<?= base_url() ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?= base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/datatables/plugins/fnReloadAjax.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
        <!--<script src="<?= base_url() ?>assets/global/plugins/smartupdater.4.0.js" type="text/javascript"></script>-->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/global/scripts/custom.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?= base_url() ?>assets/layouts/layout2/scripts/layout.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
        
        <!--<script src="<?= base_url() ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>-->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script type="text/javascript">
            var base_url = '<?= base_url() ?>';
            var session_area = '<?=$this->session->userdata('area_restoran');?>'
            //App.blockUI();
        </script>
    </body>

</html>
        