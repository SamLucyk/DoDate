<h3>
	<?php echo $labels['list']; ?> (<?php echo $list_count; ?>)
	<?php if( $fields['list_show_new'] ): ?>
	<a class="btn btn-success btn-sm" href="<?php echo site_url("$module/create/"); ?>">
		<?php echo $labels['create_new_link']; ?>
	</a>
	<?php endif; ?>
</h3>
<hr>

<table class="table table-striped table-bordered">
<thead>
  <tr>
  	<?php foreach ($fields['list'] as $key => $value): ?>
		<th><?php echo $value['label']; ?></th>
	<?php endforeach; ?>
	<?php if( $fields['list_show_edit'] || $fields['list_show_view'] || $fields['list_show_delete'] ): ?>
		<th>Actions</th>
	<?php endif; ?>
  </tr>
</thead>
<tbody>
	<?php foreach ($list as $key => $item){ ?>
		<tr>
			<?php foreach ($fields['list'] as $key => $value): ?>
				<td><?php echo $item->{$value['db_field']}; ?></td>
			<?php endforeach; ?>

			<?php if( $fields['list_show_edit'] || $fields['list_show_view'] || $fields['list_show_delete'] ): ?>
				<td class="module-actions" style="white-space: nowrap; width:1%;">
					<?php if( $fields['list_show_view'] ): ?>
						<a class="btn btn-success btn-sm view" href="<?php echo site_url("$module/view/$item->ID/"); ?>">
							<?php echo $labels['list_view_button']; ?>
						</a>
					<?php endif; ?>
					<?php if( $fields['list_show_edit'] ): ?>
						<a class="btn btn-primary btn-sm edit" href="<?php echo site_url("$module/update/$item->ID/"); ?>">
							<?php echo $labels['list_edit_button']; ?>
						</a>
					<?php endif; ?>
					<?php if( $fields['list_show_delete'] ): ?>
						<a class="btn btn-danger btn-sm delete" href="<?php echo site_url("$module/delete/$item->ID/"); ?>">
							<?php echo $labels['list_delete_button']; ?>
						</a>
					<?php endif; ?>
				</td>
			<?php endif; ?>
		</tr>
	<?php } ?>
</tbody>
</table>

<!-- pagination -->
<nav class="text-center">
    <ul class="pagination">
      <?php echo $pagination; ?>
    </ul>
</nav>
<!-- /pagination -->
