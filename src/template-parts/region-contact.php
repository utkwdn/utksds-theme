<?php
	$title							 = get_bloginfo('name');
	$sitemode						= get_theme_mod( 'site_mode_layout' );
	$contactinfo_address = get_theme_mod( 'contactinfo_address' );
	$contactinfo_general = get_theme_mod( 'contactinfo_general' );

	$contactinfo_phone1label		= get_theme_mod( 'contactinfo_phone1label' );
	$contactinfo_phone2label		= get_theme_mod( 'contactinfo_phone2label' );
	$contactinfo_phone3label		= get_theme_mod( 'contactinfo_phone3label' );
	$contactinfo_phone1number	 = get_theme_mod( 'contactinfo_phone1number' );
	$contactinfo_phone2number	 = get_theme_mod( 'contactinfo_phone2number' );
	$contactinfo_phone3number	 = get_theme_mod( 'contactinfo_phone3number' );
	$contactinfo_map        	 = get_theme_mod( 'contactinfo_map' );

	$contactinfo_email1label		= get_theme_mod( 'contactinfo_email1label' );
	$contactinfo_email1address	= get_theme_mod( 'contactinfo_email1address' );

	$meta_parentunit_show			 = get_theme_mod( 'meta_parentunit_show' );
	$meta_parentunit_name			 = get_theme_mod( 'meta_parentunit_name' );
	$meta_parentunit_link			 = get_theme_mod( 'meta_parentunit_link' );

	$socialmedia_twitter				= get_theme_mod( 'socialmedia_twitter' );
	$socialmedia_facebook			 = get_theme_mod( 'socialmedia_facebook' );
	$socialmedia_linkedin			 = get_theme_mod( 'socialmedia_linkedin' );
	$socialmedia_youtube				= get_theme_mod( 'socialmedia_youtube' );
	$socialmedia_snapchat			 = get_theme_mod( 'socialmedia_snapchat' );
	$socialmedia_weechat				= get_theme_mod( 'socialmedia_weechat' );
	$socialmedia_pin						= get_theme_mod( 'socialmedia_pin' );
	$socialmedia_insta					= get_theme_mod( 'socialmedia_insta' );
	$socialmedia_goodr					= get_theme_mod( 'socialmedia_goodr' );
	$socialmedia_vime					 = get_theme_mod( 'socialmedia_vime' );
	$socialmedia_slac					 = get_theme_mod( 'socialmedia_slac' );
	$socialmedia_sound					= get_theme_mod( 'socialmedia_sound' );


	$contactinfo_phone1numberStripped		= preg_replace('/\D+/', '', $contactinfo_phone1number);
	$contactinfo_phone2numberStripped		= preg_replace('/\D+/', '', $contactinfo_phone2number);
	$contactinfo_phone3numberStripped		= preg_replace('/\D+/', '', $contactinfo_phone3number);


?>


<div class="col-auto">
<p>
<?php
  // Address Goes here. If a map is linked, it'll add here.
  if($contactinfo_map != "" && $contactinfo_address != "") {
  	echo "<small><a href=\"".$contactinfo_map."\"><svg class=\"meta-address\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z\"/></svg>";
  }
  if($contactinfo_address != "") {
  	echo $contactinfo_address." ";
  }
  if($contactinfo_map != "" && $contactinfo_address != "") {
  	echo "</a></small>";
  }
?>
</p>
</div>
<div class="col-auto">
<?php
  // Phone And Email Section

	if($contactinfo_email1label != "") {
		echo '<small class="text-white">'.$contactinfo_email1label.':&nbsp;<a href="mailto:'. $contactinfo_email1address. '">' . $contactinfo_email1address . '</a></small><br>'; 
  } 

  if($contactinfo_phone1label != "") {
  	echo '<small class="text-white">'.$contactinfo_phone1label.':&nbsp;';
  }
  if($contactinfo_phone1number != "") {
  	echo '<a href="tel:+1'.$contactinfo_phone1numberStripped.'" class="tel">'.$contactinfo_phone1number.'</a></small>';
  }
  
  if($contactinfo_phone2label != "") {
  	echo '<br><small class="text-white">'.$contactinfo_phone2label.':&nbsp;';
  }
  if($contactinfo_phone2number != "") {
  	echo '<a href="tel:+1'.$contactinfo_phone2numberStripped.'" class="tel">'.$contactinfo_phone2number.'</a></small>';
  }
  
  if($contactinfo_phone3label != "") {
  	echo '<br><small class="text-white">'.$contactinfo_phone3label.':&nbsp;';
  }
  if($contactinfo_phone3number != "") {
  	echo '<a href="tel:+1'.$contactinfo_phone3numberStripped.'" class="tel">'.$contactinfo_phone3numberStripped.'</a></small>';
  }

