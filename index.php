<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar dic</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
<style>

@font-face {
    font-family: CustomLocal;
    src: url(x:/ProggyClean/ProggyCleanNerdFont-Regular.ttf) format('truetype');
}


    body{
        /* display: flex;
        flex-direction: column; */
        background-color: #000000da;
        font-family: 'CustomLocal', ProggyCleanNerdFont-Regular;
    }

    .header{
        display: block;
        flex: content;
        border-radius: 4px;
        content-visibility: auto;
        background: rgba(234, 228, 228, 0.1);
        backdrop-filter: blur(10px);
        box-shadow: 2px 4px 4px #a3a3a3;
        color: white;
        -webkit-backdrop-filter: blur(10px);
    }

    .header h1{

        font-size: 35px;
        margin-left: 45px;
        color: rgb(254, 254, 254);
    }

    .header a{
        width: 200px;
        background-color: aliceblue;
        font-size: 35px;
        text-decoration:none;
        /* box decoration */
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 5px;
        padding-bottom: 5px;
        background: rgba(76, 76, 76, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 4px;
        box-shadow: 2px 4px 4px #a3a3a3;
        color: white;
        -webkit-backdrop-filter: blur(10px);
    }

    .header .login:hover{
        background-color: rgb(74, 255, 213);
        color: white;
    }

    .sidebar{
        height: 100vh;
        width: 250px;
        margin-top: 110px;
        margin-left: 8px;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: auto;
        background:  rgba(76, 76, 76, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 4px;
        box-shadow: 4px 4px 0px #a3a3a3;
        text-align: center;
        color: white;
        -webkit-backdrop-filter: blur(10px);
    }
    
    .sidebar a{
        padding: 15px;
        margin-left: 5px;
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        color: rgb(238, 238, 238);
        display: block;
    }
    
    .sidebar a:hover{
        
        background-color: aquamarine;
        backdrop-filter: blur(10px);
        border-radius: 4px;
        box-shadow: 2px 4px 4px #a3a3a3;
        color: black;
        -webkit-backdrop-filter: blur(10px);
    }

   
    
    .sidebar h2{
        font-size: 25px;
        color: rgb(255, 255, 255);
    }

    .tittle{
        display: flex;
        justify-content: center;
        align-items: center;
        
        color: white;
        margin-left: 260px;
        padding-top: 15px;
    }

    /* .footer{

    } */



</style>

    <div class="header">
    <header>
        <h1> HacKanoysim </h1>
        <!-- <a href="login" class="login">login</a> -->
    </header>
    </div>


    <!-- menu sidebar -->
    <div class="sidebar">
        <h2>Menu Sidebar</h2>
        <a href="home" >home</a>
        <a href="services">services</a>
        <a href="about">about</a>
        <a href="contact">contact</a>
        <a href="form.html"> register into Hackaton </a>
    </div>

    <div class="tittle">
    <h1>Hackathons Tips</h1>
    </div>

    <?php include "cardcontent/content.html" ?>
    <?php include "cardcontent/content2.html" ?>
    <?php include "cardcontent/content3.html" ?>

    <!-- content -->

   
    

    <!-- <div class="footer">
    <footer>
        <hr>
        <i>created by @Kanoyism</i>
    </footer>
    </div> -->
</body>
</html>


