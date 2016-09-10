  <script>
  	$(document).on("click", "#addResearcher", function() {
		$('#searchModal').modal('show');
	});
	
	$(document).on("click", "#addBasicResesearcher", function() {
		$('#basicResearchModal').modal('show');
	});	
	
	$(document).on("click", "#addStudent", function() {
		$('#sutudentSearchModal').modal('show');
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
      <li><a href="#" onClick="openProj_researcher_tab(8)">นักวิจัย</a></li>
      <li class="active">เพิ่มตำแหน่งนักวิจัย</li>
    </ul>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-company">บริษัท : บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด</div>
    </div>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-job">โครงการ : โครงการ 1</div>
    </div>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-status">
      	<a style="color:#FFFFFF" href="#" data-toggle="modal">
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
        <form class="form-horizontal">
          
          <div class="panel panel-default" >
            <div class="panel-heading">
          	  <b><i class="fa fa-plus"></i> เพิ่มตำแหน่งที่ต้องการ </b>
            </div>
            
            <div class="panel-body">
            	<div class="form-group">
                  <div class="col-sm-2">
                    <label>
                      <span class="req"></span>ตำแหน่ง 
                    </label>
                  </div>
                  <div class="col-sm-8">
                    <input type = "text" class="form-control" 
                     id="position" name="position"/>
                  </div>
            	</div>

            	<div class="form-group">
                  <div class="col-sm-2">
                    <label>
                      <span class="req"></span>หน้าที่ 
                    </label>
                  </div>
                  <div class="col-sm-8">
                    <input type = "text" class="form-control" 
                     id="role" name="role"/>
                  </div>
            	</div>
            
            
            <div class="form-group">
              <div class="col-sm-2">
                <label>
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
                <div class="col-sm-7">
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
                           <!--<button id="addResearcher" class="btn btn-xs btn-primary"
                            type="button">
                   	  	 	 <i class="fa fa-plus-circle"></i> เพิ่มนักวิจัย (ขั้นสูง)
                 		   </button>-->
                          </div>
                          </th>
                        </tr>
                        
                      </thead>
                      <tbody>
                        <tr>
                          <td width="30%">1. นายอดิสร ศักดิ์ชัย
                            <div class="pull-right">
                              <a class="btn btn-danger btn-deldata" 
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
                              <a class="btn btn-danger btn-deldata" 
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
                              <a class="btn btn-danger btn-deldata" 
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
              </div>
              <div class="col-sm-6">
                <div class="col-sm-7">
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
                              <a class="btn btn-danger btn-deldata" 
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
                              <a class="btn btn-danger btn-deldata" 
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
                              <a class="btn btn-danger btn-deldata" 
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
                  
                    <div class="form-group">
                      <div class="col-sm-2">
                        <label>ความเชี่ยวชาญ</label>
                      </div>
                      <div class="col-sm-8">
                        <button id="btn_add_privateOrg" 
                         class="btn btn-xs btn-outline btn-primary btn_addForm" 
                         type="button">
                           <i class="fa fa-plus-circle"></i> เพิ่มความเชี่ยวชาญ
                        </button>
                        <div id="box_privateOrg_detail" 
                         class="row col-sm-12 box_detail hide">
                          <div id="box_privateOrg">
                            <p style="display: none">
                              <input type="text" name="privateOrg_detail_" class="inputtext" />
                              <span class="btn_del btn_del_privateOrg"></span> </p>
                          </div>
                        </div>
                      </div>
            	    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12">
                        <label>ระดับการศึกษา</label>
                      </div>
                      <div style="padding-left:10px">
                          <div class="col-sm-4 content-indent">
                            <select class="form-control">
                              <option value="0" selected >ปริญญาตรี</option>
                              <option value="1"  >ปริญญาโท</option>
                              <option value="2"  >ปริญญาเอก</option>
                            </select>
                          </div>
                          <div class="col-sm-4 content-indent">
                            <input type = "text" class="form-control" placeholder="สาขาวิชา" />
                          </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                     <div class="col-sm-12">
                      <label>
                        ระยะเวลาที่สามารถปฏิบัติงานได้อย่างน้อย <span class="text-note">(เดือน)</span>
                      </label>
                     </div>
                      <div class="col-sm-12">
                        <div class="content-indent">
                        <select class="form-control" name="operating_period" style="width: 150px">
                          <option value="3"  >3</option>
                          <option value="4"  >4</option>
                          <option value="5"  >5</option>
                          <option value="6"  >6</option>
                          <option value="7"  >7</option>
                          <option value="8"  >8</option>
                          <option value="9"  >9</option>
                          <option value="10"  >10</option>
                          <option value="11"  >11</option>
                          <option value="12"  >12</option>
                          <option value="13"  >13</option>
                          <option value="14"  >14</option>
                          <option value="15"  >15</option>
                          <option value="16"  >16</option>
                          <option value="17"  >17</option>
                          <option value="18"  >18</option>
                          <option value="19"  >19</option>
                          <option value="20"  >20</option>
                          <option value="21"  >21</option>
                          <option value="22"  >22</option>
                          <option value="23"  >23</option>
                          <option value="24"  >24</option>
                       </select>
                       </div>
                   </div>
                  </div>
                  
                  <div class="form-group">
                  	  <div class="col-sm-12" >
                      <label for="area">ภูมิภาคที่สามารถปฏิบัติงานได้
                        <span class="text-note">(ระบุได้มากกว่า 1 รายการ)</span>
                      </label>
                      </div>
                      <div class="content-indent">
                        <div class="col-sm-12" >
                         <label style="display: inline-block;width: 180px">
                           <input type="checkbox" name="operatingarea[]" value="กรุงเทพและปริมณฑล">
                           กรุงเทพและปริมณฑล
                         </label>
                         <label style="display: inline-block;width: 180px">
                           <input type="checkbox" name="operatingarea[]" value="ภาคกลาง">
                           ภาคกลาง
                         </label>
                         <label style="display: inline-block;width: 180px">
                           <input type="checkbox" name="operatingarea[]" value="ภาคเหนือ">
                           ภาคเหนือ
                         </label>
                         <label style="display: inline-block;width: 180px">
                           <input type="checkbox" name="operatingarea[]" value="ภาคใต้">
                           ภาคใต้
                         </label>
                         <label style="display: inline-block;width: 180px">
                           <input type="checkbox" name="operatingarea[]" value="ภาคตะวันออก">
                           ภาคตะวันออก
                         </label>
                         <label style="display: inline-block;width: 180px">
                           <input type="checkbox" name="operatingarea[]" value="ภาคตะวันตก">
                           ภาคตะวันตก
                         </label>
                         <label style="display: inline-block;width: 180px">
                           <input type="checkbox" name="operatingarea[]" 
                           value="ภาคตะวันออกเฉียงเหนือ">                          
                           ภาคตะวันออกเฉียงเหนือ
                         </label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12" >
                        <label for="operate_type">รูปแบบในการปฏิบัติงาน</label>
                      </div>
                      <div class="content-indent">
                      <div class="col-sm-12"> 
                        <label class="prettylabel">
                          <input type="radio"id="operatingtypeFull" 
                           name="operating_type" value="fulltime" />
                          เต็มเวลา (Full-time)
                        </label>
                        <label class="prettylabel">
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
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12">
                        <label for="start_type">
                          ระยะเวลาที่เริ่มปฏิบัติงานได้
                        </label>
                      </div>
                      <div class="content-indent">
                      <div class="col-sm-12"> 
                        <label class="prettylabel">
                          <input type="radio" name="operating_start" value="0" />
                          ทันที</label>
                        <label class="prettylabel">
                          <input type="radio" name="operating_start" value="3" />
                          3 เดือน</label>
                        <label class="prettylabel">
                          <input type="radio" name="operating_start" value="6" />
                          6 เดือน</label>
                        <label class="prettylabel">
                          <input type="radio" name="operating_start" value="12" />
                          1 ปี</label>
                        <label class="prettylabel">
                          <input type="radio" name="operating_start" value="24" />
                          2 ปี</label>
                      </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12">
                        <label for="experience" >
                          ประสบการณ์ทำงานวิจัย <span class="text-note">(ปี)</span>
                        </label>
                      </div>
                      <div class="content-indent">
                      <div class="col-sm-8">
                        <select class="form-control" name="experience" style="width:120px" >
                          <option value="0" selected >0</option>
                          <option value="1"  >1</option>
                          <option value="2"  >2</option>
                          <option value="3"  >3</option>
                          <option value="4"  >4</option>
                          <option value=">= 5"  >มากกว่า 5</option>
                        </select>
                      </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-12">
                        <label for="skill">
                          คุณสมบัติของบุคคลากรที่ต้องการ 
                        </label>
                      </div>
                      <div class="content-indent">
                          <div class="col-sm-12">
                            <textarea class="inputtextarea form-control" 
                             rows="3" placeholder="คั่นด้วย ,"></textarea>
                          </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label>
                        <div class="col-sm-12">เงินเดือน</div> 
                      </label>
                      <div class="content-indent">
                        <div class="col-sm-12">
                          <select class="form-control" name="salary" 
                          id="salary" style="width: 150px">
                            <option value="" selected >ไม่ระบุ</option>
                            <option value="25001-30000"  >25001 - 30000</option>
                            <option value="30001-35000"  >30001 - 35000</option>
                            <option value="35001-40000"  >35001 - 40000</option>
                            <option value="40001-45000"  >40001 - 45000</option>
                            <option value="45001-50000"  >45001 - 50000</option>
                            <option value="50001-55000"  >50001 - 55000</option>
                            <option value="55001-60000"  >55001 - 60000</option>
                            <option value=">= 60001"  >มากกว่า 60000</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12">
                        <label>เงินพิเศษ</label>
                      </div>
                      <div class="content-indent">
                          <div class="col-sm-4">
                            <input type = "text" class="form-control"/>
                          </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12">
                        <label>เงินสวัสดิการ</label>
                      </div>
                      <div class="content-indent">
                          <div class="col-sm-4">
                            <input type = "text" class="form-control"/>
                          </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12">
                        <label for="skill">ข้อมูลเพิ่มเติม</label>
                      </div>
                      <div class="content-indent">
                          <div class="col-sm-12">
                            <textarea class="inputtextarea form-control"  
                             rows="3" placeholder="คั่นด้วย ,"></textarea>
                          </div>
                      </div>
                    </div>
                    
                    
                  
                  </div>
                </div>
              </div>
          </div>
          
        </form>
        
        <div class="form-group col-sm-12" align="center">
          <button class="btn btn-default"> ตกลง</button>
          <a href="#" aria-hidden="true" class="btn btn-default center"> ยกเลิก </a>
        </div>
        
 	   </div>
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

  @include('include.clearinghouse.ch-researchersearch-modal')
  @include('include.clearinghouse.ch-researchersearch-basic-modal')
  @include('include.clearinghouse.ch-studentsearch-modal')

