<!DOCTYPE html>

<html class="no-js">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>TM Database</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Favicon -->
<link rel="shortcut icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ url('plugins/bootstrap/css/bootstrap.min.css') }}">

<!-- Fonts  -->
<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('css/simple-line-icons.css') }}">

<!-- Switchery -->
<link rel="stylesheet" href="{{ url('plugins/switchery/switchery.min.css') }}">

<!-- CSS Animate -->
<link rel="stylesheet" href="{{ url('css/animate.css') }}">

<!-- Custom styles for this theme -->
<link rel="stylesheet" href="{{ url('css/main.css') }}">

<!-- DataTables-->
<link rel="stylesheet" href="{{ url('plugins/dataTables/css/dataTables.css') }}">

<link rel="stylesheet" href="{{ url('plugins/filer/css/jquery.filer.css') }}">


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
<script src="{{ url('js/vendor/jquery.validate.min.1.15.js') }}"></script>

<script>
	$(document).ready(function(){
		appendModal("{{ url('clearinghouse/profileimg-modal') }}", "clearingHouseProfileImg");
		appendModal("{{ url('clearinghouse/project-status') }}", "statusModal");
	});
	
	$('#statusBut').click(function(e) {
		displayModal('statusModal');
    });
</script>

<script>

	function loadContent(targetURL){
		jQuery('#content').html('');
		
		$.ajax({
			url : targetURL,
			dataType: "text",
			success : function (data) {
				$("#content").html(data);
			}
		 });	
	}
	
	function registerProj() {
		loadContent("{{ url('company/project-registration') }}");  
	}
	
	function showCompanyProjectList() {
		loadContent("{{ url('company/project-list') }}");  
	}
	
	function showProfilePage() {
		loadContent("{{ url('company/project') }}");  
	}
	
	function openProj_basicinfo_tab(cid) {
		loadContent("{{ url('company/project-info-tab') }}");  
	}
	
	function openProj_researcher_tab(cid) {
		loadContent("{{ url('company/project-researcher-tab') }}");  
	}
	
	function openProj_researcher_add_tab(cid) {
		loadContent("{{ url('company/project-researcher-add-tab') }}");  
	}
	
	
	$(document).ready(function() {
		/* Do this once at the beginning */
		$("#panel_header").text('บริหารจัดการโครงการ');;
		loadContent("{{ url('company/project-list') }}");
		
		$('a').click(function() { 
			/* remove the class 'active' from all nav-dropdown */
			$('.nav-dropdown').each(function(i, obj) {
				$(this).removeClass("active");
			});
		
			/* add the class 'active' to the selected nav-dropdown */
			var id = $(this).attr('id');
			$('#'+id).parent().addClass("active");
			
			if(id == "project-info"){
				$("#panel_header").text('บริหารจัดการโครงการ');;
				loadContent("{{ url('company/project-list') }}");
			}
			else if(id == "company-info"){
				$("#panel_header").text('จัดการข้อมูลบริษัท');
				loadContent("{{ url('company/profile') }}");
			}
			else if(id == "searchResearcher"){
				$("#panel_header").text('ค้นหานักวิจัย/ผู้เชี่ยวชาญ');;
				loadContent("{{ url('company/researcher-search') }}");
			}
		});

	});
	
	function displayModalWithDataTable(modal, datatable){
		$('#'+modal).detach("body");
		$('#'+modal).appendTo("body");
		
		$('#'+modal).modal('show');
		$('#'+modal).on('shown.bs.modal', function() {
			var table = $('#'+datatable).DataTable();
			table.columns.adjust().draw();
					
			$('#'+modal).data('bs.modal').handleUpdate();
		});
	}
	
	function displayModal(modal){
		//$('#'+modal).detach("body");
		//$('#'+modal).appendTo("body");
		$('#'+modal).modal('show');	
	}
</script>

<script>
	/* this function will be called on demand */
	function appendModal(content, modalID){
		if (document.getElementById(modalID)) {
		  //alert('The modal id:'+modalID+' already exists');
		} else {
			//alert(content+"/"+modalID);
			var response;
			$.ajax({ type: "GET",   
				url: content+"/"+modalID,   
				async: false,
				success : function(text)
				{
					response= text;
				}
			});
			$('body').prepend(response);			  
		}	
	}
</script>

