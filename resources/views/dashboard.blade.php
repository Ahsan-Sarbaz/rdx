<x-app-layout>
    <!-- Main section-->
    <div class="content-wrapper" style="background-color:#ecf0f5">
        <style media="screen">
            .text_hover:hover {
                background-color: white;
                color: black !important;
                text-decoration: none !important;
            }

            .text_hover a {
                text-decoration: none !important;
                color: black !important;
            }

            .table-responsive {
                overflow-y: hidden !important;
            }

        </style>
        <div class="content-heading">
            <!-- START Language list-->
            <div class="pull-right">
                <div class="btn-group">
                </div>
            </div>
            <!-- END Language list    -->
            Dashboard
            <small data-localize="dashboard.WELCOME"></small>
        </div>
        <div class="putEverythingSaafSutra">
            <!-- START widgets box-->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- START date widget-->
                    <div class="panel widget">
                        <div class="row row-table">
                            <div class="col-xs-4 text-center bg-danger-dark pv-lg">
                                <h4>RDX <br> SUPPORT</h4>
                            </div>
                            <a class="col-xs-4 text-center bg-danger pv-lg text_hover"
                                href="https://fiksu-solutions.com/support" target="_blank">
                                <h4>Support <br> Portal</h4>
                            </a>
                            <a class="col-xs-4 text-center bg-danger pv-lg text_hover"
                                href="/cdn-cgi/l/email-protection#bbd3ded7cbdfdec8d0fbddd2d0c8ce96c8d4d7cecfd2d4d5c895d8d4d6"
                                target="_blank">
                                <h4>Support <br> Email</h4>
                            </a>
                        </div>
                    </div>
                    <!-- END date widget    -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- START widget-->
                    <div class="panel widget bg-primary">
                        <div class="row row-table">
                            <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                                <em class="fa fa-users fa-3x"></em>
                            </div>
                            <div class="col-xs-8 pv-lg">
                                <div class="h2 mt0">830</div>
                                <div class="text-uppercase">ACTIVE STAFF</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- START widget-->
                    <div class="panel widget bg-purple">
                        <div class="row row-table">
                            <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                                <em class="fa fa-tasks fa-3x"></em>
                            </div>
                            <div class="col-xs-8 pv-lg">
                                <div class="h2 mt0">24
                                </div>
                                <div class="text-uppercase">ACTIVE CLIENTS</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- START widget-->
                    <div class="panel widget bg-green">
                        <div class="row row-table">
                            <div class="col-xs-4 text-center bg-green-dark pv-lg">
                                <em class="fa fa-phone fa-3x"></em>
                            </div>
                            <div class="col-xs-8 pv-lg">
                                <div class="h2 mt0">724</div>
                                <div class="text-uppercase">ACTIVE SITES</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="wholeTableRows">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>CURRENT SHIFTS DETAILS FOR <span
                                                    id="putDateHereShifts">28-02-2022</span> </h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h6>
                                            </h6>
                                        </div>
                                        <div class="col-md-2" style="margin-top: 12px;">
                                            <select class="select2-1 form-control input-sm"
                                                id="shift_confirmation_master_roster" style="width:100%;">
                                                <option value="">Shift Status</option>
                                                <option value="confirm">Confirmed</option>
                                                <option value="unconfirm">Un confirmed</option>
                                                <option value="unassigned">Un Assigned</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" id="day_selection_master_roster"
                                                class="datepicker form-control" value="28-02-2022"
                                                style="margin-top: 11px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <form method="POST" class="form-horizontal">
                                            <input type="hidden" name="branch_id_master_roster"
                                                id="branch_id_master_roster" value="1">
                                            <input type="hidden" name="day_selection_master_roster"
                                                id="day_selection_master_roster_put" value="28-02-2022">
                                            <input type="hidden" name="shift_confimation"
                                                id="shift_confirmation_master_roster_put">
                                        </form>
                                        <table
                                            class="table table-hovered table-striped table-bordered masterRosterReportDashBoard">
                                            <thead>
                                                <tr>
                                                    <th style="width:12%">CLIENT</th>
                                                    <th style="width:16%">SITE</th>
                                                    <th style="width:8%">POST CODE</th>

                                                    <th style="width:6%">START TIME</th>
                                                    <th style="width:6%">END TIME</th>
                                                    <th style="width:6%">HOURS</th>
                                                    <th style="width:16%">EMPLOYEE</th>
                                                    <th style="width:7%">CONTACT</th>
                                                    <th style="width:9%">SIA</th>

                                                    <th style="width:7%">EXPIRY</th>

                                                    <th style="width:7%">STAUS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Giant Security Ltd</td>
                                                    <td>Dudley Magistrate Court</td>
                                                    <td>DY1 1RY</td>

                                                    <td>09:00</td>
                                                    <td>17:00</td>
                                                    <td>8</td>
                                                    <td>Simranjit Singh</td>
                                                    <td>07417589503</td>
                                                    <td>1016 8547 3071 4531</td>

                                                    <td>07-01-2025</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Giant Security Ltd</td>
                                                    <td>North Staffordshire Justice Centre</td>
                                                    <td>ST5 2AA</td>

                                                    <td>08:00</td>
                                                    <td>17:00</td>
                                                    <td>9</td>
                                                    <td>Khalid Saleem Satti</td>
                                                    <td>07958035135</td>
                                                    <td>1032 1628 7350 3799</td>

                                                    <td>16-03-2024</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Giant Security Ltd</td>
                                                    <td>Sainsburys New Castle Underlyme</td>
                                                    <td>ST5 2AF</td>

                                                    <td>14:00</td>
                                                    <td>23:00</td>
                                                    <td>9</td>
                                                    <td>English Solution services. (Atif Saleem)</td>
                                                    <td>07459849519</td>
                                                    <td>1016 8776 6139 8649</td>

                                                    <td>28-09-2024</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Giant Security Ltd</td>
                                                    <td>Walsall Magistrate Court</td>
                                                    <td>WS2 8HA</td>

                                                    <td>08:00</td>
                                                    <td>18:00</td>
                                                    <td>10</td>
                                                    <td>Mohammad Yasir</td>
                                                    <td>07365490568</td>
                                                    <td>1016 2710 6162 4500</td>

                                                    <td>20-06-2022</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Giant Security Ltd</td>
                                                    <td>Wellingborough Magistrates</td>
                                                    <td>NN8 1HF</td>

                                                    <td>08:30</td>
                                                    <td>17:30</td>
                                                    <td>9</td>
                                                    <td>Mr Prince</td>
                                                    <td>07309999556</td>
                                                    <td>1019 3186 9365 8942</td>

                                                    <td>07-12-2024</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Giant Security Ltd</td>
                                                    <td>Worcester Combined Court</td>
                                                    <td>WR1 1EQ</td>

                                                    <td>09:00</td>
                                                    <td>17:00</td>
                                                    <td>8</td>
                                                    <td>Vikramjit Sharma</td>
                                                    <td>07311 785641</td>
                                                    <td>1014 3758 8723 4939</td>

                                                    <td>12-07-2024</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Mega Security</td>
                                                    <td>GPA Platform 21</td>
                                                    <td>B2 4HQ</td>

                                                    <td>07:00</td>
                                                    <td>19:00</td>
                                                    <td>12</td>
                                                    <td>Muhammad Shairaz</td>
                                                    <td>07838752002</td>
                                                    <td>1019 0798 1991 1979</td>

                                                    <td>04-11-2023</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Mega Security</td>
                                                    <td>GPA Platform 21</td>
                                                    <td>B2 4HQ</td>

                                                    <td>19:00</td>
                                                    <td>07:00</td>
                                                    <td>12</td>
                                                    <td>Mr Rohit .</td>
                                                    <td>07459164765</td>
                                                    <td>1037 6418 1775 6101</td>

                                                    <td>05-12-2024</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Mega Security</td>
                                                    <td>Holland And Barrett Burton</td>
                                                    <td>DE14 2WP</td>

                                                    <td>06:00</td>
                                                    <td>18:00</td>
                                                    <td>12</td>
                                                    <td>Hafiz Fahad Manzoor</td>
                                                    <td>07878293790</td>
                                                    <td>1017 6924 6682 6357</td>

                                                    <td>07-11-2024</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Mega Security</td>
                                                    <td>Holland And Barrett Burton</td>
                                                    <td>DE14 2WP</td>

                                                    <td>18:00</td>
                                                    <td>06:00</td>
                                                    <td>12</td>
                                                    <td>Tajamal Abbas</td>
                                                    <td>+44 7862 246456</td>
                                                    <td>1017 8477 0681 8291</td>

                                                    <td>08-08-2024</td>

                                                    <td>
                                                        <span class="btn btn-default btn-oval btn-sm"
                                                            style="background-color:#039656 !important; color:white !important;width: 100%;">Confirmed</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END table-responsive-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- END widgets box-->
            <div class="row">
                <!-- START dashboard main content-->
                <div class="col-lg-6">
                    <!-- START chart-->
                    <!-- START widget-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <form method="POST" action="https://rdx.indel.co/something" accept-charset="UTF-8"
                                class="form-horizontal"><input name="_token" type="hidden"
                                    value="Mox6MmARPKpUdcLixhwVATfs1cZA6iX6oEqSrwJH">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4> WEEKLY SHIFTS STATUS </h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2">
                                        <label class="control-label col-sm-2">WEEK</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="week_for_shifts" id="weekly_roster"
                                            class="datepicker form-control" value="28-02-2022" style="width: 195px;">
                                    </div>

                                </div>
                        </div>

                        </form>
                        <div class="panel-body">
                            <div class="col-lg-12" id="remove_Weekly_Shifts_Status">
                                <canvas id="Weekly_Shifts_Status" style="height:299px !important;" height="0"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-2">
                                    <h4>EVENTS</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body customclass" style="overflow-y:hidden;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive ">
                                        <table class="table table-hovered attachEventTable" id="attachingTableInfo"
                                            data-scrollable="" data-height="335">
                                            <thead>
                                                <tr>
                                                    <th style="width:14%">DATE</th>
                                                    <th style="width:12%">TIME</th>
                                                    <th style="width:14%">BRANCH</th>
                                                    <th style="width:22%">EVENT TYPE</th>
                                                    <th style="width:31%">STAFF / SUB STAFF</th>

                                                    <th style="width:7%">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>LAST 12 MONTHS HISTORY</h4>
                            <div class="pull-right" style="margin-right: 40px; width: 200px; margin-top: -6px">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12" id="remove_12_Month_History">
                                <canvas id="12_Month_History" style="height: 300px; width: 1191px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div id="panelChart6" class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Employment Type
                                <h6>
                                </h6>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div id="RemoveDiv_Employment">
                                <canvas id="pie-chartx" style="display: block;height: 309px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>S.I.A Licenses
                                <h6>
                                </h6>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div id="RemoveDiv_SIALicense">
                                <canvas id="pie-charty" style="display: block;height: 309px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div id="panelChart6" class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Employees Trainings
                                <h6>
                                </h6>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div id="removeDiv_Trainings">
                                <canvas id="pie-chartz" style="display: block;height: 309px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div id="panelChart6" class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Events Type
                                <h6>
                                </h6>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div id="removeDiv_Events">
                                <canvas id="pie-chart" style="display: block;height: 309px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>SIA LICENSE EXPIRY (EMPLOYEES)
                                        <h6>
                                        </h6>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <form method="POST" class="form-horizontal">
                                            <input type="hidden" name="SIA_Staff_branch_id" id="SIA_Staff_branch_id"
                                                value="">
                                            <input type="hidden" name="SIA_SubStaff_branch_id"
                                                id="SIA_SubStaff_branch_id" value="">
                                            <input type="hidden" name="VISA_Staff_branch_id" id="VISA_Staff_branch_id"
                                                value="">
                                        </form>
                                        <table class="table table-hovered SIAStaffdatatableOrdered">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%">#</th>
                                                    <th style="width:15%">NAME</th>
                                                    <th style="width:10%">CONTACT</th>
                                                    <th style="width:10%">SIA NUMBER</th>
                                                    <th style="width:15%">SIA TYPE</th>
                                                    <th style="width:15%">SIA EXPIRY</th>
                                                    <th style="width:15%">STAUS</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>
                                    <!-- END table-responsive-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- START dashboard main content-->
                <div class="col-lg-12">
                    <!-- END chart-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>SIA LICENSE EXPIRY (SUB EMPLOYEES)
                                        <h6>
                                        </h6>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <!-- START table-responsive-->
                                    <div class="table-responsive">
                                        <table class="table table-hovered" id="SIASubstaffdatatableOrdered">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%">#</th>
                                                    <th style="width:15%">SUBCONTRACTOR</th>
                                                    <th style="width:15%">SUB EMPLOYEE</th>
                                                    <th style="width:15%">CONTACT</th>
                                                    <th style="width:10%">SIA NUMBER</th>
                                                    <th style="width:10%">SIA TYPE</th>
                                                    <th style="width:10%">SIA EXPIRY</th>
                                                    <th style="width:10%">STATUS</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>English Solution services.</td>
                                                    <td>Tair Hussain</td>
                                                    <td>07846775582</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>30-11--0001</td>
                                                    <td style="color:red;">No Record Found</td>
                                                </tr>


                                                <tr>
                                                    <td>2</td>
                                                    <td>English Solution services.</td>
                                                    <td>Naveed Ul Salaam</td>
                                                    <td>0782461439</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>30-11--0001</td>
                                                    <td style="color:red;">No Record Found</td>
                                                </tr>


                                                <tr>
                                                    <td>3</td>
                                                    <td>English Solution services.</td>
                                                    <td>Karanveer Singh</td>
                                                    <td>07824061439</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>30-11--0001</td>
                                                    <td style="color:red;">No Record Found</td>
                                                </tr>


                                                <tr>
                                                    <td>4</td>
                                                    <td>English Solution services.</td>
                                                    <td>Hasnain Mushtaq</td>
                                                    <td>07888251206</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>30-11--0001</td>
                                                    <td style="color:red;">No Record Found</td>
                                                </tr>


                                                <tr>
                                                    <td>5</td>
                                                    <td>English Solution services.</td>
                                                    <td>Syed Saria Hassan</td>
                                                    <td>07312799862</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>30-11--0001</td>
                                                    <td style="color:red;">No Record Found</td>
                                                </tr>


                                                <tr>
                                                    <td>6</td>
                                                    <td>GM Security</td>
                                                    <td>Mustafa Qadiq Q Hasan</td>
                                                    <td>07597882685</td>
                                                    <td>1012 8654 2048 8651</td>
                                                    <td>Door Supervision</td>
                                                    <td>04-02-2022</td>
                                                    <td style="color:red;">Expired</td>
                                                </tr>


                                                <tr>
                                                    <td>7</td>
                                                    <td>GM Security</td>
                                                    <td>Kazeem Adedrian</td>
                                                    <td>07961542678</td>
                                                    <td>1018 8721 5192 1544</td>
                                                    <td>Door Supervision</td>
                                                    <td>04-03-2022</td>
                                                    <td>4 days remaining</td>
                                                </tr>


                                                <tr>
                                                    <td>8</td>
                                                    <td>RAI SECURITY</td>
                                                    <td>Kazeem Adedrian</td>
                                                    <td>07961542678</td>
                                                    <td>1018 8721 5192 1544</td>
                                                    <td>Door Supervision</td>
                                                    <td>04-03-2022</td>
                                                    <td>4 days remaining</td>
                                                </tr>


                                                <tr>
                                                    <td>9</td>
                                                    <td>RDX</td>
                                                    <td>Hamzzzza</td>
                                                    <td>01217713378</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>30-11--0001</td>
                                                    <td style="color:red;">No Record Found</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END table-responsive-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END dashboard main content-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <h4>VISA EXPIRY (EMPLOYEES)
                                <h6>
                                </h6>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <!-- START table-responsive-->
                            <div class="table-responsive">
                                <table id="VisadatatableOrdered" class="table table-hovered">
                                    <thead>
                                        <tr>
                                            <th style="width:10%">SNO</th>
                                            <th style="width:25%">NAME</th>
                                            <th style="width:10%">CONTACT</th>
                                            <th style="width:15%">VISA TYPE</th>
                                            <th style="width:15%">VISA EXPIRY</th>
                                            <th style="width:15%">EXPIRY DAYS</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END dashboard main content-->
            </div>
        </div>
    </div>
    <!-- Page footer-->
    <!-- <footer>
                 <span>&copy; 2016 - Angle</span>
              </footer> -->
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/modernizr/modernizr.custom.js"></script>
    <!-- MATCHMEDIA POLYFILL-->
    <script src="https://rdx.indel.co/asset/vendor/matchMedia/matchMedia.js"></script>
    <!-- JQUERY-->
    <script src="https://rdx.indel.co/asset/vendor/jquery/dist/jquery.js"></script>
    <!-- BOOTSTRAP-->
    <script src="https://rdx.indel.co/asset/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- STORAGE API-->
    <script src="https://rdx.indel.co/asset/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
    <!-- JQUERY EASING-->
    <script src="https://rdx.indel.co/asset/vendor/jquery.easing/js/jquery.easing.js"></script>
    <!-- ANIMO-->
    <script src="https://rdx.indel.co/asset/vendor/animo.js/animo.js"></script>
    <!-- SLIMSCROLL-->
    <script src="https://rdx.indel.co/asset/vendor/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- SCREENFULL-->
    <script src="https://rdx.indel.co/asset/vendor/screenfull/dist/screenfull.js"></script>
    <!-- LOCALIZE-->

    <!-- RTL demo-->
    <script src="https://rdx.indel.co/asset/app/js/demo/demo-rtl.js"></script>
    <!-- RAPHAEL-->
    <script src="https://rdx.indel.co/asset/vendor/raphael/raphael.js"></script>
    <!-- MORRIS-->
    <script src="https://rdx.indel.co/asset/vendor/morris.js/morris.js"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- SPARKLINE-->
    <script src="https://rdx.indel.co/asset/vendor/sparkline/index.js"></script>
    <!-- FLOT CHART-->
    <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.resize.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.pie.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.time.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/Flot/jquery.flot.categories.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
    <!-- CLASSY LOADER-->
    <script src="https://rdx.indel.co/asset/vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
    <!-- MOMENT JS-->
    <script src="https://rdx.indel.co/asset/vendor/moment/min/moment-with-locales.min.js"></script>
    <!-- DEMO-->
    <script src="https://rdx.indel.co/asset/app/js/demo/demo-flot.js"></script>
    <!-- DATATABLES-->
    <script src="https://rdx.indel.co/asset/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/dataTables.buttons.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.bootstrap.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.colVis.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.flash.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.html5.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-buttons/js/buttons.print.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/datatables-responsive/js/responsive.bootstrap.js"></script>
    <script src="https://rdx.indel.co/asset/app/js/demo/demo-datatable.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript"
        src="https://rdx.indel.co/asset/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js">
    </script>
    <!-- The basic File Upload plugin-->

    <!-- The File Upload processing plugin-->

    <!-- The File Upload image preview & resize plugin-->

    <!-- DATETIMEPICKER-->
    <script type="text/javascript"
        src="https://rdx.indel.co/asset/vendor/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
    <!-- =============== APP SCRIPTS ===============-->

    <script src="https://rdx.indel.co/asset/vendor/Chart.js/Chart.min.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/select2/dist/js/select2.js"></script>
    <div id="viewEVENT" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 id="myModalLabelLarge" class="modal-title">EVENT DETAIL</h4>
                </div>
                <form method="POST" action="https://rdx.indel.co/emp/events/edit" accept-charset="UTF-8"
                    class="form-horizontal"><input name="_token" type="hidden"
                        value="Mox6MmARPKpUdcLixhwVATfs1cZA6iX6oEqSrwJH">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Event Date</label>
                                    <div class="col-sm-4">
                                        <input type="text" id="eventdate" class="form-control" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Event Time</label>
                                    <div class="col-sm-4">
                                        <div class="input-group date">
                                            <input type="time" id="eventtime" class="form-control" readonly>
                                            <span class="input-group-addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="attachEventTypesEdit">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Event Type</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="eventtype" class="form-control" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" id="eventbranch" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Event Detail</label>
                                    <div class="col-sm-10">
                                        <textarea rows="4" id="eventdetail" class="form-control" readonly></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Site</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="sitename" value="" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Employee</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="" id="employeename" value="" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script type="text/javascript">
        //  $(document).ready(function(){
        //    setTimeout(function () {
        //      window.location.replace("https://rdx.indel.co/logout");
        //    }, 3600000);
        //  });
    </script>
    <script type="text/javascript">
        $('.select2-1').select2({
            theme: 'bootstrap'
        });

        $('.select2-3').select2({
            theme: 'bootstrap'
        });
        $('.datepicker').datepicker({
            orientation: "bottom auto",
            daysOfWeekHighlighted: "0",
            weekStart: 1,
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true,
            toggleActive: true
        });

        $('.input-daterange').datepicker({
            format: "dd-mm-yyyy",
            orientation: "bottom auto",
            daysOfWeekHighlighted: "0",
            weekStart: 1,
            autoclose: true,
            todayHighlight: true,
            toggleActive: true
        });

        $('.datetimepicker').datetimepicker({
            format: 'LT'
        });

        $('.alpha_numeric_validation').on('keypress', function(e) {
            var code = e.keyCode || e.which;
            if ((code == 8) || (code >= 48 && code <= 57) || (code == 43) || (code >= 97 && code <= 122) || (code ==
                    20) || (code == 16) || (code == 32) || (code >= 65 && code <= 90)) {
                return true;
            } else {
                return false;
            }
        });

        $('.alphabets_validation').on('keypress', function(e) {
            var code = e.keyCode || e.which;
            if ((code == 8) || (code >= 97 && code <= 122) || (code == 20) || (code == 16) || (code == 32) || (
                    code >= 65 && code <= 90)) {
                return true;
            } else {
                return false;
            }
        });

        $('.numeric_validation').on('keypress', function(e) {
            var code = e.keyCode || e.which;
            if ((code == 8) || (code >= 48 && code <= 57) || (code == 32)) {
                return true;
            } else {
                return false;
            }
        });

        $('.form-control').on('keypress', function(e) {
            var code = e.keyCode || e.which;
            if (code == 222 || code == 34 || code == 39 || code == 38) {
                return false;
            } else {
                return true;
            }
        });

        var checking_one_point = true;
        var number_of_points = 0;
        var digits_after_point = 0;
        $('.payment_validation_with_point').on('keypress', function(e) {
            var code = e.keyCode || e.which;
            var value_of = $(this).val();
            checking_one_point = true;
            for (var i = 0; i < value_of.length; i++) {
                if (value_of[i] == '.') {
                    checking_one_point = false;
                }
                if (checking_one_point == false) {
                    digits_after_point += 1;
                }
            }

            if (checking_one_point == false && digits_after_point > 2) {
                digits_after_point = 0;
                return false;
            } else if (code == 46 && checking_one_point == true) {
                digits_after_point = 0;
                return true;
            } else if (((code == 8) || (code >= 48 && code <= 57))) {
                digits_after_point = 0;
                return true;
            } else {
                digits_after_point = 0;
                return false;
            }
        });

        $('.contact_no_validation').on('keypress', function(e) {
            var code = e.keyCode || e.which;
            if ((code == 8) || (code >= 48 && code <= 57) || (code == 43)) {
                return true;
            } else {
                return false;
            }
        });

        $('.text_area_validation').on('keypress', function(e) {
            var code = e.keyCode || e.which;
            if ((code == 8) || (code >= 48 && code <= 57)) {
                return true;
            } else {
                return false;
            }
        });

        $(document).ready(function() {
            $.ajax({
                url: "https://rdx.indel.co/auto/bookOnOff",
                type: "POST",
                data: {
                    'auto': 'auto',
                    '_token': $('input[name=_token]').val()
                },
                success: function(result) {
                    // nothing to show up
                },
                error: function() {
                    // nothing to do with
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>

    <script type="text/javascript">
        $('.datatableOrdered').DataTable({
            "order": [
                [0, "desc"]
            ]
        });
        // TIMINGS IN THE TOP RIGHT CORNER
        (function(window, document, $, undefined) {

            $(function() {

                $('[data-now]').each(function() {
                    var element = $(this),
                        format = element.data('format');

                    function updateTime() {
                        var dt = moment(new Date()).format(format);
                        element.text(dt);
                    }

                    updateTime();
                    setInterval(updateTime, 1000);

                });
            });

        })(window, document, window.jQuery);
        // MONTHLY UPLOAD
        (function(window, document, $, undefined) {

            $(function() {

                var $scroller = $(window),
                    inViewFlagClass =
                    'js-is-in-view'; // a classname to detect when a chart has been triggered after scroll

                $('[data-classyloader]').each(initClassyLoader);

                function initClassyLoader() {

                    var $element = $(this),
                        options = $element.data();

                    // At lease we need a data-percentage attribute
                    if (options) {
                        if (options.triggerInView) {

                            $scroller.scroll(function() {
                                checkLoaderInVIew($element, options);
                            });
                            // if the element starts already in view
                            checkLoaderInVIew($element, options);
                        } else
                            startLoader($element, options);
                    }
                }

                function checkLoaderInVIew(element, options) {
                    var offset = -20;
                    if (!element.hasClass(inViewFlagClass) &&
                        $.Utils.isInView(element, {
                            topoffset: offset
                        })) {
                        startLoader(element, options);
                    }
                }

                function startLoader(element, options) {
                    element.ClassyLoader(options).addClass(inViewFlagClass);
                }

            });

        })(window, document, window.jQuery);
        // SPARKLINE
        // -----------------------------------

        (function(window, document, $, undefined) {

            $(function() {

                $('[data-sparkline]').each(initSparkLine);

                function initSparkLine() {
                    var $element = $(this),
                        options = $element.data(),
                        values = options.values && options.values.split(',');

                    options.type = options.type || 'bar'; // default chart is bar
                    options.disableHiddenCheck = true;

                    $element.sparkline(values, options);

                    if (options.resize) {
                        $(window).resize(function() {
                            $element.sparkline(values, options);
                        });
                    }
                }
            });

        })(window, document, window.jQuery);

        ///////////////////////////////////////////////
        // ON CHANGING OF WEEK INSIDE THE DASHBOARD ///
        ///////////////////////////////////////////////

        // Iste code here //

        var ctx = document.getElementById("Weekly_Shifts_Status").getContext("2d");

        var cData = JSON.parse(
            `{"seven_days":[{"date_of":"28-02-2022","confirm":40,"unconfirm":0,"unassign":0,"total_shifts":425,"total_shifts_count":40},{"date_of":"01-03-2022","confirm":35,"unconfirm":0,"unassign":2,"total_shifts":370,"total_shifts_count":37},{"date_of":"02-03-2022","confirm":36,"unconfirm":0,"unassign":1,"total_shifts":374,"total_shifts_count":37},{"date_of":"03-03-2022","confirm":27,"unconfirm":0,"unassign":5,"total_shifts":336,"total_shifts_count":32},{"date_of":"04-03-2022","confirm":27,"unconfirm":0,"unassign":2,"total_shifts":286,"total_shifts_count":29},{"date_of":"05-03-2022","confirm":22,"unconfirm":0,"unassign":4,"total_shifts":271,"total_shifts_count":26},{"date_of":"06-03-2022","confirm":19,"unconfirm":0,"unassign":4,"total_shifts":235,"total_shifts_count":23}],"current_day":{"date_of":"28-02-2022","confirm":40,"unconfirm":0,"unassign":0}}`
        );
        // console.log(cData);

        var data = {
            labels: [cData['seven_days'][0]['date_of'], cData['seven_days'][1]['date_of'], cData['seven_days'][2][
                'date_of'
            ], cData['seven_days'][3]['date_of'], cData['seven_days'][4]['date_of'], cData['seven_days'][5][
                'date_of'
            ], cData['seven_days'][6]['date_of']],
            datasets: [{
                label: "Hours",
                backgroundColor: "#039656",
                data: [cData['seven_days'][0]['total_shifts'], cData['seven_days'][1]['total_shifts'], cData[
                    'seven_days'][2]['total_shifts'], cData['seven_days'][3]['total_shifts'], cData[
                    'seven_days'][4]['total_shifts'], cData['seven_days'][5]['total_shifts'], cData[
                    'seven_days'][6]['total_shifts']]
            }, {
                label: "Shifts",
                backgroundColor: "#08415c",
                data: [cData['seven_days'][0]['total_shifts_count'], cData['seven_days'][1][
                        'total_shifts_count'
                    ], cData['seven_days'][2]['total_shifts_count'], cData[
                        'seven_days'][3]['total_shifts_count'], cData['seven_days'][4][
                        'total_shifts_count'
                    ], cData['seven_days'][5]['total_shifts_count'], cData['seven_days']
                    [6]['total_shifts_count']
                ]
            }]
        };

        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                barValueSpacing: 20,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            precision: 0,
                            suggestedMax: 12
                        }
                    }]
                }
            }
        });


        <
        !-- ///////////////////////////////////////////////
        // ON CHANGING OF WEEK INSIDE THE DASHBOARD ///
        /////////////////////////////////////////////// -->


        $('#weekly_roster').on('change', function() {
            var week = $(this).val();
            var branch = $('#weekly_roster_branch').val();
            // console.log(branch);
            $('#remove_Weekly_Shifts_Status').html(
                '<canvas id="Weekly_Shifts_Status"  style="height:299px !important;" height="0"></canvas>');
            $.ajax({
                url: "https://rdx.indel.co/home/getCurrentWeekShifts",
                type: "POST",
                data: {
                    'week': week,
                    'branch': branch,
                    '_token': $('input[name=_token]').val()
                },
                success: function(data) {
                    if (data != '') {
                        var cData = jQuery.parseJSON(data);
                        var ctx = document.getElementById("Weekly_Shifts_Status").getContext("2d");
                        var data = {
                            labels: [cData['seven_days'][0]['date_of'], cData['seven_days'][1][
                                'date_of'
                            ], cData['seven_days'][2]['date_of'], cData['seven_days'][3][
                                'date_of'
                            ], cData['seven_days'][4]['date_of'], cData['seven_days'][5][
                                'date_of'
                            ], cData['seven_days'][6]['date_of']],
                            datasets: [{
                                label: "Hours",
                                backgroundColor: "#039656",
                                data: [cData['seven_days'][0]['total_shifts'], cData[
                                    'seven_days'][1]['total_shifts'], cData[
                                    'seven_days'][2]['total_shifts'], cData[
                                    'seven_days'][3]['total_shifts'], cData[
                                    'seven_days'][4]['total_shifts'], cData[
                                    'seven_days'][5]['total_shifts'], cData[
                                    'seven_days'][6]['total_shifts']]
                            }, {
                                label: "Shifts",
                                backgroundColor: "#08415c",
                                data: [cData['seven_days'][0]['total_shifts_count'], cData[
                                    'seven_days'][1]['total_shifts_count'], cData[
                                    'seven_days'][2]['total_shifts_count'], cData[
                                    'seven_days'][3]['total_shifts_count'], cData[
                                    'seven_days'][4]['total_shifts_count'], cData[
                                    'seven_days'][5]['total_shifts_count'], cData[
                                    'seven_days'][6]['total_shifts_count']]
                            }]
                        };

                        var myBarChart = new Chart(ctx, {
                            type: 'bar',
                            data: data,
                            options: {
                                barValueSpacing: 20,
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            min: 0,
                                            precision: 0,
                                            suggestedMax: 12
                                        }
                                    }]
                                }
                            }
                        });


                    }
                },
                error: function() {
                    // $('#displayMessage').html('');
                }
            });
        });

        $('#weekly_roster_branch').on('change', function() {
            var branch = $(this).val();
            var week = $('#weekly_roster').val();

            $('#remove_Weekly_Shifts_Status').html(
                '<canvas id="Weekly_Shifts_Status"  style="height:299px !important;" height="0"></canvas>');

            $.ajax({
                url: "https://rdx.indel.co/home/getCurrentWeekShifts",
                type: "POST",
                data: {
                    'week': week,
                    'branch': branch,
                    '_token': $('input[name=_token]').val()
                },
                success: function(data) {
                    if (data != '') {
                        var cData = jQuery.parseJSON(data);
                        var ctx = document.getElementById("Weekly_Shifts_Status").getContext("2d");
                        var data = {
                            labels: [cData['seven_days'][0]['date_of'], cData['seven_days'][1][
                                'date_of'
                            ], cData['seven_days'][2]['date_of'], cData['seven_days'][3][
                                'date_of'
                            ], cData['seven_days'][4]['date_of'], cData['seven_days'][5][
                                'date_of'
                            ], cData['seven_days'][6]['date_of']],
                            datasets: [{
                                label: "Hours",
                                backgroundColor: "#039656",
                                data: [cData['seven_days'][0]['total_shifts'], cData[
                                    'seven_days'][1]['total_shifts'], cData[
                                    'seven_days'][2]['total_shifts'], cData[
                                    'seven_days'][3]['total_shifts'], cData[
                                    'seven_days'][4]['total_shifts'], cData[
                                    'seven_days'][5]['total_shifts'], cData[
                                    'seven_days'][6]['total_shifts']]
                            }, {
                                label: "Shifts",
                                backgroundColor: "#08415c",
                                data: [cData['seven_days'][0]['total_shifts_count'], cData[
                                    'seven_days'][1]['total_shifts_count'], cData[
                                    'seven_days'][2]['total_shifts_count'], cData[
                                    'seven_days'][3]['total_shifts_count'], cData[
                                    'seven_days'][4]['total_shifts_count'], cData[
                                    'seven_days'][5]['total_shifts_count'], cData[
                                    'seven_days'][6]['total_shifts_count']]
                            }]
                        };

                        var myBarChart = new Chart(ctx, {
                            type: 'bar',
                            data: data,
                            options: {
                                barValueSpacing: 20,
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            min: 0,
                                            precision: 0,
                                            suggestedMax: 12
                                        }
                                    }]
                                }
                            }
                        });
                    }
                }
            });
        });

        // end of iste code here //
    </script>

    <script type="text/javascript">
        var color_array = ["#23b7e5", "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow',
            "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5",
            "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow'
        ];

        $(function() {
            var chart1;
            var cData = JSON.parse(`{"label":["Non-operational","Operational"],"data":[10,820]}`);
            var ctx = $("#pie-chartx");
            var data = {
                labels: cData.label,
                datasets: [{
                    label: "Users Count",
                    data: cData.data,
                    backgroundColor: [
                        "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF',
                        'purple', 'yellow', "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red",
                        '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5", "orange", "#9F81F7",
                        "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow'
                    ],
                }]
            };
            //options
            var options = {
                responsive: true,
                legend: {
                    display: true,
                    position: "right",
                    labels: {
                        fontColor: "#333",
                        fontSize: 10
                    }
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var allData = data.datasets[tooltipItem.datasetIndex].data;
                            var tooltipLabel = data.labels[tooltipItem.index];
                            var tooltipData = allData[tooltipItem.index];
                            var total = 0;
                            for (var i = 0; i < allData.length; i++) {
                                total += allData[i];
                            }
                            var tooltipPercentage = Math.round((tooltipData / total) * 100);
                            return tooltipLabel + ':' + ' ' + tooltipData + ' (' + tooltipPercentage + '%)';
                        }
                    }
                }
            };

            //create Pie Chart class object
            chart1 = new Chart(ctx, {
                type: "doughnut",
                data: data,
                options: options
            });
        });


        $('#employment_by_branch').on('change', function() {
            var branch = $(this).val();
            $('#RemoveDiv_Employment').html(
                '<canvas id="pie-chartx" style="display: block;height: 309px;"></canvas>');

            var chart1;
            $.ajax({
                url: "https://rdx.indel.co/home/getemploymentbybranch",
                type: "POST",
                data: {
                    'branch': branch,
                    '_token': $('input[name=_token]').val()
                },
                success: function(dataGot) {

                    var cData = JSON.parse(dataGot);
                    var ctx = $("#pie-chartx");
                    var data = {
                        labels: cData.label,
                        datasets: [{
                            label: "Users Count",
                            data: cData.data,
                            backgroundColor: [
                                "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red",
                                '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5",
                                "orange", "#9F81F7", "#32ac8e", "red", '#585858',
                                '#CCEEFF', 'purple', 'yellow', "#23b7e5", "orange",
                                "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF',
                                'purple', 'yellow'
                            ],
                        }]
                    };

                    //options
                    var options = {
                        responsive: true,
                        legend: {
                            display: true,
                            position: "right",
                            labels: {
                                fontColor: "#333",
                                fontSize: 10
                            }
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var allData = data.datasets[tooltipItem.datasetIndex].data;
                                    var tooltipLabel = data.labels[tooltipItem.index];
                                    var tooltipData = allData[tooltipItem.index];
                                    var total = 0;
                                    for (var i = 0; i < allData.length; i++) {
                                        total += allData[i];
                                    }
                                    var tooltipPercentage = Math.round((tooltipData / total) *
                                        100);
                                    return tooltipLabel + ':' + ' ' + tooltipData + ' (' +
                                        tooltipPercentage + '%)';
                                }
                            }
                        }
                    };

                    //create Pie Chart class object
                    chart1 = new Chart(ctx, {
                        type: "doughnut",
                        data: data,
                        options: options
                    });

                },
            });
        });

        <
        !-- ////////////////////////////////////////////////////////////////////// -->
        <
        !-- ////////////////////////////////////////////////////////////////////// -->
        <
        !-- ////////////////////////////////////////////////////////////////////// -->
        $(function() {
            var chart1;
            var cData = JSON.parse(
                `{"label":["Security Guarding","Door Supervision","Close Protection"],"data":[158,618,1]}`);
            var ctx = $("#pie-charty");
            var data = {
                labels: cData.label,
                datasets: [{
                    label: "Users Count",
                    data: cData.data,
                    backgroundColor: [
                        "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF',
                        'purple', 'yellow', "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red",
                        '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5", "orange", "#9F81F7",
                        "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow'
                    ],
                }]
            };
            //options
            var options = {
                legend: {
                    display: true,
                    position: "right",
                    // align:"top",
                    labels: {
                        fontColor: "#333",
                        fontSize: 10
                    }
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var allData = data.datasets[tooltipItem.datasetIndex].data;
                            var tooltipLabel = data.labels[tooltipItem.index];
                            var tooltipData = allData[tooltipItem.index];
                            var total = 0;
                            for (var i = 0; i < allData.length; i++) {
                                total += allData[i];
                            }
                            var tooltipPercentage = Math.round((tooltipData / total) * 100);
                            return tooltipLabel + ':' + ' ' + tooltipData + ' (' + tooltipPercentage + '%)';
                        }
                    }
                }
            };

            //create Pie Chart class object
            chart1 = new Chart(ctx, {
                type: "doughnut",
                data: data,
                options: options
            });
        });

        // Branches concept here //
        $('#sia_by_branch').on('change', function() {
            var branch = $(this).val();
            $('#RemoveDiv_SIALicense').html(
                '<canvas id="pie-charty" style="display: block;height: 309px;"></canvas>');

            $.ajax({
                url: "https://rdx.indel.co/home/getSIAbybranch",
                type: "POST",
                data: {
                    'branch': branch,
                    '_token': $('input[name=_token]').val()
                },
                success: function(dataGot) {

                    var cData = JSON.parse(dataGot);
                    var ctx = $("#pie-charty");
                    var data = {
                        labels: cData.label,
                        datasets: [{
                            label: "Users Count",
                            data: cData.data,
                            backgroundColor: [
                                "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red",
                                '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5",
                                "orange", "#9F81F7", "#32ac8e", "red", '#585858',
                                '#CCEEFF', 'purple', 'yellow', "#23b7e5", "orange",
                                "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF',
                                'purple', 'yellow'
                            ],
                        }]
                    };

                    //options
                    var options = {
                        responsive: true,
                        // circumference: Math.PI,
                        // rotation: 1.0 * Math.PI,
                        // percentageInnerCutout: 10,

                        // indexLabel: "#percent%",
                        //  innerRadius: "60%",
                        //  indexLabelPlacement: "inside",
                        legend: {
                            display: true,
                            position: "right",
                            labels: {
                                fontColor: "#333",
                                fontSize: 10
                            }
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var allData = data.datasets[tooltipItem.datasetIndex].data;
                                    var tooltipLabel = data.labels[tooltipItem.index];
                                    var tooltipData = allData[tooltipItem.index];
                                    var total = 0;
                                    for (var i = 0; i < allData.length; i++) {
                                        total += allData[i];
                                    }
                                    var tooltipPercentage = Math.round((tooltipData / total) *
                                        100);
                                    return tooltipLabel + ':' + ' ' + tooltipData + ' (' +
                                        tooltipPercentage + '%)';
                                }
                            }
                        }
                    };

                    //create Pie Chart class object
                    chart1 = new Chart(ctx, {
                        type: "doughnut",
                        data: data,
                        options: options
                    });

                },
            });
        });

        $(function() {
            var chart1;
            var cData = JSON.parse(`{"label":["Health & Safety"],"data":[1]}`);
            var ctx = $("#pie-chartz");
            var data = {
                labels: cData.label,
                datasets: [{
                    label: "Users Count",
                    data: cData.data,
                    backgroundColor: [
                        "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF',
                        'purple', 'yellow', "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red",
                        '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5", "orange", "#9F81F7",
                        "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow'
                    ],
                }]
            };
            //options
            var options = {
                responsive: true,
                legend: {
                    display: true,
                    position: "right",
                    labels: {
                        fontColor: "#333",
                        fontSize: 10
                    }
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var allData = data.datasets[tooltipItem.datasetIndex].data;
                            var tooltipLabel = data.labels[tooltipItem.index];
                            var tooltipData = allData[tooltipItem.index];
                            var total = 0;
                            for (var i = 0; i < allData.length; i++) {
                                total += allData[i];
                            }
                            var tooltipPercentage = Math.round((tooltipData / total) * 100);
                            return tooltipLabel + ':' + ' ' + tooltipData + ' (' + tooltipPercentage + '%)';
                        }
                    }
                }
            };

            //create Pie Chart class object
            chart1 = new Chart(ctx, {
                type: "doughnut",
                data: data,
                options: options
            });
        });


        $('#training_by_branch').on('change', function() {
            var branch = $(this).val();
            $('#removeDiv_Trainings').html(
                '<canvas id="pie-chartz" style="display: block;height: 309px;"></canvas>');

            $.ajax({
                url: "https://rdx.indel.co/home/gettrainingbybranch",
                type: "POST",
                data: {
                    'branch': branch,
                    '_token': $('input[name=_token]').val()
                },
                success: function(dataGot) {

                    var cData = JSON.parse(dataGot);
                    var ctx = $("#pie-chartz");
                    var data = {
                        labels: cData.label,
                        datasets: [{
                            label: "Users Count",
                            data: cData.data,
                            backgroundColor: [
                                "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red",
                                '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5",
                                "orange", "#9F81F7", "#32ac8e", "red", '#585858',
                                '#CCEEFF', 'purple', 'yellow', "#23b7e5", "orange",
                                "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF',
                                'purple', 'yellow'
                            ],
                        }]
                    };

                    //options
                    var options = {
                        responsive: true,
                        legend: {
                            display: true,
                            position: "right",
                            labels: {
                                fontColor: "#333",
                                fontSize: 10
                            }
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var allData = data.datasets[tooltipItem.datasetIndex].data;
                                    var tooltipLabel = data.labels[tooltipItem.index];
                                    var tooltipData = allData[tooltipItem.index];
                                    var total = 0;
                                    for (var i = 0; i < allData.length; i++) {
                                        total += allData[i];
                                    }
                                    var tooltipPercentage = Math.round((tooltipData / total) *
                                        100);
                                    return tooltipLabel + ':' + ' ' + tooltipData + ' (' +
                                        tooltipPercentage + '%)';
                                }
                            }
                        }
                    };

                    //create Pie Chart class object
                    chart1 = new Chart(ctx, {
                        type: "doughnut",
                        data: data,
                        options: options
                    });

                },
            });
        });


        $(function() {
            var chart1;
            var cData = JSON.parse(`[]`);
            var ctx = $("#pie-chart");
            var data = {
                labels: cData.label,
                datasets: [{
                    label: "Users Count",
                    data: cData.data,
                    backgroundColor: [
                        "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF',
                        'purple', 'yellow', "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red",
                        '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5", "orange", "#9F81F7",
                        "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow'
                    ],
                }]
            };
            //options
            var options = {
                responsive: true,
                legend: {
                    display: true,
                    position: "right",
                    labels: {
                        fontColor: "#333",
                        fontSize: 10
                    }
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var allData = data.datasets[tooltipItem.datasetIndex].data;
                            var tooltipLabel = data.labels[tooltipItem.index];
                            var tooltipData = allData[tooltipItem.index];
                            var total = 0;
                            for (var i = 0; i < allData.length; i++) {
                                total += allData[i];
                            }
                            var tooltipPercentage = Math.round((tooltipData / total) * 100);
                            return tooltipLabel + ':' + ' ' + tooltipData + ' (' + tooltipPercentage + '%)';
                        }
                    }
                }
            };

            //create Pie Chart class object
            chart1 = new Chart(ctx, {
                type: "doughnut",
                data: data,
                options: options
            });
        });



        $('#event_type_by_branch').on('change', function() {
            var branch = $(this).val();

            $('#removeDiv_Events').html('<canvas id="pie-chart" style="display: block;height: 309px;"></canvas>');



            $.ajax({
                url: "https://rdx.indel.co/home/geteventbybranch",
                type: "POST",
                data: {
                    'branch': branch,
                    '_token': $('input[name=_token]').val()
                },
                success: function(dataGot) {

                    var cData = JSON.parse(dataGot);
                    var ctx = $("#pie-chart");
                    var data = {
                        labels: cData.label,
                        datasets: [{
                            label: "Users Count",
                            data: cData.data,
                            backgroundColor: [
                                "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red",
                                '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5",
                                "orange", "#9F81F7", "#32ac8e", "red", '#585858',
                                '#CCEEFF', 'purple', 'yellow', "#23b7e5", "orange",
                                "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF',
                                'purple', 'yellow'
                            ],
                        }]
                    };

                    //options
                    var options = {
                        responsive: true,
                        legend: {
                            display: true,
                            position: "right",
                            labels: {
                                fontColor: "#333",
                                fontSize: 10
                            }
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var allData = data.datasets[tooltipItem.datasetIndex].data;
                                    var tooltipLabel = data.labels[tooltipItem.index];
                                    var tooltipData = allData[tooltipItem.index];
                                    var total = 0;
                                    for (var i = 0; i < allData.length; i++) {
                                        total += allData[i];
                                    }
                                    var tooltipPercentage = Math.round((tooltipData / total) *
                                        100);
                                    return tooltipLabel + ':' + ' ' + tooltipData + ' (' +
                                        tooltipPercentage + '%)';
                                }
                            }
                        }
                    };

                    //create Pie Chart class object
                    chart1 = new Chart(ctx, {
                        type: "doughnut",
                        data: data,
                        options: options
                    });

                },
            });
        });
    </script>
    <script>
        var branch_id = "1";
        $('.attachBranches').on('change', '.branchControl', function() {
            branch_id = $(this).val();
            if (branch_id != '') {
                $.ajax({
                    url: "https://rdx.indel.co/emp/getEventsOfBranch",
                    type: "POST",
                    data: {
                        'branch_id': branch_id,
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        // get employees here and attach it to the place where needed
                        if (data != '') {
                            var dataDecoded = jQuery.parseJSON(data);
                            var event_types = '<div class="form-group">' +
                                '<div class="attachEventTypes">' +
                                '<select class="select2-1 form-control" name="event_type" id="eventTypeID" style="width:200px" required>' +
                                '<option value="">Select Event Type</option>';
                            for (var i = 0; i < dataDecoded.length; i++) {
                                event_types += '<option value="' + dataDecoded[i]['event_id'] + '">' +
                                    dataDecoded[i]['event_name'] + '</option>'
                            }
                            event_types += '</select>' +
                                '</div>' +
                                '</div>';
                            $('.attachEventTypes').html(event_types);
                            $('.select2-1').select2({
                                theme: 'bootstrap'
                            });
                        }
                    },
                    error: function() {
                        swal("Warning!", "Something went wrong.", "success");
                    }
                });
            } else {
                var event_types = '<div class="form-group">' +
                    '<div class="attachEventTypes">' +
                    '<select class="select2-1 form-control" name="event_type" id="eventTypeID" style="width:200px" required>' +
                    '<option value="">Select Event Type</option>' +
                    '</select>' +
                    '</div>' +
                    '</div>';
                $('.attachEventTypes').html(event_types);
                $('.select2-1').select2({
                    theme: 'bootstrap'
                });
            }

        });

        $('.attachEventTypes').on('change', '#eventTypeID', function() {
            var event_id = $(this).val();
            var event_date = $('#eventDateID').val();
            $.ajax({
                url: "https://rdx.indel.co/events/getEventsOnSearch",
                type: "POST",
                data: {
                    'branch_id': branch_id,
                    'event_id': event_id,
                    'event_date': event_date,
                    '_token': $('input[name=_token]').val()
                },
                success: function(data) {
                    // get employees here and attach it to the place where needed
                    if (data != '') {
                        var dataDecoded = jQuery.parseJSON(data);
                        var event_table = '<table class="table table-hovered attachEventTable">' +
                            '<thead>' +
                            '<tr>' +
                            '<th style="width:10%">DATE</th>' +
                            '<th style="width:15%">TIME</th>' +
                            '<th style="width:20%">EVENT TYPE</th>' +
                            '<th style="width:30%">EMPLOYEE / SUB EMPLOYEE</th>' +
                            '<th style="width:18%">CREATED BY</th>' +
                            '<th style="width:7%">ACTION</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>';
                        for (var i = 0; i < dataDecoded.length; i++) {
                            event_table += '<tr id="rowDeleteempIDEdit' + dataDecoded[i]['event_id'] +
                                '">' +
                                '<input type="hidden" id="empIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['employee_id'] + '">' +
                                '<input type="hidden" id="empNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['full_name'] + '">' +
                                '<input type="hidden" id="subIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['subcontractor_id'] + '">' +
                                '<input type="hidden" id="subEmpIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['subemployee_id'] + '">' +
                                '<input type="hidden" id="subEmpNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['sub_employee_name'] + '">' +
                                '<input type="hidden" id="siteIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['site_id'] + '">' +
                                '<input type="hidden" id="siteNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['site_name'] + '">' +
                                '<input type="hidden" id="eventTypeIDEdit' + dataDecoded[i][
                                    'event_id'
                                ] + '" name="" value="' + dataDecoded[i]['event_type'] +
                                '">' +
                                '<input type="hidden" id="eventTypeNAMEEdit' + dataDecoded[i][
                                    'event_id'
                                ] + '" name="" value="' + dataDecoded[i]['event_name'] +
                                '">' +
                                '<input type="hidden" id="eventDetail' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['event_detail'] + '">' +
                                '<input type="hidden" id="eventDateEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['event_date'] + '">' +
                                '<input type="hidden" id="eventTimeEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['event_time'] + '">' +
                                '<input type="hidden" id="branchIdEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['branch_id'] + '">' +
                                '<input type="hidden" id="shiftIdEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['shift_id'] + '">' +
                                '<td style="width:10%">' + dataDecoded[i]['event_date'] + '</td>' +
                                '<td style="width:15%">' + dataDecoded[i]['event_time'] + '</td>' +
                                '<td style="width:20%">' + dataDecoded[i]['event_name'] + '</td>' +
                                '<td style="width:30%">';
                            if (dataDecoded[i]['full_name'] != 'null' && dataDecoded[i]['full_name'] !=
                                '' && dataDecoded[i]['full_name'] != null) {
                                event_table += dataDecoded[i]['full_name'];
                            } else if (dataDecoded[i]['sub_employee_name'] != 'null' && dataDecoded[i][
                                    'sub_employee_name'
                                ] != '' && dataDecoded[i]['sub_employee_name'] != null) {
                                event_table += dataDecoded[i]['sub_employee_name'];
                            }
                            event_table += '</td>' +
                                '<td style="width:18%">' + dataDecoded[i]['user_name'] + '</td>' +
                                '<td style="width:7%">' +
                                '<button type="button" alt="' + dataDecoded[i]['event_id'] +
                                '" class="getEventID btn btn-green btn-xs " data-toggle="modal" data-target="#viewEVENT" title="View Event Details"><span class="icon-list"></span></button>' +
                                '</td>' +
                                '</tr>';
                        }
                        event_table += '</tbody>' +
                            '</table>';
                        $('.attachEventTable').html(event_table);
                    }
                },
                error: function() {
                    swal("Warning!", "Something went wrong.", "success");
                }
            });

        });

        $('.attachEventDate').on('change', '#eventDateID', function() {
            var event_date = $(this).val();
            var event_id = $('#eventTypeID').val();
            $.ajax({
                url: "https://rdx.indel.co/events/getEventsOnSearch",
                type: "POST",
                data: {
                    'branch_id': branch_id,
                    'event_id': event_id,
                    'event_date': event_date,
                    '_token': $('input[name=_token]').val()
                },
                success: function(data) {
                    // get employees here and attach it to the place where needed
                    if (data != '') {
                        var dataDecoded = jQuery.parseJSON(data);
                        var event_table = '<table class="table table-hovered attachEventTable">' +
                            '<thead>' +
                            '<tr>' +
                            '<th style="width:10%">DATE</th>' +
                            '<th style="width:15%">TIME</th>' +
                            '<th style="width:20%">EVENT TYPE</th>' +
                            '<th style="width:30%">EMPLOYEE / SUB EMPLOYEE</th>' +
                            '<th style="width:18%">CREATED BY</th>' +
                            '<th style="width:7%">ACTION</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>';
                        for (var i = 0; i < dataDecoded.length; i++) {
                            event_table += '<tr id="rowDeleteempIDEdit' + dataDecoded[i]['event_id'] +
                                '">' +
                                '<input type="hidden" id="empIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['employee_id'] + '">' +
                                '<input type="hidden" id="empNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['full_name'] + '">' +
                                '<input type="hidden" id="subIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['subcontractor_id'] + '">' +
                                '<input type="hidden" id="subEmpIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['subemployee_id'] + '">' +
                                '<input type="hidden" id="subEmpNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['sub_employee_name'] + '">' +
                                '<input type="hidden" id="siteIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['site_id'] + '">' +
                                '<input type="hidden" id="siteNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['site_name'] + '">' +
                                '<input type="hidden" id="eventTypeIDEdit' + dataDecoded[i][
                                    'event_id'
                                ] + '" name="" value="' + dataDecoded[i]['event_type'] +
                                '">' +
                                '<input type="hidden" id="eventTypeNAMEEdit' + dataDecoded[i][
                                    'event_id'
                                ] + '" name="" value="' + dataDecoded[i]['event_name'] +
                                '">' +
                                '<input type="hidden" id="eventDetail' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['event_detail'] + '">' +
                                '<input type="hidden" id="eventDateEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['event_date'] + '">' +
                                '<input type="hidden" id="eventTimeEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['event_time'] + '">' +
                                '<input type="hidden" id="branchIdEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['branch_id'] + '">' +
                                '<input type="hidden" id="shiftIdEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['shift_id'] + '">' +
                                '<td style="width:10%">' + dataDecoded[i]['event_date'] + '</td>' +
                                '<td style="width:15%">' + dataDecoded[i]['event_time'] + '</td>' +
                                '<td style="width:20%">' + dataDecoded[i]['event_name'] + '</td>' +
                                '<td style="width:30%">';
                            if (dataDecoded[i]['full_name'] != 'null' && dataDecoded[i]['full_name'] !=
                                '' && dataDecoded[i]['full_name'] != null) {
                                event_table += dataDecoded[i]['full_name'];
                            } else if (dataDecoded[i]['sub_employee_name'] != 'null' && dataDecoded[i][
                                    'sub_employee_name'
                                ] != '' && dataDecoded[i]['sub_employee_name'] != null) {
                                event_table += dataDecoded[i]['sub_employee_name'];
                            }
                            event_table += '</td>' +
                                '<td style="width:18%">' + dataDecoded[i]['user_name'] + '</td>' +
                                '<td style="width:7%">' +
                                '<button type="button" alt="' + dataDecoded[i]['event_id'] +
                                '" class="getEventID btn btn-green btn-xs " data-toggle="modal" data-target="#viewEVENT" title="View Event Details"><span class="icon-list"></span></button>' +
                                '</td>' +
                                '</tr>';
                        }
                        event_table += '</tbody>' +
                            '</table>';
                        $('.attachEventTable').html(event_table);
                    }
                },
                error: function() {
                    swal("Warning!", "Something went wrong.", "success");
                }
            });

        });
    </script>
    <script>
        $('#attachingTableInfo').on('click', '.getEventID', function() {
            var event_id = $(this).attr('alt');
            var event_detail = $('#eventDetail' + event_id).val();
            var employee_id = $('#empIDEdit' + event_id).val();
            var employee_name = $('#empNAMEEdit' + event_id).val();
            var subcontractor_id = $('#subIDEdit' + event_id).val();
            var subemployee_id = $('#subEmpIDEdit' + event_id).val();
            var subemployee_name = $('#subEmpNAMEEdit' + event_id).val();
            var event_type_id = $('#eventTypeIDEdit' + event_id).val();
            var event_type_name = $('#eventTypeNAMEEdit' + event_id).val();
            var site_id = $('#siteIDEdit' + event_id).val();
            var site_name = $('#siteNAMEEdit' + event_id).val();
            var event_date = $('#eventDateEdit' + event_id).val();
            var event_time = $('#eventTimeEdit' + event_id).val();
            var event_branch = $('#shiftBranch' + event_id).val();

            $('#eventbranch').val(event_branch);
            $('#eventdate').val(event_date);
            $('#eventtime').val(event_time);
            $('#eventtype').val(event_type_name);

            if (event_detail == 'null' || event_detail == '' || event_detail == 'NUll') {
                $('#eventdetail').val('');
            } else {
                $('#eventdetail').val(event_detail);
            }

            if (site_name == 'null' || site_name == '' || site_name == 'NUll') {
                $('#sitename').val('');
            } else {
                $('#sitename').val(site_name);
            }


            if (employee_id == '0') {
                if (subemployee_name == 'null' || subemployee_name == '' || subemployee_name == 'NUll') {
                    $('#employeename').val('');
                } else {
                    $('#employeename').val(subemployee_name);
                }
            } else {
                if (employee_name == 'null' || employee_name == '' || employee_name == 'NUll') {
                    $('#employeename').val('');
                } else {
                    $('#employeename').val(employee_name);
                }
            }
        });

        (function(window, document, $, undefined) {

            $(function() {

                $('[data-scrollable]').each(function() {

                    var element = $(this),
                        defaultHeight = 250;

                    element.slimScroll({
                        height: (element.data('height') || defaultHeight)
                    });

                });
            });

        })(window, document, window.jQuery);
    </script>
    <script>
        $('.SIAStaffdatatableOrdered').DataTable({
            initComplete: function() {
                var select = $('#SIA_Licenxe_Expiry_Employees').on('change', function() {
                    var branch_id = $(this).val();
                    $('#SIA_Staff_branch_id').val(branch_id);
                    var order = [];
                    var bala_array = [];
                    var column = '7';
                    var dir = 'asc';
                    $.ajax({
                        url: "https://rdx.indel.co/home/getnextTenSiaStaff",
                        type: "POST",
                        data: {
                            'branch_id': branch_id,
                            'length': 10,
                            'start': 0,
                            'order': column,
                            'dir': dir,
                            'posting_': 'hi',
                            '_token': $('input[name=_token]').val()
                        },
                        success: function(data) {
                            $('.SIAStaffdatatableOrdered').DataTable().clear().draw();
                        },
                        error: function() {
                            swal("Warning!", "Something went wrong.", "success");
                        }
                    });
                });
            },
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "paging": true,
            "ajax": {
                "url": "https://rdx.indel.co/home/getnextTenSiaStaff",
                "dataType": 'json',
                "type": 'POST',
                "data": function(d) {
                    var frm_data = $('form').serializeArray();
                    $.each(frm_data, function(key, val) {
                        d[val.name] = val.value;
                        // console.log(d['default_branch_id']);
                    });
                }
            },
            "columns": [{
                    "data": "sno"
                },
                {
                    "data": "name"
                },
                {
                    "data": "contact"
                },
                {
                    "data": "sianumber"
                },
                {
                    "data": "siatype"
                },
                {
                    "data": "siaexpiry"
                },
                {
                    "data": "status"
                }
            ]
        });

        $('#SIA_Licenxe_Expiry_Employees').on('change', function() {
            var get_value = $(this).val();
            $('#SIA_Staff_branch_id').val(get_value);
        });
    </script>
    <script type="text/javascript">
        // master roster table //
        $('.masterRosterReportDashBoard').DataTable({
            initComplete: function() {
                var select = $('#wholeTableRows').on('change',
                    '#day_selection_master_roster,#masterRosterReportDashBoardBranch,#shift_confirmation_master_roster',
                    function() {
                        var branch_id = $('#masterRosterReportDashBoardBranch').val();
                        var day_selelction = $('#day_selection_master_roster').val();
                        var shift_status = $('#shift_confirmation_master_roster').val();
                        $('#branch_id_master_roster').val(branch_id);
                        $('#day_selection_master_roster_put').val(day_selelction);
                        $('#putDateHereShifts').html(day_selelction);
                        $('#shift_confirmation_master_roster_put').val(shift_status);
                        var order = [];
                        var bala_array = [];
                        var column = '0';
                        var dir = 'asc';
                        $.ajax({
                            url: "https://rdx.indel.co/home/getnextTenMasterRoster",
                            type: "POST",
                            data: {
                                'branch_id': branch_id,
                                'length': 10,
                                'start': 0,
                                'order': column,
                                'dir': dir,
                                'posting_': 'hi',
                                '_token': $('input[name=_token]').val()
                            },
                            success: function(data) {
                                $('.masterRosterReportDashBoard').DataTable().clear().draw();
                            },
                            error: function() {
                                swal("Warning!", "Something went wrong.", "success");
                            }
                        });
                    });
            },
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "paging": true,
            "ajax": {
                "url": "https://rdx.indel.co/home/getnextTenMasterRoster",
                "dataType": 'json',
                "type": 'POST',
                "data": function(d) {
                    var frm_data = $('form').serializeArray();
                    $.each(frm_data, function(key, val) {
                        d[val.name] = val.value;
                    });
                }
            },
            "columns": [{
                    "data": "CLIENT"
                },
                {
                    "data": "SITE"
                },
                {
                    "data": "POST_CODE"
                },
                {
                    "data": "START_TIME"
                },
                {
                    "data": "END_TIME"
                },
                {
                    "data": "HOURS"
                },
                {
                    "data": "EMPLOYEE"
                },
                {
                    "data": "CONTACT"
                },
                {
                    "data": "SIA_TYPE"
                },
                {
                    "data": "SIA_EXPIRY"
                },
                {
                    "data": "STATUS"
                }
            ]
        });

        $('#wholeTableRows').on('change',
            '#day_selection_master_roster,#masterRosterReportDashBoardBranch,#shift_confirmation_master_roster',
            function() {
                var get_value = $('#masterRosterReportDashBoardBranch').val();
                var day_selelction = $('#day_selection_master_roster').val();
                var shift_status = $('#shift_confirmation_master_roster').val();
                $('#putDateHereShifts').html(day_selelction);
                $('#shift_confirmation_master_roster_put').val(shift_status);
                $('#branch_id_master_roster').val(get_value);
                $('#day_selection_master_roster_put').val(day_selelction);
            });
        // end of master roster table //
    </script>
    <script>
        $('#VisadatatableOrdered').DataTable({
            initComplete: function() {
                var select = $('#VISA_Expiry_Employees').on('change', function() {
                    var branch_id = $(this).val();
                    $('#VISA_Staff_branch_id').val(branch_id);
                    var order = [];
                    var bala_array = [];
                    var column = '6';
                    var dir = 'asc';
                    $.ajax({
                        url: "https://rdx.indel.co/home/getnextTen",
                        type: "POST",
                        data: {
                            'branch_id': branch_id,
                            'length': 10,
                            'start': 0,
                            'order': column,
                            'dir': dir,
                            'posting_': 'hi',
                            '_token': $('input[name=_token]').val()
                        },
                        success: function(data) {
                            $('#VisadatatableOrdered').DataTable().clear().draw();
                        },
                        error: function() {
                            swal("Warning!", "Something went wrong.", "success");
                        }
                    });
                });
            },
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "paging": true,
            "ajax": {
                "url": "https://rdx.indel.co/home/getnextTen",
                "dataType": 'json',
                "type": 'POST',
                "data": function(d) {
                    var frm_data = $('form').serializeArray();
                    $.each(frm_data, function(key, val) {
                        d[val.name] = val.value;
                        // console.log(d['default_branch_id']);
                    });
                }
            },
            "columns": [{
                    "data": "sno"
                },
                {
                    "data": "fore_name"
                },
                {
                    "data": "contact_no"
                },
                {
                    "data": "visa_type"
                },
                {
                    "data": "visa_expiry"
                },
                {
                    "data": "status"
                }
            ]
        });

        $('#VISA_Expiry_Employees').on('change', function() {
            var get_value = $(this).val();
            $('#VISA_Staff_branch_id').val(get_value);
        });
    </script>
    <script>
        $('#SIASubstaffdatatableOrdered').DataTable({
            initComplete: function() {
                var select = $('#SIA_Licenxe_Expiry_SubEmployees').on('change', function() {
                    var branch_id = $(this).val();
                    $('#SIA_SubStaff_branch_id').val(branch_id);
                    var order = [];
                    var bala_array = [];
                    var column = '8';
                    var dir = 'asc';
                    $.ajax({
                        url: "https://rdx.indel.co/home/getnextTenSiaSubstaff",
                        type: "POST",
                        data: {
                            'branch_id': branch_id,
                            'length': 10,
                            'start': 0,
                            'order': column,
                            'dir': dir,
                            'posting_': 'hi',
                            '_token': $('input[name=_token]').val()
                        },
                        success: function(data) {
                            $('#SIASubstaffdatatableOrdered').DataTable().clear().draw();
                        },
                        error: function() {
                            swal("Warning!", "Something went wrong.", "success");
                        }
                    });
                });
            },
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "paging": true,
            "ajax": {
                "url": "https://rdx.indel.co/home/getnextTenSiaSubstaff",
                "dataType": 'json',
                "type": 'POST',
                "data": function(d) {
                    var frm_data = $('form').serializeArray();
                    $.each(frm_data, function(key, val) {
                        d[val.name] = val.value;
                    });
                }

            },
            "columns": [{
                    "data": "sno"
                },
                {
                    "data": "subcontractor"
                },
                {
                    "data": "subemployee"
                },
                {
                    "data": "contact"
                },
                {
                    "data": "sianumber"
                },
                {
                    "data": "siatype"
                },
                {
                    "data": "siaexpiry"
                },
                {
                    "data": "status"
                }
            ]
        });

        $('#SIA_Licenxe_Expiry_SubEmployees').on('change', function() {
            var get_value = $(this).val();
            $('#SIA_SubStaff_branch_id').val(get_value);
        });
    </script>
    <script>
        // iste code here ///
        $('#event_by_branch').on('change', function() {
            var branch_id = $(this).val();
            $.ajax({
                url: "https://rdx.indel.co/emp/getEventsOfBranch/dashboard",
                type: "POST",
                data: {
                    'branch_id': branch_id,
                    '_token': $('input[name=_token]').val()
                },
                success: function(data) {
                    if (data != '') {
                        var dataDecoded = jQuery.parseJSON(data);
                        var event_table =
                            '<table class="table table-hovered attachEventTable" id="attachingTableInfo">' +
                            '<thead>' +
                            '<tr>' +
                            '<th style="width:14%">DATE</th>' +
                            '<th style="width:12%">TIME</th>' +
                            '<th style="width:14%">BRANCH</th>' +
                            '<th style="width:22%">EVENT TYPE</th>' +
                            '<th style="width:31%">STAFF / SUB STAFF</th>' +
                            // '<th style="width:18%">CREATED BY</th>'+
                            '<th style="width:7%">ACTION</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>';
                        for (var i = 0; i < dataDecoded.length; i++) {
                            event_table += '<tr id="rowDeleteempIDEdit' + dataDecoded[i]['event_id'] +
                                '">' +
                                '<input type="hidden" id="empIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['employee_id'] + '">' +
                                '<input type="hidden" id="empNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['full_name'] + '">' +
                                '<input type="hidden" id="subIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['subcontractor_id'] + '">' +
                                '<input type="hidden" id="subEmpIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['subemployee_id'] + '">' +
                                '<input type="hidden" id="subEmpNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['sub_employee_name'] + '">' +
                                '<input type="hidden" id="siteIDEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['site_id'] + '">' +
                                '<input type="hidden" id="siteNAMEEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['site_name'] + '">' +
                                '<input type="hidden" id="eventTypeIDEdit' + dataDecoded[i][
                                    'event_id'
                                ] + '" name="" value="' + dataDecoded[i]['event_type'] +
                                '">' +
                                '<input type="hidden" id="eventTypeNAMEEdit' + dataDecoded[i][
                                    'event_id'
                                ] + '" name="" value="' + dataDecoded[i]['event_name'] +
                                '">' +
                                '<input type="hidden" id="eventDetail' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['event_detail'] + '">' +
                                '<input type="hidden" id="eventDateEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['mynewData'] + '">' +
                                '<input type="hidden" id="eventTimeEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['mynewTime'] + '">' +
                                '<input type="hidden" id="branchIdEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['branch_id'] + '">' +
                                '<input type="hidden" id="shiftIdEdit' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['shift_id'] + '">' +
                                '<input type="hidden" id="shiftBranch' + dataDecoded[i]['event_id'] +
                                '" name="" value="' + dataDecoded[i]['branch_name'] + '">' +

                                '<td>' + dataDecoded[i]['mynewData'] + '</td>' +
                                '<td>' + dataDecoded[i]['mynewTime'] + '</td>' +
                                '<td>' + dataDecoded[i]['branch_name'] + '</td>' +
                                '<td>' + dataDecoded[i]['event_name'] + '</td>' +
                                '<td>';
                            if (dataDecoded[i]['full_name'] != 'null' && dataDecoded[i]['full_name'] !=
                                '' && dataDecoded[i]['full_name'] != null) {
                                event_table += dataDecoded[i]['full_name'];
                            } else if (dataDecoded[i]['sub_employee_name'] != 'null' && dataDecoded[i][
                                    'sub_employee_name'
                                ] != '' && dataDecoded[i]['sub_employee_name'] != null) {
                                event_table += dataDecoded[i]['sub_employee_name'];
                            }
                            event_table += '</td>' +
                                // '<td>'+dataDecoded[i]['user_name']+'</td>'+
                                '<td style="text-align:center">' +
                                '<button type="button" alt="' + dataDecoded[i]['event_id'] +
                                '" class="getEventID btn btn-green btn-xs " data-toggle="modal" data-target="#viewEVENT" title="View Event Details"><span class="icon-list"></span></button>' +
                                '</td>' +
                                '</tr>';
                        }
                        event_table += '</tbody>' +
                            '</table>';
                        $('.attachEventTable').html(event_table);
                    }
                },
                error: function() {
                    swal("Warning!", "Something went wrong.", "success");
                }
            });

        });
        // 12 Months History here //
        var canvas = document.getElementById("12_Month_History");
        var ctx = canvas.getContext('2d');

        // Global Options:
        Chart.defaults.global.defaultFontColor = 'black';
        Chart.defaults.global.defaultFontSize = 12;

        var cData = JSON.parse(
            `{"month_year":["Mar 2021","Apr 2021","May 2021","Jun 2021","Jul 2021","Aug 2021","Sep 2021","Oct 2021","Nov 2021","Dec 2021","Jan 2022","Feb 2022"],"no_of_shifts":[6899.25,8344,14819.25,22120.860000000000582076609134674072265625,32457.75,24839.580000000001746229827404022216796875,20651.75,14599.75,13228.670000000000072759576141834259033203125,13467.75,11723.079999999999927240423858165740966796875,10050.96000000000276486389338970184326171875],"no_shifts_count":[619,743,1330,1957,2800,2189,1858,1392,1266,1303,1121,961]}`
        );


        var data = {
            labels: [cData.month_year['0'],
                cData.month_year['1'],
                cData.month_year['2'],
                cData.month_year['3'],
                cData.month_year['4'],
                cData.month_year['5'],
                cData.month_year['6'],
                cData.month_year['7'],
                cData.month_year['8'],
                cData.month_year['9'],
                cData.month_year['10'],
                cData.month_year['11']
            ],

            datasets: [{
                    label: "Hours",
                    data: [cData.no_of_shifts['0'],
                        cData.no_of_shifts['1'],
                        cData.no_of_shifts['2'],
                        cData.no_of_shifts['3'],
                        cData.no_of_shifts['4'],
                        cData.no_of_shifts['5'],
                        cData.no_of_shifts['6'],
                        cData.no_of_shifts['7'],
                        cData.no_of_shifts['8'],
                        cData.no_of_shifts['9'],
                        cData.no_of_shifts['10'],
                        cData.no_of_shifts['11']
                    ],
                    borderWidth: 2,
                    backgroundColor: "rgba(35,183,229,0.1)",
                    borderColor: "rgba(35,183,229,1)",
                    pointBackgroundColor: "rgba(35,183,229,1)",
                    pointBorderColor: "rgba(35,183,229,1)",
                    pointHoverBackgroundColor: "rgba(35,183,229,1)",
                    pointHoverBorderColor: "rgba(35,183,229,1)"
                }, {
                    label: "Shifts",
                    data: [cData.no_shifts_count['0'],
                        cData.no_shifts_count['1'],
                        cData.no_shifts_count['2'],
                        cData.no_shifts_count['3'],
                        cData.no_shifts_count['4'],
                        cData.no_shifts_count['5'],
                        cData.no_shifts_count['6'],
                        cData.no_shifts_count['7'],
                        cData.no_shifts_count['8'],
                        cData.no_shifts_count['9'],
                        cData.no_shifts_count['10'],
                        cData.no_shifts_count['11']
                    ],
                    borderWidth: 2,
                    backgroundColor: "rgba(114,102,186,0.1)",
                    borderColor: "rgba(114,102,186,1)",
                    pointBackgroundColor: "rgba(114,102,186,1)",
                    pointBorderColor: "rgba(114,102,186,1)",
                    pointHoverBackgroundColor: "rgba(114,102,186,1)",
                    pointHoverBorderColor: "rgba(114,102,186,1)"
                }

            ]
        };

        // Notice the scaleLabel at the same level as Ticks
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        precision: 0,
                        suggestedMax: 12
                    }
                }]
            }
        };

        // Chart declaration:
        var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });

        var canvas = document.getElementById("12_Month_History");
        var ctx = canvas.getContext('2d');

        // Global Options:
        Chart.defaults.global.defaultFontColor = 'black';
        Chart.defaults.global.defaultFontSize = 12;

        var cData = JSON.parse(
            `{"month_year":["Mar 2021","Apr 2021","May 2021","Jun 2021","Jul 2021","Aug 2021","Sep 2021","Oct 2021","Nov 2021","Dec 2021","Jan 2022","Feb 2022"],"no_of_shifts":[6899.25,8344,14819.25,22120.860000000000582076609134674072265625,32457.75,24839.580000000001746229827404022216796875,20651.75,14599.75,13228.670000000000072759576141834259033203125,13467.75,11723.079999999999927240423858165740966796875,10050.96000000000276486389338970184326171875],"no_shifts_count":[619,743,1330,1957,2800,2189,1858,1392,1266,1303,1121,961]}`
        );


        var data = {
            labels: [cData.month_year['0'],
                cData.month_year['1'],
                cData.month_year['2'],
                cData.month_year['3'],
                cData.month_year['4'],
                cData.month_year['5'],
                cData.month_year['6'],
                cData.month_year['7'],
                cData.month_year['8'],
                cData.month_year['9'],
                cData.month_year['10'],
                cData.month_year['11']
            ],

            datasets: [{
                    label: "Hours",
                    data: [cData.no_of_shifts['0'],
                        cData.no_of_shifts['1'],
                        cData.no_of_shifts['2'],
                        cData.no_of_shifts['3'],
                        cData.no_of_shifts['4'],
                        cData.no_of_shifts['5'],
                        cData.no_of_shifts['6'],
                        cData.no_of_shifts['7'],
                        cData.no_of_shifts['8'],
                        cData.no_of_shifts['9'],
                        cData.no_of_shifts['10'],
                        cData.no_of_shifts['11']
                    ],
                    borderWidth: 2,
                    backgroundColor: "rgba(35,183,229,0.1)",
                    borderColor: "rgba(35,183,229,1)",
                    pointBackgroundColor: "rgba(35,183,229,1)",
                    pointBorderColor: "rgba(35,183,229,1)",
                    pointHoverBackgroundColor: "rgba(35,183,229,1)",
                    pointHoverBorderColor: "rgba(35,183,229,1)"
                }, {
                    label: "Shifts",
                    data: [cData.no_shifts_count['0'],
                        cData.no_shifts_count['1'],
                        cData.no_shifts_count['2'],
                        cData.no_shifts_count['3'],
                        cData.no_shifts_count['4'],
                        cData.no_shifts_count['5'],
                        cData.no_shifts_count['6'],
                        cData.no_shifts_count['7'],
                        cData.no_shifts_count['8'],
                        cData.no_shifts_count['9'],
                        cData.no_shifts_count['10'],
                        cData.no_shifts_count['11']
                    ],
                    borderWidth: 2,
                    backgroundColor: "rgba(114,102,186,0.1)",
                    borderColor: "rgba(114,102,186,1)",
                    pointBackgroundColor: "rgba(114,102,186,1)",
                    pointBorderColor: "rgba(114,102,186,1)",
                    pointHoverBackgroundColor: "rgba(114,102,186,1)",
                    pointHoverBorderColor: "rgba(114,102,186,1)"
                }

            ]
        };

        // Notice the scaleLabel at the same level as Ticks
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        precision: 0,
                        suggestedMax: 12
                    }
                }]
            }
        };

        // Chart declaration:
        var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });

        $('#history_by_branch').on('change', function() {
            var branch = $(this).val();
            $('#remove_12_Month_History').html(
                '<canvas id="12_Month_History" style="height: 300px; width: 1191px;">');
            $.ajax({
                url: "https://rdx.indel.co/home/getYearlyHistoryBranch",
                type: "POST",
                data: {
                    'branch': branch,
                    '_token': $('input[name=_token]').val()
                },
                success: function(data) {
                    if (data != '') {
                        var cData = jQuery.parseJSON(data);
                        var canvas = document.getElementById("12_Month_History");
                        var ctx = canvas.getContext('2d');

                        var data = {
                            labels: [cData.month_year['0'],
                                cData.month_year['1'],
                                cData.month_year['2'],
                                cData.month_year['3'],
                                cData.month_year['4'],
                                cData.month_year['5'],
                                cData.month_year['6'],
                                cData.month_year['7'],
                                cData.month_year['8'],
                                cData.month_year['9'],
                                cData.month_year['10'],
                                cData.month_year['11']
                            ],

                            datasets: [{
                                    label: "Hours",
                                    data: [cData.no_of_shifts['0'],
                                        cData.no_of_shifts['1'],
                                        cData.no_of_shifts['2'],
                                        cData.no_of_shifts['3'],
                                        cData.no_of_shifts['4'],
                                        cData.no_of_shifts['5'],
                                        cData.no_of_shifts['6'],
                                        cData.no_of_shifts['7'],
                                        cData.no_of_shifts['8'],
                                        cData.no_of_shifts['9'],
                                        cData.no_of_shifts['10'],
                                        cData.no_of_shifts['11']
                                    ],
                                    borderWidth: 2,
                                    backgroundColor: "rgba(35,183,229,0.1)",
                                    borderColor: "rgba(35,183,229,1)",
                                    pointBackgroundColor: "rgba(35,183,229,1)",
                                    pointBorderColor: "rgba(35,183,229,1)",
                                    pointHoverBackgroundColor: "rgba(35,183,229,1)",
                                    pointHoverBorderColor: "rgba(35,183,229,1)"
                                }, {
                                    label: "Shifts",
                                    data: [cData.no_shifts_count['0'],
                                        cData.no_shifts_count['1'],
                                        cData.no_shifts_count['2'],
                                        cData.no_shifts_count['3'],
                                        cData.no_shifts_count['4'],
                                        cData.no_shifts_count['5'],
                                        cData.no_shifts_count['6'],
                                        cData.no_shifts_count['7'],
                                        cData.no_shifts_count['8'],
                                        cData.no_shifts_count['9'],
                                        cData.no_shifts_count['10'],
                                        cData.no_shifts_count['11']
                                    ],
                                    borderWidth: 2,
                                    backgroundColor: "rgba(114,102,186,0.1)",
                                    borderColor: "rgba(114,102,186,1)",
                                    pointBackgroundColor: "rgba(114,102,186,1)",
                                    pointBorderColor: "rgba(114,102,186,1)",
                                    pointHoverBackgroundColor: "rgba(114,102,186,1)",
                                    pointHoverBorderColor: "rgba(114,102,186,1)"
                                }

                            ]
                        };

                        // Notice the scaleLabel at the same level as Ticks
                        var options = {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        precision: 0,
                                        suggestedMax: 12
                                    }
                                }]
                            }
                        };

                        // Chart declaration:
                        var myBarChart = new Chart(ctx, {
                            type: 'line',
                            data: data,
                            options: options
                        });


                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        var color_array = ["#23b7e5", "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow',
            "#23b7e5", "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow', "#23b7e5",
            "orange", "#9F81F7", "#32ac8e", "red", '#585858', '#CCEEFF', 'purple', 'yellow'
        ];

        $('#training_by_branch').on('change', function() {
            var branch = $(this).val();
            $.ajax({
                url: "https://rdx.indel.co/home/gettrainingbybranch",
                type: "POST",
                data: {
                    'branch': branch,
                    '_token': $('input[name=_token]').val()
                },
                success: function(dataGot) {
                    var dataDecoded = jQuery.parseJSON(dataGot);
                    var array_of_all = [];
                    for (var i = 0; i < dataDecoded.length; i++) {
                        array_of_all[i] = {
                            data: dataDecoded[i]['qualification_type_one'],
                            color: color_array[i],
                            label: dataDecoded[i]['qualification']
                        };
                    }
                    // console.log(array_of_all);
                    (function(window, document, $, undefined) {
                        $(function() {
                            var data = array_of_all;
                            var options = {
                                series: {
                                    pie: {
                                        show: true,
                                        innerRadius: 0.5,
                                        label: {
                                            show: true,
                                            radius: 0.9,
                                            formatter: function(label, series) {
                                                return '<div class="flot-pie-label">' +
                                                    //label + ' : ' +
                                                    Math.round(series.percent) +
                                                    '%</div>';
                                            },
                                            background: {
                                                opacity: 0.8,
                                                color: '#222'
                                            }
                                        }
                                    }
                                }
                            };
                            var chart = $('.chart-donut2');
                            if (chart.length)
                                $.plot(chart, data, options);
                        });
                    })(window, document, window.jQuery);
                },
            });
        });
    </script>
    <script type="text/javascript">
        // Here date companrison /
        $('.dateCheck').on('click', function(e) {
            var f = $('.firstDate').val().split('-');
            var s = $('.secondDate').val().split('-');
            var firstDate = new Date(f[2] + '-' + f[1] + '-' + f[0]);
            var secondDate = new Date(s[2] + '-' + s[1] + '-' + s[0]);
            if (firstDate.getTime() > secondDate.getTime()) {
                $('.placeErrorDates').html('');
                $('.placeErrorDates').html('<span style="color:red">' + $('.secondLabel').text() +
                    ' can not be less than ' + $('.firstLabel').text() + '</span>');
                e.preventDefault();
            } else {
                $('.placeErrorDates').html('');
            }
        });

        $('.dateCheck0').on('click', function(e) {
            var f = $('.firstDate0').val().split('-');
            var s = $('.secondDate0').val().split('-');
            var firstDate = new Date(f[2] + '-' + f[1] + '-' + f[0]);
            var secondDate = new Date(s[2] + '-' + s[1] + '-' + s[0]);
            if (firstDate.getTime() > secondDate.getTime()) {
                $('.placeErrorDates0').html('');
                $('.placeErrorDates0').html('<span style="color:red">' + $('.secondLabel0').text() +
                    ' can not be less than ' + $('.firstLabel0').text() + '</span>');
                e.preventDefault();
            } else {
                $('.placeErrorDates0').html('');
            }
        });
    </script> --}}
</x-app-layout>
