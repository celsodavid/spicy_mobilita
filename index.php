<?php 
define('base_url', 'www.mobilitapatriani.com.br');
//define('base_url', 'www.spicytracking.com.br/web/mobilita/');
//define('base_url', 'localhost/mobilita');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="index,follow" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://<?php echo base_url; ?>/assets/images/favicon.ico" rel="shortcut icon" type="image/ico" />
		<title>Mobilità Patriani</title>
		<link rel="stylesheet" href="assets/css/style.css" />
		<!--[if IE 9]>
			<link href="assets/css/style-ie.css" rel="stylesheet" type="text/css">			
		<![endif]-->		
		<!--[if !IE]><!--><script>
		if (/*@cc_on!@*/false) {
		    document.documentElement.className+='ie10';
		}
		</script><!--<![endif]-->
		<script type="text/javascript" src="assets/js/jquery-1.10.1.js"></script>
		<script type="text/javascript" src="assets/js/jquery.clearinput.js"></script>
		<script type="text/javascript">
			$(function(){
				var larguraSlide = $(".lista_slide").width();
				var slide = 0;
				var posicaoSlide = 0;
				
				$(".slideEsquerda").on('click',function(){
					
					if(posicaoSlide != 0)
					{
					slide = slide-1;
					var title = $(".lista_slide li:eq("+slide+") img").attr("title");
					var subtitle = $(".lista_slide li:eq("+slide+") img").attr("alt");
					$(".tituloLazer").fadeOut(function() {$(this).html(title).fadeIn();});
					$(".sub_lazer2").fadeOut(function() {$(this).html(subtitle).fadeIn();});
					posicaoSlide = posicaoSlide+691;
					$(".lista_slide").animate({left:posicaoSlide}, 500);
					}
					return false;
				});
				$(".slideDireita").on('click',function(){
					if(posicaoSlide != "-6219")
					{
						
					slide = slide+1;
					var title = $(".lista_slide li:eq("+slide+") img").attr("title");
					var subtitle = $(".lista_slide li:eq("+slide+") img").attr("alt");
					$(".tituloLazer").fadeOut(function() { $(this).html(title).fadeIn();});
					$(".sub_lazer2").fadeOut(function() {$(this).html(subtitle).fadeIn();});
					posicaoSlide = posicaoSlide-691;
					$(".lista_slide").animate({left:posicaoSlide}, 500);
					}
					return false;
				});
				
				$('#btnEnviar').on('click',function(){
					/*alert($('#form_contato').serialize());*/
					$.ajax({
						type: 'post',
						url: 'contato.php',
						data:{info:$('#form_contato').serialize()},
						success:function(data){
							alert(data);
							//window.location.reload();
							$("#form_contato input").val('');
							$("#form_contato textarea").val('');
						},
						error:function(){
							alert('O servidor está temporariamente fora do ar. \n Tente novamente mais tarde.');
						}
					});
					return false;
				});

				 $(".menu li").on("click",function(){
				    var local = $("a",this).attr("rel");
				    $(".conteudo").animate({left:local}, 500);
				    var active = $("a",this).attr("rev");
				    $("li a").removeClass();
				    $("li."+active+" a").addClass("active-"+active);
				    return false;
				   });
				$(".abrirPop").on("click",function(){
					var i = $(this).attr("href");
					$("."+i).slideDown();
					return false;
				});
				$(".fecharPop").on("click",function(){
					$("."+$(this).attr("href")).slideUp();
					return false;
				});

				var cont = 0;
				var define = setInterval(function(){
					if(cont >= 10)
					{
						$(".popup_mob").slideUp();	
						clearInterval(define);									
					}
					else
					{
						$(".popup_mob").slideDown();												
						cont++;							
						return false;							
					}
				}, 2000);
							
				$(".closed").on("click",function(){
					$(".popup_mob").slideUp();
					clearInterval(define);
					return false;
				});
				
				<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == true): ?>	
							
							$('.statusNome').clear();
							$('.statusEmail').clear();
							$('.statusTelefone').clear();
							$('.statusMensagem').clear();
													
				<?php endif; ?>
			});
		</script>		
	</head>
	<body>
	
		<header>
			<h1>
				<img class="img_header" src="assets/images/logoMobilita.png" title="Mobilità" alt="Mobilità">
			</h1>
		</header>
	
		<nav>
			<ul class="menu">
		        <li class="home"><a class="active-home" href="#home" rel="0px" rev="home">Home</a></li>
		        <li class="localizacao"><a href="#localizacao" rel="-1600px" rev="localizacao">Localização</a></li>
		        <li class="projeto"><a href="#projeto" rel="-3080px" rev="projeto">Projeto</a></li>
                <li class="lazer"><a href="#lazer" rel="-4610px" rev="lazer">Lazer</a></li>
                <li class="apartamento"><a href="#apartamento" rel="-6140px" rev="apartamento">Seu apartamento</a></li>
                <li class="diferenciais"><a href="#diferenciais" rel="-7670px" rev="diferenciais">Diferenciais</a></li>
                <li class="realizacoes"><a href="#realizacoes" rel="-9200px" rev="realizacoes">Realizações</a></li>
                <li class="contato"><a href="#contato" rel="-10620px" rev="contato">Contato</a></li>
      		</ul>
		</nav>
	
	
		<section class="geral">
	
			<section class="conteudo">
	
				                       <!--HOME-->
	
				<article id="home" class="home">
	
					<img class="faxada" src="assets/images/img_faxada2.png" alt="Perspectiva ilustrada da Fachada" title="Perspectiva ilustrada da Fachada" />
	
					<aside class="titulo_h2">
				    <h2>MAIS UM LANÇAMENTO PATRIANI</br> 
					<span class="txt1">EM SANTA TEREZINHA</br>
                    SANTO ANDRÉ</span></h2>
                    
                      

				    </aside>

					<img class="familia" src="assets/images/img_familia.png" alt="" title="" />
					
					
	
				</article>
	
				                     <!--LOCALIZAÇÂO-->
				<article id="localizacao" class="localizacao">
	
					 <aside id="loca">
            	      <h3>Santa Terezinha. Um show de localização.</br>
                      Com tudo perto para facilitar seu dia a dia</h3> 
					  <a href="popup_local" class="abrirPop"><img class="localizacao" src="assets/images/fotoAerea.png" alt="Conheça o Local" title="Clique aqui e conheça o local" /></a>
                     </aside>
                     
                     <aside class="id_mapa">
					    <img class="seta" src="assets/images/seta.png" alt="" title="" />
					    <p class="saiba_mais"><a href="popup_saibamais" class="abrirPop">clique aqui e saiba mais</a></p>

					    <a href="http://www.cptm.sp.gov.br/E_REDECPTM/REDE/default.asp" target="_blank"><img class="cptm" src="assets/images/cptm.png" alt="Clique aqui para visualizar 
