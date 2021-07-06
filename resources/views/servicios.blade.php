@extends('layouts.template-frontend')

@section('title', 'Servicios | Tagging - Agencia de Publicidad digital')

@section('content')
    
    <!--------------------------
        * BANNER *
    --------------------------->
    <section class="banner-servicios">
        <div class="bg-banner"></div>
        <div class="container">
            <div class="box">
                <p class="title">Disfrutamos mucho haciendo que tu marca destaque entre la competencia...</p>
                <p class="description">Mientras te encargas de tu negocio, nosotros nos encargaremos de trabajar para que tu marca impacte en el mundo digital, ¡por qué tu empresa te necesita y no puedes descuidarte ni un segundo!</p>
                <p class="pre-title">HAZ QUE TU NEGOCIO MUESTRE LO QUE ELLOS ESPERAN DE TI</p>
                <div class="line-vertical"></div>
            </div>
        </div>
    </section>

    <!--------------------------
        * 1. SEGURO SUCEDE ESTO *
    --------------------------->
    <section class="seguro-sucede">
        <div class="container">
            <p class="subtitle">¿Seguro sucede esto, verdad?</p>

            <div class="boxs">
                <div>
                    <div class="box-1">
                        <div class="box-content">
                            <span class="rombo-box"></span>
                            <div class="card">
                                <object type="image/svg+xml" data="{{ asset('img/icons-svg/time-white.svg') }}">
                                </object>
                                <p class="description">Quieres pasar tu negocio al mundo digital, pero no tienes el tiempo necesario para dedicarte a ello</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="box-2">
                        <div class="box-content">
                            <span class="rombo-box"></span>
                            <div class="card">
                                <object type="image/svg+xml" data="{{ asset('img/icons-svg/question-white.svg') }}">
                                </object>                              
                                <p class="description">Quieres emprender tu negocio mediante las redes sociales o la web y necesitas hacerlo correctamente</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="box-3">
                        <div class="box-content">
                            <span class="rombo-box"></span>
                            <div class="card">
                                <object type="image/svg+xml" data="{{ asset('img/icons-svg/idea-white.svg') }}">
                                </object> 
                                <p class="description">Te cuesta entender como funciona el mundo de las redes sociales para poder ofrecer tus productos o servicios</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------
        * 2. PREGUNTA BENEFICIOS *
    --------------------------->
    <section class="pregunta-beneficios">
        <div class="container">
            <object type="image/svg+xml" data="{{ asset('img/icons-svg/analitica.svg') }}">
            </object>
        </div>
        <div class="container-full">
            <div class="container">
                <p class="subtitle-2">Y sobre todo te preguntarás, ¿qué beneficios tiene el surgir en el mundo digital?</p>
            </div>
        </div>
    </section>

    <!--------------------------
        * 3. BENEFICIOS *
    --------------------------->
    <section class="beneficios">
        <div class="line"></div>
        <div class="container">
            <div>
                <p class="pre-title">Tu negocio contará</p>
                <p class="subtitle">Con estos beneficios</p>
            </div>
            <div>
                <div class="card">
                    <div>
                        <object type="image/svg+xml" data="{{ asset('img/icons-svg/check.svg') }}">
                        </object>
                        <p>Tu público objetivo te buscará en internet, sin la necesidad de que tú los busques a ellos</p>
                    </div>
                    <div>
                        <object type="image/svg+xml" data="{{ asset('img/icons-svg/check.svg') }}">
                        </object>
                        <p>Tendrás una presencia permanente y visible para que tu público pueda contactarte</p>
                    </div>
                    <div>
                        <object type="image/svg+xml" data="{{ asset('img/icons-svg/check.svg') }}">
                        </object>
                        <p>Medirás los resultados de una manera certera, lo que todo negocio desea tener agendado</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div>
                <div class="card card-2">
                    <div>
                        <object type="image/svg+xml" data="{{ asset('img/icons-svg/check.svg') }}">
                        </object>
                        <p>Puedes lograr un alcance internacional expandiendote en el mercado</p>
                    </div>
                    <div>
                        <object type="image/svg+xml" data="{{ asset('img/icons-svg/check.svg') }}">
                        </object>
                        <p>Los costos estarán al alcance de tu presupuesto</p>
                    </div>
                    <div>
                        <object type="image/svg+xml" data="{{ asset('img/icons-svg/check.svg') }}">
                        </object>
                        <p>Tus campañas publicitarias llegarán a un público interesado en tu negocio</p>
                    </div>
                </div>
            </div>
            <div>
                <object type="image/svg+xml" data="{{ asset('img/icons-svg/comision.svg') }}">
                </object>
                <p>Genial, ¿Verdad?</p>
            </div>
        </div>
    </section>

    <!--------------------------
        * 4. JUNTOS *
    --------------------------->
    <section class="juntos-servicios">
        <div class="line"></div>
        <div class="container">
            <span class="icon">
                <object type="image/svg+xml" data="{{ asset('img/icons-svg/juntos.svg') }}">
                </object>
            </span>
        </div>
        <div class="container-full">
            <div class="container">
                <p class="subtitle-2">Juntos impulsaremos tu marca ayudándote a surgir con las mejores estrategias que se adecuen a tu negocio</p>
                <span class="icon-rombo rombo-yellow rombo-1"></span>
            </div>
        </div>
    </section>

    <!--------------------------
        * 5. TODOS LOS SERVICIOS *
    --------------------------->
    <section class="all-servicios">
        <div class="container">
            <div class="line"></div>
            <p class="pre-title">Así podemos ayudarte</p>
            <p class="subtitle">Con nuestros servicios</p>
        </div>

        <div class="container box-servicio">
            <div>
                <div class="info">
                    <p class="title-servicio">Asesoría <br>y consulting</p>
                    <hr class="separador">
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit natus recusandae odio minus, ratione quaerat.</p>
                    <a class="button" href="#">Saber más</a>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/servicios/asesoria-bg.jpg') }}" alt="Asesoría y consulting">
            </div>
        </div>

        <div class="container box-servicio">
            <div>
                <div class="info">
                    <p class="title-servicio">Branding</p>
                    <hr class="separador">
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit natus recusandae odio minus, ratione quaerat.</p>
                    <a class="button" href="#">Saber más</a>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/servicios/branding.jpg') }}" alt="Branding">
            </div>
        </div>

        <div class="container box-servicio">
            <div>
                <div class="info">
                    <p class="title-servicio">Gestión de<br>redes sociales</p>
                    <hr class="separador">
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit natus recusandae odio minus, ratione quaerat.</p>
                    <a class="button" href="#">Saber más</a>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/servicios/gestion-redes.jpg') }}" alt="Redes sociales">
            </div>
        </div>

        <div class="container box-servicio">
            <div>
                <div class="info">
                    <p class="title-servicio">Estrategia de<br>marketing digital</p>
                    <hr class="separador">
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit natus recusandae odio minus, ratione quaerat.</p>
                    <a class="button" href="#">Saber más</a>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/servicios/estrategia-marketing.jpg') }}" alt="Estrategias de marketing digital">
            </div>
        </div>

        <div class="container box-servicio">
            <div>
                <div class="info">
                    <p class="title-servicio">Desarrollo Web</p>
                    <hr class="separador">
                    <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit natus recusandae odio minus, ratione quaerat.</p>
                    <a class="button" href="#">Saber más</a>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/servicios/desarrollo-web.jpg') }}" alt="Desarrollo Web">
            </div>
        </div>
    </section>
    
    <!--------------------------
        * 6. CTA - ASESORIA GRATUITA *
    --------------------------->
    <section class="cta-asesoria">
        <div class="bg-yellow"></div>
        <div class="container">
            <div class="call-to-action">
                <div class="content">
                    <p class="pre-title">¿NO TIENES CLARO QUE NECESITAS EXACTAMENTE?</p>
                    <p class="subtitle">Te ofrecemos una asesoría gratuita</p>
                    <p class="description">Juntos revisaremos la situación actual en la que se encuentra tu negocio, y así definiremos la mejor solución para ti.</p>
                    <a href="#" class="button">Sí, sería genial</a>
                </div>
            </div>
            <span class="icon-rombo rombo-1 rombo-yellow"></span>
            <span class="icon-rombo rombo-2 rombo-white"></span>
            <span class="icon-rombo rombo-3 rombo-yellow"></span>
            <span class="icon-rombo rombo-4 rombo-white"></span>
        </div>
    </section>
@endsection