</head>

	<body>
        <section id="main-wrapper" class="theme-default">
        <header id="header"> 
          
          <!--logo start-->
          
          <div class="brand"> 
            <a href="index.html" class="logo"> 
                <img class="imglogo" src="{{ url('img/logo-TM.png') }}" />
            </a> 
          </div>
          
          <!--logo end-->
          
          <ul class="nav navbar-nav navbar-left">
            <li class="toggle-navigation toggle-left">
              <button class="sidebar-toggle" id="toggle-left"> <i class="fa fa-bars"></i> </button>
            </li>
     
          </ul>
        
          
          <ul class="nav navbar-nav navbar-right">
            <li class="toggle-fullscreen hidden-xs">
              <button type="button" class="btn btn-default expand" id="toggle-fullscreen"> 
                <i class="fa fa-expand"></i> 
              </button>
            </li>
            <li class="toggle-navigation toggle-right">
              <button class="sidebar-toggle" id="toggle-right"> 
              <span class="icon icon-bell pull-right">
                    <span class="label label-warning label-circle circularBadge pull-right">2</span>
                </span>
              </button>
            </li>
          </ul>
          
        </header>
        
        <!--sidebar left start-->
        <aside class="sidebar sidebar-left">
        <div class="sidebar-profile">
          <div class="profile-body dropdown"> 
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            	<h4>บริษัทซีเกท ประเทศไทย จำกัด<span class="caret"></span></h4>
            </a> 
            <div>
                <a href="javascript:void(0);"> 
                    <span class="icon" style="color:#e25d5d;"><i class="fa fa-sign-out"></i> </span>Logout
                </a> 
            </div>
            <ul class="dropdown-menu animated fadeInRight" role="menu">
              <li> <a href="javascript:void(0);"> 
              	<span class="icon"><i class="fa fa-user"></i> </span>เปลี่ยนรหัสผ่าน</a> 
              </li>
              <li> 
              	<small class="title">ใช้งานล่าสุด 15/07/2559 18:36</small>
              </li>
            </ul>
          </div>
        </div>
        
        <nav>
          <h5 class="sidebar-header">Navigation</h5>
          <ul class="nav nav-pills nav-stacked">
            <li class="nav-dropdown active"> <a href="#" id="project-info"> 
                <i class="fa fa-fw fa-sitemap"></i> บริหารจัดการโครงการ </a> 
            </li>
            <li class="nav-dropdown"> 
                <a href="#" onClick="navigate();" id="company-info"> 
                	<i class="fa fa-fw fa-edit"></i> จัดการข้อมูลบริษัท 
                </a>
            </li>
            <li class="nav-dropdown"> 
                <a href="#" onClick="navigate();" id="searchResearcher"> 
                	<i class="fa fa-fw fa-search"></i> ค้นหานักวิจัย/ผู้เชี่ยวชาญ 
                </a>
            </li>
           
          </ul>
        </nav>
        </aside>
        
        <!--sidebar left end--> 
        
        <!--main content start-->
        
        <section class="main-content-wrapper">
          <div class="pageheader">
            <h1 id="panel_header">Panels</h1>
            <div class="breadcrumb-wrapper hidden-xs"> <span class="label">กิจกรรมที่กำลังจะมาถึง:</span>
              <ol class="breadcrumb">
                <li><a href="index.html">การประเมินครั้งที่ 1 (30 สิงหาคม 2559)</a> </li>
              </ol>
            </div>
          </div>
          <section id="main-content" class="animated fadeInUp">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-body" id="content" style="font-size:smaller">
                    
                    <!-- panel content will be updated here -->
                    
                  </div>
                </div>
              </div>
            </div>
            
         
          </section>
        </section>
        
        <!--main content end-->
        
        </section>
        
        <!--sidebar right start-->
        
        <aside id="sidebar-right">
          <h4 class="sidebar-title">เหตุการณ์สำคัญที่กำลังจะมาถึง</h4>
          <div id="contact-list-wrapper">
            <div id="contact-list">
              <ul>
                <li>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="name">การประเมินรอบที่ 1</div>
                      <small class="location text-muted">
                        <i class="icon-pointer">
                        </i> 10/11/2559
                      </small> 
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="name">การประเมินรอบที่ 2</div>
                      <small class="location text-muted">
                        <i class="icon-pointer">
                        </i> 10/11/2559
                      </small> 
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </aside>
        
        <!--sidebar right end--> 
    </body>
    
</html>

