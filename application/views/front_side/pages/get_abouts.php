<!-- css -->


<!-- Start about div -->
	<article>
		<div class="post-image">
			<div class="post-heading">
				<?php
					/*$rows=$this->materail_model->get_where(array('m_category'=>'about'));																		
					foreach ($rows as $key => $values) {														
						$path = glob("image/materail/".$values->m_id."/*.jpg");
						$new_about = 0;																																			        
                        foreach ($path as $key => $value) {
                        $large= substr($value, 18);
                        $new_about += 1;
                        if ($new_about==1) {
                           		break;
                           	} */ 
                       $rows=$this->materail_model->get_where(array('m_category'=>'about','m_id'=>$id));																		
					foreach ($rows as $key => $value) {
                        if (is_dir("image/materail/$value->m_id/thumb")) {  
                            if($target_dir = opendir("image/materail/$value->m_id/thumb")){
                                while ($file = readdir($target_dir)) {
                                    if($file != "." && $file != ".."){ 	
             	?>
				<h3><?php echo $value->m_name; ?></h3>
			</div>
			
			
			<img src="<?php echo base_url();?>image/materail/<?php echo $value->m_id."/".$file;?>" alt="" />
			<?php } }}}} ?>
		</div>
		<p> <?php echo $value->m_desc; ?></p>
	</article>
<!-- End about div -->