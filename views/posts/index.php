
<h3 style="font-weight: bold;">Posts List</h3>

<table class="table table-bordered">
	<thead>
	<tr>
		<th>ID</th><th>AUthor Name</th><th>Content</th>
	</tr>
	</thead>
	<tbody>
  <?php foreach ($posts as $post) {?>
		<tr>
			<td><?=$post->id;?></td><td><?=$post->author_name;?></td>
			<td><a href='/myapp/posts/show/<?=$post->id;?>'> see content</a></td>
		</tr>
  <?php }?>
	</tbody>
</table>

<a href="" class="btn btn-warning">Add Post</a>
<a href="/myapp" class="btn btn-warning">Go Home</a>
