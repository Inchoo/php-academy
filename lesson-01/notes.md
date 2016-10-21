# Environment

Linux is preferred environment!
Apache, MySql, PHP

XAMPP or Wamp  
https://www.apachefriends.org/index.html  
http://www.wampserver.com/en/  

Wamp is preferred, avoid wizards :)

Netbeans PHP or PhpStorm  
https://netbeans.org/downloads/ (php column)  
https://www.jetbrains.com/phpstorm/download/  

Git (for Windows)  
https://git-scm.com/downloads 

# Git 

1. Register, login and create New Repository on [Github](github.com)
2. Open Git Bash:

* navigate and create git repo in folder where your code is
  (this creates hidden .git/ folder inside)

```
cd c:/xampp/htdocs
git init
```

* set user and email for that repo
```
git config user.name "Pero Peric"
git config user.email pero@gmail.com
```

* commit and push to Github (copy proper link from Github)
```
git add .
git commit -m "first commit"
git remote add origin https://github.com/myusername/myrepo.git
git push -u origin master
```

3. From home:

* set user and email globally on your PC
```
git config --global user.name "Pero Peric"
git config --global user.email pero@gmail.com
```

* navigate to folder and clone your repo there
```
cd c:/xampp/htdocs
git clone https://github.com/myusername/myrepo.git
```
