<h3>Fornecedores</h3>
<br />
@php

 
@endphp

@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br />
        Status: {{ $fornecedores[$i]['status'] }}
        <br />
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
        <br />
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset
