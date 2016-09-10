<script>
  	$(document).on("click", "#btnAdd", function() {
		$('#statusModal').modal('show');
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
                ข้อเสนอ <span class="chevron"></span>
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
            <li id="proj-proposal" class="active">
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
      <div class="panel panel-default" style="margin-left:0px; padding:5px">
        <div class="panel-body">
          <form class="form-horizontal" role="form">
          	<div class="form-group" >
              <label class="control-label col-sm-2">ชื่อโครงการ:</label>
              <div class="col-sm-6" style="padding-top:7px">
                <label class="">โครงการ 1</label>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">หมวดหมู่โครงการ:</label>
              <div class="col-sm-6">
                <input class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">ผลงานที่เกิดขึ้น:</label>
              <div class="col-sm-6">
                <input class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">สถานที่ปฏิบัติงาน:</label>
              <div class="col-sm-6">
                <input class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">ระยะเวลาของโครงการ (เดือน):</label>
              <div class="col-sm-2">
                <input class="form-control">
              </div>
              <label class="control-label col-sm-2">ประเมินโครงการทุก (เดือน):</label>
              <div class="col-sm-2">
                <input class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">เนื้อหาโดยสรุป:</label>
              <div class="col-sm-6">
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </div>
          
            <hr><!------------------------------------------------------>
          	<div class="form-group" >
              <label class="control-label col-sm-2">ชื่อสถานประกอบการ:</label>
              <div class="col-sm-6" style="padding-top:7px">
                <label class="">บริษัทซีเกท ประเทศไทยจำกัด</label>
              </div>
            </div>
            
            <hr><!------------------------------------------------------>
          	<div class="form-group" >
              <label class="control-label col-sm-2">ต้นสังกัดบุคลากรที่เข้าร่วมโครงการ:</label>
              <div class="col-sm-6">
                <input class="form-control">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2">คณะ/ฝ่าย:</label>
              <div class="col-sm-6">
                <input class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">ภาควิชา/แผนก:</label>
              <div class="col-sm-6">
                <input class="form-control">
              </div>
            </div>
            
            <hr><!------------------------------------------------------>
            <div class="form-group" >
              <div class="col-sm-10" style="padding-top:7px">
                <label class="">
                รายชื่อบุคลากรที่เข้าร่วมโครงการ (จำกัดค่าชดเชยบุคลากรไม่เกิน 60,000 บาท/เดือน/คน)
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2">บุคคลากรลำดับที่ 1:</label>
              <div class="col-sm-4" style="padding-top:7px">
                <label class="">สมศักดิ์ สุดใจ</label>
              </div>
            </div> 
            
            <div class="form-group">
              <label class="control-label col-sm-2"></label>
              <div class="col-sm-2">
                <input class="form-control" placeholder="ระบุอายุ (ปี)">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2">วุฒิการศึกษา:</label>
              <div class="col-sm-6">
                <input class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">สาขาที่เชี่ยวชาญ:</label>
              <div class="col-sm-6">
                <input class="form-control">
              </div>
            </div>
          
          
             <div class="form-group">
              <label class="control-label col-sm-2">ต้นสังกัด:</label>
              <div class="col-sm-6">
                <label class="checkbox-inline"><input type="checkbox" value="">ตรงตามข้อ 3</label>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2"></label>
              <div class="col-sm-6">
                <input class="form-control" placeholder="อื่นๆ โปรดระบุสังกัด">
              </div>
            </div>
          
            <div class="form-group">
              <label class="control-label col-sm-2">บทบาทหน้าที่ในโครงการ:</label>
              <div class="col-sm-8">
                <input class="form-control">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2">สัดส่วนการปฏิบัติงาน (วันต่อสัปดาห์):</label>
              <div class="col-sm-2">
                <input class="form-control">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2 ">คิดเป็น FTE:</label>
              <div class="col-sm-2">
                <select class="form-control">
                    <option value="0" selected >20</option>
                    <option value="1"  >40</option>
                    <option value="2"  >60</option>
                    <option value="2"  >80</option>
                  </select>
              </div>
            </div>
            
            <!--<div class="form-group col-sm-12">
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label col-sm-4">เงินเดือน (บาท):</label>
                  		<div class="col-sm-12">
                    		<input class="form-control">
                  		</div>
                	</div>
                </div>
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label col-sm-4">คิดเป็น FTE:</label>
                  		<div class="col-sm-12">
                    		<select class="form-control">
                            <option value="0" selected >20</option>
                            <option value="1"  >40</option>
                            <option value="2"  >60</option>
                            <option value="2"  >80</option>
                          </select>
                  		</div>
                	</div>
                </div>
            </div>-->
            
            <<div class="form-group">
              <label class="control-label col-sm-2">เงินเดือน (บาท):</label>
              <div class="col-sm-2">
                <input class="form-control">
              </div>
            </div>
            
            <div class="table-responsive">
              <table id="tableData" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                 class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr>
                      <th width="40%">บุคลากร</th>
                      <th width="15%">FTN(%)</th>
                      <th width="15%">เงินเดือน (บาท)</th>
                      <th width="15%">ระยะเวลา (เดือน)</th>
                      <th width="15%">ค่าชดเชย (บาท)</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td width="40%">สมศักดิ์ สุดใจ</td>
                      <td width="15%">80</td>
                      <td width="15%">30000</td>
                      <td width="15%">5</td> 
                      <td width="15%">0</td>      
                    </tr>
                    <tr class="tfoot">
                        <td colspan="4">รวมค่าชดเชยบุคลากรทั้งโครงการเป็นเงิน (Total A)</td>
                        <td>945,000</td>
                    </tr>
                   </tbody>
               </table>
            </div>
            
            <hr><!------------------------------------------------------>
            <div class="form-group" >
              <div class="col-sm-10" style="padding-top:7px">
                <label class="">
                รายชื่อนักศึกษาที่ติดตามที่เข้าร่วมโครงการทั้งหมดจำนวน 1 คน
                </label>
              </div>
            </div>
            
            <div class="form-group col-sm-12">
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label">B1) ชื่อ-นามสกุล</label>
                  		<div class="col-sm-12">
                    		<input class="form-control">
                  		</div>
                	</div>
                </div>
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label">สถาบัน</label>
                  		<div class="col-sm-12">
                    		<input class="form-control">
                  		</div>
                	</div>
                </div>
            </div>
            
            <div class="form-group col-sm-12">
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label">กำลังศึกษาอยู่ในระดับ</label>
                  		<div class="col-sm-12">
                    		<input class="form-control">
                  		</div>
                	</div>
                </div>
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label">ชั้นปี</label>
                  		<div class="col-sm-12">
                    		<input class="form-control">
                  		</div>
                	</div>
                </div>
            </div>
            
            <div class="form-group col-sm-12">
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label">คณะ</label>
                  		<div class="col-sm-12">
                    		<input class="form-control">
                  		</div>
                	</div>
                </div>
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label">ภาควิชา</label>
                  		<div class="col-sm-12">
                    		<input class="form-control">
                  		</div>
                	</div>
                </div>
            </div>
            
            <div class="form-group col-sm-12">
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label">สัดส่วนการปฏิบัติงาน (วันต่อสัปดาห์)</label>
                  		<div class="col-sm-12">
                    		<input class="form-control">
                  		</div>
                	</div>
                </div>
            	<div class="col-sm-6">
                	<div class="form-group">
                  		<label class="control-label">คิดเป็นค่า FTE</label>
                  		<div class="col-sm-12">
                    		<select class="form-control">
                             <option value="0" selected >20</option>
                             <option value="1"  >40</option>
                             <option value="2"  >60</option>
                             <option value="2"  >80</option>
                          	</select>
                  		</div>
                	</div>
                </div>
            </div>
            
            <div class="form-group">
            	<div class="col-sm-12">
            <div class="table-responsive">
              <table id="tableData" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                 class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr>
                      <th width="30%">ผู้ติดตาม</th>
                      <th width="10%">FTE(%)</th>
                      <th width="15%">ศึกษาระดับ</th>
                      <th width="15%">อัตราสนับสนุน</th>
                      <th width="15%">ระยะเวลา(เดือน)</th>
                      <th width="15%">ค่าสนับสนุน(บาท)</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td width="30%">อากาศ แจ่มใส</td>
                      <td width="10%">100</td>
                      <td width="15%">ปริญญาตรี</td>
                      <td width="15%">8,000</td>
                      <td width="15%">9</td>
                      <td width="15%">72,000</td>      
                    </tr>
                    <tr class="tfoot">
                        <td colspan="5">รวมค่าชดเชยบุคลากรทั้งโครงการเป็นเงิน (Total B)</td>
                        <td>72,000</td>
                    </tr>
                   </tbody>
               </table>
            </div>
            </div>
            </div>
            
            <div class="form-group" >
              <div class="col-sm-10" style="padding-top:7px">
                <label class="">
            แนวทางจัดการผลงานวิจัยและทรัพย์สินทางปัญญาโดยสังเขป
                </label>
              </div>
            </div>
            
            <div class="form-group">
            	<div class="col-sm-12">
                   <div style="margin-left: 10px">
                      <label class="radio">
                        <input type="radio" name="inlineRadioOptions" 
                        id="inlineRadio1" value="option1">
                        ผู้ประกอบการและสถาบันต้นสังกัดเป็นเจ้าของร่วมกัน </label>
                      <label class="radio">
                        <input type="radio" name="inlineRadioOptions" 
                        id="inlineRadio2" value="option2">
                        ผู้ประกอบการเป็นเจ้าของ </label>
                      <label class="radio">
                        <input type="radio" name="inlineRadioOptions" 
                        id="inlineRadio3" value="option3">
                        ระบุเมื่อเสร็จสิ้นโครงการ </label>
                      <label class="radio">
                        <input type="radio" name="inlineRadioOptions" 
                        id="inlineRadio4" value="option4">
                        อื่นๆโปรดระบุ </label>
                      <input type="text" class="form-control" style="width: 
                       250px;margin-top: -25px;margin-left: 100px; min-width:60px">
                	</div>
                </div>
             </div>
             
             <div class="col-sm-12">
              <button class="btn btn-default btn-upload">
              	<i class="fa fa-upload"></i> แนบไฟล์ที่เกี่ยวข้อง
              </button>
            </div>
            
            <hr><!------------------------------------------------------>
            <!--<div class="form-group col-sm-12" style="margin-bottom:40px" align="center">
          		<button class="btn btn-default"> ยืนยัน </button>
                <button class="btn btn-default"> ยกเลิก </button>
          	</div>-->
            
            <div class="row col-sm-12">
                <div style="float:right">
                <button class="btn btn-default"> 
                	<i class="fa fa-save"></i> บันทึกร่าง
                 </button>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-send"></i> ยื่นข้อเสนอ
                </button>
                </div>
             </div>
            
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>

