function empecher(str) {
  $('#requete').on('input',function(e){
    if($(this).val().toLowerCase().indexOf(str)!=-1) {
      $(this).val("");
    }
  });
}

empecher("delete");
empecher("update");
empecher("alter table");
empecher("insert");
