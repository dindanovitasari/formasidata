<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('admin/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('admin/member/');?>">Member</a> <span class="divider">/</span>
					</li>
					
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add Member</h2>
					</div>
					<div class="box-content">
						<?php foreach ($member->result() as $key) {?>
						<form class="form-horizontal" action="<?php echo base_url('admin/save_member');?>" method="post">
						<input type="hidden"name="status" value="edit">
						<input type="hidden"name="id_member" value="<?php echo $key->id_formasi ?>">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label">Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="name" value="<?php echo $key->name ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">NIM</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="nim" value="<?php echo $key->nim ?>">
							</div>
							</div>
							<div class="control-group">
								<label class="control-label" >Faculty</label>
								<div class="controls">
								  <select name="id_faculty">
									<?php foreach($faculty->result() as $key1){ ?>
									<option value="<?php echo $key1->id_faculty?>"
									<?php if ($key1->id_faculty==$key->id_faculty)
									echo "selected='selected'";?>>
									<?php echo $key1->faculty?></option>
									<?php } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label">Major</label>
							  <div class="controls">
								<select name="id_major">
									<?php foreach($major->result() as $key2){ ?>
									<option value="<?php echo $key2->id_major?>"
									<?php if ($key2->id_major==$key->id_major)
									echo "selected='selected'";?>>
									<?php echo $key2->major?></option>
									<?php } ?>
								  </select>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">Phone</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="focusedInput" name="phone" value="<?php echo $key->phone ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">Birth Date</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" id="focusedInput" name="birthdate" value="<?php echo $key->birthdate ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">Address</label>
							  <div class="controls">
								<textarea class="input-xlarge" name="address"><?php echo $key->address ?></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">Status</label>
							  <div class="controls">
								<select name="id_stat">
									<?php foreach($stat->result() as $key3){ ?>
									<option value="<?php echo $key3->id_stat?>"
									<?php if ($key3->id_stat==$key->id_stat)
									echo "selected='selected'";?>>
									<?php echo $key3->stat?></option>
									<?php } ?>
								  </select>
							  </div>
							</div>
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Reset</button>
							<?php } ?>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


    
<?php include('footer.php'); ?>
