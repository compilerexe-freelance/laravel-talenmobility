	  
	  <script>
		  $('#industry_other').hide();
		  
		  $(document).ready(function(e) {
			$('#industry_type').on('change', function() {
				if (this.value == "type_other"){
					$('#industry_other').show();
				}
				else{
					$('#industry_other').hide();
				}
			});
		  });
	  </script>
      
      <script>
			$(document).ready(function() {
				app.formMask();
			});

			// just for the demos, avoids form submit
			jQuery.validator.setDefaults({
			  debug: true,
			  success: "valid"
			});
			$( "#company-form" ).validate({
			  rules: {
				telephone: {
				  required: true,
				  number: true
				}
			  }
			});
	  </script>    
    
	
      <form method="post" action="" id="company-form" role="form" class="form-horizontal">
            <div class="alert alert-success">
              <div class="row">
                <div class="col-sm-6">
                  <label class="control-label small-font"><span class="req"></span> ชื่อบริษัท</label>
                  <input class="form-control" id="company" 
                  	value="บริษัทซีเกทประเทศไทย จำกัด"
                    disabled = "true"
                  	name="company" required style="width: 95%">
                </div>
                <div class="col-sm-6">
                  <label class="control-label small-font">
                     <span class="req"></span> เลขทะเบียนนิติบุคคล
                  </label>
                  <div class="col-sm-3 input-group" style="width: 98%">
                    <input class="form-control" id="company_code" 
                    value="1288819008223"
                    disabled = "true"
                    name="company_code">
                    
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="btn-companyCode"> 
                            <i class="fa fa-search"></i> 
                        </button>
                    </span> 
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
                <!-- left box -->
                <div class="col-sm-6  border-left">
                    <div class="panel panel-grey ">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="address">เลขที่</label>
                                <div class="col-sm-4">
                                	<input class="form-control" type="text" id="address" name="address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="floor">ชั้น</label>
                                <div class="col-sm-4">
                                	<input class="form-control" type="text" id="floor" 
                                	name="floor" style="padding: 0px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="building">อาคาร/หมู่บ้าน</label>
                                <div class="col-sm-9">                                    
                                <input class="form-control" type="text" id="building" name="building">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="road">ถนน</label>
                                <div class="col-sm-9">
                                	<input class="form-control" type="text" id="road" name="road">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="province">
                                    	<sup><span class="red-color fa fa-asterisk"></span></sup>จังหวัด</label>
                                <div class="col-sm-8">
                                    <select id="province" name="province" class="form-control" required="">
                                      <option disabled selected value> -- เลือกจังหวัด -- </option>
                                      <option value="1">test 1</option>
                                      <option value="2">test 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="amphur">
                                    	<sup><span class="red-color fa fa-asterisk"></span></sup>อำเภอ/เขต</label>
                                <div class="col-sm-8">
                                    <select id="amphur" name="amphur" class="form-control" required="">
                                      <option disabled selected value> -- เลือก อำเภอ/เขต -- </option>
                                      <option value="1">test 1</option>
                                      <option value="2">test 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="tambon">ตำบล/แขวง</label>
                                <div class="col-sm-8">
                                    <select id="tambon" name="tambon" class="form-control">
                                      <option disabled selected value> -- เลือก ตำบล/แขวง -- </option>
                                      <option value="1">test 1</option>
                                      <option value="2">test 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="postcode">รหัสไปรษณีย์</label>
                                <div class="col-sm-4">
                                	<input class="form-control" type="text" id="postcode" name="postcode">
                                </div>
                            </div>
                            <div class="form-group">
                              	<label class="control-label col-sm-3" for="tel">
                                    	<sup><span class="red-color fa fa-asterisk"></span></sup>โทรศัพท์</label>
                                <div class="col-sm-8">
                                    <input class=" form-control" required="" id="telephone" 
                                    type="text" name="telephone" placeholder="02xxxxxxx">
                                </div>
                            </div>
                            
                            <div class="form-group">
                              	<label class="control-label col-sm-3" for="fax">โทรสาร</label>
                                <div class="col-sm-8">
                                    <input class=" form-control" type="text" id="fax" 
                                	name="fax" placeholder="02xxxxxxx">
                                </div>                                
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="mobile">มือถือ</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text"  
                                    name="mobile" placeholder="08xxxxxxxx" >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email" >
                                	<sup><span class="red-color fa fa-asterisk"></span></sup>อีเมลล์</label>
                                <div class="col-sm-8">
                                    <input class=" form-control" type="email" required=""
                                    id="email" name="email" placeholder="mymail@company.com" class="email">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- right box -->
                <div class="col-sm-6" >                            
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                            	<div class="col-sm-4">
                                	<label class="control-label">ขนาดบริษัท</label>
                                </div>
                                <div class="col-sm-12" style="margin-left:10px;">
                                    <div class="radio">
                                        <label><input class="icheck" type="radio" 
                                        checked="" name="company_type">
                                        ขนาดใหญ่</label>
                                    </div>
                                    <div class="radio">
                                        <label><input class="icheck" type="radio" name="company_type">
                                        ขนาดกลางและขนาดย่อม</label>
                                    </div>
                                    <div class="radio">
                                        <label><input class="icheck" type="radio" name="company_type">
                                        วิสาหกิจชุมชน / อื่นๆ</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            	<div class="col-sm-3">
                                	<label class="control-label">อุตสาหกรรม</label>
                                </div>
                                <div class="col-sm-9">
                                  <select class="form-control" id="industry_type" name="industry_type">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option value="ข้าวและผลิตภัณฑ์จากข้าว">ข้าวและผลิตภัณฑ์จากข้าว</option>
                                    <option value="มัน อ้อย ปาล์ม เพื่อพลังงาน">มัน อ้อย ปาล์ม เพื่อพลังงาน</option>
                                    <option value="ยางและผลิตภัณฑ์">ยางและผลิตภัณฑ์</option>
                                    <option value="อาหารแปรรูป">อาหารแปรรูป</option>
                                    <option value="เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์">เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์</option>
                                    <option value="ยานยนต์">ยานยนต์</option>
                                    <option value="พลาสติกและปิโตรเคมี">พลาสติกและปิโตรเคมี</option>
                                    <option value="แฟชั่น (สิ่งทอ อัญมณี เครื่องหนัง)">
                                    แฟชั่น (สิ่งทอ อัญมณี เครื่องหนัง)</option>
                                    <option value="ท่องเที่ยวและสาขาต่อเนื่อง">ท่องเที่ยวและสาขาต่อเนื่อง</option>
                                    <option value="โลจิสติกส์และสาขาต่อเนื่อง">โลจิสติกส์และสาขาต่อเนื่อง</option>
                                    <option value="ก่อสร้างและบริการต่อเนื่อง">ก่อสร้างและบริการต่อเนื่อง</option>
                                    <option value="เศรษฐกิจสร้างสรรค์และดิจิทัล">เศรษฐกิจสร้างสรรค์และดิจิทัล</option>
                                    <option value="type_other">อื่นๆ</option>
                                  </select>
                                 </div>
                                 
                                 <div class="col-sm-12">
                                    <input type="text" class="form-control" 
                                    id="industry_other" name="industry_other" 
                                    placeholder="ระบุประเภทอุตสาหกรรม" />
                                 </div>

                            </div>
                            
                            <div class="form-group">
                            	<div class="col-sm-2">
                                	<label class="control-label" >ผลิตภัณฑ์</label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" placeholder="คั่นด้วย ," 
                                    id="product" name="product"></textarea>
                               	</div>
                            </div>
                            
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">ผู้ติดต่อประสานงาน</h3>
                                </div>
    
                                <div class="panel-body" style="background-color:#E3E3E3;">
                                    <div class="form-group">
                                    	<div class="col-sm-3">
                                        <label class="control-label" >
                                        	<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อ-สกุล </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input class="form-control" required="" 
                                            type="text" id="pcontact_name" name="pcontact_name" 
                                            placeholder="ชื่อและสกุล" value="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    	<div class="col-sm-3">
                                        	<label class="control-label" >
                                			เบอร์โทร</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" id="pcontact_tel" 
                                			name="pcontact_tel" placeholder="08xxxxxxxx">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    	<div class="col-sm-3">
                                        	<label class="control-label" >
                                			 <sup><span class="red-color fa fa-asterisk"></span></sup>อีเมลล์</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" 
                                             id="pcontact_email"  required="" placeholder="mymail@mail.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-success" type="submit">บันทึก</button>
                        </div>
                    </div>
                 </div>
             </div>
           </form>