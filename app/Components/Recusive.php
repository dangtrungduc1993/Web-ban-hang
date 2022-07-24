<?php
namespace App\Components;

use App\Models\Category;

class Recusive{
    private $data;
    private $htmlSelect = '';

    public function __construct($data)
    {
        $this->data = $data;

    }

    public function categoryRecusive ($parentId,$id = 0){

        foreach($this->data as $value){
            if($value['parent_id'] == $id){
                $this->htmlSelect.= "<option value=' ".$value['id']."'>".$value['name'] ."</option>";
                $this->categoryRecusive($value['id']);
            }
        }
        return $this->htmlSelect;
    }
}
