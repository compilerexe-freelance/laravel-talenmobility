  <script>
  	$(document).on("click", "#btnAdd", function() {
		$('#statusModal').modal('show');
	});
  </script>
  
  <div class="row">
    <ul id="nav-menu" class="breadcrumb">
      <li><a href="#" onClick="showProjectList()">รายการโครงการ</a></li>
      <li class="active">รายละเอียดโครงการ</li>
    </ul>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-company">บริษัท : บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด</div>
    </div>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-job">โครงการ : โครงการ 1</div>
    </div>
    <div class="row-fluid box-comjob" style="display:inline-block">
      <div class="label label-status">
      	<a style="color:#FFFFFF" href="" id="btnAdd" data-toggle="modal">
          สถานะ : P1
        </a>
      </div>
    </div>
    <div class="row-fluid menu-proj"> 
      <!--<ul class="nav nav-tabs">-->
      <ul class="nav nav-pills nav-justified nav-mproj">
        <li id="proj-profile" class="active">
        	<a href="#">P0: รายละเอียดโครงการ</a>
        </li>
        <li id="proj-researcher">
        	<a href="#" onClick="openProj_researcher_tab(8)">P1: นักวิจัย</a>
        </li>
      </ul>
      <div class="tab-content" style="margin-top:10px;">
        <form class="form-horizontal" onsubmit="updateProjProfile();
        return false">
          <div class="form-group">
            <label class="col-sm-12">ชื่อโครงการ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="proj-title" value="โครงการ 1">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-12">วัตถุประสงค์</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="2">
1. xxxxxxxxxx...
2. xxxxxxxxxx...</textarea>
            
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-12">รายละเอียด</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="5"></textarea>
            </div>
          </div>
          
          <div class="form-group">
          <label class="col-sm-12">หมวดหมู่โครงการ</label>
            <div class="col-sm-4"> 
              <select name="proj_type" class="form-control">                
                <option value="" >การวิจัยและพัฒนา</option>
                <option value="" >การแก้ปัญหาเชิงเทคนิคและวิศวกรรม</option>
                <option value="" >การวิเคราะห์ทดสอบและระบบมาตราฐาน</option>
                <option value="" >การจัดการเทคโนโลยีและนวัตกรรม</option>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-12">ผลงานที่เกิดขึ้น</label>
            <div class="col-sm-10">
              <textarea class="form-control" placeholder="รายละเอียด" rows="2"></textarea>
            </div>
          </div>
          
          <div class="form-group">
          <label class="col-sm-12">ผู้ถือสิทธิ์ทรัพย์สินทางปัญญา</label>
            <div class="col-sm-4"> 
              <select name="proj_type" class="form-control">                
                <option value="" >บริษัท</option>
                <option value="" >นักวิจัย</option>
                <option value="" >ทั้งบริษัทและนักวิจัย</option>
              </select>
            </div>
          </div>
          
          <div class="form-group">
          <label class="col-sm-12">ผู้ประสานงาน</label>
          	<div class="col-sm-10">
                <div class="col-sm-6" style="display:inline-block"> 
                  <input type="text" class="form-control" value="" 
                   placeholder="ชื่อ" style="margin-bottom:10px">
                </div>
                <div class="col-sm-6" style="display:inline-block"> 
                  <input type="text" class="form-control" value="" 
                   placeholder="นามสกุล" style="margin-bottom:10px">
                </div>
            </div>
            
            <div class="col-sm-10">
                <div class="col-sm-6" style="display:inline-block"> 
                  <input type="text" class="form-control" value="" 
                   placeholder="อีเมลล์" style="margin-bottom:10px">
                </div>
                <div class="col-sm-6" style="display:inline-block"> 
                  <input type="text" class="form-control" value=""
                   placeholder="เบอร์โทร" style="margin-bottom:10px">
                </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-12">สถานที่ปฏิบัติงาน</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="proj-title" value="">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-12">ระยะเวลาของโครงการ</label>
            <div class="col-sm-4"> 
             	<div style="display: inline-block;">
                  <select name="proj_period" style="width: 140px;" class="form-control" >                
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="9" selected>9</option>
                    <option value="10" >10</option>
                    <option value="11" >11</option>
                    <option value="12" >12</option>
                    <option value="13" >13</option>
                    <option value="14" >14</option>
                    <option value="15" >15</option>
                    <option value="16" >16</option>
                    <option value="17" >17</option>
                    <option value="18" >18</option>
                    <option value="19" >19</option>
                    <option value="20" >20</option>
                    <option value="21" >21</option>
                    <option value="22" >22</option>
                    <option value="23" >23</option>
                    <option value="24" >24</option>
                  </select>
              </div>
              <div style="display: inline-block; margin-left:5px;">
               เดือน
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-12">ประเมินผลโครงการทุก</label>
            <div class="col-sm-4"> 
             	<div style="display: inline-block;">
                  <select name="proj_assesment_period" style="width: 140px;" class="form-control" >                    <option value="1" >1</option>
                    <option value="2" selected>2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                  </select>
              </div>
              <div style="display: inline-block; margin-left:5px;">
               เดือน
              </div>
            </div>
          </div>
          

          <div class="form-group">
            <label class="col-sm-12">ไฟล์แนบ</label>
            <div class="col-sm-10">
              <button class="btn btn-default btn-upload">
              	<i class="fa fa-upload"></i> upload
              </button>
            </div>
          </div>
          <div class="form-group" style="margin-bottom:20px">
            <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
              <button type="submit" class="btn btn-default">
              	<i class="fa fa-save"></i> บันทึกร่าง
              </button>
              
              <button type="submit" class="btn btn-success">
              	<i class="fa fa-send"></i> ยื่นข้อเสนอโครงการ
              </button>
            </div>
          </div>
        </form>
 	   </div>
    </div>
  </div>

  <!-- include project status modal -->
  @include('include.clearinghouse.ch-projectstatus-modal')

