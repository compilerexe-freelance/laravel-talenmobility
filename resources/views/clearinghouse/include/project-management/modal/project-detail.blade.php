<!--companyForm-->
<div class="modal fade" role="dialog" id="{{ $id }}" role="dialog">

<div class="modal-dialog row" style=" width: 96%;">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close"
  data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      <h3>แก้ไขข้อมูล</h3>
    </div>
    <div class="modal-body">
      <div class="row">
        <form>
          <!-- left box -->
          <div class="col-sm-6  border-left">
            <div class="panel panel-grey ">
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label"> ชื่อโครงการ</label>
                  <input class=" form-control" type="text" id="proj-title" value="โครงการ 1">
                </div>
                <div class="form-group">
                  <label class="control-label"> วัตถุประสงค์</label>
                  <textarea class="form-control" rows="2">1. xxxxxxxxxx...</textarea>
                </div>
                <div class="form-group">
                  <label class="control-label"> รายละเอียด</label>
                  <textarea class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label"> หมวดหมู่โครงการ</label>
                  <select name="proj_type" class="form-control">
                    <option value="" >การวิจัยและพัฒนา</option>
                    <option value="" >การแก้ปัญหาเชิงเทคนิคและวิศวกรรม</option>
                    <option value="" >การวิเคราะห์ทดสอบและระบบมาตราฐาน</option>
                    <option value="" >การจัดการเทคโนโลยีและนวัตกรรม</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">ผลงานที่เกิดขึ้น</label>
                  <textarea class="form-control" placeholder="รายละเอียด" rows="2"></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">ผู้ถือสิทธิ์ทรัพย์สินทางปัญญา</label>
                  <select class="form-control">
                    <option value="" >บริษัท</option>
                    <option value="" >นักวิจัย</option>
                    <option value="" >ทั้งบริษัทและนักวิจัย</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="panel panel-grey ">
              <div class="panel-body">
                <div class="form-group">
                  <label class="control-label">ผู้ประสานงาน</label>
                  <div class="col-sm-12">
                    <div class="col-sm-6" style="display:inline-block">
                      <input type="text" class="form-control" value=""
                               placeholder="ชื่อ" style="margin-bottom:10px">
                    </div>
                    <div class="col-sm-6" style="display:inline-block">
                      <input type="text" class="form-control" value=""
                               placeholder="นามสกุล" style="margin-bottom:10px">
                    </div>
                  </div>
                  <div class="col-sm-12">
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
                  <label class="control-label">สถานที่ปฏิบัติงาน</label>
                  <input type="text" class="form-control" id="proj-title" value="">
                </div>
                <div class="form-group" style="display: inline-block">
                  <label class="control-label">ระยะเวลาของโครงการ</label>
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
                  <div style="display: inline-block; margin-left:5px;"> เดือน </div>
                </div>
                <div class="form-group">
                  <label class="control-label">สถานที่ปฏิบัติงาน</label>
                  <input type="text" class="form-control"  value="">
                </div>
                <div class="form-group">
                  <label class="control-label">ประเมินผลโครงการทุก</label>
                  <select name="proj_assesment_period"
                            style="width: 140px;" class="form-control" >
                    <option value="1" >1</option>
                    <option value="2" selected>2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                  </select>
                  <div style="display: inline-block; margin-left:5px;"> เดือน </div>
                </div>
                <div class="form-group">
                  <label class="control-label">ไฟล์แนบ</label>
                  <button class="btn btn-default btn-upload"> <i class="fa fa-upload"></i> upload </button>
                </div>
                <div class="form-group" style="margin-bottom:20px">
                  <div class="pull-right" >
                    <button type="submit" class="btn btn-default"> <i class="fa fa-save"></i> บันทึกร่าง </button>
                    <button type="submit" class="btn btn-success"> <i class="fa fa-send"></i> ยื่นข้อเสนอโครงการ </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
