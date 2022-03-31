<aside class="aside">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <!-- START sidebar nav-->
            <ul class="nav" style="margin-top:10px;font-size: 12px !important;">
                <li>
                    <a href="{{ route('workforce.employee.add') }}" title="Add New Employee"
                        @if (Route::currentRouteName() == 'workforce.employee.add') style="background-color:white !important" @endif>
                        <em class="icon-user-follow" style="margin-left: 10px"></em>
                        <br>ADD
                    </a>
                </li>
                <li class="active">
                    <a href="{{ route('workforce.employee') }}" title="Employees List"
                        @if (Route::currentRouteName() == 'workforce.employee') ) style="background-color:white !important" @endif>
                        <em class="icon-list" style="margin-left: 9px"></em>
                        <br>VIEW
                    </a>
                </li>
                <li>
                    <a href="{{ route('workforce.employee.trash') }}" title="Deleted Employees List"
                        @if (Route::currentRouteName() == 'workforce.employee.trash') ) style="background-color:white !important" @endif>
                        <em class="icon-trash" style="margin-left: 10px"></em>
                        <br>TRASH
                    </a>
                </li>
                <li>
                    <a href="w-e-group.html" title="Guard Groups">
                        <em class="icon-grid" style="margin-left: 9px"></em>
                        <!-- <span data-localize="sidebar.nav.WIDGETS">Widgets</span> -->
                        <br>GUARD<br>GROUPS
                    </a>
                </li>
                <li>
                    <a href="#holidays" title="Staff Holidays" data-toggle="collapse">

                        <em class="icon-layers" style="margin-left: 9px"></em>
                        <!-- <span>Layouts</span> -->
                        <br>HOLIDAY
                    </a>
                    <ul id="holidays" class="nav sidebar-subnav collapse"
                        style="font-size: 12px;margin-top: -60px !important;">
                        <li class=" ">
                            <a href="w-e-h-staff.html" title="Staff Holidays Details">
                                <span>STAFF HOLIDAYS</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="w-e-h-calender.html" title="Holidays Monthly Calendar">
                                <span>HOLIDAYS MONTHLY CALENDAR</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="w-e-h-current.html" title="Current Holidays Requests">
                                <span>CURRENT HOLIDAYS REQUESTS</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#HRMODULE" title="Staff Holidays" data-toggle="collapse">

                        <em class="icon-people" style="margin-left: 9px"></em>
                        <!-- <span>Layouts</span> -->
                        <br>HR
                    </a>
                    <ul id="HRMODULE" class="nav sidebar-subnav collapse" style="margin-top: -34px !important;">
                        <li class=" ">
                            <a href="onlineapp.html" title="Online Applications">
                                <span>ONLINE APPLICATIONS</span>
                            </a>
                        </li>

                        <li class=" ">
                            <a href="documents.html" title="Documents">
                                <span>DOCUMENTS</span>
                            </a>
                        </li>

                        <li class=" ">
                            <a href="screening.html" title="Screening and Vetting">
                                <span>SCREENING & VETTING</span>
                            </a>
                        </li>
                    </ul>
                </li>

                </li>
            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>
