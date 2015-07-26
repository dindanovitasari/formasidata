<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('admin/');?>">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url('admin/major/');?>">Major</a>
					</li>
				</ul>
			</div>
			<a href="<?php echo base_url('admin/add_major');?>" class="btn btn-large btn-primary"><i class="icon-plus icon-blue"></i> Add Major</a> 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-tag"></i> Majors</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID Major</th>
								  <th>Major</th>
								  <th>Faculty</th>
								  <th>Actions</th>
							  </tr>
						  </thead>					  
						  <tbody>
						<?php foreach ($major->result() as $key) {?>	
							<tr>
								<td><?php echo $key->id_major ?></td>
								<td class="center"><?php echo $key->major ?></td>
								<td class="center"><?php echo $key->faculty ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo base_url("admin/update_major/".$key->id_major); ?>/">
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
