@extends('admin_layout')
@section('title', 'Quản lý câu trả lời')
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
          <h3 class="card-title">Thêm Câu Trả Lời</h3>
        </div>
        <div class="card-body">


            <form action="{{ URL::to('them_tra_loi')}}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                <label for=""> Chủ đề : </label>
                <select name="chude" id="chude" class="form-control">
                    @foreach ($chude as $cd)
                    <option value="{{ $cd->IDChuDe }}">{{ $cd->TenChuDe }}</option>
                    @endforeach
                </select>
             </div>
             <div class="form-group">
                <label for=""> Từ Khoá : </label>
                <select name="tukhoa" id="tukhoa" class="form-control">
                    @foreach ($tukhoa0 as $tk)
                    <option value="{{ $tk->IDTuKhoa }}">{{ $tk->TuKhoa }}</option>
                    @endforeach
                </select>
             </div>

             <div class="form-group">
                <label for=""> Nội dung trả lời (có thể dùng html): </label>
                <textarea id="noidung" name="noidung" rows="5" class="form-control"></textarea>

             </div>

             <div class="form-group">
                <label for=""> Link đính kèm ( nếu có):</label>
               <input type="text" name="link" class="form-control">

             </div>
             <input type="submit" value="Thêm " class="btn btn-primary">
            </form>

        </div>

      </div>
      <hr/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách câu trả lời</h3>
        </div>
        <div class="card-body">

        <table class="table" id="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Chủ đề</th>
              <th scope="col">Từ Khóa</th>
              <th scope="col">Nội dung</th>
              <th scope="col">Hành Động</th>


            </tr>
          </thead>
          <tbody>
              @foreach ($traloi as $tl)
              <tr>
                  <th scope="row">{{ $tl->IDPhanHoi }}</th>

                  @if ($tl->IDChuDe == 0)
                  <td>Khác</td>
                  @else
                  <td>{{ ($chude->where('IDChuDe',$tl->IDChuDe))->first()->TenChuDe}}</td>

                  @endif
                  <td>{{ ($tukhoa->where('IDTuKhoa',$tl->IDTuKhoa))->first()->TuKhoa}}</td>
                  <td>{{ $tl->PhanHoi }}</td>

                  <td><a href="{{ URL::to('sua_tra_loi/'.$tl->IDPhanHoi) }}" class="label label-warning">Sửa</a>
                      <a class="label label-danger" href="{{ URL::to('xoa_tra_loi/'.$tl->IDPhanHoi) }}">Xóa</a>
                    </td>

                </tr>
              @endforeach


          </tbody>
        </table>
    </div>
    </div>
    </div>

@endsection
