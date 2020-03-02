<?php
class ChacingJokes {
    public $url;

    private $fileLocation = './test_paper';

    public function LoadJson($url) {

        $cachedFile = $this->fileLocation;
        $filename = 'C:\xampp\htdocs\test_paper/api/test_paper';
        
        if (file_exists($cachedFile)) {

            if(time() - filemtime($filename) > (24 * 3600)) {
                echo "cache is within 24 hours\n";
                return file_get_contents($cachedFile);
            }
        }
        
        $jsonFile = file_get_contents($url);
        file_put_contents($cachedFile, $jsonFile);
        
        echo $jsonFile;
    }
}