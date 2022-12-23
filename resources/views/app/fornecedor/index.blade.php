<h3>Fornecedor</h3>

@php
    /* if(empty($variavel)){}   //retornar true se a variavel esttive vazia
- ''
- 0
- 0.0
- '0'
- null
- false
- array[]
- $var

     */

@endphp

@isset($fornecedores)


    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedores: {{$fornecedor['nome'] }}
        <br>
        Status: {{$fornecedor['status'] }}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ( {{$fornecedor['ddd'] ?? '' }})  {{$fornecedor['telefone'] ?? '' }}
        <br>
        @if($loop->first)
            Primeira iteração do loop
        @endif

         @if($loop->last)
            Última iteração do loop

            <br>
            Total de registros {{ $loop -> count}}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadstrados!!!
    @endforelse
      
@endisset

