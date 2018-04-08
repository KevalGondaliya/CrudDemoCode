<?php include("public_header.php"); ?>

<div class="container">
	<?php echo form_open('login/admin_login',['class' => 'form-horizontal']);?>
  <fieldset>
    <legend>Admin Login</legend>
    <?php if($error =  $this->session->flashdata('login_failed')):?>
    <div class="row">
      <div classs="col-lg-6">
        <div class="alert alert-dismissible alert-danger">
           <button type="button" class="close" data-dismiss="alert"></button>
           <?= $error?>
        </div>
      </div>
    </div>
  <?php endif;?>
    <div class="row">
    	<div class="col-lg-6">
	    	<div class="form-group">
		      <label for="username" class="col-lg-2 control-label">Username</label>
			    <div class="col-lg-10">
			     <?php echo  form_input(['name' => 'username','class' => 'form-control','id' => 'username','placeholder' => 'Username','value'=>set_value('username')]);?>   
			    </div>
    		</div>
  	    </div>
  	    <div class="col-lg-6">
  	   	 <?php echo form_error('username'); ?>
  	    </div>
    </div>
     <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
     		  <label for="password" class="col-lg-2 control-label">Password</label>
     			<div class="col-lg-10">
     			<?php echo  form_password(['name' => 'password','class' => 'form-control','id' => 'password','placeholder' => 'Password']);?>
     			</div>
            </div>
   		</div>
   		 <div class="col-lg-6">
  	  		  <?php echo form_error('password'); ?>
  	    </div>
    </div>
     <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      			<div class="col-lg-5 col-lg-offset-2">
        			<?php echo

					        form_reset(['name'=>'reset','value'=>'reset','class'=>'btn btn-default']),  
					        form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary'])
					    ?>
     			</div>
    		</div>
   		</div>
    </div>
  </fieldset>
</form>
</div>
<?php include("public_footer.php"); ?>