o mapa do trem" title="Clique aqui para visualizar 
o mapa do trem"/>



                        <p class="txt_mapa1">Alameda São Bernardo, 143 - Santa Terezinha</p>
						<a href="https://maps.google.com.br/maps?newwindow=1&q=Alameda%20S%C3%A3o%20Bernardo%2C%20143%20-%20Santa%20Terezinha&um=1&ie=UTF-8&hl=pt-BR&sa=N&tab=wl" target="__blank"><img class="mapa" src="assets/images/mapa.png" alt="Mapa do Local" title="Mapa do Local" /></a>
						<p class="txt_mapa2">Clique na imagem acima para</br> 
					    visualizar como chegar no local</p>
                     </aside>

					  <aside style="display:none" class="popup_saibamais" >
                      <a href="popup_saibamais" class="fecharPop"><img class="xxx" src="assets/images/popup_SaibaMais.png" alt="Fechar" title="Fechar"/></a></aside> 

     
                      <aside style="display:none" class="popup_local" ><a href="popup_local" class="fecharPop"><img class="xxx" src="assets/images/popup_fotoAerea.png" alt="" title="" /></a></aside>                    	
                    
                    

				</article>
				                       <!--PROJETO-->
	
				<article id="projeto" class="projeto">
	
					<aside class="txt_projeto">
                     <h3>UM PROJETO INOVADOR</br>
			         <span class="subtitulo">TORRE ÚNICA COM VISTA PARA TODOS OS LADOS,</br>
				     criado por alguns dos maiores profissionais do mercado.</span></h3>
                    </aside>
	
					<aside class="col_proj1">
	
						<aside id="arq">
	
							<p class="cont_arq">
								<img src="assets/images/arq1.png" alt="Samantha Martino Arquiteta"
									title="Samantha Martino Arquiteta"/ ></br>
								<span style="color: #900d26">Samantha Martino</span></br>Arquiteta
							</p>
	
							<p class="text_arq">“Fui convidada pela Patriani para fazer o projeto de arquitetura do Mobilità. Recebi a missão de criar um apartamento surpreendente, diferente dos que existem no mercado, que valorizasse ambientes claros e ventilados. Após inúmeros estudos, chegamos a um projeto em que o terraço é integrado com o espaço gourmet e cozinha, o que possibilita maior iluminação natural. A área de serviço tem mureta com vidro jateado que proporciona mais privacidade ao morador. Todos os banheiros têm iluminação e ventilação naturais e a suíte ainda conta com seu próprio terraço. O Mobilità ficou um espetáculo. Estou orgulhosa de ter assinado este projeto, pois o Mobilità é um dos melhores apartamentos da região do ABC, em sua categoria."</p>
						</aside>
	
						<aside id="arq">
	
							<p class="cont_arq">
								<img src="assets/images/arq2.png" alt="Eduardo Mera Paisagista"
									title="Eduardo Mera Paisagista"/ ></br>
								<span style="color: #900d26">Eduardo Mera</span></br>Paisagista
							</p>
	
							<p class="text_arq">“Quando a Patriani convidou a Mera Arquitetura Paisagística para criar o projeto das áreas externas do Mobilità, recebemos o desafio de transformá-las em ambientes de lazer e de utilidade para os moradores. A Patriani se incomoda quando visita prédios e percebe que estes espaços são mal aproveitados e sem charme. Nosso projeto transformou em áreas úteis todos os espaços que normalmente acabam ficando ociosas. Nossa solução foi ampliar os espaços internos para as áreas externas, maximizando seu uso.

Para a brinquedoteca, criamos um piso emborrachado e colorido para as crianças. Fizemos também um Free Dog e um Dog Wash para as famílias passearem e lavarem seus bichinhos. Belas piscinas adulto e infantil com deck molhado, para o conforto das mães e segurança das crianças também compuseram o projeto. Para completar, elaboramos um exclusivo Sushi Table ao ar livre, com decoração japonesa, e uma pista de cooper para os moradores começarem bem seus dias. Tudo isso foi somado a um belo paisagismo, e tornaram o Mobilità um empreendimento inovador e extremante agradável.”</p>
						</aside>
	
						
	
					</aside>
	
					<aside class="col_proj2">
						<a href="popup_projeto" class="abrirPop"><img src="assets/images/img_faxada3.png" alt="Perspectiva ilustrada da Fachada" title="Perspectiva ilustrada da Fachada" /></a>
					</aside>

					 <aside style="display:none" class="popup_projeto" >
                      <a href="popup_projeto" class="fecharPop"><img class="xxx_projeto" src="assets/images/popup_faxada.png" alt="" title="" /></a>

                      </aside> 
	
				</article>
	
	                                  <!--LAZER-->
                                      
             <article id="lazer" class="lazer">
                        
                        <aside class="txt_lazer">
                         <h3>TERRENO COM MAIS DE 1.900 m² de Lazer</br></h3>
                        </aside>
                        
                     <aside class="slide_geral">

                     	        <aside class="seta_esq">
									<a href="#" class="slideEsquerda"><img class="ali_seta" src="assets/images/esquerda.png"/></a>
								</aside>
								
								<aside class="seta_diret">
									<a href="#" class="slideDireita"><img class="ali_seta" src="assets/images/direita.png"/></a>
								</aside>
                            
                            <nav id="slide">
								
                            	<ul class="lista_slide">

                                  <li class="piscina"><img width="690" src="assets/images/Piscina.png" alt="Piscinas adulto e infantil com deck molhado e solarium para aproveitar os dias mais quentes." title="Dê um bom mergulho e comece o dia com Movimento Total.
 
