@extends('admin_layout')
@section('title', 'Quản lý câu trả lời')
@section('admin_content')
   
   
<div class="col-md-9">
    <?php
    $message =  Session::get('message');
    if(isset($message)){
      echo'<div class="alert alert-danger" role="alert">
     '.$message.'
    </div>';
    Session::put('message', null);

    }
    ?>
    <div class="panel panel-primary">

        <div class="panel-heading">Thêm Câu Trả Lời </div>
        <div class="panel-body">
      
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
                    @foreach ($tukhoa as $tk)
                    <option value="{{ $tk->IDTuKhoa }}">{{ $tk->TuKhoa }}</option>
                    @endforeach
                </select>
             </div>

             <div class="form-group">
                <label for=""> Nội dung trả lời : </label>
                <textarea id="noidung" name="noidung" rows="5" class="form-control"></textarea>
                
             </div>
             <input type="submit" value="Thêm " class="btn btn-primary">
            </form>
      
        </div>
      
      </div>
      <hr/>
      <div class="panel panel-primary">

        <div class="panel-heading">Danh sách câu trả lời </div>
        <div class="panel-body">
        <table class="table" id="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Chủ đề</th>
              <th scope="col">Từ Khóa</th>
              <th scope="col">Nội dung</th>
             
              
            </tr>
          </thead>
          <tbody>
              @foreach ($traloi as $tl)
              <tr>
                  <th scope="row">{{ $tl->IDPhanHoi }}</th>
                  <td>{{ ($chude->where('IDChuDe',$tl->IDChuDe))->first()->TenChuDe}}</td>
                  <td>{{ ($tukhoa->where('IDTuKhoa',$tl->IDTuKhoa))->first()->TuKhoa}}</td>
                  <td>{{ $tl->PhanHoi }}</td>
                 
                </tr>
              @endforeach
            
            
          </tbody>
        </table>
    </div>
    </div>
    </div>

@endsection