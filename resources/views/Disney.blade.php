<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
        /*AGREGA ESTILOS_TODOS LOS ELEMENTOS*/

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
width: 100%;
background: #0c111b;
position: relative;
font-family: roboto, sans-serif;
}


/*PERMITE MOVER EN BLOQUE FIXED*/

.navbar {
width: 100%;
height: 80px;
position: fixed;
top: 0;
left: 0;
padding: 0 4%;
background: #0c111b;
z-index: 9;
display: flex;
align-items: center;
}

/*LOGO*/

.logo {
height: 70px;
}


/*ENLACES NAVBAR*/
.nav-links{
margin-top: 1px;
display: flex;
list-style: none;
}

/*capitalize MAYUSCULA LA PRMERA PALABRA*/
.nav-links a{
text-decoration: none;
margin-left: 20px;
text-transform: capitalize;
color: #fff;
opacity: 0.9;
}

/*DIV BOTONES*/

.container-boton{
display: block;
margin-left: auto;
}

.search-box{
border: none;
border-bottom: 1px solid #aaa;
background: transparent;
outline: none;
height: 30px;
color: #fff;
width: 250px;
text-transform: capitalize;
font-size: 16px;
font-weight: 500;
transition: .5s;
}

/*MOVIMIENTO DE SEARCH*/

.search-box:focus{
width: 400px;
border-color: #1f80e0;
}

/*BOTON SUSCRIBIR*/
.suscribir{
background: #1f80e0;
height: 30px;
padding: 0 20px;
color: #fff;
border-radius: 5px;
border: none;
outline: none;
text-transform: uppercase;
font-weight: 700;
font-size: 12px;
margin: 0 10px;
}

/*BOTON LOGIN*/
.login-enlace{
color: #fff;
opacity: 0.9;
text-transform: uppercase;
font-size: 15px;
font-weight: 700;
text-decoration: none;
}

.carrusel-contenedor{
position: relative;
width: 100%;
height: 450px;
padding: 20px 0;
overflow-x: hidden;
margin-top: 80px;
}

.carrusel{
display: flex;
width: 92%;
height: 100%;
position: relative;
margin: auto;

}

.deslizar{
flex: 0 0 auto;
margin-right: 30px;
position: relative;
background: rgba(0, 0, 0, 0.5);
border-radius: 5px;
width: 100%;
height: 100%;
left: 0;
transition: 1s;
overflow: hidden;
}

.deslizar img {
width: 100%;
min-height: 100%;
object-fit: cover;
display: block;
margin-left: auto;
}

.suscribir2{
background: #1f80e0;
height: 50px;
padding: 0 140px;
color: #fff;
border-radius: 5px;
border: none;
outline: none;
font-weight: 700;
font-size: 18px;
margin: 0 14px;
position:relative;
right:97%;
top: 59%;
}

.video-card-contenedor{
position: relative;
width: 92%;
margin: auto;
height: 10vw;
display: flex;
margin-bottom: 20px;
justify-content: space-between;
}

.video-card{
position: relative;
min-width: calc(100%/5 - 10px);
width: calc(100%/5 -10px);
height: 100%;
border-radius: 5px;
overflow: hidden;
background: #030b17;
}

.video-card-image,
.card-video{
width: 100%;
height: 100%;
object-fit: cover;
}

.card-video{
position: absolute;
}

.video-card:hover .video-card-image{
display: none;

}

.title{
color: #fff;
opacity: 0.9;
padding-left: 4%;
text-transform: capitalize;
font-size: 22px;
font-size: 500;
}

.peliculas-lista{
width: 100%;
height: 220px;
position: relative;
margin: 10px 0 20px;

}

.card-contenedor{
position: relative;
left: 2px;
width: 92%;
padding-left: 10px;
height: 220px;
display: flex;
margin: 0 auto;
align-items: center;
overflow-x: auto;
overflow-y: visible;
scroll-behavior: smooth;

}

.card-contenedor::-webkit-scrollbar{
display: none;
}

.card{
position: relative;
min-width: 150px;
width: 150px;
height: 200px;
border-radius: 10px;
overflow: hidden;
margin-right: 10px;
transition: .5s;
}

.card-img{
width: 100%;
height: 100%;
object-fit: cover;

}





