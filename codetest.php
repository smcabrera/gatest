<?php
$pageTitle = "Testing google analytics code";
include_once("inc/header.php");
include_once("inc/analyticstracking.php");
?>

This page just includes analytics tracking code for
 google analytics.

It should send a pageview to Google Analytics when it loads
  <br>
  <br>
I should send an event when this button is clicked.
<br>
<script type="text/javascript" charset="utf-8">
  function gaEvent(category) {
    ga('send', 'event', category, 'clicked');
    ga('desktop.send', 'event', category, 'clicked');
  }

</script>

<button onclick="gaEvent('button clicked')" type="submit" class='btn btn-success'>
  Event
</button>

<br>

<button onclick="gaEvent('Event Goal')" type="submit" class='btn btn-success'>
  Conversion!
</button>

<a onclick="gaEvent('called')" href="tel:+51951379197">Call me!</a>

</div>
</body>
</html>
