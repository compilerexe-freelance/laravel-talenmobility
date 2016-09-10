
<div id="{{ $id }}" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
        <i class="fa fa-user fa-1x"></i> เพิ่มนักศึกษา</h4>
      </div>
      <div class="modal-body row"> <div class="col-sm-12">
                
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="control-label col-sm-4">ชื่อ-สกุล นักศึกษา:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="ชื่อ">
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="สกุล">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">ระดับการศึกษา:</label>
            <div class="col-sm-4">
              <select name="degree" class="form-control">
                  <option value="ตำกว่าปริญญาตรี">ตำกว่าปริญญาตรี</option>
                  <option value="ปริญญาตรี" selected>ปริญญาตรี</option>
                  <option value="ปริญญาโท">ปริญญาโท</option>
                  <option value="ปริญญาเอก">ปริญญาเอก</option>
                  </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="สาขา (กรณกำลังศึกษา)">
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="ชั้นปี (กรณีกำลังศึกษา)">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="ภาควิชา (กรณีกำลังศึกษา)">
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="คณะ (กรณีกำลังศึกษา)">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="email">Email:</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="email" placeholder="อีเมลล์">
            </div>
          </div>
        </form>
        
      </div>
    </div>
    <div class="modal-footer">
    	<div class="form-group col-sm-12" align="center">
          <button class="btn btn-default"> เพิ่มนักนักศึกษา</button>
          <a href="#" data-dismiss="modal" 
                   aria-hidden="true" class="btn btn-default center"> ยกเลิก </a>
        </div>
    </div>
  </div>
</div>
</div>