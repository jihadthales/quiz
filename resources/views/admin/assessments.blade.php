@extends('admin_layout.master')

@section('title')
    Assessement
@endsection
@section('content')
  <!--container start-->
  <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel" style="margin:5%">
              <b>Question &nbsp;{{Session::get("num")}}&nbsp;::
              <br />{{$question->question}}</b><br /><br />
                <form action="" method="POST"  class="form-horizontal">
                
                  <input type="radio" name="ans">&nbsp;{{$question->one  }}<br /><br />
                  <input type="radio" name="ans" >&nbsp;{{$question->two }}<br /><br />
                  <input type="radio" name="ans" >&nbsp;{{$question->three }}<br /><br />
                  <input type="radio" name="ans" >&nbsp;{{$question->foor }}<br /><br /><br />
                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    
@endsection