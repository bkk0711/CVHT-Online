@extends('admin_layout')
@section('title', 'Trả Lời Câu hỏi')
@section('admin_content')

<div class="row">
    <div class="col-12">
        <?php
        $message =  Session::get('message');
        if(isset($message)){
          echo'<div class="alert alert-danger" role="alert">
         '.$message.'
        </div>';
        Session::put('message', null);

        }
        ?>
  <!-- DIRECT CHAT -->
  <div class="card ">
    <div class="card-header">
      <h3 class="card-title">Trả lời câu hỏi : </h3>

      <div class="card-tools">

        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>

        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="list-group-item list-group-item-success">
    {{$cau_hoi->cau_hoi}}
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <!-- Conversations are loaded here -->
<form action="{{URL::to('sua_cau_hoi')}}" method="post">
@csrf
<label for=""> Trả lời</label><br/>
<textarea name="tra_loi" class="form-control" rows="10">{{$cau_hoi->tra_loi}}</textarea>
<input type="hidden" name="id" value="{{$cau_hoi->id}}">
<br/>
<div class="input-group">
<input type="submit" class="btn btn-warning" value=" Sửa trả lời">
</div>
</form>
    </div>
    <!-- /.card-body -->

    <!-- /.card-footer-->
  </div>
  <!--/.direct-chat -->
</div></div>

@endsection
