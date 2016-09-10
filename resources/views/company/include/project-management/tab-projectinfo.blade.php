  <style>
  	.btn-file {
		position: relative;
		overflow: hidden;
	}
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}
  </style>
  
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

  <script>
    /* display project status modal */
  	$(document).on("click", "#statusBut", function() {
		$('#statusModal').modal('show');
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
  </script>

  <div class="row" style="padding:5px">
    <div id="MyWizard" class="wizard" style="margin-bottom:5px;">
        <ul class="steps">
            <li data-target="#step2">
                <a href="#" onClick="showCompanyProjectList()">รายชื่อโครงการ</a><span class="chevron"></span>
            </li>
            <li data-target="#step3" class="active">
                รายละเอียดโครงการ <span class="chevron"></span>
            </li>
        </ul>

        <div class="actions" style="padding:0px; display:inline-block">
            <div class="panel panel-solid-primary panel-style1">
                <div class="panel-body panel-title">
                    บริษัท ซีเกท เทคโนโลยี (ประเทศไทย) จํากัด
                </div>
            </div>
            <div class="panel panel-solid-primary panel-style1">
                <div class="panel-body panel-title">
                    โครงการ: โครงการที่ 1
                </div>
            </div>
            <div class="panel panel-solid-primary panel-style1">
                <div class="panel-body panel-title yellowlink">
                    <a href="#" id="statusBut" >สถานะ: P3</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid menu-proj">

 	<div class="tab-wrapper tab-primary">

      <!--<ul class="nav nav-tabs">-->
      <a href="#" class="nav-tabs-dropdown btn btn-block btn-default">Tabs</a>
      <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
        <li id="proj-profile" class="active">
        	<a href="#">P0: รายละเอียดโครงการ</a>
        </li>
        <li id="proj-researcher">
        	<a href="#" data-toggle="tab" onClick="openProj_researcher_tab(8)">P1: นักวิจัย</a>
        </li>
      </ul>
      <div class="tab-content" style="margin-top:0px;">
        <form class="form-horizontal" onsubmit="updateProjProfile();
        return false">
          <div class="form-group">
            <label class="control-label col-sm-2">
            	<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อโครงการ</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="proj-title" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">
            	<sup><span class="red-color fa fa-asterisk"></span></sup>วัตถุประสงค์</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="2" placeholder="1. xxxxxxxxxx..." required=""></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">รายละเอียด</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="5"></textarea>
            </div>
          </div>

          <div class="form-group">
          <label class="control-label col-sm-2">หมวดหมู่โครงการ</label>
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
            <label class="control-label col-sm-2">ผลงานที่เกิดขึ้น</label>
            <div class="col-sm-8">
              <textarea class="form-control" placeholder="รายละเอียด" rows="2"></textarea>
            </div>
          </div>

          <div class="form-group">
          <label class="control-label col-sm-2">ผู้ถือสิทธิ์ทรัพย์สินทางปัญญา</label>
            <div class="col-sm-4">
              <select name="proj_type" class="form-control">
                <option value="" >บริษัท</option>
                <option value="" >นักวิจัย</option>
                <option value="" >ทั้งบริษัทและนักวิจัย</option>
              </select>
            </div>
          </div>

          <div class="form-group">
          <label class="control-label col-sm-2">
          	<sup><span class="red-color fa fa-asterisk"></span></sup>ผู้ประสานงาน</label>
          	<div class="col-sm-10">
            	<div class="form-group">
                    <div class="col-sm-4" >
                      <input type="text" class="form-control" value=""
                       placeholder="ชื่อ" required="">
                    </div>
                    <div class="col-sm-4" >
                      <input type="text" class="form-control" value=""
                       placeholder="นามสกุล" required="">
                    </div>
                </div>

				<div class="form-group">
                    <div class="col-sm-4" >
                      <input type="text" class="form-control" value=""
                       placeholder="อีเมลล์" required="">
                    </div>
                    <div class="col-sm-4" >
                      <input type="text" class="form-control" value=""
                       placeholder="เบอร์โทร" required="">
                    </div>
                </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2">สถานที่ปฏิบัติงาน</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="proj-title" value="">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2">ระยะเวลาของโครงการ</label>
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
            <label class="control-label col-sm-2">ประเมินผลโครงการทุก</label>
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
            <label class="control-label col-sm-2">ไฟล์แนบ</label>
            <div class="col-sm-10">
              <input type="file" name="files[]" id="filer_input" multiple>
            </div>
          </div>
                    
          <div class="form-group" style="margin-bottom:20px">
            <div class="col-sm-offset-2 col-sm-12" style="text-align: center;">
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
  </div>

  <!-- include project status modal -->
