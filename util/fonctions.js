/**
 * Created with JetBrains PhpStorm.
 * User: Eric
 * Date: 21/02/14
 * Time: 18:08
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    $('#liste_tickets tr').bind('click', function(e) {
        // Prevents the default action to be triggered.
        e.preventDefault();

        // on va chercher avec un appel Ajax/Json les données sur le ticket choisi
        var identifiant = $(this).find("td").eq(1).html();

        var contenu = '<a class="b-close">x</a>';
        contenu += '<h1>Détail ticket '+identifiant+'</h1>'
        $.ajax({
            type: "POST",
            url: "./util/c_requetes.php",
            dataType: "json",
            data: "action=infos_ticket&data="+identifiant,
            success: function(data){
                $("tr[name=une_ligne]").remove();
                contenu += '<br/><h2>Description : </h2>' + data['description'];
                contenu += '<hr/><br/><h2>Solution : </h2>' + data['resume'];

                $("#detail_ticket").html(contenu);

                // Triggering bPopup when click event is fired
                $('#detail_ticket').bPopup({
                    follow: [false, false], //x, y
                    position: [400, 200] //x, y
                });
            }
        });
    });
});