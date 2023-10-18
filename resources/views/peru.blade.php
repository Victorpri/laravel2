<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
*{
    margin:0;
    padding:0;
}
header{
    background-color: rgb(238, 246, 252);
    width: 100%;
    padding: 40px;
    display: flex;
}       
body{
    width: 100%;
    background-color: rgb(238, 246, 252);
}
    .contenido{
    display: table;
    width: 1200px;
    margin-top: 15px;
    margin-left: 600px;
    
}

/*renderizar contenido de estado a columna*/

.entidad{
    padding: 50PX 20PX 50PX 20px;
    width: 620px;

}

/*se fija el conteo de las columnas*/

.articulo{
column-count: 2;
column-gap: 50px;
border-bottom: solid 3px rgb(97, 97, 97);
}

.articulo p{
    text-align: justify;
}
.slider-frame {
	width: 850px;
    height: 450px;
	margin:50px auto 0;
    margin-bottom: 40px;
	overflow: hidden;
}

.slider-frame ul {
	display: flex;
	padding: 0;
	width: 400%;
	
	animation: slide 20s infinite alternate ease-in-out;
}

.slider-frame li {
	width: 100%;
	list-style: none;
}

.slider-frame img {
	width: 100%;
}

@keyframes slide {
	0% {margin-left: 0;}
	20% {margin-left: 0;}
	
	25% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	50% {margin-left: -200%;}
	70% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}

</style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Brazil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/bolivia">Bolivia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/brazil">Brazil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/mexico">Mexico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/colombia">Colombia</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="contenido">
        <div class="entidad">
            <section class="articulo">
                <h2>¿QUE E Peru?</h2>
                <p>El Perú, oficialmente República del Perú,2​ y también citada en ocasiones como República Peruana, es un país soberano ubicado en el oeste de América del Sur. Perú tiene una población de más de 35,7 millones de habitantes.13​ Su capital y ciudad más poblada es Lima.2​ Con 1 285 215 km²,2​ Perú es el decimonoveno país más grande del mundo y el tercero más grande de América del Sur. Adopta la forma de gobierno republicano,14​ democrático,15​ unitario,14​ representativo,15​ presidencialista y con separación de poderes.2​                </p>
                <p>Su territorio se extiende por el océano Pacífico, bordeando su costa al oeste, limitando con Ecuador al noroeste, con Colombia al noreste, con Brasil al este, con Bolivia al sureste y con Chile al sur.2​ Su territorio se compone de diversos paisajes: los valles, las mesetas y las altas cumbres de los Andes se despliegan al oeste en dirección a la costa desértica, desde el norte hasta el sureste del país y el este hacia la inmensa Amazonia. Es uno de los países con mayor diversidad biológica16​ y mayores recursos minerales del planeta.17​​​</p>
                <h2>ESCUDO Y BANDERA</h2>
                <p>bandera rectangular formada por tres bandas verticales de igual ancho, de color rojo las laterales y de blanco la central. Es un símbolo patrio del Perú. </p>
            </section>
        </div>
        <div class="slider-frame">
            <ul>
                <li><img src="./imagenes/alta-ruleta.jpg" alt=""></li>
                <li><img src="./imagenes/blackjack-game.jpg" alt=""></li>
                <li><img src="./imagenes/blackjack.jpg" alt=""></li>
                <li><img src="./imagenes/CASINO-CLARA.jpg" alt=""></li>
            </ul>
        </div>
    </div>
</body>
</html>