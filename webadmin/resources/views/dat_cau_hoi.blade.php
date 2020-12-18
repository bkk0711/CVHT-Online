@extends('home_layout')
@section('title', 'Đặt câu hỏi')
@section('home_content')


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
              <h3 class="card-title">Đặt Câu hỏi</h3>

              <div class="card-tools">

                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>

                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- Conversations are loaded here -->
<form action="{{URL::to('dat_cau_hoi')}}" method="post">
@csrf
<textarea name="cau_hoi" class="form-control" rows="10"></textarea>
<br/><div class="input-group">
    <input type="submit" class="btn btn-warning" value=" Đặt câu hỏi">
</div>
</form>
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
          </div>
          <!--/.direct-chat -->
        </div></div>
        @endsection
