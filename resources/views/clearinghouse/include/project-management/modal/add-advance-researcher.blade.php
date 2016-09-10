<script>
      var searchStr = "";
      var job_start = '';
      var operating_type = '';
      $(function () {               
        $('#btn-addsearch').bind('click', function () {
              $row = '<div class="row box-search" style="background:none;">' + $('.row-search').first().clone().wrapAll("<div/>").parent().html() + '</div>';
              $($row).appendTo($('#box-subsearch'));
              $obj = $('.row-search').last();
              $obj.find('input').val('');
              $obj.find('.qOperation').show();
              $obj.find('.btn-delsearch').show();
              eventSuggest($obj.find('input[name="qStr[]"]'), 'getUserList');
              eventqField();
              eventButton();
          });
          eventSearch();
          initSearch();
          eventConfirmDel();
          $('input[name=operating_type]').bind('click', function () {
              if ($(this).val() === 'parttime') {
                  $('.box-fte').show();
              } else {
                  $('.box-fte').hide();
              }
          });
          $('#btn-clear').bind('click', function () {
              $('option').removeAttr('selected');
              $('input[type=checkbox]').attr('checked', false);
              $('#box-subsearch').html('');
              $('.box-fte').hide();
          });
          eventqField();
          eventSuggest($('input[name="qStr[]"]'), 'getUserList');
          $('input[name=job_start]').bind('click', function () {
              if (job_start === $(this).val()) {
                  $(this).removeAttr('checked');
                  job_start = '';
              } else {
                  job_start = $(this).val();
              }
          });
          $('input[name=operating_type]').bind('click', function () {
              if (operating_type === $(this).val()) {
                  $(this).removeAttr('checked');
                  operating_type = '';
              } else {
                  operating_type = $(this).val();
              }
          });
          $('#viewMemberTM').bind('click', function () {
              $('#memberTMList').on('show', function () {
                  $('#memberTMList').css('margin-left', '-45%');
              });
              $('#memberTMList').modal({
                  width: 800,
                  height: 1000,
                  remote: 'memberTM.list.php'
              });
          });
      });
      function eventqField() {
          $('.qField').bind('change', function () {
              var qField = $(this).val();
              var obj = $(this).parent().closest('div.row-search').find('.qStr');
              if (qField == 'NAME') {
                  eventSuggest(obj, 'getUserList');
              } else if (qField == 'EXPERTISE') {
                  eventSuggest(obj, 'getExpertiseList');
              } else if (qField == 'MAJOR') {
                  eventSuggest(obj, 'getMajorList');
              } else if (qField == 'INSTITUTION') {
                  obj.autocomplete("destroy");
                  obj.removeData('autocomplete');
              }
          });
      }
      function eventSuggest(obj, f) {
          obj.autocomplete({
              source: function (request, response) {
                  $.ajax({
                      url: "../include/getDataList.php",
                      type: "POST",
                      data: {
                          f: f,
                          limit: 10,
                          query: request.term
                      },
                      success: function (res) {
                          res = $.parseJSON(res);
                          response($.map(res, function (item) {
                              return {
                                  label: item.text,
                                  value: item.text,
                                  kid: item.id
                              }
                          }));
                      }
                  });
              },
              minLength: 1,
              select: function (event, ui) {
                  $(this).val(ui.item.label);
              },
              open: function () {
                  $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
              },
              close: function () {
                  $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
              }
          });
      }
      function initSearch() {
          var field_list = ['NAME', 'INSTITUTION', 'EXPERTISE', 'MAJOR'];
          var checkbox_list = ['JOINTM', 'PRIVATE_ORGANIZATION', 'COMMITTEE', 'OFFSITE', 'INTERCOOPERATION', 'AWARD', 'REFERENCE'];
          if (searchStr != '') {
              var search_list = searchStr.split("|#|");
              $i = 0;
              $(search_list).each(function (i, v) {
                  var search_row = v.split("#");
                  var field = search_row[1];
                  $obj = '';
                  if ($.inArray(field, field_list) >= 0) {
                      if ($i == 0) {
                          $obj = $('.row-search').first();
                          $i++;
                      } else {
                          $('#btn-addsearch').click();
                          $obj = $('.row-search').last();
                      }
                  }
                  if ($obj) {
                      $obj.find('.qStr').val(search_row[2]);
                      $obj.find('.qField option[value="' + search_row[1] + '"]').attr('selected', 'selected');
                      $obj.find('.qOperation option[value="' + search_row[0] + '"]').attr('selected', 'selected');
                      if (field == 'NAME') {
                          eventSuggest($obj.find('.qStr'), 'getUserList');
                      } else if (field == 'EXPERTISE') {
                          eventSuggest($obj.find('.qStr'), 'getExpertiseList');
                      } else if (field == 'MAJOR') {
                          eventSuggest($obj.find('.qStr'), 'getMajorList');
                      }
                  }
              });
          } else {
              eventSuggest($('input[name="qStr[]"]'), 'getExpertiseList');
          }
      }
      function delSearch(obj) {
          var msg_confirmDel = "คุณต้องการลบรายการ [x] ใช่หรือไม่";
          id = $(obj).data('id');
          qStr = $(obj).data('name');
          msg_confirm = msg_confirmDel.replace('[x]', '<span class="markDel">' + qStr + '</span>');
          $('#confirmDel .modal-body').html(msg_confirm);
          $('#confirmDel').data('id', id);
          $('#confirmDel').modal('show');
      }
      function eventButton() {
          $('.btn-delsearch').unbind();
          $('.btn-delsearch').bind('click', function () {
              $(this).parent().parent().remove();
          });
      }
      function eventConfirmDel() {
          $('#btn_yes').click(function () {
              var sid = $('#confirmDel').data('id');
              $('#confirmDel').modal('hide');
              submitDelSearch(sid);
          });
      }
      function eventSearch() {
          $('#form-search').on('submit', function () {
              var isEmpty = true;
              $('input[name="qStr[]"]').each(function (i, v) {
                  if ($.trim($(this).val()) != '') {
                      isEmpty = false;
                      return true;
                  }
              });
              if (isEmpty) {
                  alert('กรุณาระบุข้อมูลที่ต้องการค้นหา');
                  return false;
              } else {
                  search();
              }
              return true;
          });
      }
      function search() {
          var formData = new FormData($('#form-search')[0]);
          $.ajax({
              url: '../include/search.result.php',
              type: 'POST',
              data: formData,
              mimeType: "multipart/form-data",
              contentType: false,
              cache: false,
              processData: false,
              success: function (response) {
                  $("#box-result").html(response);
              },
              error: function (e) {
                  blockUI('error', 'error');
              }
          });
          return false;
      }
  </script>
