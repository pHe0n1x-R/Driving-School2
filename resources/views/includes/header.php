<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
       
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
      <span class="navbar-brand mb-0 h1">
    
      <img src="{{ URL::to('/asset/img/a.png') }}">
  ORCHID Driving School
    </span>
</a>

  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarright" >
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarright">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
                <a href="http://127.0.0.1:8000/" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
            <a href="http://127.0.0.1:8000/student/create" class="nav-link">Registration</a>
            </li>
            <li class="nav-item">
                <a href="http://127.0.0.1:8000/student/show" class="nav-link">Courses</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Quiz</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact Us</a>
            </li>
          </ul>
      </div>
      &nbsp
      &nbsp
                    
      <div class="dropdown">
          <button class="btn btn-success" type="button" aria-haspopup="true" aria-expanded="false">
          <svg width="1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>&nbspLogin 
      </div>
  
  
</nav>
