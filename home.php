<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
<!-- font cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- style css  -->
<style>

:root {
  --main-color: #19735d;
}

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  outline: none;
  border: none;
  text-decoration: none;
  text-transform: capitalize;
  transition: .2s linear;
}
  
html{
  font-size: 62.5%;
  scroll-behavior: smooth;
  scroll-padding-top: 6rem;
  overflow-x: hidden;
}
  
header{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background-color: #fff;
  padding: 2rem 9%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1000;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

header .logo{
  font-size: 3rem;
  color: #333;
  font-weight: bolder;
}

header .logo span{
  color: var(--main-color);
}

header .navbar a{
  font-size: 2rem;
  padding: 0 1.5rem;
  color: #666;
}

header .navbar a:hover{
  color: var(--main-color);
}

header .icons a{
  font-size: 2.5rem;
  color: #333;
  margin-left: 1.5rem;
}

header .icons a:hover{
  color: var(--main-color);
}

</style>


</head>
<body>

<!-- header awal  -->
<header>

  <a href="#" class="logo">agrimirai<span>.</span></a>

  <nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a
  </nav>

  <div class="icons">
    <a href="#" class="fas fa-search"></a>
    <a href="#" class="fas fa-user"></a>
    <a href="#" class="fas fa-shopping-cart"></a>

  </div>

</header>
<!-- header akhir  -->

</body>
</html>