" /></li>
                                  <li class="sushi"><img width="690" src="assets/images/Sushi-table.png" alt="Espaço temático com exclusiva decoração japonesa ao ar livre criada para tornar sua celebração ainda mais divertida.
" title="Sushi Table. Para Receber seus amigos com muito mais estilo." /></li> 

                       <li class="playground"><img width="690" src="assets/images/Playground.png" alt="Área de lazer infantil cuidadosamente decorada com piso emborrachado, piscina de bolinha, casa das bonecas, gangorra e big playground. Conta com exclusiva ciclovia kids para os baixinhos brincarem à vontade com muita segurança.
" title="Mais espaço para seus filhos fazerem aquilo que mais gostam:Brincar.

" /></li>

                                  <li class="churrasqueira"><img width="690" src="assets/images/churrasqueira.png" alt="Duas churrasqueiras cobertas e equipadas com pia, bancada, armários,mesas e guarda-sol, para receber com muito conforto seus convidados.
" title="Seus Churrascos com mais espaço, praticidade e diversão.
" /></li>

                              <li class="dog"><img width="690" src="assets/images/Free-Dog.png" alt="Para seu pet, muito mais conforto: Leve-o para passear no Free Dog e depois lave as patinhas no Dog Wash antes de subir para o apartamento.
" 
                              title="Seus dias vão ganhar mais praticidade. Inclusive na hora de dar aquela atenção ao seu bichinho.
" /></li>

                              <li class="jogos"><img width="690" src="assets/images/salao_jogos.png" alt="Alegria aqui é o que não falta! Salão de jogos com mesa de Air Play, Pebolim e mesa de jogos.
" 
                              title="Jogos para você não ficar parado nem um minuto.
" /></li>

                               <li class="fitness"><img width="690" src="assets/images/fitness.png" alt="Fitness Center entregue equipada com aparelhos de última geração, TV e totalmente decorada. Um show de academia!
" 
                              title="Aqui a palavra de ordem é movimentar o corpo e cuidar da sua saúde.
" /></li>

                              <li class="spa"><img width="690" src="assets/images/spa_lazer.png" alt="Spa com sala de massagem, sauna, hidromassagem, ducha circular e área de descanso. Relaxe num verdadeiro spa sem sair de casa.

"                             title="Mobilidade faz parte do seu dia a dia. relaxamento, também.
" /></li>
							
							<li class="brinquedoteca"><img width="690" src="assets/images/brinquedoteca.png" alt="Um espaço superdivertido para os seu filhos curtirem pra valer!  Brinquedoteca com decoração lúdica, equipada com TV LCD, videogames e DVD.

" title="Mais diversão e ação para a garotada aproveitar a melhor fase da vida.

" /></li>

							<li class="salaodefestas"><img width="690" src="assets/images/salaodefestas.png" alt="Salão de festas com lounge de apoio, equipado com espaço gourmet e integrado à pista de dança com globo espelhado. Um show de sofisticação."
							title="Um lugar especial para grandes comemorações.

"/></li>
                                </ul> 

                            </nav>
                            
                           
                             <aside class="txt_lazer2">
                               <p><span span style="text-transform:uppercase;" class="tituloLazer">Dê um bom mergulho e comece o dia com Movimento Total.</span> </br>
                               <span class="sub_lazer2">Piscinas adulto e infantil com deck molhado e solarium para aproveitar os dias mais quentes.</span></p>
                             </aside>
							
						

                             <aside class="txt_lazer3">
                               <a href="popup_lazer" class="abrirPop"><img src="assets/images/mapa2.png" alt="Planta da Área de Laser" title="Planta da Área de Laser" /></a>
                               <p class="txt_mapa3 "><a href="popup_lazer" class="abrirPop">Clique na imagem</a> acima para</br> 
					           visualizar a planta da área de lazer</p>
                              </aside>
                    
                     
                      <aside style="display:none" class="popup_lazer" >
                     <a href="popup_lazer" class="fecharPop"> <img class="xxx" src="assets/images/popup_plantaLazer.png" alt="" title="" /></a>
            
                      </aside> 
                         

            </article> 
                                      
                               
                                      
				
	
				                  <!--SEU APARTAMENTO-->
	
				<article id="apartamento" class="apartamento">
	
					<aside class="txt_projeto">
						<h3>
							UM SHOW DE apartamento</br> <span class="subtitulo"><span
								class="number">80</span> m²  privativos - <span class="number">3</span> Dorms. (1 suíte com
								varanda)</br> Espaço Gourmet integrado com a cozinha e terraço</span>
						</h3>
					</aside>
	
	
					<aside class="img_apartamento">
						<img src="assets/images/img_apartamento.png" alt="Perspectiva ilustrada do Living" title="Perspectiva ilustrada do Living" />
					</aside>
	
					<aside class="mapa_ap">
						<img src="assets/images/carimbo.png" alt="Planta do Apartamento" title="Planta do Apartamento"/>
						<p>
							<span class="subTitulo_ap">DEPOIS DE TANTA MOBILIDADE, NADA COMO O
								CONFORTO</br> DO LAR.
							</span>
						</p>
	
						<p>Visite lindo apartamento decorado com dicas e sugestões de praticidade de muito bom gosto para você viver num ambiente bonito e aconchegante.</p>
	
						<a href="popup_apartamento" class="abrirPop">Clique na imagem para visualizar a planta do
						apartamento <span style="float: left;"><img
								src="assets/images/img_apartamento_mapa.png" alt="Planta do Apartamento" title="Planta do Apartamento" /></span></a>
					</aside>
                    
                      <aside style="display:none" class="popup_apartamento">
                      <a href="popup_apartamento" class="fecharPop"><img class="xxx" src="assets/images/popup_apartamento.png" alt="" title="" /></a>
                      
                    
                     
                      
                      </aside>
	
				</article>
	
	
                       
    
				                     <!--DIFERENCIAIS-->
	<article id="diferenciais" class="diferenciais">
	
	
					<aside class="txt_projeto">
						<h3>
							SUSTENTABILIDADE E ACESSIBILIDADE.</br> PATRIANI: AJUDANDO A
							CONSTRUIR UM MUNDO MELHOR.
						</h3>
					</aside>
	
	     <aside class="col_proj3">
				
						<aside id="comeco">
	<aside class="coluna_esquerda">
							<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img"></div>
                                <span class="subTit_difer">Coleta Seletiva</span></br>
								<p class="txt_difer">
									Entregaremos o prédio com lugar reservado para o deposito de materiais recicláveis, incentivando a preservação do meio ambiente. </br> <span style="color: #900d26;">Vantagem:</span> As lixeiras, no total de 4, destinadas à coleta seletiva, serão entregues junto com o prédio. Algumas construtoras não entregam estas lixeiras, deixando para o condomínio comprar. Mais uma preocupação da Patriani com o meio ambiente e com a economia do condomínio.

								</p>
							</aside>
							<!--FIM DO CONTEUDO-->
                            <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_sp"></div>
                                <span class="subTit_difer">Sensores de presença</span></br>
								<p class="txt_difer">
                                Entregaremos o prédio com sensores de presença no hall dos elevadores e escadas, evitando que as lâmpadas fiquem acesas o tempo todo.<br>
