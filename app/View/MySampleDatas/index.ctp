<h1>Index Page</h1>
<p>MySampleData Datalist View.</p>

<ul>
	<li><a href="/www.cakephp.com/MySampleDatas/find">データ検索画面</a></li>
	<li><a href="/www.cakephp.com/MySampleDatas/add">データ追加画面</a></li>
</ul>

<table>
<?php foreach($datas as $data): ?>
<tr>
	<td><?php echo $data['MySampleData']['id']; ?></td>
	<td><?php echo $data['MySampleData']['name']; ?></td>
	<td><?php echo $data['MySampleData']['mail']; ?></td>
	<td><?php echo $data['MySampleData']['tel']; ?></td>
	<td><a href="./edit/<?php echo $data["MySampleData"]["id"]; ?>">編集</a></td>
	<td><a href="./delete/<?php echo $data["MySampleData"]["id"]; ?>">削除</a></td>
</tr>
<?php endforeach; ?>
</table>
