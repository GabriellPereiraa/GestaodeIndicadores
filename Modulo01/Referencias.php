<?php 
    // HEADER
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2>

                            <p></p>

                            <p class="Texto">FREITAS, Márcia Maria Machado. <strong>O Balanced Scorecard em entidades sem fins lucrativos: um estudo de caso no centro de treinamento e desenvolvimento – CETREDE</strong>. 2005. 172 p. Dissertação (Mestrado em Controladoria). Faculdade de Economia, Administração, Atuária, Contabilidade e Secretariado Executivo, Universidade Federal do Ceará.</p>

                            <p class="Texto">HERRERO, Emílio. <strong>Balanced Scorecard e a gestão estratégica: uma abordagem prática</strong>. Rio de Janeiro: Elsevier, 2005 – 5° Reimpressão.</p>

                            <p class="Texto">KAPLAN, Robert S; NORTON, David P. <strong>A Estratégia em Ação: Balanced Scorecard</strong>.. 22. ed. Rio de Janeiro: Editora Elsevier, 1997.</p>

                            <p class="Texto">NEVES, Andréia Lopes. <strong>BSC: Balanced Scorecard</strong>. 2005. Monografia (Bacharelado em Engenharia de Produção). Centro de Tecnologia: Departamento de Informática, Universidade Estadual de Maringá. </p>

                            <p class="Texto">PADOVEZE, Clóvis Luís. <strong>Controladoria Estratégica e Operacional: conceitos, estrutura e aplicação</strong>. São Paulo: Editora Pioneira Thonson Learning,, 2003.</p>
                            
                            <p class="Texto">PRIETO, Vanderli Correia; PEREIRA, Fábio Luis Alves; CARVALHO, Marly Monteiro; LAURINDO, Fernando José Barbin. <strong>Fatores Críticos na Implementação do Balanced Scorecard</strong>. São Paulo, 2005, Escola Politécnica da USP.</p>

                            
          
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="../Modulo01/Topico05.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 01 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
