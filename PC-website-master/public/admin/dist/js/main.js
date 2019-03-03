$(document).ready(function(){

var image_obj_array = [];
$('#gallery_upload_widget_opener').cloudinary_upload_widget(
    { cloud_name: 'armashfankar', upload_preset: 'likldmvr',
     'folder': 'sln'},
    function(error, result) {
    	//console.log(error, result);
    	var a = JSON.stringify(result);
    	$('#hiddengalleryImage').append("<input type='hidden' name='gallery_images[]' value='"+a+"'></input>");    	

    	
    });
});