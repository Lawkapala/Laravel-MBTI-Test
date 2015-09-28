
@extends('layout')
<div id="result">
	@section('content')

	<div class="content">


		<div class="box">
			<div class="facebook fbk">

				<div class="fb-like"
				data-href="https://developers.facebook.com/docs/plugins/"
				data-layout="button_count"
				data-ction="like"
				data-show-faces="true"
				data-share="true"></div>
			</div>
			<div class="panel-body">
				<p class="count-info">Ilość przeprowadzonych testów: <strong>423423</strong> </p>


				<h2 id="info">Twój typ osobowości: <strong><a href="/personality/{{ $personality[0]['acronym'] }}">{{ $personality[0]['acronym'] }}</a></strong>   <i style="font-size: 24px;">( {{ $personality[0]['brief_desc'] }} )</i></h2>
				<br/>
				<h2 id="info"></strong></h2>

				<hr class="header" />
				<center>
					<div class="result">
						<div class="row clearfix">
							<div class="col-md-6">
								<div class="indicator right">Introwersja</div>
								<div class="progress right ">
									<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
									aria-valuemin="0"
									aria-valuemax="100"
									style="width: {{$introversion_absolute }}%;">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="indicator left">Ekstrawersja</div>
							<div class="progress left">
								<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
								aria-valuemin="0"
								aria-valuemax="100"
								style="width: {{$extraversion_absolute}}%;">
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="indicator right">Intuicja</div>
						<div class="progress right ">
							<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
							aria-valuemin="0"
							aria-valuemax="100"
							style="width: {{ $intuition_absolute }}%;">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="indicator left">Poznanie</div>
					<div class="progress left">
						<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
						aria-valuemin="0"
						aria-valuemax="100"
						style="width: {{$sensing_absolute }}%;">
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-6">
				<div class="indicator right">Myslenie</div>
				<div class="progress right ">
					<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
					aria-valuemin="0"
					aria-valuemax="100"
					style="width: {{$thinking_absolute }}%;">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="indicator left">Odczuwanie</div>
			<div class="progress left">
				<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
				aria-valuemin="0"
				aria-valuemax="100"
				style="width: {{$feeling_absolute}}%;">
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-6">
		<div class="indicator right">Obserwacja</div>
		<div class="progress right ">
			<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
			aria-valuemin="0"
			aria-valuemax="100"
			style="width: {{$perceiving_absolute}}%;">
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="indicator left">Osadzanie</div>
	<div class="progress left">
		<div class="progress-bar progress-bar-danger progress-bar" role="progressbar" aria-valuenow=""
		aria-valuemin="0"
		aria-valuemax="100"
		style="width: {{$judging_absolute }}%;">
	</div>
</div>
</div>
</div>
</center>

</div>
</div>
@stop