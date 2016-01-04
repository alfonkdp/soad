<?php

/**
 * *********************************************************************
 * By Agus Prasetyo
 * email : agusprasetyo811@gmail.com
 * **********************************************************************
 */

// Fungsi untuk menuliskan file
function write_to_file($file_txt, $data) {
	$data_txt = $file_txt;
	if (! file_exists($data_txt)) {
		$open = @fopen($data_txt, "w");
		@fputs($open, ' ');
		@fclose($open);
	} else {
		$open = fopen($data_txt, "w");
		fwrite($open, $data);
		fclose($open);
	}
}

// Fungsi untuk membaca file
function reading_file($file_txt) {
	$data_txt = $file_txt;
	$fh = fopen($data_txt, "r");
	$file = file_get_contents($data_txt);
	return $file;
}

// Fungsi Untuk menghapus File
function delete_file($file) {
	return @unlink($file);
}

// Fungsi Untuk menghapus File
function delete_dir($dir) {
	if (! file_exists($dir)) return true;
	if (! is_dir($dir)) return @unlink($dir);
	foreach ( scandir($dir) as $item ) {
		if ($item == '.' || $item == '..') continue;
		if (! delete_dir($dir . DIRECTORY_SEPARATOR . $item)) return false;
	}
	return rmdir($dir);
}

// Fungsi Untuk membaca direktori
function read_dir($system_dir) {
	$file_type = 'file';
	if (is_dir($system_dir)) {
		if ($dir = opendir($system_dir)) {
			while ( ($file = readdir($dir)) !== false ) {
				if ($file != "." && $file != "..") {
					$dir_name [] = $file;
				}
			}
			$data ['data'] = @$dir_name;
			return json_encode($data);
			closedir($dir);
		}
	}
}

// Fungsi untuk mendapatkan content dengan curl
function get_content_curl($url) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_COOKIEJAR, "cookies.txt");
	curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies.txt");
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_REFERER, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

// Fungsi Untuk membaca list controller dan method
function reading_controllers($sub_folder = NULL, $method_all = FALSE, $controller_unset = NULL) {
	$controllers = array ();
	$sub_folder = ($sub_folder != NULL) ? $sub_folder . '/' : '';
	$dir = APPPATH . '/controllers/' . $sub_folder;
	$files = scandir($dir);
	
	$controller_files = array_filter($files, function ($filename) {
		return (substr(strrchr($filename, '.'), 1) == 'php') ? true : false;
	});
	
	if ($controller_unset != NULL) {
		$controller_unset = (! is_array($controller_unset)) ? explode(',', $controller_unset) : $controller_unset;
	}
	
	foreach ( $controller_files as $filename ) {
		$class = strtolower(substr($filename, 0, strrpos($filename, '.')));
		
		if ($controller_unset != NULL) {
			if (! in_array($class, $controller_unset)) {
				require_once ($dir . $filename);
				$classname = ucfirst(substr($filename, 0, strrpos($filename, '.')));
				$controller = new $classname();
				$methods = get_class_methods($controller);
				
				foreach ( $methods as $method ) {
					if ($method_all == FALSE) {
						if ($method != '__construct' && $method != 'get_instance') {
							$get_method [$filename] [] = $method;
						}
					} else {
						$get_method [$filename] [] = trim($method);
					}
				}
				
				$controller_info = array (
						'filename' => $filename,
						'class_name' => $classname,
						'methods' => array_unique($get_method [$filename]) 
				);
				array_push($controllers, $controller_info);
			}
		} else {
			require_once ($dir . $filename);
			$classname = ucfirst(substr($filename, 0, strrpos($filename, '.')));
			$controller = new $classname();
			$methods = get_class_methods($controller);
			
			if ($method_all == FALSE) {
				foreach ( $methods as $method ) {
					if ($method != '__construct' && $method != 'get_instance') {
						$get_method [$filename] [] = trim($method);
					}
				}
			} else {
				foreach ( $methods as $method ) {
					$get_method [$filename] [] = trim($method);
				}
			}
			
			$controller_info = array (
					'filename' => $filename,
					'class_name' => $classname,
					'methods' => array_unique($get_method [$filename]) 
			);
			array_push($controllers, $controller_info);
		}
	}
	
	return $controllers;
}

function reading_file_from_ci_encoder($file_txt, $key = NULL) {
	$ci = & get_instance();
	
	if ($key != NULL) {
		$data_txt = $ci->encrypt->decode($file_txt, $key);
	} else {
		$data_txt = $ci->encrypt->decode($file_txt);
	}
	
	$fh = fopen($data_txt, "r");
	$file = file_get_contents($data_txt);
	return $file;
}
/**
 * Converts bytes into human readable file size.
 *
 * @param string $bytes
 * @return string human readable file size (2,87 Мб)
 * @author Mogilev Arseny
 */
function FileSizeConvert($bytes)
{
	$bytes = floatval($bytes);
	$arBytes = array(
			0 => array(
					"UNIT" => "TB",
					"VALUE" => pow(1024, 4)
			),
			1 => array(
					"UNIT" => "GB",
					"VALUE" => pow(1024, 3)
			),
			2 => array(
					"UNIT" => "MB",
					"VALUE" => pow(1024, 2)
			),
			3 => array(
					"UNIT" => "KB",
					"VALUE" => 1024
			),
			4 => array(
					"UNIT" => "B",
					"VALUE" => 1
			),
	);

	foreach($arBytes as $arItem)
	{
		if($bytes >= $arItem["VALUE"])
		{
			$result = $bytes / $arItem["VALUE"];
			$result = str_replace(".", "," , strval(round($result, 2)))." ".$arItem["UNIT"];
			break;
		}
	}
	return $result;
}