create database bdexact;
	use bdexact;
	
	create table Usuarios (
	id_user int primary key auto_increment,
	nome varchar(50) not null,
	usuario varchar(50) not null,
	senha varchar(50) not null,
	email varchar(60) not null,
	);
	
	create table Master (
	id_master int primary key auto_increment,
	id_user int not null,
	foreign key(id_user) references Usuarios(id_user)
	);
	
	
	create table Curso (
	id_curso int primary key auto_increment,
	nome varchar(100) not null,
	);

	create table Professor(
	id_professor int primary key auto_increment,
	id_user int not null,
	id_curso int null.
	foreign key(id_user) references Usuarios(id_user),
	foreign key(id_curso) references Curso(id_curso)
	);
	
	create table Aluno(
	id_aluno int primary key auto_increment,
	id_user int not null,
	id_curso int not null,
	ano date not null,
	foreign key(id_user) references Usuarios(id_user),
	foreign key(id_curso) references Curso(id_curso)
	);
	
	create table Arquivo (
	id_arquivo int primary key auto_increment,
	diretorioArquivo varchar(250) not null
)

	create table Categoria (
	id_categoria int primary key auto_increment,
	NomeCategoria varchar(60) not null
	);

	create table Trabalhos(
	id_trabalho int primary key auto_increment,
	id_aluno int,
	id_professor int,
	id_categoria,
	id_arquivo,
	ano date not null,
	foreign key(id_aluno) references Aluno(id_aluno),
	foreign key(id_professor) references Professor(id_professor),
	foreign key(id_categoria) references Categoria(id_categoria),
	foreign key(id_arquivo) references Arquivo(id_arquivo)
	);
	
	create table TrabalhoAluno(
	id_ta int primary key auto_increment,
	id_aluno int not null,
	id_trabalho int not null,
	foreign key(id_aluno) references Aluno(id_aluno),
	foreign key(id_trabalho) references Trabalhos(id_trabalho)
	);
	
	create table TrabalhoProfessor(
	id_tp int primary key auto_increment,
	id_professor int not null,
	id_trabalho int not null,
	foreign key(id_professor) references Professor(id_professor),
	foreign key(id_trabalho) references Trabalhos(id_trabalho)
	);
	
	create table CursoProfessor(
	id_cursoprofessor int primary key auto_increment,
	id_professor int not null,
	id_trabalho int not null,
	foreign key(id_professor) references Professor(id_professor),
	foreign key(id_trabalho) references Trabalhos(id_trabalho)
	);
	
	create table CursoAluno(
	id_cursoaluno int primary key auto_increment,
	id_aluno int not null,
	id_trabalho int not null,
	foreign key(id_aluno) references Aluno(id_aluno),
	foreign key(id_trabalho) references Trabalhos(id_trabalho)
	);