<span style="color: #900d26;">Vantagem:</span>  Sensores de presença é economia para o condomínio e preocupação com o meio ambiente. Algumas construtoras não entregam os prédios com sensores de presença.

								</p>
							</aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_ap"></div>
                                <span class="subTit_difer">Reaproveitamento de água</br> de chuva</span></br>
								<p class="txt_difer">
                                Entregaremos o prédio com sistema de captação e reaproveitamento de água de chuva, que poderá ser utilizada na irrigação do jardim e lavagem do térreo e garagem.</br>
<span style="color: #900d26;">Vantagem:</span>  Mais uma economia para o condomínio e novamente a Patriani preocupada com o meio ambiente.
</p></aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_in"></div>
                                <span class="subTit_difer">
Iluminação natural das</br> áreas comuns</span></br>
								<p class="txt_difer">
                                Sempre que possível utilizaremos vidros temperados para fechamento das áreas comuns. O vidro permite a entrada de luz natural nos ambientes, reduzindo a necessidade de lâmpadas acesas.</br>
<span style="color: #900d26;">Vantagem:</span>  A Patriani é muito preocupada com redução das despesas do condomínio. Esta medida também colabora com o meio ambiente.
                                
</p></aside>
							<!--FIM DO CONTEUDO-->

                               <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_vv"></div>
                                <span class="subTit_difer">Veneziana de Enrolar ou</br> Venezianas Integradas</span></br>
								<p class="txt_difer">
                                Entregaremos os quartos dos apartamentos com venezianas de enrolar. As venezianas de enrolar dobram a área de iluminação se comparadas com janelas ou portas de folhas de correr. O menor uso de energia elétrica ajuda na economia da família e ajuda a natureza.</br>
<span style="color: #900d26;">Vantagem:</span>  Embora sabendo que as venezianas de enrolar são mais caras quando comparadas com a de folha de correr, a Patriani prefere entregar os apartamentos com estas venezianas porque são mais bonitas e mais sustentáveis. A preocupação com a natureza é ponto alto da Patriani.

                               
 
</p></aside>
							<!--FIM DO CONTEUDO-->


 <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_41"></div>
								<span class="subTit_difer">madeira CertifiCada</span></br>
								<p class="txt_difer">
                                Todas as madeiras utilizadas na obra são certificadas.</br>
<span style="color: #900d26;">Vantagem:</span>  Respeito ao meio ambiente é preocupação constante da Patriani.
                                
							</aside>
							<!--FIM DO CONTEUDO-->


                            
                                                  
		</aside>
	
						<!---FIM DA COLUNA ESQUERDA---->
	
						<aside class="coluna_direita">



							<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_tt"></div> 
								<span style="font-size:14px;" class="subTit_difer">Torneiras com temporizador</span></br>
								<p class="txt_difer">
                                Entregaremos nas áreas comuns torneiras com temporizador.</br>
                                <span style="color: #900d26;">Vantagem:</span> Torneiras com temporizador colaboram com a redução do custo do condomínio e melhoram o meio ambiente.

								</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->

							 
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_cd"></div> <span
									class="subTit_difer">Caixas de descarga</span></br>
								<p class="txt_difer">
                                
                               Entregaremos os banheiros dos apartamen-</br>tos e áreas comuns com caixas de descarga com dois módulos: descarga com 3 litros e descarga com 6 litros. Estas caixas permitem utilizar descarga de 3 litros para líquidos e descarga de 6 litros para sólidos. A econo-</br>mia de água e na conta a pagar é grande com estas caixas de dupla função.</br>
<span style="color: #900d26;">Vantagem:</span> Quando utilizamos as caixas de descargas de dupla função proporcionamos grande economia para o morador e também para o condomínio. As caixas de descarga de dupla função são mais adequadas porque são ambientalmente sustentáveis, economi-</br>zam água que é um recurso natural muito precioso.

								</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             
                             
                          <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_cz"></div><span
									class="subTit_difer">Cozinha</span>
								<p style="white-space:nowrap;" class="txt_difer">
                                A cozinha é um destaque do Mobilità. Tem</br> iluminação e ventilação natural, além de ser</br> um projeto que permite ótimo aproveitamento</br> de espaço.</br>
<span style="color: #900d26;">Vantagem:</span>  Cozinha com iluminação natural</br> foi uma preocupação da Arquiteta Samantha</br> Martino para transformar o Mobilità num dos</br> melhores apartamentos do ABC na sua </br>categoria.	</p>
                                </aside>
							<!--FIM DO CONTEUDO-->


<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_22"></div><span
									class="subTit_difer">varandaS</span>
								<p class="txt_difer">
                                Apartamentos com varanda na suíte e varanda gourmet.</br>
