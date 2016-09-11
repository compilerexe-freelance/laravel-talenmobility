<?php
  $researcher_work_history = DB::table('researcher_work_histories')->get();
?>

<script>
  $('#btnHistAdd').click(function(e) {
    //$('#btnDelete').hide();
    //clearForm();
    $('#histModal').modal('show');
  });

  $(document).ready(function() {
    $('#histModal').appendTo("body");

    $('#tableHistData').DataTable( {
      "scrollX": true,
      "oLanguage":
      {
        "sProcessing": "กำลังดำเนินการ...",
        "sLengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
        "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
        "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
        "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
        "sInfoFiltered": "(จากรายการทั้งหมด _MAX_ รายการ)",
        "sSearch": "ค้นหา :",
        "oPaginate":
        {
          "sFirst": "เริ่มต้น",
          "sPrevious": "ก่อนหน้า",
          "sNext": "ถัดไป",
          "sLast": "สุดท้าย"
        }
      }
        /*"processing": true,
        "serverSide": true,
        "ajax": "test.php"*/
    });
  });

  $(document).on("click", "#tableHistData tbody", function() {
    $('#histModal').modal('show');
  });
</script>

<script>
  $(document).ready(function() {
    app.formMask();
  });
</script>

        <div class="panel panel-default">
          <div class="panel-body">
            <table id="tableHistData" width="inherit" border="0" cellspacing="0" cellpadding="0"
              class="table table-striped table-bordered table-hover profileBox">
              <thead>
                <tr>
                  <th width="20%">ช่วงปีที่ทำงาน</th>
                  <th width="25%">ตำแหน่ง</th>
                  <th width="30%">หน่วยงาน</th>
                  <th width="25%">ลักษณะงานที่รับผิดชอบ</th>
                </tr>
              </thead>
              <tbody>
              	<!-- <tr>
                  <td width="20%">2550-2559</td>
                  <td width="25%">โปรแกรมเมอร์</td>
                  <td width="30%">สวทช</td>
                  <td width="25%">เขียนโปรแกรม</td>
                </tr> -->
                @foreach ($researcher_work_history as $info)
                  <tr>
                    <td>{{ $info->year_start }}-{{ $info->year_end }}</td>
                    <td>{{ $info->position }}</td>
                    <td>{{ $info->institution }}</td>
                    <td>{{ $info->job }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-12">
          <button id="btnHistAdd" type="button" class="btn btn-sm btn-success"
            data-toggle="modal">+ เพิ่มข้อมูล
          </button>
          <span class="msgNote"> ( ต้องระบุอย่างน้อย 1 รายการ ) </span>
        </div>

        <div id="histModal"class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                  aria-hidden="true">&times;
                </button>
                <h4 id="modal_title" class="modal-title text-info">
                    <i class="fa fa-building fa-2x"></i> ข้อมูลประวัติการทำงาน
                </h4>
              </div>

              <form id="workForm" name="workForm" action="{{ url('/researcher_insert_work_history') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                  {{ csrf_field() }}
                  <div class="modal-body">

                      <div class="form-group col-lg-12">
                        <div class="msgBox hide" id="msgData"></div>
                      </div>
                      <div class="form-group">
                        <label for="year_start" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>ช่วงปีที่ทำงาน (พ.ศ.)
                        </label>
                        <div class="col-sm-8">
                          <div class="col-sm-4" style="margin-right:20px; padding-left:0px">
                            <div class="input-group col-sm-4"  >
                              <span class="input-group-addon" id="basic-addon1">จาก</span>
                              <input id="yearMask1" type="text" name="from" placeholder="yyyy"
                                class="form-control" style="width:90px" value=""
                                required=""/>
                            </div>
                          </div>
                          <div class="col-sm-4" style="padding-left:0px">
                            <div class="input-group col-sm-4">
                              <span class="input-group-addon" id="basic-addon2">ถึง&nbsp;&nbsp;</span>
                              <input id="yearMask2" type="text" name="current" placeholder="yyyy"
                               class="form-control" style="width:90px" required=""/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="position" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>ตำแหน่ง
                        </label>
                        <div class="col-sm-6">
                          <input id="position" name="position" type="text" value=""
                            class="form-control" required="" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="institution" class="col-sm-4 control-label">
                          <sup><span class="red-color fa fa-asterisk"></span></sup>สังกัด
                        </label>
                        <div class="col-sm-6">
                          <input id="institution" name="institution" type="text"
                            class=" form-control" value=""  required=""/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="job_work" class="col-sm-4 control-label">ลักษณะงานที่รับผิดชอบ</label>
                        <div class="col-sm-6">
                          <textarea name="work_job" rows="3" id="work_job" class="form-control"
                            style="height: 100px; width: 100%">
                          </textarea>
                        </div>
                      </div>
                      <input type="hidden" name="id" id="id" value="" />
                      <div class="form-group has-warning">
                        <div class="col-sm-4 col-sm-offset-4">
                          <p class="text-danger">(* จำเป็นต้องกรอกข้อมูล)</p>
                        </div>
                      </div>

                  </div>
                  <div class="modal-footer">
                    <div class="form-group" align="center">
                      <button id="btnYes" class="btn btn-success">
                        <i class="fa fa-save"></i> บันทึก
                      </button>
                      <a href="#" data-dismiss="modal" id="btnCancel"
                        aria-hidden="true" class="btn btn-default center">
                        <i class="fa fa-remove"></i> ยกเลิก
                      </a>
                      <div class="col-sm-3 pull-right">
                          <button id="btnDelete" class="btn btn-danger" title="ลบรายการนี้" alt="ลบรายการนี้">
                            <i class="fa fa-trash"></i>
                          </button>
                        </div>
                     </div>
                  </div>
              </form>

            </div>
          </div>
        </div>
