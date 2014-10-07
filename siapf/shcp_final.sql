/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     24/09/2014 02:12:24 a.m.                     */
/*==============================================================*/

/*drop table RELATIONSHIP_62;

drop table RELATIONSHIP_63;

drop table RELATIONSHIP_65;

drop table SHCP_ABO_ADMISION_PROCEDEN;

drop table SHCP_ABO_ATENCION;

drop table SHCP_ABO_CTL_CIE10;

drop table SHCP_ABO_EGRESO;

drop table SHCP_ABO_POST_PROCED;

drop table SHCP_ABO_PREPROCED1;

drop table SHCP_ABO_PREPROCED2;

drop table SHCP_ABO_PREPROCED3;

drop table SHCP_ABO_PROCED1;

drop table SHCP_ABO_PROCED2;

drop table SHCP_BITACORA;

drop table SHCP_CON_PRENATAL;

drop table SHCP_DOC_CTL_PREGUNTA;

drop table SHCP_DOC_EXAFISICO;

drop table SHCP_DOC_HOJA_POSTPARTO;

drop table SHCP_DOC_PLAN_PARTO;

drop table SHCP_DOC_RESULTADO;

drop table SHCP_EXP_MATERNO;

drop table SHCP_INS_ANTECEDENT_OBSTE;

drop table SHCP_INS_ANTE_ENFERMEDAD;

drop table SHCP_INS_CTL_ENFERMEDAD;

drop table SHCP_INS_EXAMEN;

drop table SHCP_INS_GESTACION_ACTUAL;

drop table SHCP_INS_SIDA;

drop table SHCP_INS_SIFILIS;

drop table SHCP_INS_VACUNACION;

drop table SHCP_PAR_ADMISION;

drop table SHCP_PAR_CTL_INDICACION;

drop table SHCP_PAR_CTL_PATOLOGIA;

drop table SHCP_PAR_EGRESO_MATERNO;

drop table SHCP_PAR_EGR_RECIEN_NACIDO;

drop table SHCP_PAR_NACIMIENTO;

drop table SHCP_PAR_PATOLOGIA;

drop table SHCP_PAR_PRESENT;

drop table SHCP_PAR_PUERPERIO;

drop table SHCP_PAR_RECIEN_NACIDO;

drop table SHCP_PAR_ROTURA_MEMBRANA;

drop table SHCP_PAR_TAMIZAJE_NEONATAL;

drop table SHCP_PAR_TRABAJO_PARTO;

drop table SHCP_PRE_PACIENTE;*/

/*==============================================================*/
/* Table: RELATIONSHIP_62                                       */
/*==============================================================*/
create table RELATIONSHIP_62 (
   ID_PATOLOGIA_PACIENTE CHAR(2)              not null,
   ID_RECIEN_NACIDO     INT4                 not null,
   constraint PK_RELATIONSHIP_62 primary key (ID_PATOLOGIA_PACIENTE, ID_RECIEN_NACIDO)
);

/*==============================================================*/
/* Table: RELATIONSHIP_63                                       */
/*==============================================================*/
create table RELATIONSHIP_63 (
   ID_PATOLOGIA_PACIENTE CHAR(2)              not null,
   ID_PATOLOGIA         INT4                 not null,
   constraint PK_RELATIONSHIP_63 primary key (ID_PATOLOGIA_PACIENTE, ID_PATOLOGIA)
);

/*==============================================================*/
/* Table: RELATIONSHIP_65                                       */
/*==============================================================*/
create table RELATIONSHIP_65 (
   ID_RESULTADO         INT4                 not null,
   ID_PREGUNTA          INT4                 not null,
   constraint PK_RELATIONSHIP_65 primary key (ID_RESULTADO, ID_PREGUNTA)
);

comment on table RELATIONSHIP_65 is
'
';

/*==============================================================*/
/* Table: SHCP_ABO_ADMISION_PROCEDEN                            */
/*==============================================================*/
create table SHCP_ABO_ADMISION_PROCEDEN (
   ID   SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             null,
   ID_HC                INT4                 null,
   ID_ESTABLECIMIENTO   INT4                 not null,
   ADPRO_FECHA_INGRESO  DATE                 null,
   ADPRO_HORA_MIN       TIME                 null,
   ADPRO_HOSP_EMB       CHAR(1)              null,
   ADPRO_DIAS_HOSP      INT4                 null,
   ADPRO_EDAD_GEST_SEM  INT4                 null,
   ADPRO_EDAD_GEST_DIAS INT4                 null,
   ADPRO_EG_FUM_ECO     CHAR(1)              null,
   ADPRO_TIPO_ACOMP     CHAR(1)              null,
   ADPRO_TRASLADO       CHAR(1)              null,
   ADPRO_DETALLE_TRASLADO VARCHAR(100)         null,
   ADPRO_TIPO_TRANSPORT CHAR(1)              null,
   ADPRO_TIEM_TRASL_DIA INT4                 null,
   ADPRO_TIEM_TRASL_HRS INT4                 null,
   ADPRO_TIEM_TRASL_MIN INT4                 null,
   ADPRO_DIGITADOR_RESP INT8                 null,
   constraint PK_SHCP_ABO_ADMISION_PROCEDEN primary key (ID)
);

comment on table SHCP_ABO_ADMISION_PROCEDEN is
'almacena los registros de un aborto.';

/*==============================================================*/
/* Table: SHCP_ABO_ATENCION                                     */
/*==============================================================*/
create table SHCP_ABO_ATENCION (
   ID SERIAL               not null,
   ID_POST_PROCED       INT4                 not null,
   ATEN_PA_SIST         CHAR(3)              null,
   ATEN_PA_DIAST        CHAR(3)              null,
   ATEN_PULSO           INT4                 null,
   ATEN_TEMP            NUMERIC(2,1)         null,
   ATEN_SANGRADO        CHAR(1)              null,
   ATEN_SCORE           INT4                 null,
   constraint PK_SHCP_ABO_ATENCION primary key (ID)
);

comment on table SHCP_ABO_ATENCION is
'almacena datos de atención postprocedimiento.';

/*==============================================================*/
/* Table: SHCP_ABO_CTL_CIE10                                    */
/*==============================================================*/
create table SHCP_ABO_CTL_CIE10 (
   ID            CHAR(5)              not null,
   CIE10_NOMBRE         VARCHAR(100)         null,
   CIE10_TIPO           CHAR(1)              null,
   CIE10_ESTADO         CHAR(1)              null,
   constraint PK_SHCP_ABO_CTL_CIE10 primary key (ID)
);

comment on table SHCP_ABO_CTL_CIE10 is
'catalogo de codigos cie10 para, relacionados con embarazos que terminan en aborto. ';

