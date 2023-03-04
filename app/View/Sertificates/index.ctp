<ul class="sert-ul">
	<?php foreach($data as $item): ?>
		<li>
			<a href="/img/sertificates/<?=$item['Sertificate']['img']?>" data-fancybox-group="gallery" class="fancybox sert-mini">
				<img src="img/sertificates/thumbs/<?=$item['Sertificate']['img']?>">
			</a>
		</li>
	<?php endforeach ?>																		
</ul>