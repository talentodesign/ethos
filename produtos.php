<?php include("header.php") ?>

<?php include("topo.php") ?>

    <title>Produtos</title>
  </head>
  <body>
    <div id="principal_produtos" class="centraliza">
	    <div id="img_principal_produtos">
		    </div>
		    <div id="area_info">
	          <img src="<?php servidor(); ?>images/produtos/title.png" alt="">
		    </div>
	        
		    <div id="area_texto_produtos" class="centraliza"> 
	        	<p>A Ethos Psicotestes conta com uma série de produtos para atender o público docente, 
	universidades, faculdades  e profissionais de psicologia e pedagogia, além da comunidade 
	cientifíca. Clique nos banners abaixo e conheça toda nossa linha de produtos.</p>       
		    </div>
            
            <div id="banner">
            	<ul>
                <li><a href="<?php servidor(); ?>livros"><img src="<?php servidor(); ?>images/produtos/img1_livros.jpg" alt=""></a></li>
                <li><a href="<?php servidor(); ?>brinquedos"><img src="<?php servidor(); ?>images/produtos/img2_brinquedos.jpg" alt=""></a></li>
                <li><a href="<?php servidor(); ?>testes"><img src="<?php servidor(); ?>images/produtos/img3_teste.jpg" alt=""></a></li>
                <li><a href="<?php servidor(); ?>jogos_empresariais"><img src="<?php servidor(); ?>images/produtos/img4_jogos.jpg" alt=""></a></li>
                </ul>
            
            </div>    
        
        
        
    </div>

   	<div id="footer">
    	<?php include("footer.php") ?>
    </div>
    
  </body>
</html>

