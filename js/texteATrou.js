window.onload=function(){

  document.getElementById("success").style.display = "none";
  document.getElementById("echec").style.display = "none";
  jQuery('#fsubmit').click(function(e){
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    jQuery.ajax({
      url: "modele-texte-a-trous",
      method: 'post',
      data: {
        reponse1: jQuery('#reponse1').val().toLowerCase(),
        reponse2: jQuery('#reponse2').val().toLowerCase(),
        reponse3: jQuery('#reponse3').val().toLowerCase(),
        reponse4: jQuery('#reponse4').val().toLowerCase(),
        idChap: idChap+"",
        idQuest: idQuest+""
      },
      dataType : 'json',
      success: function(result){
        if(result.verdict=='true'){
          document.getElementById("echec").style.display = "none";
          document.getElementById("info").style.display = "none";
          document.getElementById("success").style.display = "block";
        }
        else{
          document.getElementById("success").style.display = "none";
          document.getElementById("info").style.display = "none";
          document.getElementById("echec").style.display = "block";
        }
        console.log(result.verdict)
      },error:function(){
        document.getElementById("success").style.display = "none";
        document.getElementById("echec").style.display = "none";
        document.getElementById("info").style.display = "block";
        console.log("error");
    }
    });

    });
  }
