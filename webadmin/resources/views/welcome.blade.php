@extends('home_layout')
@section('title', 'Chat Online')
@section('home_content')
        <div class="row">
            <div class="col-12">
          <!-- DIRECT CHAT -->
          <div class="card direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">CHAT Cố vấn học tập online</h3>

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
