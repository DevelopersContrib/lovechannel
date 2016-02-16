<style>
.userphoto {
    border: 1px solid #d7d7d7;
    height: 110px;
    margin-left: 20px;
    padding: 9px;
    position: relative;
    width: 94px;
}

</style>
<div class="row">
    <div class="col-md-12">
            <div class="alert alert-danger" id="mform-error" role="alert" style="display:none">
						  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						  <span class="sr-only">Error:</span>
						     <span id="mform-error-message"></span>
			</div>
    		<form action="javascript:processMusician();" method="post">
			  <div class="form-group">
			    <label for="m_name">Musician Name</label>
			    <input type="text" class="form-control" id="m_name" name="m_name" placeholder="" value="<?php echo $m_name?>">
			  </div>
			  <div class="form-group">
			    <label for="m_alias">Alias</label>
			    <input type="text" class="form-control" id="m_alias" name="m_alias" placeholder="" value="<?php echo $m_alias?>">
			  </div>
			 <div class="form-group">
			    <label for="m_instrument">Instrument</label>
			    <input type="text" class="form-control" id="m_instrument" name="m_instrument" placeholder="" value="<?php echo $instrument?>">
			  </div>
			 <div class="form-group">
			    <label for="m_vocalist"">Is vocalist?</label>
			     <input type="checkbox" name="m_vocalist" id="m_vocalist" <?php if ($is_vocalist == 1) echo "checked"?>>
			  </div>
			 <div class="form-group">
			    <label for="m_city">City</label>
			    <input type="text" class="form-control" id="m_city" name="m_city" placeholder="" value="<?php echo $city?>">
			  </div>
			  <div class="form-group">
			    <label for="m_phone">Phone Number</label>
			    <input type="text" class="form-control" id="m_phone" name="m_phone" placeholder="" value="<?php echo $phone_number?>">
			  </div>
			  <div class="form-group">
			    <label for="m_email">Email address</label>
			    <input type="email" class="form-control" id="m_email" name="m_email" value="<?php echo $email?>">
			  </div>
			  <div class="form-group">
			    <label for="m_facebook">Facebook profile</label>
			    <input type="text" class="form-control" id="m_facebook" name="m_facebook" value="<?php echo $facebook_profile?>">
			  </div>
			    <div class="form-group">
			    <label for="m_video">Video Url</label>
			    <input type="text" class="form-control" id="m_video" name="m_video" value="<?php echo $video_url?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Image</label>
			    <div id="user_image" class="userphoto">
							<img id="userimage" class="img_cls" style="width: 100%;height:110px;" alt="" src="<?php ($photo=="") ? $avatar="/img/default.jpg" : $avatar="/uploads/profile/".$photo; echo $avatar?> ">
				</div>
			    <span class="btn btn-success fileinput-button">
			      <i class="glyphicon glyphicon-plus"></i>
			        <span>Select file...</span>
			        <!-- The file input field used as target for the file upload widget -->
			        <input id="fileupload" type="file" name="files[]" multiple>
			    </span>
			    <br>
			    <br>
			    <!-- The global progress bar -->
			    <div id="progress" class="progress">
			        <div class="progress-bar progress-bar-success"></div>
			    </div>
			    <!-- The container for the uploaded files -->
			    <div id="files" class="files"></div>
			    
			    <div class="alert alert-danger" id="upload-error" role="alert" style="display:none">
						  
			    </div>
			  </div>
			   <input type="hidden" class="form-control" id="m_id" name="m_id" value="<?php echo $m_id?>">
			   <input type="hidden" class="form-control" id="default_photo" name="default_photo" value="<?php echo $photo?>">
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		
	</div>
</div>

<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
     var url = '/admin/uploadpic';
     $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                if(file.error){
                	$('#upload-error').html("Ooops! You uploaded a file alright but it's not in the correct format. We only accept .jpg, .jpeg, or .png files");
                    $('#upload-error').show();
                }else{
                	$('<p/>').text(file.name).appendTo('#files');
                	$('#default_photo').val(file.name);
                    $('#userimage').attr('src','/uploads/profile/'+file.name);
                }
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>