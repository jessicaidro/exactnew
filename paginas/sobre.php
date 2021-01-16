<?php
	include_once "../z_top.php";
?>

<link rel="stylesheet" href="../style.css">

<body class="body">
    <main>
			<div class="container">	

				<div class="row">
					<h3>Sobre o <b>EXACT</b></h3>
					    <p> 
                            O EXACT foi desenvolvido para publicar os trabalhos de conclusão de curso e artigos dos aluno e professores do IFSP BTV. Atualmente o IFSP-BTV não possui um acervo digital dos trabalhos realizados pelos alunos ou professores. O intuito desse projeto é criar uma plataforma em que se possa obter acesso a esses trabalhos e servir de referências para os novos estudantes.
                        </p>
                        <p>
                            Esse trabalho partiu de uma ideia inicial dos alunos <i>Douglas Henrique Fernandes da Silva, Douglas Miguel de Oliveira, Rodrigo Caria de Oliveira, Vitor Gabriel Favoretti e Vitor José Massaki Rodrigues</i> do Curso Técnico em Redes de Computadores integrado ao Ensino Médio tendo como tema “FREELIB - Uma Plataforma para Divulgação de Trabalhos e Artigos Científicos para discentes e docentes.”              
                        </p>

                        <h3>Sobre o <b>IFSP BTV</b></h3>
					    <p> O Campus Avançado Boituva é resultado dos esforços da Prefeitura de Boituva e da Associação Vereador “Jandir Schincariol”, do IFSP e do MEC, que, conhecedores das necessidades da região, cuja principal atividade econômica é a indústria e serviços, implementaram a escola, oferecendo os cursos nas áreas de Informática e Automação Industrial. O CETEB – CENTRO EDUCACIONAL E TECNOLÓGICO DE BOITUVA foi inaugurado em 17 de dezembro de 2002 e pertence à Associação Profissionalizante “Vereador Jandir Schincariol”, que é uma instituição de Educação Profissional que envolve o Governo Federal através do MEC/PROEP, responsáveis pela construção do prédio e aquisição dos equipamentos para funcionamento dos cursos, e o governo municipal através, principalmente, das Secretarias de Administração e da Educação e instituições sociais e profissionais da região. O prédio do CETEB contém 3.662,19 m² de área construída assim distribuídos: 7 salas de aula, 16 laboratórios e 15 ambientes administrativos.               
                        </p>   
                        <div class="video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/RFxjW4ki6fU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                </div>
            </div>
    </main>
</body>
<?php
	include_once "../z_footer.php";
?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
     $(document).ready(function(){
    $('.parallax').parallax();
  });

    $("#toast").click(function(){
      M.toast({html: 'I am a toast!'})
    });
  </script>