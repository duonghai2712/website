
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>HY - Website thương mại điện tử lớn nhất Việt Nam</title>
    <link rel="icon" type="image/x-icon" href="backend-ui/assets/img/logo.png"/>
    <link rel="icon" href="backend-ui/assets/img/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="backend-ui/assets/vendor/pace/pace.css">
    <script src="backend-ui/assets/vendor/pace/pace.min.js"></script>

    @yield('CSS_REGION')
    @stack('CSS_REGION')
    <!--vendors-->
    <link rel="stylesheet" type="text/css" href="backend-ui/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="backend-ui/assets/vendor/jquery-scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="backend-ui/assets/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="backend-ui/assets/vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="backend-ui/assets/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="backend-ui/assets/vendor/timepicker/bootstrap-timepicker.min.css">
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="backend-ui/assets/fonts/jost/jost.css">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="backend-ui/assets/fonts/materialdesignicons/materialdesignicons.min.css">
    <!--Bootstrap + atmos Admin CSS-->
    <link rel="stylesheet" type="text/css" href="backend-ui/assets/css/atmos.min.css">
    <!-- Additional library for page -->

    @yield('JS_REGION')
    @stack('JS_REGION')


</head>
<body class="sidebar-pinned">
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="backend-ui/assets/img/logo.png" width="40" alt="atmos Logo">
        <span class="admin-brand-content font-secondary"><a href="index.html">  atmos</a></span>
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
            <li class="menu-item active ">
                <a href="index.html" class=" menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Dashboard
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-shape-outline "></i>
                                            </span>
                </a>

            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Forms
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-lead-pencil "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="forms.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Basic
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-checkbook "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-custom.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Custom Controls
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-checkbox-multiple-marked-circle "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-advance.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Advance
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar-edit "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-wizard.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Wizard
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-step-forward  "></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">UI Elements
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-cursor-default-outline "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="alerts.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Alerts </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="avatar.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Avatar </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="buttons.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Buttons </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
B
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item  ">
                        <a href="cards.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Cards
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-cards-outline  "></i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="icons.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Icons
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <i class="icon-placeholder mdi mdi-alien "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="modal.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Modals </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
M
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="notification.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Notification </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
N
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="typography.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Typography </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="tabs.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Tabs  </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="sweetalert.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Sweet Alert  </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
S
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="accordian.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Accordian  </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="tooltip.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Tooltips </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="color.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Colors
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <i class="icon-placeholder mdi mdi-format-color-fill "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="spinners.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Spinners </span>
                                            </span>
                            <span class="menu-icon">
                                    <i class="icon-placeholder mdi mdi-loading mdi-spin"></i>

                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href="blockui.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Block UI
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
B
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="jstree.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Js Tree
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="wireframe.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Wireframe </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
W
                                                </i>
                                            </span>
                        </a>

                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Widgets
                                                    <span class="menu-arrow"></span>
                                                </span>
