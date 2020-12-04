<div class="direct-chat-msg right">
    <div class="direct-chat-infos clearfix">
      <span class="direct-chat-name float-right">Sarah Bullock</span>
      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
    </div>
    <!-- /.direct-chat-infos -->
    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
    <!-- /.direct-chat-img -->
    <div class="direct-chat-text">
      You better believe it!
    </div>
    <!-- /.direct-chat-text -->
  </div>
  <!-- /.direct-chat-msg -->


<!DOCTYPE html>
<html lang="vi">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/public/css/modern-business.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/public/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/DataTables/DataTables/css/dataTables.bootstrap.min.css') }}"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('/public/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/DataTables/DataTables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/DataTables/DataTables/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#table').DataTable( {
      responsive: true
} );
} );
</script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
             <div class="panel panel-primary">

                 <div class="panel-heading">Menu Chức Năng </div>

                <div class="list-group">
                <a href="{{ URL::to('/dashboard') }}" class="list-group-item"> Thống Kê </a>
                <a href="{{ URL::to('/them_chu_de') }}" class="list-group-item"> Quản lý chủ đề </a>
                 <a href="{{ URL::to('/them_tu_khoa') }}" class="list-group-item"> Quản lý từ khóa </a>

                 <a href="{{ URL::to('/them_tra_loi') }}" class="list-group-item"> Quản lý câu trả lời </a>
                 <a href="{{ URL::to('/chat') }}" class="list-group-item">Test Chat</a>

                </div>
             </div>

            </div>
        @yield('admin_content')
    </div>
    </div>
</body>
</html>
