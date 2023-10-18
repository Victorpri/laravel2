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
          <a class="navbar-brand" href="#">Bolivia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/colombia">Colombia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/brazil">Brazil</a>
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
                <h2>¿QUE E Bolivia?</h2>
                <p>Bolivia, oficialmente el Estado Plurinacional de Bolivia10​ (en quechua, Puliwya Achka Aylluska Mamallaqta; en aimara, Wuliwya Walja Suyunakana Marka; en guaraní, Tetã Hetãvoregua Mborívia), es un país soberano ubicado en la región centro occidental de América del Sur, miembro de la Comunidad Andina,11​ constituido políticamente como un Estado social plurinacional, unitario, descentralizado y con autonomías.12​ El país está organizado en nueve departamentos y ciento doce provincias.11​ La capital oficial es Sucre,13​ que alberga al órgano judicial, mientras que la sede de Gobierno es la ciudad de La Paz, que ejerce como capital de facto y que alberga a los órganos ejecutivo, legislativo y electoral. La ciudad más poblada es Santa Cruz de la Sierra. </p>
                <p>Limita al norte y al oriente con Brasil, al sur con Paraguay y Argentina, y al occidente con Chile y Perú. Es considerado un Estado sin litoral y constitucionalmente mantiene una reclamación territorial a Chile por una salida soberana al océano Pacífico. Sin embargo, tiene un enclave en Perú denomidado Bolivia Mar, una playa de cinco kilómetros de costa. Su superficie es la sexta más extensa de Latinoamérica y comprende distintos espacios geográficos como la cordillera de los Andes, el Altiplano, la Amazonía, los Llanos de Moxos y el Chaco, siendo uno de los países con mayor biodiversidad en el mundo.​​</p>
                <h2>ESCUDO Y BANDERA</h2>
                <p>La franja de color rojo representa la sangre derramada por los héroes para el nacimiento de la República, el amarillo representa la riqueza y los recursos naturales, mientras que el verde la riqueza de la naturaleza y la esperanza. </p>
            </section>
        </div>

    </div>
</body>
</html>