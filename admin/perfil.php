<?php include_once '../includes/include.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Perfil de Empresa</h3>
            </div>
            <div class="title_right">
              
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Perfil de Usuario <small>Datos generales y Actividad de la empresa <?php echo $nombre_empresa; ?></small></h2>
      
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
            <div class="profile_img">
                <!-- end of image cropping -->
                <div id="crop-avatar">
                    <!-- Current avatar -->
                    <div class="avatar-view" title="click para cambiar Foto de Perfil">
                        <img src="../media/img/<?php echo $avatar; ?>" alt="Avatar">
                    </div>
                    <!-- Cropping modal -->
                     <?php include "../libs/modal/avatar.php"; ?>
                    <!-- /.modal -->
                    <!-- Loading state -->
                    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                </div>
                <!-- end of image cropping -->
            </div>
             <?php include "../libs/perfil/lista_perfil.php"; ?>
            
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
  
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Actividad Reciente</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
           <?php include "../libs/perfil/actividad_reciente.php"; ?>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
<!-- start user projects -->
<table class="data table table-striped no-margin">
<thead>
    <tr>
        <th>#</th>
        <th>Project Name</th>
        <th>Client Company</th>
        <th class="hidden-phone">Hours Spent</th>
        <th>Contribution</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>New Company Takeover Review</td>
        <td>Deveint Inc</td>
        <td class="hidden-phone">18</td>
        <td class="vertical-align-mid">
            <div class="progress">
                <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
            </div>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>New Partner Contracts Consultanci</td>
        <td>Deveint Inc</td>
        <td class="hidden-phone">13</td>
        <td class="vertical-align-mid">
            <div class="progress">
                <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
            </div>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Partners and Inverstors report</td>
        <td>Deveint Inc</td>
        <td class="hidden-phone">30</td>
        <td class="vertical-align-mid">
            <div class="progress">
                <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
            </div>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>New Company Takeover Review</td>
        <td>Deveint Inc</td>
        <td class="hidden-phone">28</td>
        <td class="vertical-align-mid">
            <div class="progress">
                <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
            </div>
        </td>
    </tr>
</tbody>
</table>
<!-- end user projects -->
</div>
<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
<p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- footer content -->
<footer>
<div class="">
<p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
<span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
</p>
</div>
<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
<!-- /page content -->
</div>
</div>
<div id="custom_notifications" class="custom-notifications dsp_none">
<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
</ul>
<div class="clearfix"></div>
<div id="notif-group" class="tabbed_notifications"></div>
</div>
<script src="../media/js/bootstrap.min.js"></script>
<!-- chart js -->
<script src="../media/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="../media/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="../media/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="../media/js/icheck/icheck.min.js"></script>
<script src="../media/js/custom.js"></script>
<!-- image cropping -->
<script src="../media/js/cropping/cropper.min.js"></script>
<script src="../media/js/cropping/main.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="../media/js/moment.min.js"></script>
<script type="text/javascript" src="../media/js/datepicker/daterangepicker.js"></script>
<!-- moris js -->
<script src="../media/js/moris/raphael-min.js"></script>
<script src="../media/js/moris/morris.js"></script>

</body>
</html>