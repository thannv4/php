<?php
class app{
    protected $controller = "ctrangchu";
    protected $action = "Show";
    protected $params = [];

    function __construct(){
        $arr = $this->UrlProcess();
        
        if (file_exists("./mvc/controllers/".$arr[0 ].".php")){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        require_once "./mvc/core/controller.php";
        $this->controller = new $this->controller;
        if(isset($arr[1])){//nếu tên hàm có trong lớp controller lúc đó gắn action mới $arr[1]
            if(method_exists($this->controller, $arr[1])){
                 $this->action = $arr[1];
                 
            }
            unset($arr[1]);
        }

        $this->params = $arr?array_values($arr):[];//nếu mảng arr tồn tại gán giá trị array_values
        
        call_user_func_array([$this->controller, $this->action], $this->params );
    }

    function UrlProcess(){
        //trangchu/maytinh/1/2/3
        if ( isset($_GET["url"]) ){ 
           return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
?>