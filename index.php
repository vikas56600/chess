<?php
session_start();
$x=0;
$n=0;
if(isset($_SESSION['x']))
$x=$_SESSION['x'];
if(isset($_SESSION['n']))
$n=$_SESSION['n'];
?>
<!DOCTYPE html>
<script src="https://use.fontawesome.com/8286298861.js"></script>
<script>
   function responsive_menu()
    {
        var x=document.getElementById("table");
        if(x.className==='table')
        x.className=x.className+" tab";
        else
        x.className='table';
    }
</script>
<html>
    <head>
        

        <title>Rishikesh Chess Club</title>
        <link rel="icon" href="./pic/logo.jpeg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="open.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div style="background-color:green;color:white;text-align:center;"><?php if(isset($_GET['user'])) echo $_GET['user'];?></div>
        <a id="updown"> fvf</a>
       <div id="head_back"> 
           <img id="head"src="chess.jpeg">            <br>
        </div>


    </head>
    
    <style>
       
    </style>
    <body>
        <div id="line">
            <br id="br">
          <button href="javascript:void(0);" id="iconbar" onclick="responsive_menu()"><i class="fa fa-bars fa-2x" ></i></button>
            <div id="table" class="table">
                <ul>
                                <li ><a href="index.php"><button id="bar">HOME</button></a></li>
                    <li><a href="Shiv/Education.php"><button id="bar">EDUCATION</button></a></li>
                    <li><a href="Neer/subpage2team.php"><button id="bar">TEAM</button></a></li>
                    <li><a href="Shiv/Events.php"><button id="bar">EVENTS</button></a></li>
                    <li><a href="open.php"><button id="bar" >ALBUM</button></a></li>
                    <li><a href="Neer/subpage1.php"><button id="bar">ABOUT US</button></a></li>
                   <li> <a href="./dev/developer.html"style="color:blue;background-color:white;padding-left:7px;padding-right:7px;border-radius:10px;font-size:20px"><b>D</b></a></li>

                    
                </ul>
            </div>
          
        </div>
        <div id="slider" >
            <div id="red">
                <b id="rtext"><center>JOIN OUR COMMUNITY AND BE A TRUE CHAMPION > >
                    <a style="color:green;" href="./backend/register.php?head"> JOIN</a>
                </center></b>
                <br id="br">
                <span style="padding: 0% 35%;">
                 <button id="button" onclick="location.href='https://www.facebook.com/Rishikesh-Chess-Club-RCC-150260035646910';"><img  id="icon" src="https://saintlouischessclub.org/sites/default/files/facebook-01.jpg"></button>
                 <button id="button" ><img id="icon" src="https://saintlouischessclub.org/sites/default/files/Twitter-01.jpg"></button>
                 <button id="button"><img  id="icon" src="https://saintlouischessclub.org/sites/default/files/Instagram-01.jpg"></button>
                 <button id="button"><img  id="icon" src="https://saintlouischessclub.org/sites/default/files/youtube-01.jpg"></button>
                 <br id="br">
            </div>
            <div id="text" >"<b style="color:orange;">WELCOME TO RISHIKESH CHESS CLUB</b>, an educational organization ,for teaching and guidance about the game of chess.The community
                is committed to maintaining a formal program of education to teach the game of chess and to promote and support locals and 
                others,and to increase the awareness of the educational value of chess    "</div><br><br>

            <table id="table_pic">
                <tr>
                <td><img id="img" src="pic/IMG-20201218-WA0002.jpg"></td>
                <td><img  id="img"  src="pic/IMG-20201218-WA0001.jpg"></td>
                <td id="none"rowspan="3"><img  id="img1" src="https://cdn.shopify.com/s/files/1/0020/3830/0721/products/4FFCAMZBenefits_grande.jpg?v=1560194836"></td>
        
            </tr>
            
            <tr>
                <td><img  id="img"  src="https://images.chesscomfiles.com/uploads/v1/images_users/tiny_mce/Unstablexxx/php6G9mjr.jpeg"></td>
                <td><img  id="img" src="https://www.dishapublication.com/blog/wp-content/uploads/2019/06/Key-Benefits-of-playing-Chess.jpg"></td>
            </tr>
            </table>
            <img  id="img2" src="https://cdn.shopify.com/s/files/1/0020/3830/0721/products/4FFCAMZBenefits_grande.jpg?v=1560194836">
            <br>

            <div id="text" >"<b style="color:orange;">NON-DISCRIMINATION POLICY -></b><br>Wheelchair/disability access is available in the rear - please proceed through the parking lot to our east and around to our back door. 
            If you need additional assistance, please let us know.<br><br>

            The Rishikesh Chess Club admits students of any gender, race, color, national and ethnic origin to all the rights, privileges, programs, and activities generally accorded or made available to students at the school. 
            It does not discriminate on the basis of gender, race, color, national and ethnic origin in administration of its educational policies, admissions policies, scholarship and loan programs, and athletic and other school-administered programs.
            <br><br>
            The Rishikesh Chess Club complies with the Internal Revenue Service's guidelines regarding publication of its non-discrimination policy in its brochures, catalogs, advertisements and otherwise making it known to the general community.
        </div><br><br>


        <b><div id="text" ><a href="Rati/contact.html">Contact </a>
            &nbsp; &nbsp;
            <a href="Rati/termsandcond.html">Terms</a>
            &nbsp; &nbsp;
            <a href="Rati/legal.html">Legal</a>
            &nbsp; &nbsp;
            <a href="Rati/privacy.html">Privacy</a>
            &nbsp; &nbsp;
            <a style="color:red;" href="./backend/LogIn.php?%20user">Log in and Register</a>
            &nbsp; &nbsp;
            <a style="color:green;" href="./backend/notification/sendMail.php?%20check"><?php if($x){echo 'send email'; }?></a>
            &nbsp; &nbsp;
            <a style="color:red;" href="./backend/notification/logout.php"><?php if($n){echo 'Log out';}?></a>
            &nbsp; &nbsp;
            <br><br><br><br>
            <a>..................</a>
            </div></b>
   
    </body>
</html>