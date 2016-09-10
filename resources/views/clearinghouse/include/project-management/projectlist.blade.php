      <script>
  			$(document).ready(function() {
          		appendModal("{{ url('clearinghouse/projectinfo-modal') }}", "addProjectModal");
				appendModal("{{ url('clearinghouse/projectdelete-modal') }}", "projectDelModal");
  			});


		  </script>

		  <script>
		    function delProject(obj) {
				var project = $(obj).data('name');
				$('#projectDelModal .modal-body').html('คุณต้องการลบโครงการ "'+project+'" ใช่หรือไม่');
				$('#projectDelModal').modal('show');
			}

			function addProject(obj){
				$('#addProjectModal').modal('show');
			}

			$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				var target = $(e.target).attr("href");
				e.preventDefault();

				if(target == "#htab1"){
					var table = $('#processingProjectData').DataTable();
				 	table.columns.adjust().draw();
				}
				else if(target == "#htab2"){
				 	var table = $('#finishedProjectData').DataTable();
				 	table.columns.adjust().draw();
				}
				else if(target == "#htab3"){
				 	var table = $('#canceledProjectData').DataTable();
				 	table.columns.adjust().draw();
				}
			});

			$('#process-tab').click(function(e) {
				e.preventDefault();
				var table = $('#processingProjectData').DataTable();
				table.columns.adjust().draw();

			});

			$('#finished-tab').click(function(e) {
				e.preventDefault();
				var table = $('#finishedProjectData').DataTable();
				table.columns.adjust().draw();
			});

			$('#canceled-tab').click(function(e) {
				e.preventDefault();
				var table = $('#canceledProjectData').DataTable();
				table.columns.adjust().draw();
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
			$('#processingProjectData').DataTable( {
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

			$('#finishedProjectData').DataTable( {
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

			$('#canceledProjectData').DataTable( {
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
					<li data-target="#step1">
                    	<a href="#" onClick="showCompanyList()">รายชื่อบริษัท</a><span class="chevron"></span>
					</li>
					<li data-target="#step2" class="active">
                    	รายชื่อโครงการ<span class="chevron"></span>
					</li>
				</ul>

                <div class="actions" style="padding:0px; display:inline-block">
                    <div class="panel panel-solid-primary panel-style1">
                        <div class="panel-body panel-title">
                            บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด
                        </div>
                    </div>
				</div>
			</div>


            <div class="row-fluid">
              <div class="tab-wrapper tab-default">

                <a href="#" class="nav-tabs-dropdown btn btn-block btn-default">Tabs</a>
                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                  <li class="active"><a id="process-tab"
                  href="#htab1" data-toggle="tab">โครงการที่กำลังดำเนินการ</a></li>
                  <li><a href="#htab2" data-toggle="tab">โครงการที่สิ้นสุดแล้ว</a></li>
                  <li><a href="#htab3" data-toggle="tab">โครงการที่ถูกยกเลิก</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="htab1">
                        <table id="processingProjectData" class="table table-striped table-bordered"
                  width="inherit" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="width: 70%">รายชื่อโครงการ</th>
                            <th style="width: 20%" class="text-center">สถานะ</th>
                            <th style="width: 10%" class="text-center">ลบ</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="link link-company title" id="link-proj1"
                            onclick="openProj('8', '1')" title="แก้ไขข้อมูล">โครงการ 1</td>
                            <td class="text-center link-job btn-editdata link-td greenlink"
                             onclick="openProj_basicinfo_tab('8')">
                               <a href="#">P1</a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delProject(this)" data-name="โครงการ 1"
                                data-id="" title="ลบรายการข้อมูล">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                          </tr>
                          <tr>
                            <td class="link link-company title" id="link-proj2"
                            onclick="openProj('8', '2')" title="แก้ไขข้อมูล">โครงการ 2</td>
                            <td class="text-center link-job btn-editdata link-td greenlink"
                             onclick="openProj_basicinfo_tab('8')">
                               <a href="#">P2</a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delProject(this)" data-name="โครงการ 2"
                                data-id="" title="ลบรายการข้อมูล">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                          </tr>
                          <tr>
                            <td class="link link-company title"
                            id="link-proj3" onclick="openProj('8', '3')"
                            title="แก้ไขข้อมูล">
                                โครงการ 3
                            </td>
                            <td class="text-center link-job btn-editdata link-td greenlink"
                             onclick="openProj_basicinfo_tab('8')">
                               <a href="#">P2</a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger btn-deldata btn-xs no_bot_margin"
                                onclick="delProject(this)" data-name="โครงการ 3"
                                data-id="" title="ลบรายการข้อมูล">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <!-- tab #2 -->
                    <div role="tabpanel" class="tab-pane fade" id="htab2">
                        <table id="finishedProjectData" class="table table-striped table-bordered"
                  width="inherit" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="width: 70%">รายชื่อโครงการ</th>
                            <th style="width: 30%" class="text-center">สถานะ</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="link link-company title"
                            onclick="openProj('8', '1')" title="แก้ไขข้อมูล">โครงการ 4</td>
                            <td class="text-center link-job btn-editdata link-td greenlink"
                             onclick="openProj_basicinfo_tab('8')">
                               <a href="#">P5</a>
                            </td>
                          </tr>
                          <tr>
                            <td class="link link-company title"
                            onclick="openProj('8', '2')" title="แก้ไขข้อมูล">โครงการ 5</td>
                            <td class="text-center link-job btn-editdata link-td greenlink"
                             onclick="openProj_basicinfo_tab('8')">
                               <a href="#">P5</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <!-- tab #3 -->
                    <div role="tabpanel" class="tab-pane fade" id="htab3">
                        <table id="canceledProjectData" class="table table-striped table-bordered"
                  width="inherit" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="width: 70%">รายชื่อโครงการ</th>
                            <th style="width: 30%" class="text-center">สถานะ</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="link link-company title"
                            onclick="openProj('8', '1')" title="แก้ไขข้อมูล">โครงการ 6</td>
                            <td class="text-center link-job btn-editdata link-td greenlink"
                             onclick="openProj_basicinfo_tab('8')">
                               <a href="#">P6</a>
                            </td>
                          </tr>
                          <tr>
                            <td class="link link-company title"
                            onclick="openProj('8', '2')" title="แก้ไขข้อมูล">โครงการ 7</td>
                            <td class="text-center link-job btn-editdata link-td greenlink"
                             onclick="openProj_basicinfo_tab('8')">
                               <a href="#">P6</a>
                            </td>
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
             	id="btn-addproject" onclick="addProject('')" style="margin-right:5px">
              		<i class="fa fa-plus-circle"></i> เพิ่มโครงการ
            	</a>
          	</div>

            <div class="row-fluid" style="margin: 5px 0px;color: green">
                สถานะ ( P1:ความต้องการบริษัท/จับคู่,
                P2:ทําข้อเสนอ/คณะอนุ,
                P3:ทําสัญญา,
                P4:ดําเนินโครงการ/ประเมิน,
                P5:สิ้นสุดโครงการ )
            </div>


        </div>




