{{$livros->render()}}
<ul>
@foreach($livros as $livro)
<li>{{$livro->titulo}}</li>
@endforeach
</ul>