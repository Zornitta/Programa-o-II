 <?php
 // Código PHP estruturado
 $preco = 100;
 $desconto = 0.1;
 $final = $preco - ($preco * $desconto);
 echo $final;
 // Resultado: 90
 ?>

 <?php
    class Produto{
        public $preco;
        public $desconto;
    }

    public function Calculo(){
        return $this->preco - ( $this->preco * $this->desconto )
    }

        $tenis = new Produto();
        $tenis->$preco = 100;
        $tenis->$desconto = 0.1;
        echo $tenis->Calculo();
 ?>