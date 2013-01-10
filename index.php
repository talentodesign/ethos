<?php include("header.php") ?>

<?php include("topo.php") ?>

<title>Home</title>
  </head>
  
  <body>
    <div id="principal_home" class="centraliza">
    
	    <div id="img_principal_home">
        	<img src="<?php servidor(); ?>images/home/img_principal_home_1.jpg" alt="">      
	    </div>
        
	    <div id="area_links">
             
	        <img src="<?php servidor(); ?>images/home/conheca_ethos.png" alt="">
	        <p>A Ethos Psicotestes é uma empresa especializada em produtos para profissionais de psicologia e áreas afins...</p>
	        <a href="<?php servidor(); ?>empresa"><img src="<?php servidor(); ?>images/clique_aqui_off.png" alt="" class="botao" id="clique_aqui"></a>
	        
			<hr noshade="noshade"/>  
            
            <img src="<?php servidor(); ?>images/home/nossos_produtos.png" alt="">
	        <p>A Ethos Psicotestes disponibiliza de um acervo e produtos dos mais conceituados profissionais. Clique e confira!
</p>
	        <a href="<?php servidor(); ?>produtos"><img src="<?php servidor(); ?>images/clique_aqui_off.png" alt="" class="botao" id="clique_aqui"></a>
	        
			<hr noshade="noshade"/>  
            
                        <img src="<?php servidor(); ?>images/home/ambientacao.png" alt="">
	        <p>Venha conferir todo a estrutura que só a Ethos Psicotestes oferece para seus clientes e parceiros.
</p>
	        <a href="<?php servidor(); ?>ambientacao"><img src="<?php servidor(); ?>images/clique_aqui_off.png" alt="" class="botao" id="clique_aqui"></a>        
			    
	    
        </div>
	    <div id="parceiros">
       		 <img src="<?php servidor(); ?>images/home/parcerias.png" alt="" id="parcerias_titulo">  
             	<div id="parceiro_slider" class="centraliza">
                       		<img src="<?php servidor(); ?>images/home/slider/1.jpg" alt=""/>
                            <img src="<?php servidor(); ?>images/home/slider/2.jpg" alt=""/>                  
                        	<img src="<?php servidor(); ?>images/home/slider/3.jpg" alt=""/>
                            <img src="<?php servidor(); ?>images/home/slider/4.jpg" alt=""/>
                            <img src="<?php servidor(); ?>images/home/slider/5.jpg" alt=""/>
                       		<img src="<?php servidor(); ?>images/home/slider/6.jpg" alt=""/>
                            <img src="<?php servidor(); ?>images/home/slider/7.jpg" alt=""/>
                            <img src="<?php servidor(); ?>images/home/slider/8.jpg" alt=""/>
                </div>
	    </div>
        
        <div id="twitter"></div>
        <div id="face"><!-- <script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US"></script>
				    	<script type="text/javascript">FB.init("");</script>
                        <fb:fan profile_id="184018668344105?fref=ts" stream="0" connections="5" width="350px" height="120px" header="0" logobar="0"   css="http://talentodesign.com.br/stylesheets/fb_lpx.css?"></fb:fan> --></div>
        
       
        
    </div>

   	<div id="footer">
    	<?php include("footer.php") ?>
    </div>
    
  </body>
  
</html>

