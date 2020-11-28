<?php
echo '

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/*social media*/

.fa {
    padding: 2px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px ;
    border-radius: 50%;
  }
  
  .fa:hover {
      opacity: 0.7;
  }
  
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  
  .fa-google {
    background: #dd4b39;
    color: white;
  }
  
  .fa-linkedin {
    background: #007bb5;
    color: white;
  }

</style>


</head>

<footer>
        <p>Copyright &copy; ' . date("Y") . ' Igor Butorac. <a href="https://github.com/Igor-Butorac" style="color:#ffffff">GITHub</a></p>
        
        <a href="https://www.facebook.com/logovjezbaonica" class="fa fa-facebook" target="_blank"></a>

        <a href="https://www.linkedin.com/in/igor-butorac-b8113614b/" class="fa fa-linkedin" target="_blank"></a>

        <a href="https://github.com/Igor-Butorac" class="fa fa-github" style="color:#ffffff" target="_blank"></a>

        <a href="mailto:name@email.com" target="_blank" class="fa fa-envelope" style="color:  #ffffff" target="_blank"></a>
</footer>';

    ?>