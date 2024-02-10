<h3>Fornecedores</h3>
<br />
@php

 
@endphp

@isset($fornecedores)
    @foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br />
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
@endisset
