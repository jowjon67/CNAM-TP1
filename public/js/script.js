
$("#inputPassword").change(function() {
   $(".invalid-feedback").hide();
});
$("#inputConfirmPassword").change(function() {
   $(".invalid-feedback").hide();
});

//Validation du mot de passe
$( "#btn-envoyer" ).click(function() {
  mdp1=$("#inputPassword").val();
  mdp2=$("#inputConfirmPassword").val();
  if(mdp1 == mdp2)
  {
      $(".invalid-feedback").hide();
      $( "#form" ).submit();
  }
  else {
    $(".invalid-feedback").show();
  }
});
