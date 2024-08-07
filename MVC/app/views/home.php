<h1>Welcome to Laravel</h1>
<h3>Users: </h3>
<ul>
   <?php foreach($users as $user):?>
    <li><?php echo $user['name']; ?></li>
     <?php endforeach;?>
     
</ul>
