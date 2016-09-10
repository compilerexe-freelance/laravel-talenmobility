  <script>
	$(document).ready(function(){
		appendModal("{{ url('clearinghouse/upload-contract') }}", "uploadContractModal");
	});
  </script>

  <script>
    /* display project status modal */
  	$(document).on("click", "#statusBut", function() {
		$('#statusModal').modal('show');
	});
	
	$(document).on("click", "#uploadContractBtn", function() {
		$('#uploadContractModal').modal('show');
	});	

	$('.nav-tabs-dropdown').each(function(i, elm) {
		$(elm).text($(elm).next('ul').find('li.active a').text());
	});

	$('.nav-tabs-dropdown').on('click', function(e) {
		e.preventDefault();
		$(e.target).toggleClass('open').next('ul').slideToggle();
	});

	$('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {
		e.preventDefault();
		$(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());
	});
  </script>

<div class="row">
    
    <div id="MyWizard" class="wizard" style="margin-bottom:5px;">
        <ul class="steps">
            <li data-target="#step1" >
                <a href="#" onClick="showCompanyList()">รายชื่อบริษัท</a><span class="chevron"></span>
            </li>
            <li data-target="#step2">
                <a href="#" onClick="openProj(0)">รายชื่อโครงการ</a><span class="chevron"></span>
            </li>
            <li data-target="#step3" class="active">
                สัญญา <span class="chevron"></span>
            </li>
        </ul>
        
        <div class="actions" style="padding:0px; display:inline-block">
            <div class="panel panel-solid-primary panel-style1">
                <div class="panel-body panel-title">
                    บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด
                </div>
            </div>
            <div class="panel panel-solid-primary panel-style1">
                <div class="panel-body panel-title">
                    โครงการ: โครงการที่ 1
                </div>
            </div>
            <div class="panel panel-solid-primary panel-style1">
                <div class="panel-body panel-title yellowlink">
                    <a href="#" id="statusBut" >สถานะ: P3</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row-fluid menu-proj"> 
      <!--<ul class="nav nav-tabs">-->
      <div class="tab-wrapper tab-primary">
          <a href="#" class="nav-tabs-dropdown btn btn-block btn-default">Tabs</a>
          <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
            <li id="proj-profile">
                <a href="#" data-toggle="tab" onClick="openProj_basicinfo_tab(8)">P0: รายละเอียดโครงการ</a>
            </li>
            <li id="proj-researcher" >
                <a href="#" data-toggle="tab" onClick="openProj_researcher_tab(8)">P1: นักวิจัย</a>
            </li>
            <li id="proj-proposal" >
                <a href="#" data-toggle="tab" onClick="openProj_proposal_tab(8)">P2: ข้อสเนอ</a>
            </li>
            <li id="proj-contract" class="active">
                <a href="#" data-toggle="tab" onClick="openProj_contract_tab(8)">P3: ทำสัญญา</a>
            </li>
            <li id="proj-evaluate">
                <a href="#" data-toggle="tab" onClick="openProj_evaluate_tab(8)">P4: การประเมิน</a>
            </li>
            <li id="proj-report">
                <a href="#" data-toggle="tab" onClick="openProj_report_tab(8)">P5: รายงานฉบับสมบูรณ์</a>
            </li>
          </ul>
      
      <div class="tab-content" style="margin-top:0px;">
      	<div class="panel panel-default" style="margin-left:0px; padding:5px">
          <div class="form-group">
              <button class="btn btn-default btn-upload" id="uploadContractBtn">
              	<i class="fa fa-plus"></i> เพิ่มเอกสาร
              </button>
          </div>
          
          <div class="form-group">
              <div class="table-responsive">
                <table id="tableData" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                 class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr>
                      <th width="5%">ลำดับ</th>
                      <th width="50%">รายการ</th>
                      <th width="20%">วันที่</th>
                      <th width="15%" style="text-align:center">ไฟล์สัญญา</th>
                      <th width="10%" style="text-align:center">ลบ</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td width="5%">1</td>
                      <td width="50%">เอกสารที่ 1</td>
                      <td width="20%">11/02/2559 14:30:22</td>
                      <td width="15%" class="text-center">
                      	<i class="fa fa-file-pdf-o fa-1x"></i>
                      </td>
                      <td width="10%" class="text-center">
                      	<a class="btn btn-danger btn-deldata btn-xs no-margin" 
                            onclick="delResearcher(this)" data-name="เอกสาร 3" 
                            data-id="" title="ลบรายการข้อมูล">
                                <i class="fa fa-remove"></i>
                        </a>                      
                      </td>
                    </tr>
                    <tr>
                      <td width="5%">2</td>
                      <td width="50%">เอกสารที่ 2</td>
                      <td width="20%">11/02/2559 14:30:22</td>
                      <td width="15%" class="text-center">
                      	<i class="fa fa-file-pdf-o fa-1x"></i>
                      </td>
                      <td width="10%" class="text-center">
                      	<a class="btn btn-danger btn-deldata  btn-xs no-margin" 
                            onclick="delResearcher(this)" data-name="เอกสาร 3" 
                            data-id="" title="ลบรายการข้อมูล">
                                <i class="fa fa-remove"></i>
                        </a>                      
                      </td>
                    </tr>
                    <tr>
                      <td width="5%">3</td>
                      <td width="50%">เอกสารที่ 3</td>
                      <td width="20%">11/02/2559 14:30:22</td>
                      <td width="15%" class="text-center">
                      	<i class="fa fa-file-pdf-o fa-1x"></i>
                      </td>
                      <td width="10%" class="text-center">
                      	<a class="btn btn-danger btn-deldata  btn-xs no-margin" 
                            onclick="delResearcher(this)" data-name="เอกสาร 3" 
                            data-id="" title="ลบรายการข้อมูล">
                                <i class="fa fa-remove"></i>
                        </a>                      
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
          	   </div>
          </div>
          
          <!--<div class="form-group col-sm-12" align="center">
          	<button class="btn btn-default"> ยื่นสัญญา</button>
          	<a href="#" data-dismiss="modal" 
                   aria-hidden="true" class="btn btn-default center"> ยกเลิก </a>
        	</div>-->
            
            <div class="form-group" style="float:right">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-send"></i> ยื่นสัญญา
                </button>
            </div>
            </div>
 	   </div>
       </div>
    </div>
  </div>

  <!--confirmDelete-->
  <div id="deleteContract" class="modal fade" role="dialog">
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
