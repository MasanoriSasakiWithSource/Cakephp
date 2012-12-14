<h1>Index Page</h1>
<p>MySampleData Find View.</p>
<form method="post" action="./find">
	ID:<input type="text" name="id" />
	<input type="submit" />
</form>

<table>
<?php if (isset($data)): ?>
	<tr>
		<td>Name:</td>
		<td><?php echo $data['MySampleData']['name']; ?></td>
	</tr>
	<tr>
		<td>Mail:</td>
		<td><?php echo $data['MySampleData']['mail']; ?></td>
	</tr>
	<tr>
		<td>Tel:</td>
		<td><?php echo $data['MySampleData']['tel']; ?></td>
	</tr>
<?php endif; ?>
</table>
<ul>
	<li><a href="./dataList">データ一覧画面に戻る</a></li>
</ul>

