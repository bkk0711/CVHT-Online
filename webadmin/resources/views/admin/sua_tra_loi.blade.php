@extends('admin_layout')
@section('title', 'Sửa câu trả lời')
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
          <h3 class="card-title">Sửa Câu Trả Lời</h3>
        </div>

        <div class="card-body">


            <form action="{{ URL::to('sua_tra_loi')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $traloi->IDPhanHoi }}" name ="idtraloi" >
                <div class="form-group">
                <label for=""> Chủ đề : </label>
                <select name="chude" id="chude" class="form-control">
                    @foreach ($chude as $cd)
                    @if ($cd->IDChuDe == $traloi->IDChuDe )
                    <option value="{{ $cd->IDChuDe }}" selected>{{ $cd->TenChuDe }}</option>
                    @else
                    <option value="{{ $cd->IDChuDe }}">{{ $cd->TenChuDe }}</option>
                    @endif

                    @endforeach
                </select>
             </div>
             <div class="form-group">
                <label for=""> Từ Khoá : </label>
                <select name="tukhoa" id="tukhoa" class="form-control">
                    @foreach ($tukhoa as $tk)
                    @if ($tk->IDTuKhoa == $traloi->IDTuKhoa )
                    <option value="{{ $tk->IDTuKhoa }}" selected>{{ $tk->TuKhoa }}</option>
                    @else
                    <option value="{{ $tk->IDTuKhoa }}">{{ $tk->TuKhoa }}</option>
                    @endif

                    @endforeach
                </select>
             </div>

             <div class="form-group">
                <label for=""> Nội dung trả lời : </label>
                <textarea id="noidung" name="noidung" rows="5" class="form-control">{{ $traloi->PhanHoi }}</textarea>

             </div>
             <input type="submit" value="Sửa " class="btn btn-primary">
            </form>

        </div>

      </div>


@endsection
