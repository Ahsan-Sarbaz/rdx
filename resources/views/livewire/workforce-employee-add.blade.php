<div class="panel panel-default">
    <div class="panel-body">
        <div class="attachBranches">
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Staff PIN</label>
            <div class="col-sm-6">
                <input type="text" name="pin" required="required"
                    placeholder="Assign PIN to the staff" class="checkPinNo form-control">
            </div>
            <div class="col-sm-4 putHerePinError">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-2">
                <input id="id-source" name="fore_name" type="text" placeholder="Forename"
                    class="form-control" required>
            </div>
            <div class="col-sm-2">
                <input type="text" name="middle_name" placeholder="Middle Name"
                    class="form-control">
            </div>
            <div class="col-sm-2">
                <input type="text" name="sur_name" placeholder="Surname" class="form-control">
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-6">
                <select class="select2-1 form-control" name="gender" style="width:100%"
                    required>
                    <option value="">Select gender ...</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                </select>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Date of Birth</label>
            <div class="col-sm-6">
                <input type="text" name="dob" required="required" autocomplete="off"
                    placeholder=" Date of birth" class="dob form-control">
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Contact Number</label>
            <div class="col-sm-6">
                <input type="text" name="contact_no" required="required" autocomplete="off"
                    placeholder="Contact Number" class="form-control">
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Employment Type</label>
            <div class="col-sm-6">
                <select class="select2-1 form-control getEmpType" name="emp_type"
                    style="width:100%" required>
                    <option value="">Select type ...</option>
                    <option value="Non-operational">Admins</option>
                    <option value="Operational">Operational</option>
                </select>
            </div>
            <div class="col-sm-4">
            </div>
        </div>

        <div class="otherOptions"></div>
    </div>
    <div class="panel-footer text-right" style="margin-bottom: 280px;">
        <button type="submit" class="btn btn-green" name="addEmployee">SAVE</button>
    </div>
</div>
