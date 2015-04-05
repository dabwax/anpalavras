<div class="row">
    <div class="col-md-12 text-center">
        
                <div class="panel panel-primary">
                    <div class="panel-heading" style="font-weight: bold;">News Feed</div>
                    <div class="panel-body">

                        <ul class="list-group">
                            <?php foreach($posts as $m) : ?>
                          <li class="list-group-item">
                            <a href="<?php echo $this->Html->url( array('action' => 'view', $m['Post']['id']) ); ?>">
                            <span class="badge pull-left"><?php $dateTime = new DateTime($m['Post']['created']); echo $dateTime->format("d/m/Y"); ?> <?php if($dateTime->format("Y-m-d") == date("Y-m-d")) : ?>Hoje<?php endif; ?></span>
                            <div class="clearfix"></div>
                            <strong>Título</strong> <?php echo $m['Post']['title']; ?>
                            <div class="clearfix"></div>
                            <strong>Conteúdo</strong> <?php echo $m['Post']['content']; ?> <br>
                            </a>
                          </li>
                        <?php endforeach; ?>
                        </ul>

                        <?php if(empty($posts)) : ?>
                        <div class="alert alert-danger">Não há notícias disponíveis no momento.</div>
                    <?php endif; ?>

                    </div>
                </div>
    </div>
</div>

    <div class="row">
            <a href="#" class="col-md-12 anuncio anuncio<?php echo rand(1, 3); ?>">
                Anuncie Aqui
            </a>
    </div>