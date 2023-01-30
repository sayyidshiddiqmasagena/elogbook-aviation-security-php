PGDMP     #                     {            logbookavsec    11.17    11.17 *    >           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            @           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            A           1262    16919    logbookavsec    DATABASE     �   CREATE DATABASE logbookavsec WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE logbookavsec;
             postgres    false            �            1259    16920    form_approval    TABLE     q  CREATE TABLE public.form_approval (
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
            public       postgres    false    196            �            1259    16974    form_approval_bagasi_island2    TABLE     �  CREATE TABLE public.form_approval_bagasi_island2 (
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
       public         postgres    false            �            1259    16955    form_approval_orgbrg    TABLE     x  CREATE TABLE public.form_approval_orgbrg (
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
       public         postgres    false            �            1259    16970    form_approval_orgbrg_inter    TABLE     ~  CREATE TABLE public.form_approval_orgbrg_inter (
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
       public         postgres    false            �            1259    16983    form_approval_orgbrg_karyawan    TABLE     �  CREATE TABLE public.form_approval_orgbrg_karyawan (
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
       public         postgres    false            �            1259    16989    form_approval_orgbrg_scppos2    TABLE     �  CREATE TABLE public.form_approval_orgbrg_scppos2 (
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
       public         postgres    false            �            1259    16964    form_approval_orgbrg_transit    TABLE     �  CREATE TABLE public.form_approval_orgbrg_transit (
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
       public         postgres    false            �            1259    16923    randomcheck_bagasi    TABLE     =  CREATE TABLE public.randomcheck_bagasi (
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
            public       postgres    false    197            F           0    0 %   COLUMN randomcheck_bagasi.st_approv01    COMMENT     �   COMMENT ON COLUMN public.randomcheck_bagasi.st_approv01 IS 'null = belum dikirim
0 = dikirim proses approv
1 = diterima
2 = ditolak
';
            public       postgres    false    197            G           0    0 %   COLUMN randomcheck_bagasi.st_approv02    COMMENT     �   COMMENT ON COLUMN public.randomcheck_bagasi.st_approv02 IS 'null = belum dikirim
0 = dikirim proses approv
1 = diterima
2 = ditolak';
            public       postgres    false    197            H           0    0     COLUMN randomcheck_bagasi.idkode    COMMENT     Z   COMMENT ON COLUMN public.randomcheck_bagasi.idkode IS 'urutan kode : team+shift+tanggal';
            public       postgres    false    197            �            1259    16977    randomcheck_bagasi_island2    TABLE     E  CREATE TABLE public.randomcheck_bagasi_island2 (
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
       public         postgres    false            �            1259    16926    randomcheck_orgbrg    TABLE     X  CREATE TABLE public.randomcheck_orgbrg (
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
            public       postgres    false    198            �            1259    16967    randomcheck_orgbrg_inter    TABLE     ^  CREATE TABLE public.randomcheck_orgbrg_inter (
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
       public         postgres    false            �            1259    16980    randomcheck_orgbrg_karyawan    TABLE     d  CREATE TABLE public.randomcheck_orgbrg_karyawan (
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
       public         postgres    false            �            1259    16986    randomcheck_orgbrg_scppos2    TABLE     c  CREATE TABLE public.randomcheck_orgbrg_scppos2 (
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
       public         postgres    false            �            1259    16958    randomcheck_orgbrg_transit    TABLE     `  CREATE TABLE public.randomcheck_orgbrg_transit (
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
       public         postgres    false            �            1259    16929    users    TABLE       CREATE TABLE public.users (
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
    public       postgres    false    196   �P       6          0    16974    form_approval_bagasi_island2 
   TABLE DATA                 COPY public.form_approval_bagasi_island2 (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    205   MR       1          0    16955    form_approval_orgbrg 
   TABLE DATA                 COPY public.form_approval_orgbrg (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    200   �R       5          0    16970    form_approval_orgbrg_inter 
   TABLE DATA                 COPY public.form_approval_orgbrg_inter (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    204   �S       9          0    16983    form_approval_orgbrg_karyawan 
   TABLE DATA                 COPY public.form_approval_orgbrg_karyawan (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    208   qT       ;          0    16989    form_approval_orgbrg_scppos2 
   TABLE DATA                 COPY public.form_approval_orgbrg_scppos2 (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    210   $U       3          0    16964    form_approval_orgbrg_transit 
   TABLE DATA                 COPY public.form_approval_orgbrg_transit (idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, ket_approv01, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode, barcode_approv01, barcode_approv02, ket_approv02) FROM stdin;
    public       postgres    false    202   �U       .          0    16923    randomcheck_bagasi 
   TABLE DATA               �   COPY public.randomcheck_bagasi (idno, tanggal, namapemilik, nopen, jns_bagasi, no_claim, mtd_periksabagasi, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, st_approv01, team, shift, st_approv02, idkode) FROM stdin;
    public       postgres    false    197   %V       7          0    16977    randomcheck_bagasi_island2 
   TABLE DATA               �   COPY public.randomcheck_bagasi_island2 (idno, tanggal, namapemilik, nopen, jns_bagasi, no_claim, mtd_periksabagasi, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, st_approv01, team, shift, st_approv02, idkode) FROM stdin;
    public       postgres    false    206   Y       /          0    16926    randomcheck_orgbrg 
   TABLE DATA               �   COPY public.randomcheck_orgbrg (idno, tanggal, namapax, nopen, jenisbrg_bawaan, mtd_periksapax, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    198   Z       4          0    16967    randomcheck_orgbrg_inter 
   TABLE DATA               �   COPY public.randomcheck_orgbrg_inter (idno, tanggal, namapax, nopen, jenisbrg_bawaan, mtd_periksapax, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    203   :]       8          0    16980    randomcheck_orgbrg_karyawan 
   TABLE DATA               �   COPY public.randomcheck_orgbrg_karyawan (idno, tanggal, namakar, instansi, jenisbrg_bawaan, mtd_periksakar, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    207   �^       :          0    16986    randomcheck_orgbrg_scppos2 
   TABLE DATA               �   COPY public.randomcheck_orgbrg_scppos2 (idno, tanggal, namakar, instansi, jenisbrg_bawaan, mtd_periksakar, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    209   �_       2          0    16958    randomcheck_orgbrg_transit 
   TABLE DATA               �   COPY public.randomcheck_orgbrg_transit (idno, tanggal, namapax, nopen, jenisbrg_bawaan, mtd_periksapax, mtd_periksabrg, personil_pemeriksa, hasil_temuan, lokasi, jam_periksa, id_users, team, shift, st_approv01, st_approv02, idkode) FROM stdin;
    public       postgres    false    201   �`       0          0    16929    users 
   TABLE DATA               j   COPY public.users (id_users, nama, nip, role, foto, username, password, jabatan, unit, email) FROM stdin;
    public       postgres    false    199   �a       -   S  x���Mk�0�����q;�H�hR�ܦ��$�6(�Rz�Nc0���|�N�Qr�$�}�(22	R&`�j���b��ܳfU/�|S�*��z3�L^C��-��m�j��TR�Ҳn0�t�|�p��qa������ �00X-2�D����(`l���X�
W���.;CMM-SS����nNʚ�S�3��޺��\�H�-TT��z�	̅�)�p�Gu�r�ڧ�Y�wՆ��K5���s��c�M���ZO�>���ܚ���u�VHM��E����"t�2�R��d�m�J �J����ٸ���w9X�[|c���+���/��U�.^~/�`���V����,�R      6   x   x�3�4202�5!C+c#+#N�PO�`� O�`G?OOM$����F���Ҕ��ļ��NW�G�`OG?w�:cdu.� �!r&��#�zy���ɉhb�٩\1z\\\ 5�&M      1   �   x�m�Q�0���~��ؽ� ߮	5P��@�eEE���-C+��ܳ�s6�D>�/��PJ����b�{Z݃�*s��|Ðr©U�[J�d���2�m�Kt�(�`�
.KO���`{;{|7D;>l�М�-����RM�=�q�hj8]���i�51͵k��Iy���O�#�S����5���/r^�r��O����8���4[NT3!�-�Y�      5   �   x�}���0���S�$�j�v;,!M ��ͥA1�^P����-ߟ?w�R.p\�B�ZK��Xp��ۢJ9�/(�� Ct�ٷ<�t�&�*��R;��a˔#�0�������5P���?��"^).�Zm�
�ң�'��
&��2��j
L>�Uo�j����)b�=aH�      9   �   x�u�M
�0��/��,MBv���6�D
لT�"� ����0���
,clG�xB��탠�TL�%G<�xEQ@���,�����w���F�>��Pm�@Y�n\^ߘ>#��y�����H4$�w��B����՟����U�v��Uh��Rۊ���M	!oRM:      ;   q   x�3�4202�5"cC++cCN�PO�`� � �`� � �`O?G#$圆�(\����bN� �0� GwO��1�| �chd�T"�zy���ɉhb�٩\1z\\\ ��$�      3   p   x�3�4202�5!+cc+CsN�PO�`� �� G�`��"KNCN#$=������A>�����>��@��
�}AC#�����bW� /�39#19M�=??�+F��� O�"�      .   �  x���Oo�@���O�c{p�3�6��R�����˦��	�j#U���]l�C8D�����{;��Q T@��2[d/�I/��<$)��*Lff|{��@z1��K���d�'_�d,e,�~?=�^i��a⪩E	E�uKj`���ׁ���(Wh��y�Rx�����؂b��ˋ���j��!v��!{CHVl�*���X�xݡ[�2V�1����eb�t�OCQ��t2�?��ѝ�4ѓ�+�=V�a�_���|�~)��*��s�#�6آ;{r�&�&���68Di��c@Q�o�ϛR���a_T�2K�W����rr��er��Yڅ�JT�0�*o�����ٚm�HU��pܵC�v:o���6�;By�����8�ct�6���%���"�3|�Ä�a�r۝�\�]Fj�^�1�کt�΂q��C�*aQ zP3�:�?<s�i�٫������F���� |�$���:M̳h�yZ�Yg؇�:�ش�ia��jvr�~(g-�h����9����E����x���
|g�C�*B,Z�:����ּ~ƒ�H�y}�f�����t�B��+�A/[E6Y;�+�v0D)<��),�|7�?�Sۑ�֋:�e%)��ՍM�xX���m�}�v������� 3{M�N�ӧ��;ud�Sj��z8���R�\�}��4�)��Hx�@�I��	���ԸZ�n�5��V�z;���M�ߓ�}��+z�����tS�      7   �   x���=o�0���Wxl�T�#1dsJK,"��X���"�("�>�v`h��;��^��c#�����BK��=��J+	���*��K��7_p�{fٓu;Sf��gp�Vb��9G��;8k�|����"9����b"S>T�BK��{m��t�G�r�SS��R���XN?> 2刱�O
�����Yn9��=]GNh��L��ę�c�6m��Kf���(�n��g�      /   '  x���ߎ�0Ư�S�n�Q{WGw�U� ��$s�Yq�����y�=�&���wNO	���>���X��l�� %r/�c����L� o��<�'*�^e
��	 �d2Eo2S;�f�j��w�o�."2r\D.�'�|����z�`a�&� -��v`��3f��&H�
�&aW$6�ƴ�bg�J� 7���],���I���I�+�'CNmTC�@3S'�bEzOL�*�˗*F3E��B7B�\,���ʨՠ�-<�l���t蜷�d�E�
�uVG��{%�QG�I	݇1g�I��S���͂�j�1]�EUuO����j�
�(��Dd|@Z/���_�uY�ܒ6*��$��;3j>2P)�쌺��'0$H%�IW����e�%H�E�,~	O�6��3j=6������:2Xz�x�m#-�ta���_�:V�k@����'v�c�zk���n�x:[D7��<�	 ;.�O��Ce�G�9MRo~�, �����L����1����%�>��b�GaZ����	\��M᧿]�KF=l�/��4�`�#N+�R�h�4G ǻB�I��=��I����tY�|wd|��\	Z��J��
�]\�:�����!��IX!7��b�/�(�Q�*6��-�� '��Dv��d�2y#tk�)DZm���J��0��yV|��O�FK���ՙ�6�M��V���|�BZd.Ӽ�WZ��[MݢNpPߕ�J}W�bEd8B�ñ����>X�[Sy̛Z�������W���0��M�pp"�j��w�^��z���^�@      4   o  x���Ao�0���S�XZ
ު2aS$ⲋ�ױ�R���Zq��£�C��?�Q��m[T�I��T�\���ic���l @!��Q�0)r� ��f�l�u³x���`�x�<�Y��pH�<V�M5C�cؽ�#Ju�f�D�����Ļ�ʔ�hpeh^|h�>��h��
%I�M�$u�=Կ���8�̹��MTz��U�6�(�x���4ZA�d�DW��i���k-3ǆ5֭J��Ɵ��!B��3��uo�.��/��ˋ:
\v�G���0��0�`�������Pb{hN��0�]���[4*0o����u6�,���e�Ü����>��ӯ^�06vX��E����\s�P���0~��9      8   "  x����n�@����@��Ul�mT�T@�4&��Ju+Y0��/��H��e3_��	�Ꙍ���zU�YIgbÊ�4�OR��=��dqr�4�����އ}^�`�g��ŧ������JNՉ4��O*o�U�4�r�s�qkچA�E��o�
	$N���q����(�'J�V��ԖU[*sD[�l	T��)3�;=��-vs�]�<tѫZѻÖ��
^(�?�m˲o�~���/{jR���Z�\RN��������p���Ĝ��`]�~����}��      :   �   x���M��@�u�}�"�*1:�HҤE������En?m��YD�{۪�'Ar)G�W1Χ]a��`�SL�r��E	��RۺDuU|��0�Y��$G��WL�PS��|# �q�����#�Ԅ*P��ZԹճ������_�е���C>Ozal`q��wk�ϯ?��x��Ch؋�JXa:��~�W��~���\q�#]�z�!x?���r\      2   �   x�M��
�0Dϛ��D6�mok[IJh{�(h/E�K���

ð3��)M
K�X}>>���Q�.���$�
����n��q^^0�A�=wC;��WD�_C�p��#xv�SN��$MX
��F�VX���Z�����+�*�?me�a���.]�<�q�	!��/�      0   �   x��бj�0����y�$��Vņ4P�Add��d砶�.��[p�.]����a�����j�1[�������<Y"�5�n�b��m�1�8��I�,>�Zb�,!�/�ߘ2�7�p#L�g��i|���x��9�W_�d�r��"=$M�4|���q��o+�� >�F7K#]������O�,���iI>��o�a���f���     