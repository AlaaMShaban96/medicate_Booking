@include('cpanel.layout.navbar') 

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>New Orders</p>
                                                <span class="number">6,267</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-redo-alt"></i> Updated every 30 minutes
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="olive fas fa-money-bill-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Revenue</p>
                                                <span class="number">$180,900.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> In this current Month
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-eye"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Page views</p>
                                                <span class="number">28,210</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-stopwatch"></i> In the last 24 Hour
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Support Request</p>
                                                <span class="number">75</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-envelope-open-text"></i> Active in the last 7 days
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Traffic Overview</h4>
                                        <p class="text-muted">Your year long website traffic data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="trafficflow"></canvas>
                                    </div>
                                    <div class="ui hidden divider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Sales Overview</h4>
                                        <p class="text-muted">Your year long sales data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="sales"></canvas>
                                    </div>
                                    <div class="ui hidden divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Top Visitors by Country</h4>
                                        <p class="text-muted">Your year long website traffic data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table no-margin bg-lighter-grey">
                                            <thead class="success">
                                                <tr>
                                                    <th>Country</th>
                                                    <th class="text-right">Unique Visitors</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-us"></i> United States</td>
                                                    <td class="text-right">27,340</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-in"></i> India</td>
                                                    <td class="text-right">21,280</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-jp"></i> Japan</td>
                                                    <td class="text-right">18,210</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-gb"></i> United Kingdom</td>
                                                    <td class="text-right">15,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-es"></i> Spain</td>
                                                    <td class="text-right">14,276</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-de"></i> Germany</td>
                                                    <td class="text-right">13,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-br"></i> Brazil</td>
                                                    <td class="text-right">12,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-id"></i> Indonesia</td>
                                                    <td class="text-right">11,886</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-ph"></i> Philippines</td>
                                                    <!doctype html>
                                                    <!-- 
                                                    * Bootstrap Simple Admin Template
                                                    * Email: heyalexluna@gmail.com
                                                    * Version: 1.1
                                                    * Author: Alexis Luna
                                                    * Copyright 2019 Alexis Luna
                                                    * Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
                                                    -->
                                                    <html lang="en">
                                                    <head>
                                                        <meta charset="utf-8">
                                                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                                        <title>Dashboard | Start Bootstrap</title>
                                                    
                                                        <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
                                                        <link href="assets/css/master.css" rel="stylesheet">
                                                        <link href="assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
                                                        <link href="assets/vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
                                                    </head>
                                                    
                                                    <body>
                                                        <div class="wrapper">
                                                            <nav id="sidebar" class="active">
                                                                <div class="sidebar-header">
                                                                    <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
                                                                </div>
                                                                <ul class="list-unstyled components">
                                                                    <li>
                                                                        <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="forms.html"><i class="fas fa-file-alt"></i> Forms</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="tables.html"><i class="fas fa-table"></i> Tables</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="charts.html"><i class="fas fa-chart-bar"></i> Charts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="icons.html"><i class="fas fa-icons"></i> Icons</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                                                                        <ul class="collapse list-unstyled" id="uielementsmenu">
                                                                            <li>
                                                                                <a href="ui-buttons.html"> Buttons</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="ui-badges.html"> Badges</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="ui-cards.html"> Cards</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="ui-alerts.html"> Alerts</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="ui-tabs.html"> Tabs</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="ui-date-time-picker.html"> DateTime Picker</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="ui-calendar.html"> Calendar</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="ui-content-editor.html"> Content Editor</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                                                                        <ul class="collapse list-unstyled" id="authmenu">
                                                                            <li>
                                                                                <a href="login.html"><i class="fas fa-lock"></i> Login</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="signup.html"><i class="fas fa-user-plus"></i> Signup</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="forgot-password.html"><i class="fas fa-user-lock"></i> Forgot password</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#pagesmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                                                                        <ul class="collapse list-unstyled" id="pagesmenu">
                                                                            <li>
                                                                                <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="404.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                    
                                                            <div id="body" class="active">
                                                                <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                                                                    <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i><span></span></button>
                                                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                                        <ul class="nav navbar-nav ml-auto">
                                                                            <li class="nav-item dropdown">
                                                                                <div class="nav-dropdown">
                                                                                    <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                                                                        <ul class="nav-list">
                                                                                            <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                                                                            <div class="dropdown-divider"></div>
                                                                                            <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                                                                            <div class="dropdown-divider"></div>
                                                                                            <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                                                                            <div class="dropdown-divider"></div>
                                                                                            <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="nav-item dropdown">
                                                                                <div class="nav-dropdown">
                                                                                    <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                                                                    <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                                                                        <ul class="nav-list">
                                                                                            <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                                                                            <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                                                                            <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                                                                            <div class="dropdown-divider"></div>
                                                                                            <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </nav>                                      <td class="text-right">11,509</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-sg"></i> Singapore</td>
                                                    <td class="text-right">1,700</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Most Sales by Country</h4>
                                        <p class="text-muted">Your year long sales data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table no-margin bg-lighter-grey">
                                            <thead class="success">
                                                <tr>
                                                    <th>Country</th>
                                                    <th class="text-right">No. Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-us"></i> United States</td>
                                                    <td class="text-right">7,200</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-in"></i> India</td>
                                                    <td class="text-right">6,190</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-jp"></i> Japan</td>
                                                    <td class="text-right">4,790</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-gb"></i> United Kingdom</td>
                                                    <td class="text-right">4,480</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-es"></i> Spain</td>
                                                    <td class="text-right">4,276</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-de"></i> Germany</td>
                                                    <td class="text-right">3,455</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-br"></i> Brazil</td>
                                                    <td class="text-right">3,201</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-id"></i> Indonesia</td>
                                                    <td class="text-right">1,996</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-ph"></i> Philippines</td>
                                                    <td class="text-right">1,809</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="flag-icon flag-icon-sg"></i> Singapore</td>
                                                    <td class="text-right">1,550</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Top Referrals</h4>
                                        <p class="text-muted">Your year long website traffic data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table no-margin bg-lighter-grey">
                                            <thead class="success">
                                                <tr>
                                                    <th>Refferer</th>
                                                    <th class="text-right">Traffic</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Google.com</td>
                                                    <td class="text-right">9,340</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Facebook.com</td>
                                                    <td class="text-right">8,280</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Instragram.com</td>
                                                    <td class="text-right">6,210</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Yourwebsite.com</td>
                                                    <td class="text-right">5,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Youtube.com</td>
                                                    <td class="text-right">4,276</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Direct</td>
                                                    <td class="text-right">3,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Duckduckgo.com</td>
                                                    <td class="text-right">2,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Landingpage.com</td>
                                                    <td class="text-right">1,886</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Giantweb.come</td>
                                                    <td class="text-right">1,509</td>
                                                </tr> 
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Unknown</td>
                                                    <td class="text-right">890</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    
                    <div class="row">
                        <!doctype html>
                        <!-- 
                        * Bootstrap Simple Admin Template
                        * Email: heyalexluna@gmail.com
                        * Version: 1.1
                        * Author: Alexis Luna
                        * Copyright 2019 Alexis Luna
                        * Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
                        -->
                        <html lang="en">
                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <title>Dashboard | Start Bootstrap</title>
                        
                            <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
                            <link href="assets/css/master.css" rel="stylesheet">
                            <link href="assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
                            <link href="assets/vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">
                        </head>
                        
                        <body>
                            <div class="wrapper">
                                <nav id="sidebar" class="active">
                                    <div class="sidebar-header">
                                        <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
                                    </div>
                                    <ul class="list-unstyled components">
                                        <li>
                                            <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="forms.html"><i class="fas fa-file-alt"></i> Forms</a>
                                        </li>
                                        <li>
                                            <a href="tables.html"><i class="fas fa-table"></i> Tables</a>
                                        </li>
                                        <li>
                                            <a href="charts.html"><i class="fas fa-chart-bar"></i> Charts</a>
                                        </li>
                                        <li>
                                            <a href="icons.html"><i class="fas fa-icons"></i> Icons</a>
                                        </li>
                                        <li>
                                            <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                                            <ul class="collapse list-unstyled" id="uielementsmenu">
                                                <li>
                                                    <a href="ui-buttons.html"> Buttons</a>
                                                </li>
                                                <li>
                                                    <a href="ui-badges.html"> Badges</a>
                                                </li>
                                                <li>
                                                    <a href="ui-cards.html"> Cards</a>
                                                </li>
                                                <li>
                                                    <a href="ui-alerts.html"> Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="ui-tabs.html"> Tabs</a>
                                                </li>
                                                <li>
                                                    <a href="ui-date-time-picker.html"> DateTime Picker</a>
                                                </li>
                                                <li>
                                                    <a href="ui-calendar.html"> Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="ui-content-editor.html"> Content Editor</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                                            <ul class="collapse list-unstyled" id="authmenu">
                                                <li>
                                                    <a href="login.html"><i class="fas fa-lock"></i> Login</a>
                                                </li>
                                                <li>
                                                    <a href="signup.html"><i class="fas fa-user-plus"></i> Signup</a>
                                                </li>
                                                <li>
                                                    <a href="forgot-password.html"><i class="fas fa-user-lock"></i> Forgot password</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#pagesmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                                            <ul class="collapse list-unstyled" id="pagesmenu">
                                                <li>
                                                    <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
                                                </li>
                                                <li>
                                                    <a href="404.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                                                </li>
                                                <li>
                                                    <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
                                        </li>
                                        <li>
                                            <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
                                        </li>
                                    </ul>
                                </nav>
                        
                                <div id="body" class="active">
                                    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                                        <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i><span></span></button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="nav navbar-nav ml-auto">
                                                <li class="nav-item dropdown">
                                                    <div class="nav-dropdown">
                                                        <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                                            <ul class="nav-list">
                                                                <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                                                <div class="dropdown-divider"></div>
                                                                <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                                                <div class="dropdown-divider"></div>
                                                                <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                                                <div class="dropdown-divider"></div>
                                                                <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <div class="nav-dropdown">
                                                        <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                                            <ul class="nav-list">
                                                                <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                                                <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                                                <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                                                <div class="dropdown-divider"></div>
                                                                <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>          <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="dfd text-center">
                                            <i class="blue large-icon mb-2 fas fa-thumbs-up"></i>
                                            <h4 class="mb-0">+21,900</h4>
                                            <p class="text-muted">FACEBOOK PAGE LIKES</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="dfd text-center">
                                            <i class="orange large-icon mb-2 fas fa-reply-all"></i>
                                            <h4 class="mb-0">+22,566</h4>
                                            <p class="text-muted">INSTAGRAM FOLLOWERS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="dfd text-center">
                                            <i class="grey large-icon mb-2 fas fa-envelope"></i>
                                            <h4 class="mb-0">+15,566</h4>
                                            <p class="text-muted">E-MAIL SUBSCRIBERS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="dfd text-center">
                                            <i class="olive large-icon mb-2 fas fa-dollar-sign"></i>
                                            <h4 class="mb-0">+98,601</h4>
                                            <p class="text-muted">TOTAL SALES</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@include('cpanel.layout.footer') 