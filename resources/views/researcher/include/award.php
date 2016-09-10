	<script>
		$(document).ready(function() {
			app.formMask();
		});
   	</script> 
      
	<script>
	  $('#btnAddAward').click(function(e) {
		//$('#btnDelete').hide();
		//clearForm();
		$('#awardModal').modal('show');
	  });
	
	  $(document).ready(function() {
		  $('#awardModal').appendTo("body");
		  
		  $('#awardDataTable').DataTable( {
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
	  
	  $(document).on("click", "#awardDataTable tbody", function() {
		$('#awardModal').modal('show');
	  });
	</script>


    <div class="panel panel-default">
      <div class="panel-body"> 
        <!-- tableData -->
        <table id="awardDataTable" width="inherit" border="0" 
         cellspacing="0" cellpadding="0" 
         class="table table-striped table-bordered table-hover profileBox">
          <thead>
            <tr>
              <th width="20%">วันที่</th>
              <th width="30%">รางวัล</th>
              <th width="30%">ผลงาน</th>
              <th width="20%">ผู้ให้รางวัล</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
	<div class="col-lg-12"> 
        <button id="btnAddAward" type="button" class="btn btn-sm btn-success" 
          data-toggle="modal">+ เพิ่มข้อมูล
        </button>
        <span class="msgNote"> ( ต้องระบุอย่างน้อย 1 รายการ ) </span> 
    </div>

    <!-- Modal --> 
    <div id="awardModal"class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" 
             aria-hidden="true">&times;
            </button>
            <h4 id="modal_title" class="modal-title text-info">
              <i class="fa fa-trophy fa-2x"></i> ข้อมูลรางวัล
            </h4>
          </div>
          <form id="awardForm" name="awardForm" action="" 
              method="post" enctype="multipart/form-data" 
              class="form-horizontal">
              
              <div class="modal-body">
                  <div class="form-group col-lg-12">
                    <div class="msgBox hide" id="msgData"></div>
                  </div>
                  <div class="form-group">
                    <label for="date_receive" class="col-sm-4 control-label">
                      <sup><span class="red-color fa fa-asterisk"></span></sup>วัน/เดือน/ปี (พ.ศ.) ที่ได้รับรางวัล
                    </label>
                    <div class="col-sm-2">
                      <input id="dateMask1" name="date_receive" 
                       type="text" value="" required="" 
                       class="form-control" placeholder="dd/mm/yyyy" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="award_name" class="col-sm-4 control-label">
                      <sup><span class="red-color fa fa-asterisk"></span></sup>รางวัล
                    </label>
                    <div class="col-sm-6">
                      <input id="award_name" name="award_name" type="text" 
                       value="" class="form-control" required="" />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="research_name" class="col-sm-4 control-label">
                     <sup><span class="red-color fa fa-asterisk"></span></sup>ผลงาน
                    </label>
                    <div class="col-sm-6">
                      <input id="research_name" name="research_name" 
                       type="text"  class="tags form-control" value="" 
                       required="" />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="giver" class="col-sm-4 control-label">ผู้ให้รางวัล</label>
                    <div class="col-sm-4">
                      <input id="giver" name="giver" type="text"  
                       class=" form-control" value="" />
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
                  <button id="btnDelete" class="btn btn_del btn-danger" 
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
