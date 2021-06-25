<?php 


class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
      
      $url = $this->parseUrl();

      // controller
      if(file_exists('../app/controllers/' . $url[0] . '.php')){
        $this->controller = $url[0];
        unset($url[0]);
      }

      require_once '../app/controllers/' . $this->controller . '.php';
      
      $this->controller = new $this->controller;
     
      //method

      if(isset($url[1])){
        if(method_exists($this->controller, $url[1])){
          $this->method = $url[1];
          unset($url[1]);
        }
      }

      // params

      if(!empty($url)){
        $this->params = array_values($url);
      }


      // Jalankan controller dan method,  serta kirimkan parameter jika ada

      call_user_func_array([$this->controller,$this->method], $this->params);


    }

    public function parseUrl()
    {


      // jika ada url yang dikirim
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/'); // megghapus tanda (/) diakhir
        $url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan url dari karakter yang ngaco
        $url = explode('/', $url); //pecah url berdasarkan (/) dan string nya akan menjadi array

        return $url;
      }
    }


}

?>