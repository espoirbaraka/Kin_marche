<script>
  function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'operation/user_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.user').val(response.CodeUser);
      $('#edit_username').val(response.Username);
      $('#edit_contact').val(response.Contact);
      $('#edit_email').val(response.AdresseMail);
      $('#edit_password').val(response.PasswordUser);
      $('.fullname').html(response.Username);
    }
  });
}
</script>