<? 

namespace src;

class FrontController {

    private $url;
    private $routes = [
        '/' => 'home.php',
    ];

    public function set_url($url) 
    {
        return $this->url = $url;
    }

    private function get_url() 
    {   
        return $this->url;
    }

    private function get_header()
    {
        include 'view/header.php';
    } 

    private function get_page()
    {
        $page = $this->routes[$this->get_url()];
        include "view/$page";
    } 

    private function get_footer()
    {
        include 'view/footer.php';
    } 

    public function render() 
    {
        $this->get_header();
        $this->get_page();
        $this->get_footer();
    }

}