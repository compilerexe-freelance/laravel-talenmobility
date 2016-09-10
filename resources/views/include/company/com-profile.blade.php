<div class="row" >
  <div class="breadcrumb box-title" style=""> บริษัท CompanyDemo [ เลขทะเบียนนิติบุคคล:  ] </div>
  <div class="container-fluid row">
    <form method="post" action="" id="company-form" role="form" class="form-horizontal">
      <div class="col-sm-12 company-bg box-title-input" style="display:none">
        <div class="col-sm-7">
          <label class="col-sm-1 control-label" style="width: 20%"><span class="req"></span> ชื่อบริษัท</label>
          <input class="form-control required" id="company" name="company" style="width: 80%" value="CompanyDemo">
        </div>
        <div class="form-group col-sm-5">
          <label class="col-sm-1 control-label" style="width: 40%"><span class="req"></span> เลขทะเบียนนิติบุคคล</label>
          <div class="col-sm-3 input-group" style="width: 60%">
            <input class="form-control" id="company_code" name="company_code" value="">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button" id="btn-companyCode"> <i class="fa fa-search"></i> </button>
            </span> </div>
        </div>
      </div>
      <div class="row" style="margin-right:2px"> 
        
        <!--column 1-->
        
        <div class="col-sm-6 column-1"> 
          
          <!--address-->
          
          <div class="panel panel-default">
            <div class="panel-heading">สถานที่ตั้ง</div>
            <div class="panel-body" style="padding:5px">
              <div class="form-group">
                <label class="control-label col-sm-1" for="address">เลขที่</label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="address" name="address" value="112">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="building">อาคาร/หมู่บ้าน</label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="building" name="building" value="">
                </div>
                
              </div>
              <div class="form-group">
              <label class="control-label col-sm-1" for="building">ชั้น</label>
                <div class="col-sm-2">
                  <input class="form-control" type="text" id="floor" name="floor" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="road">ถนน</label>
                <div class="col-sm-8">
                  <input class="form-control" type="text" id="road" name="road" value="พหลโยธิน">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="province"><span class="req"></span>จังหวัด</label>
                <div class="col-sm-8"> 
                  
                  <!--<select id="province" name="province" class="form-control required" disabled="">-->
                  
                  <select id="province" name="province" class="form-control required">
                    <option selected="selected" value="">-</option>
                  </select>
                  <input type="hidden" name="area" id="area" value="CE" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="amphur"><span class="req"></span>อำเภอ/เขต</label>
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
                <label class="control-label col-sm-1" for="postcode">รหัสไปรษณีย์</label>
                <div class="col-sm-8">
                  <input class="form-control" type="text" id="postcode" name="postcode" value="12120">
                </div>
              </div>
            </div>
          </div>
          
          <!--contact-->
          
          <div class="panel panel-default">
            <div class="panel-heading">ข้อมูลติดต่อ</div>
            <div class="panel-body" style="padding:5px">
              <div class="form-group">
                <label class="control-label col-sm-1" for="tel"><span class="req"></span>โทรศัพท์</label>
                <div class="col-sm-8">
                  <input class=" form-control required" type="text" id="tel" name="tel" placeholder="02xxxxxxx" value="025646900">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="fax">โทรสาร</label>
                <div class="col-sm-8">
                  <input class=" form-control" type="text" id="fax" name="fax" placeholder="02xxxxxxx" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="mobile">มือถือ</label>
                <div class="col-sm-8">
                  <input class=" form-control" type="text" id="mobile" name="mobile" placeholder="081xxxxxxx" value="0811234567">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="email" ><span class="req"></span>อีเมล์</label>
                <div class="col-sm-8">
                  <input class=" form-control required" type="email" id="email" name="email" placeholder="mymail@domain.com" class="email" value="admin@company.com">
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
            <div class="panel-heading"><span class="req"></span> รูปแบบการจดทะเบียน</div>
            <div class="panel-body" style="padding:5px">
              <div class="form-group form-inline">
                <div class="radio">
                  <label>
                    <input type="radio" value="L" name="company_type" class="required">
                    &nbsp;บริษัทขนาดใหญ่ </label>
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
            <div class="panel-body" style="padding:5px">
              <div class="col-sm-11">
                <select class="form-control" id="industry_type" name="industry_type">
                  <option value="">-</option>
                  <option value="ข้าวและผลิตภัณฑ์จากข้าว">ข้าวและผลิตภัณฑ์จากข้าว</option>
                  <option value="มัน อ้อย ปาล์ม เพื่อพลังงาน">มัน อ้อย ปาล์ม เพื่อพลังงาน</option>
                  <option value="ยางและผลิตภัณฑ์">ยางและผลิตภัณฑ์</option>
                  <option value="อาหารแปรรูป">อาหารแปรรูป</option>
                  <option value="เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์">เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์</option>
                  <option value="ยานยนต์">ยานยนต์</option>
                  <option value="พลาสติกและปิโตรเคมี">พลาสติกและปิโตรเคมี</option>
                  <option value="แฟชั่น (สิ่งทอ อัญมณี เครื่องหนัง)">แฟชั่น (สิ่งทอ อัญมณี เครื่องหนัง)</option>
                  <option value="ท่องเที่ยวและสาขาต่อเนื่อง">ท่องเที่ยวและสาขาต่อเนื่อง</option>
                  <option value="โลจิสติกส์และสาขาต่อเนื่อง">โลจิสติกส์และสาขาต่อเนื่อง</option>
                  <option value="ก่อสร้างและบริการต่อเนื่อง">ก่อสร้างและบริการต่อเนื่อง</option>
                  <option value="เศรษฐกิจสร้างสรรค์และดิจิทัล">เศรษฐกิจสร้างสรรค์และดิจิทัล</option>
                  <option value="type_other">อื่นๆ</option>
                </select>
              </div>
              <div class="col-sm-12">
                <div style="margin-top: 5px;display: none" id="type_other">
                  <label class="col-sm-1 control-label" style="width: 100px">โปรดระบุ : </label>
                  <div class="col-sm-8 col-lg-9">
                    <input type="text" class="form-control" id="industry_other" name="industry_other" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--product-->
          
          <div class="panel panel-default">
            <div class="panel-heading">ผลิตภัณฑ์</div>
            <div class="panel-body" style="padding:5px">
              <div class="col-sm-11">
                <textarea class="form-control" placeholder="คั่นด้วย ," id="product" name="product"></textarea>
              </div>
            </div>
          </div>
          
          <!--personal contact-->
          
          <div class="panel panel-default">
            <div class="panel-heading">ผู้ติดต่อประสานงาน</div>
            <div class="panel-body" style="padding:5px">
              <div class="form-group">
                <label class="control-label col-sm-1" for="tel"><span class="req"></span>ชื่อ-สกุล</label>
                <div class="col-sm-8">
                  <input class="form-control required" type="text" id="pcontact_name" name="pcontact_name" placeholder="" value="เจ้าหน้าที่ ประสานงาน">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="mobile">โทรศัพท์</label>
                <div class="col-sm-8">
                  <input class="form-control" type="text" id="pcontact_tel" name="pcontact_tel" placeholder="081xxxxxxx" value="0811234567">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-1" for="email" ><span class="req"></span>อีเมล์</label>
                <div class="col-sm-8">
                  <input class="form-control required" type="email" id="pcontact_email" name="pcontact_email" placeholder="mymail@domain.com" class="email" value="admin@company.com">
                </div>
              </div>
            </div>
          </div>
          <div class="pull-right" id="b-btnsubmit">
            <button type="submit" class="btn btn-success" style="padding: 5px 20px;font-size: 15px;">บันทึก</button>
            <button type="reset" class="btn btn-default btn-reset" style="padding: 5px 20px;font-size: 15px;">ยกเลิก</button>
          </div>
          <input type="hidden" name="cid" value="91">
          <span id="msgbox"></span> </div>
        <!-- //column 2 --> 
        
      </div>
    </form>
  </div>
</div>
