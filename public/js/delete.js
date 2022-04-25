
$(function(){
        $('.delete').click(function(){
            $.ajax({
                method: "DELETE",
                url: deleteurl+$(this).data("id")
        })
        .done(function(response){
            swal("Usunięto", {
      icon: "success",
    });
     window.setTimeout(function(){location.reload()},3000)
        })
        .fail(function(data){
            console.log(data.responseJSON.message);
            swal("Cos nie tak",data.responseJSON.message,"error");
        });
    });
    });
