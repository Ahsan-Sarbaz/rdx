<x-app-layout>

    <div class="wrapper">

        <x-workforce-employee-sidebar />

        <section>
            <div class="content-wrapper" style="background-color:#ecf0f5;">

                <div class="content-heading">
                    Add New Employee
                    <div class="pull-right">
                        <a href="https://rdx.indel.co/emp/op" class="btn btn-info btn-square pull-right">BACK</a>
                    </div>

                </div>
                <div class="row">

                    <div class="form-horizontal">
                        @livewire('workforce-employee-add')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- The basic File Upload plugin-->

    <!-- The File Upload processing plugin-->

    <!-- The File Upload image preview & resize plugin-->

    <!-- DATETIMEPICKER-->
    <!-- CLASSY LOADER-->

    <!-- =============== APP SCRIPTS ===============-->
    <script src="https://rdx.indel.co/asset/app/js/app.js"></script>
    <script src="https://rdx.indel.co/asset/vendor/select2/dist/js/select2.js"></script>
    <script type="text/javascript">
        var dateToday = "04-03-2022";
        $('.dob').datepicker({
            orientation: "bottom auto",
            daysOfWeekHighlighted: "0",
            weekStart: 1,
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true,
            toggleActive: true,
            endDate: dateToday
        });
        $('.otherOptions').on('keypress', '#ni_number', function(e) {
            var code = e.keyCode || e.which;
            if ((code == 8) || (code >= 48 && code <= 57) || (code == 43) || (code >= 97 && code <= 122) || (
                    code == 20) || (code == 16) || (code == 32) || (code >= 65 && code <= 90)) {
                return true;
            } else {
                return false;
            }
        });
        var operational = '<div class="form-group">' +
            '<label class="col-sm-2 control-label">SIA Number</label>' +
            '<div class="col-sm-6">' +
            '<input type="text" name="sia_no" id="ni_number" required="required" placeholder=" SIA Number" class="form-control">' +
            '</div>' +
            '<div class="col-sm-4">' +
            '<div class="form-group">' +
            '<div class="checkbox c-checkbox">' +
            '<label style="color:red">' +
            '<input name="operational_with_no_sia" id="operational_with_no_sia" type="checkbox" value="1">' +
            '<span class="fa fa-check"></span>' +
            '<strong>SIA not required</strong>' +
            '</label>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-2 control-label">SIA Type</label>' +
            '<div class="col-sm-6">' +
            '<select class="select2-1 form-control" name="sia_type" id="sia_type" style="width:100%">' +
            '<option value="">Select type ...</option>' +
            '<option value="CCTV">CCTV</option>' +
            '<option value="Close Protection">Close Protection</option>' +
            '<option value="Door Supervision">Door Supervision</option>' +
            '<option value="Key Holding">Key Holding</option>' +
            '<option value="Security Guarding">Security Guarding</option>' +
            '<option value="other_sia">Other</option>' +
            '</select>' +
            '</div>' +
            '<div class="col-sm-4">' +
            '</div>' +
            '</div><div class="attachOthers"></div>' +
            '<div class="form-group">' +
            '<label class="col-sm-2 control-label">Expiry Date</label>' +
            '<div class="col-sm-6">' +
            '<input type="text" name="expiry_date" id="expiry_date" required="required" placeholder=" Expiry date of SIA" class="datepicker form-control">' +
            '</div>' +
            '<div class="col-sm-4">' +
            '</div>' +
            '</div>';
        var non_op = '<div class="form-group">' +
            '<label class="col-sm-2 control-label">Job Title</label>' +
            '<div class="col-sm-6">' +
            '<input type="text" name="job_title" required="required" placeholder=" Job title" class="form-control">' +
            '</div>' +
            '<div class="col-sm-4">' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-2 control-label">Department</label>' +
            '<div class="col-sm-6">' +
            '<input type="text" class="form-control" name="deparment" placeholder=" Department name">' +
            '</div>' +
            '<div class="col-sm-4">' +
            '</div>' +
            '</div>';
        var branch_id = "1";
        var emp_type = '';
        $('.getEmpType').on('change', function() {
            emp_type = $(this).val();
            if (emp_type == 'Operational') {
                $.ajax({
                    url: "https://rdx.indel.co/emp/siaLicence",
                    type: "POST",
                    data: {
                        'branch_id': branch_id,
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        // get employees here and attach it to the place where needed
                        if (data != '') {
                            var dataDecoded = jQuery.parseJSON(data);
                            var operational = '<div class="form-group">' +
                                '<label class="col-sm-2 control-label">SIA Number</label>' +
                                '<div class="col-sm-6">' +
                                '<input type="text" name="sia_no" id="ni_number" autocomplete="off" required="required" placeholder=" SIA Number" class="form-control">' +
                                '</div>' +
                                '<div class="col-sm-4">' +
                                '<div class="form-group">' +
                                '<div class="checkbox c-checkbox">' +
                                '<label style="color:red">' +
                                '<input name="operational_with_no_sia" id="operational_with_no_sia" type="checkbox" value="1">' +
                                '<span class="fa fa-check"></span>' +
                                '<strong>SIA not required</strong>' +
                                '</label>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="form-group">' +
                                '<label class="col-sm-2 control-label">SIA Type</label>' +
                                '<div class="col-sm-6">' +
                                '<select class="select2-1 form-control" name="sia_type" id="sia_type" style="width:100%">' +
                                '<option value="">Select type ...</option>';
                            for (var i = 0; i < dataDecoded.length; i++) {
                                operational += '<option value="' + dataDecoded[i]['license_name'] +
                                    '">' + dataDecoded[i]['license_name'] + '</option>';
                            }
                            operational += '<option value="other_sia">Other</option>' +
                                '</select>' +
                                '</div>' +
                                '<div class="col-sm-4">' +
                                '</div>' +
                                '</div><div class="attachOthers"></div>' +
                                '<div class="form-group">' +
                                '<label class="col-sm-2 control-label">Expiry Date</label>' +
                                '<div class="col-sm-6">' +
                                '<input type="text" name="expiry_date" id="expiry_date" autocomplete="off" placeholder=" Expiry date of SIA" class="datepicker form-control">' +
                                '</div>' +
                                '<div class="col-sm-4">' +
                                '</div>' +
                                '</div>';
                            $('.otherOptions').html(operational);
                            $('.select2-1').select2({
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
                        }
                    },
                    error: function() {
                        swal("Warning!", "Something went wrong.", "success");
                    }
                });

            } else if (emp_type == 'Non-operational') {
                $('.otherOptions').html(non_op);
                $('.select2-1').select2({
                    theme: 'bootstrap'
                });
            } else {
                $('.otherOptions').html('');
            }
        });

        $('.attachBranches').on('change', '.branchControl', function() {
            branch_id = $(this).val();
            if (emp_type == 'Operational') {
                $.ajax({
                    url: "https://rdx.indel.co/emp/siaLicence",
                    type: "POST",
                    data: {
                        'branch_id': branch_id,
                        '_token': $('input[name=_token]').val()
                    },
                    success: function(data) {
                        // get employees here and attach it to the place where needed
                        if (data != '') {
                            var dataDecoded = jQuery.parseJSON(data);
                            var operational = '<div class="form-group">' +
                                '<label class="col-sm-2 control-label">SIA Number</label>' +
                                '<div class="col-sm-6">' +
                                '<input type="text" name="sia_no" id="ni_number" autocomplete="off" required="required" placeholder=" SIA Number" class="form-control">' +
                                '</div>' +
                                '<div class="col-sm-4">' +
                                '<div class="form-group">' +
                                '<div class="checkbox c-checkbox">' +
                                '<label style="color:red">' +
                                '<input name="operational_with_no_sia" id="operational_with_no_sia" type="checkbox" value="1">' +
                                '<span class="fa fa-check"></span>' +
                                '<strong>SIA not required</strong>' +
                                '</label>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="form-group">' +
                                '<label class="col-sm-2 control-label">SIA Type</label>' +
                                '<div class="col-sm-6">' +
                                '<select class="select2-1 form-control" name="sia_type" id="sia_type" style="width:100%">' +
                                '<option value="">Select type ...</option>';
                            for (var i = 0; i < dataDecoded.length; i++) {
                                operational += '<option value="' + dataDecoded[i]['license_name'] +
                                    '">' + dataDecoded[i]['license_name'] + '</option>';
                            }
                            operational += '<option value="other_sia">Other</option>' +
                                '</select>' +
                                '</div>' +
                                '<div class="col-sm-4">' +
                                '</div>' +
                                '</div><div class="attachOthers"></div>' +
                                '<div class="form-group">' +
                                '<label class="col-sm-2 control-label">Expiry Date</label>' +
                                '<div class="col-sm-6">' +
                                '<input type="text" name="expiry_date" id="expiry_date" autocomplete="off" placeholder=" Expiry date of SIA" class="datepicker form-control">' +
                                '</div>' +
                                '<div class="col-sm-4">' +
                                '</div>' +
                                '</div>';
                            $('.otherOptions').html(operational);
                            $('.select2-1').select2({
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
                        }
                    },
                    error: function() {
                        swal("Warning!", "Something went wrong.", "success");
                    }
                });

            }
        });

        $('.otherOptions').on('change', '.select2-1', function() {
            var checking = $(this).val();
            if (checking == 'other_sia') {
                var text_box_1 = '<div class="form-group">' +
                    '<label class="col-sm-2 control-label">Please specify</label>' +
                    '<div class="col-sm-6">' +
                    '<input type="text" name="sia_type_other" autocomplete="off" required="required" placeholder="Please specify" class="form-control">' +
                    '</div>' +
                    '<div class="col-sm-4">' +
                    '</div>' +
                    '</div>';
                $('.attachOthers').html(text_box_1);
            }
            // else if (checking == 'other_dep') {
            //   var text_box_2 = '<div class="form-group">'+
            //                      '<label class="col-sm-2 control-label">Please specify</label>'+
            //                      '<div class="col-sm-6">'+
            //                         '<input type="text" name="department_other" required="required" placeholder="Please specify" class="form-control">'+
            //                      '</div>'+
            //                      '<div class="col-sm-4">'+
            //                      '</div>'+
            //                   '</div>';
            //     $('.attachOthers').html(text_box_2);
            // }
            else {
                $('.attachOthers').html('');
            }
        });

        $('.checkPinNo').on('keyup', function() {
            var pin_no = $(this).val();
            $.ajax({
                url: "https://rdx.indel.co/emp/checkUniquePinNo",
                type: "POST",
                data: {
                    'pin_no': pin_no,
                    '_token': $('input[name=_token]').val()
                },
                success: function(result) {
                    if (result == 'false') {
                        // please select another one
                        $('.putHerePinError').html(
                            '<span style="color:red">The PIN you selected exist, please select another</span>'
                        );
                    } else if (pin_no.trim() == '') {
                        $('.putHerePinError').html(
                            '<span style="color:orange">The PIN number can not be empty, please select one</span>'
                        );
                    } else {
                        $('.putHerePinError').html('');
                    }
                },
                error: function() {
                    // something went wrong
                    $('.putHerePinError').html('<span style="color:orange"></span>');
                }
            });
        });

        // if sia not requreed is checked then disable all //
        $('.otherOptions').on('click', '#operational_with_no_sia', function() {
            if ($('#operational_with_no_sia').is(":checked")) {
                $('#ni_number').removeAttr("required", "required");
                $('#ni_number').attr("disabled", "disabled");
                $('#sia_type').removeAttr("required", "required");
                $('#sia_type').attr("disabled", "disabled");
                $('#expiry_date').removeAttr("required", "required");
                $('#expiry_date').attr("disabled", "disabled");
            } else {
                $('#ni_number').attr("required", "required");
                $('#ni_number').removeAttr("disabled", "disabled");
                $('#sia_type').attr("required", "required");
                $('#sia_type').removeAttr("disabled", "disabled");
                $('#expiry_date').attr("required", "required");
                $('#expiry_date').removeAttr("disabled", "disabled");
            }
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
