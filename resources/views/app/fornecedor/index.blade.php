<h3>Fornecedores</h3>
<br />
@php

 
@endphp

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: @{{ $fornecedor['nome'] }}
        <br />
        Status: @{{ $fornecedor['status'] }}
        <br />
        CNPJ: @{{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br />
        Telefone: (@{{ $fornecedor['ddd'] ?? '' }}) @{{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados!!
    @endforelse
@endisset
