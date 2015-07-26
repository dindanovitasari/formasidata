<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('admin/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('admin/major/');?>">Major</a> <span class="divider">/</span>
					</li>
					
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Update Major</h2>
					</div>
					<?php foreach ($major->result() as $key) {?>	
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url('admin/save_major/');?>" method="post">
						<input type="hidden" name="status" value="edit">
						<input name="id_major" type="hidden" value="<?php echo $key->id_major?>">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Faculty</label>
								<div class="controls">
								  <select name="id_faculty">
									<?php foreach($faculty->result() as $key1){
										if ($key1->id_faculty == $key->id_faculty){
											$selected = "selected";
											?>
									<option value="<?php echo $key1->id_faculty?>" selected="<?php $selected?>"><?php echo $key1->faculty?></option>
									<?php } } ?>
								  </select>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label">Major</label>
							  <div class="controls">
								<input type="text" class="input-xlarge focused" id="focusedInput" name="major" value="<?php echo $key->major?>">
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
