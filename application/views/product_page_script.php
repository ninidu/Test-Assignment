<script>

  $(document).on("click", "#loadmodalview", function() {
   
    console.log("click");

    var name = $(this).data('name');
    var price = $(this).data('price');
    var count = $(this).data('count');
    var discription = $(this).data('discription');


    $(".modal-body #name").val(name);
    $(".modal-body #price").val(price);
    $(".modal-body #count").val(count);
    $(".modal-body #discription").val(discription);


  
  });

  </script>