/*==============================================================*/
/* Table: SHCP_ABO_EGRESO                                       */
/*==============================================================*/
create table SHCP_ABO_EGRESO (
   ID        SERIAL               not null,
   ID_ADMIN_PROCEDEN    INT4                 not null,
   EGR_ANTCP_METODO     CHAR(10)             null,
   EGR_FECHA            DATE                 null,
   EGR_HORA             TIME                 null,
   EGR_TRATAMIENT       CHAR(5)              null,
   EGR_TIPO             CHAR(1)              null,
   EGR_CONDICION        CHAR(1)              null,
   EGR_LUGAR_TRASLADO   INT4                 null,
   EGR_FALLECE_TRASLADO CHAR(1)              null,
   EGR_AUTOPSIA         CHAR(1)              null,
   EGR_COD_DIAG_CIE10   CHAR(5)              null,
   EGR_ANTIRUBE         CHAR(1)              null,
   EGR_GLOBULINA        CHAR(1)              null,
   EGR_REFERIDA         CHAR(1)              null,
   EGR_OTRO_ESPECIFIC   VARCHAR(100)         null,
   EGR_OTRO_ESTABLEC    INT4                 null,
   EGR_RESPONS          VARCHAR(100)         null,
   constraint PK_SHCP_ABO_EGRESO primary key (ID)
);

comment on table SHCP_ABO_EGRESO is
'guarda los datos del egreso de aborto, de una paciente.';

/*==============================================================*/
/* Table: SHCP_ABO_POST_PROCED                                  */
/*==============================================================*/
create table SHCP_ABO_POST_PROCED (
   ID       SERIAL               not null,
   ID_ADMIN_PROCEDEN    INT4                 null,
   POSTP_FECHA_FIN      DATE                 null,
   POST_PROCEDIMIENTO_  TIME                 null,
   POSTP_CONSEJ_CUID_BAS CHAR(1)              null,
   POSTP_RESP_CUID_BAS  VARCHAR(30)          null,
   POSTP_CONSEJ_SIG_ALARMA CHAR(1)              null,
   POSTP_RESP_SIG_ALARMA VARCHAR(30)          null,
   POSTP_CONSEJ_ANTICON CHAR(1)              null,
   POSTP_RESP_ANTICON   VARCHAR(30)          null,
   POSTP_CITA_SEG       CHAR(1)              null,
   POSTP_RESP_CITA_SEG  VARCHAR(30)          null,
   POSTP_FEC_CTRL_SEG   DATE                 null,
   POSTP_INFECC_GENI_PELV CHAR(1)              null,
   POSTP_DANIO_ORG_PELV CHAR(1)              null,
   POSTP_HEMOG_TARD_EXCES CHAR(1)              null,
   POSTP_SHOCK          CHAR(1)              null,
   POSTP_OTRA_COMP      CHAR(1)              null,
   POSTP_OTRA_COMP_DETALLE VARCHAR(30)          null,
   constraint PK_SHCP_ABO_POST_PROCED primary key (ID)
);

comment on table SHCP_ABO_POST_PROCED is
'almacena los datos del post procedimiento de un caso de aborto.
';

/*==============================================================*/
/* Table: SHCP_ABO_PREPROCED1                                   */
/*==============================================================*/
create table SHCP_ABO_PREPROCED1 (
   ID        SERIAL               not null,
   ID_ADMIN_PROCEDEN    INT4                 null,
   PREP1_PULSO          INT4                 null,
   PREP1_PULSO_MAY100_MEN60 CHAR(1)              null,
   PREP1_PA_SISTOLE     CHAR(3)              null,
   PREP1_PA_DIASTOLE    CHAR(3)              null,
   PREP1_PA_MAY140_90_MEN80_50 CHAR(1)              null,
   PREP1_FREC_RESPIRAT  INT4                 null,
   PREP1_FREC_RESPIRAT_MAY16 CHAR(1)              null,
   PREP1_TEMP           NUMERIC(2,1)         null,
   PREP1_TEMP_MAY38     CHAR(1)              null,
   PREP1_HEMOGLOB       NUMERIC(2,1)         null,
   PREP1_HEMOGLOB_MEN10 CHAR(1)              null,
   PREP1_SIF_DIAGNO     CHAR(1)              null,
   PREP1_SIF_TRATAMIENT CHAR(1)              null,
   PREP1_SIF_TRATAMIENT_PAREJA CHAR(1)              null,
   PREP1_LEUCOCITOS     CHAR(5)              null,
   PREP1_PLAQUETAS      CHAR(3)              null,
   PREP1_PLAQ_MEN100ML  CHAR(1)              null,
   PREP1_VIH            CHAR(1)              null,
   PREP1_GRUPO_SANG     CHAR(2)              null,
   PREP1_RH             CHAR(1)              null,
   PREP1_INMUNIZA       CHAR(1)              null,
   PREP1_GLOBUANTID     CHAR(1)              null,
   constraint PK_SHCP_ABO_PREPROCED1 primary key (ID)
);

comment on table SHCP_ABO_PREPROCED1 is
'almacea datos del preprocedimiento para un caso de aborto(primera parte).';

/*==============================================================*/
/* Table: SHCP_ABO_PREPROCED2                                   */
/*==============================================================*/
create table SHCP_ABO_PREPROCED2 (
   ID        SERIAL               not null,
   ID_PREPROCED1        INT4                 null,
   PREP2_SINTOMAT_DIAS  CHAR(2)              null,
   PREP2_SINTOMAT_HRS   CHAR(2)              null,
   PREP2_SANGRADO       CHAR(1)              null,
   PREP2_DOLOR          CHAR(1)              null,
   PREP2_DOLOR_ESCALA   CHAR(2)              null,
   PREP2_CONCIENCIA     CHAR(1)              null,
   PREP2_PIEL_MUCOSA    CHAR(5)              null,
   PREP2_ABDOMEN        CHAR(1)              null,
   PREP2_TAM_UTERINO    CHAR(2)              null,
   PREP2_POSICION       CHAR(1)              null,
   PREP2_CUELLO_CERRADO CHAR(1)              null,
   PREP2_RESTOS         CHAR(1)              null,
   PREP2_VAGINA_NORMAL  CHAR(1)              null,
   PREP2_DIAMETRO_ECO   CHAR(1)              null,
   PREP2_TAMANIO        CHAR(3)              null,
   PREP2_ANALGE_SOLICITADA CHAR(1)              null,
   PREP2_ANALGE_REALIZADA CHAR(1)              null,
   constraint PK_SHCP_ABO_PREPROCED2 primary key (ID)
);

comment on table SHCP_ABO_PREPROCED2 is
'almacea datos del preprocedimiento para un caso de aborto(segunda parte).';

/*==============================================================*/
/* Table: SHCP_ABO_PREPROCED3                                   */
/*==============================================================*/
create table SHCP_ABO_PREPROCED3 (
   ID        SERIAL               not null,
   ID_PREPROCED1        INT4                 null,
   ID_CIE10             CHAR(5)              null,
   PREP3_CONDICION_INGR CHAR(9)              null,
   PREP3_OTRO_DANIO     VARCHAR(30)          null,
   PREP3_ESTADO_ACTUAL  CHAR(1)              null,
   PREP3_TIPO_ABORTO    CHAR(1)              null,
   PREP3_RESPONS        VARCHAR(100)         null,
   constraint PK_SHCP_ABO_PREPROCED3 primary key (ID)
);

comment on table SHCP_ABO_PREPROCED3 is
'almacea datos del preprocedimiento para un caso de aborto(tercera parte).';

