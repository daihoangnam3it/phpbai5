<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Document</title>
  <style>
    table {
      width: 100%;
    }

    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 15px;
      text-align: left;
    }

    #t01 tr:nth-child(even) {
      background-color: #eee;
    }

    #t01 tr:nth-child(odd) {
      background-color: #fff;
    }

    #t01 th {
      background-color: black;
      color: white;
    }
    ul > li{
      display: inline;
      list-style: none;
    }
  </style>
</head>

<body>
    
<div class="container">
    <?php require_once "menu.php" ?>