<span style="color: #900d26;">Vantagem:</span>  As varandas proporcionam aos apartamentos do Mobilità um índice muito maior de iluminação natural, o que significa menos necessidade de luz artificial, proporcionando maior economia para o morador e mais respeito ao meio ambiente.</p>
                                </aside>
							<!--FIM DO CONTEUDO-->
			


                             <!--CONTEUDO-->
							<aside id="cont_difer6">
								<div class="img_ac"></div>
								<span class="subTit_difer">Acessibilidade</span>
								<p class="txt_difer">
                               O Mobilità foi concebido com a preocupação de atender às pessoas com necessidades especiais. Contempla rampa de acesso à área da piscina, escada com corrimão para  entrada na piscina, dois acessos à entrada do edifício, portas de acesso às áreas comuns internas com 1 m de largura,  elevadores  com dimensões compatíveis. </br>
<span style="color: #900d26;">Vantagem:</span> A Patriani se preocupa com o bem-estar e o conforto de seus clientes. Conforme a necessidade, pode estudar junto com sua equipe de engenharia,  a viabilização de outras adaptações necessárias.

                                
                                

								</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                           
                            
                           
                            
                       </aside>


                           
							<!--FIM DO CONTEUDO-->

</aside>


<aside id="meio">
	    <aside class="txt_box">
	    <h3>quando se trata de qualidade</br>
        a patriani não economiza nos detalhes</h3></aside>
</aside>


<aside id="fim">
	<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_01"></div>
								<p class="txt_difer"> Edifício recuado e localizado numa tranquila e arborizada alameda.</p></aside>
							<!--FIM DO CONTEUDO-->

							 <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_06"></div>
								<p class="txt_difer"> Amplas opções de financiamento em até 35 anos pelo sistema financeiro de habitação.
</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_04"></div>
								<p class="txt_difer"> Guarita com vidros blindados e portão duplo com clausura.

</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_05"></div>
								<p style="white-space:nowrap;" class="txt_difer"> Interfone com sistema antipânico e infraestru-<br/>tura para câmeras.

</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                            
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_07"></div>
								<p class="txt_difer"> Vagas demarcadas e cobertas.
</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_08"></div>
								<p class="txt_difer"> 4 vagas para motos. 
</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                            
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_10"></div>
								<p class="txt_difer"> Antena coletiva instalada e infraestrutura para TV a cabo.

</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_11"></div>
								<p class="txt_difer"> Coleta seletiva já com as lixeiras instaladas em espaço apropriado.

</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                            <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_12"></div>
								<p class="txt_difer"> Reaproveitamento da água de chuva, economia para seu condomínio e respeito ao meio ambiente.

</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_13"></div>
								<p class="txt_difer"> Sistema de medidores individuais de água com hidrômetros já instalados em cada unidade.

</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                            <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_14"></div>
								<p class="txt_difer"> Instalação para medição individual de gás.

</p></aside>
							<!--FIM DO CONTEUDO-->
                            
                             
                              <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_17"></div>
								<p class="txt_difer"> 
Torneiras das áreas comuns com temporizador, mais economia para o condomínio e respeito com a natureza.
</p></aside><!--FIM DO CONTEUDO-->



 <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_15"></div>
								<p class="txt_difer"> 
Projeto paisagístico realizado pelo renomado arquiteto Eduardo Mera
</p></aside><!--FIM DO CONTEUDO-->


<aside id="cont_difer">
								<div class="img_16"></div>
								<p class="txt_difer"> 
Projeto de arquitetura da conceituada Samantha Martino.

</p></aside><!--FIM DO CONTEUDO-->

                            
                              <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_18"></div>
								<p class="txt_difer"> 

Elevadores de primeira linha com abertura central e portas em aço inox.


</p></aside>
							<!--FIM DO CONTEUDO-->  
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_19"></div>
								<p class="txt_difer"> 
Sensores de presença no hall dos elevadores e escadas, evitando o desperdício de energia e mais respeito com a natureza.
</p></aside><!--FIM DO CONTEUDO-->  
							
                                   <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_20"></div>
								<p class="txt_difer"> 
Todos os banheiros com ventilação e iluminação natural. Mais economia de energia e mais respeito a natureza.
</p></aside><!--FIM DO CONTEUDO-->  
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_22"></div>
								<p class="txt_difer"> 
Guarda-corpo da varanda com alumínio e vidro laminado. Seu prédio muito mais moderno e valorizado.



</p></aside>
							<!--FIM DO CONTEUDO--> 

 <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_21"></div>
								<p class="txt_difer"> 
Espaço gourmet integrado com cozinha e terraço. Detalhes que valorizam mais ainda seu apartamento



</p></aside>
							<!--FIM DO CONTEUDO-->   
<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_23"></div>
								<p class="txt_difer"> 
Dormitórios com veneziana de enrolar. Proporciona o dobro de iluminação e mais economia de energia. 



</p></aside>
							<!--FIM DO CONTEUDO-->                              
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_24"></div>
								<p class="txt_difer"> 
Louças sanitárias, cubas e tanques da marca ICASA.



</p></aside>
							<!--FIM DO CONTEUDO--> 

                            <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_25"></div>
								<p class="txt_difer"> 
Pisos que valorizam seu apartamento. Cozinha, varanda e banheiros entregues com porcelanato PORTOBELLO 60 x 60.



</p></aside>
							<!--FIM DO CONTEUDO--> 

							<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_26"></div>
								<p class="txt_difer"> 
Infraestrutura para 1 ponto de ar condicionado tipo split na suíte



</p></aside>
							<!--FIM DO CONTEUDO-->     
                             
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_45"></div>
								<p class="txt_difer"> 	
Caixilhos de alumínio com perfis da marca ALCOA, com pintura eletrostática branca, mais resistência aos raios solares.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->

							 <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_02"></div>
								<p class="txt_difer">
                                Detalhes que fazem a diferença. Azulejos com acabamento bisotados sem cantoneiras, tornando o acabamento muito mais nobre.
								</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_03"></div>
								<p class="txt_difer">Granitos claros serão utilizados nas pias da cozinha, banheiros, lavabo e soleiras. Nobreza em cada detalhe.</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_28"></div>
								<p class="txt_difer"> 	