/*==============================================================*/
/* Table: SHCP_ABO_PROCED1                                      */
/*==============================================================*/
create table SHCP_ABO_PROCED1 (
   ID          SERIAL               not null,
   ID_ADMIN_PROCEDEN    INT4                 null,
   PROC1_FECHA          DATE                 null,
   PROC1_HORA_MIN       TIME                 null,
   PROC1_POSTAGLAND     CHAR(1)              null,
   PROC1_DILATADOR      CHAR(1)              null,
   PROC1_HRS_DILATACION TIME                 null,
   PROC1_EVAC_UTERINA   CHAR(5)              null,
   PROC1_AMBIENTE       CHAR(1)              null,
   PROC1_MEDICINA_RECI  CHAR(11)             null,
   PROC1_OTRA_MED1      CHAR(5)              null,
   PROC1_OTRA_MED2      CHAR(5)              null,
   PROC1_OTRA_MED3      CHAR(5)              null,
   PROC1_OTRA_MED4      CHAR(5)              null,
   PROC1_SCORE_DOLOR    CHAR(2)              null,
   constraint PK_SHCP_ABO_PROCED1 primary key (ID)
);

comment on table SHCP_ABO_PROCED1 is
'guarda los datos de los procedimientos a seguir en un caso de aborto.';

/*==============================================================*/
/* Table: SHCP_ABO_PROCED2                                      */
/*==============================================================*/
create table SHCP_ABO_PROCED2 (
   ID          SERIAL               not null,
   ID_PROCED1           INT4                 null,
   PROC2_TAM_UTERINO    INT4                 null,
   PROC2_HISTEROMET     INT4                 null,
   PROC2_ANEXOS         CHAR(1)              null,
   PROC2_FETIDEZ        CHAR(1)              null,
   PROC2_RESTOS         CHAR(1)              null,
   PROC2_RESTOS_INSPEC  CHAR(1)              null,
   PROC2_ANAT_PTG       CHAR(1)              null,
   PROC2_COMPLI         CHAR(1)              null,
   PROC2_COMPLI_QUIRUR  CHAR(1)              null,
   PROC2_OTRA_COMPLI_QUIRUR VARCHAR(25)          null,
   PROC2_COMPLI_ANEST   CHAR(1)              null,
   PROC2_OTRA_COMPLI_ANEST VARCHAR(25)          null,
   PROC2_REPA_LESION_UTER CHAR(1)              null,
   PROC2_REPA_LESION_CERV CHAR(1)              null,
   PROC2_HISTERECT      CHAR(1)              null,
   PROC2_SEPSIS         CHAR(1)              null,
   PROC2_RESPONS        VARCHAR(100)         null,
   constraint PK_SHCP_ABO_PROCED2 primary key (ID)
);

comment on table SHCP_ABO_PROCED2 is
'guarda la continuacion de los datos de los procedimientos a seguir en un caso de aborto (parte 2).';

/*==============================================================*/
/* Table: SHCP_BITACORA                                         */
/*==============================================================*/
create table SHCP_BITACORA (
   ID                 INT8                 not null,
   ID_USER            INT8                 not null,
   BIT_OPERACION        CHAR(10)             null,
   BIT_FECHA_HORA       DATE                 null,
   BIT_TABLA_AFECTADA   VARCHAR(50)          null,
   constraint PK_SHCP_BITACORA primary key (ID)
);

/*==============================================================*/
/* Table: SHCP_CON_CTL_SIGNO_ALARMA                             */
/*==============================================================*/
create table SHCP_CON_CTL_SIGNO_ALARMA (
   ID      SERIAL               not null,
   SIG_NOMBRE           VARCHAR(200)         null,
   SIG_ESTADO           CHAR(1)              null,
   constraint PK_SHCP_CON_CTL_SIGNO_ALARMA primary key (ID)
);

/*==============================================================*/
/* Table: SHCP_CON_PRENATAL                                     */
/*==============================================================*/
create table SHCP_CON_PRENATAL (
   ID      SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   ID_SIGNO_ALARMA      INT4                 null,
   ID_HC                INT4                 null,
   ID_CITAS_DIA         INT4                 null,
   ID_USER              INT8                 not null,
   PRENA_FECHA          DATE                 null,
   PRENA_HORA           TIME                 null,
   PRENA_EDAD_GEST      INT4                 null,
   PRENA_PESO           NUMERIC(3,1)         null,
   PRENA_PRESION_SIST   CHAR(3)              null,
   PRENA_PRESION_DIAST  CHAR(3)              null,
   PRENA_TEMPE          NUMERIC(2,1)         null,
   PRENA_ALT_UTERINA    INT4                 null,
   PRENA_PRESENT        CHAR(1)              null,
   PRENA_FREC_FETAL     INT4                 null,
   PRENA_MOV_FETAL      CHAR(1)              null,
   PRENA_PROTE          CHAR(1)              null,
   PRENA_CONSULTA_POR   VARCHAR(100)         null,
   PRENA_OBSERV         VARCHAR(500)         null,
   PRENA_PRESENTE_ENFER VARCHAR(100)         null,
   constraint PK_SHCP_CON_PRENATAL primary key (ID)
);

comment on table SHCP_CON_PRENATAL is
'almacena los datos de los controles de seguimiento de una paciente embarazada.';

/*==============================================================*/
/* Table: SHCP_DOC_CTL_PREGUNTA                                 */
/*==============================================================*/
create table SHCP_DOC_CTL_PREGUNTA (
   ID          SERIAL               not null,
   PREG_DETALLE         VARCHAR(150)         null,
   PREG_TIPO            CHAR(1)              null,
   PREG_ESTADO          CHAR(1)              null,
   PREG_SECCION         CHAR(1)              null,
   constraint PK_SHCP_DOC_CTL_PREGUNTA primary key (ID)
);

comment on table SHCP_DOC_CTL_PREGUNTA is
'catalogo de preguntas de la hoja filtro y del tamizaje de violencia.
';

/*==============================================================*/
/* Table: SHCP_DOC_EXAFISICO                                    */
/*==============================================================*/
create table SHCP_DOC_EXAFISICO (
   ID         SERIAL               not null,
   ID_HOJA_POST         INT4                 null,
   EXAFI_FRE_CARDIACA   INT4                 null,
   EXAFI_FRE_RESPIRAT   INT4                 null,
   EXAFI_PA_SISTOLE     CHAR(3)              null,
   EXAFI_PA_DIASTOLE    CHAR(3)              null,
   EXAFI_TEMPE          NUMERIC(2,1)         null,
   EXAFI_PESO           NUMERIC(3,1)         null,
   EXAFI_ALTURA         INT4                 null,
   EXAFI_IMC            NUMERIC(2,1)         null,
   EXAFI_CABEZA         VARCHAR(75)          null,
   EXAFI_CUELLO         VARCHAR(75)          null,
   EXAFI_TORAX          VARCHAR(75)          null,
   EXAFI_MAMAS          VARCHAR(75)          null,
   EXAFI_ABDOMEN        VARCHAR(75)          null,
   EXAFI_UTERO          VARCHAR(75)          null,
   EXAFI_CESA_EQB       VARCHAR(75)          null,
   EXAFI_GENITALES      VARCHAR(75)          null,
   EXAFI_LOQUIOS        VARCHAR(75)          null,
   EXAFI_EPI            VARCHAR(75)          null,
   EXAFI_DIAG           VARCHAR(150)         null,
   EXAFI_CONSE          VARCHAR(150)         null,
   EXAFI_TRATAM         VARCHAR(150)         null,
   EXAFI_FECHA_CITA     DATE                 null,
   EXAFI_RESPONSA       VARCHAR(100)         null,
   constraint PK_SHCP_DOC_EXAFISICO primary key (ID)
);

