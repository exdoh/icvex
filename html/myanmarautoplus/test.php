<?php require_once('header.php'); ?>

	<div class="bg-light">
    	<form id="booking_form" class="form-horizontal" role="form" method="post" action="test_email.php">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Test send email</h4>
      </div>

      <div class="modal-body">
				<div class="row">
				    
				  <fieldset>
				    
				    <div class="form-group">
			        <label for="host" class="col-xs-3 control-label">Host</label>
			        <div class="col-xs-7">
			          <input type="text" value="58.97.34.105" class="form-control" id="host" name="host" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="username" class="col-xs-3 control-label">Username</label>
			        <div class="col-xs-7">
			          <input type="text" value="auto-message@icvex.com" class="form-control" id="username" name="username" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="password" class="col-xs-3 control-label">Password</label>
			        <div class="col-xs-7">
			          <input type="text" value="Auto123@" class="form-control" id="password" name="password" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="port" class="col-xs-3 control-label">Port</label>
			        <div class="col-xs-7">
			          <input type="text" value="25" class="form-control" id="port" name="port" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="to" class="col-xs-3 control-label">To</label>
			        <div class="col-xs-7">
			          <input type="text" value="25" class="form-control" id="to" name="to" required>
			        </div>
			      </div>

				  </fieldset>
				</div>
			</div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
      
    </form>
   </div>

<?php require_once('footer.php'); ?>

