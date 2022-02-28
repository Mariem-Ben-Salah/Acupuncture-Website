-- Table: public.utilisateurs

-- DROP TABLE IF EXISTS public.utilisateurs;

CREATE TABLE IF NOT EXISTS public.utilisateurs
(
    id integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    pseudo character varying(100) COLLATE pg_catalog."default",
    email character varying(100) COLLATE pg_catalog."default",
    password text COLLATE pg_catalog."default",
    ip character varying(20) COLLATE pg_catalog."default",
    date_inscription date NOT NULL DEFAULT CURRENT_TIMESTAMP,
    token character varying COLLATE pg_catalog."default",
    CONSTRAINT utilisateurs_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.utilisateurs
    OWNER to pgtidal;