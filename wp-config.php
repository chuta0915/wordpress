<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/**
 * Heroku上のアドオンCLEARDB_DATABASE_URLの値を設定
 * 内容はダッシュボードから取得可能
 * 参考サイト: http://blog.mah-lab.com/2013/05/01/wordpress-on-heroku/
 */

/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_564f0672beca3ac');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'bdd5112ac0c86f');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'f3e94ad1');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-east-06.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qv6&vHQ0iPO)jN-6Pw =*j|Wt<H)VY,=a-WOX62!4}7#n}U|=`lR!J(R^&?k<g@T');
define('SECURE_AUTH_KEY',  'NUx3D7>pum#Xg2{,2C~Sl|3fOTYf84#P&G-G`khRqW2=73CT6kpJZ|#q8?=1KQNF');
define('LOGGED_IN_KEY',    'JpLbFnV@h0ka){V+n 6rLUM| ?TP{4FU/720t+->NYB?Gd-mqa;H^Z4ZJp>Z*2V!');
define('NONCE_KEY',        'PrR3gP-dRVnG)+|S<f(}Ff|H*onr,jE4l~U?D+vy&e73X0-t}m6qYv]E?RG3~yG)');
define('AUTH_SALT',        'k68d?u[yt`Rntcagz^~zV44FAA|J fnFr&kvKPLA8XR}N5:3>vP.I{gk@(Ju36O$');
define('SECURE_AUTH_SALT', '+>BhIEoTtddF:I@io}en4JG3eI*Q:OF+U8:Z6glC+3&C!=qX8|9DI=C/C+ hW-rp');
define('LOGGED_IN_SALT',   '{_A)~d@95m{1#3q&442B@Vi^n%H%YJeT=W!.NHntor%M}wxa)t&ZFU5C/x4|1u0v');
define('NONCE_SALT',       'Y_Sn5.$gy->5$NlwY>C~i/}>|NGpP#VNboC|ne&{H/]Db7IG,oO2lD_F;Rw=XPm1');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
