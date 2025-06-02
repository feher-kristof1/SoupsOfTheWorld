<?php
    include_once "Soup.php";

    class soup{
        private $connect;
        public function __construct($server,$user,$pword,$db) {
           $this->connect = new mysqli($server,$user,$pword,$db);
           if ($this->connect->connect_error) {
                die("Connection failed: " . $this->connect->connect_error);
           }
        }

        function getSoups(){
            $sql = "SELECT * FROM sups";
            $res = $this->connect->query($sql);
            $soups = [];
            while ($s = $res->fetch_object()) {
                $soups[] = new Sup($s->name,$s->ingredients,$s->preptime,$s->cookingtime,$s->servings,$s->instructions);
            }
            return $soups;
        }

        function deleteSoup($id){
            $sql = "DELETE FROM sups WHERE ID = $id";
            $this->connect->query($sql);
        }

        function addSoup($name,$ing,$ptime,$ctime,$servings,$instr){
            $sql = "INSERT INTO sups (name, ingredients, preptime, cookingtime, servings, instructions) VALUES ('$name','$ing','$ptime','$ctime','$servings','$instr')";
            $this->connect->query($sql);
        }

        function makeTable($list){
            $trs="";
            foreach ($list as $s) {
                    $trs .="
                    <tr class='table-danger'>
                        <td>$s->name</td>
                        <td>$s->ingredients</td>
                        <td>$s->preptime</td>
                        <td>$s->cookingtime</td>
                        <td>$s->servings</td>
                        <td>$s->instructions</td>
                        <td><a href='' class='btn btn-danger'>Delete</a></td>
                    </tr>
                ";
            }
            return $trs;
        }
    }

?>