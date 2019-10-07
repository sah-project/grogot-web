


<div class="container">
	<div class="row">
		<div class="col-md-10">
			
			<h3 class="mt-3">LIST OF PEOPLES</h3>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>email</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$n=1;
					 foreach ($peoples as $people) :
						?>
					<tr>
					<td><?=$n++  ?></td>
					<td><?php echo $people['judul'] ?></td>
					<td>Teknik</td>
					<td> 
						<a href="" class="badge badge-warning"> Detail</a>
						<a href="" class="badge badge-danger"> Hapus</a>
					</td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>

			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
  