<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!-->

<html class="no-js">

<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Login</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Favicon -->
<link rel="shortcut icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap.css') }}">

<!-- Fonts  -->
<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('css/simple-line-icons.css') }}">

<!-- Switchery -->
<link rel="stylesheet" href="{{ url('plugins/switchery/switchery.min.css') }}">

<!-- CSS Animate -->
<link rel="stylesheet" href="{{ url('css/animate.css') }}">

<!-- Custom styles for this theme -->
<link rel="stylesheet" href="{{ url('css/main.css') }}">

<!-- Feature detection -->
<script src="{{ url('js/vendor/jquery-3.1.0.min.js') }}"></script> 
<script src="{{ url('plugins/filer/js/jquery.filer.js') }}"></script> 
<script src="{{ url('plugins/bootstrap/js/bootstrap.min.js') }}"></script> 
<script src="{{ url('plugins/navgoco/jquery.navgoco.min.js') }}"></script> 
<script src="{{ url('plugins/switchery/switchery.min.js') }}"></script> 
<script src="{{ url('plugins/pace/pace.min.js') }}"></script> 
<script src="{{ url('plugins/fullscreen/jquery.fullscreen-min.js') }}"></script> 
<script src="{{ url('plugins/dataTables/js/jquery.dataTables.js') }}"></script>
<script src="{{ url('plugins/dataTables/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ url('js/vendor/modernizr-2.6.2.min.js') }}"></script>

<script src="{{ url('js/src/app.js') }}"></script>
<script src="{{ url('plugins/mask/js/jquery.maskedinput.min.js') }}"></script>
<script src="{{ url('js/vendor/jquery.validate.min.1.15.js') }}"></script>>


<script>	
 	$(document).ready(function(e) {
		//need to run once the document is ready
		$('#industry_other').hide();
		
        $('#industry_type').change(function(){
             if($('#industry_type option:selected').val() == "type_other"){
			 	$('#industry_other').show();
				$('#industry_other').focus();
			 }
			 else{
				 $('#industry_other').hide();
			 }
        });
    });
 </script>
 
   <script>
   		$(document).ready(function() {
			app.formMask();
			
			// just for the demos, avoids form submit
			jQuery.validator.setDefaults({
			  debug: true,
			  success: "valid"
			});
			
			$( "#researcher-form").validate({
			  
			  rules: {
				researcher_pass : {
                    minlength : 5,
					required: true
                },
                researcher_confirmpass : {
                    minlength : 5,
					required: true,
                    equalTo : '[name="researcher_pass"]'
                },
				idcard_no: {
					minlength: 13,
					maxlength: 13,
					required: true,
					number: true
				}
			  }
			});
			
			$( "#company-form" ).validate({
			  
			  rules: {
				company_pass : {
                    minlength : 5,
					required: true
                },
                company_confirmpass : {
                    minlength : 5,
					required: true,
                    equalTo : '[name="company_pass"]'
                },
				company_code: {
				  required: true,
				  number: true
				},
				tel: {
				  required: true,
				  number: true
				}
			  }
			});
		});

        
  </script> 

</head>

