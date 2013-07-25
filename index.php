<?php
/****************************************************
#####################################################
##-------------------------------------------------##
##               TEQUOIA                           ##
##-------------------------------------------------##
## Copyright = globbersthemes.com- 2012            ##
## Date      = JUIN 2012                           ##
## Author    = globbers                            ##
## Websites  = http://www.globbersthemes.com       ##
## version (joomla)                                ##
##                                                 ##
#####################################################
****************************************************/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>	
<jdoc:include type="head" />	

<?php JHTML::_('behavior.framework', true); 	
$app                = JFactory::getApplication();	
$templateparams     = $app->getTemplate(true)->params;	
$csite_name	        = $app->getCfg('sitename');	
$path = $this->baseurl.'/templates/'.$this->template; 
$quote = $this->params->get("quote", " hello and welcome to my new website !!! ..."); 

?>	

  <?php           
$mod_left = $this->countModules( 'position-7' );        
 if ( $mod_left ) { $width = '';         } else { $width = '-full';}        
 ?>
 
 <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/tequoia/css/tdefaut.css" type="text/css" media="all" />
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script> 
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/nivo.slider.js"></script>
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/superfish.js"></script>  
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script>
<!--<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/cufon-yui.js"></script>-->
<!--<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/cufon-replace.js"></script>-->
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/Bebas_400.font.js"></script>

 <link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />    
 <link href='http://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' rel='stylesheet' type='text/css'>

 <script type="text/javascript">      
 var $j = jQuery.noConflict(); 	$j(document).ready(function() {	    	
 $j('.navigation ul').superfish({		  	
 delay:       800,                            		 	
 animation:   {opacity:'show',height:'show'},  		  	
 speed:       'normal',                          		 	
 autoArrows:  false,                           		  	
 dropShadows: true                           	  	
 });	   }); 	
 </script>

 <script type="text/javascript">    
 var $j = jQuery.noConflict();    
 jQuery(document).ready(function ($){    
 $j("#slider").nivoSlider(    
 {effect: "sliceUpDown",    
 slices: 15,    
 boxCols: 8,    
 boxRows: 4,    
 animSpeed: 800,    
 pauseTime: 3000,    
 captionOpacity: 1    
 }); });    
 </script>		
 
 
 </head>
 <body>    
    <div class="pagewidth">
    <div class="navigation">                                                    
	                <jdoc:include type="modules" name="position-1" />                                            
	            </div>
	    <div id="sitename">
            <div id="name">			
	            <a href="index.php">
	            <h1>Wrongtown Riders</h1></a>				            		           
	        </div>
		</div>
			
		    <div id="quote"><p><!--?php echo $quote?-->MS sucks. Not having a cure sucks even more.</p>
			</div>
		    <!--div id="topmenu">
			    
			</div-->

			    <div id="wrapper-main">
				   <?php if ($this->countModules('position-3') || $this->countModules('position-4') || $this->countModules('position-6') || $this->countModules('position-8')) { ?>	
				   
					<!--div class="sep"></div-->
                    						
					<?php } ?>	
                        <?php if ($this->countModules('position-7')) { ?>                                           
   						    											                                       									
						<?php } ?>
						    <div id="main<?php echo $width ?>">				                                                               
     							<jdoc:include type="component" />
                            </div>	
                </div>
                    <div id="ftb-f">								
						<div class="ftb">							        
							&copy;<?php echo date( 'Y' ); ?>&nbsp; <?php echo $csite_name; ?>&nbsp;&nbsp;<!--?php require("template.php"); ?-->                                
						</div>								
							                            								            
					</div>	  				
				    
	</div>
 </body>
 </html>