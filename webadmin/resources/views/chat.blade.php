<!DOCTYPE html>
<html lang="vi">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Chát - CVHT</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/public/css/modern-business.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/public/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   
    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<style>
  
  	body {
  	padding-top: 20px;
		}
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
/*Hidden class for adding and removing*/

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
<body>
<!-- Html -->
<div class="container">
    <div class="row">
    <div class="col-md-12">
           <div class="panel panel-primary">
                    <div class="panel-heading bg-light-blue">
                        <h4>Co Van Hoc Tap</h4>
                    </div>

                    <div style=" max-height: 480px;height:480px">
                        <div id="result-msg"></div>
                        
<div style=" max-height: 400px; margin-bottom: 10px; overflow:scroll; overflow-x: auto;overflow-y: auto; -webkit-overflow-scrolling: touch; " id="result">
    <div class="list-group-item"><b style="color:red">Cố Vấn Học Tập </b> : Chào bạn ! Tôi là cố vấn học tập online . </div>
    <div class="list-group-item"><b style="color:red">Cố Vấn Học Tập </b> : Tôi có thể hổ trợ cho bạn các vấn đề mà bạn cần. </div>
    <div class="list-group-item"><b style="color:red">Cố Vấn Học Tập </b> : Bạn đang cần gì ? </div>
    </div>
    <div class="loading hidden" id="loading" ><center>
      <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    </center></div>

</div>
<div class="panel-footer">
<form>
    <div class="input-group">

        <input type="text" name="noidung" id="noidung" class="form-control" placeholder="Nhập nôi dung..."/>
  
        <span class="input-group-btn">
  
            <button class="btn btn-primary btn-submit">Chat</button>
  
        </span>
  
      </div><!-- /input-group -->
	
</form>

                    


    
           </div>
           </div>
    </div>
  

   

    
     </div><!-- /row -->

</div>
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
            $("#result").append('<div class="list-group-item"><span><b>Bạn</b> : '+data.message+'</span></div>');
            $("#result").append('<div class="list-group-item"><span><b style="color:red">Cố Vấn Học Tập </b> : '+data.messagecvht+'</span></div>');
            
           },
           complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
                $('#loading').addClass('hidden')
            },
        });
  
    });
</script>