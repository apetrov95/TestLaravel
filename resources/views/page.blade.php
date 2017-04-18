 @extends('layouts.site')
 
 @section('contentTovar')
 <div class="jumbotron">
      <div class="container">
        <h1>{{$header}}</h1>
        <p>{{$message}}</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
<div class="container">
      <!-- Example row of columns -->
      <div class="row">
	@foreach($ptovari as $ptovari)
	 @if (Auth::guest())
			  
		   @else
	<div class="col-md-4">
          <h2>{{$ptovari->name}}</h2>
          <p>{{$ptovari->opisanie}}</p>
		 
		  @if(Auth::user()->priv == 'operator')
		  <p>Заметка для операторов: {{$ptovari->zametka}}</p>
	   @endif
	  @if(Auth::user()->priv == 'moderator')
		  <p>Заметка для операторов: {{$ptovari->zametka}}</p>
	  <p><a class="btn btn-default" href="{{route('editTovar', ['id'=>$ptovari->id])}}" role="button">Изменить товар &raquo;</a></p> 
	  @endif
		  <p><h3>Цена: {{$ptovari->cena}}</h3></p>
          <p><a class="btn btn-default" href="{{route('ptovariShow', ['id'=>$ptovari->id])}}" role="button">Перейти к товару &raquo;</a></p>
		     
                  @endif

		</div>
	 
	@endforeach
</div>
	 </div> 
	@endsection