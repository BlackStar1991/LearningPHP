<?php
    function articles_all(){
        return [
            ["id"=>1, "title"=>"Title1", "date"=>"2015-01-01", "content"=>"Content1"],
            ["id"=>2, "title"=>"Title2", "date"=>"2015-01-01", "content"=>"Content2"]
        ];
    }

    function articles_get($id){
        return ["id"=>$id, "title"=>"Title".$id, "date"=>"2015-01-01", "content"=>"Content".$id];
    }

    function articles_new($title, $date, $content){
        
    }

    function articles_edit($id, $title, $date, $content){
        
    }

    function articles_delete($id){
        
    }
?>