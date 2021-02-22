<?php 



foreach($this->articles as $article)
    {
    
        if($article->qtt === null)
        {
            $stock = 'out of stock';
        }
        else
        {
            $stock = $article->qtt;
        }
        echo $article->refProduit;
        echo '<br><br>'.$article->nomProduit.' '.$article->prixVenteParUnit.' €/'.$article->unit."(unite en stock: ".$stock.")".'<br>';
        echo "<img src='Views/Images/".$article->illustrationURL."'><br><br>_______________________________________________<br><br>";
        
    
    }

    ?>