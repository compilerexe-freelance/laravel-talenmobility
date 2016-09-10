<?php
	$institutes = DB::table('researcher_institutions')->get();
?>
<script>
	$(document).ready(function() {
		$('#confirmModal').appendTo("body");

		/* to update the table, you need to edit the following */
		$('#instDatatable').DataTable({
			"scrollX": true,
			/*"oLanguage": {
				"sProcessing": "กำลังดำเนินการ...",
				"sLengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
				"sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
				"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
				"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
				"sInfoFiltered": "(จากรายการทั้งหมด _MAX_ รายการ)",
				"sSearch": "ค้นหา :",
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

	$(document).on("click", "#instDatatable tbody", function() {
		$('#confirmModal').modal('show');
	});

	function clearSection(value) {
		$('#box_pri-organization').attr('style', 'display: none');
		$('#box_university').attr('style', 'display: none');
		$('#box_school').attr('style', 'display: none');
		$('#box_gov-organization').attr('style', 'display: none');
		if (value == 'pri-organization') {
			$('#box_pri-organization').removeAttr('style');
		}
		if (value == 'university') {
			$('#box_university').removeAttr('style');
		}
		if (value == 'school') {
			$('#box_school').removeAttr('style');
		}
		if (value == 'gov-organization') {
			$('#box_gov-organization').removeAttr('style');
		}
	}

	<!-- this will be executed when it is clicked -->


	$(document).on("click", "#instAdd", function() {
		//$('#basicModal').appendTo("body")

		if ($('#confirmModal option').length <= 0) {
			sel_arr = [{
				'id': 'university',
				'value': "มหาวิทยาลัย"
			}, {
				'id': 'school',
				'value': "โรงเรียน/วัด/ชุมชน"
			}, {
				'id': 'gov-organization',
				'value': "องค์กรภาครัฐ/รัฐวิสาหกิจ"
			}, {
				'id': 'pri-organization',
				'value': "องค์กรภาคเอกชน"
			}, {
				'id': 'researcher',
				'value': "นักวิจัยอิสระ"
			}];

			$.each(sel_arr, function(key, val) {
				$("#institution_type")
					.append($("<option></option>")
						.attr("value", val['id'])
						.text(val['value']));
			});
		}

		$('#confirmModal').modal('show');
	});

	$(document).on("change", "#institution_type", function() {
		var optionSelected = $(this).find("option:selected");
		var valueSelected = optionSelected.val();
		clearSection(valueSelected);
	});
</script>

<div class="panel panel-default">
	<div class="panel-body">
		<table id="instDatatable" width="inherit" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover profileBox">
			<thead>
				<tr>
					<th width="25%">สังกัด</th>
					<th width="50%">รายละเอียด</th>
					<th width="25%">แก้ไขล่าสุด</th>
				</tr>

			</thead>
			<tbody>
				<!-- <tr>
					<td width="25%">นักวิจัยอิสระ</td>
					<td width="50%">-</td>
					<td width="25%">01 ส.ค. 2559 20:10:32</td>
				</tr> -->
				@foreach ($institutes as $institute)
					<tr>
						@if ($institute->university_name != null)
							<td>{{ $institute->university_name }}</td>
						@elseif ($institute->place_name != null)
							<td>{{ $institute->place_name }}</td>
						@elseif ($institute->ministry_name != null)
							<td>{{ $institute->ministry_name }}</td>
						@endif
					</tr>
				@endforeach
			</tbody>
			<tfoot>
			</tfoot>
		</table>
	</div>
</div>
<div class="col-sm-12">
	<button id="instAdd" type="button" class="btn btn-sm btn-success" data-toggle="modal">
           	+ เพิ่มข้อมูล
          </button>
	<span class="msgNote"> ( ต้องระบุอย่างน้อย 1 รายการ ) </span>
</div>

<div id="confirmModal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form class="form-horizontal" method="post" action="{{ url('/researcher_insert_institute') }}">
				{{ csrf_field() }}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
					<h4 id="modal_title" class="modal-title text-info">
                      <i class="fa fa-university fa-2x"></i> ข้อมูลสังกัด
                    </h4>
				</div>
				<div class="modal-body">
					<div class="form-group col-lg-12">
						<div class="msgBox hide" id="msgBox"></div>
					</div>
					<div id="msgDatas"></div>
					<div class="form-group">
						<label for="subject" class="col-sm-4 control-label">สังกัด</label>
						<div class="col-sm-5">
							<select id="institution_type" name="institution_type" class="form-control col-sm-3">
                          </select>
						</div>
					</div>
					<div id="box_university">
						<div class="form-group">
							<label for="university" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>มหาวิทยาลัย (หรือเทียบเท่า)
                          </label>
							<div class="col-sm-5">
								<input type="text" id="university" name="university" class="form-control university" value="" />
							</div>
						</div>
						<div class="form-group">
							<label for="faculty_u" class="col-sm-4 control-label">
                            คณะ (หรือเทียบเท่า)
                          </label>
							<div class="col-sm-5">
								<input id="faculty" class="form-control faculty" name="faculty" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label for="subject" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>ภาควิชา (หรือเทียบเท่า)
                          </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="subject" name="subject" />
							</div>
						</div>
					</div>
					<div id="box_school" class="form-group" style="display: none">
						<label for="fillin" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>ระบุ
                        </label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="school" id="school" />
						</div>
					</div>
					<div id="box_gov-organization" style="display: none">
						<div class="form-group">
							<label for="ministry" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>กระทรวง (หรือเทียบเท่า)
                          </label>
							<div class="col-sm-6">
								<input id="department" name="department" class="form-control department" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label for="unit" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>กรม (หรือเทียบเท่า)
                          </label>
							<div class="col-sm-6">
								<input id="unit" name="unit" class="form-control unit" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label for="lab" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>กอง (หรือเทียบเท่า)
                          </label>
							<div class="col-sm-6">
								<input type="text" name="lab" id="lab" class="form-control lab" />
							</div>
						</div>
					</div>
					<div id="box_pri-organization" style="display: none">
						<div class="form-group">
							<label for="fillin" class="col-sm-4 control-label">
                            <sup><span class="red-color fa fa-asterisk"></span></sup>ระบุ
                          </label>
							<div class="col-sm-6">
								<input id="pri-organization" name="pri_organization" class="typeahead form-control priorganization" type="text" />
							</div>
						</div>
					</div>
					<input type="hidden" name="id" id="id" value="" />
					<div class="form-group has-warning">
						<div class="col-sm-4 col-sm-offset-4">
							<p class="text-danger">(* จำเป็นต้องกรอกข้อมูล)</p>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<div class="form-group" align="center">
						<button id="btnYes" class="btn btn-success" type="submit">
                        <i class="fa fa-save"></i> บันทึก
                      </button>
						<a href="#" id="btnCancel" data-dismiss="modal" aria-hidden="true" class="btn btn-default center">
							<i class="fa fa-remove"></i> ยกเลิก
						</a>
						<div class="col-sm-3 pull-right">
							<button id="btnDelete" class="btn btn-danger" title="ลบรายการนี้" alt="ลบรายการนี้">
                           <i class="fa fa-trash"></i>
                         </button>
						</div>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>
