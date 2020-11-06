@extends('admin_layout')
@section('title', 'Trang Quản Lý ChatBot')
@section('admin_content')
   
<div class="col-md-9">
   <div class="row">
      <div class="col-md-3">
         <center>
         <div class="panel panel-primary">

            <div class="panel-heading">Tổng số chủ đề </div>
          
            <div class="panel-body">
          
              {{ $chude->count() }}
          
            </div>
          
          </div>
         </center>
      </div>
      <div class="col-md-3">
         <center>
         <div class="panel panel-primary">

            <div class="panel-heading">Tổng số từ khóa</div>
          
            <div class="panel-body">
          
               {{ $tukhoa->count() }}
          
            </div>
          
          </div>
         </center>
      </div>
      <div class="col-md-3">
         <center>
         <div class="panel panel-primary">

            <div class="panel-heading">Tổng số câu trả lời</div>
          
            <div class="panel-body">
          
               {{ $phanhoi->count() }}
          
            </div>
          
          </div>
         </center>
      </div>
      <div class="col-md-3">
         <center>
         <div class="panel panel-primary">

            <div class="panel-heading">Tổng số tin nhắn</div>
          
            <div class="panel-body">
          
               {{ $log->count() }}
          
            </div>
          
          </div>
         </center>
      </div>

   </div>
</div>
@endsection