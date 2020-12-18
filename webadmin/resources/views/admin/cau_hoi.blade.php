@extends('admin_layout')
@section('title', 'Câu hỏi')
@section('admin_content')
<?php
$message =  Session::get('message');
if(isset($message)){
  echo'<div class="alert alert-danger" role="alert">
 '.$message.'
</div>';
Session::put('message', null);

}
?>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Danh sách câu hỏi đang chờ trả lời </h3>
    </div>
    <div class="card-body">

    <table class="table" id="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Câu hỏi</th>
          <th scope="col">Hành Động</th>


        </tr>
      </thead>
      <tbody>
          @foreach ($cau_hoi->where('done', 0) as $ch)
          <tr>
              <td>{{$ch->id}}</td>
              <td>{{$ch->cau_hoi}}</td>
              <td><a href="{{URL::to('del_cau_hoi/'.$ch->id)}}" class="btn btn-danger btn-sm"> Xóa</a> <a href="{{URL::to('tra_loi_cau_hoi/'.$ch->id)}}" class="btn btn-success btn-sm">Trả lời</a> </td>
              </tr>
          @endforeach


      </tbody>
    </table>
</div>
</div>
<hr/>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Danh sách câu hỏi đã trả lời </h3>
    </div>
    <div class="card-body">

    <table class="table" id="table1">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Câu hỏi</th>
          <th scope="col">Trả lời</th>
          <th scope="col">Hành Động</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($cau_hoi->where('done', 1) as $ch)
          <tr>
              <td>{{$ch->id}}</td>
              <td>{{$ch->cau_hoi}}</td>
              <td>{{$ch->tra_loi}}</td>
              <td><a href="{{URL::to('del_cau_hoi/'.$ch->id)}}" class="btn btn-danger btn-sm"> Xóa</a>  <a href="{{URL::to('sua_cau_hoi/'.$ch->id)}}" class="btn btn-success btn-sm"> Sửa </a></td>
              </tr>
          @endforeach


      </tbody>
    </table>
</div>
@endsection
