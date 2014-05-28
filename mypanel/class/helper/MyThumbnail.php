<?php

class MyThumbnail
{
    public $thumbnail_width = 134;
    public $thumbnail_height = 189;    
    
    /**
     * constructor
     */
    public function __construct($width = '', $height = '')
    {
        $this->setDimension($width, $height);
    }    

    /**
     * Setting width and hetight for thubnail
     * @param int $width
     * @param int $height
     */
    public function setDimension($width, $height)
    {
        $this->thumbnail_width = ($width != '') ? $width : $this->thumbnail_width;
        $this->thumbnail_height = ($height != '') ? $height : $this->thumbnail_height;
    }
    
    /**
     * Generate thumbnail
     * @param String $updir directory origin imagen
     * @param String $extension of file example: (jpg, png, gif)
     * @param Integer $id Char unique
     * @param String $saveDir directory for save new thumbnail
     */
    public function makeThumbnail($updir, $extension, $id, $saveDir)
    {
        $this->process($updir, $extension, $id, $saveDir);
    }
    
    /**
     * process
     */
    private function process($updir, $extension, $id, $saveDir)
    {
        $arr_image_details = getimagesize($updir . $id . $extension); // pass id to thumb name
        $original_width = $arr_image_details[0];
        $original_height = $arr_image_details[1];
        if ($original_width > $original_height) {
            $new_width = $this->thumbnail_width;
            $new_height = intval($original_height * $new_width / $original_width);
        } else {
            $new_height = $this->thumbnail_height;
            $new_width = intval($original_width * $new_height / $original_height);
        }
        $dest_x = intval(($this->thumbnail_width - $new_width) / 2);
        $dest_y = intval(($this->thumbnail_height - $new_height) / 2);
        if ($arr_image_details[2] == 1) {
            $imgt = "ImageGIF";
            $imgcreatefrom = "ImageCreateFromGIF";
        }
        if ($arr_image_details[2] == 2) {
            $imgt = "ImageJPEG";
            $imgcreatefrom = "ImageCreateFromJPEG";
        }
        if ($arr_image_details[2] == 3) {
            $imgt = "ImagePNG";
            $imgcreatefrom = "ImageCreateFromPNG";
        }
        if ($imgt) {
            $old_image = $imgcreatefrom($updir . $id . $extension);
            $new_image = imagecreatetruecolor($this->thumbnail_width, $this->thumbnail_height);
            imagecopyresized($new_image, $old_image, $dest_x, $dest_y, 0, 0, $new_width, $new_height, $original_width, $original_height);
            //$updir = !empty($dirLocation) ? $dirLocation : $updir;
            $imgt($new_image, $saveDir . $id . $extension);
        }
  
    }
    
    // -----------------------------------------------------------------
    // --------------------- function helper ---------------------------
    // -----------------------------------------------------------------
    
    /**
     * get Extension of name image example : file.jpg return jpg
     * @param String $fileName
     * @return Mix Boolean or String
     */
    public static function getFileExtension($fileName)
    {   
        $rs = false;
        if(strlen($fileName) >= 3) {
            for ($i = 3; $i <= 5; $i++) { 
                $extension =  substr($fileName, (strlen($fileName)-$i));
                if(strpos($extension, '.') !== false) {
                    $rs = $extension;
                    break;
                }
            }            
        }
        return $rs;
    }
    
    /**
     * Return file with name unique tool (time)
     * @param String $fileName
     * @return Mix Boolean or String
     */
    public static function getUniqueFileName($fileName)
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

}