<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiones del Perú</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400&display=swap');
   
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-family: 'Poppins', sans-serif;
    font-size: 10px;
    color: rgb(8, 8, 8);
    scroll-behavior: smooth;
}

body {
    overflow-x: hidden;
    background-color: dimgray;
}

section {
    padding: 3.9rem 0;
    overflow: hidden;
}

img {
    width: 100%;
    max-width: 100%;
}

a {
    text-decoration: none;
}

p {
    font-size: 1.6rem;
}

.container {
    width: 100%;
    max-width: 122.5rem;
    margin:  0 auto;
    padding: 0 2.4rem;
}

header {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    background-image: linear-gradient(to bottom, rgba(0,0,0,.5), transparent);
}
.nav {
    height: 7.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.menu-toggle {
    color: rgb(240, 236, 236);
    font-size: 2.2rem;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 2.5rem;
    cursor: pointer;
    z-index: 1500;
}

.fa-times {
    display: none;
}

.nav-list {
    list-style: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 80%;
    height: 100vh;
    background-color: red;
    padding: 4.4rem;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    z-index: 1250;
    transform: translateX(-100%);
   
}

.nav::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, .8);
    z-index: 1000;
    opacity: 0;
    transform: scale(0);
    transition: opacity .5s;

}

.open .fa-times {
    display: block;
}

.open .fa-bars {
    display: none;
}

.open .nav-list {
    transform: translateX(0);
}
.open .nav::before{
    opacity: 1;
    transform: scale(1);
}

.logo {
    color: #fff;
    font-size: 2rem;
    font-weight: 600;
}

.nav-item {
    border-bottom: 2px solid rgba(255, 255, 255, .3);
}

.nav-link {
    display: block;
    color: #fff;
    text-transform: uppercase;
    font-size: 1.6rem;
    letter-spacing: 2px;
    margin-right: -2px;
}

.nav-link:hover {
    color: #0af167;
}

.hero {
    width: 100%;
    height: 70vh;
    background: url("https://i1.wp.com/adventuretravelperu.com/es/wp-content/uploads/2015/08/laguna_huacachina_ica_peru_turismo-e1595263285366.jpg?fit=1200%2C489&ssl=1") center no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    text-align: center;
}

.h2-sub {
    font-size: 3rem;
    font-family: 'Poppins', sans-serif;
    color: #fff;
    font-weight: 600;
    line-height: 3.0;
}

.fil {
    text-transform: uppercase;
    font-size: 3rem;
}

.head {
    color: #fff;
    font-size: 3.7rem;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: 3.5rem;
}

.circle {
    font-size: 1.5rem;
    color: white;
    margin: 0 1.6rem;
}

.he-des h5 {
    color: #fff;
    font-size: 1.4rem;
    font-weight: 100;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
    letter-spacing: 3px;
    margin-right: -3px;
}

.btn {
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: -2px;
}

.cta-btn {
    font-size: 1.1rem;
    background-color: #0B6FB0;
    padding: 1.5rem 3rem;
    color: #fff;
    border-radius: .4rem;
}
.cta-btn:hover,
.cta-btn:focus {
    color: #fff;
    background-color: white;
}


.global {
    text-align: center;
    margin-top: 3.9rem;
}

.dis-sto .global {
    margin-top: 6.9rem;
}

.global .circle {
    color: white;
    margin: 2.4rem 0;
}

.hea-dark {
    color: #090909;
    letter-spacing: .7rem;
    margin-right: -.7rem;
}

.global .h2-sub {
    letter-spacing: -1px;
    line-height: .42;
}

.res-info {
    text-align: center;
}

.res-des {
    margin-bottom: 3rem;
}

.res-des p {
    line-height: 1.6;
    margin-bottom: 2.4rem
}

.taste {
    background: url("https://wapa.cronosmedia.glr.pe/original/2022/10/01/6338bc6f9e62f51f00757508.jpg") center no-repeat;
    background-size: cover;
}

.bt {
    min-height: 65vh;
    display: flex;
    align-items: center;
}

.myki {
 
    color: #fff;
    font-size: 2.3rem;
    font-family: 'Poppins', sans-serif;
   
    font-weight: 900;
    letter-spacing: 0.0rem;
}
     
.image-group {
    width: 100%;
    max-width: 100%;
   
}

.disco .res-des {
    padding-top: 3rem;
    margin-bottom: 0;
}

.pb {
    background: url("https://www.martinzamoratarapoto.com/wp-content/uploads/2019/04/el-sauce-resort-promocion.jpg") center no-repeat;
    background-size: cover;
}

.goku {
    background: url("https://www.incatrailtomachupicchu.pe/wp-content/uploads/2020/10/Velo-de-las-Ninfas-4.jpg") center no-repeat;
    background-size: cover;
}

.broly {
    background: url("https://i.ytimg.com/vi/dYVTpSGS1oA/maxresdefault.jpg") center no-repeat;
    background-size: cover;
}

footer {
    padding: 7.9rem 0;
    background-color: #121212;
    color: #fff;
    text-align: center;
    position: relative;
}

.footer-content {
    overflow: hidden;
}

.footer-content h4 {
    font-size: 1.9rem;
    text-transform: uppercase;
    font-weight: 100;
    letter-spacing: 3px;
    margin-bottom: 3rem;
}

.footer-content .circle{
    margin: 2.4rem 0;
}

.footer-content-about {
    margin-bottom: 5.4rem;
}

.footer-content-about p {
    line-height: 2;
}

.social-icons {
    list-style: none;
    margin-bottom: 5.4rem;
    display: flex;
    justify-content: center;
}

.social-icons i {
    font-size: 2rem;
    color: white;
    padding: .8rem 2rem;
    
}

