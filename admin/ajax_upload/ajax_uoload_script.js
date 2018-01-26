 $(document).ready(function() {
			$('#pfile').change(function() {
				$("form#frm1").submit();
			});
			
	        $("form#frm1").submit(function() {
				//alert('Done');
			$('.img_pre').attr('src','<?php echo base_url(); ?>uploads/ProgressBar.gif');
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: '<?php echo base_url(); ?>index.php/ajax',
                type: 'POST',
                data: formData,
                async: false,
                success: function(data) {
                    //alert(data);
					//$('.img_pre').attr('src', '<?php echo base_url(); ?>uploads/'+data);
					setTimeout(function () { 
					$('.img_pre').attr('src',data);
						$('.dltbtn').show();
						}, 3000);
					//$('.img_pre').attr('src',data);
                },
				error: function(data){
                console.log("error");
                console.log(data);
				   alert("Error :"+data);
                },
                cache: false,
                contentType: false,
                processData: false
            });

            return false;
        });

    });
	</script>
	
	<script type="text/javascript">
 $(document).ready(function() {
			$('.dltbtn').click(function() {
	   if(confirm('Are You Sure Wants To Delete Image !!')){
		$.ajax({
			url: '<?php echo base_url(); ?>index.php/ajax/deleteimg/',
                type: 'POST',
				 cache: false,
                success: function(data) {
				//alert(data);
				$('.img_pre').attr('src','<?php echo base_url();?>uploads/upload_profile.jpg');
                    $('.dltbtn').hide();
                },
				error: function(data){
                console.log("error");
                console.log(data);
				   alert("Error :"+data);
                }
            });
		}
		});
			
	});