

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Inventory</title>
</head>
<style>
    form::placeholder,label{
        text-align:right;
    } label{margin:2%;font-size: 18px;align-items: center;}
    input{
        height: 40px;
        width:60%;
        float:left;
        
    }
    select{
        height: 40px;
        width:60%;
        font-size: 24px;
    }
    td{
        width: 50%;
       
    }
    table{
        vertical-align: middle;
        align-items: right;
    }
</style>
<body>
    <div class="header" style="text-align: left;">
        <h1 id="nhead">Mkude Warehouse 
            <a href="login.php" class="signout"><i style="float: right;" class="fa fa-sign-out"></i></a>
            <a href="logout.php" class="signout"><i style="float: right;margin-right:2%;" class="fa fa-user"></i></a>
    </h1>
    <br>
    <div class="navbar">
        <a href="index.php" id="nbar">HOME</a><a href="about.php" id="nbar">ABOUT</a> <a href="contact.php" id="nbar">CONTACT US</a>
     </div>
    </div>
    <div class="s-layout">
     
  
        <br>
        <div class="cols-s-32 center">
           <br>
           <form method="POST" action="register_process.php">
            <legend>ADD A NEW WORKER</legend>
               <table width="100%">
                    <tr>
                        <td>
                            <label for="fname" id="fname">
                                First  Name:
                                <br>
                                <input type="text" name="fname" id="fname" >
                            </label>  
                        </td>
                        <td>
                              
                            <label for="sname" id="sname">
                            Last Name:
                            <br>
                             <input type="text" name="sname" id="sname" >
                          </label>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                              
                            <label for="email" id="email">
                            Email Address: <br>
                             <input type="email" name="email" id="email" >
                          </label>
                        </td>
                      
                        <td>
                            <label for="pnumber" id="pnumber">
                                Phone number: <br>
                                <input type="text" name="pnumber" id="pnumber" >
                            </label>  
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label for="password" id="password">
                                Password: <br>
                                <input type="password" name="password" id="password" >
                            </label>  
                        </td>
            
                           
                            <td>
                                  
                                <label for="address" id="address">
                                Address: <br>
                                 <input type="address" name="address" id="address" >
                              </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="dob" id="dob">
                                    Date Of Birth: <br>
                                    <input type="date" name="dob" id="dob" >
                                </label>  
                            </td>
                            <td>
                                  
                                <label for="sex" id="sex">
                                Sex: <br>
                                <label for="female">
                                    <input type="radio" name="sex" id="female" value="female" style="width:auto;height: auto;float: none;">
                                    Female
                                </label>
                                <label id="male">
                                    <input type="radio" name="sex" id="male" value="male" style="width:auto;height: auto;float: none;">
                                    Male
                                </label>
                                
                              </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="start_date" id="start_date">
                                    Start Date: <br>
                                    <input type="date" name="start_date" id="start_date" >
                                </label>  
                            </td> 
                            <td>
                              
                                <label for="Salary" id="salary">
                                Salary: <br>
                                 <input type="text" name="salary" id="salary" >
                              </label>
                            </td>
                        </tr>
                        <tr>
                            <td>

                        
                            <label for="role">
                                SELECT ROLE: <br>
                            <select name="role" id="role">
                         
                                <option value="1">Manager</option>
                                <option value="2">Driver</option>
                                <option value="3">Supervisor</option>
                                <option value="4">Technician</option>

                                
                            </select>
                       
                            </label>
                    </td>
                        </tr>
          
               </table>
               
               <input type="submit" value="REGISTER" name="register" style="background-color: #192b3c;color: whitesmoke;width: 80%;">
            
        
           </form>
           
            </div>
            <br>
            
        </div>
</body>
</html>
