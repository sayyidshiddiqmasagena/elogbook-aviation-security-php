PGDMP                      
    z            logbookavsec    11.17    11.17 	                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false                       1262    16919    logbookavsec    DATABASE     ?   CREATE DATABASE logbookavsec WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE logbookavsec;
             postgres    false            ?            1259    16920    form_approval    TABLE     q  CREATE TABLE public.form_approval (
    idno integer,
    tgl_request timestamp without time zone,
    user_request character varying(35),
    nama_form character varying(35),
    tgl_inputform date,
    st_approv01 integer,
    iduser_approv01 integer,
    tgl_approv01 date,
    ket_approv01 character varying(100),
    team character varying(15),
    shift character varying(15),
    st_approv02 integer,
    iduser_approv02 integer,
    tgl_approv02 date,
    idkode character varying(12),
    barcode_approv01 character varying(50),
    barcode_approv02 character varying(50),
    ket_approv02 character varying(100)
);
 !   DROP TABLE public.form_approval;
       public         postgres    false                       0    0     COLUMN form_approval.st_approv01    COMMENT     d   COMMENT ON COLUMN public.form_approval.st_approv01 IS '0 = proses approv
1 = diterima
2 = ditolak';
            public       postgres    false    196                       0    0     COLUMN form_approval.st_approv02    COMMENT     d   COMMENT ON COLUMN public.form_approval.st_approv02 IS '0 = proses approv
1 = diterima
2 = ditolak';
            public       postgres    false    196                       0    0    COLUMN form_approval.idkode    COMMENT     U   COMMENT ON COLUMN public.form_approval.idkode IS 'urutan kode : team+shift+tanggal';
            public       postgres    false    196            ?
          0    16920    form_approval 
   TABLE DATA                 COPY public.form_approval (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    196   ?
       ?
   ?   x?}?1?0??????C?ݵ$????&?D?.?'cb???hLny?{w?????$?i?HC~.tE+?ܸ??u)?vM?x?? ???4?ڃ?????v?ƥ~|>>2??F????0??&\:!f??v2?0v
?4??؀?????????w$?"$B??w5     