<span class="menu-info"> 👌 New Widgets  </span>
                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-webpack"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="widget-01.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Widget 01
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <i class="icon-placeholder mdi mdi-webpack "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="widget-02.html" class=" menu-link">
                                        <span class="menu-label">
                                                  <span class="menu-name">Widget 02
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-webpack"></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Apps⚡
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-polymer "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="kanban.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Kanban
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-view-dashboard"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="chat.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Chat
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-comment-multiple-outline"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="mail.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Mail
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-inbox-arrow-down  "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="guide.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Guides
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-book-outline "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="todo.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Todo
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar-today"></i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Pages
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Extra Pages</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-folder-outline "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="profile.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Profile </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    P
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="timeline.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Timeline </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="contacts.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Contacts </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    C
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="login.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Login </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    L
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="signup.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Sign Up </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="reset.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Reset Password </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    R
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="logout.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Logout </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    L
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Settings </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    <i class="icon  mdi mdi-settings"></i>
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="status.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Status Page </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>



                </ul>
            </li>


            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Charts
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-finance "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="apexchart.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Apex Charts
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-chart-gantt "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="chartjs.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Chartsjs
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-chart-bar "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="googlechart.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Google Charts
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-google "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="chartist.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Chartist
                                                </span>
                                            </span>

                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                     <i class="icon-placeholder mdi mdi-chart-arc "></i>
                                                </i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Tables
                                                      <span class="menu-arrow"></span>

                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-table-edit"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="table.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Table
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-format-list-bulleted "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                         <span class="menu-label">
                                                <span class="menu-name">Datatable
                                                      <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-format-list-bulleted "></i>
                                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="datatable.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Basic </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    b
                                                </i>
                                            </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="datatable-height.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Variable Height </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    h
                                                </i>
                                            </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="datatable-multi.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Multi select </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    M
                                                </i>
                                            </span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>

            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Maps
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-map"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="mapael.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Vector Maps
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-map-search-outline "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="google-maps.html" class=" menu-link">
                                        <span class="menu-label">
                                                  <span class="menu-name">Google Maps
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-google"></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Calender
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-calendar "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href="calender.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Calender
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="calender-create.html" class=" menu-link">
                                        <span class="menu-label">
                                                <span class="menu-name">Calender Edit
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar-edit "></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Invoices
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-cash-usd "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="invoice.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Invoice View </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    I
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="invoice-single.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Single Invoice </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Editors
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-file-document-box "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="tinymce.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">TinyMCE </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="summernote.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Summernote </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="trumbowyg.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name"> Trumbowyg </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Error Pages
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">404,503 etc</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-pac-man "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="404.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">404 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="502.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">502 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="503.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">503 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="403.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">403 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item  ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Emails
                                                    <span class="menu-arrow"></span>
                                                </span>
<span class="menu-info"> 🌈 New  </span>
                                            </span>
                    <span class="menu-icon">

                                                 <i class="icon-placeholder mdi mdi-mailbox-open-outline "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item ">
                        <a href="emails/confirm-mail.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Confirm Email</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
C
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="emails/password-reset.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Password Reset </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
P
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="emails/confirm-subscription.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Subscription Email</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
S
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="emails/message.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Notification</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
N
                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Forums
                                                    <span class="menu-arrow"></span>
                                                </span>
                        </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-chat "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="forum-home.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Forum Home </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    <i class="icon mdi mdi-chat"></i>
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forum-thread.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Forum Thread </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    <i class="icon mdi mdi-message-reply"></i>
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forum-discussion.html" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Discussion </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    <i class="icon mdi mdi-message-bulleted"></i>
                                                </i>
                                            </span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Menus
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Contains submenu</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Menu Level </span>
                                                <span class="menu-info">500 New Events</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Sb
                                                </i>
                                            </span>
                        </a>

                    </li>

                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Menus
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Contains submenu</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Menu Level </span>
                                                <span class="menu-info">500 New Events</span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Sb
                                                </i>
                                            </span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>
        </ul>

    </div>

