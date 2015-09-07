

	
		<table class="table table-stiped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>    					
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
                <?php $offset = $this->uri->segment(3, 0) + 1; ?>
                <?php foreach ($query->result() as $row): ?>
    				<tr>
    					<td><?php echo $offset++ ?></td>
    					<td><?php echo $row->name; ?></td>
    					<td><?php echo $row->email ?></td>    					
    					<td><?php echo $row->address; ?></td>
    				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<nav class='text-center'>
            <?php echo $pagination_links; ?>
			<!-- <ul class="pagination">
				<li><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
			</ul> -->
		</nav>
	
