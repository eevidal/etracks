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
-- Name: profiles_fields; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE profiles_fields (
    id integer NOT NULL,
    varname character varying(50) DEFAULT ''::character varying NOT NULL,
    title character varying(255) DEFAULT ''::character varying NOT NULL,
    field_type character varying(50) DEFAULT ''::character varying NOT NULL,
    field_size integer DEFAULT 0 NOT NULL,
    field_size_min integer DEFAULT 0 NOT NULL,
    required integer DEFAULT 0 NOT NULL,
    match character varying(255) DEFAULT ''::character varying NOT NULL,
    range character varying(255) DEFAULT ''::character varying NOT NULL,
    error_message character varying(255) DEFAULT ''::character varying NOT NULL,
    other_validator text,
    "default" character varying(255) DEFAULT ''::character varying NOT NULL,
    widget character varying(255) DEFAULT ''::character varying NOT NULL,
    widgetparams text,
    "position" integer DEFAULT 0 NOT NULL,
    visible integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.profiles_fields OWNER TO etracks;

--
-- Name: profiles_fields_id_seq; Type: SEQUENCE; Schema: public; Owner: etracks
--

CREATE SEQUENCE profiles_fields_id_seq
    START WITH 2
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.profiles_fields_id_seq OWNER TO etracks;

--
-- Name: profiles_fields_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: etracks
--

ALTER SEQUENCE profiles_fields_id_seq OWNED BY profiles_fields.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY profiles_fields ALTER COLUMN id SET DEFAULT nextval('profiles_fields_id_seq'::regclass);


--
-- Data for Name: profiles_fields; Type: TABLE DATA; Schema: public; Owner: etracks
--

INSERT INTO profiles_fields VALUES (1, 'first_name', 'First Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 1, 3);
INSERT INTO profiles_fields VALUES (2, 'last_name', 'Last Name', 'VARCHAR', 255, 3, 2, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 2, 3);
INSERT INTO profiles_fields VALUES (5, 'nickname', 'nickname', 'VARCHAR', 255, 2, 1, '', '', '', '', '', '', '', 0, 3);


--
-- Name: profiles_fields_id_seq; Type: SEQUENCE SET; Schema: public; Owner: etracks
--

SELECT pg_catalog.setval('profiles_fields_id_seq', 5, true);


--
-- Name: profiles_fields_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY profiles_fields
    ADD CONSTRAINT profiles_fields_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

