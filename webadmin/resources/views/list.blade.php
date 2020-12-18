@extends('home_layout')
@section('title', 'Danh sách câu hỏi')
@section('home_content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Danh sách câu hỏi được trả lời</h3>
    </div>
    <div class="card-body">

    <table class="table" id="table">
      <thead>
        <tr>
          <th scope="col">Câu hỏi</th>
          <th scope="col">Trả lời</th>

        </tr>
      </thead>
      <tbody>
          @foreach ($cau_hoi as $ch)
          <tr>
              <td>{{ $ch->cau_hoi}}</td>
              <td>{{ $ch->tra_loi }}</td>
            </tr>
          @endforeach


      </tbody>
    </table>
</div>
</div>
@endsection
