<?php
	include 'header.php';
?>
<div id="fullpage">
	<div class="section " id="section0">
		<div class="intro">
			<h1>Index</h1>
			<p>Here will be list of categories.</p>
		</div>
	</div>
	<div class="section" id="section1">
		<div class="slide" id="slide1">
			<div class="intro">
				<h1>HAML</h1>
				<p>
					<textarea name="" id="" cols="30" rows="10"></textarea>
				</p>
			</div>
		</div>

		<div class="slide" id="slide2">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">

						<h1>PHP</h1>
						<h2>login</h2>
<pre class="text-left"><code class="php">
&#x3C;?php
session_start();

include &#x27;../db.php&#x27;;

$uid = $_POST[&#x27;uid&#x27;];
$pass = $_POST[&#x27;pass&#x27;];

$sql = &#x22;SELECT * FROM users WHERE uid=&#x27;$uid&#x27; AND pass=&#x27;$pass&#x27;&#x22;;

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){

} else {
&#x9;$_SESSION[&#x27;id&#x27;] = $row[&#x27;id&#x27;];
}

header(&#x22;Location: ../index.php&#x22;);
	</code></pre>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1>Enjoy it</h1>
		</div>
	</div>
</div>
<?php
	include 'footer.php';
?>