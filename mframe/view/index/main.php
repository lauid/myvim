<html> 
<head> 
	<meta charset="UTF-8">
<title>xxx</title> 
<style type="text/css"> 
body,table{ 
font-size:12px; 
} 
table{ 
//table-layout:fixed; 
empty-cells:show; 
border-collapse: collapse; 
margin:0 auto; 
} 
td{ 
height:30px; 
} 
h1,h2,h3{ 
font-size:12px; 
margin:0; 
padding:0; 
} 
.table{ 
border:1px solid #cad9ea; 
color:#666; 
} 
.table th { 
background-repeat:repeat-x; 
height:30px; 
} 
.table td,.table th{ 
border:1px solid #cad9ea; 
padding:0 1em 0; 
} 
.table tr.alter{ 
background-color:#f5fafe; 
} 
</style> 
</head> 
<body> 
<table width="90%" class="table"> 
<tr class="alter"> 
<th>ID</th> 
<th>TITLE</th> 
<th>CONTENT</th> 
<th>DAte1</th> 
<th>DATE2</th> 
<th>DONE</th> 
</tr> 
<?php //var_dump($data);
foreach($data as $k=>$v){?>
<tr > 
<td><?php echo $v['id'];?></td> 
<td><?php echo $v['title'];?></td> 
<td><?php echo $v['content'];?></td> 
<td><?php echo $v['date1'];?></td> 
<td><?php echo $v['date2'];?></td> 
<td>
	<a href="/index/article">查看</a>
	<a href="/index/delArticle/?id=<?php echo $v['id']?>">删除</a>
	<a href="/index/updateArticle/?id=<?php echo $v['id']?>">修改</a>
	<a href="/index/addArticle">添加</a>
</td> 
</tr> 
<?php } ?>
<!--
<tr class="alter"> 
<td>test2</td> 
<td>test2</td> 
<td>test2</td> 
<td>test2</td> 
<td>test2</td> 
<td>test1</td> 
</tr> 
-->
</table> 
</body> 
</html> 
