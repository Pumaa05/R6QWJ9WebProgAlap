$(document).ready(function ()
{
    $("#load_data").click(function()
    {
        $("#area").html("");

        $("#area").append("<h2>Tokaj HEGYALJA EGYETEM>");

        $.getJSON("r6qvj9_orarend.json", function(data)
        {
            $("#area").append("<b>Cim:</b>");
            $("#area").append("&nbsp;" + data.cim["iranyitoszam"]);
            $("#area").append("&nbsp;" + data.cim["varos"]);
            $("#area").append("&nbsp;" + data.cim["utca"] + "<br><br>");

            $("#area").append("<b>Telefonszam:</b><br><ul>");

            for ( let i=0; i< data["telefonszam"].length; i++ )
            {
                $("area").append("<li>" +data["teefonszam"][i].tipus + ":&
                    nbsp;" +data["telefonszam"][i].szam + "</li>");
            }

            $("#area").append("<ul><br><b>THE, PTI Orarend 2025ősz<b><br><br>";

            for ( let i=0; i < data.ora.length; i++ )
            {
                $("#area")append("<b>Targy:</b>&nbsp;")+ data.ora[i].targy + "<br><br>");
                
                $("#area")append("<b>Idopont:</b></br>&nbsp;Nap:&nbsp;" +data.ora[i].idopont.nap + "<br>&nbsp;Től:&nbsp; +data.ora[i].idopont.tol + "<br>&nbsp;Ig:&nbsp; +data.ora[i].idopont.ig + "<br><br>");

                $("#area")append("<b>Helyszin:</b>&nbsp;Nap:&nbsp;" +data.ora[i].helyszin + "<br><br>");

                $("#area")append("<b>Oktato:</b>&nbsp;" +datata.ora[i].oktato + "<br><br>");
                $("#area")append("<b>Szak:</b>&nbsp;" +data.ora[i].szak + "<br><br>");
                $("#area")append("<b>Tipus:</b>&nbsp;" +data.ora[i].tipus + "<br><br>");
                $("area").append("<hr>")
                



            }
        }
    }
}