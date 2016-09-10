		<script>
            $(document).ready(function(){
                appendModal("{{ url('clearinghouse/companyinfo-modal') }}", "form_editCompany");
                appendModal("{{ url('clearinghouse/companydelete-modal') }}", "confirmDelCom");
            });
        </script>

		  <script>
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
			
			
			$('#process-tab').click(function(e) {
				e.preventDefault();
				var table = $('#waitingCompany').DataTable();
				table.columns.adjust().draw();
			});

			$('#finished-tab').click(function(e) {
				e.preventDefault();
				var table = $('#approvedCompany').DataTable();
				table.columns.adjust().draw();
			});

			$('#canceled-tab').click(function(e) {
				e.preventDefault();
				var table = $('#canceledProjectData').DataTable();
				table.columns.adjust().draw();
			});
			
			$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				var target = $(e.target).attr("href");
				e.preventDefault();

				if(target == "#htab1"){
					var table = $('#waitingCompany').DataTable();
				 	table.columns.adjust().draw();
				}
				else if(target == "#htab2"){
				 	var table = $('#approvedCompany').DataTable();
				 	table.columns.adjust().draw();
				}
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

			/* to update the table, you need to edit the following */
			$('#waitingCompany').DataTable( {
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

			$('#approvedCompany').DataTable( {
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

		  </script>

          <div class="row" style="padding:5px">
            <div id="MyWizard" class="wizard" style="margin-bottom:5px;">
                <ul class="steps">
					<li data-target="#step1" class="active">
                    	<a href="#">อนุมัติการลงทะเบียนบริษัท</a><span class="chevron"></span><span class="chevron"></span>
					</li>
				</ul>

                
			</div>


            <div class="row-fluid">
              <div class="tab-wrapper tab-default">

                <a href="#" class="nav-tabs-dropdown btn btn-block btn-default">Tabs</a>
                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                  <li class="active"><a id="process-tab"
                  href="#htab1" data-toggle="tab">รายชื่อบริษัทที่รอการอนุมัติ</a></li>
                  <li><a href="#htab2" data-toggle="tab">รายชื่อบริษัทที่ได้รับการอนุมัติแล้ว</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="htab1">
                        <table id="waitingCompany" class="table table-striped table-bordered"
                  width="inherit" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="width: 40%">บริษัท</th>
                            <th style="width: 20%" class="text-center">จัดตั้งที่</th>
                            <th style="width: 15%" class="text-center">ผู้ติดต่อ</th>
                            <th style="width: 15%" class="text-center">วันที่สมัคร</th>
                            <th style="width: 5%" class="text-center">อนุมัติ</th>
                            <th style="width: 5%" class="text-center">ลบ</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="link link-company title" 
                            onclick="editCompany()" title="แก้ไขข้อมูล">Western Digital Technologies, Inc</td>
                            <td>151 ถนนรามอินทรา</td>
                            <td>วรนุช วงค์เทวา</td>
                            <td>12/08/2559</td>
                            <td class="text-center">
                            	<input class="icheck" type="checkbox" name="check1"></td>
							<td><a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delCompany(this)"
                                data-name="Western Digital Technologies, Inc"
                      			data-id="6" title="ลบรายการข้อมูล" >
                                    <i class="fa fa-remove"></i>
                                </a></td>
                            	
                          </tr>
                          <tr>
                            <td class="link link-company title" 
                            onclick="editCompany()" title="แก้ไขข้อมูล">บริษัท ปูนซีเมนต์ไทย จำกัด (มหาชน)</td>
                            <td>151 ถนนรามอินทรา</td>
                            <td>วรนุช วงค์เทวา</td>
                            <td>12/08/2559</td>
                            <td class="text-center">
                            	<input class="icheck" type="checkbox" name="check1"></td>
							<td><a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delCompany(this)"
                                data-name="บริษัท ปูนซีเมนต์ไทย จำกัด (มหาชน)"
                      			data-id="7" title="ลบรายการข้อมูล" >
                                    <i class="fa fa-remove"></i>
                                </a></td>
                            	
                          </tr>
                          <tr>
                            <td class="link link-company title" 
                            onclick="editCompany()" title="แก้ไขข้อมูล">บริษัทสกายไลน์ จำกัด</td>
                            <td>151 ถนนรามอินทรา</td>
                            <td>วรนุช วงค์เทวา</td>
                            <td>12/08/2559</td>
                            <td class="text-center">
                            	<input class="icheck" type="checkbox" name="check1"></td>
							<td><a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delCompany(this)"
                                data-name="บริษัทสกายไลน์ จำกัด"
                      			data-id="8" title="ลบรายการข้อมูล" >
                                    <i class="fa fa-remove"></i>
                                </a></td>
                            	
                          </tr>
                        </tbody>
                      </table>
                  </div>

                    <!-- tab #2 -->
                    <div role="tabpanel" class="tab-pane fade" id="htab2">
                        <table id="approvedCompany" class="table table-striped table-bordered"
                  width="inherit" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="width: 40%">บริษัท</th>
                            <th style="width: 20%" class="text-center">จัดตั้งที่</th>
                            <th style="width: 20%" class="text-center">ผู้ติดต่อ</th>
                            <th style="width: 15%" class="text-center">วันที่สมัคร</th>
                            <th style="width: 5%" class="text-center">ลบ</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="link link-company title" 
                            onclick="editCompany()" title="แก้ไขข้อมูล">Western Digital Technologies, Inc</td>
                            <td>151 ถนนรามอินทรา</td>
                            <td>วรนุช วงค์เทวา</td>
                            <td>12/08/2559</td>
							<td><a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delCompany(this)"
                                data-name="Western Digital Technologies, Inc"
                      			data-id="6" title="ลบรายการข้อมูล" >
                                    <i class="fa fa-remove"></i>
                                </a></td>
                            	
                          </tr>
                          <tr>
                            <td class="link link-company title" 
                            onclick="editCompany()" title="แก้ไขข้อมูล">บริษัท ปูนซีเมนต์ไทย จำกัด (มหาชน)</td>
                            <td>151 ถนนรามอินทรา</td>
                            <td>วรนุช วงค์เทวา</td>
                            <td>12/08/2559</td>
							<td><a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delCompany(this)"
                                data-name="บริษัท ปูนซีเมนต์ไทย จำกัด (มหาชน)"
                      			data-id="7" title="ลบรายการข้อมูล" >
                                    <i class="fa fa-remove"></i>
                                </a></td>
                            	
                          </tr>
                          <tr>
                            <td class="link link-company title" 
                            onclick="editCompany()" title="แก้ไขข้อมูล">บริษัทสกายไลน์ จำกัด</td>
                            <td>151 ถนนรามอินทรา</td>
                            <td>วรนุช วงค์เทวา</td>
                            <td>12/08/2559</td>
							<td><a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delCompany(this)"
                                data-name="บริษัทสกายไลน์ จำกัด"
                      			data-id="8" title="ลบรายการข้อมูล" >
                                    <i class="fa fa-remove"></i>
                                </a></td>
                            	
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  
                    <div role="tabpanel" class="tab-pane fade in" id="htab3">
                        <h3>Tab 3</h3>
                    </div>
                </div>
              </div>

            </div>

            <div class="row-fluid">
            	<a class="btn btn-default pull-left btn-addFormList"
                 id="btn-addcompany" onclick="editCompany('')" style="margin-right:5px">
                  <i class="fa fa-plus-circle"></i> เพิ่มรายชื่อบริษัท
                </a>
          	</div>

            


        </div>




