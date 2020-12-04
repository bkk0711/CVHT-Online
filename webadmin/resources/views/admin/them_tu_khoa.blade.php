@extends('admin_layout')
@section('title', 'Quản lý từ khóa')
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
              <h3 class="card-title">Thêm Từ Khóa</h3>
            </div>
            <div class="card-body">


                <form action="{{ URL::to('them_tu_khoa')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for=""> Từ Khóa</label>
                    <input type="text" class="form-control" name ="tukhoa" >
                 </div>
                 <input type="submit" value="Thêm " class="btn btn-primary">
                </form>

            </div>

          </div>
          <hr/>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách Từ Khóa </h3>
            </div>
            <div class="card-body">

            <table class="table" id="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Từ khóa</th>
                  <th scope="col">Hành Động</th>


                </tr>
              </thead>
              <tbody>
                  @foreach ($tukhoa as $tk)
                  <tr>
                      <th scope="row">{{ $tk->IDTuKhoa }}</th>
                      <td>{{ $tk->TuKhoa }}</td>
                      <td><a href="{{ URL::to('sua_tu_khoa/'.$tk->IDTuKhoa) }}" class="label label-warning">Sửa</a>     <a class="label label-danger" href="{{ URL::to('xoa_tu_khoa/'.$tk->IDTuKhoa) }}">Xóa</a></td>
                    </tr>
                  @endforeach


              </tbody>
            </table>
        </div>
        </div>
        </div>





@endsection
