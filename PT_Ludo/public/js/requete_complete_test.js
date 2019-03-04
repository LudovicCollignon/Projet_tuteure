window.addEventListener("load",function(){
  document
  .getElementById("form")
  .addEventListener(
    "submit",
    function(ev){
      event.preventDefault();
      var promise = new Promise(function(resolve,reject){
        http = new XMLHttpRequest();
        http.open("POST","requete_complete_test",true);
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
      },()=>{
        console.log("erreur");
      });
    });
  });


  //
  // function getWeather(){
  // 		var url=urlBase
  // 		+'?q='+where+'&units=metric&lang=fr'
  // 		+'&APPID='+apiKey;
  // 		return new Promise(function(resolve,reject){
  // 			http = new XMLHttpRequest();
  // 			http.open("GET", url, true);
  // 			http.responseType="json";
  // 			http.onload=(()=>{
  // 				if(http.status==200){
  // 					resolve(http.response);
  // 				}else{
  // 					reject();
  // 				}
  // 			});
  // 			http.send();
  // 		});
  //
  // 	}


  // window.addEventListener("load",function(){
  //   document
  //   .getElementById("btn-valider")
  //   .addEventListener(
  //     "submit",
  //     function(ev){
  //       ev.preventDefault();
  //       var ajax=new XMLHttpRequest();
  //       var t=Date.now();
  //       var that=this;
  //       ajax.open("POST","traitementRequeteCompleteTest", true);
  //
  //       //Pour utiliser formData, on enlève le setRequestHeader();
  //       var formData = new FormData(document.getElementById('form'));
  //       var requete = document.getElementById('reponse').value;
  //       ajax.send(requete);
  //
  //       // pour utiliser l'urlencoded, on ne peut pas utiliser formData
  //       // ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //       // ajax.send("message="+this.message.value);
  //
  //       // ajax.responseType="json";
  //       // document.getElementById('spinner').style.visibility = "visible";
  //       // ajax.onreadystatechange=function(){
  //       // 	if (
  //       // 		this.readyState == this.DONE
  //       // 		&&	this.status == 200
  //       // 	){
  //       // 		var li = document.createElement("li");
  //       // 		var ul = document.getElementById("listeMessages");
  //       // 		ul.insertBefore(li,ul.firstChild);
  //       // 		li.innerHTML = this.response.message
  //       // 			+ " <span class='tag-box -success'>"
  //       // 			+(Date.now()-t)+" ms</span>";
  //       // 		document.getElementById('spinner').style.visibility = "hidden";
  //       // 		that.reset();
  //       // 	}
  //       // }
  //     })
  //   });
