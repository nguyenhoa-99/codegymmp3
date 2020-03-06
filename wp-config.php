<?php

/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'codegymmp3' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3GR5-l1WA!QfQ%gF@-0LD}B(cO^nURJQ!7F;r=2rKQ1QMaS!w~W=N7tI|o*w/!cJ' );
define( 'SECURE_AUTH_KEY',  'ZL&yR)Nm WF^KJQLpi[e0gAz,HMuL1m<;D_R5nU$/oztZw+PdblE^E)ME9Dv<.=X' );
define( 'LOGGED_IN_KEY',    '9k?`(#OVnjwaP&j|QBJsCn;_Z;@e-Jx@x}zkghh=I^0)4-5q}7`_#.]Ifc4|T]nw' );
define( 'NONCE_KEY',        'cGT>^_e 1l_O0+lqHkplr~afig0_xyF@fGV]ff(xDZSDB1BO`T89O4C>yEfZAHIt' );
define( 'AUTH_SALT',        'c&@].-c8=;*MjL~SLJKE&x/&$`}z~Dt1W*vll>?Uh5dA>fdN1fsc3|nD{T*X}v)-' );
define( 'SECURE_AUTH_SALT', 'OyZ g/g%E>Kk}xAF]k]x6i|&lbA^9@:OnQ|aSq@eRZG=IWjAHkzu95bDu2JU-jzk' );
define( 'LOGGED_IN_SALT',   '2>6EwG8<`3pakX[O[T(;1m~}9pTs0]-F#]^8wLSG<*Rfs<}mArlwv1gHwP%.L{^W' );
define( 'NONCE_SALT',       'n6}xC81K[^fo{1QeqFUUFD&A@kVmsf/q3HiuK__`8:e13|%?CdjCZilXQi}]Ug]t' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
