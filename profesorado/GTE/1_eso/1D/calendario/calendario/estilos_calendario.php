<?php header("Content-type:text/css"); ?>
*{
	margin:0;
}
/*tabla / table*/
	table *{
		font-family:Arial, "Segoe Script";
	}
	table#calendario{
		position: relative;
		margin: auto;
		user-select: none;
		font-size:1.5em;
		font-family:Arial, "Segoe Script";
		text-align:center;
		border-collapse: collapse;
		top: 4em;
	}
/*alineaciÃ³n de los selects / alineation of the selects*/
	#calendario thead tr:first-child td:nth-child(2) > div, #calendario thead tr:first-child td:nth-child(3) > div{
		display: inline-block;
		padding: 0 5% 0 5%;
	}
/*cabecera / head*/
	#calendario thead > tr:first-child{
		background: linear-gradient(to left,rgb(0, 243, 255),rgb(0, 149, 255));
	}
	#calendario thead > tr:first-child td:first-child{
		border-radius:20px 0 0 20px;
	}
	#calendario thead > tr:first-child td:last-child{
		border-radius:0 20px 20px 0;
	}
	#calendario thead > tr:last-child td{
		border-bottom:1px solid rgba(0,0,0,.2);
		border-radius:20px;
	}
	/*botones adelante y atrÃ¡s / forward back buttons'*/
		#calendario thead tr:first-child td:first-child{
			color:white;
			position:relative;
		}
		#calendario thead tr:first-child td:last-child{
			color:white;
			position:relative;
			padding: 0;
		}
	/*selects*/
		 #calendario thead div{
		 	color:white;
		 }
		 #calendario thead span{
		 	padding:0 20%;
		 	cursor:pointer;
		 }
		 #calendario thead span:hover{
		 	background:rgba(0,0,0,.1);
		 	transition:.7s;
		 	border-radius:10px;
		 }

		 #calendario thead tr:first-child td:first-child+td ul{
		 	position: absolute;
		 	background:linear-gradient(to left,rgb(36, 0, 255),rgb(0, 189, 255));
		 	list-style:none;
		 	padding: 2%;
		 	border-radius:20px;
		 }
		  #calendario thead tr:first-child td:first-child ul{
		 	position: absolute;
		 	background:linear-gradient(to left,rgb(36, 0, 255),rgb(0, 189, 255));
		 	list-style:none;
		 	padding: 3%;
		 	border-radius:20px;
		  }
		 body table#calendario thead tr:first-child td:first-child ul{
		 	left: 34.7%;
		 }
		 body table#calendario thead tr:first-child td:first-child+td ul{
		 	right: 27.5%;
		 }
		 #calendario thead tr:first-child td:first-child+td ul li, #calendario thead tr:first-child td:first-child ul li{
		 	background:rgba(215, 215, 215, 0.8);
		 	cursor:pointer;
		 	text-align-last: center;
		 }
		 #calendario thead tr:first-child td ul li:first-child{
		 	border-radius:10px 10px 0 0;
		 }
		 #calendario thead tr:first-child td ul li:last-child{
		 	border-radius:0 0 10px 10px;
		 }
		 #calendario thead span:hover{
		 	background:rgba(0,0,0,.1);
		 }
		 #calendario thead tr:first-child td:first-child ul li:hover,#calendario thead tr:first-child td:first-child+td ul li:hover,#calendario thead tr:first-child td:first-child ul li[selected],#calendario thead tr:first-child td:first-child+td ul li[selected]{
		 	background:transparent;
		 }
		 #calendario thead ul{
		 	display: none;
		 }
	/*iconos / icons*/
		#calendario thead .fa-calendar-o{
			font-size:.8em;
			cursor:pointer;
		}
		#calendario thead .fa-calendar-o:hover{
			background:rgba(0,0,0,.1);
			padding:4% 20%;
			border-radius:10px;
			transition:.3s;
		}
		#calendario_div .fa-mail-reply, #calendario_div .fa-mail-forward{
			color:white;
			font-size:1.5em;
			position:absolute;
			z-index:5;
			cursor:pointer;
			display:block;
		}
		@keyframes saltos{
			0%{
				top:5%;
			}
			25%{
				top:-2%;
			}
			50%{
				top:5%;
			}
			75%{
				top:-2%;
			}
		}
		#calendario_div .fa-mail-reply:hover, #calendario_div .fa-mail-forward:hover{
			animation-name:saltos;
			animation-duration:.5s;
		}
		#calendario_div .fa-mail-reply{
			left: -6%;
			font-size: 1em;
		}
		#calendario_div .fa-mail-forward{
			right:-12%;
			top:5%;
			font-size:1em;
		}
