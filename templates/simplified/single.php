<?php if($tsQuery->have_offers()) : ?>
	<?php while($tsQuery->have_offers()) : $tsQuery->the_offer(); ?>
		<div class="<?php ts_item_class(); ?>">
			<div class="topspin-item-inner">
				<?php if(ts_get_the_offer_type()=='buy_button') : ?>
					<div class="topspin-item-left">
						<div class="topspin-item-thumb"><a href="<?php ts_the_permalink(); ?>"><?php ts_the_thumbnail('topspin-default-single-thumb'); ?></a></div>
						<?php if(ts_have_gallery()) : ?>
							<ul class="topspin-gallery-pager">
								<?php foreach(ts_gallery_images() as $image_key=>$image) : ?>
								<li class="topspin-gallery-pager-item <?php echo ($image_key==0) ? 'topspin-gallery-pager-active' : ''; ?>">
									<img class="topspin-gallery-pager-image" src="<?php echo $image->small_url; ?>" data-full-src="<?php echo $image->large_url; ?>" width="50" height="50" alt="" />
								</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="topspin-item-body">
						<div class="topspin-item-desc"><?php ts_the_content(); ?></div>
						<div class="topspin-item-footer">
							<?php if(ts_is_new()) : ?><div class="topspin-item-new">NEW!</div><?php endif; ?>
							<div class="topspin-item-price">Price: <?php ts_the_price(); ?></div>
							<div class="topspin-item-purchase">
								<a class="topspin-item-purchase-anchor" href="<?php ts_the_purchaselink(); ?>">PURCHASE</a>
							</div>
						</div>
					</div>
				<?php else : ?>
					<div class="topspin-item-embed">
						<?php ts_the_embed_code(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>