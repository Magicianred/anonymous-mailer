<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  
  <style>
		@import "https://use.fontawesome.com/releases/v5.0.10/css/all.css";
		#sociallocker {
		    background-color: #EEEEEE;
		    text-align: center;
		    position: relative;
		    max-width: 500px;
		    height: 120px;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    overflow: hidden;
		    border-radius:10px;
		}
		#sociallocker-overlay {
		    background-color: rgba(0,0,0,0.6);
		    font-size: 20px;
		    font-weight: bold;
		    color: #ffffff;
		    transition: all 0.2s ease;
		}
		#sociallocker-overlay i {
		    margin-right: 10px;
		}
		#sociallocker:hover #sociallocker-overlay {
		    top: -100%;
		    transition: all 0.2s linear;
		}
		#sociallocker:hover #sociallocker-content {
		    top: 100%;
		    transition: all 0.2s linear;
		}
		#sociallocker-content a {
		    display: inline-block;
		    text-decoration: none;
		    padding: 10px 20px;
		    background-color: #777777;
		    color: #f9f9f9;
		    border-radius: 4px;
		    font-weight: bold;
		}
		#sociallocker-overlay,
		#sociallocker-content,
		#sociallocker-links{
		    position: absolute;
		    width: 100%;
		    height: 100%;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    top: 0;
		    left: 0;
		}
		#sociallocker-content {
		    background-color: #ccc;
		    transition: all 0.2s ease;
		}
		.social-1 {
			text-decoration: none;
		    color: #ffffff;
		    display: inline-block;
		    width: 60px;
		    height: 60px;
		    overflow: hidden;
			margin-right: 5px;
		}
		.social-1 i {
			display: flex;
		  	align-items: center;
		  	justify-content: center;
		    height: 100%;
		}
		.social-1:hover i {
			background-color: rgba(0,0,0,0.1);
		    transform: scale(1.2);
		    transition: all 0.2s;
		}
		.fb { background-color: #4561A8; }
		.wa { background-color: #4FCE5D ; }
		.gp { background-color: #BF3B28; }
		.in { background-color: #1679B1; }
		.pi { background-color: #D9303C; }
		.su { background-color: #E84930; }
		</style>
		
  <title> Anonymous E-mailer - Send E-mail By hiding Identity.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style.css">

<!-- Call of Tiny mce wysiwyg editor start -->
<script src="https://cdn.tiny.cloud/1/filezombnzeadh0in3gvfo25rih8g9eiqzukjxqvoablgjem/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<!-- call of editor end -->
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<h3> Anonymous E-Mailer</h3>
	<form method = "post" action="status.php" name="contact_form">
		<label for="name">Your Name</label>
		<input name="name" type="text" required placeholder="name to show ( fake name )"/>
		<br>
			<hr>
		<label for="sremail">Your E-mail ( not show on mail )
		<input name="sremail" type="email" required placeholder="your real email ( for security )"/>
		<br>
		<!--	Select Spoofed E-mail>
	<!-- spoofed e-mail start -->
			<select name='semail'>
	<option disabled>== name based == </option>
<option value='mahadev@gmail.com'> mahadev@gmail.com</option>
<option value='ram@gmail.com'>ram@gmail.com </option>
	<option value='abhimanyu@gmail.com'> abhimanyu@gmail.com</option>
	<option value='abhinav.yadav@gmail.com'>abhinav.yadav@gmail.com </option>
	<option value='thakurthakur@gmail.com'> thakurthakur@gmail.com</option>
	<option value='rajput.vansh@gmail.com'>rajput.vansh@gmail.com </option>
	<option disabled>== no-reply category ==</option>
	<option value='no-reply@example.com'> no-reply@example.com</option>
	<option value='no-reply@gmail.com'> no-reply@gmail.com</option>
	<option value='no-reply@programmingant.com'>no-reply@programmingant.com </option>
	<option value='emergency@programmingant.com'>emergency@programmingant.com </option>
<option value='dev@programmingant.com'>dev@programmingant.com </option>
<option value='developer@programmingant.com'>developer@programmingant.com </option>
<option value='someone@programmingant.com'>someone@programmingant.com </option>
<option value='someone@example.com'>someone@example.com </option>
<option value='offerforyou@example.com'>offerforyou@example.com</option>
<option value='offerforyou@gmail.com'> offerforyou@gmail.com</option>
<option value='greatdeals@gmail.com> greatdeals@gmail.com</option>
<option value='emergency@gmail.com'>emergency@gmail.com </option>
<option disabled> == fake name based == </option>
	<option value='anonymous-emailer@gmail.com' checked>anonymous-emailer@gmail.com </option>
<option value='fakemail@gmail.com'>fakemail@gmail.com</option>
<option value='deadmail@gmail.com'> deadmail@gmail.com</option>
<option value=goemail@gmail.com'>goemail@gmail.com  </option>
<option value='anonymous@gmail.com'> anonymous@gmail.com</option>
<option value='fake@example.com'>fake@example.com </option>
<option value='info@example.com'>info@example.com</option>
<option value='mail4u@gmail.com'> mail4u@gmail.com</option>
<option disabled> To use Custom spoof mail, like our Facebook page and send message on it regarding this.</option> </select>
<!-- spoof e-mail end -->
		<!-- Disabled for security reasons --> 
   <!-- <label for="semail"> Spoofed Email ( fake email ) </label>
		<input name="semail" type="text"   value="anonymous@gmail.com" placeholder="you@domain.com"/>-->
	<br>
<hr>
		<br>
<label for="remail"> Receiver's E-mail 
		<input name="remail" type="email" required placeholder="receiver email"/>
	<br>
		<label for="subject"> Subject
		<input name="subject" type="text" required placeholder="subject of mail"/>
		<br><label for="message">Message</label><br>
		<textarea name="msg" cols="30" rows="10" placeholder="Enter your message here ..."></textarea>
		
<!-- main editor call start -->
<script>

tinymce.init({
  selector: 'textarea',
  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  autosave_interval: "30s",
  autosave_prefix: "{path}{query}-{id}-",
  autosave_restore_when_empty: false,
  autosave_retention: "2m",
  image_advtab: true,
  content_css: '//www.tiny.cloud/css/codepen.min.css',
  link_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_class_list: [
    { title: 'None', value: '' },
    { title: 'Some class', value: 'class-name' }
  ],
  importcss_append: true,
  file_picker_callback: function (callback, value, meta) {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
      callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
    }

    /* Provide image and alt text for the image dialog */
    if (meta.filetype === 'image') {
      callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
    }

    /* Provide alternative source and posted for the media dialog */
    if (meta.filetype === 'media') {
      callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
    }
  },
  templates: [
        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
  ],
  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
  height: 600,
  image_caption: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_noneditable_class: "mceNonEditable",
  toolbar_mode: 'sliding',
  contextmenu: "link image imagetools table",
 });
   </script> 
  <!-- editor call end -->
  
  <br>
  <?php
$ip = $_SERVER['REMOTE_ADDR'];
echo " For Security reasons, your IP <b>$ip </b> is logged." ; ?>
<br><br>
  	By clicking <code>Send Mail </code> button, you agree that not use this for illegal purpose, only use for prank friends.
	<br><br>
		<div class="center">
		<div id="sociallocker">
		    <div id="sociallocker-links">
		        <a href="https://www.facebook.com/sharer/sharer.php?u=https://anonymous-emailer.000webhostapp.com" class="social-1 fb"><i class="fab fa-facebook-f"></i></a>
		        <a href="https://api.whatsapp.com/send?text=Hi%0AToday%20I%20am%20getting%20awesome%20site%20to%20send%20custom%20e-mail%20anonymously%20by%20hiding%20my%20e-mail.%0A%0AIt's%20100%20%25%20working%20site%20without%20any%20ad.%0AYou%20can%20use%20any%20e-mail%20id%20from%20which%20you%20want%20to%20send%20e-mail.%0ANo%20registration%20required.%0AVisit%20here%20%3A%20%0A%F0%9F%91%87%F0%9F%91%87%F0%9F%91%87%F0%9F%91%87%F0%9F%91%87%F0%9F%91%87%F0%9F%91%87%0A*https%3A%2F%2Fanonymous-emailer.000webhostapp.com* " class="social-1 wa"><i class="fab fa-whatsapp"></i></a>
		        <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://anonymous-emailer.000webhostapp.com&title=&summary=Hello friends,Look here for sending e-mail anonymously by hiding your e-mail.100 % working.&source=" class="social-1 in"><i class="fab fa-linkedin-in"></i></a>
		        <a href="https://pinterest.com/pin/create/button/?url=https://anonymous-emailer.000webhostapp.com&media=&description=Hello friends,Look here for sending e-mail anonymously by hiding your e-mail.100 % working." class="social-1 pi"><i class="fab fa-pinterest-p"></i></a>
		        
		    </div>
		    <div id="sociallocker-content">
		      
 <input type="submit" value="Send Mail">
			
		    </div>
		    <div id="sociallocker-overlay"><i class="fas fa-lock"></i> Send Mail Button is locked. <br></br>Take Action to Unlock </div>
		</div>
		<script>
		(function() {
		    var sl = document.querySelector("#sociallocker");
		    var slc = document.querySelector("#sociallocker-content");
		    if (!sl) return;
		    var old_slc_html = slc.innerHTML;
		    slc.innerHTML = slc.innerHTML.replace(/(href=")(.*)(\")/g, "href=\"#\"");
		    sl.querySelectorAll("#sociallocker-links a").forEach(function(ele) {
		        ele.onclick = function(e) {
		            var web_window = window.open(this.href, 'Share Link', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600,top=' + (screen.height/2 - 300) + ',left=' + (screen.width/2 - 300));
		            var check_window_close = setInterval(function() { 
		                if (web_window.closed) {
		                    clearInterval(check_window_close);
		                    slc.innerHTML = old_slc_html;
		                    document.querySelector("#sociallocker-links").style.display = "none";
		                    document.querySelector("#sociallocker-overlay").style.display = "none"; 
		                    document.querySelector("#sociallocker-content").style.top = "0";
		                }
		            }, 1000);
		            e.preventDefault();
		        };
		    });
		})();
		</script>	
		</div>
	</form>	
	<p><h2> <b><i>Made With ❤  by Devesh in India  </i></b> </h2></p>
</div>
<div class =" tips">
	<h1> <u>Tips to use</u> </h1>
	<ul>
		<li> Use our Advanced Editor to write HTML message </li> <br>
		<li> Use in Desktop Mode on Android to get more Advanced Tools for writing mail.</li><br>
		<li> Use subject such that Gmail does not check as spam. </li> <br>
		<li> Content should not be commercial otherwise Mail reached on spam folder </li> <br>
		<li>It is not necessary to write name </li><br>
		<li> To use custom E-mail address like facebook page and send message regarding this. </li> <br>
		<li> Visit on <a href="https://tech-trick-zone.blogspot.com"> Tech trick Zone </a> for more. </li>
			</div>
<footer> <div class="footer">
	&copy 2020 <a href="https://tech-trick-zone.blogspot.com"> Tech Trick Zone  ( Devesh Singh ) </a><br> <br>
		Website : <a href="https://tech-trick-zone.blogspot.com">Tech Trick Zone </a><br><br>
			Facebook : <a href="https://www.facebook.com/techntrick">#techntrick </a> <br> <br>
				<a href="https://tech-trick-zone.blogspot.com/p/tech-tricks-home.html"> Contact here </a>
<!-- partial -->
  <!--
</body>
</html>
