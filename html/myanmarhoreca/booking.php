<div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form id="booking_form" class="form-horizontal" role="form" method="post" action="booking_email.php">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Space Booking</h4>
      </div>

      <div class="modal-body">
				<div class="row">
				    
				  <fieldset>
				    
				    <div class="form-group">
			        <label for="firstname" class="col-xs-3 control-label"><label style="color:red;">*</label> First Name:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="firstname" name="firstname" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="lastname" class="col-xs-3 control-label"><label style="color:red;">*</label> Last Name:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="lastname" name="lastname" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="company" class="col-xs-3 control-label"><label style="color:red;">*</label> Company / Organization:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="company" name="company" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="company_specialty" class="col-xs-3 control-label">What is your company specialty?:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="company_specialty" name="company_specialty">
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="job_title" class="col-xs-3 control-label">Job title / Job role:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="job_title" name="job_title">
			        </div>
			      </div>
			      </fieldset>
			     
			    <fieldset>
				    <h4 class="form-topic">Contact Information</h4>

			      <div class="form-group">
			        <label for="email" class="col-xs-3 control-label"><label style="color:red;">*</label> Email Address:</label>
			        <div class="col-xs-7">
			          <input type="email" class="form-control" id="email" name="email" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="email_confirmation" class="col-xs-3 control-label"><label style="color:red;">*</label> Confirm Email Address:</label>
			        <div class="col-xs-7">
			          <input type="email" equalTo="#email" class="form-control" id="email_confirmation" name="email_confirmation" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="mailing_address_1" class="col-xs-3 control-label"><label style="color:red;">*</label> Mailing Address1:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="mailing_address_1" name="mailing_address_1" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="mailing_address_2" class="col-xs-3 control-label">Mailing Address2:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="mailing_address_2" name="mailing_address_2">
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="city" class="col-xs-3 control-label"><label style="color:red;">*</label> City:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="city" name="city" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="province" class="col-xs-3 control-label"><label style="color:red;">*</label> State / Province:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="province" name="province" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="zip" class="col-xs-3 control-label"><label style="color:red;">*</label> Zip:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="zip" name="zip" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="country" class="col-xs-3 control-label"><label style="color:red;">*</label> Country:</label>
			        <div class="col-xs-7">
			          <input type="text" class="form-control" id="country" name="country" required>
			        </div>
			      </div>

			      <div class="form-group">
			        <label for="telephone" class="col-xs-3 control-label"><label style="color:red;">*</label> Telephone:</label>
			        <div class="col-xs-7">
			          <input type="tel" class="form-control" id="telephone" name="telephone" required>
			        </div>
			      </div>

			    </fieldset>
			     
			    <fieldset>
				  	<h4 class="form-topic">Which of the following are you interested in?</h4>

				  	<div class="form-group">
					  	<div class="col-xs-offset-1 col-xs-7 checkbox">
				  	    <label>
				  	      <input type="checkbox" name="raw_space"> Raw Space (Min 18 sq.m.)
				  	    </label>
				  	  </div>
			  	  </div>

			  	  <div class="form-group">
					  	<div class="col-xs-offset-1 col-xs-7 checkbox">
				  	    <label>
				  	      <input type="checkbox" name="standard_booth"> Standard Booth
				  	    </label>
				  	  </div>
			  	  </div>

			  	  <div class="form-group">
			  	  	<div class="col-xs-offset-1 col-xs-3 img">
			  	  		<img src="images/img_booth-detail.png" width="100%"/>
			  	  	</div>
			  	  </div>
			  	  
			  	  <div class="form-group">
					    <div class="col-xs-offset-1 col-xs-7">
					      <u>Standard booth includes</u>
					      <ul>
					        <li>Fascia name board</li>
					        <li>Needle punch carpet</li>
					        <li>Panel system, white</li>
					        <li>Reception desk (1 unit)</li>
					        <li>Chairs (2 units)</li>
					        <li>Waste Basket</li>
					        <li>Fluorescent lamps (2 units)</li>
					        <li>Power socket (1 unit, not for lighting)</li>
					      </ul>
					    </div>
					  </div>
					  
					  <div class="form-group">
					  	<div class="col-xs-offset-1 col-xs-7">
				  	    <b>Expected Total <input type="text" name="expected_total"/> sq.m.</b>
				  	  </div>
			  	  </div>

				  </fieldset>
				</div>
			</div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
      
    </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

