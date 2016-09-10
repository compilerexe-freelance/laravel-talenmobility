    <script>
			$(document).ready(function(){
				appendModal("{{ url('clearinghouse/companyinfo-modal') }}", "form_editCompany");
				appendModal("{{ url('clearinghouse/companydelete-modal') }}", "confirmDelCom");
				appendModal("{{ url('clearinghouse/project-status') }}", "projectStatus");
			});
		</script>

		<script>
			$(document).ready(function() {
				/* to update the table, you need to edit the following */
				$('#projectData').DataTable( {
					"scrollX": true,
					"oLanguage": {
						"sProcessing": "กำลังดำเนินการ...",
						"sLengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
						"sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
						"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
						"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
						"sInfoFiltered": "(จากรายการทั้งหมด _MAX_ รายการ)",
						"sSearch": "ค้นหา: ",
						"oPaginate": {
								"sFirst": "เริ่มต้น",
								"sPrevious": "ก่อนหน้า",
								"sNext": "ถัดไป",
								"sLast": "สุดท้าย"}
                    }
					/*"processing": true,
					"serverSide": true,
					"ajax": "test.php"*/
				});
			});
		 </script>

         <script>
			var msg_confirmDel = "คุณต้องการลบรายการ [x] ใช่หรือไม่ <br/>หากลบรายการงานภายใต้บริษัทจะถูกลบด้วย";

			function updatePriority(obj) {
				if($(obj).children("i").hasClass('fa-orange')){
					$(obj).children("i").removeClass('fa-orange');
				}
				else{
					$(obj).children("i").addClass('fa-orange');
				}
			}
			function eventConfirmDel() {
				$('#btn_yes').click(function () {
					var cid = $('#confirmDelCom').data('id');
					$('#confirmDelCom').modal('hide');
					submitDelCompany(cid);
				});
			}

			function delCompany(obj) {
				id = $(obj).data('id');
				company = $(obj).data('name');
				msg_confirm = msg_confirmDel.replace('[x]',
				 '<span class="markDel">' + company + '</span>');

				$('#confirmDelCom .modal-body').html(msg_confirm);
				$('#confirmDelCom').data('id', id);
				$('#confirmDelCom').modal('show');
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

        <style>
			.fa-orange {
			  color:#CF5B00;
			}

			.hand-pointer{
				cursor: pointer;
			}
		</style>

        <div class="row" style="padding:5px">
          <!--<div id="nav-menu" class="breadcrumb">
            <li class="active">รายชื่อบริษัท</li>-->

            <div id="MyWizard" class="wizard" style="margin-bottom:15px;">
                <ul class="steps">
					<li data-target="#step1" class="active">
                    	รายชื่อบริษัท<span class="chevron"></span>
					</li>
				</ul>
			</div>

          <!--</div>-->
          <div class="row-fluid">
            <table id="projectData" class="table table-striped table-bordered"
             width="inherit" cellspacing="0">
              <thead>
                <tr>
                  <th style="width: 35%">บริษัท</th>
                  <th style="width: 15%" class="text-center">จำนวนโครงการ</th>
                  <th style="width: 10%" class="text-center">P1</th>
                  <th style="width: 15%" class="text-center">P2-P4</th>
                  <th style="width: 10%" class="text-center">P5</th>
                  <th style="width: 10%;" class="text-center">ความสำคัญ</th>
                  <th style="width: 5%" class="text-center">ลบ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="link link-company title" id="link-company6"
                   onclick="editCompany('6')" title="แก้ไขข้อมูล">
                     Western Digital Technologies, Inc
                  </td>

                  <td class="text-center greenlink">
                  	<a href="#" onclick="openProj('6')" title="ดูรายละเอียดโครงการ">19</a>
                  </td>
                  <td class="text-center">0</td>
                  <td class="text-center">8</td>
                  <td class="text-center">11</td>
                  <td class="text-center" data-order="0" data-sort="0">
                   <div  onclick="updatePriority(this)">
                     <i class="fa fa-star hand-pointer"></i>
                   </div>
                  </td>
                  <td class="text-center">
                    <a class="btn btn-danger btn-deldata btn-xs no_bot_margin" onclick="delCompany(this)"
                     data-name="Western Digital Technologies, Inc"
                     data-id="6" title="ลบรายการข้อมูล" >
                       <i class="fa fa-remove"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="link link-company title" id="link-company7"
                   onclick="editCompany('7')" title="แก้ไขข้อมูล">
                    บริษัท ปูนซีเมนต์ไทย จำกัด (มหาชน)
                  </td>

                  <td class="text-center greenlink">
                  	<a href="#" onclick="openProj('6')" title="ดูรายละเอียดโครงการ">9</a>
                  </td>
                  <td class="text-center">0</td>
                  <td class="text-center">1</td>
                  <td class="text-center">10</td>
                  <td class="text-center" data-order="0" data-sort="0">
                    <div  onclick="updatePriority(this)">
                     <i class="fa fa-star hand-pointer"></i>
                   </div>
                  </td>
                  <td class="text-center">
                      <a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                       onclick="delCompany(this)"
                       data-name="บริษัท ปูนซีเมนต์ไทย จำกัด (มหาชน)"
                       data-id="7" title="ลบรายการข้อมูล">
                         <i class="fa fa-remove"></i>
                      </a>
                  </td>
                </tr>
                <tr>
                  <td class="link link-company title" id="link-company8"
                   onclick="editCompany('8')" title="แก้ไขข้อมูล">
                     บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด
                  </td>
                  <!--<td class="text-center">Staff CE</td>-->
                  <td class="text-center greenlink">
                  	<a href="#" onclick="openProj('6')" title="ดูรายละเอียดโครงการ">15</a>
                  </td>
                  <td class="text-center">0</td>
                  <td class="text-center">6</td>
                  <td class="text-center">9</td>
                  <td class="text-center" data-order="1" data-sort="1">
                    <div  onclick="updatePriority(this)">
                     <i class="fa fa-star hand-pointer"></i>
                   </div>
                  </td>
                  <td class="text-center">
                   <a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                   onclick="delCompany(this)"
                   data-name="บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด"
                   data-id="8" title="ลบรายการข้อมูล">
                     <i class="fa fa-remove"></i>
                   </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="row-fluid">
            <a class="btn btn-default pull-left btn-addFormList"
             id="btn-addcompany" onclick="editCompany('')" style="margin-right:5px">
              <i class="fa fa-plus-circle"></i> เพิ่มรายชื่อบริษัท
            </a>
          </div>



      </div>
