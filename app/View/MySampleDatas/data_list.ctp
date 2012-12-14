<h1>Index Page</h1>
<p>MySampleData Datalist View.</p>

<ul>
	<li><a href="./find">データ検索画面</a></li>
	<li><a href="./add">データ追加画面</a></li>
</ul>

<table>
<?php foreach($datas as $data): ?>
<tr>
	<td><?php echo $data['MySampleData']['id']; ?></td>
	<td><?php echo $data['MySampleData']['name']; ?></td>
	<td><?php echo $data['MySampleData']['mail']; ?></td>
	<td><?php echo $data['MySampleData']['tel']; ?></td>
</tr>
<?php endforeach; ?>
</table>
