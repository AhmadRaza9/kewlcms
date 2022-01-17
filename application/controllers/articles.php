<?php 


class Articles extends MY_Controller{
    public function indeX(){
        $data['articles'] = $this->Article_model->get_articles('id', 'DESC', '10');
    }
}
?>