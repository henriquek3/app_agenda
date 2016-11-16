CREATE TABLE "usuarios" (
	"id_usuario" serial NOT NULL,
	"id_contato" integer,
	"nome" varchar NOT NULL,
	"login" varchar NOT NULL UNIQUE,
	"password" varchar NOT NULL,
	"ativo" varchar,
	CONSTRAINT usuarios_pk PRIMARY KEY ("id_usuario")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "grupos" (
	"id_grupo" serial NOT NULL,
	"id_usuario" integer NOT NULL,
	"nome" varchar NOT NULL,
	CONSTRAINT grupos_pk PRIMARY KEY ("id_grupo")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "contatos" (
	"id_contato" serial NOT NULL,
	"id_usuario" integer NOT NULL,
	"id_grupo" integer NOT NULL,
	"id_cidade" integer NOT NULL,
	"nome" varchar NOT NULL,
	"telefone" varchar NOT NULL,
	"endereco" varchar,
	"nascimento" DATE,
	"email" varchar,
	"favorito" varchar,
	"observacoes" varchar,
	CONSTRAINT contatos_pk PRIMARY KEY ("id_contato")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "paises" (
	"id_pais" serial NOT NULL,
	"nome" varchar NOT NULL,
	CONSTRAINT paises_pk PRIMARY KEY ("id_pais")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "estados" (
	"id_estado" serial NOT NULL,
	"id_pais" integer NOT NULL,
	"nome" varchar NOT NULL,
	"uf_codigo" varchar NOT NULL,
	"uf_nome" varchar NOT NULL,
	"regiao" varchar NOT NULL,
	CONSTRAINT estados_pk PRIMARY KEY ("id_estado")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "cidades" (
	"id_cidade" serial NOT NULL,
	"id_estado" integer NOT NULL,
	"municipio_codigo" bigint NOT NULL UNIQUE,
	"uf_estado" varchar NOT NULL,
	"nome" varchar NOT NULL,
	CONSTRAINT cidades_pk PRIMARY KEY ("id_cidade")
) WITH (
  OIDS=FALSE
);



ALTER TABLE "usuarios" ADD CONSTRAINT "usuarios_fk0" FOREIGN KEY ("id_contato") REFERENCES "contatos"("id_contato");

ALTER TABLE "grupos" ADD CONSTRAINT "grupos_fk0" FOREIGN KEY ("id_usuario") REFERENCES "usuarios"("id_usuario");

ALTER TABLE "contatos" ADD CONSTRAINT "contatos_fk0" FOREIGN KEY ("id_usuario") REFERENCES "usuarios"("id_usuario");
ALTER TABLE "contatos" ADD CONSTRAINT "contatos_fk1" FOREIGN KEY ("id_grupo") REFERENCES "grupos"("id_grupo");
ALTER TABLE "contatos" ADD CONSTRAINT "contatos_fk2" FOREIGN KEY ("id_cidade") REFERENCES "cidades"("id_cidade");


ALTER TABLE "estados" ADD CONSTRAINT "estados_fk0" FOREIGN KEY ("id_pais") REFERENCES "paises"("id_pais");

ALTER TABLE "cidades" ADD CONSTRAINT "cidades_fk0" FOREIGN KEY ("id_estado") REFERENCES "estados"("id_estado");

