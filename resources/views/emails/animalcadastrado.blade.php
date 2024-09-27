<h1>Animal cadastrado</h1>
<p>Olha que supimpa! Um novo animal foi cadastrado</p>
<p>
    <b>Nome: </b> {{ $animal->nome }}
    <br>
    <b>Idade: </b> {{ $animal->idade }}
</p>
<p>Olha a latinha do queridao:
    <br>
    <img src="{{ $message->embed('img/'.$animal->imagem) }}">
</p>

<p>Para saber mais, visite o <a href="{{ route('animais.ver', $animal->id)}}">perfil do animal</a></p>