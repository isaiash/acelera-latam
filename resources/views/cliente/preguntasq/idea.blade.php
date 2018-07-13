@extends('cliente.estructura')

@section('content')

<div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img class="img-resize" src="imagenes/icon/acelera_logo_black.png" alt="AceleraLatam" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul id="tabs" class="list-unstyled navbar__list">
                        <li><a name="tab1" href="#"><i class="fas fa-chart-bar"></i>Inicio</a></li>
                        <li class="has-sub">
                            <a name="tab1" class="js-arrow" href="#"><i class="fas fa-question"></i>Preguntas</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a name="tab3" href="#">Modelo de Negocios</a></li>
                            </ul>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a name="tab4" href="#">Gestion Comercial</a></li>
                            </ul>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a name="tab5" href="#">Gestion Organizacional</a></li>
                            </ul>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a name="tab6" href="#">Gestión Financiera</a></li>
                            </ul>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li><a name="tab7" href="#">Gestion de Innovación</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="imagenes/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?=  $usuario->name;  ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="imagenes/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?=  $usuario->name;  ?></a>
                                                    </h5>
                                                    <span class="email"><?=  $usuario->email;  ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Perfil</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Ajustes</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid" id="content">
                        <div id="tab1">
                            <h2>Avance de las dimensiones</h2><br>  

                            <h3>Etapa: Idea</h3><br> 

                            <h4>Q1 - Modelo de Negocios: </h4><p>LLeva x preguntas respondidas de Y</p><br>
                            <h4>Q2 - Gestion Comercial: </h4><p>LLeva x preguntas respondidas de Y</p><br>
                            <h4>Q3 - Gestion Organizacional: </h4><p>LLeva x preguntas respondidas de Y</p><br>
                            <h4>Q4 - Gestion Financiera: </h4><p>LLeva x preguntas respondidas de Y</p><br>
                            <h4>Q5 - Gestion de Innovación: </h4><p>LLeva x preguntas respondidas de Y</p><br>
                        </div>


                        <div id="tab3" class="row">
                             <form method="post"  action="q1">  
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                            <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 
                            <div class="col-lg-14">
                                <h2>Modelo de negocios:</h2>
                                <br>
                                <br>
                                <div class="table-responsive table--no-card m-b-30">   

                                    <h4>Describa los aspectos generales de su idea de negocio, proyecto y estratégia o modelo de negocios:</h4>

                                    <br>

                                        <label>
                                        <input type="text" class="form-control" name="p1" >
                                        </label> 
                                <br>
                                <br>
                                </div>

                                <div class="table-responsive table--no-card m-b-30">
                                   <h4>Describa los nueve bloques del modelo de negocios según OsterWalter Pigneur (CANVAS)</h4>

                                   <br>
            
                                        <label>
                                        <input type="text" class="form-control" name="p2" >
                                        </label>
                                <br>
                                <br>   
                                </div>

                                
                                 <div class="table-responsive table--no-card m-b-30">
                                   <h4>¿Ha identificado, seleccionado o desechado segmentos de clientes en relación a las propuestas de valor?</h4>
                                <br>
                                    <select name="p3">
                                    <option value="No he identificado">No he identificado</option>
                                    <option value="He identificado, pero no he seleccionado/desechado según propuesta de valor">He identificado, pero no he seleccionado/desechado según propuesta de valor</option>
                                    <option value="He identificado y si he seleccionado/desechado según propuesta de valor">He identificado y si he seleccionado/desechado según propuesta de valor</option>
                                    </select>
                                 <br>
                                <br>   
                                </div>


                                  <div class="table-responsive table--no-card m-b-30">
                                   <h4>¿Ha caracterizado los segmentos de clientes?</h4>
   
                                <br>
                                      <select name="p4">
                                        <option value="No">No</option>
                                        <option value="Según tamaño">Según tamaño</option>
                                        <option value="Según atributos valorados">Según atributos valorados</option>
                                        <option value="Según ubicación">Según ubicación</option>
                                     </select> 
                                 <br>
                                <br>    

                                </div>


                                  <div class="table-responsive table--no-card m-b-30">
                                   <h4>¿Ha identificado productos/servicios sustitutos al suyo en el mercado?</h4>
                                   <br>

   
                                     <label>
                                        <input type="radio" name="p5" value="si"> Si<br>
                                        </label>
                                         <label>
                                        <input type="radio" name="p5" value="no"> No<br>
                                        </label>
                                <br>
                                <br>        
                                </div> 


                                 <div class="table-responsive table--no-card m-b-30">
                                          <h4>¿La compañía posee propuesta de valor?</h4>

                                          <br>

   
                                             <label>
                                             <input type="radio" name="p6" value="si" onclick="show1()"> Si<br>
                                             </label>
                                             <label>
                                            <input type="radio" name="p6" value="no" onclick="show2()"> No<br>
                                         </label>

                                         <br>
    

                                    <script>function show1(){
                                    document.getElementById("pregunta7").style.display ='block';
                                    }
                                     </script>

                                   <script>function show2(){
                                     document.getElementById("pregunta7").style.display ='none';
                                     }
                                     </script>

                            <div style="display:none;" id="pregunta7">
                                 <h4>Indique:</h4> 

                                 <br>

                                   <h4>Atributos de la(s) propuestas de valor</h4>

                                   <br>
   
                               <label>
                                <input type="text" class="form-control" name="p7">
                                </label>

                                <br>
        
                                <h4>Beneficios para el cliente de cada propuestas de valor</h4>

                                <br>
   
                                <label>
                                 <input type="text" class="form-control" name="p8">
                                </label>   

                                <br> 

                                     <h4>Analisis FODA por propuesta de valor</h4>

                                     <br>
       
                                    <label>
                                 <input type="text" class="form-control" name="p9">
                                </label>

                                <br>
       
                                <h4>Relación entre propuesta de valor y segmento de cliente</h4>

                                <br>
   
                             <label>
                                <input type="text" class="form-control" name="p10">
                            </label>  

                            <br>
                            <br>  

                                </div> 
                                </div>


                                 <div class="table-responsive table--no-card m-b-30">
                                     <h4>¿Posee canales de distribución?</h4>
                                     <br>
   
                                    <label>
                                    <input type="radio" name="p11" value="si" onclick="show3()"> Si<br>
                                    </label>
                                    <label>
                                    <input type="radio" name="p11" value="no" onclick="show4()"> No<br>
                                  </label>
                                  <br>

                                <script>function show3(){
                                document.getElementById("pregunta13").style.display ='block';
                                }
                                </script>

                                <script>function show4(){
                                document.getElementById("pregunta13").style.display ='none';
                                }
                                </script>

                                <div style="display:none;" id="pregunta13"> 
                                <h4>Listado de canales de distribución</h4>
                                <br>

                                <label>
                                <input type="text" class="form-control" name="p13" >
                                </label> 
                                <br>

                                    <h4>Objetivo de cada canal identificado</h4>
                                    <br>

                                <label>
                                <input type="text" class="form-control" name="p14" >
                                </label> 
                                <br>

                                 <h4>Listado de socios comerciales</h4>
                                 <br>

                                <label>
                                <input type="text" class="form-control" name="p15" >
                                </label>
                                <br>

                                <h4>Objetivo de cada socio comercial</h4>
                                <br>

                                <label>
                                <input type="text" class="form-control" name="p16" >
                                </label>
                                <br>

                                <h4>Listado de alianzas estratégicas</h4>
                                <br>

                                <label>
                                <input type="text" class="form-control" name="p17" >
                                </label>  
                                <br>

                                 <h4>Objetivo de cada alianza estratégica</h4>
                                 <br>

                                  <label>
                               <input type="text" class="form-control" name="p18" >
                                 </label>  
                                 <br>     

                              <h4>Responsables por la gestión y desarrollo de cada canal identificado</h4>
                              <br>

                               <label>
                                 <input type="text" class="form-control" name="p19" >
                             </label>
                             <br>

                            <h4>Principales actividades de gestión de cada canal identificado</h4>
                            <br>

                               <label>
                                 <input type="text" class="form-control" name="p20" >
                                 </label> 
                                 <br>
                                 <br>

                                </div>
                        </div> 

                         <div class="table-responsive table--no-card m-b-30">
                        <h4>Identifique cada relación con los segmentos de clientes señalados anteriormente</h4>
                        <br>

                        <label>
                         <input type="text" class="form-control" name="p21" >
                        </label> 
                        <br>
                        <br>
                             
                         </div>
                         

                        <div class="table-responsive table--no-card m-b-30">

                        <h4>Tipo u objetivo de cada relación identificada</h4>
                        <br>

                        <label>
                         <input type="text" class="form-control" name="p22" >
                        </label> 
                        <br>
                        <br>
                         </div>



                        <div class="table-responsive table--no-card m-b-30">

                         <h4>Principales actividades asociadas al desarrollo o gestión de cada relación identificada</h4>
                         <br>

                        <label>
                        <input type="text" class="form-control" name="p23" >
                        </label> 
                        <br>
                        <br>
                         </div>


                         <div class="table-responsive table--no-card m-b-30">
                            <h4>Identifique y cuantifique en $ cada tipo de ingreso de la Compañía</h4>
                            <br>

                        <label>
                        <input type="text" class="form-control" name="p24" >
                        </label> 
                        <br>
                        <br>
                             
                         </div>


                         <div class="table-responsive table--no-card m-b-30">

                            <h4>¿Cuáles son los recursos clave de la Compañía?</h4>
                            <br>

                            <label>
                            <input type="text" class="form-control" name="p25" >
                            </label>
                            <br>
                            <br>

                             
                         </div>



                        <div class="table-responsive table--no-card m-b-30">

                             <h4>¿Posee actividades clave la compañía?</h4>
                             <br>

              <label>
                <input type="radio" name="p26" value="si" onclick="show5()"> Si<br>
            </label>
            <label>
                <input type="radio" name="p26" value="no" onclick="show6()"> No<br>
            </label>
            <br>

        <script>function show5(){
            document.getElementById("pregunta27").style.display ='block';
            }
        </script>

        <script>function show6(){
            document.getElementById("pregunta27").style.display ='none';
        }
        </script>

        <div style="display:none;" id="pregunta27">

         <h4>Marketing</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p27" >
              </label>

         <h4>Desarrollo de productos o servicios</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p28" >
              </label>
              <br>
        
         <h4>Producir o comprar productos</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p29" >
              </label>
              <br>

         <h4>Gestionar logística y cadena de distribución</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p30" >
              </label>
              <br>

         <h4>Operaciones</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p31" >
              </label>
              <br>

         <h4>Ventas y gestión de servicio al cliente</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p32" >
              </label>
              <br>
              <br>
        </div> 



                         </div> 


                        <div class="table-responsive table--no-card m-b-30">

                                    <h4>¿Posee socios clave la compañía?</h4>
                                    <br>

              <label>
                <input type="radio" name="p33" value="si" onclick="show7()"> Si<br>
            </label>
            <label>
                <input type="radio" name="p33" value="no" onclick="show8()"> No<br>
            </label>
            <br>

        <script>function show7(){
            document.getElementById("pregunta34").style.display ='block';
            }
        </script>

        <script>function show8(){
            document.getElementById("pregunta34").style.display ='none';
        }
        </script>

        <div style="display:none;" id="pregunta34">
         <h4>Alianzas</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p34" >
              </label>
              <br>

         <h4>Co competencia</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p35" >
              </label>
              <br>
        
         <h4>Joint Venture</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p36" >
              </label>
              <br>

         <h4>Comprador</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p37" >
              </label>
              <br>

         <h4>Proveedor</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p38" >
              </label>
              <br>

        </div> 
