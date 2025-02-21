
<style>
	a,
	a:link,
	a:active,
	a:visited{
		color:#305a53;
	}
	
	.cor_links,
	.cor_links a,
	.cor_links a:link,
	.cor_links a:active,
	.cor_links a:visited,
	.cor_links a:focus{
		color:#305a53;
	}
	
	.cor_links a:hover{
		color:#0d1c1a	}
	
	.cor_links_categorias a,
	.cor_links_categorias a:link,
	.cor_links_categorias a:active,
	.cor_links_categorias a:visited,
	.cor_links_categorias a:focus{
		color:#305a53;
	}
	
	.cor_links_topo a:hover{
		color:#0d1c1a	}
	
	label[for="wa_toggle"]{
		background: #00b768 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iI2ZmZmZmZiI+PHBhdGggZD0iTTg2LDYuODhjLTQzLjYyNjA4LDAgLTc5LjEyLDM1LjQ5MzkyIC03OS4xMiw3OS4xMmMwLDEzLjYyMjQgMy41MTkxMiwyNy4wMTc3NiAxMC4xOTI3MiwzOC44Mzc2bC0xMC4wNjU0NCwzNS45MTM2Yy0wLjMzMDI0LDEuMTc5OTIgLTAuMDEwMzIsMi40NDU4NCAwLjg0MjgsMy4zMjMwNGMwLjY1NzA0LDAuNjc3NjggMS41NTE0NCwxLjA0NTc2IDIuNDY5OTIsMS4wNDU3NmMwLjI3NTIsMCAwLjU1Mzg0LC0wLjAzNDQgMC44MjU2LC0wLjA5OTc2bDM3LjQ4MjI0LC05LjI4NDU2YzExLjQ0NDg4LDYuMTQzODQgMjQuMzM0NTYsOS4zODQzMiAzNy4zNzIxNiw5LjM4NDMyYzQzLjYyNjA4LDAgNzkuMTIsLTM1LjQ5MzkyIDc5LjEyLC03OS4xMmMwLC00My42MjYwOCAtMzUuNDkzOTIsLTc5LjEyIC03OS4xMiwtNzkuMTJ6TTEyNS44MDA4LDExMy45MTkwNGMtMS42OTI0OCw0LjY4NTI4IC05LjgxMDg4LDguOTYxMiAtMTMuNzExODQsOS41MzU2OGMtMy41MDE5MiwwLjUxMjU2IC03LjkzMjY0LDAuNzMyNzIgLTEyLjc5NjgsLTAuNzk0NjRjLTIuOTQ4MDgsLTAuOTI4OCAtNi43MzIwOCwtMi4xNjAzMiAtMTEuNTc5MDQsLTQuMjI3NzZjLTIwLjM3NTEyLC04LjY4OTQ0IC0zMy42ODEwNCwtMjguOTQ3NiAtMzQuNjk5MjgsLTMwLjI4NTc2Yy0xLjAxNDgsLTEuMzM4MTYgLTguMjkzODQsLTEwLjg3Mzg0IC04LjI5Mzg0LC0yMC43NDMyYzAsLTkuODY5MzYgNS4yNDYsLTE0LjcyMzIgNy4xMTA0OCwtMTYuNzMyMTZjMS44NjQ0OCwtMi4wMDg5NiA0LjA2MjY0LC0yLjUxMTIgNS40MTgsLTIuNTExMmMxLjM1NTM2LDAgMi43MDcyOCwwLjAxNzIgMy44OTQwOCwwLjA3MjI0YzEuMjQ4NzIsMC4wNjE5MiAyLjkyNCwtMC40NzEyOCA0LjU3MTc2LDMuNDQzNDRjMS42OTI0OCw0LjAxNzkyIDUuNzU1MTIsMTMuODg3MjggNi4yNTczNiwxNC44OTUyYzAuNTA5MTIsMS4wMDQ0OCAwLjg0NjI0LDIuMTc3NTIgMC4xNzIsMy41MTU2OGMtMC42NzQyNCwxLjMzODE2IC0xLjAxMTM2LDIuMTc0MDggLTIuMDI5NiwzLjM0NzEyYy0xLjAxODI0LDEuMTczMDQgLTIuMTMyOCwyLjYxNDQgLTMuMDQ3ODQsMy41MTU2OGMtMS4wMTgyNCwxLjAwMTA0IC0yLjA3NDMyLDIuMDg0NjQgLTAuODkwOTYsNC4wOTM2YzEuMTgzMzYsMi4wMDg5NiA1LjI1OTc2LDguNTc1OTIgMTEuMzAwNCwxMy44OTQxNmM3Ljc1NzIsNi44MzE4NCAxNC4zMDM1Miw4Ljk1MDg4IDE2LjMzMzEyLDkuOTU1MzZjMi4wMjk2LDEuMDA0NDggMy4yMTY0LDAuODM1OTIgNC4zOTk3NiwtMC41MDIyNGMxLjE4MzM2LC0xLjM0MTYgNS4wNzc0NCwtNS44NTgzMiA2LjQyOTM2LC03Ljg2Mzg0YzEuMzUxOTIsLTIuMDA1NTIgMi43MDcyOCwtMS42NzUyOCA0LjU3MTc2LC0xLjAwNDQ4YzEuODY0NDgsMC42NjczNiAxMS44NTA4LDUuNTE3NzYgMTMuODgwNCw2LjUyMjI0YzIuMDI5NiwxLjAwNDQ4IDMuMzg0OTYsMS41MDY3MiAzLjg5NDA4LDIuMzQyNjRjMC41MDkxMiwwLjgzMjQ4IDAuNTA5MTIsNC44NTA0IC0xLjE4MzM2LDkuNTMyMjR6Ij48L3BhdGg+PC9nPjwvZz48L3N2Zz4=") no-repeat center center / 50%; 
		box-shadow: 0px 0px 10px rgb(0 17 48 / 34%); 
		z-index:999
	}
	#wa_toggle:checked ~ label[for="wa_toggle"]{
		background-color: #ff0000;
	}

	/*.wa_head{
		background:#305a53 !important; 
		color:#0d1c1a !important
	}*/

	.wa_head{
		background:#00b768 !important; 
		color:#fff !important
	}
	
	#menu-accessibility .chBut {
		background: #0d1c1a; 
		border-color: #0d1c1a;
	}
	
	.chBody a:hover{
		color:#0d1c1a !important
	}
	
	.navbar-nav .nav-link {
		color:#305a53;
	}
	
	.navbar-nav .nav-link:hover{
		color:#0d1c1a;
	}
	
	.nav-link_i{
		color:#0d1c1a	}
	.navbar-nav .nav-link:hover{
		color:#0d1c1a;
	}
	
	.dropdown-item:focus, .dropdown-item:hover {
		background:#305a53;
	}
	
	.menu-social-top > li > a,
	.menu-social-top > li > a:link,
	.menu-social-top > li > a:active,
	.menu-social-top > li > a:visited,
	.menu-social-top > li > a:focus{
		color:#0d1c1a;
	}
	
	.menu-social-bottom > li > a,
	.menu-social-bottom > li > a:link,
	.menu-social-bottom > li > a:active,
	.menu-social-bottom > li > a:visited,
	.menu-social-bottom > li > a:focus{
		background:#0d1c1a;
	}
	
	.menu-social-bottom > li > a:hover{
		color:#305a53;
	}
	
	.botoes-primaria-to-white,
	.botoes-primaria-to-white a,
	.botoes-primaria-to-white a:link,
	.botoes-primaria-to-white a:active,
	.botoes-primaria-to-white a:visited{
		background:#305a53;
		/*color:#0d1c1a !important;*/
		color:  #fff!important;
	}
	
	.botoes-primaria-to-white:hover,
	.botoes-primaria-to-white a:hover{
		color:#305a53 !important
	}



	/* branco para secundaria */
	.botoes-white-primaria,
	.botoes-white-primaria a,
	.botoes-white-primaria a:link,
	.botoes-white-primaria a:active,
	.botoes-white-primaria a:visited{
		background: #fff;
		/*color:#0d1c1a !important;*/
		color:  #000000!important;
	}
	
	.botoes-white-primaria:hover,
	.botoes-white-primaria a:hover{
		color:#305a53 !important;
		background: #0d1c1a;
		box-shadow: rgb(0 0 0 / 31%) 0px 3px 21px;
	}
	/* branco para secundaria */


	
	.botoes-primaria-to-secundaria,
	.botoes-primaria-to-secundaria a,
	.botoes-primaria-to-secundaria a:link,
	.botoes-primaria-to-secundaria a:active,
	.botoes-primaria-to-secundaria a:visited{
		background:#0d1c1a;
	}
	
	.botoes-primaria-to-secundaria:hover,
	.botoes-primaria-to-secundaria a:hover{
		background:#305a53;
		color:#fff !important
	}
	
	.botoes-secundaria-to-primaria,
	.botoes-secundaria-to-primaria a,
	.botoes-secundaria-to-primaria a:link,
	.botoes-secundaria-to-primaria a:active,
	.botoes-secundaria-to-primaria a:visited{
		background:#305a53;
		color: #fff!important;
	}
	
	.botoes-secundaria-to-primaria:hover,
	.botoes-secundaria-to-primaria a:hover{
		background:#0d1c1a;
	}
	
	.page-link:hover {
		background-color: #305a53;
		border-color: #305a53;
		color:#0d1c1a !important
	}
	
	.page-item > .page-link:hover > span > i{
		color:#0d1c1a	}
	
	.page-item.active .page-link {
		background-color: #0d1c1a;
		border-color: #0d1c1a;
	}
	
	.page-link:hover {
		color:#0d1c1a !important
	}
	
	.albuns_content_absolute_quantidade{
		background:#0d1c1a;
	}
	
	.albuns_content_absolute_botao{
		border-color: #0d1c1a !important;
	}
	
	.font-color-primaria{
		color:#305a53 !important;
	}
	.font-color-secundaria{
		color:#0d1c1a !important;
	}
	
	.border-color-primaria{
		border-color:#305a53 !important
	}
	.border-color-secundaria{
		border-color:#0d1c1a !important
	}
	
	.background-color-primaria{
		background:#305a53 !important
	}
	.background-color-secundaria{
		background:#0d1c1a !important
	}
	
	.owl-theme .owl-nav .owl-prev:hover,
	.owl-theme .owl-nav .owl-next:hover{
		background:#0d1c1a !important;
		color: #fff !important;
	}
	
	.owl-theme .owl-nav .owl-prev,
	.owl-theme .owl-nav .owl-next{
		background:#305a53 !important;
	}

	@media only screen and (max-width: 600px) {

		.bg-video-galeria{
		        background-size: cover!important;
   	 			background-position: 60% 10%!important;
	}	


	.bg-img-galeria{
		background-position: 73% 0%;
	}

	.margin-top-70-galeria-imagem {
    margin-top: 35px !important;
	}

	.padding-70-galeria-imagens{
	padding: 30px 30px 30px 30px!important;
	}

	.navbar-nav .nav-link {
		color:#305a53;
		width: 100%;
    	display: block!important;
    	margin-left: auto!important;
    	margin-right: auto!important;
		border-bottom: 1px solid #3333330f;
	}

	.hover-menu-navlink{
	  text-decoration: none !important;
	}

	.wid100{
		width: 100%!important;
	}

	.line-height-60-fotos {
    	line-height: 40px !important;
	}


	.font-size-40-fotos {
    	font-size: 30px !important;
	}

	.padding-bottom-70-videos {
    	padding-bottom: 35px!important;
	}

	.padding-top-80-videos {
    	padding-top: 50px!important;
	}



}/*responsivo*/


.carousel-indicators .active {
    background-color: #0d1c1a;  
    width: 30px;
    height: 3px;
	border: 0px solid #0d1c1a;
	border-radius: 50px;
}

.carousel-indicators li{

	background-color: #305a53;  
    width: 30px;
    height: 3px;
	border: 0px solid #0d1c1a;
	border-radius: 50px;

}


/* Barra de Rolagem */


/* Fundo que corre */
::-webkit-scrollbar-track {
    background-color: #F4F4F4;
}
/* Fundo que corre */

::-webkit-scrollbar {
    width: 15px;
    background: #F4F4F4;
}

/* Linha que desce */
::-webkit-scrollbar-thumb {
    background: #0d1c1a;
    border-radius: 50px;
	border: 2px solid #F4F4F4;
}
/* Linha que desce*/


/* Barra de Rolagem */



	.separador-1 {
		border: 3px solid #305a53;
		width: 60px;
		border-radius: 50px;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}



.nav-link_i_ativo{
	/*color:#305a53 !important;
	text-decoration: none!important;
	border-bottom: 0px!important;*/


}


.hover-menu-navlink{
	/*border-bottom: 2px solid #0d1c1a;
	text-decoration: underline 2px solid !important;*/
	color:#0d1c1a!important;
	font-weight: 400!important;
}


.bg-video-galeria{
    background-color: #305a53 !important;
    background-image: url(../../template/img/bg-svg-2.webp);
    background-size: 100%;
    background-position: 0px 25%;
    /*box-shadow: 0 1px 20px rgb(146 146 146);*/
}

.bg-img-galeria{
    background-color: #0d1c1a !important;
    background-image: url(../../template/img/bg-videos-2.webp);
    background-size: cover;
}

.padding-70-galeria-imagens{
	padding: 70px;
}

.margin-top-70-galeria-imagem {
    margin-top: 70px !important;
}



.line-height-60-fotos {
    	line-height: 45px;
	}


	.font-size-40-fotos {
    	font-size: 35px;
	}


	.padding-bottom-70-videos {
    	padding-bottom: 55px;
	}

	.padding-top-80-videos {
    	padding-top: 65px;
	}



.blog-etilo {
    box-shadow: 0 7px 15px rgb(0 0 0 / 13%);
    border-radius: 20px;
    padding: 0px 0px 40px 0px;
    margin-left: 0px;
    margin-right: 0px;
}

.border-radius-blog {
    border-radius: 15px 15px 0 0 !important;
}

.border-radius-galeria-foto {
    border-radius: 15px 15px 15px 15px !important;
}

.botao-sem-fundo{
    border: 1px solid #6a6a6a;
    color: #333!important;
    display: inline-block;
    padding: 10px 30px !important;
    font-size: 15px;
    font-weight: 300;
    border-radius: 50px;
}

.botao-sem-fundo:hover{
    background-color:  #305a53 !important;
    color: #fff!important;
    border: 1px solid #305a53 !important;
    box-shadow: rgb(0 0 0 / 31%) 0px 3px 21px;
}

.clientes-stilo {
    box-shadow: 0 7px 15px rgb(0 0 0 / 13%);
    border-radius: 20px;
    padding: 50px 10px 40px 10px;
    margin-left: 1px;
    margin-right: 1px;
}

.parceiros-stilo {
    box-shadow: 0 7px 15px rgb(0 0 0 / 13%);
    border-radius: 20px;
/*    padding: 5px;    */
    margin-left: 1px;
    margin-right: 1px;
}
.parceiros-stilo img{
    border-radius: 20px;
    margin-top: 10px;
}

.bg-contato {
    background-color: transparent !important;
    /*background-image: url(../../template/img/bg-svg-2.png);
    background-size: 120%;
    background-position: -15px 0%;
    box-shadow: 0 1px 20px rgb(146 146 146);*/
    box-shadow: 0 7px 15px rgb(0 0 0 / 13%);
    font-size: 17px;
    font-weight: 400;
    color: #333;
transition: 0.1s ease;
}

.bg-contato:hover {
    -webkit-transform: scale(1.08);
    -ms-transform: scale(1.08);
    transform: scale(1.08);

}

.bg-contato i {
	font-size: 35px;
	transition: 0.1s ease;


}
/*.bg-contato:hover > i {
		font-size: 45px;
    -webkit-filter: drop-shadow(1px 3px 3px rgba(0,0,0,.3));
    filter: drop-shadow(1px 3px 3px rgba(0 0 0 / 22%));
}*/


/*Link da bio*/
.menu-social-bio li .fa, .menu-social-bio li .go {
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: #0d1c1a;
}

.menu-social-bio li .fa:hover, .menu-social-bio li .go:hover {
	color: #0d1c1a;
}

.link-da-bio a{
    background-color: #0d1c1a;
    color: #fff;
    border: 5px solid #305a53;
}

.link-da-bio:hover a{
    background-color: #0d1c1a;
    color: #fff;
    border: 5px solid #0d1c1a;
}

.logo-bio {
    border: 5px solid #0d1c1a;
}

.cor-de-fundo-bio {
    background: linear-gradient(to right,rgb(0, 0, 0),#38b6ff);
}

.logo-bio a {
    background-color: #ffffff;
}


.breacrumb-novo{
	background:#0d1c1a!important;
    margin-left: 15px;
    margin-right: 15px;
    border-radius: 0 0 30px 30px;
    box-shadow: 0px 1.40066px 1.40066px rgb(0 0 0 / 14%), 0px 1.40066px 1.86755px rgb(0 0 0 / 12%), 0px 0.466887px 3.7351px rgb(0 0 0 / 20%);
    margin-bottom: 15px;
}

.breacrumb-novo-image{
	background-image: url(../../template/img/bg-videos-2.png)!important;
    background-size: cover!important;
}

.botao-blog{
	background-color: #0d1c1a;
}

.cta-menu {
    background-color: #305a53;
    box-shadow: 0px 1.40066px 1.40066px rgb(0 0 0 / 14%), 0px 1.40066px 1.86755px rgb(0 0 0 / 12%), 0px 0.466887px 3.7351px rgb(0 0 0 / 20%);
}
.cta-menu-desktop a, .cta-menu-mobile a{
    color: #fff!important;
}


@media only screen and (max-width: 600px) {
	.margin-content-section{
		margin-top: 0;	}
}

.dropdown-item.active,.dropdown-item:active{
	background-color:#305a53 !important
}

label.form-labels{
/*background: #305a53;
color: #ffffff;*/

background: #ffffff;
color: #c1c1c1;

}

.efeito-react {
        /* border-right: solid 5px #cdcdcd!important; */
    /* border-left: 1px solid #cdcdcd!important; */
    /* border-top: 1px solid #cdcdcd!important; */
    /* border-bottom: 5px solid #cdcdcd!important; */
    box-shadow: 0 7px 15px rgb(0 0 0 / 13%);
    border: inherit!important;
}

.carrinho-novo{
background-color: #305a53;

}


	.slide-botao,
	.slide-botao a,
	.slide-botao a:link,
	.slide-botao a:active,
	.slide-botao a:visited{
		background:#0d1c1a;
		color:#fff !important
	}
	
	.slide-botao:hover,
	.slide-botao a:hover{
		background:#305a53;
		color:#fff !important
	}
	
</style>