</aside>
<main class="admin-main">
    <!--site header begins-->
    <header class="admin-header">

        <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

        <nav class=" mr-auto my-auto">
            <ul class="nav align-items-center">

                <li class="nav-item">
                    <a class="nav-link  " data-target="#siteSearchModal" data-toggle="modal" href="#">
                        <i class=" mdi mdi-magnify mdi-24px align-middle"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <nav class=" ml-auto">
            <ul class="nav align-items-center">

                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-24px mdi-bell-outline"></i>
                            <span class="notification-counter"></span>
                        </a>

                        <div class="dropdown-menu notification-container dropdown-menu-right">
                            <div class="d-flex p-all-15 bg-white justify-content-between border-bottom ">
                                <a href="#!" class="mdi mdi-18px mdi-settings text-muted"></a>
                                <span class="h5 m-0">Notifications</span>
                                <a href="#!" class="mdi mdi-18px mdi-notification-clear-all text-muted"></a>
                            </div>
                            <div class="notification-events bg-gray-300">
                                <div class="text-overline m-b-5">today</div>
                                <a href="#" class="d-block m-b-10">
                                    <div class="card">
                                        <div class="card-body"> <i class="mdi mdi-circle text-success"></i> All systems operational.</div>
                                    </div>
                                </a>
                                <a href="#" class="d-block m-b-10">
                                    <div class="card">
                                        <div class="card-body"> <i class="mdi mdi-upload-multiple "></i> File upload successful.</div>
                                    </div>
                                </a>
                                <a href="#" class="d-block m-b-10">
                                    <div class="card">
                                        <div class="card-body">
                                            <i class="mdi mdi-cancel text-danger"></i> Your holiday has been denied
                                        </div>
                                    </div>
                                </a>


                            </div>

                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <span class="avatar-title rounded-circle bg-dark">V</span>

                        </div>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right"   >
                        <a class="dropdown-item" href="#">  Add Account
                        </a>
                        <a class="dropdown-item" href="#">  Reset Password</a>
                        <a class="dropdown-item" href="#">  Help </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"> Logout</a>
                    </div>
                </li>

            </ul>

        </nav>
    </header>
    <!--site header ends -->
    <section class="admin-content ">
        <div class="container py-5">

            <div class="row ">

                <div class="col-lg-4  m-b-30 ">
                    <div class="card m-b-30 full-height">
                        <img src="backend-ui/assets/img/patterns/header.png" class="rounded-top" width="100%" alt="header">
                        <div class="card-body  bg-gray-900 rounded-bottom ">
                            <div class="pull-up-sm">
                                <div class="avatar avatar-lg">
                                    <div class="avatar-title rounded-circle mdi mdi-heart bg-primary"></div>
                                </div>
                            </div>
                            <h1 class="text-white pt-4 fw-300">
                                <span class="js-greeting">Good Morning</span>,
                            </h1>
                            <p class="opacity-75 text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi at atque, beatae debitis distinctio dolorem eligendi eum exer.
                            </p>
                            <div>
                                <a href="#!" class="btn btn-success">View Reports</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12  ">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title m-b-0">Revenue Prediction</h5>

                            <div class="card-controls">
                                <a href="#" class="js-card-refresh icon"></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                            class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body  ">
                            <div id="chart-01" class=" "></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row ">
                <div class="col-lg-8 col-md-12  ">
                    <div class="card bg-gray-900 m-b-30">
                        <div class="card-header text-white">
                            <h5 class="card-title m-b-0">Users Annual Retention Rate </h5>

                            <div class="card-controls">
                                <a href="#" class="js-card-refresh icon"></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                            class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-gray-900 rounded">
                            <div id="chart-02" class="invert-colors"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  m-b-30 ">
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title m-b-0">Social Interactions</h5>

                            <div class="card-controls">
                                <a href="#" class="js-card-refresh icon"></a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                            class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row p-t-15 ">
                                <div class="col-sm-6 my-auto ">
                                    <h5 class="m-0">Total Sales <a href="#"
                                                                   class="mdi mdi-information text-muted"></a></h5>
                                </div>

                            </div>
                            <div class="row p-t-10">
                                <div class="col-sm-6 my-auto ">
                                    <h3 class="">$82.99</h3>
                                </div>
                                <div class="col-sm-6 my-auto  text-right ">
                                    <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 2.6%</h3>
                                </div>
                            </div>

                            <ul class="list-group m-t-10">
                                <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                                        <span>
                                            <span class="d-block"> <i class="mdi mdi-facebook-box"></i> Facebook</span>
                                        </span>
                                    <span>
                                            <span class="text-success d-block"> +15%  </span>
                                        </span>
                                </li>
                                <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                                        <span>
                                            <span class="d-block"> <i class="mdi mdi-instagram"></i> Instagram</span>
                                        </span>
                                    <span>
                                            <span class="text-success d-block"> +36%  </span>
                                        </span>
                                </li>
                                <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                                        <span>
                                            <span class="d-block"> <i class="mdi mdi-twitter"></i> Twitter</span>
                                        </span>
                                    <span>
                                            <span class="text-danger d-block"> -5%  </span>
                                        </span>
                                </li>
                            </ul>
                        </div>

                        <div class="card-img">
                            <div id="chart-03"></div>

                        </div>
                    </div>
                    <!--widget card ends-->

                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive bg-white shadow rounded">

                        <table class="table  table-hover align-td-middle">
                            <thead>
                            <tr>
                                <th>Role</th>
                                <th>Workspaces</th>
                                <th>Team</th>
                                <th>Active</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Manager
                                </td>
                                <td>
                                    <div class="avatar-group">

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title rounded-circle">AB</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle"
                                                 src="backend-ui/assets/img/logos/tinder.jpg" alt="ML">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-success rounded-circle">R</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle"
                                                 src="backend-ui/assets/img/logos/mailchimp.jpg" alt="ML">
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <div class="avatar-group">

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title rounded-circle">AB</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-primary rounded-circle">J</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-dark rounded-circle">H</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-success rounded-circle">B</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title rounded-circle">5+</span>
                                        </div>

                                    </div>
                                </td>
                                <td>
                                    <label class="cstm-switch">
                                        <input type="checkbox" name="option" checked value="1"
                                               class="cstm-switch-input">
                                        <span class="cstm-switch-indicator bg-success"></span>

                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn  btn-primary"> View</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Floor Manager
                                </td>
                                <td>
                                    <div class="avatar-group">

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title rounded-circle bg-success">X</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle"
                                                 src="backend-ui/assets/img/logos/americanexpress.jpg" alt="ML">
                                        </div>


                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle"
                                                 src="backend-ui/assets/img/logos/nytimes.jpg" alt="ML">
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <div class="avatar-group">

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title rounded-circle">R</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-info rounded-circle">CJ</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-warning rounded-circle">H</span>
                                        </div>


                                    </div>
                                </td>
                                <td>
                                    <label class="cstm-switch">
                                        <input type="checkbox" name="option" checked value="1"
                                               class="cstm-switch-input">
                                        <span class="cstm-switch-indicator bg-success"></span>

                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn  btn-primary"> View</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Interns
                                </td>
                                <td>
                                    <div class="avatar-group">

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-danger rounded-circle">RD</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-info rounded-circle">PF</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-success rounded-circle">L</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-danger rounded-circle">V</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-dark rounded-circle">SM</span>
                                        </div>


                                    </div>

                                </td>
                                <td>
                                    <div class="avatar-group">

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-warning rounded-circle">B</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-success rounded-circle">U</span>
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-primary rounded-circle">LK</span>
                                        </div>


                                    </div>
                                </td>
                                <td>
                                    <label class="cstm-switch">
                                        <input type="checkbox" name="option" value="1"
                                               class="cstm-switch-input">
                                        <span class="cstm-switch-indicator bg-success"></span>

                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn  btn-primary"> View</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Designers
                                </td>
                                <td>
                                    <div class="avatar-group">

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-warning rounded-circle">B</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-success rounded-circle">U</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-dark rounded-circle">U</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-primary rounded-circle">LK</span>
                                        </div>

                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted">Not Assigned</span>

                                </td>

                                <td>
                                    <label class="cstm-switch">
                                        <input type="checkbox" disabled="" name="option" value="1"
                                               class="cstm-switch-input">
                                        <span class="cstm-switch-indicator bg-success"></span>

                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn  btn-primary"> View</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Developers
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-danger rounded-circle">S</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-secondary rounded-circle">E</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-info rounded-circle">QW</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-primary rounded-circle">V</span>
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-success rounded-circle">RE</span>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <div class="avatar-group">

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-warning rounded-circle">B</span>
                                        </div>
                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-success rounded-circle">U</span>
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title bg-soft-primary rounded-circle">LK</span>
                                        </div>


                                    </div>
                                </td>
                                <td>
                                    <label class="cstm-switch">
                                        <input type="checkbox" name="option" value="1"
                                               class="cstm-switch-input">
                                        <span class="cstm-switch-indicator bg-success"></span>

                                    </label>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn  btn-primary"> View</a>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                            class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="backend-ui/assets/vendor/jquery/jquery.min.js"></script>
<script src="backend-ui/assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="backend-ui/assets/vendor/popper/popper.js"></script>
<script src="backend-ui/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="backend-ui/assets/vendor/select2/js/select2.full.min.js"></script>
<script src="backend-ui/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="backend-ui/assets/vendor/listjs/listjs.min.js"></script>
<script src="backend-ui/assets/vendor/moment/moment.min.js"></script>
<script src="backend-ui/assets/vendor/daterangepicker/daterangepicker.js"></script>
<script src="backend-ui/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="backend-ui/assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="backend-ui/assets/js/atmos.min.js"></script>
<!--page specific scripts for demo-->

<!--Additional Page includes-->
<script src="backend-ui/assets/vendor/apexchart/apexcharts.min.js"></script>
<!--chart data for current dashboard-->
<script src="backend-ui/assets/js/dashboard-01.js" type="text/javascript"></script>
</body>
</html>
