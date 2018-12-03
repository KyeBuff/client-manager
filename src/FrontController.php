<? 

namespace src;

class FrontController {

    private $url;

    public function set_url($url) 
    {
        return $this->url = $url;
    }

    public function get_url() 
    {
        return $this->url;
    }

    public function render() 
    {
        var_dump($this->get_url());
    }

}