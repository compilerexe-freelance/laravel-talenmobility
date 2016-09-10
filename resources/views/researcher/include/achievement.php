      <script>
			$(document).ready(function() {
				app.formMask();
			});
   	  </script> 
    
      <script>
        $(document).ready(function() {
			
			/* Do this once the document has been loaded */
			$('#projectModal').appendTo("body");
			$('#publicationModal').appendTo("body");
			$('#patentModal').appendTo("body");
			$('#workappliedModal').appendTo("body");
            
            function showSection(section){
                 var title = ''
				 var selectedDataTable = '';
				 
                 if(section == 'project'){
                    title ='โครงการวิจัย';
					selectedDataTable = 'projectTable';
                 }else if(section == 'publication'){
                    title ='ผลงานตีพิมพ์';
					selectedDataTable = 'publicationTable';
                 }else if(section == 'patent'){
                    title ='สิทธิบัตร';
					selectedDataTable = 'patentTable';
                 }else if(section == 'workapplied'){
                    title ='ผลงานที่นำไปใช้ประโยชน์แล้ว';
					selectedDataTable = 'workappliedTable';
                 }
                 
                 if(title !== ''){
                     $("#btnMenu").text(title);
                     $('#project').hide();
                     $('#publication').hide();
                     $('#patent').hide();
                     $('#workapplied').hide();  
                     $("#"+section).show();
					 
					 var table = $('#'+selectedDataTable).DataTable();
					 table.columns.adjust().draw();
                 }
            }
            
            /* select item on dropbox */
            $("#sectionMenu").on("click", "a", function(e){
                e.preventDefault();
                $("#btnMenu").text($(this).text());
                
                var selectedItem = $(this).attr("data-value");
                $("#btnMenu").val(selectedItem);
                showSection(selectedItem);
            })
            
            $(document).on('click',"button.btn-sm",function(){
                if(this.id == 'btnAddPro'){
                    //$('#btnDeletePro').hide();
                    clearForm('project');   
                    $('#projectModal').modal('show');
                }
                
                if(this.id == 'btnAddPub'){
                    //$('#btnDeletePub').hide();
                    clearForm('publication');  
                    $('#publicationModal').modal('show');
                }
                
                if(this.id == 'btnAddPat'){
                    //$('#btnDeletePat').hide();
                    clearForm('patent');   
                    $('#patentModal').modal('show');
                }
                
                if(this.id == 'btnAddWork'){
                    //$('#btnDeleteWork').hide();
                    clearForm('workapplied');          
                    $('#workappliedModal').modal('show');
                }
            });
            
            $('#btnDeletePro').bind('click',function(){
                $('#confirmDeleteModal').modal('show');
            });
            $('#btnDeletePub').bind('click',function(){
                $('#confirmDeleteModal').modal('show');
            });
            $('#btnDeletePat').bind('click',function(){
                $('#confirmDeleteModal').modal('show');
            });
            $('#btnDeleteWork').bind('click',function(){
                $('#confirmDeleteModal').modal('show');
            });
            
            function clearForm(nameForm){
                $('#'+nameForm+'Form input').each(function(index){  
                    var input = $(this);
                    var type = input.attr('type');
                    if(type!='radio' && type !='checkbox' && type !='button'){
                        input.val('');
                    }
                });
            }
			
			/*update data table */
			$('#projectTable').DataTable( {
				"scrollX": true,
				"oLanguage": {
						"sProcessing": "กำลังดำเนินการ...",
						"sLengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
						"sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
						"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
						"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
						"sInfoFiltered": "(จากรายการทั้งหมด _MAX_ รายการ)",
						"sSearch": "ค้นหา :",
						"oPaginate": {
								"sFirst": "เริ่มต้น",
								"sPrevious": "ก่อนหน้า",
								"sNext": "ถัดไป",
								"sLast": "สุดท้าย"}
				}
				
				/*"processing": true,
				"serverSide": true,
				"ajax": "test.php"*/
			});
						
			$('#publicationTable').DataTable( {
				"scrollX": true,
				"oLanguage": {
						"sProcessing": "กำลังดำเนินการ...",
						"sLengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
						"sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
						"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
						"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
						"sInfoFiltered": "(จากรายการทั้งหมด _MAX_ รายการ)",
						"sSearch": "ค้นหา :",
						"oPaginate": {
								"sFirst": "เริ่มต้น",
								"sPrevious": "ก่อนหน้า",
								"sNext": "ถัดไป",
								"sLast": "สุดท้าย"}
				}
				/*"processing": true,
				"serverSide": true,
				"ajax": "test.php"*/
			});
			
			$('#workappliedTable').DataTable( {
				"scrollX": true,
				"oLanguage": {
						"sProcessing": "กำลังดำเนินการ...",
						"sLengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
						"sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
						"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
						"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
						"sInfoFiltered": "(จากรายการทั้งหมด _MAX_ รายการ)",
						"sSearch": "ค้นหา :",
						"oPaginate": {
								"sFirst": "เริ่มต้น",
								"sPrevious": "ก่อนหน้า",
								"sNext": "ถัดไป",
								"sLast": "สุดท้าย"}
				}
				/*"processing": true,
				"serverSide": true,
				"ajax": "test.php"*/
			});
			
			$('#patentTable').DataTable( {
				"scrollX": true,
				"oLanguage": {
						"sProcessing": "กำลังดำเนินการ...",
						"sLengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
						"sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
						"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
						"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
						"sInfoFiltered": "(จากรายการทั้งหมด _MAX_ รายการ)",
						"sSearch": "ค้นหา :",
						"oPaginate": {
								"sFirst": "เริ่มต้น",
								"sPrevious": "ก่อนหน้า",
								"sNext": "ถัดไป",
								"sLast": "สุดท้าย"}
				}
				/*"processing": true,
				"serverSide": true,
				"ajax": "test.php"*/
			});

        });
		
		$(document).on("click", "#projectTable tbody", function() {
			$('#projectModal').modal('show');
		});
		
		$(document).on("click", "#publicationTable tbody", function() {
			$('#publicationModal').modal('show');
		});
		
		$(document).on("click", "#workappliedTable tbody", function() {
			$('#workappliedModal').modal('show');
		});
		
		$(document).on("click", "#patentTable tbody", function() {
			$('#patentModal').modal('show');
		});
        
      </script>
      
      <div class="col-lg-12" style="margin-top:5px">
        <input id="type" name="type" type="hidden" value="project" />
        <span class="text-success">
            <b>เลือกประเภทผลงาน: </b>
        <span>
        <div class="btn-group">
          <button type="button" class="btn btn-default" id="btnMenu" value="project">
           โครงการวิจัย
          </button>
          <button type="button" class="btn btn-default dropdown-toggle" 
           data-toggle="dropdown"> 
            <span class="caret"></span> 
          </button>
          <ul class="dropdown-menu" role="menu" id="sectionMenu">
            <li>
            	<a href="#" class="menu-group" id="project-menu" data-value = "project">
            		โครงการวิจัย
            	</a>
            </li>
            <li>
            	<a href="#" class="menu-group" data-value = "publication">
                	ผลงานตีพิมพ์
                </a>
            </li>
            <li>
            	<a href="#" class="menu-group" data-value = "patent">
                	สิทธิบัตร
                </a>
            </li>
            <li>
            	<a href="#" class="menu-group" data-value = "workapplied">
                	ผลงานที่นำไปใช้ประโยชน์แล้ว
                </a>
            </li>
          </ul>
        </div>
      </div>
      <br/>
      <hr>
      
      <!-- tableData -->
      <div id="project">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="projectTable" width="inherit" border="0" cellspacing="0" 
             cellpadding="0" class="table table-striped table-bordered table-hover profileBox">
              <thead>
                <tr>
                  <th width="15%">ปี</th>
                  <th width="45%">ชื่อโครงการ</th>
                  <th width="40%">บทบาทในโครงการ</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-12"> 
          <button id="btnAddPro" type="button" class="btn btn-sm btn-success" 
           data-toggle="modal">+ เพิ่มข้อมูล
          </button>
          <span class="msgNote"> ( ต้องระบุอย่างน้อย 1 รายการ ) </span> 
        </div>
        
      </div>
      <!--<end of project>--> 
      
      <!--Publication start-->
      <div id="publication" style="display:none">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="publicationTable" width="inherit" border="0" 
             cellspacing="0" cellpadding="0" class="table table-striped table-bordered 
             table-hover profileBox">
              <thead>
                <tr>
                  <th width="15%">ปี</th>
                  <th width="85%">ชื่อบทความ</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-12"> 
         
          <button id="btnAddPub" type="button" class="btn btn-sm btn-success" 
            data-toggle="modal">+ เพิ่มข้อมูล
          </button>
          <span class="msgNote"> ( ต้องระบุอย่างน้อย 1 รายการ ) </span> </div>        
      </div>
      <!--end of Publication--> 
      
      <!--Patent section-->
      <div id="patent" style="display:none">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="patentTable" width="inherit" border="0" cellspacing="0" 
             cellpadding="0" class="table table-striped table-bordered table-hover profileBox">
              <thead>
                <tr>
                  <th width="15%" class="col-lg-1">วันที่จด</th>
                  <th width = "85%">ชื่อการประดิษฐ์</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-12"> 
          <button id="btnAddPat" type="button" class="btn btn-sm btn-primary" 
           data-toggle="modal">+ เพิ่มข้อมูล
          </button>
          <span class="msgNote"> ( ต้องระบุอย่างน้อย 1 รายการ ) </span> 
        </div>        
      </div>
      <!--end of patent--> 
      
      <!--Work applied section-->
      <div id="workapplied"  style="display:none">
        <div class="panel panel-default">
          <div class="panel-body">
            <table id="workappliedTable" width="inherit" border="0" 
             cellspacing="0" cellpadding="0" class="table table-striped 
             table-bordered table-hover profileBox">
              <thead>
                <tr>
                  <th width="15%">ปี</th>
                  <th width="40%">ชื่อผลงาน</th>
                  <th width="45%">รูปแบบการนำไปใช้</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-12"> 
          <button id="btnAddWork" type="button" class="btn btn-sm btn-primary" 
           data-toggle="modal">+ เพิ่มข้อมูล
          </button>
          <span class="msgNote"> ( ต้องระบุอย่างน้อย 1 รายการ ) </span> 
        </div>
      </div>
        
        <!--#################### work applied modal ####################--> 
        <div id="workappliedModal"class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                 aria-hidden="true">&times;
                </button>
                <h4 id="modal_title" class="modal-title text-info">
                    <i class="fa fa-building fa-2x"></i> ข้อมูลผลงานที่นำไปใช้ประโยชน์
                </h4>
              </div>
              
              <form id="workappliedForm" name="workappliedForm" 
                 action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                 
              <div class="modal-body">
                  <div class="form-group col-lg-12">
                    <div class="msgBox hide" id="msgData_workapplied"></div>
                  </div>
                  <div class="form-group">
                    <label for="year" class="col-sm-4 control-label">
                        <sup><span class="red-color fa fa-asterisk"></span></sup>ปี (พ.ศ.)
                    </label>
                    <div class="col-sm-8">
                      <input id="yearMask2" name="year_workapplied" 
                       type="text" class="form-control" style="width:90px" placeholder="yyyy" 
                       required="" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="workapplied_name" class="col-sm-4 control-label">
                        <sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อผลงาน
                    </label>
                    <div class="col-sm-6">
                      <input id="workapplied_name" name="workapplied_name" 
                       type="text" value="" class="form-control" required="" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="workapplied_type" class="col-sm-4 control-label">
                        <sup><span class="red-color fa fa-asterisk"></span></sup>รูปแบบการนำไปใช้
                    </label>
                    <div class="col-sm-6">
                      <input id="apply_type" name="apply_type" type="text" value="" required=""
                       class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="project_role" class="col-sm-4 control-label">
                        ก่อให้เกิดผลกระทบด้าน
                    </label>
                    <div class="col-sm-8">
                      <label class="radio-inline">
                        <input type="radio" name="impact_type" id="impact_economic" 
                         value="economic" />
                        ด้านเศรษฐกิจ
                      </label>
                      
                      <label class="radio-inline">
                        <input type="radio" name="impact_type" id="impact_social" value="social" />
                        ด้านสังคม
                      </label>
                      
                      <label class="radio-inline">
                        <input type="radio" name="impact_type" id="impact_environment" 
                         value="environment" />
                        ด้านสิ่งแวดล้อม
                      </label>
                    </div>
                  </div>
                  <input type="hidden" name="id_workapplied" id="id_workapplied" value="" />
                  <div class="form-group has-warning"> 
                    <div class="col-sm-4 col-sm-offset-4">
                      <p class="text-danger">(* จำเป็นต้องกรอกข้อมูล)</p>
                    </div>
                  </div>
                
              </div>
              <div class="modal-footer">
                <div class="form-group" align="center">
                  <button id="btnYesWork" class="btn btn-success" type="submit">
                    <i class="fa fa-save"></i> บันทึก 
                  </button>
                  <a href="#" id="btnCancelWork" data-dismiss="modal" 
                   aria-hidden="true" class="btn btn-default center">
                     <i class="fa fa-remove"></i> ยกเลิก 
                  </a> 
                  <div class="col-sm-3 pull-right">
                     <button id="btnDeleteWork" class="btn btn-danger" 
                      title="ลบรายการนี้" alt="ลบรายการนี้">
                       <i class="fa fa-trash"></i>
                     </button>
                  </div>
                </div>
              </div>
              
              </form>
            </div>
          </div>
        </div>

		<!--#################### patent modal ####################-->
		<div id="patentModal"class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                 aria-hidden="true">&times;</button>
                <h4 id="modal_title" class="modal-title text-info">
                    <i class="fa fa-building fa-2x"></i> ข้อมูลสิทธิบัตร
                </h4>
              </div>
              <form id="patentForm" name="patentForm" action="" 
                 method="post" enctype="multipart/form-data" class="form-horizontal">
                 
              <div class="modal-body">
                  <div class="form-group col-lg-12">
                    <div class="msgBox hide" id="msgData_patent"></div>
                  </div>
                  <div class="form-group">
                    <label for="patent_name" class="col-sm-4 control-label">
                    	<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อการประดิษฐ์</label>
                    <div class="col-sm-6">
                      <input id="patent_name" name="patent_name" type="text" 
                       value="" class="form-control" required="" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="patent_id" class="col-sm-4 control-label">
                        <sup><span class="red-color fa fa-asterisk"></span></sup>หมายเลขการประดิษฐ์
                    </label>
                    <div class="col-sm-6">
                      <input id="patent_id" name="patent_id" type="text" value="" 
                       class="form-control" required="" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="patent_date" class="col-sm-4 control-label">
                        <sup><span class="red-color fa fa-asterisk"></span></sup>วัน/เดือน/ปี (พ.ศ.) ที่ได้จดการประดิษฐ์
                    </label>
                    <div class="col-sm-8">
                      <input id="dateMask1" name="patent_date" type="text" 
                       class="form-control" style="width:200px" value="" required="" placeholder="dd/mm/yyyy" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="patent_author" class="col-sm-4 control-label">ผู้ประดิษฐ์</label>
                    <div class="col-sm-6">
                      <input id="author_patent" name="author_patent" 
                       type="text" value="" class="form-control" />
                      <em>(กรณีมากกว่า 1 ท่านให้คั้นด้วยเครื่องหมาย ",")</em> 
                    </div>
                  </div>
                  <input type="hidden" name="id_patent" id="id_patent" value="" />
                  <div class="form-group has-warning"> 
                    <div class="col-sm-4 col-sm-offset-4">
                      <p class="text-danger">(* จำเป็นต้องกรอกข้อมูล)</p>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                
                <div class="form-group" align="center">
                  <button id="btnYesPat" class="btn btn-success">
                    <i class="fa fa-save"></i> บันทึก 
                  </button>
                  <a href="#" id="btnCancelPat" data-dismiss="modal" 
                   aria-hidden="true" class="btn btn-default center">
                     <i class="fa fa-remove"></i> ยกเลิก 
                  </a> 
                  <div class="col-sm-3 pull-right">
                     <button id="btnDeletePat" class="btn btn-danger" 
                      title="ลบรายการนี้" alt="ลบรายการนี้">
                       <i class="fa fa-trash"></i>
                     </button>
                  </div>
                </div>
                
              </div>
              </form>
            </div>
          </div>
        </div>
        
        <!--#################### publication modal ####################--> 
        <div id="publicationModal"class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                 aria-hidden="true">&times;</button>
                <h4 id="modal_title" class="modal-title text-info">
                    <i class="fa fa-building fa-2x"></i> ข้อมูลผลงานตีพิมพ์
                </h4>
              </div>
              <form id="publicationForm" name="publicationForm" action="" 
                 method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="modal-body">
                      <div class="form-group col-lg-12">
                        <div class="msgBox hide" id="msgData_publication"></div>
                      </div>
                      <div class="form-group">
                        <label for="publication_name" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อบทความ
                        </label>
                        <div class="col-sm-6">
                          <input id="title_publication" name="title_publication" 
                           type="text" value="" class="form-control" required="" />
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="publlication_author" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>ผู้แต่ง
                        </label>
                        <div class="col-sm-6">
                          <input id="author_publication" name="author_publication" type="text" 
                           value="" class="form-control" required="" />
                          <em>(กรณีมากกว่า 1 ท่านให้คั้นด้วยเครื่องหมาย ",")</em>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="publication_conference" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>งานประชุม/วารสาร
                        </label>
                        <div class="col-sm-6">
                          <input id="publications" name="publications" type="text" value="" 
                           class="form-control" required="" />
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="year" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>ปี (พ.ศ.)
                        </label>
                        <div class="col-sm-8">
                          <input id="yearMask3" name="year_publication" type="text" 
                           class="form-control" style="width:90px" value="" 
                           required="" placeholder="yyyy"/>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="publication_volno" class="col-sm-4 control-label">
                            ฉบับที่/เล่มที่ (Vol./No.)
                        </label>
                        <div class="col-sm-4">
                          <input id="vol_no" name="vol_no" type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="publication_page" class="col-sm-4 control-label">
                            หน้าที่ตีพิมพ์
                        </label>
                        <div class="col-sm-4">
                          <input id="page" name="page" type="text" value="" class="form-control" />
                        </div>
                      </div>
                      <input type="hidden" name="id_publication" id="id_publication" value="" />
                      <div class="form-group has-warning"> 
                        <div class="col-sm-4 col-sm-offset-4">
                          <p class="text-danger">(* จำเป็นต้องกรอกข้อมูล)</p>
                        </div>
                      </div>
                  </div>
                  
                  <div class="modal-footer">
                    
                    <div class="form-group" align="center">
                      <button id="btnYesPub" class="btn btn-success">
                        <i class="fa fa-save"></i> บันทึก 
                      </button>
                      <a href="#" id="btnCancelPub" data-dismiss="modal" 
                       aria-hidden="true" class="btn btn-default center">
                         <i class="fa fa-remove"></i> ยกเลิก 
                      </a> 
                      <div class="col-sm-3 pull-right">
                         <button id="btnDeletePub" class="btn btn-danger" 
                          title="ลบรายการนี้" alt="ลบรายการนี้">
                           <i class="fa fa-trash"></i>
                         </button>
                      </div>
                    </div>
                    
                  </div>
              </form>
            </div>
          </div>
        </div>
        
        <!-- #################### project modal #################### -->
        <div id="projectModal"class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                 aria-hidden="true">&times;
                </button>
                <h4 id="modal_title" class="modal-title text-info">
                    <i class="fa fa-building fa-2x"></i> ข้อมูลผลงานโครงการ
                </h4>
              </div>
              <form id="projectForm" class="form-horizontal">
                  <div class="modal-body">
                      <div class="form-group col-lg-12">
                        <div class="msgBox hide" id="msgData_project"></div>
                      </div>
                      <div class="form-group">
                        <label for="year" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>ปี (พ.ศ.)
                        </label>
                        <div class="col-sm-8">
                          <input id="yearMask1" name="year_project" type="text" 
                            class="form-control" style="width:90px" value="" 
                            required="" placeholder="yyyy" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="project_name" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อโครงการ
                        </label>
                        <div class="col-sm-6">
                          <input id="title_project" name="title_project" 
                            type="text" value="" class="form-control" required="" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="project_role" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>บทบาทในโครงการ
                        </label>
                        <div class="col-sm-8">
                          <label class="radio-inline">
                            <input type="radio" name="role" id="role_PI" value="PI"  required=""/>
                            หัวหน้าโครงการ</label>
                          <label class="radio-inline">
                            <input type="radio" name="role" id="role_CI" value="CI" />
                            ผู้ร่วมโครงการ</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="project_author" class="col-sm-4 control-label">
                            ผู้ร่วมโครงการ
                        </label>
                        <div class="col-sm-6">
                          <input id="author_project" name="author_project" 
                            type="text" value="" class="form-control" />
                          <em>(กรณีมากกว่า 1 ท่านให้คั้นด้วยเครื่องหมาย ",")</em>
                        </div>
                      </div>
                      <input type="hidden" name="id_project" id="id_project" value="" />
                      <div class="form-group has-warning"> 
                        <div class="col-sm-4 col-sm-offset-4">
                          <p class="text-danger">(* จำเป็นต้องกรอกข้อมูล)</p>
                        </div>
                      </div>
                  </div>
                  
                  <div class="modal-footer">
                    <div class="form-group" align="center">
                      <button id="btnYesPro" class="btn btn-success">
                        <i class="fa fa-save"></i> บันทึก 
                      </button>
                      <a href="#" id="btnCancelPro" data-dismiss="modal" 
                       aria-hidden="true" class="btn btn-default center">
                         <i class="fa fa-remove"></i> ยกเลิก 
                      </a> 
                      <div class="col-sm-3 pull-right">
                         <button id="btnDeletePro" class="btn btn-danger" 
                          title="ลบรายการนี้" alt="ลบรายการนี้">
                           <i class="fa fa-trash"></i>
                         </button>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>