 @extends('layouts.site')
 
 @section('contentTovar')
 <div class="jumbotron">
      <div class="container">
        <h1>{{$header}}</h1>
        <p>{{$message}}</p>
        
      </div>
    </div>

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
	@endsection