<?php
    require '../dbBroker.php';
    require '../model/Prijava.php';

    if (isset($_POST['submit'])
    && $_POST['submit'] == 'Azuriraj' 
    && isset($_POST['id'])
    && isset($_POST['katedra'])
    && isset($_POST['predmet'])
    && isset($_POST['sala'])
    && isset($_POST['datum'])){

        $prijava = new Prijava($_POST['id'], $_POST['katedra'], $_POST['predmet'], $_POST['sala'], $_POST['datum']);
        $status = Prijava::update($prijava, $conn);

        if ($status) {
            echo "Uspesno ste azurirali prijavu.";
        } else {
            echo "Doslo je do problema prilikom azuriranja prijave.";
        }
    }
?>
