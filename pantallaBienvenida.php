<?php
    session_start(); //IMPORTANTE! para mostrar el contenido de $_SESSION[ ] debes usar siempre session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENDIDO! <?php echo $_SESSION["usuario"]; ?> </h1>
    <div class="p-bienvenida">
        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, aliquam est. Dolorem beatae praesentium alias numquam nisi error quaerat? Libero totam suscipit facilis, doloribus odit ducimus quasi maiores ab tempora!
        Debitis ullam laudantium veniam culpa minus dignissimos, voluptate, ea quae natus rerum explicabo? Doloribus illum voluptatum quis accusantium dolores harum, dicta nobis fugiat aliquam inventore dolore facere, ut autem atque.
        Aperiam quos suscipit, exercitationem velit ad maxime eius esse debitis eveniet nam non autem tenetur corrupti laudantium asperiores alias facilis quidem nostrum omnis porro sapiente obcaecati. Delectus vero ducimus pariatur?
        Commodi magni debitis nostrum. Sequi, labore ullam? Nobis quaerat sint molestias! Eligendi sequi cum similique soluta, enim velit adipisci, facere dolorem perspiciatis libero, quo eius? Ducimus debitis similique ea ab!</p>
        <p>LOREM ipsum dolor sit amet consectetur, adipisicing elit. Aliquid pariatur reiciendis magni repudiandae numquam eos ipsam aspernatur eum, possimus officia aperiam illum cum sit, vitae fuga corporis, ducimus ad cupiditate.
        Aspernatur, distinctio accusamus quis odio mollitia vel illo quibusdam? Molestiae quis voluptates incidunt. Est, dolor numquam aspernatur, vel eos, commodi cupiditate nesciunt ea impedit illum veniam qui. Consequatur, repudiandae neque.
        Placeat aspernatur odio praesentium repellat? Repellendus neque placeat labore error soluta odio eligendi necessitatibus doloribus magni debitis, praesentium architecto eveniet, cumque delectus maxime ratione saepe asperiores consequuntur dicta aliquid totam?
        Labore necessitatibus voluptatum temporibus recusandae quisquam ipsa magni earum laboriosam enim eligendi! Fugit perferendis molestias explicabo maxime sunt ratione, harum tenetur ipsa reprehenderit ex cumque quis! Reiciendis ipsum quas at?
        Reiciendis fugiat animi cupiditate consequatur temporibus veniam suscipit sint doloremque id dolor, assumenda similique, eius quisquam repellendus illum modi? Deserunt omnis aspernatur in expedita doloremque eius laborum similique eaque ea.</p>
    </div >
<div class="boton">
    <a href="cerrar.php">Carrar sesión</a>
</div>

</body>
</html>
