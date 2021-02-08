<?php foreach($records as $key => $value)
    {

        if($value['QTT'] === null)
        {
            $stock = 'out of stock';
        }
        else
        {
            $stock = $value['QTT'];
        }
        echo '<br><br>'.$value['nomProduit'].' '.$value['prixVenteParUnit'].' €/'.$value['unit']."(unite en stock: ".$stock.")";
        $refProduit = $value['refProduit'].'<br>'."<img src='images/$imageName'>".
               $imageName = $value['illustrationUrl'].'<br><br>_______________________________________________<br><br>'      
    }

    ?>