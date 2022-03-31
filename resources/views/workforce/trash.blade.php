<x-app-layout>


        <div class="wrapper">
            <!-- top navbar-->
            <!-- sidebar-->
            <x-workforce-employee-sidebar/>
            <!-- offsidebar-->
            <!-- Main section-->
            <section>
                <div class="content-wrapper" style="background-color:#ecf0f5;">

                    <div class="content-heading">
                        Deleted Employees
                        <div class="pull-right">
                            <button type="button" class="btn btn-purple btn-square" data-toggle="modal"
                                data-target="#myModalSearch">SEARCH</button>
                            <a href="https://rdx.indel.co/emp/op" class="btn btn-info btn-square">BACK</a>
                        </div>
                        <br>
                        <small style="font-size:13px; color:#5A5D63; padding-top: 6px;">
                            <strong>Current Filteration - </strong>
                            <strong>Guard Group:</strong> All |
                            <strong>Employment Type:</strong> Operational
                        </small>
                    </div>
                    <!-- START widgets box-->
                    <form method="POST" action="https://rdx.indel.co/emp/checkDeletion" accept-charset="UTF-8"><input
                            name="_token" type="hidden" value="GRjFZ10fKH8k8K4ksXbJOB8J0Ju52hmGCpJfSZHW">
                    </form>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="clickingControl"
                                        class="datatableOrdered table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="sort-numeric">PIN</th>
                                                <th>FORENAME</th>
                                                <th>MIDDLENAME</th>
                                                <th>SURNAME</th>
                                                <th>LEAVING DATE</th>
                                                <th>CONTACT</th>
                                                <th>SIA NUMBER</th>
                                                <th>EXPIRY</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="gradeX" id="rowDelete298">
                                                <td>1276</td>
                                                <td id="empName298">A Al</td>
                                                <td></td>
                                                <td>Eedan</td>
                                                <td>
                                                    07-06-2021
                                                </td>
                                                <td>07562174906</td>
                                                <td>1013 2722 8617 8559</td>
                                                <td>
                                                    08-05-2022
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/298?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="298" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="298" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete767">
                                                <td>1748</td>
                                                <td id="empName767">Aamir</td>
                                                <td></td>
                                                <td>Shahzad</td>
                                                <td>
                                                    17-12-2021
                                                </td>
                                                <td>+44 7878 919705</td>
                                                <td>1018200049657960</td>
                                                <td>
                                                    14-12-2024
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/767?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="767" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="767" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete357">
                                                <td>1397</td>
                                                <td id="empName357">Abdel Salam</td>
                                                <td>AbdelRahman</td>
                                                <td>Ahmed H</td>
                                                <td>
                                                    04-07-2021
                                                </td>
                                                <td>0788195623</td>
                                                <td>1013 59964712 4258</td>
                                                <td>
                                                    05-04-2024
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/357?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="357" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="357" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete269">
                                                <td></td>
                                                <td id="empName269">Abdou</td>
                                                <td>Mk</td>
                                                <td>Drammeh</td>
                                                <td>
                                                </td>
                                                <td>07717854854</td>
                                                <td>1015427119572943</td>
                                                <td>
                                                    13-05-2024
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/269?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="269" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="269" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete185">
                                                <td></td>
                                                <td id="empName185">Abdul</td>
                                                <td></td>
                                                <td>Haseeb</td>
                                                <td>
                                                </td>
                                                <td>07383599399</td>
                                                <td>1014072760225510</td>
                                                <td>
                                                    11-04-2024
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/185?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="185" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="185" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete618">
                                                <td>1602</td>
                                                <td id="empName618">Abdus</td>
                                                <td></td>
                                                <td>Salam</td>
                                                <td>
                                                    25-09-2021
                                                </td>
                                                <td>07384172644</td>
                                                <td>1012068304877710</td>
                                                <td>
                                                    11-07-2024
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/618?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="618" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="618" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete586">
                                                <td>1568</td>
                                                <td id="empName586">Ahsan</td>
                                                <td></td>
                                                <td>Raza</td>
                                                <td>
                                                    04-09-2021
                                                </td>
                                                <td>07564 846915</td>
                                                <td>1019 6316 6615 5559</td>
                                                <td>
                                                    07-03-2024
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/586?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="586" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="586" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete721">
                                                <td>1703</td>
                                                <td id="empName721">Ayaan</td>
                                                <td></td>
                                                <td>Muhammad</td>
                                                <td>
                                                    25-11-2021
                                                </td>
                                                <td>+92 342 8592751</td>
                                                <td></td>
                                                <td>
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/721?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="721" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="721" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete317">
                                                <td>1295</td>
                                                <td id="empName317">GHULAM</td>
                                                <td></td>
                                                <td>JILLANI</td>
                                                <td>
                                                    13-06-2021
                                                </td>
                                                <td>07451188428</td>
                                                <td>1014 0983 24 30</td>
                                                <td>
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/317?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="317" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="317" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                            <tr class="gradeX" id="rowDelete899">
                                                <td>1875</td>
                                                <td id="empName899">Haider Ali</td>
                                                <td></td>
                                                <td>Khan</td>
                                                <td>
                                                    03-03-2022
                                                </td>
                                                <td>07424716508</td>
                                                <td>1017 3225 0905 6829</td>
                                                <td>
                                                    27-02-2025
                                                </td>
                                                <td>
                                                    <a href="https://rdx.indel.co/emp/op/delete/view/899?bid=1&ggid=&et="
                                                        class="btn btn-green btn-sm" data-toggle="tooltip"
                                                        data-placement="left" title="View Employee"><span
                                                            class="fa fa-folder"></span></a>
                                                    <button type="button" class="swal-demo4 btn btn-info btn-sm"
                                                        data-toggle="tooltip" data-placement="left" alt="899" balt="1"
                                                        title="Restore Employee"><span
                                                            class="fa fa-check-circle"></span></button>
                                                    <button type="button" class="swal-demo4Perm btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" alt="899" balt="1"
                                                        title="Permanently Delete Employee"><span
                                                            class="fa fa-times-circle"></span></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Page footer-->
        </div>
        <!-- =============== VENDOR SCRIPTS ===============-->
        <!-- MODERNIZR-->
        <script src="https://rdx.indel.co/asset/vendor/modernizr/modernizr.custom.js"></script>
        <!-- MATCHMEDIA POLYFILL-->
        <script src="https://rdx.indel.co/asset/vendor/matchMedia/matchMedia.js"></script>
        <!-- JQUERY-->
        <script src="https://rdx.indel.co/asset/vendor/jquery/dist/jquery.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/jquery-ui/jquery-ui.js"></script>
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
        <!-- CLASSY LOADER-->

        <!-- =============== APP SCRIPTS ===============-->
        <script src="https://rdx.indel.co/asset/app/js/app.js"></script>
        <script src="https://rdx.indel.co/asset/vendor/select2/dist/js/select2.js"></script>








        <div id="myModalSearch" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true"
            class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 id="myModalLabelLarge" class="modal-title">SEARCH STAFF</h4>
                    </div>
                    <form method="POST" action="https://rdx.indel.co/emp/trash/op" accept-charset="UTF-8"
                        class="form-horizontal"><input name="_token" type="hidden"
                            value="GRjFZ10fKH8k8K4ksXbJOB8J0Ju52hmGCpJfSZHW">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Branches</label>
                                        <div class="col-sm-9">
                                            <select class="select2-1 form-control" id="branch_change_search"
                                                name="branch_id" style="width:100%" required>
                                                <option value="All">All Branches</option>
                                                <option value="1" selected>Head Office</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="attachGuardGroupsSearch">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Guard Group</label>
                                            <div class="col-sm-9">
                                                <select class="select2-1 form-control input-sm" name="gg_id" id=""
                                                    style="width:100%">
                                                    <option value="">All Guard Groups</option>
                                                    <option value="12">Birmingham Forum</option>
                                                    <option value="8">Bradford</option>
                                                    <option value="5">Cardiff Officers</option>
                                                    <option value="4">Crown Plaza Carpark</option>
                                                    <option value="2">Election Day Wolverhampton</option>
                                                    <option value="11">Evant</option>
                                                    <option value="13">Glasgow</option>
                                                    <option value="1">Leiciester</option>
                                                    <option value="3">New Castle Election</option>
                                                    <option value="16">Nottingham Test Kits Packaging</option>
                                                    <option value="14">O2 Academy</option>
                                                    <option value="6">Quarantine project</option>
                                                    <option value="7">Quarantine project List2</option>
                                                    <option value="9">Scotland event</option>
                                                    <option value="10">scotland replacement</option>
                                                    <option value="15">The Bedworth Armistice Parade</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="hidden" name="employement_type" id="employeement_type_search"
                                            value="op">
                                        <label class="col-sm-3 control-label">Employee Type</label>
                                        <div class="col-sm-9">
                                            <select class="select2-1 form-control" name="employee_type"
                                                style="width:100%">
                                                <option value="">All Employee Types</option>
                                                <option value="Non-operational">Admins</option>
                                                <option value="Operational" selected>Operational</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="searchEmployees" class="btn btn-green">SEARCH</button>
                            <button type="button" data-dismiss="modal" class="btn btn-danger">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://rdx.indel.co/asset/vendor/swal-forms-master/swal-forms.js"></script>
        <script type="text/javascript">
            $('.select2-1').select2({
                theme: 'bootstrap'
            });
            // var select_column = '<div class="pull-right"> <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employement Type </label> '+
            //                         '<select class="form-control input-sm gettingSelectOptions" name="employeement_type">'+
            //                         '<option value="" selected>Select Type</option>'+
            //                         '<option value="op">Operational</option>'+
            //                         '<option value="nop">Admins</option>'+
            //                         '<option value="all">All Employees</option>'+
            //                         '</select>' +
            //                       '</div>';
            var op_non_op = '';

            var array_of_all = {};
            array_of_all['branch_id'] = "1";
            array_of_all['gg_id'] = "";
            array_of_all['employee_type'] = "";

            $('.datatableOrdered').DataTable({
                "order": [
                    [8, "asc"]
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: "https://rdx.indel.co/emp/trashed",
                    "dataType": 'json',
                    "type": 'POST',
                    "data": {
                        'allData': JSON.stringify(array_of_all),
                        '_token': $('input[name=_token]').val()
                    }
                },
                "columns": [{
                        "data": "employee_number"
                    },
                    {
                        "data": "fore_name"
                    },
                    {
                        "data": "middle_name"
                    },
                    {
                        "data": "sur_name"
                    },
                    {
                        "data": "date_of_leaving"
                    },
                    {
                        "data": "contact_no"
                    },
                    {
                        "data": "sia_licence_no"
                    },
                    {
                        "data": "sia_licence_expiry"
                    },
                    {
                        "data": "actions"
                    },
                ],
                "deferLoading": "31"
            });

            // $('.datatableOrdered').DataTable({
            //     initComplete: function () {
            //     var select = $(select_column)
            //         .appendTo("#clickingControl_wrapper #clickingControl_filter")
            //         .on( 'change', function () {
            //           var op_nop = $('#clickingControl_wrapper #clickingControl_filter .gettingSelectOptions').val();
            //           op_non_op = op_nop;
            //           var order = [];
            //           var bala_array = [];
            //           var column = '1';
            //           var dir = 'asc';
            //           $.ajax({
            //             url: "https://rdx.indel.co/emp/trashed",
            //             type:"POST",
            //             data : {
            //                     'employement_type':op_nop,
            //                     'length': 10,
            //                     'start': 0,
            //                     'order':column,
            //                     'dir': dir,
            //                     'posting_':'hi',
            //                     '_token': $('input[name=_token]').val()},
            //             success:function(data){
            //               $('.datatableOrdered').DataTable().clear().draw();
            //             },error:function(){
            //                 swal("Warning!", "Something went wrong.", "success");
            //             }
            //           });
            //          });
            //   },
            //     "serverSide": true,
            //     "deferRender": true,
            //     "processing": true,
            //     "paging": true,
            //     "ajax": {
            //         "url": "https://rdx.indel.co/emp/trashed",
            //         "dataType": 'json',
            //         "type": 'POST',
            //         // "data": {'employeement_type':$('#clickingControl_wrapper #clickingControl_filter .gettingSelectOptions').val(),'_token': $('input[name=_token]').val()}
            //         "data" : function(d) {
            //          var frm_data = $('form').serializeArray();
            //          $.each(frm_data, function(key, val) {
            //            d[val.name] = val.value;
            //          });
            //        }
            //     },
            //     "order": [[ 0, "asc" ]],
            //     "columns":[
            //       {"data":"employee_number"},
            //       {"data":"fore_name"},
            //       {"data":"middle_name"},
            //       {"data":"sur_name"},
            //       {"data":"date_of_leaving"},
            //       {"data":"contact_no"},
            //       {"data":"sia_licence_no"},
            //       {"data":"sia_licence_expiry"},
            //       {"data":"actions"},
            //     ],
            //     "deferLoading": "31"
            //   });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name=_token]').attr('content')
                }
            });
            // $('#clickingControl_wrapper #clickingControl_filter').on('change','.gettingSelectOptions',function(){
            //   var get_value = $(this).val();
            //   $('#employeement_type_search').val(get_value);
            // });
            var employee_id = '';
            var branch_id = '';
            $('#clickingControl').on('click', '.swal-demo4', function(e) {
                e.preventDefault();
                employee_id = $(this).attr('alt');
                branch_id = $(this).attr('balt');
                var employee_name = $('#empName' + employee_id).text();
                swal.withForm({
                        title: "Are you sure?",
                        text: "To restore " + employee_name + " record!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, restore it!",
                        closeOnConfirm: true,
                        formFields: [{
                                id: 'date_of_rejoin',
                                placeholder: 'Date of Rejoin',
                                class: 'this_is',
                                required: true,
                                label: 'Date of Rejoin'
                            },
                            {
                                id: 'comments_rejoin',
                                placeholder: 'Rejoining Comments',
                                class: 'this_one',
                                required: true,
                                label: 'Rejoining Comments'
                            }
                        ]
                    },
                    function(isConfirm) {
                        if (isConfirm && this.swalForm.date_of_rejoin != '' && this.swalForm.date_of_rejoin !=
                            null && this.swalForm.comments_rejoin != '' && this.swalForm.comments_rejoin != null
                        ) {
                            $.ajax({
                                url: "https://rdx.indel.co/emp/checkRestore",
                                type: "POST",
                                data: {
                                    'employee_id': employee_id,
                                    'branch_id': branch_id,
                                    'date_of_rejoin': this.swalForm.date_of_rejoin,
                                    'rejoining_comment': this.swalForm.comments_rejoin,
                                    '_token': $('input[name=_token]').val()
                                },
                                success: function(data) {
                                    if (data == true) {
                                        swal("Restored!", "Employee record has been restored.",
                                            "success");
                                        $(e.target).closest("tr").remove();
                                        $('#rowDelete' + employee_id).remove();
                                        $('.datatableOrdered').DataTable().ajax.reload();
                                    } else {
                                        swal("Warning!", "Something went wrong. Try again",
                                            "error");
                                    }
                                },
                                error: function() {
                                    swal("Warning!", "Something went wrong.", "error");
                                }
                            });
                        }
                    });
                $('#date_of_rejoin').datepicker({
                    orientation: "bottom auto",
                    daysOfWeekHighlighted: "0",
                    weekStart: 1,
                    format: "dd-mm-yyyy",
                    autoclose: true,
                    todayHighlight: true,
                    toggleActive: true
                });
            });

            $('#clickingControl').on('click', '.swal-demo4Perm', function(e) {
                e.preventDefault();
                employee_id = $(this).attr('alt');
                branch_id = $(this).attr('balt');
                var employee_name = $('#empName' + employee_id).text();
                swal({
                        title: "Are you sure?",
                        text: "To permanently delete " + employee_name +
                            " record! You will not be able to restore it again.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function() {
                        $.ajax({
                            url: "https://rdx.indel.co/emp/permDeleteCheck",
                            type: "POST",
                            data: {
                                'employee_id': employee_id,
                                'branch_id': branch_id,
                                '_token': $('input[name=_token]').val()
                            },
                            success: function(data) {
                                if (data == true) {
                                    swal("Deleted!", "Employee record has been deleted.",
                                        "success");
                                    $('#rowDelete' + employee_id).remove();
                                    $(e.target).closest("tr").remove();
                                    $('.datatableOrdered').DataTable().ajax.reload();
                                } else {
                                    swal("Warning!", "Something went wrong. Try again", "error");
                                }
                            },
                            error: function() {
                                swal("Warning!", "Something went wrong.", "error");
                            }
                        });
                    });
            });

            $('#branch_change_search').on('change', function() {
                var branch_id = $(this).val();
                // if employees has been selected then select guard groups for it as well
                $.ajax({
                    url: "https://rdx.indel.co/emp/getGuardGroupsOfBranch",
                    type: "POST",
                    data: {
                        'branch_id': branch_id,
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        // get employees here and attach it to the place where needed
                        if (data != '') {
                            var dataDecoded = jQuery.parseJSON(data);
                            var guradGroups =
                                '<div class="form-group"><label class="col-sm-3 control-label">Guard Group</label>' +
                                '<div class="col-sm-9">' +
                                '<select class="select2-1 form-control" id="guard_groups" name="gg_id" style="width:100%">' +
                                '<option value="">All Guard Groups</option>';
                            for (var i = 0; i < dataDecoded.length; i++) {
                                guradGroups += '<option value="' + dataDecoded[i]['gg_id'] + '">' +
                                    dataDecoded[i]['guard_group'] + '</option>';
                            }
                            guradGroups += '</select>' +
                                '</div></div>';
                            $('.attachGuardGroupsSearch').html(guradGroups);
                            $('.select2-1').select2({
                                theme: 'bootstrap'
                            });
                        }
                    },
                    error: function() {
                        swal("Warning!", "Something went wrong.", "success");
                    }
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
                    $('.secondDate').focus();
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
                    $('.secondDate0').focus();
                    e.preventDefault();
                } else {
                    $('.placeErrorDates0').html('');
                }
            });
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
                if ((code == 8) || (code >= 48 && code <= 57) || (code == 43) || (code >= 97 && code <= 122) || (
                        code == 20) || (code == 16) || (code == 32) || (code >= 65 && code <= 90)) {
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
                // console.log(code);
                if (code == 8) {
                    digits_after_point = 0;
                    return true;
                } else if (checking_one_point == false && digits_after_point > 2) {
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

            $('.form-control').on('keypress', function(e) {
                var code = e.keyCode || e.which;
                if (code == 222 || code == 34 || code == 39 || code == 38) {
                    return false;
                } else {
                    return true;
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
            // getting the data from the website of licenses //

            // $(document).ready(function(){
            //   $.ajax({
            //     url: "https://services.sia.homeoffice.gov.uk/rolh/PublicRegister/SearchPublicRegisterByLicence",
            //     type: "POST",
            //     data:{'LicenseNo':'1019178839443075','Search':'Search'},
            //     success:function(result){
            //       // nothing to show up
            //       console.log(result);
            //     },
            //     error:function(){
            //       // nothing to do with
            //     }
            //   });
            // });
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
</x-app-layout>
