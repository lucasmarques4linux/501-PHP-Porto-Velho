--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: users; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(150) NOT NULL,
    pass character varying(200) NOT NULL
);


ALTER TABLE public.users OWNER TO lucas;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO lucas;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY public.users (id, name, email, pass) FROM stdin;
17	Marcela	marcela@gmail.com	123
19	Francisco	francisco@gmail.com	123
7	Fernando asdasd	fernando@gmail.com	123
26	asdasd	asdsad@asda.com	123
29	Lucas	lucas@gmail.com	123
6	Valeria	valeria@gmail.com	321456
32	Mateus	mateus@gmail.com	123
13	Valeria	joao@gmail.com	123
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('public.users_id_seq', 33, true);


--
-- Name: users users_email_key; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_key UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

