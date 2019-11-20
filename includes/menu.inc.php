<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#"><?php echo $nome_projeto ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo $locais[0]; ?>index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $locais[1]; ?>cadastro_funcionario.php" >Funcionários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $locais[2]; ?>cadastro_fornecedor.php" >Fornecedores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $locais[2]; ?>detalhe_livro.php" >Livros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $locais[3]; ?>estoque.php" >Estoque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $locais[4]; ?>quem_somos.php" >Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $locais[5]; ?>contato.php" >Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>