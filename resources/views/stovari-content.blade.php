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
	@if($stovari)
	 
	<div class="col-md-4">
<h2>ID Товара: {{$stovari->id}}</h2>
	<h2>{{$stovari->name}}</h2>
          <p>{{$stovari->opisanie}}</p>
		  <p><h3>Цена: {{$stovari->cena}}</h3></p>
		  @if(Auth::user()->priv == 'operator')
		  <p>Заметка для операторов: {{$stovari->zametka}}</p>
	   @endif
           </div>
	
	@endif
	
</div>
	 </div> 
	@endsection