<?php
$myInfo = DB::table('researcher_profiles')->where('id', 1)->first();
$myTitle = DB::table('name_titles')->where('id', $myInfo->name_title_id)->first();

$abbr_ths = DB::table('name_titles')->groupBy('abbr_th')->get();

$state_title_name = 0;
$state_academic_position = 0;

?>

	<script>
		//$("#titlename_combos").addClass('hide');
		$("#titlename_combos").hide();

		$('input[name="titlename_type"]').click(function(e) {

			//$("#titlename_combo").hide();
			if ($(this).val() == 'oth') {
				//$('#titlename_combos').hide();
				$("#titlename_combos").show();
			} else {
				//$('#titlename_combos').addClass('hide');
				$("#titlename_combos").hide();
			}
		});

		$('input[name="academicpos_type"]').click(function(e) {
			$('#academicpos_text').hide();
			$('#academicpos_text').val('');
			if ($(this).val() == 'oth') {
				$('#academicpos_text').show();
			}
		});
	</script>

	<div class="well">

		<form class="form-horizontal form-border" method="post" action="{{ url('/researcher_save_info') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="col-sm-3 control-label">
				<sup><span class="red-color fa fa-asterisk"></span></sup>คำนำหน้าชื่อ</label>
				<div class="col-sm-9">
					<label class="radio-inline">
						@if ($myTitle->id == 284)
							<?php $state_title_name = 1; ?>
							<input type="radio" name="titlename_type" value="284" required="" checked/>
						@else
							<input type="radio" name="titlename_type" value="284" required=""/>
						@endif
						นาย
					</label>
					<label class="radio-inline">
						@if ($myTitle->id == 285)
							<?php $state_title_name = 1; ?>
							<input type="radio" name="titlename_type" value="285" checked />
						@else
							<input type="radio" name="titlename_type" value="285" />
						@endif
							นาง
					</label>
					<label class="radio-inline">
						@if ($myTitle->id == 286)
							<?php $state_title_name = 1; ?>
							<input type="radio" name="titlename_type" value="286" checked />
						@else
							<input type="radio" name="titlename_type" value="286" />
						@endif
							นางสาว
					</label>
					<label class="radio-inline">
						@if ($myTitle->id == 287)
							<?php $state_title_name = 1; ?>
							<input type="radio" name="titlename_type" value="287" checked />
						@else
							<input type="radio" name="titlename_type" value="287" />
						@endif
							ดร.
					</label>
					<label class="radio-inline">
						@if ($state_title_name == 0)
							<script>
								$("#titlename_combos").show();
							</script>
							<input type="radio" name="titlename_type" value="oth" checked />
						@else
							<input type="radio" name="titlename_type" value="oth" />
						@endif
							อื่นๆ
					</label>

					<div id="titlename_combos" style="display:inline-block; ">
						<select class="form-control" style="width:120px" name="titlename_list" id="titlename_list">
							@if ($state_title_name == 0)
								<option value="{{ $myTitle->id }}">{{ $myTitle->abbr_th }}</option>
							@endif
							@foreach ($abbr_ths as $abbr_th)
								@if ($abbr_th->abbr_th != $myTitle->abbr_th)
									<option value="{{ $abbr_th->id }}">{{ $abbr_th->abbr_th }}</option>
								@endif
							@endforeach
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">ตำแหน่งทางวิชาการ</label>
				<div class="col-sm-9">
					<div style="float:left">
						<label class="radio-inline">
							@if ($myInfo->academic_position == "ศ./Prof.")
								<?php $state_academic_position = 1; ?>
								<input type="radio" name="academicpos_type" value="ศ./Prof." checked />
							@else
								<input type="radio" name="academicpos_type" value="ศ./Prof." />
							@endif
								ศ.
						</label>
						<label class="radio-inline">
							@if ($myInfo->academic_position == "รศ./Assoc.Prof.")
								<?php $state_academic_position = 1; ?>
								<input type="radio" name="academicpos_type" value="รศ./Assoc.Prof." checked />
							@else
								<input type="radio" name="academicpos_type" value="รศ./Assoc.Prof." />
							@endif
								รศ.
						</label>
						<label class="radio-inline">
							@if ($myInfo->academic_position == "ผศ./Asst.Prof.")
								<?php $state_academic_position = 1; ?>
								<input type="radio" name="academicpos_type" value="ผศ./Asst.Prof." checked />
							@else
								<input type="radio" name="academicpos_type" value="ผศ./Asst.Prof." />
							@endif
								ผศ.
						</label>
						<label class="radio-inline">
							@if ($state_academic_position == 0)
								<input type="radio" name="academicpos_type" value="oth" checked />
							@else
								<input type="radio" name="academicpos_type" value="oth" />
							@endif
								อื่นๆ
						</label>
					</div>
					<div style="display:inline-block">
						@if ($state_academic_position == 0)
							<script>
								$(document).ready(function() {
									$('#academicpos_text').show();
								});
							</script>
							<input id="academicpos_text" name="academicpos_text" class="form-control" type="text" value="{{ $myInfo->academic_position }}" style="display: none; width:120px;" />
						@else
							<input id="academicpos_text" name="academicpos_text" class="form-control" type="text" value="" style="display: none; width:120px;" />
						@endif
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">
													<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อ (ไทย)</label>
				<div class="col-sm-3">
					<input class="form-control" id="firstname_th" name="firstname_th" type="text" required="" value="{{ $myInfo->firstname_th }}">
				</div>

				<label class="col-sm-2 control-label">
														<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อ (อังกฤษ)</label>
				<div class="col-sm-3">
					<input class="form-control" id="firstname_en" name="firstname_en" type="text" required="" value="{{ $myInfo->firstname_en }}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">ชื่อกลาง (ไทย)</label>
				<div class="col-sm-3">
					<input class="form-control" id="middlename_th" name="middlename_th" type="text" value="{{ $myInfo->middlename_th }}">
				</div>

				<label class="col-sm-2 control-label">ชื่อกลาง (อังกฤษ)</label>
				<div class="col-sm-3">
					<input class="form-control" id="middlename_en" name="middlename_en" type="text" value="{{ $myInfo->middlename_en }}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">
															<sup><span class="red-color fa fa-asterisk"></span></sup>นามสกุล (ไทย)</label>
				<div class="col-sm-3">
					<input class="form-control" id="lastname_th" name="lastname_th" type="text" required="" value="{{ $myInfo->lastname_th }}">
				</div>

				<label class="col-sm-2 control-label">
																<sup><span class="red-color fa fa-asterisk"></span></sup>นามสกุล (อังกฤษ)</label>
				<div class="col-sm-3">
					<input class="form-control" id="lastname_en" name="lastname_en" type="text" required="" value="{{ $myInfo->lastname_en }}">
				</div>
			</div>

			<div class="form-group">
				<label for="academicpos" class="col-sm-3 control-label">
																	<sup><span class="red-color fa fa-asterisk"></span></sup>เพศ</label>
				<div class="col-sm-9">
					<div style="float:left">
						<label class="radio-inline">
							@if ($myInfo->gender == "M")
								<input type="radio" name="gender" value="M" required="" checked/>
							@else
								<input type="radio" name="gender" value="M" required="" />
							@endif
							ชาย
						</label>
						<label class="radio-inline">
							@if ($myInfo->gender == "F")
								<input type="radio" name="gender" value="F" checked />
							@else
								<input type="radio" name="gender" value="F" />
							@endif
							หญิง
						</label>
						<label class="radio-inline">
							@if ($myInfo->gender == "O")
								<input type="radio" name="gender" value="O" checked />
							@else
								<input type="radio" name="gender" value="O" />
							@endif
							อื่นๆ
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<div class="profileBox lastupdate pull-right">
						<span id="lastupdate_label">แก้ไขล่าสุด</span>
						<span id="lastupdate_date"><?php echo $myInfo->lastupdate_date; ?></span>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button id="saveData" name="saveData" type="submit" class="btn btn-success">
																						บันทึก
																					</button>
				</div>
			</div>

		</form>
	</div>
