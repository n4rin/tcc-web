<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Pagina do administrador</title>
</head>
<body>

<?php include 'header.php';?>
    
<div class="container-adm">
    <section>
        <form action="" method="post" class="add-produtos-form" enctype="multipart/form-data">
            <h3>Adicionar Produtos</h3>
            <input type="text" name="p_name" placeholder="digite o nome do produto" class="box-addP" required>
            <input type="number" name="p_price" placeholder="escolha o preço do produto" class="box-addP" required>
            <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box-addP" required>
            <input type="subimit" value="salvar" name="add-produtos" class="btn-addP">
        </form>
    </section>
</div>


<script src="admin.js"></script>
</body>
</html>