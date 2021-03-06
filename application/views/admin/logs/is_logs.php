<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<?php $this->load->view('admin/logs/log_butt'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h2>Logi sklepu</h2>
			</div>
			<div class="pagination_set text-center">
				<?php if(isset($pagination)): ?>
					<section class="pagination"><?php echo $pagination; ?></section>
				<?php endif; ?>	
			</div>
			<section>
				<table class="table">
					<thead>
						<tr>
							<th>Id konta</th>
							<th>Vnum przedmiotu</th>
							<th>Data</th>
						</tr>
					</thead>
					<tbody>
						<?php if(count($logs)): ?>
							<?php foreach($logs as $log): ?>
								<tr>
									<td>
										<?php echo $log->account_id; ?>
									</td>
									<td>
										<?php echo $log->vnum; ?>
									</td>
									<td>
										<?php echo $log->time; ?>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="3">Nie można znaleźć żadnego logu.</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</section>
			<div class="pagination_set text-center">
				<?php if(isset($pagination)): ?>
					<section class="pagination"><?php echo $pagination; ?></section>
				<?php endif; ?>	
			</div>
		</div>
	</div>
</div>