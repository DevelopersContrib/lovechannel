<script>
var $Btable = "";
$(document).ready(function(){
	
	 $Btable = $('table#booking-table').dataTable( {
		 "sPaginationType": "bs_normal",
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource":"/admin/bookingtable",
			 "aoColumns": [
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             { "bSearchable": true , "bSortable": true},
			             {
			                 bSortable: false,
			                 mRender: function (source, type, val) {
			                	 var html = '';
			                	 var snew = '';
			                	 var spaid = '';
			                	 var sdone = '';
				                 if (val[7] == 'new'){
				                	 html +='<span class="label label-primary">new</span>';
				                	 snew = 'selected';
				                 }else if (val[7] == 'paid'){
					                html += '<span class="label label-success">paid</span>'; 
					                spaid = 'selected';
				                 } else if (val[7] == 'done'){
				                	html += '<span class="label label-info">done</span>';
				                	sdone = 'selected';
				                	 
				                 }

				                 html += '<br><br><div class="form-group">';
				                 html += '<select class="form-control booking_status" id="booking_'+val[0]+'">';
				                 html += '<option value="new" '+snew+'>new</option>';
				                 html += '<option value="paid" '+spaid+'>paid</option>';
				                 html += '<option value="done" '+sdone+'>done</option>';
				                 html += '</select>';
				                 return html; 
				                 }
			             },
			             {
			                 bSortable: false,
			                 mRender: function (source, type, val) { 
				                 var html = '<div class="btn-group btn-group-sm" role="group">';
				                 html += '<a href="javascript:;" class="btn btn-primary"  onclick="showdetails('+val[0]+')"><i class="fa fa-book"></i>Details</a>';

				                 if (val[7] != 'done'){
					                 if (val[5]==null){
					                   html += '<a href="javascript:;" class="btn btn-primary"  onclick="showassign('+val[0]+')"><i class="fa fa-music"></i>Assign Musician</a>';
					                 }else {
					                   html += '<a href="javascript:;" class="btn btn-primary"  onclick="showassign('+val[0]+')"><i class="fa fa-music"></i>Change Musician</a>';
					                 }
				                 }

				                 html += '<a href="javascript:;" class="btn btn-danger" onclick="showdelete('+val[0]+')"><i class="fa fa-trash"></i>Delete</a>';
				                 html += '</div>';
				                 return html;//'<a href="javascript:void(0)" onclick="editctype('+val[0]+')"><i class="ui-tooltip fa fa-pencil" style="font-size: 18px;" data-original-title="Edit"></i></a>&nbsp;<a href="javascript:void(0)" onclick="confirmdeletectype('+val[0]+')"><i class="ui-tooltip fa fa-trash-o"  style="font-size: 18px;" data-original-title="Delete"></i></a>'; 
				                 }
			             }
			        ]
		} );

	 $( "body" ).on( "change", "#musician", function() {
		  	var m_id = $(this).val();
		  	var booking_id = $('#musician_booking').val();
		  	$.post('/admin/assignmusician',{
					m_id:m_id,
					booking_id:booking_id
				},
				function(data){
					$("#myModal").modal('hide'); 
					$Btable.fnDraw();
			});
		    
		});

	 $( "body" ).on( "change", ".booking_status", function() {
		  	var attrid = $(this).attr('id');
		  	var booking_id = attrid.replace('booking_','');
		  	var status = $(this).val();
		  	$.post('/admin/changestatus',{
					booking_id:booking_id,
					status:status
				},
				function(data){
					$("#myModal").modal('hide'); 
					$Btable.fnDraw();
			});
		    
		});	

	 
	 
});

function showdetails(id){
		$.post('/admin/showbookingdetails',{
			booking_id:id
			},
			function(data){
			$('.modal-body').html(data.html);
			$("#myModal").modal('show');  
		});
}

function showdelete(id){
	$.post('/admin/showdelete',{
		booking_id:id
		},
		function(data){
		$('.modal-body').html(data.html);
		$("#myModal").modal('show');  
		$("#myModalLabel").html("Delete Booking");
	});
}

function deletebooking(id){
	$.post('/admin/deletebooking',{
		booking_id:id
		},
		function(data){
		$("#myModal").modal('hide');  
		$Btable.fnDraw();
	});
}

function showassign(id){
	$.post('/admin/showassign',{
		booking_id:id
		},
		function(data){
		$('.modal-body').html(data.html);
		$("#myModal").modal('show');  
		$("#myModalLabel").html("Assign Musician");
	});
}
</script>
<div class="table-responsive table-responsive-cust">
						<table class="datatable table table-striped table-bordered" id="booking-table">
							<thead>
								<tr>
									<th>Booking id</th>
									<th>Customer Name</th>
									<th>Customer Email</th>
									<th>Event Date</th>
									<th>Serenade Type</th>
									<th>Musician</th>
									<th>Total</th>
									<th>Status</th>
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
									<h4 class="modal-title" id="myModalLabel">Booking Details</h4>
								</div>
								<div class="modal-body">
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>