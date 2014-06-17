<?php
$pageTitle = "Testing google analytics code";
include_once("inc/header.php");
include_once("inc/analyticstracking.php");
?>

<script type="text/javascript" charset="utf-8">
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

// Create the main profile and send a pageview
// Esto crea el perfil principal, y mando una visita a el.
  ga('create', 'UA-49859541-1', 'auto');
  ga('send', 'pageview');

// Create a secondary profile called 'desktop' and sends a pageview to it.
// Esto crea el perfil secundario, y después manda una vista a el.

  ga('create', 'UA-49859541-3', 'auto', {'name': 'desktop'});
  ga('desktop.send', 'pageview');

// Sending Events:
// the function below is called when an event happens
// The argument passed is the category that will show up in the google analytics gui.
//
// Mandar Eventos:
// ahora para mandar los eventos--una función que se llama al momento que ocurre un evento.
// El argumento es la categoría que se va a mostrar en el interface de google analytics

  function gaEvent(category) {
    ga('send', 'event', category, 'clicked');
    ga('desktop.send', 'event', category, 'clicked');
  }

</script>
This page just includes analytics tracking code for
 google analytics.

Esta página manda una vista (pageview) a google analytics cuando carga

<br>
It sends an event when this button is clicked.
Manda un evento cuando se presiona este botón.
<br>

<button onclick="gaEvent('button clicked')" type="submit" class='btn btn-success'>
  Event
</button>

<br><br>

<button onclick="gaEvent('Event Goal')" type="submit" class='btn btn-success'>
  Conversion!
</button>

<a onclick="gaEvent('called')" href="tel:+51951379197">Call me!</a>

</div>
</body>
</html>
