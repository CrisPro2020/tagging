@extends('layouts.template-frontend')

@section('title', 'Cónoce más de nosotros | Tagging - Agencia de Publicidad digital')

@section('content')
    
    <!--------------------------
        * BANNER *
    --------------------------->
    <section class="banner-quienes-somos">
        <div class="bg-banner"></div>
        <div class="container">
            <div class="box">
                <p class="title">Queremos ayudarte a impulsar tu negocio en el mundo digital de las redes sociales y la web</p>
                <p class="description">Tus clientes están buscándote por internet, ya sea en las redes sociales o en la web, no dejes pasar esa gran oportunidad, <strong> porque si no lo aprovechas, tu competencia si lo hará.</strong></p>
                <p class="pre-title">SABEMOS QUE APROVECHARÁS ESA OPORTUNIDAD ¿VERDAD?</p>
                <div class="line-vertical"></div>
            </div>
        </div>
    </section>

    <!--------------------------
        * 1. CALL *
    --------------------------->
    <section class="call">
        <div class="container">
            <span class="icon-rombo rombo-1 rombo-white"></span>
            <span class="icon-rombo rombo-2 rombo-yellow"></span>

            <div class="icon">
                <object type="image/svg+xml" data="{{ asset('img/icons-svg/call.svg') }}">
                </object>
            </div>

            <p class="subtitle-2">Ha llegado el momento de que tu negocio capte a esos clientes que tanto te buscan</p>

            <span class="icon-rombo rombo-3 rombo-yellow"></span>
            <span class="icon-rombo rombo-4 rombo-white"></span>
            <div class="line-vertical"></div>
        </div>
    </section>

    <!--------------------------
        * 2. ENCANTADOS, SOMOS TAGGING *
    --------------------------->
    <section class="somos-tagging">
        <div class="container-full">
            <div class="container">
                <div class="img">
                    <img src="{{ asset('img/somos-tagging-dos.png') }}" alt="Equipo de Tagging">
                </div>
                <div class="info">
                    <div class="content">
                        <p class="pre-title">HOLA, ENCANTADOS</p>
                        <p class="subtitle">Somos<br>Tagging</p>
                        <hr class="separador">
                        <p class="description">Somos una agencia de publicidad digital nacida en época de pandemia, como ayuda para las pequeñas y medianas empresas que sufrieron los duros cambios del 2020.</p>
                        <p class="description">Hemos ayudado también a las nuevas marcas que quieren surgir en este mundo tan maravilloso y misterioso que es el internet.</p>
                        <p class="description">La clave de nuestro trabajo esta basado en la técnica <strong>PA (Planea/Acciona)</strong> teniendo una evaluación cuidadosa del cliente y el mercado para poder así accionar la estrategia que desencadene en ventas en tu negocio.</p>
                        <p class="description">Todos quieren tener su negocio de manera digital y no es por que todos lo hacen, si no porque les genera ventas y saben lo genial, productivo y ¡divertido! que es este mundo.</p>
                        <a href="#" class="button">¿DAMOS EL SIGUIENTE PASO JUNTOS?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--------------------------
        * 3. ASI ES COMO *
    --------------------------->
    <section class="asi-es-como">
        <div class="container">
            <div class="info-1">
                <span class="icon-rombo rombo-1 rombo-white"></span>
                <span class="icon-rombo rombo-2 rombo-yellow"></span>
                <div class="content">
                    <p class="pre-title">ASÍ ES COMO</p>
                    <p class="subtitle">Hacemos de tu marca la diferencia</p>
                </div>
                <span class="icon-rombo rombo-3 rombo-white"></span>
                <span class="icon-rombo rombo-4 rombo-yellow"></span>
            </div>
            <div class="info-2">
                <div class="content">
                    <div class="valor">
                        <div class="icon">
                            <span>
                                <object type="image/svg+xml" data="img/icons-svg/organizacion-valor.svg"></object>
                            </span>
                            <hr>
                        </div>
                        <div class="info-valor">
                            <p class="title-valor">Organización</p>
                            <p class="description">Mantenemos una organización interna altamente efectiva a través de softwares que permiten el cumplimento y asignación de tareas.</p>
                        </div>
                    </div>
    
                    <div class="valor">
                        <div class="icon">
                            <span>
                                <object type="image/svg+xml" data="img/icons-svg/comunicacion-valor.svg"></object>
                            </span>
                            <hr>
                        </div>
                        <div class="info-valor">
                            <p class="title-valor">Comunicación</p>
                            <p class="description">Nos comunicamos contigo en todo momento, sobre las decisiones que se tomen y tomamos en cuenta las sugerencias e ideas que tengas para tu marca.</p>
                        </div>
                    </div>
    
                    <div class="valor">
                        <div class="icon">
                            <span>
                                <object type="image/svg+xml" data="img/icons-svg/creatividad-valor.svg"></object>
                            </span>
                        </div>
                        <div class="info-valor">
                            <p class="title-valor">Creatividad</p>
                            <p class="description">Gracias a nuestro equipo tenemos las soluciones más creativas que funcionen para tu marca, teniendo en cuenta las últimas tendencias del año.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection