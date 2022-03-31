<header class="topnavbar-wrapper">
    <!-- START Top Navbar-->
    <nav role="navigation" class="navbar topnavbar">
        <!-- START navbar header-->
        <div class="navbar-header">
        </div>
        <!-- END navbar header-->
        <!-- START Nav wrapper-->
        <div class="nav-wrapper">
            <!-- START Left navbar-->
            <div class="selectOptionShowing">
                <div class="dropdown">
                    <button class="btn btn-default btn-flat dropdown-toggle" type="button" data-toggle="dropdown"
                        style="height: 82px;padding-top:4px !important;padding-right:30px !important; background-color:#564aa3 !important; border-color: #564aa3;color:white;">
                        <i class="fas fa-bars" style="height:100px !important;"></i></button>
                    <ul class="dropdown-menu" style="margin-left: -15px;">
                        <li style="border-bottom: 1px inset"><a tabindex="-1" href="{{ route('dashboard' )}}">DASHBOARD</a></li>
                        <li class="dropdown-submenu" style="border-bottom: 1px inset">
                            <a class="test" tabindex="-1" href="#">WORKFORCE <span class="caret"
                                    style="float: right; margin-top: 8px;"></span></a>
                            <ul class="dropdown-menu">
                                <li style="border-bottom: 1px inset"><a tabindex="-1"
                                        href="{{route('workforce.employee')}}">EMPLOYEES</a></li>
                                <li style="border-bottom: 1px inset"><a tabindex="-1"
                                        href="workforcesub.html">SUBCONTRACTORS</a></li>
                                <li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="#">HR <span class="caret"
                                            style="float: right; margin-top: 8px;"></span></a>
                                    <ul class="dropdown-menu">
                                        <li style="border-bottom: 1px inset"><a tabindex="-1"
                                                href="onlineapp.html">ONLINE APPLICATIONS</a></li>
                                        <li style="border-bottom: 1px inset"><a tabindex="-1"
                                                href="documents.html">DOCUMENTS</a></li>
                                        <li style="border-bottom: 1px inset"><a tabindex="-1"
                                                href="screening.html">SCREENING & VETTING</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li style="border-bottom: 1px inset"><a tabindex="-1" href="clients.html">CLIENTS</a></li>

                        <li style="border-bottom: 1px inset"><a tabindex="-1" href="sites.html">SITES</a></li>

                        <li class="dropdown-submenu" style="border-bottom: 1px inset">
                            <a class="test" tabindex="-1" href="#">ROSTER <span class="caret"
                                    style="float: right; margin-top: 8px;"></span></a>
                            <ul class="dropdown-menu">
                                <li style="border-bottom: 1px inset"><a tabindex="-1" href="addshift.html">ADD
                                        SHIFT(s)</a></li>

                                <li style="border-bottom: 1px inset"><a tabindex="-1" href="c-roaster.html">CLIENT
                                        ROSTER</a></li>
                                <li style="border-bottom: 1px inset"><a tabindex="-1" href="staffroaster.html">STAFF
                                        ROSTER</a></li>
                                <li style="border-bottom: 1px inset"><a tabindex="-1"
                                        href="substaffroaster.html">SUB STAFF ROSTER</a></li>
                                <li style="border-bottom: 1px inset"><a tabindex="-1"
                                        href="multipleedit.html">MULTIPLE EDIT</a></li>
                                <li style="border-bottom: 1px inset"><a tabindex="-1" href="shiftrequest.html">SHIFT
                                        REQUESTS</a></li>
                            </ul>
                        </li>
                        <li style="border-bottom: 1px inset">
                            <a class="test" tabindex="-1" href="calls.html">CALLS</a>
                        </li>

                        <li style="border-bottom: 1px inset">
                            <a class="test" tabindex="-1" href="events.html">EVENTS</a>
                        </li>


                        <li class="dropdown-submenu" style="border-bottom: 1px inset">
                            <a class="test" tabindex="-1" href="#">FINANCE <span class="caret"
                                    style="float: right; margin-top: 8px;"></span></a>
                            <ul class="dropdown-menu">
                                <li style="border-bottom: 1px inset"><a tabindex="-1"
                                        href="invoice.html">INVOICE</a></li>
                                <li style="border-bottom: 1px inset"><a tabindex="-1"
                                        href="payroll.html">PAYROLL</a></li>
                            </ul>
                        </li>
                        <li style="border-bottom: 1px inset">
                            <a class="test" tabindex="-1" href="reports.html">REPORTS</a>
                        </li>

                        <li style="border-bottom: 1px inset">
                            <a class="test" tabindex="-1" href="permissions.html">PERMISSIONS</a>
                        </li>

                        <li style="border-bottom: 1px inset">
                            <a class="test" tabindex="-1" href="settings.html">SETTINGS</a>
                        </li>
                        <li style="border-bottom: 1px inset">
                            <a href="login.html" title="Sign Out">
                                SIGN OUT
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <ul class="nav navbar-nav hidingThisForMobile">
                <!-- MAIN MENUS-->
                <!-- LOGO zone  -->
                <li>
                    <a href="index.html" class="">
                        <div class="brand-logo-collapsed">
                            <img src="/images/logo.png" alt="App Logo" class=""
                                style="width: 47px !important;">
                            <!-- <img src="./images/logo.png" alt="App Logo" class="" style="width: 145px !important; margin-top: 7px !important; margin-left: -16px !important; margin-right: -19px !important;"> -->
                        </div>
                    </a>
                </li>
                <!-- Admin Dashboard  -->
                <li>
                    <a href="index.html" title="Admin Dashboard">
                        <!-- <i class="fas fa-tachoometer-alt"></i> -->
                        <i class="fas fa-tachometer-alt" style="margin-left:28px"><br><span
                                class="master-font">DASHBOARD</span></i>
                    </a>
                </li>
                <!-- Workforce Manager-->
                <li class="dropdown-custom">
                    <a href="#" title="Workforce Manager">
                        <i class="fas fa-users" style="margin-left:29px"><br><span
                                class="master-font">WORKFORCE</span></i>
                    </a>
                    <!-- Workforce Drop Down Menu -->
                    <ul class="dropdown-content-custom">
                        <li>
                            <!-- START list group-->
                            <div class="list-group" style="margin-top:14%">
                                <!-- list item-->
                                <a href="{{route('workforce.employee')}}" title="Employee Manager" class="list-group-item"
                                    style="margin-left: -34%;margin-top: -17%; border-radius: 0px;">
                                    <div class="media-box">
                                        <div class="pull-left">
                                            <em class="fa fa-group fa-2x text-success"></em>
                                        </div>
                                        <div class="media-box-body clearfix">
                                            <p class="m0" style="font-size:85% !important">EMPLOYEES</p>
                                            <p class="m0 text-muted">

                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="workforcesub.html" title="Subcontractor Manager" class="list-group-item"
                                    style="margin-left: -34%;margin-bottom: -17%;border-radius: 0px;">
                                    <div class="media-box">
                                        <div class="pull-left">
                                            <em class="fa fa-sitemap fa-2x text-info"></em>
                                        </div>
                                        <div class="media-box-body clearfix">
                                            <p class="m0" style="font-size:85% !important">
                                                SUBCONTRACTORS</p>
                                            <p class="m0 text-muted">

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- END list group-->
                        </li>
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
                <!-- Client Manager  -->
                <li>
                    <a id="user-block-toggle" href="clients.html" title="Client Manager">
                        <i class="fas fa-layer-group" style="margin-left:18px"><br><span
                                class="master-font">CLIENTS</span></i>
                    </a>
                </li>
                <!-- Site Manager  -->
                <li>
                    <a id="user-block-toggle" href="sites.html" title="Site Manager">
                        <i class="fas fa-map" style="margin-left:11px"><br><span
                                class="master-font">SITES</span></i>
                    </a>
                </li>
                <!-- Roster Manager  -->
                <li>
                    <a id="user-block-toggle" href="roaster.html" title="Roster Manager">
                        <i class="fas fa-calendar-alt" style="margin-left:15px"><br><span
                                class="master-font">ROSTER</span></i>
                    </a>
                </li>
                <!-- Call Manager  -->
                <li>
                    <a id="user-block-toggle" href="calls.html" title="Call Manager">
                        <i class="fas fa-phone-alt" style="margin-left:10px"><br><span
                                class="master-font">CALLS</span></i>
                    </a>
                </li>
                <!-- Event & Logs Manager  -->
                <li>
                    <a id="user-block-toggle" href="events.html" title="Event & Call Out Manager">
                        <i class="fas fa-credit-card" style="margin-left:16px"><br><span
                                class="master-font">EVENTS</span></i>
                    </a>
                </li>
                <!-- Compliance Manager  -->
                <!-- Finance Manager  -->
                <li class="dropdown-custom" title="Finance Manager">

                    <a href="#" data-toggle="dropdown">
                        <i class="fas fa-chart-area" style="margin-left:17px"><br><span
                                class="master-font">FINANCE</span></i>
                    </a>
                    <!-- Finance Dropdown menu-->
                    <ul class="dropdown-content-custom">
                        <li>
                            <!-- START list group-->
                            <div class="list-group" style="margin-top:14%">
                                <!-- list item-->
                                <a href="invoice.html" class="list-group-item" title="Invoice Manager"
                                    style="margin-left: -34%;margin-top: -17%;border-radius: 0px;">
                                    <div class="media-box">
                                        <div class="pull-left">
                                            <em class="fa fa-file-pdf-o fa-2x text-success"></em>
                                        </div>
                                        <div class="media-box-body clearfix">
                                            <p class="m0" style="font-size:85% !important">INVOICE</p>

                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="payroll.html" class="list-group-item" title="Payroll Manager"
                                    style="margin-left: -34%;margin-bottom: -17%;border-radius: 0px;">
                                    <div class="media-box">
                                        <div class="pull-left">
                                            <em class="fa fa-money fa-2x text-warning"></em>
                                        </div>
                                        <div class="media-box-body clearfix">
                                            <p class="m0" style="font-size:85% !important">PAYROLL</p>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- END list group-->
                        </li>
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
                <!-- Report Manager  -->
                <li>
                    <a id="user-block-toggle" href="reports.html" title="Reports Manager">
                        <i class="fas fa-copy" style="margin-left:16px"><br><span
                                class="master-font">REPORTS</span></i>
                    </a>
                </li>
                <!-- User and Departments Manager -->
                <li>
                    <a id="user-block-toggle" href="permissions.html" title="User Management and Permissions ">
                        <i class="fas fa-user" style="margin-left:30px"><br><span
                                class="master-font">PERMISSIONS</span></i>
                    </a>
                </li>
                <!-- General Settings -->
                <li>
                    <a id="user-block-toggle" href="settings.html" title="General Settings">
                        <i class="fas fa-cog" style="margin-left:19px"><br><span
                                class="master-font">SETTINGS</span></i>
                    </a>
                </li>

                <li class="dropdown dropdown-list">
                    <a href="#" data-toggle="dropdown"
                        style="color:white !important;text-align: center !important;">
                        Sign Out
                        <br>

                        adnan.voags
                    </a>
                    <ul class="dropdown-menu animated fadeIn" style="left: -200%;">
                        <li>
                            <div class="panel widget" style="width:300px">
                                <div style="background-image:url('https://rdx.indel.co/asset/app/img/bg8.jpg')"
                                    class="panel-body text-center bg-center">
                                    <div class="row row-table">
                                        <div class="col-xs-12 text-white">
                                            <img src="https://rdx.indel.co/asset/images/user_images/system/dummy.png"
                                                alt="Image" class="img-thumbnail img-circle thumb128">
                                            <h3 class="m0">Mr Adnan Khan</h3>
                                            <p class="m0">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group">
                                    <div class="pull-left" style="margin-left:10px;">
                                    </div>
                                    <div class="pull-right" style="margin-right:7px; padding:5px !important">
                                        <a href="login.html" type="button"
                                            class="btn btn-oval btn-danger btn-block" name="button">Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END Top Navbar-->
</header>
