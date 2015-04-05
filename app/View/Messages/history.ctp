<div class="row">
    <div class="col-md-12 text-center">
        
                <div class="panel panel-primary">
                    <div class="panel-heading" style="font-weight: bold;">Histórico</div>
                    <div class="panel-body">

                        <ul class="list-group">
                            <?php foreach($messages as $m) : ?>
                          <li class="list-group-item">
                            <span class="badge pull-left"><?php $dateTime = new DateTime($m['Message']['created']); echo $dateTime->format("d/m/Y"); ?> <?php if($dateTime->format("Y-m-d") == date("Y-m-d")) : ?>Hoje<?php endif; ?></span>
                            <?php echo $m['Message']['message']; ?> <abbr ><?php echo $m['Message']['author']; ?></abbr>

                            <?php if(!empty($m['MessageRating'])) : ?>
                            <div class="clearfix"></div>
                            <em>Sua nota foi <?php echo $m['MessageRating']['rating']; ?></em>
                        <?php endif; ?>
                          </li>
                        <?php endforeach; ?>
                        </ul>

                        <?php if(empty($messages)) : ?>
                        <div class="alert alert-danger">Não há mensagens disponíveis no momento.</div>
                    <?php endif; ?>
                    </div>
                </div>
    </div>
</div>