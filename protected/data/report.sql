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
-- Name: report; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE report (
    id integer NOT NULL,
    report text,
    observation character varying,
    order_id integer NOT NULL,
    date date DEFAULT now(),
    technician character varying NOT NULL,
    type integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.report OWNER TO etracks;

--
-- Name: report_id_seq; Type: SEQUENCE; Schema: public; Owner: etracks
--

CREATE SEQUENCE report_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.report_id_seq OWNER TO etracks;

--
-- Name: report_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: etracks
--

ALTER SEQUENCE report_id_seq OWNED BY report.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY report ALTER COLUMN id SET DEFAULT nextval('report_id_seq'::regclass);


--
-- Name: report_order_id_type_key; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY report
    ADD CONSTRAINT report_order_id_type_key UNIQUE (order_id, type);


--
-- Name: report_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY report
    ADD CONSTRAINT report_pkey PRIMARY KEY (id);


--
-- Name: report_order_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY report
    ADD CONSTRAINT report_order_id_fkey FOREIGN KEY (order_id) REFERENCES "order"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

