PGDMP     '                     {            logbookavsec    11.17    11.17 *    >           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            @           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            A           1262    16919    logbookavsec    DATABASE     ?   CREATE DATABASE logbookavsec WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
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
       public         postgres    false            B           0    0     COLUMN form_approval.st_approv01    COMMENT     d   COMMENT ON COLUMN public.form_approval.st_approv01 IS '0 = proses approv
1 = diterima
2 = ditolak';
            public       postgres    false    196            C           0    0     COLUMN form_approval.st_approv02    COMMENT     d   COMMENT ON COLUMN public.form_approval.st_approv02 IS '0 = proses approv
1 = diterima
2 = ditolak';
            public       postgres    false    196            D           0    0    COLUMN form_approval.idkode    COMMENT     U   COMMENT ON COLUMN public.form_approval.idkode IS 'urutan kode : team+shift+tanggal';
            public       postgres    false    196            ?            1259    16974    form_approval_bagasi_island2    TABLE     ?  CREATE TABLE public.form_approval_bagasi_island2 (
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
 0   DROP TABLE public.form_approval_bagasi_island2;
       public         postgres    false            ?            1259    16955    form_approval_orgbrg    TABLE     x  CREATE TABLE public.form_approval_orgbrg (
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
 (   DROP TABLE public.form_approval_orgbrg;
       public         postgres    false            ?            1259    16970    form_approval_orgbrg_inter    TABLE     ~  CREATE TABLE public.form_approval_orgbrg_inter (
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
 .   DROP TABLE public.form_approval_orgbrg_inter;
       public         postgres    false            ?            1259    16983    form_approval_orgbrg_karyawan    TABLE     ?  CREATE TABLE public.form_approval_orgbrg_karyawan (
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
 1   DROP TABLE public.form_approval_orgbrg_karyawan;
       public         postgres    false            ?            1259    16989    form_approval_orgbrg_scppos2    TABLE     ?  CREATE TABLE public.form_approval_orgbrg_scppos2 (
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
 0   DROP TABLE public.form_approval_orgbrg_scppos2;
       public         postgres    false            ?            1259    16964    form_approval_orgbrg_transit    TABLE     ?  CREATE TABLE public.form_approval_orgbrg_transit (
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
 0   DROP TABLE public.form_approval_orgbrg_transit;
       public         postgres    false            ?            1259    16923    randomcheck_bagasi    TABLE     =  CREATE TABLE public.randomcheck_bagasi (
    idno integer,
    tanggal date,
    namapemilik character varying(25),
    nopen character varying(10),
    jns_bagasi character varying(50),
    no_claim integer,
    mtd_periksabagasi integer,
    personil_pemeriksa character varying(25),
    hasil_temuan character varying(50),
    lokasi character varying(25),
    jam_periksa time without time zone,
    id_users integer,
    st_approv01 integer,
    team character varying(15),
    shift character varying(15),
    st_approv02 integer,
    idkode character varying(12)
);
 &   DROP TABLE public.randomcheck_bagasi;
       public         postgres    false            E           0    0 +   COLUMN randomcheck_bagasi.mtd_periksabagasi    COMMENT     ]   COMMENT ON COLUMN public.randomcheck_bagasi.mtd_periksabagasi IS '0 = Manual Check
1 = ETD';
            public       postgres    false    197            F           0    0 %   COLUMN randomcheck_bagasi.st_approv01    COMMENT     ?   COMMENT ON COLUMN public.randomcheck_bagasi.st_approv01 IS 'null = belum dikirim
0 = dikirim proses approv
1 = diterima
2 = ditolak
';
            public       postgres    false    197            G           0    0 %   COLUMN randomcheck_bagasi.st_approv02    COMMENT     ?   COMMENT ON COLUMN public.randomcheck_bagasi.st_approv02 IS 'null = belum dikirim
0 = dikirim proses approv
1 = diterima
2 = ditolak';
            public       postgres    false    197            H           0    0     COLUMN randomcheck_bagasi.idkode    COMMENT     Z   COMMENT ON COLUMN public.randomcheck_bagasi.idkode IS 'urutan kode : team+shift+tanggal';
            public       postgres    false    197            ?            1259    16977    randomcheck_bagasi_island2    TABLE     E  CREATE TABLE public.randomcheck_bagasi_island2 (
    idno integer,
    tanggal date,
    namapemilik character varying(25),
    nopen character varying(10),
    jns_bagasi character varying(50),
    no_claim integer,
    mtd_periksabagasi integer,
    personil_pemeriksa character varying(25),
    hasil_temuan character varying(50),
    lokasi character varying(25),
    jam_periksa time without time zone,
    id_users integer,
    st_approv01 integer,
    team character varying(15),
    shift character varying(15),
    st_approv02 integer,
    idkode character varying(12)
);
 .   DROP TABLE public.randomcheck_bagasi_island2;
       public         postgres    false            ?            1259    16926    randomcheck_orgbrg    TABLE     X  CREATE TABLE public.randomcheck_orgbrg (
    idno integer,
    tanggal timestamp without time zone,
    namapax character varying(25),
    nopen character varying(25),
    jenisbrg_bawaan character varying(50),
    mtd_periksapax integer,
    mtd_periksabrg integer,
    personil_pemeriksa character varying(25),
    hasil_temuan character varying(50),
    lokasi character varying(25),
    jam_periksa time without time zone,
    id_users integer,
    team character varying(15),
    shift character varying(15),
    st_approv01 integer,
    st_approv02 integer,
    idkode character varying(12)
);
 &   DROP TABLE public.randomcheck_orgbrg;
       public         postgres    false            I           0    0 (   COLUMN randomcheck_orgbrg.mtd_periksabrg    COMMENT     Z   COMMENT ON COLUMN public.randomcheck_orgbrg.mtd_periksabrg IS '0 = Manual Check
1 = ETD';
            public       postgres    false    198            ?            1259    16967    randomcheck_orgbrg_inter    TABLE     ^  CREATE TABLE public.randomcheck_orgbrg_inter (
    idno integer,
    tanggal timestamp without time zone,
    namapax character varying(25),
    nopen character varying(25),
    jenisbrg_bawaan character varying(50),
    mtd_periksapax integer,
    mtd_periksabrg integer,
    personil_pemeriksa character varying(25),
    hasil_temuan character varying(50),
    lokasi character varying(25),
    jam_periksa time without time zone,
    id_users integer,
    team character varying(15),
    shift character varying(15),
    st_approv01 integer,
    st_approv02 integer,
    idkode character varying(12)
);
 ,   DROP TABLE public.randomcheck_orgbrg_inter;
       public         postgres    false            ?            1259    16980    randomcheck_orgbrg_karyawan    TABLE     d  CREATE TABLE public.randomcheck_orgbrg_karyawan (
    idno integer,
    tanggal timestamp without time zone,
    namakar character varying(50),
    instansi character varying(50),
    jenisbrg_bawaan character varying(50),
    mtd_periksakar integer,
    mtd_periksabrg integer,
    personil_pemeriksa character varying(25),
    hasil_temuan character varying(50),
    lokasi character varying(25),
    jam_periksa time without time zone,
    id_users integer,
    team character varying(15),
    shift character varying(15),
    st_approv01 integer,
    st_approv02 integer,
    idkode character varying(12)
);
 /   DROP TABLE public.randomcheck_orgbrg_karyawan;
       public         postgres    false            ?            1259    16986    randomcheck_orgbrg_scppos2    TABLE     c  CREATE TABLE public.randomcheck_orgbrg_scppos2 (
    idno integer,
    tanggal timestamp without time zone,
    namakar character varying(50),
    instansi character varying(50),
    jenisbrg_bawaan character varying(50),
    mtd_periksakar integer,
    mtd_periksabrg integer,
    personil_pemeriksa character varying(25),
    hasil_temuan character varying(50),
    lokasi character varying(25),
    jam_periksa time without time zone,
    id_users integer,
    team character varying(15),
    shift character varying(15),
    st_approv01 integer,
    st_approv02 integer,
    idkode character varying(12)
);
 .   DROP TABLE public.randomcheck_orgbrg_scppos2;
       public         postgres    false            ?            1259    16958    randomcheck_orgbrg_transit    TABLE     `  CREATE TABLE public.randomcheck_orgbrg_transit (
    idno integer,
    tanggal timestamp without time zone,
    namapax character varying(25),
    nopen character varying(25),
    jenisbrg_bawaan character varying(50),
    mtd_periksapax integer,
    mtd_periksabrg integer,
    personil_pemeriksa character varying(25),
    hasil_temuan character varying(50),
    lokasi character varying(25),
    jam_periksa time without time zone,
    id_users integer,
    team character varying(15),
    shift character varying(15),
    st_approv01 integer,
    st_approv02 integer,
    idkode character varying(12)
);
 .   DROP TABLE public.randomcheck_orgbrg_transit;
       public         postgres    false            ?            1259    16929    users    TABLE       CREATE TABLE public.users (
    id_users integer NOT NULL,
    nama character varying(50) NOT NULL,
    nip character varying(50) NOT NULL,
    role integer NOT NULL,
    foto character varying(50),
    username character varying(50) NOT NULL,
    password character varying(255),
    jabatan character varying(50),
    unit character varying(50),
    email character varying(50)
);
    DROP TABLE public.users;
       public         postgres    false            -          0    16920    form_approval 
   TABLE DATA                 COPY public.form_approval (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    196   ?P       6          0    16974    form_approval_bagasi_island2 
   TABLE DATA                 COPY public.form_approval_bagasi_island2 (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    205   R       1          0    16955    form_approval_orgbrg 
   TABLE DATA                 COPY public.form_approval_orgbrg (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    200   ?R       5          0    16970    form_approval_orgbrg_inter 
   TABLE DATA                 COPY public.form_approval_orgbrg_inter (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    204   dS       9          0    16983    form_approval_orgbrg_karyawan 
   TABLE DATA                 COPY public.form_approval_orgbrg_karyawan (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    208   T       ;          0    16989    form_approval_orgbrg_scppos2 
   TABLE DATA                 COPY public.form_approval_orgbrg_scppos2 (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    210   ?T       3          0    16964    form_approval_orgbrg_transit 
   TABLE DATA                 COPY public.form_approval_orgbrg_transit (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    202   PU       .          0    16923    randomcheck_bagasi 
   TABLE DATA               ?   COPY public.randomcheck_bagasi (idno, tanggal, namapemilik, nopen, jns_bagasi, no_claim, mtd_periksabagasi, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, st_approv01, team, shift, st_approv02, idkode) FROM stdin;
    public       postgres    false    197   ?U       7          0    16977    randomcheck_bagasi_island2 
   TABLE DATA               ?   COPY public.randomcheck_bagasi_island2 (idno, tanggal, namapemilik, nopen, jns_bagasi, no_claim, mtd_periksabagasi, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, st_approv01, team, shift, st_approv02, idkode) FROM stdin;
    public       postgres    false    206   YX       /          0    16926    randomcheck_orgbrg 
   TABLE DATA               ?   COPY public.randomcheck_orgbrg (idno, tanggal, namapax, nopen, jenisbrg_bawaan, mtd_periksapax, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    198   dY       4          0    16967    randomcheck_orgbrg_inter 
   TABLE DATA               ?   COPY public.randomcheck_orgbrg_inter (idno, tanggal, namapax, nopen, jenisbrg_bawaan, mtd_periksapax, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    203   U\       8          0    16980    randomcheck_orgbrg_karyawan 
   TABLE DATA               ?   COPY public.randomcheck_orgbrg_karyawan (idno, tanggal, namakar, instansi, jenisbrg_bawaan, mtd_periksakar, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    207   ?]       :          0    16986    randomcheck_orgbrg_scppos2 
   TABLE DATA               ?   COPY public.randomcheck_orgbrg_scppos2 (idno, tanggal, namakar, instansi, jenisbrg_bawaan, mtd_periksakar, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    209   _       2          0    16958    randomcheck_orgbrg_transit 
   TABLE DATA               ?   COPY public.randomcheck_orgbrg_transit (idno, tanggal, namapax, nopen, jenisbrg_bawaan, mtd_periksapax, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    201   
`       0          0    16929    users 
   TABLE DATA               j   COPY public.users (id_users, nama, nip, role, foto, username, password, jabatan, unit, email) FROM stdin;
    public       postgres    false    199   a       -     x????o?0??????Dw??7?D?% (??XP?t?*U??5?Ԫ2!1??ݽ???@??L(N?H4$?|;8??-w??u?mܽ>:? ??? ʫ}?@kOΗ??T??@퇆??w????;?>?ېxl?&???O?T&Dd"?$??Զ?ud?J?:,T~hd?22%[·;I??gLӦ??V???e?F"?:BE???y?_`˅?Rn?PnQ?(}3>????mNޕ??B??}SO?0????R??o?t?5z=??O:?_H??^$??/X?2?8?s,?̍ԫ????/?t?I      6   x   x?3?4202?5!C+c#+#N?PO?`? O?`G?OOM$????F???Ҕ??ļ??NW?G?`OG?w?:cdu.? ?!r&??#?zy????ɉhb?٩\1z\\\ 5?&M      1   ?   x?uO?
?@|?????nO?|?K????@??0?"??????egfgv8 C8lC?%<JuN5ؽ?Z/x`?P????$2?ŀ?T?J??n??%A??,N"??????:????e6p?s1(;g???5|>Zh:׸f????r?;?N((???VV?N?o??)md???f
A?;?!!?`?G?      5   ?   x?}???0???S?$?j?v;,!M ??ͥA1?^P????-ߟ?w?R.p\?B?ZK??Xp??ۢJ9?/(?? Ct?ٷ<?t?&?*??R;??a˔#?0???????5P??????"^).?Zm?
?ң?'???
&??2??j
L>?Uo?j????)b?=aH?      9   ?   x?u?M
?0??/??,MBv???6?D
لT?"? ????0????
,clG?xB??탠?TL?%G<?xEQ@???,?????w???F?>??Pm?@Y?n\^ߘ>#??y?????H4$?w??B????՟????U?v??Uh??Rۊ???M	!oRM:      ;   q   x?3?4202?5"cC++cCN?PO?`? ? ?`? ? ?`O?G#$圆?(\????bN? ?0? GwO??1?| ?chd?T"?zy????ɉhb?٩\1z\\\ ??$?      3   p   x?3?4202?5!+cc+CsN?PO?`? ?? G?`??"KNCN#$=??????A>?????>??@??
?}AC#?????bW? /?39#19M?=???+F??? O?"?      .   y  x???Oo?@??ç???vfw??m?X6??X!j/?lj????"U???]?;???x?y??1? ????`?\????ב$???nY ??J?ݔ? ????J???]??4??fS3?ӯ@2?2?????'?f??j?PB???#4??&R?????eJj?
????_J???k???[P?t?]M???Lͭ?n=[? vٯ06?T?f??T???r??u??A?D??HG?R{????>E?????]?????ƾ?XهMF?+??&/?J0ӕ??s?? ?6ء/䋆̛<??`??5"8X9Xǀ?
??7??*?N?M|Q?ƮmX?fw?Ѭ??er??]Ƈ?NT?0??ߖ?/?f?z7@??????:?s?_;!???i?#?ǻ?	?J4?#??}?)?Ǌ????V?	?m?6sqp?tz??,j???;Ɖ?Oa??őBY.8?P.~??Q???sW?q??tbc1d{~LRxi?&K;?9???>?٬3??Aflۇ??p?Q?;??>U??}tCy_??????r??i?a4???OA?M?hYG?EKR???Z????`?Ȉ?????|ᘨ%|??c???V^?Y??l??>?0?a?R?a??y??[?In?Wm\Z7?;(?(?!S?6Y{???y??]      7   ?   x???MO?@??˯ਇ?z????bz2^6???"1???2s??$O??8_???P]??J	??i+?(PR??0?3??5??u7?~Gq?s?{??m?'???`b-????s??n??Q?8Oǩ6?ç?s=pl,U??U?y?$<<?Y<?aƒ???Zq?K?PDȌ-?\??b?'???*K-?E?99?r?.Zq?M???a,B."???g???9???9????D???uO-??+\?^n???\w      /   ?  x????n?@Ưǧ???@???u[VE??&??Mi?hwӷ?3??#?Ą?|??7?QL??CB,bs6??A??I됤??A???_3m?T????-???2E$?\fh-s??gvI?>r????!??"ǥr<
????o@ f?m???`?
?p?Vk?8?m???CC?.Hln???j?I 6????#?P?M??lH????6j 
??U?Q?8D???8	?r9i4S
??bD?9?i(?VF???˶???1?c3??n?3???? ??֨?Sz??G?M	?c?\?R?E???????nV??+E?U]?????B5r?h4xd"2??N????????y?\??:~?(73z>6P)??F???0?H?y?;??wV?yi¹??o????9?pF?'?9v.???>?????]??Jf?Ќ?*?Z=?.?Nl???]?W?}?7?m?????U???ElcR?I??2?????}???!?X?V?l??ˠy?N?-?f??l ?j?cMhB)P?i6??-??{DJ???oei?L???ȽeD??v#??7??(???~Ű??\f?rWE??K??f 9On??W????Qe??q:C??2???;A??H??|/?nٵ?&???N?űxSr??x#B8VɶL?QmT??i??P?0l?E????-G???՛*?6???P?N\?и?u/Ǭ?En{?;?fUQIan֛k?8????mDo????jO      4   S  x????n?0????S?.|Ż?L????ƛ?Q\?????~???ĆЛ^????X?3??2-k|Z??~y???Fć? Zؐ?????+Ȧ?'y?Nh?? +{??߆Y??)?tˍܦ???e8?g??\&????hĿ?????ՠA?jЂ??#xG???	n%j]J?M?hJ?Շz?%???x?X???kg?;?אvI??h?????=xn???$}??F?IK~?/??A@????B?????????
??&s?$j?ٙ&???K???z?%W?4?M??V7??K???.xyU?????/??e????F?{?͓a?@ܧ      8   :  x????n?0???S?[?".??*&0C5??n??iC?ۯ?14!=7?h??K?ƞ??&d?D?j???*???$XT2????E???>AL??'k??c ???^@??? ???ފ?Cu,f$g*?BOo\*???J?????<??M.????D?(E?z|,R{??F?ՏNa&??!?????P9jm?-?0?e???9?e?U??Y??LLs?m?<?<?I??VX??ް????z<W????g?/j??mQ?m??R2r????????G?Q?a?z1??'????Zm#?O)v)?K}=[??>???      :   ?   x????N?0???S???a??]˘Vh??b?͉???RX>??L???s?????#???nyHȼ_?_?A?ܨE?;?????̓?;???`b?̄?NraT??UȀ?9??ߡ s??@?{Շ?>s?Q?Ay??-~?R?"?ȱ?m?G??ۂ?J{??n
???#???x??nB??ky????Gd
?a?/???H=?T??r?rhc=??sĥS?l????L?_~?L??t?OMc??FS??m?Ե?+      2   ?   x????j?@ ?????eg?m?m??j	*????.?4?**??}5??a.30|??@?(@
T?+??hg?	???;K??	@Bv?	?Za?v{?.?[?Հ???a??2Ϟ?й.?|????b??g9?FBɮ?_?????E??M??#\???\?]??????3??????a??
t?|????dn?cxmZۍ]
R???ͷ??!?i&?+?hQLl??I|??%??hϽh??q?y??_??      0   ?   x??бj?0????y?$??Vņ4P?Add??d砶?.??[p?.]????a?????j?1[????????<Y"?5?n?b??m?1?8??I?,>?Zb?,!?/??ߘ2?7?p#L?g??i|???x????9?W_?d?r???"=$M?4|???q??o+?? >?F7K#]??????O?,???iI>??o?a???f???     