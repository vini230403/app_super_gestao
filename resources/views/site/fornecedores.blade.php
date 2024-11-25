<h3>Fornecedor</h3>

@php
    /*
    if() {

    } else if() {

    } else {

    }
    */
@endphp

{{-- Blade não usa ";" para encerrar comandos --}}
{{-- if executa se o retorno for true(verdade) --}}
{{-- unless executa se o retorno for false(falso) --}}
{{-- if(isset) retorna true(verdadeiro) se a variável estiver definida --}}
{{-- if(empty) retorna true(verdadeiro) se a variável estiver vazia(0, 0.0, '', '0', null, false, array(), $var) --}}


@isset($fornecedores)
    
    @forelse($fornecedores as $indice => $fornecedor)
        Interação atual: {{$loop->iteration}}
        <br>
        Fornecedor: {{$fornecedor['nome'] }}
        <br>
        Status: {{$fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira Interação do Loop 
        @endif    
        <hr>
    @empty
        Não existem fornecedores cadastrados    
    @endforelse
@endisset

<br>

    




