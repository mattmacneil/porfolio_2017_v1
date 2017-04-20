<footer id="footer-load" class="animate-bottom" style="display:none;">
	<a href='m&#97;ilto&#58;%&#54;Datt@ma&#116;t%6Da&#99;%6E%&#54;&#53;%69l&#46;c%6F%6D'>matt&#64;ma&#116;&#116;mac&#110;e&#105;l&#46;co&#109;</a>
	<div id="footer-scrolltop">
		<a href="#">Go to Top</a>
	</div><!-- footer top -->
</footer>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span><br />
    <span class="modal-headline">I Get Around.</span><br />
    <p>I have experience at a few agencies in the Boston area and a couple other places. This portfolio page highlights things that I've done from top to bottom as an individual, but I have some nice team-built projects I can show upon request. <a href="../resume/">Take a look at my resume</a> for more professional details.</p>
  </div><!-- modal content -->
</div><!-- myModal -->

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">

	// Page Loader Animation

	var myVar;

	function loaderScreen() {
	    myVar = setTimeout(showPage, 1000);
	}

	function showPage() {
	  document.getElementById("loader").style.display = "none";
	  document.getElementById("container").style.display = "block";
	 	document.getElementById("footer-load").style.display = "block";
	}

	// Launch Agency Experience Modal: 

	$(window).scroll(function() {
	  var scrolledY = $(window).scrollTop();
	  $('#contact-image').css('background-position', 'left ' + ((scrolledY)) + 'px');
	});

	var modal = document.getElementById('myModal');
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];

	btn.onclick = function() {
	    modal.style.display = "block";
	}

	span.onclick = function() {
	    modal.style.display = "none";
	}

	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}

	// Smooth Scroll Navigation:

	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 500);
	        return false;
	      }
	    }
	  });
	});

	// Disable SCSS Link on Tablets / Phones:

	$('.toolkit-sass a').click(function(event){
	    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	        event.preventDefault();
	    }
	});

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91852658-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- 
     (c)2017
     Built by matt@mattmacneil.com
-->

</body>
</html>