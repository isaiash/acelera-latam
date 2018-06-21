<!--
										<h1 class="col-sm-offset-2 col-sm-8 text-center text-white">					
										Formulario de Registro de Usuarios</h1>
									</div>
									<input type="hidden" id="id_admin" name="id_admin" value="">
									<input type="hidden" id="opcion" name="opcion" value="registrar">
									<div class="form-group">
										<label for="RUT" class="col-sm-2 control-label text-white">enunciado</label>
										<div class="col-xs-8"><input id="rut_user" name="rut_user" type="text" class="form-control" required="true" maxlength="8" placeholder="enunciado pregunta" 					autofocus></div>				
									</div>
									<div class="form-group">
										<label for="NOMBRE" class="col-sm-2 control-label text-white">valor</label>
										<div class="col-xs-8"><input id="nombre_user" name="nombre_user" type="text" required="true" maxlength="100" placeholder="5" class="form-control" ></div>
									</div>
									
									
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-8">
											<input id="btn_guardar" type="submit" class="btn btn-success" value="GUARDAR">
											<input id="btn_listar" type="button" class="btn btn-primary" value="LISTAR">
										</div>
									
-->
									<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none"></h3>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<form id="Hotel_Consultar" data-validate="parsley">
						<section class="panel panel-default">
							<header class="panel-heading">
								<span class="h4"><i class="fa fa-calendar"></i> preguntas </span>
							</header>
							<div class="panel-body">
								<p class="text-muted">Ingrese todos los datos solicitados</p>
								<div class="form-group clearfix">
									<div class="col-sm-6">
										<label>Fecha Inicio</label>
										<input type="date" class="form-control" id="Fecha_Inicio" name="Fecha_Inicio" data-required="true">    
									</div>
									<div class="col-sm-6">
										<label>Fecha Termino</label>
										<input type="date" class="form-control" id="Fecha_Termino" name="Fecha_Termino" data-required="true">    
									</div>
								</div> 
							</div>
							<footer class="panel-footer text-right bg-light lter">
								<label class="btn btn-active btn-s-xs" onclick="limpiar();">Limpiar</label>
								<label class="btn btn-success btn-s-xs" onclick="consultar1();">Consultar</label>
							</footer>
						</section>
					</form>
				</div>
				
				</div>