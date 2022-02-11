-- Table: public.users_infos

-- DROP TABLE IF EXISTS public.users_infos;

CREATE TABLE IF NOT EXISTS public.users_infos
(
    id integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    nom character varying(10) COLLATE pg_catalog."default" NOT NULL,
    prenom character varying(10) COLLATE pg_catalog."default" NOT NULL,
    pseudo character varying(10) COLLATE pg_catalog."default" NOT NULL,
    password character varying(10) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT users_infos_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.users_infos
    OWNER to pgtidal;
    