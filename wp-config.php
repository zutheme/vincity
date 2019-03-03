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
define( 'DB_NAME', 'vincity' );

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
define( 'AUTH_KEY',         '&Mndd{Jqqq687@F|KRp`oMeeJQ9E/y_Iaj|s@7Pj?}[[r~:  diDp@}k{P9b1;5A' );
define( 'SECURE_AUTH_KEY',  '[;aj;m1^}}5ISKPV;e9l4[(%U{eVF[WCk2<1`w~uL3aVS9|/#p,(DA#gDIK{x;~P' );
define( 'LOGGED_IN_KEY',    'R*xzp/G*lN#]n^_$Ke[#BHB4?r>[;[6|;a;q+xl#3f<^%kFaVa9 Z5o4:D>QY`we' );
define( 'NONCE_KEY',        'G4EN{|!IHe@J^^>As?k[^^f+M %(/`-j[2JTi)Vs]Pj79j,I3Qx!d1 B&W#OB}z,' );
define( 'AUTH_SALT',        'r,q_v{g!;S$Flo?iz$g#yj8|`{*3IrXroo]@ZF2lx0oL;Kw^$j0ei))y4{?x]wW8' );
define( 'SECURE_AUTH_SALT', 'n!-yYpr8,[g&E]vjc@.#2qz?sI/n{b,h~5no^{KL?3Ur{-E>d~? ~p*G&Q#cr8N6' );
define( 'LOGGED_IN_SALT',   'AE7TgfPr)84xE+>LOdLy_?-<4.YmR`yz ,J}YV6`}0Jglg]sh+G{nxd hB/9e;]9' );
define( 'NONCE_SALT',       'u;r744zqRNy].:9A<wURUy?d-Yqg~tLu*LV:r#&8+-}-Z58&-5{5}Bb9^POwDkAu' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
