<?$BC->load->helper(array('blog'));?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    
    <title><?=$head['site_title']?><?if($head['page_title']):?> :: <?=$head['page_title']?><?endif?></title>
    <meta name='description' content='<?=$head['meta_description']?>' />
    <meta name='keywords' content='<?=$head['meta_keywords']?>' />
    
    <meta name="robots" content="index,follow" />
    
    <meta name="iua-site-verification" content="c220bc27db28751e3a6310b417838f89" />
    
    <?=include_css($BC->_getTheme().'css/style.css')?>
    
    <!--[if LT IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <?$this->load->view('inc/js-jquery')?>
    
</head>

<body>

	<div id="wrapper">

	    <header>
	    	<div id="banner"></div>
	    	<div id="top_right">
	    		<a href="#"><?=img(array('src'=>$BC->_getTheme().'images/vk.png','width'=>28,'height'=>27,'alt'=>'ВКонтакте'))?></a> 
	    		<a href="<?=base_url()?>" title="<?=language('ukrainian')?>" class="flag flag-ua">Укр</a> | <a href="<?=base_url().'ru/'?>" title="<?=language('russian')?>" class="flag flag-ru">Рус</a>
	    	</div>
	    </header>
	    
	    <aside>
	        <?load_theme_view('inc/menu')?>
	        
	        <div id="partners">
	           <?=$BC->settings_model['site_partners']?>
	        </div>
	    </aside>
	
	    <div id="content">
	    	
	    	<?load_theme_view($tpl_page)?>
	    
		</div>
		
		<footer>
			&copy; Студія фото та відео послуг "Позитив" 2010-<?=date('Y')?>. Всі права захищено. Тел. (0352) 42 53 37.
		</footer>
		
	</div>

</body>
</html> 