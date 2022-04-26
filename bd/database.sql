CREATE DATABASE db_alphaVirginis;
USE db_alphaVirginis;

CREATE TABLE tb_requerente (
	cd_requerente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nm_requerente VARCHAR(50),
	ds_cargo VARCHAR(50)
) ENGINE = innodb;

CREATE TABLE tb_importancia (
	cd_imp INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	ds_imp INT
) ENGINE = innodb;

CREATE TABLE tb_urgencia (
	cd_urg INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	ds_urg INT
) ENGINE = innodb;

CREATE TABLE tb_matriz (
	cd_matriz INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	id_importancia INT,
	id_urgencia INT
) ENGINE = innodb;

CREATE TABLE tb_cargo (
	cd_cargo INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	ds_cargo VARCHAR(50),
	id_responsavel INT(5)
) ENGINE = innodb;

CREATE TABLE tb_setor (
	cd_setor INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nm_setor VARCHAR(50),
	id_cargo INT,
	id_responsavel INT
) ENGINE = innodb;

CREATE TABLE tb_requisicao (
	cd_requisicao INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nm_req VARCHAR(100),
	ds_descricao TEXT(500),
	dt_data DATE,
	id_requerente INT,
	id_setor INT,
	id_matriz INT
) ENGINE = innodb;

CREATE TABLE tb_responsavel (
	cd_rm INT(5) PRIMARY KEY NOT NULL,
	nm_resp VARCHAR(50),
	nr_idade INT(2),
	ds_turma VARCHAR(4),
	ds_setor VARCHAR(50),
	id_cargo INT
) ENGINE = innodb;

ALTER TABLE tb_matriz ADD FOREIGN KEY (id_importancia) REFERENCES tb_importancia (cd_imp);
ALTER TABLE tb_matriz ADD FOREIGN KEY (id_urgencia) REFERENCES tb_urgencia (cd_urg);
ALTER TABLE tb_responsavel ADD FOREIGN KEY (id_cargo) REFERENCES tb_cargo (cd_cargo);
ALTER TABLE tb_cargo ADD FOREIGN KEY (id_responsavel) REFERENCES tb_responsavel (cd_rm);
ALTER TABLE tb_setor ADD FOREIGN KEY (id_cargo) REFERENCES tb_cargo (cd_cargo);
ALTER TABLE tb_setor ADD FOREIGN KEY (id_responsavel) REFERENCES tb_responsavel (cd_rm);
ALTER TABLE tb_requisicao ADD FOREIGN KEY (id_requerente) REFERENCES tb_requerente (cd_requerente);
ALTER TABLE tb_requisicao ADD FOREIGN KEY (id_setor) REFERENCES tb_setor (cd_setor);
ALTER TABLE tb_requisicao ADD FOREIGN KEY (id_matriz) REFERENCES tb_matriz (cd_matriz);

INSERT INTO tb_requerente VALUES
	(null, "Outros", "Etec de Itanhaém"),
	(null, "Haraldo", "Agente Administrativo"),
	(null, "Marcelo", "Orientador Pedagógico"),

	(null, "Sônia", "Diretora"),
	(null, "Milena Biazzus", "Vice-diretora"),

	(null, "Giovanna", "Coordenadora Pedagógica"),
	(null, "Viviane", "Coordenadora (Base Comum)"),
	(null, "Diógenes", "Coordenador (Informática p/ Internet)"),
	(null, "Eduardo", "Coordenador (Administração)"),
	(null, "Júlio", "Coordenador (Meio Ambiente)"),
	(null, "Oswaldo", "Coordenador (Desenvolvimento de Sistemas"),
	(null, "Tadeu", "Coordenador (Farmácia)"),

	(null, "1MIN", "Turma (ETIM)"),
	(null, "2MIN", "Turma (ETIM)"),
	(null, "3MIN", "Turma (ETIM)"),
	(null, "1MAD", "Turma (ETIM)"),
	(null, "2MAD", "Turma (ETIM)"),
	(null, "3MAD", "Turma (ETIM)"),
	(null, "1MAM", "Turma (ETIM)"),
	(null, "2MAM", "Turma (ETIM)"),
	(null, "3MAM", "Turma (ETIM)"),

	(null, "1ADM", "Turma (Modular)"),
	(null, "2ADM", "Turma (Modular)"),
	(null, "3ADM", "Turma (Modular)"),
	(null, "1DSI", "Turma (Modular)"),
	(null, "2DSI", "Turma (Modular)"),
	(null, "3DSI", "Turma (Modular)"),
	(null, "1FAR", "Turma (Modular)");

	INSERT INTO tb_cargo (cd_cargo, ds_cargo) VALUES
		(null, "Presidente"),
		(null, "Vice-presidente"),
		(null, "Secretária-geral"),
		(null, "Tesoureiro"),
		(null, "Dir. de Imprensa"),
		(null, "Dir. de Cultura"),
		(null, "Dir. de Esportes");

	INSERT INTO tb_responsavel (cd_rm, nm_resp, nr_idade, ds_turma, ds_setor) VALUES
		(19001, "Fabrício", 19, "1FAR", "Presidência"),
		(21001, "Samuel", 23, "1DSI", "Presidência"),
		(21002, "Escarlet", 16, "1FAR", "Secretaria"),
		(20218, "Pedro", 17, "3MIN", "Tesouraria"),
		(21003, "Sthefanny", 16, "3ADM", "Imprensa"),
		(21004, "Vitória", 17, "1FAR", "Cultura"),
		(21005, "Pamela", 21, "1FAR", "Esportes");