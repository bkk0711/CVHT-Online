@extends('admin_layout')
@section('title', 'Quản lý chủ đề')
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
          <h3 class="card-title">Thêm chủ đề</h3>
        </div>
        <div class="card-body">

            <form action="{{ URL::to('them_chu_de')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                <label for=""> Mã Chủ đề : </label>
                <input type="text" class="form-control" name ="machude" >
             </div>
             <div class="form-group">
                <label for=""> Tên Chủ đề : </label>
                <input type="text" class="form-control" name ="tenchude" >
             </div>
             <input type="submit" value="Thêm " class="btn btn-primary">
            </form>

        </div>

      </div>
      <hr/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách chủ đề</h3>
        </div>

        <div class="card-body">
        <table class="table" id="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Mã Chủ Đề</th>
              <th scope="col">Tên Chủ Đề</th>

            </tr>
          </thead>
          <tbody>
              @foreach ($chude as $cd)
              <tr>
                  <th scope="row">{{ $cd->IDChuDe }}</th>
                  <td>{{ $cd->MaChuDe }}</td>
                  <td>{{ $cd->TenChuDe }}</td>
                </tr>
              @endforeach


          </tbody>
        </table>
    </div>
    </div>
    </div>

@endsection
