<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  function __construct() {
    parent::__construct();
  }

    public function calculate(){
      $this->load->view('tasks/calculate');
    }

   public function index(){
    $this->load->model("Add_model","model");
    $this->load->view('tasks/index');
  }

    public function listLive(){
     $this->load->model("Add_model","model");
     $res = $this->model->getAll();
     return json_response($res);
   }

  public function addInfo(){
    $params = [
      "title" => $this->input->post("title"),
      "description" => $this->input->post("description"),
    ];
    if(!$params["title"] || !$params["description"]){
      return json_response(rest_response(400, "Title and description required"));
    }
    $this->load->model("Add_model","model");
    $res = $this->model->addData($params);
    return json_response($res);
  }


  public function deleteItem($id){
    $this->load->model("Add_model","model");
    $this->model->deleteItem($id);
    redirect("getAll");
  }


  public function edit($id){
    $this->load->model("Add_model","model");
    $databaseInfo = $this->model->edit($id);
    $data = $databaseInfo["data"];
    $this->load->view('tasks/updateIndex',[
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