@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body{
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
        }
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .container{
            max-width: 1170px;
            margin:auto;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }
        ul{
            list-style: none;
        }
        .footer{
            background-color: #24262b;
            padding: 20px 0;
        }
        .footer-col{
           width: 25%;
           padding: 0 15px;
        }
        .footer-col h4{
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        .footer-col h4::before{
            content: '';
            position: absolute;
            left:0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;
        }
        .footer-col ul li a{
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul li a:hover{
            color: #ffffff;
            padding-left: 8px;
        }
        .footer-col .social-links a{
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255,255,255,0.2);
            margin:0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }
        .footer-col .social-links a:hover{
            color: #24262b;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px){
          .footer-col{
            width: 50%;
            margin-bottom: 30px;
        }
        }
        @media(max-width: 574px){
          .footer-col{
            width: 100%;
        }
        }
        </style>
    </head>
    <body>
    <nav class="navbar">
        <img src="{{asset('/img/logo.png')}}" class="logo" alt="">
        <!-- ENLACES EN EL NAVBAR -->
        <ul class="nav-links">
            <li class="nav-items"><a href="#">TV</a></li>
            <li class="nav-items"><a href="#">PELICULAS</a></li>
            <li class="nav-items"><a href="#">DEPORTE</a></li>
            <li class="nav-items"><a href="#">PREMIUM</a></li>
        </ul>
        <div class="container-boton">
            <input type="text" class="search-box" placeholder="buscar">
            <button class="suscribir"><a href="{{ route('login') }}">LOGIN</a></button>
            <a href="{{ route('register') }}" class="login-enlace">REGISTRER</a>
        </div>
    </nav>

    <!-- CARRUSEL -->
    <div class="carrusel-contenedor">
        <div class="carrusel">
            <div class="deslizar">
                <img src="{{asset('/img/portada5.jpg')}}" alt="">
            </div>
        </div>



    </div>

    <!-- SECTION -->
    <div class="video-card-contenedor">
        <div class="video-card">
          <img src="{{asset('/img/disney.PNG')}}" class="video-card-image" alt="">
          <video src="{{asset('/videos/disney.mp4')}}" mute loop class="card-video"></video>
        </div>
        <div class="video-card">
          <img src="{{asset('/img/pixar.PNG')}}" class="video-card-image" alt="">
          <video src="{{asset('/videos/pixar.mp4')}}" mute loop class="card-video"></video>
        </div>
        <div class="video-card">
          <img src="{{asset('/img/marvel.PNG')}}" class="video-card-image" alt="">
          <video src="{{asset('/videos/marvel.mp4')}}" mute loop class="card-video"></video>
        </div>
        <div class="video-card">
          <img src="{{asset('/img/star-wars.PNG')}}"class="video-card-image" alt="">
          <video src="{{asset('/videos/star-war.PNG.mp4')}}" mute loop class="card-video"></video>
        </div>
        <div class="video-card">
          <img src="{{asset('/img/geographic.PNG')}}" class="video-card-image" alt="">
          <video src="{{asset('/videos/geographic.mp4')}}" mute loop class="card-video"></video>
        </div>
    </div>

    <!-- PELICULAS -->
    <h1 class="title"> RECOMENDACIONES</h1>
    <div class="peliculas-lista">
        <div class="card-contenedor">
            <div class="card">
                <img src="{{asset('/img/poster 10.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 11.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 12.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 3.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 4.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 5.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 8.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 1.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 6.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 7.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 8.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 9.png')}}" class="card-img" alt="">
            </div>
        </div>
    </div>

    <h1 class="title"> PROGRAMAS POPULARES</h1>
    <div class="peliculas-lista">
        <div class="card-contenedor">
            <div class="card">
                <img src="{{asset('/img/poster 1.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 2.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 3.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 4.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 5.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 6.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 7.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 8.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 9.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 10.png')}}" class="card-img" alt="">
            </div>
            <div class="card">
                <img src="{{asset('/img/poster 11.png')}}" class="card-img" alt="">
            </div>
        </div>
    </div>

    <!--PIE DE PAGINA -->

        <footer class="footer">
           <div class="container">
               <div class="row">
                   <div class="footer-col">
                       <h4>INTEGRANTES</h4>
                       <ul>
                           <li><a href="#">ALUMNO 1</a></li>
                           <li><a href="#">ALUMNO 2</a></li>
                           <li><a href="#">ALUMNO 3</a></li>
                           <li><a href="#">ALUMNO 4</a></li>
                       </ul>
                   </div>
                   <div class="footer-col">
                       <h4>SIGUENOS EN</h4>
                       <div class="social-links">
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                           <a href="#"><i class="fab fa-twitter"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="#"><i class="fab fa-linkedin-in"></i></a>
                       </div>
                   </div>
               </div>
           </div>
      </footer>

</body>
</html>
