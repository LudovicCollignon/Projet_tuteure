window.onload=function(){
  jQuery('#btn-valider').click(function(e){
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    jQuery.ajax({
      url: "modele-qcm",
      method: 'post',
      data: {
        reponse: document.querySelector('input[name=optradio]:checked').value,
        idDom: idDom+"",
        idEx: idEx+""
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
