//------------------------------------
function ajouter_Produit($nom, $id_produit, $quantite, $prix)
{ 
    $position_produit = array_search($id_produit,  $_SESSION['panier']['id_produit']);
    if($position_produit !== false)
    {
         $_SESSION['panier']['quantite'][$position_produit] += $quantite ;
    }
    else
    {
        $_SESSION['panier']['nom'][] = $nom;
        $_SESSION['panier']['id_produit'][] = $id_produit;
        $_SESSION['panier']['quantite'][] = $quantite;
        $_SESSION['panier']['prix'][] = $prix;
    }
}
//------------------------------------
