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
                <a class="nav-link active" aria-current="page" href="/colombia">Colombia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/mexico">Mexico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/peru">Peru</a>
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
                <h2>¿QUE E Brazil?</h2>
                <p>Brasil, oficialmente República Federativa de Brasil10​11​12​13​ (en portugués: República Federativa do Brasil, pron. AFI [ʁe'publikɐ fedeɾaˈt͡ʃivɐ 'dʊ braˈziw] ( escuchar)), es un país soberano de América del Sur que comprende la mitad oriental del continente y algunos grupos de pequeñas islas en el océano Atlántico. Su capital es Brasilia y su ciudad más poblada es São Paulo. Es el tercer país más grande de América. Con una superficie estimada en más de 8 500 000 km²,3​ es el quinto país más grande del mundo en área total (equivalente a 50 % del territorio sudamericano).14​ Delimitado por el océano Atlántico al este, Brasil tiene una línea costera de 7491 km.3​ Al norte limita con el departamento ultramarino francés de la Guayana Francesa, Surinam, Guyana y Venezuela; al noroeste con Colombia; al oeste con Perú y Bolivia; al suroeste con Paraguay y Argentina, y al sur con Uruguay. De este modo tiene frontera con todos los países de América del Sur, excepto Ecuador y Chile.15​ La mayor parte del país está comprendido entre los trópicos terrestres, por lo que las estaciones climáticas no se sienten de una manera radical en gran parte de su territorio. La selva amazónica cubre 3 600 000 km² del territorio. Gracias a su vegetación y al clima, es uno de los países con más especies de animales en el mundo. </p>
                <p>La región del actual Brasil, hasta entonces habitada por pueblos indígenas, tuvo su primer contacto con los europeos en el año 1500 d. C. a través de una expedición portuguesa liderada por Pedro Álvares Cabral. Tras el Tratado de Tordesillas, el territorio brasileño fue el segmento del continente americano que correspondió al reino de Portugal, del cual obtuvo su independencia el 7 de septiembre de 1822. Así, el país pasó de ser parte central del reino de Portugal a un imperio para finalmente convertirse en una república. Su primera capital fue Salvador de Bahía, que fue sustituida por Río de Janeiro hasta que se construyó una nueva capital, Brasilia. Su constitución actual, formulada en 1988, define a Brasil como una república federativa presidencialista.13​ La federación está formada por la unión del Distrito Federal, los 26 estados y los 5570 municipios​</p>
                <h2>ESCUDO Y BANDERA</h2>
                <p>La bandera de Brasil está formada por un rectángulo verde de proporción 7:10. Sobre este rectángulo, aparece un rombo amarillo, y dentro de este, un círculo azul con una banda blanca que contiene el lema "ORDEM E PROGRESSO" («Orden y Progreso» en portugués) en color verde, así como 27 estrellas de color blanco. </p>
            </section>
        </div>

    </div>
</body>
</html>