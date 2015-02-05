下载

$ wget -O DrawIt.vba.gz http://www.vim.org/scripts/download_script.php?src_id=8798

安装

$vim DrawIt.vba.gz
:so %
:q

使用：

在vim的普通模式下
\di    启动
\ds    关闭

在vim的visual block（可视块）模式下，进入可视块模式的方法是Ctrl-v组合键。选择一个矩形框，然后
\b    矩形框
\e    椭圆

非可视模式！
^    上箭头
\^    粗大上箭头
v    下箭头
\v    粗大下箭头
>    右箭头
\>    粗大右箭头
<    左箭头
\<    粗大左箭头

PgUp    右上斜线
PgDn    右下斜线
End       左下斜线
Home    左上斜线
