
<html>
    <head>
        <title>Home Job Portal</title>
        
        <style>

.input-field
{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid rgb(7, 7, 7);
	outline:none;
	background: transparent;
}

#bgimg
{
    width: 72px;
    height: 72px;

}

.logo
{
    font-family: 'Verdana';
    font-size: 24px;
    color: black;

}
.button {
  background-color: white; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;


}
body{
    background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url("css/images/books_1.jpg") ;
    background-size: cover;
    position: relative;
    background-image: url("homeimage.jpg");
    
}

nav
{
    background:none;
    height: 80px;
    width:100%;

}
label.logo
{
    color:black;
    font-size:35px;
    line-height:80px;
    padding:0 100px;
    font-weight: bold;
}
nav ul 
{
    font-family: sans-serif;
    list-style-type: none;
    float: right;
    margin: 20px;
}
nav ul li
{
    display: inline-block;
    text-decoration: none;
    line-height: 80px;
    margin: 0 20px;
}
nav ul li a{
    color:black ;
    text-decoration: none;


}
nav ul li  :hover{
    background-color: grey;
    color: black;
}
</style>
    </head>

    <body>
        
</nav>
        
        <nav>
            <label class="logo">Job Portal</label>
                    
              <ul>
            <li>
                <form mehthod="POST" action="Post A Job.php">
                    <input class="input-field" type="text" placeholder ="Search For Jobs" name="searchbar">
                
            </li>
            <li> <button class="button">Search</button> </li>
            <li> <a href="Home.php">HOME</a></li>
            <LI> <a href="Post A Job.php">POST A JOB</a> </LI>
            <li> <a href="Contact Us.html">CONTACT</a></li>  
            <li><a href="UserLogin.php">LOGIN</a></li>
            </ul>
            <h1 class="logo">Welcome to Home Page!</h1>
            <li><button class="histroy" name="histroy">HISTROY</button></li>
            
        
    </body>
</html>