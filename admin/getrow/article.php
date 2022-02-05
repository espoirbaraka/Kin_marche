<script>
    function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'operation/article_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.article').val(response.CodeArticle);
      $('#edit_titre').val(response.Titre);
      $('#edit_contenue').val(response.Contenue);
      $('.fullname').html(response.Titre);
    }
  });
}
</script>