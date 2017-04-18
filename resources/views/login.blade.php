 @extends('layouts.site')
 
<div class="container">
<form method="POST" action="{{route('postLogin')}}">
<div class="form-group">
<label for="title">Логин</label>
<input type="text" class="form-control" id="login" name="login" size="8" />
</div>
<div class="form-group">
<label for="title">Пароль</label>
<input type="text" class="form-control" id="password" name="password" size="8" />
</div>
        <button type="submit" class="btn btn-default">Войти</button>
		
</div>
	       {{csrf_field()}}


    
	