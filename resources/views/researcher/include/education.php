		<script>
			$(document).ready(function() {
				$('#educationModal').appendTo("body");
				
				$('#educationTableData').DataTable( {
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
			
			$(document).on("click", "#educationTableData tbody", function() {
				$('#educationModal').modal('show');
			});
			
			$('#btnAdd').click(function(e) {
				//$('#btnDelete').hide();
				//clearForm();
				$('#educationModal').modal('show');
			});
			
			$('input[name="country_type"]').bind('click', function () {
				$("#education_country_combo").hide();
				if ($(this).val() == 'oth') {
					$("#education_country_combo").show();
				} else {
					$("#education_country_combo").hide();
				}
	
			});
			
			$(':input[id="country_th"]').attr('checked', true);
			$("#education_country_combo").hide();

		</script>
        
        <script>
			$(document).ready(function() {
				app.formMask();
			});
    	</script> 
        
        <br />
        <br />
        <div class="panel panel-default">
          <div class="panel-heading">
            <b><i class="fa fa-mortar-board"></i> ข้อมูลประวัติการศึกษา </b>
          </div>
          <div class="panel-body"> 
            <!-- tableData -->
            <!--<div class="table-responsive">-->
                <table id="educationTableData" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                  class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr>
                      <th width="10%">ปีที่จบ</th>
                      <th width="15%">ระดับการศึกษา</th>
                      <th width="15%">วุฒิการศึกษา</th>
                      <th width="15%">สาขาวิชา</th>
                      <th width="15%">คณะ</th>
                      <th width="20%">สถานศึกษา</th>
                      <th width="10%">ประเทศ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="10%">2559</td>
                      <td width="15%">ปริญญาตรี</td>
                      <td width="15%">วิทยาศาสตรบัณฑิต</td>
                      <td width="15%">วิทยาการคอมพิวเตอร์</td>
                      <td width="15%">ICT</td>
                      <td width="20%">ธรรมศาสตร์</td>
                      <td width="10%">ไทย</td>
                    </tr>
                    
                    <tr>
                      <td width="10%">2560</td>
                      <td width="15%">ปริญญาโท</td>
                      <td width="15%">วิทยาศาสตรบัณฑิต</td>
                      <td width="15%">วิทยาการคอมพิวเตอร์</td>
                      <td width="15%">ICT</td>
                      <td width="20%">ธรรมศาสตร์</td>
                      <td width="10%">ไทย</td>
                    </tr>
                  </tbody>
                </table>
            <!--</div>-->
          </div>
        </div>
        <div class="col-lg-12"> 
          <button id="btnAdd" type="button" class="btn btn-sm btn-success" 
            data-toggle="modal">+ เพิ่มข้อมูล</button>
          <span class="msgNote"> ( ต้องระบุอย่างน้อย 1 รายการ ) </span> 
        </div>
        
        <div id="educationModal"class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                  aria-hidden="true">&times;</button>
                <h4 id="modal_title" class="modal-title text-info">
                  <i class="fa fa-mortar-board fa-2x"></i> ข้อมูลประวัติการศึกษา
                </h4>
              </div>
              <form id="educationForm" name="educationForm" 
                  action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="modal-body">
                      <div class="form-group col-lg-12">
                        <div class="msgBox hide" id="msgData"></div>
                      </div>
                      <div class="form-group">
                        <label for="college" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>สถานศึกษา
                        </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="college" 
                            name="college" required="" value="" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="faculty_u" class="col-sm-4 control-label">คณะ (หรือเทียบเท่า)</label>
                        <div class="col-sm-6">
                          <input id="faculty" class="form-control" name="faculty" 
                            class="faculty" type="text" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="qualification" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>วุฒิการศึกษา
                        </label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="qualification" 
                            name="qualification" required="" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="subject" class="col-sm-4 control-label">สาขาวิชา</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="subject" name="subject" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="degree" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>ระดับการศึกษา
                        </label>
                        <div class="col-sm-4">
                          <select name="degree" class="col-sm-6 form-control"  
                            id="degree" required="" class="form-control">
                          <option value=""></option>
                          //
                          <option value="ตำกว่าปริญญาตรี">ตำกว่าปริญญาตรี</option>
                          //
                          <option value="ปริญญาตรี">ปริญญาตรี</option>
                          //
                          <option value="ปริญญาโท">ปริญญาโท</option>
                          //
                          <option value="ปริญญาเอก">ปริญญาเอก</option>
                          //
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="country" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>ประเทศ
                        </label>
                        <div class="col-sm-6">
                          <div class="col-sm-4">
                            <label class="prettylabel">
                              <input type="radio" name="country_type" id="country_th" 
                                value="ไทย" required="" />
                              ไทย</label>
                            <label  class="prettylabel" >
                              <input  type="radio" name="country_type" id="country_oth" 
                                value="oth" />
                              อื่นๆ</label>
                          </div>
                          <div class="ui-widge col-sm-6" id="education_country_combo">
                            <select id="education_country_list" name="education_country_list" 
                              class="form-control">
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="year_edu" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>ปีที่จบ (พ.ศ.)
                        </label>
                        <div class="col-sm-2">
                          <input id="yearMask1" type="text" placeholder="yyyy" required="" 
                            class="form-control" value="" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="thesis" class="col-sm-4 control-label">
                          <i class="icon-warning-sign"></i>หัวข้อวิทยานิพนธ์
                        </label>
                        <div class="col-sm-6">
                          <input id="thesis" name="thesis" type="text" 
                            value="" class="form-control" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="keyword" class="col-sm-4 control-label">คำสำคัญ</label>
                        <div class="col-sm-6">
                          <input id="keyword" name="keyword" type="text"  
                            class="tags form-control" value="" />
                        </div>
                      </div>
                      <input type="hidden" name="id" id="id" value="" />
                      <div class="form-group has-warning"> 
                        <div class="col-sm-4 col-sm-offset-4">
                          <p class="text-danger">(* จำเป็นต้องกรอกข้อมูล)</p>
                        </div>
                      </div>
                    
                  </div>
    
                  <div class="modal-footer">
                    <div class="form-group" align="center">
                      <button id="btnYes" class="btn btn-success">
                        <i class="fa fa-save"></i> บันทึก 
                      </button>
                      <a href="#" data-dismiss="modal" id="btnCancel" 
                        aria-hidden="true" class="btn btn-default center">
                          <i class="fa fa-remove"></i> ยกเลิก 
                      </a> 
                      <div class="col-sm-3 pull-right">
                         <button id="btnDelete" class="btn btn-danger" 
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