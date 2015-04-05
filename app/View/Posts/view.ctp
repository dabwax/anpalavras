<div class="row">
    <div class="col-md-12 text-center">
        
                <div class="panel panel-primary">
                    <div class="panel-heading" style="font-weight: bold;">Visualizar Notícia - <?php echo $post['Post']['title']; ?></div>
                    <div class="panel-body">

                    	<?php echo $post['Post']['content']; ?>

                    	<div class="clearfix"></div>
                    	<em style="margin-top: 10px; display: block;"><?php $dateTime = new DateTime($post['Post']['created']); echo $dateTime->format("d/m/Y"); ?> <?php if($dateTime->format("Y-m-d") == date("Y-m-d")) : ?><?php endif; ?></em>

                    </div>
                </div>
    </div>
</div>