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
-- Name: report_part; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE report_part (
    part_id integer NOT NULL,
    report_id integer NOT NULL,
    quantity integer NOT NULL,
    id integer NOT NULL,
    type_report integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.report_part OWNER TO etracks;

--
-- Name: report_part_id_seq; Type: SEQUENCE; Schema: public; Owner: etracks
--

CREATE SEQUENCE report_part_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.report_part_id_seq OWNER TO etracks;

--
-- Name: report_part_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: etracks
--

ALTER SEQUENCE report_part_id_seq OWNED BY report_part.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY report_part ALTER COLUMN id SET DEFAULT nextval('report_part_id_seq'::regclass);


--
-- Name: report_part_part_id_report_id_type_report_key; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY report_part
    ADD CONSTRAINT report_part_part_id_report_id_type_report_key UNIQUE (part_id, report_id, type_report);


--
-- Name: report_part_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY report_part
    ADD CONSTRAINT report_part_pkey PRIMARY KEY (id);


--
-- Name: report_part_part_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY report_part
    ADD CONSTRAINT report_part_part_id_fkey FOREIGN KEY (part_id) REFERENCES part(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: report_part_report_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY report_part
    ADD CONSTRAINT report_part_report_id_fkey FOREIGN KEY (report_id) REFERENCES report(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

