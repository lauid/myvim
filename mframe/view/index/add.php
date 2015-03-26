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
.table tr.alter th{ 
background-color:#f5fafe; 
} 
/*
.table tr.alter td{ 
background-color:#f5fafe; 
} 
*/
</style> 
</head> 
<body> 
<form action="" method="post">
<table width="90%" class="table"> 
<tr class="alter"> 
	<td colspan="2">xxxxxxxxxxxxxx</td> 
</tr> 
<?php if(isset($data['id']) && $data['id']) { ?>
<tr class="alter"> 
	<th>ID</th> 
	<td>
		<?php echo "<input type='text' name='id' value=".$data['id']." readonly>";?>
	</td> 
</tr> 
<?php } ?>
<tr class="alter"> 
	<th>TITLE</th> 
	<td><input name="title" type="text" value="<?php echo isset($data['title'])?$data['title']:''; ?>"></td> 
</tr> 
<tr class="alter"> 
	<th>CONTENT</th> 
	<td><textarea name="content" type="text" ><?php echo isset($data['content'])?$data['content']:''; ?></textarea></td> 
</tr> 

<tr class="alter"> 
	<td colspan="2"><input value="提交" type="submit"></td> 
</tr> 
</table> </form>

</body> 
</html> 