<script>
	$(document).ready(function() {
		$('#searchTbl').DataTable( {
        	"scrollX": true,
			
			/*"processing": true,
			"serverSide": true,
			"ajax": "test.php"*/
		});
		
		$('#histTbl').DataTable( {
        	"scrollX": true,
			
			/*"processing": true,
			"serverSide": true,
			"ajax": "test.php"*/
		});
		
		$('#result-val').show();
		$('#history-val').hide();
	});

	$('#{{ $id }}').on('shown.bs.modal', function() {
		var table = $('#searchTbl').DataTable();
		table.columns.adjust().draw();
		
		var table2 = $('#histTbl').DataTable();
		table2.columns.adjust().draw();
		
		$('#{{ $id }}').data('bs.modal').handleUpdate();
	});
	
	$('#part-result').click(function() {
        $('#result-val').show();
		$('#history-val').hide();
		
		$('#part-result').addClass("active");
		$('#part-hist').removeClass("active");
		
		var table = $('#searchTbl').DataTable();
		table.columns.adjust().draw();
    });
	
	$('#part-hist').click(function() {
        $('#result-val').hide();
		$('#history-val').show();
		
		$('#part-result').removeClass("active");
		$('#part-hist').addClass("active");
		
		var table2 = $('#histTbl').DataTable();
		table2.columns.adjust().draw();
    });
	
</script>

