

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
      url: "texteATrou",
      method: 'post',
      data: {
        reponse1: jQuery('#reponse1').val(),
        reponse2: jQuery('#reponse2').val(),
        reponse3: jQuery('#reponse3').val(),
        reponse4: jQuery('#reponse4').val(),
        idChap: idChap+"",
        idQuest: idQuest+""
      },
      dataType : 'json',
      success: function(result){
        if(result.verdict=='true'){
          document.getElementById("echec").style.display = "none";
          document.getElementById("success").style.display = "block";
        }
        else{
          document.getElementById("success").style.display = "none";
          document.getElementById("echec").style.display = "block";
        }
        console.log(result.verdict)
      },error:function(){
        console.log("error");
    }
    });

    });
  }
