<h3>Fornecedores</h3>

{{-- Comentários que será descartado pelo interpretador blade --}}

{{ 'teste' }}

@php

// Comentário descartado pelo php inativo

/*
    Outro comentário descartado
*/


@endphp

@dd($fornecedores);

@if(count($fornecedores) > 0  && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif