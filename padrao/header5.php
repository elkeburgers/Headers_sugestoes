<!-- header padrão para todas as outras páginas do portal.-->


<!-- <?php include_once("../config/variaveis.php") ?> -->

<header>

    <section class="header5">
        <!-- logo -->
        <div>
            <div class="d-flex justify-content-center">
                <a href="./index.php"><img src="imagens/Logo_white.png" alt="logo portal do surf" class="mb-2"></a>
            </div>

            <!-- login -->
            <nav class="d-flex justify-content-flex-end">
                <ul class="nav font-weight-bold">
                    <?php if(isset($usuario) && $usuario != []) {?>
                    <li class="nav-item">
                        <a class="nav-link header4texto" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header4texto" href="#">Sair</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link header4texto" href="paginaLogin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header4texto" href="cadastroUsuario.php">Cadastro</a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>

        <div class="navbar">
            <!-- barra de navegacao -->
            <div class="container mt-n4 col-lg-6">
                <nav class="nav-bar d-flex justify-content-center">
                    <ul class="nav" id="headerNavbar">
                        <li class="nav-item">
                            <a class="nav-link header4texto" href="previsao.php">Previsão</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header4texto" href="caronas.php">Carona</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header4texto" href="desapego.php">Desapego</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header4texto" href="encontre.php">Encontre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header4texto" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header4texto" href="noticias.php">Notícias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle header4texto" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" target=_blank href="https://www.isasurf.org/">ISA</a>
                                <a class="dropdown-item" target=_blank href="https://www.worldsurfleague.com/">World
                                    Surf
                                    League</a>
                                <a class="dropdown-item" target=_blank href="http://wsllatinamerica.com/">WSL Latin
                                    America</a>
                                <a class="dropdown-item" target=_blank href="http://www.abrasp.com/">ABRASP</a>
                                <a class="dropdown-item" target=_blank href="https://magicseaweed.com/">Magic Sea
                                    Weed</a>
                            </div>
                        </li>
                </nav>
            </div>

        </div>
    </section>

    <!-- instruçoes de javascript para  funcionar o dropdown -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</header>