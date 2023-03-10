    @extends('site.layouts.basico')


@section('titulo', $titulo)
    @section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato comigo, ficarei muito feliz em responder!</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    @component('site.layouts._components.form_contato', [ 'classe'=>'borda-preta' ])
                    <p>A nossa equipe analisará a sua mensagem e retornaremos o mais breve possível!</p>
                    <p>Nosso tempo medio de resposta é de 48 horas</p>
                    @endcomponent
                </div>
            </div>  
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{ asset('img/facebook.png')}}">
                <img src="{{ asset('img/linkedin.png')}}">
                <img src="{{ asset('img/youtube.png')}}">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(12) 99783-1341</span>
                <br>
                <span>vizeugilyasmin@gmail.com</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{ asset('img/mapa.png')}}">
            </div>
        </div>
    @endsection
