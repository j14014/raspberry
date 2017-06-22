<div class="sensors index">
	<h2><?php echo __('Sensors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sensor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sensors as $sensor): ?>
	<tr>
		<td><?php echo h($sensor['Sensor']['id']); ?>&nbsp;</td>
		<td><?php echo h($sensor['Sensor']['sensor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sensor['Sensor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sensor['Sensor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sensor['Sensor']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sensor['Sensor']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

<div id="charts">
	<!-- GoogleCharts -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">// <![CDATA[
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);
	function drawChart() {

	var data = new google.visualization.DataTable();
	data.addColumn('number','id');
	data.addColumn('number','sensor');
	<?php foreach ($sensors as $sensor): ?>
	data.addRows([
		[ <?php echo h($sensor['Sensor']['id']); ?>, <?php echo h($sensor['Sensor']['sensor']); ?> ],
	]);
	<?php endforeach; ?>

	var options = {
	title: 'My Daily Activities'
	};

	var chart = new google.visualization.LineChart(document.getElementById('linechart'));
	chart.draw(data, options);
	}
	// ]]></script>
	<div id="linechart" style="width: 900px; height: 500px;"></div>
</div>


	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sensor'), array('action' => 'add')); ?></li>
	</ul>
</div>
