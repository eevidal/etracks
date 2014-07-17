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
-- Name: tracker; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE tracker (
    id integer NOT NULL,
    date date NOT NULL,
    technician character varying NOT NULL,
    order_id integer,
    status_id integer,
    "time" time without time zone
);


ALTER TABLE public.tracker OWNER TO etracks;

--
-- Name: tracker_id_seq; Type: SEQUENCE; Schema: public; Owner: etracks
--

CREATE SEQUENCE tracker_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tracker_id_seq OWNER TO etracks;

--
-- Name: tracker_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: etracks
--

ALTER SEQUENCE tracker_id_seq OWNED BY tracker.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY tracker ALTER COLUMN id SET DEFAULT nextval('tracker_id_seq'::regclass);


--
-- Name: tracker_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY tracker
    ADD CONSTRAINT tracker_pkey PRIMARY KEY (id);


--
-- Name: tracker_order_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY tracker
    ADD CONSTRAINT tracker_order_id_fkey FOREIGN KEY (order_id) REFERENCES "order"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: tracker_status_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY tracker
    ADD CONSTRAINT tracker_status_id_fkey FOREIGN KEY (status_id) REFERENCES status(id) ON UPDATE RESTRICT;


--
-- PostgreSQL database dump complete
--

