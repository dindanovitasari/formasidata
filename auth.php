<?php
$no_visible_elements=true;
include('header.php'); ?>
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to Formasi Apps</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Username and Password.
					</div>
					
					<?php 
					$att = array('class' => 'form-horizontal');
					echo form_open("auth/login",$att);
						echo form_fieldset();?>
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span>
								<?php 
								$username = array(
								'class' => 'input-large span10',
								'name'=>'username',
								'id'=>'username',
								'type'=>'text',
								'value'=> 'admin',);
								echo form_input($username);
								?>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span>
								<?php 
								$password = array(
								'class' =>'input-large span10',
								'name'=>'password','id'=>'password',
								'type'=>'password',
								'value'=> 'password');
								echo form_input($password);
								?>
							</div>
							<div class="clearfix"></div>
							<p class="center span5">
							<?php $login = array(
							'type' => 'submit',
							'class'=>'btn btn-primary',
							'content' => 'Login');
							echo form_button($login);
							?>
							</p>
						<?php echo form_fieldset_close();
					echo form_close();?>
				</div><!--/span-->
			</div><!--/row-->
<?php include('footer.php'); ?>