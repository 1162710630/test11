<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
    <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
    
    <title><?php echo $this->_var['page_title']; ?></title>
    
    <meta name="author" content="">
	
    <title>Mobile Shop</title>
	
    
    <link rel="stylesheet" href="themes/default/css/bootstrap.min.css"  type="text/css">
	
	
    <link rel="stylesheet" href="themes/default/css/style.css">
	
	
	
    <link rel="stylesheet" href="themes/default/font-awesome/css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="themes/default/fonts/font-slider.css" type="text/css">
	
	
	<script src="themes/default/js/jquery-2.1.1.js"></script>
	
	  	 
    <script src="themes/default/js/bootstrap.min.js"></script>
    
    <script src="themes/default/js/photo-gallery.js"></script>
	
	
    
    <!--[if lt IE 9]>
        <script src="themes/default/js/html5shiv.js"></script>
        <script src="themes/default/js/respond.min.js"></script>
    <![endif]-->
    <?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
	<?php echo $this->fetch('library/page_header.lbi'); ?>
	
	
	
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<?php echo $this->fetch('library/ur_here.lbi'); ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div id="main-content" class="col-md-8">
					<div class="product">
						<div class="col-md-6">
							<div class="image">
								     <?php if ($this->_var['pictures']): ?>
                                                                        <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;">
                                                                        <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"/>
                                                                        </a>
                                                                    <?php else: ?>
                                                                        <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"/>
                                                                    <?php endif; ?>
								<div class="image-more">
									 <ul class="row">
                                                                             <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
										 <li class="col-lg-3 col-sm-3 col-xs-4">
											<img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="B_blue" />
										</li>
                                                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>							
									</ul>
								</div>      
							</div>
						</div>
						<div class="col-md-6">
							<div class="caption">
								<div class="name"><h3><?php echo $this->_var['lang']['goods_name']; ?>:<?php echo $this->_var['goods']['goods_name']; ?></h3></div>
								<div class="info">
									<ul>
										<li><strong><?php echo $this->_var['lang']['goods_brand']; ?></strong><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></li>
										<li><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong><?php echo $this->_var['goods']['goods_sn']; ?></li>
									</ul>
								</div>
                                                                <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
                                                                <div id="ECS_GOODS_AMOUNT" class="price">
                                                                     <?php if ($this->_var['goods']['promote_price'] != "0"): ?>
                                                                               ￥<?php echo $this->_var['goods']['shop_price']; ?> <span><?php echo $this->_var['goods']['promote_price']; ?></span>
                                                                                <?php else: ?>
                                                                               <?php echo $this->_var['goods']['promote_price']; ?>
                                                                                <?php endif; ?>
                                                                </div>
								<div class="options">
                                                                     
                                                                     <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
                                                                     <li class="padd loop">
                                                                         <strong><?php echo $this->_var['spec']['name']; ?>:</strong><br />
                                                                         
                                                                         <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                                                                         <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                                                                         <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                                                         <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                                                                             <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                                                                                    <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
                                                                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                                         <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                                                         <?php else: ?>
                                                                         <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                                                                             <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                                                             <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                                                                             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                                         </select>
                                                                         <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                                                         <?php endif; ?>
                                                                         <?php else: ?>
                                                                         <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                                                         <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                                                                             <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                                                                             <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
                                                                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                                         <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                                                         <?php endif; ?>
                                                                     </li>
                                                                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                                     
							             
								</div>
								<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
								<div class="well"><label>Qty: </label><input id="number" name="number" onkeyup="changePrice()" class="form-inline quantity" type="text" value="1"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn btn-2 ">加入购物车</a></div>
								<div class="share well">
									<strong style="margin-right: 13px;">Share :</strong>
									<a href="#" class="share-btn" target="_blank">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="share-btn" target="_blank">
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="share-btn" target="_blank">
										<i class="fa fa-linkedin"></i>
									</a>
                                                                        
								</div>
                                                                </form>
							</div>
						</div>
						<div class="clear"></div>
					</div>	
					<div class="product-desc">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#description">简介</a></li>
							<li><a href="#review">评论</a></li>
						</ul>
						<div class="tab-content">
							<div id="description" class="tab-pane fade in active">
                                                            <?php echo $this->_var['goods']['goods_desc']; ?>
							</div>
							<div id="review" class="tab-pane fade">
							  
                                                            <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
                                                            <div id="ECS_COMMENT"> <?php 
