<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <h1> <?php echo "Hello World From PHP";?> </h1>
  
    <div class="container">
        <div class="row">
            <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                 <div class="card-body">
                   <h5 class="card-title"><?php echo "Card title"; ?></h5>
                   <p class="card-text"><?php echo "Some quick example text to build on the card title and make up the bulk of the card's content."; ?></p> </p>
                   <a href="#" class="btn btn-primary"><?php echo"Go somewhere";?></a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table">
                 <thead>
                      <tr>
                       <th scope="col">Name</th>
                       <th scope="col">Email</th>
                       <th scope="col">Age</th>
                       <th scope="col">Salary</th>
                      </tr>
                 </thead>
                 <tbody>
                    <tr>
                     <th scope="row"><?php echo "Mahmoud";?> </th>
                      <td><?php echo "mahmoud97m97@gmail.com";?></td>
                      <td><?php echo 22;?></td>
                      <td><?php echo "4000$";?></td>
                    </tr>
                    <tr>
                     <th scope="row"><?php echo "Loujien";?> </th>
                      <td><?php echo "loujaien@gmail.com";?></td>
                      <td><?php echo 22;?></td>
                      <td><?php echo "4$";?></td>
                    </tr>
                 
                </tbody>
            </table>

            </div>
        </div>
    </div>
  


  </body>
</html>
