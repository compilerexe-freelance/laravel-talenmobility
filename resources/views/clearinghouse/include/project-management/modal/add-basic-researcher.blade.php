<style>
.dataTables_filter, .dataTables_info { display: none; }
</style>

<script>
	$(document).ready(function() {
		$('#basicSearchTbl').DataTable( {
        	"scrollX": true,
			"sDom": 'rtlfip',
			
			/*"processing": true,
			"serverSide": true,
			"ajax": "test.php"*/
		});
	});
	
	
	
	$('#{{ $id }}').on('shown.bs.modal', function() {
		var table = $('#basicSearchTbl').DataTable();
		table.columns.adjust().draw();
				
		$('#{{ $id }}').data('bs.modal').handleUpdate();
	});
</script>

<div id="{{ $id }}" class="modal fade" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">
        	<i class="fa fa-search fa-1x"></i> ค้นหานักวิจัย
        </h4>
      </div>
      <div class="modal-body row">
        <div class="col-sm-12">
        
          <form class="form-inline">
          	<div class="form-group" style="float:right">
                <input type="text" class="form-control"
                  id="package-name" placeholder="คำค้นหา">
                <button class="btn btn-default" >ค้นหา</button>
            </div>
            <div class="form-group col-sm-12">
            	<table id="basicSearchTbl" width="inherit" border="0" cellspacing="0" 
                 cellpadding="0" class="table table-striped table-bordered table-hover profileBox">
                  <thead>
                    <tr>
                      <th width="5%">เลือก</th>
                      <th width="25%">รายชื่อ</th>
                      <th width="25%">วุฒิการศึกษา</th>
                      <th width="45%">สังกัด</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">อดิสร ศักดิ์ชัย</td>
                      <td width="25%">ปริญญาเอก</td>
                      <td width="45%" >มหาวิทยาลัยเชียงใหม่</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">มนชัย คู่แก้ว</td>
                      <td width="25%">ปริญญาเอก</td>
                      <td width="45%" >มหาวิทยาลัยรรมศาสตร์</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">อุดร พรพรหม</td>
                      <td width="25%">ปริญญาโท</td>
                      <td width="45%" >มหาวิทยาลัยขอนแก่น่</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">อดิสร ศักดิ์ชัย</td>
                      <td width="25%">ปริญญาเอก</td>
                      <td width="45%" >มหาวิทยาลัยเชียงใหม่</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">มนชัย คู่แก้ว</td>
                      <td width="25%">ปริญญาเอก</td>
                      <td width="45%" >มหาวิทยาลัยรรมศาสตร์</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">อุดร พรพรหม</td>
                      <td width="25%">ปริญญาโท</td>
                      <td width="45%" >มหาวิทยาลัยขอนแก่น่</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">อดิสร ศักดิ์ชัย</td>
                      <td width="25%">ปริญญาเอก</td>
                      <td width="45%" >มหาวิทยาลัยเชียงใหม่</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">มนชัย คู่แก้ว</td>
                      <td width="25%">ปริญญาเอก</td>
                      <td width="45%" >มหาวิทยาลัยรรมศาสตร์</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">อุดร พรพรหม</td>
                      <td width="25%">ปริญญาโท</td>
                      <td width="45%" >มหาวิทยาลัยขอนแก่น่</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">อดิสร ศักดิ์ชัย</td>
                      <td width="25%">ปริญญาเอก</td>
                      <td width="45%" >มหาวิทยาลัยเชียงใหม่</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">มนชัย คู่แก้ว</td>
                      <td width="25%">ปริญญาเอก</td>
                      <td width="45%" >มหาวิทยาลัยรรมศาสตร์</td>
                    </tr>
                    <tr>
                      <td width="5%" align="center"><input type="checkbox"></td>
                      <td width="25%">อุดร พรพรหม</td>
                      <td width="25%">ปริญญาโท</td>
                      <td width="45%" >มหาวิทยาลัยขอนแก่น่</td>
                    </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
            </div>
            <!-- Other fields here -->
          </form>
          
        </div>
      </div>
      <div class="modal-footer">
        <div class="form-group col-sm-12" align="center">
          <button class="btn btn-default"> 
          	เพิ่มนักวิจัย
          </button>
          <a href="#" data-dismiss="modal" 
                   aria-hidden="true" class="btn btn-default center"> ยกเลิก </a> 
        </div>
      </div>
    </div>
  </div>
</div>
