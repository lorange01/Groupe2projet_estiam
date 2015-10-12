	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
	<html>


	<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Photo-Expresso</title>
	<meta name="author" content=" AUTHOR'S NAME HERE ">
	<meta http-equiv="reply-to" content=" EMAIL ADDRESS HERE ">
	<meta name="keywords" content=" LIST OF KEYWORDS - KEEP TO UNDER 50 ">
	<meta name="description" content=" FULL WEBSITE DESCRIPTION HERE ">

	<script type="text/javascript">
	<!--
	  var _siteRoot='index.html',_root='index.html';
	//-->
	</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</script><script src="../includes/js/bootstrap.min.js"></script>
<link href="../includes/css/bootstrap.min.css" rel="stylesheet"  type="text/css">
<link href="../includes/css/jquery.fileupload.css" rel="stylesheet"  type="text/css">

	<style type="text/css" media="all">
	 @import url("../includes/css/main.css");
	 @import url("../includes/css/style-expresso.css");
	 #files p{
		float: left;
		text-align: center;
	 }
	 #envoi-img{
		float :right; 	 
	 }
	</style>

	</head>
	<body>
	<div class="container">
	  <div class="center">
	  <a href="##"><span>Photo-Expresso</span></a>
		<ul id="main_nav">
		  <li><a href="../index.html" class="active">Acceuil</a></li>
		  <li><a href="../about.html">Concept</a></li>
		  <li id ="importation"><a href="">Importez Vos photos</a></li>
		  <li><a href="../contact.html">Contactez nous</a></li>
		  <li><a href="../connexion.html">Connexion</a></li>
		</ul>
	  </div>
	</div>
	<div class="container noise">
  <div class="center content_section">
	<div class="toff-import">
		<div id="title-box"><h2>Trouvez vos photos?</h2></div>

		<figure class="choix-import">		
				<img src="../images/asset2015/pc.png"/>
				<figcaption>
					<span class="btn btn-success fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
					<span>Vers un ordinateur</span>
				
				<!-- The file input field used as target for the file upload widget -->
				<input id="fileupload" type="file" name="files[]" multiple>
				
			</span>
				</figcaption>
		</figure >
		
		<figure class="choix-import">
				<img src="../images/asset2015/dropbox.png"/>
				<figcaption>
				<a href="https://www.dropbox.com/fr/">
					<span class="btn btn-success fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
					<span>Vers Dropbox</span>
					</span>
				</a>
				</figcaption>			
		</figure>
					<!-- BAR DE PROGRESSION -->
			<div id="progress" class="progress">
				<div class="progress-bar progress-bar-success"></div>
			</div>
			<!-- CONTAINER DES IMG UPLOAD -->
			<div id="files" class="files"></div>
			<br>
			<button type="submit" class="btn btn-default" id="envoi-img">Envoyez</button>
	
      </div>
		
		<script src="../includes/js/jquery.ui.widget.js"></script>
		<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
		<!-- The Canvas to Blob plugin is included for image resizing functionality -->
		<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>  
	  <script src="../includes/js/jquery.iframe-transport.js"></script>
	  <script src="../includes/js/jquery.fileupload.js"></script>
	  <script src="../includes/js/jquery.fileupload-process.js"></script>
	  <script src="../includes/js/jquery.fileupload-image.js"></script>
	  <script src="../includes/js/main.js"></script>
	  <script>
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'localhost' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Chargement...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('En cours...')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 999000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 80,
        previewMaxHeight: 80,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
					
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Télecharger')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
			
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('Erreur survenue');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
    </div>
	</div>
	<div class="container noise" >
	<div id="affiche">
		  <div  class="center content_section">
			<h2>Retrouvez l' application mobile Android et IOS  sur leur store respectif</h2>
			
			<ul class="thumbnails">
			  <li><a href="##" title="IOS" class="thickbox" rel="gallery-silver"><img class="img_border" src="../images/thickbox_test/ios.jpg" width="200" height="200" alt="Plant 1" ></a></li>
			  <li><a href="##" title="Android" class="thickbox" rel="gallery-silver"><img class="img_border" src="../images/thickbox_test/android.png" width="200" height="200" alt="Plant 2" ></a></li>
			 
			</ul>
			</div>
	   </div>
	</div>

	<div class="container noise">
  <div class="center content_section">
    <ul class="block_list">
	  <li>
        <h2>Qui Sommes nous ?</h2>
        <p>Phasellus neque magna, posuere sed cursus a,
         mattis eget lectus. Donec quam libero, tempus
         sit amet sodales nec, dignissim in metus. Nam
         dapibus turpis elit. <a href="#">Viviamus sollicitudin</a>
         consequat quam et venenatis. Mauris et pretium
         orci. Aenean tempor sodales augue, ut
         elementum nisl iaculis et. Pellentesque sed felis
         mauris, eget gravida risus.</p>

        <p><a href="##" class="button">En savoir plus</a></p>
      </li>

      <li>
        <h2>CGU - CGV</h2>
        <p>Phasellus neque magna, posuere sed cursus a,
         mattis eget lectus. Donec quam libero, tempus
         sit amet sodales nec, dignissim in metus. Nam
         dapibus turpis elit. Viviamus sollicitudin
         consequat quam et venenatis. <a href="#">Mauris et pretium</a>
         orci. Aenean tempor sodales augue, ut
         elementum nisl iaculis et. Pellentesque sed felis
         mauris, eget gravida risus.</p>

        <p><a href="##" class="button">En savoir plus</a></p>
      </li>

      <li>
        <h2>Mentions Légales</h2>
        <p>Phasellus neque magna, posuere sed cursus a,
         mattis eget lectus. <a href="#">Donec quam libero</a>, tempus
         sit amet sodales nec, dignissim in metus. Nam
         dapibus turpis elit. Viviamus sollicitudin
         consequat quam et venenatis. Mauris et pretium
         orci. Aenean tempor sodales augue, ut
         elementum nisl iaculis et. Pellentesque sed felis
         mauris, eget gravida risus.</p>

        <p><a href="##" class="button">En savoir plus</a></p>
      </li>
	</ul>
	  </div>
	</div>

	<div class="container noise" id="footer">
	  <div class="center">
		<p>&copy; Estiam 2015 - 2016 &#124; <a href="##">www.photo-expresso.fr</a></p>
	  </div>
	</div>
	<script>
document.getElementById("footer").innerHTML = 
"Page hostname is: " + window.location.hostname;
</script>
	</body>

	</html>
