<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Covid-19 Real Time Tracker</title>
</head>
<body>

    <?php 
        $data = file_get_contents
        (
            'https://api.covid19india.org/data.json'
        );
        $decode = json_decode($data, true);
    ?>

<div class="container">
    <table class="table">
  <thead>
    <tr>
        <th scope="col">NO</th>
        <th>State</th>
        <th>Last Updated Date Time</th>
        <th>Confirmed Cases</th>
        <th>Active Cases</th>
        <th>Recovered Cases</th>
        <th>Death Cases</th>
    </tr>
  </thead>
  <tbody>
    <?php   
        $i = 1;
        while($i < 38) { 
    ?> 

    <tr>
        <td>
            <?php echo $i ?>
        </td>

        <td>
            <?php echo $decode['statewise'][$i]['state'] ?>
        </td>
  
        <td>
            <?php echo $decode['statewise'][$i]['lastupdatedtime'] ?>
        </td>
  
        <td>
            <?php echo $decode['statewise'][$i]['confirmed'] ?>
        </td>
  
        <td>
            <?php echo $decode['statewise'][$i]['active'] ?>
        </td>
  
        <td>
            <?php echo  $decode['statewise'][$i]['recovered'] ?>
        </td>
  
        <td>
            <?php echo $decode['statewise'][$i]['deaths'] ?>
        </td>
    </tr>

  </tbody>
  <?php  
        $i++;
        }
    ?>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>