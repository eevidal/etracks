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
-- Name: rights; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE rights (
    itemname character varying(64) NOT NULL,
    type integer NOT NULL,
    weight integer NOT NULL
);


ALTER TABLE public.rights OWNER TO etracks;

--
-- Data for Name: rights; Type: TABLE DATA; Schema: public; Owner: etracks
--



--
-- Name: rights_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY rights
    ADD CONSTRAINT rights_pkey PRIMARY KEY (itemname);


--
-- Name: rights_itemname_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY rights
    ADD CONSTRAINT rights_itemname_fkey FOREIGN KEY (itemname) REFERENCES authitem(name) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

