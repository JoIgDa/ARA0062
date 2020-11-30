<?php
class cards {
    public $image = "placeholder.png";
    public $title = "Titulo";
    public $body = "Descrição";
    public $price = "R$ 000,00";
    private $seller = "Vendedor";

    function create ($_image, $_title, $_body, $_price, $_seller) {
            $this->image = $_image;
            $this->title = $_title;
            $this->body = $_body;
            $this->price = $_price;
            $this->seller = $_seller;
            
            return "INSERT INTO `card` 
                            (`image`, `title`, `body`, `price`, `fk_usuario_id`) 
                            VALUES 
                            ('".$this->image."', '".$this->title."', '".$this->body."', '".$this->price."', '".$this->seller."')";
                            
            #$database->exec("INSERT INTO `card` 
            #                (`image`, `title`, `body`, `price`, `fk_usuario_id`) 
            #                VALUES 
            #                ("$card->$image", '$card->$title', '$card->$body', '$card->$price', '$card->$seller')");

        }        
    }
?>