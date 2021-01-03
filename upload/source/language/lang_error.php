<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_error.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'System Message' => 'Tin hệ thống',

	'config_notfound' => 'Tập tin cấu hình "config_global.php" không tìm thấy hoặc không thể truy cập, hãy chắc chắn bạn đã cài đặt nó',
	'template_notfound' => 'Template không thấy hoặc không thể truy cập',
	'directory_notfound' => 'Thư mục không tìm thấy hoặc không thể truy cập',
	'request_tainting' => 'Hiện yêu cầu truy cập của bạn có chứa các ký tự bất hợp pháp, đã bị từ chối bởi hệ thống',
	'db_help_link' => 'Click vào đây để được giúp đỡ',
	'db_error_message' => 'Thông tin về Lỗi',
	'db_error_sql' => '<b>SQL</b>: $sql<br />',
	'db_error_backtrace' => '<b>Truy vấn</b>: $backtrace<br />',
	'db_error_no' => 'Error code',
	'db_notfound_config' => 'Tập tin cấu hình "config_global.php" không tìm thấy hoặc không thể truy cập',
	'db_notconnect' => 'Không thể kết nối đến máy chủ cơ sở dữ liệu',
	'db_security_error' => 'Những lỗ hổng bảo mật trong truy vấn dữ liệu.',
	'db_query_sql' => 'Truy vấn',
	'db_query_error' => 'Truy vấn lỗi',
	'db_config_db_not_found' => 'Cấu hình cơ sở dữ liệu lỗi, hãy kích config_global.php kiểm tra lại',
	'system_init_ok' => 'Khởi tạo hệ thống website hoàn tất, xin vui lòng <a href="index.php"> nhấn vào đây </ a> để tìm hiểu thêm.',
	'backtrace' => 'Các thông tin về',
	'error_end_message' => '<a href="http://{host}">{host}</a> đang gặp lỗi',
	'suggestion_plugin' => 'หากคุณเป็นผู้ดูแลเว็บ ขอแนะนำให้คุณลองปิด<a href="admin.php?action=plugins&frames=yes" class="guess" target="_blank">{guess}</a> ปลั๊กอินและ<a href="admin.php?action=tools&operation=updatecache&frames=yes" class="guess" target="_blank">อัปเดตแคช</a>ใน AdminCP หากปัญหาได้รับการแก้ไขหลังจากปิดปลั๊กอินแล้ว ขอแนะนำให้คุณติดต่อผู้จัดหาปลั๊กอินเพื่อขอความช่วยเหลือดังกล่าว',
	'suggestion' => 'หากคุณเป็นผู้ดูแลเว็บขอแนะนำให้คุณลอง<a href="admin.php?action=tools&operation=updatecache&frames=yes" target="_blank">อัปเดตแคช</a>ใน AdminCP หรือคุณสามารถใช้<a href="https://www.discuz.net/" target="_blank">เว็บไซต์อย่างเป็นทางการของ Discuz! </a> เพื่อขอความช่วยเหลือ หากคุณแน่ใจว่านี่เป็นข้อบกพร่องของโปรแกรม คุณสามารถ <a href="https://gitee.com/ComsenzDiscuz/DiscuzX/issues" target="_blank">ส่งรายการ Issue</a> ถึงเราได้โดยตรง',

	'file_upload_error_-101' => 'Tải lên thất bại! Tải lên tập tin không tồn tại hoặc không hợp pháp, xin vui lòng quay trở lại. ',
	'file_upload_error_-102' => 'Tải lên thất bại! Tập tin đang tải lên không phải là ảnh .',
	'file_upload_error_-103' => 'Tải lên thất bại! Không thể để ghi tập tin hoặc viết .',
	'file_upload_error_-104' => 'Tải lên thất bại! Không được nhận định dạng được tập tin ảnh .',
);

?>