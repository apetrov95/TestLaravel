<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">
	<link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Тестовое задание</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
						 
							
						
						@if (Auth::guest())
                            <li><a href="{{ route('login') }}">Авторизация</a></li>
                            <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @else
						
                       
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{Auth::User()->Name}} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
									<a class="btn btn-default" href="/lc" role="button">Личный Кабинет</a>
									<!--<a class="btn btn-default" href="/page/add" role="button">Добавить товар</a>-->
									
									@if(Auth::user()->priv == 'moderator')
							<a class="btn btn-default" href="/page/add" role="button">Добавить товар (для модератора)</a>
						@endif
								@if(Auth::user()->priv == 'operator')
							<a class="btn btn-default" href="/page/add" role="button">Добавить товар (для оператора)</a>
						@endif
						@if(Auth::user()->priv == 'user')
							 @endif
									
                                        <a class="btn btn-default" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" role="button">
                                            Выйти
										
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
						
						
                    </ul><!--/.navbar-collapse -->
      </div>
    </div>

	@if(count($errors) > 0 )
		
	<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)
	<li>{{$error}} </li>
	@endforeach
	</ul>
	@endif
	</div>
    <!-- отправляю из дочернюю PAGE -->
		@yield('contentTovar')
		@yield('contentLoginAuth')
		@yield('contentUserRegister')   
		@yield('contentLoginSuccseful')
		@yield('contentLC')
		@yield('contentEditTovar')
		
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	
	<script type="text/javascript">
$(document).ready(function(){ 
  $("#myTab2 a").click(function(e){
    e.preventDefault();
    $(this).tab('show');
  });
});
</script>
	
	
	
  </body>
</html>