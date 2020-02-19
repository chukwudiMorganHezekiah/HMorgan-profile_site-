
<?php

include_once "includes/header.html";

?>



<body data-spy="scroll" data-target=".navbar">

    <!--navbar-->

    <div id="root">

            <?php

            include_once "includes/navbar.html";
            
            ?>



    <!--ShowCaser-->

    <?php

            include_once "includes/showcase.html";
            
     ?>
    

    <!--About me-->


  
    <?php

            include_once "includes/about.html";
            
     ?>
               
           


    <!--Skills-->

    <?php

    include_once "includes/skills.html";
    
    ?>


    <!--Experiences-->

    <?php

    include_once "includes/experience.html";
    
    ?>



<!--Contact me-->

<?php

include_once "includes/contact.html";

?>


<!--Footer-->

<?php

include_once "includes/footer.html";

?>



    <!--Scroll to top button-->

    <?php

include_once "includes/top.html";

?>
   


    <!--end of the root div-->

</div>
    
</body>

<!--script for the contact form-->


<script type="text/javascript">
    $(document).ready(function(){
        $('#contact_form').submit(function(e){
            e.preventDefault();
            var name= $("#name").val();
            var email  = $("#email").val();
            var message = $("#message").val();
            var send = $("#send").val();
            $("#errors").load("controllers/contact.php",{
                name:name,
                email:email,
                message:message,
                send:send
            })
        })
    })
    
    
    
    
    </script>

    <!--Back to top-->


    <script type="text/javascript">
        $(document).ready(function(){
            $(window).scroll(function(e){
                var position = window.scrollY;
                
                
    
                if(position >= 250){
                    $("#top").fadeIn("slow")
    
                }
            });

        
            
    
            $("#top").click(function(){
               window.scrollTo(0,0);
               $(this).fadeOut("slow")
            })
    
        })
    
    </script>

    <!--aNIMATIONS TO THE experiences divs-->

    <script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){
            var pos = window.scrollY;
            console.log(pos);

            if(pos >= 1939){
                
            
                $("#seo").addClass("animated bounceInLeft ");

            

            }else{
                $("#seo").removeClass("animated bounceInLeft ");

            }


            if(pos >= 1333){
                
            
                $("#seo").addClass("animated bounceInLeft ");

            

            }else{
                $("#seo").removeClass("animated bounceInLeft ");

            }



            //desktop



            if(pos >= 2398){
                
            
                $("#desktop").addClass("animated bounceInRight ");

            

            }else{
                $("#desktop").removeClass("animated bounceInRight ");

            }


            if(pos >= 1333){
                
            
                $("#desktop").addClass("animated bounceInRight ");

            

            }else{
                $("#desktop").removeClass("animated bounceInRight ");

            }



            //youtube



            if(pos >= 2398){
                
            
                $("#youtube").addClass("animated bounceIn ");

            

            }else{
                $("#youtube").removeClass("animated bounceIn ");

            }


            if(pos >= 1333){
                
            
                $("#youtube").addClass("animated bounceIn ");

            

            }else{
                $("#youtube").removeClass("animated bounceIn ");

            }
        });
       
        })
    
    
    </script>




<style type="text/css">
    /* Body background */
    
    body{
        background: rgb(225,225,225);
        overflow-x: hidden;
    }
    
    #header a:hover{
        color:#fff;
    }
    #showcase{
        background: url("Img/ShowCase.jpg") ;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 500px;
        
    }
    #about{
        margin-top:-200px;
    }
    #top{
        position:fixed;
        bottom:10px; 
        right:15px;
        display:none;
        cursor:pointer
    }
    #top i{
        padding:15px;
         border:0.5px black solid;
         border-radius:10px;
         background:transparent;
         font-size:1.5rem;
    }
    
    #about .fa{
        color:white;
    }
    #about span{
        padding:10px 20px 10px 20px;
    }
    #about hr{
        border-width:2px;
        margin-top:6px;
    }
    #skills span{
        padding:10px 20px 10px 20px;
    
    }
    #skills hr{
        border-width:2px;
        margin-top:6px;
    }
    #experience span{
        padding:10px 20px 10px 20px;
    
    }
    
    #experience hr{
        border-width:2px;
        margin-top:6px;
    }
    #experience .card{
        border-top:2px red solid;
        
    
    }
    
    #experience .card-header{
        height:250px;
    
    }
    @media(max-width:267px){
        #experience .card-header{
        height:250px;
    
    }
    
    }
    #contactme hr{
        border-width:2px;
        margin-top:6px;
    
    }
    
    #contactme span{
        padding:10px 20px 10px 20px;
    
    }
    .error{
        border:2px solid rgb(244,117,123);
        box-shadow:0px 2px 1px red;
    }
    </style>


</html>