<script>
	$(document).ready(function() {
		appendModal("{{ url('clearinghouse/evaluation-modal') }}", "evaluationModal");
	});
</script>

<script>
  	$(document).on("click", "#btnAdd", function() {
		$('#statusModal').modal('show');
	});
	
	$(document).on("click", ".evaluateLink", function() {
		$('#evaluationModal').modal('show');
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
	
	/*function showEvaluationModal(){
		$('#evaluationModal').modal('show');
	}*/
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
                การประเมิน <span class="chevron"></span>
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
            <li id="proj-proposal">
                <a href="#" data-toggle="tab" onClick="openProj_proposal_tab(8)">P2: ข้อสเนอ</a>
            </li>
            <li id="proj-contract">
                <a href="#" data-toggle="tab" onClick="openProj_contract_tab(8)">P3: ทำสัญญา</a>
            </li>
            <li id="proj-evaluate" class="active">
                <a href="#" data-toggle="tab" onClick="openProj_evaluate_tab(8)">P4: การประเมิน</a>
            </li>
            <li id="proj-report">
                <a href="#" data-toggle="tab" onClick="openProj_report_tab(8)">P5: รายงานฉบับสมบูรณ์</a>
            </li>
          </ul>
    
    <div class="tab-content" style="margin-top:0px;">
      
        
          <div class="form-group">
            <label class="control-label">วันที่เริ่มต้น-สิ้นสุด</label>
            <div class="input-group">
              <div class="input-daterange input-group" data-date-format="yyyy-mm-dd">
                <input type="text" style="margin-right: 0px" class="input-sm form-control" 
                 name="date_start" data-val="01 ก.พ. 2558" value="2015/02/01" />
                <span class="input-group-addon">-</span>
                <input type="text"  class="input-sm form-control" name="date_end" 
                 data-val="31 ต.ค. 2558" value="2015/10/31" />
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label">ระยะเวลารวม</label>
            <label class="control-label">30 วัน</label>
          </div>
        
        
          <div class="form-group">
            <div class="table-responsive">
              <table id="tableData" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                 class="table table-striped table-bordered table-hover profileBox">
                <thead>
                  <tr>
                    <th width="5%">ครั้งที่</th>
                    <th width="15%">วันที่</th>
                    <th width="20%">การประเมิน</th>
                    <th width="10%">นักวิจัย</th>
                    <th width="10%">บริษัท</th>
                    <th width="10%">CH</th>
                    <th width="10%">Admin</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="5%">1</td>
                    <td width="15%">10/12/2559 <i class="fa fa-calendar"></i></td>
                    <td width="20%"><a href="#" class="evaluateLink">การประเมินทั่วไป</a></td>
                    <td width="10%">2/2</td>
                    <td width="10%">1/1</td>
                    <td width="10%">0/1</td>
                    <td width="10%">1/1</td>
                  </tr>
                  <tr>
                    <td width="5%">2</td>
                    <td width="15%">10/12/2559 <i class="fa fa-calendar"></i></td>
                    <td width="20%"><a href="#" class="evaluateLink">การประเมินทั่วไป</a></td>
                    <td width="10%">2/2</td>
                    <td width="10%">1/1</td>
                    <td width="10%">0/1</td>
                    <td width="10%">1/1</td>
                  </tr>
                  <tr>
                    <td width="5%">3</td>
                    <td width="15%">10/12/2559 <i class="fa fa-calendar"></i></td>
                    <td width="20%"><a href="#" class="evaluateLink">การประเมินทั่วไป</a></td>
                    <td width="10%">2/2</td>
                    <td width="10%">1/1</td>
                    <td width="10%">0/1</td>
                    <td width="10%">1/1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        
        <div class="form-group">
          	<button class="btn btn-default"> 
            	<i class="fa fa-plus"></i> เพิ่มรอบการประเมิน
            </button>
        </div>
        
        <div class="form-group">
            <div style="float:right">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-send"></i> ยืนยันการประเมิน
            </button>
            </div>
        </div>
        

      
    </div>
  </div>
</div>
</div>
