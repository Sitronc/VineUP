<?PHP
function getIdBySession(){
    session_id; 
}
function supprimerCompte(){
    mysql_query("DELETE FROM utilisateurs WHERE id=?")}
    echo 'Données supprimées'
?>