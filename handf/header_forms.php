<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style type="text/css">
        #row1{
            opacity: 0.8;
        }
        #row2{
            margin-left: -50px;
            margin-top: 5px;
            opacity: 0.4;
        }
        body {
                background: lightblue url("https://images.unsplash.com/photo-1501349800519-48093d60bde0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
        #i1{
            display: block;
            color:black;
            box-sizing: border-box;
            margin-bottom: 20px;
            border: none;
            outline: none;
            background: none;
            border-bottom:1px solid #aaa;
            transition: 0.2s ease; 
            width: 300px
        }
        #p1{
            background-color: aliceblue;
            margin-top:0%;
            margin-left: 390px;
            width: 380px;
            height: 40px;
            padding: 15px;
            border-radius:10px; 
        }
        #l1{
            color: black;
        }
        #c1{
            margin-top: 10%;
            margin-left: 5%;
        }
        #b2{
            margin-left: 30px;
            margin-top: 0px;
        }
        #a2{
            border-radius: 25px;
            transition-duration: 0.5s;
            width: 3000px;
        }
        #c1{
            background-color:wheat;
            transition-property:border-radius background-color;
            transition-duration: 0.5s;
        }
        #c1:hover{
            background-color:white;
            border-radius: 25px;
        }
        

    #a1{
    color: black;
    }
    #n1{
        height: 100%;
        width: 280px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background:  #d9d9d9;
        opacity: 1;
        overflow-x: hidden;
        padding-top: 20px;
        left:-300px;
        transition: all 200ms linear; 
        }
        #n1 ul li {
            color:rgba(230,230,230,0.9);
            list-style: none;
            padding: 15px 10px;
            border-bottom: 1px solid rgba(100,100,0.3);
        }
        #n1 ul li:hover{
            transition: all 300ms linear; 
            border-radius: 20px;
            background: #f5f5f0;
        }
        #n1 a:hover{
            text-transform: uppercase;
        }
        #btn{
            position: fixed;
        }
        #n1.active{
            left:0px;
        }
        #btn span{
            width: 45px;
        }
        #btn{
            margin-top: 17px;
        }
        #btn1{
            color: black;
            margin-left:180px;
            margin-top: -5px;
        }
        #b1:hover{
            color: green;
        }
        #btn1:hover{
            color: red;
        }
        #t1 {

            transition-property: background-color border-radius;
            transition-duration: 1s;
        }

        #t1:hover {
            background: white;
            border-radius: 5px;
        }
        #nav a:hover{
            color:brown;
        }
        </style>
        <script>
            function slide(){
                document.getElementById("n1").classList.toggle('active');
            }
            
            /*-----------------------*/

        </script>
</head>
<body>


            
