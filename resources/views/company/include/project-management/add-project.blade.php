	<script>
		$(document).ready(function(){
			<!-- filer plugins -->
			$('#filer_input').filer({
				showThumbs: true,
				addMore: true,
				extensions: ["pdf"],
			});
		});
  	</script>
     
     <div class="row" style="padding:5px">
            <div id="MyWizard" class="wizard" style="margin-bottom:5px;">
                <ul class="steps">
					<li data-target="#step2" class="active">
                    	<a href="#" onClick="showCompanyProjectList()">รายชื่อโครงการ</a><span class="chevron"></span>
					</li>
                    <li data-target="#step2" class="active">
                    	เพิ่มโครงการ<span class="chevron"></span>
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

        <form class="form-horizontal">
          <!-- left box -->
          <div class="col-sm-6  border-left">
            <div class="panel panel-grey ">
              <div class="panel-body">
                <div class="form-group row">
                  <label class="control-label col-sm-3"> 
                  	<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อโครงการ</label>
                  <div class="col-sm-9">
                  	<input class=" form-control" type="text" id="proj-title" required="">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-sm-3"> 
                  	<sup><span class="red-color fa fa-asterisk"></span></sup>วัตถุประสงค์</label>
                  <div class="col-sm-9">
                  	<textarea class="form-control" placeholder="1. xxxxxxxxxx..." rows="2" required></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-sm-3">รายละเอียด</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-sm-3">หมวดหมู่โครงการ</label>
                  <div class="col-sm-9">
                      <select name="proj_type" class="form-control">
                        <option value="" >การวิจัยและพัฒนา</option>
                        <option value="" >การแก้ปัญหาเชิงเทคนิคและวิศวกรรม</option>
                        <option value="" >การวิเคราะห์ทดสอบและระบบมาตราฐาน</option>
                        <option value="" >การจัดการเทคโนโลยีและนวัตกรรม</option>
                      </select>
                  </div>
                </div>
                
                <div class="form-group row">
                	<label class="control-label col-sm-3">ผลงานที่เกิดขึ้น</label>
                  	<div class="col-sm-9">
                  		<textarea class="form-control" placeholder="รายละเอียด" rows="2"></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-sm-3">ผู้ถือสิทธิ์ทรัพย์สินทางปัญญา</label>
                  	<div class="col-sm-9">
                      <select class="form-control">
                        <option value="" >บริษัท</option>
                        <option value="" >นักวิจัย</option>
                        <option value="" >ทั้งบริษัทและนักวิจัย</option>
                      </select>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="panel panel-grey ">
              <div class="panel-body">
                <div class="form-group row">
                  <label class="control-label col-sm-12" style="text-align:left">
                  	<sup><span class="red-color fa fa-asterisk"></span></sup>ผู้ประสานงาน</label>
                  <div class="col-sm-12">
                    <div class="col-sm-6" style="display:inline-block">
                      <input type="text" class="form-control" value=""
                               placeholder="ชื่อ" style="margin-bottom:10px" required="">
                    </div>
                    <div class="col-sm-6" style="display:inline-block">
                      <input type="text" class="form-control" value=""
                               placeholder="นามสกุล" style="margin-bottom:10px" required="">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="col-sm-6" style="display:inline-block">
                      <input type="text" class="form-control" value=""
                               placeholder="อีเมลล์" style="margin-bottom:10px" required="">
                    </div>
                    <div class="col-sm-6" style="display:inline-block">
                      <input type="text" class="form-control" value=""
                               placeholder="เบอร์โทร" style="margin-bottom:10px" required="">
                    </div>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label class="control-label col-sm-4">สถานที่ปฏิบัติงาน</label>
                  <div class="col-sm-8">
                  	<input type="text" class="form-control" id="proj-title" value="">
                  </div>
                </div>
                
                <div class="form-group row" >
                  	<label class="control-label col-sm-4">ระยะเวลาของโครงการ</label>
                    <div class="col-sm-8" >
                      <select name="proj_period" style="width: 140px;" class="form-control" >
                        <option value="3" >3 เดือน</option>
                        <option value="4" >4 เดือน</option>
                        <option value="5" >5 เดือน</option>
                        <option value="6" >6 เดือน</option>
                        <option value="7" >7 เดือน</option>
                        <option value="8" >8 เดือน</option>
                        <option value="9" selected>9 เดือน</option>
                        <option value="10" >10 เดือน</option>
                        <option value="11" >11 เดือน</option>
                        <option value="12" >12 เดือน</option>
                        <option value="13" >13 เดือน</option>
                        <option value="14" >14 เดือน</option>
                        <option value="15" >15 เดือน</option>
                        <option value="16" >16 เดือน</option>
                        <option value="17" >17 เดือน</option>
                        <option value="18" >18 เดือน</option>
                        <option value="19" >19 เดือน</option>
                        <option value="20" >20 เดือน</option>
                        <option value="21" >21 เดือน</option>
                        <option value="22" >22 เดือน</option>
                        <option value="23" >23 เดือน</option>
                        <option value="24" >24 เดือน</option>
                      </select>
                    </div>
                  <!--<div style="display: inline-block; margin-left:5px;"> เดือน </div>-->
                </div>

                <div class="form-group row">
                  <label class="control-label col-sm-4">ประเมินผลโครงการทุก</label>
                  <div class="col-sm-8">
                      <select name="proj_assesment_period" style="width: 140px;" class="form-control" >
                        <option value="1" >1 เดือน</option>
                        <option value="2" selected>2 เดือน</option>
                        <option value="3" >3 เดือน</option>
                        <option value="4" >4 เดือน</option>
                      </select>
                  </div>
                  <!--<div style="display: inline-block; margin-left:5px;"> เดือน </div>-->
                </div>
                
                <div class="form-group row">
                    <label class="control-label col-sm-4">ไฟล์แนบ</label>
                    <div class="col-sm-8">
                    <input type="file" name="files[]" id="filer_input" multiple>
                    </div>
                </div>
                
                <div class="form-group" style="margin-bottom:20px">
                  <div class="pull-right" >
                    <button type="submit" class="btn btn-default"> 
                    	<i class="fa fa-save"></i> บันทึกร่าง </button>
                    <button type="submit" class="btn btn-success"> 
                    	<i class="fa fa-send"></i> ยื่นข้อเสนอโครงการ </button>
                    <button class="btn btn-default"> ยกเลิก </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