Áreas comuns entregues equipadas e decoradas, conforme memorial descritivo.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_29"></div>
								<p class="txt_difer"> 	
Praça das mamães, praça das babás e praça fun integrada com playground.
</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->

<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_27"></div>
								<p class="txt_difer"> 	
Brinquedoteca equipada com TV, vídeogame, DVD e muito mais.
</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->

                            <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_30"></div>
								<p class="txt_difer"> 	
Playground&nbspcom piso especial emborrachado Equipado com escorregador, gira-gira, túnel e casa das bonecas integrado com Ciclovia Kids. Item exclusivo de diversão para as crianças.</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->

<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_66"></div>
								<p class="txt_difer"> 	
Para seu pet, muito mais conforto: Leve-o para passear no Free Dog e depois
lave as patinhas no Dog Wash antes de subir para o apartamento.
</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->

                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_31"></div>
								<p style="white-space:nowrap;" class="txt_difer"> 	
Salão de jogos com mesa de Air Play, Pebolim<br/> e mesa de jogos.
</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_32"></div>
								<p class="txt_difer"> 	
	

Fitness Center com equipamentos de alta tecnologia e TV.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_33"></div>
								<p class="txt_difer"> 	
	Duas Churrasqueira cobertas e equipadas com pia, bancada, armários, mesas e guarda-sol, para receber com muito conforto seus convidados.
</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_34"></div>
								<p class="txt_difer"> 	
	Um show de piscina integrada com solarium. O deck molhado que divide a piscina infantil e adulta é conforto para as mamães e segurança para as
	crianças. Além disso, conta com exclusiva rampa de acesso à área da piscina para portadores de necessidades especias.
</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->

                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_67"></div>
								<p class="txt_difer"> 	
&nbspSpa com sala de massagem, sauna, 
&nbsphidromassagem, ducha circular e área de &nbspdescanso. 
&nbspRelaxe num verdadeiro spa sem &nbsp &nbspsair de casa.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->

                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_35"></div>
								<p class="txt_difer"> 	
	Maravilhoso salão de festas que conta com o apoio de churrasqueira e Sushi Table. Ambientes planejados para deixar sua festa mais aconchegante.
</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                            
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_36"></div>
								<p class="txt_difer"> 	
	Sushi Table: Espaço temático com exclusiva decoração japonesa ao ar livre criada para tornar sua celebração ainda mais divertida.
</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_38"></div>
								<p class="txt_difer"> 	
	Fechaduras cromadas de 55 mm com empunhadura anatômica da marca LOCKWELL, uma das mais conceituadas do mercado.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_39"></div>
								<p class="txt_difer"> 	
	Cuidados especiais. Apartamentos e áreas comuns entregues com gotas de silicone nas paredes, protegendo-as de batidas de portas.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_40"></div>
								<p class="txt_difer"> 	
	Nas áreas comuns, quando possível, serão utilizados vidro no lugar de parede de alvenaria, o que permite a entrada de luz natural e gera mais economia ao condomínio.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                             <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_41"></div>
								<p class="txt_difer"> 	
A Patriani trabalha com madeira certificada em suas obras.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                            <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_42"></div>
								<p class="txt_difer"> 	
Tubos e conexões da rede de água e esgoto serão da marca TIGRE, reconhecida pela qualidade dos seus materiais.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
                            <!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_43"></div>
								<p class="txt_difer"> 	
Caixas de descarga com duplo acionamento, de 3 litros e de 6 litros, conforme a necessidade, gerando mais economia na sua conta de água e respeitando a natureza

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->


							<!--CONTEUDO-->
							<aside id="cont_difer">
								<div class="img_26"></div>
								<p class="txt_difer"> 	
O sistema de água quente dos chuveiros e pias dos banheiros serão todos em cobre da renomada marca  ELUMA. O cobre é um material mais nobre e 100% reciclável.

</p>
                                
							</aside>
							<!--FIM DO CONTEUDO-->
	    