<div id="{{ $id }}" class="modal fade" tabindex="-1" role="dialog" >
  <div class="modal-dialog" style=" width: 96%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
        <h4 id="modal_title" class="modal-title text-info"> <i class="fa fa-search fa-1x"></i> ค้นหานักวิจัย (ขั้นสูง) </h4>
      </div>
      <div class="modal-body row">
        <div class="col-sm-12">
          <form id="form-search" method="POST" onsubmit="return false" class="form-inline">
            <div class="form-group col-sm-12" >
              <div class="col-sm-9">
                <div style="margin-bottom:5px">
                  <div class="row-search" style="background:none;">
                    <div style="display:inline-block; ">
                      <select name="qOperation[]" class="qOperation form-control" style="display: none" 
                       style="width:60px; ">
                      <option value="AND">AND</option>
                      <option value="OR">OR</option>
                      <option value="NOT">NOT</option>
                      </select>
                    </div>
                    <div style="display:inline-block">
                      <input name="qStr[]" placeholder="คำค้น"
                        type="text" class="form-control qStr" 
                         style="width:250px" />
                    </div>
                    <div style="display:inline-block">
                      <select name="qField[]" class="qField form-control">
                        <option value="NAME">ชื่อ-สกุล</option>
                        <option value="EXPERTISE">ความเชี่ยวชาญเฉพาะด้าน</option>
                        <option value="MAJOR">สาขาวิชา</option>
                        <option value="INSTITUTION">สังกัดหน่วยงาน</option>
                      </select>
                    </div>
                    <div style="display:inline-block; margin-left:8px; padding-bottom:8px"> <a href="#" class="btn-delsearch"> <i class="fa fa-remove"></i> </a> </div>
                  </div>
                </div>
                
                <!--sub search-->
                <div id="box-subsearch" class="row-fluid box-search" 
                   style="margin-left:15px; background:none;"></div>
                
                <!--btn add search-->
                <div class="row box-search" style="margin-top: -5px; background:none;">
                  <div class="col-sm-10"> <a href="#" style="color: #009966; text-align:left" id="btn-addsearch"> <i class="fa fa-plus-square"></i> เพิ่มการค้นหา </a> </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div style="display:inline-block">
                  <button type="submit" id="btn-search" class="btn btn-success"> <i class="fa fa-search"></i> ค้นหา </button>
                </div>
                <div style="display:inline-block">
                  <button type="reset" id="btn-clear" class="btn btn-default"> ล้างเงื่อนไข </button>
                </div>
              </div>
            </div>
          </form>
          <div class="col-sm-12">
            <hr>
          </div>
          
          <!-- condition -->
          
            <div class="col-sm-4">
            	<div class="group-control">
                  <label class="control-label green-title">เงินเดือน</label>
                    <select class="form-control">
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
                
                  <div class="group-control">
              		<label class="control-label green-title">ระดับการศึกษา</label>
                    <select class="form-control">
                      <option value="0" selected >ปริญญาตรี</option>
                      <option value="1"  >ปริญญาโท</option>
                      <option value="2"  >ปริญญาเอก</option>
                    </select>
                  </div>
                  
                  <div class="group-control">
              		<label class="control-label green-title">ประสบการณ์ทำวิจัย</label>
                    <select class="form-control">
                      <option value="0" selected >0</option>
                      <option value="1"  >1</option>
                      <option value="2"  >2</option>
                      <option value="3"  >3</option>
                      <option value="4"  >4</option>
                      <option value=">= 5"  >มากกว่า 5</option>
                    </select>
                  </div>
                  
                  <div class="group-control">
              		<label class="control-label green-title"> ระยะเวลาที่ปฏิบัติงานได้อย่างน้อย (เดือน) </label>
                    <select class="form-control" name="operating_period">
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
            
            <div class="col-sm-4">
            	<div class="group-control">
              <label for="fname_en" class="control-label green-title"> 
              	เวลาที่เริ่มปฏิบัติงานได้ </label>
                  <div class="col-sm-12" style="padding-left:30px">
                  	<div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad4">
                       <label>ทันที</label>
					</div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad4">
                       <label>3 เดือน</label>
					</div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad4">
                       <label>6 เดือน</label>
					</div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad4">
                       <label>1 ป</label>
					</div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad4">
                       <label>2 ปี</label>
					</div>

                  </div>
               </div>
               
               <div class="group-control">
                  <label for="fname_en" class="control-label green-title"> 
                    รูปแบบในการปฏิบัติงาน </label>
                  <div class="col-sm-12" style="padding-left:30px">
                  	<div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad1">
                       <label>เต็มเวลา (Full-time)</label>
					</div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad1">
                       <label>ไม่เต็มเวลา (Part-time)</label>
					</div>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-4">
            	<div class="group-control">
                  <label for="fname_en" class="control-label green-title"> 
                  ภูมิภาคที่สามารถปฏิบัติงานได้ 
                    <span class="text-note">(ระบุได้มากกว่า 1 รายการ)</span> </label>
                  <div class="col-sm-12 label-normal" style="padding-left:30px">
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad2">
                       <label>กรุงเทพและปริมณฑล</label>
                    </div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad2">
                       <label>ภาคกลาง</label>
                    </div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad2">
                       <label>ภาคเหนือ</label>
                    </div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad2">
                       <label>ภาคใต้</label>
                    </div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad2">
                       <label>ภาคตะวันออก</label>
                    </div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad2">
                       <label>ภาคตะวันตก</label>
                    </div>
                    <div class="radio">
                       <input class="icheck" type="radio" checked="" name="rad2">
                       <label>ภาคตะวันออกเฉียงเหนือ</label>
                    </div>
                  </div>
              </div>
            
            	<div class="group-control">
                  <label class="control-label green-title"> คุณสมบัติอื่นๆ </label>
                  <div class="col-sm-12">
                    <label style="display: inline-block;" class="">
                      <input name="is_memberTM" type="checkbox" value="1" class="MEMBERTM">
                      สมาชิก Talent Mobility </label>
                    <label style="display: inline-block;" class=" ">
                      <input name="is_joinTM" type="checkbox" value="1" class="JOINTM">
                      สนใจโครงการ Talent Mobility </label>
                    <label style="display: inline-block;" class=" ">
                      <input name="is_privateOrg" type="checkbox" value="1" 
                      class="PRIVATE_ORGANIZATION">
                      เคยทำงานหรือร่วมงานกับบริษัทเอกชน </label>
                    <label style="display: inline-block;" class=" ">
                      <input name="is_committee" type="checkbox" value="1" class="COMMITTEE">
                      เคยเป็นสมาชิกหรือคณะกรรมการวิชาการ </label>
                    <label style="display: inline-block;" class=" ">
                      <input name="is_foreign" type="checkbox" value="1" class="INTERCOOPERATION">
                      เคยมีความร่วมมือกับต่างประเทศ </label>
                    <label style="display: inline-block;" class=" ">
                      <input name="is_award" type="checkbox" value="1" class="AWARD">
                      เคยได้รับรางวัล </label>
                    <label style="display: inline-block;" class=" ">
                      <input name="is_ref" type="checkbox" value="1" class="REFERENCE">
                      มีบุคคลอ้างอิง </label>
                  </div>
                 </div>
            </div>
          
          
          <!-- search result -->
          <!--<div class="row-fluid" id="box-result" style="margin-top: 20px;"></div>-->
          
          <!--<div class="col-sm-12 search-result-tab">
            <ul class="nav nav-tabs earch-result-tab">
              <li role="presentation" id="part-result" class="active"> 
              	<a href="#" class="first">ผลการค้นหา</a> 
              </li>
              <li role="presentation"  id="part-hist"  class=""> 
              	<a href="#">ประวัติการค้นหา</a> 
              </li>
            </ul>
          </div>

            <div id="result-val" class="col-sm-12 search-result table-responsive" align="left">
                <table id="searchTbl" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                  class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr>
                      <th width="3%">เลือก</th>
                      <th width="10%">ชื่อ-สกุล</th>
                      <th width="5%">ประสบการณ์</th>
                      <th width="19%">ความเชี่ยวชาญ</th>
                      <th width="10%">สาขาวิชา</th>
                      <th width="3%">อายุ</th>
                      <th width="10%">ภูมิภาคปฏิบัติงาน</th>
                      <th width="10%">กอง/ภาควิชา</th>
                      <th width="10%">กรม/คณะ</th>
                      <th width="10%">สังกัดหน่วยงาน</th>
                      <th width="5%">สนใจ TM</th>
                      <th width="5%">สมาชิก TM</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="3%" align="center"> <input type="checkbox" value=""/> </td>
                      <td width="15%">นายวิน สุรเชษฐพงษ์ Mr.win Surachetpong</td>
                      <td width="5%">>= 5</td>
                      <td width="19%">การพัฒนาวัคซีนในสัตว์น้ำ, 
                      การพัฒนาวิธีตรวจวินิจฉัยโรคในสัตว์,การทดสอบประสิทธิภาพของสารเสริมภูมิคุ้มกันในสัตว์</td>
                      <td width="10%"> - </td>
                      <td width="3%"> 39 </td>
                      <td width="10%"> กรุงเทพและปริมณฑล </td>
                      <td width="10%"> จุลชีววิทยาและวิทยาภูมิคุ้มกัน </td>
                      <td width="10%"> คณะสัตวแพทยศาสตร์ </td>
                      <td width="10%"> มหาวิทยาลัยเกษตรศาสตร์ </td>
                      <td width="5%"> สนใจ </td>
                      <td width="5%" align="center"> <i class="fa fa-check"></i> </td>
                    </tr>
                  </tbody>
                </table>
            </div>-->

          <!--
          <div id="history-val" class="col-sm-12 search-result" align="left">
            <table id="histTbl" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                  class="table table-striped table-bordered table-hover profileBox">
              <thead>
                <tr>
                  <th width="60%">เงื่อนไขในการค้นหา</th>
                  <th width="25%">จำนวนรายการที่พบ</th>
                  <th width="15%" >การจัดการ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="60%"> EXPERTISE(
                    <div class="green-inline">วัคซีน</div>
                    ) </td>
                  <td width="25%">พบ 2 รายการ</td>
                  <td width="15%" align="center">
                  	<a href="#" class="btn-resultSearch" title="แสดงผลการค้นหา"> 
                    	<i class="fa fa-search"></i> 
                    </a> 
                    <a href="#" class="btn-editSearch" title="แก้ไขคำค้น"> 
                    	<i class="fa fa-edit"></i> 
                    </a> 
                    <a href="#" class="btn-delSearchHistory" 
                       	 itle="ลบรายการค้นหา"> 
                         <i class="fa fa-remove"></i> 
                    </a>
                  </td>
                </tr>
                <tr>
                  <td width="60%"> EXPERTISE(
                    <div class="green-inline">โปรแกรมเมอร์</div>
                    ) AND 
                    MAJOR(
                    <div class="green-inline">วิทยาการคอมพิวเตอร์</div>
                    ) </td>
                  <td width="25%">พบ 2 รายการ</td>
                  <td width="15%" align="center">
                  	<a href="#" class="btn-resultSearch" title="แสดงผลการค้นหา"> 
                    	<i class="fa fa-search"></i> 
                    </a> 
                    <a href="#" class="btn-editSearch" title="แก้ไขคำค้น"> 
                    	<i class="fa fa-edit"></i> 
                    </a> 
                    <a href="#" class="btn-delSearchHistory" 
                       	 itle="ลบรายการค้นหา"> 
                        <i class="fa fa-remove"></i> 
                    </a>
                   </td>
                </tr>
              </tbody>
            </table>
            
          </div>
          -->
          
          
          <div class="tab-wrapper tab-primary col-sm-12">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#home1" data-toggle="tab">ผลการค้นหา</a> </li>
            <li><a href="#profile1" data-toggle="tab">ประวัติการค้นหา</a> </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="home1">
              
              <div class="table-responsive" style="min-height:250px">
                <table id="searchTbl" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                  class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr>
                      <th width="3%">เลือก</th>
                      <th width="10%">ชื่อ-สกุล</th>
                      <th width="5%">ประสบการณ์</th>
                      <th width="19%">ความเชี่ยวชาญ</th>
                      <th width="10%">สาขาวิชา</th>
                      <th width="3%">อายุ</th>
                      <th width="10%">ภูมิภาคปฏิบัติงาน</th>
                      <th width="10%">กอง/ภาควิชา</th>
                      <th width="10%">กรม/คณะ</th>
                      <th width="10%">สังกัดหน่วยงาน</th>
                      <th width="5%">สนใจ TM</th>
                      <th width="5%">สมาชิก TM</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="3%" align="center"> <input type="checkbox" value=""/> </td>
                      <td width="15%">นายวิน สุรเชษฐพงษ์ Mr.win Surachetpong</td>
                      <td width="5%">>= 5</td>
                      <td width="19%">การพัฒนาวัคซีนในสัตว์น้ำ, 
                      การพัฒนาวิธีตรวจวินิจฉัยโรคในสัตว์,การทดสอบประสิทธิภาพของสารเสริมภูมิคุ้มกันในสัตว์</td>
                      <td width="10%"> - </td>
                      <td width="3%"> 39 </td>
                      <td width="10%"> กรุงเทพและปริมณฑล </td>
                      <td width="10%"> จุลชีววิทยาและวิทยาภูมิคุ้มกัน </td>
                      <td width="10%"> คณะสัตวแพทยศาสตร์ </td>
                      <td width="10%"> มหาวิทยาลัยเกษตรศาสตร์ </td>
                      <td width="5%"> สนใจ </td>
                      <td width="5%" align="center"> <i class="fa fa-check"></i> </td>
                    </tr>
                  </tbody>
                </table>
      			</div>
              
              
            </div>
            <div class="tab-pane" id="profile1">
              
              <div class="table-responsive">
              	<table id="histTbl" width="inherit" border="0" cellspacing="0" cellpadding="0" 
                  class="table table-striped table-bordered table-hover profileBox">
              <thead>
                <tr>
                  <th width="60%">เงื่อนไขในการค้นหา</th>
                  <th width="25%">จำนวนรายการที่พบ</th>
                  <th width="15%" >การจัดการ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="60%"> EXPERTISE(
                    <div class="green-inline">วัคซีน</div>
                    ) </td>
                  <td width="25%">พบ 2 รายการ</td>
                  <td width="15%" align="center">
                  	<a href="#" class="btn-resultSearch" title="แสดงผลการค้นหา"> 
                    	<i class="fa fa-search"></i> 
                    </a> 
                    <a href="#" class="btn-editSearch" title="แก้ไขคำค้น"> 
                    	<i class="fa fa-edit"></i> 
                    </a> 
                    <a href="#" class="btn-delSearchHistory" 
                       	 itle="ลบรายการค้นหา"> 
                         <i class="fa fa-remove"></i> 
                    </a>
                  </td>
                </tr>
                <tr>
                  <td width="60%"> EXPERTISE(
                    <div class="green-inline">โปรแกรมเมอร์</div>
                    ) AND 
                    MAJOR(
                    <div class="green-inline">วิทยาการคอมพิวเตอร์</div>
                    ) </td>
                  <td width="25%">พบ 2 รายการ</td>
                  <td width="15%" align="center">
                  	<a href="#" class="btn-resultSearch" title="แสดงผลการค้นหา"> 
                    	<i class="fa fa-search"></i> 
                    </a> 
                    <a href="#" class="btn-editSearch" title="แก้ไขคำค้น"> 
                    	<i class="fa fa-edit"></i> 
                    </a> 
                    <a href="#" class="btn-delSearchHistory" 
                       	 itle="ลบรายการค้นหา"> 
                        <i class="fa fa-remove"></i> 
                    </a>
                   </td>
                </tr>
              </tbody>
            </table>
              </div>
              
            </div>
          </div>
		</div>
          
        </div>
      </div>
      <div class="modal-footer" style="background-color:#FFFFFF">
        <div class="form-group col-sm-12" align="center">
          <button id="btnAbort" class="btn btn-default"> 
          	เพิ่มนักวิจัย
          </button>
          <a href="#" id="btnCancel" data-dismiss="modal" 
                   aria-hidden="true" class="btn btn-default center"> ยกเลิก </a> 
        </div>
      </div>
    </div>
  </div>
</div>
