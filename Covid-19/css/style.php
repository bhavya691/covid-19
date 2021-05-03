<style type = "text/css">
html{
	scroll-behavior: smooth;
}
html,body{
    overflow-x: hidden; 
}
*{
	margin:0px;
	padding: 0px;
	box-sizing: border-box;
	font-family: 'Roboto', sans-serif;
}
.row{
	margin-left: 0!important;
	margin-right: 0!important;
}
.nav_style{
	background-color: #a29bfe;
	width: 100%!important;
}
.nav_style a{
	color: #fff;
}
.nav_but{
	background-color: #fff;
}
/*///////////main_header////////////*/
.main_header{
	width: 100%;
	height: 450;
}
.rightside h1{
	font-size: 4rem;
	margin-left:7rem;
	font-weight: 100;
}
.c_rotate img{
	animation: corotate 1s linear infinite;
}
a{
	font-size: 1.1rem;
}

a:hover{
	color: #0ff213;
}
.nav_c{
	margin-right: -3rem;
}
@keyframes corotate{
	0%{
		transform: rotate(0);
	}
	100%{
		transform: rotate(360deg);
	}
}
.leftside img{
	animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat{
	0%{transform: scale(.75);}
	20%{transform: scale(1);}
	40%{transform: scale(.75);}
	60%{transform: scale(1);}
	80%{transform: scale(.75);}
	100%{transform: scale(.75);}
}
.corona_update{
	margin: 0 0 30px 0;
}
.corona_update h3{
	color: #ff7675;
}
.corona_update h1{
	font-size: 3rem;
	text-align: center;
}
.ab_section{
	background-color: #fbfafd;
}
.footer_style{
	background-color: #000;
}
.footer_style p{
	margin-bottom: 0px;
}
#mybtn{
	display: none;
	position: fixed;
	cursor: pointer;
	z-index: 100;
	border: none;
	outline: none;
	border-radius: 10px;
	background-color: #00a8ff;
	color: #fff;
	bottom: 30px;
	right: 40px;
	padding: 10px;
}
#mybtn:hover{
	background-color: #606060
}

@media(max-width: 768px){
	.main_header{
		height: 700px;
		text-align: center;
	}
	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 2.1rem;
		margin-right: 7rem!important;

	}
	.count_style{
		display: inline!important;
	}
	.count_style p{
		text-align: center!important;
	}
	.im_about{
		margin-left: 0!important;
	}
	.ab_text{
		margin-left: 0!important;
	}
	.im_about img{
		margin-left: 0.4rem!important;
	}
	.mh_im{
		width:320px!important;
		height:320px!important;
		margin-right: 100px!important;
		margin-top: -6rem!important;
	}
}
</style>