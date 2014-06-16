<?php
$pageTitle = "Testing Google Analytics' Tag Manager";
include_once("inc/header.php");
?>

<!--Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TPPBJX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPPBJX');</script>
<!-- End Google Tag Manager -->

  This page is for the tag manager. It should send
 a pageview to google analytics when loaded
  <br>
  <br>
I should send an event when this button is clicked.
<br>
<button type="submit" class='btn btn-success'>
  Event
</button>

</div>
</body>
</html>
