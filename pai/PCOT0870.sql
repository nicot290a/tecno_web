/* ************************************************************************
   Nombre:  PCOT0870
   Autor:   Sebastian Rodriguez
   Fecha:   23/06/2020
   Descripcion: Envia marca de venta MS a los plu con stock que la perdieron;

   Parametros:  
   ************************************************************************/

set serveroutput on
set echo off
set verify off
set feedback off

spool &1

declare
fechapro char(8);
/* ********************************************************
   PROCEDIMIENTOS
   ****************************************************** */
Begin
dbms_output.enable(999999);
dbms_output.Put_Line('INICIO:'||to_char(sysdate,'DD/MM/YYYY HH24:mi:ss'));
PCOT0870;
dbms_output.Put_Line('FIN:'||to_char(sysdate,'DD/MM/YYYY HH24:mi:ss'));
end;
/
spool off
quit