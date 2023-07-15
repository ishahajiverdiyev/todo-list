<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_model extends CI_Model {

  public $table="Information";

  public function __construct() {
    parent::__construct();
  }


  public function getAll() {
    $sql_query = "SELECT
                    id,
                    title,
                    description,
                    is_checked,
                    created_at
                 FROM `$this->table`
                 LIMIT 5";
    $info_list_query = $this->db->query($sql_query);
    $info_list = $info_list_query->result_array();
    return rest_response(
      200,
      lang("Success"),
      $info_list
    );
  }


  public function addData($data=array()){
    return $this->db->insert($this->table, $data);
  }


  public function edit($id){
    $sql_query = "SELECT * FROM `{$this->table}` WHERE `Id` = $id";
    $info_query = $this->db->query($sql_query);
    $info = $info_query->row_array();
    // var_dump($info);
    return rest_response(
      200,
      lang("Success"),
      $info
    );
}


  public function updateItem($params){
    if(!$params["title"] && !$params["description"]){
      $this->db->where("id", $params["id"]);
      $this->db->update($this->table, ["is_checked" => $params["is_checked"]]);
    }else{
      $this->db->where("id", $id)->update($this->table, [
        "title" => $params["title"],
        "description" => $params["description"]
      ]);
    }

    return rest_response(
      200,
      lang("Success")
    );

}


public function deleteItem($id){
   return $this->db->where("id", $id)->delete("Information");
}

}
