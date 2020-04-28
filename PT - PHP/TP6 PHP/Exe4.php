function ajout_commande($id_commande,$id_produit,$id_client,$quantite){

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($id_commande,  $_SESSION['panier']['id_commande']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['quantite'][$positionProduit] += $quantite ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['id_commande'],$id_commande);
         array_push( $_SESSION['panier']['quantite'],$quantite);
         array_push( $_SESSION['panier']['id_client'],$id_client);
         array_push( $_SESSION['panier']['id_produit'],$id_produit);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
