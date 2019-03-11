function empecher(str) {
  str.forEach(function(element) {
    $('#requete').on('input',function(e){
      if($(this).val().toLowerCase().indexOf(element)!=-1) {
        $(this).val("");
      }
    });
  });
}

if(typeSELECT==1){
  empecher(["delete","update","alter table","insert"]);
} else if(domaine == "INSERT INTO") {
  empecher(["delete","update","alter table"]);
}
//ici compléter par les mots clés à ne pas taper.

window.addEventListener("load",function(){
  document
  .getElementById("form")
  .addEventListener(
    "submit",
    function(ev){
      ev.preventDefault();
      var promise = new Promise(function(resolve,reject){
        http = new XMLHttpRequest();
        console.log(idDom);
        var url = "modele-requete."+idDom+"."+idEx;
        http.open("POST", url, true);
        http.responseType="json";
        var form = new FormData(document.getElementById("form"));
        http.send(form);
        http.onload=(()=>{
          if(http.status==200){
            resolve(http.response);
          }else{
            reject();
          }
        });
      });
      promise.then((rep)=>{
        console.log(rep);
        if(rep==true) {
          document.getElementById("echec").style.display = "none";
          document.getElementById("info").style.display = "none";
          document.getElementById("success").style.display = "block";
        } else if(rep==false) {
          document.getElementById("success").style.display = "none";
          document.getElementById("info").style.display = "none";
          document.getElementById("echec").style.display = "block";
        }
      },()=>{
        document.getElementById("success").style.display = "none";
        document.getElementById("echec").style.display = "none";
        document.getElementById("info").style.display = "block";
        console.log("erreur ajax");
      });
    });
  });

  window.addEventListener("load",function(){
    document
    .getElementById("btn-executer")
    .addEventListener(
      "click",
      function(ev){
        ev.preventDefault();
        var promise = new Promise(function(resolve,reject){
          http = new XMLHttpRequest();
          var url = "exec-exercice-requete."+idDom+"."+idEx;
          console.log(url);
          http.open("POST", url, true);
          http.responseType="json";
          var form = new FormData(document.getElementById("form"));
          http.send(form);
          http.onload=(()=>{
            if(http.status==200){
              resolve(http.response);
            }else{
              reject();
            }
          });
        });
        promise.then((rep)=>{
          document.getElementById('label-reponse').innerHTML = "Résulat de la requête : ";
          var area = document.getElementById('reponse');

          if(document.getElementById('table') != null) {
            area.removeChild(area.firstChild);
          }

          var tab = document.createElement('table');
          tab.setAttribute("class", "table table-striped");
          tab.setAttribute("id", "table");
          var thead = document.createElement('thead');
          var tr = document.createElement('tr');

          var champ = rep[0];
          var taille = Object.keys(champ).length; // nombre de colonnes

          for (var i=0; i<taille; i++) {
            var valeur = champ[i]; // valeur de la colonne i;
            for (var j=0; j<Object.keys(champ).length; j++) {
              if(champ[Object.keys(champ)[j]] == valeur) {
                var titre = Object.keys(Object.values(champ)[j])[0];  // nom de la colonne i;
                var th = document.createElement('th');
                th.innerHTML = titre;
                tr.appendChild(th);
                break;
              }
            }
          }

          thead.appendChild(tr);
          tab.appendChild(thead);
          area.appendChild(tab);

          var tbody = document.createElement('tbody');

          for (i=0; i<rep.length; i++) {
            champ = rep[i];
            tr = document.createElement('tr');
            for (j=0; j<taille; j++) {
              valeur = Object.values(Object.values(champ)[j])[0];
              th = document.createElement('th');
              th.innerHTML = valeur;
              tr.appendChild(th);
            }
            tbody.appendChild(tr);
          }
          tab.appendChild(tbody);

          document.getElementById("success").style.display = "none";
          document.getElementById("echec").style.display = "none";
          document.getElementById("info").style.display = "none";

        },()=>{
          document.getElementById("success").style.display = "none";
          document.getElementById("echec").style.display = "none";
          document.getElementById("info").style.display = "block";
          console.log("erreur ajax");
        });
      });
    });
