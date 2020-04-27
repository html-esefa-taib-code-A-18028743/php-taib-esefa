function ajoutClient($post){
  
        $query = Connection::db()->prepare("INSERT into `client` "
                . "(civilite,nom,prenom,date_naissance,tel,email,mot_de_passe,conseillere,admin_note,date_creation) "
                . "values "
                . "(:civilite,:nom,:prenom,:date_naissance,:tel,:email,:mot_de_passe,:conseillere,:admin_note,:date_creation)");
  
        $tab = explode("/",$post['date_naissance']);
        $date_naissance = $tab[2]."-".$tab[1]."-".$tab[0];
  
        $query->execute(array(
            ':civilite' => $post['civilite'],
            ':nom' => $post['nom'],
            ':prenom' => $post['prenom'],
            ':date_naissance' => $date_naissance,
            ':tel' => $post['tel'],
            ':email' => $post['email'],
            ':mot_de_passe' => $post['mot_de_passe'],
            ':admin_note' => $post['admin_note'],
            ':conseillere' => $post['conseillere'],
            ':date_creation' => date('Y-m-d H:i:s'),
  
        ));
  
        $id_client = $query->lastInsertId();
         
        $query2 = Connection::db()->prepare("INSERT into `adresse_livraison` "
                . "(adresse1,adresse2,adresse3,ville,cp,pays,id_client) "
                . "values "
                . "(:adresse1,:adresse2,:adresse3,:ville,:cp,:pays,:id_client)");
  
        $query2->execute(array(
            ':adresse1' => $post['adresse1'],
            ':adresse2' => $post['adresse2'],
            ':adresse3' => $post['adresse3'],
            ':ville' => $post['ville'],
            ':cp' => $post['cp'],
            ':pays' => $post['pays'],
            ':id_client' => $id_client,
  
        ));
         
        echo "<script> alert('Ajout avec succes');</script> ";
  
    }
