	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin_side/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" href="<?php  echo base_url();?>admin_side/assets/plugins/data-tables/DT_bootstrap.css" />

	<link rel="stylesheet" type="text/css" href="<?php  echo base_url();?>admin_side/assets/plugins/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
							<!-- BEGIN PAGE CONTENT-->

					<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box purple">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i><?php echo tran('Manage Users');?></div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
									<a href="<?php echo site_url('materail/add');?>">
										<button class="btn green">
										<?php echo tran('Add New');?> <i class="icon-plus"></i>
										</button>
									</a>
									</div>
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown"><?php echo tran('Tools');?> <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li><a href="#"><?php echo tran('Print');?></a></li>
											<li><a href="#"><?php echo tran('Save PDF');?></a></li>
											<li><a href="#"><?php echo tran('Export to Excel');?></a></li>
										</ul>
									</div>
								</div>
								
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th><?php echo tran('Name');?></th>
											<th><?php echo tran('Last Name');?></th>
											<th><?php echo tran('Email');?></th>
											<th><?php echo tran('Position');?></th>
											<th width="50"><?php echo tran('Status');?></th>
											<th width="50"><?php echo tran('Edit');?></th>
											<th width="50"><?php echo tran('Delete');?></th>
										</tr>
									</thead>
									<tbody>
									  	<?php 
									  	$rows=$this->user_model->get();
									  	foreach ($rows as $key => $value) {?>
										<tr  id="delete-hide-<?php echo $value->u_id;?>">
											<div id="delete-preload-<?php echo $value->u_id;?>" style="display:none"><center><img src='<?php echo base_url(); ?>admin_side/preloader/small-preloader.GIF'></center></div>
											<td><?php echo $value->u_name;?></td>
											<td><?php echo $value->u_lastname;?></td>
											<td><?php echo $value->u_email;?></td>
											<td><?php echo $value->u_position;?></td>
											<td >
												<div id="preload-<?php echo $value->u_id;?>" style="display:none"><center><img src='<?php echo base_url(); ?>admin_side/preloader/small-preloader.GIF'></center></div>
									            <div class="basic-toggle-button" id="update-state-<?php echo $value->u_id;?>">
									            	<input type="checkbox" onchange="go('<?php echo $value->u_id;?>')" class="toggle" id="state-<?php echo $value->u_id;?>" <?php echo ($value->u_state)?'checked="checked"': '';?>>
									            </div>
											</td>
											<td><a  href="<?php echo site_url('user/user_profile/'.$value->u_id.'') ?>" class="btn blue icn-only" id="edit"><i class="icon-share"></i></a></td>
											<td><a onclick="delete_row('<?php echo $value->u_id;?>')" id="delete-<?php echo $value->u_id;?>" class="btn red icn-only" id="delete"><i class="icon-remove icon-white"></i></a></td>
										</tr>
								           <?php   }?>
										
									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->

			<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>admin_side/assets/plugins/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/data-tables/DT_bootstrap.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->

	<script type="text/javascript" src="<?php echo base_url(); ?>admin_side/assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/app.js"></script>
	<script src="<?php echo base_url(); ?>admin_side/assets/scripts/table-editable.js"></script>    
	<script>
		jQuery(document).ready(function() {       
		    App.init();
		 
		  TableEditable.init();
		  FormComponents.init();
		});

		function delete_row(id){

	$('#delete-hide-'+id).fadeOut(500,
		function(){
		$.ajax({
		url: "<?php echo site_url('user/delete/"+id+"');?>",
		type: 'POST',
		beforeSend:function(data){ // Are not working with dataType:'jsonp'
      //  $('#update-state-'+id).fadeToggle(500, hide());
      	$('#delete-preload-'+id).css('display','block')
        },
		success: function (msg){
			//alert(msg)

		$('#delete-preload-'+id).css('display','none')
		$('#delete-hide-'+id).hide();
		}
	});	
		})
		
	return false
}

		function go(id){
			var state;
			var stateElement=document.getElementById('state-'+id)
			if (stateElement.checked) {
				state=1;
			}else{
				state=0;
			}
	$('#update-state-'+id).fadeOut(500,
		function(){
		$.ajax({
		url: "<?php echo site_url('user/update_state/"+id+"/"+state+"');?>",
		type: 'POST',
		beforeSend:function(data){ // Are not working with dataType:'jsonp'
      //  $('#update-state-'+id).fadeToggle(500, hide());
      	$('#preload-'+id).css('display','block')
        },
		success: function (msg){
			alert(msg)

		$('#preload-'+id).css('display','none')
		$('#update-state-'+id).fadeToggle(500);
		}
	});	
		})
		
	return false
}


	</script>