<ul>
@foreach ($disciplinas as $disciplina)
    <li><a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a>
    	<ul>
    		<li>{{ $disciplina->ementa }}</li>
    	</ul>
    </li>
@endforeach
</ul>
<a href="/disciplinas/create">Nova disciplina</a>