<script>
	$(document).ready(function(){
		<!-- filer plugins -->
		$('#filer_input').filer({
			showThumbs: true,
			addMore: true,
			extensions: ["pdf"],
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		var max_fields      = 10; //maximum input boxes allowed
		
		// ################# expertise multi textfield ###############################
		var wrapper         = $(".input_fields_wrap"); //Fields wrapper
		var add_button      = $(".add_field_button"); //Add button ID
		var x = 1; //initlal text box count
		
		$(add_button).click(function(e){ //on add input button click
			e.preventDefault();
			if(x < max_fields){ //max input box allowed
				x++; //text box increment
				$(wrapper).append('<div style="margin-bottom:5px" class="form-group">'
				+' <div class ="col-sm-8">'
				+'   <input type="text" class="form-control" '
				+'    placeholder="ระบุความเชี่ยวชาญ" name="experties[]"/>'
				+' </div>'
				+'   <a href="#" class="remove_field">'
				+'     <i class="fa fa-minus-circle" style="color:red"></i> ลบ</a>'
				+'</div>'); //add input box
				
			}
		});
		
		$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
			e.preventDefault(); $(this).parent('div').remove(); 
			x--;
		});
	});
</script>

<script>
   $(document).ready(function() {
	   appendModal("{{ url('company/delete-researcher-modal') }}", "deleteResearcherModal");
	   appendModal("{{ url('company/researcher-basic-addition-modal') }}", "basicResearchModal");	   
	   appendModal("{{ url('company/student-addition-modal') }}", "addSutudentModal");			
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
      <li data-target="#step2"> 
      	<a href="#" onClick="showCompanyProjectList()">รายชื่อโครงการ</a>
        <span class="chevron"></span> </li>
      <li data-target="#step3"> 
      	<a href="#" onClick="openProj_researcher_tab()">นักวิจัย</a>
        <span class="chevron"></span> </li>
      <li class="active"> เพิ่มนักวิจัย <span class="chevron"></span> </li>
    </ul>
    <div class="actions" style="padding:0px; display:inline-block">
      <div class="panel panel-solid-primary panel-style1">
        <div class="panel-body panel-title"> บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด </div>
      </div>
      <div class="panel panel-solid-primary panel-style1">
        <div class="panel-body panel-title"> โครงการ: โครงการที่ 1 </div>
      </div>
      <div class="panel panel-solid-primary panel-style1">
        <div class="panel-body panel-title yellowlink"> <a href="#" id="statusBut" >สถานะ: P3</a> </div>
      </div>
    </div>
  </div>
  <div class="row-fluid menu-proj"> 
    <!--<ul class="nav nav-tabs">-->
    <div class="tab-wrapper tab-primary"> 
    	<a href="#" class="nav-tabs-dropdown btn btn-block btn-default">Tabs</a>
      <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
        <li id="proj-profile"> 
        	<a href="#" data-toggle="tab" onClick="openProj_basicinfo_tab(8)">P0: รายละเอียดโครงการ</a> </li>
        <li id="proj-researcher" class="active"> 
        	<a href="#" data-toggle="tab" onClick="openProj_researcher_tab(8)">P1: นักวิจัย</a> </li>
      </ul>
      <div class="tab-content" style="margin-top:0px;">
        <div class="panel panel-default" >
          <div class="panel-heading"> <b><i class="fa fa-plus"></i> เพิ่มตำแหน่งที่ต้องการ</b> </div>
          <div class="panel-body">
              <form class="form-horizontal">
                <div class="form-group row">
                    <label class="control-label col-sm-2">ตำแหน่ง </label>
                  <div class="col-sm-8">
                    <input type = "text" class="form-control" 
                                id="position" name="position"/>
                  </div>
                </div>
                
                <div class="form-group row">
                    <label class="control-label col-sm-2">หน้าที่</label>
                  <div class="col-sm-8">
                    <input type = "text" class="form-control" 
                             id="role" name="role"/>
                  </div>
                </div>
                
                <div class="form-group row">
                    <label class="control-label col-sm-2"> <span class="req"></span>จำนวนที่ต้องการ </label>
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
                                    type="button"> <i class="fa fa-plus-circle"></i> เพิ่มนักวิจัย </button>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td width="30%">1. นายอดิสร ศักดิ์ชัย
                            <div class="pull-right"> <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                         onclick="delResearcher(this)" data-name="นายอดิสร ศักดิ์ชัย" 
                                         data-id="" title="ลบรายการข้อมูล"> <i class="fa fa-remove"></i> </a> </div></td>
                        </tr>
                        <tr>
                          <td width="30%">2. นางสาววิไล ประภัสสร
                            <div class="pull-right"> <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                         onclick="delResearcher(this)" data-name="นางสาววิไล ประภัสสร" 
                                         data-id="" title="ลบรายการข้อมูล"> <i class="fa fa-remove"></i> </a> </div></td>
                        </tr>
                        <tr>
                          <td width="30%">3. นายอุกฤษ คเณสร
                            <div class="pull-right"> <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                         onclick="delResearcher(this)" data-name="นายอุกฤษ คเณสร" 
                                         data-id="" title="ลบรายการข้อมูล"> <i class="fa fa-remove"></i> </a> </div></td>
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
                                    type="button"> <i class="fa fa-plus-circle"></i> เพิ่มนักศึกษา </button>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td width="30%">1. นายใจรัก ภักดี
                            <div class="pull-right"> <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                         onclick="delResearcher(this)" data-name="นายใจรัก ภักดี" 
                                         data-id="" title="ลบรายการข้อมูล"> <i class="fa fa-remove"></i> </a> </div></td>
                        </tr>
                        <tr>
                          <td width="30%">2. นางสาวศรีประภา ศรศักดิ์
                            <div class="pull-right"> <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                         onclick="delResearcher(this)" data-name="นางสาวศรีประภา ศรศักดิ์" 
                                         data-id="" title="ลบรายการข้อมูล"> <i class="fa fa-remove"></i> </a> </div></td>
                        </tr>
                        <tr>
                          <td width="30%">3. นายชาติชาย คเณสร
                            <div class="pull-right"> <a class="btn btn-danger btn-deldata btn-sm no_bot_margin" 
                                         onclick="delResearcher(this)" data-name="นายชาติชาย คเณสร" 
                                         data-id="" title="ลบรายการข้อมูล"> <i class="fa fa-remove"></i> </a> </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                
            </form>
          </div>
        </div>
        <div class="panel-group">
          <div class="panel panel-primary">
            <div class="panel-heading"> 
            	<a data-toggle="collapse" href="#collapse1"> 
                <b><i class="fa fa-search"></i> ต้องการให้ clearing house ค้นหาเพิ่มเติม </b> </a> 
            </div>
            <div class="panel-body" style="padding:5px; background-color:#F8F8F8;">
            
            	<form class="form-horizontal">
                  <div id="collapse1" style=" margin-top:10px" class=" panel-collapse collapse">
                    <div class="form-group row">
                      <label class="control-label col-sm-3"> ความเชี่ยวชาญ</label>
                      <div class="col-sm-8">
                        <!-- multi textfield -->
                          <div id="expertiseDiv" class="form-group row">
                            <div class="input_fields_wrap" 
                             style="margin-left:20px; margin-right:20px; margin-top:10px">
                                <div style="margin-bottom:5px" class="form-group">
                                    <div class="col-sm-8">
                                        <input class="form-control" placeholder="ระบุความเชี่ยวชาญ" 
                                        type="text" name="experties[]">
                                    </div>   
                                </div>                 
                            </div>
                            <div style="margin-left:20px; margin-right:20px">
                                <a href="" class="add_field_button">
                                  <i class="fa fa-plus-circle dark-blue"></i> เพิ่ม</a>
                            </div>
                          </div>
                           <!-- end of multi textfield -->
                      </div>
                    </div>
                    
                    
                    
                    <div class="form-group row">
                      <label class="control-label col-sm-3">ระดับการศึกษา</label>
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
                      <label class="control-label col-sm-3"> ระยะเวลาที่สามารถปฏิบัติงานได้อย่างน้อย </label>
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
                        <label class="control-label col-sm-3">ภูมิภาคที่สามารถปฏิบัติงานได้ 
                            <span class="small-font">(ระบุได้มากกว่า 1 รายการ)</span> </label>
                        <div class="col-sm-8" >
                          <label class="inlineitem">
                            <input type="checkbox" name="operatingarea[]" value="กรุงเทพและปริมณฑล">
                            กรุงเทพและปริมณฑล </label>
                          <label class="inlineitem">
                            <input type="checkbox" name="operatingarea[]" value="ภาคกลาง">
                            ภาคกลาง </label>
                          <label class="inlineitem">
                            <input type="checkbox" name="operatingarea[]" value="ภาคเหนือ">
                            ภาคเหนือ </label>
                          <label class="inlineitem">
                            <input type="checkbox" name="operatingarea[]" value="ภาคใต้">
                            ภาคใต้ </label>
                          <label class="inlineitem">
                            <input type="checkbox" name="operatingarea[]" value="ภาคตะวันออก">
                            ภาคตะวันออก </label>
                          <label class="inlineitem">
                            <input type="checkbox" name="operatingarea[]" value="ภาคตะวันตก">
                            ภาคตะวันตก </label>
                          <label class="inlineitem">
                            <input type="checkbox" name="operatingarea[]" 
                                   value="ภาคตะวันออกเฉียงเหนือ">
                            ภาคตะวันออกเฉียงเหนือ </label>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="control-label col-sm-3">รูปแบบในการปฏิบัติงาน</label>
                      <div class="col-sm-8">
                        <label class="inlineitem">
                          <input type="radio"id="operatingtypeFull" 
                                   name="operating_type" value="fulltime" />
                          เต็มเวลา (Full-time) </label>
                        <label class="inlineitem">
                          <input type="radio" id="operatingtypePart" 
                                   name="operating_type" value="parttime" />
                          ไม่เต็มเวลา (Part-time) </label>
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
                      <label class="control-label col-sm-3"> ระยะเวลาที่เริ่มปฏิบัติงานได้ </label>
                      <div class="col-sm-8">
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
                      <label class="control-label col-sm-3"> ประสบการณ์การทำวิจัย </label>
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
                        <label class="control-label col-sm-3"> คุณสมบัติของบุคคลากรที่ต้องการ </label>
                      <div class="col-sm-8">
                        <textarea class="inputtextarea form-control" 
                                 rows="3" placeholder="คั่นด้วย ,"></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="control-label col-sm-3">เงินเดือน</label>
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
                      <label class="control-label col-sm-3">เงินพิเศษ</label>
                      <div class="col-sm-4">
                        <input type = "text" class="form-control"/>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="control-label col-sm-3">เงินสวัสดิการ</label>
                      <div class="col-sm-4">
                        <input type = "text" class="form-control"/>
                      </div>
                    </div>
                    
                    <div class="form-group row">
\                        <label class="control-label col-sm-3" for="skill">ข้อมูลเพิ่มเติม</label>
                      <div class="col-sm-8">
                        <textarea class="inputtextarea form-control"  
                                 rows="3" placeholder="คั่นด้วย ,"></textarea>
                      </div>
                    </div>
                    
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="float: right;">
    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> เพิ่มตำแหน่งงาน </button>
    <button type="submit" class="btn btn-default"> <i class="fa fa-send"></i> ยกเลิก </button>
  </div>
</div>
