<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="pmdaq.css" type="text/css" rel="stylesheet" media="all">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <form action="form_script.php" method="POST">
            
            <h1>Name: <input type="text" name="name" size="30"/></h1>
            
            <h2>Size: <select name="size">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                </select></h2>
                     
            <p>Gender: <input type="radio"  name="gender" value="girl"/> Girl
                <input type="radio" name="gender" value="boy"/> Boy
                <input type="radio" name="gender" value="none"/> None</p>
            
            <input type="submit" name="submit" value="Submit"/>
            
    </body>
</html>