</aside>



	     </aside>
         


                           







         
				    <aside class="img_difer">
						<img src="assets/images/img_difer2.png" alt="" title="" />
					</aside>



      </article>
	
    
    
    
    
				                     <!--REALIZAÇÔES-->
			<article id="realizacoes" class="realizacoes">
					<aside class="txt_projetoreali">
						<h3>História da Patriani</h3>
					</aside>
	
					<aside id="box_reali">
						<img src="assets/images/logo_patriani.png" alt="" title="" />
	
						<aside id="historia">
	
							<aside class="col_1">
								<p class="txt_col">Filho de uma família humilde, Valter Patriani nasceu em 6 de janeiro de 1958, na zona rural da cidade de Novo Horizonte, interior de São Paulo. Sua família, como tantas outras naqueles tempos difíceis, decidiu migrar para a capital paulista na esperança de dias melhores. Seu irmão mais velho foi o primeiro a chegar em São Paulo. Após conseguir um emprego na indústria automobilística do ABC, trouxe seus outros irmãos, seu pai e sua mãe. Valter chegou em São Paulo com 8 anos de idade. Não em São Paulo, exatamente, mas em São Caetano do Sul. Seu primeiro emprego foi numa banca de jornal próxima de sua casa. A banca pertencia a um senhor de idade, e Valter tomava conta dela quando o senhor não estava. </p>
							</aside>
							<aside class="col_2">
								<p class="txt_col">E isso vinha de longa data: seguindo uma orientação de sua mãe, que dizia que imóveis eram a forma mais segura de garantir o futuro, ao longo dos anos Valter foi aplicando no setor imobiliário grande parte do que ganhava e economizava vendendo viagens. Claro que, para que isso fosse possível, teve a felicidade de fazer e ver a CVC crescer e despontar como líder de mercado. Neste mesmo período, participou de grupos de investidores na construção de empreendimentos. Nestes grupos, aprendeu mais sobre o negócio e sobre as técnicas de construção. Conforme boas oportunidades iam surgindo, ele ia comprando terrenos adequados para a construção de edifícios. Finalmente, depois de quase 40 anos no setor turístico. </p>
							</aside>
                             <aside class="col_3">
								<p class="txt_col">Depois trabalhou em outras bancas e também na distribuidora de jornais de São Caetano. Trabalhava muito feliz.  Afinal, para uma família de emigrantes, trabalhar e estar empregado eram as coisas mais importantes do mundo. Mas para a mãe de Valter, estudar também era muito importante. Como seu emprego não permitia um horário adequado para frequentar a escola, sua mãe o tirou deste trabalho e Valter conseguiu voltar a estudar. Nesta época, sua irmã trabalhava na loja da VARIG de São Caetano. Ali ela conseguiu uma posição para Valter como office-boy. Sua vida mudou definitivamente a partir deste emprego.Foi seu primeiro contato e o início de seu envolvimento como segmento turístico, segmento em que trabalhou por mais de 38 anos. Na CVC, foram 34 anos de atividade. Ali começou como vendedor e encerrou como presidente, posição que ocupou por 5 anos. Embora a maior parte de sua vida profissional tenha sido dedicada ao Turismo, investir e atuar no mercado imobiliário sempre estiveram em seus planos. </p>
							</aside>
    						<aside class="col_4">
								<img src="assets/images/img_reali.png" alt="" title="" />
							    </aside>
                             <aside class="col_3">
							<p class="txt_col">Valter encerrou sua carreira neste segmento, Pois um novo estava só começando. Valter resolveu então, juntar parte de seus recursos para incorporar empreendimentos nos terrenos que já possuía.  Neste momento nascia a Incorporadora Patriani. E por que Incorporadora Patriani e não outro nome qualquer? Por um único motivo: Valter acredita que ter seu nome em sua empresa traz mais responsabilidades e exige maiores compromissos. Ele quer assumir estas responsabilidades e estes compromissos. Como bom vendedor, não teme mostrar sua "cara", não teme prometer e não teme ser cobrado. Como bom vendedor, acredita no que está vendendo. 	A Incorporadora Patriani continua a história de Valter Patriani como executivo e empresário. É uma empresa que está escrevendo seu nome em concreto sólido, e não na areia. Há todo um futuro pela frente. Os filhos de Valter, Bruno e Gabriel, estão sendo preparados para continuar esta história por muitos anos. A Incorporadora Patriani agradece sua confiança e saberá honrá-la. </p>
							</aside>  

                            <aside id="patriani">
                             
                            <h3 style="margin-left: 200px;">Confira as obras já realizadas pela Patriani</h3>
                                              
                            <div id="edif_col1">

                            <p class="img_edif2"><a href="http://www.verticepatriani.com.br" target="_blank"><img src="assets/images/Vertice.png" alt="Ed. Vértice Campinas" title="Ed. Vértice Campinas"/></a>Ed. Vértice Campinas</p>
                            <p class="txtedif2">O Vértice está localizado num dos melhores pontos do Jardim Paulicéia, um bairro em franco processo de 
crescimento e valorização. Oferece rápido acesso ao centro de Campinas e às principais rodovias que interligam a cidade. Está próximo ao Shopping Unimart, futuro Shopping Pq. Das Bandeiras, Outlet Campinas, os Hospitais Vera Cruz, Santa Edwiges, Faculdade Puc II, os colégios Recanto Azul, Alicerce e Dulce Maria Pereira, Supermercado Shimozono  e cercado por uma completa infraestrutura de comércio e serviços.</p>

                            </div>


                             <div id="edif_col2">

                            <p class="img_edif2"><a href="http://www.viverepatriani.com.br/" target="_blank"><img src="assets/images/Vivere.png" alt="Ed. Vivere São Caetano" title="Ed. Vivere São Caetano"/></a>Ed. VIVERE</br> São Caetano</p>
                            <p class="txtedif2">O Vivere está localizado em 
São Caetano do Sul apresenta os melhores indicadores sociais de todo o país,
 uma cidade considerada exemplar em vários aspectos do chamado IDH da ONU por 
3 vezes, ganhou o título
de cidade brasileira com melhor Índice de Desenvolvimento Humano Municipal, 
que mede a qualidade de vida da população</p>

                            </div>

							 <div id="edif_col1">

                            <p class="img_edif2"><a href="http://www.terrazzepatriani.com.br/" target="_blank"><img src="assets/images/Terrazze.png" alt="Ed. Terrazze Santo André
" title="Ed. Terrazze Santo André
"/></a>Ed. Terrazze</br> Santo André</p>
                            <p class="txtedif2">Um projeto arrojado, uma varanda para cada dormitório sendo uma delas
                             integrada com a sala, além da varanda Gourmet, proporcionando muito mais 
                             claridade e luz natural aos ambientes.</br>

                             TERRAZZE PATRIANI foi concebido para trazer mais conforto e bem-estar para você 
                             e sua família e uma vista privilegiada para todos os lados.</p>

                            </div>

                            <!--<div id="edif_col2">

                            <p class="img_edif2"><img src="assets/images/ed.stare.png" alt="Ed. Stare Santo André" title="Ed. Stare Santo André"/>Ed. Stare Santo André</p>
                            <p class="txtedif2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sollicitudin aliquam felis, vel tempus sem imperdiet accumsan. Integer sed luctus ipsum. Nunc consequat aliquet orci bibendum egestas. Donec elementum nulla ut facilisis aliquet. Vivamus vel ante aliquet tellus tristique tincidunt vitae et urna.</p>

                            </div>-->

    
    				</aside>

   						
   						    <aside id="contruire">
                             <hr>
                            <img style="margin-top:40px;" src="assets/images/construire_realiz.png" alt="Construire Engenharia e Arquitetura" title="Construire Engenharia e Arquitetura"/>
                            <p style="text-align:justify; margin-bottom:40px;"> A Construire é uma das principais construtoras do segmento “preço de custo” atuante na Grande São Paulo. Acompanhando a evolução da necessidade das pessoas e considerando a nossa missão de “Inovar nas Soluções Imobiliárias”, a Construire desenvolve seus projetos de forma a maximizar o retorno sobre o capital empregado pelos seus investidores. Respeito ao meio ambiente, crescimento sustentável, valorização das pessoas, integridade e seriedade no trato com o mercado formam os pilares que sustentam a nossa organização. </p>
                            	
    						<p style="text-transform:uppercase; color:#39797F; margin-bottom:40px;"><strong>alguns empreendimentos realizados por essa parceria:</strong></p>
                            
                            <div id="edif">
                            <p class="img_edif"><img src="assets/images/ed.stare.png" alt="Ed. Stare Santo André" title="Ed. Stare Santo André"/>Ed. Stare </br>Santo André</p>
                            <p class="img_edif"><img src="assets/images/ed.azimut.png" alt="Ed. Azimut Santo André" title="Ed. Azimut Santo André"/>ed. azimut</br> santo andré</p>
                            <p class="img_edif"><img src="assets/images/ed.inovat.png" alt="Ed. Inovat Santo André" title="Ed. Inovat Santo André"/>ed. inovat</br> santo andré</p>
                            <p class="img_edif"><img src="assets/images/ed.primopunto.png" alt="Ed. Primo Punto Santo André" title="Ed. Primo Punto Santo André"/>ed. primo punto santo andré</p>
                            </div>

    <p class="end">