.social-icons i:hover,
.social-icons i:focus {
    color: #0B6FB0;
}

.news-form {
    width: 100%;
    position: relative;
    display: flex;
    justify-content: center;

}

.news-input {
    width: 100%;
    max-width: 25rem;
    padding: 1rem;
    border-radius: .4rem;
}
.news-btn {
    background: transparent;
    border: none;
    color: red;
    cursor: pointer;
    font-size: 1.6rem;
    padding: 1px .6rem;
    position: absolute;
    top: 30%;
    margin-left: 20.5rem;
}

@media screen and (min-width: 900px) {

    section {
        padding: 7.9rem;
    }

    .menu-toggle {
        display: none;
    }

    .nav {
        justify-content: space-between;
    }

    .nav-list {
        position: initial;
        width: initial;
        height: initial;
        background-color: transparent;
        padding: 0;
        justify-content: initial;
        flex-direction: row;
        transform: initial;
        transition: initial;
    }

    .nav-item {
        margin: 0 2.4rem;
    }

    .nav-item:last-child {
        margin-right: 0;
    }

    .nav-link {
        font-size: 1.3rem;
    }

    .active {
        position: relative;
    }
    .active::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #fff;
        left: 0;
        bottom: -3px;
    }

    .h2-sub {
        font-size: 3rem;
    }

    .fil {
        font-size: 3rem;
    }
    .head {
        font-size: 4.7rem;
        letter-spacing: .8rem;
    }

    .res-info {
        display: flex;
        align-items: center;
    }

    .res-info > div {
        flex: 1;
    }

    .pad-rig {
        padding-right: 7rem;
    }

    .footer-content {
        max-width: 77.5rem;
        margin: auto;
    }

    .footer-content-about {
        max-width: 51.3rem;
        margin:  0 auto 5.4rem;
    }

    .footer-div{
        display: flex;
        justify-content: space-between;
    }

    .social-media,
    .news-form {
        width: 100%;
        max-width: 27.3rem;
        margin: 0 1rem;
    }

   .news-btn {
       margin-left: 7.5rem;
   }
    
}

</style>

<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="#" class="logo">perú</a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Registrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero" id="hero">
        <div class="container">
            <h2 class="h2-sub">
                <span class="fil">B</span>ienvenidos
            </h2>
            <h1 class="head">Turismo Perú</h1>
            <div class="he-des">
                <h5>tarea senati</h5>
                <img src="https://campusonline.senati.edu.pe/assets/images/logo-horizontal-blanco-web.fw-455x128.png" width="10" height="90">

                <a href="#" class="btn cta-btn">Explora</a>
            </div>
        </div>
    </section>

    <section class="dis-sto">
        <div class="container">
            <div class="res-info">
                <div>
                    <img src="https://denomades.s3.us-west-2.amazonaws.com/blog/wp-content/uploads/2019/07/18151600/65302909_2326017290948695_2844962968093951204_n.jpg" alt="">
                </div>
            
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">laguan Turqueza</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                    También llamada “laguna de las parihuanas”, por las innumerables aves que allí habitan, 
                    la laguna de Parinacochas es uno de los grandes atractivos turísticos de la región. 
                    Está situada en la provincia del mismo nombre, a unos 700 kilómetros de la ciudad de 
                    Ayacucho.
                    </p>
                    <a href="#" class="btn cta-btn">Ingresar</a>
                </div>

            </div>
        </div>
    </section>

    <section class="taste bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">D</span>escubre
                </h2>
                <h1 class="head hea-dark">La laguna de Huacachina</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h1 class="myki">ubicada en el distrito, provincia y departamento de Ica. Es una de 
                        las pocas lagunas costeras que aún se mantiene en los alrededores del valle de 
                        Ica y constituye una muestra única de toda la costa sur con características 
                        propias de la zona de vida del Desierto Desecado Subtropical.</h1>
                </div>
              
            </div>
        </div>
    </section>


    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">Montaña de 7 Colores (Vinicunca)</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                    La formación del aspecto arcoíris de Vinicunca se debe a los sedimentos marinos, 
                    lacustres y fluviales transportados por el agua que antes cubría la zona. Estos 
                    sedimentos datan de entre los periodos terciario y cuaternario, hace aproximadamente 
                    65 millones de años.
                    </p>
                    <a href="#" class="btn cta-btn">Ingresar</a>
                </div>
                <div class="image-group pad-rig">
                    <img src="https://noticieros.televisa.com/wp-content/uploads/2018/06/fotos-asi-son-increibles-montanas-arcoiris-peru.jpg" alt="">
                </div>

            </div>
        </div>
    </section>

    
    <section class="pb bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">D</span>escubre
                </h2>
                <h1 class="head hea-dark">Laguna del sauce</h1>
                <div class="circle">
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h1 class="myki">A 53 km al sureste de Tarapoto (2 h y 30 min) en el poblado de Sauce.
                         Hermosa laguna de 350 hectáreas de espejo de agua de agradable temperatura y 
                         rodeada de vegetación en la mayor parte de sus orillas. Su color varía entre 
                         verdes y azules; es hábitat de garzas, Martín pescador, sachapatos, águilas y 
                         peces.</h1>
                </div>            
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="res-info">

                <div class="image-group">
                    <img src="https://i.ytimg.com/vi/dYVTpSGS1oA/maxresdefault.jpg" alt="">

                </div>
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">Cascada Santa Cruz</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                    Esta cascada, es en sí un conjunto de cuatro caídas de agua cuya mayor altura se 
                    registra en los 15 metros. La fuerte corriente precipita el agua por muros de piedra,
                     en los que rebota formando nuevas capas de agua al descender hasta una poza de 
                     considerables dimensiones.
                    </p>
                    <a href="#" class="btn cta-btn">Ingresar</a>