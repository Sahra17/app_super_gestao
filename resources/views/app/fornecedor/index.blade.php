<h3>Fornecedores</h3>
<br />
@php

 
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br />
    Status: {{ $fornecedores[0]['status'] }}
    <br />
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido' }}
    <!--
        $variável testada não estiver definida (isset)
        ou
        $variável testada possuir o valor null
    -->
@endisset
