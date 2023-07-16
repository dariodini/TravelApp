</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    var currentUrl = window.location.pathname;

    $('.nav-link').removeClass('active');

    if(currentUrl.includes('/country')) {
        $('#country-tab').addClass('active');
    } else if(currentUrl.includes('/trip')) {
        $('#trip-tab').addClass('active');
    }
  });
</script>
</body>
</html>