<br>
                             
                         </div> 


                         <div class="table-responsive table--no-card m-b-30">

                            <h4>Lista de la estructura de costos</h4>
                            <br>

              <label>
                  <input type="text" class="form-control" name="p39" >
              </label>
                             
                         </div> 



                            </div>
                            <br>

                            <button type="submit" class="btn btn-danger">Enviar</button>

                             </form>

<br>
<br>


                        </div>




                        <div id="tab4" class="row">

                            <form method="post"  action="q2">  
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                            <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 



                            <div class="col-lg-14">
                                
                                    <h2>Gestion comercial:</h2>
                                    <br>
                                    <br>


                                     <div class="table-responsive table--no-card m-b-30">

                                                <h4>¿Posee un plan de negocios?</h4>
                                                <br>

              <label>
                <input type="radio" name="p40" value="si" onclick="show9()"> Si<br>
            </label>
            <label>
                <input type="radio" name="p40" value="no" onclick="show10()"> No<br>
            </label>
            

        <script>function show9(){
            document.getElementById("pregunta41").style.display ='block';
            }
        </script>

        <script>function show10(){
            document.getElementById("pregunta41").style.display ='none';
        }
        </script>

        <div style="display:none;" id="pregunta41">

        <h4>Misión y visión</h4>
        <br>

              <label>
                  <input type="text" class="form-control" name="p41" >
              </label>
              <br>
        
         <h4>Análisis FODA</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p42" >
              </label>
              <br>

         <h4>Definición de objetivos y metas</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p43" >
              </label>
              <br>

         <h4>Identificación de proveedores y clientes</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p44" >
              </label>
              <br>


          <h4>Delegación de tareas</h4>
                                         <br>

              <label>
                  <input type="text" class="form-control" name="p45" >
              </label>

              
        </div>
                                     </div> 



                                
                            </div>

                            <button type="submit" class="btn btn-danger">Enviar</button>

                             </form>
                             <br>
                             <br>


                        </div>




                        <div id="tab5" class="row">

                            <form method="post"  action="q3">  
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                            <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 

                            <div class="col-lg-14">
                                
                                    <h2>Gestion organizacional:</h2>
                                    <br>
                                    <br>

                                    <div class="table-responsive table--no-card m-b-30">

                                         <h4>¿Su emprendimiento posee gestión comercial responsable formal, informal o no posee?</h4>
                                         <br>
            
            <select name="p46">
                <option value="No">No</option>
                <option value="Informal">Informal</option>
                <option value="Formal">Formal</option>
            </select>
            <br>
            <br>

                             
                                     </div> 


                                     <div class="table-responsive table--no-card m-b-30">

                                                <h4>¿Ha realizado investigación de mercado para caracterizar clientes, canales, entre otros?</h4>
                                                <br>
                                              

              <label>
                <input type="radio" name="p47" value="si" onclick="show11()"> Si<br>
            </label>
            <label>
                <input type="radio" name="p47" value="no" onclick="show12()"> No<br>
            </label>
            <br>

        <script>function show11(){
            document.getElementById("pregunta48").style.display ='block';
            }
        </script>

        <script>function show12(){
            document.getElementById("pregunta48").style.display ='none';
        }
        </script>

        <div style="display:none;" id="pregunta48">

        <h4>Clientes</h4>
        <br>

              <label>
                  <input type="text" class="form-control" name="p48" >
              </label>
              <br>

         <h4>Canales</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p49" >
              </label>
              <br>
        
         <h4>Competidores</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p50" >
              </label>
              <br>

         <h4>Proveedores</h4>
         <br>

              <label>
                  <input type="text" class="form-control" name="p51" >
              </label>
              <br>

          <h4>Socios y aliados</h4>
          <br>

              <label>
                  <input type="text" class="form-control" name="p52" >
              </label>
              <br>

        </div>
