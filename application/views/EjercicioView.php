<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EJERCICIO</title>

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/skins/square/grey.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>

</head>
<body>
	  <?php $create_form = array('id'=>'ejercicio-form','class' => 'form-vertical'); ?>
	<main>
		<div id="form_container">
			<div class="row">
				<div class="col-md-7">

					<div id="wizard_container">
						<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
								<?php echo form_open('EjercicioController/saveAnswers', $create_form); ?>
						<form name="example-1" id="wrapped" method="POST">
							<input id="website" name="website" type="text" value="">
							<div id="middle-wizard">

								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>Seleccione la respuesta correcta</h3>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><h4 id="p1s1"><?php echo $frase[1]['sinonimo'] ?></h4>
												<div class="styled-select">
													<select class="required" name="p1r1" id="p1r1">
														<option value="" selected>Seleccione</option>
														<?php
															$contador = 0;
															foreach ($palabra as $row) {
																$contador = $contador +1;
																echo '<option value="'.$row['palabra'].'">' .$row['palabra'].'</option>';
															}
														 ?>
													</select>
												</div>
													<h4 id="p1f1"><?php echo $frase[0]['frase'] ?></h4></label>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><h4><?php echo $frase[2]['sinonimo'] ?></h4>
											</div>
											<div class="styled-select">
												<select class="required" name="p1r2" id="p1r2">
													<option value="" selected>Seleccione</option>
													<?php
														$contador = 0;
														foreach ($palabra as $row) {
															$contador = $contador +1;
															echo '<option value="'.$contador.'">' .$row['palabra'].'</option>';
														}
													 ?>
												</select>
											</div>
												<h4><?php echo $frase[2]['frase'] ?></h4></label>
										</div>
									</div>
									<!-- /row -->

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label><h4><?php echo $frase[4]['sinonimo'] ?></h4>
												<div class="styled-select">
													<select class="required" name="p1r3" id="p1r3">
														<option value="" selected>Seleccione</option>
														<?php
															$contador = 0;
															foreach ($palabra as $row) {
																$contador = $contador +1;
																echo '<option value="'.$contador.'">' .$row['palabra'].'</option>';
															}
														 ?>
													</select>
												</div>
													<h4><?php echo $frase[4]['frase'] ?></h4></label>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label><h4><?php echo $frase[3]['sinonimo'] ?></h4>
												<div class="styled-select">
													<select class="required" name="p1r4" id="p1r4">
														<option value="" selected>Seleccione</option>
														<?php
															$contador = 0;
															foreach ($palabra as $row) {
																$contador = $contador +1;
																echo '<option value="'.$contador.'">' .$row['palabra'].'</option>';
															}
														 ?>
													</select>
												</div>
													<h4><?php echo $frase[3]['frase'] ?></h4></label>
											</div>
										</div>
									</div>
									<!-- /row -->
									<!-- /row -->
								</div>
								<!-- /step-->

								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>Seleccione la imagen correcta</h3>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<h4><?php echo $frase[0]['sinonimo']. $frase[0]['palabra'] .$frase[0]['frase'] ?></h4>
											</div>
										</div>
										<!-- /col-sm-12 -->
									</div>
									<!-- /row -->
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<?php
												foreach ($imagen as $row) {
													echo '<img src="data:image/png;base64,' . $row['imagen'] . '" />';
												}?>
											</div>
										</div>
									</div>

								</div>
								<!-- /step-->

								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Escriba la respuesta correcta</h3>
									<div class="form-group">
										<label><h4 id="p1s1"><?php echo $sinonimo[1]['sinonimo'] ?></h4>
										<input name="input1" type="text" class="form-control" id="input1" value="<?php echo set_value('input1'); ?>">
											<h4 id="p1f1"><?php echo $frase[0]['frase'] ?></h4></label>
									</div>
									<div class="form-group">
										<label><h4 id="p1s1"><?php echo $sinonimo[0]['sinonimo'] ?></h4>
										<input name="input2" type="text" class="form-control" id="input2" value="<?php echo set_value('input2'); ?>">
											<h4 id="p1f1"><?php echo $frase[2]['frase'] ?></h4></label>
									</div>
									<div class="form-group">
										<label><h4 id="p1s1"><?php echo $sinonimo[3]['sinonimo'] ?></h4>
										<input name="input3" type="text" class="form-control" id="input3" value="<?php echo set_value('input3'); ?>">
											<h4 id="p1f1"><?php echo $frase[3]['frase'] ?></h4></label>
									</div>
									<div class="form-group">
										<label><h4 id="p1s1"><?php echo $sinonimo[4]['sinonimo'] ?></h4>
										<input name="input4" type="text" class="form-control" id="input4" value="<?php echo set_value('input4'); ?>">
											<h4 id="p1f1"><?php echo $frase[3]['frase'] ?></h4></label>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Atras </button>
								<button type="button" name="forward" class="forward">Siguiente</button>
								<input class='button' name='finish' value='terminar' id="grabar"  type="submit" value="Grabar"/>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
				</div>
			</div><!-- /Row -->
		</div><!-- /Form_container -->
		<?php echo form_close(); ?>
	</main>
	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="<?php echo base_url();?>assets/js/jquery-2.2.4.min.js"></script>
	<!-- Common script -->
	<script src="<?php echo base_url();?>assets/js/common_scripts_min.js"></script>
	<!-- Wizard script -->
	<script src="<?php echo base_url();?>assets/js/registration_wizard_func.js"></script>
	<!-- Menu script -->
	<script src="<?php echo base_url();?>assets/js/velocity.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
	<!-- Theme script -->
	<script src="<?php echo base_url();?>assets/js/functions.js"></script>

</body>

</html>
