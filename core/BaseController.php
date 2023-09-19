<?php 
class BaseController
{
    public function render($params, $data = [])
    {
        if(!empty($data))
			extract($data);
        $filename = '../app/views/'.$params.'.php';

        if(file_exists($filename)){
			require_once $filename;
		}else{
			require_once __DIR__."../../component/404.php";
			require_once $filename;
		}
    }
    public function redirect($params)
    {
        header("Location: " .url.$params);    
    }
    public function loadView($params){
        require_once '../app/views/'.$params.'.php';
    }
    
}