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
define('AUTH_KEY',         'YAjSvJ,T?-!8;mWoD-7eh:kz9}4VL$i_|dzfWr/V-?ev$<u.wMwn-nY+3fzy4ZrD');
define('SECURE_AUTH_KEY',  'l!+sshW+oKQ_@mSGNZ,4`5N`q|?diDegG&3>o>g??_K1%Ea7_/1in[@k;lm:q|B2');
define('LOGGED_IN_KEY',    'VC-wx|nMfZf@d[[C9~o2Z8,9&@qAwF*i|QJ+Io:0P!z*9kxX!w>iA?lxQBo*WK%1');
define('NONCE_KEY',        'E~VJ;=p~[%|jC%(`oiQ.[Wv&0Rqt:TTBd IdB:GcG_I4SQ}~|bz(e~=9GD@r/co0');
define('AUTH_SALT',        '}RU#%7Rmhqgd*+1<?|id!7LlUHt]eT$U@@9*nLU1-GkP<WiAI$3k4<-8%.MosgN/');
define('SECURE_AUTH_SALT', 'VFGVQ<@gimsj52%Si`}KVoZB#-UMRVQJuQv&-uE4?5agEHT0NR!5B=,JTWG31l1Z');
define('LOGGED_IN_SALT',   'rg1!S`N/~%>ERS}fKyN*qy@(2o+J|kf;M&V$zEd-l3!rm-89=.>}o:~`L|@tSnk/');
define('NONCE_SALT',       '>,B:(x6(I|h*sV+1LfBXiY&U|;;Zts}&Es-0FE$ZJ7fg2=sh|oFP8L]P)F!sy}9f');

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
