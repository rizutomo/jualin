<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CSS User Profile Card</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js" crossorigin="anonymous"></script>
	<style>
		/* Add additional styling if needed */
		body {
			margin: 0;
			font-family: 'Arial', sans-serif;
			background-color: #f5f5f5;
		}

		.wrapper {
			display: flex;
			height: 100vh;
		}

		.left {
			flex: 1;
			background: #4e54c8;
			color: white;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center;
			padding: 20px;
			box-sizing: border-box;
		}

		.left img {
			border-radius: 50%;
			width: 150px;
			height: 150px;
			margin-bottom: 20px;
		}

		.right {
			flex: 2;
			padding: 20px;
			box-sizing: border-box;
		}
	</style>
</head>
<body>

<div class="wrapper">
    <div class="left">
        <img src="alex.png" alt="user" style="width: 150px; height: 150px;">
        <h4>Alex William</h4>
        <p>UI Developer</p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                <div class="data">
                    <h4>Email</h4>
                    <p>alex@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="projects">
            <div class="projects_data">
                <div class="data">
                    <h4>Address</h4>
                    <p>Surakarta, Central Java</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