?>
</div>
<div class="col-auto">
<?php
  // Open comments here. General Info.
  if($contactinfo_general != "") {
  	echo '<small>'.$contactinfo_general."</small><br>";
  }
  
  
						if($socialmedia_twitter != "") {
							echo '<a class="sm-icon twitter" href="'.$socialmedia_twitter.'"><span class="sr-only">Twitter</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm18.862 9.237c.208 4.617-3.235 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.079-4.03 3.198-4.03.944 0 1.797.398 2.396 1.037.748-.147 1.451-.42 2.085-.796-.245.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.44.656-.997 1.234-1.638 1.697z"/></svg></a>';
						}
						if($socialmedia_facebook != "") {
							echo '<a class="sm-icon facebook" href="'.$socialmedia_facebook.'"><span class="sr-only">Facebook</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm16 7h-1.923c-.616 0-1.077.252-1.077.889v1.111h3l-.239 3h-2.761v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg></a>';
						}
						if($socialmedia_linkedin != "") {
							echo '<a class="sm-icon linkedin" href="'.$socialmedia_linkedin.'"><span class="sr-only">LinkedIn</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm8 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.397-2.586 7-2.777 7 2.476v6.759z"/></svg></a>';
						}
						if($socialmedia_youtube != "") {
							echo '<a class="sm-icon youtube" href="'.$socialmedia_youtube.'"><span class="sr-only">YouTube</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 9.333l5.333 2.662-5.333 2.672v-5.334zm14-9.333v24h-24v-24h24zm-4 12c-.02-4.123-.323-5.7-2.923-5.877-2.403-.164-7.754-.163-10.153 0-2.598.177-2.904 1.747-2.924 5.877.02 4.123.323 5.7 2.923 5.877 2.399.163 7.75.164 10.153 0 2.598-.177 2.904-1.747 2.924-5.877z"/></svg></a>';
						}
						if($socialmedia_snapchat != "") {
							echo '<a class="sm-icon snapchat" href="'.$socialmedia_snapchat.'"><span class="sr-only">Snapchat</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm17.859 17.115c-.065.087-.117.457-.203.749-.098.337-.407.299-.75.232-.499-.097-.945-.125-1.464-.039-.898.149-1.83 1.477-3.393 1.477-1.682 0-2.557-1.321-3.49-1.477-.951-.158-1.497.096-1.826.096-.252 0-.35-.154-.388-.282-.084-.287-.138-.664-.204-.754-.646-.1-2.103-.354-2.141-1.005-.009-.169.11-.318.277-.346 2.139-.352 3.501-2.765 3.279-3.287-.158-.372-.84-.505-1.127-.619-.74-.293-.843-.63-.799-.86.061-.32.451-.535.778-.535.314 0 .869.42 1.301.181-.065-1.123-.223-2.728.177-3.624.763-1.71 2.434-2.555 4.105-2.555 1.683 0 3.366.858 4.123 2.554.399.895.242 2.493.178 3.625.408.225.913-.191 1.265-.191.345 0 .814.233.822.623.006.305-.266.568-.809.782-.292.115-.969.248-1.127.619-.227.535 1.177 2.941 3.279 3.287.167.027.287.176.277.346-.036.65-1.5.903-2.14 1.003z"/></svg></a>';
						}
						if($socialmedia_weechat != "") {
							echo '<a class="sm-icon wechat" href="'.$socialmedia_weechat.'"><span class="sr-only">Wee Chat</span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 24h-24v-24h24v24zm-5.665-6.984c1.016-.736 1.665-1.825 1.665-3.035 0-2.218-2.158-4.016-4.819-4.016-2.662 0-4.819 1.798-4.819 4.016s2.157 4.016 4.819 4.016c.55 0 1.081-.079 1.573-.22l.141-.021c.093 0 .177.028.256.074l1.055.609.093.03c.089 0 .161-.072.161-.161l-.026-.117-.217-.811-.017-.102c0-.108.053-.203.135-.262zm-8.552-11.485c-3.194 0-5.783 2.158-5.783 4.82 0 1.452.779 2.759 1.998 3.642.098.07.162.185.162.314l-.02.123-.261.972-.031.141c0 .107.086.193.193.193l.111-.036 1.266-.731c.096-.055.196-.089.307-.089l.17.025c.591.17 1.228.265 1.888.265l.318-.008c-.126-.376-.194-.772-.194-1.181 0-2.427 2.361-4.395 5.274-4.395l.314.008c-.436-2.302-2.827-4.063-5.712-4.063zm3.791 7.807c-.355 0-.642-.287-.642-.642 0-.355.287-.643.642-.643.355 0 .643.288.643.643 0 .355-.288.642-.643.642zm3.213 0c-.355 0-.642-.287-.642-.642 0-.355.287-.643.642-.643.355 0 .643.288.643.643 0 .355-.288.642-.643.642zm-8.932-3.759c-.425 0-.771-.345-.771-.771 0-.426.346-.771.771-.771.426 0 .772.345.772.771 0 .426-.346.771-.772.771zm3.856 0c-.426 0-.771-.345-.771-.771 0-.426.345-.771.771-.771.426 0 .771.345.771.771 0 .426-.345.771-.771.771z"/></svg></a>';
						}
						if($socialmedia_pin != "") {
							echo '<a class="sm-icon pinterest" href="'.$socialmedia_pin.'"><span class="sr-only">Pinterest</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm12 20c-.825 0-1.62-.125-2.369-.357.326-.531.813-1.402.994-2.098l.499-1.901c.261.498 1.023.918 1.833.918 2.413 0 4.151-2.219 4.151-4.976 0-2.643-2.157-4.62-4.932-4.62-3.452 0-5.286 2.317-5.286 4.841 0 1.174.625 2.634 1.624 3.1.151.07.232.039.268-.107l.222-.907c.019-.081.01-.15-.056-.23-.331-.4-.595-1.138-.595-1.825 0-1.765 1.336-3.472 3.612-3.472 1.965 0 3.341 1.339 3.341 3.255 0 2.164-1.093 3.663-2.515 3.663-.786 0-1.374-.649-1.185-1.446.226-.951.663-1.977.663-2.664 0-.614-.33-1.127-1.012-1.127-.803 0-1.448.831-1.448 1.943 0 .709.239 1.188.239 1.188s-.793 3.353-.938 3.977c-.161.691-.098 1.662-.028 2.294-2.974-1.165-5.082-4.06-5.082-7.449 0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8z"/></svg></a>';
						}
						if($socialmedia_insta != "") {
							echo '<a class="sm-icon instagram" href="'.$socialmedia_insta.'"><span class="sr-only">Instagram</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>';
						}
						if($socialmedia_goodr != "") {
							echo '<a class="sm-icon goodreads" href="'.$socialmedia_goodr.'"><span class="sr-only">Good Reads</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24""><g><path class="st0" d="M1.3,0h22.5C24.4,0,25,0.6,25,1.3v22.5c0,0.7-0.6,1.2-1.2,1.2H1.3C0.6,25,0,24.4,0,23.8V1.3C0,0.6,0.6,0,1.3,0
L1.3,0z M18.4,15.4V3.6h-2v1.9h0c-0.4-0.7-0.9-1.3-1.6-1.6c-0.7-0.4-1.4-0.5-2.3-0.5c-1.1,0-2.1,0.2-2.8,0.6C9,4.3,8.3,4.9,7.9,5.5
		c-0.5,0.7-0.8,1.4-1,2.2c-0.2,0.8-0.3,1.6-0.3,2.4c0,0.9,0.1,1.7,0.4,2.5c0.3,0.8,0.6,1.5,1.1,2.1c0.5,0.6,1.1,1.1,1.8,1.4
		c0.7,0.4,1.6,0.5,2.5,0.5c0.8,0,1.6-0.2,2.4-0.6c0.7-0.4,1.3-1,1.7-1.8h0v0.9c0,0.7-0.1,1.4-0.2,2c-0.1,0.6-0.4,1.1-0.7,1.5
		c-0.3,0.4-0.7,0.8-1.2,1c-0.5,0.2-1.1,0.4-1.8,0.4c-0.4,0-0.7,0-1.1-0.1c-0.4-0.1-0.7-0.2-1.1-0.4c-0.3-0.2-0.6-0.4-0.8-0.6
		c-0.2-0.3-0.4-0.6-0.4-1H7.1c0,0.7,0.2,1.3,0.5,1.8c0.3,0.5,0.8,0.9,1.3,1.2c0.5,0.3,1.1,0.5,1.7,0.6c0.6,0.1,1.2,0.2,1.8,0.2
		c2.1,0,3.6-0.5,4.5-1.6C18,19.1,18.4,17.5,18.4,15.4L18.4,15.4z M12.5,14.8c-0.7,0-1.3-0.1-1.8-0.4c-0.5-0.3-0.8-0.7-1.1-1.2
		c-0.3-0.5-0.5-1-0.6-1.6C8.9,11,8.8,10.4,8.8,9.8c0-0.6,0.1-1.2,0.2-1.8C9.2,7.5,9.4,7,9.7,6.6c0.3-0.4,0.7-0.8,1.2-1
		c0.5-0.3,1.1-0.4,1.8-0.4c0.7,0,1.2,0.1,1.7,0.4c0.5,0.3,0.9,0.6,1.1,1.1C15.8,7,16,7.5,16.1,8.1c0.1,0.6,0.2,1.1,0.2,1.7
		c0,0.6-0.1,1.2-0.2,1.8c-0.1,0.6-0.4,1.1-0.7,1.6c-0.3,0.5-0.7,0.9-1.2,1.2C13.8,14.6,13.2,14.8,12.5,14.8L12.5,14.8z"/></g></svg></a>';
						}
						if($socialmedia_vime != "") {
							echo '<a class="sm-icon vimeo" href="'.$socialmedia_vime.'"><span class="sr-only">Vimeo</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.248 10.732c-1.627 3.478-5.558 8.213-8.042 8.213-2.448 0-2.802-5.221-4.139-8.696-.657-1.709-1.082-1.317-2.315-.454l-.752-.97c1.798-1.581 3.599-3.418 4.705-3.52 1.245-.12 2.012.731 2.299 2.554.379 2.396.908 6.114 1.832 6.114.719 0 2.495-2.95 2.585-4.004.161-1.544-1.136-1.591-2.261-1.109 1.781-5.836 9.194-4.761 6.088 1.872z"/></svg></a>';
						}
						if($socialmedia_slac != "") {
							echo '<a class="sm-icon slack" href="'.$socialmedia_slac.'"><span class="sr-only">Slack</span><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M19 24h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5v14c0 2.761-2.238 5-5 5zm.115-9.531l-1.622.541.561 1.677c.22.679-.139 1.418-.82 1.637-.767.217-1.432-.214-1.642-.817l-.56-1.679-3.342 1.118.56 1.678c.261.802-.289 1.695-1.221 1.695-.586 0-1.067-.376-1.24-.876l-.561-1.678-1.621.54c-.756.218-1.43-.212-1.642-.82-.219-.678.141-1.418.821-1.637l1.621-.539-1.08-3.216-1.622.539c-.903.256-1.705-.393-1.705-1.226 0-.545.339-1.055.885-1.231l1.622-.539-.562-1.677c-.22-.68.141-1.419.822-1.638.68-.22 1.42.139 1.64.819l.562 1.677 3.34-1.118-.559-1.678c-.269-.826.323-1.702 1.229-1.702.546 0 1.056.339 1.233.884l.561 1.678 1.62-.54c.68-.22 1.421.14 1.641.819.221.679-.14 1.417-.82 1.637l-1.622.54 1.081 3.215 1.622-.539c.828-.268 1.705.322 1.705 1.225 0 .546-.34 1.055-.885 1.231zm-5.995-4.285l-3.34 1.117 1.079 3.218 3.341-1.116-1.08-3.219z"/></svg></a>';
						}
						if($socialmedia_sound != "") {
							echo '<a class="sm-icon soundcloud" href="'.$socialmedia_sound.'"><span class="sr-only">Sound Cloud</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-14.333 15.524c-.405-.365-.667-.903-.667-1.512 0-.608.262-1.146.667-1.512v3.024zm1.333.476c-.243 0-.369.003-.667-.092v-3.792c.316-.101.465-.097.667-.081v3.965zm1.333 0h-.666v-3.778l.206.121c.091-.375.253-.718.461-1.023v4.68zm1.334 0h-.667v-5.378c.206-.154.426-.286.667-.377v5.755zm1.333 0h-.667v-5.905c.251-.027.328-.046.667.006v5.899zm1.333 0h-.667v-5.7l.253.123c.119-.207.261-.395.414-.572v6.149zm6.727 0h-6.06v-6.748c.532-.366 1.16-.585 1.842-.585 1.809 0 3.275 1.494 3.41 3.386 1.303-.638 2.748.387 2.748 1.876 0 1.143-.869 2.071-1.94 2.071z"/></svg></a>';
						}
						?>
	 </div><!-- #siteinfo -->