/*==============================================================*/
/* Table: SHCP_DOC_HOJA_POSTPARTO                               */
/*==============================================================*/
create table SHCP_DOC_HOJA_POSTPARTO (
   ID        SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   ID_HC                INT4                 null,
   HPOST_FECHA          DATE                 null,
   HPOST_HORA           TIME                 null,
   HPOST_DIAS_POST_PARTO INT4                 null,
   HPOST_COMPLIC        VARCHAR(150)         null,
   HPOST_CTRL_PRE       CHAR(1)              null,
   HPOST_APEGO_PRECOZ   CHAR(1)              null,
   HPOST_TOXOIDE_RES    CHAR(1)              null,
   HPOST_NUMERO_DOSIS   INT4                 null,
   constraint PK_SHCP_DOC_HOJA_POSTPARTO primary key (ID)
);

/*==============================================================*/
/* Table: SHCP_DOC_PLAN_PARTO                                   */
/*==============================================================*/
create table SHCP_DOC_PLAN_PARTO (
   ID        SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   PLAN_LUGAR_CONTROL   VARCHAR(125)         null,
   PLAN_FECHA_INICIO    DATE                 null,
   PLAN_NOM_PER_INICIA  VARCHAR(125)         null,
   PLAN_HOSP_PLANEA_PARTO VARCHAR(125)         null,
   PLAN_ACOM_PARTO      VARCHAR(100)         null,
   PLAN_SALIR_ANTS_FEC  CHAR(1)              null,
   PLAN_DOND_IRIA       CHAR(1)              null,
   PLAN_DIRECCION       VARCHAR(150)         null,
   PLAN_NOM_PER_TRANSP  VARCHAR(100)         null,
   PLAN_TEL_PER_TRANSP  CHAR(9)              null,
   constraint PK_SHCP_DOC_PLAN_PARTO primary key (ID)
);

/*==============================================================*/
/* Table: SHCP_DOC_RESULTADO                                    */
/*==============================================================*/
create table SHCP_DOC_RESULTADO (
   ID         SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   ID_ESTABLECIMIENTO   INT4                 not null,
   RESUL_HOJA_FILTRO    CHAR(10)             null,
   RESUL_TAMIZAJE       CHAR(10)             null,
   RESUL_OBSERV_HOJA_FILTRO VARCHAR(50)          null,
   constraint PK_SHCP_DOC_RESULTADO primary key (ID)
);

comment on table SHCP_DOC_RESULTADO is
'almacena los resultados de la spreguntas de la hoja de tamizaje de viloencia y hoja filtro.

';

/*==============================================================*/
/* Table: SHCP_EXP_MATERNO                                      */
/*==============================================================*/
create table SHCP_EXP_MATERNO (
   ID      CHAR(15)             not null,
   ID_MNT_EXPEDIENTE    INT8                 not null,
   ID_ESTABLECIMIENTO   INT4                 not null,
   EXP_NOMBRE           VARCHAR(100)         null,
   EXP_APELLIDO         VARCHAR(100)         null,
   EXP_DIRECCION        VARCHAR(200)         null,
   EXP_TELEFONO         CHAR(9)              null,
   EXP_FECHA_CREACION   DATE                 null,
   EXP_EDAD             INT4                 null,
   EXP_EDAD_RGO         CHAR(1)              null,
   EXP_ETNIA            CHAR(1)              null,
   EXP_ALFABETA         CHAR(1)              null,
   EXP_ESTUDIOS         CHAR(1)              null,
   EXP_ANIOS_NIVEL_STUDIO INT4                 null,
   EXP_VIVE_SOLA        CHAR(1)              null,
   EXP_MUNI             INT4                 null,
   EXP_DEPTO            INT4                 null,
   EXP_DOC_IDENT        VARCHAR(20)          null,
   EXP_ESTADO           CHAR(1)              null,
   EXP_TIPO_CONTROL     CHAR(1)              null,
   constraint PK_SHCP_EXP_MATERNO primary key (ID)
);

comment on table SHCP_EXP_MATERNO is
'guarda los datos que identificaran a un paciente con control perinatal.';

/*==============================================================*/
/* Table: SHCP_INS_ANTECEDENT_OBSTE                             */
/*==============================================================*/
create table SHCP_INS_ANTECEDENT_OBSTE (
   ID  SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   ANT_GESTAS_PREVIAS   INT4                 null,
   ANT_EMB_ECTOPICO     INT4                 null,
   ANT_ABORTOS          INT4                 null,
   ANT_3ESP_ABORTOS     CHAR(1)              null,
   ANT_PARTOS           INT4                 null,
   ANT_PESO_ULT_EMB     CHAR(1)              null,
   ANT_GEMELARES        CHAR(1)              null,
   ANT_VAGINALES        INT4                 null,
   ANT_CESAREAS         INT4                 null,
   ANT_NAC_VIVOS        INT4                 null,
   ANT_VIVEN            INT4                 null,
   ANT_MUERT_1SEM       INT4                 null,
   ANT_MUERT_1SEM_DSP   INT4                 null,
   ANT_NAC_MUERTOS      INT4                 null,
   ANT_FE_FIN_EMB_ANT   DATE                 null,
   ANT_FE_EMB_MNOS1     CHAR(1)              null,
   ANT_EMB_PLANEADO     CHAR(1)              null,
   ANT_FRA_MET_ANTI     CHAR(1)              null,
   constraint PK_SHCP_INS_ANTECEDENT_OBSTE primary key (ID)
);

comment on table SHCP_INS_ANTECEDENT_OBSTE is
'guarda los datos de los antecedantes de embarazos de una paciente.';

/*==============================================================*/
/* Table: SHCP_INS_ANTE_ENFERMEDAD                              */
/*==============================================================*/
create table SHCP_INS_ANTE_ENFERMEDAD (
   ID   SERIAL               not null,
   ID_ENFERMEDAD        CHAR(2)              not null,
   ID_ANTECEDENT_OBSTE  INT4                 not null,
   ANENF_FAMILIAR       CHAR(1)              null,
   ANENF_PERSONAL       CHAR(1)              null,
   ANENF_OTRA           VARCHAR(20)          null,
   constraint PK_SHCP_INS_ANTE_ENFERMEDAD primary key (ID)
);

comment on table SHCP_INS_ANTE_ENFERMEDAD is
'almacena las enfrmedades de una paciente ya sean personales o familiares.';

/*==============================================================*/
/* Table: SHCP_INS_CTL_ENFERMEDAD                               */
/*==============================================================*/
create table SHCP_INS_CTL_ENFERMEDAD (
   ID        CHAR(2)              not null,
   ENF_NOMBRE           VARCHAR(60)          null,
   ENF_TIPO             CHAR(1)              null,
   ENF_ESTADO           CHAR(1)              null,
   constraint PK_SHCP_INS_CTL_ENFERMEDAD primary key (ID)
);

