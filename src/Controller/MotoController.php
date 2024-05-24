<?php

namespace Src\Controller;


use Src\Entity\Moto;
use Src\Manager\MotoManager;
use Src\Manager\DatabaseManager;



class   MotoController
{
    private MotoManager $motoManager;
    public function __construct()
    {
        //J'injecte un nouvelle objet ServiceManager dans mon constructeur
        //Pour l'utiliser dans mon controller avec $this->serviceManager->findById() par exemple
        $this->motoManager = new MotoManager();
    }


    // Route: /moto
    public function getAll()
    {
        //Appel de template
        $motos= $this->motoManager->findAll();
        include(__DIR__ . "/../../Templates/moto/index.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        $motos= $this->motoManager->findById($id);
        echo "ROUTE: /moto/$id   (getById)";
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        $motos= $this->motoManager->findAll();
        echo "ROUTE: /moto/$type   (getByType)";
    }

    // Route: /moto/add/
    public function add(): void
    {
        //Verif SI form valider ( methode POST )
        //SI tous les champs sont fournies
        //add en BDD
        //redirection index

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if (isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['image']))
            {
            $moto=new Moto($_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
            $this->motoManager->add($moto);
            }
        }
        include(__DIR__ . "/../../Templates/moto/addMoto.php");
    }

    // Route: /moto/edit/$id
    public
    function edit(int $id): void
    {
        //Verif si form valider ( methode POST )
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index
        //Voir si l'id existe

        // Lana: j'essaie de recup l'id pour le modifié

        $motos = $this->motoManager->findById($id);

        if ($motos===false) {
            header("Location: http://localhost:8888/php-procedural/LanaKarmaouiPOO/index.php/moto");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['type']) && isset($_POST['price']) && isset($_POST['image'])) {

                $motos->setBrand($_POST['brand']);
                $motos->setModel($_POST['model']);
                $motos->setType($_POST['type']);
                $motos->setPrice($_POST['price']);
                $motos->setImage($_POST['image']);

            }
        }
        else {
            header("Location: http://localhost:8888/php-procedural/LanaKarmaouiPOO/index.php/moto");
        }

        include(__DIR__ . "/../../Templates/moto/editMoto.php");

    }

    // Route: /pizza/delete/$id
    public
    function delete($id): void
    {
        //J'essaie de recup l'id pour supprimé
        $this->motoManager->delete($id);
        include (__DIR__ . "/../../Templates/moto/deleteMoto.php");
    }

    //Lana: je n'ai pas réussi a lié le fait de supprimé un id precis et mon template

}

