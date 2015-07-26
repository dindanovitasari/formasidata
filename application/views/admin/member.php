<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('admin/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('admin/member/');?>">Member</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('admin/add_member');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Add Member</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Members</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Member</th>
								  <th>Name</th>
								  <th>NIM</th>
								  <th>Major</th>
								  <th>Faculty</th>
								  <th>Phone</th>
								  <th>Birth Date</th>
								  <th>Address</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($member->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_formasi ?></td>
								<td class="center"><?php echo $key->name ?></td>
								<td class="center"><?php echo $key->nim ?></td>
								<td class="center"><?php echo $key->major ?></td>
								<td class="center"><?php echo $key->faculty ?></td>
								<td class="center"><?php echo $key->phone ?></td>
								<td class="center"><?php echo $key->birthdate ?></td>
								<td class="center"><?php echo $key->address ?></td>
								<td class="center"><?php echo $key->stat ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("admin/update_member/".$key->id_formasi); ?>/">
										<i class="icon-edit icon-white"></i>  
										Update                                            
									</a>
								</td>
							</tr>
							<?php }?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
    
<?php include('footer.php'); ?>