comment on table SHCP_INS_CTL_ENFERMEDAD is
'catalogo que almacena las enfermedades que puede padecer una paciente embarazada.';

/*==============================================================*/
/* Table: SHCP_INS_EXAMEN                                       */
/*==============================================================*/
create table SHCP_INS_EXAMEN (
   ID            SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   EXA_ODONT            CHAR(1)              null,
   EXA_MAMA             CHAR(1)              null,
   EXA_CERVIX_INSP_VISUAL CHAR(3)              null,
   EXA_CERVIX_INSP_PAP  CHAR(3)              null,
   EXA_CERVIX_INSP_COLP CHAR(3)              null,
   EXA_GPO_RH           CHAR(2)              null,
   EXA_RH_SIGNO         CHAR(1)              null,
   EXA_GLOBULINA_ANTID  CHAR(1)              null,
   EXA_TOXO_IGG_MNOS20  CHAR(1)              null,
   EXA_TOXO_IGG_MAS20   CHAR(1)              null,
   EXA_TOXO_CONSULTA1_IGM CHAR(1)              null,
   EXA_HB_MNOS20        NUMERIC(2,1)         null,
   EXA_HB_11G_MNOS20    CHAR(1)              null,
   EXA_HB_MAS20         NUMERIC(2,1)         null,
   EXA_HB_11G_MAS20     CHAR(1)              null,
   EXA_FE               CHAR(1)              null,
   EXA_FOLATOS          CHAR(1)              null,
   EXA_BACTE_MNOS20     CHAR(1)              null,
   EXA_BACTE_MAS20      CHAR(1)              null,
   EXA_GLUCE_MNOS20     INT4                 null,
   EXA_GLUCE_105_MNOS20 CHAR(1)              null,
   EXA_GLUCE_MAS30      INT4                 null,
   EXA_GLUCE_105_MAS30  CHAR(1)              null,
   EXA_ESTCOCOB         CHAR(1)              null,
   constraint PK_SHCP_INS_EXAMEN primary key (ID)
);

comment on table SHCP_INS_EXAMEN is
'almacena los datos de los diferentes examanes a realizar a una paciente.';

/*==============================================================*/
/* Table: SHCP_INS_GESTACION_ACTUAL                             */
/*==============================================================*/
create table SHCP_INS_GESTACION_ACTUAL (
   ID      SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   GESTA_PESO_PACIENTE  NUMERIC(3,1)         null,
   GESTA_ALTURA_CMS     INT4                 null,
   GESTA_FEC_ULT_REGLA  DATE                 null,
   GESTA_FEC_PRO_PARTO  DATE                 null,
   GESTA_EG_CONF_FUM    CHAR(1)              null,
   GESTA_EG_CONF_ECO    CHAR(1)              null,
   GESTA_VIOLENCIA_TRIMES1 CHAR(10)             null,
   GESTA_VIOLENCIA_TRIMES2 CHAR(10)             null,
   GESTA_VIOLENCIA_TRIMES3 CHAR(10)             null,
   GESTA_PREPAR_PARTO   CHAR(1)              null,
   GESTA_CONSE_LACT_MATERNA CHAR(1)              null,
   constraint PK_SHCP_INS_GESTACION_ACTUAL primary key (ID)
);

comment on table SHCP_INS_GESTACION_ACTUAL is
'almacena datos generales del embarazo de la paciente.';

/*==============================================================*/
/* Table: SHCP_INS_SIDA                                         */
/*==============================================================*/
create table SHCP_INS_SIDA (
   ID             SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   SIDA_SOL_MNOS20      CHAR(1)              null,
   SIDA_PRU_MNOS20      CHAR(1)              null,
   SIDA_MNOS20_SD       CHAR(1)              null,
   SIDA_TARV_MNOS20     CHAR(1)              null,
   SIDA_SOL_MAS20       CHAR(1)              null,
   SIDA_PRU_MAS20       CHAR(1)              null,
   SIDA_MAS20_SD        CHAR(1)              null,
   SIDA_TARV_MAS20      CHAR(1)              null,
   constraint PK_SHCP_INS_SIDA primary key (ID)
);

comment on table SHCP_INS_SIDA is
'guarda los datos de una paciente respecto a su padecimeinto de SIDA.';

/*==============================================================*/
/* Table: SHCP_INS_SIFILIS                                      */
/*==============================================================*/
create table SHCP_INS_SIFILIS (
   ID           SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   SIFI_PRU_NOT_RES_MNOS20 CHAR(1)              null,
   SIFI_PRU_NOT_SEM_MNOS20 INT4                 null,
   SIFI_PRU_TRE_RES_MNOS20 CHAR(1)              null,
   SIFI_PRU_TRE_SEM_MNOS20 INT4                 null,
   SIFI_PRU_NOT_RES_MAS20 CHAR(1)              null,
   SIFI_PRU_NOT_SEM_MAS20 INT4                 null,
   SIFI_PRU_TRE_RES_MAS20 CHAR(1)              null,
   SIFI_PRU_TRE_SEM_MAS20 INT4                 null,
   SIFI_TRATA_MNOS20    CHAR(1)              null,
   SIFI_TRATA_SEM_MNOS20 INT4                 null,
   SIFI_TRATA_PAR_MNOS20 CHAR(1)              null,
   SIFI_TRATA_MAS20     CHAR(1)              null,
   SIFI_TRATA_SEM_MAS20 INT4                 null,
   SIFI_TRATA_PAR_MAS20 CHAR(1)              null,
   constraint PK_SHCP_INS_SIFILIS primary key (ID)
);

comment on table SHCP_INS_SIFILIS is
'guarda los datos del padecimiento de sifilis de una paciente.';

/*==============================================================*/
/* Table: SHCP_INS_VACUNACION                                   */
/*==============================================================*/
create table SHCP_INS_VACUNACION (
   ID        SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   VACU_ANTIRUBEO       CHAR(1)              null,
   VACU_ANTITE_VIGENTE  CHAR(1)              null,
   VACU_ANTITE_DOSIS1   CHAR(2)              null,
   VACU_ANTITE_DOSIS2   CHAR(2)              null,
   VACU_H1N1            CHAR(1)              null,
   VACU_H1N1_MES        CHAR(2)              null,
   constraint PK_SHCP_INS_VACUNACION primary key (ID)
);

comment on table SHCP_INS_VACUNACION is
'guarda los datos de las vacunas de una paciente.';

/*==============================================================*/
/* Table: SHCP_PAR_ADMISION                                     */
/*==============================================================*/
create table SHCP_PAR_ADMISION (
   ID    SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   ID_HC                INT4                 null,
   ADM_FECHA_INGRESO    DATE                 null,
   ADM_CARNET           CHAR(1)              null,
   ADM_CONSULTA_PRENATAL INT4                 null,
   ADM_HOSP_EMBARAZO    CHAR(1)              null,
   ADM_DIAS_HOSP        INT4                 null,
   ADM_CORTICOIDE_ANTE  CHAR(1)              null,
   ADM_SEMANA_INICIO    INT4                 null,
   ADM_INICIO           CHAR(1)              null,
   ADM_DIGITADOR_RESP   INT8                 null,
   constraint PK_SHCP_PAR_ADMISION primary key (ID)
);

