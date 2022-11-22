
<html>
	<head>
		<title>Basic Layout</title>		
		<link rel="shortcut icon" href="fav.png" type="image/x-icon"/>
		<style>		
			body{
				font-family: arial,helvetica;
				background: slategrey;
				margin: 0;
				padding: 0;
			}
			#wrapper{
				border: 0px solid black;
				width: 1000px;
				background: white;
				margin: 0 auto;
			}
			#header{
				background: crimson;
				color: white;
				height: 100px;
			}
			#header h1{
				padding: 30px 0 0 20px;
			}
			#menu{
				background: lightsalmon;
			}
			#menu ul{
				padding: 0;
				margin: 0;
			}
			#menu li{
				display: inline-block;
			}
			#menu li a{
				color: black;
				display: block;
				padding: 10px 13px;
				text-decoration: none;
			}
			#menu li a:hover{
				background: crimson;
				color: white;
			}
			#content{
				width: 800px;
				min-height: 500px;
				padding: 15px;
				float: left;
				box-sizing: border-box;
			}
			#sidebar{
				background: lightblue;
				width: 200px;
				min-height: 500px;
				float: right;
			}
			
			#sidebar a{
				color: black;
				text-decoration: none;
			}
			#footer{
				background: lightsalmon;
				clear: both;
				text-align: right;
				padding: 5px 10px;
			}
		</style>
	</head>
	
	<body>
		
    <?php
            include_once 'header.php';
            // include_once 'header.php';only one file included
            // include_once 'header.php';
           

    ?>
			<div id="content">
				<h2>Design Basic Layout</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc cursus vitae turpis.Curabitur aliquam tempus vel, cursus vitae turpis.Curabitur aliquam commodo dolor vulputate porttitor.Vivamus ut sodales lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc elit dolor, ornare in tempus vel, cursus vitae turpis.Curabitur aliquam commodo dolor vulputate porttitor.Vivamus ut sodales lacus, in semper libero. Phasellus malesuada tincidunt elit vitae feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc elit dolor, ornare in tempus vel, cursus vitae turpis.Curabitur aliquam commodo dolor vulputate porttitor.Vivamus ut sodales lacus, in semper libero. Phasellus malesuada tincidunt elit vitae feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc elit dolor, ornare in tempus vel, cursus vitae turpis.Curabitur aliquam commodo dolor vulputate porttitor.Vivamus ut sodales lacus, in semper libero. Phasellus malesuada tincidunt elit vitae feugiat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc cursus vitae turpis.Curabitur aliquam ornare in tempus vel, cursus vitae turpis.Curabitur aliquam commodo dolor vulputate porttitor.Vivamus ut sodales lacus, in semper libero. Phasellus malesuada tincidunt elit vitae feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc elit dolor, ornare in tempus vel, cursus vitae turpis.Curabitur aliquam commodo dolor vulputate porttitor.Vivamus ut sodales lacus, in semper libero. Phasellus malesuada tincidunt elit vitae feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc elit dolor, ornare in tempus vel, cursus vitae turpis.Curabitur aliquam commodo dolor vulputate porttitor.Vivamus ut sodales lacus, in semper libero. Phasellus malesuada tincidunt elit vitae feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nunc elit dolor, ornare in tempus vel, cursus vitae turpis.Curabitur aliquam commodo dolor vulputate porttitor.Vivamus ut sodales lacus, in semper libero. Phasellus malesuada tincidunt elit vitae feugiat.</p>
			</div>
		
		<?php
        include 'sidebar.php';
        ?>

<?php
        include 'footer.php';
        ?>
		</div>		
	</body>	
</html>