<body>
<section id="main-wrapper" class="theme-default">
  <div class=" navbar-default" >
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" 
              	class="navbar-toggle collapsed" 
              	data-toggle="collapse" data-target="#navbar-collapse-1" 
              	aria-expanded="false"> 
                	<span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand img-responsive" href="http://tm-laravel:8888/public/index.php"> 
        	<img src="{{ url('img/logo-TM.png') }}" /> 
        </a> 
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right login-padding">
          <form method="post" id="login-form" class="navbar-form">
            <input id="username" name="username" type="text" placeholder="ชื่อผู้ใช้" />
            <input id="password" name="password" type="password" placeholder="รหัสผ่าน" />
            <button id="loignSubmit" class="btn btn-submit btn-sm">เข้าสู่ระบบ</button>
            
            <div class="small-font"> 
            	<a href=".#" id="m_forgotpwd">ลืมรหัสผ่าน</a> 
            </div>
            
            <span id="msgbox_login" style="float: 
                  	right;margin-top: -20px;margin-left: 100px;"> </span>
          </form>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </div>
  
  <!--sidebar left start--> 
  
  <!--sidebar left end--> 
  
  <!--main content start-->
  
  <section class="">
    
    <section id="main-content" class="animated fadeInUp borderMargin">
      <div class="row"> 
        
        <!-- left panel -->
        <div class="col-md-3">
        
            <div class="col-md-12 nospace">
              <div class="panel panel-grey">
                <div class="panel-heading">
                  <h3 class="panel-title">สถิติจำนวนโครงการ</h3>
                  <div class="actions pull-right"> 
                    <i class="fa fa-expand"></i> 
                    <i class="fa fa-chevron-down"></i> 
                  </div>
                </div>
                <div class="panel-body"> 
                    <img class="img-responsive" 
                                        src="{{ url('img/tmp/number-of-project.png') }}"> 
                </div>
              </div>
            </div>
        
            <div class="col-md-12 nospace">
              <div class="panel panel-grey">
                <div class="panel-heading">
                  <h3 class="panel-title">สถิติการศึกษา</h3>
                  <div class="actions pull-right"> 
                    <i class="fa fa-expand"></i> 
                    <i class="fa fa-chevron-down"></i>  
                  </div>
                </div>
                <div class="panel-body">
                	<img class="img-responsive" 
                                        src="{{ url('img/tmp/number-of-degree.png') }}">
                </div>
              </div>
            </div>
            
            <div class="col-md-12 nospace">
              <div class="panel panel-grey">
                <div class="panel-heading">
                  <h3 class="panel-title">สถิตินักวิจัยจำแนกรายจังหวัด</h3>
                  <div class="actions pull-right"> 
                    <i class="fa fa-expand"></i> 
                    <i class="fa fa-chevron-down"></i>  
                  </div>
                </div>
                <div class="panel-body">
                	<img class="img-responsive" 
                                        src="{{ url('img/tmp/project-in-each-province.png') }}">
                </div>
              </div>
            </div>
        </div>
        
        <!-- middle panel -->
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">ลงทะเบียน</h3>
              <div class="actions pull-right"> 
              	<i class="fa fa-expand"></i> 
                <i class="fa fa-chevron-down"></i> 
              </div>
            </div>
            <div class="panel-body">
              <div class="tab-wrapper tab-primary">
                <ul class="nav nav-tabs">
                  <li class="active"> 
                  	<a href="#home1" data-toggle="tab">นักวิจัย</a> 
                  </li>
                  <li> 
                  	<a href="#profile1" data-toggle="tab">บริษัท</a> 
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="home1">
                    <form method="post" id="researcher-form" role="form" class="form-horizontal form-border">
                    
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อ (ไทย)</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="firstname_th" name="firstname_th" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>นามสกุล (ไทย)</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="lastname_th" name="lastname_th" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อ (อังกฤษ)</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="firstname_en" name="firstname_en" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>นามสกุล (อังกฤษ)</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="lastname_en" name="lastname_en" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>อีเมล์ที่ติดต่อของท่าน</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="email" type="email" name="email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>หมายเลขบัตรประชาชน</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" id="idcard_no" name="idcard_no" 
                                   required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>รหัสผ่าน</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="researcher_pass" 
                                type="password" id="researcher_pass" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>ยืนยันรหัสผ่าน</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="password" id="researcher_confirmpass"
                                name="researcher_confirmpass" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">
                            	<sup><span class="red-color fa fa-asterisk"></span></sup>ป้อนอักขระที่คุณเห็น</label>
                            <div class="col-sm-7 col-lg-6">
                              <div class="col-sm-6 form-inline btn-tooltip"> 
                                <img src="captcha.php" id="captcha"/> 
                                <img src="{{ url('img/icon-refresh.png') }}" 
                                    id="captcha_refresh" data-toggle="tooltip" 
                                    data-placement="top" title="เปลี่ยนอักขระ"/> 
                                <img src="{{ url('img/icon-info.png') }}" 
                                    id="captcha_info" data-toggle="tooltip" 
                                    data-placement="right" 
                                    title="เพื่อป้องกันบอตหรือโปรแกรมอัตโนมัติ
                                    ทำการส่งข้อความไม่พึงประสงค์ เช่น สแปมหรือโฆษณา"/> 
                                    
                                <input width="5px" id="captcha_code" 
                                           name="captcha_code"  required />
                              </div>                          
                          </div>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-6">
                                <button id="researcherSubmit" type="submit" class="btn btn-success">
                                  ลงทะเบียน
                                </button>
                            </div>
                        </div>
                    </form>
                  </div>
                  
                  <div class="tab-pane" id="profile1">
                  	<form method="post" action="" id="company-form" role="form" class="form-horizontal">
                    <div class="alert alert-success">
                      <div class="row">
                    	<div class="col-sm-6">
                          <label class="control-label small-font">
                          	<sup><span class="red-color fa fa-asterisk"></span></sup>ชื่อบริษัท</label>
                          <input class="form-control" id="company" name="company" required style="width: 95%">
                        </div>
                      	<div class="col-sm-6">
                          <label class="control-label small-font">
                             <sup><span class="red-color fa fa-asterisk"></span></sup>เลขทะเบียนนิติบุคคล
                          </label>
                          <div class="col-sm-3 input-group" style="width: 98%" >
                          	<input class="form-control" id="company_code" name="company_code" required="">
                            <span class="input-group-btn" style="margin-top:0px">
                                <button class="btn btn-default" type="button" id="btn-companyCode"> 
                                    <i class="fa fa-search"></i> 
                                </button>
                            </span> 
                          </div>
                          <div id="errNm1"></div>
                          
                      	</div>
                      </div>
                    </div>
                    
                    <div class="row">
                    	<!-- left box -->
                    	<div class="col-sm-6  border-left">
                            <div class="panel panel-grey ">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="control-label" for="address">เลขที่</label>
                                        <input class="form-control" type="text" id="address" name="address">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="building">อาคาร/หมู่บ้าน</label>                                        <input class="form-control" type="text" id="building" name="building">
                                    </div>
                                    <div class="form-group">
                                      	<label class="control-label" for="floor">ชั้น</label>
                                        <input class="form-control" type="text" id="floor" 
                                        name="floor" style="padding: 0px">
                                    </div>
                                    <div class="form-group">
                                      	<label class="control-label" for="road">ถนน</label>
                                        <input class="form-control" type="text" id="road" name="road">
                                    </div>
                                    <div class="form-group">
                                      	<label class="control-label" for="province">
                                        	<sup><span class="red-color fa fa-asterisk"></span></sup>จังหวัด
                                      	</label>
                                        <select id="province" name="province" class="form-control" required="">
                                          <option disabled selected value> -- เลือกจังหวัด -- </option>
                                          <option value="1">test 1</option>
                                          <option value="2">test 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      	<label class="control-label" for="amphur">
                                        	<sup><span class="red-color fa fa-asterisk"></span></sup>อำเภอ/เขต
                                      	</label>
                                        <select id="amphur" name="amphur" class="form-control" required="">
                                          <option disabled selected value> -- เลือก อำเภอ/เขต -- </option>
                                          <option value="1">test 1</option>
                                          <option value="2">test 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      	<label class="control-label" for="tambon">ตำบล/แขวง</label>
                                        <select id="tambon" name="tambon" class="form-control">
                                          <option disabled selected value> -- เลือก ตำบล/แขวง -- </option>
                                          <option value="1">test 1</option>
                                          <option value="2">test 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                      	<label class="control-label" for="postcode">รหัสไปรษณีย์</label>
                                        <input class="form-control" type="text" id="postcode" name="postcode">
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label" for="tel">
                                        <sup><span class="red-color fa fa-asterisk"></span></sup>โทรศัพท์
                                      </label>
                                        <input class=" form-control required" 
                                        type="text" id="tel" name="tel" placeholder="02xxxxxxx">
                                    </div>
                                    
                                    <div class="form-group">
                              			<label class="control-label" for="fax">โทรสาร</label>
                                        <input class=" form-control" type="text" id="fax" 
                                        name="fax" placeholder="02xxxxxxx">
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="control-label" for="mobile">มือถือ</label>
                                        <input class=" form-control" type="text" id="mobile" 
                                		name="mobile" placeholder="08xxxxxxxx">
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="control-label" for="email" >
                                        	<sup><span class="red-color fa fa-asterisk"></span></sup>อีเมลล์</label>
                                        <input class=" form-control required" type="email" 
                                		id="email" name="email" placeholder="mymail@company.com" class="email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- right box -->
                        <div class="col-sm-6" >                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                	<div class="form-group">
                                        <label class="control-label">ขนาดบริษัท</label>
                                        <div >
                                            <div class="radio">
                                                <label><input class="icheck" type="radio" 
                                                checked="" name="company_type">
                                                ขนาดใหญ่</label>
                                            </div>
                                            <div class="radio">
                                                <label><input class="icheck" type="radio" name="company_type">
                                                ขนาดกลางและขนาดย่อม</label>
                                            </div>
                                            <div class="radio">
                                                <label><input class="icheck" type="radio" name="company_type">
                                                วิสาหกิจชุมชน / อื่นๆ</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="control-label">อุตสาหกรรม</label>
                                          <select class="form-control" id="industry_type" name="industry_type">
                                            <option disabled selected value> -- เลือกประเภทอุตสาหกรรม -- </option>
                                            <option value="ข้าวและผลิตภัณฑ์จากข้าว">ข้าวและผลิตภัณฑ์จากข้าว</option>
                                            <option value="มัน อ้อย ปาล์ม เพื่อพลังงาน">มัน อ้อย ปาล์ม เพื่อพลังงาน</option>
                                            <option value="ยางและผลิตภัณฑ์">ยางและผลิตภัณฑ์</option>
                                            <option value="อาหารแปรรูป">อาหารแปรรูป</option>
                                            <option value="เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์">เครื่องใช้ไฟฟ้าและอิเล็กทรอนิกส์</option>
                                            <option value="ยานยนต์">ยานยนต์</option>
                                            <option value="พลาสติกและปิโตรเคมี">พลาสติกและปิโตรเคมี</option>
                                            <option value="แฟชั่น (สิ่งทอ อัญมณี เครื่องหนัง)">
                                            แฟชั่น (สิ่งทอ อัญมณี เครื่องหนัง)</option>
                                            <option value="ท่องเที่ยวและสาขาต่อเนื่อง">ท่องเที่ยวและสาขาต่อเนื่อง</option>
                                            <option value="โลจิสติกส์และสาขาต่อเนื่อง">โลจิสติกส์และสาขาต่อเนื่อง</option>
                                            <option value="ก่อสร้างและบริการต่อเนื่อง">ก่อสร้างและบริการต่อเนื่อง</option>
                                            <option value="เศรษฐกิจสร้างสรรค์และดิจิทัล">เศรษฐกิจสร้างสรรค์และดิจิทัล</option>
                                            <option value="type_other">อื่นๆ</option>
                                          </select>
                                          
                                            <input type="text" class="form-control" 
                                            id="industry_other" name="industry_other" 
                                            placeholder="ระบุประเภทอุตสาหกรรม" />

                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="control-label" >ผลิตภัณฑ์</label>
                                        <textarea class="form-control" placeholder="คั่นด้วย ," 
                               			id="product" name="product"></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="control-label" >
                                        	<sup><span class="red-color fa fa-asterisk"></span></sup>
                                            ชื่อ-สกุล ผู้ติดต่อประสานงาน</label>
                                        <input class="form-control required" 
                                		type="text" id="pcontact_name" name="pcontact_name" 
                                        placeholder="ชื่อและสกุล" value="">
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="control-label" for="mobile">
                                        เบอร์โทร ผู้ติดต่อประสานงาน</label>
                                        <input class="form-control" type="text" id="pcontact_tel" 
                                	 	name="pcontact_tel" placeholder="08xxxxxxxx">
                                    </div>
                                    
                                    <div class="form-group">
                                    	<label class="control-label" for="mobile">
                                        	<sup><span class="red-color fa fa-asterisk"></span></sup>
                                            อีเมลล์ ผู้ติดต่อประสานงาน</label>
                                        <input type="email" class="form-control" id="pcontact_email" 
                                        placeholder="mymail@mail.com" required="">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="control-label">
                                            <sup><span class="red-color fa fa-asterisk"></span></sup>รหัสผ่าน</label>
                                        <input class="form-control" name="company_pass" 
                                            type="password" id="company_pass" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">
                                            <sup><span class="red-color fa fa-asterisk"></span></sup>
                                            ยืนยันรหัสผ่าน</label>
                                        <input class="form-control" type="password" id="company_confirmpass"
                                            name="company_confirmpass" required>
                                    </div>
                                    
                                    <div class="form-group">
                                    	 <img src="captcha.php" id="captcha" />
                          
                                          <img src="{{ url('img/icon-refresh.png') }}" 
                                            id="captcha_refresh" data-toggle="tooltip" 
                                            data-placement="top" title="เปลี่ยนอักขระ" 
                                            style="cursor: pointer" /> 
                                            <img src="{{ url('img/icon-info.png') }}" 
                                                id="captcha_info" data-toggle="tooltip" 
                                                data-placement="right" 
                                                title="เพื่อป้องกันบอตหรือโปรแกรมอัตโนมัติ
                                                ทำการส่งข้อความไม่พึงประสงค์ เช่น สแปมหรือโฆษณา"/> 
                                            
                                          <input name="captcha_code" type="text" id="captcha_code" 
                                            required placeholder="ป้อนอักขระ" class="input" 
                                            style="margin-left: -25px;margin-top: 5px;width: 125px" />
                                    </div>
                                    
                                    <button class="btn btn-success" >ลงทะเบียน
                            </button>
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
        </div>
        
        <!-- right panel -->
        <div class="col-md-3">
        	<div class="col-md-12 nospace">
              <div class="panel panel-grey">
                <div class="panel-heading">
                  <h3 class="panel-title">ขั้นตอนการลงทะเบียน</h3>
                  <div class="actions pull-right"> 
                    <i class="fa fa-expand"></i> 
                    <i class="fa fa-chevron-down"></i> 
                  </div>
                </div>
                <div class="panel-body small-font">
                    <ul style="margin-left: -25px">
                      <li>นักวิจัย</li>
                      1. กรอกข้อมูล <br/>
                      2. คลิกปุ่ม ลงทะเบียน <br/>
                      3. ระบบจะส่งข้อมูลการใช้งานให้ทางอีเมล์ที่ท่านลงทะเบียน
                      <li>บริษัท/ผู้ประกอบการ</li>
                      1. กรอกข้อมูล <br/>
                      2. คลิกปุ่ม ลงทะเบียน <br/>
                      3. รอเจ้าหน้าที่ Clearing House ตรวจสอบและอนุมัติ <br/>
                      4. เมื่ออนุมัติ ระบบจะส่งข้อมูลการใช้งานให้ทางอีเมล์ที่ท่านลงทะเบียน
                    </ul>
                </div>
              </div>
            </div>
          
            <div class="col-md-12 nospace">
              <div class="panel panel-grey">
                <div class="panel-heading">
                  <h3 class="panel-title">คู่มือการใช้งาน</h3>
                  <div class="actions pull-right"> 
                    <i class="fa fa-expand"></i> 
                    <i class="fa fa-chevron-down"></i> 
                  </div>
                </div>
                <div class="panel-body small-font">
                    <ul style="margin-left: -25px">
                      <li> 
                        <i class="fa fa-angle-double-right"></i> 
                        <a href="../manual/TM-Manual-Researcher.pdf"> 
                            <i class="fa fa-file-pdf-o"></i> สำหรับนักวิจัย/ผู้เชี่ยวชาญ 
                        </a> 
                      </li>
                      <li> 
                        <i class="fa fa-angle-double-right"></i> 
                        <a href="../manual/TM-Manual-Company.pdf"> 
                            <i class="fa fa-file-pdf-o"></i> สำหรับบริษัท/ผู้ประกอบการ 
                        </a> 
                      </li>
                    </ul>
                </div>
                <div class="panel-footer" align="center">
                    <a href="contact.php" style="color: ">ติดต่อสอบถาม"</a>
                </div>
              </div>
            </div>
        
        </div>
      </div>
       
    </section>
  </section>
  
  <!--main content end--> 
  
</section>




</body>
</html>
