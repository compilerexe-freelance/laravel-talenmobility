<?php
$myAddress = DB::table('researcher_addresses')->where('address_id', 1)->first();
$fetch_countries = DB::table('countries')->get();
$provinces = DB::table('provinces')->get();
$myProvince = DB::table('provinces')->where('id', $myAddress->country_id)->first();
?>

<script>

$('input[name="country_type"]').bind('click', function() {
	if ($(this).val() == 'oth') {
		$("#country_combo").show();
		$("#province_list").attr('disabled', true);
		for (var i = 1; i <= 77; i++) {
			$("#amphur_list_"+i).attr('disabled', true);
		}
		for (var i = 1; i <= 997; i++) {
			$("#district_list_"+i).attr('disabled', true);
		}
	} else {
		$("#country_combo").hide();
		$("#province_list").attr('disabled', false);
		for (var i = 1; i <= 77; i++) {
			$("#amphur_list_"+i).attr('disabled', false);
		}
		for (var i = 1; i <= 997; i++) {
			$("#district_list_"+i).attr('disabled', false);
		}
	}
});

$("#country_combo").hide();

	//Read province
	var provinceId = null;
	var getProvinceId = $("select[name=province_list]").val();
	provinceId = getProvinceId;
	// console.log(getProvinceId);

	//Hide amphur
	// var amphurId = null;
	var amphurId = <?php echo $myAddress->amphur_id; ?>;
	// console.log(amphurId);

	for (var hide_amphur = 1; hide_amphur <= 77; hide_amphur++) {
		if (getProvinceId != hide_amphur) {
			$("#amphur_list_"+hide_amphur).hide();
			$("#amphur_list_"+hide_amphur).attr('disabled', true);
		}
		// console.log(id_amphur);
	}

	//Hide district
	fn_hide_district();
	$("#district_list_"+amphurId).show();
	$("#district_list_"+amphurId).attr('disabled', false);

	function changeProvince() {
		getProvinceId = $("select[name=province_list]").val();
		getAmphurId = $("select[name=amphur_list_"+getProvinceId+"]").val();
		$("#amphur_list_"+provinceId).hide();
		$("#amphur_list_"+provinceId).attr('disabled', true);
		$("#amphur_list_"+getProvinceId).show();
		$("#amphur_list_"+getProvinceId).attr('disabled', false);
		provinceId = getProvinceId;

		fn_hide_district();
		$("#district_list_"+amphurId).hide();
		$("#district_list_"+amphurId).attr('disabled', true);
		$("#district_list_"+getAmphurId).show();
		$("#district_list_"+getAmphurId).attr('disabled', false);
		amphurId = getAmphurId;
		// console.log(getAmphurId);
	};

	function changeAmphur() {
		getAmphurId = $("select[name=amphur_list_"+getProvinceId+"]").val();
		fn_hide_district();
		$("#district_list_"+amphurId).hide();
		$("#district_list_"+amphurId).attr('disabled', true);
		$("#district_list_"+getAmphurId).show();
		$("#district_list_"+getAmphurId).attr('disabled', false);
		amphurId = getAmphurId;
		// console.log(getAmphurId);
	}

	function fn_hide_district() {
		for (var hide_district = 1; hide_district <= 997; hide_district++) {
			$("#district_list_"+hide_district).hide();
			$("#district_list_"+hide_district).attr('disabled', true);
		}
	}
</script>

<style>
	.panel-borderless {
		border: 0;
		box-shadow: none;
	}
</style>

<script>
	$(document).ready(function() {
		app.formMask();
	});
</script>