comment on table SHCP_PAR_ADMISION is
'registra datos generales de la paciente cuando llega al proceso de parto.';

/*==============================================================*/
/* Table: SHCP_PAR_CTL_INDICACION                               */
/*==============================================================*/
create table SHCP_PAR_CTL_INDICACION (
   ID  SERIAL               not null,
   IND_DETALLE          VARCHAR(50)          null,
   IND_ESTADO           CHAR(1)              null,
   constraint PK_SHCP_PAR_CTL_INDICACION primary key (ID)
);

comment on table SHCP_PAR_CTL_INDICACION is
'catalogo de indicaciones principales de parto quirurjico o induccion.';

/*==============================================================*/
/* Table: SHCP_PAR_CTL_PATOLOGIA                                */
/*==============================================================*/
create table SHCP_PAR_CTL_PATOLOGIA (
   ID CHAR(2)              not null,
   CPAT_NOMBRE_PATOLOGIA VARCHAR(50)          null,
   CPAT_TIPO_PATOLOGIA  CHAR(1)              null,
   CPAT_ESTADO          CHAR(1)              null,
   constraint PK_SHCP_PAR_CTL_PATOLOGIA primary key (ID)
);

comment on table SHCP_PAR_CTL_PATOLOGIA is
'catalogo que almacena las patologias presentadas en el embarazo, parto, puerperioy patologias
 del neonato.';

/*==============================================================*/
/* Table: SHCP_PAR_EGRESO_MATERNO                               */
/*==============================================================*/
create table SHCP_PAR_EGRESO_MATERNO (
   ID    SERIAL               not null,
   ID_ADMISION_PARTO    INT4                 not null,
   ID_ESTABLECIMIENTO   INT4                 not null,
   EGMA_CONDICION       CHAR(1)              null,
   EGMA_FECHA           DATE                 null,
   EGMA_HORA            TIME                 null,
   EGMA_MEDICO_RESPONSAB INT8                 null,
   EGMA_FALLECE_TRASLADO CHAR(1)              null,
   EGMA_DIAS_DESDE_PARTO INT4                 null,
   EGMA_CONSEJERIA_ANTICONCEP CHAR(1)              null,
   EGMA_METODO_ELEGIDO  CHAR(1)              null,
   constraint PK_SHCP_PAR_EGRESO_MATERNO primary key (ID)
);

comment on table SHCP_PAR_EGRESO_MATERNO is
'Esta tabla guarda los datos del egreo de la madre, despues del parto.';

/*==============================================================*/
/* Table: SHCP_PAR_EGR_RECIEN_NACIDO                            */
/*==============================================================*/
create table SHCP_PAR_EGR_RECIEN_NACIDO (
   ID        INT4                 not null,
   ID_ADMISION_PARTO    INT4                 null,
   ID_ESTABLECIMIENTO   INT4                 not null,
   EGRN_ORDEN           CHAR(1)              null,
   EGRN_CONDICION       CHAR(1)              null,
   EGRN_FALLECE_TRASLADO CHAR(1)              null,
   EGRN_EDAD            INT4                 null,
   EGRN_MENOR_1DIA      CHAR(1)              null,
   EGRN_FECHA           DATE                 null,
   EGRN_HORA            TIME                 null,
   EGRN_NOMBRE          VARCHAR(100)         null,
   EGRN_APELLIDO        VARCHAR(100)         null,
   EGRN_RESPONSA        INT8                 null,
   EGRN_ALIMENTO_ALTA   CHAR(1)              null,
   EGRN_BOCA_ARRIBA     CHAR(1)              null,
   EGRN_BCG             CHAR(1)              null,
   EGRN_PESO            INT4                 null,
   constraint PK_SHCP_PAR_EGR_RECIEN_NACIDO primary key (ID)
);

comment on table SHCP_PAR_EGR_RECIEN_NACIDO is
'sirve para almacenar los datos del egreso del recien nacido.';

/*==============================================================*/
/* Table: SHCP_PAR_NACIMIENTO                                   */
/*==============================================================*/
create table SHCP_PAR_NACIMIENTO (
   ID        SERIAL               not null,
   ID_ADMISION_PARTO    INT4                 not null,
   ID_INDICACION_PARTO  INT4                 null,
   ID_ESTABLECIMIENTO   INT4                 not null,
   NAC_TIPO_NACIMIENTO  CHAR(1)              null,
   NAC_FEC_NACIMIENTO   DATE                 null,
   NAC_HORA_NACIMIENTO  TIME                 null,
   NAC_MULTIPLE         CHAR(1)              null,
   NAC_ORDEN            CHAR(1)              null,
   NAC_TERMINAC         CHAR(1)              null,
   NAC_POSICION_PARTO   CHAR(1)              null,
   NAC_EPISIOTO         CHAR(1)              null,
   NAC_DESGARROS        CHAR(1)              null,
   NAC_OCITOCICOS_PREALUMB CHAR(1)              null,
   NAC_OCITOCICOS_POSTLUMB CHAR(1)              null,
   NAC_PLACENTA_COMPLETA CHAR(1)              null,
   NAC_PLACENTA_RETENIDA CHAR(1)              null,
   NAC_LIGADURA_PRECOZ  CHAR(1)              null,
   NAC_MEDICACION_RECIBIDA CHAR(7)              null,
   NAC_OTROS_MEDIC      CHAR(1)              null,
   NAC_OTRO_MEDIC1      CHAR(2)              null,
   NAC_OTRO_MEDIC2      CHAR(2)              null,
   NAC_PARTO_ATENDIDO_POR CHAR(1)              null,
   NAC_ATENDIO_PARTO    INT8                 null,
   constraint PK_SHCP_PAR_NACIMIENTO primary key (ID)
);

comment on table SHCP_PAR_NACIMIENTO is
'almacena los datos del nacimiento del recien nacido.';

/*==============================================================*/
/* Table: SHCP_PAR_PATOLOGIA                                    */
/*==============================================================*/
create table SHCP_PAR_PATOLOGIA (
   ID        SERIAL               not null,
   ID_ADMISION_PARTO    INT4                 not null,
   PAT_EXISTENCIA       CHAR(1)              null,
   PAT_ENFERMEDAD       CHAR(14)             null,
   PAT_HEMORRAGIA_1TRIM CHAR(1)              null,
   PAT_HEMORRAGIA_2TRIM CHAR(1)              null,
   PAT_HEMORRAGIA_3TRIM CHAR(1)              null,
   PAT_POSTPARTO        CHAR(1)              null,
   PAT_INFEC_PUERPERAL  CHAR(1)              null,
   PAT_NOTAS            VARCHAR(200)         null,
   constraint PK_SHCP_PAR_PATOLOGIA primary key (ID)
);

comment on table SHCP_PAR_PATOLOGIA is
'almacena los datos de las enfermedades de la paceinte embarazada.';

