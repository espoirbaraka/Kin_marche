<script>
    function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'operation/produit_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.produit').val(response.CodeProduit);
      $('#edit_produit').val(response.Produit);
      $('#edit_description').val(response.Description);
      $('#edit_prix').val(response.Prix);
      $('.fullname').html(response.Produit);
    }
  });
}
</script>