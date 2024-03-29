<?php require APPROOT . '/views/inc/header.php'; ?>
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card card-body bg-light mt-5">
				<?php flash('register_success'); ?>
				<h2>Войти в аккунт</h2>
				<form action = "<?=URLROOT?>/users/login/" method="post">
					<div class="form-group">
						<label for="email">Email: <sup>*</sup></label>
						<input type="email" name="email" class="form-control
						<?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?> "
						value="<?=$data['email']?>" >
						<span class="invalid-feedback"><?=$data['email_err']?></span>
					</div>
					<div class="form-group">
						<label for="password">Пароль: <sup>*</sup></label>
						<input type="password" name="password" class="form-control
						<?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?> "
						value="<?=$data['password']?>" >
						<span class="invalid-feedback"><?=$data['password_err']?></span>
					</div>
					<div class="row">
						<div class="col">
							<input type="submit" value="Войти" class="btn btn-success btn-block">
						</div>
						<div class="col">
							<a href="<?=URLROOT?>/users/register" class="btn btn-light btn-block">Создать аккаунт</a> 
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
