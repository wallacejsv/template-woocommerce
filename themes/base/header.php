<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
	$img_url = get_stylesheet_directory_uri() . '/img';
	$cart_count = WC()->cart->get_cart_contents_count();
?>

<header class="header">
	<a href="/"><img src="<?= $img_url; ?>/handel.svg" alt="base"></a>
	<div class="busca">
		<?php 
			//get_product_search_form();
		?>
		<form action="<?php bloginfo('url') ?>/loja/" method="get">
			<input type="text" name="s" id="s" placeholder="Buscar" value="<?php the_search_query(); ?>">
			<input type="text" name="post_type" value="product" class="hidden">
			<input type="submit" value="Buscar" id="searchbutton">
		</form>
	</div>

	<nav class="conta">
		<a href="/minha-conta" class="minha-conta">Minha Conta</a>
		<a href="/carrinho" class="carrinho">Carrinho
			<?php echo $cart_count ? '<span class="carrinho-count">'. $cart_count .'</span>' : '' ?>
		</a>
	</nav>
</header>