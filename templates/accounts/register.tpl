{extends file='main.tpl'}

{block name=title}Register{/block}

{block name=head}{/block}

{block name=body}
<form class="form-horizontal" action="" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="username" name="username" placeholder="Enter your username here">
		</div>
	</div>
	<div class="form-group">
		<label for="email_address" class="col-sm-2 control-label">Email Address</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter your email address here">
		</div>
	</div>
	<div class="form-group">
		<label for="phone_number" class="col-sm-2 control-label">Phone Number</label>
		<div class="col-sm-10">
			<input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number here">
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password here">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Register</button>
		</div>
	</div>
</form>
{/block}