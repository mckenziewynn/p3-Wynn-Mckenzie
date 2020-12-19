<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  @font-face {
    font-family: gopher, sans-serif;
    font-weight: 700;
    font-style: normal;
  }

  @font-face {
    font-family: soleil, sans-serif;
    font-weight: 300;
    font-style: normal;
  }

  body {
    background-color: #FFEDE5;
    font-family: soleil, sans-serif;
  }

  .container {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
  }

  header nav a:hover {
    color: white;
    text-decoration: underline;
    text-decoration-color: black;
  }

  nav ul li {
    display: inline-block;
  }

  nav a {
    text-decoration: none;
    color: black;
    font-family: gopher, sans-serif;
    margin: 0 auto;
    font-size: 20px;
    text-align: center;
    font-weight: normal;
    padding: 0 60px;
  }

  ul {
    text-align: center;
    margin-top: 5%;
  }

  footer {
    font-family: soleil, sans-serif;
    font-size: 10px;
    color: black;
    padding: 20px;
    text-align: right;
    margin-top: 275px;
  }

</style>

<header>
    <nav>
      <ul>
        <li><a href="work.html">WORK</a></li>
        <li><a href="about.html">ABOUT</a><li>
        <li><a href="index.html">CONTACT</a><li>
      </ul>
    </nav>
  </header>
<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p>This page is designed by McKenzie Wynn</p>
</footer>
