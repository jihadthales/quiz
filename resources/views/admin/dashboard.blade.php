@extends('admin_layout.master')

@section('title')
    Dashboard
@endsection
@section('content')
<div class="container"><!--container start-->
    <div class="row">
      <div class="col-md-12">
        <!--home start-->
        <div class="panel">
          <div class="table-responsive">
            <table class="table table-striped title1">
              <tr>
                <td><b>S.N.</b></td>
                <td><b>Topic</b></td>
                <td><b>Total question</b></td>
                <td><b>Marks</b></td>
                <td><b>Time limit</b></td>
                <td></td>
              </tr>
              @foreach ($quiz as $quiz)
              <tr>
                <td>{{$quiz->id}}</td>
                <td>{{$quiz->topic}}&nbsp;<span title="This quiz is already solve by you"
                   class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                <td>{{$quiz->totalquestions}}</td>
                <td>{{$quiz->mark * $quiz->totalquestions}}</td>
                <td>{{$quiz->timelimit}}&nbsp;min</td>
                <td><b><a href="/admin/respond/{{$quiz->topic}}" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td>

              </tr>
              @endforeach
              
            </table>
        </div>
      </div>
    </div>
  </div>
</div><!--container closed-->
@endsection