<?php  ?>
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