/*==============================================================*/
/* Table: SHCP_PAR_PRESENT                                      */
/*==============================================================*/
create table SHCP_PAR_PRESENT (
   ID           SERIAL               not null,
   ID_ADMISION_PARTO    INT4                 not null,
   PRES_EDAD_GESTA_SEM  INT4                 null,
   PRES_EDAD_GESTA_DIAS INT4                 null,
   PRES_BASADO_EN       CHAR(1)              null,
   PRES_PRESENT_SITUACION CHAR(1)              null,
   PRES_TAM_FETAL_ACORDE CHAR(1)              null,
   PRES_ACOMP_TRABAJO_PARTO CHAR(1)              null,
   PRES_ACOMP_PARTO     CHAR(1)              null,
   constraint PK_SHCP_PAR_PRESENT primary key (ID)
);

comment on table SHCP_PAR_PRESENT is
'almacena los datos de de la presentacion de la paciente en el paso admision por parto.';

/*==============================================================*/
/* Table: SHCP_PAR_PUERPERIO                                    */
/*==============================================================*/
create table SHCP_PAR_PUERPERIO (
   ID         SERIAL               not null,
   ID_ADMISION_PARTO    INT4                 not null,
   PUER_FECHA           DATE                 null,
   PUER_HORA            TIME                 null,
   PUER_TEMP            NUMERIC(2,1)         null,
   PUER_PA_SISTOLE      CHAR(3)              null,
   PUER_PA_DIASTOLE     CHAR(3)              null,
   PUER_PULSO           INT4                 null,
   PUER_INVOLUCION      VARCHAR(25)          null,
   PUER_LOQUIOS         VARCHAR(25)          null,
   PUER_ANTIRUBEO       CHAR(1)              null,
   PUER_GLOBULINA_ANTID CHAR(1)              null,
   constraint PK_SHCP_PAR_PUERPERIO primary key (ID)
);

comment on table SHCP_PAR_PUERPERIO is
'almacena los datos del puerperio de la paciente que acaba de salir del parto.';

/*==============================================================*/
/* Table: SHCP_PAR_RECIEN_NACIDO                                */
/*==============================================================*/
create table SHCP_PAR_RECIEN_NACIDO (
   ID     SERIAL               not null,
   ID_ADMISION_PARTO    INT4                 not null,
   REN_ORDEN            CHAR(1)              null,
   REN_SEXO             CHAR(1)              null,
   REN_PESO             INT4                 null,
   REN_PESO_MEN2500     CHAR(1)              null,
   REN_PESO_MAY4000     CHAR(1)              null,
   REN_PERIMETRO_CEFAL  NUMERIC(2,1)         null,
   REN_LONGITUD         NUMERIC(2,1)         null,
   REN_EDAD_GEST_SEM    INT4                 null,
   REN_EDAD_GEST_DIAS   INT4                 null,
   REN_CALCULADO_POR    CHAR(1)              null,
   REN_PESO_EDAD_GEST   CHAR(1)              null,
   REN_APGAR_1MIN       CHAR(2)              null,
   REN_APGAR_5MIN       CHAR(2)              null,
   REN_REANIMA          CHAR(6)              null,
   REN_FALLECE_LUGAR_PARTO CHAR(1)              null,
   REN_REFERIDO         CHAR(1)              null,
   REN_DEFECT_CONGE     CHAR(1)              null,
   REN_OTRO_DEFECT_CONGE CHAR(3)              null,
   REN_VIH_EXPUESTO     CHAR(1)              null,
   REN_VIH_TRATAMIENT   CHAR(1)              null,
   REN_MECONIO_1DIA     CHAR(1)              null,
   REN_NEO_ATEND_POR    CHAR(1)              null,
   REN_ATEND_NEO        INT8                 null,
   constraint PK_SHCP_PAR_RECIEN_NACIDO primary key (ID)
);

comment on table SHCP_PAR_RECIEN_NACIDO is
'almacena datos del recien nacido.';

/*==============================================================*/
/* Table: SHCP_PAR_ROTURA_MEMBRANA                              */
/*==============================================================*/
create table SHCP_PAR_ROTURA_MEMBRANA (
   ID   SERIAL               not null,
   ID_ADMISION_PARTO    INT4                 not null,
   ROTU_EXISTENCIA      CHAR(1)              null,
   ROTU_FECHA           DATE                 null,
   ROTU_HORA            TIME                 null,
   ROTU_MEN_37SEM       CHAR(1)              null,
   ROTU_MAY_IGUAL_18HRS CHAR(1)              null,
   ROTU_TEMP            NUMERIC(2,1)         null,
   ROTURA_TEMP_MAY_IGUAL_38C CHAR(1)              null,
   constraint PK_SHCP_PAR_ROTURA_MEMBRANA primary key (ID)
);

comment on table SHCP_PAR_ROTURA_MEMBRANA is
'guarda los datos relacionados a la rotura de membrana de la paciente al ingresar al parto. ';

/*==============================================================*/
/* Table: SHCP_PAR_TAMIZAJE_NEONATAL                            */
/*==============================================================*/
create table SHCP_PAR_TAMIZAJE_NEONATAL (
   ID          SERIAL               not null,
   ID_RECIEN_NACIDO     INT4                 not null,
   TNEO_VDRL            CHAR(1)              null,
   TNEO_VDRL_TRATAMIENT CHAR(1)              null,
   TNEO_TSH             CHAR(1)              null,
   TNEO_HBPATIA         CHAR(1)              null,
   TNEO_BILIRRUB        CHAR(1)              null,
   TNEO_TOXOIGM         CHAR(1)              null,
   constraint PK_SHCP_PAR_TAMIZAJE_NEONATAL primary key (ID)
);

comment on table SHCP_PAR_TAMIZAJE_NEONATAL is
'guarda los registros del tamizaje de un recien nacido.';

/*==============================================================*/
/* Table: SHCP_PAR_TRABAJO_PARTO                                */
/*==============================================================*/
create table SHCP_PAR_TRABAJO_PARTO (
   ID    SERIAL               not null,
   ID_ADMISION_PARTO    INT4                 null,
   TRAB_PARTOGRAMA      CHAR(1)              null,
   TRAB_HORA            TIME                 null,
   TRAB_POSICION        CHAR(3)              null,
   TRAB_PA_SISTOLE      CHAR(3)              null,
   TRAB_PA_DIASTOLE     CHAR(3)              null,
   TRAB_PULSO           INT4                 null,
   TRAB_CONTRAC         INT4                 null,
   TRAB_DILATACION      INT4                 null,
   TRAB_ALTURA_PRESENT  CHAR(1)              null,
   TRAB_VARIEDAD_POSIC  CHAR(4)              null,
   TRAB_MECONIO         CHAR(1)              null,
   TRAB_FCF_DIPS        INT4                 null,
   constraint PK_SHCP_PAR_TRABAJO_PARTO primary key (ID)
);

comment on table SHCP_PAR_TRABAJO_PARTO is
'almacena los datos del trabajo de parto de una embarazada.';

