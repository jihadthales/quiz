<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $quiz = Quiz::get();
        return view('admin.dashboard')->with('quiz',$quiz);
    }


    public function users(){
        return view('admin.users');
    }

    
    public function ranking(){
        return view('admin.ranking');
    }

    public function feedback(){
        return view('admin.feedback');
    }

    public function viewfeedback(){
        return view('admin.viewfeedback');
    }
    public function quizdetail(){
        return view('admin.quizdetail');
    }

    public function savequiz(Request $request){
        $quiz = new Quiz();
        $quiz->topic = $request->input('topic');
        $quiz->totalquestions = $request->input('totalquestions');
        $quiz->mark = $request->input('mark');
        $quiz->timelimit = $request->input('timelimit');
        $quiz->description = $request->input('description');
        $quiz->num = 0;

        $quiz->save();
        $quiz = Quiz::where('topic', $request->input('topic'))->first();
        Session::put('quiz', $quiz);
        return  redirect('/admin/questiondetail');
    }

    public function questiondetail(){
        $quiz = Quiz::where('topic',Session::get('quiz')->topic)->first();
        if ($quiz->num < $quiz->totalquestions) {
            return view('admin.questiondetail')->with('quiz',$quiz);
        } else {
            Session::forget("quiz");
            return redirect('/admin/dashboard');
        }
        
      
    }

    
    public function savequestion(Request $request){

        $correct;

        if ($request->input('correct') == "a") {
            $correct= $request->input('optiona');
        } elseif($request->input('correct') == "b") {
            $correct= $request->input('optionb');
        } elseif($request->input('correct') == "c") {
            $correct= $request->input('optionc');
        }else {
       
                $correct= $request->input('optiond');
        }
        
        $question = new Question();
        $question->topic = Session::get('quiz')->topic;
        $question->question = $request->input('question');
        $question->one = $request->input('optiona');
        $question->two = $request->input('optionb');
        $question->three = $request->input('optionc');
        $question->foor = $request->input('optiond');
        $question->correct = $correct;
        $quiz = Quiz::where("topic", Session::get('quiz')->topic)->first();
        $quiz->num = $quiz->num +1;
        $quiz->update();
        $question->numquestion =   $quiz->num  ;
        $question->save();
        return  redirect('/admin/questiondetail');
    }
    public function removequiz(){
        return view('admin.removequiz');
    }

    public function respondquestion($topic){
        
        if(!Session::get("num") && !Session::get("quiz")){
            Session::put("num", 1);
            $quiz = Quiz::where("topic",$topic)->first();
            Session::put("quiz", $quiz);
        }

        return redirect("/admin/assessments");
    }
   
    public function assessments(){
       
        $question = Question::where("topic", Session::get("quiz")->topic)->where("numquestion", Session::get("num"))->first();
       

        return view('admin.assessments')->with("question" ,$question);
    }

    public function saveanswer(Request $request){

    }
}
