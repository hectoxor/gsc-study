<div class="content">
	<div class="container" style="margin-top: 40px;">
	    <div class="cr" style="text-align: center;">
	        <h2><?php echo $message; ?></h2>
	        <a class="error btn" href="/">
	            Перейти на Главную страницу
	        </a>
	        <?php
	        if (Configure::read('debug') > 0):
	            echo $this->element('exception_stack_trace');
	        endif;
	        ?>
	    </div>
	</div>
</div>