<div class="accordion" id="accordionExample">
                                    
<?php
    include('class/classDemande.php');
    $demande = new demande();
    $t_listDemande = $demande->getNewDemande();
    session_start();
    // var_dump($_SESSION['username']) ;
    foreach ($t_listDemande as $v_demande){
        if (isset($v_demande['traitement_id'])) {
            if (($v_demande['traitement_id'] == 0) && ($v_demande['name_directeur'] == $_SESSION['username'] )) {
                print '<div class="accordion-item">';
                    print '<h2 class="accordion-header" id="heading'.$v_demande['rowid_demande'].'">';
                        print '<button class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne'.$v_demande['rowid_demande'].'" aria-expanded="true" aria-controls="collapseOne'.$v_demande['rowid_demande'].'">';
                            print $v_demande['nom'].' '.$v_demande['prenom'];
                            print '<br>';
                            print $v_demande['tel'].' / née le:'.$v_demande['birthday'];
                        print '</button>';
                    print '</h2>';
                    print '<div id="collapseOne'.$v_demande['rowid_demande'].'" class="accordion-collapse collapse" aria-labelledby="heading'.$v_demande['rowid_demande'].'" data-bs-parent="#accordionExample">';
                        print '<div class="accordion-body">';
                            print '<table class="table">';
                                print '<thead>';
                                print '<tr>';
                                    print '<th scope="col">';
                                        print 'service';
                                    print '</th>';
                                    print '<th scope="col">';
                                        print 'remarque';
                                    print '</th>';
                                    print '<th scope="col">';
                                        print 'date demande';
                                    print '</th>';
                                    print '<th scope="col">';
                                        print 'Actions';
                                    print '</th>';
                                print '</tr>';
                                print '</thead>';
                                print '<tbody>';
                                    print '<tr>';
                                        print '<td>';
                                            print $v_demande['nom_service'];
                                        print '</td>';
                                        print '<td>';
                                            print '<strong>';
                                                print $v_demande['remarque'];
                                            print '</strong>';
                                        print '</td>';
                                        print '<td>';
                                            print $v_demande['date_demande'];
                                        print '</td>';
                                        print '<td>';
                                            print '<form method="post" action="services.php">';
                                                print '<input type="hidden" name="rowid_demande" value="'.$v_demande['rowid_demande'].'">';
                                                print '<button type="submit" name="btn-reception" class="btn btn-secondary">';
                                                    print 'Réception';
                                                print '</button>';
                                            print '</form>';
                                        print '</td>';
                                    print '</tr>';
                                print '</tbody>';
                            print '</table>'; 
                        print '</div>';
                    print '</div>';
                print '</div>';
            }
        }
    }
?>
</div>
