<?php

/**
 * long
 *
 * Before finding the right people, the only need to do is to make yourself good enough. 
 *
 * @package		long
 * @author		longDD
 */
// ------------------------------------------------------------------------

/**
 * +----------------------------------------------------------
 * Ajax方式返回数据到客户端
 * +----------------------------------------------------------
 *
 * @access protected
 * @param mixed $data
 *        	要返回的数据
 * @param String $info
 *        	提示信息
 * @param boolean $status
 *        	返回状态
 * @param String $status
 *        	ajax返回类型 JSON XML
 *        	
 * @return void
 */
if (! function_exists ( 'ajaxReturn' )) {
	function ajaxReturn($data, $info = '', $status = 1, $type = '') {
		$result = array ();
		$result ['status'] = $status;
		$result ['info'] = $info;
		$result ['data'] = $data;
		if (empty ( $type ))
			$type = 'JSON';
		if (strtoupper ( $type ) == 'JSON') {
			// 返回JSON数据格式到客户端 包含状态信息
			header ( 'Content-Type:text/html; charset=utf-8' );
			exit ( json_encode ( $result ) );
		} elseif (strtoupper ( $type ) == 'EVAL') {
			// 返回可执行的js脚本
			header ( 'Content-Type:text/html; charset=utf-8' );
			exit ( $data );
		} else {
			// TODO 增加其它格式
		}
	}
}


