<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>
 <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
    <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
    <meta name="author" content="">
	
    
    <title><?php echo $this->_var['page_title']; ?></title>
    
    
    
	
    
    <link rel="stylesheet" href="themes/default/css/bootstrap.min.css"  type="text/css">	
	
    <link rel="stylesheet" href="themes/default/css/style.css">		
	
    <link rel="stylesheet" href="themes/default/font-awesome/css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="themes/default/fonts/font-slider.css" type="text/css">	
	
	<script src="themes/default/js/jquery-2.1.1.js"></script>	
	  	 
    <script src="themes/default/js/bootstrap.min.js"></script>
	
	
    
    <!--[if lt IE 9]>
        <script src="themes/default/js/html5shiv.js"></script>
        <script src="themes/default/js/respond.min.js"></script>
    <![endif]-->

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js,index.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    


<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>

<div class="blank5"></div>

 


<div class="box">
 <div class="box_1">
  <div id="category_tree">
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
     <dl>
     <dt><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></dt>
     <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
     <dd><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dd>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
 </div>
</div>
<div class="blank5"></div>

 
 <?php echo $this->fetch('library/history.lbi'); ?>



    
  </div>
  
  
  <div class="AreaR">
	 
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
	  <div class="box">
		 <div class="box_1">
			<h3><span><?php echo $this->_var['lang']['goods_filter']; ?></span></h3>
			<?php if ($this->_var['brands']['1']): ?>
			<div class="screeBox">
			  <strong><?php echo $this->_var['lang']['brand']; ?>：</strong>
				<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<?php if ($this->_var['brand']['selected']): ?>
					<span><?php echo $this->_var['brand']['brand_name']; ?></span>
					<?php else: ?>
					<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>&nbsp;
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<?php endif; ?>
			<?php if ($this->_var['price_grade']['1']): ?>
			<div class="screeBox">
			<strong><?php echo $this->_var['lang']['price']; ?>：</strong>
			<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<span><?php echo $this->_var['grade']['price_range']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<?php endif; ?>
			<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_66360400_1494299905');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_66360400_1494299905']):
?>
      <div class="screeBox">
			<strong><?php echo htmlspecialchars($this->_var['filter_attr_0_66360400_1494299905']['filter_attr_name']); ?> :</strong>
			<?php $_from = $this->_var['filter_attr_0_66360400_1494299905']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<span><?php echo $this->_var['attr']['attr_value']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 </div>
		</div>
		<div class="blank5"></div>
	  <?php endif; ?>
	 
   


<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="box">
<div class="box_2 centerPadd">
  <div class="itemTit" id="itemBest">
      <?php if ($this->_var['cat_rec'] [ 1 ]): ?>
      <h2><a href="javascript:void(0)" onclick="change_tab_style('itemBest', 'h2', this);get_cat_recommend(1, 0);"><?php echo $this->_var['lang']['all_goods']; ?></a></h2>
      <?php $_from = $this->_var['cat_rec']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data']):
?>
      <h2 class="h2bg"><a href="javascript:void(0)" onclick="change_tab_style('itemBest', 'h2', this);get_cat_recommend(1, <?php echo $this->_var['rec_data']['cat_id']; ?>)"><?php echo $this->_var['rec_data']['cat_name']; ?></a></h2>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
  </div>
  <div id="show_best_area" class="clearfix goodsBox">
  <?php endif; ?>
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
  <div class="goodsItem">
         <span class="best"></span>
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
           <a href="#"><img src="themes/default/images/bnt_buy.gif" /></a> <a href="#"><img src="themes/default/images/bnt_coll.gif" /></a>
           <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
           <font class="f1">
           <?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?>
           </font>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <div class="more"><a href="search.php?intro=best"><img src="themes/default/images/more.gif" /></a></div>
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>
</div>
</div>
<div class="blank5"></div>
  <?php endif; ?>
<?php endif; ?>

 
  <?php echo $this->fetch('library/goods_list.lbi'); ?>
  <?php echo $this->fetch('library/pages.lbi'); ?>



  </div>  
  
</div>
<div class="blank5"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>  
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>] 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
