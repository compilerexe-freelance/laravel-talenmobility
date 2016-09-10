        <script>
			$(document).ready(function() {
				/* to update the table, you need to edit the following */
				$('#tableData').DataTable( {
					"scrollX": true,
					/*"processing": true,
					"serverSide": true,
					"ajax": "test.php"*/
				});
			});
		</script>
        
           <script>
			var msg_confirmDel = "คุณต้องการลบรายการ [x] ใช่หรือไม่ <br/>หากลบรายการงานภายใต้บริษัทจะถูกลบด้วย";
		
			function updatePriority(obj) {
				var v = ($(obj).parent().attr('data-order') == 1 ? 0 : 1);
				$(obj).parent().attr('data-order', v);
				$(obj).parent().attr('data-sort', v);
				if (v == 1) {
					$(obj).addClass('priority-mark');
				} else {
					$(obj).removeClass('priority-mark');
				}
			}
			function eventConfirmDel() {
				$('#btn_yes').click(function () {
					var cid = $('#confirmDel').data('id');
					$('#confirmDel').modal('hide');
					submitDelCompany(cid);
				});
			}
			function delCompany(obj) {
				id = $(obj).data('id');
				company = $(obj).data('name');
				msg_confirm = msg_confirmDel.replace('[x]', 
				 '<span class="markDel">' + company + '</span>');
				 
				$('#confirmDel .modal-body').html(msg_confirm);
				$('#confirmDel').data('id', id);
				$('#confirmDel').modal('show');
			}
			function editCompany(cid) {
				var titleForm = "เพิ่มรายชื่อบริษัท";
				if (cid != '') {
					titleForm = "แก้ไขข้อมูล";
				}
		
				$('#form_editCompany .modal-header h3').html(titleForm);
				$('.msg-err').html('');
				$('#form_editCompany').removeData('modal').modal();
			}			
		</script> 
        
        <div class="row">
          <ul id="nav-menu" class="breadcrumb">
            <li class="active">รายการโครงการ</li>
          </ul>
          <div class="row-fluid"> 
            <a class="btn btn-default pull-right btn-addFormList" 
             id="btn-addproject" onclick="openProj_add_tab('8')">
              <i class="fa fa-plus-circle"></i> เพิ่มโครงการ
            </a> 
          </div>
          <div class="row-fluid">
            <table id="tableData" class="table table-striped table-bordered" 
             width="inherit" cellspacing="0">
              <thead>
                <tr>
                  <th style="width: 35%">โครงการ</th>
                  <th style="width: 15%" class="text-center">วันเริ่มต้น</th>
                  <th style="width: 10%" class="text-center">สถานะ</th>
                  <th style="width: 5%" class="text-center">ลบ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="link link-company title" id="link-company6" 
                    title="แก้ไขข้อมูล">โครงการที่ 1</td>
                  
                  <td class="text-center  btn-editdata " 
                   title="ดูรายละเอียดโครงการ">
                     26/12/2558
                  </td>
                  <td class="text-center">P0</td>
                  <td class="text-center">
                    <a class="btn btn-danger btn-deldata" onclick="delCompany(this)" 
                     data-name="Western Digital Technologies, Inc" 
                     data-id="6" title="ลบรายการข้อมูล">
                       <i class="fa fa-remove"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="link link-company title" id="link-company7" 
                   title="แก้ไขข้อมูล">โครงการที่ 2</td>
                  
                  <td class="text-center  btn-editdata " 
                   title="ดูรายละเอียดโครงการ"> 26/12/2558 </td>
                  <td class="text-center">P1</td>
                  <td class="text-center">
                      <a class="btn btn-danger btn-deldata" 
                       onclick="delCompany(this)" 
                       data-name="บริษัท ปูนซีเมนต์ไทย จำกัด (มหาชน)" 
                       data-id="7" title="ลบรายการข้อมูล">
                         <i class="fa fa-remove"></i>
                      </a>
                  </td>
                </tr>
                <tr>
                  <td class="link link-company title" id="link-company8" 
                   title="แก้ไขข้อมูล">โครงการที่ 3</td>
                  <!--<td class="text-center">Staff CE</td>-->
                  <td class="text-center  btn-editdata " 
                    
                   title="ดูรายละเอียดโครงการ"> 26/12/2558 </td>
                  <td class="text-center">P2</td>
                  <td class="text-center">
                  </td>
                </tr>
                
                <tr>
                  <td class="link link-company title" id="link-company8" 
                   title="แก้ไขข้อมูล">โครงการที่ 4</td>
                  <!--<td class="text-center">Staff CE</td>-->
                  <td class="text-center  btn-editdata " 
                    
                   title="ดูรายละเอียดโครงการ"> 26/12/2558 </td>
                  <td class="text-center">P2</td>
                  <td class="text-center">
                  </td>
                </tr>
                
                <tr>
                  <td class="link link-company title" id="link-company8" 
                   title="แก้ไขข้อมูล">โครงการที่ 5</td>
                  <!--<td class="text-center">Staff CE</td>-->
                  <td class="text-center  btn-editdata " 
                    
                   title="ดูรายละเอียดโครงการ"> 26/12/2558 </td>
                  <td class="text-center">P2</td>
                  <td class="text-center">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--companyForm-->
          <div class="modal fade" role="dialog" id="form_editCompany" role="dialog">
          <div class="modal-dialog row" style=" width: 96%;">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                 aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3>แก้ไขข้อมูล</h3>
              </div>
              <div class="modal-body">
              <div class="row" style="padding-right:10px; padding-left:10px; "> 
                 
                  <!--<div class="breadcrumb box-title" > 
                   บริษัท  [ เลขทะเบียนนิติบุคคล:  ] 
                  </div>-->
                  
                    <form method="post" action="" id="company-form" role="form" 
                      class="form-horizontal">
                      
                      <div class="col-sm-12 company-bg box-title-input" >
                        <div class="form-group col-sm-6">
                          <label class="col-sm-1 control-label" style="width: 25%;">
                            <span class="req"></span> ชื่อบริษัท
                          </label>
                          <div class="col-sm-5 input-group" style="width: 75%">
                            <input class="form-control required" id="company" 
                           name="company" value="" >
                          </div>
                        </div>
                        
                        <div class="form-group col-sm-5" style="padding-top:6px">
                          <label class="col-sm-1 control-label" style="width: 40%">
                            <span class="req"></span> เลขทะเบียนนิติบุคคล
                          </label>
                          <div class="col-sm-3 input-group" style="width: 60%">
                            <input class="form-control" id="company_code" 
                              name="company_code" value="">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="btn-companyCode"> 
                              <i class="fa fa-search"></i> 
                            </button>
                            </span> 
                          </div>
                        </div>
                      </div>
                      
                        <!--column 1-->
                        <div class="col-sm-6 column-1"> 
                          <!--address-->
                          
                          <div class="panel panel-default">
                            <div class="panel-heading">สถานที่ตั้ง</div>
                            <div class="panel-body">
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="address">เลขที่</label>
                                <div class="col-sm-8">
                                  <input class="form-control" type="text" id="address" 
                                  name="address" value="">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="building">
                                  อาคาร/หมู่บ้าน
                                </label>
                                <div class="col-sm-8">
                                  <input class="form-control" type="text" 
                                  id="building" name="building" value="">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="floor">ชั้น</label>
                                <div class="col-sm-8">
                                  <input class="form-control" style="width:40px" 
                                  type="text" id="floor" 
                                  name="floor" value="">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="road">ถนน</label>
                                <div class="col-sm-8">
                                  <input class="form-control" type="text" id="road" 
                                    name="road" value="">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="province">
                                  <span class="req"></span>จังหวัด
                                </label>
                                <div class="col-sm-8"> 
                                  <select id="province" name="province" 
                                    class="form-control required">
                                    <option selected="selected" value="">-</option>
                                  </select>
                                  <input type="hidden" name="area" id="area" value="" />
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="amphur">
                                  <span class="req"></span>อำเภอ/เขต
                                </label>
                                <div class="col-sm-8">
                                  <select id="amphur" name="amphur" class="form-control required">
                                    <option value="" selected="">-</option>
                                  </select>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="tambon">ตำบล/แขวง</label>
                                <div class="col-sm-8">
                                  <select id="tambon" name="tambon" class="form-control">
                                    <option value="" selected="">-</option>
                                  </select>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="postcode">
                                  รหัสไปรษณีย์
                                </label>
                                <div class="col-sm-8">
                                  <input class="form-control" type="text" 
                                  id="postcode" name="postcode" value="">
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          
                          <!--contact-->
                          
                          <div class="panel panel-default">
                            <div class="panel-heading">ข้อมูลติดต่อ</div>
                            <div class="panel-body">
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="tel">
                                  <span class="req"></span>โทรศัพท์
                                </label>
                                <div class="col-sm-8">
                                  <input class=" form-control required" type="text" 
                                  id="tel" name="tel" placeholder="02xxxxxxx" value="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="fax">โทรสาร</label>
                                <div class="col-sm-8">
                                  <input class=" form-control" type="text" id="fax" 
                                  name="fax" placeholder="02xxxxxxx" value="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="mobile">มือถือ</label>
                                <div class="col-sm-8">
                                  <input class=" form-control" type="text" id="mobile" 
                                  name="mobile" placeholder="081xxxxxxx" value="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="email" >
                                  <span class="req"></span>อีเมล์
                                </label>
                                <div class="col-sm-8">
                                  <input class=" form-control required" type="email" 
                                  id="email" name="email" placeholder="mymail@domain.com" 
                                  class="email" value="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- //column 1 --> 
                        
                        <!--column 2-->
                        
                        <div class="col-sm-6 column-2"> 
                          
                          <!--company type-->
                          
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <span class="req"></span> รูปแบบการจดทะเบียน
                            </div>
                            <div class="panel-body">
                              <div class="form-group form-inline">
                                <div class="radio">
                                  <label>
                                    <input type="radio" value="L" 
                                    name="company_type" class="required">
                                    &nbsp;บริษัทขนาดใหญ่ 
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" value="S" name="company_type">
                                    &nbsp;บริษัทขนาดกลางและขนาดย่อม </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" value="O" name="company_type">
                                    &nbsp;วิสาหกิจชุมชน / อื่นๆ </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!--industry_type-->
                          
                          <div class="panel panel-default">
                            <div class="panel-heading">ประเภทอุตสาหกรรม</div>
                            <div class="panel-body">
                              <div class="col-sm-11">
                                <select class="form-control" id="industry_type" name="industry_type">
                                  <option value="">-</option>
                                  <option value="ข้าวและผลิตภัณฑ์จากข้าว">ข้าวและผลิตภัณฑ์จากข้าว</option>
                                  <option value="มัน อ้อย ปาล์ม เพื่อพลังงาน">
                                    มัน อ้อย ปาล์ม เพื่อพลังงาน
                                  </option>
                                  <option value="ยางและผลิตภัณฑ์">ยางและผลิตภัณฑ์</option>
                                  <option value="อาหารแปรรูป">อาหารแปรรูป</option>
                                  <option value="เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์">
                                    เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์
                                  </option>
                                  <option value="ยานยนต์">ยานยนต์</option>
                                  <option value="พลาสติกและปิโตรเคมี">พลาสติกและปิโตรเคมี</option>
                                  <option value="แฟชั่น (สิ่งทอ อัญมณี เครื่องหนัง)">
                                    แฟชั่น (สิ่งทอ อัญมณี เครื่องหนัง)
                                  </option>
                                  <option value="ท่องเที่ยวและสาขาต่อเนื่อง">ท่องเที่ยวและสาขาต่อเนื่อง</option>
                                  <option value="โลจิสติกส์และสาขาต่อเนื่อง">โลจิสติกส์และสาขาต่อเนื่อง</option>
                                  <option value="ก่อสร้างและบริการต่อเนื่อง">ก่อสร้างและบริการต่อเนื่อง</option>
                                  <option value="เศรษฐกิจสร้างสรรค์และดิจิทัล">
                                    เศรษฐกิจสร้างสรรค์และดิจิทัล
                                  </option>
                                  <option value="type_other">อื่นๆ</option>
                                </select>
                              </div>
                              <div class="col-sm-12">
                                <div style="margin-top: 5px;display: none" id="type_other">
                                  <label class="col-sm-1 control-label" style="width: 100px">
                                    โปรดระบุ : 
                                  </label>
                                  <div class="col-sm-8 col-lg-9">
                                    <input type="text" class="form-control" id="industry_other" 
                                    name="industry_other" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!--product-->
                          
                          <div class="panel panel-default">
                            <div class="panel-heading">ผลิตภัณฑ์</div>
                            <div class="panel-body">
                              <div class="col-sm-11">
                                <textarea class="form-control" placeholder="คั่นด้วย ," 
                                 id="product" name="product"></textarea>
                              </div>
                            </div>
                          </div>
                          
                          <!--personal contact-->
                          
                          <div class="panel panel-default">
                            <div class="panel-heading">ผู้ติดต่อประสานงาน</div>
                            <div class="panel-body">
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="tel">
                                  <span class="req"></span>ชื่อ-สกุล
                                </label>
                                <div class="col-sm-8">
                                  <input class="form-control required" type="text" 
                                  id="pcontact_name" name="pcontact_name" placeholder="" value="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="mobile">โทรศัพท์</label>
                                <div class="col-sm-8">
                                  <input class="form-control" type="text" id="pcontact_tel" 
                                  name="pcontact_tel" placeholder="081xxxxxxx" value="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-1" for="email" >
                                 <span class="req"></span>อีเมล์
                                </label>
                                <div class="col-sm-8">
                                  <input class="form-control required" type="email" 
                                  id="pcontact_email" name="pcontact_email" 
                                  placeholder="mymail@domain.com" class="email" value="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pull-right" id="b-btnsubmit">
                            <button type="submit" class="btn btn-success" 
                             style="padding: 5px 20px;font-size: 15px;">บันทึก
                            </button>
                            <button type="reset" class="btn btn-default btn-reset" 
                            style="padding: 5px 20px;font-size: 15px;">ยกเลิก
                            </button>
                          </div>
                          <input type="hidden" name="cid" value="1">
                          <span id="msgbox"></span> </div>                        
                    </form>
                </div>              
              </div>
            </div>
          </div>
        </div>
        <!--confirmDelete-->
        <div id="confirmDel" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"> <a href="#" data-dismiss="modal" 
               aria-hidden="true" class="close">×</a>
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
      </div>