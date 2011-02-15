<?php
	include('head.php');
	include('header_userview.php');
?>
		<div id="main" class="profile_submit" class="center" style="margin-top:120px;">
			<h2>Edit Profile</h2>
			<form action="profile_submit" method="get" accept-charset="utf-8">				
				<p><label for="username">Username</label><input type="text" name="username"></p>
				<p><label for="email">Email</label><input type="text" name="email"></p>
				<p><label for="password">Password</label><input type="text" name="password"></p>
				<p><label for="password2">Verify Password</label><input type="text" name="password2"></p>
				<p><select name="timezone" id="timezone">
					<option value="option1">(GMT -6:00) Central Time (US & Canada)</option>
					<option value="option2">(GMT -5:00) Eastern Time (US & Canada)</option>
				</select></p>
				<p><input type="submit" value="Continue &rarr;"></p>
			</form>
		</div>
<?php
	include('foot.php');
?>