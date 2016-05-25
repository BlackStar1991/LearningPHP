<?php
    function articles_all(){
        $art1 = ["id"=>1, "title"=>"Title1", "date"=>"2015-01-01", "content"=>"Content1"];
        $art2 = ["id"=>2, "title"=>"Title2", "date"=>"2015-01-01", "content"=>"Content2"];
        $arr[0] = $art1;
        $arr[1] = $art2;
        return $arr;
    }

    function articles_get($id){
        $art1 = ["id"=>$id, "title"=>"Title".$id, "date"=>"2015-01-01", "content"=>"Content".$id];    
    }

    function articles_new($title, $date, $content){
        
    }

    function articles_edit($id, $title, $date, $content){
        
    }

    function articles_delete($id){
        
    }
?>