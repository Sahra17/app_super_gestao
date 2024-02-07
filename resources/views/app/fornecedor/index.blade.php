<h3>Fornecedores</h3>
<br />
@php

 
@endphp

{{-- @dd($fornecedores) --}}
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status'] }}
<br />
@if($fornecedores[0]['status'] == 'S') 
    'Fornecedor ativo'
@endif
<br />
@unless($fornecedores[0]['status'] == 'N') <!-- Se o retorno da condição for falso -->
    'Fornecedor ativo'
@endunless