<script>
  function getRow2(id){
  $.ajax({
    type: 'POST',
    url: 'operation/station_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.station').val(response.CodeStation);
      $('.fullname').html(response.LocalisationStation);
    }
  });
}
</script>