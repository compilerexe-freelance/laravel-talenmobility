  <script>
  	$(document).ready(function() {
				appendModal("{{ url('clearinghouse/confirm-researcher-and-student-modal') }}", "confirmResearcherModal");

		appendModal("{{ url('clearinghouse/researcher-tab-deleteresearcher-modal') }}", "delResearcher");
		appendModal("{{ url('clearinghouse/selected-reasearcher-and-student-modal') }}", "selectedResearcherModal");
		
		/*$('#statusModal').appendTo("body");*/
		
		//$('#selectedResearcherModal').detach("body");
		//$('#selectedResearcherModal').appendTo("body");
		
		/*$('#confirmResearcherModal').appendTo("body");
		
		$('#delResearcher').appendTo("body");	*/			
	});
	
  	/*$(document).on("click", "#btnAdd", function() {
		$('#statusModal').modal('show');
	});*/
	
	$(document).on("click", ".selectedResearcherLink", function() {
		/*$('#selectedResearcherModal').remove('body');
		$('#selectedResearcherModal').appendTo("body");*/
		
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
		 
		$('#delResearcher .modal-body').html(msg_confirm);
		$('#delResearcher').data('id', id);
		$('#delResearcher').modal('show');
	}
	
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
  
  <div class="row" style="padding:5px">
    <div id="MyWizard" class="wizard" style="margin-bottom:5px;">
        <ul class="steps">
            <li data-target="#step1" >
                <a href="#" onClick="showCompanyList()">รายชื่อบริษัท</a><span class="chevron"></span>
            </li>
            <li data-target="#step2">
                <a href="#" onClick="openProj(0)">รายชื่อโครงการ</a><span class="chevron"></span>
            </li>
            <li data-target="#step3" class="active">
                นักวิจัย <span class="chevron"></span>
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
            <li id="proj-researcher" class="active">
                <a href="#" data-toggle="tab" onClick="openProj_researcher_tab(8)">P1: นักวิจัย</a>
            </li>
            <li id="proj-proposal">
                <a href="#" data-toggle="tab" onClick="openProj_proposal_tab(8)">P2: ข้อสเนอ</a>
            </li>
            <li id="proj-contract">
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
                          <td width="10%" class="greenlink"><a href="#" class="selectedResearcherLink">2</a></td>
                          <th width="2%" class="text-center">
                            <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                onclick="delResearcher(this)" data-name="โปรแกรมเมอร์" 
                                data-id="" title="ลบรายการข้อมูล">
                                    <i class="fa fa-remove"></i>
                            </a>                      
                          </th>
                        </tr>
                        <tr>
                          <td width="30%">นักวิเคราะห์</td>
                          <td width="10%">4</td>
                          <td width="10%"><a href="#" class="selectedResearcherLink greenlink">1</a></td>
                          <th width="2%" class="text-center">
                            <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                onclick="delResearcher(this)" data-name="นักวิเคราะห์" 
                                data-id="" title="ลบรายการข้อมูล">
                                    <i class="fa fa-remove"></i>
                            </a>                      
                          </th>
                        </tr>
                        <tr>
                          <td width="30%">นักเคมี</td>
                          <td width="10%">5</td>
                          <td width="10%"><a href="#" class="selectedResearcherLink greenlink">3</a></td>
                          <th width="2%" class="text-center">
                            <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
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
           
           <div class="col-sm-12">
            <div style="float:right; margin-top:10px">
            <button type="submit" id="confirmResearcherBtn" class="btn btn-success">
                <i class="fa fa-send"></i> ยืนยันรายชื่อ
            </button>
            </div>
          </div>
           
        </div>
      </div>
      
      
  </div>
  
  
  



