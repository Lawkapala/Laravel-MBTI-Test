<?php
namespace App\Http\Controllers;

use DB;
use Psy\getAll;
use Input;
use Session;
use Hash;
use App\Models;
use Request;

class QuestionController extends Controller {

	public function index($id)
	{
		$userSession = new \App\Models\UserSession;

		if($id==1){
			$userSession->payload = Hash::make(1);
			$userSession->user_ip = Request::getClientIp();
			$userSession->save();
			$payload = $userSession->payload;

		}else{
		$payload =  substr(Input::get('answer'),7);
		$userSession->payload = $payload;
		}
		$score = substr(Input::get('answer'),0,4);
		$userSession->score = (int) $score;
		$userSession->indicator = substr(Input::get('answer'),5);
		$userSession->save();
		$question = DB::table('question')->where('id', '=', $id)->first();

		return view('quiz.index', [
			'payload' => $payload,
			'question' => $question,
			]);
	}
	public function calculate($payload){
		$userSession = new \App\Models\UserSession;
		$result = $userSession->where('payload', '=', $payload)->get();
		dd($result);

	}
}