/*==============================================================*/
/* Table: SHCP_PRE_PACIENTE                                     */
/*==============================================================*/
create table SHCP_PRE_PACIENTE (
   ID     SERIAL               not null,
   ID_EXP_MATERNO       CHAR(15)             not null,
   PRE_FECHA            DATE                 null,
   PRE_PESO_PTE         NUMERIC(3,1)         null,
   PRE_TALLA_PTE        INT4                 null,
   PRE_TEMP_PTE         NUMERIC(2,1)         null,
   PRE_PA_SISTOLE       CHAR(3)              null,
   PRE_PA_DIASTOLE      CHAR(3)              null,
   PRE_DESTINO_PTE      CHAR(1)              null,
   PRE_DETALLE_OBSER    VARCHAR(150)         null,
   constraint PK_SHCP_PRE_PACIENTE primary key (ID)
);

comment on table SHCP_PRE_PACIENTE is
'almacena los datos de la preparacion de la paciente a atender.';

alter table RELATIONSHIP_62
   add constraint FK_RELATION_RELATIONS_SHCP_PAR2 foreign key (ID_PATOLOGIA_PACIENTE)
      references SHCP_PAR_CTL_PATOLOGIA (ID)
      on delete restrict on update restrict;

alter table RELATIONSHIP_62
   add constraint FK_RELATION_RELATIONS_SHCP_PAR4 foreign key (ID_RECIEN_NACIDO)
      references SHCP_PAR_RECIEN_NACIDO (ID)
      on delete restrict on update restrict;

alter table RELATIONSHIP_63
   add constraint FK_RELATION_RELATIONS_SHCP_PAR foreign key (ID_PATOLOGIA_PACIENTE)
      references SHCP_PAR_CTL_PATOLOGIA (ID)
      on delete restrict on update restrict;

alter table RELATIONSHIP_63
   add constraint FK_RELATION_RELATIONS_SHCP_PAR3 foreign key (ID_PATOLOGIA)
      references SHCP_PAR_PATOLOGIA (ID)
      on delete restrict on update restrict;

alter table RELATIONSHIP_65
   add constraint FK_RELATION_SHCP_DOC foreign key (ID_PREGUNTA)
      references SHCP_DOC_CTL_PREGUNTA (ID)
      on delete restrict on update restrict;

alter table RELATIONSHIP_65
   add constraint FK_SHCP_DOC foreign key (ID_RESULTADO)
      references SHCP_DOC_RESULTADO (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_ADMISION_PROCEDEN
   add constraint FK_SHCP_ABO_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_ATENCION
   add constraint FK_SHCP_ABO6 foreign key (ID_POST_PROCED)
      references SHCP_ABO_POST_PROCED (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_EGRESO
   add constraint FK_SHCP_ABO7 foreign key (ID_ADMIN_PROCEDEN)
      references SHCP_ABO_ADMISION_PROCEDEN (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_POST_PROCED
   add constraint FK_SHCP_ABO5_ foreign key (ID_ADMIN_PROCEDEN)
      references SHCP_ABO_ADMISION_PROCEDEN (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_PREPROCED1
   add constraint FK_SHCP_ABO9 foreign key (ID_ADMIN_PROCEDEN)
      references SHCP_ABO_ADMISION_PROCEDEN (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_PREPROCED2
   add constraint FK_SHCP_ABO8 foreign key (ID_PREPROCED1)
      references SHCP_ABO_PREPROCED1 (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_PREPROCED3
   add constraint FK_SHCP_ABO10_ foreign key (ID_PREPROCED1)
      references SHCP_ABO_PREPROCED1 (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_PREPROCED3
   add constraint FK_SHCP_ABO2 foreign key (ID_CIE10)
      references SHCP_ABO_CTL_CIE10 (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_PROCED1
   add constraint FK_SHCP_ABO4 foreign key (ID_ADMIN_PROCEDEN)
      references SHCP_ABO_ADMISION_PROCEDEN (ID)
      on delete restrict on update restrict;

alter table SHCP_ABO_PROCED2
   add constraint FK_SHCP_ABO3 foreign key (ID_PROCED1)
      references SHCP_ABO_PROCED1 (ID)
      on delete restrict on update restrict;
	  
alter table SHCP_CON_PRENATAL
   add constraint FK_SHCP_CON_REFERENCE_SHCP foreign key (ID_SIGNO_ALARMA)
      references SHCP_CON_CTL_SIGNO_ALARMA (ID)
      on delete restrict on update restrict;
	  
alter table SHCP_CON_PRENATAL
   add constraint FK_SHCP_CON_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_DOC_EXAFISICO
   add constraint FK_SHCP_DOC_RELATIONS_SHCP_DOC foreign key (ID_HOJA_POST)
      references SHCP_DOC_HOJA_POSTPARTO (ID)
      on delete restrict on update restrict;

alter table SHCP_DOC_HOJA_POSTPARTO
   add constraint FK_SHCP_DOC_HOJA_POST_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_DOC_PLAN_PARTO
   add constraint FK_SHCP_DOC_PLAN_PART_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_DOC_RESULTADO
   add constraint FK_SHCP_DOC_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_INS_ANTECEDENT_OBSTE
   add constraint FK_SHCP_INS_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_INS_ANTE_ENFERMEDAD
   add constraint FK_SHCP_INS7 foreign key (ID_ENFERMEDAD)
      references SHCP_INS_CTL_ENFERMEDAD (ID)
      on delete restrict on update restrict;

alter table SHCP_INS_ANTE_ENFERMEDAD
   add constraint FK_SHCP_INS9 foreign key (ID_ANTECEDENT_OBSTE)
      references SHCP_INS_ANTECEDENT_OBSTE (ID)
      on delete restrict on update restrict;

alter table SHCP_INS_EXAMEN
   add constraint FK_SHCP_INS_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_INS_GESTACION_ACTUAL
   add constraint FK_SHCP_INS_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_INS_SIDA
   add constraint FK_SHCP_INS_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_INS_SIFILIS
   add constraint FK_SHCP_INS_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_INS_VACUNACION
   add constraint FK_SHCP_INS_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_ADMISION
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_EGRESO_MATERNO
   add constraint FK_SHCP_PAR9 foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_EGR_RECIEN_NACIDO
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_PAR5 foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_NACIMIENTO
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_PAR4 foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_NACIMIENTO
   add constraint FK_SHCP_PAR2 foreign key (ID_INDICACION_PARTO)
      references SHCP_PAR_CTL_INDICACION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_PATOLOGIA
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_PAR foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_PRESENT
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_PAR7 foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_PUERPERIO
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_PAR2 foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_RECIEN_NACIDO
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_PAR3 foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_ROTURA_MEMBRANA
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_PAR8 foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_TAMIZAJE_NEONATAL
   add constraint FK_SHCP_PAR10 foreign key (ID_RECIEN_NACIDO)
      references SHCP_PAR_RECIEN_NACIDO (ID)
      on delete restrict on update restrict;

alter table SHCP_PAR_TRABAJO_PARTO
   add constraint FK_SHCP_PAR_RELATIONS_SHCP_PAR6 foreign key (ID_ADMISION_PARTO)
      references SHCP_PAR_ADMISION (ID)
      on delete restrict on update restrict;

alter table SHCP_PRE_PACIENTE
   add constraint FK_SHCP_PRE_RELATIONS_SHCP_EXP foreign key (ID_EXP_MATERNO)
      references SHCP_EXP_MATERNO (ID)
      on delete restrict on update restrict;

