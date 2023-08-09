<!DOCTYPE html>
<html>
    <body>
    <?php echo validation_errors(); ?>
		<div class="row">
			<div class="col-md-3">
                    <div class="form-group">
                        <label for="fname">First name <span class="text-danger">*</span></label>
                        <input type="text" value="<?php echo set_value("fname"); ?>" name="fname" id="fname" class="form-control"  placeholder="First name">
                        <?php echo form_error('fname'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mname">Middle name</label>
                        <input type="text" value="<?php echo set_value("mname"); ?>"" name="mname" id="mname" class="form-control"  placeholder="Middle name">
                        <?php echo form_error('mname'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="lname">Last name <span class="text-danger">*</span></label>
                        <input type="text" value="<?php echo set_value("lname"); ?>" name="lname" id="lname" class="form-control"  placeholder="Last name">
                        <?php echo form_error('lname'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mobile_no">Mobile No <span class="text-danger">*</span></label>
                        <input type="text" value="<?php echo set_value("mobile_no"); ?>" name="mobile_no" id="mobile_no" class="form-control"  placeholder="Enter Mobile NO">
                        <?php echo form_error('mobile_no'); ?>
                    </div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-info">Submit</button>
                </div>
			
		</div>
</body>
</html>