<br>
                             
                                     </div>

                               
                            </div>
                            <br>
                            <br>

                            <button type="submit" class="btn btn-danger">Enviar</button>

                             </form>
                             <br>
                             <br>


                        </div>  




                        <div id="tab6" class="row">

                            <form method="post"  action="q4">  
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                            <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 


                            <div class="col-lg-14">
                               
                                    <h2>Gestion financiera:</h2>
                                    <br>
                                    <br>


                                    <div class="table-responsive table--no-card m-b-30">

                                                <h4>Evaluación de proyecto (Flujo de caja)</h4>
                                                <br>
   
            <label>
                <input type="radio" name="p53" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p53" value="no"> No<br>
            </label>
            <br>
            <br>

                             
                                     </div> 


                                     <div class="table-responsive table--no-card m-b-30">

                                         <h4>Capex (años a 0) Inversión</h4>
                                         <br>
   
            <label>
                <input type="radio" name="p54" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p54" value="no"> No<br>
            </label>
            <br>
            <br>

                             
                                     </div>


                                     <div class="table-responsive table--no-card m-b-30">

                                        <h4>Capex + Opex (año 0 + primer año operación)</h4>
                                        <br>
   
            <label>
                <input type="radio" name="p55" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p55" value="no"> No<br>
            </label>
            <br>
            <br>

                             
                                     </div>


                                     <div class="table-responsive table--no-card m-b-30">

                                        <h4>Documentación de los supuestos de evaluación</h4>
                                        <br>
   
            <label>
                <input type="radio" name="p56" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p56" value="no"> No<br>
            </label>
            <br>
            <br>

                             
                                     </div>


                                
                            </div>
                          

                            <button type="submit" class="btn btn-danger">Enviar</button>


                             </form>
                             <br>
                             <br>
                             <br>



                        </div>  






                        <div id="tab7" class="row">

                            <form method="post"  action="q5">  
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                            <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 

                            <div class="col-lg-14">
                                
                                    <h2>Gestion de innovacion:</h2>
                                    <br>
                                    <br>

                                    <div class="table-responsive table--no-card m-b-30">

                                        <h4>¿Cree que su producto o servicio es una innovación radical o incremental en su mercado objetivo?</h4>
                                        <br>
            
            <select name="p57">
                <option value="No">No</option>
                <option value="Incremental">Incremental</option>
                <option value="Radical">Radical</option>
            </select>
            <br>
            <br>

                             
                                     </div> 

                                
                            </div>
                            <br>
                            <br>

                            <button type="submit" class="btn btn-danger">Enviar</button>
                            <br>
                            <br>

                             </form>
                        </div> 



                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>









