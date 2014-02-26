
<div class="container-fluid lead-reset-padd" style="background: none repeat scroll 0 0 #505050;">
	<div class="row-fluid">
		<div class="adr-footer">
			<div>
				<div class="footer-links">
					<div class="row-fluid">
						<ul id="footer-ul-link" class="inline"><!--here-->
							<li> <a href="http://<?=$domain?>">Home</a></li>
							<li><a href="#top" id="_contactus">Contact us</a></li>
							<li><a href="#top" id="_partner">Partner with us</a></li>
							<li><a href="#top" id="_apply">Apply now</a></li>
							<li><a href="/terms.html">Terms</a></li>
							<li> <a href="/inquire.html">Inquire about this domain</a></li>
							<li> <a href="/referral.html">Referral</a></li>
						</ul>
					</div>
				</div>
				<p class="copyright">All content &copy; 2013 - 2014 <?=ucwords($domain)?>. All rights reserved.</p>
			</div>
		</div>
	</div>
</div><!--footer-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.als-1.1.min.js" type="text/javascript"></script>
<script src="js/lead.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#demo3").als({					
			visible_items: 3,
			scrolling_items: 1,
			orientation: "horizontal",
			circular: "yes",
			autoscroll: "yes",
			interval: 4000
		});
		
	});
</script>
<!--script src="js/bootstrap.min.js"></script-->
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?=$account_ga?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script src="js/jquery.counter.js" type="text/javascript"></script>

<script>
$(function() {
	//$('.counter').counter();
});
</script>
</body>
</html>