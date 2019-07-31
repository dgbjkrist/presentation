   <!-- END FOOTER-->
    <!--Scripts-->
    <script src="/front/assets/jquery/dist/jquery.min.js"></script>
    <script src="/front/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/front/assets/jQuery.mmenu/dist/js/jquery.mmenu.min.umd.js"></script>
    <script src="/front/js/mmenu-function.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="/front/js/gmap.js"></script>
    <script src="/front/assets/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="/front/js/owl-custom.js"></script>
    <script src="/front/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/front/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/front/js/revo-custom.js"></script>
    <script src="/front/assets/matchHeight/dist/jquery.matchHeight-min.js"></script>
    <script src="/front/js/match-height-custom.js"></script>
    <script src="/front/js/custom.js"></script>
    <script src="/front/js/jquery.form-validator.min.js"></script>
    


    <script>
        
        $(document).ready(function () {

   

            //alert(number)

    $('#myform').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                email: true,
            },
            name: {
                required: true,
            },
            tel: {
                required:true,    
            },

             prenom: {
                required:true,    
            },

            date_de_naissance: {

                required:true,    
            },

            terms: {

                required:true,    
            },

             code: {

                required:true, 
                 
            },


        },

  messages: {
    name: "Veuillez saisir le champs nom",
    prenom: "Veuillez saisir le champs nom",
    email: "Veuillez saisir un email valide svp!!!",
    tel:"Veuillez entrer un numero valide svp !!!",
    terms:"Ce champs est obligatoire !!!",
    code: "Ce champs est obligatoire !!!",
  },
  
    });

});

    </script>
    <!--End script-->