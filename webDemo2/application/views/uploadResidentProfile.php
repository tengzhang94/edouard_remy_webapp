 <!--       <div class="row">
         <div class="col-sm-10 col-sm-offset-2 col-xs-12">
          
        <form id="upload-image-form" action="UploadController/resident_upload" method="post" enctype="multipart/form-data">
         <!-- <?php echo form_open_multipart('UploadController/do_upload');?>  -->
 <!--
          <div id="image-preview-div" style="display: none">
            <label for="exampleInputFile">Selected image:</label>
            <br>
            <img id="preview-img" src="noimage">
          </div>
            
          <div class="form-group">
            <input type="file" name="userfile" id="file" required>
          </div>
            <button class="btn btn-lg btn-primary" id="upload-button" type="submit" disabled>Upload image</button>
        </form>
             
         </div>
        </div>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/modal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/javascript/upload-image.js"></script>

-->
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-9 col-sm-offset-3" style="height:200px;margin-top:10%;">
        <div class="image_preview">
        </div>
    </div>
    </div>
    <div class="row">
	<div class="col-sm-11 col-sm-offset-1 col-xs-12">
			<?php echo form_open_multipart('home/upload', array('role'=>'form'));
			if(isset($message)): 
			echo "<div class='alert alert-success'>".$message."</div>";
			endif; ?>	
			<div class="form-group">
                            
                            <input type="file" name="userfile" id="image" onchange="readURL(this)" style="height: 100px;" />
                        </div>
                        
                        <div class="row">
			<div class=" col-sm-12 col-xs-12">
			<!--	<div class="image_preview">
				</div>
                        -->
                                <div class="form-group">
                                <label class="control-label col-sm-3" for="profile"><p class="residentInfoStyle">Photo name:</p></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" style="border-radius: 0px;" id="profile" placeholder="photo name " name="filename"  required>
                                </div>
                                </div>
			</div>
			</div>					
			
			<hr />
                        <input type="submit" name="save" value="Save" class="btn btn-primary"/>
			<a href="#" onclick="reset();" class="btn btn-warning">reset</a>
			<hr />			
		
			<?php form_close();
			if(isset($errors)):
				echo "<div class='alert alert-danger'>".$errors."</div>";
			endif; ?>
	</div>
	</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('.image_preview').html('<img src="'+e.target.result+'" alt="'+reader.name+'" class="img-thumbnail" width="300px" height="300px"/>');
		}
		reader.readAsDataURL(input.files[0]);
	}
	}
	
	function reset(){
	$('#image').val("");
	$('.image_preview').html("");
	}
	</script>
        