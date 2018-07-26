<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($output)) {?>

    <?php foreach($output['posts'] as $data) {?>
       <table>
        <thead>
        <th>Keyword</th>
        <th>Date</th>
        <th>Source</th>
        <th>Sentiment</th>
        <th>Context</th>
        </thead>
        <tbody>
        <td><?php echo $term; ?></td>
        <td><?php echo $data['posted'];?></td>
        <td><?php echo $data['url'];?></td>
        <td><?php echo $data['sentiment'];?></td>
        <td><?php echo $data['text'];?></td>
        </tbody>
       </table>
    <?php } }?>

    <form action="<?php echo $this->webroot;?>api" method="post">
    <input type="text" name="term">
    <select name="network" id="" placeholder="Please choose">
    <option value="choose">Choose</option>
    <option value="facebook">Facebook</option>
    <option value="twitter">Twitter</option>
    </select>
    <input type="submit" value="Submit">
    </form>
</body>
</html>