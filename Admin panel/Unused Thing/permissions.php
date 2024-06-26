<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Permissions | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a>
                </li>
                <li>
                    <a href="forms.php"><i class="fas fa-file-alt"></i>Forms</a>
                </li>
                <li>
                    <a href="tables.php"><i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="charts.php"><i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="icons.php"><i class="fas fa-icons"></i>Icons</a>
                </li>
                <li>
                    <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i>UI Elements</a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="ui-buttons.php"><i class="fas fa-angle-right"></i>Buttons</a>
                        </li>
                        <li>
                            <a href="ui-badges.php"><i class="fas fa-angle-right"></i>Badges</a>
                        </li>
                        <li>
                            <a href="ui-cards.php"><i class="fas fa-angle-right"></i>Cards</a>
                        </li>
                        <li>
                            <a href="ui-alerts.php"><i class="fas fa-angle-right"></i>Alerts</a>
                        </li>
                        <li>
                            <a href="ui-tabs.php"><i class="fas fa-angle-right"></i>Tabs</a>
                        </li>
                        <li>
                            <a href="ui-date-time-picker.php"><i class="fas fa-angle-right"></i>Date & Time Picker</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i>Authentication</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="login.php"><i class="fas fa-lock"></i>Login</a>
                        </li>
                        <li>
                            <a href="signup.php"><i class="fas fa-user-plus"></i>Signup</a>
                        </li>
                        <li>
                            <a href="forgot-password.php"><i class="fas fa-user-lock"></i>Forgot password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i>Pages</a>
                    <ul class="collapse list-unstyled" id="pagesmenu">
                        <li>
                            <a href="blank.php"><i class="fas fa-file"></i>Blank page</a>
                        </li>
                        <li>
                            <a href="404.php"><i class="fas fa-info-circle"></i>404 Error page</a>
                        </li>
                        <li>
                            <a href="500.php"><i class="fas fa-info-circle"></i>500 Error page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="users.php"><i class="fas fa-user-friends"></i>Users</a>
                </li>
                <li>
                    <a href="settings.php"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>
        <!-- end of sidebar component -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
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
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
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
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>User Permissions
                            <a href="roles.php" class="btn btn-sm btn-outline-info float-end"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <form accept-charset="utf-8">
                                <div class="mb-3">
                                    <label for="email" class="form-label text-uppercase"><small>Dashboard</small></label>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch1">
                                      <label class="form-check-label" for="switch1">Open dashboard page</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="text-uppercase"><small>Users</small></label>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch2">
                                      <label class="form-check-label" for="switch2">Add User</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch3">
                                      <label class="form-check-label" for="switch3">Edit User</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch4">
                                      <label class="form-check-label" for="switch4">Delete User</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="text-uppercase"><small>Roles & Permissions</small></label>

                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch5">
                                      <label class="form-check-label" for="switch5">Add Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch6">
                                      <label class="form-check-label" for="switch6">Edit Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch7">
                                      <label class="form-check-label" for="switch7">Delete Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch8">
                                      <label class="form-check-label" for="switch8">Update Permissions</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Save</button>
                            <a href="roles.php" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>