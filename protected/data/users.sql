--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: users; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    username character varying(20) DEFAULT ''::character varying NOT NULL,
    password character varying(128) DEFAULT ''::character varying NOT NULL,
    email character varying(128) DEFAULT ''::character varying NOT NULL,
    activkey character varying(128) DEFAULT ''::character varying NOT NULL,
    superuser integer DEFAULT 0 NOT NULL,
    status integer DEFAULT 0 NOT NULL,
    create_at timestamp without time zone DEFAULT now() NOT NULL,
    lastvisit_at timestamp without time zone DEFAULT '1970-01-01 01:00:00'::timestamp without time zone NOT NULL
);


ALTER TABLE public.users OWNER TO etracks;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: etracks
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO etracks;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: etracks
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: etracks
--

INSERT INTO users VALUES (11, 'mojeda', '6293994cfb56220096fa97754c731b4c', 'soporte.jeanmco2@hotmail.com', 'd0e592981243cbb615b5a9145e980694', 0, 1, '2014-07-16 10:38:20', '1970-01-01 01:00:00');
INSERT INTO users VALUES (10, 'mderra', 'b284d156e27f0ab7b723aaec1e387ba5', 'sistemasjeanmco@gmail.com', 'b49be2fa7c0d71692323b739e0e62fe9', 0, 1, '2014-07-16 10:36:46', '1970-01-01 01:00:00');
INSERT INTO users VALUES (4, 'ggiannazzo', 'a620ced41a2e39d98d34436e53af8d21', 'sistemasjeanmco2@gmail.com', '19a9dbac54e6a21dcf6b8c31563722e7', 0, 1, '2014-07-15 18:17:50', '1970-01-01 01:00:00');
INSERT INTO users VALUES (12, 'rchemes', 'a6569a89370feab910180d88824efcdc', 'soporte.jeanmco3@hotmail.com', 'faa6b6f96e217de41eaf3e1f8d39d3fc', 0, 1, '2014-07-16 10:44:56', '1970-01-01 01:00:00');
INSERT INTO users VALUES (7, 'Coca', '014d13b706c94ea1c283a7b660587536', 'administracion2@jeanmco.com.ar', '9b486a1fa1f9c70257519b65501a1a1c', 0, 1, '2014-07-15 19:13:24', '1970-01-01 01:00:00');
INSERT INTO users VALUES (13, 'gtrossero', 'eddef357d7297924ad29bfab95381148', 'info@jeanmco.com.ar', '9f0a320c9d97272f4cdf8e92753641eb', 0, 1, '2014-07-16 10:48:02', '1970-01-01 01:00:00');
INSERT INTO users VALUES (1, 'admin', '704b037a97fa9b25522b7c014c300f8a', 'webmaster@example.com', '4a2e8ba238be5f28c508dae88e0a19b4', 1, 1, '2014-07-14 21:02:26', '2014-07-16 23:00:36');
INSERT INTO users VALUES (5, 'Stella', '9a3cd3818059aa36683642a186dcd00b', 'administracion@jeanmco.com.ar', 'b9aad9a721f54c84239eb920d0b52b4c', 0, 1, '2014-07-15 19:09:38', '2014-07-16 23:18:46');
INSERT INTO users VALUES (3, 'mrossi', 'c3ab48ba1af3351e0c34b9b2fa4f03bd', 'soporte.jeanmco@hotmail.com', 'f44b34e1695d61cefec765d12ca0dad2', 0, 1, '2014-07-15 17:59:13', '2014-07-16 23:26:13');
INSERT INTO users VALUES (9, 'jdiaz', '3f5bdea986c9974d30061fd63826ae20', 'sistemasjeanmco3@gmail.com', '8fc1351d8a31b37d3abdddd9455ed99d', 0, 1, '2014-07-16 10:35:30', '2014-07-16 16:00:45');
INSERT INTO users VALUES (8, 'mostrador', '81dc9bdb52d04dc20036dbd8313ed055', 'recepcion@jeanmco.com.ar', '0a14b82c64f254467084390cebbed18b', 0, 1, '2014-07-15 19:15:15', '2014-07-16 16:02:54');


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: etracks
--

SELECT pg_catalog.setval('users_id_seq', 13, true);


--
-- Name: user_email; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT user_email UNIQUE (email);


--
-- Name: user_username; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT user_username UNIQUE (username);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

