<ul>
@foreach ($disciplinas as $disciplina)
    <li>{{ $disciplina->titulo }} 
    	<ul>
    		<li>{{ $disciplina->ementa }}</li>
    	</ul>
    </li>
@endforeach
</ul>