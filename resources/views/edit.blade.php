 @extends('layouts.site')

@section('contentEditTovar')
     <div class="container">
     <form class="form-horizontal" method="POST" action='/update/{{$tovariv->id}}'>
          <label class="control-label">Название товара</label>
          <input type="text" class="form-control"  name="name" value="{{$tovariv->name}}">
          <label class="control-label">Описание товара</label>
          <textarea name="opisanie" class="form-control" >{{$tovariv->opisanie}}</textarea>
		  @if(Auth::user()->priv == 'moderator')
		  <label class="control-label">Заметка</label>
          <textarea name="zametka" class="form-control" >{{$tovariv->zametka}}</textarea>
		  @endif
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input class="btn btn-primary" type="submit" value="Изменить">
     </form>
</div>
@endsection