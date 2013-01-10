<?php include("header.php") ?>

<?php include("topo.php") ?>

    <title>Contato</title>
  </head>
  <body>
    <div id="principal_contato" class="centraliza">
	    <div id="img_principal_contato"></div>	        
			    <div id="area_info">
		          <img src="<?php servidor(); ?>images/contato/title.png" alt="">
			    </div>
                <div id="conteiner_contato">
                
			         <div id="formulario">  	
							 <form action="">
						           <label for=""><img src="<?php servidor(); ?>images/contato/nome.png" alt=""></label><br>
						           <input type="text" name="" id="nome"><br>
			                       
			                      <label for=""><img src="<?php servidor(); ?>images/contato/email.png" alt=""></label><br>
						          <input type="text" name="" id="email"><br>
						                    
						           <label for=""><img src="<?php servidor(); ?>images/contato/telefone.png" alt=""></label><br>
						           <input type="text" name="" id="tel"><br> 		          
						                    
						          <label for=""><img src="<?php servidor(); ?>images/contato/mensagem.png" alt=""></label><br>
						          <textarea name="" id="mens" cols="30" rows="10"></textarea><br>                   
						          <input type="image" src="<?php servidor(); ?>images/contato/enviar_off.jpg" alt="" class="botao" id="cont_bt">                    
						          </form>
                                  
                     </div>   
                     
                     <div id="mapa">                     	
                    	<iframe width="450" height="330" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Tv+Benjamim+Constat,+525+-+Reduto+&amp;aq=&amp;sll=-1.27293,-48.459798&amp;sspn=0.745508,1.352692&amp;ie=UTF8&amp;hq=&amp;hnear=Travessa+Benjamim+Constant,+525+-+Reduto,+Bel%C3%A9m+-+Par%C3%A1,+66053-040&amp;t=m&amp;ll=-1.445793,-48.493245&amp;spn=0.007508,0.00912&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br />                                       
                     </div> 
                     
                     <div id="endereco">
                     	<p class="titulo">Endereço</p>
						<p>Tv. Benjamim Constat, 525</p>
						<p>Reduto</p>
						<p>Belém, Pará - Brasil</p>
						<p>Fone: 91 3230 5493</p>
						<p>E-mail: contato@ethospsicotestes.com.br</p>                     	
                     </div>                         
            
         		</div>               
	   
    </div>

   	<div id="footer">
    	<?php include("contato_msg.php") ?>
    	<?php include("footer.php") ?>
    </div>
    
  </body>
</html>

