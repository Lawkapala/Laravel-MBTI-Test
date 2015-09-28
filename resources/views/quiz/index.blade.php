@extends('layout')
<div id="result">
	@section('content')

	<div class="content">
		<div class="load">
			<div class="progress">
				<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
				aria-valuemin="0"
				aria-valuemax="100"
				style="width: %;">
			</div>
		</div>

		<div class="box">

			<div class="facebook fbk">
				<div class="fb-like"
				data-href="https://developers.facebook.com/docs/plugins/"
				data-layout="button_count"
				data-ction="like"
				data-show-faces="true"
				data-share="true"></div>
			</div>
		<center>
				<div class="panel-body">

					<p class="counter"></p>
					<br />
					<div class="lead question">
						{{$question->text}}
						<hr class="quiz">

					</div>

					<div class="possibile-answers">
						<form method="post" action="/question/{{++$question->id}}" ajax="true">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							Tak
							<input type="submit" name="answer" id="btn-definitely-yes" class="btn btn-default answer" value="0100 {{$question->indicator. ' '. $payload}}">
							<input type="submit" name="answer" id="btn-obviously-yes" class="btn btn-default answer" value="0050  {{$question->indicator. ' '. $payload}}">
							<input type="submit" name="answer" id="btn-hesitance" class="btn btn-default answer" value="0000 {{$question->indicator . ' '.$payload}}">
							<input type="submit" name="answer" id="btn-obviously-no" class="btn btn-default answer" value="-050 {{$question->indicator . ' '.$payload}}">
							<input type="submit" name="answer" id="btn-definitely-no" class="btn btn-default answer" value="-100 {{$question->indicator . ' '.$payload}}">
							Nie
						</form>

					</div>

	</div>
</div>
</center>
<audio>
	<source src="/sounds/answer.mp3"></source>
</audio>
{!!  HTML::script('js/jquery-2.1.1.min.js')!!}

{!!  HTML::script('js/bootstrap.min.js') !!}


<script type="text/javascript">
	var audio = $("audio")[0];
	$(".answer").click(function() {
		audio.play();
	});
</script>
</div>
</div>
@stop
