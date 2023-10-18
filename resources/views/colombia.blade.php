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
          <a class="navbar-brand" href="#">Colombia</a>
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
                <h2>¿QUE E COLOMBIA?</h2>
                <p>Colombia es un país del extremo norte de Sudamérica. Su paisaje cuenta con bosques tropicales, las montañas de los Andes y varias plantaciones de café. En Bogotá, su capital a gran altura, el distrito Zona Rosa es famoso por sus restaurantes y tiendas. Cartagena, en la costa del Caribe, tiene una Ciudad Antigua colonial amurallada, un castillo del siglo XVI y arrecifes de coral cercanos. </p>
                <p>Incluyendo la isla de Malpelo, el cayo Roncador y el banco Serrana, el país abarca una superficie de 1 141 748 km²,3​ por lo que es el vigesimosexto país más grande del mundo y el séptimo más grande de América. Reclama como mar territorial el área hasta las 12 millas náuticas de distancia,4​ manteniendo un diferendo limítrofe al respecto con Venezuela y Nicaragua.14​15​​</p>
                <h2>ESCUDO Y BANDERA</h2>
                <p>El amarillo representa la abundancia y la riqueza de nuestro suelo, pero también la soberanía, la armonía y la justicia; el azul simboliza el mar, los dos océanos sobre los que Colombia tiene costas y que nos une a otros pueblos para el intercambio de productos; y el rojo representa la sangre, pero no la sangre que derrama el odio sino la que alimenta el corazón y le da movimiento y vida, la que significa amor, poder, fuerza y progreso. </p>
            </section>
        </div>

    </div>
</body>
</html>