<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>        
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<div id="contenido">


  <h1>Q1: modelo de negocios</h1>

        <form method="post"  action="q1">  
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
          <input type="hidden" name="id_usuario" value="<?= $usuario->id; ?>"> 


   <h4>¿Cuál es la propuesta de valor de su empresa?</h4>

      <label>
            <input type="text" class="form-control" name="p1" >
      </label>


        <h4>¿Ha realizado un estudio de mercado?</h4>
   
            <label>
                <input type="radio" name="p2" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p2" value="no"> No<br>
            </label>




        <h4>¿Tiene segmentación de clientes?</h4>
   
            <label>
                <input type="radio" name="p3" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p3" value="no"> No<br>
            </label>




        <h4>¿Tiene canales de distribución?</h4>
   
            <label>
                <input type="radio" name="p4" value="si"> Si<br>
            </label>
            <label>
                <input type="radio" name="p4" value="no"> No<br>
            </label>     




    
   <br>
   <br>
        
          <button type="submit" class="btn btn-danger">Enviar</button>

        </form>

<br>

<a href="logout" class="btn btn-danger" style="color: #fff">​Salir</a>

</div>  -->


<!--   <p>¿Ha caracterizado (tamaño, atributos valorados, ubicación) los segmentos de clientes?</p>
                                    <label>
                                        <input type="radio" name="p1" id="q1" value="si" onclick="show2()"> Si<br>
                                        <input type="radio" name="p1" id="q1" value="no" onclick="show3()"> No<br>
                                    </label>
                                    
                                    <script>function show2(){
                                        document.getElementById("pregunta1_1").style.display ='block';
                                    }</script>
                                        
                                    <script>function show3(){
                                        document.getElementById("pregunta1_1").style.display ='none';
                                    }</script>
                        
                                    <form style="display:none;" action="" id="pregunta1_1">
                                        <p>Seleccione los parámetros usados para segmentar sus clientes</p>
                                        <input type="checkbox" name="pregunta1_1" value="tamaño"> Tamaño <br>
                                        <input type="checkbox" name="pregunta1_1" value="atributos valorados"> Atributos <br>
                                        <input type="checkbox" name="pregunta1_1" value="ubicacion"> Ubicación <br>
                                    </form> -->


@stop


