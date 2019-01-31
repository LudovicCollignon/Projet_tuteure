function cacherTatAndRc(){
  var qcm = document.getElementById('qcm');
  var tat = document.getElementById('Tat');
  var rc = document.getElementById('rc');
  var txt = document.getElementById('lien1');
  var liste = document.getElementById('listeQCM');
  //Faire disparaître les deux autres blocs
  tat.style.display = "none";
  rc.style.display = "none";
  //ajuste la taille du bloc clique
  qcm.style.height = "75%";
  //passer qcm en display bock, faire appaâitre les exos ;
  qcm.style.display = "block";
  qcm.style.textAlign = "center";

  liste.style.display = "block";
  liste.style.textAlign = "left";
  //smoothness
  qcm.style.transitionDuration = "1s";

}
