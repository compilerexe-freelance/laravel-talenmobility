<link rel="stylesheet" href="{{ url('plugins/croppie/croppie.css') }}">
<script src="{{ url('plugins/croppie/croppie.js') }}"></script>
<script src="{{ url('plugins/croppie/exif.js') }}"></script>

<style>
	.button-upload{ 
		background-color: #189094; 
		color: white; 
		padding: 10px 15px; 
		border-radius: 3px; 
		border: 1px solid rgba(255, 255, 255, 0.5); 
		font-size: 16px; 
		cursor: pointer; 
		text-decoration: none; 
		text-shadow: none; 
	} 
	.button-upload:focus { 
		outline: 0; 
	} 
	 
	.file-btn { 
		position: relative; 
	} 
	.file-btn input[type="file"] { 
		position: absolute; 
		top: 0; 
		left: 0; 
		width: 100%; 
		height: 100%; 
		opacity: 0; 
	} 
	 
	.upload-actions { 
		padding: 5px 0; 
	} 
	.upload-actions button { 
		margin-right: 5px; 
	} 
</style>

<script>
$(function(){ 
    var $uploadCrop; 
	$(".upload-result").hide(); 
 
	function readFile(input) { 
		 if (input.files && input.files[0]) { 
			var reader = new FileReader(); 
			 
			reader.onload = function (e) { 
				$uploadCrop.croppie('bind', { 
					url: e.target.result 
				}); 
			} 
			 
			reader.readAsDataURL(input.files[0]); 
		} 
		else { 
			alert("Sorry - you're browser doesn't support the FileReader API"); 
		} 
	} 

	$uploadCrop = $('#upload-demo').croppie({ 
		viewport: { 
			width: 200, 
			height: 200, 
			type: 'circle' 
		}, 
		boundary: { 
			width: 250, 
			height: 250 
		} 
	}); 
	
	/*$uploadCrop.croppie('bind', {
		url: './default_avatar_male.jpg'
	});*/
	

	$('#upload').on('change', function () {  
		$(".crop").show(); 
		$(".upload-result").show(); 
		readFile(this);  			
	}); 
	
	$('.upload-result').on('click', function (ev) { 
		$uploadCrop.croppie('result', 'canvas').then(function (resp) { 
			popupResult({ 
				src: resp 
			}); 			
		}); 
	}); 
         
    function popupResult(result) { 
        var img; 
        if (result.html) { 
            img = result.html; 
        } 
        if (result.src) { 
            /*img = '<img src="' + result.src + '" />'; */
			$('#CHProfileImage').attr('src',''+ result.src);
			
			//close the modal
			$('#{{ $id }}').modal('toggle');
        } 
        /*$("#result").html(img); */
    } 
}); 
</script>

<script>
	/* if you need to do something whenever the modal is reloaded, do it here */
	$('#{{ $id }}').on('shown.bs.modal', function() {
		
	})
</script>
<!--companyForm-->
<div class="modal fade" role="dialog" id="{{ $id }}" role="dialog">
<div class="modal-dialog modal-lg row">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" 
                 aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      <h3>อัพโหลดภาพใหม่</h3>
    </div>
    <div class="modal-body">
      <div class="upload-actions"> 
            
            <div class="crop"> 
                <div id="upload-demo"></div> 
            </div> 
            <div align="center">
                <button class="button-upload file-btn"> 
                    <span>Upload</span> 
                    <input type="file" id="upload" value="Select" /> 
                </button> 
                <button class="button-upload upload-result">Croppie</button> 
                <!--<div id="result"></div> -->
            </div>
        </div> 
      
    </div>
  </div>
</div>
</div>
