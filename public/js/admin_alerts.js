function del(route){
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to restore it",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = route;
      }
    
    });

}

function suc(message){
  swal({
    title: message,
    text: "",
    icon: "success",
  });
}

function err(message){
  swal({
    title: message,
    text: "",
    icon: "error",
  });
}