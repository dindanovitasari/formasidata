<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('admin/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('admin/faculty/');?>">Faculty</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Update Faculty</h2>
					</div>
					<?php foreach ($faculty->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('admin/save_faculty/');?>" method="post">
						<input type="hidden" name="status" value="edit">
						<input name="id_faculty" type="hidden" value="<?php echo $key->id_faculty?>">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label">Faculty</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="faculty" value="<?php echo $key->faculty?>">
							  </div>
							</div>
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							<?php }?> 
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


    
<?php include('footer.php'); ?>
