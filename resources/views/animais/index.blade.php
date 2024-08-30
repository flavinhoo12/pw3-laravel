{{-- resources/views/animais/index.blade.php --}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}"  class="px-4 py-1 text-white font-light tracking-wider bg-blue-800 rounded"><i class="fas fa-plus mr-3"></i> Cadastrar animal</a>
</p>
<p>Veja nossa lista de animais para adoção</p>

<div class="bg-white">
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Nome</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Idade</th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animais as $animal)
            <tr>
                <td  class="w-1/3 text-center py-3 px-4">{{ $animal['nome'] }}</td>
                <td  class="w-1/3 text-center py-3 px-4">{{ $animal['idade'] }}</td>
                <td><a href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
</div>
@endsection