<?php include 'inc/conn.inc'; if(isset($_SESSION['user_session'])){ header("location: index.php"); }
require_once 'twitoauth.php';
require_once 'Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '592542910897463',
  'app_secret' => 'f049934dcf53fd8b8505cd5e1ba98f2f',
  'default_graph_version' => 'v2.5',
]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes','public_profile']; // optional
$loginUrl = $helper->getLoginUrl('http://www.lanet.opencounty.org/login-callback.php', $permissions);
// echo md5(sha1('weareopen'));
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title>Lanet Umoja | Login</title>
<meta name="description" content="Lanet Umoja location dashboard login page. ">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="assets/elements/timeline.css">

<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="assets/icons/spinnericon/spinnericon.css">

<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="assets/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-cookie.js"></script>





    <script src="http://code.angularjs.org/1.2.13/angular.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-route.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-animate.js"></script>
    <script type="text/javascript" src="assets/angular/app.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/angular/page-animations.css">
</head>
<body>
<!-- <div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div> -->

<style type="text/css">

    html,body {
        height: 100%;
        background: url('assets/images/login.jpg'); #F5F5F5;
    }

</style>

<div class="center-vertical">
    <div class="center-content row">

        <div class="col-md-6 center-margin">
        <center><img class="brand-img" src="assets/images/logo.png" alt="..."></center>
            <h3 class="text-center pad15B font-white text-transform-upr font-size-23">Lanet Umoja Dashboard</h3>
            <h4 class="text-center pad15B font-white font-size-18">Login to access dashboard</h4>

            <div class="content-box border-top border-blue clearfix">
                <div class="content-box-wrapper row">

        <!-- Registration form begins here -->
        <form method="post" role="form" action="inc/control.php" class="col-md-7">
          <div class="form-group">
            <label class="sr-only" for="inputName">Full Name</label>
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputOrganization">Organization</label>
            <input type="text" class="form-control" id="inputOrganization" name="organization" placeholder="Organization">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password"
            placeholder="Password">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPasswordCheck">Retype Password</label>
            <input type="password" class="form-control" id="inputPasswordCheck" name="passwordCheck"
            placeholder="Confirm Password">
          </div>

          <div class="form-group">
            <input type="hidden" value="register" name="register">
          </div>
          
          <button type="submit" name ="submit" class="btn btn-primary btn-block">Sign Up</button>
          <p>
              <a href="login.php">Click here to login</a>
          </p>
        </form>
        <!-- End of Register -->
        <!-- Social Media Sign In -->
                    <div class="col-md-4 float-right" style="height: 287px;">

                        <div class="center-vertical">
                            <div class="center-content">

                                <a href="<?php echo $loginUrl; ?>" class="btn btn-block btn-md bg-facebook">
                                    <span class="glyph-icon icon-separator">
                                        <i class="glyph-icon icon-facebook"></i>
                                    </span>
                                    <span class="button-content">
                                        Connect with Facebook
                                    </span>
                                </a>
                                <div class="mrg10A"></div>
                                <a href="<?php echo $url; ?>" class="btn btn-block btn-md bg-twitter">
                                    <span class="glyph-icon icon-separator">
                                        <i class="glyph-icon icon-twitter"></i>
                                    </span>
                                    <span class="button-content">
                                        Connect with Twitter
                                    </span>
                                </a>
                                <div class="mrg10A"></div>
                                <!-- <a href="#" class="btn btn-block btn-md bg-google">
                                    <span class="glyph-icon icon-separator">
                                        <i class="glyph-icon icon-google-plus"></i>
                                    </span>
                                    <span class="button-content">
                                        Connect with Google+
                                    </span>
                                </a> -->

                            </div>
                        </div>

                    </div>
            <!-- End of Social Media Sign In -->
            <!-- Error and Success Display -->
                <div class="clearfix col-md-7" style="margin: 2px 1px">
                <?php 
                    if (isset($_SESSION['err']) || isset($_SESSION['success']))
                    {
                        echo $_SESSION['err'];
                        echo $_SESSION['success'];
                        unset($_SESSION['err']);
                        unset($_SESSION['success']);

                    }
                ?>
                </div>
            <!-- End of Display -->
                </div>
            </div>

        </div>

    </div>
</div>



    <!-- WIDGETS -->

<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="assets/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="assets/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="assets/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="assets/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="assets/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="assets/widgets/theme-switcher/themeswitcher.js"></script>

</body>
</html>