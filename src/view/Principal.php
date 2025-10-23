<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Enlatados Juarez</title>

    <style>
        /* Sidebar */
        .w3-sidebar {
            width: 120px;
            background-color: #222;
        }

        /* Fonte padrão */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .w3-bar-item,
        .w3-button {
            font-family: "Montserrat", sans-serif
        }

        /* Espaçamento das seções */
        section {
            padding: 64px 16px;
            margin-left: 140px;
            min-height: 100vh;
        }

        /* Centraliza o conteúdo dos formulários */
        form {
            margin: auto;
        }
    </style>
</head>

<body class="w3-light-grey">

    <!-- SIDEBAR -->
    <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
        <a href="#home" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>

        <a href="#dPessoais" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>DADOS PESSOAIS</p>
        </a>

        <a href="#formacao" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-graduation-cap w3-xxlarge"></i>
            <p>FORMAÇÃO</p>
        </a>

        <a href="#profissional" class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-briefcase w3-xxlarge"></i>
            <p>EXPERIÊNCIA</p>
        </a>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <div id="main">

        <!-- HOME -->
        <section id="home" class="w3-container w3-center w3-padding-64">
            <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/293587-latas-de-aluminio-em-seis-cores-diferentes-gratis-vetor.jpg"
                alt="logo" class="w3-image" width="15%">
            <h2 class="w3-text-grey">Enlatados Juarez</h2>
            <h1 class="w3-text-cyan">SISTEMA DE CURRÍCULOS</h1>
        </section>

        <!-- DADOS PESSOAIS -->
        <section id="dPessoais" class="w3-content w3-text-grey">
            <h2 class="w3-text-cyan">Dados Pessoais</h2>

            <form action="" method="post"
                class="w3-container w3-light-grey w3-text-blue w3-card-4 w3-round-large w3-padding-32"
                style="width:70%;">
                <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="">

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-user"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtNome" type="text"
                            placeholder="Nome Completo" required>
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDataNasc" type="date"
                            placeholder="Data de Nascimento">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-id-card"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text"
                            placeholder="CPF (ex.: 33333333333)">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-envelope-o"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtEMAIL" type="email"
                            placeholder="Email (ex.: usuario@exemplo.com)">
                    </div>
                </div>

                <div class="w3-center">
                    <button class="w3-button w3-blue w3-round-large w3-hover-cyan w3-margin-top">Atualizar</button>
                </div>
            </form>
        </section>

        <!-- FORMAÇÃO -->
        <section id="formacao" class="w3-content w3-text-grey">
            <h2 class="w3-text-cyan">Formação</h2>

            <form action="#" method="post"
                class="w3-container w3-light-grey w3-text-blue w3-card-4 w3-round-large w3-padding-32"
                style="width:70%;">

                <div class="w3-row w3-center w3-margin-top">
                    <div class="w3-col" style="width:50%;">
                        <b>Data Inicial</b>
                    </div>
                    <div class="w3-rest">
                        <b>Data Final</b>
                    </div>
                </div>

                <div class="w3-row w3-section w3-center">
                    <div class="w3-col" style="width:45%;">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date">
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date">
                    </div>
                </div>

                <div class="w3-row w3-section w3-center">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text"
                            placeholder="Descrição: Ex. Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                    </div>
                </div>

                <div class="w3-center">
                    <button class="w3-button w3-blue w3-round-large w3-hover-cyan w3-margin-top" style="width:25%;">
                        <i class="fa fa-plus w3-xlarge"></i> Adicionar
                    </button>
                </div>

                <div class="w3-container w3-margin-top">
                    <table class="w3-table-all w3-centered w3-hoverable w3-card-4">
                        <thead>
                            <tr class="w3-blue">
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Descrição</th>
                                <th>Apagar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-01-01</td>
                                <td>2024-01-01</td>
                                <td>Técnico em Desenvolvimento de Sistemas - ETEC</td>
                                <td>
                                    <button class="w3-button w3-red w3-round-large w3-hover-dark-grey">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </section>

        <!-- EXPERIÊNCIA PROFISSIONAL -->
        <section id="profissional" class="w3-content w3-text-grey">
            <h2 class="w3-text-cyan">Experiência Profissional</h2>

            <form action="#" method="post"
                class="w3-container w3-light-grey w3-text-blue w3-card-4 w3-round-large w3-padding-32"
                style="width:70%;">

                <div class="w3-row w3-center w3-margin-top">
                    <div class="w3-col" style="width:50%;"><b>Data Inicial</b></div>
                    <div class="w3-rest"><b>Data Final</b></div>
                </div>

                <div class="w3-row w3-section w3-center">
                    <div class="w3-col" style="width:45%;">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date">
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-building"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text"
                            placeholder="Nome da Empresa: Ex. Centro Paula Souza">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text"
                            placeholder="Descrição: Ex. Desenvolvimento de Páginas Web">
                    </div>
                </div>

                <div class="w3-center">
                    <button class="w3-button w3-blue w3-round-large w3-hover-cyan w3-margin-top" style="width:25%;">
                        <i class="fa fa-plus w3-xlarge"></i> Adicionar
                    </button>
                </div>

                <div class="w3-container w3-margin-top">
                    <table class="w3-table-all w3-centered w3-hoverable w3-card-4">
                        <thead>
                            <tr class="w3-blue">
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Empresa</th>
                                <th>Descrição</th>
                                <th>Apagar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-02-01</td>
                                <td>2024-01-15</td>
                                <td>Centro Paula Souza</td>
                                <td>Desenvolvimento de Páginas Web</td>
                                <td>
                                    <button class="w3-button w3-red w3-round-large w3-hover-dark-grey">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </section>
    </div>
</body>

</html>