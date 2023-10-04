<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="../Pagina/logo.png">
    <link rel="stylesheet" href="produto.css">
    <link rel="stylesheet" href="../Pagina/style.css">
    <title>LivaTy - Chá de Hortelã</title>
</head>

<body style="background-color: #f7f3f2; color: #27211E;">
    <!--Inicio NavBar-->
    <header class="header">
        <a href="../Pagina/index.php" class="logo"><img src="../Pagina/logo.PNG" alt=""></a>
        <nav class="navbar">
            <a href="../Pagina/cafes.php">Cafés</a>
            <a href="../Pagina/chas.php">Chás</a>
            <a href="../Pagina/incensos.php">Incensos</a>

        </nav>
        <nav class="navbar2">
                    <a href="#"><i class='bx bx-search'></i></a>
                    <a href="# class="shopping"><i class='bx bx-cart shopping'></i><span class="quantity" style="left: 83%;">0</span></a>
                    <a href="<?php echo isset($_SESSION['email']) ? 'perfil.php' : '#'; ?>" class="btn-user"><i
                            class='bx bxs-user-circle'></i></a>
            
            <?php
            if (isset($_SESSION['email'])) {
                // O usuário está logado, exibir o ícone/botão de logout
                echo '<a href="logout.php" class="logout-link" style="font-size: 1.9rem;"><i class="bx bx-log-out-circle"> Sair</i></a>';
            } else {
            }
            ?>

            <!-- (boxicons) precisa terminar - realizar logout -->
            <!--<a href="logout.php" class="logout-link" style="font-size: 1.9rem;"><i class='bx bx-log-out-circle'> Sair</i></a>-->

            <script>
                document.querySelector('.logout-link').addEventListener('click', function (event) {
                    event.preventDefault();
                    Swal.fire({
                        title: 'Tem certeza?',
                        text: "Você será desconectado do site!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, quero sair!',
                        //background: '#1AD162'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'logout.php';
                        }
                    })
                });
            </script>

    </header>

    <div style="height: 90px;"></div>
    <div id="achubaba" class="container border border-secondary-subtle row"
        style="  display: flex; width: 980px; height: 722px; margin: auto; border-radius: 20px;"><br>
        <div id="achubaba" style="width: 890px; height: 671.19px; margin: auto;">
            <section style="left: 100%; width: 500px; height: 671.1px;">
                <div style="width: 500px; height: 500px;">
                    <img src="../imagem/4.png" alt="cafe"
                        style="width: 500px; height: 500px; border-radius: 10px;">
                </div>
                <div style="width: 500px; height: 150px;"><br>
                    <h5>
                       Descrição do produto. ex.: quantas gramas, quantas unidades, especificações especiais,etc.
                    </h5>
                </div>
            </section>
            <div style="width: 35px; height: 671.19px;"></div>
            <section class="secaoProdutos" style="width: 355px; height: 671.19px;">
                <div style="width: 355px; height: 243.19px;">
                    <div style="margin: auto; height: 50px;">
                        <h4>Chá de Hortelã Leão - 10g</h4>
                    </div>
                    <div style="height: 40px;">
                        <h5>R$: 22,00</h5>
                    </div>
                    <div style=" height: 40px;">
                        <div>
                            <p>Quantidade</p>
                            <input type="number" max="100" min="1"
                                style="width: 80px; height: 40px; background-color: #f7f3f2; text-align: center; border-radius: 2px; border-color: #27211E;">
                        </div>
                        <div style="height: 20px;"></div>
                        <div>
                            <a href="../Pagina/telaCarrinho.html">
                                  <button class="btn fifth">
                                    <h5>Adicionar ao Carrinho</h5>
                            </button>
                            </a>
                          
                        </div>
                    </div>

                </div>

                <div>
                    <div class="accordion accordion-flush color-scheme: dark;" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <h5>Detalhes do Produto</h5>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the first item's accordion body.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <h5>Informações de Envio</h5>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's
                                    imagine this being filled with some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <h5>Politica de Devolução e Reembolso</h5>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the third item's accordion body.
                                    Nothing more exciting happening here in terms of content, but just filling up the
                                    space to make it look, at least at first glance, a bit more representative of how
                                    this would look in a real-world application.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div><br>

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="bi bi-facebook"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="bi bi-instagram"></i></a>

                <!-- WPP -->

                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-whatsapp"></i>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-linkedin"></i>
                </a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Livaty.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!--Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="../Pagina/styles.js"></script>
    <script src="../Pagina/carrinho.js"></script>
</body>

</html>