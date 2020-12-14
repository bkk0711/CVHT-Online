
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Cố vấn học tập online</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/template/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<style>
    /* width */
::-webkit-scrollbar {
  width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
.direct-chat-messages {
    transform: translate(0,0);
    height: 450px;
    overflow: auto;
    padding: 10px;
}

.loading.hidden {
        display: none;
    }
    .google-loader {
  display: block;
}
.google-loader span {
  display: inline-block;
  margin-top: 10px;
  height: 10px;
  width: 10px;
  border-radius: 50%;
}
.google-loader span:not(:first-child) {
  margin-left: 10px;
}
.google-loader span:nth-child(1) {
  background: #4285F4;
  animation: move 1s ease-in-out -0.25s infinite alternate;
}
.google-loader span:nth-child(2) {
  background: #DB4437;
  animation: move 1s ease-in-out -0.5s infinite alternate;
}
.google-loader span:nth-child(3) {
  background: #F4B400;
  animation: move 1s ease-in-out -0.75s infinite alternate;
}
.google-loader span:nth-child(4) {
  background: #0F9D58;
  animation: move 1s ease-in-out -1s infinite alternate;
}

@keyframes move {
  from {
    transform: translateY(-10px);
  }
  to {
    transform: translateY(5px);
  }
}
.loader span{
	width:16px;
	height:16px;
	border-radius:50%;
	display:inline-block;
	position:absolute;
	left:50%;
	margin-left:-10px;
	-webkit-animation:3s infinite linear;
	-moz-animation:3s infinite linear;
	-o-animation:3s infinite linear;

}


.loader span:nth-child(2){
	background:#E84C3D;
	-webkit-animation:kiri 1.2s infinite linear;
	-moz-animation:kiri 1.2s infinite linear;
	-o-animation:kiri 1.2s infinite linear;

}
.loader span:nth-child(3){
	background:#F1C40F;
	z-index:100;
}
.loader span:nth-child(4){
	background:#2FCC71;
	-webkit-animation:kanan 1.2s infinite linear;
	-moz-animation:kanan 1.2s infinite linear;
	-o-animation:kanan 1.2s infinite linear;
}


@-webkit-keyframes kanan {
    0% {-webkit-transform:translateX(20px);
    }

	50%{-webkit-transform:translateX(-20px);
	}

	100%{-webkit-transform:translateX(20px);
	z-index:200;
	}
}
@-moz-keyframes kanan {
    0% {-moz-transform:translateX(20px);
    }

	50%{-moz-transform:translateX(-20px);
	}

	100%{-moz-transform:translateX(20px);
	z-index:200;
	}
}
@-o-keyframes kanan {
    0% {-o-transform:translateX(20px);
    }

	50%{-o-transform:translateX(-20px);
	}

	100%{-o-transform:translateX(20px);
	z-index:200;
	}
}




@-webkit-keyframes kiri {
     0% {-webkit-transform:translateX(-20px);
	z-index:200;
    }
	50%{-webkit-transform:translateX(20px);
	}
	100%{-webkit-transform:translateX(-20px);
	}
}

@-moz-keyframes kiri {
     0% {-moz-transform:translateX(-20px);
	z-index:200;
    }
	50%{-moz-transform:translateX(20px);
	}
	100%{-moz-transform:translateX(-20px);
	}
}
@-o-keyframes kiri {
     0% {-o-transform:translateX(-20px);
	z-index:200;
    }
	50%{-o-transform:translateX(20px);
	}
	100%{-o-transform:translateX(-20px);
	}
}
    </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>



    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <span class="brand-text font-weight-light">CVHT Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          <a href="{{URL::to('dat_cau_hoi')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Đặt Câu Hỏi

              </p>
            </a>

          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cố vấn học tập online</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cố vấn học tập online</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
          <!-- DIRECT CHAT -->
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Đặt Câu hỏi</h3>

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
<form action="{{URL::to('dat_cau_hoi')}}" method="post">
@csrf
<textarea name="cau_hoi" class="form-control" rows="10"></textarea>
<br/><div class="input-group">
    <input type="submit" class="btn btn-warning" value=" Đặt câu hỏi">
</div>
</form>
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
          </div>
          <!--/.direct-chat -->
        </div></div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
  <b>Version</b> 3.1.0-rc
</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('public/template/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/template/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/template/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/template/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/template/dist/js/pages/dashboard.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('public/template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('public/template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('public/template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function () {
    $('#table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e){
        e.preventDefault();
        var noidung = $("input[name=noidung]").val();
        $.ajax({
           type:'POST',
           url:"{{ route('chat.post') }}",
           data:{noidung:noidung},
           beforeSend: function () { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
                $('#loading').removeClass('hidden')
            },
           success:function(data){
            $("input[name=noidung]").val('');
            $("#result").append('<div class="direct-chat-msg right"><div class="direct-chat-infos clearfix"><span class="direct-chat-name float-right">Bạn</span></div><img class="direct-chat-img" src="public/template/dist/img/user3-128x128.jpg" alt="message user image"><div class="direct-chat-text">'+data.message+'</div></div>');
            $("#result").append(' <div class="direct-chat-msg"><div class="direct-chat-infos clearfix"><span class="direct-chat-name float-left">Cố Vấn Học Tập</span></div><img class="direct-chat-img" src="{{ URL::to('public/template/dist/img/user1-128x128.jpg')}}" alt="message user image"><div class="direct-chat-text">'+data.messagecvht+' </div></div>');

           },
           complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
                $('#loading').addClass('hidden')
            },
        });

    });
</script>
</body>
</html>



