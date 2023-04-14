
<header class="header-mobile"> 
    <img class="img-mobil-nav" src="assets/fond-mobile.png" alt=""> 
    <input type="checkbox" id="active"> 
    <label for="active" class="menu-btn">
        <span></span>
    </label> 
    <label for="active" class="close">
    </label> 
    <div class="wrapper"> 
        <ul> 
            <li>
                <a href="./">ACCUEIL</a>
            </li> 
            <li>
                <a href="?p=article">ARTICLE</a>
            </li> 
            <li>
                <a href="?p=contact">CONTACT</a>
            </li> 
            <li>
                <a href="?p=admin">ADMIN</a>
            </li> 
        </ul> 
    </div>
</header>
<div class="header-div-tablet"> 
    <header class="header-tablet"> 
       
        <div class="nav-div-desktop">
        <div class="logo-main">
                <img src="assets/logo.png" alt="">
                </div>  
            <nav class="nav-desktop"> 
                <a class="titre-menu-tab" href="./">ACCUEIL</a>
                 <a href="?p=article">ARTICLE</a> <a href="?p=contact">CONTACT</a>
                  <a href="?p=admin">ADMIN</a> </nav> 
                </div> 
    </header>
</div>
<style>
    /* header */
html{
    min-height: 100%;
    
}
body {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
html , body{
    display: flex;
    flex-direction: column;
}
body, .container{
    flex-grow: 1;
}
header {
    height: 100%;
    position: relative;
}
header img{
    z-index: 1;
    width: 100%;
    height: 100%;
    background-image: url("../assets/fond-mobile.png");
    background-repeat: no-repeat;
    object-fit: cover;
}

.wrapper{
    position: fixed;
    top: 0;
    /*left: -100%;*/
    right: -100%;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    flex-direction: column;
    align-items: center;
    
    /*background: linear-gradient(90deg, #f92c78, #4114a1);*/
  /* background: linear-gradient(375deg, #1cc7d0, #2ede98); */
    /* background: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%);*/
    transition: all 0.6s ease-in-out;
}
#active:checked ~ .wrapper{
    /*left: 0;*/
    right:0;
}
.menu-btn{
    position: absolute;
    z-index: 2;
    right: 20px;
  /*left: 20px; */
    top: 20px;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 50px;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    /*color: #fff;*/
    /*background: linear-gradient(90deg, #f92c78, #4114a1);*/
  /* background: linear-gradient(375deg, #1cc7d0, #2ede98); */
 /* background: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%); */
    transition: all 0.3s ease-in-out;
}
.menu-btn span,
.menu-btn:before,
.menu-btn:after{
	content: "";
	position: absolute;
	top: calc(50% - 1px);
	left: 30%;
	width: 40%;
	border-bottom: 2px solid #000;
	transition: transform .6s cubic-bezier(0.215, 0.61, 0.355, 1);
}
.menu-btn:before{
    transform: translateY(-8px);
}
.menu-btn:after{
    transform: translateY(8px);
}


.close {
	z-index: 1;
	width: 100%;
	height: 100%;
	pointer-events: none;
	transition: background .6s;
}

/* closing animation */
#active:checked + .menu-btn span {
	transform: scaleX(0);
}
#active:checked + .menu-btn:before {
	transform: rotate(45deg);
    border-color: #fff;
}
#active:checked + .menu-btn:after {
	transform: rotate(-45deg);
    border-color: #fff;
}
.wrapper ul{
    position: absolute;
    top: 75%;
    left: 57.5%;
    height: 90%;
    width: 30%;
    transform: translate(-50%, -50%);
    list-style: none;
    text-align: center;
    padding: 0;
    margin: 0;
}
.wrapper ul li{
    height: 10%;
    margin: 0;
}
.wrapper ul li a{
    text-decoration: none;
    font-size: 30px;
    font-weight: 500;
    color: #fff;
    border-radius: 50px;
    position: absolute;
    line-height: 50px;
    opacity: 0;
    /*transition: all 0.3s ease;
    transition: transform .6s cubic-bezier(0.215, 0.61, 0.355, 1);*/
}
.wrapper ul li a:after{
    
    content: "";
    background: #fff;
    /*background: linear-gradient(#14ffe9, #ffeb3b, #ff00e0);*/
    /*background: linear-gradient(375deg, #1cc7d0, #2ede98);*/
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    border-radius: 50px;
    transform: scaleY(0);
    z-index: -1;
    transition: transform 0.3s ease;
}
.wrapper ul li a:hover:after{
    transform: scaleY(1);
}
.wrapper ul li a:hover{
    color: #0b0d0e;
}
input[type="checkbox"]{
    display: none;
}
.content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: -1;
    text-align: center;
    width: 100%;
    color: #202020;
}

#active:checked ~ .wrapper ul li a{
    opacity: 1;
}
.wrapper ul li a{
    transition: opacity 1.2s, transform 1.2s cubic-bezier(0.215, 0.61, 0.355, 1);
    transform: translateX(100px);
}
#active:checked ~ .wrapper ul li a{
	/*transform: none;*/
	transition-timing-function: ease, cubic-bezier(.1,1.3,.3,1);
    transition-delay: .6s;
    transform: translateX(-100px);
}
.header-div-tablet {
    display: none;
}









/*                                                                  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! CSS Tablette !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!                                                 */ 
@media screen and (min-width: 550px) and (max-width: 1023px)  {

    .header-mobile {
        display: none;
    }
    header img{
        display: none;
    }
    .menu-btn{
        display: none;
    }
    
    .header-div-tablet{
        margin: 0;
        min-width: 100%;
        min-height: 20vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url("../assets/fond-tablet.png");
        background-repeat: no-repeat;
        opacity: 0.73;
    }
    .nav-desktop{
        display: flex;
        justify-content: center;
        align-items: center;
        justify-content: space-evenly;
        
    }
    .nav-desktop a{
        text-decoration: none;
        color: #000;
        font-weight: bold;
        font-size: 25px;
        margin-left: 30px;
    }
    
}
@media screen and (min-width: 1024px){
    .header-mobile{
        display: none;
    }
    .header-div-tablet {
        display: flex ;
        background-image: url("../assets/fond-desktop.png");
        width: 100%;
        margin: 0;
        min-width: 100%;
        min-height: 20vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url("../assets/fond-tablet.png");
        background-repeat: no-repeat;
        opacity: 0.73;
    }
    .header-tablet{
        min-width: 100%;
        justify-content: end;
    }
    .nav-desktop{
        display: flex;
        justify-content: flex-end;
        align-items: center;
        
    }
    .nav-desktop a{
        text-decoration: none;
        color: #000;
        font-weight: bold;
        font-size: 25px;
        margin-left: 1em;
    }
    .nav-desktop a:last-child{
        margin-right: 1em;
    }
    .logo-main{
        width: 60px;
        height: 60px;
        background-color: #fff;
        border-radius: 50%;
        z-index: 7;
        float: left;
    }
    header img{
        display: block;
    }
  
}

</style>