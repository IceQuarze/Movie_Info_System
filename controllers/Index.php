<?php
    class Index extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('AllData');
        }
        public function index($page=1){
            $page=(int)($page);
            $res=$this->AllData->getAll();
            $data=array_slice($res,($page-1)*10,10);
            $this->load->view("index.html",array('data'=>$data,'cur_page'=>$page,'max_page'=>(int)(count($res)/10+1)));
        }
        public function showPage($id){
            $res=$this->AllData->getById($id);
            $this->load->view("detail.html",array('title'=>$res->name,
                    'detail'=>$res->comment,'img_url'=>$res->img,'rank'=>$res->rank,'date'=>$res->date));
        }
    }