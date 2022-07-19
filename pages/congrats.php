<html>
    <head>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

body {
	display: flex;
	background: #000;
	min-height: 100vh;
	align-items: center;
	justify-content: center;
}

.content {
	position: relative;
}

.content h2 {
	color: #fff;
	font-size: 4em;
	position: absolute;
	transform: translate(-33%, -200%);
}

.content h2:nth-child(1) {
	color: transparent;
	-webkit-text-stroke: 2px #03a9f4;
}

.content h2:nth-child(2) {
	color: #03a9f4;
	animation: animate 4s ease-in-out infinite;
}

@keyframes animate {
	0%,
	100% {
		clip-path: polygon(
			0% 45%,
			16% 44%,
			33% 50%,
			54% 60%,
			70% 61%,
			84% 59%,
			100% 52%,
			100% 100%,
			0% 100%
		);
	}

	50% {
		clip-path: polygon(
			0% 60%,
			15% 65%,
			34% 66%,
			51% 62%,
			67% 50%,
			84% 45%,
			100% 46%,
			100% 100%,
			0% 100%
		);
	}
}
        </style>
    </head>
    <body>
    <section>
	<div class="content">
		<h2>Congratulations</h2>
		<h2>Congratulations</h2>
	</div>
    </section>
    <div class="links">
        <a href="home.php">Proceed to view Dashboard in 'Report'</a>
    </div>
    </body>
</html>