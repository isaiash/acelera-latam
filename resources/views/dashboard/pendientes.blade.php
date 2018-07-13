<div id=pendientetable>
<div class="col-lg-12">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nota General</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Fecha de ingreso</th>
                </tr>
            </thead>
            <tbody>
                <tr id="geargit">
                    <td>GearGit</td>
                    <td>95</td>
                    <td>ihuerta@udec.cl</td>
                    <td>+569 44755236</td>
                    <td>2018-09-29 05:5</td>
                </tr>
                <tr id="following">
                    <td>FolloWing</td>
                    <td>91</td>
                    <td>juancontreras@udec.cl</td>
                    <td>+569 73849384</td>
                    <td>2018-09-29 05:5</td>
                </tr>
                <tr id="fastbook">
                    <td>FastBook</td>
                    <td>80</td>
                    <td>contacto@chuckybox.cl</td>
                    <td>+569 43589302</td>
                    <td>2018-09-20 05:5</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<div id="pendiente1" class="row">
  <div id="backpendiente1" class="col-md-12">
    <a href=#><i class="fas fa-arrow-left"></i>  volver</a>
  </div>
   @include('dashboard.geargit')
</div>
<div id="pendiente2" class="row">
  <div id="backpendiente2" class="col-md-12">
    <a href=#><i class="fas fa-arrow-left"></i>  volver</a>
  </div>
   @include('dashboard.following')
</div>
<div id="pendiente3" class="row">
  <div id="backpendiente3" class="col-md-12">
    <a href=#><i class="fas fa-arrow-left"></i>  volver</a>
  </div>
   @include('dashboard.fastbook')
</div>
