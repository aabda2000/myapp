<h3 style="font-weight: bold;">Posts List</h3>

<table class="table table-bordered">
	<thead>
	<tr>
		<th><?=$post->author_name;?></th>
	</tr>
	</thead>
	<tbody>
		<tr>
			<td><?=$post->content;?></td>
		</tr>
	</tbody>
</table>
<a href="/myapp/posts/index" class="btn btn-warning" >Go Back</a>
