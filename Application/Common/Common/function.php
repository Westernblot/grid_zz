<?php

//检查验证码是否输入正确
function check_verify($code, $id = '') {
	$verify = new \Think\Verify();
	return $verify -> check($code, $id);
}

//发送邮件提醒
function sendMail($to, $subject, $content) {
	Vendor('PHPMailer.PHPMailerAutoload');
	$mail = new PHPMailer();//实例化
	$mail -> IsSMTP();// 启用SMTP
	$mail -> Host = C('MAIL_HOST');//smtp服务器的名称（这里以126邮箱为例）
	$mail -> SMTPAuth = C('MAIL_SMTPAUTH');//启用smtp认证
	$mail -> Username = C('MAIL_USERNAME');//你的邮箱名
	$mail -> Password = C('MAIL_PASSWORD');//邮箱密码
	$mail -> From = C('MAIL_FROM');//发件人地址（也就是你的邮箱地址）
	$mail -> FromName = C('MAIL_FROMNAME');//发件人姓名
	$mail -> AddAddress($to, "name");
	$mail -> WordWrap = 50;//设置每行字符长度
	$mail -> IsHTML(C('MAIL_ISHTML'));// 是否HTML格式邮件
	$mail -> CharSet = C('MAIL_CHARSET');//设置邮件编码
	$mail -> Subject = $subject;//邮件主题
	$mail -> Body = $content;//邮件内容
	$mail -> AltBody = "This is the body in plain text for non-HTML mail clients";//邮件正文不支持HTML的备用显示
	
	//$flag=$mail->send();
	
	return  $mail->Send() ? 'Message has been sent' : $mail->ErrorInfo;
	
	// if (!$mail -> Send()) {
		// echo "Message could not be sent. <p>";
		// echo "Mailer Error: " . $mail -> ErrorInfo;
		// exit();
	// } else {
		// echo "Message has been sent";
	// }
}


/**
 * excel 数据导出处理类
 */
 function exportExcel($expTitle, $expCellName, $expTableData) {
		$xlsTitle = iconv('utf-8', 'gb2312', $expTitle);
		//导出文件的名称
		$fileName = date('_YmdHis');
		//or $xlsTitle 文件名称可根据自己情况设定
		$cellNum = count($expCellName);
		$dataNum = count($expTableData);
		Vendor("PHPExcel.PHPExcel");

		$objPHPExcel = new \PHPExcel();
		$cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');

		//合并单元格,并赋值
		// $objPHPExcel -> getActiveSheet(0) -> mergeCells('A1:' . $cellName[$cellNum - 1] . '1');
	    // $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  Export time:'.date('Y-m-d H:i:s'));
		
		//标题头部
		for ($i = 0; $i < $cellNum; $i++) {
			$objPHPExcel -> setActiveSheetIndex(0) -> setCellValue($cellName[$i] . '1', $expCellName[$i][1]);
		}
		// 内容，Miscellaneous glyphs, UTF-8
		for ($i = 0; $i < $dataNum; $i++) {
			for ($j = 0; $j < $cellNum; $j++) {
				$objPHPExcel -> getActiveSheet(0) -> setCellValueExplicit($cellName[$j] . ($i + 2), $expTableData[$i][$expCellName[$j][0]],PHPExcel_Cell_DataType::TYPE_STRING);
			}
		}

		header('pragma:public');
		header('Content-type:application/vnd.ms-excel;charset=utf-8;name="' . $xlsTitle . '.xls"');
		header("Content-Disposition:attachment;filename=$fileName.xls");
		//attachment新窗口打印inline本窗口打印
		$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter -> save('php://output');
		exit ;
	}

/**
 * 网站截取字符串
 */
function subtext($text, $length){
    if(mb_strlen($text, 'utf8') > $length){
        return mb_substr($text, 0, $length, 'utf8').'...';
    } 
    return $text;
 }


/**
 * 判断是否为移动设备
 */
 function isMobile(){
 	
	
	  // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    } 
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            ); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        } 
    } 
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        } 
    } 
    return false;
	
	
 }


//判断是否微信
function isWeixin(){ 
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $is_weixin = strpos($agent, 'micromessenger') ? true : false ;   
    if($is_weixin){
        return true;
    }else{
        return false;
    }
  }


    //cURL库抓网页,从一个链接上取数据(get方式)
	 function curl_get($url = '') {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

	//cURL库抓网页,从一个链接上取数据(post方式)
	 function curl_post($url = '', $postdata = '') {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}
     
     function fmIds($ids=''){
        $ids = str_replace(",", "','", $ids);
        return "'".$ids."'";
    }
     

?>