$k = array (
  'name' => 'comments',
  'type' => $this->_var['type'],
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
                                                             
							</div>
						</div>
					</div>
					<div class="product-related">
						<div class="heading"><h2>相关产品</h2></div>
						<div class="products">
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="product">
									<div class="image"><a href="product.html"><img src="themes/default/images/iphone.png" /></a></div>
									<div class="buttons">
										<a class="btn cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
										<a class="btn wishlist" href="#"><span class="glyphicon glyphicon-heart"></span></a>
										<a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
									</div>
									<div class="caption">
										<div class="name"><h3><a href="product.html">Aliquam erat volutpat</a></h3></div>
										<div class="price">$122<span>$98</span></div>
										<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="product">
									<div class="image"><a href="product.html"><img src="themes/default/images/galaxy-s4.jpg" /></a></div>
									<div class="buttons">
										<a class="btn cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
										<a class="btn wishlist" href="#"><span class="glyphicon glyphicon-heart"></span></a>
										<a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
									</div>
									<div class="caption">
										<div class="name"><h3><a href="product.html">Aliquam erat volutpat</a></h3></div>
										<div class="price">$122<span>$98</span></div>
										<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="product">
									<div class="image"><a href="product.html"><img src="themes/default/images/galaxy-note.jpg" /></a></div>
									<div class="buttons">
										<a class="btn cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
										<a class="btn wishlist" href="#"><span class="glyphicon glyphicon-heart"></span></a>
										<a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
									</div>
									<div class="caption">
										<div class="name"><h3><a href="product.html">Aliquam erat volutpat</a></div>
										<div class="price">$122<span>$98</span></div>
										<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-categories">
						<div class="heading"><h4>CATEGORIES</h4></div>
						<div class="content">
							<ul>
								<li><a href="#">PC Computers</a></li>
								<li><a href="#">Laptops & Notebooks</a></li>
								<li><a href="#">Mobiles & Tablet</a></li>
								<li><a href="#">Software</a></li>
							</ul>
						</div>
					</div>
					<div class="widget wid-type">
						<div class="heading"><h4>TYPE</h4></div>
						<div class="content">
							<select>
								<option value="EL" selected>Electronics</option>
								<option value="MT">Mice and Trackballs</option>
								<option value="WC">Web Cameras</option>
								<option value="TA">Tablates</option>
								<option value="AP">Audio Parts</option>
							</select>
						</div>
					</div>
					<div class="widget wid-discouts">
						<div class="heading"><h4>DISCOUNTS</h4></div>
						<div class="content">
							<label class="checkbox"><input type="checkbox" name="discount" checked="">Upto - 10% (20)</label>
							<label class="checkbox"><input type="checkbox" name="discount">40% - 50% (5)</label>
							<label class="checkbox"><input type="checkbox" name="discount">30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="discount">10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="discount">Other(50)</label>
						</div>
					</div>
					<div class="widget wid-brand">
						<div class="heading"><h4>BRAND</h4></div>
						<div class="content">
							<label class="checkbox"><input type="checkbox" name="brand">Nokia</label>
							<label class="checkbox"><input type="checkbox" name="brand">Samsung</label>
							<label class="checkbox"><input type="checkbox" name="brand">Iphone</label>
							<label class="checkbox"><input type="checkbox" name="brand">HTC</label>
							<label class="checkbox"><input type="checkbox" name="brand">Oppo</label>
							<label class="checkbox"><input type="checkbox" name="brand">Kings</label>
							<label class="checkbox"><input type="checkbox" name="brand">Zumba</label>	
						</div>
					</div>
					<div class="widget wid-product">
						<div class="heading"><h4>LATEST</h4></div>
						<div class="content">
							<div class="product">
								<a href="#"><img src="themes/default/images/galaxy-note.jpg" /></a>
								<div class="wrapper">
									<h5><a href="#">Samsung Galaxy Tab</a></h5>
									<div class="price">$122</div>
									<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
								</div>
							</div>
							<div class="product">
								<a href="#"><img src="themes/default/images/galaxy-s4.jpg" /></a>
								<div class="wrapper">
									<h5><a href="#">Samsung Galaxy Tab</a></h5>
									<div class="price">$122</div>
									<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
								</div>
							</div>
							<div class="product">
								<a href="#"><img src="themes/default/images/Z1.png" /></a>
								<div class="wrapper">
									<h5><a href="#">Samsung Galaxy Tab</a></h5>
									<div class="price">$122</div>
									<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
	
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div>
      </div>
    </div>
	
	<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
		$('.nav-tabs a').on('shown.bs.tab', function(event){
			var x = $(event.target).text();         // active tab
			var y = $(event.relatedTarget).text();  // previous tab
			$(".act span").text(x);
			$(".prev span").text(y);
		});
	});
	</script>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  $.get('goods.php?act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty,function (res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}, 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</html>
