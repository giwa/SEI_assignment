<?php 
	require_once 'header.php';
?>

  <body>
<?php 
	require_once 'nav.php';
?>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
<?php 
	require_once 'search_bar.php';
?>
		<h3>Search Result</h3>
      <div class="row">
		<div class="span3">
			<label>Sorted by</label>
			<label class="checkbox">
			  <input type="checkbox"> Price
			</label>
			<label class="checkbox">
			  <input type="checkbox"> Surfice
			</label>
			<label class="checkbox">
			  <input type="checkbox"> Distance
			</label>
		</div>
		<div class="span6">
		<?php for($i = 1; $i <= 10; $i++):?>
			<div class="row">
				<div class="span2">
					<img src="img/room_s.jpg" />
					<br />
					<br />
					<center><a class="btn" href="#">View details &raquo;</a></center>
					<br />
					<center><a class="btn btn-warning" href="#">Apply</a></center>
				</div>
				<div class="span4">
					<blockquote>
					  <p>Avaron</p>
					  <small>Awsome atomosphere</small>
					</blockquote>
					<p>Price: 2,000</p>
					<p>Place: Hiyoshi, Kohoku-ku, Yokohama</p>
					<p>Surfice: 1000m^2</p>
					<p>University: Keio University</p>
					<div class="row">
						<div class="span2">
							<p>Station: Hiyoshi</p>
							<p>Room: Single</p>
						</div>
						<div class="span2">
							<p>Kitchen: Personal</p>
							<p>Bathroom: Personal</p>
						</div>
					</div>
				</div>
			</div>
			<hr />
		<?php endfor;?>
	<div class="pagination">
	  <ul>
		<li><a href="#">Prev</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">Next</a></li>
	  </ul>
	</div>

		</div>
      </div>
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