/*cuerpo / body*/
	/*popup*/
		table#calendario tbody tr td > div{
			position:fixed;
			background:#e66300;
			background-image:url("jigon.png");
			background-repeat:no-repeat;
			background-size:30%;
			background-position:90% 95%;
			top:5%;
			left:30%;
			width:40%;
			height:90%;
			transform:scale(1.05);
			border-radius:0 20px 20px 0;
			z-index:12;
			box-shadow:0px 0px 30px rgba(0,0,0,.5);
			transform:rotateY(0deg);
			display: none;
		}
		#calendario tbody tr td > div > span{
			position:absolute;
			height:100%;
			left:0;
			width:20%;
			background:rgba(0,0,0,.2)
		}
		#calendario tbody tr td > div > div{
			position: absolute;
			width:98%;
			font-family: "Segoe Script";
			height:99%;
			background:#e2e2de;
			left:0;
			bottom:0;
			border-radius:0 20px 20px 0;
			z-index:12;
			overflow: auto;
		}
		/*Barra de desplazamiento del sitio web / website's scrollbar*/
			#calendario tbody tr td > div > div::-webkit-scrollbar-track
			{
			  box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
			 background-color:transparent
			}
			#calendario tbody tr td > div > div::-webkit-scrollbar
			{
				width: 12px;
				background-color: none;
				border: none;
			}

			#calendario tbody tr td > div > div::-webkit-scrollbar-thumb
			{
				border-radius: 10px;
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
				background-color: #c5c5ba;
			}
		#calendario tbody tr td > div > div:before{
			content:"";
			position: absolute;
			top:0;
			left:0;
			opacity:.5;
			width:100%;
			height:100%;
			background:url("jigon.png");
			background-size: 20%;
			background-repeat:no-repeat;
			background-position: 95% 5%;
		}
		#calendario tbody tr td > div > div i{
			font-size:1.5em;
			position:absolute;
			top:2%;
			left:3%;
			opacity:.1;
			cursor:pointer;
			z-index: 13;
		}
		#calendario tbody tr td > div > div .fa-caret-left {
			position: fixed;
			left: 3%;
			font-size:2em;
			top: 10%;
		}
		#calendario tbody tr td > div > div .fa-caret-right {
			position: fixed;
			left: 91%;
			font-size:2em;
			top: 10%;
		}
		#calendario tbody tr td > div > div div{
			position: relative;
			text-align:left;
			left:0;
			width:100%;
			height:4%;
			border-bottom: 1px solid rgba(0,0,0,.5);
		}
		#calendario tbody tr td > div > div div span{
			font-family:"Segoe Script";
			margin:0 5%;
		}
		#calendario tbody tr td > div > div h2{
		    position: relative;
		    top: 3.5%;
		    text-align: center;
		    font-size: 1.5em;
		    font-family: "Segoe script";
		    margin: auto;
		}
		#calendario tbody tr td > div > div p:not(:nth-child(2)){
			font-size:1em;
			text-align:left;
			font-family:"Segoe Script";
			margin:5% 0 0 3%;
		}
		#calendario tbody tr td > div > div p:nth-child(2){
			font-size:1.5em;
			font-family:"Segoe Script";
		}
		#calendario tbody tr td > div > div .fecha{
			text-align:right;
		}
		#calendario .titulo, #calendario .id{
			text-align:left;
		}
	/*casillas / cells*/
		body table#calendario tbody td{
			width:110px;
			height:110px;
			border-radius:10em;
		}
		#calendario tbody td[data-fecha]:hover{
			background:#DDDDDD;
			transition:.7s;
		}
		#calendario tbody td[data-fecha]:not(:hover){
			transition:.7s;
		}
	/*vacaciones / holidays*/
		#calendario tbody td[data-navidad]{
			background: #81F781;
		}
		#calendario tbody td[data-pascua]{
			background: #F2F5A9;
		}
		#calendario tbody td[data-inicio]{
			background: #F78181;
		}
		#calendario tbody td[data-festivos]{
			background: #E2A9F3;
		}
	/*hoy / today*/
	#calendario tbody td[data-fecha='<?php echo date("Y-n-j"); ?>']{
		background:#DDDDDD;
	}
	#calendario tbody td[data-num-eventos],#calendario tbody td[data-evento]{
		background: #B9FFFF;
	}
