<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php if ( $this->params->def( 'show_page_title', 1 ) ) : ?>
	<div class="componentheading<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
<?php endif; ?>
<?php if ( $this->params->get('showintrotext')) : ?>
<table width="100%" cellpadding="4" cellspacing="0" border="0" align="center" class="contentpane<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
<tr>
	<td valign="top" class="contentdescription<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
		<?php echo $this->escape($this->params->get('introtext')); ?>	
	</td>
</tr>
</table>
<?php endif; ?>
   <table align="<?php echo $this->table ?>"><tr><td>
	<div id="oziocontainer" class="oziofloat">
			<a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this rotator.
	</div>
				<script type="text/javascript">
					var s1 = new SWFObject("<?php echo JURI::root() ?>components/com_oziogallery2/skin/imagerotator/imagerotator.swf","rotator","<?php echo $this->larghezza ?>","<?php echo $this->altezza ?>","7");
<?php if( $this->flickr == 1 ) : ?>
					s1.addVariable("file","http://api.flickr.com/services/feeds/photos_public.gne?id=<?php echo $this->user_id ?>&format=rss_200");
<?php elseif  ( $this->xml_moder == 0 ) : ?>
					s1.addVariable("file","<?php echo JURI::root() ?>components/com_oziogallery2/skin/imagerotator/xml/imagerotator_<?php echo $this->nomexml ?>.xml"); 
<?php elseif  ( $this->xml_moder == 1 ) : ?>
					s1.addVariable("file","<?php echo JURI::root() ?>components/com_oziogallery2/skin/imagerotator/manual-xml/<?php echo $this->manualxmlname ?>.xml");
<?php endif; ?>
					s1.addVariable("width","<?php echo $this->larghezza ?>");
					s1.addVariable("height","<?php echo $this->altezza ?>");
					s1.addVariable("transition","<?php echo $this->transition ?>");
					s1.addVariable("rotatetime","<?php echo $this->rotatetime ?>");
					s1.addVariable("screencolor","0x<?php echo $this->screencolor ?>");	
					s1.addVariable("shownavigation","<?php echo $this->shownavigation ?>");
					s1.addVariable("kenburns","<?php echo $this->movimento ?>");
					s1.addVariable("overstretch","<?php echo $this->overstretch ?>");	
					s1.addVariable("shuffle","<?php echo $this->shuffle ?>");
					s1.addParam("allowfullscreen","true");
					
<?php if( $this->logo != 0 ) : ?>
					s1.addVariable("logo","<?php echo JURI::root() . $this->logopath ?>");
<?php endif; ?>						
<?php if( $this->audio != 0 ) : ?>
					s1.addVariable("audio","<?php echo JURI::root() . $this->audiopath ?>");	
					s1.addVariable("volume","<?php echo $this->volume ?>");
<?php endif; ?>					
					s1.addParam("wmode", "transparent");
					s1.write("oziocontainer");
				</script>
   </td></tr></table>
<?php if ( $this->modifiche == 1 ) : ?>   
	<table align="<?php echo $this->table ?>"><tr><td>   
		<?php echo $this->tempo ?> 
	</td></tr></table> 
<?php endif; ?>	
<?php if ( $this->debug == 1 ) : ?>   
	<table class="oziopre"><tr><td>   
		<?php echo $this->oziodebug ?> 
	</td></tr></table> 
<?php endif; ?>	    
<?php require(JPATH_COMPONENT_ADMINISTRATOR.DS."css".DS."ozio.css");  ?>
<div class="clr"><br /></div>