<!DOCTYPE html>
	<html>
		<head>
			<style>
				.navbar {
				overflow: hidden;
				background-color: #FF0000;
				font-family: Arial, Helvetica, sans-serif; }

				.navbar a {
				float: left;
				font-size: 16px;
				color: orange;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;   }

				.dropdown {     float: left;
				overflow: hidden;  }

				.dropdown .dropbtn {
				font-size: 16px;    
				border: none;
				outline: none;
				color: orange;
				padding: 14px 16px;
				background-color: inherit;
				font-family: inherit;
				margin: 0;      }
				.navbar a:hover, .dropdown:hover .dropbtn {
				background-color: / #fed8b1;
				}

				.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
				}

				.dropdown-content a {
				float: none;
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
				}

				.dropdown-content a:hover {
				background-color: #ddd;
				}

				.dropdown:hover .dropdown-content {
				display: block;
				}
				
			</style>
		</head>
		<body>
			<div class = "navbar">
				<a href = "#">HOME</a>
				<div class = "dropdown">
					<button class = "dropbtn" > ADMINS</button>
					<div class = "dropdown-content">
						<a href = "Registeradmin.php" >Register admin</a>
						<a href = "editFadmin.php" >Edit admin details</a>
					</div>
				</div>
				<div class = "dropdown">
					<button class = "dropbtn" >PATIENTS</button>
					<div class = "dropdown-content">
						<a href = "Registerpatients.php" >Register patients</a>
						<a href = "editstudents.php" >Edit patients</a>
					</div>
				</div>
				<div class = "dropdown">
					<button class = "dropbtn" >RECORDS</button>
					<div class = "dropdown-content" >
						<a href = "Records.php" >View Records</a>
					</div>
				</div>
				<div class = "dropdown" >
					<button class = "dropbtn" >REPORTS</button>
					<div class = "dropdown-content" >
						<a href = "#" >Complaints </a>
					</div>
				</div>
			</div>
		</body>
	</html>
