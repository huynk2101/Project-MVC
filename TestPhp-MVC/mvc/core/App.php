<?php 
class App {
    // http://localhost:8080/work-PHP/TestPhp-MVC/Home/SayHi/1/2/3
    protected $controller = "Home";
    protected $action = "SayHi";
    protected $params = [];


    function __construct()
    {
        // abdArray ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 3 [5] => 3 [6] => 4 )
         $arr = $this->UrlProcess();
        // print_r($arr);


        //  Xử lí controller
        if (file_exists("./mvc/controllers/".$arr[0].".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);  
        }
        require_once("./mvc/controllers/".$this->controller.".php");
        $this->controller = new $this->controller;
        

        // Xử lí action
        if (isset($arr[1])) {
            if (method_exists($this->controller,  $arr[1])) {
               $this->action = $arr[1];
            }
            unset($arr[1]);  
        }
        // echo $this->action;

        // Xử lí Params
        $this->params = $arr?array_values($arr):[];
        // $controllerObj = new $this->controller();
       call_user_func_array([$this->controller, $this->action],$this->params);

    }
    public function UrlProcess()
    {
        if (isset($_GET["url"])) {
        return  explode("/", filter_var(trim($_GET["url"], "/")));
    }

    }
}
?>
