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
          <a class="navbar-brand" href="#">Mexico</a>
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
                <a class="nav-link active" aria-current="page" href="/colombia">Colombia</a>
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
                <h2>¿QUE E Mexico?</h2>
                <p>Méxiconota 1​ ([ˈmexiko]ⓘ), cuyo nombre oficial es Estados Unidos Mexicanos,13​ es un país soberano ubicado en la parte meridional de América del Norte; su capital y ciudad más poblada es la Ciudad de México.14​ De acuerdo con la constitución vigente, su forma de gobierno consiste en una república representativa, democrática, laica y federal, compuesta por 32 entidades federativas (31 estados y la capital) </p>
                <p>El territorio mexicano tiene una superficie de 1 964 375 km²,18​ por lo que es el decimotercer país más extenso del mundo y el tercero más grande de América Latina. Limita al norte con los Estados Unidos de América a lo largo de una frontera de 3152 km, mientras que al sur tiene una frontera de 956 km con Guatemala y 193 km con Belice. Las costas del país limitan al oeste con el océano Pacífico y al este con el golfo de México y el mar Caribe, sumando 11 122 km de litoral.​​</p>
                <h2>ESCUDO Y BANDERA</h2>
                <p>La Bandera Nacional consiste en un rectángulo dividido en tres franjas verticales de medidas idénticas, con los colores en el siguiente orden a partir del asta: verde, blanco y rojo. </p>
            </section>
        </div>

    </div>
</body>
</html>