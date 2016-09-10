
<div id="{{ $id }}" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> <i class="fa fa-edit fa-1x"></i> ประเมินโครงการ</h4>
      </div>
      <div class="modal-body row">
      
      	<div class="panel-body">
            <div class="form-group col-sm-12">
                    <div class="col-sm-3">
                    <select class="form-control">
                      <option value="0" selected >ประเภทการประเมิน</option>
                      <option value="1"  >นักวิจัย</option>
                      <option value="2"  >Clearing house</option>
                      <option value="2"  >TM Admin</option>
                    </select>
                    </div>
                    <div class="col-sm-3">
                    <select class="form-control">
                      <option value="0" selected >ชื่อผู้ประเมิน</option>
                      <option value="1"  >รังสรรค์ ใจพินิจ</option>
                      <option value="2"  >วีรภาพ พิพัฒน์พงษ์</option>
                    </select>
                    </div>
            </div>
        </div>
        
        
        <div class="panel panel-success">
            <div class="panel-heading">
            	<h3>ด้านความก้าวหน้าของโครงการ</h3>

            </div>
            
            <div class="panel-body">
            	<div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">1. ผลงานที่ดําเนินการเสร็จไปแล้วคิดเป็นร้อยละ</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="q1">
                          < 20%</label>
                        <label class="radio-inline">
                          <input type="radio" name="q1">
                          20-40%</label>
                        <label class="radio-inline">
                          <input type="radio" name="q1">
                          40-60%</label>
                        <label class="radio-inline">
                          <input type="radio" name="q1" checked>
                          60-80%</label>
                        <label class="radio-inline">
                          <input type="radio" name="q1">
                          > 80%</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">2. การดำเนินการเป็นไปตามขั้นตอนที่วางแผนไว้</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="q2">
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="q2" checked>
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="q2">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="q2">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="q2">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">3. การดำเนินการเป็นไปตามวัตถุประสงค์ที่ตั้งไว้</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="q3">
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="q3" checked>
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="q3">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="q3">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="q3">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">4. ปัญหาที่ส่งผลให้เกิดความล่าช้า</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="q4" id="q4-1">
                          ไม่มี</label>
                        <label class="radio-inline">
                          <input type="radio" name="q4" id="q4-2" checked>
                          มี</label>
                    </div>
                </div>
                
                <div class="form-group" style="margin-left:40px">
      				<div class="col-sm-12">
                		<label class="control-label">4.1 มีปัญหาด้านเทคนิค/เทคโนโลยี</label>
                    </div>
                    <div style="margin-left:25px">
                    	<label class="radio-inline">
                        	<input type="radio" name="q4-1">
                        	มากที่สุด</label>
                      	<label class="radio-inline">
                        	<input type="radio" name="q4-1">
                        	มาก</label>
                      	<label class="radio-inline">
                        	<input type="radio" name="q4-1" checked>
                        	ปานกลาง</label>
                      	<label class="radio-inline">
                        	<input type="radio" name="q4-1">
                        	น้อย</label>
                      	<label class="radio-inline">
                        	<input type="radio" name="q4-1">
                        	น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group" style="margin-left:40px">
      				<div class="col-sm-12">
                		<label class="control-label">4.2 เกิดจากสถานประกอบการ</label>
                    </div>
                    <div style="margin-left:25px">
                    	<label class="radio-inline">
                        	<input type="radio" name="q4-2">
                            มากที่สุด</label>
                       	<label class="radio-inline">
                            <input type="radio" name="q4-2">
                            มาก</label>
                       	<label class="radio-inline">
                            <input type="radio" name="q4-2">
                            ปานกลาง</label>
                       	<label class="radio-inline">
                            <input type="radio" name="q4-2" checked>
                            น้อย</label>
                       	<label class="radio-inline">
                            <input type="radio" name="q4-2">
                            น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group" style="margin-left:40px">
      				<div class="col-sm-12">
                		<label class="control-label">4.3 เกิดจากอาจารย์/นักวิจัย</label>
                    </div>
                    <div style="margin-left:25px">
                    	<label class="radio-inline">
                    		<input type="radio" name="q4-3">
                    		มากที่สุด</label>
                  		<label class="radio-inline">
                    		<input type="radio" name="q4-3">
                    		มาก</label>
                  		<label class="radio-inline">
                    		<input type="radio" name="q4-3">
                    		ปานกลาง</label>
                  		<label class="radio-inline">
                    		<input type="radio" name="q4-3" >
                    		น้อย</label>
                  		<label class="radio-inline">
                    		<input type="radio" name="q4-3">
                    		น้อยที่สุด</label>
                    </div>
                </div>
              
              
              <div class="form-group">
              	<div class="col-sm-12">
                    <label class="control-label">ข้อเสนอแนะ</label>
                </div>
                <div style="margin-left:25px">
                	<div class="col-sm-10">
                		<textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
              </div>
              
            </div><!-- end of panel body-->
        </div> <!-- end of panel -->
            
        
        
        
        <!-- ################################## -->
        <div class="panel panel-success">
            <div class="panel-heading">
            	<h3>ด้านการดำเนินงานกับสถานประกอบการ</h3>
            </div>
            
            <div class="panel-body">
            	<div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">1. การจัดเตรียมเครื่องมือเครื่องจักร และเครื่องอํานวยความสะดวก</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s2q1">
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q1" checked>
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q1">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q1">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q1">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">2. ความเหมาะสมของการจัดเตรียมสถานที่สำหรับการดำเนินงาน</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s2q2">
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q2" checked>
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q2">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q2">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q2">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">3. การสนับสนุนด้านการเดินทาง</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s2q3">
                          ยานพาหนะ</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q3">
                          เงิน</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q3" checked>
                          ไม่มี</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">4. การเตรียมการติดต่อประสานงานภายในบริษัทเพื่ออำนวยความสะดวกในการดำเนินโครงการ</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s2q4">
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q4" checked>
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q4">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q4">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q4">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">5. ค่าตอบแทนเพิ่มเติมสำหรับอาจารย์/นักวิจัย</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s2q5">
                          ไม่มี</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q5" checked>
                          มี</label>
                        <span>
                        	รวมค่าตอบแทนตลอดโครงการ
                        	<input type="text" value="120000"/>
                        	บาท
                        </span>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">6. ค่าตอบแทนเพิ่มเติมสำหรับนักศึกษา</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s2q6">
                          ไม่มี</label>
                        <label class="radio-inline">
                          <input type="radio" name="s2q6" checked>
                          มี</label>
                        <span>
                        	รวมค่าตอบแทนตลอดโครงการ
                        	<input type="text" value="58000"/>
                        	บาท
                        </span>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label">ข้อเสนอแนะ</label>
                    </div>
                    <div style="margin-left:25px">
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
           </div>
           
       </div>
       
       
       <!-- ################################## -->
        <div class="panel panel-success">
            <div class="panel-heading">
            	<h3>ด้านอาจารย์/นักวิจัย</h3>
            </div>
            
            <div class="panel-body">
            	<div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">1. องค์ความรู้และประสบการณ์ที่ได้จากการดำเนินงานในโครงการที่จะสามารถนำไปประยุกต์ใช้ในการเรียนการสอน</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s3q1" checked>
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="s3q1">
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="s3q1">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="s3q1">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="s3q1">
                          น้อยที่สุด</label>
                    </div>
                </div>
            
            	<div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">2. ผลงานส่วนหนึ่งส่วนใดของโครงการมีแนวโน้มที่จะนำไปขอผลงานวิชาการได้</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                      	  <input type="radio" name="s3q2">
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="s3q2" checked>
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="s3q2">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="s3q2">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="s3q2">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label">ข้อเสนอแนะ</label>
                    </div>
                    <div style="margin-left:25px">
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- ################################## -->
        <div class="panel panel-success">
            <div class="panel-heading">
            	<h3>ด้านนักศึกษา</h3>
            </div>
            
            <div class="panel-body">
            	<div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label">นักศึกษาได้รับองค์ความรู้และประสบการณ์ในเรื่องใดบ้างอย่างไร</label>
                    </div>
                    <div style="margin-left:25px">
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label">ข้อเสนอแนะ</label>
                    </div>
                    <div style="margin-left:25px">
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- ################################## -->
        <div class="panel panel-success">
            <div class="panel-heading">
            	<h3>ศูนย์อำนวยความสะดวก Talent Mobility</h3>
            </div>
            
            <div class="panel-body">
            	<div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">1. อำนวยความสะดวกในการติดต่อประสานงาน</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s5q1" checked>
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q1">
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q1">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q1">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q1">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">2. การติดตาม แจ้งข่าวสาร และสอบถามความช่วยเหลือ</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s5q2" checked>
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q2">
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q2">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q2">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q2">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
      				<div class="col-sm-12">
                		<label class="control-label">3. การช่วยเหลือเมื่อเกิดปัญหา</label>
                    </div>
                    <div style="margin-left:25px">
                        <label class="radio-inline">
                          <input type="radio" name="s5q3" checked>
                          มากที่สุด</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q3">
                          มาก</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q3">
                          ปานกลาง</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q3">
                          น้อย</label>
                        <label class="radio-inline">
                          <input type="radio" name="s5q3">
                          น้อยที่สุด</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label">ข้อเสนอแนะ</label>
                    </div>
                    <div style="margin-left:25px">
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              

        
      </div> <!-- end of modal body -->
        
      <div class="modal-footer">
        <div class="form-group col-sm-12" align="center">
          <button class="btn btn-default"> ตกลง </button>
          <a href="#" data-dismiss="modal" 
                   aria-hidden="true" class="btn btn-default center"> ยกเลิก </a> 
        </div>
      </div>
        
    </div> <!-- end of modal content -->
  </div> <!-- end of modal-dialog -->
</div> <!-- end of modal -->
