@extends('layouts.template-frontend')

@section('title', 'Tagging | Agencia de Publicidad digital')

@section('content')
    <!--------------------------
        * BANNER *
    --------------------------->
    <section class="banner">
        <div class="container">
            <div class="banner-content">
                <div class="info">
                    <div class="content">
                        <h1 class="banner-subtitle">Somos la <span>agencia digital</span> que</h1>
                        <p class="banner-title">Hacemos de <span>tu marca la diferencia</span></p>
                        <p class="banner-description">Somos especialistas en generar estrategias digitales que generen verdaderos resultados. CERO HUMO más ventas.</p>
                        <a href="#" class="banner-link">Comienza aquí</a>
                    </div>
                </div>
                <div class="img">
                    <img src="{{ asset('img/portadas/idea.png') }}" class="banner-img" alt="Tagging">
                    <img src="{{ asset('img/icons/Facebook.png') }}" class="icon icon-fb" alt="Facebook">
                    <img src="{{ asset('img/icons/Instagram.png') }}" class="icon icon-ig" alt="Instagram">
                    <img src="{{ asset('img/icons/Linkedin.png') }}" class="icon icon-lk" alt="Linkedin">
                    <img src="{{ asset('img/icons/Messenger.png') }}" class="icon icon-ms" alt="Messenger">
                    <img src="{{ asset('img/icons/Twitter.png') }}" class="icon icon-tw" alt="Twitter">

                    <span class="icon-rombo rombo-1 rombo-yellow"></span>
                    <span class="icon-rombo rombo-2 rombo-white"></span>
                    <span class="icon-rombo rombo-3 rombo-yellow"></span>
                    <span class="icon-rombo rombo-4 rombo-white"></span>
                </div>
            </div>
            {{-- <span class="adorno-1"></span> --}}
        </div>
    </section>

    <!--------------------------
        * TE SUCEDE ESTO *
    --------------------------->
    <section class="te-sucede-esto">
        <div class="container">
            {{-- <span class="adorno-2"></span> --}}
            <div class="info">
                <div class="line"></div>
                <p class="pre-title">Déjanos adivinar</p>
                <p class="subtitle">¿Te sucede esto?</p>
            </div>
            <div class="cards">
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="{{ asset('img/icons-svg/time.svg') }}"></object>
                            <p class="description">Quieres pasar tu negocio al mundo digital, pero no tienes el tiempo necesario para dedicarte a ello</p>
                        </div>
                    </div>
                </div>
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="{{ asset('img/icons-svg/question.svg') }}"></object>
                            <p class="description">Te cuesta entender como funciona el mundo de las redes sociales para poder ofrecer tus productos o servicios</p>
                        </div>
                    </div>
                </div>
                <div class="card-flotante">
                    <div class="card">
                        <span class="card-rombo"></span>
                        <div class="card-content">
                            <object class="icon" type="image/svg+xml" data="{{ asset('img/icons-svg/idea.svg') }}"></object>
                            <p class="description">Quieres emprender tu negocio mediante las redes sociales o la web y necesitas hacerlo correctamente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------
        * YA NO SABES POR DONDE EMPEZAR *
    --------------------------->
    <section class="por-donde-empezar">
        <div class="container">
            <div class="info-1">
                <div class="imgs">
                    <span class="icon-rombo rombo-1 rombo-yellow"></span>
                    <span class="icon-rombo rombo-2 rombo-white"></span>
                    <span class="icon-social icon-1">
                        <object type="image/svg+xml" data="{{ asset('img/icons-svg/medios-de-comunicacion.svg')}}"></object>
                    </span>
                </div>
                <div class="content">
                    <span class="line-left"></span>
                    <div class="content-info">
                        <p class="description">Ves vídeos, lees, escuchas podcats donde te dicen que debes tener tu negocio en el mundo digital tanto en las redes sociales como en la web porque esto te ayuda a vender más a clientes verdaderamente potenciales.</p>
                        <p class="description">Todo esto puede ser confuso para ti y luego de...</p>
                    </div>
                </div>
                <div class="imgs">
                    <span class="icon-social icon-2">
                        <object type="image/svg+xml" data="{{ asset('img/icons-svg/network.svg') }}"></object>
                    </span>
                    <span class="icon-rombo rombo-3 rombo-white"></span>
                    <span class="icon-rombo rombo-4 rombo-yellow"></span>
                </div>
            </div>
            <div class="info-2">
                <div class="line"></div>
                <P class="pre-title">Tanta tecnología y dudas hasta</P>
                <p class="subtitle">Ya no sabes ni por donde empezar...</p>
            </div>
            {{-- <span class="adorno-2"></span> --}}
        </div>
    </section>

    <!--------------------------
        * ENTONCES *
    --------------------------->
    <section class="entonces">
        <div class="container">
            <div class="line"></div>
            <p class="pre-title">Entonces</p>
            <object type="image/svg+xml" data="{{ asset('img/icons-svg/escala.svg') }}"></object>
        </div>
        <div class="container-full">
            <div class="container">
                <p class="subtitle-2">¿Cómo vamos a conseguir que tu negocio pueda surgir y vender en el mundo digital de manera eficiente y exitosa?</p>
                <span class="icon-rombo rombo-yellow"></span>
            </div>
        </div>
    </section>

    <!--------------------------
        * JUNTOS *
    --------------------------->
    <section class="juntos">
        <div class="container">
            <div class="line"></div>
            <p class="pre-title">Juntos</p>
            <p class="subtitle">Así lo conseguiremos</p>
        </div>
        <div class="container-full">
            <div class="container">
                <div>
                    <div class="card">
                        <span>
                            <object type="image/svg+xml" data="{{ asset('img/icons-svg/comunication.svg')}}"></object>
                        </span>
                        <p class="valor">Comunicación constante</p>
                        <hr class="separador">
                        <p class="description">Nos mantendremos comunicados en todo momento para ver el avance de tu negocio</p>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <span>
                            <object type="image/svg+xml" data="{{ asset('img/icons-svg/content-valor.svg') }}"></object>
                        </span>
                        <p class="valor">Contenido de valor</p>
                        <hr class="separador">
                        <p class="description">Recibirás contenido de valor como ayuda para el crecimiento de tu negocio</p>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <span>
                            <object type="image/svg+xml" data="{{ asset('img/icons-svg/pre-asesorias.svg') }}"></object>
                        </span>
                        <p class="valor">Pre - asesorías valiosas</p>
                        <hr class="separador">
                        <p class="description">Resolveremos las dudas y consultas que tengas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------
        * ENCANTADOS, SOMOS TAGGING *
    --------------------------->
    <section class="encantados">
        <div class="container">
            {{-- <span class="adorno-2 variante"></span> --}}
            <div class="img">
                <span class="absolute icon-rombo rombo-1 rombo-yellow"></span>
                <span class="absolute icon-rombo rombo-2 rombo-white"></span>
                <img src="{{ asset('img/somos-tagging.png') }}" alt="Equipo de Tagging">
            </div>
            <div class="info">
                <div class="content">
                    <P class="pre-title">Hola, encantados</P>
                    <p class="subtitle">Somos <br>Tagging</p>
                    <hr class="separador mb-7">
                    <p class="description">Una agencia digital nacida en época de pandemia con el objetivo de ayudar a las pequeñas y medianas empresas a surgir y resurgir en el mundo digital.</p>
                    <a href="#" class="button">Conócenos un poco más</a>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------
        * CALL TO ACTION BOX *
    --------------------------->
    <section class="call-to-action-1">
        <div class="container">
            <span class="icon-rombo rombo-1 rombo-yellow"></span>
            <span class="icon-rombo rombo-2 rombo-yellow"></span>
            <div class="line"></div>
            <div class="box">
                <object data="{{ asset('img/icons-svg/money.svg')}}" type="image/svg+xml"></object>
                <p class="subtitle-2">¿Quieres que tu empresa surga en el mundo digital de manera exitosa?</p>
                <p class="pre-title">Te ayudaremos a dar el siguiente paso</p>
                <p class="description">Juntos haremos surgir e impulsar tu empresa en el mundo digital con las mejores estrategias que se adecuen a tu negocio.</p>
                <a href="#" class="button">¿Comenzamos?</a>
            </div>
            <span class="icon-rombo rombo-3 rombo-white"></span>
            <span class="icon-rombo rombo-4 rombo-white"></span>
        </div>
    </section>

    <!--------------------------
        * TESTIMONIOS DE CLIENTES CARRUSEL *
    --------------------------->
    <section class="testimonios">
        <div class="container">
            {{-- <span class="adorno-2"></span> --}}
            <div class="line"></div>
            <p class="pre-title">Mira lo que nuestros clientes</p>
            <p class="subtitle">Dicen de nosotros</p>

            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper cards">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="img">
                                <img src="{{ asset('img/clientes/cliente-1.jpg') }}" alt="Moda y Empresa">
                            </div>
                            <div class="content">
                                <p class="testimonio">“Trabajamos con Tagging desde hace algunos meses y estamos muy contentos con los resultados y el equipo a cargo de nuestra cuenta. Son muy creativos, siempre dispuestos a apoyarnos y en búsqueda de nuevos temas. Recomendados 100%”</p>
                                <hr>
                                <span class="autor">Ana García</span>
                                <span class="job">Gerente general de Moda&Empresa</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="img">
                                <img src="{{ asset('img/clientes/cliente-1.jpg') }}" alt="Moda y Empresa">
                            </div>
                            <div class="content">
                                <p class="testimonio">“Trabajamos con Tagging desde hace algunos meses y estamos muy contentos con los resultados y el equipo a cargo de nuestra cuenta. Son muy creativos, siempre dispuestos a apoyarnos y en búsqueda de nuevos temas. Recomendados 100%”</p>
                                <hr>
                                <span class="autor">Ana García</span>
                                <span class="job">Gerente general de Moda&Empresa</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="img">
                                <img src="{{ asset('img/clientes/cliente-1.jpg') }}" alt="Moda y Empresa">
                            </div>
                            <div class="content">
                                <p class="testimonio">“Trabajamos con Tagging desde hace algunos meses y estamos muy contentos con los resultados y el equipo a cargo de nuestra cuenta. Son muy creativos, siempre dispuestos a apoyarnos y en búsqueda de nuevos temas. Recomendados 100%”</p>
                                <hr>
                                <span class="autor">Ana García</span>
                                <span class="job">Gerente general de Moda&Empresa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            {{-- <span class="adorno-2 variante"></span> --}}
        </div>
    </section>

    <!--------------------------
        * CALL TO ACTION 2 *
    --------------------------->
    <section class="call-to-action-2">
        <div class="container">
            <p class="subtitle-2">Comienza hoy a preparar todo para tu emprendimiento digital</p>
            <hr>
            <p class="description">Descárgate nuestra guía gratuita de <span>“LOS 10 PASOS PARA SURGIR EN EL MUNDO DIGITAL DE MANERA EXITOSA”</span> y descubre el proceso paso a paso para emprender en este mundo tan competitivo y maravilloso.</p>
            <a href="#" class="button">Quiero mi guía gratuita</a>
        </div>
    </section>
@endsection