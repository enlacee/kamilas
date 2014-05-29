<?php
session_start();

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$keySession = isset($_REQUEST['key']) ? $_REQUEST['key'] : '';

upload($keySession, $id);


// ----------------------------------------------------------------------------
// ----------------------------------------------------------------------------
function getPathImage()
{
    $path = realpath(dirname(__FILE__));    
    $path =  str_replace('mypanel', '', $path);
    return $path;
}

function upload($keySession, $id = '')
{
    
    // images tmp (imagenes temporales)    
    $tmpPath = getPathImage() . "images/tmp/"; //ECHO "xxx". $tmpPath; EXIT;
    $tmpUrl = "FALSE";
        
    $path = $tmpPath;
    $url = $tmpUrl;

    if (!empty($path) && !empty($url)) {            
        $targetFolder = $path;
        if (!empty($_FILES)) {                
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = uniqueFileName($_FILES['file']['name']);

            $targetFile = rtrim($targetFolder,'/') . '/' . $fileName;
            $targetFileUrl = rtrim($url,'/') .'/'.$fileName;
            // Validate the file type
            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $fileParts = pathinfo($_FILES['file']['name']);

            if (in_array($fileParts['extension'], $fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
                uploadSave($keySession, $id, $fileName, $targetFile, $targetFileUrl);
                echo '1';
            } else {
                echo 'Invalid file type.';
            }
        }
    }        
}

/**
 * funcional solo para 1 imagen pekeupload
 */
function uploadSave($keySession, $id, $fileName, $path, $url)
{
    $dataSession['img_tmp'] =  array(
        'id' => $id,
        'name' => $fileName,
        'path' =>  $path,
        'url' => $url
    );
    if ($keySession == '') { // == 1
        $_SESSION['productos'] = $dataSession; 
    } elseif ($keySession == 2) {
        $_SESSION['banners'] = $dataSession;
    }
     //echo "<pre>"; print_r($_SESSION);
    
} 



/// ayuda
    /**
     * Soport file extension (2,3 or 4 char)
     * ejem: $targetFileUrl('.py')
     * @param String $fileName
     * @return string
     */
    function uniqueFileName($fileName)
    {   
        $rs = false;
        if(strlen($fileName) >= 3) {
            for ($i = 3; $i <= 5; $i++) { 
                $extension =  substr($fileName, (strlen($fileName)-$i));
                if(strpos($extension, '.') !== false) {
                    $rs = time().$extension;
                    break;
                }
            }            
        }
        return $rs;
    }
    
/**
 * 
 * @return Construye URL local
 */    
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['HTTP_HOST'],
    $_SERVER['REQUEST_URI']
  );
}    