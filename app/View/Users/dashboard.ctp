<div class="row">
	<div class="col-md-12 text-center">
				<?php if(!empty($mensagem_do_dia)) : ?>
				<div class="panel panel-primary">
					<div class="panel-heading" style="font-weight: bold;"><span class="label label-success"><?php $dateTime = new DateTime(); echo $dateTime->format('d F Y'); ?></span> Mensagem do Dia</div>
					<div class="panel-body">
						<blockquote>
						  <p><?php echo $mensagem_do_dia['Message']['message']; ?></p>
						  <footer><cite title=""><?php echo $mensagem_do_dia['Message']['author']; ?></cite></footer>
						</blockquote>

						<?php if(empty($mensagem_do_dia['MessageRating'])) : ?>
						<?php echo $this->Form->create("MessageRating", array("url" => array("controller" => "message_ratings", "action" => "add") ) ); ?>
						<?php echo $this->Form->input("message_id", array('value' => $mensagem_do_dia['Message']['id'], 'type' => 'hidden') ); ?>
						<?php echo $this->Form->input("user_id", array('value' => AuthComponent::user('id'), 'type' => 'hidden') ); ?>
						<?php echo $this->Form->input("rating", array('value' =>1, 'type' => 'hidden') ); ?>

						<h2>Sua Nota</h2>

						<?php for($i = 1; $i <= 5; $i++) : ?>
						<a href="javascript:;" class="btn btn-default btn-nota"><?php echo $i; ?></a>
						<?php endfor; ?>
						<div class="clearfix"></div>
						<button type="submit" class="btn btn-success btn-salvar-nota" style="display: none; margin-top: 8px;">Salvar Nota</button>

						<?php echo $this->Form->end(); ?>
						<?php else : ?>
						<h2>Sua nota foi <?php echo $mensagem_do_dia['MessageRating']['rating']; ?>!</h2>
						<?php endif; ?>
					</div>
				<?php else : ?>
				<div class="panel panel-danger">
					<div class="panel-heading" style="font-weight: bold;"><span class="label label-success"><?php $dateTime = new DateTime(); echo $dateTime->format('d/m/Y'); ?></span> Não há mensagens para hoje</div>
					<div class="panel-body">
						<blockquote>
						  <p>Até o momento não foi incluído nenhuma mensagem para o dia de hoje.</p>
						</blockquote>
					</div>
				<?php endif; ?>
			</div>

	</div>
</div>