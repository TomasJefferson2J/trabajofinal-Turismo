<!DOCTYPE html>
<html>
<head>
<title>COMIDA</title>
<style>
html{
  font-family: system-ui;
}
body{
  margin: 2rem 0;
  padding: 0;
  height: 60vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
a{
  text-decoration: none;
}
.wrap{
  max-width: 1200px;
  margin: 0 auto;
}

.column-4{
  display: grid;
  grid-template-columns: repeat(4,1fr);
  column-gap: 1rem;
  row-gap: 1rem;
}
.tarjeta-rest{
  background-repeat: no-repeat;
  height: 300px;
  border-radius: 6px;
  padding: 1rem .5rem;
  display: flex;
  align-items: end;
}

.wrap-text_tarjeta-rest{
  color: #fff;
  padding: .5rem;
  border-radius: 6px;
  background: linear-gradient(to top, rgb(0 0 0 / .5), rgb(0 0 0 / .5));
}



@media (max-width:1024px){
  .column-4{
    grid-template-columns: repeat(3,1fr);
  }
}
@media (max-width:768px){
  .column-4{
    grid-template-columns: repeat(2,1fr);
  }
}
@media (max-width:480px){
  .column-4{
    grid-template-columns: repeat(1,1fr);
  }
}





</style>

<body>

    <div class="wrap column-4 columns">

    <div class="tarjeta-rest" style="background: url(https://es.cravingsjournal.com/wp-content/uploads/2018/08/ceviche-con-leche-de-tigre-2.jpg) center; background-size: cover;">
      <div class="wrap-text_tarjeta-rest">
        <h3>Ceviche</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati veniam distinctio dignissimos, sequi corporis nobis voluptate inventore, quisquam est illo perspiciatis cupiditate? Ducimus, ea sapiente?

        </p>
      </div>
    </div>

    <div class="tarjeta-rest" style="background: url(https://lacocinadevero.com/wp-content/uploads/2022/04/causa-limena-con-pulpo-scaled-e1649622468242.jpg) center; background-size: cover;">
      <div class="wrap-text_tarjeta-rest">
        <h3>Causa rellena</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati veniam distinctio dignissimos, sequi corporis nobis voluptate inventore, quisquam est illo perspiciatis cupiditate? Ducimus, ea sapiente?

        </p>
      </div>
    </div>

    <div class="tarjeta-rest" style="background: url(https://www.comedera.com/wp-content/uploads/2022/03/Tamales-colombianosshutterstock_2045038238.jpg) center; background-size: cover;">
      <div class="wrap-text_tarjeta-rest">
        <h3>Tamal</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati veniam distinctio dignissimos, sequi corporis nobis voluptate inventore, quisquam est illo perspiciatis cupiditate? Ducimus, ea sapiente?

        </p>
      </div>
    </div>

    <div class="tarjeta-rest" style="background: url(https://www.paulinacocina.net/wp-content/uploads/2021/12/arroz-chaufa-peruano-receta.jpg) center; background-size: cover;">
      <div class="wrap-text_tarjeta-rest">
        <h3>Chaufa</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati veniam distinctio dignissimos, sequi corporis nobis voluptate inventore, quisquam est illo perspiciatis cupiditate? Ducimus, ea sapiente?

        </p>
      </div>
    </div>

</div>
</body>
</html>