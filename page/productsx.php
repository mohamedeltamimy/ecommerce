<!-- start: PAGE CONTENT -->
<div class="row">
	<div class="col-md-12">
		<!-- start: MULTIPLE FILE UPLOAD -->
		<div class="panel panel-white">
			<div class="panel-heading">
				<h4 class="panel-title">Multiple <span class="text-bold">File</span> Upload</h4>
				<div class="panel-tools">
					<div class="dropdown">
						<a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
							<i class="fa fa-cog"></i>
						</a>
						<ul class="dropdown-menu dropdown-light pull-right" role="menu">
							<li>
								<a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
							</li>
							<li>
								<a class="panel-refresh" href="#">
									<i class="fa fa-refresh"></i> <span>Refresh</span>
								</a>
							</li>
							<li>
								<a class="panel-config" href="#panel-config" data-toggle="modal">
									<i class="fa fa-wrench"></i> <span>Configurations</span>
								</a>
							</li>
							<li>
								<a class="panel-expand" href="#">
									<i class="fa fa-expand"></i> <span>Fullscreen</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="panel-body">



				<div class="row">
	                    <div class="col-sm-6" id="left">
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Product Name 
	                            </label>
	                            <div class="col-sm-9">
	                                <input value="" required="" class="form-control" name="name" id="name" type="text">
	                            </div>
	                        </div>
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Product Price 
	                            </label>
	                            <div class="col-sm-9">
	                                <input value="" required="" class="form-control" name="name" id="name" type="text">
	                            </div>
	                        </div>
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Product Quantity 
	                            </label>
	                            <div class="col-sm-9">
	                                <input value="" required="" class="form-control" name="name" id="name" type="text">
	                            </div>
	                        </div>
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Product Status 
	                            </label>
	                            <div class="col-sm-9">
	                                <select style="width: 100%; text-align: center;" id="get_coustomer" name="get_coustomer" class="form-control" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
	                            </div>
	                        </div>
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                (Category/Sub) 
	                            </label>
	                            <div class="col-sm-9">
	                                <select style="width: 100%; text-align: center;" id="get_coustomer" name="get_coustomer" class="form-control" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
	                            </div>
	                        </div>
	                        
	                    </div>
	                    <div class="col-sm-6" id="right">
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Product Shiping
	                            </label>
	                            <div class="col-sm-9">
	                                <input value="" required="" class="form-control" name="name" id="name" type="text">
	                            </div>
	                        </div>
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Stor Name <!--span id="spanUsernamex" class="symbol required"></span-->
	                            </label>
	                            <div class="col-sm-9">
	                                <select style="width: 100%; text-align: center;" id="get_coustomer" name="get_coustomer" class="form-control" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
	                            </div>
	                        </div>
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Filter Name <!--span id="spanUsernamex" class="symbol required"></span-->
	                            </label>
	                            <div class="col-sm-9">
	                                <select style="width: 100%; text-align: center;" id="get_coustomer" name="get_coustomer" class="form-control" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
	                            </div>
	                        </div>
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Product Price Sale 
	                            </label>
	                            <div class="col-sm-9">
	                                <input value="" required="" class="form-control" name="name" id="name" type="text">
	                            </div>
	                        </div>
	                        <div class="form-group" >
	                            <label class="col-sm-3 control-label" >
	                                Tax id 
	                            </label>
	                            <div class="col-sm-9">
	                                <input value="" required="" class="form-control" name="name" id="name" type="text">
	                            </div>
	                        </div>
	                        
                    
            	</div>
				<dr/><hr/><dr/>

				<div class="row">
					<div class="col-sm-12">
						<!-- start: DROPZONE PANEL -->
						<div class="panel panel-white">
							
							<div class="panel-body">
								
								<form action="/image" class="dropzone" id="my-awesome-dropzone"></form>
							</div>
						</div>
						<!-- end: DROPZONE PANEL -->
					</div>
				</div>

				<form id="fileupload" action="" method="POST" enctype="multipart/form-data">

					
					<div class="row">
						<div class="col-sm-12">
                            <div class="form-group" >
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary col-md-12" style="margin-right: 70px;" onclick="add_row_des()">
                                        <i class="fa fa-plus"></i>
                                        <span>Add Other Description</span>
                                    </button>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="control-label">
									
								</label>
								<textarea class="ckeditor form-control" cols="10" rows="10"></textarea>
							</div>
						</div>
					</div>
					<div id="des_all">
						
					</div>


					
				</form>
			</div>
		</div>
		<!-- end: MULTIPLE FILE UPLOAD -->
	</div>
</div>





<script type="text/javascript">
	jQuery(document).ready(function() {
		Main.init();
		SVExamples.init();
	});
	function add_row_des(){
		alert('بصى هو المفروض ان المحرر يظهر تحت بس بيطلع من غير استايل');
		var row = '<div class="row">'+
						'<div class="col-sm-12">'+
							'<div class="form-group">'+
								'<label class="control-label">'+
								'</label>'+
								'<textarea class="ckeditor form-control" cols="10" rows="10"></textarea>'+
							'</div>'+
						'</div>'+
					'</div>' ;
		$('#des_all').append(row);
	}

</script>



		