@media screen and (max-width:768px){
	/*popup*/
		body table#calendario tbody tr td > div{
			position:fixed;
			background:#e66300;
			background-image:url("jigon.png");
			background-repeat:no-repeat;
			background-size:30%;
			background-position:90% 95%;
			top:5%;
			left: 10%;
			width: 70%;
			height:90%;
			transform:scale(1.05);
			border-radius:0 20px 20px 0;
			z-index:1001;
			box-shadow:0px 0px 30px rgba(0,0,0,.5);
			transform:rotateY(0deg);
			display: none;
		}
}
@media screen and (max-width:600px){
	body #calendario_div > div:last-child{
		display: none;
	}
	/*calendario*/
		body table#calendario{
			position: relative;
			margin: auto;
			width: 180%;
			user-select: none;
			font-size:2.5em;
			font-family:Arial, "Segoe Script";
			text-align:center;
			border-collapse: collapse;
			top: 2em;
			left: 10%;
		}
	/*alineaciÃ³n de los selects / alineation of the selects*/
		body #calendario thead tr:first-child td:nth-child(2) > div, #calendario thead tr:first-child td:nth-child(3) > div{
			display: inline-block;
			padding: 0% 5%;
		}
	}
	/*ancho de las celdas / cell's height*/
		body .calendario tbody td{
			width: 100px;
			height: 130px;
		}
	/*selects*/
		 body #calendario thead div{
		 	color:white;
		 }
		 body #calendario thead span{
		 	padding:0 20%;
		 	cursor:pointer;
		 }
		 body #calendario thead span:hover{
		 	background:rgba(0,0,0,.1);
		 	transition:.7s;
		 	border-radius:10px;
		 }

		 body #calendario thead tr:first-child td:first-child+td ul{
		 	position: absolute;
		 	background:linear-gradient(to left,rgb(36, 0, 255),rgb(0, 189, 255));
		 	list-style:none;
		 	padding: 2%;
		 	border-radius:20px;
		 }
		  body #calendario thead tr:first-child td:first-child ul{
		 	position: absolute;
		 	background:linear-gradient(to left,rgb(36, 0, 255),rgb(0, 189, 255));
		 	list-style:none;
		 	padding: 3%;
		 	border-radius:20px;
		  }
		 body #calendario thead tr:first-child td:first-child ul{
		 	left: 30%;
		 }
		 body #calendario thead tr:first-child td:first-child+td ul{
		 	right: 22%;
		 }
		 body #calendario thead tr:first-child td:first-child+td ul li, #calendario thead tr:first-child td:first-child ul li{
		 	background:rgba(215, 215, 215, 0.8);
		 	cursor:pointer;
		 	text-align-last: center;
		 }
		 body #calendario thead tr:first-child td ul li:first-child{
		 	border-radius:10px 10px 0 0;
		 }
		 body #calendario thead tr:first-child td ul li:last-child{
		 	border-radius:0 0 10px 10px;
		 }
		 body #calendario thead span:hover{
		 	background:rgba(0,0,0,.1);
		 }
		 body #calendario thead tr:first-child td:first-child ul li:hover,#calendario thead tr:first-child td:first-child+td ul li:hover,#calendario thead tr:first-child td:first-child ul li[selected],#calendario thead tr:first-child td:first-child+td ul li[selected]{
		 	background:transparent;
		 }
		 body #calendario thead ul{
		 	display: none;
		 }
	/*popup*/
		body table tbody tr td > div{
			width: 100%;
		}
		#calendario tbody tr td > div > span{
			position:absolute;
			height:100%;
			left:0;
			width:20%;
			background:rgba(0,0,0,.2)
		}
		#calendario tbody tr td > div > div{
			position: absolute;
			width:98%;
			font-family: "Segoe Script";
			height:99%;
			background:#e2e2de;
			left:0;
			bottom:0;
			border-radius:0 20px 20px 0;
			z-index:12;
			overflow: auto;
		}
		/*Barra de desplazamiento del calendario / calendar's scrollbar*/
			#calendario tbody tr td > div > div::-webkit-scrollbar-track
			{
			  box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
			 background-color:transparent
			}
			#calendario tbody tr td > div > div::-webkit-scrollbar
			{
				width: 12px;
				background-color: none;
				border: none;
			}

			#calendario tbody tr td > div > div::-webkit-scrollbar-thumb
			{
				border-radius: 10px;
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
				background-color: #c5c5ba;
			}
		#calendario tbody tr td > div > div:before{
			content:"";
			position: absolute;
			top:0;
			left:0;
			opacity:.5;
			width:100%;
			height:100%;
			background:url("jigon.png");
			background-size: 20%;
			background-repeat:no-repeat;
			background-position: 95% 5%;
		}
		#calendario tbody tr td > div > div i{
			font-size:1.5em;
			position:absolute;
			top:2%;
			left:3%;
			opacity:.1;
			cursor:pointer;
			z-index: 13;
		}
		#calendario tbody tr td > div > div .fa-caret-left {
			position: fixed;
			left: 3%;
			font-size:2em;
			top: 10%;
		}
		#calendario tbody tr td > div > div .fa-caret-right {
			position: fixed;
			left: 91%;
			font-size:2em;
			top: 10%;
		}
		#calendario tbody tr td > div > div div{
			position: relative;
			text-align:left;
			left:0;
			width:100%;
			height:4%;
			border-bottom: 1px solid rgba(0,0,0,.5);
		}
		#calendario tbody tr td > div > div div span{
			font-family:"Segoe Script";
			margin:0 5%;
		}
		#calendario tbody tr td > div > div h2{
		    position: relative;
		    top: 3.5%;
		    text-align: center;
		    font-size: 1.5em;
		    font-family: "Segoe script";
		    margin: auto;
		}
		#calendario tbody tr td > div > div p:not(:nth-child(2)){
			font-size:1em;
			text-align:left;
			font-family:"Segoe Script";
			margin:5% 0 0 3%;
		}
		#calendario tbody tr td > div > div p:nth-child(2){
			font-size:1.5em;
			font-family:"Segoe Script";
		}
		#calendario tbody tr td > div > div .fecha{
			text-align:right;
		}
		#calendario .titulo, #calendario .id{
			text-align:left;
		}
}