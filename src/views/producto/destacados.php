<h1>Nuestros productos más vendidos</h1>

<?php while($product = $productos->fetch_object()): ?>
	<div class="product">
		<a href="<?=base_url?>src/producto/ver&id=<?=$product->id?>">
			<?php if($product->imagen != null): ?>
				<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" />
			<?php else: ?>
				<img src="<?=base_url?>src/assets/img/teclado.jpg" />
			<?php endif; ?>
			<h2><?=$product->nombre?></h2>
		</a>
		<p><?=$product->precio?></p>
		<a href="<?=base_url?>src/carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
	</div>
<?php endwhile; ?>