REGISTRO Nº 13 DA MATRICULA 13.513, DE 28 DE JUNHO DE  2013.DO 2º OFICIAL DE REGISTRO DE IMOVEIS DE SANTO ANDRÉ. Fernandez Mera Negócios Imobiliários Ltda. 
Av. Brigadeiro Luis Antonio, 4.910 - São Paulo, Cep.: 01402-002 - SP. Creci 5425J.  Viana Negócios Imobiliários. R. Amazonas, 439 - São Caetano do Sul – S.P.CRECI : J-20461.
 *Conforme memorial descritivo.  </p>	
    							</aside>
    
									
					    </aside>
								
	
			     </aside>
	
		</article>
	
	
	
	
				                      <!--CONTATO-->
				<article id="contato" class="contato">
	
					<aside class="txt_projeto">
						<h3>
							PREENCHA O FORMULÁRIO ABAIXO</br> OU LIGUE PARA (11) 2598.3730
						</h3>
					</aside>
	
					<aside id="form">
						<form id="form_contato" method="post" action="">
							<input type="text" class="statusNome" name="nome" placeholder="Nome:" value="Nome:"/>
							<br class="clear" /> 
							<input type="email" class="statusEmail" name="email" placeholder="E-mail:" value="E-mail:"/> 
							<input type="tel" class="statusTelefone" name="phone" placeholder="Telefone:" value="Telefone:"/> 
							<br class="clear" />
							<textarea name="mensagem" id="mensagem" class="statusMensagem" placeholder="Escreva aqui sua mensagem:">Escreva aqui sua mensagem:</textarea>
							<br class="clear" />
							<button id="btnEnviar" type="submit" class="enviar" title="Enviar">ENVIAR</button>
						</form>
					</aside>
	
	
					<aside id="at_online">
						<h3>atendimento online</h3>
						<?php
							$valor = array("http://viana.hypnobox.com.br/atendimento/index.php?id_produto=83","http://fernandezmera.nccserver.com.br/fernandezmera190/chat5/cliente/frm_login.asp?IDArea=8&sel=terrazzepatriani");
							$valor[] = shuffle($valor);
						?>
						<a href="#" onclick="window.open('<?php echo $valor[0]; ?>','Janela','toolbar=yes,location=no,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=700,height=480'); window.location.reload(); return false;" target="_blank" title="Atendimento Online">
							<img src="assets/images/msg_ico.png" />
						</a>						
					</aside>
	
				</article>
	
			</section>
            					            <!--FOOTER-->
                           
           <section class="footer">
             <aside id="rodape">
               
                    <aside id="in">&nbsp &nbsp &nbsp   Incorporação e Construção</br>
                    <a href="http://www.incorporadorapatriani.com.br/" target="_blank"><img class="ico" src="assets/images/ico_patriani2.png" alt="Incorporadora Patriani" title="Incorporadora Patriani"/></a></aside>
                    
                    
                    <aside id="int">Intermediação</br>
                    <a href="http://www.fernandezmera.com.br/" target="_blank"><img src="assets/images/ico_fernandez.png" alt="Fernandez Mera" title="Fernandez Mera"/></a>&nbsp &nbsp
                    <a href="http://www.viananegocios.com.br/" target="_blank"><img class="ico" src="assets/images/ico_viana.png" alt="Viana Negócios" title="Viana Negócios"/></a></aside>
                    
                    
                    <aside id="fin">Financiamento</br>
                    <img class="ico" src="assets/images/ico_santander.png" alt="Santander" title="Santander"/></aside>
                    
                    
                    <aside id="adm">Administradora</br> e Gerenciadora da Obra</br>
                    <a href="http://www.construire.com.br/" target="_blank"><img src="assets/images/ico_construire2.png" alt="Construire Engenharia e Arquitetura" title="Construire Engenharia e Arquitetura"/></a></aside>
                
                
                <aside id="spicy"><span class="spicy"><a href="http://www.spicyweb.com.br/" target="_blank"><img class="ico" src="assets/images/logo_spicy.png" alt="SpicyWeb" title="SpicyWeb" /></a></span></aside>
                
           </aside>
            
            </section>
	
		<aside style="display:none" class="popup_mob">
		  	<div id="close" class="closed" title="FECHAR"></div>
		  	<!--<a href="http://www.spettacolopatriani.com.br" target="_blank">-->
			<a href="http://www.viverepatriani.com.br" target="_blank">
		  		<img class="link_externo" src="assets/images/pop_up_vivere.jpg" alt="Vivere Patriani" title="Visite Decorado" />
			</a>
		</aside>
	
</section>
		
		<script>			
		    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		    	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		    	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		    ga('create', 'UA-41915786-1', 'mobilitapatriani.com.br');
		    ga('send', 'pageview');		
		</script>
		
	
	</body>
</html>