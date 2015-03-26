### mframe
***
##### tree
> .  
> ├── config.php  
> ├── controller  
> │   └── indexController.php  
> ├── core  
> │   ├── BaseController.php  
> │   ├── BaseModel.php  
> │   ├── BaseView.php  
> │   └── Route.php  
> ├── model  
> │   └── indexModel.php  
> ├── README.md  
> ├── view  
> │   └── main.php  
> └── www  
>     └── index.php  
>

##### demo.sql
> CREATE TABLE `articles` (  
> 			`id` int(11) unsigned NOT NULL AUTO_INCREMENT,  
> 			`title` varchar(255) DEFAULT NULL,  
> 			`content` longtext NOT NULL,  
> 			`date1` datetime NOT NULL,  
> 			`date2` datetime NOT NULL,  
> 			PRIMARY KEY (`id`)  
> 			) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8  
>

##### run
> cd www/ && php -S 192.168.3.12:3000  

### GIT

##### Git global setup:

- git config --global user.name "liugaohua"
- git config --global user.email "liugaohua@bxd365.com"

##### Create Repository
- mkdir mframe
- cd mframe
- git init
- touch README
- git add README
- git commit -m 'first commit'
- git remote add origin git@gitlab.xdao.me:liugaohua/mframe.git
- git push -u origin master
- ##### Existing Git Repo?
- cd existing_git_repo
- git remote add origin git@gitlab.xdao.me:liugaohua/mframe.git
- git push -u origin master
