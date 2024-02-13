<h3>Fornecedores</h3>
<br />
@php

 
@endphp

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br />
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br />
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br />
        @if($loop->first)
            Primeira iteração do Loop
        @endif
        
        @if($loop->last)
            Última iteração do Loop
        @endif
        <hr>
        <br />
        Total de registros: {{ $loop->count }}
    @empty
        Não existem fornecedores cadastrados!!
    @endforelse
@endisset
