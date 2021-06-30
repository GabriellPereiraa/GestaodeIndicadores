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
            
                <div class="main-content container-fluid" id="#Apresentacao"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">
                            
                            <h2 class="Titulo">Apresentação</h2>

                            <br>
                         
                            <p>Bem-vindo ao curso sobre elaboração e gestão de indicadores para a gestão pública. Se você já pensou em indicadores para a sua gestão e nunca tinha ouvido falar no Balanced Scorecard como ferramenta de indicadores. Apresentaremos o Balanced Scorecard que surgiu como uma ferramenta estratégica para apoiar o gestor na tomada da decisão, tendo como vertente quatro dimensões. As quatro dimensões do Balanced Scorecard são o financeiro, clientes, processos interno e aprendizado e crescimento. </p>
                                             
                            <p>Durante as próximas horas, eu, Andson de Freitas , lhe conduzirei nessa ferramenta fantástica que mostra indicadores de uma forma completa, onde o financeiro não é a única variável a ser controlada, mas termos que ter uma visão para o cliente, para os processos e os colaboradores.</p>
                                             
                            <p>Nesta primeira parte, falarem de indicadores utilizando o BSC (Balanced Scorecard) e dos aspectos mais gerais e a forma de aplicação, como surgiu e pode ser utilizado.</p>
                                                             
                                                  
                            
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->
                    
                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="../Modulo01/Topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
