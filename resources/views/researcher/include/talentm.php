		<style>
			.dark-blue{
				color:#0B66A8;
			}
		</style>
        
        <script>
			$(document).ready(function(){
				$('#privateComDiv').hide();
				$('#conferenceStatusDiv').hide();
				$('#operatingTypeDiv').hide();
				$('#globalRelationDiv').hide();
				
				$("input[type='radio']").click(function(){
					var radioValue = $("input[name='privateOrg_status']:checked").val();
					if(radioValue == '1'){
						$('#privateComDiv').show();
					}
					else{
						$('#privateComDiv').hide();
					}
				});
				
				$("input[type='radio']").click(function(){
					var radioValue = $("input[name='committee_status']:checked").val();
					if(radioValue == '1'){
						$('#conferenceStatusDiv').show();
					}
					else{
						$('#conferenceStatusDiv').hide();
					}
				});
				
				$("input[type='radio']").click(function(){
					var radioValue = $("input[name='operating_type']:checked").val();
					if(radioValue == 'parttime'){
						$('#operatingTypeDiv').show();
					}
					else{
						$('#operatingTypeDiv').hide();
					}
				});
				
				$("input[type='radio']").click(function(){
					var radioValue = $("input[name='foreign_status']:checked").val();
					if(radioValue == '1'){
						$('#globalRelationDiv').show();
					}
					else{
						$('#globalRelationDiv').hide();
					}
				});				
				
			});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				var max_fields      = 10; //maximum input boxes allowed
				
				// ################# work with private company multi textfield ###############################
				var wrapper         = $(".input_fields_wrap"); //Fields wrapper
				var add_button      = $(".add_field_button"); //Add button ID
				var x = 1; //initlal text box count
				
				$(add_button).click(function(e){ //on add input button click
					e.preventDefault();
					if(x < max_fields){ //max input box allowed
						x++; //text box increment
						$(wrapper).append('<div style="margin-bottom:5px" class="form-group">'
						+' <div class ="col-sm-6">'
						+'   <input type="text" class="form-control" '
						+'    placeholder="รายละเอียดการร่วมงาน" name="privatework[]"/>'
						+' </div>'
						+'   <a href="#" class="remove_field">'
						+'     <i class="fa fa-minus-circle" style="color:red"></i> ลบ</a>'
						+'</div>'); //add input box
						
					}
				});
				
				$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
					e.preventDefault(); $(this).parent('div').remove(); 
					x--;
				});
				
				
				// ################# researchwork ###############################
				var wrapper2         = $(".input_fields_wrap2"); //Fields wrapper
				var add_button2      = $(".add_field_button2"); //Add button ID
				var x2 = 1; //initlal text box count
				
				$(add_button2).click(function(e){ //on add input button click
					e.preventDefault();
					if(x2 < max_fields){ //max input box allowed
						x2++; //text box increment
						$(wrapper2).append('<div style="margin-bottom:5px" class="form-group">'
						+' <div class ="col-sm-6">'
						+'   <input type="text" class="form-control" name="researchwork[]"/>'
						+' </div>'
						+'   <a href="#" class="remove_field2">'
						+'    <i class="fa fa-minus-circle" style="color:red"></i> ลบ</a>'
						+'</div>'); //add input box
						
					}
				});
				
				$(wrapper2).on("click",".remove_field2", function(e){ //user click on remove text
					e.preventDefault(); $(this).parent('div').remove(); 
					x2--;
				})
				
				
				// ################# conferenceCommittee ###############################
				var wrapper3         = $(".input_fields_wrap3"); //Fields wrapper
				var add_button3      = $(".add_field_button3"); //Add button ID
				var x3 = 1; //initlal text box count
				
				$(add_button3).click(function(e){ //on add input button click
					e.preventDefault();
					if(x3 < max_fields){ //max input box allowed
						x3++; //text box increment
						$(wrapper3).append('<div style="margin-bottom:5px" class="form-group">'
						+' <div class ="col-sm-6">'
						+'   <input type="text" class="form-control" name="conferenceCommittee[]"/>'
						+' </div>'
						+'   <a href="#" class="remove_field3">'
						+'    <i class="fa fa-minus-circle" style="color:red"></i> ลบ</a>'
						+'</div>'); //add input box
						
					}
				});
				
				$(wrapper3).on("click",".remove_field3", function(e){ //user click on remove text
					e.preventDefault(); $(this).parent('div').remove(); 
					x3--;
				})
				
				
				// ################# referencePerson ###############################
				var wrapper4         = $(".input_fields_wrap4"); //Fields wrapper
				var add_button4      = $(".add_field_button4"); //Add button ID
				var x4 = 1; //initlal text box count
				
				$(add_button4).click(function(e){ //on add input button click
					e.preventDefault();
					if(x4 < max_fields){ //max input box allowed
						x4++; //text box increment
						$(wrapper4).append('<div style="margin-bottom:5px" class="form-group">'
						+' <div class="col-sm-3">'
						+'   <input type="text" class="form-control" name="refPersonName[]"/></div>'
						+' <div class="col-sm-3">'
						+'   <input type="text" class="form-control col-sm-2" name="refPersonInst[]"/></div>'
						+' <div class="col-sm-3">'
						+'   <input type="text" class="form-control col-sm-2" name="refPersonRelation[]"/></div>'
						+' <a href="#" class="remove_field4">'
						+'    <i class="fa fa-minus-circle" style="color:red"></i> ลบ</a>'
						+'</div>'); //add input box
						
					}
				});
				
				$(wrapper4).on("click",".remove_field4", function(e){ //user click on remove text
					e.preventDefault(); $(this).parent('div').remove(); 
					x4--;
				})
				
				// ################# global relationship ###############################
				var wrapper5         = $(".input_fields_wrap5"); //Fields wrapper
				var add_button5      = $(".add_field_button5"); //Add button ID
				var x5 = 1; //initlal text box count
				
				$(add_button5).click(function(e){ //on add input button click
					e.preventDefault();
					if(x5 < max_fields){ //max input box allowed
						x5++; //text box increment
						$(wrapper5).append('<div style="margin-bottom:5px" class="form-group">'
						+' <div class ="col-sm-6">'
						+'   <input type="text" class="form-control" name="globalRelation[]"/>'
						+' </div>'
						+'   <a href="#" class="remove_field5">'
						+'    <i class="fa fa-minus-circle" style="color:red"></i> ลบ</a>'
						+'</div>'); //add input box
						
					}
				});
				
				$(wrapper5).on("click",".remove_field5", function(e){ //user click on remove text
					e.preventDefault(); $(this).parent('div').remove(); 
					x5--;
				})
				
				// ################# experties ###############################
				var wrapper6         = $(".input_fields_wrap6"); //Fields wrapper
				var add_button6      = $(".add_field_button6"); //Add button ID
				var x6 = 1; //initlal text box count
				
				$(add_button6).click(function(e){ //on add input button click
					e.preventDefault();
					if(x6 < max_fields){ //max input box allowed
						x6++; //text box increment
						$(wrapper6).append('<div style="margin-bottom:5px" class="form-group">'
						+' <div class ="col-sm-6">'
						+'   <input type="text" class="form-control" name="expertise[]"/>'
						+' </div>'
						+'   <a href="#" class="remove_field6">'
						+'    <i class="fa fa-minus-circle" style="color:red"></i> ลบ</a>'
						+'</div>'); //add input box
						
					}
				});
				
				$(wrapper6).on("click",".remove_field6", function(e){ //user click on remove text
					e.preventDefault(); $(this).parent('div').remove(); 
					x6--;
				})
			});
		</script>
        
        <div class="panel panel-default">
        <div class="panel-body"> 
        	<form class="form-horizontal container" role="form">
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">สนใจโครงการ Talent Mobility หรือไม่</label>
                <div class="col-sm-9">
                  <div style="float:left" >
                     <label class="radio-inline">
                      <input type="radio" name="joinTM" value="-1" />
                      ไม่สนใจ
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="joinTM" value="1" />
                      สนใจ
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputEmail1" class="col-sm-3 control-label">ปีเกิด (พ.ศ.)</label>
                <div class="col-sm-9">
                 <div style="float:left" >
                    <select class="form-control" name="birthyear" style="width: 120px">
                      <option value="">-</option>
                      <option value="2559"  >2559</option>
                      <option value="2558"  >2558</option>
                      <option value="2557"  >2557</option>
                      <option value="2556"  >2556</option>
                      <option value="2555"  >2555</option>
                      <option value="2554"  >2554</option>
                      <option value="2553"  >2553</option>
                      <option value="2552"  >2552</option>
                      <option value="2551"  >2551</option>
                      <option value="2550"  >2550</option>
                      <option value="2549"  >2549</option>
                      <option value="2548"  >2548</option>
                      <option value="2547"  >2547</option>
                      <option value="2546"  >2546</option>
                      <option value="2545"  >2545</option>
                      <option value="2544"  >2544</option>
                      <option value="2543"  >2543</option>
                      <option value="2542"  >2542</option>
                      <option value="2541"  >2541</option>
                      <option value="2540"  >2540</option>
                      <option value="2539"  >2539</option>
                      <option value="2538"  >2538</option>
                      <option value="2537"  >2537</option>
                      <option value="2536"  >2536</option>
                      <option value="2535"  >2535</option>
                      <option value="2534"  >2534</option>
                      <option value="2533"  >2533</option>
                      <option value="2532"  >2532</option>
                      <option value="2531"  >2531</option>
                      <option value="2530"  >2530</option>
                      <option value="2529"  >2529</option>
                      <option value="2528"  >2528</option>
                      <option value="2527"  >2527</option>
                      <option value="2526"  >2526</option>
                      <option value="2525"  >2525</option>
                      <option value="2524"  >2524</option>
                      <option value="2523"  >2523</option>
                      <option value="2522"  >2522</option>
                      <option value="2521"  >2521</option>
                      <option value="2520"  >2520</option>
                      <option value="2519"  >2519</option>
                      <option value="2518"  >2518</option>
                      <option value="2517"  >2517</option>
                      <option value="2516"  >2516</option>
                      <option value="2515"  >2515</option>
                      <option value="2514"  >2514</option>
                      <option value="2513"  >2513</option>
                      <option value="2512"  >2512</option>
                      <option value="2511"  >2511</option>
                      <option value="2510"  >2510</option>
                      <option value="2509"  >2509</option>
                      <option value="2508"  >2508</option>
                      <option value="2507"  >2507</option>
                      <option value="2506"  >2506</option>
                      <option value="2505"  >2505</option>
                      <option value="2504"  >2504</option>
                      <option value="2503"  >2503</option>
                      <option value="2502"  >2502</option>
                      <option value="2501"  >2501</option>
                      <option value="2500"  >2500</option>
                      <option value="2499"  >2499</option>
                      <option value="2498"  >2498</option>
                      <option value="2497"  >2497</option>
                      <option value="2496"  >2496</option>
                      <option value="2495"  >2495</option>
                      <option value="2494"  >2494</option>
                      <option value="2493"  >2493</option>
                      <option value="2492"  >2492</option>
                      <option value="2491"  >2491</option>
                      <option value="2490"  >2490</option>
                      <option value="2489"  >2489</option>
                      <option value="2488"  >2488</option>
                      <option value="2487"  >2487</option>
                      <option value="2486"  >2486</option>
                      <option value="2485"  >2485</option>
                      <option value="2484"  >2484</option>
                      <option value="2483"  >2483</option>
                      <option value="2482"  >2482</option>
                      <option value="2481"  >2481</option>
                      <option value="2480"  >2480</option>
                      <option value="2479"  >2479</option>
                      <option value="2478"  >2478</option>
                      <option value="2477"  >2477</option>
                      <option value="2476"  >2476</option>
                      <option value="2475"  >2475</option>
                      <option value="2474"  >2474</option>
                      <option value="2473"  >2473</option>
                      <option value="2472"  >2472</option>
                      <option value="2471"  >2471</option>
                      <option value="2470"  >2470</option>
                      <option value="2469"  >2469</option>
                      <option value="2468"  >2468</option>
                      <option value="2467"  >2467</option>
                      <option value="2466"  >2466</option>
                      <option value="2465"  >2465</option>
                      <option value="2464"  >2464</option>
                      <option value="2463"  >2463</option>
                      <option value="2462"  >2462</option>
                      <option value="2461"  >2461</option>
                      <option value="2460"  >2460</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="private" class="col-sm-3 control-label">เคยทำงาน/ร่วมงาน กับบริษัทเอกชน</label>
                <div class="col-sm-9">
                  <div style="float: left;">
                  <label class="radio-inline">
                    <input type="radio" id="privateOrgNo" 
                     name="privateOrg_status" value="-1" />
                    ไม่ใช่</label>
                  <label class="radio-inline">
                    <input type="radio"  id="privateOrgYes" 
                     name="privateOrg_status" value="1" />
                    ใช่</label>
                                                           
                  </div>
                  <!-- multi textfield -->
                  <div id="privateComDiv" class="col-sm-12 row">
                  	<div class="input_fields_wrap" style="margin-left:20px; margin-right:20px; margin-top:10px">
                        <div style="margin-bottom:5px" class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="รายละเอียดการร่วมงาน" 
                                type="text" name="privatework[]">
                            </div>   
                        </div>                 
                    </div>
                    <div style="margin-left:20px; margin-right:20px">
                        <a href="" class="add_field_button">
                          <i class="fa fa-plus-circle dark-blue"></i> เพิ่ม</a>
                    </div>
                  </div>
                   <!-- end of multi textfield -->
                    
                </div>
                
              </div>
              
              <div class="form-group">
                <label for="q_interest" class="col-sm-3 control-label">ความสนใจเฉพาะเรื่อง</label>
                <div class="col-sm-6">
                  <textarea class="form-control" placeholder="คั่นด้วย ," 
                    rows="4" id="q_interest" name="q_interest"></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">กิจกรรม/งานวิจัยเด่นที่เคยทำ</label>
                <div class="col-sm-9">
                
                  <!-- multi textfield -->
                  <div class="row">
                    <div class="input_fields_wrap2" style="margin-left:20px; margin-right:20px">
                        <div style="margin-bottom:5px" class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="researchwork[]">
                            </div>   
                        </div>                 
                    </div>
                    <div style="margin-left:20px; margin-right:20px">
                        <a href="" class="add_field_button2">
                        	<i class="fa fa-plus-circle dark-blue"></i> เพิ่ม</a>
                    </div>
              	  </div>
                  <!-- end of multi textfield -->
                  
                </div>
              </div>
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">เคยเป็นสมาชิกคณะกรรมการวิชาการ</label>
                <div class="col-sm-9">
                  <label class="radio-inline">
                    <input type="radio" id="committeeNo" name="committee_status" value="-1" />
                    ไม่ใช่
                  </label>
                  <label class="radio-inline">
                    <input type="radio" id="committeeYes" name="committee_status" value="1" />
                    ใช่
                  </label>
                  
                  <!-- multi textfield -->
                  <div id="conferenceStatusDiv" class="col-sm-12 row">
                  	<div class="input_fields_wrap3" style="margin-left:20px; margin-right:20px; margin-top:10px">
                        <div style="margin-bottom:5px" class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="ระบุ" 
                                type="text" name="conferenceCommittee[]">
                            </div>   
                        </div>                 
                    </div>
                    <div style="margin-left:20px; margin-right:20px">
                        <a href="" class="add_field_button3">
                          <i class="fa fa-plus-circle dark-blue"></i> เพิ่ม</a>
                    </div>
                  </div>
                   <!-- end of multi textfield -->
                </div>
              </div>
              
              <div class="form-group">
                <label for="skill" class="col-sm-3 control-label">
                	<sup><span class="red-color fa fa-asterisk"></span></sup>ทักษะความชำนาญเฉพาะด้าน 
                </label>
                <div class="col-sm-6">
                  	<!-- multi textfield -->
                  <div class="row" id="expertiesDiv">
                    <div class="input_fields_wrap6" style="margin-left:20px; margin-right:20px; margin-top:10px">
                        <div style="margin-bottom:5px" class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" 
                                placeholder="ระบุความชำนาญ" name="expertise[]">
                            </div>   
                        </div>                 
                    </div>
                    <div style="margin-left:20px; margin-right:20px; ">
                        <a href="" class="add_field_button6">
                        	<i class="fa fa-plus-circle dark-blue"></i> เพิ่ม</a>
                    </div>
              	  </div>
                  <!-- end of multi textfield -->

                </div>
              </div>
              
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">
                	ประสบการณ์ทำงานวิจัย (ปี)</label>
                <div class="col-sm-9">
                  <select class="form-control" name="experience" style="width:120px" >
                  <option value="0" selected >ไม่มี</option>
                  <option value="1"  >1 ปี</option>
                  <option value="2"  >2 ปี</option>
                  <option value="3"  >3 ปี</option>
                  <option value="4"  >4 ปี</option>
                  <option value=">= 5"  >มากกว่า 5 ปี</option>
                </select>
                </div>
              </div>
            
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">
                	ภูมิภาคที่ปฏิบัติงานได้ <br><span class="text-note">(ระบุได้มากกว่า 1 รายการ)</span></label>
                
                <div class="col-sm-8" >
                	<div style="margin-right:10px">
                    <label style="display: inline-block;width: 150px">
                      <input type="checkbox" name="operatingarea[]" value="กรุงเทพและปริมณฑล">
                      กรุงเทพและปริมณฑล</label>
                    <label style="display: inline-block;width: 150px">
                      <input type="checkbox" name="operatingarea[]" value="ภาคกลาง">
                      ภาคกลาง</label>
                    <label style="display: inline-block;width: 150px">
                      <input type="checkbox" name="operatingarea[]" value="ภาคเหนือ">
                      ภาคเหนือ</label>
                    <label style="display: inline-block;width: 150px">
                      <input type="checkbox" name="operatingarea[]" value="ภาคใต้">
                      ภาคใต้</label>
                    <label style="display: inline-block;width: 150px">
                      <input type="checkbox" name="operatingarea[]" value="ภาคตะวันออก">
                      ภาคตะวันออก</label>
                    <label style="display: inline-block;width: 150px">
                      <input type="checkbox" name="operatingarea[]" value="ภาคตะวันตก">
                      ภาคตะวันตก</label>
                    <label style="display: inline-block;width: 150px">
                      <input type="checkbox" name="operatingarea[]" value="ภาคตะวันออกเฉียงเหนือ">
                      ภาคตะวันออกเฉียงเหนือ</label>
                    </div>
                </div>
              </div>
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">บุคคลอ้างอิง</label>
                <div class="col-sm-8">
                  <!-- multi textfield -->
                  <div id="referencePersonDiv" class="col-sm-12 row">
                  	<div class="input_fields_wrap4" style="margin-left:20px; margin-right:20px; margin-top:10px">
                        <div style="margin-bottom:5px" class="form-group">
                        	<div class="col-sm-3">
								<input type="text" class="form-control" 
                                	placeholder="ชื่อ-สกุล" name="refPersonName[]"/></div>
							<div class="col-sm-3">
								<input type="text" class="form-control" 
                                	placeholder="หน่วยงาน" name="refPersonInst[]"/></div>
							<div class="col-sm-3">
								<input type="text" class="form-control" 
                                	placeholder="ความสัมพันธ์" name="refPersonRelation[]"/></div>                        
                         </div>                 
                    </div>
                    <div style="margin-left:20px; margin-right:20px">
                        <a href="" class="add_field_button4">
                          <i class="fa fa-plus-circle dark-blue"></i> เพิ่ม</a>
                    </div>
                  </div>
                   <!-- end of multi textfield -->
                </div>
              </div>
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">
                	<sup><span class="red-color fa fa-asterisk"></span></sup>
                    ค่าตอบแทนที่คาดหวัง <br><span class="text-note">(บาท/เดือน)</span></label>
                <div class="col-sm-8">
                  <select class="form-control" name="salary" id="salary" style="width: 150px" required>
                  <option value="" selected >ไม่ระบุ</option>
                  <option value="25001-30000"  >25001 - 30000</option>
                  <option value="30001-35000"  >30001 - 35000</option>
                  <option value="35001-40000"  >35001 - 40000</option>
                  <option value="40001-45000"  >40001 - 45000</option>
                  <option value="45001-50000"  >45001 - 50000</option>
                  <option value="50001-55000"  >50001 - 55000</option>
                  <option value="55001-60000"  >55001 - 60000</option>
                  <option value=">= 60001"  >มากกว่า 60000</option>
                </select>
                </div>
              </div>
             
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">
                	สามารถปฏิบัติงานได้อย่างน้อย <br><span class="text-note">(เดือน)</span></label>
                <div class="col-sm-8">
                 <select class="form-control" name="operating_period" style="width: 150px">
                  <option value="3"  >3 เดือน</option>
                  <option value="4"  >4 เดือน</option>
                  <option value="5"  >5 เดือน</option>
                  <option value="6"  >6 เดือน</option>
                  <option value="7"  >7 เดือน</option>
                  <option value="8"  >8 เดือน</option>
                  <option value="9"  >9 เดือน</option>
                  <option value="10"  >10 เดือน</option>
                  <option value="11"  >11 เดือน</option>
                  <option value="12"  >12 เดือน</option>
                  <option value="13"  >13 เดือน</option>
                  <option value="14"  >14 เดือน</option>
                  <option value="15"  >15 เดือน</option>
                  <option value="16"  >16 เดือน</option>
                  <option value="17"  >17 เดือน</option>
                  <option value="18"  >18 เดือน</option>
                  <option value="19"  >19 เดือน</option>
                  <option value="20"  >20 เดือน</option>
                  <option value="21"  >21 เดือน</option>
                  <option value="22"  >22 เดือน</option>
                  <option value="23"  >23 เดือน</option>
                  <option value="24"  >24 เดือน</option>
                </select>
                </div>
              </div>
              
              
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">รูปแบบในการปฏิบัติงาน</label>
                <div class="col-sm-8">
                  	<label class="radio-inline">
                      <input type="radio"id="operatingtypeFull" 
                       name="operating_type" value="fulltime" />
                      เต็มเวลา (Full-time)
                    </label>
                    <label class="radio-inline">
                      <input type="radio" id="operatingtypePart" 
                       name="operating_type" value="parttime" />
                      ไม่เต็มเวลา (Part-time)
                    </label>
                    <div class="col-sm-8 row" id="operatingTypeDiv"> 
                       สัดส่วนการทำงานต่อสัปดาห์
                        <select name="operating_fte" style="width: 70px" class="form-control">
                          <option value="20"  >20 %</option>
                          <option value="40"  >40 %</option>
                          <option value="60"  >60 %</option>
                          <option value="80"  >80 %</option>
                        </select>
                     </div>
                </div>
              </div>
              
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">ระยะเวลาที่เริ่มปฏิบัติงานได้</label>
                <div class="col-sm-8">
                  <label class="radio-inline">
                  <input type="radio" name="operating_start" value="0" />
                  ทันที</label>
                <label class="radio-inline">
                  <input type="radio" name="operating_start" value="3" />
                  3 เดือน</label>
                <label class="radio-inline">
                  <input type="radio" name="operating_start" value="6" />
                  6 เดือน</label>
                <label class="radio-inline">
                  <input type="radio" name="operating_start" value="12" />
                  1 ปี</label>
                <label class="radio-inline">
                  <input type="radio" name="operating_start" value="24" />
                  2 ปี</label>
                </div>
              </div>
              
              
              <div class="form-group">
                <label for="joinTM" class="col-sm-3 control-label">เคยมีความร่วมมือกับต่างประเทศ</label>
                <div class="col-sm-8">
                  <label class="radio-inline">
                    <input type="radio" id="foreignNo" name="foreign_status" value="-1" />
                    ไม่ใช่</label>
                  <label class="radio-inline">
                    <input type="radio" id="foreignYes" name="foreign_status" value="1" />
                    ใช่</label>
                    
                  <!-- multi textfield -->
                  <div class="row" id="globalRelationDiv">
                    <div class="input_fields_wrap5" style="margin-left:20px; margin-right:20px; margin-top:10px">
                        <div style="margin-bottom:5px" class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="globalRelation[]">
                            </div>   
                        </div>                 
                    </div>
                    <div style="margin-left:20px; margin-right:20px; ">
                        <a href="" class="add_field_button5">
                        	<i class="fa fa-plus-circle dark-blue"></i> เพิ่ม</a>
                    </div>
              	  </div>
                  <!-- end of multi textfield -->
                  
                </div>
              </div>
              
              
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-8" style="margin-top:20px">
                	<button class="btn btn-success">บันทึก</button>
                </div>
              
            </form>
        

        </div>
        </div>
