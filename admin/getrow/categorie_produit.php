<script>
    function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'operation/categorie_produit_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.categorie').val(response.CodeCategorie);
      $('#edit_categorie').val(response.Categorie);
      $('.fullname').html(response.Categorie);
    }
  });
}
</script>