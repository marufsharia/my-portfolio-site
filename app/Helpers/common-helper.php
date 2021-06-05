<?php
	/**
	 * Created by PhpStorm.
	 * User: maruf sharia
	 * Date: 3/9/2019
	 * Time: 4:52 PM
	 */
    
    use Illuminate\Support\Facades\Auth;
    
    /**
	 * Generate Alpha Numeric Unique string or token
	 * @param int $limit Length of string or token
	 * @return string
	 * @throws Exception
	 */
	function tokenGenerate($limit = 20)
	{
		$token = "";
		$codeAlphabet = "ABCDEFGHIJKLMNPQRSTUVWXYZ";
		$codeAlphabet .= "abcdefghijklmnpqrstuvwxyz";
		$codeAlphabet .= "123456789";
		$max = strlen($codeAlphabet);
		for ($i = 0; $i < $limit; $i++) {
			$token .= $codeAlphabet[random_int(0, $max - 1)];
		}
		
		return $token;
	}
	
	/**
	 * Image uploader helper
	 */
	function fileUploadHelper($file, $destinationPath)
	{
		$extension = $file->getClientOriginalExtension();
		$fileName = tokenGenerate(20) . '.' . $extension;
		$file->move($destinationPath, $fileName);
		$uploadedPath = $destinationPath . $fileName;
		return $uploadedPath;
	}
    
    
    function deleteFile($file)
    {
        
        $flag = false;
        if (!empty($file) && file_exists($file)) {
            $flag = (unlink($file)) ? true : false;
        }
        return $flag;
    }
    
    /*slider upload path*/
function getSliderPath($user_name){
    return config('blogfolio.upload_path.slider'). $user_name. '/';
}

