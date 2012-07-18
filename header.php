<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gulf Brain Racing</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<!--- SET CANVAS HEIGHT BELOW -->
<?php if ($thisPage=="Before") { ?>
<script type="text/javascript">
	window.fbAsyncInit = function() {
	FB.Canvas.setSize({ height: 800 });
	}
	function sizeChangeCallback() {
	FB.Canvas.setSize({ height: 800 });
	}
</script>
<? } elseif ($thisPage=="After") { ?>
<script type="text/javascript">
	window.fbAsyncInit = function() {
	FB.Canvas.setSize({ height: 800 });
	}
	function sizeChangeCallback() {
	FB.Canvas.setSize({ height: 800 });
	}
</script>
<? }; ?>

</head>
<body style="margin:0px; padding:0px;" >
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "connect.facebook.net/en_US/all.js#xfbml=1&appId=226803480703877";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
