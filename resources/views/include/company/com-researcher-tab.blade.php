  <script>
  	$(document).on("click", "#btnAdd", function() {
		$('#statusModal').modal('show');
	});
	
	$(document).on("click", ".selectedResearcherLink", function() {
		$('#selectedResearcherModal').modal('show');
	});	
	
	$(document).on("click", "#confirmResearcherBtn", function() {
		$('#confirmResearcherModal').modal('show');
	});
	
	
	function delResearcher(obj) {
		var id = $(obj).data('id');
		var researcher = $(obj).data('name');
		var msg_confirm = 'ต้องการลบ <span class="markDel">' 
		                  + researcher + '</span> ใช่หรือไม่';
		 
		$('#confirmDel .modal-body').html(msg_confirm);
		$('#confirmDel').data('id', id);
		$('#confirmDel').modal('show');
	}
  </script>
  
  <div class="row">
    <ul id="nav-menu" class="breadcrumb">
      <li><a href="#" onClick="showProjectList()">รายการโครงการ</a></li>
      <li class="active">นักวิจัย</li>
    </ul>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-company">บริษัท : บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด</div>
    </div>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-job">โครงการ : โครงการ 1</div>
    </div>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-status">
      	<a style="color:#FFFFFF" href="" id="btnAdd" data-toggle="modal">
          สถานะ : P1
        </a>
      </div>
    </div>
    <div class="row-fluid menu-proj"> 
      <!--<ul class="nav nav-tabs">-->
      <ul class="nav nav-pills nav-justified nav-mproj">
        <li id="proj-profile">
        	<a href="#" onClick="openProj_add_tab('8')">P0: รายละเอียดโครงการ</a>
        </li>
        <li id="proj-researcher" class="active">
        	<a href="#">P1: นักวิจัย</a>
        </li>
      </ul>
      
      
      <div class="tab-content" style="margin-top:10px;">
        <div class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <button class="btn btn-default btn-upload" onClick="openProj_researcher_add_tab(8)">
              	<i class="fa fa-plus"></i> เพิ่มตำแหน่งที่ต้องการ
              </button>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-12">
              <div class="table-responsive">
                <table id="tableData" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                 class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr>
                      <th width="30%">ตำแหน่ง</th>
                      <th width="10%">จำนวนที่ต้องการ</th>
                      <th width="10%">จำนวนนักวิจัยที่เลือก</th>
                      <th width="2%" style="text-align:center">ลบ</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td width="30%">โปรแกรมเมอร์</td>
                      <td width="10%">2</td>
                      <td width="10%"><a href="#" class="selectedResearcherLink">2</a></td>
                      <th width="2%" class="text-center">
                      	<a class="btn btn-danger btn-deldata" 
                            onclick="delResearcher(this)" data-name="โปรแกรมเมอร์" 
                            data-id="" title="ลบรายการข้อมูล">
                                <i class="fa fa-remove"></i>
                        </a>                      
                      </th>
                    </tr>
                    <tr>
                      <td width="30%">นักวิเคราะห์</td>
                      <td width="10%">4</td>
                      <td width="10%"><a href="#" class="selectedResearcherLink">1</a></td>
                      <th width="2%" class="text-center">
                      	<a class="btn btn-danger btn-deldata" 
                            onclick="delResearcher(this)" data-name="นักวิเคราะห์" 
                            data-id="" title="ลบรายการข้อมูล">
                                <i class="fa fa-remove"></i>
                        </a>                      
                      </th>
                    </tr>
                    <tr>
                      <td width="30%">นักเคมี</td>
                      <td width="10%">5</td>
                      <td width="10%"><a href="#" class="selectedResearcherLink">3</a></td>
                      <th width="2%" class="text-center">
                      	<a class="btn btn-danger btn-deldata" 
                            onclick="delResearcher(this)" data-name="นักเคมี" 
                            data-id="" title="ลบรายการข้อมูล">
                                <i class="fa fa-remove"></i>
                        </a>                      
                      </th>
                    </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
          	   </div>
            </div>
          </div>
        </div>
 	   </div>
    </div>
  </div>
  
  <div class="row col-sm-12">
  	<div style="float:right">
  	<button class="btn btn-default" id="confirmResearcherBtn"> ยืนยันรายชื่อ </button>
    </div>
  </div>
  
  <!--confirmDelete-->
  <div id="confirmDel" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"> 
          <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
          <h3>ลบรายการข้อมูล</h3>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer"> 
          <a href="#" id="btn_yes" class="btn btn-danger">ยืนยัน</a> 
          <a href="#" data-dismiss="modal" aria-hidden="true" 
             class="btn btn-default">ยกเลิก</a> 
        </div>
      </div>
    </div>
  </div>

  @include('include.clearinghouse.ch-projectstatus-modal')
  @include('include.clearinghouse.ch-selectedresearcher-modal')
  @include('include.clearinghouse.ch-confirmresearcher-modal')

