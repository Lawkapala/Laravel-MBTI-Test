<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{% block title %}Welcome!{% endblock %}</title>
  {!!  HTML::script('js/jquery-ui.min.js')!!}

@section('stylesheets')
  {!! HTML::style('css/bootstrap.min.css') !!}
  {!! HTML::style('css/default.css') !!}
  @show
  @if(isset($quiz))
  <body onload="noBack();"
  onpageshow="if (event.persisted) noBack();" onunload="">
  @else
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&appId=715854618467023&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    @endif

    <div class="container">

      <div class="header">
        <a href="/" style="text-decoration: none;">Personality</a>
      </div>

      <div class="subheader">
        Sprawdź swoją osobowość!
      </div>

      @yield('content')

    </div>
    @section('javascripts')
    {!! HTML::script('js/jquery-2.1.1.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    @show
  </body>
  </html>
