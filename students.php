<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    
    <!-- all our code. written -->

        <div class="header">
            <a href="index.php"><img src="images/image.webp" alt="zalego logo"  class= "rounded-circle"height="50px" width="50px"></a>


        </div>
        <div class="sidebar">
            <nav>
                <ul>
                    <li>
                        <a href="">
                            <span> <i class="fa fa-group"></i></span>
                          
                            <span>student</span>
                        </a> 
                        

                    </li>
                    <li>
                        <a href="">
                            <span> <i class="fa fa-folder-open"></i></span>
                            <span>courses</span>

                        </a>

                    </li>
                    <li>
                        <a href="">
                            <span> <i class="fa fa-graduation-cap"></i></span>
                            <span>campus</span>

                        </a>

                    </li>


                </ul>

            </nav>
        
        </div>
      
       <div class="main-content">
         <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-center text-white" style="height: 5vh;">
                    <span> <i class="fa fa-group"></i></span>
                        <span>Students</span>
                    </div>
                </div>
             </div>
     <div class="card-body">
        <table class="table table-striped table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">fullname</th>
                <th scope="col">gender</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">course</th>
                <th>enrolled on</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Fosi Amana</td>
                <td>Male</td>
                <td>fahah@ehhwa</td>
                <td>077292737</td>
                <td>web design</td>
                <td>1st july 2022</td>
                
                <td>
                  <a href="#" class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Kevin munene</td>
                <td>Male</td>
                <td>07282543</td>
                <td>Data science</td>
                <td></td>
                <td></td>
                <td> 
                <a href="#" class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
                

              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                <a href="#" class="btn btn-primary btn-sm"><i  class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
                

                

                
              </tr>
            </tbody>
          </table>
           
       </div>
     </div>
    


    


<script src="jquery.min.js"></script>
   <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
   <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>