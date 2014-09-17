## Installation
- see this site: http://blog.mah-lab.com/2013/05/01/wordpress-on-heroku/
- S3 setting: http://qiita.com/sue738/items/c013e1b842f5e5ae7ce0
- Rootdomain redirect to www: http://qiita.com/shunwitter/items/1b9ca1984c459fcaa357

```
git clone git@github.com:chuta0915/wordpress.git
```

Change name.
```
mv wordpress www.hoge.com
cd www.hoge.com
```

## Setup Heroku

```
heroku create [アプリ名] -s cedar -b git://github.com/iphoting/heroku-buildpack-php-tyler.git
heroku addons:add cleardb:ignite -a [アプリ名]
heroku config -a [アプリ名] | grep CLEARDB_DATABASE_URL
heroku config:add DATABASE_URL='[↑で調べたURLを mysql://〜 から、ここに書きます]' -a [アプリ名]
```

## Setting 
modify wp-config.php based on CLEARDB_DATABASE_URL.
URL indicates username, password, DBname etc like `mysql://username:password@us-cdbr-east-XX.cleardb.com/heroku_00000000000?reconnect=true`

modify like this.

```
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_00000000000');
 
/** MySQL データベースのユーザー名 */
define('DB_USER', 'username');
  
/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');
   
/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-east-XX.cleardb.com');
```
 
copy and pasete the source code of unique key from here.
https://api.wordpress.org/secret-key/1.1/salt/

.htaccess file and nginx.conf file are already setup.

```
git add .
git commit -m "setup app info"
git push heroku master
```
 
## Plugin
- WP CleanFix
- jetpack-markdown
- google-analytics-for-wordpress
- nephila-clavata
