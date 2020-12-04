@extends('admin_layout')
@section('title', 'Trang Quản Lý ChatBot')
@section('admin_content')
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tổng số chủ đề</span>
          <span class="info-box-number">
            {{ $chude->count() }}

          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tổng số từ khóa</span>
          <span class="info-box-number"> {{ $tukhoa->count() }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-comment"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tổng số câu trả lời</span>
          <span class="info-box-number">{{ $phanhoi->count() }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tổng số tin nhắn</span>
          <span class="info-box-number"> {{ $log->count() }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <div class="row">
    <div class="col-12">
  <!-- DIRECT CHAT -->
  <div class="card direct-chat direct-chat-primary">
    <div class="card-header">
      <h3 class="card-title">TEST CHAT</h3>

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
      <div class="direct-chat-messages" id="result">

        <!-- Message. Default to the left -->
        <div class="direct-chat-msg">
          <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-left">Cố Vấn Học Tập</span>

          </div>
          <!-- /.direct-chat-infos -->
          <img class="direct-chat-img" src="{{ URL::to('public/template/dist/img/user1-128x128.jpg')}}" alt="message user image">
          <!-- /.direct-chat-img -->
          <div class="direct-chat-text">
            Chào bạn ! Tôi là cố vấn học tập online
          </div>
          <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->
        <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-left">Cố Vấn Học Tập</span>

            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="{{ URL::to('public/template/dist/img/user1-128x128.jpg')}}" alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
                Tôi có thể hổ trợ cho bạn các vấn đề mà bạn cần
            </div>
            <!-- /.direct-chat-text -->
          </div>
          <!-- /.direct-chat-msg -->
            <!-- /.direct-chat-msg -->
        <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-left">Cố Vấn Học Tập</span>

            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="{{ URL::to('public/template/dist/img/user1-128x128.jpg')}}" alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
                Bạn đang cần gì ?
            </div>
            <!-- /.direct-chat-text -->
          </div>
          <!-- /.direct-chat-msg -->

        <!-- Message to the right -->

        <div class="loading hidden" id="loading" ><center>
            <div class="loader">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
          </div>
          </center></div>


      </div>
      <!--/.direct-chat-messages-->

      <!-- Contacts are loaded here -->

      <!-- /.direct-chat-pane -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <form>
        <div class="input-group">
          <input type="text" name="noidung" id="noidung" class="form-control" placeholder="Nhập nôi dung...">
          <span class="input-group-append">
            <button class="btn btn-primary btn-submit">Gửi Chat</button>
          </span>
        </div>
      </form>
    </div>
    <!-- /.card-footer-->
  </div>
  <!--/.direct-chat -->
</div></div>

@endsection
