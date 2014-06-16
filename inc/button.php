<p>
  Here's a button. This is for testing events--we use event tracking on the
 mobile website to track form completions
</p>

<script type="text/javascript" charset="utf-8">
  function gaEvent() {
    ga('send', 'event', 'Button event', 'clicked');
    console.log('Event sent')
  }
</script>

<button onclick="gaEvent()" type="submit" class='btn btn-success'>
  Event
</button>

