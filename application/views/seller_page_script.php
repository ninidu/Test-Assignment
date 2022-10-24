<script>

  $(document).on("click", "#loadmodaledit", function() {
   
    console.log("click");

    var name = $(this).data('name');
    var email = $(this).data('email');
    var status = $(this).data('status');
    var id = $(this).data('s_id');


    $(".modal-body #name").val(name);
    $(".modal-body #email").val(email);
    $(".modal-body #edit_status").val(1);
    $(".modal-body #s_id").val(id);

    if(  status == 1 ) {

      $("#status_type1").prop("checked", true);
      $("#status_type2").prop("checked", false);

    }else if( status == 0 ){

      $("#status_type1").prop("checked", false);
      $("#status_type2").prop("checked", true);

    }
   
   
  });

  </script>