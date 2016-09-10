  <script>
   $(document).ready(function() {
	   appendModal("{{ url('clearinghouse/researcher-addition-deletemodal') }}", "deleteResearcherModal");
	   appendModal("{{ url('clearinghouse/researcher-basic-addition-modal') }}", "basicResearchModal");
	   appendModal("{{ url('clearinghouse/researcher-advance-addition-modal') }}", "addAdvanceResearcher");
	   
	   appendModal("{{ url('clearinghouse/student-addition-modal') }}", "addSutudentModal");
	    /*
		$('#searchModal').appendTo("body");*/
		
		/*$('#basicResearchModal').appendTo("body");*/
		/*$('#sutudentSearchModal').appendTo("body");
		$('#deleteResearcherModal').appendTo("body");	*/			
	});
	
  	$(document).on("click", "#addResearcher", function() {
		displayModal('addAdvanceResearcher');
	});
	
	$(document).on("click", "#addBasicResesearcher", function() {
		displayModalWithDataTable('basicResearchModal','basicSearchTbl');
	});	
	
	$(document).on("click", "#addStudent", function() {
		//$('#sutudentSearchModal').modal('show');
		displayModal('addSutudentModal');
	});
	
	function delResearcher(obj) {
		var id = $(obj).data('id');
		var researcher = $(obj).data('name');
		var msg_confirm = 'ต้องการลบ <span class="markDel">' 
		                  + researcher + '</span> ใช่หรือไม่';
		 
		$('#deleteResearcherModal .modal-body').html(msg_confirm);
		$('#deleteResearcherModal').data('id', id);
		$('#deleteResearcherModal').modal('show');
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
            <li data-target="#step3">
                <a href="#" onClick="openProj_researcher_tab(0)">นักวิจัย</a> <span class="chevron"></span>
            </li>
            <li data-target="#step3" class="active">
                เพิ่มนักวิจัย <span class="chevron"></span>
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
              
              <div class="panel panel-default" >
                <div class="panel-heading">
                  <b><i class="fa fa-plus"></i> เพิ่มตำแหน่งที่ต้องการ</b>
                </div>
                
                <div class="panel-body">
                    <div class="form-group row">
                    	<div class="col-sm-2">
                        	<label class="control-label">ตำแหน่ง </label>
                        </div>
                        <div class="col-sm-8">
                        	<input type = "text" class="form-control" 
                         	id="position" name="position"/>
                         </div>
                    </div>
    
                    <div class="form-group row">
                    	<div class="col-sm-2">
                        	<label class="control-label">หน้าที่</label>
                        </div>
                      <div class="col-sm-8">
                        <input type = "text" class="form-control" 
                         id="role" name="role"/>
                      </div>
                    </div>
                
                    <div class="form-group row">
                      <div class="col-sm-2">
                        <label class="control-label">
                          <span class="req"></span>จำนวนที่ต้องการ 
                        </label>
                      </div>
                      <div class="col-sm-8">
                        <select class="form-control" style="width:120px" >
                          <option value="0" selected >0</option>
                          <option value="1"  >1</option>
                          <option value="2"  >2</option>
                          <option value="3"  >3</option>
                          <option value="4"  >4</option>
                          <option value=">= 5"  >มากกว่า 5</option>
                        </select>
                      </div>
                    </div>
                
                <div class="form-group">
                  <div class="col-sm-6">
                      <table id="tableData" width="inherit" border="0" cellspacing="0" 
                     cellpadding="0" class="table table-bordered table-hover profileBox">
                          <thead>
                            <tr class="light-grey">
                              <th width="30%"> รายชื่อนักวิจัย
                              <div class="pull-right">
                               <button id="addBasicResesearcher" class="btn btn-xs btn-primary"
                                type="button">
                                 <i class="fa fa-plus-circle"></i> เพิ่มนักวิจัย
                               </button>
                               <button id="addResearcher" class="btn btn-xs btn-primary"
                                type="button">
                                 <i class="fa fa-plus-circle"></i> เพิ่มนักวิจัย (ขั้นสูง)
                               </button>
                              </div>
                              </th>
                            </tr>
                            
                          </thead>
                          <tbody>
                            <tr>
                              <td width="30%">1. นายอดิสร ศักดิ์ชัย
                                <div class="pull-right">
                                  <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                     onclick="delResearcher(this)" data-name="นายอดิสร ศักดิ์ชัย" 
                                     data-id="" title="ลบรายการข้อมูล">
                                        <i class="fa fa-remove"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td width="30%">2. นางสาววิไล ประภัสสร
                                <div class="pull-right">
                                  <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                     onclick="delResearcher(this)" data-name="นางสาววิไล ประภัสสร" 
                                     data-id="" title="ลบรายการข้อมูล">
                                        <i class="fa fa-remove"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td width="30%">3. นายอุกฤษ คเณสร
                                <div class="pull-right">
                                  <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                     onclick="delResearcher(this)" data-name="นายอุกฤษ คเณสร" 
                                     data-id="" title="ลบรายการข้อมูล">
                                        <i class="fa fa-remove"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                  </div>
                  <div class="col-sm-6">
                       <table id="tableData" width="inherit" border="0" cellspacing="0" 
                     cellpadding="0" class="table table-bordered table-hover profileBox">
                          <thead>
                            <tr class="light-grey">
                              <th width="30%"> รายชื่อนักศึกษา
                              <div class="pull-right">
                              <button id="addStudent" class="btn btn-xs btn-primary"
                                type="button">
                                 <i class="fa fa-plus-circle"></i> เพิ่มนักศึกษา
                              </button>
                              </div>
                              </th>
                            </tr>
                            
                          </thead>
                          <tbody>
                            <tr>
                              <td width="30%">1. นายใจรัก ภักดี
                                <div class="pull-right">
                                  <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                     onclick="delResearcher(this)" data-name="นายใจรัก ภักดี" 
                                     data-id="" title="ลบรายการข้อมูล">
                                        <i class="fa fa-remove"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td width="30%">2. นางสาวศรีประภา ศรศักดิ์
                                <div class="pull-right">
                                  <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                     onclick="delResearcher(this)" data-name="นางสาวศรีประภา ศรศักดิ์" 
                                     data-id="" title="ลบรายการข้อมูล">
                                        <i class="fa fa-remove"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td width="30%">3. นายชาติชาย คเณสร
                                <div class="pull-right">
                                  <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                     onclick="delResearcher(this)" data-name="นายชาติชาย คเณสร" 
                                     data-id="" title="ลบรายการข้อมูล">
                                        <i class="fa fa-remove"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                  </div>
                </div>
                </div>            
              </div>
              <br/>
              
              <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" href="#collapse1">
                        <b><i class="fa fa-search"></i> ต้องการให้ clearing house ค้นหาเพิ่มเติม </b>
                        </a>
                    </div>
                    <div class="panel-body" style="padding:0px">
                      <div id="collapse1" style=" margin-top:10px" class=" panel-collapse collapse">
                      
                      	<div class="form-group row">
                        	<div class="col-sm-3">
                          		<label class="control-label"> ความเชี่ยวชาญ</label>
                          	</div>
                            <div class="col-sm-4">
                                <button class="btn btn-xs btn-outline btn-primary btn_addForm">
                                   <i class="fa fa-plus-circle"></i> เพิ่มความเชี่ยวชาญ
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <label class="control-label">ระดับการศึกษา</label>
                          </div>
                          <div class="col-sm-4">
                            <select class="form-control">
                              <option value="0" selected >ปริญญาตรี</option>
                              <option value="1"  >ปริญญาโท</option>
                              <option value="2"  >ปริญญาเอก</option>
                            </select>
                          </div>
                          <div class="col-sm-4">
                            <input type = "text" class="form-control" placeholder="สาขาวิชา" />
                          </div>
                        </div>
                        
                        <div class="form-group row">
                         <div class="col-sm-3">
                          <label class="control-label">
                            ระยะเวลาที่สามารถปฏิบัติงานได้อย่างน้อย 
                          </label>
                         </div>
                          <div class="col-sm-4">
                            <select class="form-control" name="operating_period" style="width: 150px">
                              <option value="3"  >3 เดือน</option>
                              <option value="4"  >4 เดือน</option>
                              <option value="5"  >5 เดือน</option>
                              <option value="6"  >6 เดือน</option>
                              <option value="7"  >7 เดือน</option>
                              <option value="8"  >8 เดือน</option>
                              <option value="9"  >9 เดือน</option>
                              <option value="10"  >10 เดือน</option>
                              <option value="11"  >11 เดือน</option>
                              <option value="12"  >12 เดือน</option>
                              <option value="13"  >13 เดือน</option>
                              <option value="14"  >14 เดือน</option>
                              <option value="15"  >15 เดือน</option>
                              <option value="16"  >16 เดือน</option>
                              <option value="17"  >17 เดือน</option>
                              <option value="18"  >18 เดือน</option>
                              <option value="19"  >19 เดือน</option>
                              <option value="20"  >20 เดือน</option>
                              <option value="21"  >21 เดือน</option>
                              <option value="22"  >22 เดือน</option>
                              <option value="23"  >23 เดือน</option>
                              <option value="24"  >24 เดือน</option>
                           </select>
                       </div>
                      </div>
                      
                      <div class="form-group row">
                          <div class="col-sm-12" >
                          <label class="control-label">ภูมิภาคที่สามารถปฏิบัติงานได้
                            <span class="small-font">(ระบุได้มากกว่า 1 รายการ)</span>
                          </label>
                          </div>
                          <div class="content-indent">
                            <div class="col-sm-12" >
                             <label class="inlineitem">
                               <input type="checkbox" name="operatingarea[]" value="กรุงเทพและปริมณฑล">
                               กรุงเทพและปริมณฑล
                             </label>
                             <label class="inlineitem">
                               <input type="checkbox" name="operatingarea[]" value="ภาคกลาง">
                               ภาคกลาง
                             </label>
                             <label class="inlineitem">
                               <input type="checkbox" name="operatingarea[]" value="ภาคเหนือ">
                               ภาคเหนือ
                             </label>
                             <label class="inlineitem">
                               <input type="checkbox" name="operatingarea[]" value="ภาคใต้">
                               ภาคใต้
                             </label>
                             <label class="inlineitem">
                               <input type="checkbox" name="operatingarea[]" value="ภาคตะวันออก">
                               ภาคตะวันออก
                             </label>
                             <label class="inlineitem">
                               <input type="checkbox" name="operatingarea[]" value="ภาคตะวันตก">
                               ภาคตะวันตก
                             </label>
                             <label class="inlineitem">
                               <input type="checkbox" name="operatingarea[]" 
                               value="ภาคตะวันออกเฉียงเหนือ">                          
                               ภาคตะวันออกเฉียงเหนือ
                             </label>
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-12" >
                            <label class="control-label">รูปแบบในการปฏิบัติงาน</label>
                          </div>
                          <div class="col-sm-12"> 
                            <label class="inlineitem">
                              <input type="radio"id="operatingtypeFull" 
                               name="operating_type" value="fulltime" />
                              เต็มเวลา (Full-time)
                            </label>
                            <label class="inlineitem">
                              <input type="radio" id="operatingtypePart" 
                               name="operating_type" value="parttime" />
                              ไม่เต็มเวลา (Part-time)
                            </label>
                            <span class="box-fte" style="margin-left: 7px;margin-top: 7px; 
                             position: absolute;display: none"> 
                               <span class="label-title">สัดส่วนการทำงานต่อสัปดาห์</span>
                            <select name="operating_fte" style="width: 70px" class="form-control">
                              <option value="20"  >20</option>
                              <option value="40"  >40</option>
                              <option value="60"  >60</option>
                              <option value="80"  >80</option>
                            </select>
                            % </span> 
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <label class="control-label">
                              ระยะเวลาที่เริ่มปฏิบัติงานได้
                            </label>
                          </div>
                          <div class="col-sm-12"> 
                            <label class="inlineitem">
                              <input type="radio" name="operating_start" value="0" />
                              ทันที</label>
                            <label class="inlineitem">
                              <input type="radio" name="operating_start" value="3" />
                              3 เดือน</label>
                            <label class="inlineitem">
                              <input type="radio" name="operating_start" value="6" />
                              6 เดือน</label>
                            <label class="inlineitem">
                              <input type="radio" name="operating_start" value="12" />
                              1 ปี</label>
                            <label class="inlineitem">
                              <input type="radio" name="operating_start" value="24" />
                              2 ปี</label>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <label class="control-label">
                              ประสบการณ์การทำวิจัย 
                            </label>
                          </div>
                          <div class="col-sm-4">
                            <select class="form-control col-sm-4" name="experience" >
                              <option value="0" selected >ไม่มี</option>
                              <option value="1"  >1 ปี</option>
                              <option value="2"  >2 ปี</option>
                              <option value="3"  >3 ปี</option>
                              <option value="4"  >4 ปี</option>
                              <option value=">= 5"  >มากกว่า 5 ปี</option>
                            </select>
                          </div>
                        </div>
    
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <label class="control-label">
                              คุณสมบัติของบุคคลากรที่ต้องการ 
                            </label>
                          </div>
                          <div class="col-sm-12">
                            <textarea class="inputtextarea form-control" 
                             rows="3" placeholder="คั่นด้วย ,"></textarea>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-2">
                          	<label class="control-label">เงินเดือน</label>
                          </div>
                          <div class="col-sm-4">
                              <select class="form-control" name="salary" id="salary" >
                                <option value="" selected >ไม่ระบุ</option>
                                <option value="25001-30000"  >25001 - 30000 บาท</option>
                                <option value="30001-35000"  >30001 - 35000 บาท</option>
                                <option value="35001-40000"  >35001 - 40000 บาท</option>
                                <option value="40001-45000"  >40001 - 45000 บาท</option>
                                <option value="45001-50000"  >45001 - 50000 บาท</option>
                                <option value="50001-55000"  >50001 - 55000 บาท</option>
                                <option value="55001-60000"  >55001 - 60000 บาท</option>
                                <option value=">= 60001"  >มากกว่า 60000 บาท</option>
                              </select>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-2">
                            <label class="control-label">เงินพิเศษ</label>
                          </div>
                          <div class="col-sm-4">
                            <input type = "text" class="form-control"/>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-2">
                            <label class="control-label">เงินสวัสดิการ</label>
                          </div>
                          <div class="col-sm-4">
                            <input type = "text" class="form-control"/>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-2">
                            <label for="skill">ข้อมูลเพิ่มเติม</label>
                          </div>
                          <div class="col-sm-9">
                            <textarea class="inputtextarea form-control"  
                             rows="3" placeholder="คั่นด้วย ,"></textarea>
                          </div>
                        </div>
                        
                        
                      
                      </div>
                    </div>
                  </div>
              </div>
              
              <!--
              <div class="form-group" style="margin-bottom:20px">
            <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
              <button type="submit" class="btn btn-default">
              	<i class="fa fa-save"></i> บันทึกร่าง
              </button>
              
              <button type="submit" class="btn btn-success">
              	<i class="fa fa-send"></i> ยื่นรายชื่อ
              </button>
            </div>
          </div>
          -->
           </div>
       
       </div>
       
    </div>
  </div>
  




