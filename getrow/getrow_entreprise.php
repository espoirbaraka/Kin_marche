<script>
  function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'operation/entreprise_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.entreprise').val(response.CodeEntreprise);
      $('#edit_designation').val(response.DesignationEntreprise);
      $('#edit_adresse').val(response.AdresseEntreprise);
      $('#edit_contact').val(response.ContactEntreprise);
      $('#edit_email').val(response.EmailEntreprise);
      $('#edit_site').val(response.SiteWebEntreprise);
      $('.fullname').html(response.DesignationEntreprise);
    }
  });
}
</script>