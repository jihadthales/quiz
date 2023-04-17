@extends('admin_layout.master')

@section('title')
   quiz detail
@endsection
@section('content')
  <!--container start-->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form class="form-horizontal title1" name="form" action="{{url('/admin/savequiz')}}"  method="POST">
              
           @csrf
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="name"></label>  
                  <div class="col-md-12">
                  <input id="name" name="topic" placeholder="Enter Quiz title" class="form-control input-md" required type="text">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="total"></label>  
                  <div class="col-md-12">
                  <input id="total" name="totalquestions" required  placeholder="Enter total number of questions" class="form-control input-md" type="number">
                    
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="right"></label>  
                  <div class="col-md-12">
                  <input id="right" name="mark" required placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
                    
                  </div>
                </div>

              

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="time"></label>  
                  <div class="col-md-12">
                  <input id="time" name="timelimit" required placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number">
                    
                  </div>
                </div>

             

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="desc"></label>  
                  <div class="col-md-12">
                  <textarea rows="8" cols="8" required name="description" class="form-control" placeholder="Write description here..."></textarea>  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-12 control-label" for=""></label>
                  <div class="col-md-12"> 
                    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                  </div>
                </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end container -->
@endsection