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
-- Name: order; Type: TABLE; Schema: public; Owner: etracks; Tablespace: 
--

CREATE TABLE "order" (
    id integer NOT NULL,
    date date NOT NULL,
    equipment_id integer NOT NULL,
    client_id integer NOT NULL,
    fail character varying NOT NULL,
    warranty boolean DEFAULT false NOT NULL,
    status_id integer NOT NULL,
    adicional text,
    observation text,
    bill character varying,
    shipping character varying
);


ALTER TABLE public."order" OWNER TO etracks;

--
-- Name: order_id_seq; Type: SEQUENCE; Schema: public; Owner: etracks
--

CREATE SEQUENCE order_id_seq
    START WITH 1351
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.order_id_seq OWNER TO etracks;

--
-- Name: order_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: etracks
--

ALTER SEQUENCE order_id_seq OWNED BY "order".id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY "order" ALTER COLUMN id SET DEFAULT nextval('order_id_seq'::regclass);


--
-- Name: order_pkey; Type: CONSTRAINT; Schema: public; Owner: etracks; Tablespace: 
--

ALTER TABLE ONLY "order"
    ADD CONSTRAINT order_pkey PRIMARY KEY (id);


--
-- Name: order_client_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY "order"
    ADD CONSTRAINT order_client_id_fkey FOREIGN KEY (client_id) REFERENCES client(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: order_equipment_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY "order"
    ADD CONSTRAINT order_equipment_id_fkey FOREIGN KEY (equipment_id) REFERENCES equipment(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: order_status_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: etracks
--

ALTER TABLE ONLY "order"
    ADD CONSTRAINT order_status_id_fkey FOREIGN KEY (status_id) REFERENCES status(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

