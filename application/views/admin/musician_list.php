<link rel="stylesheet" href="/css/jquery.fileupload.css">

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/js/fileupload/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/js/fileupload/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/js/fileupload/jquery.fileupload.js"></script>
<script>
var $Mtable = "";
$(document).ready(function(){
	
	$Mtable = $('table#musician-table').dataTable( {
		 "sPaginationType": "bs_normal",
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource":"/admin/musiciantable",
			 "aoColumns": [
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             {
			                 bSortable: false,
			                 mRender: function (source, type, val) { 
				                 var html = '<div class="btn-group btn-group-sm" role="group">';
				                 html += '<a href="javascript:;" class="btn btn-primary"  onclick="musicianform('+val[0]+')"><i class="fa fa-pencil"></i>Edit</a>';
				                 html += '<a href="javascript:;" class="btn btn-danger" onclick="showdeletem('+val[0]+')"><i class="fa fa-trash"></i>Delete</a>';
				                 html += '</div>';
				                 return html; 
				                 }
			             }
			        ]
		} );
});

function musicianform(id){
	$.post('/admin/showmusicianform',{
		m_id:id
		},
		function(data){
		$('.modal-body').html(data.html);
		$("#myModal").modal('show');  
		$("#myModalLabel").html("Musician Details");
	});
}


function processMusician(){
	$('#mform-error').hide();
	var m_id = $('#m_id').val();
	var m_name = $('#m_name').val();
	var m_alias = $('#m_alias').val();
	var m_instrument = $('#m_instrument').val();
	var is_vocalist = 0;
	if($("#m_vocalist").is(':checked')){
		is_vocalist = 1;
	}
	var m_city = $('#m_city').val();
	var m_phone = $('#m_phone').val();
	var m_email = $('#m_email').val();
	var m_facebook = $('#m_facebook').val();
	var m_video = $('#m_video').val();
	var m_photo = $('#default_photo').val();

	if (m_name == ""){
		$('#mform-error #mform-error-message').html("Please enter musician name.");
		$('#mform-error').show();
	}else {
		$.post('/admin/savemusician',{
			 m_id:m_id,
			 m_name:m_name,
			 m_alias:m_alias,
			 m_instrument:m_instrument,
			 is_vocalist:is_vocalist,
			 m_city:m_city,
			 m_phone:m_phone,
			 m_email:m_email,
			 m_facebook:m_facebook,
			 m_video:m_video,
			 m_photo:m_photo 
			 
			},
			function(data){
			if (data.status){
				$("#myModal").modal('hide');  
				$Mtable.fnDraw();
			}else {
				$('#mform-error #mform-error-message').html("An error occured while saving musician details...");
				$('#mform-error').show();
			}
		});
	}
}

function showdeletem(id){
	$.post('/admin/showdeletem',{
		m_id:id
		},
		function(data){
		$('.modal-body').html(data.html);
		$("#myModal").modal('show');  
		$("#myModalLabel").html("Delete Musician");
	});
}

function deletemusician(id){
	$.post('/admin/deletemusician',{
		m_id:id
		},
		function(data){
		$("#myModal").modal('hide');  
		$Mtable.fnDraw();
	});
}


</script>
<div class="row">
     <div class="col-md-12 text-right">
		<div role="group" class="btn-group btn-group-sm text-right"><a onclick="musicianform(0)" class="btn btn-primary" href="javascript:;"><i class="fa fa-music"></i> Add Musician</a></div>
	</div>
</div>
<div class="table-responsive table-responsive-cust">
						<table class="datatable table table-striped table-bordered" id="musician-table">
							<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Alias</th>
									<th>Email</th>
									<th>Profile</th>
									<th>Action</th>
								</tr>
							</thead>
							
						</table>
					</div>
					
					
					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Musician Details</h4>
								</div>
								<div class="modal-body">
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>