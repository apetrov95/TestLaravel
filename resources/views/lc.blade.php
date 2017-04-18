@extends('layouts.site')
 
 @section('contentLC')


 

 

 
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><li><a data-toggle="tab" href="#panely1">Заказы</a></li></li>
           <li><a data-toggle="tab" href="#panely2">Мои данные</a></li>
			<li><a data-toggle="tab" href="#panely3">Добавление товара</a></li>
			<li><a data-toggle="tab" href="#panely4">Панель упраления</a></li>
            
          </ul>
          <ul class="nav nav-sidebar">
            <!-- что то будет-->
          </ul>
          <ul class="nav nav-sidebar">
           <!-- что то будет-->
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
	   <!--   -->
	 
	  
			
		
 
<div class="tab-content">
  <div id="panely1" class="tab-pane fade in active">
    <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="{{asset('js/holder/holder.js/200x200/auto/sky')}}" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="{{asset('js/holder/holder.js/200x200/auto/vine')}}" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="{{asset('js/holder/holder.js/200x200/auto/sky')}}" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="{{asset('js/holder/holder.js/200x200/auto/sky')}}" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            </div>
            </div>
			
  <div id="panely2" class="tab-pane fade">
     <h2 class="sub-header">Мои данные</h2>
          <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	
	<h3>Ваш ID: {{Auth::User()->id}}</h3>
	<h3>Имя: {{Auth::User()->Name}}</h3>
	<h3>Фамилия: {{Auth::User()->family}}</h3>
	 <h3>E-Mail: {{Auth::User()->email}}</h3>
	<h3>Статус: {{Auth::User()->priv}}</h3>
	
	
</div>
	 </div> 
        </div>
  
  <div id="panely3" class="tab-pane fade">
   <div class="form">
<form method="POST" action="{{route('tovarStore')}}">
<div class="form-group">
<label for="title">ID</label>
<input type="text" class="form-control" id="id" name="id" size="8" />
</div>
<div class="form-group">
<label for="title">Название товара</label>
<input type="text" class="form-control" id="name" name="name" size="8" />
</div>
<div class="form-group">
<label for="title">Описание товара</label>
<input type="text" class="form-control" id="opisanie" name="opisanie" size="8" />
</div>
<div class="form-group">
<label for="title">Цена</label>
<input type="int" class="form-control" id="cena" name="cena" size="8" />
</div>
<div class="form-group">
<label for="title">Количество товара</label>
<input type="int" class="form-control" id="kolvo" name="kolvo" size="8" />
</div>
	<button type="submit" class="btn btn-default">Добавить</button>
	</div>	
	
	{{csrf_field()}}
  </div>
  <div id="panely4" class="tab-pane fade">
    <h3>Панель 4</h3>
    <p>Содержимое 4 панели...</p>
  </div>
</div>	
  </div>        

         
	   
	    <!--   -->
	   
	   
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/docs.min.js')}}"></script>

	
	@endsection
	