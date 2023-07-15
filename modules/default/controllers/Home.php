<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->load->view('index');
  }


   public function getAll(){
    $this->load->model("Add_model","model");
    $databaseInfo = $this->model->getAll();
    $data=$databaseInfo["data"];
    $this->load->view('table',[
      "data" => $data
    ]);
  }

  public function table(){

    $this->load->view('table');
  }

  public function addInfo(){
    $this->load->model("Add_model","model");
    $title=$this->input->post("title");
    $description=$this->input->post("description");
    if(!$title ||!$description){
      redirect("getAll");
  }
    $data = $this->model->addData(array(
        "title" => $title,
        "description" => $description,
    ));
    redirect("getAll");
  }


  public function deleteItem($id){
    $this->load->model("Add_model","model");
    $this->model->deleteItem($id);
    redirect("getAll");
  }


  public function edit($id){
    $this->load->model("Add_model","model");
    $databaseInfo = $this->model->edit($id);
    $data=$databaseInfo["data"];
    $this->load->view('updateIndex',[
      "data" => $data
    ]);
  }


  public function updateItem($id){
    $this->load->model("Add_model","model");

    $params = [
      "id" => $id,
      "title" => $this->custom_input->put("title"),
      "description" => $this->custom_input->put("description"),
      "is_checked"  => $this->custom_input->put("is_checked")
    ];

    $res = $this->model->updateItem($params);
    return json_response($res);
  }


  function errorPage(){
    echo "THIS IS ERROR";
  }

}
