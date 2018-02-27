<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->

<!-- Start: injected by Adguard -->
<script src="//local.adguard.com/adguard-ajax-api/injections/userscripts.js?ts=63655267783002&name=Adguard%20Assistant&name=Adguard%20Popup%20Blocker" nonce="9af0178076d4445eb4a9a0d56cee77d8" type="text/javascript"></script>
<script src="//local.adguard.com/adguard-ajax-api/injections/content-script.js?ts=63655269586806&amp;domain=hosting.timeweb.ru&amp;mask=111" nonce="9af0178076d4445eb4a9a0d56cee77d8" type="text/javascript"></script>

<!-- End: injected by Adguard -->
{{--<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>--}}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
