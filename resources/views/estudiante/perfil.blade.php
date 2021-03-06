@extends('layouts.estudiante')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <!--BARRA PERFIL-->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-user"></em>
				</a></li>
				<li class="active">Perfil</li>
			</ol>
		</div>
		<!--FIN BARRA PERFIL-->

<!--PARTE CENTRAL CABECERA-->
<div class="col-md-12">
	<div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
		<h3 style="text-align: center">Mi perfil <p><small>Añade informacion personal para compartir tu perfil</small></p></h3>
	</div>
<!--FIN PARTE CENTRAL CABECERA-->

<!--SE INICIA EL FORM TODOS LOS ELEMENTOS DEL FORMULARIO DEBEN IR DENTRO DE ESTA ETIQUETA-->
<form name="modifyProfile" id="profileForm" novalidate>
	<!--INICIO DEL DIV CENTRAL PARTE DEL FORMULARIO INFORMACION BASICA-->
	<div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
		<div class="col-md-8 col-md-offset-2">
			<div class="control-group form-group">
				<div class="controls">
					<br>
					<label>Informaciòn bàsica</label>
					<span id="alertNombre" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
						<input type="text" class="form-control" id="txtNombre" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nombre.">
					</span>
					<br>
					<span id="alertApellido" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
						<input type="text" class="form-control" id="txtApellido" placeholder="Introduzca su apellido" required data-validation-required-message="Por favor introduzca su apellido.">
					</span>
					<br>
					<span id="alertDireccion" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
						<input type="text" class="form-control" id="txtDireccion" placeholder="Introduzca su direcciòn" required data-validation-required-message="Por favor introduzca su direcciòn.">
					</span>
					<br>
					<span id="alertTelefono" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
						<input type="text" class="form-control" id="txtTelefono" placeholder="Introduzca su telefono" required data-validation-required-message="Por favor introduzca su telefono.">
					</span>
					<p class="help-block"></p>
				</div>
			</div>
			<div class="control-group form-group">
				<div class="controls">
					<label>Biografìa</label>
					<span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title=""
					data-content="">
					<textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize: none" data-validation-required-message="Por favor introduzca su biografia deseada."></textarea>
					</span>
					<br>
					<span id="alertSelectLanguage" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
						<select class="form-control" id="selectLanguage" title="Seleccione su idioma">
							<option class="bs-title-option" value="" disabled selected>Elija un idioma</option>
							<option>Alemàn</option>
							<option>Arabe</option>
							<option>Bùlgaro</option>
							<option>Español</option>
							<option>Coreano</option>
							<option>Francès</option>
							<option>Griego</option>
							<option>Hùngaro</option>
							<option>Inglès</option>
							<option>Italiano</option>
							<option>Japones</option>
							<option>Polaco</option>
							<option>Portuguès</option>
							<option>Ruso</option>
							<option>Sueco</option>
							<option>Ucraniano</option>
						</select>
					</span>
					<br>
				</div>
			</div>
		</div>

	<!--FIN DEL DIV CENTRAL PARTE DEL FORMULARIO INFORMACION BASICA-->
	<!--BOTONES FORMULARIO-->
	<div class="col-md-12 container allFormButtons">
		<br>
		<div class="col-md-2 col-md-offset-2">
			<div class="form-group">
				<button type="button" id="btnCancel" class="btn btn-danger">Cancelar</button>
			</div>
		</div>
		<div class="col-md-5 col-md-offset-3">
			<div class="form-group">
				<button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
				<button type="submit" id="btnEnviar" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
		&nbsp;
	</div>
	<!--FIN BOTONES FORMULARIO-->
</form>
<br>
</div>


@endsection