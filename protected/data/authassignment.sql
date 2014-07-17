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
-- Name: authassignment; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE authassignment (
    itemname character varying(64) NOT NULL,
    userid character varying(64) NOT NULL,
    bizrule text,
    data text
);


ALTER TABLE public.authassignment OWNER TO etracks;

--
-- Data for Name: authassignment; Type: TABLE DATA; Schema: public; Owner: etracks
--

INSERT INTO authassignment VALUES ('Admin', '1', NULL, 'N;');
INSERT INTO authassignment VALUES ('Technician', '3', NULL, 'N;');
INSERT INTO authassignment VALUES ('Technician', '4', NULL, 'N;');
INSERT INTO authassignment VALUES ('business', '5', NULL, 'N;');
INSERT INTO authassignment VALUES ('Authenticated', '8', NULL, 'N;');
INSERT INTO authassignment VALUES ('business', '7', NULL, 'N;');
INSERT INTO authassignment VALUES ('Technician', '11', NULL, 'N;');
INSERT INTO authassignment VALUES ('Technician', '10', NULL, 'N;');
INSERT INTO authassignment VALUES ('Technician', '9', NULL, 'N;');
INSERT INTO authassignment VALUES ('Technician', '12', NULL, 'N;');
INSERT INTO authassignment VALUES ('Management', '13', NULL, 'N;');


--
-- Name: authassignment_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY authassignment
    ADD CONSTRAINT authassignment_pkey PRIMARY KEY (itemname, userid);


--
-- Name: authassignment_itemname_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY authassignment
    ADD CONSTRAINT authassignment_itemname_fkey FOREIGN KEY (itemname) REFERENCES authitem(name) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

