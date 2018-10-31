<p>Account Information</p>
<form >
	<div class="form-group">
		<label class="control-label col-md-3">Email</label>
		<input type="email" size="20" name="email" value="<?php echo $row->email;  ?>" />
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Description</label>
		<input type="text" size="20" name="description" autofocus value="<?php echo $row->description;?>" />
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Currency</label>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Account balance</label>
	</div>
<p>Billing Information</p>
	<div class="form-group">
		<label class="control-label col-md-3">Send email to</label>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">CC</label>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Invoice prefix</label>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Address</label>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">Phone</label>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3">VAT number</label>
	</div>
	<div>
		<input type="submit" name="btnsubmit" class="btn btn-primary" value="UPDATE"></input>
	</div>
</form>