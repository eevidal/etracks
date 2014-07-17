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
-- Name: profiles; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE profiles (
    user_id integer NOT NULL,
    first_name character varying(255),
    last_name character varying(255),
    nickname character varying(255) DEFAULT ''::character varying NOT NULL
);


ALTER TABLE public.profiles OWNER TO etracks;

--
-- Name: profiles_user_id_seq; Type: SEQUENCE; Schema: public; Owner: etracks
--

CREATE SEQUENCE profiles_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.profiles_user_id_seq OWNER TO etracks;

--
-- Name: profiles_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: etracks
--

ALTER SEQUENCE profiles_user_id_seq OWNED BY profiles.user_id;


--
-- Data for Name: profiles; Type: TABLE DATA; Schema: public; Owner: etracks
--

INSERT INTO profiles VALUES (7, 'Coca', '', '');
INSERT INTO profiles VALUES (11, 'Mariano', 'Ojeda', 'MO');
INSERT INTO profiles VALUES (10, 'Maximiliano', 'Derra ', 'MD');
INSERT INTO profiles VALUES (9, 'Jonás', 'Díaz ', 'JD');
INSERT INTO profiles VALUES (4, 'Guillermo', 'Giannazzo', 'GG');
INSERT INTO profiles VALUES (3, 'Mariano', 'Rossi', 'MR');
INSERT INTO profiles VALUES (8, 'Recepción', '', 'mostrador');
INSERT INTO profiles VALUES (12, 'Rebeca', 'Chemes', 'RC');
INSERT INTO profiles VALUES (13, 'Guillermo', 'Trossero', 'GT');
INSERT INTO profiles VALUES (5, 'Stella', '', 'Stella');
INSERT INTO profiles VALUES (1, 'Administrator', 'Admin', 'AD');


--
-- Name: profiles_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: etracks
--

SELECT pg_catalog.setval('profiles_user_id_seq', 2, false);


--
-- Name: profiles_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY profiles
    ADD CONSTRAINT profiles_pkey PRIMARY KEY (user_id);


--
-- Name: profiles_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY profiles
    ADD CONSTRAINT profiles_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