<form class="form-horizontal" method="post" action="{{ url('/researcher_save_address') }}">
	{{ csrf_field() }}
	<div class="msgBox hide" id="msgData"></div>
	<br />
	<div class="row">

		<div class="col-lg-6">
			<div class="panel panel-default panel-borderless">
				<div class="panel-heading">
					<b><i class="fa fa-phone"></i> ข้อมูลสำหรับติดต่อ</b>
				</div>
				<div class="panel-body" style="margin-left:10px">
					<div class="form-group">
						<label for="tel_no" class="col-sm-3 control-label">โทรศัพท์</label>
						<div class="col-sm-6">
							@if ($myAddress->home_tel != null)
								<input type="text" class="form-control" name="home_tel" value="{{ $myAddress->home_tel }}" />
							@else
								<input type="text" name="home_tel" class="form-control">
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="ext_no" class="col-sm-3 control-label">ต่อ (เบอร์ภายใน)</label>
						<div class="col-sm-6">
							@if ($myAddress->tel_extension != null)
								<input class="form-control" id="ext_no" name="ext_no" type="text" value="{{ $myAddress->tel_extension }}" />
							@else
								<input class="form-control" id="ext_no" name="ext_no" type="text" value="" />
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="fax_no" class="col-sm-3 control-label">โทรสาร</label>
						<div class="col-sm-6">
							@if ($myAddress->fax != null)
								<input class="form-control" id="fax_no" name="fax_no" type="text" value="{{ $myAddress->fax }}" />
							@else
								<input class="form-control" id="fax_no" name="fax_no" type="text" value="" />
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="mobile_no" class="col-sm-3 control-label">
                      <sup><span class="red-color fa fa-asterisk"></span></sup>มือถือ
                    </label>
						<div class="col-sm-6">
							@if ($myAddress->mobile != null)
								<input class="form-control" id="mobileMask" name="mobileMask" required="" placeholder="9999999999" value="{{ $myAddress->mobile }}" />
							@else
								<input class="form-control" id="mobileMask" name="mobileMask" required="" placeholder="9999999999" />
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">
                      <sup><span class="red-color fa fa-asterisk"></span></sup>อีเมล
                    </label>
						<div class="col-sm-6">
							@if ($myAddress->email != null)
								<input class="form-control" id="email" name="email" type="email" required="" value="{{ $myAddress->email }}" />
							@else
								<input class="form-control" id="email" name="email" type="email" required="" value="" />
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="facebook" class="col-sm-3 control-label">บัญชี Facebook </label>
						<div class="col-sm-8">
							@if ($myAddress->facebook_account != null)
								<input class="form-control" id="facebook_acc" name="facebook_account" type="text" value="{{ $myAddress->facebook_account }}" />
							@else
								<input class="form-control" id="facebook_acc" name="facebook_account" type="text" value="" />
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="twitter" class="col-sm-3 control-label">บัญชี Twitter </label>
						<div class="col-sm-8">
							@if ($myAddress->twitter_account != null)
								<input class="form-control" id="twitter_acc" name="twitter_account" type="text" value="{{ $myAddress->twitter_account }}" />
							@else
								<input class="form-control" id="twitter_acc" name="twitter_account" type="text" value="" />
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="line" class="col-sm-3 control-label">บัญชี Line</label>
						<div class="col-sm-8">
							@if ($myAddress->line_account != null)
								<input class="form-control" id="line_acc" name="line_account" type="text" value="{{ $myAddress->line_account }}" />
							@else
								<input class="form-control" id="line_acc" name="line_account" type="text" value="" />
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="panel panel-default panel-borderless">
				<div class="panel-heading">
					<b><i class="fa fa-home"></i> ที่อยู่ที่สะดวกในการติดต่อ</b>
				</div>
				<div class="panel-body" style="margin-left:10px;">
					<div class="form-group">
						<label for="streetaddr" class="col-sm-3 control-label">
                      <sup><span class="red-color fa fa-asterisk"></span></sup>ที่ตั้ง ถนน
                    </label>
						<div class="col-sm-8">
							@if ($myAddress->address != null)
								<input class="form-control" id="address" name="address" type="text" required="" value="{{ $myAddress->address }}" />
							@else
								<input class="form-control" id="address" name="address" type="text" required="" value="" />
							@endif
						</div>
					</div>



					<div class="form-group">
						<label class="col-sm-3 control-label">
                      	<sup><span class="red-color fa fa-asterisk"></span></sup>ประเทศ</label>
						<div class="col-sm-9">
							<label class="radio-inline">
								@if ($myProvince->id == 19)
									<input type="radio" id="country_th" name="country_type" value="ไทย"  required="" checked />ไทย
								@else
									<input type="radio" id="country_th" name="country_type" value="ไทย"  required="" />ไทย
								@endif

							</label>
							<label class="radio-inline">
								@if ($myProvince->id != 19)
									<script>
										$("#country_combo").show();

										//Disabled province
										$("#province_list").attr('disabled', true);

										//Disabled amphur
										for (var hide_amphur = 1; hide_amphur <= 77; hide_amphur++) {
												$("#amphur_list_"+hide_amphur).attr('disabled', true);
										}

										//Disabled district
										for (var hide_district = 1; hide_district <= 997; hide_district++) {
											$("#district_list_"+hide_district).hide();
											$("#district_list_"+hide_district).attr('disabled', true);
										}
										$("#district_list_1").show();

									</script>
									<input type="radio" id="country_oth" name="country_type" value="oth" checked /> อื่นๆ
								@else
									<input type="radio" id="country_oth" name="country_type" value="oth"  /> อื่นๆ
								@endif
							</label>
							<div style="display:inline-block; width:50%">
								<select class="form-control" name="country_combo" id="country_combo">
									@foreach ($fetch_countries as $countries)
										@if ($myProvince->id == $countries->id)
											<option selected>{{ $countries->country_name_th }}</option>
										@else
											<option>{{ $countries->country_name_th }}</option>
										@endif
									@endforeach
								</select>
							</div>
						</div>
					</div>


					<div class="form-group">
						<label for="province" class="col-sm-3 control-label">
            	<sup><span class="red-color fa fa-asterisk"></span></sup>จังหวัด
            </label>
						<div class="col-sm-6">
							<span class="ui-widget" id="province_combo">
	              <select class="form-control" name="province_list" id="province_list"  required="" onchange="changeProvince()">
									@foreach ($provinces as $province)
										@if ($myAddress->province_id == $province->id)
											<option id="province_id_{{ $province->id }}" value="{{ $province->id }}" selected>{{ $province->province_name }}</option>
										@else
											<option id="province_id_{{ $province->id }}" value="{{ $province->id }}">{{ $province->province_name }}</option>
										@endif
									@endforeach
	              </select>
              </span>
						</div>
					</div>
					<div class="form-group">
						<label for="amphur" class="col-sm-3 control-label">
            	<sup><span class="red-color fa fa-asterisk"></span></sup>อำเภอ/เขต
            </label>
						<div class="col-sm-6">
							<span class="ui-widget" id="amphur_combo">
								<?php
									for ($i = 1; $i <= 77; $i++) { // $i = total amphur
										echo '<select class="form-control" name="amphur_list_'.$i.'" id="amphur_list_'.$i.'"  required="" onchange="changeAmphur()">';
										// echo '<select class="form-control" name="amphur_list" id="amphur_list"  required="">';
										$fetch_amphur = DB::table('amphurs')->where('province_id', $i)->get();
										foreach ($fetch_amphur as $amphur) {
											// echo "<option id='amphur_province_id_$amphur->province_id'>".$amphur->amphur_name."</option>";
											if ($myAddress->amphur_id == $amphur->amphur_id) {
												echo "<option id='amphur_province_id_$amphur->amphur_id' value='$amphur->amphur_id' selected>".$amphur->amphur_name."</option>";
											} else {
												echo "<option id='amphur_province_id_$amphur->amphur_id' value='$amphur->amphur_id'>".$amphur->amphur_name."</option>";
											}
										}
										echo '</select>';
									}
								?>
              </span>
						</div>
					</div>
					<div class="form-group">
						<label for="tambon" class="col-sm-3 control-label">
              <sup><span class="red-color fa fa-asterisk"></span></sup>ตำบล/แขวง
            </label>
						<div class="col-sm-6">
							<span class="ui-widget" id="tambon_combo">
								<?php
									for ($i = 1; $i <= 997; $i++) { // $i = total district
										echo '<select class="form-control" name="district_list_'.$i.'" id="district_list_'.$i.'"  required="">';
										$fetch_district = DB::table('districts')->where('amphur_id', $i)->get();
										foreach ($fetch_district as $district) {
											if ($myAddress->district_id == $district->id) {
												echo "<option id='district_id_$district->amphur_id' value='$district->id' selected>".$district->district_name."</option>";
											} else {
												echo "<option id='district_id_$district->amphur_id' value='$district->id'>".$district->district_name."</option>";
											}
										}
										echo '</select>';
									}
								?>
              </span>
						</div>
					</div>
					<div class="form-group">
						<label for="postcode" class="col-sm-3 control-label">
              <sup><span class="red-color fa fa-asterisk"></span></sup>รหัสไปรษณีย์
            </label>
						<div class="col-sm-4">
							@if ($myAddress->postcode != null)
								<input class="form-control" id="postcode" name="postcode" type="text" required="" value="{{ $myAddress->postcode }}" />
							@else
								<input class="form-control" id="postcode" name="postcode" type="text" required="" />
							@endif
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
			<button id="saveData" type="submit" class="btn btn-success"> บันทึก </button>
		</div>
	</div>

	<div class="row pull-right">
		<span id="lastupdate_label">แก้ไขล่าสุด </span>
		<span id="lastupdate_date">25 มี.ค. 2558 08:45:31</span>
	</div>
</form>
