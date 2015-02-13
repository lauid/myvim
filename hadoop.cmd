------------------------------------------------------------
#javac -cp $hadoop_CLASSPATH WordCount.java -d .
#ls
org  WordCount.java
#jar -cvf wordCout.jar org
------------
#hadoop fs -ls hdfs://localhost:9000/
Found 4 items
drwxr-xr-x   - hadoop supergroup          0 2015-02-10 15:08 hdfs://localhost:9000/output
drwxr-xr-x   - hadoop supergroup          0 2015-02-10 17:12 hdfs://localhost:9000/output2
drwxr-xr-x   - hadoop supergroup          0 2015-02-10 15:05 hdfs://localhost:9000/result
drwxr-xr-x   - hadoop supergroup          0 2015-02-10 14:58 hdfs://localhost:9000/testfolder

------------
#hadoop fs -copyFromLocal ~/access.log  hdfs://localhost:9000/testfolder

------------
#hadoop fs -ls hdfs://localhost:9000/testfolder
Found 2 items
-rw-r--r--   3 hadoop supergroup      20501 2015-02-10 17:19 hdfs://localhost:9000/testfolder/access.log
-rw-r--r--   3 hadoop supergroup        436 2015-02-10 14:58 hdfs://localhost:9000/testfolder/test.txt

------------
#hadoop jar wordCout.jar org.apache.hadoop.examples.WordCount hdfs://localhost:9000/testfolder hdfs://localhost:9000/output3

------------
#hadoop fs -ls hdfs://localhost:9000/output3
Found 2 items
-rw-r--r--   3 hadoop supergroup          0 2015-02-10 17:21 hdfs://localhost:9000/output3/_SUCCESS
-rw-r--r--   3 hadoop supergroup       1743 2015-02-10 17:21 hdfs://localhost:9000/output3/part-r-00000

------------
#hadoop fs -cat hdfs://localhost:9000/output3/part-r-00000
"-"     156
"GET    106
"Mozilla/5.0    106
(KHTML, 106
(Windows        106
+0800]  109
-       218
/       3
/blog   88
/favicon.ico    1
/site   13
/xdata/rest/www 1
0       3
192.168.3.11    109
200     3
202     38
400     3
404     40
502     63
537     63
570     2
6.1;    106
612     3
AppleWebKit/537.36      106
Chrome/39.0.2171.65     106
First   1
GPG.    1
Gecko)  106
HTTP/1.1"       106
KEYS    1
MD5     1
Make    1
NT      106
Other   1
PGP     3
Please  1
Safari/537.36"  106
The     1
Then    1
WOW64)  106
[10/Feb/2015:10:23:50   1
[10/Feb/2015:10:23:51   1
[10/Feb/2015:10:24:08   1
[25/Dec/2014:08:39:58   1
[25/Dec/2014:08:40:08   2
[25/Dec/2014:08:42:32   1
[27/Dec/2014:11:07:38   1
[27/Dec/2014:11:09:07   1
[27/Dec/2014:11:09:20   1
[27/Dec/2014:11:09:45   1
[27/Dec/2014:11:09:46   3
[27/Dec/2014:11:09:47   6
[27/Dec/2014:11:09:48   4
[27/Dec/2014:11:09:49   4
[27/Dec/2014:11:09:50   2
[27/Dec/2014:11:09:51   4
[27/Dec/2014:11:09:52   4
[27/Dec/2014:11:09:53   3
[27/Dec/2014:11:09:54   5
[27/Dec/2014:11:09:55   1
[27/Dec/2014:11:10:35   3
[27/Dec/2014:11:10:36   4
[27/Dec/2014:11:10:37   4
[27/Dec/2014:11:10:38   5
[27/Dec/2014:11:10:39   1
[27/Dec/2014:11:11:14   1
[27/Dec/2014:11:11:15   4
[27/Dec/2014:11:11:16   1
[27/Dec/2014:11:11:20   1
[27/Dec/2014:11:11:43   4
[27/Dec/2014:11:11:44   5
[27/Dec/2014:11:11:47   1
[27/Dec/2014:11:11:57   2
[27/Dec/2014:11:11:58   5
[27/Dec/2014:11:11:59   6
[27/Dec/2014:11:12:00   4
[27/Dec/2014:11:12:01   5
[27/Dec/2014:11:12:02   4
[27/Dec/2014:11:12:13   1
[27/Dec/2014:11:12:16   1
a       1
and     1
are     2
as      2
asc     1
backup  1
be      1
below.  1
can     1
distribution    1
distribution.   1
download        2
downloads       1
file    1
files   1
for     1
from    2
get     1
if      1
like    106
main    1
mirror  1
mirror. 1
mirrors 2
no      1
only    1
or      2
other   1
rather  1
relevant        1
signature       2
signatures      2
site,   1
sites   1
suggested       1
sure    1
than    1
the     6
these   1
to      2
use     1
using   2
verified        1
verify  2
well    1
working.        1
you     1
your    1
-----------------------------------------------
#hadoop jar K.jar org.conan.myhadoop.mr.kpi.KPIPV hdfs://localhost:9000/user/hdfs/log_kpi  
#hadoop jar K.jar org.conan.myhadoop.mr.kpi.KPI hdfs://localhost:9000/user/hdfs/log_kpi    


#hive
++++++++++++++++++++++++++++++++++++++++++++++++
#load data inpath 'hdfs://hadoop-node1:9000/someTest/book.txt' 
LOAD DATA LOCAL INPATH './t.log' OVERWRITE INTO TABLE xxx_log partition (YEAR='2014', MONTH='08',DAY='19');           

5217 RunJar
5859 RunJar
2773 NameNode
3253 NodeManager
2856 DataNode
3017 SecondaryNameNode
5274 RunJar
6459 Jps
3166 ResourceManager

#启动metastore服务
~ bin/hive --service metastore &
Starting Hive Metastore Server

#启动hiveserver服务
~ bin/hive --service hiveserver &
Starting Hive Thrift Server

#启动hive客户端
~ bin/hive shell

#apache日志中得到访问量最高前100个IP，实现很简单：
cat access.log.10 | awk '{a[$1]++} END {for(b in a) print b"\t"a[b]}'|sort -k2 -nr |head -n 50
