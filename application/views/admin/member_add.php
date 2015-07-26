<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('admin/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('admin/member/');?>">Member</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('admin/add_member');?>">Add Member</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add Member</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('admin/save_member');?>" method="post">
						<input type="hidden"name="status" value="new">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label">Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="name" value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">NIM</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="nim" value="">
							</div>
							</div>
							<div class="control-group">
								<label class="control-label" >Faculty</label>
								<div class="controls">
								  <select name="id_faculty">
									<?php foreach($faculty->result() as $key){ ?>
										<option value="<?php echo $key->id_faculty ?>"><?php echo $key->faculty?></option>
									<?php } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label">Major</label>
							  <div class="controls">
								<select name="id_major">
									<?php foreach($major->result() as $key1){ ?>
										<option value="<?php echo $key1->id_major ?>"><?php echo $key1->major?></option>
									<?php } ?>
								  </select>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">Phone</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="focusedInput" name="phone" value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">Birth Date</label>
							  <div class="controls">
								<input type="date" class="input-xlarge" id="focusedInput" name="birthdate" value="">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">Address</label>
							  <div class="controls">
								<textarea class="input-xlarge" name="address"></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">Status</label>
							  <div class="controls">
								<select name="id_stat">
									<?php foreach($stat->result() as $key1){ ?>
										<option value="<?php echo $key1->id_stat ?>"><?php echo $key1->stat?></option>
									<?php } ?>
								  </select>
							  </div>
							</div>
							  <button type="submit" class="btn btn-primary">Save</button>
							  <button type="reset" class="btn">Reset</button>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


    
<?php include('footer.php'); ?>
