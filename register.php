<?php 
	require_once 'header.php';
?>

  <body>
<?php 
	require_once 'nav.php';
?>

    <div class="container">
		<div class="row">
				<form>
				  <fieldset>
					<legend>Register</legend>
					<label>Name</label>
					<input type="text" placeholder="Your name">
					<label>Email</label>
					<input type="text" placeholder="example@example.com">
					<label>Password</label>
					<input type="passoword">
					<label>Confirmation Password</label>
					<input type="passoword">
					<label>Birthday</label>
					Year
					<select>
						<?php for($i = 30; $i >= 0; $i--):?>
						<?php $year= 2013;?>
						<option value="<?php echo $year - $i;?>"><?php echo $year - $i; ?></option>
						<?php endfor; ?>
					</select>
					Month
					<select>
						<?php for($i = 1; $i <= 12; $i++):?>
							<option value="<?php echo $i;?>"><?php echo $i; ?></option>
						<?php endfor;?>
					</select>
					Day
					<select>
						<?php for($i = 1; $i <= 31; $i++):?>
							<option value="<?php echo $i;?>"><?php echo $i; ?></option>
						<?php endfor;?>
					</select>
					<label>University</label>
					<input type="text" placeholder="Keio University">
					<br/>
					<button type="submit" class="btn">Submit</button>
				  </fieldset>
				</form>
		</div>      <!-- Main hero unit for a primary marketing message or call to action -->
      <hr>

      <footer>
        <p>&copy; Group C giwa</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?php require_once 'js.php';?>
  </body>
</html>

