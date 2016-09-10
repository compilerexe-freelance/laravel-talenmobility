
<div id="{{ $id }}" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
        <i class="fa fa-file-pdf-o fa-1x"></i> เพิ่มเอกสาร</h4>
      </div>
      <div class="modal-body row"> <div class="col-sm-12">
                
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="control-label col-sm-4">รายการ-เอกสาร:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="ชื่อ">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-4">
              <input id="input-1" type="file" class="file">
            </div>
          </div>

        </form>
        
      </div>
    </div>
    <div class="modal-footer">
    	<div class="form-group col-sm-12" align="center">
          <button class="btn btn-default"> เพิ่ม</button>
          <a href="#" data-dismiss="modal" 
                   aria-hidden="true" class="btn btn-default center"> ยกเลิก </a>
        </div>
    </div>
  </div>
</div>
</div>