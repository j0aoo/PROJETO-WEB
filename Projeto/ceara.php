
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Catálogo de Carros Novos · Ceará Motor</title>
</head>
<body>


<style type="text/css">
  
  .product-item {
    position:relative;
    font-size:1.5rem;
    font-weight:700;
    background-color:transparent;
    border-color:transparent;
    transition:all .2s ease-in-out
  }
  .product-item:hover{
    background-color:#fff;
    box-shadow:0 .5rem 1rem rgba(0,0,0,.15)
  }
  .product-item:hover .product-image:after,.product-item:hover .product-image:before{
    opacity:1;
    -webkit-transform:translate(0);
    transform:translate(0)
  }
  .product-image{
    position:relative;
    padding-top:.5rem;
    padding-bottom:.5rem;
    transition:all 2s
  }.product-image:after,.product-image:before{
    position:absolute;
    right:0;
    left:0;
    height:7px;
    content:"";
    opacity:0;
    transition:all .3s;
    -webkit-transform:translateY(30px);
    transform:translateY(30px)
  }.product-image:before{
    bottom:-6px;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUoAAAAHBAMAAACcthkwAAAAD1BMVEUAAAD/vwD/vwD/vwD/vwBYa2Z+AAAABHRSTlMAwEAw9JyPcwAAAC1JREFUOMtjcMEETgwQwIJFTgEiRWdto64cdeWoK8l2pSAmEIZKMWKRMxgQbQCWVcU78Wj7hwAAAABJRU5ErkJggg==");-webkit-animation:road .9s linear infinite;animation:road .9s linear infinite}.product-image:after{bottom:8px;background-color:#ffbf00}@-webkit-keyframes fill{0%{width:0;height:1px}50%{width:100%;height:1px}to{width:100%;height:100%;background:#0b8dcd}}@keyframes fill{0%{width:0;height:1px}50%{width:100%;height:1px}to{width:100%;height:100%;background:#0b8dcd}}@-webkit-keyframes road{0%{background-position:0}to{background-position:330px}}@keyframes road{0%{background-position:0}to{background-position:330px}
  }

  .stretched-link {
    color: #FDD700;
    text-decoration: none;
    padding: 20px 10px;
  }

  .card-body {
    display: flex;
    justify-content: center;
  }

  .geral-car-i {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }

</style>

<div class="content-car">
  <div class="geral-car-i">
    
    <a href="" class="item-car-l">
      <div class="card product-item">
        <div class="card-image-top product-image">
          <img class="img-fluid" src="https://cearamotor.com.br/images/carros/up/up.png" alt="Up!" title="Up!">
        </div>
        <div class="card-body">
          <a href="#" class="stretched-link">Up!</a>
        </div>
      </div>
    </a>

    <a href="" class="item-car-l">
      <div class="card product-item">
        <div class="card-image-top product-image">
          <img class="img-fluid" src="https://cearamotor.com.br/images/carros/up/up.png" alt="Up!" title="Up!">
        </div>
        <div class="card-body">
          <a href="#" class="stretched-link">Up!</a>
        </div>
      </div>
    </a>

    <a href="" class="item-car-l">
      <div class="card product-item">
        <div class="card-image-top product-image">
          <img class="img-fluid" src="https://cearamotor.com.br/images/carros/up/up.png" alt="Up!" title="Up!">
        </div>
        <div class="card-body">
          <a href="#" class="stretched-link">Up!</a>
        </div>
      </div>
    </a>

    <a href="" class="item-car-l">
      <div class="card product-item">
        <div class="card-image-top product-image">
          <img class="img-fluid" src="https://cearamotor.com.br/images/carros/up/up.png" alt="Up!" title="Up!">
        </div>
        <div class="card-body">
          <a href="#" class="stretched-link">Up!</a>
        </div>
      </div>
    </a>

  </div>
</div>        
         
</body>
</html>
