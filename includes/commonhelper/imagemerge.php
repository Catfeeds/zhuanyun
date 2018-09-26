<?php



/**

 * 图片合并

 * @author Administrator：张兴朋

 *

 */

class imagemerge

{

	/**

	 * 构造函数

	 */

	function __construct() {

		

	}

	/** 

	 * 图片合并

	 * @param unknown $pic_list：图片数组集合

	 * @return string：图片地址

	 */

	function ImageMerge($pic_list)

	{	

		//ini_set('memory_limit', '100M');

		$pic_list	 = array_slice($pic_list, 0, 2); // 只操作前9个图片



		$save_path = ROOT_PATH . 'engraveuploads/';

		$save_url=(dirname($_SERVER['PHP_SELF']) . '/engraveuploads/');

		$bg_w	 = 700;	// 背景图片宽度

		$bg_h	 = 842;	// 背景图片高度

		

		$background	= imagecreatetruecolor($bg_w,$bg_h); // 背景图片

		$color	 = imagecolorallocate($background, 255, 255, 255); // 为真彩色画布创建白色背景，再设置为透明

		imagefill($background, 0, 0, $color);

		imageColorTransparent($background, $color);

		

		$pic_count	= count($pic_list);

		$lineArr	= array();	// 需要换行的位置

		$space_x	= 3;

		$space_y	= 3;

		$line_x	 = 0;

		switch($pic_count) {

			case 1:

				@$start_x    = @intval($bg_w/4);  // 开始位置X

				@$start_y    = @intval($bg_h/8);  // 开始位置Y

				$space_y = 50;

				$pic_w   = 600; // 宽度

				$pic_h   = 290; // 高度

				break;

			case 2:

				$start_x    = 120;  // 开始位置X

				$start_y    = intval($bg_h/8);  // 开始位置Y

				$space_y = 50;

				$pic_w   = 460; // 宽度

				$pic_h   = 290; // 高度

				$lineArr    = array(2);

				$line_x  = 120;

				break;

		}

		foreach( $pic_list as $k=>$pic_path ) {

			$kk	= $k + 1;

			if ( in_array($kk, $lineArr) ) {

				$start_x	= $line_x;

				$start_y	= $start_y + $pic_h + $space_y;

			}

			$pathInfo = pathinfo($pic_path);

			switch( strtolower(@$pathInfo['extension']) ) {

				case 'jpg':

				case 'jpeg':

					$imagecreatefromjpeg	= 'imagecreatefromjpeg';

					break;

				case 'png':

					$imagecreatefromjpeg	= 'imagecreatefrompng';

					break;

				case 'gif':

				default:

					$imagecreatefromjpeg	= 'imagecreatefromstring';

					$pic_path	 = file_get_contents($pic_path);

					break;

			}



// 			$ch = curl_init();

// 			curl_setopt ($ch, CURLOPT_URL, $pic_path);

// 			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

// 			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);

// 			$resource = curl_exec($ch);

			

			$resource	= @$imagecreatefromjpeg($pic_path);

			@imagecopyresized(@$background,@$resource,@$start_x,@$start_y,0,0,@$pic_w,@$pic_h,@imagesx($resource),@imagesy($resource)); // 最后两个参数为原始图片宽度和高度，倒数两个参数为copy时的图片宽度和高度

			$start_x	= $start_x + $pic_w + $space_x;

		}

		//检查目录名

		$dir_name = 'image';

		//创建文件夹

		if ($dir_name !== '') {

			$save_path .= $dir_name . "/";

			$save_url .= $dir_name .'/';

			if (!file_exists($save_path)) {

				mkdir($save_path);

			}

		}

		$ymd = date("Ymd");

		$save_path .= $ymd ;

		$save_url .= $ymd;

		if (!file_exists($save_path)) {

			mkdir($save_path);

		}



		//新文件名

		$new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.jpg';

		$file_url = $save_url.'/'.$new_file_name;

// 		echo $save_path.$new_file_name.'<br>';

// 		echo $file_url;

		imagejpeg($background,$save_path.'/'. $new_file_name,100);

		

		return $file_url;

	}

	

	//header("Content-type: image/jpg");

	//imagejpeg($background);

}

?>