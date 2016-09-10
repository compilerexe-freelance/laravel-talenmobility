  <div id="{{ $id }}"class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <h4 id="modal_title" class="modal-title text-info">
              <i class="fa fa-list-alt fa-2x"></i> สถานะโครงการ (สถานะปัจจุบัน P3)
            </h4>
          </div>
          <div class="modal-body table-responsive">
            <table id="tableData" width="inherit" border="0" cellspacing="0" 
                 cellpadding="0" class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr class="modal_header_bg">
                      <th width="5%">สถานะ</th>
                      <th width="15%">รายการ</th>
                      <th width="20%">ผู้รองขอ</th>
                      <th width="20%">วันที่ร้องขอ</th>
                      <th width="20%">ผู้ตอบรับ</th>
                      <th width="20%">วันที่ตอบรับ</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td width="5%">P0</td>
                      <td width="15%">เริ่มโครงการ</td>
                      <td width="20%">บริษัท หรือ CH</td>
                      <td width="20%">01 ส.ค. 2559 20:10:32</td>
                      <td width="20%">TM Admin</td>
                      <td width="20%">02 ส.ค. 2559 10:00:22</td>
                    </tr>
                    <tr>
                      <td width="5%">P1</td>
                      <td width="15%">ค้นหาจับคู่นักวิจัย</td>
                      <td width="20%">บริษัท หรือ CH</td>
                      <td width="20%">01 ส.ค. 2559 20:10:32</td>
                      <td width="20%">TM Admin</td>
                      <td width="20%">02 ส.ค. 2559 10:00:22</td>
                    </tr>
                    <tr>
                      <td width="5%">P2</td>
                      <td width="15%">ทำข้อเสนอโครงการ</td>
                      <td width="20%">CH</td>
                      <td width="20%">01 ส.ค. 2559 20:10:32</td>
                      <td width="20%">TM Admin</td>
                      <td width="20%">02 ส.ค. 2559 10:00:22</td>
                    </tr>
                    <tr class="modal_selected_row">
                      <td width="5%">P3</td>
                      <td width="15%">ทำสัญญา</td>
                      <td width="20%">CH</td>
                      <td width="20%">01 ส.ค. 2559 20:10:32</td>
                      <td width="20%">TM Admin</td>
                      <td width="20%">02 ส.ค. 2559 10:00:22</td>
                    </tr>
                    <tr>
                      <td width="5%">P4</td>
                      <td width="15%">ประเมินโครงการ</td>
                      <td width="20%">ไม่ระบุ</td>
                      <td width="20%">01 ส.ค. 2559 20:10:32</td>
                      <td width="20%">TM Admin</td>
                      <td width="20%">02 ส.ค. 2559 10:00:22</td>
                    </tr>
                    <tr>
                      <td width="5%">P5</td>
                      <td width="15%">ทำรายงานฉบับสมบูรณ์</td>
                      <td width="20%">CH</td>
                      <td width="20%">01 ส.ค. 2559 20:10:32</td>
                      <td width="20%">TM Admin</td>
                      <td width="20%">02 ส.ค. 2559 10:00:22</td>
                    </tr>
                    <tr>
                      <td width="5%">P6</td>
                      <td width="15%">ยกเลิกโครงการ</td>
                      <td width="20%">CH</td>
                      <td width="20%">01 ส.ค. 2559 20:10:32</td>
                      <td width="20%">TM Admin</td>
                      <td width="20%">02 ส.ค. 2559 10:00:22</td>
                    </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
          </div>
          <div class="modal-footer">
          
            <div class="form-group" align="center">
              <button id="btnAbort" class="btn btn-default">
                <i class="fa fa-remove"></i> <span class="modal_warntext">ขอยกเลิกโครงการ</span> 
              </button>
              <a href="#" id="btnCancel" data-dismiss="modal" 
               aria-hidden="true" class="btn btn-default center">
                 ออก
              </a> 
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    