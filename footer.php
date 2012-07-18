<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/all.js"></script>

<!-- SET APP ID BELOW -->
<script type="text/javascript">
	FB.init({
	appId : '388621264526998',
	status : true,
	cookie : true,
	xfbml : true,
	oath : true
	});
  	FB.Event.subscribe('edge.create',
  	  function(response) {
  	      window.location = "after.php";
    });
</script>

</body>
</html>
