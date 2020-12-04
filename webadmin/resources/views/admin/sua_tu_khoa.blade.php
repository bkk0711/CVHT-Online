@extends('admin_layout')
@section('title', 'Sửa từ khóa')
@section('admin_content')

       <div class="col-md-12">
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
      <h3 class="card-title">Sửa Từ Khóa</h3>
    </div>

    <div class="card-body">

                <form action="{{ URL::to('sua_tu_khoa')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for=""> Từ Khóa</label>
                    <input type="hidden" value="{{ $tukhoa->IDTuKhoa }}" name ="idtukhoa" >
                    <input type="text" class="form-control" value="{{ $tukhoa->TuKhoa }}" name ="tukhoa" >
                 </div>
                 <input type="submit" value="Sửa " class="btn btn-primary">
                </form>

            </div>

          </div>






@endsection
