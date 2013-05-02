<?php 
	require_once 'header.php';
?>

  <body>
<?php 
	require_once 'nav.php';
?>

    <div class="container">
		<div class="row">
		<h1>James Smith</h1>
		</div>
		<div class="tabbable"> <!-- Only required for left/right tabs -->
		  <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">History</a></li>
			<li><a href="#tab2" data-toggle="tab">User Info</a></li>
		  </ul>
		  <div class="tab-content">
			<div class="tab-pane active" id="tab1">
			<table class="table table-striped">
				<thead>
                <tr>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Location</th>
                </tr>
				<tbody>
                <tr>
                  <td>2013/01/01</td>
                  <td>Avron</td>
                  <td>2,000</td>
                  <td>Hiyoshi, Kohoku</td>
                </tr>
                <tr>
                  <td>2013/01/01</td>
                  <td>Avron</td>
                  <td>2,000</td>
                  <td>Hiyoshi, Kohoku</td>
                </tr>
                  <td>2013/01/01</td>
                  <td>Avron</td>
                  <td>2,000</td>
                  <td>Hiyoshi, Kohoku</td>
                <tr>
                </tr>
              </tbody>
              </thead>
			</table>
			</div>
			<div class="tab-pane" id="tab2">
				<form>
				  <fieldset>
					<legend>Edit User Infomation</legend>
					<label>Name</label>
					<input type="text" placeholder="Type something…">
					<label>Email</label>
					<input type="text" placeholder="Type something…">
					<label>Password</label>
					<input type="text" placeholder="Type something…">
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
					<input type="text" placeholder="Type something…">
					<br/>
					<button type="submit" class="btn">Submit</button>
				  </fieldset>
				</form>
			</div>
		  </div>
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

