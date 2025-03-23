<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Include All CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/payloan-icon.css"/>
        <link rel="stylesheet" type="text/css" href="css/icofont.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="img/logo.png">
		<style>
		*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }
  body{
    font-family: montserrat;
  }
  nav{
    background-color:#835AEE;
    height: 80px;
    width: 100%;
	border-radius:33px;
	
  }
  
  nav ul{
    float: right;
    margin-right: 20px;
  }
  nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
  }
  nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
  }
  a.active,a:hover{
    background: #1b9bff;
	border-radius:15px;
    transition: .5s;
  }
  .checkbtn{
    font-size: 30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
  }
  #check{
    display: none;
  }
  @media (max-width: 952px){
    label.logo{
      font-size: 30px;
      padding-left: 50px;
    }
    nav ul li a{
      font-size: 16px;
    }
  }
  @media (max-width: 858px){
    .checkbtn{
      display: block;
    }
    ul{
      position: fixed;
      width: 100%;
      height: 100vh;
      background: #2c3e50;
      top: 80px;
      left: -100%;
      text-align: center;
      transition: all .5s;
    }
    nav ul li{
      display: block;
      margin: 50px 0;
      line-height: 30px;
    }
    nav ul li a{
      font-size: 20px;
    }
    a:hover,a.active{
      background: none;
      color: #0082e6;
    }
    #check:checked ~ ul{
      left: 0;
    }
  }
  
		</style>