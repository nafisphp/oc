<?php/** Abdukodir Khojiyev* Backend Developer* Project: oc* Date:  7/28/2024*/namespace Nafisphp\Oc\Interfaces;interface ObcInterface{    public static function start($callback = null, $chunk_size = 0, $flags = PHP_OUTPUT_HANDLER_STDFLAGS);    public static function flush();    public static function list_handlers();    public static function level();    public static function status();    public static function length();    public static function contents();    public static function get_clean();    public static function get_flush();    public static function end_flush();    public static function end_clean();    public static function clean();    public static function implicit_flush();    public static function gzhandler();    public static function _add_rewrite_var();    public static function reset_rewrite_vars();    public static function wrap();}